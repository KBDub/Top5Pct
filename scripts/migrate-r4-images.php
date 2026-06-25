<?php

/**
 * R4 Image Migration Script
 * Phase 1: Create new dirs
 * Phase 2: Move all R4 files to target dirs with top5pct- prefix
 *
 * Run from project root: php scripts/migrate-r4-images.php
 */

$base      = __DIR__ . '/../public';
$source    = $base . '/r4.new.images';
$imgTarget = $base . '/images';

$moved  = 0;
$errors = 0;
$log    = [];

function moveFile(string $src, string $targetDir, string $targetName, array &$log, int &$moved, int &$errors): void
{
    if (!file_exists($src)) {
        $log[] = "MISSING  $src";
        $errors++;
        return;
    }

    $dest = $targetDir . '/' . $targetName;

    if (file_exists($dest)) {
        $ext      = pathinfo($targetName, PATHINFO_EXTENSION);
        $base     = pathinfo($targetName, PATHINFO_FILENAME);
        $newName  = $base . '-r4.' . $ext;
        $dest     = $targetDir . '/' . $newName;
        $log[]    = "COLLISION — renamed to $newName";
    }

    if (rename($src, $dest)) {
        $log[]  = "OK       " . basename($targetDir) . '/' . basename($dest);
        $moved++;
    } else {
        $log[]  = "ERROR    rename($src -> $dest)";
        $errors++;
    }
}

// ---------------------------------------------------------------------------
// Phase 1: Create new dirs
// ---------------------------------------------------------------------------

$newDirs = [
    $imgTarget . '/backdrop-signs',
    $imgTarget . '/backlit-signs',
    $imgTarget . '/glow-shirts',
];

echo "=== Phase 1: Create new dirs ===" . PHP_EOL;
foreach ($newDirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
        echo "CREATED  $dir" . PHP_EOL;
    } else {
        echo "EXISTS   $dir" . PHP_EOL;
    }
}

// ---------------------------------------------------------------------------
// Phase 2: Move all R4 files
// ---------------------------------------------------------------------------

echo PHP_EOL . "=== Phase 2: Move files ===" . PHP_EOL;

$moves = [
    // automobile-graphics/
    ['6_19_2026/Vehicle Graphics/vehicle-window-graphics-joliet.jpg',             'automobile-graphics', 'top5pct-vehicle-window-graphics-joliet.jpg'],
    ['6_20_2026/Automobile Graphics/vehicle-decals-custom-helmets-joliet.jpg',    'automobile-graphics', 'top5pct-vehicle-decals-custom-helmets-joliet.jpg'],

    // backdrop-signs/
    ['6_19_2026/Backdrops/backdrops-joliet.jpg',                                  'backdrop-signs',      'top5pct-backdrops-joliet.jpg'],

    // backlit-signs/
    ['6_20_2026/Backlit Signs/backlit-signs-plainfield.jpg',                      'backlit-signs',       'top5pct-backlit-signs-plainfield.jpg'],

    // banners/
    ['6_20_2026/Banner/banner-retractable-plainfield.jpg',                        'banners',             'top5pct-banner-retractable-plainfield.jpg'],

    // can-koozies/
    ['6_19_2026/Can Koozies/koozie-can-joliet.jpg',                               'can-koozies',         'top5pct-koozie-can-joliet.jpg'],
    ['6_20_2026/Can Koozies/koozies-channahon.jpg',                               'can-koozies',         'top5pct-koozies-channahon.jpg'],

    // custom-shaped-stickers-decals/
    ['6_20_2026/Custom Shaped Stickers/custom-shaped-stickers-crest-hill.jpg',    'custom-shaped-stickers-decals', 'top5pct-custom-shaped-stickers-crest-hill.jpg'],

    // door-signs/
    ['6_19_2026/Door Signs/door-decals-channahon.jpg',                            'door-signs',          'top5pct-door-decals-channahon.jpg'],
    ['6_19_2026/Door Signs/door-graphics-joliet.jpg',                             'door-signs',          'top5pct-door-graphics-joliet.jpg'],
    ['6_20_2026/Door Signs/door-lettering-installer-joliet.jpg',                  'door-signs',          'top5pct-door-lettering-installer-joliet.jpg'],
    ['6_20_2026/Door Signs/door-signs-crest-hill.jpg',                            'door-signs',          'top5pct-door-signs-crest-hill.jpg'],
    ['6_20_2026/Door Signs/door-sign-vinyl-lettering-joliet.jpg',                 'door-signs',          'top5pct-door-sign-vinyl-lettering-joliet.jpg'],

    // dtf-transfers/ (override — not dtf-printing/)
    ['6_20_2026/DTF/dtf-shirts-joliet.jpg',                                       'dtf-transfers',       'top5pct-dtf-shirts-joliet.jpg'],

    // embroidery/ (Embroider/ typo folder + Embroidery/ both go here)
    ['6_20_2026/Embroider/embroidery-caps-joliet.jpg',                            'embroidery',          'top5pct-embroidery-caps-joliet.jpg'],
    ['6_20_2026/Embroidery/embroidered-patch-joliet.jpg',                         'embroidery',          'top5pct-embroidered-patch-joliet.jpg'],
    ['6_20_2026/Embroidery/embroidered-towels-joliet.jpg',                        'embroidery',          'top5pct-embroidered-towels-joliet.jpg'],
    ['6_20_2026/Embroidery/stitched-polo-shirts-joliet.jpg',                      'embroidery',          'top5pct-stitched-polo-shirts-joliet.jpg'],

    // flock-shirts/
    ['6_19_2026/Flock/flock-custom-shirts-joliet.jpg',                            'flock-shirts',        'top5pct-flock-custom-shirts-joliet.jpg'],
    ['6_20_2026/Flock/flock-apparel-joliet.jpg',                                  'flock-shirts',        'top5pct-flock-apparel-joliet.jpg'],
    ['6_20_2026/Flock/flock-shirts-plainfield.jpg',                               'flock-shirts',        'top5pct-flock-shirts-plainfield.jpg'],
    ['6_20_2026/Flock/flock-t-shirt-joliet.jpg',                                  'flock-shirts',        'top5pct-flock-t-shirt-joliet.jpg'],
    ['6_20_2026/Flock/flock-t-shirts-joliet.jpg',                                 'flock-shirts',        'top5pct-flock-t-shirts-joliet.jpg'],

    // foil-shirts/
    ['6_19_2026/Foil/foil-custom-shirts.jpg',                                     'foil-shirts',         'top5pct-foil-custom-shirts.jpg'],

    // glitter-shirts/
    ['6_19_2026/Glitter/glitter-hoodies-plainfield.jpg',                          'glitter-shirts',      'top5pct-glitter-hoodies-plainfield.jpg'],
    ['6_20_2026/Glitter/custom-glitter-birthday-shirts-joliet.jpg',               'glitter-shirts',      'top5pct-custom-glitter-birthday-shirts-joliet.jpg'],

    // glow-shirts/ (override — not glow-in-the-dark-shirts/)
    ['6_20_2026/Glow/glowing-hoodies-joliet.jpg',                                 'glow-shirts',         'top5pct-glowing-hoodies-joliet.jpg'],
    ['6_20_2026/Glow/glow-in-the-dark-hats-joliet.jpg',                          'glow-shirts',         'top5pct-glow-in-the-dark-hats-joliet.jpg'],
    ['6_20_2026/Glow/glow-polo-shirts-joliet.jpg',                                'glow-shirts',         'top5pct-glow-polo-shirts-joliet.jpg'],
    ['6_20_2026/Glow/glow-shirts-channahon.jpg',                                  'glow-shirts',         'top5pct-glow-shirts-channahon.jpg'],

    // mugs/
    ['6_19_2026/Mugs/mugs-custom-plainfield.jpg',                                 'mugs',                'top5pct-mugs-custom-plainfield.jpg'],

    // outdoor-signs/
    ['6_19_2026/Outdoor Signs/outdoor-signs-crest-hill.jpg',                      'outdoor-signs',       'top5pct-outdoor-signs-crest-hill.jpg'],
    ['6_20_2026/Outdoor Signs/outdoor-signs-plainfield.jpg',                      'outdoor-signs',       'top5pct-outdoor-signs-plainfield.jpg'],

    // posters/
    ['6_19_2026/Posters/posters-business-joliet.jpg',                             'posters',             'top5pct-posters-business-joliet.jpg'],
    ['6_19_2026/Posters/posters-company-joliet.jpg',                              'posters',             'top5pct-posters-company-joliet.jpg'],
    ['6_19_2026/Posters/posters-shorewood.jpg',                                   'posters',             'top5pct-posters-shorewood.jpg'],
    ['6_20_2026/Posters/posters-customized-joliet.jpg',                           'posters',             'top5pct-posters-customized-joliet.jpg'],
    ['6_20_2026/Posters/posters-joliet.jpg',                                      'posters',             'top5pct-posters-joliet.jpg'],

    // reflective-shirts/
    ['6_19_2026/Reflective/reflective-custom-shirts-joliet.jpg',                  'reflective-shirts',   'top5pct-reflective-custom-shirts-joliet.jpg'],
    ['6_20_2026/Reflective/reflective-apparel-joliet.jpg',                        'reflective-shirts',   'top5pct-reflective-apparel-joliet.jpg'],
    ['6_20_2026/Reflective/reflective-hoodies-joliet.jpg',                        'reflective-shirts',   'top5pct-reflective-hoodies-joliet.jpg'],
    ['6_20_2026/Reflective/reflective-safety-vests-joliet.jpg',                   'reflective-shirts',   'top5pct-reflective-safety-vests-joliet.jpg'],

    // reunion-shirts/ (override — not reunion-wear-shirts/)
    // spirt-wear-apparel-joliet.jpg renamed per Flag #4
    ['6_20_2026/Reunion/reunion-hoodies-joliet.jpg',                              'reunion-shirts',      'top5pct-reunion-hoodies-joliet.jpg'],
    ['6_20_2026/Reunion/reunion-shirts-caps-banner-joliet.jpg',                   'reunion-shirts',      'top5pct-reunion-shirts-caps-banner-joliet.jpg'],
    ['6_20_2026/Reunion/reunion-shirts-romeoville.jpg',                           'reunion-shirts',      'top5pct-reunion-shirts-romeoville.jpg'],
    ['6_20_2026/Reunion/spirt-wear-apparel-joliet.jpg',                           'reunion-shirts',      'top5pct-reunion-spirit-wear-apparel-joliet.jpg'],

    // rhinestone-apparel/
    ['6_19_2026/Rhinestones/rhinestone-school-backpacks-joliet.jpg',              'rhinestone-apparel',  'top5pct-rhinestone-school-backpacks-joliet.jpg'],

    // spirit-wear/ (override — not spirit-wear-shirts/)
    // source folder "Spirtit Wear" is a typo — route is correct
    ['6_20_2026/Spirtit Wear/spirit-gear-baseball-jerseys-joliet.jpg',            'spirit-wear',         'top5pct-spirit-gear-baseball-jerseys-joliet.jpg'],
    ['6_20_2026/Spirtit Wear/spirit-school-gear-joliet.jpg',                      'spirit-wear',         'top5pct-spirit-school-gear-joliet.jpg'],
    ['6_20_2026/Spirtit Wear/spirit-t-shirts-romeoville.jpg',                     'spirit-wear',         'top5pct-spirit-t-shirts-romeoville.jpg'],
    ['6_20_2026/Spirtit Wear/spirit-wear-apparel-joliet.jpg',                     'spirit-wear',         'top5pct-spirit-wear-apparel-joliet.jpg'],
    ['6_20_2026/Spirtit Wear/spirit-wear-football-joliet.jpg',                    'spirit-wear',         'top5pct-spirit-wear-football-joliet.jpg'],
    ['6_20_2026/Spirtit Wear/spirit-wear-gear-joliet.jpg',                        'spirit-wear',         'top5pct-spirit-wear-gear-joliet.jpg'],
    ['6_20_2026/Spirtit Wear/spirit-wear-hoodies-joliet.jpg',                     'spirit-wear',         'top5pct-spirit-wear-hoodies-joliet.jpg'],
    ['6_20_2026/Spirtit Wear/spirit-wear-mom-joliet.jpg',                         'spirit-wear',         'top5pct-spirit-wear-mom-joliet.jpg'],
    ['6_20_2026/Spirtit Wear/spirit-wear-pullovers-joliet.jpg',                   'spirit-wear',         'top5pct-spirit-wear-pullovers-joliet.jpg'],
    ['6_20_2026/Spirtit Wear/spirit-wear-shirts-channahon.jpg',                   'spirit-wear',         'top5pct-spirit-wear-shirts-channahon.jpg'],

    // standard-stickers-decals/
    ['6_20_2026/Stickers/stickers-morris.jpg',                                    'standard-stickers-decals', 'top5pct-stickers-morris.jpg'],
    ['6_20_2026/Stickers/stickers-plainfield.jpg',                                'standard-stickers-decals', 'top5pct-stickers-plainfield.jpg'],

    // table-cloths/
    ['6_20_2026/Table Cloths/table-cloths-crest-hill.jpg',                        'table-cloths',        'top5pct-table-cloths-crest-hill.jpg'],

    // table-runners/
    ['6_20_2026/Table Runner/table-runner-channahon.jpg',                         'table-runners',       'top5pct-table-runner-channahon.jpg'],

    // vinyl/
    ['6_20_2026/Vinyl/vinyl-shirts-joliet.jpg',                                   'vinyl',               'top5pct-vinyl-shirts-joliet.jpg'],

    // wall-signs/ (source has uppercase — lowercased in target)
    ['6_19_2026/Wall Signs/Wall-Signs-Plainfield.jpg',                            'wall-signs',          'top5pct-wall-signs-plainfield.jpg'],

    // window-signs/
    ['6_20_2026/Window Signs/window-graphic-signs-joliet.jpg',                    'window-signs',        'top5pct-window-graphic-signs-joliet.jpg'],
    ['6_20_2026/Window Signs/window-signs-company-crest-hill.jpg',               'window-signs',        'top5pct-window-signs-company-crest-hill.jpg'],
    ['6_20_2026/Window Signs/window-signs-for-companies-joliet.jpg',             'window-signs',        'top5pct-window-signs-for-companies-joliet.jpg'],
    ['6_20_2026/Window Signs/window-signs-plainfield.jpg',                        'window-signs',        'top5pct-window-signs-plainfield.jpg'],
    ['6_20_2026/Window Signs/window-signs-rockdale.jpg',                          'window-signs',        'top5pct-window-signs-rockdale.jpg'],
];

foreach ($moves as [$relSrc, $targetDirName, $targetName]) {
    $src       = $source . '/' . $relSrc;
    $targetDir = $imgTarget . '/' . $targetDirName;
    moveFile($src, $targetDir, $targetName, $log, $moved, $errors);
}

// ---------------------------------------------------------------------------
// Print log
// ---------------------------------------------------------------------------

foreach ($log as $line) {
    echo $line . PHP_EOL;
}

echo PHP_EOL . "=== Results ===" . PHP_EOL;
echo "Moved:  $moved" . PHP_EOL;
echo "Errors: $errors" . PHP_EOL;

// ---------------------------------------------------------------------------
// Verify: no images left in source
// ---------------------------------------------------------------------------

echo PHP_EOL . "=== Verifying source is empty ===" . PHP_EOL;
$remaining = [];
$iter = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source));
foreach ($iter as $file) {
    if ($file->isFile() && in_array(strtolower($file->getExtension()), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
        $remaining[] = $file->getPathname();
    }
}

if (empty($remaining)) {
    echo "CLEAN — no image files remain in public/r4.new.images/" . PHP_EOL;
} else {
    echo "WARNING — " . count($remaining) . " image(s) still in source:" . PHP_EOL;
    foreach ($remaining as $f) {
        echo "  $f" . PHP_EOL;
    }
}
