<?php

/**
 * Phase 4: Fix broken image paths in blade files after R3 migration.
 *
 * Replacements:
 *   /images/window-wall-floor-decals/FILENAME  →  /images/CORRECT-DIR/FILENAME
 *   /images/promo-items/mugs/FILENAME          →  /images/mugs/FILENAME
 *   /images/promo-items/koozies/FILENAME       →  /images/can-koozies/FILENAME
 */

// -----------------------------------------------------------------------
// 1. Define the filename → target-dir mapping for window-wall-floor-decals
// -----------------------------------------------------------------------
$wwfMap = [
    // door-signs
    'top5pct-business-door-signs.jpg'                   => 'door-signs',
    'top5pct-door-sign-installers.jpg'                  => 'door-signs',
    'top5pct-door-signage.jpg'                          => 'door-signs',
    'top5pct-door-signs-joliet-shorewood-crest-hill.jpg'=> 'door-signs',
    'top5pct-door-wraps-joliet.jpg'                     => 'door-signs',
    'top5pct-vinyl-door-lettering.jpg'                  => 'door-signs',
    'top5pct-vinyl-door-signs.jpg'                      => 'door-signs',
    // window-signs
    'top5pct-business-window-signs.jpg'                 => 'window-signs',
    'top5pct-custom-window-signs.jpg'                   => 'window-signs',
    'top5pct-joliet-slammers-window-signs-joliet.jpg'   => 'window-signs',
    'top5pct-window-cling-decal-joliet-shorewood.jpg'   => 'window-signs',
    'top5pct-window-decal-joliet-shorewood-rockdale.jpg'=> 'window-signs',
    'top5pct-window-decals-joliet-shorewood-crest-hill.jpg' => 'window-signs',
    'top5pct-window-door-signs.jpg'                     => 'window-signs',
    'top5pct-window-signage.jpg'                        => 'window-signs',
    'top5pct-window-signs-joliet.jpg'                   => 'window-signs',
    'top5pct-window-signs-joliet-old.jpg'               => 'window-signs',
    'top5pct-window-signs-joliet-slammers.jpg'          => 'window-signs',
    // wall-signs
    'top5pct-article-window-wall-signs.jpg'             => 'wall-signs',
    'top5pct-banner-wall-decal-door-signs-joliet.jpg'   => 'wall-signs',
    'top5pct-wall-decals-joliet.jpg'                    => 'wall-signs',
    'top5pct-wall-signs.jpg'                            => 'wall-signs',
    'top5pct-wall-signs-joliet.jpg'                     => 'wall-signs',
    'top5pct-wall-signs-old.jpg'                        => 'wall-signs',
    'top5pct-wall-wraps.jpg'                            => 'wall-signs',
];

// -----------------------------------------------------------------------
// 2. Blade files to process
// -----------------------------------------------------------------------
$bladeFiles = [
    'resources/views/pages/signs/window-signs.blade.php',
    'resources/views/pages/signs/door-signs.blade.php',
    'resources/views/pages/signs/floor-signs.blade.php',
    'resources/views/pages/signs/wall-signs.blade.php',
    'resources/views/pages/signs/index.blade.php',
    'resources/views/components/layout/navigation-bar.blade.php',
    'resources/views/pages/company/articles.blade.php',
    'resources/views/pages/company/resources.blade.php',
    'resources/views/sitemaps/sitemap-images.blade.php',
    'resources/views/components/sections/featured-products.blade.php',
    'resources/views/pages/promotional-items/mugs.blade.php',
    'resources/views/pages/promotional-items/can-koozies.blade.php',
    'resources/views/pages/promotional-items.blade.php',
];

// -----------------------------------------------------------------------
// 3. Build search/replace pairs
// -----------------------------------------------------------------------
$searchPairs = [];

// window-wall-floor-decals replacements
foreach ($wwfMap as $filename => $targetDir) {
    $searchPairs["/images/window-wall-floor-decals/{$filename}"] =
        "/images/{$targetDir}/{$filename}";
}

// promo-items/mugs → mugs
$searchPairs['/images/promo-items/mugs/'] = '/images/mugs/';
// promo-items/koozies → can-koozies
$searchPairs['/images/promo-items/koozies/'] = '/images/can-koozies/';

// -----------------------------------------------------------------------
// 4. Process each file
// -----------------------------------------------------------------------
$totalReplaced = 0;

foreach ($bladeFiles as $file) {
    if (!file_exists($file)) {
        echo "[SKIP]  {$file} — not found\n";
        continue;
    }

    $original = file_get_contents($file);
    $updated  = $original;

    $fileChanges = 0;
    foreach ($searchPairs as $search => $replace) {
        $count   = substr_count($updated, $search);
        if ($count > 0) {
            $updated     = str_replace($search, $replace, $updated);
            $fileChanges += $count;
        }
    }

    if ($fileChanges > 0) {
        file_put_contents($file, $updated);
        echo "[FIX]   {$file} — {$fileChanges} replacement(s)\n";
        $totalReplaced += $fileChanges;
    } else {
        echo "[OK]    {$file} — no broken paths found\n";
    }
}

echo "\nDone. {$totalReplaced} total replacement(s) across " . count($bladeFiles) . " file(s).\n";
