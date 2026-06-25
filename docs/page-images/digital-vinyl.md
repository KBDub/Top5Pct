# Digital Vinyl — Image Status

**Blade:** `resources/views/pages/custom-apparel/printing-options/digital-vinyl.blade.php`
**URL:** `/custom-apparel/printing-options/digital-vinyl`
**Dir:** `public/images/digital-vinyl/` — 17 files (excl. .DS_Store)
**Verified:** Jun 25, 2026

---

## Round Reference

| round | date | note |
|---|---|---|
| Initial | Mar 16/17, 2026 | |
| R1 | May 11, 2026 | |
| R2 | Jun 2, 2026 | |
| R3 | Jun 8, 2026 | |

**Important — non-standard date in this dir:** 13 files in digital-vinyl/ carry a date of May 18, 2026. This date falls between R1 (May 11) and R2 (Jun 2) and does not match any established round. The files are not Initial (wrong date, sizes are 280-570K vs. 35-100K for typical Initial files) and are not R1 (May 11) or R2 (Jun 2). They use generic naming without the `top5pct-` prefix and without location identifiers, which is consistent with early import batches. Round classification for the May 18 files is listed as "May 18 (unconfirmed)" throughout this document. These files cannot receive R1-R3 credit until the user confirms their round designation.

---

## Dir Inventory

| file | size | date | round | placed in blade |
|---|---|---|---|---|
| top5pct-digital-vinyl-t-shirts.jpg | 481K | Jun 8 | R3 | hero |
| top5pct-digital-vinyl-shirts.jpg | 706K | Jun 8 | R3 | no — unused R3, available |
| top5pct-digital-vinyl-hoodies-in-joliet.jpg | 398K | Jun 8 | R3 | no — unused R3, available |
| top5pct-digital-vinyl-hoodie.jpg | 379K | Jun 8 | R3 | no — unused R3, available |
| vinyl-shirts.jpg | 388K | May 18 | unconfirmed | C-1 |
| vinyl-hoodie.jpg | 570K | May 18 | unconfirmed | C-2 |
| vinyl-caps.jpg | 566K | May 18 | unconfirmed | C-3, card-2image image1, slide-R (3 uses) |
| custom-vinyl-hoodies.jpg | 304K | May 18 | unconfirmed | C-4, card-2, slide-L (3 uses) |
| custom-vinyl-shirts.jpg | 403K | May 18 | unconfirmed | card-1, card-detailed image1 (2 uses) |
| neon-vinyl-shirts.jpg | 295K | May 18 | unconfirmed | card-2image image2 |
| vinyl-zip-up-hoodies.jpg | 423K | May 18 | unconfirmed | card-3 |
| custom-caps-vinyl.jpg | 281K | May 18 | unconfirmed | no — unused |
| custom-hoodies.jpg | 294K | May 18 | unconfirmed | no — unused |
| vinyl-t-shirt-maker.jpg | 386K | May 18 | unconfirmed | no — unused |
| top5pct-article-yard-signs-buy.jpg | 47K | May 18 | — | no — misplaced: yard-sign content |
| top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg | 96K | May 18 | — | no — misplaced: yard-sign content |

Dir summary: 4 R3 (Jun 8), 13 May 18 (round unconfirmed), 0 R1, 0 R2, 0 Initial. 17 files total.

Unused confirmed R3 files: top5pct-digital-vinyl-shirts.jpg (706K), top5pct-digital-vinyl-hoodies-in-joliet.jpg (398K), top5pct-digital-vinyl-hoodie.jpg (379K) — all three available for placement without waiting for R4.

Unused May 18 files (not placed): custom-caps-vinyl.jpg, custom-hoodies.jpg, vinyl-t-shirt-maker.jpg.

Misplaced files (wrong dir, not referenced in blade): top5pct-article-yard-signs-buy.jpg and top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg. These appear to be yard-sign assets that landed in digital-vinyl/ by mistake. They should be moved to the appropriate yard-signs dir. They are not referenced anywhere in this blade.

---

## Blade Image Slots

Slots in blade order. Banner is first, carousel next, then body, then slides.

| slot | component | image | dir | date | round | size | status |
|---|---|---|---|---|---|---|---|
| hero | category-hero | top5pct-digital-vinyl-t-shirts.jpg | digital-vinyl/ | Jun 8 | R3 | 481K | good |
| C-1 | carousel-rotating-images | vinyl-shirts.jpg | digital-vinyl/ | May 18 | unconfirmed | 388K | round unconfirmed |
| C-2 | carousel-rotating-images | vinyl-hoodie.jpg | digital-vinyl/ | May 18 | unconfirmed | 570K | round unconfirmed |
| C-3 | carousel-rotating-images | vinyl-caps.jpg | digital-vinyl/ | May 18 | unconfirmed | 566K | round unconfirmed; also used in card-2image image1 and slide-R |
| C-4 | carousel-rotating-images | custom-vinyl-hoodies.jpg | digital-vinyl/ | May 18 | unconfirmed | 304K | round unconfirmed; also used in card-2 and slide-L |
| card-1 | card-image-with-text | custom-vinyl-shirts.jpg | digital-vinyl/ | May 18 | unconfirmed | 403K | round unconfirmed; also used in card-detailed |
| card-2 | card-image-with-text (imagePosition right) | custom-vinyl-hoodies.jpg | digital-vinyl/ | May 18 | unconfirmed | 304K | round unconfirmed; duplicate of C-4 |
| card-2image image1 | card-2image-with-text | vinyl-caps.jpg | digital-vinyl/ | May 18 | unconfirmed | 566K | round unconfirmed; duplicate of C-3 |
| card-2image image2 | card-2image-with-text | neon-vinyl-shirts.jpg | digital-vinyl/ | May 18 | unconfirmed | 295K | round unconfirmed |
| card-3 | card-image-with-text | vinyl-zip-up-hoodies.jpg | digital-vinyl/ | May 18 | unconfirmed | 423K | round unconfirmed |
| card-detailed image1 | card-detailed-info | custom-vinyl-shirts.jpg | digital-vinyl/ | May 18 | unconfirmed | 403K | round unconfirmed; duplicate of card-1 |
| slide-L | card-banner-slide-in (direction left) | custom-vinyl-hoodies.jpg | digital-vinyl/ | May 18 | unconfirmed | 304K | round unconfirmed; same-category allowed for slide-L; duplicate of C-4 |
| slide-R | card-banner-slide-in (direction right) | vinyl-caps.jpg | digital-vinyl/ | May 18 | unconfirmed | 566K | rule violation: same-category in cross-sell position; duplicate of C-3 |

---

## R1-R3 Placement Summary

**Total image slots with an image path referenced:** 13
**Confirmed R1-R3 by round:** 1 (hero, R3, Jun 8)
**Unconfirmed round (May 18):** 12 — cannot receive R1-R3 credit until round is confirmed
**Rule violations:** 1 (slide-R: same-category, not a cross-sell)

**R1-R3 slots remaining to fill:** 12 (all May 18 slots, pending confirmation or replacement)

If the user confirms May 18 as an approved round (equivalent to R1 or a distinct named round), the count changes to 12 of 13 confirmed, with only the slide-R rule violation remaining as an issue. This document proceeds on the assumption that May 18 is unconfirmed until the user clarifies.

---

## Carousel

**Current slots:** 4
**Target:** 4. May exceed 4 only if all non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | image | date | round | status |
|---|---|---|---|---|
| hero | top5pct-digital-vinyl-t-shirts.jpg | Jun 8 | R3 | good |
| card-1 | custom-vinyl-shirts.jpg | May 18 | unconfirmed | unconfirmed |
| card-2 | custom-vinyl-hoodies.jpg | May 18 | unconfirmed | unconfirmed |
| card-2image image1 | vinyl-caps.jpg | May 18 | unconfirmed | unconfirmed |
| card-2image image2 | neon-vinyl-shirts.jpg | May 18 | unconfirmed | unconfirmed |
| card-3 | vinyl-zip-up-hoodies.jpg | May 18 | unconfirmed | unconfirmed |
| card-detailed image1 | custom-vinyl-shirts.jpg | May 18 | unconfirmed | unconfirmed |
| slide-L | custom-vinyl-hoodies.jpg | May 18 | unconfirmed | unconfirmed; round + duplicate of C-4 |
| slide-R | vinyl-caps.jpg | May 18 | unconfirmed | rule violation + unconfirmed + duplicate of C-3 |

Over-target condition is not met: all non-carousel body and slide slots are May 18 unconfirmed. Carousel stays at 4.

**Carousel round improvement — 3 confirmed R3 files available now:**

The 4 carousel slots currently use May 18 files (C-1 through C-4). Three unused R3 files exist in the dir and can replace three of the four carousel slots immediately:

| carousel slot | current image | date | replace with | date | round | size |
|---|---|---|---|---|---|---|
| C-1 | vinyl-shirts.jpg | May 18 | top5pct-digital-vinyl-shirts.jpg | Jun 8 | R3 | 706K |
| C-2 | vinyl-hoodie.jpg | May 18 | top5pct-digital-vinyl-hoodie.jpg | Jun 8 | R3 | 379K |
| C-3 | vinyl-caps.jpg | May 18 | top5pct-digital-vinyl-hoodies-in-joliet.jpg | Jun 8 | R3 | 398K |
| C-4 | custom-vinyl-hoodies.jpg | May 18 | (no 4th R3 file available — hold) | — | — | — |

Note: there is no cap-specific R3 file to replace C-3 like-for-like. top5pct-digital-vinyl-hoodies-in-joliet.jpg is a hoodie image, same subject as C-2. Assigning it to C-3 means the carousel would have two hoodie slots. Until R4 provides a cap or shirt variety in R3 naming, this is the best available option. If the user prefers to hold C-3 and C-4 as May 18 rather than duplicate subjects, C-4 remains May 18 unconfirmed and C-3 gets the third R3 file.

After this swap: C-1, C-2, C-3 = R3 confirmed. C-4 = May 18 unconfirmed (or reassigned if user confirms May 18 as R1).

---

## Rule Violations

### slide-R — same-category image in cross-sell position

The blade uses `vinyl-caps.jpg` (digital-vinyl/, May 18, 566K) for slide-R. Two issues:

1. **Same-category** — slide-R must always be a cross-sell from a different category dir. This image is from the page's own dir (digital-vinyl/).
2. **Round unconfirmed** — even if it were a cross-sell, the May 18 date is unconfirmed as R1-R3. The slide-R rule requires R1-R3 cross-sell images.

The slide-R title is "Digital Vinyl Shirts, Hoodies, Hats, and More" with href="/contact". This title describes the current page's own product rather than a companion, which confirms it was not designed as a cross-sell. Both the image and the title need to change for a proper slide-R.

Additionally, vinyl-caps.jpg is already used in C-3 and card-2image image1 — three total uses of this one file.

---

## Duplicate Image Usage

Three files are used in multiple blade slots:

| file | date | round | slot 1 | slot 2 | slot 3 |
|---|---|---|---|---|---|
| vinyl-caps.jpg | May 18 | unconfirmed | C-3 | card-2image image1 | slide-R (rule violation) |
| custom-vinyl-hoodies.jpg | May 18 | unconfirmed | C-4 | card-2 (right) | slide-L |
| custom-vinyl-shirts.jpg | May 18 | unconfirmed | card-1 | card-detailed image1 | — |

All three duplicates stem from a small usable inventory: only 10 May 18 files are digital-vinyl content (2 are misplaced yard-sign files), and 4 are confirmed R3. With 13 image slots and 10 May 18 files to draw from, reuse was unavoidable. The R3 replacements and R4 images will allow eliminating duplicates over time.

---

## Slide Rules Check

| slot | direction | image | dir | date | round | rule | status |
|---|---|---|---|---|---|---|---|
| slide-L | left | custom-vinyl-hoodies.jpg | digital-vinyl/ | May 18 | unconfirmed | may be cross-sell; if cross-sell must be R1-R3 | same-category (allowed for slide-L); round unconfirmed; duplicate of C-4 |
| slide-R | right | vinyl-caps.jpg | digital-vinyl/ | May 18 | unconfirmed | must be cross-sell R1-R3 from another category | violation: same-category; round unconfirmed; duplicate of C-3 |

---

## Immediate Suggestions

### Action 1 — confirm or classify the May 18 date

The most important step for this page. If the user confirms May 18 as a valid round (R1-equivalent or a distinct round with full credit), 12 of 13 slots immediately become valid, leaving only the slide-R cross-sell as the outstanding issue.

If May 18 is not confirmed as R1-R3, then 12 slots need replacement, and only the 3 unused R3 files plus any cross-sell from another category can address this before R4.

### Action 2 — replace 3 carousel slots with confirmed R3 files

Regardless of the May 18 classification decision, swapping C-1, C-2, and C-3 with the 3 unused R3 files is a clear improvement using currently available inventory:

| slot | current | replace with | round |
|---|---|---|---|
| C-1 | vinyl-shirts.jpg (May 18) | top5pct-digital-vinyl-shirts.jpg | R3 |
| C-2 | vinyl-hoodie.jpg (May 18) | top5pct-digital-vinyl-hoodie.jpg | R3 |
| C-3 | vinyl-caps.jpg (May 18) | top5pct-digital-vinyl-hoodies-in-joliet.jpg | R3 |

This also removes one use of vinyl-caps.jpg, reducing it from 3 uses to 2 (card-2image image1 and slide-R).

### Action 3 — replace slide-R with a confirmed R1-R3 cross-sell from another category

The blade body references these companion categories most frequently:

| companion | references in blade | link |
|---|---|---|
| custom-apparel (general) | 4 | /custom-apparel |
| corporate-wear | 3 | /custom-apparel/group-wear/corporate-wear-shirts |
| DTF printing | 2 | /custom-apparel/printing-options/dtf-printing |
| embroidery | 2 | /custom-apparel/printing-options/embroidery |
| glitter/rhinestone | 2 | /custom-apparel/specialty-materials/glitter-shirts |
| spirit wear | 1 | /custom-apparel/group-wear/spirit-wear-shirts |
| promotional items | 1 | /promotional-items |
| design services | 1 | /design-services |
| screen printing | 1 | /custom-apparel/printing-options/screen-printing |
| dye sublimation | 1 | /custom-apparel/printing-options/dye-sublimation-printing |

Glitter-shirts is directly mentioned in the blade footer as an upsell pairing: "add glitter or rhinestone accents to your digital vinyl design for a layered specialty finish." This is the most content-aligned cross-sell and glitter-shirts/ has confirmed R1, R2, and R3 files from prior audits.

**Recommended slide-R replacement:**

| file | dir | round | date | size | title suggestion |
|---|---|---|---|---|---|
| (any R1-R3 glitter-shirts/ file) | glitter-shirts/ | R1-R3 | — | — | "Add Glitter or Rhinestone Accents to Your Digital Vinyl Order" |

Alternate candidates:
- promotional-items (mugs/ or can-koozies/) — referenced once in blade, rounds confirmed R1-R2
- custom-shirts/ R1-R3 file — broader apparel cross-sell; dates need confirmation for specific files

Priority recommendation: glitter-shirts/ R3 file. This matches the specific companion already called out in the blade's footer section and glitter-shirts/ R3 inventory is confirmed from prior sessions.

### Action 4 — resolve duplicates as R3 replacements arrive

Once R4 supplies new digital-vinyl/ images, resolve the remaining duplicates:
- custom-vinyl-hoodies.jpg (used in C-4, card-2, slide-L): replace card-2 and slide-L with new files; keep one use only
- custom-vinyl-shirts.jpg (used in card-1 and card-detailed): replace card-detailed with a new R4 file

### Action 5 — move misplaced yard-sign files out of digital-vinyl/

Two files in digital-vinyl/ are yard-sign assets that do not belong here:
- top5pct-article-yard-signs-buy.jpg
- top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg

These are not referenced in the digital-vinyl blade. They should be moved to the appropriate yard-signs dir. Not an image-round issue but a directory hygiene item to address during R4 cleanup.

---

## File Usage Count

| file | dir | size | date | round | used in |
|---|---|---|---|---|---|
| top5pct-digital-vinyl-t-shirts.jpg | digital-vinyl/ | 481K | Jun 8 | R3 | hero only |
| top5pct-digital-vinyl-shirts.jpg | digital-vinyl/ | 706K | Jun 8 | R3 | unused — available for C-1 |
| top5pct-digital-vinyl-hoodies-in-joliet.jpg | digital-vinyl/ | 398K | Jun 8 | R3 | unused — available for C-2 or C-3 |
| top5pct-digital-vinyl-hoodie.jpg | digital-vinyl/ | 379K | Jun 8 | R3 | unused — available for C-2 or C-3 |
| vinyl-shirts.jpg | digital-vinyl/ | 388K | May 18 | unconfirmed | C-1 |
| vinyl-hoodie.jpg | digital-vinyl/ | 570K | May 18 | unconfirmed | C-2 |
| vinyl-caps.jpg | digital-vinyl/ | 566K | May 18 | unconfirmed | C-3, card-2image image1, slide-R (3 uses; slide-R is a violation) |
| custom-vinyl-hoodies.jpg | digital-vinyl/ | 304K | May 18 | unconfirmed | C-4, card-2, slide-L (3 uses) |
| custom-vinyl-shirts.jpg | digital-vinyl/ | 403K | May 18 | unconfirmed | card-1, card-detailed image1 (2 uses) |
| neon-vinyl-shirts.jpg | digital-vinyl/ | 295K | May 18 | unconfirmed | card-2image image2 only |
| vinyl-zip-up-hoodies.jpg | digital-vinyl/ | 423K | May 18 | unconfirmed | card-3 only |
| custom-caps-vinyl.jpg | digital-vinyl/ | 281K | May 18 | unconfirmed | unused |
| custom-hoodies.jpg | digital-vinyl/ | 294K | May 18 | unconfirmed | unused |
| vinyl-t-shirt-maker.jpg | digital-vinyl/ | 386K | May 18 | unconfirmed | unused |
| top5pct-article-yard-signs-buy.jpg | digital-vinyl/ | 47K | May 18 | — | unused — misplaced yard-sign file |
| top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg | digital-vinyl/ | 96K | May 18 | — | unused — misplaced yard-sign file |

---

## Notes

- 1 of 13 referenced image slots is confirmed R1-R3 (hero, R3) as of Jun 25, 2026.
- 12 of 13 slots use May 18 files whose round is unconfirmed. Round confirmation from the user is the highest priority action for this page.
- If May 18 is confirmed as a valid round: 12 of 13 slots become valid, leaving only the slide-R rule violation outstanding.
- 1 rule violation: slide-R — same-category image, not a cross-sell. Must be replaced regardless of how May 18 is classified.
- 3 confirmed R3 files are available in the dir right now for carousel improvement without waiting for R4.
- 3 files are used in multiple slots (duplicate usage) due to small usable inventory.
- 2 yard-sign files are misplaced in this dir and should be relocated during R4 cleanup.
- Carousel at exactly 4, all May 18 unconfirmed. Replace C-1, C-2, C-3 with the 3 available R3 files as the next step.
- R4 priorities: (1) user confirmation of May 18 round status, (2) slide-R cross-sell replacement, (3) carousel slots C-1/C-2/C-3 swapped to R3, (4) new digital-vinyl/ images to resolve duplicates and fill C-4 with confirmed R3, (5) misplaced file cleanup.
