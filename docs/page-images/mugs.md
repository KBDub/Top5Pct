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
| R3 | — | no R3 files in this dir |

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
| top5pct-printed-mugs-old.jpg | 336K | May 11 | R1 | |

Dir summary: 7 R1, 1 R2, 0 Initial, 0 R3. 8 files total. No Initial files in this dir.
Critical: every mugs/ file is placed in the blade. No unused same-dir files available for any additional slots.

---

## Blade Image Slots

| slot | component | image | dir | round | date | size | status |
|---|---|---|---|---|---|---|---|
| hero | category-hero | (no image= parameter) | — | — | — | — | missing: hero rendered without image on this page |
| C-1 | carousel-rotating-images | top5pct-custom-coffee-mugs-in-joliet.jpg | mugs/ | R1 | May 11 | 426K | good |
| C-2 | carousel-rotating-images | top5pct-custom-coffee-mugs.jpg | mugs/ | R1 | May 11 | 472K | good |
| C-3 | carousel-rotating-images | top5pct-custom-mugs-near-me.jpg | mugs/ | R1 | May 11 | 398K | good |
| C-4 | carousel-rotating-images | top5pct-custom-mugs.jpg | mugs/ | R1 | May 11 | 267K | good |
| card-1 | card-image-with-text | top5pct-custom-printed-mugs.jpg | mugs/ | R1 | May 11 | 388K | good |
| card-2 | card-image-with-text (imagePosition right) | top5pct-picture-on-mugs.jpg | mugs/ | R1 | May 11 | 419K | good |
| card-detailed image1 | card-detailed-info | top5pct-printed-mugs.jpg | mugs/ | R2 | Jun 2 | 398K | good |
| slide-L | card-banner-slide-in (direction left) | top5pct-printed-mugs-old.jpg | mugs/ | R1 | May 11 | 336K | good, same-category allowed |
| slide-R | card-banner-slide-in (direction right) | top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | custom-shirts/ (blade) / glitter-shirts/ (actual) | Initial | Mar 16 | 30K | broken path + Initial; two violations |

---

## R1-R3 Placement Summary

**Total image slots with an image path referenced:** 9 (hero excluded — no image parameter)
**Confirmed R1-R3:** 8
**Remaining to fill:** 1

| slot | issue | resolution |
|---|---|---|
| hero | no image= parameter; hero renders without photo; every other reviewed category page has a hero image | deferred to R4; add a mugs/ image to hero, no same-dir files remain so R4 must supply one |
| slide-R | broken path + Initial; see Rule Violations below | cross-sell replacement needed; see Immediate Suggestions |

---

## Carousel

**Current slots:** 4
**Target:** 4. May exceed 4 if all non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | image | round | status |
|---|---|---|---|
| hero | (no image) | — | missing |
| card-1 | top5pct-custom-printed-mugs.jpg | R1 | good |
| card-2 | top5pct-picture-on-mugs.jpg | R1 | good |
| card-detailed image1 | top5pct-printed-mugs.jpg | R2 | good |
| slide-L | top5pct-printed-mugs-old.jpg | R1 | good, same-category |
| slide-R | top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | Initial (broken path) | not satisfied |

Carousel is at exactly 4, all mugs/ R1. The over-target condition is not met: hero has no image and slide-R is Initial with a broken path. Carousel at target — no changes needed. All 4 carousel images are same-dir R1.

After R4 resolves the hero and slide-R, all non-carousel slots will be R1-R3 and carousel expansion becomes eligible. No same-dir files remain for expansion — R4 must supply new mugs/ images for both the hero and any carousel expansion.

---

## Rule Violations

### slide-R — broken path + Initial

The blade references `/images/custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg`. This path does not exist. The actual file is at `/images/glitter-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg`. The slide-R image is broken on the live page.

Even if the path were corrected, the file is Initial (Mar 16, 30K) and does not meet the R1-R3 requirement for a slide-R cross-sell.

Two violations:
1. Broken image path — image does not render on the live page
2. Initial round — fails cross-sell R1-R3 requirement

### hero — no image parameter

The category-hero component on this page is called without an `image=` attribute. All other reviewed category pages pass an image to the hero. This page renders the hero without a photo. Not a round violation, but a missing slot. Flagged for R4.

---

## Slide Rules Check

| slot | direction | image | dir | round | rule | status |
|---|---|---|---|---|---|---|
| slide-L | left | top5pct-printed-mugs-old.jpg | mugs/ | R1 | same-category allowed; must be R1-R3 | good, same-category, R1 |
| slide-R | right | top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | custom-shirts/ (blade) / glitter-shirts/ (actual) | Initial | must be cross-sell R1-R3 from another category | broken path + Initial; two violations |

---

## Immediate Suggestions

### slide-R — replace with R1-R3 cross-sell from another category

The blade title for slide-R is "Bundle Mugs With Custom Apparel for Event Packages," linking to `/contact`. The intended cross-sell direction is custom apparel, which is a natural companion to mugs for event kits and corporate gift sets.

**Option A — stay in apparel category, use an R1-R3 glitter-shirts/ file:**
Other files in glitter-shirts/ may be R1-R3. Dates for the full glitter-shirts/ dir have not been verified in this audit. If a R1-R3 glitter-shirts/ file exists, it would preserve the existing title and cross-sell intent. Dates must be verified before selecting a candidate. Pending dir check.

**Option B — cross-sell to a promotional-items companion (recommended if no R1-R3 glitter-shirts/ file is found):**
The blade content references can-koozies three times and tote-bags twice as the most natural drinkware companions to mugs. Either dir would be a strong, content-aligned cross-sell. Both are within the promotional-items category. Candidate dirs:

| candidate dir | companion reference in blade | suggested title |
|---|---|---|
| can-koozies/ | "bundle mugs with can koozies for a complete drinkware set" | "Complete Your Drinkware Set With Custom Can Koozies" |
| tote-bags/ | "pair mugs with tote bags in a branded gift set" | "Build a Complete Gift Set, Add Custom Tote Bags" |

Recommended: verify glitter-shirts/ dir dates first. If an R1-R3 file exists there, use it and fix only the path. If not, replace with a can-koozies/ R1-R3 cross-sell — the most referenced companion in the blade. href should update to the cross-sell page.

### hero — add image parameter in R4

No mugs/ files remain to fill the hero now. R4 must supply a new hero-quality mugs/ image. The hero slot should match the standard used by all other category pages: full-bleed, large format, subject-appropriate. Deferred to R4.

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
| top5pct-printed-mugs-old.jpg | mugs/ | 336K | R1 | slide-L only |
| top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | glitter-shirts/ (actual) / custom-shirts/ (blade path) | 30K | Initial | slide-R (broken path, Initial; needs replacement) |

No duplicate image use across blade slots. All 8 mugs/ files are placed — none unused.

---

## Notes

- 8 of 9 referenced image slots are R1-R3 as of Jun 25, 2026.
- 1 violation: slide-R — broken path (wrong dir referenced in blade) + Initial round.
- 1 missing slot: hero — no image= parameter passed to category-hero component.
- All 8 mugs/ files are placed in the blade. No unused same-dir files exist.
- No Initial files in mugs/ dir — this is the only page so far with zero Initial files in its own dir.
- No R3 files in mugs/ dir. R4 should supply R3-or-better mugs/ images for hero and any carousel expansion.
- Carousel at exactly 4, all mugs/ R1. Eligible for expansion after hero and slide-R are resolved.
- slide-R fix requires: (1) locate an R1-R3 glitter-shirts/ candidate or select a different cross-sell dir, (2) correct the image path in the blade.
- R4 priorities: (1) hero image — any new mugs/ R4 file; (2) slide-R replacement — glitter-shirts/ R1-R3 or can-koozies/ cross-sell; (3) carousel expansion candidates.
