<?php
/**
 * R5 Image Migration — Phase 1
 * Moves all files from public/r5.new.images/ subdirs to their correct target dirs.
 * Applies top5pct- prefix. Resolves conflicts with -r5 suffix. Fixes known typos.
 */

$base    = __DIR__ . '/../public';
$r5base  = $base . '/r5.new.images';
$imgbase = $base . '/images';

$moves = [

    // aframe-signs → sidewalk-signs/
    'aframe-signs' => [
        'target' => 'sidewalk-signs',
        'files'  => [
            'a-frame-sidewalk-signs.jpg'          => 'top5pct-a-frame-sidewalk-signs-r5.jpg',
            'a-frame-sign.jpg'                    => 'top5pct-a-frame-sign-r5.jpg',
            'a-frame-signs-joliet.jpg'             => 'top5pct-a-frame-signs-joliet-r5.jpg',
            'custom-a-frame-sidewalk-signs-joliet.jpg' => 'top5pct-custom-a-frame-sidewalk-signs-joliet-r5.jpg',
            'sidewalk-sign-a-frame-cresthill.jpg'  => 'top5pct-sidewalk-sign-a-frame-cresthill-r5.jpg',
            'sidewalk-signage.jpg'                 => 'top5pct-sidewalk-signage-r5.jpg',
            'sidewalk-sign.jpg'                    => 'top5pct-sidewalk-sign-r5.jpg',
            'sidewalk-signs-joliet.jpg'            => 'top5pct-sidewalk-signs-joliet-r5.jpg',
            'sidewalk-signs-plainfield.jpg'        => 'top5pct-sidewalk-signs-plainfield-r5.jpg',
            'sidewalk-signs-shorewood.jpg'         => 'top5pct-sidewalk-signs-shorewood.jpg',
        ],
    ],

    // backlit-signs → backlit-signs/ (move only, no page updates — future page)
    'backlit-signs' => [
        'target' => 'backlit-signs',
        'files'  => [
            'backlit-company-signs.jpg'                  => 'top5pct-backlit-company-signs-r5.jpg',
            'backlit-display-signs-joliet.jpg'           => 'top5pct-backlit-display-signs-joliet-r5.jpg',
            'backlit-display-signs-shorewood.jpg'        => 'top5pct-backlit-display-signs-shorewood.jpg',
            'backlit-monument-sign-joliet.jpg'           => 'top5pct-backlit-monument-sign-joliet-r5.jpg',
            'backlit-outdoor-signs.jpg'                  => 'top5pct-backlit-outdoor-signs-r5.jpg',
            'backlit-signage-joliet.jpg'                 => 'top5pct-backlit-signage-joliet.jpg',
            'backlit-sign-new-lenox.jpg'                 => 'top5pct-backlit-sign-new-lenox-r5.jpg',
            'backlit-signs-plainfield.jpg'               => 'top5pct-backlit-signs-plainfield-r5.jpg',
            'Custom-Backlit-Display-Signs-in-Joliet.jpg' => 'top5pct-custom-backlit-display-signs-in-joliet-r5.jpg',
            'monument-signs-joliet.jpg'                  => 'top5pct-monument-signs-joliet-r5.jpg',
        ],
    ],

    // brick-shirts → brick-shirts/
    'brick-shirts' => [
        'target' => 'brick-shirts',
        'files'  => [
            'brick-vinyl-cresthill.jpg'           => 'top5pct-brick-vinyl-cresthill-r5.jpg',
            'brick-vinyl-custom-shirts-joliet.jpg' => 'top5pct-brick-vinyl-custom-shirts-joliet-r5.jpg',
            'brick-vinyl-custom-t-shirt.jpg'       => 'top5pct-brick-vinyl-custom-t-shirt-r5.jpg',
            'brick-vinyl-hoodies.jpg'              => 'top5pct-brick-vinyl-hoodies-r5.jpg',
            'brick-vinyl-jackets-joliet.jpg'       => 'top5pct-brick-vinyl-jackets-joliet-r5.jpg',
            'brick-vinyl-shorewood.jpg'            => 'top5pct-brick-vinyl-shorewood-r5.jpg',
            'customized-brick-vinyl-shirts.jpg'    => 'top5pct-customized-brick-vinyl-shirts-r5.jpg',
        ],
    ],

    // can-koozies → can-koozies/
    'can-koozies' => [
        'target' => 'can-koozies',
        'files'  => [
            'can-koozies.jpg'              => 'top5pct-can-koozies-r5.jpg',
            'custom-can-koozies.jpg'       => 'top5pct-custom-can-koozies-r5.jpg',
            'custom-koozies.jpg'           => 'top5pct-custom-koozies-r5.jpg',
            'koozie-can-joliet.jpg'        => 'top5pct-koozie-can-joliet-r5.jpg',
            'koozie-custom-naperville.jpg' => 'top5pct-koozie-custom-naperville.jpg',
            'koozies-channahon.jpg'        => 'top5pct-koozies-channahon-r5.jpg',
            'koozies-custom-channahon.jpg' => 'top5pct-koozies-custom-channahon.jpg',
            'koozies-custom-romeoville.jpg'=> 'top5pct-koozies-custom-romeoville.jpg',
            'koozies-joliet.jpg'           => 'top5pct-koozies-joliet-r5.jpg',
            'personalized-koozies-joliet.jpg' => 'top5pct-personalized-koozies-joliet-r5.jpg',
        ],
    ],

    // corporate-ware → corporate-wear/ (note: source folder has 'ware', target has 'wear')
    'corporate-ware' => [
        'target' => 'corporate-wear',
        'files'  => [
            'corporate-custom-polo-shirts-joliet.jpg' => 'top5pct-corporate-custom-polo-shirts-joliet.jpg',
            'corporate-custom-work-shirts-joliet.jpg'  => 'top5pct-corporate-custom-work-shirts-joliet.jpg',
            'custom-apron-joliet.jpg'                  => 'top5pct-custom-apron-joliet-r5.jpg',
            'custom-aprons-joliet.jpg'                 => 'top5pct-custom-aprons-joliet-r5.jpg',
            'custom-business-shirts.jpg'               => 'top5pct-custom-business-shirts-r5.jpg',
            'custom-company-apparel.jpg'               => 'top5pct-custom-company-apparel-r5.jpg',
            'custom-pocket-shirt-joliet.jpg'           => 'top5pct-custom-pocket-shirt-joliet-r5.jpg',
            'landscaping-clothing-joliet.jpg'          => 'top5pct-landscaping-clothing-joliet-r5.jpg',
            'lawn-care-clothing.jpg'                   => 'top5pct-lawn-care-clothing-r5.jpg',
            'safety-work-gear-joliert.jpg'             => 'top5pct-safety-work-gear-joliet-r5.jpg', // typo fix
        ],
    ],

    // custom-shaped-stickers → custom-shaped-stickers-decals/
    'custom-shaped-stickers' => [
        'target' => 'custom-shaped-stickers-decals',
        'files'  => [
            'custom-glossy-stickers-in-joliet.jpg'  => 'top5pct-custom-glossy-stickers-in-joliet-r5.jpg',
            'custom-shaped-stickers-crest-hill.jpg' => 'top5pct-custom-shaped-stickers-crest-hill-r5.jpg',
            'custom-shaped-stickers-cresthill.jpg'  => 'top5pct-custom-shaped-stickers-cresthill-r5.jpg',
            'die-cut-stickers-joliet.jpg'           => 'top5pct-die-cut-stickers-joliet-r5.jpg',
            'die-cut-stickers-shorewood.jpg'        => 'top5pct-die-cut-stickers-shorewood-r5.jpg',
            'die-cut-stickers-aurora.jpg'           => 'top5pct-die-cut-stickers-aurora.jpg',
            'die-cut-stickers-crest-hill.jpg'       => 'top5pct-die-cut-stickers-crest-hill.jpg',
            'die-cut-stickers-naperville.jpg'       => 'top5pct-die-cut-stickers-naperville.jpg',
            'die-cut-stickers-plainfield.jpg'       => 'top5pct-die-cut-stickers-plainfield.jpg',
            'stickers-custom-shaped-morris.jpg'     => 'top5pct-stickers-custom-shaped-morris.jpg',
        ],
    ],

    // mugs → mugs/
    'mugs' => [
        'target' => 'mugs',
        'files'  => [
            'custom-coffee-mugs-in-joliet.jpg' => 'top5pct-custom-coffee-mugs-in-joliet-r5.jpg',
            'custom-coffee-mugs.jpg'           => 'top5pct-custom-coffee-mugs-r5.jpg',
            'custom-mugs.jpg'                  => 'top5pct-custom-mugs-r5.jpg',
            'custom-mugs-near-me.jpg'          => 'top5pct-custom-mugs-near-me-r5.jpg',
            'custom-printed-mugs.jpg'          => 'top5pct-custom-printed-mugs-r5.jpg',
            'mugs-custom-channahon.jpg'        => 'top5pct-mugs-custom-channahon.jpg',
            'mugs-custom-plainfield.jpg'       => 'top5pct-mugs-custom-plainfield-r5.jpg',
            'mugs-customized-crest-hill.jpg'   => 'top5pct-mugs-customized-crest-hill.jpg',
            'picture-on-mugs.jpg'              => 'top5pct-picture-on-mugs-r5.jpg',
            'printed-mugs-joliet.jpg'          => 'top5pct-printed-mugs-joliet.jpg',
            'printed-mugs.jpg'                 => 'top5pct-printed-mugs-r5.jpg',
        ],
    ],

    // reflective → reflective-shirts/
    'reflective' => [
        'target' => 'reflective-shirts',
        'files'  => [
            'custom-reflective-hoodies.jpg'        => 'top5pct-custom-reflective-hoodies-r5.jpg',
            'reflective-apparel-joliet.jpg'        => 'top5pct-reflective-apparel-joliet-r5.jpg',
            'reflective-custom-shirts-joliet.jpg'  => 'top5pct-reflective-custom-shirts-joliet-r5.jpg',
            'reflective-hoodies-joliet.jpg'        => 'top5pct-reflective-hoodies-joliet-r5.jpg',
            'reflective-safety-vests-joliet.jpg'   => 'top5pct-reflective-safety-vests-joliet-r5.jpg',
            'reflective-shirts-customized-joliet.jpg' => 'top5pct-reflective-shirts-customized-joliet.jpg',
            'reflective-shirts-gold.jpg'           => 'top5pct-reflective-shirts-gold-r5.jpg',
            'reflective-shirts.jpg'                => 'top5pct-reflective-shirts-r5.jpg',
            'reflective-shirts-shorewood.jpg'      => 'top5pct-reflective-shirts-shorewood-r5.jpg',
            'reflective-vinyl-shirts-plainfield.jpg' => 'top5pct-reflective-vinyl-shirts-plainfield-r5.jpg',
        ],
    ],

    // standard-stickers → standard-stickers-decals/
    'standard-stickers' => [
        'target' => 'standard-stickers-decals',
        'files'  => [
            'custom-label-stickers.jpg'    => 'top5pct-custom-label-stickers.jpg',
            'custom-shaped-stickers.jpg'   => 'top5pct-custom-shaped-stickers.jpg',
            'custom-stickers-cresthill.jpg'=> 'top5pct-custom-stickers-cresthill.jpg',
            'custom stickers.jpg'          => 'top5pct-custom-stickers.jpg', // space in source name
            'diecut-stickers.jpg'          => 'top5pct-diecut-stickers-r5.jpg',
            'stickers-bumpers-joliet.jpg'  => 'top5pct-stickers-bumpers-joliet.jpg',
            'stickers-custom-morris.jpg'   => 'top5pct-stickers-custom-morris.jpg',
            'stickers-in-joliet.jpg'       => 'top5pct-stickers-in-joliet.jpg',
            'stickers-morris.jpg'          => 'top5pct-stickers-morris-r5.jpg',
            'stickers-plainfield.jpg'      => 'top5pct-stickers-plainfield-r5.jpg',
        ],
    ],

    // wall-signs → wall-signs/
    'wall-signs' => [
        'target' => 'wall-signs',
        'files'  => [
            'wall-decals-bedroom.jpg'       => 'top5pct-wall-decals-bedroom-r5.jpg',
            'wall-sign-for-businesses.jpg'  => 'top5pct-wall-sign-for-businesses-r5.jpg',
            'wall-signs-for-businesses.jpg' => 'top5pct-wall-signs-for-businesses-r5.jpg',
            'wall-signs.jpg'               => 'top5pct-wall-signs-r5.jpg',
            'Wall-Signs-Plainfield.jpg'    => 'top5pct-wall-signs-plainfield-r5.jpg', // uppercase fix
            'wall-wraps.jpg'               => 'top5pct-wall-wraps-r5.jpg',
        ],
    ],
];

$moved  = 0;
$errors = 0;

foreach ($moves as $srcFolder => $group) {
    $srcDir    = "{$r5base}/{$srcFolder}";
    $targetDir = "{$imgbase}/{$group['target']}";

    if (!is_dir($srcDir)) {
        echo "ERROR: Source dir not found: {$srcDir}\n";
        $errors++;
        continue;
    }

    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
        echo "Created dir: {$targetDir}\n";
    }

    foreach ($group['files'] as $srcFile => $targetFile) {
        $src    = "{$srcDir}/{$srcFile}";
        $target = "{$targetDir}/{$targetFile}";

        if (!file_exists($src)) {
            echo "ERROR: Source file not found: {$src}\n";
            $errors++;
            continue;
        }

        if (file_exists($target)) {
            echo "ERROR: Target already exists (would overwrite): {$target}\n";
            $errors++;
            continue;
        }

        if (rename($src, $target)) {
            echo "OK: {$srcFolder}/{$srcFile} → images/{$group['target']}/{$targetFile}\n";
            $moved++;
        } else {
            echo "ERROR: rename failed: {$src} → {$target}\n";
            $errors++;
        }
    }
}

echo "\n--- Done: {$moved} moved, {$errors} errors ---\n";

// Verify r5.new.images is empty of image files
echo "\nRemaining files in r5.new.images (should be 0 images):\n";
$ri = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($r5base));
$remaining = 0;
foreach ($ri as $file) {
    if ($file->isFile() && preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $file->getFilename())) {
        echo "  REMAINING: " . $file->getPathname() . "\n";
        $remaining++;
    }
}
if ($remaining === 0) {
    echo "  Clean — no image files remain.\n";
}
