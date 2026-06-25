# Rhinestone Apparel — Image Status

**Blade:** `resources/views/pages/custom-apparel/printing-options/rhinestone-apparel.blade.php`
**URL:** `/custom-apparel/printing-options/rhinestone-apparel`
**Dir:** `public/images/rhinestone-apparel/` — 1 file total.
**Verified:** Jun 25, 2026

---

## Dir Inventory

| file | size | date | round |
|---|---|---|---|
| top5pct-rhinestone-tshirts-joliet.jpg | 265K | Jun 3 | R2+ |

Only one same-dir file exists. All other rhinestone files referenced by the blade live in `custom-shirts/` which is the shared custom apparel dir used across multiple pages.

---

## Image Inventory

| section / category | image | path | round | file date | size | status |
|---|---|---|---|---|---|---|
| hero — category-hero | top5pct-rhinestone-hoodies-joliet.jpg | custom-shirts/ | R1 | May 11 | 260K | good |
| carousel C-1 — carousel-rotating-images | top5pct-rhinestone-apparel-keith-elementary.jpg | custom-shirts/ | R2 | Jun 2 | 356K | good |
| carousel C-2 — carousel-rotating-images | top5pct-rhinestone-bling-joliet.jpg | custom-shirts/ | R2 | Jun 2 | 309K | good |
| carousel C-3 — carousel-rotating-images | top5pct-rhinestone-hoodie-joliet-west.jpg | custom-shirts/ | R2 | Jun 2 | 505K | good |
| carousel C-4 — carousel-rotating-images | top5pct-rhinestone-ladies-shirt.jpg | custom-shirts/ | R2 | Jun 2 | 162K | good, smallest carousel file |
| carousel C-5 — carousel-rotating-images | top5pct-rhinestone-tshirts-joliet.jpg | rhinestone-apparel/ | R2+ | Jun 3 | 265K | good, same-dir |
| card-1 — card-image-with-text | top5pct-rhinestone-t-shirts-joliet.jpg | custom-shirts/ | R2 | Jun 2 | 425K | good |
| card-2 — card-image-with-text (imagePosition right) | top5pct-custom-rhinestone-shirts.jpg | custom-shirts/ | R2 | Jun 2 | 486K | good |
| card-detailed image1 — card-detailed-info | top5pct-rhinetsone-t-shirts.jpg | custom-shirts/ | R2 | Jun 2 | 261K | good, filename has typo ("rhinetsone") |
| slide-R — card-banner-slide-in (direction right) | top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg | custom-shirts/ | Initial | Mar 16 | 23K | initial, small file, not a cross-sell (slide-R must always be cross-sell) |
| slide-L — card-banner-slide-in (direction left) | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | custom-shirts/ | Initial | Mar 16 | 27K | initial, small file, cross-sell direction (holographic) is correct but file must be R1-R3 |

**Note:** `card-detailed-info` on this page uses only `image1`. There is no `image2` slot on this component instance.

---

## R1-R3 Placement Summary

**Filled:** 9 of 11 slots
**Remaining (Initial):** 2 slots

| slot | image | size | issue |
|---|---|---|---|
| slide-R | top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg (custom-shirts/) | 23K | Initial, small file, same-category (not a cross-sell), slide-R must always be a cross-sell to R1-R3 |
| slide-L | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg (custom-shirts/) | 27K | Initial, small file, cross-sell direction is correct (holographic), but the file comes from custom-shirts/ not holographic-shirts/, and is Initial |

**Additional issue (not Initial, but requires action):**

| item | issue |
|---|---|
| carousel at 5 slots | Must drop to 4 while slide-R and slide-L are Initial. All 5 carousel slots are R2-R2+ same-category, but the cap rule applies. |
| slide-R cross-sell direction | Current title "Custom Rhinestone Shirts for Any Special Occasion" is same-page CTA language, not cross-sell language. Image AND content direction need correction when images are fixed. (Content is a separate task.) |
| card-detailed image1 filename | `top5pct-rhinetsone-t-shirts.jpg` has a typo ("rhinetsone" instead of "rhinestone"). File is R2 and functional but the filename is misspelled. |

---

## Cross-Dir File Notes

The `custom-shirts/` directory contains all rhinestone-specific images shot in rounds R1 and R2. The only dedicated `rhinestone-apparel/` dir file is `top5pct-rhinestone-tshirts-joliet.jpg` (R2+, Jun 3, 265K), placed in carousel C-5. All other carousel slots, card slots, card-detailed, and both slides draw from `custom-shirts/`.

**Files from custom-shirts/ used on this page:**

| file | size | round | used in |
|---|---|---|---|
| top5pct-rhinestone-hoodies-joliet.jpg | 260K | R1 | hero |
| top5pct-rhinestone-apparel-keith-elementary.jpg | 356K | R2 | C-1 |
| top5pct-rhinestone-bling-joliet.jpg | 309K | R2 | C-2 |
| top5pct-rhinestone-hoodie-joliet-west.jpg | 505K | R2 | C-3 |
| top5pct-rhinestone-ladies-shirt.jpg | 162K | R2 | C-4 |
| top5pct-rhinestone-t-shirts-joliet.jpg | 425K | R2 | card-1 |
| top5pct-custom-rhinestone-shirts.jpg | 486K | R2 | card-2 |
| top5pct-rhinetsone-t-shirts.jpg (typo) | 261K | R2 | card-detailed image1 |
| top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg | 23K | Initial | slide-R |
| top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | 27K | Initial | slide-L |

---

## Holographic Dir (for slide-L cross-sell reference)

`public/images/holographic-shirts/` — 3 files, all R3 (Jun 8):

| file | size | date | round |
|---|---|---|---|
| top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | 27K | Jun 8 | R3 |
| top5pct-holographic-baby-shirts.jpg | 231K | Jun 8 | R3 |
| top5pct-holographic-vinyl-hoodie-foil.jpg | 527K | Jun 8 | R3 |

Note: `top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` exists in BOTH `custom-shirts/` (27K, Mar 16, Initial) and `holographic-shirts/` (27K, Jun 8, R3). The blade currently uses the `custom-shirts/` Initial version. The `holographic-shirts/` version is R3 but still 27K — the larger R3 files in that dir are preferred.

---

## Immediate Suggestions

### 1. Drop carousel from 5 to 4 slots

Carousel is at 5 slots. slide-R and slide-L are Initial. The carousel must drop to 4.

All 5 carousel slots are R2-R2+ same-category. The weakest by file size is C-4 (`top5pct-rhinestone-ladies-shirt.jpg`, R2, 162K). Dropping it leaves C-1 through C-3 and C-5, spanning R2 and R2+.

Unlike previous pages, the dropped C-4 file has no open card slot to fill — card-1, card-2, and card-detailed image1 are all already R2. The dropped file becomes unused after this change.

| action | slot | image | round | size |
|---|---|---|---|---|
| drop | C-4 | top5pct-rhinestone-ladies-shirt.jpg (custom-shirts/) | R2 | 162K |
| keep | C-1 | top5pct-rhinestone-apparel-keith-elementary.jpg | R2 | 356K |
| keep | C-2 | top5pct-rhinestone-bling-joliet.jpg | R2 | 309K |
| keep | C-3 | top5pct-rhinestone-hoodie-joliet-west.jpg | R2 | 505K |
| keep | C-4 (renumbered) | top5pct-rhinestone-tshirts-joliet.jpg (rhinestone-apparel/) | R2+ | 265K |

Result: 4-slot carousel, R2, R2, R2, R2+. All rhinestone-specific.

### 2. Replace slide-R with a proper R1-R3 cross-sell

slide-R must always be a cross-sell to an R1-R3 file from another category. The current file is Initial (23K) AND same-category rhinestone — it fails both requirements.

The slide title "Custom Rhinestone Shirts for Any Special Occasion" is same-page CTA language rather than cross-sell language. A cross-sell slide title update is a content task for a later pass. For now, the image must become a confirmed R1-R3 cross-sell file.

Glitter is the most natural cross-sell for rhinestone — both are sparkle-based specialty materials with overlapping customer bases.

| candidate | path | round | date | size | note |
|---|---|---|---|---|---|
| top5pct-glitter-sweatshirts-joliet.jpg | glitter-shirts/ | R3 | Jun 8 | 367K | recommended, large R3 file |
| top5pct-glitter-t-shirts.jpg | glitter-shirts/ | R2 | Jun 2 | 394K | R2, also strong |
| top5pct-foil-shirts-cresthill.jpg | foil-shirts/ | R3 | Jun 8 | 336K | alternative if glitter already cross-sells elsewhere |

Recommended: `top5pct-glitter-sweatshirts-joliet.jpg` (glitter-shirts/, R3, Jun 8, 367K).

### 3. Replace slide-L with an R1-R3 holographic cross-sell

slide-L currently cross-sells to holographic shirts, which matches the slide title "Rhinestone, Holographic, Foil, Premium Effects on Any Garment." The cross-sell direction is correct. The file must change from the Initial custom-shirts/ version to an R1-R3 holographic-shirts/ file.

`holographic-shirts/` has two R3 files with meaningful size:

| candidate | path | round | date | size | note |
|---|---|---|---|---|---|
| top5pct-holographic-vinyl-hoodie-foil.jpg | holographic-shirts/ | R3 | Jun 8 | 527K | recommended, largest R3 in dir |
| top5pct-holographic-baby-shirts.jpg | holographic-shirts/ | R3 | Jun 8 | 231K | decent alternative |
| top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | holographic-shirts/ | R3 | Jun 8 | 27K | avoid, same small size as current Initial |

Recommended: `top5pct-holographic-vinyl-hoodie-foil.jpg` (holographic-shirts/, R3, Jun 8, 527K).

---

## After All 3 Suggestions Applied

| slot | image | path | round | status |
|---|---|---|---|---|
| hero | top5pct-rhinestone-hoodies-joliet.jpg | custom-shirts/ | R1 | good |
| C-1 | top5pct-rhinestone-apparel-keith-elementary.jpg | custom-shirts/ | R2 | good |
| C-2 | top5pct-rhinestone-bling-joliet.jpg | custom-shirts/ | R2 | good |
| C-3 | top5pct-rhinestone-hoodie-joliet-west.jpg | custom-shirts/ | R2 | good |
| C-4 | top5pct-rhinestone-tshirts-joliet.jpg | rhinestone-apparel/ | R2+ | good |
| card-1 | top5pct-rhinestone-t-shirts-joliet.jpg | custom-shirts/ | R2 | good |
| card-2 | top5pct-custom-rhinestone-shirts.jpg | custom-shirts/ | R2 | good |
| card-detailed image1 | top5pct-rhinetsone-t-shirts.jpg | custom-shirts/ | R2 | good (typo in filename) |
| slide-L | top5pct-holographic-vinyl-hoodie-foil.jpg | holographic-shirts/ | R3 | good, cross-sell |
| slide-R | top5pct-glitter-sweatshirts-joliet.jpg | glitter-shirts/ | R3 | good, cross-sell |

All 10 blade image slots R1-R3. Carousel at 4 slots, all rhinestone-specific. No Initial files remain. R4 audit ready.

---

## Notes

- `top5pct-rhinetsone-t-shirts.jpg` has a typo ("rhinetsone") in the filename. File is R2 (Jun 2, 261K) and loads correctly. A rename would require a blade update. Lower priority than the Initial slot fixes.
- `rhinestone-apparel/` dir has only 1 file (R2+, 265K). It is in the carousel at C-5 (C-4 after suggestion 1). Any additional rhinestone-apparel/ photos from future rounds should go there and take priority in the carousel over custom-shirts/ files.
- The dropped carousel file (`top5pct-rhinestone-ladies-shirt.jpg`, R2, 162K) has no open page slot to fill once dropped. It becomes unused.
- slide-R title "Custom Rhinestone Shirts for Any Special Occasion" does not read as a cross-sell. A content update is a separate task.
- holographic-shirts/ dir has 3 R3 files (Jun 8). The page for that category has not yet been audited. The 527K file recommended for slide-L is the most usable.
- R4 audit deferred until all 3 suggestions are applied.
