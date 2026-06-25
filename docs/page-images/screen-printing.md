# Screen Printing — Image Status

**Blade:** `resources/views/pages/custom-apparel/printing-options/screen-printing.blade.php`
**URL:** `/custom-apparel/printing-options/screen-printing`
**Verified:** Jun 25, 2026

---

## Dir Inventories

### screen-printing/ dir (6 files)

| file | size | date | round |
|---|---|---|---|
| top5pct-screenprinting-t-shirts-joliet.jpg | 495K | Jun 3 | R2+ |
| top5pct-screenprinting-hoodies-joliet.jpg | 135K | Jun 8 | R3 |
| top5pct-screenprinting-t-shirt-maker-joliet.jpg | 318K | Jun 8 | R3 |
| top5pct-screenprinting-company-shirts.jpg | 319K | Jun 8 | R3 |
| top5pct-screenprinting-joliet.jpg | 397K | Jun 8 | R3 |
| top5pct-screenprinted-shirts-joliet.jpg | 74K | Jun 8 | R3 |

All 6 screen-printing/ files are used in the carousel. None are unused.

### custom-shirts/ files referenced by this blade

| file | size | date | round |
|---|---|---|---|
| top5pct-screenprinted-shirts-joliet.jpg | 304K | May 11 | R1 |
| top5pct-screenprint-custom-shirts.jpg | 334K | May 11 | R1 |
| top5pct-screenprinted-shirts-in-joliet.jpg | 448K | May 11 | R1 |
| top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg | 117K | Mar 16 | Initial |
| top5pct-screenprinting-shirts.jpg | 335K | May 11 | R1 |
| top5pct-neon-vinyl-shirts.jpg | 296K | May 11 | R1 |
| top5pct-vinyl-caps.jpg | 566K | May 11 | R1 |
| top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | 32K | Mar 16 | Initial |
| top5pct-custom-embroidery-shops-near-me-joliet.jpg | — | — | MISSING |

Note: `top5pct-custom-embroidery-shops-near-me-joliet.jpg` does NOT exist in custom-shirts/. This file only exists in the embroidery/ dir. The slide-L reference is a broken image link.

---

## Image Inventory

| section / category | image | path | round | file date | size | status |
|---|---|---|---|---|---|---|
| hero — category-hero | top5pct-screenprinted-shirts-joliet.jpg | custom-shirts/ | R1 | May 11 | 304K | good |
| C-1 — carousel-rotating-images | top5pct-screenprint-custom-shirts.jpg | custom-shirts/ | R1 | May 11 | 334K | good |
| C-2 — carousel-rotating-images | top5pct-screenprinted-shirts-in-joliet.jpg | custom-shirts/ | R1 | May 11 | 448K | good |
| C-3 — carousel-rotating-images | top5pct-custom-shirt-pictures.jpg | custom-shirts/ | R1 | May 11 | 397K | good |
| C-4 — carousel-rotating-images | top5pct-screenprinting-shirts.jpg | custom-shirts/ | R1 | May 11 | 335K | good |
| C-5 — carousel-rotating-images | top5pct-screenprinting-joliet.jpg | screen-printing/ | R3 | Jun 8 | 397K | good |
| C-6 — carousel-rotating-images | top5pct-screenprinted-shirts-joliet.jpg | screen-printing/ | R3 | Jun 8 | 74K | good |
| C-7 — carousel-rotating-images | top5pct-screenprinting-company-shirts.jpg | screen-printing/ | R3 | Jun 8 | 319K | good |
| C-8 — carousel-rotating-images | top5pct-screenprinting-hoodies-joliet.jpg | screen-printing/ | R3 | Jun 8 | 135K | good |
| C-9 — carousel-rotating-images | top5pct-screenprinting-t-shirts-joliet.jpg | screen-printing/ | R2+ | Jun 3 | 495K | good |
| C-10 — carousel-rotating-images | top5pct-screenprinting-t-shirt-maker-joliet.jpg | screen-printing/ | R3 | Jun 8 | 318K | good |
| card-1 — card-image-with-text | top5pct-neon-vinyl-shirts.jpg | custom-shirts/ | R1 | May 11 | 296K | good |
| card-2 — card-image-with-text (imagePosition right) | top5pct-vinyl-caps.jpg | custom-shirts/ | R1 | May 11 | 566K | good |
| card-detailed image1 — card-detailed-info | top5pct-long-lasting-graphic-shirts.jpg | custom-shirts/ | R2 | Jun 2 | 417K | good |
| slide-R — card-banner-slide-in (direction right) | top5pct-vinyl-shirts.jpg | vinyl/ | R3 | Jun 8 | 379K | good, cross-sell |
| slide-L — card-banner-slide-in (direction left) | top5pct-custom-embroidery-shops-near-me-joliet.jpg | custom-shirts/ | — | — | — | MISSING FILE |

Note: `card-detailed-info` on this page uses only `image1`. There is no `image2` slot on this component instance.

---

## R1-R3 Placement Summary

**Filled:** 15 of 16 slots
**Remaining:** 1 slot

| slot | image | size | issue |
|---|---|---|---|
| slide-L | top5pct-custom-embroidery-shops-near-me-joliet.jpg | — | MISSING FILE, left as-is |

---

## Rule Violations

### slide-L — broken image path (left as-is per Jun 25 instruction)

The blade references `/images/custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg`. This file does not exist in custom-shirts/. It exists only in `embroidery/`. The current path produces a broken image on the page.

Even with the correct path (embroidery/), the file is Initial (28K, Mar 16) and does not qualify as a valid cross-sell. Cross-sells must be R1-R3. Left unchanged pending a new R1-R3 image for this slot.

---

## Carousel

**Current slots:** 10
**Target:** 4. May exceed 4 if all non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | status |
|---|---|
| hero | R1 — good |
| card-1 | R1 — good |
| card-2 | R1 — good |
| card-detailed image1 | R2 — good (fixed Jun 25) |
| slide-R | R3 — good, cross-sell (fixed Jun 25) |
| slide-L | Missing file — not filled, left as-is |

One non-carousel slot is not properly filled (slide-L, missing file, left as-is). The carousel CANNOT exceed 4 slots while slide-L remains unresolved. All other non-carousel slots are now R1+. Once slide-L is filled, the carousel may stay at 10 provided C-3 replacement holds.

---

## Available Unused R1-R3 Files for Filling Slots

### custom-shirts/ — unused R1 and R2 files not currently referenced by this blade

R2 (Jun 2) — selected options relevant to screen printing:

| file | size | round | note |
|---|---|---|---|
| top5pct-long-lasting-graphic-shirts.jpg | 417K | R2 | name fits screen printing durability theme |
| top5pct-custom-shirt-pictures.jpg | 397K | R1 | general shirts, fits carousel |

Dozens of other R2 custom-shirts/ files exist (rhinestone, reflective, foil, brick vinyl, puff, glow, flock, holographic). These are specialty-material images. They are available but less appropriate for a screen printing page.

### cross-sell dirs — for slide-L and slide-R

**embroidery/** (for slide-L, title references embroidery):

| file | size | round | note |
|---|---|---|---|
| top5pct-embroidery-in-joliet.jpg | 379K | R1 | embroidery context |
| top5pct-stitched-embroidered-shirts.jpg | 211K | R2 | embroidery context |
| top5pct-embroidered-aprons.jpg | 285K | R1 | embroidery context |

Note: all embroidery/ R1-R3 files are already used in the embroidery blade. Multi-page use is not prohibited.

**vinyl/** (for slide-L, title also references vinyl):

| file | size | round | note |
|---|---|---|---|
| top5pct-vinyl-shirts.jpg | 379K | R3 | R3, fits vinyl reference in slide-L title |
| top5pct-vinyl-t-shirt-maker.jpg | 377K | R3 | R3, alternative |

---

## Changes Made Jun 25, 2026

| slot | from | to |
|---|---|---|
| C-3 | top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg (custom-shirts/, Initial, 117K) | top5pct-custom-shirt-pictures.jpg (custom-shirts/, R1, May 11, 397K) |
| card-detailed image1 | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg (custom-shirts/, Initial, 32K) | top5pct-long-lasting-graphic-shirts.jpg (custom-shirts/, R2, Jun 2, 417K) |
| slide-R | top5pct-screenprinting-shirts.jpg (custom-shirts/, R1, same-category, same file as C-4) | top5pct-vinyl-shirts.jpg (vinyl/, R3, Jun 8, 379K, cross-sell) |

slide-L left as-is (broken path, missing file, pending new R1-R3 image).

---

## File Usage Notes

`top5pct-screenprinting-shirts.jpg` (custom-shirts/, R1) is now only in C-4. The duplicate usage in slide-R is resolved.

`top5pct-screenprinting-joliet.jpg` (screen-printing/, R3) is used in C-5 on this page and as slide-L on the embroidery page (as of Jun 25). Multi-page use is permitted.

`top5pct-vinyl-shirts.jpg` (vinyl/, R3) is now used as slide-R on this page. It is an R3 cross-sell from the vinyl/ category.
