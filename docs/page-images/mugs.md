# Mugs — Image Status

**Blade:** `resources/views/pages/promotional-items/mugs.blade.php`
**URL:** `/promotional-items/mugs`
**Dir:** `public/images/mugs/` — 8 files total
**Verified:** Jun 25, 2026

---

## Round Reference

| round | date | note |
|---|---|---|
| Initial | Mar 16/17, 2026 | |
| R1 | May 11, 2026 | |
| R2 | Jun 2, 2026 | |
| R3 | — | no R3 files in mugs/ dir |

---

## Dir Inventory

| file | size | date | round | note |
|---|---|---|---|---|
| top5pct-custom-coffee-mugs-in-joliet.jpg | 426K | May 11 | R1 | |
| top5pct-custom-coffee-mugs.jpg | 472K | May 11 | R1 | |
| top5pct-custom-mugs.jpg | 267K | May 11 | R1 | |
| top5pct-custom-mugs-near-me.jpg | 398K | May 11 | R1 | |
| top5pct-custom-printed-mugs.jpg | 388K | May 11 | R1 | |
| top5pct-picture-on-mugs.jpg | 419K | May 11 | R1 | |
| top5pct-printed-mugs.jpg | 398K | Jun 2 | R2 | |
| top5pct-printed-mugs-and-tees.jpg | 336K | May 11 | R1 | renamed from top5pct-printed-mugs-old.jpg Jun 25 |

Dir summary: 7 R1, 1 R2, 0 Initial, 0 R3. 8 files total. No Initial files in this dir.
Critical: every mugs/ file is placed in the blade. No unused same-dir files available for any additional slots.

---

## Blade Image Slots

| slot | component | image | dir | round | date | size | status |
|---|---|---|---|---|---|---|---|
| hero | category-hero | top5pct-mugs-custom-plainfield.jpg | mugs/ | R4 | Jun 25 | — | R4 placed |
| C-1 | carousel-rotating-images | top5pct-custom-coffee-mugs-in-joliet.jpg | mugs/ | R1 | May 11 | 426K | good |
| C-2 | carousel-rotating-images | top5pct-custom-coffee-mugs.jpg | mugs/ | R1 | May 11 | 472K | good |
| C-3 | carousel-rotating-images | top5pct-custom-mugs-near-me.jpg | mugs/ | R1 | May 11 | 398K | good |
| C-4 | carousel-rotating-images | top5pct-custom-mugs.jpg | mugs/ | R1 | May 11 | 267K | good |
| card-1 | card-image-with-text | top5pct-custom-printed-mugs.jpg | mugs/ | R1 | May 11 | 388K | good |
| card-2 | card-image-with-text (imagePosition right) | top5pct-picture-on-mugs.jpg | mugs/ | R1 | May 11 | 419K | good |
| card-detailed image1 | card-detailed-info | top5pct-printed-mugs.jpg | mugs/ | R2 | Jun 2 | 398K | good |
| slide-L | card-banner-slide-in (direction left) | top5pct-printed-mugs-and-tees.jpg | mugs/ | R1 | May 11 | 336K | good, same-category; renamed Jun 25 |
| slide-R | card-banner-slide-in (direction right) | top5pct-glitter-sweatshirts-joliet.jpg | glitter-shirts/ | R3 | Jun 8 | 375K | good, cross-sell; fixed Jun 25 |

---

## R1-R3 Placement Summary

**Total image slots:** 10
**Confirmed R1-R4:** 10
**Remaining to fill:** 0

All 10 image slots are R1-R4 as of Jun 25, 2026. Hero filled with R4 image.

---

## Carousel

**Current slots:** 4
**Target:** 4. May exceed 4 if all non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | image | round | status |
|---|---|---|---|
| hero | (no image) | — | missing (not a round violation) |
| card-1 | top5pct-custom-printed-mugs.jpg | R1 | good |
| card-2 | top5pct-picture-on-mugs.jpg | R1 | good |
| card-detailed image1 | top5pct-printed-mugs.jpg | R2 | good |
| slide-L | top5pct-printed-mugs-and-tees.jpg | R1 | good, same-category |
| slide-R | top5pct-glitter-sweatshirts-joliet.jpg | R3 | good, cross-sell |

All referenced non-carousel slots are R1-R3. The hero has no image parameter — it is not a round violation but it is an unoccupied slot. Carousel is at exactly 4, all mugs/ R1. Expansion is eligible for the 5 slots that are R1-R3 (all non-carousel referenced slots qualify). R4 must supply new mugs/ images since none remain in the dir.

---

## Rule Violations

### slide-R — resolved Jun 25, 2026

slide-R previously used `top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` with an incorrect path (`/images/custom-shirts/`) while the actual file lived in `glitter-shirts/`. That file was also Initial (Mar 16, 30K). Two violations: broken path + Initial.

**Fix applied Jun 25:** replaced with `top5pct-glitter-sweatshirts-joliet.jpg` (glitter-shirts/, R3, Jun 8, 375K). Path corrected to `/images/glitter-shirts/`. Both violations resolved. Cross-sell direction preserved — glitter apparel is a natural bundle companion to branded mugs for event packages.

### slide-L rename — Jun 25, 2026

slide-L previously referenced `top5pct-printed-mugs-old.jpg`. The `-old` suffix indicated a name collision on import. File renamed on disk to `top5pct-printed-mugs-and-tees.jpg` for SEO clarity. Blade reference updated to match.

---

## Slide Rules Check

| slot | direction | image | dir | round | rule | status |
|---|---|---|---|---|---|---|
| slide-L | left | top5pct-printed-mugs-and-tees.jpg | mugs/ | R1 | same-category allowed; must be R1-R3 | good, same-category, R1; renamed Jun 25 |
| slide-R | right | top5pct-glitter-sweatshirts-joliet.jpg | glitter-shirts/ | R3 | must be cross-sell R1-R3 from another category | good, cross-sell, R3; fixed Jun 25 |

slide-R cross-sells to glitter-shirts/ (R3, Jun 8, 375K). Custom glitter apparel is referenced multiple times in the blade as an event bundle companion to mugs. The title "Bundle Mugs With Custom Apparel for Event Packages" aligns directly with the cross-sell.

---

## Immediate Suggestions

### hero — deferred to R4

No mugs/ files remain to assign to the hero. R4 must supply a hero-quality mugs/ image. The category-hero component should receive an `image=` attribute matching the standard used by all other reviewed category pages.

---

## File Usage Count

| file | dir | size | round | used in |
|---|---|---|---|---|
| top5pct-custom-coffee-mugs-in-joliet.jpg | mugs/ | 426K | R1 | C-1 only |
| top5pct-custom-coffee-mugs.jpg | mugs/ | 472K | R1 | C-2 only |
| top5pct-custom-mugs-near-me.jpg | mugs/ | 398K | R1 | C-3 only |
| top5pct-custom-mugs.jpg | mugs/ | 267K | R1 | C-4 only |
| top5pct-custom-printed-mugs.jpg | mugs/ | 388K | R1 | card-1 only |
| top5pct-picture-on-mugs.jpg | mugs/ | 419K | R1 | card-2 only |
| top5pct-printed-mugs.jpg | mugs/ | 398K | R2 | card-detailed image1 only |
| top5pct-printed-mugs-and-tees.jpg | mugs/ | 336K | R1 | slide-L only; renamed from top5pct-printed-mugs-old.jpg Jun 25 |
| top5pct-glitter-sweatshirts-joliet.jpg | glitter-shirts/ | 375K | R3 | slide-R only |
| top5pct-mugs-custom-plainfield.jpg | mugs/ | — | R4 | hero only |

No duplicate image use across blade slots. All 9 mugs/ files are placed — none unused.

---

## Notes

- 10 of 10 image slots R1-R4 as of Jun 25, 2026. Page complete.
- Hero filled Jun 25 with top5pct-mugs-custom-plainfield.jpg (R4). Hero was previously imageless.
- slide-R double violation (broken path + Initial) resolved Jun 25: replaced with glitter-shirts/ R3.
- slide-L renamed Jun 25: top5pct-printed-mugs-old.jpg renamed to top5pct-printed-mugs-and-tees.jpg on disk and in blade.
- All 9 mugs/ files are placed. No unused same-dir files. No Initial files in mugs/ dir.
- Carousel at 4, all mugs/ R1. Over-target condition met — eligible for expansion if new mugs/ files arrive.
