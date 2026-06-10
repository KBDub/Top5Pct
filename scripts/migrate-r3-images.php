<?php
/**
 * Round 3 Image Migration Script
 * Executes Phase 1 (create dirs), Phase 2 (R3 moves), Phase 3 (split + flatten).
 * Rules: never delete, never overwrite silently, apply top5pct- prefix on all R3 moves.
 */

$base     = dirname(__DIR__) . '/public/images';
$staging  = dirname(__DIR__) . '/public/round3.new.images';
$log      = [];
$errors   = [];
$skipped  = [];
$moved    = 0;
$created  = 0;

function snap(string $base, array $dirs): array {
    $counts = [];
    foreach ($dirs as $d) {
        $path = $base . '/' . $d;
        if (is_dir($path)) {
            $files = array_filter(scandir($path), fn($f) => !in_array($f, ['.','..']) && is_file($path.'/'.$f));
            $counts[$d] = count($files);
        } else {
            $counts[$d] = 0;
        }
    }
    return $counts;
}

function makeDir(string $path, array &$log, array &$errors, int &$created): void {
    if (!is_dir($path)) {
        if (mkdir($path, 0755, true)) {
            $log[] = "  [CREATE] $path";
            $created++;
        } else {
            $errors[] = "  [ERROR]  Could not create $path";
        }
    } else {
        $log[] = "  [EXISTS] $path";
    }
}

function moveFile(string $src, string $dest, array &$log, array &$errors, array &$skipped, int &$moved): void {
    if (!file_exists($src)) {
        $errors[] = "  [MISSING] Source not found: $src";
        return;
    }
    if (file_exists($dest)) {
        $skipped[] = "  [SKIP-COLLISION] Already exists: $dest  (source: $src)";
        return;
    }
    if (rename($src, $dest)) {
        $log[] = "  [MOVED] " . basename($src) . " -> " . $dest;
        $moved++;
    } else {
        $errors[] = "  [ERROR]  rename failed: $src -> $dest";
    }
}

// ─── Dirs touched (for before/after snapshot) ────────────────────────────────
$touchedDirs = [
    'automobile-graphics','custom-shaped-stickers-decals','dot-decals','embroidery',
    'glitter-shirts','holographic-shirts','outdoor-signs','reunion-shirts',
    'sidewalk-signs','spirit-wear','sublimation','table-cloths','table-runners',
    'wall-signs','yard-signs','window-wall-floor-decals',
    'brick-shirts','foil-shirts','screen-printing','rhinestone-apparel',
    'door-signs','window-signs','floor-signs','mugs','can-koozies',
    'puff-shirts','towels','drink-coasters','tote-bags','mouse-pads',
];

$before = snap($base, $touchedDirs);

// ─── PHASE 1a: Create dirs needed for R3 ────────────────────────────────────
echo "\n=== PHASE 1a: Create R3 target dirs ===\n";
$log[] = "=== PHASE 1a ===";
foreach ([
    'brick-shirts','foil-shirts','screen-printing','rhinestone-apparel',
    'door-signs','window-signs',
] as $dir) {
    makeDir($base . '/' . $dir, $log, $errors, $created);
}

// ─── PHASE 1b: Create remaining CSV dirs ────────────────────────────────────
echo "\n=== PHASE 1b: Create remaining CSV dirs ===\n";
$log[] = "=== PHASE 1b ===";
foreach ([
    'puff-shirts','floor-signs','mugs','can-koozies',
    'towels','drink-coasters','tote-bags','mouse-pads',
] as $dir) {
    makeDir($base . '/' . $dir, $log, $errors, $created);
}

// ─── PHASE 2: R3 file moves ──────────────────────────────────────────────────
echo "\n=== PHASE 2: Move R3 files ===\n";
$log[] = "=== PHASE 2 ===";

$moves = [
    // automobile-graphics (5)
    ["6_6_2026/Automobile Graphics/car-graphics-installers-joliet.jpg",  "automobile-graphics/top5pct-car-graphics-installers-joliet.jpg"],
    ["6_6_2026/Automobile Graphics/decals-for-work-trucks.jpg",          "automobile-graphics/top5pct-decals-for-work-trucks.jpg"],
    ["6_6_2026/Automobile Graphics/vehicle-graphics-near-me.jpg",        "automobile-graphics/top5pct-vehicle-graphics-near-me.jpg"],
    ["6_6_2026/Automobile Graphics/vehicle-signs-joliet.jpg",            "automobile-graphics/top5pct-vehicle-signs-joliet.jpg"],
    ["6_9_2026/Automobile Graphics/car-wrap-decals-joliet.jpg",          "automobile-graphics/top5pct-car-wrap-decals-joliet.jpg"],
    // brick-shirts (2)
    ["6_9_2026/Brick/brick-vinyl-custom-shirts-joliet.jpg",              "brick-shirts/top5pct-brick-vinyl-custom-shirts-joliet.jpg"],
    ["6_9_2026/Brick/brick-vinyl-shorewood.jpg",                         "brick-shirts/top5pct-brick-vinyl-shorewood.jpg"],
    // custom-shaped-stickers-decals (1) — collision rename
    ["6_9_2026/Custom Shaped Stickers/die-cut-stickers-joliet.jpg",      "custom-shaped-stickers-decals/top5pct-die-cut-stickers-joliet-r3.jpg"],
    // door-signs (2)
    ["6_7_2026/Door Signs/door-lettering-vinyl.jpg",                     "door-signs/top5pct-door-lettering-vinyl.jpg"],
    ["6_9_2026/Door Signs/door-wraps-joliet.jpg",                        "door-signs/top5pct-door-wraps-joliet.jpg"],
    // dot-decals (1)
    ["6_7_2026/DOT Decals/DOT-truck-decals-rockdale.jpg",                "dot-decals/top5pct-DOT-truck-decals-rockdale.jpg"],
    // embroidery (1)
    ["6_9_2026/Embroidery/embroidered-cap-embroidered-beanies-joliet.jpg", "embroidery/top5pct-embroidered-cap-embroidered-beanies-joliet.jpg"],
    // foil-shirts (5)
    ["6_9_2026/Foil/foil-custom-apparel-shirts-joliet.jpg",              "foil-shirts/top5pct-foil-custom-apparel-shirts-joliet.jpg"],
    ["6_9_2026/Foil/foil-custom-shirts-joliet.jpg",                      "foil-shirts/top5pct-foil-custom-shirts-joliet.jpg"],
    ["6_9_2026/Foil/foil-shirts-cresthill.jpg",                          "foil-shirts/top5pct-foil-shirts-cresthill.jpg"],
    ["6_9_2026/Foil/foil-shirt-shorewood.jpg",                           "foil-shirts/top5pct-foil-shirt-shorewood.jpg"],
    ["6_9_2026/Foil/foil-shirts.jpg",                                    "foil-shirts/top5pct-foil-shirts.jpg"],
    // glitter-shirts (2) — filename fix on first
    ["6_9_2026/Glitter/glitter-sportwear-shirtsjpg.jpg",                 "glitter-shirts/top5pct-glitter-sportswear-shirts.jpg"],
    ["6_9_2026/Glitter/glitter-sweatshirts-joliet.jpg",                  "glitter-shirts/top5pct-glitter-sweatshirts-joliet.jpg"],
    // holographic-shirts (1)
    ["6_9_2026/Holographic/holographic-baby-shirts.jpg",                 "holographic-shirts/top5pct-holographic-baby-shirts.jpg"],
    // outdoor-signs (1)
    ["6_9_2026/Outdoor Signs/business-signs-outdoor-joliet.jpg",         "outdoor-signs/top5pct-business-signs-outdoor-joliet.jpg"],
    // rhinestone-apparel (1)
    ["6_3_2026/Custom Shirts/Printing Options/Rhinestones/rhinestone-tshirts-joliet.jpg", "rhinestone-apparel/top5pct-rhinestone-tshirts-joliet.jpg"],
    // reunion-shirts (1) — override dir
    ["6_9_2026/Family Reunion/family-reunion-tees.jpg",                  "reunion-shirts/top5pct-family-reunion-tees.jpg"],
    // screen-printing (6)
    ["6_3_2026/Custom Shirts/Printing Options/Screenprint/screenprinting-t-shirts-joliet.jpg", "screen-printing/top5pct-screenprinting-t-shirts-joliet.jpg"],
    ["6_9_2026/Screenprinting/screenprinted-shirts-joliet.jpg",          "screen-printing/top5pct-screenprinted-shirts-joliet.jpg"],
    ["6_9_2026/Screenprinting/screenprinting-company-shirts.jpg",        "screen-printing/top5pct-screenprinting-company-shirts.jpg"],
    ["6_9_2026/Screenprinting/screenprinting-hoodies-joliet.jpg",        "screen-printing/top5pct-screenprinting-hoodies-joliet.jpg"],
    ["6_9_2026/Screenprinting/screenprinting-joliet.jpg",                "screen-printing/top5pct-screenprinting-joliet.jpg"],
    ["6_9_2026/Screenprinting/screenprinting-t-shirt-maker-joliet.jpg",  "screen-printing/top5pct-screenprinting-t-shirt-maker-joliet.jpg"],
    // sidewalk-signs (3) — override dir
    ["6_9_2026/A-Frames/a-frame-signs-joliet.jpg",                       "sidewalk-signs/top5pct-a-frame-signs-joliet.jpg"],
    ["6_9_2026/A-Frames/sidewalk-sign-a-frame-cresthill.jpg",            "sidewalk-signs/top5pct-sidewalk-sign-a-frame-cresthill.jpg"],
    ["6_9_2026/A-Frames/sidewalk-signs-plainfield.jpg",                  "sidewalk-signs/top5pct-sidewalk-signs-plainfield.jpg"],
    // spirit-wear (1) — override dir
    ["6_3_2026/Custom Shirts/Group Shirts/Spirit Wear/spirit-wear-volleyball-track.jpg", "spirit-wear/top5pct-spirit-wear-volleyball-track.jpg"],
    // sublimation (4) — override dir
    ["6_3_2026/Custom Shirts/Printing Options/Sublimation/dye-sublimation-jerseys.jpg",  "sublimation/top5pct-dye-sublimation-jerseys.jpg"],
    ["6_3_2026/Custom Shirts/Printing Options/Sublimation/dye-sublimation-tees.jpg",     "sublimation/top5pct-dye-sublimation-tees.jpg"],
    ["6_3_2026/Custom Shirts/Printing Options/Sublimation/sublimated-graphic-tees.jpg",  "sublimation/top5pct-sublimated-graphic-tees.jpg"],
    ["6_3_2026/Custom Shirts/Printing Options/Sublimation/sublimation-tees.jpg",         "sublimation/top5pct-sublimation-tees.jpg"],
    // table-cloths (4)
    ["6_4_2026/Table Signs/Table Cloths/table-cloth-8-feet.jpg",         "table-cloths/top5pct-table-cloth-8-feet.jpg"],
    ["6_4_2026/Table Signs/Table Cloths/table-cloth-customized.jpg",     "table-cloths/top5pct-table-cloth-customized.jpg"],
    ["6_4_2026/Table Signs/Table Cloths/table-cloths-for-businesses.jpg","table-cloths/top5pct-table-cloths-for-businesses.jpg"],
    ["6_4_2026/Table Signs/Table Cloths/table-cloth-with-photos.jpg",    "table-cloths/top5pct-table-cloth-with-photos.jpg"],
    // table-runners (4)
    ["6_6_2026/Table Runners/custom-table-runner-near-me.jpg",           "table-runners/top5pct-custom-table-runner-near-me.jpg"],
    ["6_6_2026/Table Runners/table-runner-company.jpg",                  "table-runners/top5pct-table-runner-company.jpg"],
    ["6_6_2026/Table Runners/table-runner-covers.jpg",                   "table-runners/top5pct-table-runner-covers.jpg"],
    ["6_6_2026/Table Runners/table-runners-customized.jpg",              "table-runners/top5pct-table-runners-customized.jpg"],
    // wall-signs (3)
    ["6_6_2026/Wall Sign/wall-decals-bedroom.jpg",                       "wall-signs/top5pct-wall-decals-bedroom.jpg"],
    ["6_6_2026/Wall Sign/wall-sign-for-businesses.jpg",                  "wall-signs/top5pct-wall-sign-for-businesses.jpg"],
    ["6_6_2026/Wall Sign/wall-signs-for-businesses.jpg",                 "wall-signs/top5pct-wall-signs-for-businesses.jpg"],
    // window-signs (7)
    ["6_7_2026/Window Signs/window-business-signs.jpg",                  "window-signs/top5pct-window-business-signs.jpg"],
    ["6_7_2026/Window Signs/window-graphics-joliet.jpg",                 "window-signs/top5pct-window-graphics-joliet.jpg"],
    ["6_7_2026/Window Signs/window-sign-installers-joliet.jpg",          "window-signs/top5pct-window-sign-installers-joliet.jpg"],
    ["6_7_2026/Window Signs/window-signs-cresthill.jpg",                 "window-signs/top5pct-window-signs-cresthill.jpg"],
    ["6_7_2026/Window Signs/window-signs.jpg",                           "window-signs/top5pct-window-signs.jpg"],
    ["6_7_2026/Window Signs/window-vinyl-sign-installers.jpg",           "window-signs/top5pct-window-vinyl-sign-installers.jpg"],
    ["6_9_2026/Window Signs/window-signs-for-businesses-joliet.jpg",     "window-signs/top5pct-window-signs-for-businesses-joliet.jpg"],
    // yard-signs (3)
    ["6_7_2026/Yard Signs/yard-signs-plainfield.jpg",                    "yard-signs/top5pct-yard-signs-plainfield.jpg"],
    ["6_7_2026/Yard Signs/yard-signs-rockdale.jpg",                      "yard-signs/top5pct-yard-signs-rockdale.jpg"],
    ["6_7_2026/Yard Signs/yard-signs-shorewood.jpg",                     "yard-signs/top5pct-yard-signs-shorewood.jpg"],
];

foreach ($moves as [$relSrc, $relDest]) {
    moveFile(
        $staging . '/' . $relSrc,
        $base   . '/' . $relDest,
        $log, $errors, $skipped, $moved
    );
}

// ─── PHASE 3a: Split window-wall-floor-decals ───────────────────────────────
echo "\n=== PHASE 3a: Split window-wall-floor-decals ===\n";
$log[] = "=== PHASE 3a ===";

$wwfSplit = [
    // door-signs (7 files)
    'top5pct-business-door-signs.jpg'               => 'door-signs',
    'top5pct-door-signage.jpg'                      => 'door-signs',
    'top5pct-door-sign-installers.jpg'              => 'door-signs',
    'top5pct-door-signs-joliet-shorewood-crest-hill.jpg' => 'door-signs',
    'top5pct-door-wraps-joliet.jpg'                 => 'door-signs',
    'top5pct-vinyl-door-lettering.jpg'              => 'door-signs',
    'top5pct-vinyl-door-signs.jpg'                  => 'door-signs',
    // window-signs (11 files)
    'top5pct-business-window-signs.jpg'             => 'window-signs',
    'top5pct-custom-window-signs.jpg'               => 'window-signs',
    'top5pct-joliet-slammers-window-signs-joliet.jpg' => 'window-signs',
    'top5pct-window-cling-decal-joliet-shorewood.jpg' => 'window-signs',
    'top5pct-window-decal-joliet-shorewood-rockdale.jpg' => 'window-signs',
    'top5pct-window-decals-joliet-shorewood-crest-hill.jpg' => 'window-signs',
    'top5pct-window-door-signs.jpg'                 => 'window-signs',
    'top5pct-window-signage.jpg'                    => 'window-signs',
    'top5pct-window-signs-joliet.jpg'               => 'window-signs',
    'top5pct-window-signs-joliet-old.jpg'           => 'window-signs',
    'top5pct-window-signs-joliet-slammers.jpg'      => 'window-signs',
    // wall-signs (7 files — some already exist in wall-signs, will be skipped)
    'top5pct-article-window-wall-signs.jpg'         => 'wall-signs',
    'top5pct-banner-wall-decal-door-signs-joliet.jpg' => 'wall-signs',
    'top5pct-wall-decals-joliet.jpg'                => 'wall-signs',
    'top5pct-wall-signs.jpg'                        => 'wall-signs',
    'top5pct-wall-signs-joliet.jpg'                 => 'wall-signs',
    'top5pct-wall-signs-old.jpg'                    => 'wall-signs',
    'top5pct-wall-wraps.jpg'                        => 'wall-signs',
];

$wwfSrc = $base . '/window-wall-floor-decals';
foreach ($wwfSplit as $filename => $targetDir) {
    moveFile(
        $wwfSrc . '/' . $filename,
        $base   . '/' . $targetDir . '/' . $filename,
        $log, $errors, $skipped, $moved
    );
}

// ─── PHASE 3b: Flatten promo-items ──────────────────────────────────────────
echo "\n=== PHASE 3b: Flatten promo-items ===\n";
$log[] = "=== PHASE 3b ===";

// mugs: promo-items/mugs -> mugs/
$mugsSrc = $base . '/promo-items/mugs';
foreach (scandir($mugsSrc) as $f) {
    if ($f === '.' || $f === '..') continue;
    if (!is_file($mugsSrc . '/' . $f)) continue;
    moveFile($mugsSrc . '/' . $f, $base . '/mugs/' . $f, $log, $errors, $skipped, $moved);
}

// koozies: promo-items/koozies -> can-koozies/
$kooziesSrc = $base . '/promo-items/koozies';
foreach (scandir($kooziesSrc) as $f) {
    if ($f === '.' || $f === '..') continue;
    if (!is_file($kooziesSrc . '/' . $f)) continue;
    moveFile($kooziesSrc . '/' . $f, $base . '/can-koozies/' . $f, $log, $errors, $skipped, $moved);
}

// ─── AFTER snapshot ─────────────────────────────────────────────────────────
$after = snap($base, $touchedDirs);

// ─── Print results ──────────────────────────────────────────────────────────
echo "\n=== MOVE LOG ===\n";
foreach ($log as $line) echo $line . "\n";

if ($skipped) {
    echo "\n=== SKIPPED (collisions) ===\n";
    foreach ($skipped as $line) echo $line . "\n";
}

if ($errors) {
    echo "\n=== ERRORS ===\n";
    foreach ($errors as $line) echo $line . "\n";
}

echo "\n=== BEFORE / AFTER IMAGE COUNTS ===\n";
printf("%-42s %6s %6s %6s\n", 'Directory', 'Before', 'After', 'Delta');
echo str_repeat('-', 60) . "\n";
foreach ($touchedDirs as $dir) {
    $b = $before[$dir] ?? 0;
    $a = $after[$dir]  ?? 0;
    $d = $a - $b;
    $flag = ($d !== 0) ? ($d > 0 ? "+$d" : "$d") : '--';
    printf("%-42s %6d %6d %6s\n", $dir, $b, $a, $flag);
}

echo "\n=== SUMMARY ===\n";
echo "Dirs created : $created\n";
echo "Files moved  : $moved\n";
echo "Skipped      : " . count($skipped) . "\n";
echo "Errors       : " . count($errors) . "\n";

// Remaining staging files (should only be .DS_Store and empty dirs)
$remaining = [];
$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($staging));
foreach ($rii as $file) {
    if ($file->isFile()) {
        $remaining[] = str_replace($staging . '/', '', $file->getPathname());
    }
}
echo "\nRemaining in staging dir (" . count($remaining) . "):\n";
foreach ($remaining as $r) echo "  $r\n";
