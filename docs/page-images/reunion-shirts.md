# Reunion Shirts — Image Status

**Blade:** `resources/views/pages/custom-apparel/group-wear/reunion-shirts.blade.php`
**URL:** `/custom-apparel/group-wear/reunion-shirts`
**Primary dir:** `public/images/reunion-shirts/` — 17 files
**Cross-dir files used:** `public/images/spirit-wear/` (1 file), `public/images/custom-shirts/` (1 file)
**Verified:** Jun 25, 2026

---

## Round Reference

| round | date | note |
|---|---|---|
| Initial | Mar 16, 2026 | |
| R1 | May 11, 2026 | |
| R2 | Jun 2-3, 2026 | Jun 3 confirmed R2 per prior audits |
| R3 | Jun 8, 2026 | window Jun 4-9 |

---

## Dir Inventory — reunion-shirts/

| file | size | date | round | placed in blade |
|---|---|---|---|---|
| top5pct-family-reunion-shirts-joliet.jpg | 470K | May 11 | R1 | hero |
| top5pct-class-reunion-shirt.jpg | 554K | May 11 | R1 | C-1 |
| top5pct-family-reunion-tshirts-in-joliet.jpg | 345K | May 11 | R1 | C-2 |
| top5pct-group-shirts.jpg | 490K | May 11 | R1 | C-3 |
| top5pct-family-reunion-tees.jpg | 113K | Jun 8 | R3 | C-4 |
| top5pct-reunion-group-shirts.jpg | 300K | May 11 | R1 | card-1 |
| top5pct-reunion-shirts.jpg | 495K | May 11 | R1 | card-2 |
| top5pct-class-reunion-shirt-templates.gif | 9K | Mar 16 | **Initial** | card-2image-A image1 |
| top5pct-class-reunion-shirt-templates2.gif | 9K | Mar 16 | **Initial** | card-2image-A image2 |
| top5pct-family-reunion-shirts-joliet-crest-hill.jpg | 79K | Mar 16 | **Initial** | card-2image-B image1 |
| top5pct-family-reunion-shirts-joliet-romeoville.jpg | 77K | Mar 16 | **Initial** | card-2image-B image2 |
| top5pct-family-reunion-shirts-joliet-plainfield.jpg | 55K | Mar 16 | **Initial** | card-3 |
| top5pct-article-family-reunion-pic1.jpg | 17K | Mar 16 | **Initial** | card-detailed image1 |
| top5pct-article-family-reunion-pic2.jpg | 26K | Mar 16 | **Initial** | card-detailed image2 |
| top5pct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg | 75K | Mar 16 | Initial | no — unused |
| top5pct-class-reunion-shirts-joliet-shorewood.jpg | 55K | Mar 16 | Initial | no — unused |
| top5pct-westinghouse-class-reunion-shirt-joliet-shorewood.jpg | 43K | Mar 16 | Initial | no — unused |

Dir summary: 10 Initial (Mar 16), 6 R1 (May 11), 0 R2, 1 R3 (Jun 8). 17 files total.

**Critical finding:** All 7 reunion-shirts/ R1-R3 files are already placed (hero + 4 carousel + card-1 + card-2). No unused same-dir R1-R3 files remain. All 7 Initial body and editorial slots require new photography. The 3 unused reunion-shirts/ files are all Initial (43-75K) and not suitable for body card use.

---

## Cross-Dir Files Used in Blade

| file | dir | size | date | round | slot |
|---|---|---|---|---|---|
| top5pct-spirit-wear-joliet.jpg | spirit-wear/ | 347K | May 11 | R1 | slide-R (cross-sell) |
| top5pct-custom-shirt-pictures.jpg | custom-shirts/ | 397K | May 11 | R1 | slide-L (cross-sell) |

---

## Blade Image Slots

Listed in blade order: hero, carousel, body cards, card-detailed, slides.

Note: the blade has two separate card-2image-with-text components. They are labeled card-2image-A (Reunion Shirt Templates) and card-2image-B (Family Reunion Shirts) to distinguish them.

| slot | section | image | dir | date | round | size | status |
|---|---|---|---|---|---|---|---|
| hero | category-hero | top5pct-family-reunion-shirts-joliet.jpg | reunion-shirts/ | May 11 | R1 | 470K | good |
| C-1 | carousel-rotating-images | top5pct-class-reunion-shirt.jpg | reunion-shirts/ | May 11 | R1 | 554K | good |
| C-2 | carousel-rotating-images | top5pct-family-reunion-tshirts-in-joliet.jpg | reunion-shirts/ | May 11 | R1 | 345K | good |
| C-3 | carousel-rotating-images | top5pct-group-shirts.jpg | reunion-shirts/ | May 11 | R1 | 490K | good |
| C-4 | carousel-rotating-images | top5pct-family-reunion-tees.jpg | reunion-shirts/ | Jun 8 | R3 | 113K | good |
| card-1 | card-image-with-text (Class Reunion Shirts) | top5pct-reunion-group-shirts.jpg | reunion-shirts/ | May 11 | R1 | 300K | good |
| card-2 | card-image-with-text (School Alumni Shirts, imagePosition right) | top5pct-reunion-shirts.jpg | reunion-shirts/ | May 11 | R1 | 495K | good |
| card-2image-A image1 | card-2image-with-text (Reunion Shirt Templates) | top5pct-class-reunion-shirt-templates.gif | reunion-shirts/ | Mar 16 | **Initial** | 9K | violation: Initial; GIF template file at 9K |
| card-2image-A image2 | card-2image-with-text (Reunion Shirt Templates) | top5pct-class-reunion-shirt-templates2.gif | reunion-shirts/ | Mar 16 | **Initial** | 9K | violation: Initial; GIF template file at 9K |
| card-2image-B image1 | card-2image-with-text (Family Reunion Shirts) | top5pct-family-reunion-shirts-joliet-crest-hill.jpg | reunion-shirts/ | Mar 16 | **Initial** | 79K | violation: Initial; 79K small |
| card-2image-B image2 | card-2image-with-text (Family Reunion Shirts) | top5pct-family-reunion-shirts-joliet-romeoville.jpg | reunion-shirts/ | Mar 16 | **Initial** | 77K | violation: Initial; 77K small |
| card-3 | card-image-with-text (Make Your Reunion Special) | top5pct-family-reunion-shirts-joliet-plainfield.jpg | reunion-shirts/ | Mar 16 | **Initial** | 55K | violation: Initial; 55K small |
| card-detailed image1 | card-detailed-info (How Reunion T-Shirts Make Your Reunion Special) | top5pct-article-family-reunion-pic1.jpg | reunion-shirts/ | Mar 16 | **Initial** | 17K | violation: Initial; article pic at 17K |
| card-detailed image2 | card-detailed-info (How Reunion T-Shirts Make Your Reunion Special) | top5pct-article-family-reunion-pic2.jpg | reunion-shirts/ | Mar 16 | **Initial** | 26K | violation: Initial; article pic at 26K |
| slide-R | card-banner-slide-in (direction right) | top5pct-spirit-wear-joliet.jpg | spirit-wear/ | May 11 | R1 | 347K | good — R1 cross-sell to spirit wear |
| slide-L | card-banner-slide-in (direction left) | top5pct-custom-shirt-pictures.jpg | custom-shirts/ | May 11 | R1 | 397K | good — R1 cross-sell to custom apparel |

---

## R1-R3 Placement Summary

**Total image slots:** 16
**Confirmed R1-R3:** 9 of 16

| slot | image | dir | round | status |
|---|---|---|---|---|
| hero | top5pct-family-reunion-shirts-joliet.jpg | reunion-shirts/ | R1 | good |
| C-1 | top5pct-class-reunion-shirt.jpg | reunion-shirts/ | R1 | good |
| C-2 | top5pct-family-reunion-tshirts-in-joliet.jpg | reunion-shirts/ | R1 | good |
| C-3 | top5pct-group-shirts.jpg | reunion-shirts/ | R1 | good |
| C-4 | top5pct-family-reunion-tees.jpg | reunion-shirts/ | R3 | good |
| card-1 | top5pct-reunion-group-shirts.jpg | reunion-shirts/ | R1 | good |
| card-2 | top5pct-reunion-shirts.jpg | reunion-shirts/ | R1 | good |
| slide-R | top5pct-spirit-wear-joliet.jpg | spirit-wear/ | R1 | good — R1 cross-sell |
| slide-L | top5pct-custom-shirt-pictures.jpg | custom-shirts/ | R1 | good — R1 cross-sell |

**Initial (not R1-R3) — 7 slots remaining to fill:**

| slot | image | dir | round | size | issue |
|---|---|---|---|---|---|
| card-2image-A image1 | top5pct-class-reunion-shirt-templates.gif | reunion-shirts/ | Initial | 9K | GIF template file, not a product photo; no same-dir R1+ replacement available |
| card-2image-A image2 | top5pct-class-reunion-shirt-templates2.gif | reunion-shirts/ | Initial | 9K | GIF template file, not a product photo; no same-dir R1+ replacement available |
| card-2image-B image1 | top5pct-family-reunion-shirts-joliet-crest-hill.jpg | reunion-shirts/ | Initial | 79K | 79K small; no same-dir R1+ replacement available |
| card-2image-B image2 | top5pct-family-reunion-shirts-joliet-romeoville.jpg | reunion-shirts/ | Initial | 77K | 77K small; no same-dir R1+ replacement available |
| card-3 | top5pct-family-reunion-shirts-joliet-plainfield.jpg | reunion-shirts/ | Initial | 55K | 55K small; no same-dir R1+ replacement available |
| card-detailed image1 | top5pct-article-family-reunion-pic1.jpg | reunion-shirts/ | Initial | 17K | article pic at 17K; no same-dir R1+ replacement available |
| card-detailed image2 | top5pct-article-family-reunion-pic2.jpg | reunion-shirts/ | Initial | 26K | article pic at 26K; no same-dir R1+ replacement available |

**R1-R3 filled: 9 of 16**
**Remaining: 7 of 16**

---

## Carousel

**Current slots:** 4
**Target:** 4. May exceed 4 only if ALL non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | image | round | status |
|---|---|---|---|
| hero | top5pct-family-reunion-shirts-joliet.jpg | R1 | good |
| card-1 | top5pct-reunion-group-shirts.jpg | R1 | good |
| card-2 | top5pct-reunion-shirts.jpg | R1 | good |
| card-2image-A image1 | top5pct-class-reunion-shirt-templates.gif | Initial | not filled |
| card-2image-A image2 | top5pct-class-reunion-shirt-templates2.gif | Initial | not filled |
| card-2image-B image1 | top5pct-family-reunion-shirts-joliet-crest-hill.jpg | Initial | not filled |
| card-2image-B image2 | top5pct-family-reunion-shirts-joliet-romeoville.jpg | Initial | not filled |
| card-3 | top5pct-family-reunion-shirts-joliet-plainfield.jpg | Initial | not filled |
| card-detailed image1 | top5pct-article-family-reunion-pic1.jpg | Initial | not filled |
| card-detailed image2 | top5pct-article-family-reunion-pic2.jpg | Initial | not filled |
| slide-R | top5pct-spirit-wear-joliet.jpg | R1 | good |
| slide-L | top5pct-custom-shirt-pictures.jpg | R1 | good |

Over-target condition is NOT met — 7 non-carousel slots are Initial. Carousel must stay at 4. It is already at 4. **No carousel changes needed.**

Carousel round quality: C-1 (R1), C-2 (R1), C-3 (R1), C-4 (R3). All four are same-dir (reunion-shirts/). Carousel is correct as-is. No carousel swaps needed.

---

## Rule Violations

| violation | slot | detail |
|---|---|---|
| Initial round | card-2image-A image1 | top5pct-class-reunion-shirt-templates.gif — Initial GIF, 9K |
| Initial round | card-2image-A image2 | top5pct-class-reunion-shirt-templates2.gif — Initial GIF, 9K |
| Initial round | card-2image-B image1 | top5pct-family-reunion-shirts-joliet-crest-hill.jpg — Initial, 79K |
| Initial round | card-2image-B image2 | top5pct-family-reunion-shirts-joliet-romeoville.jpg — Initial, 77K |
| Initial round | card-3 | top5pct-family-reunion-shirts-joliet-plainfield.jpg — Initial, 55K |
| Initial round | card-detailed image1 | top5pct-article-family-reunion-pic1.jpg — Initial, 17K |
| Initial round | card-detailed image2 | top5pct-article-family-reunion-pic2.jpg — Initial, 26K |

**Slides:** both good. slide-R is R1 spirit-wear/ cross-sell. slide-L is R1 custom-shirts/ cross-sell. No violations.

---

## Duplicate Image Usage

None. Every placed image appears in exactly one slot on this page.

Note: top5pct-group-shirts.jpg (C-3 here) and top5pct-family-reunion-shirts-joliet.jpg (hero here) and top5pct-family-reunion-tees.jpg (C-4 here) are also used on other pages (spirit-wear-shirts, corporate-wear-shirts). Those are cross-page uses, not within-page duplicates, and are allowed.

---

## Immediate Fixes Available

**None.** All 7 reunion-shirts/ R1-R3 files are placed (hero + C-1 through C-4 + card-1 + card-2). There are no unused same-dir R1-R3 files. The 7 Initial slots all require new same-dir reunion-shirts/ photography. The 3 unused reunion-shirts/ files are all Initial (43-75K) and not suitable substitutes for any body or editorial slot.

---

## Changes Needed

All changes listed below require new photography. None can be resolved with currently available files.

| priority | slot | current image | round | size | needed |
|---|---|---|---|---|---|
| 1 | card-2image-A image1 | top5pct-class-reunion-shirt-templates.gif | Initial | 9K | New R3+ product photo to replace the GIF template graphic in the Reunion Shirt Templates card. Subject: a finished reunion shirt showing a design or template. |
| 2 | card-2image-A image2 | top5pct-class-reunion-shirt-templates2.gif | Initial | 9K | New R3+ product photo to pair with image1 in the same card. Second angle or design variation of a reunion shirt. |
| 3 | card-2image-B image1 | top5pct-family-reunion-shirts-joliet-crest-hill.jpg | Initial | 79K | New R3+ family reunion shirt photo for the Family Reunion Shirts card. Larger, more recent image. |
| 4 | card-2image-B image2 | top5pct-family-reunion-shirts-joliet-romeoville.jpg | Initial | 77K | New R3+ paired reunion shirt photo to go alongside image1 in the same card. |
| 5 | card-3 | top5pct-family-reunion-shirts-joliet-plainfield.jpg | Initial | 55K | New R3+ reunion shirt group photo for the Make Your Reunion Special card. |
| 6 | card-detailed image1 | top5pct-article-family-reunion-pic1.jpg | Initial | 17K | New R3+ reunion shirt photo for the How Reunion T-Shirts editorial section. Replace 17K article pic. |
| 7 | card-detailed image2 | top5pct-article-family-reunion-pic2.jpg | Initial | 26K | New R3+ paired photo for the editorial section. Replace 26K article pic. |

---

## File Usage Count

| file | dir | size | date | round | used in |
|---|---|---|---|---|---|
| top5pct-family-reunion-shirts-joliet.jpg | reunion-shirts/ | 470K | May 11 | R1 | hero only |
| top5pct-class-reunion-shirt.jpg | reunion-shirts/ | 554K | May 11 | R1 | C-1 only |
| top5pct-family-reunion-tshirts-in-joliet.jpg | reunion-shirts/ | 345K | May 11 | R1 | C-2 only |
| top5pct-group-shirts.jpg | reunion-shirts/ | 490K | May 11 | R1 | C-3 only |
| top5pct-family-reunion-tees.jpg | reunion-shirts/ | 113K | Jun 8 | R3 | C-4 only |
| top5pct-reunion-group-shirts.jpg | reunion-shirts/ | 300K | May 11 | R1 | card-1 only |
| top5pct-reunion-shirts.jpg | reunion-shirts/ | 495K | May 11 | R1 | card-2 only |
| top5pct-class-reunion-shirt-templates.gif | reunion-shirts/ | 9K | Mar 16 | Initial | card-2image-A image1 — needs R3+ replacement |
| top5pct-class-reunion-shirt-templates2.gif | reunion-shirts/ | 9K | Mar 16 | Initial | card-2image-A image2 — needs R3+ replacement |
| top5pct-family-reunion-shirts-joliet-crest-hill.jpg | reunion-shirts/ | 79K | Mar 16 | Initial | card-2image-B image1 — needs R3+ replacement |
| top5pct-family-reunion-shirts-joliet-romeoville.jpg | reunion-shirts/ | 77K | Mar 16 | Initial | card-2image-B image2 — needs R3+ replacement |
| top5pct-family-reunion-shirts-joliet-plainfield.jpg | reunion-shirts/ | 55K | Mar 16 | Initial | card-3 — needs R3+ replacement |
| top5pct-article-family-reunion-pic1.jpg | reunion-shirts/ | 17K | Mar 16 | Initial | card-detailed image1 — needs R3+ replacement |
| top5pct-article-family-reunion-pic2.jpg | reunion-shirts/ | 26K | Mar 16 | Initial | card-detailed image2 — needs R3+ replacement |
| top5pct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg | reunion-shirts/ | 75K | Mar 16 | Initial | unused — marketing banner, not suitable for body slot |
| top5pct-class-reunion-shirts-joliet-shorewood.jpg | reunion-shirts/ | 55K | Mar 16 | Initial | unused — too small for any slot |
| top5pct-westinghouse-class-reunion-shirt-joliet-shorewood.jpg | reunion-shirts/ | 43K | Mar 16 | Initial | unused — too small for any slot |
| top5pct-spirit-wear-joliet.jpg | spirit-wear/ | 347K | May 11 | R1 | slide-R only — spirit wear cross-sell |
| top5pct-custom-shirt-pictures.jpg | custom-shirts/ | 397K | May 11 | R1 | slide-L only — custom apparel cross-sell |

---

## Notes

- 9 of 16 image slots are confirmed R1-R3 as of Jun 25, 2026.
- 7 slots are Initial: card-2image-A image1 and image2, card-2image-B image1 and image2, card-3, card-detailed image1, card-detailed image2. All 7 are in body or editorial sections.
- No rule violations on slides. slide-R is R1 spirit-wear/ cross-sell. slide-L is R1 custom-shirts/ cross-sell. Both correct.
- Carousel is correct at 4 slots, C-1 through C-3 are R1, C-4 is R3, all same-dir. No changes needed.
- No duplicates within this page.
- All 7 reunion-shirts/ R1-R3 files are placed. No unused same-dir R1-R3 files remain.
- The card-2image-A GIF template files (9K each) are a special case — they are intentional graphic assets showing shirt design templates, not product photography. They still count as Initial violations and need R3+ product photo replacements when new photography is available.
- The 3 unused reunion-shirts/ files (banner 75K, class-reunion-shirts 55K, westinghouse 43K) are all Initial and too small for body slots. Recommend archiving at R4.
- R4 image delivery for reunion-shirts should target: 2 finished product photos for card-2image-A (replacing GIFs), 2 larger reunion shirt photos for card-2image-B, 1 group/scene photo for card-3, 2 editorial photos for card-detailed.
