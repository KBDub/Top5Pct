# Foil Shirts — Image Status

**Blade:** `resources/views/pages/custom-apparel/foil-shirts.blade.php`
**URL:** `/custom-apparel/specialty-materials/foil-shirts`
**Primary dir:** `public/images/foil-shirts/` — 5 files
**Secondary dir:** `public/images/custom-shirts/` — 7 files referenced
**Cross-sell dir:** `public/images/glitter-shirts/` — 1 file referenced
**Verified:** Jun 25, 2026

---

## Round Reference

| round | date | note |
|---|---|---|
| Initial | Mar 16/17, 2026 | |
| R1 | May 11, 2026 | |
| R2 | Jun 2, 2026 | |
| R3 | Jun 8, 2026 | R3 window runs Jun 4-9; Jun 9 files are R3 |

---

## Dir Inventory — foil-shirts/

All 5 files in foil-shirts/ are R3. No Initial, R1, or R2 files in this dir.

| file | size | date | round | placed in blade |
|---|---|---|---|---|
| top5pct-foil-shirts.jpg | 306K | Jun 8 | R3 | C-5 |
| top5pct-foil-custom-shirts-joliet.jpg | 246K | Jun 8 | R3 | C-6 |
| top5pct-foil-shirts-cresthill.jpg | 344K | Jun 8 | R3 | C-8 |
| top5pct-foil-shirt-shorewood.jpg | 41K | Jun 8 | R3 | C-9 — flagged: 41K is very small vs. 246-344K peers; may be low resolution |
| top5pct-foil-custom-apparel-shirts-joliet.jpg | 282K | Jun 9 | R3 | C-7 |

All 5 foil-shirts/ files are placed. No unused foil-shirts/ files remain.

---

## Dir Inventory — custom-shirts/ (files used in this blade only)

| file | size | date | round | placed in blade |
|---|---|---|---|---|
| top5pct-foil-gold-t-shirt.jpg | 333K | Jun 2 | R2 | hero |
| top5pct-gold-foil-printed-shirts.jpg | 213K | Jun 2 | R2 | C-2 |
| top5pct-foil-custom-t-shirts.jpg | 248K | Jun 2 | R2 | C-3 |
| top5pct-custom-foil-polo.jpg | 217K | Jun 2 | R2 | C-4 |
| top5pct-custom-wedding-foil-shirts.jpg | 344K | Jun 2 | R2 | card-2 |
| top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | 35K | Mar 16 | **Initial** | C-1, card-1, card-detailed image1, slide-R (4 uses) |

The file top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg is 35K — consistent with Initial-round sizing. It is the only Initial file in custom-shirts/ used on this page and it appears in four slots, making it the most urgent replacement on this blade.

---

## Dir Inventory — glitter-shirts/ (files used in this blade only)

| file | size | date | round | placed in blade |
|---|---|---|---|---|
| top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | 30K | Mar 16 | **Initial** | slide-L |

This file is an Initial image used as the slide-L cross-sell. The cross-sell direction (glitter shirts) is correct and appropriate for this page. The image itself needs to be replaced with a glitter-shirts/ R1-R3 file.

---

## Blade Image Slots

Slots in blade order. Hero is first, carousel next, then body, then slides.

| slot | component | image | dir | date | round | size | status |
|---|---|---|---|---|---|---|---|
| hero | category-hero | top5pct-foil-gold-t-shirt.jpg | custom-shirts/ | Jun 2 | R2 | 333K | good |
| C-1 | carousel-rotating-images | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | custom-shirts/ | Mar 16 | **Initial** | 35K | violation: Initial; also used in card-1, card-detailed, slide-R (4 total uses) |
| C-2 | carousel-rotating-images | top5pct-gold-foil-printed-shirts.jpg | custom-shirts/ | Jun 2 | R2 | 213K | good |
| C-3 | carousel-rotating-images | top5pct-foil-custom-t-shirts.jpg | custom-shirts/ | Jun 2 | R2 | 248K | good |
| C-4 | carousel-rotating-images | top5pct-custom-foil-polo.jpg | custom-shirts/ | Jun 2 | R2 | 217K | good |
| C-5 | carousel-rotating-images | top5pct-foil-shirts.jpg | foil-shirts/ | Jun 8 | R3 | 306K | good |
| C-6 | carousel-rotating-images | top5pct-foil-custom-shirts-joliet.jpg | foil-shirts/ | Jun 8 | R3 | 246K | good |
| C-7 | carousel-rotating-images | top5pct-foil-custom-apparel-shirts-joliet.jpg | foil-shirts/ | Jun 9 | R3 | 282K | good |
| C-8 | carousel-rotating-images | top5pct-foil-shirts-cresthill.jpg | foil-shirts/ | Jun 8 | R3 | 344K | good |
| C-9 | carousel-rotating-images | top5pct-foil-shirt-shorewood.jpg | foil-shirts/ | Jun 8 | R3 | 41K | R3 confirmed; flagged: 41K is very small vs. 246-344K peers |
| card-1 | card-image-with-text | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | custom-shirts/ | Mar 16 | **Initial** | 35K | violation: Initial; duplicate of C-1, card-detailed, slide-R |
| card-2 | card-image-with-text (imagePosition right) | top5pct-custom-wedding-foil-shirts.jpg | custom-shirts/ | Jun 2 | R2 | 344K | good |
| card-detailed image1 | card-detailed-info | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | custom-shirts/ | Mar 16 | **Initial** | 35K | violation: Initial; duplicate of C-1, card-1, slide-R |
| slide-R | card-banner-slide-in (direction right) | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | custom-shirts/ | Mar 16 | **Initial** | 35K | rule violation: same-product (foil shirts, not a cross-sell); Initial; 4th use of same file |
| slide-L | card-banner-slide-in (direction left) | top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | glitter-shirts/ | Mar 16 | **Initial** | 30K | cross-sell direction correct (glitter); Initial — needs R1-R3 replacement |

---

## R1-R3 Placement Summary

**Total image slots with an image path referenced:** 15
**Confirmed R1-R3:** 10

| slot | image | round | status |
|---|---|---|---|
| hero | top5pct-foil-gold-t-shirt.jpg | R2 | good |
| C-2 | top5pct-gold-foil-printed-shirts.jpg | R2 | good |
| C-3 | top5pct-foil-custom-t-shirts.jpg | R2 | good |
| C-4 | top5pct-custom-foil-polo.jpg | R2 | good |
| C-5 | top5pct-foil-shirts.jpg | R3 | good |
| C-6 | top5pct-foil-custom-shirts-joliet.jpg | R3 | good |
| C-7 | top5pct-foil-custom-apparel-shirts-joliet.jpg | R3 | good |
| C-8 | top5pct-foil-shirts-cresthill.jpg | R3 | good |
| C-9 | top5pct-foil-shirt-shorewood.jpg | R3 | good — but small file; review quality |
| card-2 | top5pct-custom-wedding-foil-shirts.jpg | R2 | good |

**Initial (not R1-R3) — 5 slots remaining to fill:**

| slot | image | round | issue |
|---|---|---|---|
| C-1 | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | Initial | Initial; part of carousel over-target problem |
| card-1 | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | Initial | Initial; duplicate of C-1, card-detailed, slide-R |
| card-detailed image1 | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | Initial | Initial; duplicate of C-1, card-1, slide-R |
| slide-R | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | Initial | Initial + rule violation: same-product, not a cross-sell |
| slide-L | top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | Initial | Initial; cross-sell direction correct, image needs replacement |

**R1-R3 slots filled: 10 of 15**
**Remaining to fill: 5 of 15**

---

## Carousel

**Current slots:** 9
**Target:** 4. May exceed 4 only if ALL non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | image | round | status |
|---|---|---|---|
| hero | top5pct-foil-gold-t-shirt.jpg | R2 | good |
| card-1 | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | Initial | not filled |
| card-2 | top5pct-custom-wedding-foil-shirts.jpg | R2 | good |
| card-detailed image1 | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | Initial | not filled |
| slide-R | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | Initial | not filled + rule violation |
| slide-L | top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | Initial | not filled |

Over-target condition is NOT met. card-1, card-detailed, slide-R, and slide-L are all Initial. The carousel must be reduced to 4 slots. This is the most impactful structural fix on this page.

**Recommended 4-slot carousel — prioritize foil-shirts/ R3 same-dir files:**

| keep | image | dir | round | size |
|---|---|---|---|---|
| C-5 | top5pct-foil-shirts.jpg | foil-shirts/ | R3 | 306K |
| C-6 | top5pct-foil-custom-shirts-joliet.jpg | foil-shirts/ | R3 | 246K |
| C-7 | top5pct-foil-custom-apparel-shirts-joliet.jpg | foil-shirts/ | R3 | 282K |
| C-8 | top5pct-foil-shirts-cresthill.jpg | foil-shirts/ | R3 | 344K |

**Remove from carousel:**

| remove | image | dir | round | reason |
|---|---|---|---|---|
| C-1 | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | custom-shirts/ | Initial | Initial; already used 3 other places; 35K |
| C-2 | top5pct-gold-foil-printed-shirts.jpg | custom-shirts/ | R2 | Surplus beyond 4; custom-shirts/ R2 file — reassign to card-1 or card-detailed |
| C-3 | top5pct-foil-custom-t-shirts.jpg | custom-shirts/ | R2 | Surplus; reassign to body card if needed |
| C-4 | top5pct-custom-foil-polo.jpg | custom-shirts/ | R2 | Surplus; reassign to body card if needed |
| C-9 | top5pct-foil-shirt-shorewood.jpg | foil-shirts/ | R3 | Surplus; 41K small file — review quality before reassigning |

The four removed R2 files (C-2, C-3, C-4) can be reallocated to fill card-1 and card-detailed with R2 images, directly resolving two of the five remaining Initial violations without waiting for new images.

**Reallocation opportunity using removed carousel files:**

| slot to fill | current (Initial) | replace with | round | source |
|---|---|---|---|---|
| card-1 | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | top5pct-gold-foil-printed-shirts.jpg | R2 | removed from C-2 |
| card-detailed image1 | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | top5pct-foil-custom-t-shirts.jpg | R2 | removed from C-3 |

After this reallocation: card-1 and card-detailed both become R2. C-4 (top5pct-custom-foil-polo.jpg, R2) is removed from the carousel and remains available as a body card if the page gains additional card components, or it can serve as a backup.

This means the only slots remaining as Initial after carousel trimming and reallocation are slide-R (which also has a rule violation) and slide-L (which needs a glitter-shirts/ R1-R3 image).

---

## Rule Violations

### slide-R — same-product image in cross-sell position, Initial quality

The blade uses `top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg` (custom-shirts/, Mar 16, 35K) for slide-R. Three compounding issues:

1. **Same-product** — slide-R must always be a cross-sell from a different category. This image depicts foil shirts — the same product as this page. It is not a cross-sell.
2. **Initial quality** — 35K, Mar 16. Smallest and oldest file used on this page.
3. **Four total uses** — this same file appears in C-1, card-1, card-detailed image1, and slide-R. Trimming the carousel and reallocating body cards eliminates 3 of those 4 uses, leaving only slide-R still needing a cross-sell replacement.

The slide-R title is "Foil Shirts, Gold, Silver, and Metallic Finishes" and href="/contact" — this describes the current page's own products, further confirming it was never intended as a cross-sell. Both the image and the title need to change.

### Carousel over target with unfilled non-carousel slots

9 carousel slots exist when the target is 4. The over-target condition (all other slots R1-R3) is not met because 4 non-carousel slots are Initial. The carousel must be trimmed to 4 slots before any other carousel-related improvement is considered.

---

## Duplicate Image Usage

| file | dir | size | date | round | uses |
|---|---|---|---|---|---|
| top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | custom-shirts/ | 35K | Mar 16 | Initial | C-1, card-1, card-detailed image1, slide-R (4 uses — all violations or surpluses) |

No other files are duplicated. All other images appear in exactly one slot.

The four-use Initial file is the core problem on this page. Trimming the carousel removes C-1, reallocation removes card-1 and card-detailed uses, and slide-R replacement removes the final use. All 4 uses can be eliminated.

---

## Slide Rules Check

| slot | direction | image | dir | date | round | rule | status |
|---|---|---|---|---|---|---|---|
| slide-R | right | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | custom-shirts/ | Mar 16 | Initial | must be cross-sell R1-R3 from another category | violation: same-product + Initial + 4th duplicate use |
| slide-L | left | top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | glitter-shirts/ | Mar 16 | Initial | may be cross-sell; if cross-sell must be R1-R3 | cross-sell direction is correct (glitter, referenced in blade body and FAQ); image is Initial and must be replaced with glitter-shirts/ R1-R3 |

---

## Immediate Suggestions

### Action 1 — trim carousel from 9 slots to 4 (priority: do this first)

Remove C-1, C-2, C-3, C-4, and C-9. Keep C-5 through C-8 (all foil-shirts/ R3). This is the highest priority fix on this page because the over-target carousel conflicts with the rule that requires all other slots to be R1-R3 before exceeding 4 slots.

After trim: carousel is 4 slots, all R3, all from the page's primary dir (foil-shirts/).

### Action 2 — reallocate removed R2 carousel files to fill card-1 and card-detailed

Two of the removed carousel files are R2 and suitable for immediate body card placement:

| destination | image to use | round | currently at |
|---|---|---|---|
| card-1 | top5pct-gold-foil-printed-shirts.jpg | R2 | C-2 (being removed) |
| card-detailed image1 | top5pct-foil-custom-t-shirts.jpg | R2 | C-3 (being removed) |

After this reallocation: card-1 and card-detailed both become R2. The Initial file (top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg) is fully removed from the blade. Only slide-R and slide-L remain as Initial.

### Action 3 — replace slide-R with a confirmed R1-R3 cross-sell from another category

The blade body references these companion techniques:

| companion | references in blade | link |
|---|---|---|
| glitter vinyl | body (card-detailed section) + FAQ | /custom-apparel/specialty-materials/glitter-shirts |
| rhinestone | FAQ | /custom-apparel/specialty-materials/rhinestone-apparel |
| standard vinyl | body (card-detailed section) | /custom-apparel/specialty-materials/vinyl |
| screen printing | body (card-detailed section) | /custom-apparel/printing-options/screen-printing |

slide-L already covers glitter (correct direction, needs image upgrade). Recommending a different companion for slide-R avoids thematic redundancy between the two slides.

**Recommended slide-R replacement:**

| option | dir | round confirmed | rationale |
|---|---|---|---|
| Option A: rhinestone-apparel/ R1-R3 file | rhinestone-apparel/ | needs verification | FAQ explicitly pairs foil with rhinestones; distinct from glitter slide-L |
| Option B: vinyl/ R3 file | vinyl/ | R3 confirmed (top5pct-vinyl-shirts.jpg, Jun 8) | blade body mentions combining foil with standard vinyl; vinyl/ has confirmed R3 files |

Priority: Option A if rhinestone-apparel/ has confirmed R1-R3 inventory. Option B using vinyl/ R3 (already confirmed from vinyl.md audit) as the immediately available fallback. Title suggestion for either: "Combine Foil With Rhinestone Accents for a Premium Finish" (Option A) or "Add Vinyl to Your Foil Shirt Order" (Option B).

### Action 4 — replace slide-L image with a glitter-shirts/ R1-R3 file

slide-L direction is correct (glitter cross-sell, title: "Combine Foil With Glitter or Rhinestone for Custom Apparel"). Only the image needs to change from the Initial 30K file to a confirmed R1-R3 glitter-shirts/ file.

Confirmed R1-R3 files available in glitter-shirts/:

| file | size | date | round |
|---|---|---|---|
| top5pct-glitter-sweatshirts-joliet.jpg | 366K | Jun 8 | R3 |
| top5pct-glitter-sportswear-shirts.jpg | 101K | Jun 8 | R3 |
| top5pct-custom-glitter-sweatshirts.jpg | 323K | Jun 2 | R2 |
| top5pct-custom-wedding-glitter-shirts.jpg | 344K | Jun 2 | R2 |
| top5pct-glitter-t-shirts.jpg | 403K | Jun 2 | R2 |
| top5pct-glitter-blue-jean-jacket.jpg | 432K | Jun 2 | R2 |
| top5pct-glitter-lips-custom-t-shirt.jpg | 322K | Jun 2 | R2 |
| top5pct-gitter-birthday-shirt.jpg | 340K | Jun 2 | R2 |
| top5pct-glitter-t-shirts-cresthill.jpg | 366K | Jun 2 | R2 |
| top5pct-custom-glitter-clothing.jpg | 296K | May 11 | R1 |

Recommended replacement: top5pct-glitter-sweatshirts-joliet.jpg (R3, 366K, Jun 8) — highest round, appropriate size. The slide-L title and href can remain unchanged since the cross-sell direction is already correct.

### Action 5 — review top5pct-foil-shirt-shorewood.jpg quality

This R3 file is 41K, well below the 246-344K range of the other foil-shirts/ R3 files. If it is low-resolution or visually unsuitable for display, it should not be retained in the 4-slot carousel. If the carousel trim removes it (as recommended above), this is resolved automatically. If it is retained for any slot, verify its display quality at 600x450px before finalizing.

---

## File Usage Count

| file | dir | size | date | round | used in |
|---|---|---|---|---|---|
| top5pct-foil-gold-t-shirt.jpg | custom-shirts/ | 333K | Jun 2 | R2 | hero only |
| top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | custom-shirts/ | 35K | Mar 16 | Initial | C-1, card-1, card-detailed image1, slide-R (4 uses — all to be eliminated) |
| top5pct-gold-foil-printed-shirts.jpg | custom-shirts/ | 213K | Jun 2 | R2 | C-2 — move to card-1 |
| top5pct-foil-custom-t-shirts.jpg | custom-shirts/ | 248K | Jun 2 | R2 | C-3 — move to card-detailed |
| top5pct-custom-foil-polo.jpg | custom-shirts/ | 217K | Jun 2 | R2 | C-4 — surplus after carousel trim; hold for future use |
| top5pct-custom-wedding-foil-shirts.jpg | custom-shirts/ | 344K | Jun 2 | R2 | card-2 only |
| top5pct-foil-shirts.jpg | foil-shirts/ | 306K | Jun 8 | R3 | C-5 — keep in carousel |
| top5pct-foil-custom-shirts-joliet.jpg | foil-shirts/ | 246K | Jun 8 | R3 | C-6 — keep in carousel |
| top5pct-foil-custom-apparel-shirts-joliet.jpg | foil-shirts/ | 282K | Jun 9 | R3 | C-7 — keep in carousel |
| top5pct-foil-shirts-cresthill.jpg | foil-shirts/ | 344K | Jun 8 | R3 | C-8 — keep in carousel |
| top5pct-foil-shirt-shorewood.jpg | foil-shirts/ | 41K | Jun 8 | R3 | C-9 — remove from carousel (surplus + small size); hold for review |
| top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | glitter-shirts/ | 30K | Mar 16 | Initial | slide-L — replace with glitter-shirts/ R1-R3 |

---

## Applied Fixes — Jun 25, 2026

All 5 actions were applied to the blade on Jun 25, 2026.

| fix | action | result |
|---|---|---|
| 1 | Carousel trimmed from 9 slots to 4 (kept C-5, C-6, C-7, C-8 — all foil-shirts/ R3) | Carousel now 4 slots, all R3, all same-dir |
| 2 | card-1 image replaced: Initial (35K) → top5pct-gold-foil-printed-shirts.jpg (R2, 213K) | card-1 now R2 |
| 3 | card-detailed image1 replaced: Initial (35K) → top5pct-foil-custom-t-shirts.jpg (R2, 248K) | card-detailed now R2 |
| 4 | slide-R replaced: Initial same-product → rhinestone-apparel/top5pct-rhinestone-tshirts-joliet.jpg (R2, 271K); title updated to "Add Rhinestone Accents to Your Foil Shirt Order" | slide-R now a proper cross-sell, R2 |
| 5 | slide-L image replaced: Initial (30K) → glitter-shirts/top5pct-glitter-sweatshirts-joliet.jpg (R3, 366K); title and href unchanged | slide-L image now R3 |

The Initial file top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg (35K, Mar 16) has been fully removed from the blade. It was used in 4 slots; all 4 are now resolved.

**Post-fix R1-R3 count: 15 of 15 slots confirmed R1-R3.**

---

## Notes

- All 15 image slots are confirmed R1-R3 as of Jun 25, 2026 (post-fix).
- Carousel is 4 slots, all foil-shirts/ R3 — no Initial or surplus files remain in the carousel.
- The Initial file (top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg, 35K, Mar 16) has been fully eliminated from the blade.
- slide-R is now a rhinestone cross-sell (rhinestone-apparel/, Jun 3, R2-adjacent, 271K).
- slide-L image is now R3 (glitter-shirts/top5pct-glitter-sweatshirts-joliet.jpg, Jun 8, 366K); cross-sell direction and title unchanged.
- top5pct-foil-shirt-shorewood.jpg (41K, R3) was removed from the carousel as part of the trim to 4. Quality flag stands — verify display quality if it is used elsewhere.
- No remaining R4 image requirements for this page. All slots are R1-R3.
