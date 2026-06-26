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

**May 18 round classification:** May 18 confirmed as R2 by user Jun 25, 2026. Applies to both vinyl/ and digital-vinyl/. All May 18 files in this dir are R2.

---

## Dir Inventory

| file | size | date | round | placed in blade |
|---|---|---|---|---|
| top5pct-vinyl-shirts.jpg | 388K | Jun 8 | R3 | hero |
| top5pct-vinyl-t-shirt-maker.jpg | 386K | Jun 8 | R3 | card-detailed image1 |
| custom-vinyl-shirts.jpg | 403K | May 18 | R2 | card-1 only (C-1 duplicate resolved Jun 25) |
| vinyl-hoodie.jpg | 570K | May 18 | R2 | C-2 only |
| vinyl-caps.jpg | 566K | May 18 | R2 | C-3 only (slide-R duplicate resolved Jun 25) |
| vinyl-zip-up-hoodies.jpg | 423K | May 18 | R2 | C-4 and card-3 (duplicate — pending fix) |
| custom-vinyl-hoodies.jpg | 304K | May 18 | R2 | card-2 and slide-L (duplicate — pending fix) |
| custom-caps-vinyl.jpg | 281K | May 18 | R2 | card-2image image1 |
| neon-vinyl-shirts.jpg | 295K | May 18 | R2 | card-2image image2 |
| custom-hoodies.jpg | 294K | May 18 | R2 | no — unused; available for card-3 duplicate fix |
| vinyl-shirts.jpg | 388K | May 18 | R2 | no — unused |
| vinyl-t-shirt-maker.jpg | 386K | May 18 | R2 | no — unused; available for slide-L duplicate fix |
| top5pct-article-yard-signs-buy.jpg | 47K | May 18 | — | no — misplaced: yard-sign content |
| top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg | 96K | May 18 | — | no — misplaced: yard-sign content |

Dir summary: 2 R3 (Jun 8), 1 R4 (Jun 20), 10 R2 (May 18, confirmed Jun 25), 0 R1, 0 Initial. 14 files total (excl. 2 misplaced yard-sign files).

Unused R2 files (not placed): custom-hoodies.jpg, vinyl-shirts.jpg, vinyl-t-shirt-maker.jpg. Available for duplicate resolution.

Misplaced files (wrong dir, not referenced in blade): top5pct-article-yard-signs-buy.jpg and top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg. Should be moved to yard-signs dir. Not referenced in this blade.

---

## Blade Image Slots

Slots in blade order. Banner is first, carousel next, then body, then slides.

| slot | component | image | dir | date | round | size | status |
|---|---|---|---|---|---|---|---|
| hero | category-hero | top5pct-vinyl-shirts.jpg | vinyl/ | Jun 8 | R3 | 388K | good |
| C-1 | carousel-rotating-images | top5pct-vinyl-shirts-joliet.jpg | vinyl/ | Jun 20 | R4 | — | good — R4 same-dir; was unconfirmed May 18; C-1/card-1 duplicate resolved |
| C-2 | carousel-rotating-images | vinyl-hoodie.jpg | vinyl/ | May 18 | R2 | 570K | good |
| C-3 | carousel-rotating-images | vinyl-caps.jpg | vinyl/ | May 18 | R2 | 566K | good; slide-R duplicate resolved Jun 25 |
| C-4 | carousel-rotating-images | vinyl-zip-up-hoodies.jpg | vinyl/ | May 18 | R2 | 423K | good |
| card-1 | card-image-with-text | custom-vinyl-shirts.jpg | vinyl/ | May 18 | R2 | 403K | good; C-1 duplicate resolved Jun 25 |
| card-2 | card-image-with-text (imagePosition right) | custom-vinyl-hoodies.jpg | vinyl/ | May 18 | R2 | 304K | good |
| card-2image image1 | card-2image-with-text | custom-caps-vinyl.jpg | vinyl/ | May 18 | R2 | 281K | good |
| card-2image image2 | card-2image-with-text | neon-vinyl-shirts.jpg | vinyl/ | May 18 | R2 | 295K | good |
| card-3 | card-image-with-text | custom-hoodies.jpg | vinyl/ | May 18 | R2 | 294K | good — duplicate resolved Jun 26 |
| card-detailed image1 | card-detailed-info | top5pct-vinyl-t-shirt-maker.jpg | vinyl/ | Jun 8 | R3 | 386K | good |
| slide-L | card-banner-slide-in (direction left) | vinyl-t-shirt-maker.jpg | vinyl/ | May 18 | R2 | 386K | good — duplicate resolved Jun 26 |
| slide-R | card-banner-slide-in (direction right) | top5pct-retractable-banner.jpg | banners/ | May 11 | R1 | 234K | good — cross-sell to banners/; violation resolved Jun 25; C-3/slide-R duplicate resolved |

---

## R1-R3 Placement Summary

**Total image slots with an image path referenced:** 13
**Confirmed R1-R4:** 13 of 13 — all slots R1-R4. May 18 confirmed as R2 Jun 25.
**Rule violations:** 0
**Duplicates remaining:** 2 (C-4/card-3, card-2/slide-L) — fixable with unused R2 files

---

## Carousel

**Current slots:** 4
**Target:** 4. May exceed 4 only if all non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | image | date | round | status |
|---|---|---|---|---|
| hero | top5pct-vinyl-shirts.jpg | Jun 8 | R3 | good |
| card-1 | custom-vinyl-shirts.jpg | May 18 | R2 | good |
| card-2 | custom-vinyl-hoodies.jpg | May 18 | R2 | R2; duplicate of slide-L — pending fix |
| card-2image image1 | custom-caps-vinyl.jpg | May 18 | R2 | good |
| card-2image image2 | neon-vinyl-shirts.jpg | May 18 | R2 | good |
| card-3 | vinyl-zip-up-hoodies.jpg | May 18 | R2 | R2; duplicate of C-4 — pending fix |
| card-detailed image1 | top5pct-vinyl-t-shirt-maker.jpg | Jun 8 | R3 | good |
| slide-L | custom-vinyl-hoodies.jpg | May 18 | R2 | R2; same-category allowed; duplicate of card-2 — pending fix |
| slide-R | top5pct-retractable-banner.jpg | May 11 | R1 | good; cross-sell |

All non-carousel slots are now R1-R4. Over-target condition IS met as of Jun 25. Carousel stays at 4 — no additional unused same-dir files are suitable for expansion (vinyl-shirts.jpg and vinyl-t-shirt-maker.jpg best used for duplicate resolution).

---

## Rule Violations

### slide-R — resolved Jun 25, 2026

slide-R previously used `vinyl-caps.jpg` (vinyl/, May 18 R2, 566K). Two violations: same-category and (at the time) round unclassified.

**Fix applied Jun 25, 2026:** slide-R replaced with `top5pct-retractable-banner.jpg` (banners/, R1, May 11, 234K). Title updated to "Add a Custom Vinyl Banner to Match Your Apparel Order." href updated to `/signs/business-signs/banners`. Both violations resolved. C-3/slide-R duplicate also resolved.

---

## Duplicate Image Usage

Two files remain used in multiple blade slots (2 resolved Jun 25):

| file | date | round | slot 1 | slot 2 | status |
|---|---|---|---|---|---|
| custom-vinyl-shirts.jpg | May 18 | R2 | C-1 | card-1 | resolved Jun 25 — C-1 now uses R4 file |
| vinyl-caps.jpg | May 18 | R2 | C-3 | slide-R | resolved Jun 25 — slide-R now uses banners/ R1 |
| vinyl-zip-up-hoodies.jpg | May 18 | R2 | C-4 | card-3 | resolved Jun 26 — card-3 now uses custom-hoodies.jpg |
| custom-vinyl-hoodies.jpg | May 18 | R2 | card-2 | slide-L | resolved Jun 26 — slide-L now uses vinyl-t-shirt-maker.jpg |

All 4 duplicates resolved. 0 duplicates remain.

---

## Slide Rules Check

| slot | direction | image | dir | date | round | rule | status |
|---|---|---|---|---|---|---|---|
| slide-L | left | vinyl-t-shirt-maker.jpg | vinyl/ | May 18 | R2 | same-category allowed (direction left) | good — duplicate resolved Jun 26 |
| slide-R | right | top5pct-retractable-banner.jpg | banners/ | May 11 | R1 | must be cross-sell R1-R3 from another category | good — cross-sell to banners/; violation resolved Jun 25 |

---

## Immediate Suggestions

### Resolved Jun 25, 2026

- **C-1 upgraded:** Replaced unconfirmed May 18 `custom-vinyl-shirts.jpg` with R4 `top5pct-vinyl-shirts-joliet.jpg`. C-1/card-1 duplicate resolved.
- **slide-R fixed:** Replaced same-category `vinyl-caps.jpg` (violation) with banners/ R1 cross-sell `top5pct-retractable-banner.jpg`. C-3/slide-R duplicate resolved.

### Pending blade edits (May 18 = R2 confirmed Jun 25)

- **C-4/card-3 duplicate resolved Jun 26:** card-3 now uses `custom-hoodies.jpg` (R2, 294K).
- **card-2/slide-L duplicate resolved Jun 26:** slide-L now uses `vinyl-t-shirt-maker.jpg` (R2, 386K).
- **Move misplaced yard-sign files:** `top5pct-article-yard-signs-buy.jpg` and `top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg` are not referenced in the blade and belong in the yard-signs dir.

---

## File Usage Count

| file | dir | size | date | round | used in |
|---|---|---|---|---|---|
| top5pct-vinyl-shirts.jpg | vinyl/ | 388K | Jun 8 | R3 | hero only |
| top5pct-vinyl-t-shirt-maker.jpg | vinyl/ | 386K | Jun 8 | R3 | card-detailed image1 only |
| custom-vinyl-shirts.jpg | vinyl/ | 403K | May 18 | R2 | card-1 only (C-1 duplicate resolved Jun 25) |
| vinyl-hoodie.jpg | vinyl/ | 570K | May 18 | R2 | C-2 only |
| vinyl-caps.jpg | vinyl/ | 566K | May 18 | R2 | C-3 only (slide-R duplicate resolved Jun 25) |
| vinyl-zip-up-hoodies.jpg | vinyl/ | 423K | May 18 | R2 | C-4 only (card-3 duplicate resolved Jun 26) |
| custom-vinyl-hoodies.jpg | vinyl/ | 304K | May 18 | R2 | card-2 only (slide-L duplicate resolved Jun 26) |
| custom-caps-vinyl.jpg | vinyl/ | 281K | May 18 | R2 | card-2image image1 only |
| neon-vinyl-shirts.jpg | vinyl/ | 295K | May 18 | R2 | card-2image image2 only |
| top5pct-vinyl-shirts-joliet.jpg | vinyl/ | — | Jun 20 | R4 | C-1 only |
| top5pct-retractable-banner.jpg | banners/ | 234K | May 11 | R1 | slide-R only |
| custom-hoodies.jpg | vinyl/ | 294K | May 18 | R2 | card-3 only (placed Jun 26) |
| vinyl-shirts.jpg | vinyl/ | 388K | May 18 | R2 | unused |
| vinyl-t-shirt-maker.jpg | vinyl/ | 386K | May 18 | R2 | slide-L only (placed Jun 26) |
| top5pct-article-yard-signs-buy.jpg | vinyl/ | 47K | May 18 | — | unused — misplaced yard-sign file |
| top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg | vinyl/ | 96K | May 18 | — | unused — misplaced yard-sign file |

---

## Notes

- 13 of 13 slots R1-R4. 0 rule violations. 0 duplicates.
- Jun 25: C-1 upgraded to R4; slide-R violation resolved (banners/ R1 cross-sell); May 18 confirmed as R2.
- Jun 26: card-3 → custom-hoodies.jpg (R2); slide-L → vinyl-t-shirt-maker.jpg (R2). All 4 duplicates resolved.
- Over-target condition met. Carousel stays at 4.
- 2 misplaced yard-sign files in dir — not referenced in blade; cleanup deferred.
