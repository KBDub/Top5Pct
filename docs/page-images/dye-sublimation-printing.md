# Dye Sublimation Printing — Image Status

**Blade:** `resources/views/pages/custom-apparel/dye-sublimation.blade.php`
**URL:** `/custom-apparel/printing-options/dye-sublimation-printing`
**Dir:** `public/images/sublimation/` — 14 files total.
**Verified:** Jun 25, 2026

---

## Dir Inventory

| file | size | date | round |
|---|---|---|---|
| top5pct-dye-sublimation-shirts.jpg | 333K | May 11 | R1 |
| top5pct-sublimation-shirt-printer.jpg | 345K | May 11 | R1 |
| top5pct-dye-sublimated-longsleeve-shirt-joliet.jpg | 438K | May 11 | R1 |
| top5pct-custom-sublimated-towels.jpg | 506K | May 11 | R1 |
| top5pct-sublimation-shirts.jpg | 571K | May 11 | R1 |
| top5pct-sublimation-shirt.jpg | 638K | May 11 | R1 |
| top5pct-custom-face-mask-sublimated.jpg | 688K | May 11 | R1 |
| top5pct-dye-sublimation-custom-shirt-joliet.jpg | 302K | Jun 2 | R2 |
| top5pct-custom-sublimation-shirts.jpg | 331K | Jun 2 | R2 |
| top5pct-sublmation-team-shirts.jpg | 385K | Jun 2 | R2 |
| top5pct-dye-sublimation-jerseys.jpg | 294K | Jun 3 | R2+ |
| top5pct-sublimation-tees.jpg | 365K | Jun 3 | R2+ |
| top5pct-sublimated-graphic-tees.jpg | 402K | Jun 3 | R2+ |
| top5pct-dye-sublimation-tees.jpg | 544K | Jun 3 | R2+ |

Note: `top5pct-sublmation-team-shirts.jpg` has a typo in the filename ("sublmation" instead of "sublimation"). Low priority. File is R2 and in active use at slide-R.

All 14 sublimation/ files are referenced by the blade. No unused same-dir files remain.

---

## Image Inventory

| section / category | image | path | round | file date | size | status |
|---|---|---|---|---|---|---|
| hero — category-hero | top5pct-dye-sublimation-custom-shirt-joliet.jpg | sublimation/ | R2 | Jun 2 | 302K | good |
| C-1 — carousel-rotating-images | top5pct-sublimation-shirts.jpg | sublimation/ | R1 | May 11 | 571K | good |
| C-2 — carousel-rotating-images | top5pct-custom-face-mask-sublimated.jpg | sublimation/ | R1 | May 11 | 688K | good |
| C-3 — carousel-rotating-images | top5pct-custom-sublimated-towels.jpg | sublimation/ | R1 | May 11 | 506K | good |
| C-4 — carousel-rotating-images | top5pct-dye-sublimated-longsleeve-shirt-joliet.jpg | sublimation/ | R1 | May 11 | 438K | good |
| C-5 — carousel-rotating-images | top5pct-dye-sublimation-jerseys.jpg | sublimation/ | R2+ | Jun 3 | 294K | good |
| C-6 — carousel-rotating-images | top5pct-dye-sublimation-tees.jpg | sublimation/ | R2+ | Jun 3 | 544K | good |
| C-7 — carousel-rotating-images | top5pct-sublimated-graphic-tees.jpg | sublimation/ | R2+ | Jun 3 | 402K | good |
| C-8 — carousel-rotating-images | top5pct-sublimation-tees.jpg | sublimation/ | R2+ | Jun 3 | 365K | good |
| card-1 — card-image-with-text | top5pct-dye-sublimation-shirts.jpg | sublimation/ | R1 | May 11 | 333K | good |
| card-2 — card-image-with-text (imagePosition right) | top5pct-sublimation-shirt-printer.jpg | sublimation/ | R1 | May 11 | 345K | good |
| card-detailed image1 — card-detailed-info | top5pct-sublimation-shirt.jpg | sublimation/ | R1 | May 11 | 638K | good |
| slide-L — card-banner-slide-in (direction left) | top5pct-custom-sublimation-shirts.jpg | sublimation/ | R2 | Jun 2 | 331K | good, same-category accepted |
| slide-R — card-banner-slide-in (direction right) | top5pct-sublmation-team-shirts.jpg | sublimation/ | R2 | Jun 2 | 385K | rule violation, see notes |

Note: `card-detailed-info` on this page uses only `image1`. There is no `image2` slot on this component instance.

---

## R1-R3 Placement Summary

**Filled:** 14 of 14 slots
**Remaining (Initial):** 0

All 14 blade image slots are R1-R3. No Initial files anywhere on this page.

---

## Rule Violations

### slide-R — not a cross-sell

The rule requires slide-R to always be a cross-sell to an R1-R3 image from another category. The current slide-R uses `top5pct-sublmation-team-shirts.jpg` (sublimation/, R2, Jun 2) — a same-dir sublimation image. This is not a cross-sell.

The slide title "Combine Dye Sub With Flock, Glitter, or Embroidery" references other categories explicitly, which is cross-sell language. The image must match that intent by coming from a different category dir.

All 14 sublimation/ dir files are already placed on this page. No unused same-dir file is available. The slide-R image must come from another category.

---

## Carousel

**Current slots:** 8
**Target:** 4. May exceed 4 if all non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | status |
|---|---|
| hero | R2 — good |
| card-1 | R1 — good |
| card-2 | R1 — good |
| card-detailed image1 | R1 — good |
| slide-L | R2 — good, same-category accepted |
| slide-R | R2 — filled (separate rule violation, does not affect carousel count) |

All non-carousel slots are R1-R3. Carousel stays at 8.

---

## File Usage Count

| file | path | size | round | used in |
|---|---|---|---|---|
| top5pct-dye-sublimation-custom-shirt-joliet.jpg | sublimation/ | 302K | R2 | hero only |
| top5pct-custom-sublimation-shirts.jpg | sublimation/ | 331K | R2 | slide-L only |
| top5pct-sublmation-team-shirts.jpg | sublimation/ | 385K | R2 | slide-R only |
| top5pct-dye-sublimation-jerseys.jpg | sublimation/ | 294K | R2+ | C-5 only |
| top5pct-sublimation-tees.jpg | sublimation/ | 365K | R2+ | C-8 only |
| top5pct-sublimated-graphic-tees.jpg | sublimation/ | 402K | R2+ | C-7 only |
| top5pct-dye-sublimation-tees.jpg | sublimation/ | 544K | R2+ | C-6 only |
| top5pct-dye-sublimation-shirts.jpg | sublimation/ | 333K | R1 | card-1 only |
| top5pct-sublimation-shirt-printer.jpg | sublimation/ | 345K | R1 | card-2 only |
| top5pct-dye-sublimated-longsleeve-shirt-joliet.jpg | sublimation/ | 438K | R1 | C-4 only |
| top5pct-custom-sublimated-towels.jpg | sublimation/ | 506K | R1 | C-3 only |
| top5pct-sublimation-shirts.jpg | sublimation/ | 571K | R1 | C-1 only |
| top5pct-sublimation-shirt.jpg | sublimation/ | 638K | R1 | card-detailed image1 only |
| top5pct-custom-face-mask-sublimated.jpg | sublimation/ | 688K | R1 | C-2 only |

Every slot has a unique file. No file is used in more than one slot.

---

## Cross-Sell Dir Reference (for slide-R)

The slide-R title "Combine Dye Sub With Flock, Glitter, or Embroidery" names the appropriate cross-sell categories. Confirmed R1-R3 options:

**embroidery/** — referenced directly in slide title:

| file | size | round | note |
|---|---|---|---|
| top5pct-embroidery-in-joliet.jpg | 379K | R1 | embroidery context, large file |
| top5pct-embroidered-cap-embroidered-beanies-joliet.jpg | 346K | R3 | R3, embroidery context |
| top5pct-embroidered-bag.jpg | 304K | R2 | embroidery context |
| top5pct-stitched-embroidered-shirts.jpg | 211K | R2 | embroidery context |

Note: all embroidery/ R1-R3 files are currently placed in the embroidery blade. Multi-page use is permitted.

**glitter-shirts/** — referenced in slide title ("Glitter"):

From glitter-shirts page audit: `top5pct-custom-glitter-sweatshirts.jpg` (glitter-shirts/, R2, Jun 2, 316K) is unused after the carousel drop on that page. Available for cross-sell use here.

**holographic-shirts/** — adjacent specialty category:

| file | size | round | note |
|---|---|---|---|
| top5pct-holographic-vinyl-hoodie-foil.jpg | 527K | R3 | holographic, R3 |
| top5pct-holographic-baby-shirts.jpg | 231K | R3 | holographic, R3 |

---

## Immediate Suggestion

### 1. Fix slide-R — replace with a cross-sell from embroidery/, glitter-shirts/, or holographic-shirts/

The slide title "Combine Dye Sub With Flock, Glitter, or Embroidery" makes embroidery or glitter the most natural cross-sell choice. The image must come from a dir other than sublimation/.

| candidate | path | round | size | note |
|---|---|---|---|---|
| top5pct-custom-glitter-sweatshirts.jpg | glitter-shirts/ | R2 | 316K | recommended, matches "Glitter" in slide title, unused on glitter page |
| top5pct-embroidery-in-joliet.jpg | embroidery/ | R1 | 379K | alternative, matches "Embroidery" in slide title |
| top5pct-embroidered-cap-embroidered-beanies-joliet.jpg | embroidery/ | R3 | 346K | alternative, R3 |
| top5pct-holographic-vinyl-hoodie-foil.jpg | holographic-shirts/ | R3 | 527K | alternative, R3 |

Recommended: `top5pct-custom-glitter-sweatshirts.jpg` (glitter-shirts/, R2, Jun 2, 316K). It directly matches "Glitter" in the slide title, is unused on the glitter page, and is R2.

---

## After Suggestion Applied

| slot | image | path | round | status |
|---|---|---|---|---|
| hero | top5pct-dye-sublimation-custom-shirt-joliet.jpg | sublimation/ | R2 | good |
| C-1 | top5pct-sublimation-shirts.jpg | sublimation/ | R1 | good |
| C-2 | top5pct-custom-face-mask-sublimated.jpg | sublimation/ | R1 | good |
| C-3 | top5pct-custom-sublimated-towels.jpg | sublimation/ | R1 | good |
| C-4 | top5pct-dye-sublimated-longsleeve-shirt-joliet.jpg | sublimation/ | R1 | good |
| C-5 | top5pct-dye-sublimation-jerseys.jpg | sublimation/ | R2+ | good |
| C-6 | top5pct-dye-sublimation-tees.jpg | sublimation/ | R2+ | good |
| C-7 | top5pct-sublimated-graphic-tees.jpg | sublimation/ | R2+ | good |
| C-8 | top5pct-sublimation-tees.jpg | sublimation/ | R2+ | good |
| card-1 | top5pct-dye-sublimation-shirts.jpg | sublimation/ | R1 | good |
| card-2 | top5pct-sublimation-shirt-printer.jpg | sublimation/ | R1 | good |
| card-detailed image1 | top5pct-sublimation-shirt.jpg | sublimation/ | R1 | good |
| slide-L | top5pct-custom-sublimation-shirts.jpg | sublimation/ | R2 | good, same-category accepted |
| slide-R | top5pct-custom-glitter-sweatshirts.jpg | glitter-shirts/ | R2 | good, cross-sell |

All 14 blade image slots R1-R3. Carousel stays at 8. No Initial files. No rule violations. R4 audit ready.

---

## Notes

- `top5pct-sublmation-team-shirts.jpg` has a typo in the filename ("sublmation"). A rename to remove the typo would require a blade update. Low priority.
- slide-L title "All Over Print Apparel With No Minimums" is same-page CTA language, not a cross-sell title. slide-L rule permits same-category; this is accepted as-is.
- R4 audit deferred until slide-R suggestion is applied.
