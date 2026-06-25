# Can Koozies — Image Status

**Blade:** `resources/views/pages/promotional-items/can-koozies.blade.php`
**URL:** `/promotional-items/can-koozies`
**Dir:** `public/images/can-koozies/` — 5 files total
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
| hero | category-hero | (no image= parameter) | — | — | — | — | missing: hero rendered without image; deferred to R4 |
| C-1 | carousel-rotating-images | top5pct-can-koozies.jpg | can-koozies/ | R1 | May 11 | 417K | good |
| C-2 | carousel-rotating-images | top5pct-custom-koozies.jpg | can-koozies/ | R1 | May 11 | 402K | good |
| C-3 | carousel-rotating-images | top5pct-custom-can-koozies.jpg | can-koozies/ | R2 | Jun 2 | 311K | good |
| C-4 | carousel-rotating-images | top5pct-koozies-joliet.jpg | can-koozies/ | R2 | Jun 2 | 479K | good |
| card-1 | card-image-with-text | top5pct-personalized-koozies-joliet.jpg | can-koozies/ | R2 | Jun 2 | 271K | good |
| card-2 | card-image-with-text (imagePosition right) | top5pct-custom-can-koozies.jpg | can-koozies/ | R2 | Jun 2 | 311K | good round; duplicate of C-3 |
| card-detailed image1 | card-detailed-info | top5pct-koozies-joliet.jpg | can-koozies/ | R2 | Jun 2 | 479K | good round; duplicate of C-4 |
| slide-R | card-banner-slide-in (direction right) | top5pct-can-koozies.jpg | can-koozies/ | R1 | May 11 | 417K | rule violation: same-category in slide-R; also duplicate of C-1 |
| slide-L | card-banner-slide-in (direction left) | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | custom-shirts/ | Initial | Mar 16 | 29K | rule violation: cross-sell but Initial; must be R1-R3 |

---

## R1-R3 Placement Summary

**Total image slots with an image path referenced:** 9 (hero excluded — no image parameter)
**Confirmed R1-R3 by round:** 8
**Round violations:** 1

| slot | issue |
|---|---|
| slide-L | Initial (Mar 16, 29K) — cross-sell from custom-shirts/ but fails R1-R3 requirement |

---

## Carousel

**Current slots:** 4
**Target:** 4. May exceed 4 only if all non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | image | round | status |
|---|---|---|---|
| hero | (no image) | — | missing |
| card-1 | top5pct-personalized-koozies-joliet.jpg | R2 | good |
| card-2 | top5pct-custom-can-koozies.jpg | R2 | good round; duplicate of C-3 |
| card-detailed image1 | top5pct-koozies-joliet.jpg | R2 | good round; duplicate of C-4 |
| slide-R | top5pct-can-koozies.jpg | R1 | rule violation (not cross-sell); duplicate of C-1 |
| slide-L | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | Initial | round violation |

Over-target condition is not met: hero has no image, slide-R is a rule violation, slide-L is Initial. Carousel stays at exactly 4. All 4 carousel images are can-koozies/ R1 or R2 — valid.

After R4 resolves the hero, slide-R cross-sell, and slide-L replacement, all non-carousel slots will qualify and carousel expansion becomes eligible. No same-dir files remain — R4 must supply new can-koozies/ images for hero and any expansion.

---

## Rule Violations

### slide-R — same-category image in cross-sell position

The blade uses `top5pct-can-koozies.jpg` (can-koozies/, R1) for slide-R. slide-R must always be a cross-sell from a different category dir. This image is same-category (can-koozies/) and is already used in C-1, making it a duplicate as well. Two issues: wrong position type, duplicate use.

### slide-L — Initial cross-sell

The blade uses `top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` (custom-shirts/, Mar 16, 29K — Initial) for slide-L. slide-L may be a cross-sell, but when it is, the image must be R1-R3. This fails that requirement.

The slide-L title is "Add Custom Shirts to Your Koozie Order, Team Packages Available." The cross-sell direction (custom apparel with koozies) is well-suited to the page content. The issue is solely the image round, not the concept.

### hero — no image parameter

The category-hero component is called without an `image=` attribute. The hero renders without a photo. Not a round violation but a missing slot. Consistent with the pattern seen on mugs. Deferred to R4.

---

## Duplicate Image Usage

Three can-koozies/ files are each used in two blade slots:

| file | round | used in slot 1 | used in slot 2 |
|---|---|---|---|
| top5pct-can-koozies.jpg | R1 | C-1 (carousel) | slide-R |
| top5pct-custom-can-koozies.jpg | R2 | C-3 (carousel) | card-2 |
| top5pct-koozies-joliet.jpg | R2 | C-4 (carousel) | card-detailed image1 |

Duplicates exist because there are only 5 can-koozies/ files and 9 image slots (excluding hero). The dir inventory is exhausted. No same-dir replacements are available. Duplicates in card-2 and card-detailed are acceptable for now — they are R2 and at least the round is clean. The slide-R duplicate is a separate rule violation independent of the duplicate issue.

---

## Slide Rules Check

| slot | direction | image | dir | round | rule | status |
|---|---|---|---|---|---|---|
| slide-R | right | top5pct-can-koozies.jpg | can-koozies/ | R1 | must be cross-sell R1-R3 from another category | violation: same-category + duplicate of C-1 |
| slide-L | left | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | custom-shirts/ | Initial | cross-sell; if cross-sell must be R1-R3 | violation: Initial |

---

## Immediate Suggestions

### slide-R — replace with R1-R3 cross-sell from another category

The blade title is "Custom Koozies for Your Next Event, No Minimums" with href="/contact". The title and href are not image concerns — only the image source needs to change.

The blade body references these companion products and pages most frequently:

| companion | references in blade | link |
|---|---|---|
| mugs | 3 | /promotional-items/mugs |
| tote-bags | 4 | /promotional-items/tote-bags |
| table-cloths | 2 | /signs/table-signs/table-cloths |
| custom-apparel / shirts | 2 | /custom-apparel |
| custom-shaped-stickers-decals | 1 | /stickers/custom-shaped-stickers-decals |

Tote bags and mugs are the two most referenced companions. Both are natural pairings (swag bags, drinkware sets). Either dir is a strong content-aligned candidate.

Mugs/ dir: all 8 files are R1 or R2. Any mugs/ file works. Best size candidates: top5pct-custom-coffee-mugs-in-joliet.jpg (R1, 426K) or top5pct-picture-on-mugs.jpg (R1, 419K). Note that both are already used on the mugs page — cross-page reuse of same-dir files is acceptable as they are different blade files.

Tote-bags/ dir: rounds not yet verified in this audit. Should be checked before selecting a candidate.

Recommended: use a mugs/ R1 file for slide-R. mugs/ rounds are confirmed clean, content alignment is strong (drinkware companion), and the size is good. Suggested candidate: `top5pct-custom-coffee-mugs-in-joliet.jpg` (mugs/, R1, May 11, 426K). Title could update to something like "Bundle Your Koozies With Custom Mugs for a Complete Drinkware Set" or the existing title can stay since it is not an image concern.

### slide-L — replace Initial with R1-R3 from custom-shirts/ or equivalent apparel dir

The blade title is "Add Custom Shirts to Your Koozie Order, Team Packages Available" with href="/contact". Cross-sell to custom shirts is well-matched to the content. The issue is only the image round.

Custom-shirts/ dir has many files. Dates for custom-shirts/ have not been fully verified in this audit. Before selecting a replacement, check custom-shirts/ dates to confirm which files are R1-R3. Alternatively:

Glitter-shirts/ has confirmed R1, R2, and R3 files (verified during mugs audit Jun 25). An R3 glitter-shirts/ file would be a strong apparel cross-sell if the title is updated to reference glitter or specialty apparel. The title "Add Custom Shirts to Your Koozie Order" is broad enough to cover any custom apparel.

Suggested candidate (if custom-shirts/ has no R1-R3 file confirmed): `top5pct-glitter-sweatshirts-joliet.jpg` (glitter-shirts/, R3, Jun 8, 375K) — same dir used on the mugs page slide-R.

Priority order for replacement:
1. Find an R1-R3 file in custom-shirts/ — preserves exact title intent
2. If none found, use a glitter-shirts/ R1-R3 file — title remains accurate under "custom shirts" umbrella
3. If apparel cross-sell is not possible, fall back to tote-bags/ or mugs/ — update the title to match

### hero — deferred to R4

No can-koozies/ files remain to assign to the hero. R4 must supply a hero-quality can-koozies/ image.

---

## File Usage Count

| file | dir | size | round | used in |
|---|---|---|---|---|
| top5pct-can-koozies.jpg | can-koozies/ | 417K | R1 | C-1, slide-R (slide-R is a rule violation) |
| top5pct-custom-koozies.jpg | can-koozies/ | 402K | R1 | C-2 only |
| top5pct-custom-can-koozies.jpg | can-koozies/ | 311K | R2 | C-3, card-2 (duplicate) |
| top5pct-koozies-joliet.jpg | can-koozies/ | 479K | R2 | C-4, card-detailed image1 (duplicate) |
| top5pct-personalized-koozies-joliet.jpg | can-koozies/ | 271K | R2 | card-1 only |
| top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | custom-shirts/ | 29K | Initial | slide-L (Initial violation; needs replacement) |

All 5 can-koozies/ files are placed. No unused same-dir files.

---

## Notes

- 8 of 9 referenced image slots are R1-R3 by round as of Jun 25, 2026.
- 2 rule violations: slide-R (same-category, not a cross-sell) and slide-L (cross-sell but Initial).
- 1 missing slot: hero — no image= parameter passed to category-hero.
- 3 files used in two slots each due to dir inventory exhaustion — acceptable for non-slide-R slots.
- All 5 can-koozies/ files are placed. No same-dir inventory remains.
- No Initial files in can-koozies/ dir — all files are R1 or R2.
- No R3 files in can-koozies/ dir. R4 should supply R3-or-better images for hero and carousel expansion.
- Carousel at exactly 4, all can-koozies/ R1 or R2. Eligible for expansion only after hero, slide-R, and slide-L are all resolved.
- R4 priorities: (1) hero image, (2) slide-R cross-sell fix, (3) slide-L Initial replacement, (4) carousel expansion candidates, (5) deduplicate card-2 and card-detailed if new same-dir files arrive.
