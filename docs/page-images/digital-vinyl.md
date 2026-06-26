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

**May 18 round classification:** May 18 confirmed as R2 by user Jun 25, 2026. Applies to both vinyl/ and digital-vinyl/. All May 18 files in this dir are R2.

---

## Dir Inventory

| file | size | date | round | placed in blade |
|---|---|---|---|---|
| top5pct-digital-vinyl-t-shirts.jpg | 481K | Jun 8 | R3 | hero |
| top5pct-digital-vinyl-shirts.jpg | 706K | Jun 8 | R3 | no — unused R3, available |
| top5pct-digital-vinyl-hoodies-in-joliet.jpg | 398K | Jun 8 | R3 | no — unused R3, available |
| top5pct-digital-vinyl-hoodie.jpg | 379K | Jun 8 | R3 | no — unused R3, available |
| vinyl-shirts.jpg | 388K | May 18 | R2 | C-1 |
| vinyl-hoodie.jpg | 570K | May 18 | R2 | C-2 |
| vinyl-caps.jpg | 566K | May 18 | R2 | C-3, card-2image image1, slide-R (3 uses; slide-R is a violation) |
| custom-vinyl-hoodies.jpg | 304K | May 18 | R2 | C-4, card-2, slide-L (3 uses) |
| custom-vinyl-shirts.jpg | 403K | May 18 | R2 | card-1, card-detailed image1 (2 uses) |
| neon-vinyl-shirts.jpg | 295K | May 18 | R2 | card-2image image2 |
| vinyl-zip-up-hoodies.jpg | 423K | May 18 | R2 | card-3 |
| custom-caps-vinyl.jpg | 281K | May 18 | R2 | no — unused |
| custom-hoodies.jpg | 294K | May 18 | R2 | no — unused |
| vinyl-t-shirt-maker.jpg | 386K | May 18 | R2 | no — unused |
| top5pct-article-yard-signs-buy.jpg | 47K | May 18 | — | no — misplaced: yard-sign content |
| top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg | 96K | May 18 | — | no — misplaced: yard-sign content |

Dir summary: 4 R3 (Jun 8), 11 R2 (May 18, confirmed Jun 25), 0 R1, 0 Initial. 17 files total (incl. 2 misplaced yard-sign files).

Unused confirmed R3 files: top5pct-digital-vinyl-shirts.jpg (706K), top5pct-digital-vinyl-hoodies-in-joliet.jpg (398K), top5pct-digital-vinyl-hoodie.jpg (379K) — all three available for placement without waiting for R4.

Unused May 18 files (not placed): custom-caps-vinyl.jpg, custom-hoodies.jpg, vinyl-t-shirt-maker.jpg.

Misplaced files (wrong dir, not referenced in blade): top5pct-article-yard-signs-buy.jpg and top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg. These appear to be yard-sign assets that landed in digital-vinyl/ by mistake. They should be moved to the appropriate yard-signs dir. They are not referenced anywhere in this blade.

---

## Blade Image Slots

Slots in blade order. Banner is first, carousel next, then body, then slides.

| slot | component | image | dir | date | round | size | status |
|---|---|---|---|---|---|---|---|
| hero | category-hero | top5pct-digital-vinyl-t-shirts.jpg | digital-vinyl/ | Jun 8 | R3 | 481K | good |
| C-1 | carousel-rotating-images | vinyl-shirts.jpg | digital-vinyl/ | May 18 | R2 | 388K | R2; candidate for R3 upgrade |
| C-2 | carousel-rotating-images | vinyl-hoodie.jpg | digital-vinyl/ | May 18 | R2 | 570K | R2; candidate for R3 upgrade |
| C-3 | carousel-rotating-images | vinyl-caps.jpg | digital-vinyl/ | May 18 | R2 | 566K | R2; candidate for R3 upgrade; also used in card-2image image1 and slide-R |
| C-4 | carousel-rotating-images | custom-vinyl-hoodies.jpg | digital-vinyl/ | May 18 | R2 | 304K | R2; also used in card-2 and slide-L |
| card-1 | card-image-with-text | custom-vinyl-shirts.jpg | digital-vinyl/ | May 18 | R2 | 403K | R2; also used in card-detailed |
| card-2 | card-image-with-text (imagePosition right) | custom-vinyl-hoodies.jpg | digital-vinyl/ | May 18 | R2 | 304K | R2; duplicate of C-4 |
| card-2image image1 | card-2image-with-text | vinyl-caps.jpg | digital-vinyl/ | May 18 | R2 | 566K | R2; duplicate of C-3 |
| card-2image image2 | card-2image-with-text | neon-vinyl-shirts.jpg | digital-vinyl/ | May 18 | R2 | 295K | good |
| card-3 | card-image-with-text | vinyl-zip-up-hoodies.jpg | digital-vinyl/ | May 18 | R2 | 423K | good |
| card-detailed image1 | card-detailed-info | custom-vinyl-shirts.jpg | digital-vinyl/ | May 18 | R2 | 403K | R2; duplicate of card-1 |
| slide-L | card-banner-slide-in (direction left) | custom-vinyl-hoodies.jpg | digital-vinyl/ | May 18 | R2 | 304K | R2; same-category allowed; duplicate of C-4 |
| slide-R | card-banner-slide-in (direction right) | vinyl-caps.jpg | digital-vinyl/ | May 18 | R2 | 566K | rule violation: same-category in cross-sell position; duplicate of C-3 |

---

## R1-R3 Placement Summary

**Total image slots with an image path referenced:** 13
**Confirmed R1-R4:** 13 of 13 — all slots R1-R4. May 18 confirmed as R2 Jun 25.
**Rule violations:** 1 (slide-R: same-category, not a cross-sell — round is now R2 but category rule still applies)
**Duplicates:** 3 files used in multiple slots (vinyl-caps.jpg ×3, custom-vinyl-hoodies.jpg ×3, custom-vinyl-shirts.jpg ×2)

---

## Carousel

**Current slots:** 4
**Target:** 4. May exceed 4 only if all non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | image | date | round | status |
|---|---|---|---|---|
| hero | top5pct-digital-vinyl-t-shirts.jpg | Jun 8 | R3 | good |
| card-1 | custom-vinyl-shirts.jpg | May 18 | R2 | good |
| card-2 | custom-vinyl-hoodies.jpg | May 18 | R2 | R2; duplicate of C-4 |
| card-2image image1 | vinyl-caps.jpg | May 18 | R2 | R2; duplicate of C-3 |
| card-2image image2 | neon-vinyl-shirts.jpg | May 18 | R2 | good |
| card-3 | vinyl-zip-up-hoodies.jpg | May 18 | R2 | good |
| card-detailed image1 | custom-vinyl-shirts.jpg | May 18 | R2 | R2; duplicate of card-1 |
| slide-L | custom-vinyl-hoodies.jpg | May 18 | R2 | R2; same-category allowed; duplicate of C-4 |
| slide-R | vinyl-caps.jpg | May 18 | R2 | rule violation: same-category (cross-sell required); R2 does not fix category rule |

Over-target condition IS met: all non-carousel slots are R1-R4. Carousel stays at 4. Upgrade C-1/C-2/C-3 to R3 using 3 available unused R3 files.

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

The blade uses `vinyl-caps.jpg` (digital-vinyl/, May 18, R2, 566K) for slide-R. One outstanding issue:

1. **Same-category** — slide-R must always be a cross-sell from a different category dir. This image is from the page's own dir (digital-vinyl/). May 18 being R2 does not fix the category rule.

The slide-R title is "Digital Vinyl Shirts, Hoodies, Hats, and More" with href="/contact". This describes the page's own product rather than a companion. Both the image and the title need to change for a proper slide-R.

Additionally, vinyl-caps.jpg is used in C-3 and card-2image image1 — three total uses of one file. Resolving slide-R reduces it to 2 uses.

---

## Duplicate Image Usage

Three files are used in multiple blade slots:

| file | date | round | slot 1 | slot 2 | slot 3 |
|---|---|---|---|---|---|
| vinyl-caps.jpg | May 18 | R2 | C-3 | card-2image image1 | slide-R (rule violation) |
| custom-vinyl-hoodies.jpg | May 18 | R2 | C-4 | card-2 (right) | slide-L |
| custom-vinyl-shirts.jpg | May 18 | R2 | card-1 | card-detailed image1 | — |

Duplicates stem from thin inventory: 10 R2 files for 13 slots. The 3 R3 carousel upgrades reduce vinyl-caps.jpg from 3 uses to 2 (after slide-R is replaced). R4 images will allow full de-duplication over time.

---

## Slide Rules Check

| slot | direction | image | dir | date | round | rule | status |
|---|---|---|---|---|---|---|---|
| slide-L | left | custom-vinyl-hoodies.jpg | digital-vinyl/ | May 18 | R2 | same-category allowed (direction left) | R2; same-category allowed; duplicate of C-4 |
| slide-R | right | vinyl-caps.jpg | digital-vinyl/ | May 18 | R2 | must be cross-sell R1-R3 from another category | violation: same-category; R2 does not fix category rule; replace with glitter-shirts/ R1-R3 |

---

## Immediate Suggestions

### Action 1 — replace 3 carousel slots with confirmed R3 files

May 18 confirmed as R2 Jun 25. All 13 slots now R1-R4. Carousel improvement is the top priority. Swap C-1, C-2, and C-3 with the 3 unused R3 files now:

| slot | current | replace with | round |
|---|---|---|---|
| C-1 | vinyl-shirts.jpg (May 18) | top5pct-digital-vinyl-shirts.jpg | R3 |
| C-2 | vinyl-hoodie.jpg (May 18) | top5pct-digital-vinyl-hoodie.jpg | R3 |
| C-3 | vinyl-caps.jpg (May 18) | top5pct-digital-vinyl-hoodies-in-joliet.jpg | R3 |

This also removes one use of vinyl-caps.jpg from 3 to 2 (card-2image image1 and slide-R).

### Action 2 — replace slide-R with a confirmed R1-R3 cross-sell from another category

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

### Action 3 — resolve duplicates as R3 carousel replacements and R4 images arrive

Once C-1/C-2/C-3 are upgraded to R3 and R4 supplies new digital-vinyl/ images:
- custom-vinyl-hoodies.jpg (C-4, card-2, slide-L): replace card-2 and slide-L with new files
- custom-vinyl-shirts.jpg (card-1, card-detailed): replace card-detailed with a new R4 file

### Action 4 — move misplaced yard-sign files out of digital-vinyl/

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
| vinyl-shirts.jpg | digital-vinyl/ | 388K | May 18 | R2 | C-1 (candidate for R3 upgrade) |
| vinyl-hoodie.jpg | digital-vinyl/ | 570K | May 18 | R2 | C-2 (candidate for R3 upgrade) |
| vinyl-caps.jpg | digital-vinyl/ | 566K | May 18 | R2 | C-3 (candidate for R3 upgrade), card-2image image1, slide-R — 3 uses; slide-R violation |
| custom-vinyl-hoodies.jpg | digital-vinyl/ | 304K | May 18 | R2 | C-4, card-2, slide-L (3 uses) |
| custom-vinyl-shirts.jpg | digital-vinyl/ | 403K | May 18 | R2 | card-1, card-detailed image1 (2 uses) |
| neon-vinyl-shirts.jpg | digital-vinyl/ | 295K | May 18 | R2 | card-2image image2 only |
| vinyl-zip-up-hoodies.jpg | digital-vinyl/ | 423K | May 18 | R2 | card-3 only |
| custom-caps-vinyl.jpg | digital-vinyl/ | 281K | May 18 | R2 | unused |
| custom-hoodies.jpg | digital-vinyl/ | 294K | May 18 | R2 | unused |
| vinyl-t-shirt-maker.jpg | digital-vinyl/ | 386K | May 18 | R2 | unused |
| top5pct-article-yard-signs-buy.jpg | digital-vinyl/ | 47K | May 18 | — | unused — misplaced yard-sign file |
| top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg | digital-vinyl/ | 96K | May 18 | — | unused — misplaced yard-sign file |

---

## Notes

- 13 of 13 slots R1-R4 as of Jun 25, 2026. May 18 confirmed as R2 Jun 25.
- 1 rule violation: slide-R — same-category image, not a cross-sell. Must be replaced with a cross-sell from another dir.
- 3 unused R3 files available now for carousel upgrade (C-1, C-2, C-3). Over-target condition met.
- 3 files used in multiple slots due to thin inventory. Carousel R3 swaps will reduce vinyl-caps.jpg from 3 uses to 2.
- 2 yard-sign files are misplaced in this dir — not referenced in blade; cleanup deferred.
- Next actions: (1) C-1/C-2/C-3 upgraded to R3 using available files, (2) slide-R replaced with glitter-shirts/ R1-R3 cross-sell, (3) duplicate resolution via R4 images, (4) misplaced file cleanup.
