# Standard Stickers & Decals — Image Status

**Blade:** `resources/views/pages/stickers/standard-stickers.blade.php`
**URL:** `/stickers/standard-stickers-decals`
**Dir:** `public/images/standard-stickers-decals/` — 2 files total
**Verified:** Jun 25, 2026

---

## Round Reference

| round | date | note |
|---|---|---|
| Initial | Mar 16/17, 2026 | |
| R1 | May 11, 2026 | |
| R2 | Jun 2, 2026 | |
| R3 | Jun 8, 2026 | |

---

## Dir Inventory — standard-stickers-decals/

| file | size | date | round | placed in blade |
|---|---|---|---|---|
| top5pct-article-buy-stickers-decals-joliet.jpg | 62K | Jun 8 | R3 | card-detailed image1 |
| top5pct-diecut-stickers.jpg | 295K | Jun 8 | R3 | not placed on this page (used on custom-shaped-stickers page) |

Dir summary: 0 Initial, 0 R1, 0 R2, 2 R3. Only 2 files total.
Critical note: the standard-stickers-decals/ dir is severely under-resourced with only 2 files, both R3. The blade cannot build a full carousel or a complete body from same-dir files. The blade draws from custom-shaped-stickers-decals/ (the sibling sticker dir, 17 files) for nearly all image slots. This is the defining constraint for this page and must be resolved in R4 with new standard-stickers-decals/ images.

Unused same-dir R1-R3 file: top5pct-diecut-stickers.jpg (R3, 295K) — available for placement on this page. Note: this file is also referenced in the custom-shaped-stickers blade (card-1), so it belongs to both pages' inventory in practice.

---

## Cross-Dir Inventory Used — custom-shaped-stickers-decals/

This page uses 12 of its 14 image slots from custom-shaped-stickers-decals/. Full inventory of that dir with placement status on this blade:

| file | size | date | round | placed in this blade |
|---|---|---|---|---|
| top5pct-banner-stickers-decals-joliet.jpg | 57K | Mar 16 | Initial | no |
| top5pct-custom-glossy-stickers-in-joliet.jpg | 431K | May 11 | R1 | C-4 |
| top5pct-custom-label-stickers.jpg | 691K | May 11 | R1 | card-1 |
| top5pct-custom-shaped-stickers-cresthill.jpg | 667K | Jun 2 | R2 | no — unused R2, available |
| top5pct-custom-shaped-stickers.jpg | 488K | May 11 | R1 | card-2 |
| top5pct-custom-stickers-cresthill.jpg | 291K | Jun 2 | R2 | hero AND slide-L — duplicate |
| top5pct-custom-stickers.jpg | 523K | May 11 | R1 | C-1 |
| top5pct-die-cut-stickers-joliet.jpg | 205K | Jun 2 | R2 | no — unused R2, available |
| top5pct-die-cut-stickers-joliet-r3.jpg | 355K | Jun 8 | R3 | C-3 |
| top5pct-die-cut-stickers-shorewood.jpg | 315K | Jun 2 | R2 | slide-R |
| top5pct-stickers-decals-joliet-beer-brewery.jpg | 45K | Mar 16 | Initial | no |
| top5pct-stickers-decals-joliet-boxing-sports.jpg | 45K | Mar 16 | Initial | no |
| top5pct-stickers-decals-joliet-labels.jpg | 43K | Mar 16 | Initial | card-2image-1 image1 (violation) |
| top5pct-stickers-decals-joliet-ocean-viewz.jpg | 36K | Mar 16 | Initial | card-2image-1 image2 (violation) |
| top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg | 41K | Mar 16 | Initial | card-2image-2 image1 (violation) |
| top5pct-stickers-decals-joliet-volleyball-team.jpg | 44K | Mar 16 | Initial | card-2image-2 image2 (violation) |
| top5pct-stickers-in-joliet.jpg | 464K | May 11 | R1 | C-2 |

Unused custom-shaped-stickers-decals/ R1-R3 files on this blade: top5pct-custom-shaped-stickers-cresthill.jpg (R2, 667K) and top5pct-die-cut-stickers-joliet.jpg (R2, 205K).

---

## Blade Image Slots

Slots in blade order. Banner is first, carousel next, then body, then slides.

| slot | component | image | dir | round | date | size | status |
|---|---|---|---|---|---|---|---|
| hero | category-hero | top5pct-custom-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | R2 | Jun 2 | 291K | good; cross-dir, body position, not a slide |
| C-1 | carousel-rotating-images | top5pct-custom-stickers.jpg | custom-shaped-stickers-decals/ | R1 | May 11 | 523K | good |
| C-2 | carousel-rotating-images | top5pct-stickers-in-joliet.jpg | custom-shaped-stickers-decals/ | R1 | May 11 | 464K | good |
| C-3 | carousel-rotating-images | top5pct-die-cut-stickers-joliet-r3.jpg | custom-shaped-stickers-decals/ | R3 | Jun 8 | 355K | good |
| C-4 | carousel-rotating-images | top5pct-custom-glossy-stickers-in-joliet.jpg | custom-shaped-stickers-decals/ | R1 | May 11 | 431K | good |
| card-1 | card-image-with-text | top5pct-custom-label-stickers.jpg | custom-shaped-stickers-decals/ | R1 | May 11 | 691K | good |
| card-2 | card-image-with-text (imagePosition right) | top5pct-custom-shaped-stickers.jpg | custom-shaped-stickers-decals/ | R1 | May 11 | 488K | good |
| card-2image-1 image1 | card-2image-with-text | top5pct-custom-shaped-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | R2 | Jun 2 | 667K | good — R2, was Initial |
| card-2image-1 image2 | card-2image-with-text | top5pct-die-cut-stickers-joliet.jpg | custom-shaped-stickers-decals/ | R2 | Jun 2 | 205K | good — R2, was Initial |
| card-2image-2 image1 | card-2image-with-text | top5pct-diecut-stickers.jpg | standard-stickers-decals/ | R3 | Jun 8 | 295K | good — R3 same-dir, was Initial |
| card-2image-2 image2 | card-2image-with-text | top5pct-stickers-morris.jpg | standard-stickers-decals/ | R4 | Jun 25 | — | good — R4 same-dir, was Initial |
| card-detailed image1 | card-detailed-info | top5pct-article-buy-stickers-decals-joliet.jpg | standard-stickers-decals/ | R3 | Jun 8 | 62K | good; same-dir |
| slide-L | card-banner-slide-in (direction left) | top5pct-stickers-plainfield.jpg | standard-stickers-decals/ | R4 | Jun 25 | — | good — R4 same-dir; hero duplicate resolved |
| slide-R | card-banner-slide-in (direction right) | top5pct-die-cut-stickers-shorewood.jpg | custom-shaped-stickers-decals/ | R2 | Jun 2 | 315K | good; cross-sell to custom-shaped-stickers product; R2 |

---

## R1-R3 Placement Summary

**Total image slots with an image path referenced:** 14
**Confirmed R1-R4:** 14 of 14
**Round violations:** 0

All 4 Initial card-2image violations resolved Jun 25. slide-L hero duplicate also resolved. Page complete.

---

## Carousel

**Current slots:** 4 (at target)
**Target:** 4.

Over-target condition IS met as of Jun 25 — all non-carousel slots are now R1-R4. No additional same-dir files remain for carousel expansion. Carousel stays at 4.

All 4 carousel slots remain cross-dir (custom-shaped-stickers-decals/, R1-R3). Valid. R5 should target new standard-stickers-decals/ images to build a same-dir carousel.

---

## Slide Rules Check

| slot | direction | image | dir | round | rule | status |
|---|---|---|---|---|---|---|
| slide-L | left | top5pct-stickers-plainfield.jpg | standard-stickers-decals/ | R4 | same-category allowed (direction left) | good — R4 same-dir; hero duplicate resolved Jun 25 |
| slide-R | right | top5pct-die-cut-stickers-shorewood.jpg | custom-shaped-stickers-decals/ | R2 | must be cross-sell R1-R3 from another category | good — cross-sell to custom-shaped-stickers; R2 |

Both slides clean. slide-R is a proper cross-sell (custom-shaped-stickers-decals/, R2). slide-L is same-category (direction left, valid) with a new R4 same-dir image — hero duplicate resolved.

---

## Duplicate Image Usage

None. The hero/slide-L duplicate (`top5pct-custom-stickers-cresthill.jpg`) was resolved Jun 25 when slide-L was replaced with `top5pct-stickers-plainfield.jpg` (R4, standard-stickers-decals/).

---

## Immediate Suggestions

All priorities resolved Jun 25. Page complete.

- 4 Initial card-2image slots replaced (card-2image-1 image1 + image2 with R2 cross-dir files; card-2image-2 image1 with R3 same-dir; card-2image-2 image2 with R4 same-dir).
- slide-L hero duplicate resolved with R4 same-dir file.
- Same-dir carousel remains an R5 goal. Current carousel is cross-dir (custom-shaped-stickers-decals/, R1-R3) — valid for now.

---

## File Usage Count

| file | dir | size | round | used in |
|---|---|---|---|---|
| top5pct-custom-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | 291K | R2 | hero AND slide-L (duplicate) |
| top5pct-custom-stickers.jpg | custom-shaped-stickers-decals/ | 523K | R1 | C-1 only |
| top5pct-stickers-in-joliet.jpg | custom-shaped-stickers-decals/ | 464K | R1 | C-2 only |
| top5pct-die-cut-stickers-joliet-r3.jpg | custom-shaped-stickers-decals/ | 355K | R3 | C-3 only |
| top5pct-custom-glossy-stickers-in-joliet.jpg | custom-shaped-stickers-decals/ | 431K | R1 | C-4 only |
| top5pct-custom-label-stickers.jpg | custom-shaped-stickers-decals/ | 691K | R1 | card-1 only |
| top5pct-custom-shaped-stickers.jpg | custom-shaped-stickers-decals/ | 488K | R1 | card-2 only |
| top5pct-custom-shaped-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | 667K | R2 | card-2image-1 image1 only |
| top5pct-die-cut-stickers-joliet.jpg | custom-shaped-stickers-decals/ | 205K | R2 | card-2image-1 image2 only |
| top5pct-diecut-stickers.jpg | standard-stickers-decals/ | 295K | R3 | card-2image-2 image1 only |
| top5pct-stickers-morris.jpg | standard-stickers-decals/ | — | R4 | card-2image-2 image2 only |
| top5pct-stickers-plainfield.jpg | standard-stickers-decals/ | — | R4 | slide-L only |
| top5pct-article-buy-stickers-decals-joliet.jpg | standard-stickers-decals/ | 62K | R3 | card-detailed image1 only |
| top5pct-die-cut-stickers-shorewood.jpg | custom-shaped-stickers-decals/ | 315K | R2 | slide-R only |
| top5pct-stickers-decals-joliet-labels.jpg | custom-shaped-stickers-decals/ | 43K | Initial | removed from blade (was card-2image-1 image1) |
| top5pct-stickers-decals-joliet-ocean-viewz.jpg | custom-shaped-stickers-decals/ | 36K | Initial | removed from blade (was card-2image-1 image2) |
| top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg | custom-shaped-stickers-decals/ | 41K | Initial | removed from blade (was card-2image-2 image1) |
| top5pct-stickers-decals-joliet-volleyball-team.jpg | custom-shaped-stickers-decals/ | 44K | Initial | removed from blade (was card-2image-2 image2) |
| top5pct-custom-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | 291K | R2 | hero only (was also slide-L; duplicate resolved Jun 25) |

---

## Notes

- 14 of 14 slots R1-R4 as of Jun 25, 2026. Page complete.
- 5 changes made Jun 25: card-2image-1 image1 (R2), card-2image-1 image2 (R2), card-2image-2 image1 (R3), card-2image-2 image2 (R4), slide-L (R4).
- All 4 Initial violations cleared. Hero/slide-L duplicate resolved.
- Both R4 standard-stickers-decals/ files placed (stickers-morris.jpg → card-2image-2 image2; stickers-plainfield.jpg → slide-L).
- Carousel remains cross-dir (custom-shaped-stickers-decals/, R1-R3) — valid. R5 should supply standard-stickers-decals/ images for a same-dir carousel.
- standard-stickers-decals/ dir now has 4 files: article-buy (R3, card-detailed), diecut-stickers (R3, card-2image-2 image1), stickers-morris (R4, card-2image-2 image2), stickers-plainfield (R4, slide-L).
