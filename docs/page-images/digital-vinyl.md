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
| C-1 | carousel-rotating-images | top5pct-digital-vinyl-shirts.jpg | digital-vinyl/ | Jun 8 | R3 | 706K | good — upgraded from R2 Jun 26 |
| C-2 | carousel-rotating-images | top5pct-digital-vinyl-hoodie.jpg | digital-vinyl/ | Jun 8 | R3 | 379K | good — upgraded from R2 Jun 26 |
| C-3 | carousel-rotating-images | top5pct-digital-vinyl-hoodies-in-joliet.jpg | digital-vinyl/ | Jun 8 | R3 | 398K | good — upgraded from R2 Jun 26; hoodie subject same as C-2 until R4 adds variety |
| C-4 | carousel-rotating-images | custom-vinyl-hoodies.jpg | digital-vinyl/ | May 18 | R2 | 304K | R2; also used in card-2 and slide-L |
| card-1 | card-image-with-text | custom-vinyl-shirts.jpg | digital-vinyl/ | May 18 | R2 | 403K | R2; also used in card-detailed |
| card-2 | card-image-with-text (imagePosition right) | custom-vinyl-hoodies.jpg | digital-vinyl/ | May 18 | R2 | 304K | R2; duplicate of C-4 |
| card-2image image1 | card-2image-with-text | vinyl-caps.jpg | digital-vinyl/ | May 18 | R2 | 566K | R2; duplicate of C-3 |
| card-2image image2 | card-2image-with-text | neon-vinyl-shirts.jpg | digital-vinyl/ | May 18 | R2 | 295K | good |
| card-3 | card-image-with-text | vinyl-zip-up-hoodies.jpg | digital-vinyl/ | May 18 | R2 | 423K | good |
| card-detailed image1 | card-detailed-info | custom-vinyl-shirts.jpg | digital-vinyl/ | May 18 | R2 | 403K | R2; duplicate of card-1 |
| slide-L | card-banner-slide-in (direction left) | custom-vinyl-hoodies.jpg | digital-vinyl/ | May 18 | R2 | 304K | R2; same-category allowed; duplicate of C-4 |
| slide-R | card-banner-slide-in (direction right) | top5pct-glitter-sweatshirts-joliet.jpg | glitter-shirts/ | Jun 8 | R3 | 375K | good — cross-sell to glitter-shirts/; violation resolved Jun 26 |

---

## R1-R3 Placement Summary

**Total image slots with an image path referenced:** 13
**Confirmed R1-R4:** 13 of 13
**Rule violations:** 0 — slide-R violation resolved Jun 26 (glitter-shirts/ R3 cross-sell)
**Duplicates:** 2 files used in multiple slots (custom-vinyl-hoodies.jpg ×3, custom-vinyl-shirts.jpg ×2) — vinyl-caps.jpg reduced to 1 use after C-3 and slide-R replacements

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
| card-2image image1 | vinyl-caps.jpg | May 18 | R2 | R2; C-3/slide-R duplicates resolved Jun 26 — now single use only |
| card-2image image2 | neon-vinyl-shirts.jpg | May 18 | R2 | good |
| card-3 | vinyl-zip-up-hoodies.jpg | May 18 | R2 | good |
| card-detailed image1 | custom-vinyl-shirts.jpg | May 18 | R2 | R2; duplicate of card-1 |
| slide-L | custom-vinyl-hoodies.jpg | May 18 | R2 | R2; same-category allowed; duplicate of C-4 |
| slide-R | vinyl-caps.jpg | May 18 | R2 | rule violation: same-category (cross-sell required); R2 does not fix category rule |

Over-target condition met. All non-carousel slots R1-R4. Carousel stays at 4.

**Carousel upgrade — completed Jun 26:**

| slot | old image | old round | new image | new round | size |
|---|---|---|---|---|---|
| C-1 | vinyl-shirts.jpg | R2 | top5pct-digital-vinyl-shirts.jpg | R3 | 706K |
| C-2 | vinyl-hoodie.jpg | R2 | top5pct-digital-vinyl-hoodie.jpg | R3 | 379K |
| C-3 | vinyl-caps.jpg | R2 | top5pct-digital-vinyl-hoodies-in-joliet.jpg | R3 | 398K |
| C-4 | custom-vinyl-hoodies.jpg | R2 | (hold — no 4th R3 file available) | R2 | 304K |

Note: C-3 is a hoodie image, same subject as C-2. Two hoodie slots until R4 adds cap or shirt variety in R3/R4 naming.

---

## Rule Violations

### slide-R — resolved Jun 26, 2026

Previously used `vinyl-caps.jpg` (digital-vinyl/, R2) — same-category violation. Replaced with `top5pct-glitter-sweatshirts-joliet.jpg` (glitter-shirts/, R3, 375K). Title updated to "Add Glitter or Rhinestone Accents to Your Digital Vinyl Order." href updated to `/custom-apparel/specialty-materials/glitter-shirts`. Both category rule and duplicate resolved.

---

## Duplicate Image Usage

Three files are used in multiple blade slots:

| file | date | round | slot 1 | slot 2 | slot 3 |
|---|---|---|---|---|---|
| vinyl-caps.jpg | May 18 | R2 | card-2image image1 | — | — | resolved Jun 26 — C-3 and slide-R both replaced; now single use |
| custom-vinyl-hoodies.jpg | May 18 | R2 | C-4 | card-2 (right) | slide-L | remains — 3 uses; R4 images needed to reduce |
| custom-vinyl-shirts.jpg | May 18 | R2 | card-1 | card-detailed image1 | — | remains — 2 uses; R4 images needed to reduce |

vinyl-caps.jpg reduced to 1 use Jun 26 (C-3 → R3, slide-R → glitter cross-sell). 2 duplicate pairs remain (custom-vinyl-hoodies.jpg ×3, custom-vinyl-shirts.jpg ×2) — require new R4 digital-vinyl/ images to resolve.

---

## Slide Rules Check

| slot | direction | image | dir | date | round | rule | status |
|---|---|---|---|---|---|---|---|
| slide-L | left | custom-vinyl-hoodies.jpg | digital-vinyl/ | May 18 | R2 | same-category allowed (direction left) | R2; same-category allowed; duplicate of C-4 |
| slide-R | right | top5pct-glitter-sweatshirts-joliet.jpg | glitter-shirts/ | Jun 8 | R3 | must be cross-sell R1-R3 from another category | good — cross-sell to glitter-shirts/; violation resolved Jun 26 |

---

## Immediate Suggestions

### Completed Jun 26, 2026

- **C-1/C-2/C-3 upgraded to R3:** Replaced May 18 R2 carousel slots with the 3 available unused R3 files.
- **slide-R cross-sell fixed:** Replaced same-category `vinyl-caps.jpg` (violation) with `top5pct-glitter-sweatshirts-joliet.jpg` (glitter-shirts/, R3). Title and href updated to glitter-shirts page.

### Remaining actions (require R4 digital-vinyl/ images)

- **Resolve custom-vinyl-hoodies.jpg ×3:** Used in C-4, card-2, slide-L. Replace card-2 and slide-L with new R4 digital-vinyl/ images.
- **Resolve custom-vinyl-shirts.jpg ×2:** Used in card-1 and card-detailed. Replace card-detailed with a new R4 file.
- **C-4 carousel upgrade:** No 4th R3 same-dir file exists. Awaits R4 supply.
- **Move misplaced yard-sign files:** `top5pct-article-yard-signs-buy.jpg` and `top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg` belong in the yard-signs dir.

---

## File Usage Count

| file | dir | size | date | round | used in |
|---|---|---|---|---|---|
| top5pct-digital-vinyl-t-shirts.jpg | digital-vinyl/ | 481K | Jun 8 | R3 | hero only |
| top5pct-digital-vinyl-shirts.jpg | digital-vinyl/ | 706K | Jun 8 | R3 | C-1 (placed Jun 26) |
| top5pct-digital-vinyl-hoodies-in-joliet.jpg | digital-vinyl/ | 398K | Jun 8 | R3 | C-3 (placed Jun 26) |
| top5pct-digital-vinyl-hoodie.jpg | digital-vinyl/ | 379K | Jun 8 | R3 | C-2 (placed Jun 26) |
| top5pct-glitter-sweatshirts-joliet.jpg | glitter-shirts/ | 375K | Jun 8 | R3 | slide-R only (placed Jun 26) |
| vinyl-shirts.jpg | digital-vinyl/ | 388K | May 18 | R2 | unused (C-1 replaced Jun 26) |
| vinyl-hoodie.jpg | digital-vinyl/ | 570K | May 18 | R2 | unused (C-2 replaced Jun 26) |
| vinyl-caps.jpg | digital-vinyl/ | 566K | May 18 | R2 | card-2image image1 only (C-3 and slide-R replaced Jun 26) |
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

- 13 of 13 slots R1-R4. 0 rule violations.
- Jun 25: May 18 confirmed as R2.
- Jun 26: C-1/C-2/C-3 upgraded to R3. slide-R violation resolved (glitter-shirts/ R3 cross-sell). vinyl-caps.jpg reduced from 3 uses to 1.
- 2 duplicate pairs remain: custom-vinyl-hoodies.jpg ×3 (C-4, card-2, slide-L) and custom-vinyl-shirts.jpg ×2 (card-1, card-detailed). Both require new R4 digital-vinyl/ images to resolve.
- 2 misplaced yard-sign files in dir — not referenced in blade; cleanup deferred.
