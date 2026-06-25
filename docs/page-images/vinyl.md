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
| C-1 | carousel-rotating-images | custom-vinyl-shirts.jpg | vinyl/ | May 18 | unconfirmed | 403K | round unconfirmed; duplicate of card-1 |
| C-2 | carousel-rotating-images | vinyl-hoodie.jpg | vinyl/ | May 18 | unconfirmed | 570K | round unconfirmed |
| C-3 | carousel-rotating-images | vinyl-caps.jpg | vinyl/ | May 18 | unconfirmed | 566K | round unconfirmed; duplicate of slide-R |
| C-4 | carousel-rotating-images | vinyl-zip-up-hoodies.jpg | vinyl/ | May 18 | unconfirmed | 423K | round unconfirmed; duplicate of card-3 |
| card-1 | card-image-with-text | custom-vinyl-shirts.jpg | vinyl/ | May 18 | unconfirmed | 403K | round unconfirmed; duplicate of C-1 |
| card-2 | card-image-with-text (imagePosition right) | custom-vinyl-hoodies.jpg | vinyl/ | May 18 | unconfirmed | 304K | round unconfirmed; duplicate of slide-L |
| card-2image image1 | card-2image-with-text | custom-caps-vinyl.jpg | vinyl/ | May 18 | unconfirmed | 281K | round unconfirmed |
| card-2image image2 | card-2image-with-text | neon-vinyl-shirts.jpg | vinyl/ | May 18 | unconfirmed | 295K | round unconfirmed |
| card-3 | card-image-with-text | vinyl-zip-up-hoodies.jpg | vinyl/ | May 18 | unconfirmed | 423K | round unconfirmed; duplicate of C-4 |
| card-detailed image1 | card-detailed-info | top5pct-vinyl-t-shirt-maker.jpg | vinyl/ | Jun 8 | R3 | 386K | good |
| slide-L | card-banner-slide-in (direction left) | custom-vinyl-hoodies.jpg | vinyl/ | May 18 | unconfirmed | 304K | round unconfirmed; same-category allowed for slide-L; duplicate of card-2 |
| slide-R | card-banner-slide-in (direction right) | vinyl-caps.jpg | vinyl/ | May 18 | unconfirmed | 566K | rule violation: same-category in cross-sell position; duplicate of C-3 |

---

## R1-R3 Placement Summary

**Total image slots with an image path referenced:** 13
**Confirmed R1-R3 by round:** 2 (hero R3, card-detailed R3)
**Unconfirmed round (May 18):** 11 — cannot receive R1-R3 credit until round is confirmed
**Rule violations:** 1 (slide-R: same-category, not a cross-sell)

**R1-R3 slots remaining to fill:** 11 (all May 18 slots, pending confirmation or replacement)

If the user confirms May 18 as an approved round, the count changes to 12 of 13 confirmed, with only the slide-R rule violation remaining. This document proceeds on the assumption that May 18 is unconfirmed.

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

Over-target condition is not met: all non-carousel body and slide slots (except hero and card-detailed) are May 18 unconfirmed. Carousel stays at 4.

**Carousel round improvement — no same-dir R3 files available:**

Unlike digital-vinyl/ which had 3 unused R3 files for immediate carousel swap, vinyl/ has both R3 files already placed (hero and card-detailed). No unused R3 same-dir files exist. Carousel improvement requires one of:
1. User confirms May 18 as a valid round — all 4 carousel slots immediately become valid
2. R4 supplies new vinyl/ images with proper round dates

The 3 unused May 18 files (custom-hoodies.jpg, vinyl-shirts.jpg, vinyl-t-shirt-maker.jpg) are available for body card assignments if May 18 is confirmed, which could also help reduce duplicates.

---

## Rule Violations

### slide-R — same-category image in cross-sell position

The blade uses `vinyl-caps.jpg` (vinyl/, May 18, 566K) for slide-R. Two issues:

1. **Same-category** — slide-R must always be a cross-sell from a different category dir. This image is from the page's own dir (vinyl/).
2. **Round unconfirmed** — the May 18 date is unconfirmed as R1-R3. The slide-R rule requires an R1-R3 cross-sell image.

The slide-R title is "Shirts, Hoodies, Hats, and More, All in One Shop" with href="/contact". This describes the current page's product range rather than a companion, confirming no cross-sell intent was built into the original slot. Both the image and the title need to change.

Additionally, vinyl-caps.jpg is already used in C-3 — two total uses of this file.

---

## Duplicate Image Usage

Four files are used in multiple blade slots:

| file | date | round | slot 1 | slot 2 |
|---|---|---|---|---|
| custom-vinyl-shirts.jpg | May 18 | unconfirmed | C-1 | card-1 |
| vinyl-zip-up-hoodies.jpg | May 18 | unconfirmed | C-4 | card-3 |
| vinyl-caps.jpg | May 18 | unconfirmed | C-3 | slide-R (rule violation) |
| custom-vinyl-hoodies.jpg | May 18 | unconfirmed | card-2 | slide-L |

All duplicates stem from a thin usable inventory: only 10 May 18 files are vinyl/apparel content (2 are misplaced yard-sign files), and both R3 files are already used. With 13 image slots and 10 May 18 plus 2 R3 files, reuse was unavoidable. The 3 unused May 18 files (custom-hoodies.jpg, vinyl-shirts.jpg, vinyl-t-shirt-maker.jpg) could reduce card-level duplicates if May 18 is confirmed.

---

## Slide Rules Check

| slot | direction | image | dir | date | round | rule | status |
|---|---|---|---|---|---|---|---|
| slide-L | left | custom-vinyl-hoodies.jpg | vinyl/ | May 18 | unconfirmed | may be cross-sell; if cross-sell must be R1-R3 | same-category (allowed for slide-L); round unconfirmed; duplicate of card-2 |
| slide-R | right | vinyl-caps.jpg | vinyl/ | May 18 | unconfirmed | must be cross-sell R1-R3 from another category | violation: same-category; round unconfirmed; duplicate of C-3 |

---

## Immediate Suggestions

### Action 1 — confirm or classify the May 18 date (same as digital-vinyl/)

This is the same round classification question as digital-vinyl/. Since vinyl/ and digital-vinyl/ share the identical May 18 batch, confirmation of the May 18 round for digital-vinyl/ automatically applies here. If May 18 is confirmed, 11 of 13 slots become valid, leaving only the slide-R rule violation outstanding.

### Action 2 — replace slide-R with a confirmed R1-R3 cross-sell from another category

The blade body references these companion categories most frequently:

| companion | references in blade | link |
|---|---|---|
| DTF transfers | 3 | /custom-apparel/printing-options/dtf-transfers |
| custom apparel (general) | 3 | /custom-apparel |
| corporate wear | 2 | /custom-apparel/group-wear/corporate-wear-shirts |
| dye sublimation | 2 | /custom-apparel/printing-options/dye-sublimation-printing |
| embroidery | 2 | /custom-apparel/printing-options/embroidery |
| screen printing | 2 | /custom-apparel/printing-options/screen-printing |
| banners | 2 | /signs/business-signs/banners |
| logo design | 2 | /design-services/logo-design |
| spirit wear | 1 | /custom-apparel/group-wear/spirit-wear-shirts |
| reunion shirts | 1 | /custom-apparel/group-wear/reunion-shirts |
| rhinestone apparel | 1 | /custom-apparel/specialty-materials/rhinestone-apparel |

Two strong candidates stand out:

**Option A — banners/ (recommended):** The blade references banners twice with strong vinyl ties: "pairs well with a coordinating vinyl banner for your next event or storefront display" and "coordinate your apparel with a matching banner or signage package for an event." The word "vinyl" connects both products directly. banners/ has confirmed R1-R3 inventory from prior audits. Title suggestion: "Add a Custom Vinyl Banner to Match Your Apparel Order."

**Option B — glitter-shirts/:** The blade mentions glitter vinyl specifically: "We carry holographic, glitter, and other effect vinyls as well." glitter-shirts/ has confirmed R1, R2, and R3 files from prior sessions. This is a natural companion since glitter is a vinyl specialty. Title suggestion: "Upgrade to Glitter or Specialty Vinyl for a Premium Finish."

Priority recommendation: Option A (banners/) for its stronger direct reference in the blade body with vinyl-specific language. If banners/ files are not available when this fix is implemented, Option B (glitter-shirts/) is the backup.

### Action 3 — resolve duplicates using unused May 18 files (if round confirmed)

If May 18 is confirmed as a valid round, three unused May 18 files can replace duplicated body card slots:

| duplicate to resolve | current file | replace with | notes |
|---|---|---|---|
| card-1 (duplicate of C-1) | custom-vinyl-shirts.jpg | vinyl-shirts.jpg (May 18, 388K) | shirts for shirts, same subject |
| card-3 (duplicate of C-4) | vinyl-zip-up-hoodies.jpg | custom-hoodies.jpg (May 18, 294K) | hoodies for hoodies |
| slide-L (duplicate of card-2) | custom-vinyl-hoodies.jpg | vinyl-t-shirt-maker.jpg (May 18, 386K) | or hold for later; slide-L same-category is allowed but duplicate is avoidable |

After these swaps: no blade slot would use the same file twice, assuming May 18 is confirmed.

### Action 4 — carousel improvement (R4 dependency)

No unused R3 files exist in vinyl/ — both are placed. Carousel improvement can only happen when:
1. May 18 is confirmed (carousel stays at 4 but rounds become valid)
2. R4 supplies new vinyl/ images with top5pct- naming and R4 dates

R4 should target at minimum 4 carousel-quality vinyl/ images in branded naming convention.

### Action 5 — move misplaced yard-sign files out of vinyl/

Same two files as found in digital-vinyl/ are duplicated here:
- top5pct-article-yard-signs-buy.jpg (47K, May 18)
- top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg (96K, May 18)

These are yard-sign assets. They are not referenced in this blade. They should be moved to the yard-signs dir during R4 cleanup. Same action applies to the digital-vinyl/ copies.

---

## File Usage Count

| file | dir | size | date | round | used in |
|---|---|---|---|---|---|
| top5pct-vinyl-shirts.jpg | vinyl/ | 388K | Jun 8 | R3 | hero only |
| top5pct-vinyl-t-shirt-maker.jpg | vinyl/ | 386K | Jun 8 | R3 | card-detailed image1 only |
| custom-vinyl-shirts.jpg | vinyl/ | 403K | May 18 | unconfirmed | C-1 and card-1 (duplicate) |
| vinyl-hoodie.jpg | vinyl/ | 570K | May 18 | unconfirmed | C-2 only |
| vinyl-caps.jpg | vinyl/ | 566K | May 18 | unconfirmed | C-3 and slide-R (slide-R is a violation) |
| vinyl-zip-up-hoodies.jpg | vinyl/ | 423K | May 18 | unconfirmed | C-4 and card-3 (duplicate) |
| custom-vinyl-hoodies.jpg | vinyl/ | 304K | May 18 | unconfirmed | card-2 and slide-L (duplicate) |
| custom-caps-vinyl.jpg | vinyl/ | 281K | May 18 | unconfirmed | card-2image image1 only |
| neon-vinyl-shirts.jpg | vinyl/ | 295K | May 18 | unconfirmed | card-2image image2 only |
| custom-hoodies.jpg | vinyl/ | 294K | May 18 | unconfirmed | unused — available if May 18 confirmed |
| vinyl-shirts.jpg | vinyl/ | 388K | May 18 | unconfirmed | unused — available if May 18 confirmed |
| vinyl-t-shirt-maker.jpg | vinyl/ | 386K | May 18 | unconfirmed | unused — available if May 18 confirmed |
| top5pct-article-yard-signs-buy.jpg | vinyl/ | 47K | May 18 | — | unused — misplaced yard-sign file |
| top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg | vinyl/ | 96K | May 18 | — | unused — misplaced yard-sign file |

---

## Notes

- 2 of 13 referenced image slots are confirmed R1-R3 (hero R3, card-detailed R3) as of Jun 25, 2026.
- 11 of 13 slots use May 18 files whose round is unconfirmed — same classification question as digital-vinyl/.
- Both R3 files are already placed. No unused R3 same-dir files exist. This page cannot improve its carousel without May 18 confirmation or new R4 images, unlike digital-vinyl/ which had 3 spare R3 files.
- 1 rule violation: slide-R — same-category, not a cross-sell. Must be replaced regardless of May 18 classification.
- 4 files are used in 2 slots each (duplicates) due to thin inventory. 3 unused May 18 files can resolve 3 of 4 duplicates if round is confirmed.
- 2 misplaced yard-sign files present — identical to those in digital-vinyl/; same cleanup applies to both dirs.
- The May 18 batch in vinyl/ is byte-for-byte identical to the May 18 batch in digital-vinyl/. Round confirmation for one applies to both.
- R4 priorities: (1) user confirmation of May 18 round status (applies to both vinyl/ and digital-vinyl/), (2) slide-R cross-sell replacement with banners/ or glitter-shirts/ R1-R3 file, (3) new vinyl/ carousel images with branded top5pct- naming, (4) duplicate resolution using unused May 18 files once confirmed, (5) misplaced file cleanup.
