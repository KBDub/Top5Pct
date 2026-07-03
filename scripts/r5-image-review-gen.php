<?php
/**
 * R5 Image Review Generator — MNC
 * Scans all non-index product pages, extracts every image slot,
 * detects round, cross-sell, and collision files.
 * Writes docs/r5.image.review.md and docs/r5.image.review.csv
 */

$pagesRoot  = __DIR__ . '/../resources/views/pages';
$imagesRoot = __DIR__ . '/../public/images';
$docsRoot   = __DIR__ . '/../docs';

// ── Non-product pages to skip ──────────────────────────────────────────────
$exclude = [
    'index.blade.php',              // all index/landing pages
    'about.blade.php',
    'cart.blade.php',
    'checkout.blade.php',
    'collection.blade.php',
    'contact.blade.php',
    'demo.blade.php',
    'demo-premium.blade.php',
    'home.blade.php',
    'order-confirmation.blade.php',
    'page-management.blade.php',
    'portfolio.blade.php',
    'privacy-policy.blade.php',
    'product.blade.php',
    'promotional-items.blade.php',  // category landing
    'reviews.blade.php',
    'service-areas.blade.php',
    'terms-of-use.blade.php',
    'top5pct-merchandise.blade.php',
    'articles.blade.php',
    'resources.blade.php',
    'show.blade.php',
    'modals.blade.php',
];

// ── Round detection ────────────────────────────────────────────────────────
function detectRound(string $filename): array {
    if (preg_match('/-r5\.jpg$/i', $filename)) return ['R5', 'Jun 30, 2026'];
    if (preg_match('/-r4\.jpg$/i', $filename)) return ['R4', 'Jun 25, 2026'];
    if (preg_match('/-r3\.jpg$/i', $filename)) return ['R3', 'Jun 4-9, 2026'];
    return ['≤R2', '≤Jun 3, 2026'];
}

// ── Collision detection ────────────────────────────────────────────────────
// Returns array of collision filenames that exist on disk
function detectCollisions(string $imgDir, string $filename): array {
    $base = preg_replace('/-r[345]\.jpg$/i', '.jpg', $filename);
    $stem = preg_replace('/\.jpg$/i', '', $base);
    $candidates = [
        $stem . '.jpg',
        $stem . '-r3.jpg',
        $stem . '-r4.jpg',
        $stem . '-r5.jpg',
    ];
    $collisions = [];
    foreach ($candidates as $c) {
        if (strtolower($c) !== strtolower($filename) && file_exists($imgDir . '/' . $c)) {
            $collisions[] = $c;
        }
    }
    return $collisions;
}

// ── Parse a blade file into slot => images map ─────────────────────────────
function parsePage(string $content, string $primaryDir): array {
    $slots       = [];
    $lines       = explode("\n", $content);
    $component   = null;
    $slideIndex  = 0;
    $cardIndex   = 0;
    $carouselIdx = 0;

    foreach ($lines as $line) {

        // ── Detect component openings ──────────────────────────────────────
        if (preg_match('/<x-(?:sections\.category-hero|sections\.hero-banner)\b/', $line)) {
            $component = 'banner';

        } elseif (preg_match('/<x-ui\.carousel-rotating-images\b/', $line)) {
            $component   = 'carousel';
            $carouselIdx = 0;

        } elseif (preg_match('/<x-sections\.card-image-with-text\b/', $line)) {
            $cardIndex++;
            $component = 'card-' . $cardIndex;

        } elseif (preg_match('/<x-sections\.card-detailed-info\b/', $line)) {
            $component = 'detailed-info';

        } elseif (preg_match('/<x-sections\.card-2image-with-text\b/', $line)) {
            $component = '2image';

        } elseif (preg_match('/<x-ui\.card-banner-slide-in\b/', $line)) {
            $slideIndex++;
            $component = ($slideIndex % 2 === 1) ? 'slide-L' : 'slide-R';
        }

        // ── Detect component closings ──────────────────────────────────────
        if (preg_match('/<\/x-sections\.card-image-with-text>/', $line) ||
            preg_match('/<\/x-sections\.card-detailed-info>/', $line) ||
            preg_match('/<\/x-sections\.card-2image-with-text>/', $line)) {
            // component closed — keep $component set until next open
        }

        // ── Extract image paths ────────────────────────────────────────────
        if ($component === null) continue;

        // Carousel: 'src' => '/images/dir/file.jpg'
        if ($component === 'carousel') {
            if (preg_match("#'src'\s*=>\s*'(/images/[^']+\.jpg)'#", $line, $m)) {
                $carouselIdx++;
                $slots['carousel-' . $carouselIdx] = $m[1];
            }
        }

        // image="..." attribute
        if (preg_match('/\bimage="(\/images\/[^"]+\.jpg)"/', $line, $m)) {
            if ($component === 'banner') {
                $slots['banner'] = $m[1];
            } elseif (strpos($component, 'card-') === 0) {
                $slots[$component] = $m[1];
            } elseif ($component === 'slide-L') {
                $slots['slide-L'] = $m[1];
            } elseif ($component === 'slide-R') {
                $slots['slide-R'] = $m[1];
            }
        }

        // image1="..." and image2="..."
        if (preg_match('/\bimage1="(\/images\/[^"]+\.jpg)"/', $line, $m)) {
            if ($component === 'detailed-info') {
                $slots['detailed-info-1'] = $m[1];
            } elseif ($component === '2image') {
                $slots['2image-1'] = $m[1];
            }
        }
        if (preg_match('/\bimage2="(\/images\/[^"]+\.jpg)"/', $line, $m)) {
            if ($component === 'detailed-info') {
                $slots['detailed-info-2'] = $m[1];
            } elseif ($component === '2image') {
                $slots['2image-2'] = $m[1];
            }
        }
    }

    return $slots;
}

// ── Build label for each slot ──────────────────────────────────────────────
function slotLabel(string $key): string {
    $map = [
        'banner'         => 'Banner',
        'detailed-info-1'=> 'Detailed-info 1',
        'detailed-info-2'=> 'Detailed-info 2',
        '2image-1'       => '2-image card 1',
        '2image-2'       => '2-image card 2',
        'slide-L'        => 'Slide-L',
        'slide-R'        => 'Slide-R',
    ];
    if (isset($map[$key])) return $map[$key];
    if (preg_match('/^carousel-(\d+)$/', $key, $m)) return 'Carousel ' . $m[1];
    if (preg_match('/^card-(\d+)$/', $key, $m))     return 'Card ' . $m[1];
    return ucfirst($key);
}

// ── Detect primary category dir from slot list ─────────────────────────────
function primaryDir(array $slots): string {
    $dirCount = [];
    foreach ($slots as $path) {
        if (preg_match('#^/images/([^/]+)/#', $path, $m)) {
            $dirCount[$m[1]] = ($dirCount[$m[1]] ?? 0) + 1;
        }
    }
    if (empty($dirCount)) return '';
    if (isset($dirCount[array_key_first($slots)])) {
        // Use banner dir if it exists
    }
    // Banner wins if present
    if (isset($slots['banner']) && preg_match('#^/images/([^/]+)/#', $slots['banner'], $m)) {
        return $m[1];
    }
    arsort($dirCount);
    return array_key_first($dirCount);
}

// ── Determine cross-sell status ────────────────────────────────────────────
function isCrossSell(string $path, string $primaryDir): bool {
    if (preg_match('#^/images/([^/]+)/#', $path, $m)) {
        return $m[1] !== $primaryDir;
    }
    return false;
}

// ── Count not-placed images ────────────────────────────────────────────────
function countNotPlaced(array $slots, string $primaryDir, string $imagesRoot): array {
    $dir = $imagesRoot . '/' . $primaryDir;
    if (!is_dir($dir)) return ['total' => 0, 'placed' => 0, 'not_placed' => 0, 'not_placed_files' => []];

    $allFiles   = glob($dir . '/*.jpg') ?: [];
    $placedFiles = [];
    foreach ($slots as $path) {
        $placedFiles[] = strtolower(basename($path));
    }

    $notPlaced = [];
    foreach ($allFiles as $f) {
        if (!in_array(strtolower(basename($f)), $placedFiles)) {
            $notPlaced[] = basename($f);
        }
    }

    return [
        'total'           => count($allFiles),
        'placed'          => count($placedFiles) - count(array_filter($placedFiles, fn($f) => !in_array($f, array_map('strtolower', array_map('basename', $allFiles))))),
        'not_placed'      => count($notPlaced),
        'not_placed_files'=> $notPlaced,
    ];
}

// ── Collect all blade files ────────────────────────────────────────────────
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($pagesRoot));
$pageFiles = [];
foreach ($iterator as $file) {
    if (!$file->isFile() || $file->getExtension() !== 'php') continue;
    $basename = $file->getFilename();
    if (in_array($basename, $exclude)) continue;
    $pageFiles[] = $file->getPathname();
}
sort($pageFiles);

// ── Process each page ──────────────────────────────────────────────────────
$allRows = []; // for CSV

$md  = "# R5 Image Review\n\n";
$md .= "**Generated:** Jun 30, 2026 | **Status:** Post-R5 placement audit\n";
$md .= "Category landing pages excluded. Collision file = alternate version of same base name.\n\n";
$md .= "**Round key:**  ≤R2 = Mar-Jun 3 2026 (no round suffix) | R3 = Jun 4-9 | R4 = Jun 25 | R5 = Jun 30\n\n";
$md .= "> **Note:** R5 images placed without a naming conflict have no version suffix and therefore show as ≤R2 here. ";
$md .= "Cross-reference with docs/r5.mig.md to confirm their actual round.\n\n";
$md .= "---\n\n";

$csv  = "Page Name,Blade File,Page URL,Primary Dir,Slot,Filename,Image Dir,Round,Date,Cross-sell,Collision File(s),";
$csv .= "Carousel Count,Not-placed Count,Not-placed Files\n";

foreach ($pageFiles as $pagePath) {
    $relative  = str_replace($pagesRoot . '/', '', $pagePath);
    $pageName  = str_replace('.blade.php', '', basename($pagePath));
    $pageUrl   = '/' . str_replace(['resources/views/pages/', '.blade.php'], '', str_replace($pagesRoot . '/', '', $pagePath));
    $content   = file_get_contents($pagePath);

    $slots     = parsePage($content, '');
    if (empty($slots)) continue; // skip pages with no images

    $primDir   = primaryDir($slots);
    $npData    = countNotPlaced($slots, $primDir, $imagesRoot);

    // Carousel count
    $carouselCount = 0;
    foreach ($slots as $key => $val) {
        if (strpos($key, 'carousel-') === 0) $carouselCount++;
    }

    $md .= "## " . ucwords(str_replace(['-', '_'], ' ', $pageName)) . "\n\n";
    $md .= "**File:** `{$relative}`  \n";
    $md .= "**URL:** `{$pageUrl}`  \n";
    $md .= "**Primary dir:** `public/images/{$primDir}/` | **Dir total:** {$npData['total']} | **Not placed:** {$npData['not_placed']}  \n";
    $md .= "**Carousel slots:** {$carouselCount}";
    if ($carouselCount > 4) $md .= " (" . ($carouselCount - 4) . " over base-4)";
    $md .= "\n\n";

    $md .= "| Slot | Filename | Dir | XS | Round | Date | Collision file(s) |\n";
    $md .= "|---|---|---|---|---|---|---|\n";

    foreach ($slots as $slotKey => $imgPath) {
        $filename    = basename($imgPath);
        $dir         = preg_match('#^/images/([^/]+)/#', $imgPath, $dm) ? $dm[1] : '?';
        [$round, $date] = detectRound($filename);
        $xs          = isCrossSell($imgPath, $primDir) ? 'Yes' : 'No';
        $dirPath     = $imagesRoot . '/' . $dir;
        $collisions  = file_exists($dirPath . '/' . $filename) ? detectCollisions($dirPath, $filename) : [];
        $collStr     = empty($collisions) ? 'none' : implode(', ', $collisions);
        $slotLbl     = slotLabel($slotKey);

        $md .= "| {$slotLbl} | `{$filename}` | {$dir} | {$xs} | {$round} | {$date} | {$collStr} |\n";

        // CSV row — not-placed data only on first slot row for the page
        $allRows[] = [
            $pageName,
            $relative,
            $pageUrl,
            $primDir,
            $slotLbl,
            $filename,
            $dir,
            $round,
            $date,
            $xs,
            $collStr,
            $carouselCount,
            $npData['not_placed'],
            implode(' | ', $npData['not_placed_files']),
        ];
    }

    if (!empty($npData['not_placed_files'])) {
        $md .= "\n**Not-placed files in `{$primDir}/`:**  \n";
        foreach ($npData['not_placed_files'] as $f) {
            [$rnd] = detectRound($f);
            $md   .= "- `{$f}` ({$rnd})\n";
        }
    }

    $md .= "\n---\n\n";
}

// ── Write files ────────────────────────────────────────────────────────────
file_put_contents($docsRoot . '/r5.image.review.md', $md);
echo "Wrote docs/r5.image.review.md\n";

// Build CSV with proper quoting
$csvLines = [rtrim($csv, "\n")];
foreach ($allRows as $row) {
    $escaped = array_map(function($cell) {
        $cell = str_replace('"', '""', $cell);
        if (str_contains($cell, ',') || str_contains($cell, '"') || str_contains($cell, "\n")) {
            $cell = '"' . $cell . '"';
        }
        return $cell;
    }, $row);
    $csvLines[] = implode(',', $escaped);
}
file_put_contents($docsRoot . '/r5.image.review.csv', implode("\n", $csvLines) . "\n");
echo "Wrote docs/r5.image.review.csv\n";

$pageCount = count(array_unique(array_column($allRows, 0)));
$rowCount  = count($allRows);
echo "Total: {$pageCount} pages, {$rowCount} image slots documented.\n";
