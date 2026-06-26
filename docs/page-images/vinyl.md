# Vinyl Shirts & Apparel — Image Status

**Blade:** `resources/views/pages/custom-apparel/specialty-materials/vinyl.blade.php`
**URL:** `/custom-apparel/specialty-materials/vinyl`
**Dir:** `public/images/vinyl/` — 14 files (excl. .DS_Store if present)
**Verified:** Jun 25, 2026

---

## Round Reference

| round | date | note |
|---|---|---|
| Initial | Mar 16/17, 2026 | |
| R1 | May 11, 2026 | |
| R2 | Jun 2, 2026 | |
| R3 | Jun 8, 2026 | |

**Important — non-standard date in this dir:** The same May 18 date issue documented in digital-vinyl/ applies here. 12 of 14 files in vinyl/ carry a May 18, 2026 date. May 18 falls between R1 (May 11) and R2 (Jun 2) and does not match any established round. File sizes are substantial (280-570K), inconsistent with Initial-style files. Round classification for May 18 files is listed as "unconfirmed" throughout this document. These files cannot receive R1-R3 credit until the user confirms their round designation.

**Cross-dir structural note:** The May 18 batch in vinyl/ is byte-for-byte identical to the May 18 batch in digital-vinyl/. Every file in both dirs with a May 18 date shares the same name and exact file size. The two dirs were populated from the same source batch. This confirms the May 18 batch is a shared import, not dir-specific. The two misplaced yard-sign files present in digital-vinyl/ are also present in vinyl/ — identical names and sizes.

---

## Dir Inventory

| file | size | date | round | placed in blade |
|---|---|---|---|---|
| top5pct-vinyl-shirts.jpg | 388K | Jun 8 | R3 | hero |
| top5pct-vinyl-t-shirt-maker.jpg | 386K | Jun 8 | R3 | card-detailed image1 |
| custom-vinyl-shirts.jpg | 403K | May 18 | unconfirmed | C-1 and card-1 (duplicate) |
| vinyl-hoodie.jpg | 570K | May 18 | unconfirmed | C-2 |
| vinyl-caps.jpg | 566K | May 18 | unconfirmed | C-3 and slide-R (duplicate; slide-R is a violation) |
| vinyl-zip-up-hoodies.jpg | 423K | May 18 | unconfirmed | C-4 and card-3 (duplicate) |
| custom-vinyl-hoodies.jpg | 304K | May 18 | unconfirmed | card-2 and slide-L (duplicate) |
| custom-caps-vinyl.jpg | 281K | May 18 | unconfirmed | card-2image image1 |
| neon-vinyl-shirts.jpg | 295K | May 18 | unconfirmed | card-2image image2 |
| custom-hoodies.jpg | 294K | May 18 | unconfirmed | no — unused |
| vinyl-shirts.jpg | 388K | May 18 | unconfirmed | no — unused |
| vinyl-t-shirt-maker.jpg | 386K | May 18 | unconfirmed | no — unused |
| top5pct-article-yard-signs-buy.jpg | 47K | May 18 | — | no — misplaced: yard-sign content |
| top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg | 96K | May 18 | — | no — misplaced: yard-sign content |

Dir summary: 2 R3 (Jun 8), 12 May 18 (round unconfirmed — 10 vinyl/apparel content, 2 misplaced yard-sign), 0 R1, 0 R2, 0 Initial.

**Critical difference from digital-vinyl/:** Both R3 files are already placed (hero and card-detailed). There are no unused R3 same-dir files available for carousel improvement. Any carousel upgrade must wait for round confirmation of the May 18 files or for R4 to supply new vinyl/ images.

Unused May 18 files (not placed): custom-hoodies.jpg, vinyl-shirts.jpg, vinyl-t-shirt-maker.jpg. These are available as body card candidates if May 18 is confirmed as a valid round.

Misplaced files (wrong dir, not referenced in blade): top5pct-article-yard-signs-buy.jpg and top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg. These are identical copies of the same files in digital-vinyl/. They should be moved to the appropriate yard-signs dir. Neither is referenced in this blade.

---

## Blade Image Slots

Slots in blade order. Banner is first, carousel next, then body, then slides.

| slot | component | image | dir | date | round | size | status |
|---|---|---|---|---|---|---|---|
| hero | category-hero | top5pct-vinyl-shirts.jpg | vinyl/ | Jun 8 | R3 | 388K | good |
| C-1 | carousel-rotating-images | top5pct-vinyl-shirts-joliet.jpg | vinyl/ | Jun 20 | R4 | — | good — R4 same-dir; was unconfirmed May 18; C-1/card-1 duplicate resolved |
| C-2 | carousel-rotating-images | vinyl-hoodie.jpg | vinyl/ | May 18 | unconfirmed | 570K | round unconfirmed |
| C-3 | carousel-rotating-images | vinyl-caps.jpg | vinyl/ | May 18 | unconfirmed | 566K | round unconfirmed; slide-R duplicate resolved Jun 25 |
| C-4 | carousel-rotating-images | vinyl-zip-up-hoodies.jpg | vinyl/ | May 18 | unconfirmed | 423K | round unconfirmed; duplicate of card-3 |
| card-1 | card-image-with-text | custom-vinyl-shirts.jpg | vinyl/ | May 18 | unconfirmed | 403K | round unconfirmed; C-1 duplicate resolved Jun 25 (C-1 now uses R4 file) |
| card-2 | card-image-with-text (imagePosition right) | custom-vinyl-hoodies.jpg | vinyl/ | May 18 | unconfirmed | 304K | round unconfirmed; duplicate of slide-L |
| card-2image image1 | card-2image-with-text | custom-caps-vinyl.jpg | vinyl/ | May 18 | unconfirmed | 281K | round unconfirmed |
| card-2image image2 | card-2image-with-text | neon-vinyl-shirts.jpg | vinyl/ | May 18 | unconfirmed | 295K | round unconfirmed |
| card-3 | card-image-with-text | vinyl-zip-up-hoodies.jpg | vinyl/ | May 18 | unconfirmed | 423K | round unconfirmed; duplicate of C-4 |
| card-detailed image1 | card-detailed-info | top5pct-vinyl-t-shirt-maker.jpg | vinyl/ | Jun 8 | R3 | 386K | good |
| slide-L | card-banner-slide-in (direction left) | custom-vinyl-hoodies.jpg | vinyl/ | May 18 | unconfirmed | 304K | round unconfirmed; same-category allowed for slide-L; duplicate of card-2 |
| slide-R | card-banner-slide-in (direction right) | top5pct-retractable-banner.jpg | banners/ | May 11 | R1 | 234K | good — cross-sell to banners/; violation resolved Jun 25; C-3/slide-R duplicate resolved |

---

## R1-R3 Placement Summary

**Total image slots with an image path referenced:** 13
**Confirmed R1-R4:** 4 (hero R3, C-1 R4, card-detailed R3, slide-R R1)
**Unconfirmed round (May 18):** 9 — cannot receive R1-R3 credit until round is confirmed
**Rule violations:** 0 — slide-R violation resolved Jun 25

**R1-R3 slots remaining to fill:** 9 (all remaining May 18 slots, pending confirmation or replacement)

If the user confirms May 18 as an approved round, the count changes to 13 of 13 confirmed. This document proceeds on the assumption that May 18 is unconfirmed.

---

## Carousel

**Current slots:** 4
**Target:** 4. May exceed 4 only if all non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | image | date | round | status |
|---|---|---|---|---|
| hero | top5pct-vinyl-shirts.jpg | Jun 8 | R3 | good |
| card-1 | custom-vinyl-shirts.jpg | May 18 | unconfirmed | unconfirmed |
| card-2 | custom-vinyl-hoodies.jpg | May 18 | unconfirmed | unconfirmed |
| card-2image image1 | custom-caps-vinyl.jpg | May 18 | unconfirmed | unconfirmed |
| card-2image image2 | neon-vinyl-shirts.jpg | May 18 | unconfirmed | unconfirmed |
| card-3 | vinyl-zip-up-hoodies.jpg | May 18 | unconfirmed | unconfirmed |
| card-detailed image1 | top5pct-vinyl-t-shirt-maker.jpg | Jun 8 | R3 | good |
| slide-L | custom-vinyl-hoodies.jpg | May 18 | unconfirmed | unconfirmed; same-category allowed |
| slide-R | vinyl-caps.jpg | May 18 | unconfirmed | rule violation |

Over-target condition is not met: 9 non-carousel slots remain May 18 unconfirmed. Carousel stays at 4. C-1 upgraded to R4 Jun 25.

C-1 now uses confirmed R4 file. C-2/C-3/C-4 remain May 18 unconfirmed. No unused confirmed same-dir files remain for further carousel improvement without May 18 confirmation or additional R4 images.

---

## Rule Violations

### slide-R — resolved Jun 25, 2026

slide-R previously used `vinyl-caps.jpg` (vinyl/, May 18, unconfirmed, 566K). Two violations: same-category and round unconfirmed.

**Fix applied Jun 25, 2026:** slide-R replaced with `top5pct-retractable-banner.jpg` (banners/, R1, May 11, 234K). Title updated to "Add a Custom Vinyl Banner to Match Your Apparel Order." href updated to `/signs/business-signs/banners`. Both violations resolved. C-3/slide-R duplicate also resolved.

---

## Duplicate Image Usage

Two files remain used in multiple blade slots (2 resolved Jun 25):

| file | date | round | slot 1 | slot 2 | status |
|---|---|---|---|---|---|
| custom-vinyl-shirts.jpg | May 18 | unconfirmed | C-1 | card-1 | resolved Jun 25 — C-1 now uses R4 file |
| vinyl-caps.jpg | May 18 | unconfirmed | C-3 | slide-R | resolved Jun 25 — slide-R now uses banners/ R1 |
| vinyl-zip-up-hoodies.jpg | May 18 | unconfirmed | C-4 | card-3 | duplicate remains — needs May 18 confirmation |
| custom-vinyl-hoodies.jpg | May 18 | unconfirmed | card-2 | slide-L | duplicate remains — slide-L same-category allowed; needs May 18 confirmation |

2 of 4 duplicates resolved Jun 25. 2 remain — can only be fixed once May 18 round is confirmed.

---

## Slide Rules Check

| slot | direction | image | dir | date | round | rule | status |
|---|---|---|---|---|---|---|---|
| slide-L | left | custom-vinyl-hoodies.jpg | vinyl/ | May 18 | unconfirmed | may be cross-sell; if cross-sell must be R1-R3 | same-category (allowed for slide-L); round unconfirmed; duplicate of card-2 |
| slide-R | right | top5pct-retractable-banner.jpg | banners/ | May 11 | R1 | must be cross-sell R1-R3 from another category | good — cross-sell to banners/; violation resolved Jun 25 |

---

## Immediate Suggestions

### Resolved Jun 25, 2026

- **C-1 upgraded:** Replaced unconfirmed May 18 `custom-vinyl-shirts.jpg` with R4 `top5pct-vinyl-shirts-joliet.jpg`. C-1/card-1 duplicate resolved.
- **slide-R fixed:** Replaced same-category `vinyl-caps.jpg` (violation) with banners/ R1 cross-sell `top5pct-retractable-banner.jpg`. C-3/slide-R duplicate resolved.

### Remaining actions (pending May 18 confirmation)

- **Confirm May 18 round:** Same question as digital-vinyl/. If confirmed, 9 remaining May 18 slots become valid (13 of 13 total).
- **Resolve C-4/card-3 duplicate:** Replace card-3 `vinyl-zip-up-hoodies.jpg` with unused `custom-hoodies.jpg` (May 18, 294K) once round confirmed.
- **Resolve card-2/slide-L duplicate:** Replace slide-L `custom-vinyl-hoodies.jpg` with unused `vinyl-t-shirt-maker.jpg` (May 18, 386K) once round confirmed.
- **Move misplaced yard-sign files:** `top5pct-article-yard-signs-buy.jpg` and `top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg` are not referenced in the blade and belong in the yard-signs dir.

---

## File Usage Count

| file | dir | size | date | round | used in |
|---|---|---|---|---|---|
| top5pct-vinyl-shirts.jpg | vinyl/ | 388K | Jun 8 | R3 | hero only |
| top5pct-vinyl-t-shirt-maker.jpg | vinyl/ | 386K | Jun 8 | R3 | card-detailed image1 only |
| custom-vinyl-shirts.jpg | vinyl/ | 403K | May 18 | unconfirmed | card-1 only (C-1 duplicate resolved Jun 25) |
| vinyl-hoodie.jpg | vinyl/ | 570K | May 18 | unconfirmed | C-2 only |
| vinyl-caps.jpg | vinyl/ | 566K | May 18 | unconfirmed | C-3 only (slide-R duplicate resolved Jun 25) |
| vinyl-zip-up-hoodies.jpg | vinyl/ | 423K | May 18 | unconfirmed | C-4 and card-3 (duplicate) |
| custom-vinyl-hoodies.jpg | vinyl/ | 304K | May 18 | unconfirmed | card-2 and slide-L (duplicate) |
| custom-caps-vinyl.jpg | vinyl/ | 281K | May 18 | unconfirmed | card-2image image1 only |
| neon-vinyl-shirts.jpg | vinyl/ | 295K | May 18 | unconfirmed | card-2image image2 only |
| top5pct-vinyl-shirts-joliet.jpg | vinyl/ | — | Jun 20 | R4 | C-1 only |
| top5pct-retractable-banner.jpg | banners/ | 234K | May 11 | R1 | slide-R only |
| custom-hoodies.jpg | vinyl/ | 294K | May 18 | unconfirmed | unused — available if May 18 confirmed |
| vinyl-shirts.jpg | vinyl/ | 388K | May 18 | unconfirmed | unused — available if May 18 confirmed |
| vinyl-t-shirt-maker.jpg | vinyl/ | 386K | May 18 | unconfirmed | unused — available if May 18 confirmed |
| top5pct-article-yard-signs-buy.jpg | vinyl/ | 47K | May 18 | — | unused — misplaced yard-sign file |
| top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg | vinyl/ | 96K | May 18 | — | unused — misplaced yard-sign file |

---

## Notes

- 4 of 13 slots confirmed R1-R4 as of Jun 25, 2026 (hero R3, C-1 R4, card-detailed R3, slide-R R1).
- 2 changes made Jun 25: C-1 upgraded to R4; slide-R rule violation resolved with banners/ R1 cross-sell.
- 2 of 4 duplicates resolved Jun 25 (C-1/card-1, C-3/slide-R). 2 remain (C-4/card-3, card-2/slide-L).
- 9 slots remain May 18 unconfirmed — same classification question as digital-vinyl/. Confirmation applies to both dirs.
- 0 rule violations.
- 2 misplaced yard-sign files in dir — not referenced in blade; cleanup deferred.
- Remaining actions require May 18 confirmation: duplicate resolution (card-3, slide-L) and full round validation of 9 slots.
