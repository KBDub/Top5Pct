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
| C-3 — carousel-rotating-images | top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg | custom-shirts/ | Initial | Mar 16 | 117K | initial |
| C-4 — carousel-rotating-images | top5pct-screenprinting-shirts.jpg | custom-shirts/ | R1 | May 11 | 335K | good |
| C-5 — carousel-rotating-images | top5pct-screenprinting-joliet.jpg | screen-printing/ | R3 | Jun 8 | 397K | good |
| C-6 — carousel-rotating-images | top5pct-screenprinted-shirts-joliet.jpg | screen-printing/ | R3 | Jun 8 | 74K | good |
| C-7 — carousel-rotating-images | top5pct-screenprinting-company-shirts.jpg | screen-printing/ | R3 | Jun 8 | 319K | good |
| C-8 — carousel-rotating-images | top5pct-screenprinting-hoodies-joliet.jpg | screen-printing/ | R3 | Jun 8 | 135K | good |
| C-9 — carousel-rotating-images | top5pct-screenprinting-t-shirts-joliet.jpg | screen-printing/ | R2+ | Jun 3 | 495K | good |
| C-10 — carousel-rotating-images | top5pct-screenprinting-t-shirt-maker-joliet.jpg | screen-printing/ | R3 | Jun 8 | 318K | good |
| card-1 — card-image-with-text | top5pct-neon-vinyl-shirts.jpg | custom-shirts/ | R1 | May 11 | 296K | good |
| card-2 — card-image-with-text (imagePosition right) | top5pct-vinyl-caps.jpg | custom-shirts/ | R1 | May 11 | 566K | good |
| card-detailed image1 — card-detailed-info | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | custom-shirts/ | Initial | Mar 16 | 32K | initial, tiny file |
| slide-R — card-banner-slide-in (direction right) | top5pct-screenprinting-shirts.jpg | custom-shirts/ | R1 | May 11 | 335K | rule violation, see notes |
| slide-L — card-banner-slide-in (direction left) | top5pct-custom-embroidery-shops-near-me-joliet.jpg | custom-shirts/ | — | — | — | MISSING FILE |

Note: `card-detailed-info` on this page uses only `image1`. There is no `image2` slot on this component instance.

---

## R1-R3 Placement Summary

**Filled:** 13 of 16 slots
**Remaining:** 3 slots

| slot | image | size | issue |
|---|---|---|---|
| C-3 | top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg | 117K | Initial |
| card-detailed image1 | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | 32K | Initial, tiny file |
| slide-L | top5pct-custom-embroidery-shops-near-me-joliet.jpg | — | MISSING FILE |

---

## Rule Violations

### slide-R — not a cross-sell

The rule requires slide-R to always be a cross-sell to an R1-R3 image from another category. The current slide-R uses `top5pct-screenprinting-shirts.jpg` (custom-shirts/, R1) with the title "Bold Screen Printed Shirts for Your Group or Brand." Both the image and the title are same-category screen printing content. This is not a cross-sell.

Additionally, this file is the same file used in C-4. The same image appears twice on the page.

### slide-L — broken image path

The blade references `/images/custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg`. This file does not exist in custom-shirts/. It exists only in `embroidery/`. The current path produces a broken image on the page.

Even with the correct path (embroidery/), the file is Initial (28K, Mar 16) and does not qualify as a valid cross-sell. Cross-sells must be R1-R3.

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
| card-detailed image1 | Initial — not filled |
| slide-R | R1 — filled (separate rule violation, does not affect carousel count) |
| slide-L | Missing file — not filled |

Two non-carousel slots are not properly filled (card-detailed image1 and slide-L). The carousel CANNOT exceed 4 slots in current state. Once card-detailed image1 and slide-L are filled with R1-R3 images, the carousel may stay at 10 provided C-3 is also replaced.

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

## Immediate Suggestions

### 1. Fix slide-L — broken image, replace with R1-R3 cross-sell (CRITICAL)

The current path is broken. The slide title is "Add Embroidery or Vinyl to Complement Your Screen Print Order." Either embroidery/ or vinyl/ is an appropriate cross-sell.

| candidate | path | round | size | note |
|---|---|---|---|---|
| top5pct-vinyl-shirts.jpg | vinyl/ | R3 | 379K | recommended, R3, title references vinyl |
| top5pct-vinyl-t-shirt-maker.jpg | vinyl/ | R3 | 377K | alternative, R3 |
| top5pct-embroidery-in-joliet.jpg | embroidery/ | R1 | 379K | alternative, title also references embroidery |

Recommended: `top5pct-vinyl-shirts.jpg` (vinyl/, R3, Jun 8, 379K).

### 2. Fix card-detailed image1 — Initial, tiny (32K)

Section heading: "5 Reasons Screen Printing Delivers Superior Results for Group Apparel Orders." Needs a screen-printing-appropriate image.

| candidate | path | round | size | note |
|---|---|---|---|---|
| top5pct-long-lasting-graphic-shirts.jpg | custom-shirts/ | R2 | 417K | recommended, name matches durability theme |

Recommended: `top5pct-long-lasting-graphic-shirts.jpg` (custom-shirts/, R2, Jun 2, 417K).

### 3. Fix C-3 — Initial in carousel

| candidate | path | round | size | note |
|---|---|---|---|---|
| top5pct-custom-shirt-pictures.jpg | custom-shirts/ | R1 | 397K | recommended, general apparel, fits carousel |

Recommended: `top5pct-custom-shirt-pictures.jpg` (custom-shirts/, R1, May 11, 397K).

### 4. Fix slide-R — not a cross-sell (rule violation)

slide-R must be a cross-sell to an R1-R3 image from another category. The current image (top5pct-screenprinting-shirts.jpg, custom-shirts/, R1) is same-category and is also already used in C-4.

A cross-sell to embroidery, vinyl, or another specialty method is needed. Image selection depends on what the revised slide title will reference. Title content is a separate task. For image selection, any R1-R3 file from a non-screen-printing category qualifies.

Suggested cross-sell dirs: embroidery/, vinyl/, holographic-shirts/, or any other specialty category page with R1-R3 images.

---

## After All Suggestions Applied

| slot | image | path | round | status |
|---|---|---|---|---|
| hero | top5pct-screenprinted-shirts-joliet.jpg | custom-shirts/ | R1 | good |
| C-1 | top5pct-screenprint-custom-shirts.jpg | custom-shirts/ | R1 | good |
| C-2 | top5pct-screenprinted-shirts-in-joliet.jpg | custom-shirts/ | R1 | good |
| C-3 | top5pct-custom-shirt-pictures.jpg | custom-shirts/ | R1 | good (after fix) |
| C-4 | top5pct-screenprinting-shirts.jpg | custom-shirts/ | R1 | good |
| C-5 | top5pct-screenprinting-joliet.jpg | screen-printing/ | R3 | good |
| C-6 | top5pct-screenprinted-shirts-joliet.jpg | screen-printing/ | R3 | good |
| C-7 | top5pct-screenprinting-company-shirts.jpg | screen-printing/ | R3 | good |
| C-8 | top5pct-screenprinting-hoodies-joliet.jpg | screen-printing/ | R3 | good |
| C-9 | top5pct-screenprinting-t-shirts-joliet.jpg | screen-printing/ | R2+ | good |
| C-10 | top5pct-screenprinting-t-shirt-maker-joliet.jpg | screen-printing/ | R3 | good |
| card-1 | top5pct-neon-vinyl-shirts.jpg | custom-shirts/ | R1 | good |
| card-2 | top5pct-vinyl-caps.jpg | custom-shirts/ | R1 | good |
| card-detailed image1 | top5pct-long-lasting-graphic-shirts.jpg | custom-shirts/ | R2 | good (after fix) |
| slide-R | (cross-sell TBD) | TBD | R1-R3 | pending, rule fix required |
| slide-L | top5pct-vinyl-shirts.jpg | vinyl/ | R3 | good, cross-sell (after fix) |

All 15 blade image slots R1-R3 after fixes (slide-R pending cross-sell selection). Carousel stays at 10 after all fixes. R4 audit ready once slide-R cross-sell is confirmed.

---

## File Usage Notes

`top5pct-screenprinting-shirts.jpg` (custom-shirts/, R1) is used in both C-4 and slide-R. If slide-R is replaced with a cross-sell, this duplication is resolved.

`top5pct-screenprinting-joliet.jpg` (screen-printing/, R3) is used in C-5 on this page and as slide-L on the embroidery page (as of Jun 25). Multi-page use is permitted.
