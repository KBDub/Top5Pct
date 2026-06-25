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
| card-2image-1 image1 | card-2image-with-text | top5pct-stickers-decals-joliet-labels.jpg | custom-shaped-stickers-decals/ | Initial | Mar 16 | 43K | violation: Initial |
| card-2image-1 image2 | card-2image-with-text | top5pct-stickers-decals-joliet-ocean-viewz.jpg | custom-shaped-stickers-decals/ | Initial | Mar 16 | 36K | violation: Initial |
| card-2image-2 image1 | card-2image-with-text | top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg | custom-shaped-stickers-decals/ | Initial | Mar 16 | 41K | violation: Initial |
| card-2image-2 image2 | card-2image-with-text | top5pct-stickers-decals-joliet-volleyball-team.jpg | custom-shaped-stickers-decals/ | Initial | Mar 16 | 44K | violation: Initial |
| card-detailed image1 | card-detailed-info | top5pct-article-buy-stickers-decals-joliet.jpg | standard-stickers-decals/ | R3 | Jun 8 | 62K | good; same-dir |
| slide-L | card-banner-slide-in (direction left) | top5pct-custom-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | R2 | Jun 2 | 291K | good round; cross-sell to companion die-cut sticker product; note: duplicate of hero |
| slide-R | card-banner-slide-in (direction right) | top5pct-die-cut-stickers-shorewood.jpg | custom-shaped-stickers-decals/ | R2 | Jun 2 | 315K | good; cross-sell to custom-shaped-stickers product; R2 |

---

## R1-R3 Placement Summary

**Total image slots with an image path referenced:** 14
**Confirmed R1-R3 by round:** 10
**Round violations:** 4

| slot | image | dir | round | issue |
|---|---|---|---|---|
| card-2image-1 image1 | top5pct-stickers-decals-joliet-labels.jpg | custom-shaped-stickers-decals/ | Initial | must be R1-R3 |
| card-2image-1 image2 | top5pct-stickers-decals-joliet-ocean-viewz.jpg | custom-shaped-stickers-decals/ | Initial | must be R1-R3 |
| card-2image-2 image1 | top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg | custom-shaped-stickers-decals/ | Initial | must be R1-R3 |
| card-2image-2 image2 | top5pct-stickers-decals-joliet-volleyball-team.jpg | custom-shaped-stickers-decals/ | Initial | must be R1-R3 |

All 4 violations are in card-2image-with-text components. All 4 use the same-style small Initial files (35-44K, Mar 16) from custom-shaped-stickers-decals/. None of these are cross-sell positions — they are standard body card slots. The round is the only issue.

**R1-R3 remaining to fill:** 4 slots still need R1-R3 images. See suggestions section for available replacements.

---

## Carousel

**Current slots:** 4
**Target:** 4. May exceed 4 only if all non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | image | dir | round | status |
|---|---|---|---|---|
| hero | top5pct-custom-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | R2 | good |
| card-1 | top5pct-custom-label-stickers.jpg | custom-shaped-stickers-decals/ | R1 | good |
| card-2 | top5pct-custom-shaped-stickers.jpg | custom-shaped-stickers-decals/ | R1 | good |
| card-2image-1 image1 | top5pct-stickers-decals-joliet-labels.jpg | custom-shaped-stickers-decals/ | Initial | violation |
| card-2image-1 image2 | top5pct-stickers-decals-joliet-ocean-viewz.jpg | custom-shaped-stickers-decals/ | Initial | violation |
| card-2image-2 image1 | top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg | custom-shaped-stickers-decals/ | Initial | violation |
| card-2image-2 image2 | top5pct-stickers-decals-joliet-volleyball-team.jpg | custom-shaped-stickers-decals/ | Initial | violation |
| card-detailed image1 | top5pct-article-buy-stickers-decals-joliet.jpg | standard-stickers-decals/ | R3 | good |
| slide-L | top5pct-custom-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | R2 | good round |
| slide-R | top5pct-die-cut-stickers-shorewood.jpg | custom-shaped-stickers-decals/ | R2 | good |

Over-target condition is not met: 4 non-carousel slots are Initial. Carousel stays at 4.

After all 4 Initial card-2image slots are replaced with R1-R3 images, all non-carousel slots will be R1-R3 and carousel expansion becomes eligible. However, carousel expansion requires same-dir (standard-stickers-decals/) images, and only 2 R3 files exist in that dir — only 1 of those 2 is unused on this page. R4 must supply new standard-stickers-decals/ carousel images before meaningful expansion is possible.

**Same-dir carousel note:** All 4 current carousel slots use cross-dir images from custom-shaped-stickers-decals/. The standard-stickers-decals/ dir has only 2 files (both R3), which is not enough to fill a 4-slot carousel from the same dir. This is an inventory gap, not a round violation. The cross-dir carousel images are all R1-R3 and are appropriate for now. R4 must supply standard-stickers-decals/ images to enable a proper same-dir carousel.

---

## Slide Rules Check

| slot | direction | image | dir | round | rule | status |
|---|---|---|---|---|---|---|
| slide-L | left | top5pct-custom-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | R2 | may be cross-sell; if cross-sell must be R1-R3 | good; cross-sell to die-cut sticker companion; R2; note: duplicate of hero |
| slide-R | right | top5pct-die-cut-stickers-shorewood.jpg | custom-shaped-stickers-decals/ | R2 | must be cross-sell R1-R3 from another category | good; custom-shaped-stickers-decals is a companion product dir; R2 |

Both slides are clear. slide-R uses a custom-shaped-stickers-decals/ file with the title "Die Cut Custom Stickers in Any Shape" — this is a natural upsell from standard stickers to custom shaped stickers. The image dir is different from this page's own dir (standard-stickers-decals/). cross-sell is appropriate. R2.

slide-L title is "Custom Stickers in Any Shape or Size" — more general. Image is R2 from custom-shaped-stickers-decals/. Appropriate. The only concern is the duplicate with the hero (see duplicate note below).

---

## Duplicate Image Usage

One image is used in two blade slots:

| file | dir | round | used in slot 1 | used in slot 2 |
|---|---|---|---|---|
| top5pct-custom-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | R2 | hero | slide-L |

Both slots are R2 so there is no round violation from the duplicate. However, having the same photo appear in the full-width hero banner and again in the slide-in at the bottom of the page is a visual repetition. The unused custom-shaped-stickers-decals/ R2 file (top5pct-custom-shaped-stickers-cresthill.jpg, 667K) or the unused R2 (top5pct-die-cut-stickers-joliet.jpg, 205K) could replace the slide-L image to eliminate the duplicate.

---

## Immediate Suggestions

### Priority 1 — replace 4 Initial card-2image slots with R1-R3 images

The card-2image-with-text component takes two images side by side. Both card-2image instances use Initial files from custom-shaped-stickers-decals/. There are 3 unused R1-R3 files available across the two dirs without waiting for R4:

| available file | dir | round | date | size | assign to |
|---|---|---|---|---|---|
| top5pct-custom-shaped-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | R2 | Jun 2 | 667K | card-2image-1 image1 (replaces top5pct-stickers-decals-joliet-labels.jpg) |
| top5pct-die-cut-stickers-joliet.jpg | custom-shaped-stickers-decals/ | R2 | Jun 2 | 205K | card-2image-1 image2 (replaces top5pct-stickers-decals-joliet-ocean-viewz.jpg) |
| top5pct-diecut-stickers.jpg | standard-stickers-decals/ | R3 | Jun 8 | 295K | card-2image-2 image1 (replaces top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg) |
| (none available) | — | — | — | — | card-2image-2 image2 (top5pct-stickers-decals-joliet-volleyball-team.jpg) — must remain Initial until R4 |

With these 3 replacements: 13 of 14 slots become R1-R3. 1 Initial slot remains (card-2image-2 image2) — no R1-R3 file is available to fill it before R4.

Note on top5pct-diecut-stickers.jpg: this file is also referenced on the custom-shaped-stickers blade (card-1). Using it here as well would be a cross-page duplicate from the same dir, which is acceptable since these are separate blade files. Confirm the content fit before assigning — the alt in its current cross-shaped-stickers usage is "Custom shaped die cut stickers for a sports organization," which fits the card-2image-2 context on this page ("Die Cut Stickers for Any Group").

### Priority 2 — resolve the slide-L duplicate with hero

Replace slide-L image to eliminate the top5pct-custom-stickers-cresthill.jpg duplicate:

| recommended replacement | dir | round | date | size | note |
|---|---|---|---|---|---|
| top5pct-die-cut-stickers-joliet.jpg | custom-shaped-stickers-decals/ | R2 | Jun 2 | 205K | if not assigned to card-2image-1 image2 |
| top5pct-custom-shaped-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | R2 | Jun 2 | 667K | if not assigned to card-2image-1 image1 |

If both of those are consumed by Priority 1, the slide-L duplicate must remain until R4 supplies a new file. In that case, note it as deferred.

### Priority 3 — same-dir carousel (R4 dependency)

The carousel currently uses 4 cross-dir images from custom-shaped-stickers-decals/. These are all R1-R3 and valid for now. Once R4 supplies new standard-stickers-decals/ images, prioritize filling the carousel with same-dir files. Suggested target: 4 standard-stickers-decals/ images for C-1 through C-4. The cross-dir images currently in the carousel can then move to body card slots or be retired.

### Priority 4 — carousel expansion (post-R4)

After all non-carousel slots are R1-R3 and same-dir carousel images arrive in R4, the over-target condition becomes available. At that point, unused R1-R3 files can be added as C-5 and beyond using whatever new standard-stickers-decals/ inventory R4 provides.

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
| top5pct-stickers-decals-joliet-labels.jpg | custom-shaped-stickers-decals/ | 43K | Initial | card-2image-1 image1 (violation; needs replacement) |
| top5pct-stickers-decals-joliet-ocean-viewz.jpg | custom-shaped-stickers-decals/ | 36K | Initial | card-2image-1 image2 (violation; needs replacement) |
| top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg | custom-shaped-stickers-decals/ | 41K | Initial | card-2image-2 image1 (violation; needs replacement) |
| top5pct-stickers-decals-joliet-volleyball-team.jpg | custom-shaped-stickers-decals/ | 44K | Initial | card-2image-2 image2 (violation; deferred to R4) |
| top5pct-article-buy-stickers-decals-joliet.jpg | standard-stickers-decals/ | 62K | R3 | card-detailed image1 only |
| top5pct-die-cut-stickers-shorewood.jpg | custom-shaped-stickers-decals/ | 315K | R2 | slide-R only |
| top5pct-custom-shaped-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | 667K | R2 | unused on this page — available for Priority 1 |
| top5pct-die-cut-stickers-joliet.jpg | custom-shaped-stickers-decals/ | 205K | R2 | unused on this page — available for Priority 1 |
| top5pct-diecut-stickers.jpg | standard-stickers-decals/ | 295K | R3 | unused on this page — available for Priority 1 |

---

## Notes

- 10 of 14 referenced image slots are R1-R3 as of Jun 25, 2026. 4 remain to be filled.
- All 4 violations are Initial files in card-2image-with-text components. No slide violations.
- Both slides are clean: slide-R is a proper cross-sell (custom-shaped-stickers companion, R2), slide-L is a cross-sell in the right direction (R2), only flagged for the hero duplicate.
- The standard-stickers-decals/ dir has only 2 files total (both R3). The page depends on custom-shaped-stickers-decals/ for 12 of 14 image slots. This is an inventory gap, not a rule violation, but R4 must address it.
- Carousel is cross-dir (custom-shaped-stickers-decals/) due to insufficient same-dir inventory. Rounds are valid. R4 must supply standard-stickers-decals/ images to enable a proper same-dir carousel.
- 1 duplicate: top5pct-custom-stickers-cresthill.jpg in both hero and slide-L. Rounds are valid; visual repetition is the concern.
- 3 unused R1-R3 files are immediately available for card-2image replacement without R4: top5pct-custom-shaped-stickers-cresthill.jpg (R2), top5pct-die-cut-stickers-joliet.jpg (R2), top5pct-diecut-stickers.jpg (R3).
- R4 priorities: (1) new standard-stickers-decals/ images for same-dir carousel, (2) 1 remaining card-2image Initial slot (card-2image-2 image2), (3) slide-L duplicate resolution if Priority 1 or 2 above consume the available R2 replacements.
