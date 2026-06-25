# Can Koozies — Image Status

**Blade:** `resources/views/pages/promotional-items/can-koozies.blade.php`
**URL:** `/promotional-items/can-koozies`
**Dir:** `public/images/can-koozies/` — 5 files total
**Verified:** Jun 25, 2026 | **R4 placed:** Jun 25, 2026

---

## Round Reference

| round | date | note |
|---|---|---|
| Initial | Mar 16/17, 2026 | |
| R1 | May 11, 2026 | |
| R2 | Jun 2, 2026 | |
| R3 | — | no R3 files in this dir |

---

## Dir Inventory

| file | size | date | round | note |
|---|---|---|---|---|
| top5pct-can-koozies.jpg | 417K | May 11 | R1 | |
| top5pct-custom-koozies.jpg | 402K | May 11 | R1 | |
| top5pct-custom-can-koozies.jpg | 311K | Jun 2 | R2 | |
| top5pct-koozies-joliet.jpg | 479K | Jun 2 | R2 | |
| top5pct-personalized-koozies-joliet.jpg | 271K | Jun 2 | R2 | |

Dir summary: 2 R1, 3 R2, 0 Initial, 0 R3. 5 files total. No Initial files in this dir.
Critical: every can-koozies/ file is placed in the blade. No unused same-dir files available for any additional slots.

---

## Blade Image Slots

Slots in blade order. Banner is first, carousel next, then body, then slides.

| slot | component | image | dir | round | date | size | status |
|---|---|---|---|---|---|---|---|
| hero | category-hero | top5pct-koozie-can-joliet.jpg | can-koozies/ | R4 | Jun 25 | — | R4 placed |
| C-1 | carousel-rotating-images | top5pct-can-koozies.jpg | can-koozies/ | R1 | May 11 | 417K | good |
| C-2 | carousel-rotating-images | top5pct-custom-koozies.jpg | can-koozies/ | R1 | May 11 | 402K | good |
| C-3 | carousel-rotating-images | top5pct-custom-can-koozies.jpg | can-koozies/ | R2 | Jun 2 | 311K | good |
| C-4 | carousel-rotating-images | top5pct-koozies-joliet.jpg | can-koozies/ | R2 | Jun 2 | 479K | good |
| card-1 | card-image-with-text | top5pct-personalized-koozies-joliet.jpg | can-koozies/ | R2 | Jun 2 | 271K | good |
| card-2 | card-image-with-text (imagePosition right) | top5pct-koozies-channahon.jpg | can-koozies/ | R4 | Jun 25 | — | R4 placed; duplicate with C-3 resolved |
| card-detailed image1 | card-detailed-info | top5pct-koozies-joliet.jpg | can-koozies/ | R2 | Jun 2 | 479K | good round; duplicate of C-4 |
| slide-R | card-banner-slide-in (direction right) | top5pct-custom-coffee-mugs-in-joliet.jpg | mugs/ | R1 | May 11 | 426K | R1 cross-sell placed; rule violation cleared |
| slide-L | card-banner-slide-in (direction left) | top5pct-screenprinted-shirts-joliet.jpg | custom-shirts/ | R1 | May 11 | 304K | R1 cross-sell placed; Initial violation cleared |

---

## R1-R3 Placement Summary

**Total image slots:** 10 (hero now filled)
**Confirmed R1-R4:** 10
**Round violations:** 0

---

## Carousel

**Current slots:** 4
**Target:** 4. May exceed 4 only if all non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | image | round | status |
|---|---|---|---|
| hero | top5pct-koozie-can-joliet.jpg | R4 | good |
| card-1 | top5pct-personalized-koozies-joliet.jpg | R2 | good |
| card-2 | top5pct-koozies-channahon.jpg | R4 | good |
| card-detailed image1 | top5pct-koozies-joliet.jpg | R2 | good; duplicate of C-4 remains |
| slide-R | top5pct-custom-coffee-mugs-in-joliet.jpg | R1 | good, cross-sell |
| slide-L | top5pct-screenprinted-shirts-joliet.jpg | R1 | good, cross-sell |

All non-carousel slots are now R1-R4. Over-target condition satisfied. Carousel stays at exactly 4 — no additional can-koozies/ files remain for expansion.

---

## Rule Violations

All rule violations resolved as of Jun 25, 2026.

| violation | resolution |
|---|---|
| slide-R same-category | Replaced with mugs/ R1 cross-sell |
| slide-L Initial | Replaced with custom-shirts/ R1 cross-sell |
| hero no image | Filled with can-koozies/ R4 |

---

## Duplicate Image Usage

One can-koozies/ file remains used in two blade slots:

| file | round | used in slot 1 | used in slot 2 |
|---|---|---|---|
| top5pct-koozies-joliet.jpg | R2 | C-4 (carousel) | card-detailed image1 |

Previously: `top5pct-can-koozies.jpg` (C-1/slide-R) and `top5pct-custom-can-koozies.jpg` (C-3/card-2) duplicates both resolved. card-detailed/C-4 duplicate remains — no same-dir files available to fix it.

---

## Slide Rules Check

| slot | direction | image | dir | round | rule | status |
|---|---|---|---|---|---|---|
| slide-R | right | top5pct-custom-coffee-mugs-in-joliet.jpg | mugs/ | R1 | must be cross-sell R1-R4 from another category | good, cross-sell |
| slide-L | left | top5pct-screenprinted-shirts-joliet.jpg | custom-shirts/ | R1 | cross-sell; must be R1-R4 | good, cross-sell |

---

## R4 Placements — Jun 25, 2026

| slot | old image | new image | round | note |
|---|---|---|---|---|
| hero | (none) | top5pct-koozie-can-joliet.jpg | R4 | missing slot filled |
| card-2 | top5pct-custom-can-koozies.jpg (R2, duplicate of C-3) | top5pct-koozies-channahon.jpg | R4 | duplicate resolved |
| slide-R | top5pct-can-koozies.jpg (R1, same-category violation) | top5pct-custom-coffee-mugs-in-joliet.jpg (mugs/) | R1 | rule violation cleared |
| slide-L | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg (Initial, 29K) | top5pct-screenprinted-shirts-joliet.jpg (custom-shirts/) | R1 | Initial violation cleared |

All 10 slots R1-R4. All rule violations cleared. One duplicate remains (C-4/card-detailed) — no same-dir files available to resolve it.

---

## File Usage Count

| file | dir | size | round | used in |
|---|---|---|---|---|
| top5pct-koozie-can-joliet.jpg | can-koozies/ | — | R4 | hero only |
| top5pct-can-koozies.jpg | can-koozies/ | 417K | R1 | C-1 only |
| top5pct-custom-koozies.jpg | can-koozies/ | 402K | R1 | C-2 only |
| top5pct-custom-can-koozies.jpg | can-koozies/ | 311K | R2 | C-3 only |
| top5pct-koozies-joliet.jpg | can-koozies/ | 479K | R2 | C-4, card-detailed image1 (duplicate — no fix available) |
| top5pct-personalized-koozies-joliet.jpg | can-koozies/ | 271K | R2 | card-1 only |
| top5pct-koozies-channahon.jpg | can-koozies/ | — | R4 | card-2 only |
| top5pct-custom-coffee-mugs-in-joliet.jpg | mugs/ | 426K | R1 | slide-R only (cross-sell) |
| top5pct-screenprinted-shirts-joliet.jpg | custom-shirts/ | 304K | R1 | slide-L only (cross-sell) |

All 5 can-koozies/ files are placed. No unused same-dir files.

---

## Notes

- 10 of 10 image slots are R1-R4 as of Jun 25, 2026. Page complete.
- Hero filled: top5pct-koozie-can-joliet.jpg (R4).
- card-2 duplicate resolved: top5pct-koozies-channahon.jpg (R4) replaces R2 duplicate.
- slide-R violation cleared: mugs/ R1 cross-sell (top5pct-custom-coffee-mugs-in-joliet.jpg).
- slide-L Initial violation cleared: custom-shirts/ R1 cross-sell (top5pct-screenprinted-shirts-joliet.jpg).
- Remaining duplicate: C-4 and card-detailed image1 both use top5pct-koozies-joliet.jpg (R2). No same-dir files available to resolve — acceptable.
- Carousel at exactly 4, all R1-R2. Over-target condition satisfied — no carousel expansion possible without additional can-koozies/ files.
