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

Only one same-dir file exists. All other rhinestone files referenced by the blade live in `custom-shirts/`, the shared custom apparel dir used across multiple pages.

---

## Image Inventory

| section / category | image | path | round | file date | size | status |
|---|---|---|---|---|---|---|
| hero — category-hero | top5pct-rhinestone-hoodies-joliet.jpg | custom-shirts/ | R1 | May 11 | 260K | good |
| carousel C-1 — carousel-rotating-images | top5pct-rhinestone-apparel-keith-elementary.jpg | custom-shirts/ | R2 | Jun 2 | 356K | good |
| carousel C-2 — carousel-rotating-images | top5pct-rhinestone-bling-joliet.jpg | custom-shirts/ | R2 | Jun 2 | 309K | good |
| carousel C-3 — carousel-rotating-images | top5pct-rhinestone-hoodie-joliet-west.jpg | custom-shirts/ | R2 | Jun 2 | 505K | good |
| carousel C-4 — carousel-rotating-images | top5pct-rhinestone-ladies-shirt.jpg | custom-shirts/ | R2 | Jun 2 | 162K | good |
| carousel C-5 — carousel-rotating-images | top5pct-rhinestone-tshirts-joliet.jpg | rhinestone-apparel/ | R2+ | Jun 3 | 265K | good, same-dir |
| carousel C-6 — carousel-rotating-images | top5pct-rhinestone-school-backpacks-joliet.jpg | rhinestone-apparel/ | R4 | Jun 25 | — | R4 placed, same-dir |
| card-1 — card-image-with-text | top5pct-rhinestone-t-shirts-joliet.jpg | custom-shirts/ | R2 | Jun 2 | 425K | good |
| card-2 — card-image-with-text (imagePosition right) | top5pct-custom-rhinestone-shirts.jpg | custom-shirts/ | R2 | Jun 2 | 486K | good |
| card-detailed image1 — card-detailed-info | top5pct-rhinetsone-t-shirts.jpg | custom-shirts/ | R2 | Jun 2 | 261K | good, filename has typo ("rhinetsone") |
| slide-R — card-banner-slide-in (direction right) | top5pct-glitter-sweatshirts-joliet.jpg | glitter-shirts/ | R3 | Jun 8 | 367K | good, cross-sell |
| slide-L — card-banner-slide-in (direction left) | top5pct-holographic-vinyl-hoodie-foil.jpg | holographic-shirts/ | R3 | Jun 8 | 527K | good, cross-sell |

**Note:** `card-detailed-info` on this page uses only `image1`. There is no `image2` slot on this component instance.

---

## R1-R3 Placement Summary

**Filled:** 12 of 12 slots (carousel expanded to 6)
**Remaining:** 0

All blade image slots are R1-R4. Carousel at 6. No Initial files remain. Page complete.

**Remaining notes (not Initial, but worth tracking):**

| item | issue |
|---|---|
| slide-R title | "Custom Rhinestone Shirts for Any Special Occasion" is same-page CTA language, not cross-sell language. A title update is a separate content task. |
| card-detailed image1 filename | `top5pct-rhinetsone-t-shirts.jpg` has a typo ("rhinetsone" instead of "rhinestone"). File is R2 and loads correctly — lower priority. |

---

## Cross-Dir File Notes

The `custom-shirts/` directory contains all rhinestone-specific images from R1 and R2. The only dedicated `rhinestone-apparel/` dir file is `top5pct-rhinestone-tshirts-joliet.jpg` (R2+, Jun 3, 265K), placed in carousel C-5. All other carousel slots, card slots, card-detailed, and both slides draw from `custom-shirts/`.

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
| top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg | 23K | Initial | unused (replaced Jun 25) |
| top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | 27K | Initial | unused (replaced Jun 25) |

---

## Holographic Dir (for slide-L cross-sell reference)

`public/images/holographic-shirts/` — 3 files, all R3 (Jun 8):

| file | size | date | round |
|---|---|---|---|
| top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | 27K | Jun 8 | R3 |
| top5pct-holographic-baby-shirts.jpg | 231K | Jun 8 | R3 |
| top5pct-holographic-vinyl-hoodie-foil.jpg | 527K | Jun 8 | R3 |

Note: `top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` exists in BOTH `custom-shirts/` (27K, Mar 16, Initial) and `holographic-shirts/` (27K, Jun 8, R3). The blade uses the Initial `custom-shirts/` version. The `holographic-shirts/` R3 version exists but is still 27K — the larger files in that dir are strongly preferred.

---

## Changes Made Jun 25, 2026

| slot | from | to |
|---|---|---|
| slide-R | top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg (custom-shirts/, Initial, 23K) | top5pct-glitter-sweatshirts-joliet.jpg (glitter-shirts/, R3, Jun 8, 367K) |
| slide-L | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg (custom-shirts/, Initial, 27K) | top5pct-holographic-vinyl-hoodie-foil.jpg (holographic-shirts/, R3, Jun 8, 527K) |

Carousel stayed at 5 — confirmed R1-R3 cross-sell images were available for both slide slots, so no carousel drop was needed.

---

## Notes

- `top5pct-rhinetsone-t-shirts.jpg` has a typo ("rhinetsone") in the filename. File is R2 (Jun 2, 261K) and loads correctly. A rename would require a blade update — lower priority than the Initial slot fixes.
- 12 of 12 slots R1-R4 as of Jun 25, 2026. Page complete.
- R4 placed Jun 25: C-6 (top5pct-rhinestone-school-backpacks-joliet.jpg, rhinestone-apparel/ same-dir). Over-target condition was already met — all non-carousel slots R1-R3.
- rhinestone-apparel/ dir now has 2 files (R2+ C-5, R4 C-6). Future rhinestone-apparel/ photos take carousel priority over custom-shirts/ files.
- slide-R title "Custom Rhinestone Shirts for Any Special Occasion" does not read as a cross-sell. Content update is a separate task.
- holographic-shirts/ dir has 3 R3 files (Jun 8). Page for that category not yet audited.
- card-detailed image1 filename typo ("rhinetsone") is a separate rename task — lower priority.
