<?php
/**
 * R5 Image Migration — Phase 2
 * Updates image references in blade page files per docs/r5.mig.md Section 5.
 * Uses str_replace — each replacement is exact. Reports every change made.
 */

$base  = __DIR__ . '/../resources/views/pages';
$edits = 0;
$errors = 0;

function replaceInFile(string $path, string $search, string $replace): bool
{
    if (!file_exists($path)) {
        echo "ERROR: File not found: {$path}\n";
        return false;
    }
    $content = file_get_contents($path);
    if (strpos($content, $search) === false) {
        echo "MISS:  '{$search}' not found in {$path}\n";
        return false;
    }
    $new = str_replace($search, $replace, $content);
    file_put_contents($path, $new);
    echo "OK:    {$path}\n       {$search}\n    -> {$replace}\n";
    return true;
}

// ─────────────────────────────────────────────────────────────────────────────
// 5a. sidewalk-signs-a-frame-signs.blade.php
// ─────────────────────────────────────────────────────────────────────────────
$p = "{$base}/signs/sidewalk-signs-a-frame-signs.blade.php";

$edits += (int) replaceInFile($p,
    "image=\"/images/sidewalk-signs/top5pct-a-frame-sidewalk-signs.jpg\"",
    "image=\"/images/sidewalk-signs/top5pct-a-frame-sidewalk-signs-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "'/images/sidewalk-signs/top5pct-sidewalk-signs-plainfield.jpg'",
    "'/images/sidewalk-signs/top5pct-sidewalk-signs-plainfield-r5.jpg'"
);
$edits += (int) replaceInFile($p,
    "'/images/sidewalk-signs/top5pct-custom-a-frame-sidewalk-signs-joliet.jpg'",
    "'/images/sidewalk-signs/top5pct-custom-a-frame-sidewalk-signs-joliet-r5.jpg'"
);
$edits += (int) replaceInFile($p,
    "'/images/sidewalk-signs/top5pct-sidewalk-sign.jpg'",
    "'/images/sidewalk-signs/top5pct-sidewalk-sign-r5.jpg'"
);
// Add carousel slot 5 (shorewood) — insert after the last carousel item
$edits += (int) replaceInFile($p,
    "            ['src' => '/images/sidewalk-signs/top5pct-sidewalk-signs-joliet.jpg',                              'alt' => 'Custom sidewalk signs for businesses in Joliet Illinois'],\n        ]\"",
    "            ['src' => '/images/sidewalk-signs/top5pct-sidewalk-signs-joliet-r5.jpg',                          'alt' => 'Custom sidewalk signs for businesses in Joliet Illinois'],\n            ['src' => '/images/sidewalk-signs/top5pct-sidewalk-signs-shorewood.jpg',                              'alt' => 'Custom a-frame sidewalk signs for businesses in Shorewood Illinois'],\n        ]\""
);
$edits += (int) replaceInFile($p,
    "image=\"/images/sidewalk-signs/top5pct-sidewalk-sign-a-frame-cresthill.jpg\"",
    "image=\"/images/sidewalk-signs/top5pct-sidewalk-sign-a-frame-cresthill-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "image=\"/images/sidewalk-signs/top5pct-sidewalk-signage.jpg\"",
    "image=\"/images/sidewalk-signs/top5pct-sidewalk-signage-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "image1=\"/images/sidewalk-signs/top5pct-a-frame-sign.jpg\"",
    "image1=\"/images/sidewalk-signs/top5pct-a-frame-sign-r5.jpg\""
);

// ─────────────────────────────────────────────────────────────────────────────
// 5c. brick-shirts.blade.php
// ─────────────────────────────────────────────────────────────────────────────
$p = "{$base}/custom-apparel/brick-shirts.blade.php";

$edits += (int) replaceInFile($p,
    "image=\"/images/brick-shirts/top5pct-brick-vinyl-hoodies.jpg\"",
    "image=\"/images/brick-shirts/top5pct-brick-vinyl-hoodies-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "'/images/brick-shirts/top5pct-brick-vinyl-custom-t-shirt.jpg'",
    "'/images/brick-shirts/top5pct-brick-vinyl-custom-t-shirt-r5.jpg'"
);
$edits += (int) replaceInFile($p,
    "'/images/brick-shirts/top5pct-customized-brick-vinyl-shirts.jpg'",
    "'/images/brick-shirts/top5pct-customized-brick-vinyl-shirts-r5.jpg'"
);
$edits += (int) replaceInFile($p,
    "'/images/brick-shirts/top5pct-brick-vinyl-custom-shirts-joliet.jpg'",
    "'/images/brick-shirts/top5pct-brick-vinyl-custom-shirts-joliet-r5.jpg'"
);
$edits += (int) replaceInFile($p,
    "'/images/brick-shirts/top5pct-brick-vinyl-shorewood.jpg'",
    "'/images/brick-shirts/top5pct-brick-vinyl-shorewood-r5.jpg'"
);
$edits += (int) replaceInFile($p,
    "image=\"/images/brick-shirts/top5pct-brick-vinyl-jackets-joliet.jpg\"",
    "image=\"/images/brick-shirts/top5pct-brick-vinyl-jackets-joliet-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "image=\"/images/brick-shirts/top5pct-brick-vinyl-cresthill.jpg\"",
    "image=\"/images/brick-shirts/top5pct-brick-vinyl-cresthill-r5.jpg\""
);

// ─────────────────────────────────────────────────────────────────────────────
// 5d. can-koozies.blade.php
// ─────────────────────────────────────────────────────────────────────────────
$p = "{$base}/promotional-items/can-koozies.blade.php";

$edits += (int) replaceInFile($p,
    "image=\"/images/can-koozies/top5pct-koozie-can-joliet.jpg\"",
    "image=\"/images/can-koozies/top5pct-koozie-can-joliet-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "'/images/can-koozies/top5pct-can-koozies.jpg'",
    "'/images/can-koozies/top5pct-can-koozies-r5.jpg'"
);
$edits += (int) replaceInFile($p,
    "'/images/can-koozies/top5pct-custom-koozies.jpg'",
    "'/images/can-koozies/top5pct-custom-koozies-r5.jpg'"
);
$edits += (int) replaceInFile($p,
    "'/images/can-koozies/top5pct-custom-can-koozies.jpg'",
    "'/images/can-koozies/top5pct-custom-can-koozies-r5.jpg'"
);
// Add carousel slots 5 + 6 — insert after last carousel item
$edits += (int) replaceInFile($p,
    "            ['src' => '/images/can-koozies/top5pct-koozies-joliet.jpg',                     'alt' => 'Custom koozies in Joliet Illinois'],\n        ]\"",
    "            ['src' => '/images/can-koozies/top5pct-koozies-joliet-r5.jpg',                  'alt' => 'Custom koozies in Joliet Illinois'],\n            ['src' => '/images/can-koozies/top5pct-koozies-custom-channahon.jpg',                'alt' => 'Custom koozies in Channahon Illinois'],\n            ['src' => '/images/can-koozies/top5pct-koozies-custom-romeoville.jpg',               'alt' => 'Custom koozies in Romeoville Illinois'],\n        ]\""
);
$edits += (int) replaceInFile($p,
    "image=\"/images/can-koozies/top5pct-personalized-koozies-joliet.jpg\"",
    "image=\"/images/can-koozies/top5pct-personalized-koozies-joliet-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "image=\"/images/can-koozies/top5pct-koozies-channahon.jpg\"",
    "image=\"/images/can-koozies/top5pct-koozies-channahon-r5.jpg\""
);
// Detailed info: swap duplicate koozies-joliet for new naperville image
$edits += (int) replaceInFile($p,
    "image1=\"/images/can-koozies/top5pct-koozies-joliet.jpg\"",
    "image1=\"/images/can-koozies/top5pct-koozie-custom-naperville.jpg\""
);

// ─────────────────────────────────────────────────────────────────────────────
// 5e. corporate-wear-shirts.blade.php
// ─────────────────────────────────────────────────────────────────────────────
$p = "{$base}/custom-apparel/group-wear/corporate-wear-shirts.blade.php";

$edits += (int) replaceInFile($p,
    "image=\"/images/corporate-wear/top5pct-custom-business-shirts.jpg\"",
    "image=\"/images/corporate-wear/top5pct-custom-business-shirts-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "'/images/corporate-wear/top5pct-custom-apron-joliet.jpg'",
    "'/images/corporate-wear/top5pct-custom-apron-joliet-r5.jpg'"
);
$edits += (int) replaceInFile($p,
    "'/images/corporate-wear/top5pct-custom-aprons-joliet.jpg'",
    "'/images/corporate-wear/top5pct-custom-aprons-joliet-r5.jpg'"
);
$edits += (int) replaceInFile($p,
    "'/images/corporate-wear/top5pct-custom-company-apparel.jpg'",
    "'/images/corporate-wear/top5pct-custom-company-apparel-r5.jpg'"
);
// Add carousel slots 5 + 6 — insert after last carousel item
$edits += (int) replaceInFile($p,
    "            ['src' => '/images/corporate-wear/top5pct-custom-pocket-shirt-joliet.jpg',          'alt' => 'Custom branded hoodies and pullovers for businesses in Joliet and Shorewood Illinois'],\n        ]\"",
    "            ['src' => '/images/corporate-wear/top5pct-custom-pocket-shirt-joliet-r5.jpg',       'alt' => 'Custom branded hoodies and pullovers for businesses in Joliet and Shorewood Illinois'],\n            ['src' => '/images/corporate-wear/top5pct-corporate-custom-polo-shirts-joliet.jpg',     'alt' => 'Custom corporate polo shirts for businesses in Joliet Illinois'],\n            ['src' => '/images/corporate-wear/top5pct-corporate-custom-work-shirts-joliet.jpg',      'alt' => 'Custom corporate work shirts for businesses in Joliet Illinois'],\n        ]\""
);
$edits += (int) replaceInFile($p,
    "image=\"/images/corporate-wear/top5pct-landscaping-clothing-joliet.jpg\"",
    "image=\"/images/corporate-wear/top5pct-landscaping-clothing-joliet-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "image=\"/images/corporate-wear/top5pct-lawn-care-clothing.jpg\"",
    "image=\"/images/corporate-wear/top5pct-lawn-care-clothing-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "image1=\"/images/corporate-wear/top5pct-safety-work-gear-joliet.jpg\"",
    "image1=\"/images/corporate-wear/top5pct-safety-work-gear-joliet-r5.jpg\""
);

// ─────────────────────────────────────────────────────────────────────────────
// 5f. custom-shaped-stickers.blade.php
// ─────────────────────────────────────────────────────────────────────────────
$p = "{$base}/stickers/custom-shaped-stickers.blade.php";

$edits += (int) replaceInFile($p,
    "image=\"/images/custom-shaped-stickers-decals/top5pct-die-cut-stickers-joliet.jpg\"",
    "image=\"/images/custom-shaped-stickers-decals/top5pct-die-cut-stickers-joliet-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "'/images/custom-shaped-stickers-decals/top5pct-custom-glossy-stickers-in-joliet.jpg'",
    "'/images/custom-shaped-stickers-decals/top5pct-custom-glossy-stickers-in-joliet-r5.jpg'"
);
// Add carousel slots 7 + 8 — insert after last carousel item
$edits += (int) replaceInFile($p,
    "            ['src' => '/images/custom-shaped-stickers-decals/top5pct-die-cut-stickers-joliet-r3.jpg',        'alt' => 'Custom die cut stickers and vinyl decals in Joliet Illinois'],\n        ]\"",
    "            ['src' => '/images/custom-shaped-stickers-decals/top5pct-die-cut-stickers-joliet-r3.jpg',        'alt' => 'Custom die cut stickers and vinyl decals in Joliet Illinois'],\n            ['src' => '/images/custom-shaped-stickers-decals/top5pct-die-cut-stickers-naperville.jpg',           'alt' => 'Custom die cut stickers in Naperville Illinois'],\n            ['src' => '/images/custom-shaped-stickers-decals/top5pct-die-cut-stickers-aurora.jpg',               'alt' => 'Custom die cut stickers in Aurora Illinois'],\n        ]\""
);
$edits += (int) replaceInFile($p,
    "image=\"/images/custom-shaped-stickers-decals/top5pct-custom-shaped-stickers-crest-hill.jpg\"",
    "image=\"/images/custom-shaped-stickers-decals/top5pct-custom-shaped-stickers-crest-hill-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "image1=\"/images/custom-shaped-stickers-decals/top5pct-custom-shaped-stickers-cresthill.jpg\"",
    "image1=\"/images/custom-shaped-stickers-decals/top5pct-custom-shaped-stickers-cresthill-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "image=\"/images/custom-shaped-stickers-decals/top5pct-die-cut-stickers-shorewood.jpg\"",
    "image=\"/images/custom-shaped-stickers-decals/top5pct-die-cut-stickers-shorewood-r5.jpg\""
);

// ─────────────────────────────────────────────────────────────────────────────
// 5g. mugs.blade.php
// ─────────────────────────────────────────────────────────────────────────────
$p = "{$base}/promotional-items/mugs.blade.php";

$edits += (int) replaceInFile($p,
    "image=\"/images/mugs/top5pct-mugs-custom-plainfield.jpg\"",
    "image=\"/images/mugs/top5pct-mugs-custom-plainfield-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "'/images/mugs/top5pct-custom-coffee-mugs-in-joliet.jpg'",
    "'/images/mugs/top5pct-custom-coffee-mugs-in-joliet-r5.jpg'"
);
$edits += (int) replaceInFile($p,
    "'/images/mugs/top5pct-custom-coffee-mugs.jpg'",
    "'/images/mugs/top5pct-custom-coffee-mugs-r5.jpg'"
);
$edits += (int) replaceInFile($p,
    "'/images/mugs/top5pct-custom-mugs-near-me.jpg'",
    "'/images/mugs/top5pct-custom-mugs-near-me-r5.jpg'"
);
// Add carousel slots 5 + 6 + 7 — insert after last carousel item
$edits += (int) replaceInFile($p,
    "            ['src' => '/images/mugs/top5pct-custom-mugs.jpg',                                     'alt' => 'Branded merchandise and custom promotional gifts in Joliet, Will and DuPage County Illinois'],\n        ]\"",
    "            ['src' => '/images/mugs/top5pct-custom-mugs-r5.jpg',                                  'alt' => 'Branded merchandise and custom promotional gifts in Joliet, Will and DuPage County Illinois'],\n            ['src' => '/images/mugs/top5pct-mugs-custom-channahon.jpg',                               'alt' => 'Custom printed mugs in Channahon Illinois'],\n            ['src' => '/images/mugs/top5pct-mugs-customized-crest-hill.jpg',                           'alt' => 'Custom printed mugs in Crest Hill Illinois'],\n            ['src' => '/images/mugs/top5pct-printed-mugs-joliet.jpg',                                  'alt' => 'Custom printed mugs in Joliet Illinois'],\n        ]\""
);
$edits += (int) replaceInFile($p,
    "image=\"/images/mugs/top5pct-custom-printed-mugs.jpg\"",
    "image=\"/images/mugs/top5pct-custom-printed-mugs-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "image=\"/images/mugs/top5pct-picture-on-mugs.jpg\"",
    "image=\"/images/mugs/top5pct-picture-on-mugs-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "image1=\"/images/mugs/top5pct-printed-mugs.jpg\"",
    "image1=\"/images/mugs/top5pct-printed-mugs-r5.jpg\""
);

// ─────────────────────────────────────────────────────────────────────────────
// 5h. reflective-shirts.blade.php
// ─────────────────────────────────────────────────────────────────────────────
$p = "{$base}/custom-apparel/reflective-shirts.blade.php";

$edits += (int) replaceInFile($p,
    "image=\"/images/reflective-shirts/top5pct-reflective-shirts-gold.jpg\"",
    "image=\"/images/reflective-shirts/top5pct-reflective-shirts-gold-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "'/images/reflective-shirts/top5pct-custom-reflective-hoodies.jpg'",
    "'/images/reflective-shirts/top5pct-custom-reflective-hoodies-r5.jpg'"
);
$edits += (int) replaceInFile($p,
    "'/images/reflective-shirts/top5pct-reflective-shirts.jpg'",
    "'/images/reflective-shirts/top5pct-reflective-shirts-r5.jpg'"
);
$edits += (int) replaceInFile($p,
    "'/images/reflective-shirts/top5pct-reflective-shirts-shorewood.jpg'",
    "'/images/reflective-shirts/top5pct-reflective-shirts-shorewood-r5.jpg'"
);
$edits += (int) replaceInFile($p,
    "'/images/reflective-shirts/top5pct-reflective-vinyl-shirts-plainfield.jpg'",
    "'/images/reflective-shirts/top5pct-reflective-vinyl-shirts-plainfield-r5.jpg'"
);
$edits += (int) replaceInFile($p,
    "'/images/reflective-shirts/top5pct-reflective-hoodies-joliet.jpg'",
    "'/images/reflective-shirts/top5pct-reflective-hoodies-joliet-r5.jpg'"
);
// Add carousel slot 7 — insert after last carousel item
$edits += (int) replaceInFile($p,
    "            ['src' => '/images/reflective-shirts/top5pct-reflective-safety-vests-joliet.jpg',     'alt' => 'Custom reflective safety vests printed in Joliet Illinois'],\n        ]\"",
    "            ['src' => '/images/reflective-shirts/top5pct-reflective-safety-vests-joliet-r5.jpg',  'alt' => 'Custom reflective safety vests printed in Joliet Illinois'],\n            ['src' => '/images/reflective-shirts/top5pct-reflective-shirts-customized-joliet.jpg',    'alt' => 'Custom reflective shirts printed in Joliet Illinois'],\n        ]\""
);
$edits += (int) replaceInFile($p,
    "image=\"/images/reflective-shirts/top5pct-reflective-apparel-joliet.jpg\"",
    "image=\"/images/reflective-shirts/top5pct-reflective-apparel-joliet-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "image=\"/images/reflective-shirts/top5pct-reflective-custom-shirts-joliet.jpg\"",
    "image=\"/images/reflective-shirts/top5pct-reflective-custom-shirts-joliet-r5.jpg\""
);

// ─────────────────────────────────────────────────────────────────────────────
// 5i. standard-stickers.blade.php
// ─────────────────────────────────────────────────────────────────────────────
$p = "{$base}/stickers/standard-stickers.blade.php";

$edits += (int) replaceInFile($p,
    "image1=\"/images/standard-stickers-decals/top5pct-diecut-stickers.jpg\"",
    "image1=\"/images/standard-stickers-decals/top5pct-diecut-stickers-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "image2=\"/images/standard-stickers-decals/top5pct-stickers-morris.jpg\"",
    "image2=\"/images/standard-stickers-decals/top5pct-stickers-morris-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "image=\"/images/standard-stickers-decals/top5pct-stickers-plainfield.jpg\"",
    "image=\"/images/standard-stickers-decals/top5pct-stickers-plainfield-r5.jpg\""
);

// ─────────────────────────────────────────────────────────────────────────────
// 5j. wall-signs.blade.php
// ─────────────────────────────────────────────────────────────────────────────
$p = "{$base}/signs/wall-signs.blade.php";

$edits += (int) replaceInFile($p,
    "image=\"/images/wall-signs/top5pct-wall-signs.jpg\"",
    "image=\"/images/wall-signs/top5pct-wall-signs-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "'/images/wall-signs/top5pct-wall-wraps.jpg'",
    "'/images/wall-signs/top5pct-wall-wraps-r5.jpg'"
);
$edits += (int) replaceInFile($p,
    "'/images/wall-signs/top5pct-wall-decals-bedroom.jpg'",
    "'/images/wall-signs/top5pct-wall-decals-bedroom-r5.jpg'"
);
$edits += (int) replaceInFile($p,
    "'/images/wall-signs/top5pct-wall-sign-for-businesses.jpg'",
    "'/images/wall-signs/top5pct-wall-sign-for-businesses-r5.jpg'"
);
$edits += (int) replaceInFile($p,
    "image=\"/images/wall-signs/top5pct-wall-signs-for-businesses.jpg\"",
    "image=\"/images/wall-signs/top5pct-wall-signs-for-businesses-r5.jpg\""
);
$edits += (int) replaceInFile($p,
    "image1=\"/images/wall-signs/top5pct-wall-signs-plainfield.jpg\"",
    "image1=\"/images/wall-signs/top5pct-wall-signs-plainfield-r5.jpg\""
);

echo "\n--- Phase 2 complete: {$edits} replacements made, {$errors} errors ---\n";
