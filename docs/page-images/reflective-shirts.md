# Reflective Shirts — Image Status

**Blade:** `resources/views/pages/custom-apparel/reflective-shirts.blade.php`
**URL:** `/custom-apparel/specialty-materials/reflective-shirts`
**Dir:** `public/images/reflective-shirts/` — 6 files total. 5 referenced by the blade. 1 unused (freed from card-detailed).
**Verified:** Jun 25, 2026

---

## Image Inventory

| section / category | image | path | round | file date | size | status |
|---|---|---|---|---|---|---|
| hero — category-hero | top5pct-reflective-shirts-gold.jpg | reflective-shirts/ | R3 | Jun 8 | 304K | good |
| carousel C-1 — carousel-rotating-images | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | reflective-shirts/ | Initial | Jun 8 | 26K | initial, small file |
| carousel C-2 — carousel-rotating-images | top5pct-custom-reflective-hoodies.jpg | reflective-shirts/ | R3 | Jun 8 | 223K | good |
| carousel C-3 — carousel-rotating-images | top5pct-reflective-shirts.jpg | reflective-shirts/ | R3 | Jun 8 | 124K | good |
| carousel C-4 — carousel-rotating-images | top5pct-reflective-shirts-shorewood.jpg | reflective-shirts/ | R3 | Jun 8 | 235K | good |
| card-1 — card-image-with-text | top5pct-reflective-vinyl-shirts-plainfield.jpg | reflective-shirts/ | R3 | Jun 8 | 166K | good |
| card-2 — card-image-with-text (imagePosition right) | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | reflective-shirts/ | Initial | Jun 8 | 26K | initial, small file, repeat of C-1 |
| card-detailed image1 — card-detailed-info | top5pct-foil-shirts-cresthill.jpg | foil-shirts/ | R3 | Jun 8 | 336K | good, cross-sell |
| slide-L — card-banner-slide-in (direction left) | top5pct-vinyl-shirts.jpg | vinyl/ | R3 | Jun 8 | 379K | good, cross-sell |
| slide-R — card-banner-slide-in (direction right) | top5pct-halloween-pumpkin-glow-shirt.jpg | glow-shirts/ | R3 | Jun 8 | 353K | good, cross-sell |

**Note:** `card-detailed-info` on this page uses only `image1`. There is no `image2` slot on this component instance.

---

## R1-R3 Placement Summary

**Filled:** 9 of 10 slots
**Remaining (Initial):** 1 slot

| slot | image | size | issue |
|---|---|---|---|
| carousel C-1 | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg (reflective-shirts/) | 26K | Initial, small file |

carousel C-2 through C-4 and all card slots are R3. slide-L and slide-R are R3 cross-sells. The only outstanding Initial slot is C-1, which also repeats in card-2 (also Initial).

---

## Unused Files in Dir

| file | round | date | size | note |
|---|---|---|---|---|
| top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | Initial | Jun 8 | 26K | still referenced by C-1 and card-2 |

No files in reflective-shirts/ are truly unused, but the 26K Initial file has been removed from card-detailed and slide-L as of Jun 25. It remains in C-1 and card-2.

---

## File Usage Count (current)

| file | path | size | round | used in |
|---|---|---|---|---|
| top5pct-reflective-shirts-gold.jpg | reflective-shirts/ | 304K | R3 | hero only |
| top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | reflective-shirts/ | 26K | Initial | C-1, card-2 (2 slots) |
| top5pct-custom-reflective-hoodies.jpg | reflective-shirts/ | 223K | R3 | C-2 only |
| top5pct-reflective-shirts.jpg | reflective-shirts/ | 124K | R3 | C-3 only |
| top5pct-reflective-shirts-shorewood.jpg | reflective-shirts/ | 235K | R3 | C-4 only |
| top5pct-reflective-vinyl-shirts-plainfield.jpg | reflective-shirts/ | 166K | R3 | card-1 only |
| top5pct-foil-shirts-cresthill.jpg | foil-shirts/ | 336K | R3 | card-detailed image1 |
| top5pct-vinyl-shirts.jpg | vinyl/ | 379K | R3 | slide-L |
| top5pct-halloween-pumpkin-glow-shirt.jpg | glow-shirts/ | 353K | R3 | slide-R |

---

## Changes Made Jun 25, 2026

| slot | from | to |
|---|---|---|
| card-detailed image1 | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg (reflective-shirts/, Initial, 26K) | top5pct-foil-shirts-cresthill.jpg (foil-shirts/, R3, Jun 8, 336K) |
| slide-L | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg (reflective-shirts/, Initial, 26K) | top5pct-vinyl-shirts.jpg (vinyl/, R3, Jun 8, 379K) |
| slide-R | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg (custom-shirts/, Initial, Mar 16, 29K) | top5pct-halloween-pumpkin-glow-shirt.jpg (glow-shirts/, R3, Jun 8, 353K) |
| doc correction | C-1 classified as R3 | corrected to Initial |

---

## Remaining Issues

| slot | image | issue |
|---|---|---|
| C-1 | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg (26K, Initial) | Initial, small file, also in card-2 |
| card-2 | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg (26K, Initial) | Initial, small file, repeat of C-1 |

Both C-1 and card-2 use the same 26K Initial file. No unused R3 reflective-shirts files remain to replace them. New photos are needed in reflective-shirts/ for these two slots. R4 audit deferred until C-1 and card-2 are resolved.

---

## Notes

- Carousel is 4 slots. C-2 through C-4 are R3. C-1 is Initial. One new photo in reflective-shirts/ would resolve C-1 and eliminate the double-use of the 26K file.
- slide-L cross-sell: vinyl/ (R3, Jun 8) — vinyl is the direct parent process of reflective printing.
- slide-R cross-sell: glow-shirts/ (R3, Jun 8) — matches the slide title "Glow in the Dark or Reflective, Both Built for Visibility."
- card-detailed image1 cross-sell: foil-shirts/ (R3, Jun 8) — specialty materials cross-sell appropriate for the long-form article section.
- glow-shirts/ dir confirmed to contain 4 files, all R3 (Jun 8): top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg (29K), top5pct-glowing-halloween-bat-shirt.jpg (252K), top5pct-glow-in-the-dark-caps.jpg (298K), top5pct-halloween-pumpkin-glow-shirt.jpg (353K).
