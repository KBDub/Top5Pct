# Broken Image References After custom-shirts/ Migration

After the Jun 25 migration moved files out of `custom-shirts/` into technique directories, several view files still reference the old paths. The images now 404 because the files no longer exist at those locations.

All fixes are path updates only — no new photography needed. The files exist, just at new paths.

---

## Summary

| Page | Broken refs | Fix needed |
|---|---|---|
| printing-options/screen-printing | 6 | update custom-shirts/ → screen-printing/ or digital-vinyl/ |
| printing-options/rhinestone-apparel | 8 | update custom-shirts/ → rhinestone-apparel/ |
| specialty-materials/puff-shirts | 7 | update custom-shirts/ → puff-shirts/ or digital-vinyl/ |
| specialty-materials/flock-shirts | 2 | update custom-shirts/ → digital-vinyl/ and holographic-shirts/ |
| specialty-materials/brick-shirts | 5 | update custom-shirts/ → brick-shirts/ |
| specialty-materials/holographic-shirts | 1 | update custom-shirts/ → (judgment call file, still in custom-shirts/) |
| specialty-materials/foil-shirts | 4 | update custom-shirts/ → foil-shirts/ |

---

## screen-printing.blade.php

File: `resources/views/pages/custom-apparel/printing-options/screen-printing.blade.php`

| Line | Current (broken) path | Correct path | Status |
|---|---|---|---|
| 50 | /images/custom-shirts/top5pct-screenprinted-shirts-joliet.jpg | /images/custom-shirts/top5pct-screenprinted-shirts-joliet.jpg | EXISTS — no change needed |
| 59 | /images/custom-shirts/top5pct-screenprint-custom-shirts.jpg | /images/screen-printing/top5pct-screenprint-custom-shirts.jpg | MOVED |
| 60 | /images/custom-shirts/top5pct-screenprinted-shirts-in-joliet.jpg | /images/screen-printing/top5pct-screenprinted-shirts-in-joliet.jpg | MOVED |
| 61 | /images/custom-shirts/top5pct-custom-shirt-pictures.jpg | /images/custom-shirts/top5pct-custom-shirt-pictures.jpg | EXISTS — no change needed |
| 62 | /images/custom-shirts/top5pct-screenprinting-shirts.jpg | /images/screen-printing/top5pct-screenprinting-shirts.jpg | MOVED |
| 79 | /images/custom-shirts/top5pct-neon-vinyl-shirts.jpg | /images/digital-vinyl/top5pct-neon-vinyl-shirts.jpg | MOVED |
| 89 | /images/custom-shirts/top5pct-vinyl-caps.jpg | /images/digital-vinyl/top5pct-vinyl-caps.jpg | MOVED |
| 106 | /images/custom-shirts/top5pct-long-lasting-graphic-shirts.jpg | /images/custom-shirts/top5pct-long-lasting-graphic-shirts.jpg | EXISTS — no change needed |
| 135 | /images/custom-shirts/top5pct-screenprinting-shirts.jpg | /images/screen-printing/top5pct-screenprinting-shirts.jpg | MOVED |

---

## rhinestone-apparel.blade.php

File: `resources/views/pages/custom-apparel/printing-options/rhinestone-apparel.blade.php`

| Line | Current (broken) path | Correct path | Status |
|---|---|---|---|
| 50 | /images/custom-shirts/top5pct-rhinestone-hoodies-joliet.jpg | /images/rhinestone-apparel/top5pct-rhinestone-hoodies-joliet.jpg | MOVED |
| 59 | /images/custom-shirts/top5pct-rhinestone-apparel-keith-elementary.jpg | /images/rhinestone-apparel/top5pct-rhinestone-apparel-keith-elementary.jpg | MOVED |
| 60 | /images/custom-shirts/top5pct-rhinestone-bling-joliet.jpg | /images/rhinestone-apparel/top5pct-rhinestone-bling-joliet.jpg | MOVED |
| 61 | /images/custom-shirts/top5pct-rhinestone-hoodie-joliet-west.jpg | /images/rhinestone-apparel/top5pct-rhinestone-hoodie-joliet-west.jpg | MOVED |
| 62 | /images/custom-shirts/top5pct-rhinestone-ladies-shirt.jpg | /images/rhinestone-apparel/top5pct-rhinestone-ladies-shirt.jpg | MOVED |
| 74 | /images/custom-shirts/top5pct-rhinestone-t-shirts-joliet.jpg | /images/rhinestone-apparel/top5pct-rhinestone-t-shirts-joliet.jpg | MOVED |
| 84 | /images/custom-shirts/top5pct-custom-rhinestone-shirts.jpg | /images/rhinestone-apparel/top5pct-custom-rhinestone-shirts.jpg | MOVED |
| 101 | /images/custom-shirts/top5pct-rhinetsone-t-shirts.jpg | /images/rhinestone-apparel/top5pct-rhinestone-t-shirts.jpg | MOVED + RENAMED (typo fixed) |

---

## puff-shirts.blade.php

File: `resources/views/pages/custom-apparel/puff-shirts.blade.php`

| Line | Current (broken) path | Correct path | Status |
|---|---|---|---|
| 50 | /images/custom-shirts/top5pct-custom-puff-shirts.jpg | /images/puff-shirts/top5pct-custom-puff-shirts.jpg | MOVED |
| 59 | /images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg | /images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg | EXISTS — no change needed |
| 60 | /images/custom-shirts/top5pct-puff-shirts-joliet.jpg | /images/puff-shirts/top5pct-puff-shirts-joliet.jpg | MOVED |
| 61 | /images/custom-shirts/top5pct-puff-shirts.jpg | /images/puff-shirts/top5pct-puff-shirts.jpg | MOVED |
| 62 | /images/custom-shirts/top5pct-custom-vinyl-shirts.jpg | /images/digital-vinyl/top5pct-custom-vinyl-shirts.jpg | MOVED |
| 73 | /images/custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | /images/custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | EXISTS — no change needed |
| 83 | /images/custom-shirts/top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg | /images/custom-shirts/top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg | EXISTS — no change needed |
| 100 | /images/custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | /images/custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | EXISTS — no change needed |
| 129 | /images/custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | /images/custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | EXISTS — no change needed |
| 136 | /images/custom-shirts/top5pct-rhinetsone-t-shirts.jpg | /images/rhinestone-apparel/top5pct-rhinestone-t-shirts.jpg | MOVED + RENAMED (typo fixed) |

---

## flock-shirts.blade.php

File: `resources/views/pages/custom-apparel/flock-shirts.blade.php`

| Line | Current (broken) path | Correct path | Status |
|---|---|---|---|
| 62 | /images/custom-shirts/top5pct-custom-vinyl-shirts.jpg | /images/digital-vinyl/top5pct-custom-vinyl-shirts.jpg | MOVED |
| 136 | /images/custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | /images/custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | EXISTS — no change needed |

---

## brick-shirts.blade.php

File: `resources/views/pages/custom-apparel/brick-shirts.blade.php`

| Line | Current (broken) path | Correct path | Status |
|---|---|---|---|
| 50 | /images/custom-shirts/top5pct-brick-vinyl-hoodies.jpg | /images/brick-shirts/top5pct-brick-vinyl-hoodies.jpg | MOVED |
| 59 | /images/custom-shirts/top5pct-brick-vinyl-custom-t-shirt.jpg | /images/brick-shirts/top5pct-brick-vinyl-custom-t-shirt.jpg | MOVED |
| 60 | /images/custom-shirts/top5pct-customized-brick-vinyl-shirts.jpg | /images/brick-shirts/top5pct-customized-brick-vinyl-shirts.jpg | MOVED |
| 73 | /images/custom-shirts/top5pct-brick-vinyl-jackets-joliet.jpg | /images/brick-shirts/top5pct-brick-vinyl-jackets-joliet.jpg | MOVED |
| 83 | /images/custom-shirts/top5pct-brick-vinyl-cresthill.jpg | /images/brick-shirts/top5pct-brick-vinyl-cresthill.jpg | MOVED |
| 100 | /images/custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | /images/custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | EXISTS — no change needed |

---

## holographic-shirts.blade.php

File: `resources/views/pages/custom-apparel/holographic-shirts.blade.php`

| Line | Current (broken) path | Correct path | Status |
|---|---|---|---|
| 135 | /images/custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | /images/custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | EXISTS — no change needed |

Note: holographic-shirts.blade.php has no broken refs — the one custom-shirts file it references still exists on disk. If the page is still showing 404 images, the issue is elsewhere on that specific page.

---

## foil-shirts.blade.php

File: `resources/views/pages/custom-apparel/foil-shirts.blade.php`

| Line | Current (broken) path | Correct path | Status |
|---|---|---|---|
| 50 | /images/custom-shirts/top5pct-foil-gold-t-shirt.jpg | /images/foil-shirts/top5pct-foil-gold-t-shirt.jpg | MOVED |
| 73 | /images/custom-shirts/top5pct-gold-foil-printed-shirts.jpg | /images/foil-shirts/top5pct-gold-foil-printed-shirts.jpg | MOVED |
| 83 | /images/custom-shirts/top5pct-custom-wedding-foil-shirts.jpg | /images/foil-shirts/top5pct-custom-wedding-foil-shirts.jpg | MOVED |
| 100 | /images/custom-shirts/top5pct-foil-custom-t-shirts.jpg | /images/foil-shirts/top5pct-foil-custom-t-shirts.jpg | MOVED |

---

## Special case: rhinetsone typo

Two views reference the old typo filename:
- `rhinestone-apparel.blade.php` line 101: `top5pct-rhinetsone-t-shirts.jpg`
- `puff-shirts.blade.php` line 136: `top5pct-rhinetsone-t-shirts.jpg`

The file was renamed during migration to `top5pct-rhinestone-t-shirts.jpg` and moved to `rhinestone-apparel/`. Both references need the path and filename corrected.

---

## Files confirmed still in custom-shirts/ (no path change needed)

These are referenced under `/images/custom-shirts/` and the file is still there:
- `top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg`
- `top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg`
- `top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg`
- `top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg`
- `top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg`
- `top5pct-custom-shirt-pictures.jpg`
- `top5pct-long-lasting-graphic-shirts.jpg`
- `top5pct-screenprinted-shirts-joliet.jpg`
