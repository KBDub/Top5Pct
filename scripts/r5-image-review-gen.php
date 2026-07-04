<?php
/**
 * R5 Image Review Generator
 * Generates docs/r5.image.review.md and docs/r5.image.review.csv
 * MNC: no application files modified.
 *
 * Fix (v2): Unplaced dup detection — if an unplaced file's byte size matches
 * any placed file on the same page, it is flagged as a content-dup of that
 * placed file, not a truly unique unplaced image.
 */

$pagesRoot  = __DIR__ . '/../resources/views/pages';
$imagesRoot = __DIR__ . '/../public/images';
$docsRoot   = __DIR__ . '/../docs';
$datesFile  = __DIR__ . '/../public/image.dates.txt';

// ── Parse image.dates.txt — returns ['dir/filename' => [date, ts, size]] ──
function parseDatesFile(string $path): array {
    $lookup = [];
    $lines  = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $curDir = '';

    foreach ($lines as $line) {
        if (preg_match('#^\./([^:]*):$#', $line, $m)) {
            $curDir = $m[1];
            continue;
        }
        // -perms links owner group SIZE MON DAY TIME/YEAR filename
        if (!preg_match('/^-\S+\s+\d+\s+\S+\s+\S+\s+(\d+)\s+(\w{3})\s+(\d+)\s+([\d:]+)\s+(.+)$/', $line, $m)) continue;
        $size     = (int)$m[1];
        $mon      = $m[2];
        $day      = (int)$m[3];
        $timeOrYr = $m[4];
        $filename = trim($m[5]);
        $year     = (strpos($timeOrYr, ':') !== false) ? 2026 : (int)$timeOrYr;
        $dateStr  = $mon . ' ' . $day . ', ' . $year;
        $ts       = (int)strtotime($mon . ' ' . $day . ' ' . $year);
        $key      = strtolower(($curDir !== '' ? $curDir . '/' : '') . $filename);
        $lookup[$key] = ['date' => $dateStr, 'ts' => $ts, 'size' => $size];
    }
    return $lookup;
}

// ── Round detection: suffix wins; fall back to date + size ─────────────────
// -r5 / -r4 / -r3 suffix = authoritative round (prepped ahead of placement).
// Unsuffixed files: date + size determine the round.
//   Initial = before May 11, 2026 AND file under 400 KB
//   R1      = May 11-17, 2026 (any size)  OR  before May 11 file >= 400 KB
//   R2      = May 18 - Jun 3, 2026
//   R3      = Jun 4 - Jun 24, 2026
//   R4      = Jun 25, 2026
//   R5      = Jun 26+, 2026
function roundFromDateSize(int $ts, int $size): string {
    $may11 = mktime(0, 0, 0, 5, 11, 2026);
    $may18 = mktime(0, 0, 0, 5, 18, 2026);
    $jun04 = mktime(0, 0, 0, 6,  4, 2026);
    $jun25 = mktime(0, 0, 0, 6, 25, 2026);
    $jun26 = mktime(0, 0, 0, 6, 26, 2026);

    if ($ts < $may11) return ($size >= 400000) ? 'R1' : 'Initial';
    if ($ts < $may18) return 'R1';   // May 11-17 = R1 regardless of size
    if ($ts < $jun04) return 'R2';
    if ($ts < $jun25) return 'R3';
    if ($ts < $jun26) return 'R4';
    return 'R5';
}

// ── Lookup file info from parsed table ────────────────────────────────────
function getFileInfo(string $dir, string $filename, array $lookup): array {
    $key = strtolower(($dir !== '' ? $dir . '/' : '') . $filename);
    if (!isset($lookup[$key])) return ['date' => '?', 'round' => '?', 'size' => 0];
    $e = $lookup[$key];

    // Suffix is authoritative — check it first
    if (preg_match('/-r5\.jpg$/i', $filename)) $round = 'R5';
    elseif (preg_match('/-r4\.jpg$/i', $filename)) $round = 'R4';
    elseif (preg_match('/-r3\.jpg$/i', $filename)) $round = 'R3';
    else $round = roundFromDateSize($e['ts'], $e['size']);

    return ['date' => $e['date'], 'round' => $round, 'size' => $e['size']];
}

// ── Collision / intentional-dup detection ─────────────────────────────────
// Same size = intentional-dup [dup]; different size = true conflict [collision]
function detectCollisions(string $imgDir, string $dirName, string $filename, array $lookup): string {
    $base = preg_replace('/-r[345]\.jpg$/i', '.jpg', $filename);
    $stem = preg_replace('/\.jpg$/i', '', $base);

    $thisKey  = strtolower($dirName . '/' . $filename);
    $thisSize = $lookup[$thisKey]['size'] ?? 0;
    $results  = [];

    foreach ([$stem.'.jpg', $stem.'-r3.jpg', $stem.'-r4.jpg', $stem.'-r5.jpg'] as $c) {
        if (strtolower($c) === strtolower($filename)) continue;
        if (!file_exists($imgDir . '/' . $c)) continue;
        $otherSize = $lookup[strtolower($dirName . '/' . $c)]['size'] ?? 0;
        $tag       = ($thisSize > 0 && $otherSize > 0 && $thisSize === $otherSize) ? '[dup]' : '[collision]';
        $results[] = $c . ' ' . $tag;
    }
    return empty($results) ? 'none' : implode(', ', $results);
}

// ── Parse blade file into ordered slot => image-path map ──────────────────
function parsePage(string $content): array {
    $slots       = [];
    $lines       = explode("\n", $content);
    $component   = null;
    $slideIndex  = 0;
    $cardIndex   = 0;
    $carouselIdx = 0;

    foreach ($lines as $line) {
        if      (preg_match('/<x-(?:sections\.category-hero|sections\.hero-banner)\b/', $line)) { $component = 'banner'; }
        elseif  (preg_match('/<x-ui\.carousel-rotating-images\b/', $line))                      { $component = 'carousel'; $carouselIdx = 0; }
        elseif  (preg_match('/<x-sections\.card-image-with-text\b/', $line))                    { $cardIndex++; $component = 'card-' . $cardIndex; }
        elseif  (preg_match('/<x-sections\.card-detailed-info\b/', $line))                      { $component = 'detailed-info'; }
        elseif  (preg_match('/<x-sections\.card-2image-with-text\b/', $line))                   { $component = '2image'; }
        elseif  (preg_match('/<x-ui\.card-banner-slide-in\b/', $line))                          { $slideIndex++; $component = ($slideIndex % 2 === 1) ? 'slide-L' : 'slide-R'; }

        if ($component === null) continue;

        if ($component === 'carousel' && preg_match("#'src'\s*=>\s*'(/images/[^']+\.jpg)'#", $line, $m)) {
            $carouselIdx++;
            $slots['carousel-' . $carouselIdx] = $m[1];
        }
        if (preg_match('/\bimage="(\/images\/[^"]+\.jpg)"/', $line, $m)) {
            if      ($component === 'banner')                $slots['banner']   = $m[1];
            elseif  (strpos($component, 'card-') === 0)     $slots[$component] = $m[1];
            elseif  ($component === 'slide-L')               $slots['slide-L']  = $m[1];
            elseif  ($component === 'slide-R')               $slots['slide-R']  = $m[1];
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

// ── Slot label — carousel gets (base) or (overage) suffix ─────────────────
function slotLabel(string $key): string {
    $map = [
        'banner'          => 'Banner',
        'detailed-info-1' => 'Detailed-info 1',
        'detailed-info-2' => 'Detailed-info 2',
        '2image-1'        => '2-image 1',
        '2image-2'        => '2-image 2',
        'slide-L'         => 'Slide-L',
        'slide-R'         => 'Slide-R',
    ];
    if (isset($map[$key])) return $map[$key];
    if (preg_match('/^carousel-(\d+)$/', $key, $m)) {
        $n = (int)$m[1];
        return 'Carousel ' . $n . ($n <= 4 ? ' (base)' : ' (overage)');
    }
    if (preg_match('/^card-(\d+)$/', $key, $m)) return 'Card ' . $m[1];
    return ucfirst($key);
}

// ── Primary dir = banner dir, fallback = most frequent ────────────────────
function primaryDir(array $slots): string {
    if (isset($slots['banner']) && preg_match('#^/images/([^/]+)/#', $slots['banner'], $m)) return $m[1];
    $c = [];
    foreach ($slots as $path) {
        if (preg_match('#^/images/([^/]+)/#', $path, $m)) $c[$m[1]] = ($c[$m[1]] ?? 0) + 1;
    }
    if (empty($c)) return '';
    arsort($c);
    return array_key_first($c);
}

// ── Unplaced: images in primary dir not used on this page ─────────────────
// v2: cross-check unplaced file sizes against placed file sizes.
// If byte sizes match, the unplaced file is a content-dup of an already-placed
// image (different filename, identical pixels). Flag it — do NOT treat it as
// a unique available image.
function getUnplaced(array $slots, string $primDir, string $imagesRoot, array $lookup): array {
    $dir = $imagesRoot . '/' . $primDir;
    if (!is_dir($dir)) return ['total' => 0, 'unplaced' => 0, 'unique' => 0, 'files' => []];

    $all    = array_map('basename', glob($dir . '/*.jpg') ?: []);
    $placed = array_map(fn($p) => strtolower(basename($p)), array_values($slots));
    $unplacedNames = array_filter($all, fn($f) => !in_array(strtolower($f), $placed));

    // Build size => placed-filename map for all slots on this page
    // (slots can reference files from any dir — cross-sells included)
    $placedSizeMap = [];
    foreach (array_values($slots) as $imgPath) {
        $fn     = basename($imgPath);
        $imgDir = preg_match('#^/images/([^/]+)/#', $imgPath, $dm) ? $dm[1] : $primDir;
        $key    = strtolower($imgDir . '/' . $fn);
        $sz     = $lookup[$key]['size'] ?? 0;
        if ($sz > 0) $placedSizeMap[$sz] = $fn;
    }

    $files       = [];
    $uniqueCount = 0;
    foreach (array_values($unplacedNames) as $f) {
        $key   = strtolower($primDir . '/' . $f);
        $sz    = $lookup[$key]['size'] ?? 0;
        $dupOf = ($sz > 0 && isset($placedSizeMap[$sz])) ? $placedSizeMap[$sz] : null;
        if ($dupOf === null) $uniqueCount++;
        $files[] = ['file' => $f, 'dup_of' => $dupOf];
    }

    return [
        'total'    => count($all),
        'unplaced' => count($files),
        'unique'   => $uniqueCount,
        'files'    => $files,
    ];
}

// ── Exclude list ───────────────────────────────────────────────────────────
$exclude = [
    'index.blade.php', 'about.blade.php', 'cart.blade.php', 'checkout.blade.php',
    'collection.blade.php', 'contact.blade.php', 'demo.blade.php', 'demo-premium.blade.php',
    'home.blade.php', 'order-confirmation.blade.php', 'page-management.blade.php',
    'portfolio.blade.php', 'privacy-policy.blade.php', 'product.blade.php',
    'promotional-items.blade.php', 'reviews.blade.php', 'service-areas.blade.php',
    'terms-of-use.blade.php', 'top5pct-merchandise.blade.php',
    'articles.blade.php', 'resources.blade.php', 'show.blade.php', 'modals.blade.php',
    'glitter-shirts.blade.php', 'custom-storefronts.blade.php', 'coronavirus-signs.blade.php',
];

// ── Primary dir overrides ──────────────────────────────────────────────────
// Some pages use a shared/generic dir for their banner but have a dedicated
// dir that should be treated as primary for unplaced/fill calculations.
// Key = blade filename, value = correct primary dir name.
$primaryDirOverride = [
    'vinyl-shirts.blade.php'      => 'vinyl',
    'standard-stickers.blade.php' => 'standard-stickers-decals',
];

// ── Boot ───────────────────────────────────────────────────────────────────
$fileLookup = parseDatesFile($datesFile);

// ── Parse out.200k.txt — set of basenames that are under 200 KB ────────────
// Files under 200 KB are old/low-quality images. If they appear placed on a
// page with a round of R1/R2/R3 (date-based), they are mislabeled — their
// timestamp was updated during copying but the image itself is old.
$smallFiles = [];
if (file_exists(__DIR__ . '/../public/images/out.200k.txt')) {
    foreach (file(__DIR__ . '/../public/images/out.200k.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
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

// ── Summary counters ───────────────────────────────────────────────────────
$sum = [
    'pages' => 0, 'slots' => 0,
    'Initial' => 0, 'R1' => 0, 'R2' => 0, 'R3' => 0, 'R4' => 0, 'R5' => 0, '?' => 0,
    'new_yes' => 0, 'new_no' => 0,
    'cross_sell' => 0,
    'carousel_base' => 0, 'carousel_overage' => 0,
    'pages_all_r5' => 0, 'pages_zero_r5' => 0,
    'total_unplaced'        => 0,
    'total_unplaced_unique' => 0,
    'total_unplaced_dups'   => 0,
];

// ── Markdown header ────────────────────────────────────────────────────────
$md  = "# R5 Image Review\n\n";
$md .= "**Generated:** Jul 3, 2026  |  Post-R5 placement audit  |  Generator v2 (dup-aware)\n\n";
$md .= "**Goal:** Every active slot should hold an R4 or R5 image. Slots showing R1-R3 or Initial are candidates for the next refresh.\n\n";
$md .= "**Round windows:**\n";
$md .= "- **Initial** — before May 11, 2026 AND file under 400 KB\n";
$md .= "- **R1** — May 11-17, 2026 any size, OR before May 11 file 400 KB or larger\n";
$md .= "- **R2** — May 18 - Jun 3, 2026\n";
$md .= "- **R3** — Jun 4-24, 2026\n";
$md .= "- **R4** — Jun 25, 2026\n";
$md .= "- **R5** — Jun 26+, 2026\n\n";
$md .= "**Column notes:**  ";
$md .= "**New?** = Yes means the slot holds an R5 image.  ";
$md .= "**Cross-sell** = image is from a different category dir than this page.  ";
$md .= "**[dup]** = same-size intentional R5 duplicate (not a conflict).  ";
$md .= "**[collision]** = same base name, different file size.  ";
$md .= "**Unplaced** = files in the primary dir not referenced on this page.  ";
$md .= "**content-dup** = unplaced file whose byte size matches a file already placed on this page (same image, different filename — do not add to page).\n\n";
$md .= "Dates sourced from `public/image.dates.txt`.\n\n";
$md .= "**Primary dir overrides (blade banner dir differs from correct content dir):**\n";
$md .= "- `vinyl-shirts.blade.php` — primary dir forced to `vinyl/` (banner is in `custom-shirts/` but vinyl images live in `vinyl/`)\n";
$md .= "- `standard-stickers.blade.php` — primary dir forced to `standard-stickers-decals/` (blade borrows from `custom-shaped-stickers-decals/` but standard sticker images live in `standard-stickers-decals/`)\n";
$md .= "- `digital-vinyl.blade.php` — primary dir correctly `digital-vinyl/` (separate dir from `vinyl/`)\n";
$md .= "- `custom-shaped-stickers.blade.php` — primary dir correctly `custom-shaped-stickers-decals/`\n\n";
$md .= "---\n\n";

// ── CSV header ─────────────────────────────────────────────────────────────
$csvLines = ["Page,File,URL,Primary Dir,Slot,Filename,Image Dir,Round,Date,New?,Cross-sell,Collision-Dup,Unplaced Total,Unplaced Unique"];

// ── Per-page processing ────────────────────────────────────────────────────
foreach ($pageFiles as $pagePath) {
    $relative = str_replace($pagesRoot . '/', '', $pagePath);
    $pageName = str_replace('.blade.php', '', basename($pagePath));
    $pageUrl  = '/' . str_replace('.blade.php', '', $relative);
    $content  = file_get_contents($pagePath);

    $slots = parsePage($content);
    if (empty($slots)) continue;

    $primDir  = $primaryDirOverride[basename($pagePath)] ?? primaryDir($slots);
    $unplaced = getUnplaced($slots, $primDir, $imagesRoot, $fileLookup);

    $carouselCount = count(array_filter(array_keys($slots), fn($k) => strpos($k, 'carousel-') === 0));
    $pageCapacity  = count($slots);
    $pageR5        = 0;
    $sum['pages']++;
    $sum['total_unplaced']        += $unplaced['unplaced'];
    $sum['total_unplaced_unique'] += $unplaced['unique'];
    $sum['total_unplaced_dups']   += ($unplaced['unplaced'] - $unplaced['unique']);

    $title = ucwords(str_replace(['-', '_'], ' ', $pageName));
    $md .= "## {$title}\n\n";
    $md .= "**File:** `{$relative}`  |  **URL:** `{$pageUrl}`  \n";
    $md .= "**Page capacity:** {$pageCapacity} slots";
    $md .= "  |  **Dir total:** {$unplaced['total']}";
    $md .= "  |  **Unplaced:** {$unplaced['unplaced']} ({$unplaced['unique']} unique, " . ($unplaced['unplaced'] - $unplaced['unique']) . " content-dups)  \n";
    $md .= "**Primary dir:** `public/images/{$primDir}/`  |  ";
    $md .= "**Carousel:** {$carouselCount} slot" . ($carouselCount !== 1 ? 's' : '');
    if ($carouselCount > 4) $md .= " (4 base + " . ($carouselCount - 4) . " overage)";
    $md .= "\n\n";

    $md .= "| Slot | Filename | Dir | Round | Date | New? | Small? | Cross-sell | Collision / Dup |\n";
    $md .= "|---|---|---|---|---|---|---|---|---|\n";

    $seenFilenames = []; // strtolower(filename) => first slot label

    foreach ($slots as $slotKey => $imgPath) {
        $filename = basename($imgPath);
        $dir      = preg_match('#^/images/([^/]+)/#', $imgPath, $dm) ? $dm[1] : '?';
        $info     = getFileInfo($dir, $filename, $fileLookup);
        $round    = $info['round'];
        $date     = $info['date'];
        $isNew    = ($round === 'R5') ? 'Yes' : 'No';
        $isSmall  = isset($smallFiles[strtolower($filename)]) ? '⚠ Yes' : 'No';
        $isXS     = ($dir !== $primDir && $dir !== '?') ? 'Yes' : 'No';
        $dirPath  = $imagesRoot . '/' . $dir;
        $collStr  = file_exists($dirPath . '/' . $filename)
                    ? detectCollisions($dirPath, $dir, $filename, $fileLookup)
                    : 'file-missing';
        $slotLbl  = slotLabel($slotKey);

        // Same-filename dup detection across slots on this page
        $fnKey = strtolower($filename);
        if (isset($seenFilenames[$fnKey])) {
            $dupNote = '[page-dup: first in ' . $seenFilenames[$fnKey] . ']';
            $collStr = ($collStr === 'none') ? $dupNote : $collStr . ', ' . $dupNote;
        } else {
            $seenFilenames[$fnKey] = $slotLbl;
        }

        // Summary
        $sum['slots']++;
        $sum[isset($sum[$round]) ? $round : '?']++;
        if ($isNew === 'Yes') { $sum['new_yes']++; $pageR5++; } else $sum['new_no']++;
        if ($isXS === 'Yes')  $sum['cross_sell']++;
        if (preg_match('/^carousel-(\d+)$/', $slotKey, $cm)) {
            ((int)$cm[1] <= 4) ? $sum['carousel_base']++ : $sum['carousel_overage']++;
        }

        $md .= "| {$slotLbl} | `{$filename}` | {$dir} | {$round} | {$date} | {$isNew} | {$isSmall} | {$isXS} | {$collStr} |\n";

        $row = [$pageName, $relative, $pageUrl, $primDir, $slotLbl,
                $filename, $dir, $round, $date, $isNew, $isXS, $collStr,
                $unplaced['unplaced'], $unplaced['unique']];
        $esc = array_map(function($c) {
            $c = str_replace('"', '""', (string)$c);
            return (str_contains($c, ',') || str_contains($c, '"')) ? '"'.$c.'"' : $c;
        }, $row);
        $csvLines[] = implode(',', $esc);
    }

    // Unplaced files — separated into unique vs content-dup
    if (!empty($unplaced['files'])) {
        $uniqueFiles = array_filter($unplaced['files'], fn($r) => $r['dup_of'] === null);
        $dupFiles    = array_filter($unplaced['files'], fn($r) => $r['dup_of'] !== null);

        if (!empty($uniqueFiles)) {
            $md .= "\n**Unplaced unique in `{$primDir}/` (" . count($uniqueFiles) . " files — available for carousel fill):**  \n";
            foreach ($uniqueFiles as $r) {
                $fi    = getFileInfo($primDir, $r['file'], $fileLookup);
                $small = isset($smallFiles[strtolower($r['file'])]) ? '  ⚠ small/old (<200k)' : '';
                $md .= "- `{$r['file']}` — {$fi['round']}  ({$fi['date']}){$small}\n";
            }
        }
        if (!empty($dupFiles)) {
            $md .= "\n**Unplaced content-dups in `{$primDir}/` (" . count($dupFiles) . " files — already shown via placed twin):**  \n";
            foreach ($dupFiles as $r) {
                $fi    = getFileInfo($primDir, $r['file'], $fileLookup);
                $small = isset($smallFiles[strtolower($r['file'])]) ? '  ⚠ small/old (<200k)' : '';
                $md .= "- `{$r['file']}` — {$fi['round']}  ({$fi['date']})  [content-dup of placed `{$r['dup_of']}`]{$small}\n";
            }
        }
    }

    if ($pageR5 === count($slots)) $sum['pages_all_r5']++;
    if ($pageR5 === 0)             $sum['pages_zero_r5']++;

    $md .= "\n---\n\n";
}

// ── Net summary ────────────────────────────────────────────────────────────
$md .= "## Net Summary\n\n";
$md .= "| Metric | Count |\n|---|---|\n";
$md .= "| Pages scanned | {$sum['pages']} |\n";
$md .= "| Total image slots | {$sum['slots']} |\n";
$md .= "| &nbsp; | &nbsp; |\n";
$md .= "| Slots — R5 (New = Yes) | {$sum['R5']} |\n";
$md .= "| Slots — R4 | {$sum['R4']} |\n";
$md .= "| Slots — R3 | {$sum['R3']} |\n";
$md .= "| Slots — R2 | {$sum['R2']} |\n";
$md .= "| Slots — R1 | {$sum['R1']} |\n";
$md .= "| Slots — Initial | {$sum['Initial']} |\n";
$md .= "| Slots — Unknown date | {$sum['?']} |\n";
$md .= "| &nbsp; | &nbsp; |\n";
$md .= "| Cross-sell slots | {$sum['cross_sell']} |\n";
$md .= "| Carousel base slots (pos 1-4) | {$sum['carousel_base']} |\n";
$md .= "| Carousel overage slots (pos 5+) | {$sum['carousel_overage']} |\n";
$md .= "| &nbsp; | &nbsp; |\n";
$md .= "| Pages where ALL slots are R5 | {$sum['pages_all_r5']} |\n";
$md .= "| Pages with ZERO R5 slots | {$sum['pages_zero_r5']} |\n";
$md .= "| &nbsp; | &nbsp; |\n";
$md .= "| Total unplaced files (all primary dirs) | {$sum['total_unplaced']} |\n";
$md .= "| Unplaced — unique (truly available) | {$sum['total_unplaced_unique']} |\n";
$md .= "| Unplaced — content-dups (already shown via placed twin) | {$sum['total_unplaced_dups']} |\n";

// ── Write ──────────────────────────────────────────────────────────────────
file_put_contents($docsRoot . '/r5.image.review.md', $md);
echo "Wrote docs/r5.image.review.md\n";

file_put_contents($docsRoot . '/r5.image.review.csv', implode("\n", $csvLines) . "\n");
echo "Wrote docs/r5.image.review.csv\n";

echo "Pages: {$sum['pages']}  Slots: {$sum['slots']}\n";
echo "R5={$sum['R5']}  R4={$sum['R4']}  R3={$sum['R3']}  R2={$sum['R2']}  R1={$sum['R1']}  Initial={$sum['Initial']}  ?={$sum['?']}\n";
echo "New(R5): {$sum['new_yes']}  Not new: {$sum['new_no']}  Cross-sell: {$sum['cross_sell']}\n";
echo "All-R5 pages: {$sum['pages_all_r5']}  Zero-R5 pages: {$sum['pages_zero_r5']}\n";
echo "Unplaced total: {$sum['total_unplaced']}  Unique: {$sum['total_unplaced_unique']}  Content-dups: {$sum['total_unplaced_dups']}\n";
