# Corporate Wear Shirts — Image Status

**Blade:** `resources/views/pages/custom-apparel/group-wear/corporate-wear-shirts.blade.php`
**URL:** `/custom-apparel/group-wear/corporate-wear-shirts`
**Primary dir:** `public/images/corporate-wear/` — 16 files
**Cross-sell dirs:** `public/images/vehicle-magnets/`, `public/images/spirit-wear/`
**Verified:** Jun 25, 2026

---

## Round Reference

| round | date | note |
|---|---|---|
| Initial | Mar 16/17, 2026 | |
| R1 | May 11, 2026 | |
| R2 | Jun 2, 2026 | |
| R3 | Jun 8, 2026 | |

---

## Dir Inventory — corporate-wear/

| file | size | date | round | placed in blade |
|---|---|---|---|---|
| top5pct-custom-business-shirts.jpg | 415K | May 11 | R1 | hero |
| top5pct-custom-apron-joliet.jpg | 429K | May 11 | R1 | C-1 |
| top5pct-custom-aprons-joliet.jpg | 392K | May 11 | R1 | C-2 |
| top5pct-custom-company-apparel.jpg | 276K | Jun 2 | R2 | C-3 |
| top5pct-custom-pocket-shirt-joliet.jpg | 363K | May 11 | R1 | C-4 |
| top5pct-landscaping-clothing-joliet.jpg | 566K | May 11 | R1 | card-1 |
| top5pct-lawn-care-clothing.jpg | 477K | May 11 | R1 | card-2 |
| top5pct-safety-work-gear-joliet.jpg | 414K | May 11 | R1 | card-2image image1 |
| top5pct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg | 127K | Mar 16 | **Initial** | card-2image image2 |
| top5pct-custom-cap-hat-joliet-shorewood-rockdale.jpg | 40K | Mar 16 | **Initial** | card-3 |
| top5pct-custom-corporate-t-shirts-joliet-shorewood.jpg | 44K | Mar 16 | **Initial** | card-detailed image1 |
| top5pct-custom-hoodie-pullover-joliet-shorewood.jpg | 41K | Mar 16 | **Initial** | card-detailed image2 |
| top5pct-article-corporate-wear-pic1.jpg | 14K | Mar 16 | Initial | no — unused |
| top5pct-article-corporate-wear-pic2.jpg | 15K | Mar 16 | Initial | no — unused |
| top5pct-custom-button-up-shirt-joliet-shorewood.jpg | 42K | Mar 16 | Initial | no — unused |
| top5pct-custom-polo-shirts-joliet-shorewood-crest-hill.jpg | 30K | Mar 16 | Initial | no — unused |

Dir summary: 7 Initial (Mar 16), 6 R1 (May 11), 1 R2 (Jun 2), 0 R3. 16 files total.

**Critical finding:** All 6 R1 files and the 1 R2 file are already placed in the blade. No unused R1-R3 files remain in corporate-wear/. The 4 unused files are all Initial. No same-dir swaps are available for the 4 Initial body card slots. All four require new R3 or R4 images.

---

## Blade Image Slots

Slots in blade order. Hero is first, carousel next, then body, then slides.

| slot | component | image | dir | date | round | size | status |
|---|---|---|---|---|---|---|---|
| hero | category-hero | top5pct-custom-business-shirts.jpg | corporate-wear/ | May 11 | R1 | 415K | good |
| C-1 | carousel-rotating-images | top5pct-custom-apron-joliet.jpg | corporate-wear/ | May 11 | R1 | 429K | good |
| C-2 | carousel-rotating-images | top5pct-custom-aprons-joliet.jpg | corporate-wear/ | May 11 | R1 | 392K | good |
| C-3 | carousel-rotating-images | top5pct-custom-company-apparel.jpg | corporate-wear/ | Jun 2 | R2 | 276K | good |
| C-4 | carousel-rotating-images | top5pct-custom-pocket-shirt-joliet.jpg | corporate-wear/ | May 11 | R1 | 363K | good |
| card-1 | card-image-with-text | top5pct-landscaping-clothing-joliet.jpg | corporate-wear/ | May 11 | R1 | 566K | good |
| card-2 | card-image-with-text (imagePosition right) | top5pct-lawn-care-clothing.jpg | corporate-wear/ | May 11 | R1 | 477K | good |
| card-2image image1 | card-2image-with-text | top5pct-safety-work-gear-joliet.jpg | corporate-wear/ | May 11 | R1 | 414K | good |
| card-2image image2 | card-2image-with-text | top5pct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg | corporate-wear/ | Mar 16 | **Initial** | 127K | violation: Initial; marketing banner image, not a product photo |
| card-3 | card-image-with-text | top5pct-custom-cap-hat-joliet-shorewood-rockdale.jpg | corporate-wear/ | Mar 16 | **Initial** | 40K | violation: Initial; 40K very small |
| card-detailed image1 | card-detailed-info | top5pct-custom-corporate-t-shirts-joliet-shorewood.jpg | corporate-wear/ | Mar 16 | **Initial** | 44K | violation: Initial; 44K very small |
| card-detailed image2 | card-detailed-info | top5pct-custom-hoodie-pullover-joliet-shorewood.jpg | corporate-wear/ | Mar 16 | **Initial** | 41K | violation: Initial; 41K very small |
| slide-R | card-banner-slide-in (direction right) | top5pct-truck-sign-magnets-joliet.jpg | vehicle-magnets/ | Jun 2 | R2 | 364K | good — vehicle magnets cross-sell for business branding |
| slide-L | card-banner-slide-in (direction left) | top5pct-volleyball-team-uniforms-joliet.jpg | spirit-wear/ | Jun 2 | R2 | 606K | good — spirit wear / team apparel cross-sell |

---

## R1-R3 Placement Summary

**Total image slots with an image path referenced:** 14
**Confirmed R1-R3:** 10

| slot | image | round | status |
|---|---|---|---|
| hero | top5pct-custom-business-shirts.jpg | R1 | good |
| C-1 | top5pct-custom-apron-joliet.jpg | R1 | good |
| C-2 | top5pct-custom-aprons-joliet.jpg | R1 | good |
| C-3 | top5pct-custom-company-apparel.jpg | R2 | good |
| C-4 | top5pct-custom-pocket-shirt-joliet.jpg | R1 | good |
| card-1 | top5pct-landscaping-clothing-joliet.jpg | R1 | good |
| card-2 | top5pct-lawn-care-clothing.jpg | R1 | good |
| card-2image image1 | top5pct-safety-work-gear-joliet.jpg | R1 | good |
| slide-R | top5pct-truck-sign-magnets-joliet.jpg | R2 | good — vehicle magnets cross-sell |
| slide-L | top5pct-volleyball-team-uniforms-joliet.jpg | R2 | good — spirit wear cross-sell |

**Initial (not R1-R3) — 4 slots remaining to fill:**

| slot | image | round | size | issue |
|---|---|---|---|---|
| card-2image image2 | top5pct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg | Initial | 127K | marketing banner, not a product photo; no same-dir R1+ replacement available |
| card-3 | top5pct-custom-cap-hat-joliet-shorewood-rockdale.jpg | Initial | 40K | small Initial cap image; no same-dir R1+ replacement available |
| card-detailed image1 | top5pct-custom-corporate-t-shirts-joliet-shorewood.jpg | Initial | 44K | small Initial t-shirt image; no same-dir R1+ replacement available |
| card-detailed image2 | top5pct-custom-hoodie-pullover-joliet-shorewood.jpg | Initial | 41K | small Initial hoodie image; no same-dir R1+ replacement available |

**R1-R3 slots filled: 10 of 14**
**Remaining to fill: 4 of 14**

---

## Carousel

**Current slots:** 4
**Target:** 4. May exceed 4 only if ALL non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | image | round | status |
|---|---|---|---|
| hero | top5pct-custom-business-shirts.jpg | R1 | good |
| card-1 | top5pct-landscaping-clothing-joliet.jpg | R1 | good |
| card-2 | top5pct-lawn-care-clothing.jpg | R1 | good |
| card-2image image1 | top5pct-safety-work-gear-joliet.jpg | R1 | good |
| card-2image image2 | top5pct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg | Initial | not filled |
| card-3 | top5pct-custom-cap-hat-joliet-shorewood-rockdale.jpg | Initial | not filled |
| card-detailed image1 | top5pct-custom-corporate-t-shirts-joliet-shorewood.jpg | Initial | not filled |
| card-detailed image2 | top5pct-custom-hoodie-pullover-joliet-shorewood.jpg | Initial | not filled |
| slide-R | top5pct-truck-sign-magnets-joliet.jpg | R2 | good |
| slide-L | top5pct-volleyball-team-uniforms-joliet.jpg | R2 | good |

Over-target condition is NOT met — 4 non-carousel slots are Initial. Carousel must stay at 4. It is already at 4. **No carousel changes needed.**

Carousel round quality: C-1, C-2, C-4 are R1; C-3 is R2. All four are same-dir (corporate-wear/). Carousel is correct as-is. No carousel swaps needed or available — no same-dir R3 files exist yet.

---

## Rule Violations

**None.** Both slides are proper R2 cross-sells from different category dirs.

| slot | direction | image | dir | date | round | cross-sell | status |
|---|---|---|---|---|---|---|---|
| slide-R | right | top5pct-truck-sign-magnets-joliet.jpg | vehicle-magnets/ | Jun 2 | R2 | yes — vehicle magnets, business branding tie-in | good |
| slide-L | left | top5pct-volleyball-team-uniforms-joliet.jpg | spirit-wear/ | Jun 2 | R2 | yes — spirit wear / team uniforms | good |

---

## Duplicate Image Usage

None. Every placed image appears in exactly one slot.

---

## Immediate Fixes Available

**None.** All R1 and R2 files in corporate-wear/ are already placed in the blade. The 4 unused corporate-wear/ files are all Initial (14K-42K) and are not suitable replacements for the 4 Initial body slots — swapping one Initial for another does not improve round status. No cross-dir R1-R3 files are contextually appropriate substitutes for the 4 body slots, which all show corporate-wear-specific product imagery (caps, t-shirts, hoodies, paired product photo).

The 4 Initial slots must wait for R3 or R4 delivery of new corporate-wear/ images.

---

## Changes Needed

All changes listed below require new photography. None can be resolved with currently available files.

| priority | slot | current image | round | size | needed |
|---|---|---|---|---|---|
| 1 | card-2image image2 | top5pct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg | Initial | 127K | New R3+ corporate-wear product photo to pair with the safety-work-gear image1 in the same 2-image card. Subject should be branded apparel, not a marketing banner. |
| 2 | card-3 | top5pct-custom-cap-hat-joliet-shorewood-rockdale.jpg | Initial | 40K | New R3+ branded cap or accessory photo. This card's body copy is entirely about caps and hats for corporate use. |
| 3 | card-detailed image1 | top5pct-custom-corporate-t-shirts-joliet-shorewood.jpg | Initial | 44K | New R3+ corporate t-shirt photo for the "Importance of Corporate Wear" editorial card. |
| 4 | card-detailed image2 | top5pct-custom-hoodie-pullover-joliet-shorewood.jpg | Initial | 41K | New R3+ corporate hoodie or pullover photo. Paired with image1 in the same card-detailed component. |

---

## File Usage Count

| file | dir | size | date | round | used in |
|---|---|---|---|---|---|
| top5pct-custom-business-shirts.jpg | corporate-wear/ | 415K | May 11 | R1 | hero only |
| top5pct-custom-apron-joliet.jpg | corporate-wear/ | 429K | May 11 | R1 | C-1 only |
| top5pct-custom-aprons-joliet.jpg | corporate-wear/ | 392K | May 11 | R1 | C-2 only |
| top5pct-custom-company-apparel.jpg | corporate-wear/ | 276K | Jun 2 | R2 | C-3 only |
| top5pct-custom-pocket-shirt-joliet.jpg | corporate-wear/ | 363K | May 11 | R1 | C-4 only |
| top5pct-landscaping-clothing-joliet.jpg | corporate-wear/ | 566K | May 11 | R1 | card-1 only |
| top5pct-lawn-care-clothing.jpg | corporate-wear/ | 477K | May 11 | R1 | card-2 only |
| top5pct-safety-work-gear-joliet.jpg | corporate-wear/ | 414K | May 11 | R1 | card-2image image1 only |
| top5pct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg | corporate-wear/ | 127K | Mar 16 | Initial | card-2image image2 — needs R3+ replacement |
| top5pct-custom-cap-hat-joliet-shorewood-rockdale.jpg | corporate-wear/ | 40K | Mar 16 | Initial | card-3 — needs R3+ replacement |
| top5pct-custom-corporate-t-shirts-joliet-shorewood.jpg | corporate-wear/ | 44K | Mar 16 | Initial | card-detailed image1 — needs R3+ replacement |
| top5pct-custom-hoodie-pullover-joliet-shorewood.jpg | corporate-wear/ | 41K | Mar 16 | Initial | card-detailed image2 — needs R3+ replacement |
| top5pct-article-corporate-wear-pic1.jpg | corporate-wear/ | 14K | Mar 16 | Initial | unused — not suitable for any body slot |
| top5pct-article-corporate-wear-pic2.jpg | corporate-wear/ | 15K | Mar 16 | Initial | unused — not suitable for any body slot |
| top5pct-custom-button-up-shirt-joliet-shorewood.jpg | corporate-wear/ | 42K | Mar 16 | Initial | unused — not suitable for any body slot |
| top5pct-custom-polo-shirts-joliet-shorewood-crest-hill.jpg | corporate-wear/ | 30K | Mar 16 | Initial | unused — not suitable for any body slot |
| top5pct-truck-sign-magnets-joliet.jpg | vehicle-magnets/ | 364K | Jun 2 | R2 | slide-R — vehicle magnets cross-sell |
| top5pct-volleyball-team-uniforms-joliet.jpg | spirit-wear/ | 606K | Jun 2 | R2 | slide-L — spirit wear cross-sell |

---

## Notes

- 10 of 14 image slots are confirmed R1-R3 as of Jun 25, 2026.
- 4 slots are Initial: card-2image image2, card-3, card-detailed image1, card-detailed image2. All four are in body and editorial sections, not the carousel or slides.
- No rule violations: both slides are proper R2 cross-sells from different category dirs.
- Carousel is correct at 4 slots, all R1-R2, all same-dir. No changes needed.
- No duplicates anywhere on this page.
- No immediate fixes possible — all R1+ corporate-wear/ files are already placed. The 4 Initial slots require new R3 or R4 corporate-wear/ product images.
- The 4 unused Initial files in corporate-wear/ (article pics, button-up, polo) are not suitable replacements and should be archived or removed at R4.
- R4 image delivery should target: 1 paired product photo (card-2image image2), 1 cap/accessory photo (card-3), 1 corporate t-shirt photo (card-detailed image1), 1 corporate hoodie photo (card-detailed image2).
