<?php

$base = __DIR__ . '/../public/images';
$src  = "$base/custom-shirts";

$moves = [
    // brick-shirts/ (5)
    'brick-shirts' => [
        'top5pct-brick-vinyl-cresthill.jpg',
        'top5pct-brick-vinyl-jackets-joliet.jpg',
        'top5pct-brick-vinyl-custom-t-shirt.jpg',
        'top5pct-customized-brick-vinyl-shirts.jpg',
        'top5pct-brick-vinyl-hoodies.jpg',
    ],
    // digital-vinyl/ (16)
    'digital-vinyl' => [
        'top5pct-digital-vinyl-hoodie.jpg',
        'top5pct-digital-vinyl-hoodies-in-joliet.jpg',
        'top5pct-digital-vinyl-t-shirts.jpg',
        'top5pct-digital-vinyl-shirts.jpg',
        'top5pct-neon-vinyl-shirts.jpg',
        'top5pct-vinyl-shirts.jpg',
        'top5pct-vinyl-printed-shirts.jpg',
        'top5pct-vinyl-t-shirt-maker.jpg',
        'top5pct-vinyl-hoodie.jpg',
        'top5pct-vinyl-zip-up-hoodies.jpg',
        'top5pct-vinyl-caps.jpg',
        'top5pct-custom-vinyl-shirts.jpg',
        'top5pct-custom-vinyl-hoodies.jpg',
        'top5pct-custom-vinyl-hoodies-2.jpg',
        'top5pct-custom-printed-vinyl-shirts.jpg',
        'top5pct-custom-caps-vinyl.jpg',
    ],
    // flock-shirts/ (3)
    'flock-shirts' => [
        'top5pct-flock-shirt-vinyl.jpg',
        'top5pct-flock-hoodie-printing.jpg',
        'top5pct-custom-flock-t-shirt-printing.jpg',
    ],
    // foil-shirts/ (5)
    'foil-shirts' => [
        'top5pct-gold-foil-printed-shirts.jpg',
        'top5pct-custom-foil-polo.jpg',
        'top5pct-foil-custom-t-shirts.jpg',
        'top5pct-foil-gold-t-shirt.jpg',
        'top5pct-custom-wedding-foil-shirts.jpg',
    ],
    // glitter-shirts/ (1)
    'glitter-shirts' => [
        'top5pct-custom-glitter-sweatshirts-joliet.jpg',
    ],
    // glow-shirts/ (3)
    'glow-shirts' => [
        'top5pct-glowing-halloween-bat-shirt.jpg',
        'top5pct-halloween-pumpkin-glow-shirt.jpg',
        'top5pct-glow-in-the-dark-caps.jpg',
    ],
    // holographic-shirts/ (1)
    'holographic-shirts' => [
        'top5pct-holographic-vinyl-hoodie-foil.jpg',
    ],
    // reflective-shirts/ (5)
    'reflective-shirts' => [
        'top5pct-reflective-shirts.jpg',
        'top5pct-reflective-vinyl-shirts-plainfield.jpg',
        'top5pct-custom-reflective-hoodies.jpg',
        'top5pct-reflective-shirts-shorewood.jpg',
        'top5pct-reflective-shirts-gold.jpg',
    ],
    // rhinestone-apparel/ (8) — typo file renamed on arrival
    'rhinestone-apparel' => [
        'top5pct-rhinestone-ladies-shirt.jpg',
        'top5pct-rhinestone-hoodies-joliet.jpg',
        'top5pct-rhinetsone-t-shirts.jpg',
        'top5pct-rhinestone-bling-joliet.jpg',
        'top5pct-rhinestone-apparel-keith-elementary.jpg',
        'top5pct-rhinestone-hoodie-joliet-west.jpg',
        'top5pct-custom-rhinestone-shirts.jpg',
        'top5pct-rhinestone-t-shirts-joliet.jpg',
    ],
    // screen-printing/ (4)
    'screen-printing' => [
        'top5pct-screenprint-custom-shirts.jpg',
        'top5pct-screenprinting-shirts.jpg',
        'top5pct-screenprinted-shirts-joliet.jpg',
        'top5pct-screenprinted-shirts-in-joliet.jpg',
    ],
    // puff-shirts/ (3) — new dir
    'puff-shirts' => [
        'top5pct-custom-puff-shirts.jpg',
        'top5pct-puff-shirts-joliet.jpg',
        'top5pct-puff-shirts.jpg',
    ],
];

$moved   = 0;
$skipped = 0;
$errors  = [];

foreach ($moves as $dir => $files) {
    $dest = "$base/$dir";

    if (!is_dir($dest)) {
        mkdir($dest, 0755, true);
        echo "Created dir: $dir/\n";
    }

    foreach ($files as $file) {
        $from = "$src/$file";

        // rhinestone typo rename on arrival
        $toName = ($file === 'top5pct-rhinetsone-t-shirts.jpg')
            ? 'top5pct-rhinestone-t-shirts.jpg'
            : $file;

        $to = "$dest/$toName";

        if (!file_exists($from)) {
            $errors[] = "MISSING src: custom-shirts/$file";
            $skipped++;
            continue;
        }

        if (file_exists($to)) {
            $errors[] = "COLLISION dst: $dir/$toName already exists";
            $skipped++;
            continue;
        }

        if (rename($from, $to)) {
            $label = ($toName !== $file) ? "$file -> $toName" : $file;
            echo "  moved: $dir/$label\n";
            $moved++;
        } else {
            $errors[] = "FAILED rename: custom-shirts/$file -> $dir/$toName";
            $skipped++;
        }
    }
}

echo "\n--- done ---\n";
echo "Moved:   $moved\n";
echo "Skipped: $skipped\n";

if ($errors) {
    echo "\nProblems:\n";
    foreach ($errors as $e) {
        echo "  $e\n";
    }
}

echo "\nRemaining in custom-shirts/: " . count(glob("$src/*.jpg")) . " files\n";
