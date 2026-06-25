# Custom Shaped Stickers & Decals — Image Status

**Blade:** `resources/views/pages/stickers/custom-shaped-stickers.blade.php`
**URL:** `/stickers/custom-shaped-stickers-decals`
**Dir:** `public/images/custom-shaped-stickers-decals/` — 17 files total
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

## Dir Inventory

| file | size | date | round | placed in blade |
|---|---|---|---|---|
| top5pct-banner-stickers-decals-joliet.jpg | 57K | Mar 16 | Initial | no |
| top5pct-custom-glossy-stickers-in-joliet.jpg | 431K | May 11 | R1 | C-2 |
| top5pct-custom-label-stickers.jpg | 691K | May 11 | R1 | C-3 |
| top5pct-custom-shaped-stickers-cresthill.jpg | 667K | Jun 2 | R2 | card-detailed image1 |
| top5pct-custom-shaped-stickers.jpg | 488K | May 11 | R1 | C-4 |
| top5pct-custom-stickers-cresthill.jpg | 291K | Jun 2 | R2 | no — unused R2, available |
| top5pct-custom-stickers.jpg | 523K | May 11 | R1 | C-1 |
| top5pct-die-cut-stickers-joliet.jpg | 205K | Jun 2 | R2 | hero |
| top5pct-die-cut-stickers-joliet-r3.jpg | 355K | Jun 8 | R3 | no — unused R3, available |
| top5pct-die-cut-stickers-shorewood.jpg | 315K | Jun 2 | R2 | slide-L |
| top5pct-stickers-decals-joliet-beer-brewery.jpg | 45K | Mar 16 | Initial | no |
| top5pct-stickers-decals-joliet-boxing-sports.jpg | 45K | Mar 16 | Initial | slide-R (violation) |
| top5pct-stickers-decals-joliet-labels.jpg | 43K | Mar 16 | Initial | no |
| top5pct-stickers-decals-joliet-ocean-viewz.jpg | 36K | Mar 16 | Initial | no |
| top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg | 41K | Mar 16 | Initial | no |
| top5pct-stickers-decals-joliet-volleyball-team.jpg | 44K | Mar 16 | Initial | no |
| top5pct-stickers-in-joliet.jpg | 464K | May 11 | R1 | card-2 |

Dir summary: 7 Initial, 5 R1, 4 R2, 1 R3. 17 files total.
Unused R1-R3 files (available for placement): top5pct-custom-stickers-cresthill.jpg (R2), top5pct-die-cut-stickers-joliet-r3.jpg (R3).
Unused Initial files (deferred to R4): top5pct-banner-stickers-decals-joliet.jpg, top5pct-stickers-decals-joliet-beer-brewery.jpg, top5pct-stickers-decals-joliet-labels.jpg, top5pct-stickers-decals-joliet-ocean-viewz.jpg, top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg, top5pct-stickers-decals-joliet-volleyball-team.jpg.

---

## Blade Image Slots

Slots in blade order. Banner is first, carousel next, then body, then slides.

| slot | component | image | dir | round | date | size | status |
|---|---|---|---|---|---|---|---|
| hero | category-hero | top5pct-die-cut-stickers-joliet.jpg | custom-shaped-stickers-decals/ | R2 | Jun 2 | 205K | good |
| C-1 | carousel-rotating-images | top5pct-custom-stickers.jpg | custom-shaped-stickers-decals/ | R1 | May 11 | 523K | good |
| C-2 | carousel-rotating-images | top5pct-custom-glossy-stickers-in-joliet.jpg | custom-shaped-stickers-decals/ | R1 | May 11 | 431K | good |
| C-3 | carousel-rotating-images | top5pct-custom-label-stickers.jpg | custom-shaped-stickers-decals/ | R1 | May 11 | 691K | good |
| C-4 | carousel-rotating-images | top5pct-custom-shaped-stickers.jpg | custom-shaped-stickers-decals/ | R1 | May 11 | 488K | good |
| card-1 | card-image-with-text | top5pct-diecut-stickers.jpg | standard-stickers-decals/ | R3 | Jun 8 | 295K | good; cross-dir, not a slide position |
| card-2 | card-image-with-text (imagePosition right) | top5pct-stickers-in-joliet.jpg | custom-shaped-stickers-decals/ | R1 | May 11 | 464K | good |
| card-detailed image1 | card-detailed-info | top5pct-custom-shaped-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | R2 | Jun 2 | 667K | good |
| slide-R | card-banner-slide-in (direction right) | top5pct-stickers-decals-joliet-boxing-sports.jpg | custom-shaped-stickers-decals/ | Initial | Mar 16 | 45K | violation: same-category + Initial; two issues |
| slide-L | card-banner-slide-in (direction left) | top5pct-die-cut-stickers-shorewood.jpg | custom-shaped-stickers-decals/ | R2 | Jun 2 | 315K | good; same-category allowed, R2 |

---

## R1-R3 Placement Summary

**Total image slots with an image path referenced:** 10
**Confirmed R1-R3 by round:** 9
**Round violations:** 1

| slot | issue |
|---|---|
| slide-R | Initial (Mar 16, 45K) — also fails cross-sell rule; two violations |

---

## Carousel

**Current slots:** 4
**Target:** 4. May exceed 4 only if all non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | image | dir | round | status |
|---|---|---|---|---|
| hero | top5pct-die-cut-stickers-joliet.jpg | custom-shaped-stickers-decals/ | R2 | good |
| card-1 | top5pct-diecut-stickers.jpg | standard-stickers-decals/ | R3 | good |
| card-2 | top5pct-stickers-in-joliet.jpg | custom-shaped-stickers-decals/ | R1 | good |
| card-detailed image1 | top5pct-custom-shaped-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | R2 | good |
| slide-L | top5pct-die-cut-stickers-shorewood.jpg | custom-shaped-stickers-decals/ | R2 | good; same-category, R2 |
| slide-R | top5pct-stickers-decals-joliet-boxing-sports.jpg | custom-shaped-stickers-decals/ | Initial | violation |

Over-target condition is not met: slide-R is Initial and a rule violation. Carousel stays at 4.

**After slide-R is resolved:** all non-carousel slots will be R1-R3, and the over-target condition will be satisfied. Two unused same-dir R1-R3 files are immediately available for carousel expansion without waiting for R4:

| expansion candidate | dir | round | date | size |
|---|---|---|---|---|
| top5pct-custom-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | R2 | Jun 2 | 291K |
| top5pct-die-cut-stickers-joliet-r3.jpg | custom-shaped-stickers-decals/ | R3 | Jun 8 | 355K |

Carousel could grow to 6 slots (C-5, C-6) using both files once slide-R is fixed.

---

## Rule Violations

### slide-R — same-category image + Initial round

The blade uses `top5pct-stickers-decals-joliet-boxing-sports.jpg` (custom-shaped-stickers-decals/, Initial, Mar 16, 45K) for slide-R. Two violations:

1. **Same-category** — slide-R must always be a cross-sell from a different category dir. This image is from the page's own dir.
2. **Initial round** — all cross-sell images in slide-R must be R1-R3. This file is Initial (Mar 16, 45K — a small early-import file).

The slide-R title is "Custom Stickers Die Cut to Any Shape" with href="/contact". This title describes the current page's product rather than a companion product, which also confirms it was not intended as a cross-sell. Both the image and the title need to change to turn this into a proper cross-sell.

Note: slide-R is a direction="right" component in this blade. The slide at line 130 uses direction="right" and the slide at line 137 uses direction="left." The rule is: direction="right" = slide-R = must be cross-sell.

---

## Cross-Dir Usage Note

**card-1** references `standard-stickers-decals/top5pct-diecut-stickers.jpg` (R3, Jun 8, 295K). This is a file from the sibling standard stickers page's own dir. The card-1 component is a body card, not a slide position, so the cross-sell rule does not apply. The file is R3 and the content ("Die Cut to Any Shape") aligns well with both the current page and the standard-stickers companion. No violation. Worth noting that if this file is ever reorganized, the blade reference must follow.

---

## Slide Rules Check

| slot | direction | image | dir | round | rule | status |
|---|---|---|---|---|---|---|
| slide-R | right | top5pct-stickers-decals-joliet-boxing-sports.jpg | custom-shaped-stickers-decals/ | Initial | must be cross-sell R1-R3 from another category | violation: same-category + Initial |
| slide-L | left | top5pct-die-cut-stickers-shorewood.jpg | custom-shaped-stickers-decals/ | R2 | same-category allowed; if cross-sell must be R1-R3 | good; same-category, R2 |

---

## Immediate Suggestions

### slide-R — replace with R1-R3 cross-sell from another category + update title

The blade body references these companion products and pages most frequently:

| companion | references in blade | link |
|---|---|---|
| promotional-items | 4 | /promotional-items |
| custom-apparel | 3 | /custom-apparel |
| vehicle-graphics | 3 | /vehicle-graphics |
| window-signs | 2 | /signs/business-signs/window-signs |
| graphic-design | 2 | /design-services/graphic-design |
| standard-stickers-decals | 1 | /stickers/standard-stickers-decals |
| banners | 1 | /signs/business-signs/banners |

Promotional items is the highest-frequency companion (4 mentions), specifically in the context of event bags, brand kits, and giveaway bundles alongside stickers. can-koozies/ and mugs/ are both confirmed clean (all R1-R2, audited Jun 25). Either is a strong candidate.

Vehicle graphics is the second cluster (3 mentions) — stickers naturally extend to fleet decals and vehicle wraps. automobile-graphics/ rounds have been verified in a prior audit (16/18 R1-R3). That dir is also a valid candidate.

**Recommended candidates for slide-R:**

| option | file | dir | round | date | size | title suggestion |
|---|---|---|---|---|---|---|
| A (preferred) | top5pct-can-koozies.jpg | can-koozies/ | R1 | May 11 | 417K | "Add Custom Koozies to Your Sticker Order for a Complete Event Kit" |
| B | top5pct-custom-coffee-mugs-in-joliet.jpg | mugs/ | R1 | May 11 | 426K | "Pair Custom Stickers With Branded Mugs for a Complete Gift Set" |
| C | (any R1-R3 automobile-graphics/ file) | automobile-graphics/ | R1-R3 | — | — | "Take Your Brand to the Road With Custom Vehicle Graphics" |

Option A is recommended because can-koozies/ is a confirmed clean dir, the promotional giveaway context maps directly to the blade's most referenced companion, and the file is R1 at good size.

### slide-R carousel expansion — ready after slide-R fix

Once slide-R is replaced with a proper cross-sell, all non-carousel slots become R1-R3 and carousel expansion is immediately eligible. Two unused same-dir R1-R3 files are available without waiting for R4:

| position | file | dir | round | date | size |
|---|---|---|---|---|---|
| C-5 | top5pct-custom-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | R2 | Jun 2 | 291K |
| C-6 | top5pct-die-cut-stickers-joliet-r3.jpg | custom-shaped-stickers-decals/ | R3 | Jun 8 | 355K |

---

## File Usage Count

| file | dir | size | round | used in |
|---|---|---|---|---|
| top5pct-custom-stickers.jpg | custom-shaped-stickers-decals/ | 523K | R1 | C-1 only |
| top5pct-custom-glossy-stickers-in-joliet.jpg | custom-shaped-stickers-decals/ | 431K | R1 | C-2 only |
| top5pct-custom-label-stickers.jpg | custom-shaped-stickers-decals/ | 691K | R1 | C-3 only |
| top5pct-custom-shaped-stickers.jpg | custom-shaped-stickers-decals/ | 488K | R1 | C-4 only |
| top5pct-stickers-in-joliet.jpg | custom-shaped-stickers-decals/ | 464K | R1 | card-2 only |
| top5pct-die-cut-stickers-joliet.jpg | custom-shaped-stickers-decals/ | 205K | R2 | hero only |
| top5pct-custom-shaped-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | 667K | R2 | card-detailed image1 only |
| top5pct-die-cut-stickers-shorewood.jpg | custom-shaped-stickers-decals/ | 315K | R2 | slide-L only |
| top5pct-custom-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | 291K | R2 | unused — available for C-5 |
| top5pct-die-cut-stickers-joliet-r3.jpg | custom-shaped-stickers-decals/ | 355K | R3 | unused — available for C-6 |
| top5pct-diecut-stickers.jpg | standard-stickers-decals/ | 295K | R3 | card-1 only (cross-dir, not a slide) |
| top5pct-stickers-decals-joliet-boxing-sports.jpg | custom-shaped-stickers-decals/ | 45K | Initial | slide-R (violation; needs replacement) |
| top5pct-banner-stickers-decals-joliet.jpg | custom-shaped-stickers-decals/ | 57K | Initial | unused — deferred to R4 |
| top5pct-stickers-decals-joliet-beer-brewery.jpg | custom-shaped-stickers-decals/ | 45K | Initial | unused — deferred to R4 |
| top5pct-stickers-decals-joliet-labels.jpg | custom-shaped-stickers-decals/ | 43K | Initial | unused — deferred to R4 |
| top5pct-stickers-decals-joliet-ocean-viewz.jpg | custom-shaped-stickers-decals/ | 36K | Initial | unused — deferred to R4 |
| top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg | custom-shaped-stickers-decals/ | 41K | Initial | unused — deferred to R4 |
| top5pct-stickers-decals-joliet-volleyball-team.jpg | custom-shaped-stickers-decals/ | 44K | Initial | unused — deferred to R4 |

No duplicate image use across blade slots.

---

## Notes

- 9 of 10 referenced image slots are R1-R3 by round as of Jun 25, 2026.
- 1 rule violation: slide-R — same-category image + Initial. Both issues must be resolved together by replacing the image and updating the title to reflect the cross-sell.
- 0 duplicate images across slots — each file used exactly once.
- Hero has a proper image on this page (R2) — no missing hero unlike mugs and can-koozies.
- card-1 uses standard-stickers-decals/ (R3) — cross-dir but not a slide; no rule violation.
- 2 unused R1-R3 same-dir files ready for carousel expansion immediately after slide-R fix: custom-stickers-cresthill.jpg (R2) and die-cut-stickers-joliet-r3.jpg (R3).
- 6 unused Initial files deferred to R4.
- R4 priorities: (1) slide-R cross-sell replacement, (2) carousel expansion using the two unused R1-R3 files (no R4 images needed for this), (3) replace Initial files in remaining slots with R4 images.
