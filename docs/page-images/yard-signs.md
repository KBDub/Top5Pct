# Yard Signs — Image Status

**Blade:** `resources/views/pages/signs/yard-signs.blade.php`
**URL:** `/signs/ground-signs/yard-signs`
**Dir:** `public/images/yard-signs/` — 14 files total
**Verified:** Jun 25, 2026

---

## Round Reference

| round | date | note |
|---|---|---|
| Initial | Mar 16, 2026 | |
| R1 | May 11, 2026 | |
| R2 | Jun 2, 2026 | no files this round in this dir |
| R2+ | Jun 3, 2026 | no files this round in this dir |
| R3 | Jun 6-8, 2026 | Jun 7 files confirmed R3 |

Only Initial and R1 files exist in this dir, plus 3 R3 files (Jun 7). No R2 yard-signs/ images.

---

## Dir Inventory

| file | size | date | round | note |
|---|---|---|---|---|
| top5pct-article-yard-signs-buy.jpg | 47K | Mar 16 | Initial | small, likely article thumbnail |
| top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg | 96K | Mar 16 | Initial | unused in blade |
| top5pct-table-signs-joliet-shorewood-plainfield.jpg | 57K | Mar 16 | Initial | unused in blade |
| top5pct-yard-signs-joliet-old.jpg | 1865K | Mar 16 | Initial | unused in blade; old file, very large |
| top5pct-yard-signs-joliet-plainfied-new-lenox.jpg | 75K | Mar 16 | Initial | unused in blade |
| top5pct-yard-signs-joliet-shorewood-romeoville.jpg | 347K | Mar 16 | Initial | unused in blade |
| top5pct-custom-yard-signs-joliet.jpg | 508K | May 11 | R1 | |
| top5pct-lawn-signs.jpg | 317K | May 11 | R1 | |
| top5pct-yard-sign-joliet.jpg | 425K | May 11 | R1 | |
| top5pct-yard-signs-joliet.jpg | 401K | May 11 | R1 | |
| top5pct-yard-signs.jpg | 429K | May 11 | R1 | |
| top5pct-yard-signs-plainfield.jpg | 233K | Jun 7 | R3 | |
| top5pct-yard-signs-rockdale.jpg | 270K | Jun 7 | R3 | |
| top5pct-yard-signs-shorewood.jpg | 338K | Jun 7 | R3 | |

Dir summary: 6 Initial, 5 R1, 0 R2, 3 R3. 14 image files total. All 8 R1-R3 yard-signs/ files are placed in the blade. No unused R1-R3 yard-signs/ files remain.

---

## Blade Image Slots

| slot | component | image | dir | round | date | size | status |
|---|---|---|---|---|---|---|---|
| hero | category-hero | top5pct-custom-yard-signs-joliet.jpg | yard-signs/ | R1 | May 11 | 508K | good |
| C-1 | carousel-rotating-images | top5pct-yard-signs-joliet.jpg | yard-signs/ | R1 | May 11 | 401K | good |
| C-2 | carousel-rotating-images | top5pct-yard-signs-plainfield.jpg | yard-signs/ | R3 | Jun 7 | 233K | good |
| C-3 | carousel-rotating-images | top5pct-yard-signs-rockdale.jpg | yard-signs/ | R3 | Jun 7 | 270K | good |
| C-4 | carousel-rotating-images | top5pct-yard-signs-shorewood.jpg | yard-signs/ | R3 | Jun 7 | 338K | good |
| card-1 | card-image-with-text | top5pct-yard-signs.jpg | yard-signs/ | R1 | May 11 | 429K | good |
| card-2 | card-image-with-text (imagePosition right) | top5pct-sidewalk-signs-joliet-old.jpg | sidewalk-signs/ | R1 | May 11 | 528K | good, R1; cross-dir, not a slide |
| card-2img image1 | card-2image-with-text | top5pct-lawn-signs.jpg | yard-signs/ | R1 | May 11 | 317K | good |
| card-2img image2 | card-2image-with-text | top5pct-yard-sign-joliet.jpg | yard-signs/ | R1 | May 11 | 425K | good |
| card-detailed image1 | card-detailed-info | top5pct-article-yard-signs-buy.jpg | yard-signs/ | Initial | Mar 16 | 47K | Initial |
| slide-L | card-banner-slide-in (direction left) | top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg | sidewalk-signs/ | Initial | Mar 16 | 58K | Initial; cross-sell; rule violation |
| slide-R | card-banner-slide-in (direction right) | top5pct-retractable-banner.jpg | banners/ | R1 | May 11 | 234K | good, cross-sell |

---

## R1-R3 Placement Summary

**Total blade image slots:** 12
**Filled R1-R3:** 10
**Remaining (Initial in blade):** 2

| slot | image | round | issue |
|---|---|---|---|
| card-detailed image1 | top5pct-article-yard-signs-buy.jpg | Initial | no same-dir R1-R3 replacement available |
| slide-L | top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg | Initial | cross-sell is Initial; rule violation (see below) |

All 8 R1-R3 yard-signs/ files are already placed. No unused R1-R3 yard-signs/ files remain for card-detailed image1. Per the audit rules, card-detailed image1 is left Initial for R4. slide-L is a rule violation with available R1-R3 replacements from sidewalk-signs/ — see Immediate Suggestions.

---

## Carousel

**Current slots:** 4
**Target:** 4. May exceed 4 if all non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | image | round | status |
|---|---|---|---|
| hero | top5pct-custom-yard-signs-joliet.jpg | R1 | good |
| card-1 | top5pct-yard-signs.jpg | R1 | good |
| card-2 | top5pct-sidewalk-signs-joliet-old.jpg | R1 | good |
| card-2img image1 | top5pct-lawn-signs.jpg | R1 | good |
| card-2img image2 | top5pct-yard-sign-joliet.jpg | R1 | good |
| card-detailed image1 | top5pct-article-yard-signs-buy.jpg | Initial | not filled |
| slide-L | top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg | Initial | not filled + rule violation |
| slide-R | top5pct-retractable-banner.jpg | R1 | good, cross-sell |

card-detailed image1 and slide-L are Initial. Carousel must stay at 4 until all non-carousel slots are R1+. No expansion possible. All 4 carousel slots are yard-signs/ same-dir, R1-R3.

---

## Rule Violations

### slide-L — Initial cross-sell

slide-L (direction left) uses `top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg` (sidewalk-signs/, Initial, Mar 16, 58K). This image is from sidewalk-signs/, making it a cross-sell. The rule states all cross-sells must be R1-R3. This file is Initial.

R1-R3 sidewalk-signs/ candidates available for replacement:

| candidate | dir | round | date | size | note |
|---|---|---|---|---|---|
| top5pct-sidewalk-signs-plainfield.jpg | sidewalk-signs/ | R3 | Jun 8 | 153K | recommended; R3, same-region phrasing matches blade cross-sell context |
| top5pct-custom-a-frame-sidewalk-signs-joliet.jpg | sidewalk-signs/ | R1 | May 11 | 435K | alternative; R1, large |
| top5pct-sidewalk-sign.jpg | sidewalk-signs/ | R1 | May 11 | 422K | alternative; R1, large |

Recommended: `top5pct-sidewalk-signs-plainfield.jpg` (sidewalk-signs/, R3, Jun 8, 153K). R3 is the highest available round in sidewalk-signs/. Matches the regional framing used throughout the yard-signs blade.

Additional note: the current slide-L title "Custom Yard Signs for Business and Events" describes yard signs, not sidewalk signs. When the image is replaced, the title should also be updated to reflect the sidewalk-signs cross-sell (for example, "Pair Your Yard Signs With a Sidewalk Sign").

---

## Slide Rules Check

| slot | direction | image | dir | round | rule | status |
|---|---|---|---|---|---|---|
| slide-L | left | top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg | sidewalk-signs/ | Initial | cross-sell must be R1-R3 | violation: Initial cross-sell |
| slide-R | right | top5pct-retractable-banner.jpg | banners/ | R1 | must be cross-sell R1-R3 from another category | good, cross-sell, R1 |

slide-R cross-sells to banners/, the most referenced complementary category in the blade content (banners are mentioned 4 times). Round confirmed against banners.md: `top5pct-retractable-banner.jpg` is R1 (May 11).

---

## File Usage Count

| file | dir | size | round | used in |
|---|---|---|---|---|
| top5pct-custom-yard-signs-joliet.jpg | yard-signs/ | 508K | R1 | hero only |
| top5pct-yard-signs-joliet.jpg | yard-signs/ | 401K | R1 | C-1 only |
| top5pct-yard-signs-plainfield.jpg | yard-signs/ | 233K | R3 | C-2 only |
| top5pct-yard-signs-rockdale.jpg | yard-signs/ | 270K | R3 | C-3 only |
| top5pct-yard-signs-shorewood.jpg | yard-signs/ | 338K | R3 | C-4 only |
| top5pct-yard-signs.jpg | yard-signs/ | 429K | R1 | card-1 only |
| top5pct-sidewalk-signs-joliet-old.jpg | sidewalk-signs/ | 528K | R1 | card-2 only |
| top5pct-lawn-signs.jpg | yard-signs/ | 317K | R1 | card-2img image1 only |
| top5pct-yard-sign-joliet.jpg | yard-signs/ | 425K | R1 | card-2img image2 only |
| top5pct-article-yard-signs-buy.jpg | yard-signs/ | 47K | Initial | card-detailed image1 only |
| top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg | sidewalk-signs/ | 58K | Initial | slide-L only |
| top5pct-retractable-banner.jpg | banners/ | 234K | R1 | slide-R only |
| top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg | yard-signs/ | 96K | Initial | unused |
| top5pct-table-signs-joliet-shorewood-plainfield.jpg | yard-signs/ | 57K | Initial | unused |
| top5pct-yard-signs-joliet-old.jpg | yard-signs/ | 1865K | Initial | unused; old file |
| top5pct-yard-signs-joliet-plainfied-new-lenox.jpg | yard-signs/ | 75K | Initial | unused |
| top5pct-yard-signs-joliet-shorewood-romeoville.jpg | yard-signs/ | 347K | Initial | unused |

No duplicate image use across blade slots. 5 unused yard-signs/ files remain, all Initial — none qualify for blade placement.

---

## Immediate Suggestions

### slide-L — replace Initial cross-sell with R1-R3 sidewalk-signs/ image

slide-L uses an Initial sidewalk-signs/ cross-sell. R1-R3 sidewalk-signs/ replacements are available now. No R4 wait required.

Recommended replacement: `top5pct-sidewalk-signs-plainfield.jpg` (sidewalk-signs/, R3, Jun 8, 153K).

Alongside the image change, the slide-L title should be updated from "Custom Yard Signs for Business and Events" to something that reflects the sidewalk-signs cross-sell, for example "Pair Your Yard Signs With a Sidewalk Sign."

### card-detailed image1 — Initial, no same-dir R1-R3 replacement available

`top5pct-article-yard-signs-buy.jpg` (Initial, Mar 16, 47K) is used in card-detailed image1. All 8 R1-R3 yard-signs/ files are placed. No unused replacement exists. Deferred to R4.

### card-2 — cross-dir note (not a violation)

card-2 uses `top5pct-sidewalk-signs-joliet-old.jpg` (sidewalk-signs/, R1, May 11, 528K) for the "Real Estate and Political Signs" section. This is R1 and passes the image quality rules. However, all yard-signs/ R1 files were placed, leaving no same-dir option. When R4 yard-signs/ images arrive, this slot is a candidate for replacement with a yard-signs/ image that better matches the real estate and political content.

### Carousel — at target, no action needed

Carousel is at exactly 4. All 4 slots are yard-signs/ same-dir, R1-R3. No expansion is warranted until card-detailed image1 is resolved.

---

## Notes

- 10 of 12 blade image slots are R1-R3 as of verification Jun 25, 2026.
- 1 rule violation: slide-L uses an Initial cross-sell from sidewalk-signs/. R1-R3 replacements are available.
- 1 Initial slot deferred: card-detailed image1 (no same-dir R1-R3 replacement available).
- All 8 R1-R3 yard-signs/ files are placed. No unused R1-R3 yard-signs/ files remain.
- 5 unused yard-signs/ files are all Initial — none qualify for blade placement.
- slide-R cross-sells to banners/ (R1, May 11), confirmed against banners.md.
- Carousel is at exactly 4, all yard-signs/ same-dir, R1-R3. Clean.
- card-2 uses a sidewalk-signs/ R1 image — not a violation, but noted as a future swap candidate for R4.
- `top5pct-yard-signs-joliet-old.jpg` (1865K, Initial) is an old oversized file sitting unused. Candidate for removal in a cleanup pass.
- R4 audit ready, but slide-L fix is a prerequisite action.
