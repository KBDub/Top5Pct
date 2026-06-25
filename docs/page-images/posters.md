# Posters — Image Status

**Blade:** `resources/views/pages/signs/posters.blade.php`
**URL:** `/signs/business-signs/posters`
**Dir:** `public/images/posters/` — 11 files total
**Verified:** Jun 25, 2026

---

## Round Reference

| round | date | note |
|---|---|---|
| Initial | Mar 16, 2026 | |
| R1 | May 11, 2026 | no files this round in this dir |
| R2 | Jun 2, 2026 | |
| R2+ | Jun 3, 2026 | no files this round in this dir |
| R3 | Jun 6-8, 2026 | no files this round in this dir |

Only Initial and R2 files exist in this dir. No R1 or R3 posters/ images.

---

## Dir Inventory

| file | size | date | round | note |
|---|---|---|---|---|
| top5pct-article-posters-joliet-pic1.jpg | 34K | Mar 16 | Initial | small, likely article thumbnail |
| top5pct-banner-poster-maker-joliet-romeoville-shorewood.jpg | 177K | Mar 16 | Initial | unused in blade |
| top5pct-poster-board-joliet-shorewood-romeoville.jpg | 64K | Mar 16 | Initial | |
| top5pct-poster-maker-joliet-shorewood-plainfield.jpg | 49K | Mar 16 | Initial | small |
| top5pct-postermywall-joliet-shorewood-crest-hill.jpg | 54K | Mar 16 | Initial | small |
| top5pct-poster-printing-joliet-shorewood-romeoville.jpg | 50K | Mar 16 | Initial | small; used in both card-1 and slide-R |
| top5pct-poster-store-joliet-shorewood-plainfield.jpg | 47K | Mar 16 | Initial | small |
| top5pct-big-posters-joliet.jpg | 540K | Jun 2 | R2 | |
| top5pct-custom-posters.jpg | 281K | Jun 2 | R2 | |
| top5pct-poster-board-joliet.jpg | 275K | Jun 2 | R2 | |
| top5pct-posters-printed-joliet.jpg | 385K | Jun 2 | R2 | |

Dir summary: 7 Initial, 0 R1, 4 R2, 0 R3. 11 image files total. All 4 R2 files are placed in the blade. No unused R1-R3 posters/ files remain.

---

## Blade Image Slots

| slot | component | image | dir | round | date | size | status |
|---|---|---|---|---|---|---|---|
| hero | category-hero | top5pct-posters-printed-joliet.jpg | posters/ | R2 | Jun 2 | 385K | good |
| C-1 | carousel-rotating-images | top5pct-big-posters-joliet.jpg | posters/ | R2 | Jun 2 | 540K | good |
| C-2 | carousel-rotating-images | top5pct-custom-posters.jpg | posters/ | R2 | Jun 2 | 281K | good |
| C-3 | carousel-rotating-images | top5pct-poster-board-joliet.jpg | posters/ | R2 | Jun 2 | 275K | good |
| card-1 | card-image-with-text | top5pct-poster-printing-joliet-shorewood-romeoville.jpg | posters/ | Initial | Mar 16 | 50K | Initial |
| card-2 | card-image-with-text (imagePosition right) | top5pct-poster-maker-joliet-shorewood-plainfield.jpg | posters/ | Initial | Mar 16 | 49K | Initial |
| card-2img image1 | card-2image-with-text | top5pct-poster-board-joliet-shorewood-romeoville.jpg | posters/ | Initial | Mar 16 | 64K | Initial |
| card-2img image2 | card-2image-with-text | top5pct-postermywall-joliet-shorewood-crest-hill.jpg | posters/ | Initial | Mar 16 | 54K | Initial |
| card-3 | card-image-with-text | top5pct-poster-store-joliet-shorewood-plainfield.jpg | posters/ | Initial | Mar 16 | 47K | Initial |
| card-detailed image1 | card-detailed-info | top5pct-article-posters-joliet-pic1.jpg | posters/ | Initial | Mar 16 | 34K | Initial |
| slide-R | card-banner-slide-in (direction right) | top5pct-poster-printing-joliet-shorewood-romeoville.jpg | posters/ | Initial | Mar 16 | 50K | Initial; same-category; rule violation |
| slide-L | card-banner-slide-in (direction left) | top5pct-retractable-banner.jpg | banners/ | R1 | May 11 | 234K | good, cross-sell |

---

## R1-R3 Placement Summary

**Total blade image slots:** 12
**Filled R1-R3:** 5
**Remaining (Initial in blade):** 7

| slot | image | round | issue |
|---|---|---|---|
| card-1 | top5pct-poster-printing-joliet-shorewood-romeoville.jpg | Initial | no same-dir R1-R3 replacement available |
| card-2 | top5pct-poster-maker-joliet-shorewood-plainfield.jpg | Initial | no same-dir R1-R3 replacement available |
| card-2img image1 | top5pct-poster-board-joliet-shorewood-romeoville.jpg | Initial | no same-dir R1-R3 replacement available |
| card-2img image2 | top5pct-postermywall-joliet-shorewood-crest-hill.jpg | Initial | no same-dir R1-R3 replacement available |
| card-3 | top5pct-poster-store-joliet-shorewood-plainfield.jpg | Initial | no same-dir R1-R3 replacement available |
| card-detailed image1 | top5pct-article-posters-joliet-pic1.jpg | Initial | no same-dir R1-R3 replacement available |
| slide-R | top5pct-poster-printing-joliet-shorewood-romeoville.jpg | Initial | Initial AND same-category, rule violation (see below) |

All 4 R2 posters/ files are already placed (hero, C-1, C-2, C-3). No unused R1-R3 posters/ files remain. Per the audit rules, all 7 Initial slots are left for a later round except slide-R, which also has a rule violation that must be addressed separately.

---

## Carousel

**Current slots:** 3
**Target:** 4. May exceed 4 if all non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | image | round | status |
|---|---|---|---|
| hero | top5pct-posters-printed-joliet.jpg | R2 | good |
| card-1 | top5pct-poster-printing-joliet-shorewood-romeoville.jpg | Initial | not filled |
| card-2 | top5pct-poster-maker-joliet-shorewood-plainfield.jpg | Initial | not filled |
| card-2img image1 | top5pct-poster-board-joliet-shorewood-romeoville.jpg | Initial | not filled |
| card-2img image2 | top5pct-postermywall-joliet-shorewood-crest-hill.jpg | Initial | not filled |
| card-3 | top5pct-poster-store-joliet-shorewood-plainfield.jpg | Initial | not filled |
| card-detailed image1 | top5pct-article-posters-joliet-pic1.jpg | Initial | not filled |
| slide-R | top5pct-poster-printing-joliet-shorewood-romeoville.jpg | Initial | not filled + rule violation |
| slide-L | top5pct-retractable-banner.jpg | R1 | good, cross-sell |

6 non-carousel slots are Initial. Carousel must stay at its current size or target 4 until non-carousel slots are resolved. Carousel is currently at 3, below the target of 4.

**Carousel below target:** The carousel has only 3 slots, below the target of 4. All 4 R2 posters/ files are placed (3 in carousel + 1 in hero). No unused R1-R3 posters/ files remain. A 4th carousel slot requires new R4 posters/ images.

---

## Rule Violations

### slide-R — double violation: Initial image AND same-category

slide-R (direction right) currently uses `top5pct-poster-printing-joliet-shorewood-romeoville.jpg` (posters/, Initial, Mar 16, 50K).

Two rules are broken simultaneously:

1. **Initial image.** slide-R must use an R1-R3 (or R4) image. This file is Initial.
2. **Same-category.** slide-R must always be a cross-sell to an R1-R3 image from another category. This file is from posters/, the same category as the page itself. No same-category image is ever valid for slide-R.

This slot also duplicates card-1 (same file used twice).

slide-R must be replaced with an R1-R3 cross-sell from a different category regardless of R4 timing. This is not a "wait for later round" situation — it is a rule violation that exists independently of the R1-R3 image shortage.

---

## Slide Rules Check

| slot | direction | image | dir | round | rule | status |
|---|---|---|---|---|---|---|
| slide-R | right | top5pct-poster-printing-joliet-shorewood-romeoville.jpg | posters/ | Initial | must be cross-sell R1-R3 from another category | violation: Initial + same-category |
| slide-L | left | top5pct-retractable-banner.jpg | banners/ | R1 | cross-sell must be R1-R3 | good, cross-sell, R1 |

slide-L cross-sells to banners/, which is the most referenced complementary category in the blade content (banners are mentioned 5 times as a natural pairing for posters). Round confirmed against banners.md: `top5pct-retractable-banner.jpg` is R1 (May 11).

---

## File Usage Count

| file | dir | size | round | used in |
|---|---|---|---|---|
| top5pct-posters-printed-joliet.jpg | posters/ | 385K | R2 | hero only |
| top5pct-big-posters-joliet.jpg | posters/ | 540K | R2 | C-1 only |
| top5pct-custom-posters.jpg | posters/ | 281K | R2 | C-2 only |
| top5pct-poster-board-joliet.jpg | posters/ | 275K | R2 | C-3 only |
| top5pct-poster-printing-joliet-shorewood-romeoville.jpg | posters/ | 50K | Initial | card-1 and slide-R (duplicate use) |
| top5pct-poster-maker-joliet-shorewood-plainfield.jpg | posters/ | 49K | Initial | card-2 only |
| top5pct-poster-board-joliet-shorewood-romeoville.jpg | posters/ | 64K | Initial | card-2img image1 only |
| top5pct-postermywall-joliet-shorewood-crest-hill.jpg | posters/ | 54K | Initial | card-2img image2 only |
| top5pct-poster-store-joliet-shorewood-plainfield.jpg | posters/ | 47K | Initial | card-3 only |
| top5pct-article-posters-joliet-pic1.jpg | posters/ | 34K | Initial | card-detailed image1 only |
| top5pct-retractable-banner.jpg | banners/ | 234K | R1 | slide-L only |
| top5pct-banner-poster-maker-joliet-romeoville-shorewood.jpg | posters/ | 177K | Initial | unused |

`top5pct-poster-printing-joliet-shorewood-romeoville.jpg` is used in two slots (card-1 and slide-R). One unused posters/ file remains (`top5pct-banner-poster-maker-joliet-romeoville-shorewood.jpg`, Initial) — does not qualify for blade placement.

---

## Immediate Suggestions

### slide-R — replace with R1-R3 cross-sell from another category (action required regardless of R4)

slide-R must always be a cross-sell. The current image is same-category and Initial. This violation must be resolved independently of the R1-R3 image shortage.

Recommended cross-sell candidates from adjacent categories:

| candidate | dir | round | size | note |
|---|---|---|---|---|
| top5pct-banners-and-signs.jpg | banners/ | R1 | 361K | recommended; banners referenced 5 times in blade content |
| top5pct-custom-vinyl-banners.jpg | banners/ | R1 | 476K | alternative; banners/ R1 |
| top5pct-wall-signs.jpg | wall-signs/ | R3 | 387K | alternative; wall-signs/ R3 |

Recommended: `top5pct-banners-and-signs.jpg` (banners/, R1, May 11, 361K). Banners are the most referenced complementary product in the blade content, and the cross-sell direction is natural and on-theme.

### 6 remaining Initial slots — no same-dir R1-R3 replacements available

card-1, card-2, card-2img image1, card-2img image2, card-3, and card-detailed image1 all use Initial posters/ files. All 4 R2 posters/ files are already placed. No unused R1-R3 posters/ files exist. Per the audit rules, these 6 slots are left Initial for R4.

When R4 posters/ images arrive, priority order for replacement:
1. card-1 (also resolves the slide-R duplicate)
2. card-2
3. card-2img image1
4. card-2img image2
5. card-3
6. card-detailed image1

### Carousel below target — expansion requires R4

Carousel is at 3, below the target of 4. No unused R1-R3 posters/ files remain. The carousel should reach 4 as soon as the first R4 posters/ image is available. At that point, it should be added to the carousel before filling a non-carousel slot, since carousel is currently below target.

---

## Notes

- 5 of 12 blade image slots are R1-R3 as of verification Jun 25, 2026.
- This dir has no R1 or R3 files — only Initial (7) and R2 (4). It is the least-complete dir in the audit so far.
- slide-R has a double violation (Initial + same-category). It must be replaced with an R1-R3 cross-sell from another category before R4. This is not deferred.
- `top5pct-poster-printing-joliet-shorewood-romeoville.jpg` (Initial, 50K) is used twice — in card-1 and slide-R. Both slots need replacement.
- The unused posters/ file (`top5pct-banner-poster-maker-joliet-romeoville-shorewood.jpg`, 177K, Initial) does not qualify for blade placement.
- 6 Initial non-slide slots are deferred to R4 per audit rules.
- Carousel is below target (3 of 4). First R4 posters/ image should go to carousel.
- R4 audit ready, but slide-R fix is a prerequisite action.
