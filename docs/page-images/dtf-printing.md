# DTF Printing — Image Status

**Blade:** `resources/views/pages/custom-apparel/dtf-transfers.blade.php`
**URL:** `/custom-apparel/printing-options/dtf-printing`
**Dir:** `public/images/dtf-transfers/` — 13 files total.
**Verified:** Jun 25, 2026

---

## Dir Inventory

| file | size | date | round | note |
|---|---|---|---|---|
| toptpct-dtf-transfer-pricing.jpg | 201K | Mar 16 | Initial | filename typo: "toptpct" |
| toptpct-banner-dtf-transfers-joliet.jpg | 411K | Mar 16 | Initial | filename typo: "toptpct" |
| top5pct-custom-sweatshirts.jpg | 170K | May 11 | R1 | |
| top5pct-dtf-zip-up-hoodies.jpg | 284K | May 11 | R1 | |
| top5pct-custom-t-shirts-dtf.jpg | 387K | May 11 | R1 | |
| top5pct-dtf-hoodies-joliet.jpg | 512K | May 11 | R1 | |
| top5pct-custom-shirt-with-picture.jpg | 611K | May 11 | R1 | |
| top5pct-custom-bowling-shirts-dtf.jpg | 238K | Jun 2 | R2 | |
| top5pct-dtf-t-shirt-maker.jpg | 262K | Jun 2 | R2 | |
| top5pct-custom-dtf-shirts.jpg | 276K | Jun 2 | R2 | |
| top5pct-dtf-t-shirt-printing.jpg | 276K | Jun 2 | R2 | |
| top5pct-dtf-tees.jpg | 310K | Jun 2 | R2 | |
| top5pct-custom-baby-clothing-joliet.jpg | 330K | Jun 2 | R2 | |

No R3 files exist in dtf-transfers/ dir as of Jun 25, 2026.

Two files have "toptpct" instead of "top5pct" in the filename (missing the "5"). Both are Initial round. Neither is appropriate for blade use in current state.

---

## Image Inventory

| section / category | image | path | round | file date | size | status |
|---|---|---|---|---|---|---|
| hero — category-hero | top5pct-dtf-t-shirt-printing.jpg | dtf-transfers/ | R2 | Jun 2 | 276K | good |
| C-1 — carousel-rotating-images | top5pct-dtf-tees.jpg | dtf-transfers/ | R2 | Jun 2 | 310K | good |
| C-2 — carousel-rotating-images | top5pct-dtf-t-shirt-maker.jpg | dtf-transfers/ | R2 | Jun 2 | 262K | good |
| C-3 — carousel-rotating-images | top5pct-custom-t-shirts-dtf.jpg | dtf-transfers/ | R1 | May 11 | 387K | good |
| C-4 — carousel-rotating-images | top5pct-dtf-hoodies-joliet.jpg | dtf-transfers/ | R1 | May 11 | 512K | good |
| card-1 — card-image-with-text | top5pct-dtf-zip-up-hoodies.jpg | dtf-transfers/ | R1 | May 11 | 284K | good |
| card-2 — card-image-with-text (imagePosition right) | top5pct-custom-dtf-shirts.jpg | dtf-transfers/ | R2 | Jun 2 | 276K | good |
| card-detailed image1 — card-detailed-info | top5pct-custom-bowling-shirts-dtf.jpg | dtf-transfers/ | R2 | Jun 2 | 238K | good |
| slide-R — card-banner-slide-in (direction right) | toptpct-banner-dtf-transfers-joliet.jpg | dtf-transfers/ | Initial | Mar 16 | 411K | initial, filename typo, not a cross-sell |
| slide-L — card-banner-slide-in (direction left) | top5pct-custom-embroidery-shops-near-me-joliet.jpg | custom-shirts/ | — | — | — | MISSING FILE |

Note: `card-detailed-info` on this page uses only `image1`. There is no `image2` slot on this component instance.

---

## R1-R3 Placement Summary

**Filled:** 8 of 10 slots
**Remaining:** 2 slots

| slot | image | size | issue |
|---|---|---|---|
| slide-R | toptpct-banner-dtf-transfers-joliet.jpg | 411K | Initial, filename typo, not a cross-sell |
| slide-L | top5pct-custom-embroidery-shops-near-me-joliet.jpg | — | MISSING FILE |

---

## Rule Violations

### slide-R — Initial image, filename typo, not a cross-sell

Three issues:

1. **Initial round** — `toptpct-banner-dtf-transfers-joliet.jpg` is a Mar 16 Initial file (411K). It does not meet the R1-R3 standard.
2. **Filename typo** — filename reads "toptpct" instead of "top5pct" (missing the "5"). Same pattern seen on two other files in this dir (`toptpct-dtf-transfer-pricing.jpg`).
3. **Not a cross-sell** — slide-R must always be a cross-sell to an R1-R3 image from another category. The current image is from dtf-transfers/ (same-category). The slide title "DTF Transfers, Full Color, Any Fabric, Same Day Available" is same-page CTA content, not cross-sell language.

All three issues require replacement. The file should not be renamed and kept — it is Initial and therefore not suitable for any blade slot.

### slide-L — broken image path

The blade references `/images/custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg`. This file does not exist in custom-shirts/. It exists only in `embroidery/`. The path produces a broken image on the page.

Even with the correct path (embroidery/), the file is Initial (28K, Mar 16) and does not qualify as a valid cross-sell. Cross-sells must be R1-R3.

The slide title "DTF or Embroidery, We Print Both for Any Fabric" makes the correct cross-sell direction clear — an embroidery/ R1-R3 file is needed.

Note: this is the same broken path referenced on the screen-printing blade slide-L, which was already fixed on that page (Jun 25). The dtf-transfers blade still references the broken custom-shirts/ path.

---

## Carousel

**Current slots:** 4
**Target:** 4. May exceed 4 if all non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | status |
|---|---|
| hero | R2 — good |
| card-1 | R1 — good |
| card-2 | R2 — good |
| card-detailed image1 | R2 — good |
| slide-R | Initial — not filled |
| slide-L | Missing file — not filled |

Two non-carousel slots are not properly filled. The carousel CANNOT exceed 4 in current state. Carousel stays at 4. Once slide-R and slide-L are fixed, the carousel may expand to include unused R1-R2 dir files (see below).

---

## File Usage Count

| file | path | size | round | used in |
|---|---|---|---|---|
| top5pct-dtf-t-shirt-printing.jpg | dtf-transfers/ | 276K | R2 | hero only |
| top5pct-dtf-tees.jpg | dtf-transfers/ | 310K | R2 | C-1 only |
| top5pct-dtf-t-shirt-maker.jpg | dtf-transfers/ | 262K | R2 | C-2 only |
| top5pct-custom-t-shirts-dtf.jpg | dtf-transfers/ | 387K | R1 | C-3 only |
| top5pct-dtf-hoodies-joliet.jpg | dtf-transfers/ | 512K | R1 | C-4 only |
| top5pct-dtf-zip-up-hoodies.jpg | dtf-transfers/ | 284K | R1 | card-1 only |
| top5pct-custom-dtf-shirts.jpg | dtf-transfers/ | 276K | R2 | card-2 only |
| top5pct-custom-bowling-shirts-dtf.jpg | dtf-transfers/ | 238K | R2 | card-detailed image1 only |
| toptpct-banner-dtf-transfers-joliet.jpg | dtf-transfers/ | 411K | Initial | slide-R only (to be replaced) |
| top5pct-custom-sweatshirts.jpg | dtf-transfers/ | 170K | R1 | unused |
| top5pct-custom-shirt-with-picture.jpg | dtf-transfers/ | 611K | R1 | unused |
| top5pct-custom-baby-clothing-joliet.jpg | dtf-transfers/ | 330K | R2 | unused |
| toptpct-dtf-transfer-pricing.jpg | dtf-transfers/ | 201K | Initial | unused (filename typo) |

3 unused R1-R2 files available (top5pct-custom-sweatshirts.jpg, top5pct-custom-shirt-with-picture.jpg, top5pct-custom-baby-clothing-joliet.jpg). These are carousel expansion candidates once slide-R and slide-L are resolved.

---

## Cross-Sell Dir Reference

### For slide-R — title "DTF Transfers, Full Color, Any Fabric, Same Day Available"

Title is generic same-page CTA language. A cross-sell to a complementary printing method is appropriate. The page body references screen printing, dye sublimation, and embroidery as related services.

**screen-printing/** — all R2+ or R3:

| file | size | round | note |
|---|---|---|---|
| top5pct-screenprinting-joliet.jpg | 397K | R3 | used as embroidery slide-L |
| top5pct-screenprinting-company-shirts.jpg | 319K | R3 | available |
| top5pct-screenprinting-t-shirt-maker-joliet.jpg | 318K | R3 | available |
| top5pct-screenprinting-t-shirts-joliet.jpg | 495K | R2+ | available |

**sublimation/** — R1-R2+ range:

| file | size | round | note |
|---|---|---|---|
| top5pct-dye-sublimation-jerseys.jpg | 294K | R2+ | used in sublimation carousel |
| top5pct-sublimation-team-shirts.jpg | 385K | R2 | unused in blade (replaced Jun 25), available |

### For slide-L — title "DTF or Embroidery, We Print Both for Any Fabric"

**embroidery/** — confirmed R1-R3 files:

| file | size | round | note |
|---|---|---|---|
| top5pct-embroidery-in-joliet.jpg | 379K | R1 | available, embroidery context |
| top5pct-embroidered-cap-embroidered-beanies-joliet.jpg | 346K | R3 | available, R3 |
| top5pct-stitched-embroidered-shirts.jpg | 211K | R2 | available, embroidery context |

---

## Immediate Suggestions

### 1. Fix slide-R — replace with R1-R3 cross-sell from another category

| candidate | path | round | size | note |
|---|---|---|---|---|
| top5pct-screenprinting-company-shirts.jpg | screen-printing/ | R3 | 319K | recommended, R3, complementary service |
| top5pct-screenprinting-t-shirt-maker-joliet.jpg | screen-printing/ | R3 | 318K | alternative, R3 |
| top5pct-sublimation-team-shirts.jpg | sublimation/ | R2 | 385K | alternative, unused in blade |

Recommended: `top5pct-screenprinting-company-shirts.jpg` (screen-printing/, R3, Jun 8, 319K). Screen printing is the most referenced complementary service in the blade content and is R3.

Note: once slide-R is fixed, rename `toptpct-banner-dtf-transfers-joliet.jpg` to `top5pct-banner-dtf-transfers-joliet.jpg` to correct the filename typo. Also rename `toptpct-dtf-transfer-pricing.jpg` to `top5pct-dtf-transfer-pricing.jpg` to match.

### 2. Fix slide-L — fix broken path, replace with R1-R3 embroidery cross-sell

| candidate | path | round | size | note |
|---|---|---|---|---|
| top5pct-embroidered-cap-embroidered-beanies-joliet.jpg | embroidery/ | R3 | 346K | recommended, R3, embroidery context |
| top5pct-embroidery-in-joliet.jpg | embroidery/ | R1 | 379K | alternative, R1 |
| top5pct-stitched-embroidered-shirts.jpg | embroidery/ | R2 | 211K | alternative, R2 |

Recommended: `top5pct-embroidered-cap-embroidered-beanies-joliet.jpg` (embroidery/, R3, Jun 8, 346K). R3 file, directly matches the embroidery cross-sell intent of the slide title.

### 3. Carousel expansion (after slides are fixed)

Once slide-R and slide-L are both R1-R3, all non-carousel slots will be filled. The carousel may then expand beyond 4 using the 3 unused R1-R2 dtf-transfers/ files:

| file | size | round |
|---|---|---|
| top5pct-custom-baby-clothing-joliet.jpg | 330K | R2 |
| top5pct-custom-shirt-with-picture.jpg | 611K | R1 |
| top5pct-custom-sweatshirts.jpg | 170K | R1 |

Adding all 3 would bring the carousel to 7 slots, all R1-R3 same-dir.

---

## After All Suggestions Applied

| slot | image | path | round | status |
|---|---|---|---|---|
| hero | top5pct-dtf-t-shirt-printing.jpg | dtf-transfers/ | R2 | good |
| C-1 | top5pct-dtf-tees.jpg | dtf-transfers/ | R2 | good |
| C-2 | top5pct-dtf-t-shirt-maker.jpg | dtf-transfers/ | R2 | good |
| C-3 | top5pct-custom-t-shirts-dtf.jpg | dtf-transfers/ | R1 | good |
| C-4 | top5pct-dtf-hoodies-joliet.jpg | dtf-transfers/ | R1 | good |
| card-1 | top5pct-dtf-zip-up-hoodies.jpg | dtf-transfers/ | R1 | good |
| card-2 | top5pct-custom-dtf-shirts.jpg | dtf-transfers/ | R2 | good |
| card-detailed image1 | top5pct-custom-bowling-shirts-dtf.jpg | dtf-transfers/ | R2 | good |
| slide-R | top5pct-screenprinting-company-shirts.jpg | screen-printing/ | R3 | good, cross-sell |
| slide-L | top5pct-embroidered-cap-embroidered-beanies-joliet.jpg | embroidery/ | R3 | good, cross-sell |

All 10 blade image slots R1-R3. No rule violations. Carousel eligible for expansion to 7 using 3 unused R1-R2 dtf-transfers/ files. R4 audit ready after fixes and optional carousel expansion.

---

## Notes

- `toptpct-banner-dtf-transfers-joliet.jpg` and `toptpct-dtf-transfer-pricing.jpg` both have "toptpct" filename typos (missing the "5"). Both are Initial round. Both should be renamed once slide-R is replaced.
- `toptpct-dtf-transfer-pricing.jpg` is not referenced by the blade and appears to be a pricing chart image. It is unused.
- slide-L uses the same broken `custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` path seen on the screen-printing blade before that page was fixed Jun 25. The path is a copy-paste error; the file only exists in embroidery/.
- R4 audit deferred until suggestions 1 and 2 are applied.
