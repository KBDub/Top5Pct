<?php

declare(strict_types=1);

$viewsPath = __DIR__ . '/../resources/views/pages';

$pageKeyMap = [
    'custom-apparel/brick-shirts'                       => 'brick-shirts',
    'custom-apparel/dtf-transfers'                      => 'dtf-transfers',
    'custom-apparel/dye-sublimation'                    => 'dye-sublimation',
    'custom-apparel/flock-shirts'                       => 'flock-shirts',
    'custom-apparel/foil-shirts'                        => 'foil-shirts',
    'custom-apparel/glitter-shirts'                     => 'glitter-shirts',
    'custom-apparel/glow-in-the-dark-shirts'            => 'glow-shirts',
    'custom-apparel/group-wear/corporate-wear-shirts'   => 'corporate-wear',
    'custom-apparel/group-wear/reunion-shirts'          => 'reunion-shirts',
    'custom-apparel/group-wear/spirit-wear-shirts'      => 'spirit-wear',
    'custom-apparel/holographic-shirts'                 => 'holographic-shirts',
    'custom-apparel/index'                              => 'custom-apparel',
    'custom-apparel/printing-options/digital-vinyl'     => 'digital-vinyl',
    'custom-apparel/printing-options/embroidery'        => 'embroidery',
    'custom-apparel/printing-options/rhinestone-apparel' => 'rhinestone-apparel',
    'custom-apparel/printing-options/screen-printing'   => 'screen-printing',
    'custom-apparel/puff-shirts'                        => 'puff-shirts',
    'custom-apparel/reflective-shirts'                  => 'reflective-shirts',
    'custom-apparel/specialty-materials/vinyl'          => 'vinyl-specialty',
    'custom-apparel/vinyl-shirts'                       => 'vinyl-shirts',
    'design-services/graphic-design'                    => 'graphic-design',
    'design-services/index'                             => 'design-services',
    'design-services/logo-design'                       => 'logo-design',
    'promotional-items'                                 => 'promotional-items',
    'promotional-items/can-koozies'                     => 'can-koozies',
    'promotional-items/drink-coasters'                  => 'drink-coasters',
    'promotional-items/mouse-pads'                      => 'mouse-pads',
    'promotional-items/mugs'                            => 'mugs',
    'promotional-items/tote-bags'                       => 'tote-bags',
    'promotional-items/towels'                          => 'towels',
    'signs/banners'                                     => 'banners',
    'signs/business-signs'                              => 'business-signs',
    'signs/coronavirus-signs'                           => 'coronavirus-signs',
    'signs/door-signs'                                  => 'door-signs',
    'signs/floor-signs'                                 => 'floor-signs',
    'signs/index'                                       => 'signs',
    'signs/posters'                                     => 'posters',
    'signs/sidewalk-signs-a-frame-signs'                => 'sidewalk-a-frame',
    'signs/sidewalk-signs'                              => 'sidewalk-signs',
    'signs/table-cloths'                                => 'table-cloths',
    'signs/table-runners'                               => 'table-runners',
    'signs/wall-signs'                                  => 'wall-signs',
    'signs/window-signs'                                => 'window-signs',
    'signs/yard-signs'                                  => 'yard-signs',
    'stickers/custom-shaped-stickers'                   => 'custom-shaped-stickers',
    'stickers/index'                                    => 'stickers',
    'stickers/standard-stickers'                        => 'standard-stickers',
    'vehicle-graphics/automobile-graphics'              => 'automobile-graphics',
    'vehicle-graphics/dot-decals'                       => 'dot-decals',
    'vehicle-graphics/index'                            => 'vehicle-graphics',
    'vehicle-graphics/vehicle-magnets'                  => 'vehicle-magnets',
];

$ok      = 0;
$noMatch = 0;
$missing = 0;

foreach ($pageKeyMap as $pagePath => $key) {
    $filePath = $viewsPath . '/' . $pagePath . '.blade.php';

    if (!file_exists($filePath)) {
        echo "MISSING : $filePath\n";
        $missing++;
        continue;
    }

    $content = file_get_contents($filePath);

    $updated = preg_replace(
        "/\n\s+productIntro='[^']*'/",
        "\n        pageKey=\"{$key}\"",
        $content,
        1,
        $count
    );

    if ($count === 0) {
        echo "NO MATCH: $pagePath\n";
        $noMatch++;
        continue;
    }

    file_put_contents($filePath, $updated);
    echo "OK      : $pagePath -> $key\n";
    $ok++;
}

echo "\n";
echo "Done. OK: {$ok}  No match: {$noMatch}  Missing: {$missing}\n";
