<?php
/**
 * R5 Action Set Generator
 * Produces docs/r5.img.actionset.md
 * MNC: no application files modified.
 *
 * Priority levels:
 *   P0 — Replace immediately: slot holds an Initial image (pre-migration quality)
 *   P1 — Replace immediately: slot holds a small/old image (<200k) mislabeled
 *        as R1/R2/R3 because it was copied with a new timestamp
 *   P2 — Refresh: slot holds R1, R2, or R3 — acceptable but not new
 *   Fill — Unplaced unique file in the primary dir, available for carousel addition
 *
 * Cross-sell slots (image from a different dir than this page's primary dir)
 * are included in the table and flagged so they can be tracked separately.
 *
 * Pages are sorted: most urgent first (P0+P1 count descending), then by page name.
 */

$pagesRoot  = __DIR__ . '/../resources/views/pages';
$imagesRoot = __DIR__ . '/../public/images';
$docsRoot   = __DIR__ . '/../docs';
$datesFile  = __DIR__ . '/../public/image.dates.txt';
$smallFile  = __DIR__ . '/../public/images/out.200k.txt';

// ── Parse image.dates.txt ─────────────────────────────────────────────────
function parseDatesFile(string $path): array {
    $lookup = [];
    $lines  = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $curDir = '';
    foreach ($lines as $line) {
        if (preg_match('#^\./([^:]*):$#', $line, $m)) { $curDir = $m[1]; continue; }
        if (!preg_match('/^-\S+\s+\d+\s+\S+\s+\S+\s+(\d+)\s+(\w{3})\s+(\d+)\s+([\d:]+)\s+(.+)$/', $line, $m)) continue;
        $size = (int)$m[1]; $mon = $m[2]; $day = (int)$m[3]; $timeOrYr = $m[4]; $filename = trim($m[5]);
        $year = (strpos($timeOrYr, ':') !== false) ? 2026 : (int)$timeOrYr;
        $ts   = (int)strtotime($mon . ' ' . $day . ' ' . $year);
        $key  = strtolower(($curDir !== '' ? $curDir . '/' : '') . $filename);
        $lookup[$key] = ['date' => $mon . ' ' . $day . ', ' . $year, 'ts' => $ts, 'size' => $size];
    }
    return $lookup;
}

// ── Round detection ────────────────────────────────────────────────────────
function roundFromDateSize(int $ts, int $size): string {
    $may11 = mktime(0,0,0,5,11,2026); $may18 = mktime(0,0,0,5,18,2026);
    $jun04 = mktime(0,0,0,6, 4,2026); $jun25 = mktime(0,0,0,6,25,2026);
    $jun26 = mktime(0,0,0,6,26,2026);
    if ($ts < $may11) return ($size >= 400000) ? 'R1' : 'Initial';
    if ($ts < $may18) return 'R1';
    if ($ts < $jun04) return 'R2';
    if ($ts < $jun25) return 'R3';
    if ($ts < $jun26) return 'R4';
    return 'R5';
}

function getFileInfo(string $dir, string $filename, array $lookup): array {
    $key = strtolower(($dir !== '' ? $dir . '/' : '') . $filename);
    if (!isset($lookup[$key])) return ['date' => '?', 'round' => '?', 'size' => 0];
    $e = $lookup[$key];
    if (preg_match('/-r5\.jpg$/i', $filename))      $round = 'R5';
    elseif (preg_match('/-r4\.jpg$/i', $filename))  $round = 'R4';
    elseif (preg_match('/-r3\.jpg$/i', $filename))  $round = 'R3';
    else $round = roundFromDateSize($e['ts'], $e['size']);
    return ['date' => $e['date'], 'round' => $round, 'size' => $e['size']];
}

// ── Parse blade file into slot => image-path map ──────────────────────────
function parsePage(string $content): array {
    $slots = []; $lines = explode("\n", $content);
    $component = null; $slideIndex = 0; $cardIndex = 0; $carouselIdx = 0;
    foreach ($lines as $line) {
        if      (preg_match('/<x-(?:sections\.category-hero|sections\.hero-banner)\b/', $line)) { $component = 'banner'; }
        elseif  (preg_match('/<x-ui\.carousel-rotating-images\b/', $line))                      { $component = 'carousel'; $carouselIdx = 0; }
        elseif  (preg_match('/<x-sections\.card-image-with-text\b/', $line))                    { $cardIndex++; $component = 'card-' . $cardIndex; }
        elseif  (preg_match('/<x-sections\.card-detailed-info\b/', $line))                      { $component = 'detailed-info'; }
        elseif  (preg_match('/<x-sections\.card-2image-with-text\b/', $line))                   { $component = '2image'; }
        elseif  (preg_match('/<x-ui\.card-banner-slide-in\b/', $line))                          { $slideIndex++; $component = ($slideIndex % 2 === 1) ? 'slide-L' : 'slide-R'; }
        if ($component === null) continue;
        if ($component === 'carousel' && preg_match("#'src'\s*=>\s*'(/images/[^']+\.jpg)'#", $line, $m)) {
            $carouselIdx++; $slots['carousel-' . $carouselIdx] = $m[1];
        }
        if (preg_match('/\bimage="(\/images\/[^"]+\.jpg)"/', $line, $m)) {
            if      ($component === 'banner')            $slots['banner']   = $m[1];
            elseif  (strpos($component, 'card-') === 0) $slots[$component] = $m[1];
            elseif  ($component === 'slide-L')           $slots['slide-L']  = $m[1];
            elseif  ($component === 'slide-R')           $slots['slide-R']  = $m[1];
        }
        if (preg_match('/\bimage1="(\/images\/[^"]+\.jpg)"/', $line, $m)) {
            if      ($component === 'detailed-info') $slots['detailed-info-1'] = $m[1];
            elseif  ($component === '2image')        $slots['2image-1']        = $m[1];
        }
        if (preg_match('/\bimage2="(\/images\/[^"]+\.jpg)"/', $line, $m)) {
            if      ($component === 'detailed-info') $slots['detailed-info-2'] = $m[1];
            elseif  ($component === '2image')        $slots['2image-2']        = $m[1];
        }
    }
    return $slots;
}

function slotLabel(string $key): string {
    $map = ['banner'=>'Banner','detailed-info-1'=>'Detailed-info 1','detailed-info-2'=>'Detailed-info 2',
            '2image-1'=>'2-image 1','2image-2'=>'2-image 2','slide-L'=>'Slide-L','slide-R'=>'Slide-R'];
    if (isset($map[$key])) return $map[$key];
    if (preg_match('/^carousel-(\d+)$/', $key, $m)) {
        $n = (int)$m[1]; return 'Carousel ' . $n . ($n <= 4 ? ' (base)' : ' (overage)');
    }
    if (preg_match('/^card-(\d+)$/', $key, $m)) return 'Card ' . $m[1];
    return ucfirst($key);
}

function primaryDir(array $slots): string {
    if (isset($slots['banner']) && preg_match('#^/images/([^/]+)/#', $slots['banner'], $m)) return $m[1];
    $c = [];
    foreach ($slots as $path) {
        if (preg_match('#^/images/([^/]+)/#', $path, $m)) $c[$m[1]] = ($c[$m[1]] ?? 0) + 1;
    }
    if (empty($c)) return ''; arsort($c); return array_key_first($c);
}

function getUnplacedUnique(array $slots, string $primDir, string $imagesRoot, array $lookup): array {
    $dir = $imagesRoot . '/' . $primDir;
    if (!is_dir($dir)) return [];
    $all    = array_map('basename', glob($dir . '/*.jpg') ?: []);
    $placed = array_map(fn($p) => strtolower(basename($p)), array_values($slots));
    $unplacedNames = array_filter($all, fn($f) => !in_array(strtolower($f), $placed));
    $placedSizeMap = [];
    foreach (array_values($slots) as $imgPath) {
        $fn = basename($imgPath);
        $imgDir = preg_match('#^/images/([^/]+)/#', $imgPath, $dm) ? $dm[1] : $primDir;
        $key = strtolower($imgDir . '/' . $fn);
        $sz  = $lookup[$key]['size'] ?? 0;
        if ($sz > 0) $placedSizeMap[$sz] = $fn;
    }
    $unique = [];
    foreach (array_values($unplacedNames) as $f) {
        $key = strtolower($primDir . '/' . $f);
        $sz  = $lookup[$key]['size'] ?? 0;
        if ($sz > 0 && isset($placedSizeMap[$sz])) continue; // content-dup, skip
        $unique[] = $f;
    }
    return $unique;
}

// ── Priority classifier ────────────────────────────────────────────────────
// R1-R5 are all acceptable. Only Initial and small/old mislabeled need action.
function priority(string $round, bool $isSmall): string {
    if ($round === 'Initial') return 'P0';
    if ($isSmall)             return 'P1';
    return 'OK';
}

// ── Exclude list (same as review generator) ────────────────────────────────
$exclude = [
    'index.blade.php','about.blade.php','cart.blade.php','checkout.blade.php',
    'collection.blade.php','contact.blade.php','demo.blade.php','demo-premium.blade.php',
    'home.blade.php','order-confirmation.blade.php','page-management.blade.php',
    'portfolio.blade.php','privacy-policy.blade.php','product.blade.php',
    'promotional-items.blade.php','reviews.blade.php','service-areas.blade.php',
    'terms-of-use.blade.php','top5pct-merchandise.blade.php',
    'articles.blade.php','resources.blade.php','show.blade.php','modals.blade.php',
    'glitter-shirts.blade.php','custom-storefronts.blade.php','coronavirus-signs.blade.php',
];

// ── Shared catch-all dirs — suppress Fill suggestions ─────────────────────
// These dirs are used by multiple pages and contain generic/mixed content.
// Unplaced files in these dirs are not page-specific and should not be
// suggested as carousel fills.
$noFillDirs = ['custom-shirts'];

// ── Boot ───────────────────────────────────────────────────────────────────
$fileLookup = parseDatesFile($datesFile);

$smallFiles = [];
if (file_exists($smallFile)) {
    foreach (file($smallFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if (preg_match('/\s+(\S+\.(?:jpg|jpeg|png|gif|avif))$/i', $line, $m)) {
            $smallFiles[strtolower(basename($m[1]))] = true;
        }
    }
}

$iter = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($pagesRoot));
$pageFiles = [];
foreach ($iter as $file) {
    if (!$file->isFile() || $file->getExtension() !== 'php') continue;
    if (in_array($file->getFilename(), $exclude)) continue;
    $pageFiles[] = $file->getPathname();
}
sort($pageFiles);

// ── Per-page analysis ──────────────────────────────────────────────────────
$pages = [];
foreach ($pageFiles as $pagePath) {
    $relative = str_replace($pagesRoot . '/', '', $pagePath);
    $pageName = str_replace('.blade.php', '', basename($pagePath));
    $pageUrl  = '/' . str_replace('.blade.php', '', $relative);
    $content  = file_get_contents($pagePath);
    $slots    = parsePage($content);
    if (empty($slots)) continue;

    $primDir = primaryDir($slots);
    $title   = ucwords(str_replace(['-','_'], ' ', $pageName));

    $actions    = []; // priority => [rows]
    $p0 = $p1 = $p2 = 0;

    foreach ($slots as $slotKey => $imgPath) {
        $filename = basename($imgPath);
        $dir      = preg_match('#^/images/([^/]+)/#', $imgPath, $dm) ? $dm[1] : '?';
        $info     = getFileInfo($dir, $filename, $fileLookup);
        $round    = $info['round'];
        $isSmall  = isset($smallFiles[strtolower($filename)]);
        $isXS     = ($dir !== $primDir && $dir !== '?');
        $pri      = priority($round, $isSmall);

        if ($pri === 'OK') continue;

        $smallTag = $isSmall ? ' ⚠small' : '';
        $xsTag    = $isXS   ? ' [cross-sell from ' . $dir . '/]' : '';

        $actions[] = [
            'priority' => $pri,
            'slot'     => slotLabel($slotKey),
            'file'     => $filename,
            'round'    => $round . $smallTag,
            'xs'       => $xsTag,
        ];

        if ($pri === 'P0') $p0++;
        elseif ($pri === 'P1') $p1++;
    }

    // Unplaced unique files — suppressed for shared catch-all dirs
    $fills     = in_array($primDir, $noFillDirs) ? [] : getUnplacedUnique($slots, $primDir, $imagesRoot, $fileLookup);
    $fillCount = count($fills);

    // Sort actions: P0 first, P1, P2
    usort($actions, fn($a, $b) => strcmp($a['priority'], $b['priority']));

    $pages[] = [
        'title'    => $title,
        'relative' => $relative,
        'url'      => $pageUrl,
        'primDir'  => $primDir,
        'actions'  => $actions,
        'fills'    => $fills,
        'p0'       => $p0,
        'p1'       => $p1,
        'p2'       => $p2,
        'fillCount'=> $fillCount,
    ];
}

// Sort pages: most urgent first (P0+P1 desc), then name
usort($pages, function($a, $b) {
    $urgA = $a['p0'] * 100 + $a['p1'];
    $urgB = $b['p0'] * 100 + $b['p1'];
    if ($urgA !== $urgB) return $urgB - $urgA;
    return strcmp($a['title'], $b['title']);
});

// ── Totals ─────────────────────────────────────────────────────────────────
$totP0 = $totP1 = $totFill = 0;
foreach ($pages as $p) { $totP0 += $p['p0']; $totP1 += $p['p1']; $totFill += $p['fillCount']; }

// ── Build markdown ─────────────────────────────────────────────────────────
$md  = "# R5 Image Action Set\n\n";
$md .= "**Generated:** Jul 4, 2026  |  Based on `docs/r5.image.review.md`\n\n";
$md .= "## Priority Guide\n\n";
$md .= "| Code | Meaning | Action |\n|---|---|---|\n";
$md .= "| **P0** | Slot holds an Initial image (pre-migration, smallest/oldest) | Replace with new photo — highest urgency |\n";
$md .= "| **P1** | Slot holds a small/old image (<200k) mislabeled as R1/R2/R3 (copy timestamp) | Replace with new photo — same urgency as P0 |\n";
$md .= "| **Fill** | Unplaced unique file in the primary dir | Add to carousel — no new photo needed |\n\n";
$md .= "> **R1 through R5 are all acceptable.** Only Initial and small/old (<200k) mislabeled slots require replacement.\n\n";
$md .= "> **Cross-sell slots** (image borrowed from another category dir) are included and flagged. ";
$md .= "Replacement depends on the source page, not this one.\n\n";
$md .= "## Totals\n\n";
$md .= "| Priority | Count |\n|---|---|\n";
$md .= "| P0 — Replace (Initial) | {$totP0} |\n";
$md .= "| P1 — Replace (small/old mislabeled) | {$totP1} |\n";
$md .= "| Fill — Carousel add (unplaced unique) | {$totFill} |\n\n";
$md .= "---\n\n";

foreach ($pages as $p) {
    $hasWork = !empty($p['actions']) || !empty($p['fills']);
    if (!$hasWork) continue;

    $urgLine = "P0: {$p['p0']}  |  P1: {$p['p1']}  |  Fill: {$p['fillCount']}";
    $md .= "## {$p['title']}\n\n";
    $md .= "**File:** `{$p['relative']}`  |  **URL:** `{$p['url']}`  \n";
    $md .= "**Primary dir:** `public/images/{$p['primDir']}/`  |  {$urgLine}\n\n";

    if (!empty($p['actions'])) {
        $md .= "| Priority | Slot | Filename | Round | Notes |\n";
        $md .= "|---|---|---|---|---|\n";
        foreach ($p['actions'] as $row) {
            $md .= "| {$row['priority']} | {$row['slot']} | `{$row['file']}` | {$row['round']} | {$row['xs']} |\n";
        }
        $md .= "\n";
    }

    if (!empty($p['fills'])) {
        $md .= "**Fill — add to carousel ({$p['fillCount']} unplaced unique files):**  \n";
        foreach ($p['fills'] as $f) {
            $fi = getFileInfo($p['primDir'], $f, $fileLookup);
            $small = isset($smallFiles[strtolower($f)]) ? '  ⚠ small/old (<200k)' : '';
            $md .= "- `{$f}` — {$fi['round']}  ({$fi['date']}){$small}\n";
        }
        $md .= "\n";
    }

    $md .= "---\n\n";
}

// ── Pages with no action needed ────────────────────────────────────────────
$clean = array_filter($pages, fn($p) => empty($p['actions']) && empty($p['fills']));
if (!empty($clean)) {
    $md .= "## Pages With No Action Needed\n\n";
    foreach ($clean as $p) {
        $md .= "- `{$p['relative']}` — all slots R4/R5, no unplaced unique files\n";
    }
    $md .= "\n";
}

file_put_contents($docsRoot . '/r5.img.actionset.md', $md);
echo "Wrote docs/r5.img.actionset.md\n";
echo "P0={$totP0}  P1={$totP1}  Fill={$totFill}\n";
echo "Pages with work: " . count(array_filter($pages, fn($p) => !empty($p['actions']) || !empty($p['fills']))) . "\n";
echo "Pages clean: " . count($clean) . "\n";
