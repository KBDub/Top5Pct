# Spirit Wear Shirts — Image Status

**Blade:** `resources/views/pages/custom-apparel/group-wear/spirit-wear-shirts.blade.php`
**URL:** `/custom-apparel/group-wear/spirit-wear-shirts`
**Dir:** `public/images/spirit-wear/` — 13 files total. All 13 are referenced by the blade. Zero unused files in dir.
**Verified:** Jun 25, 2026

---

## Image Inventory

| section / category | image | path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-spirit-wear-joliet.jpg | spirit-wear/ | R1 | May 11 | good |
| carousel C-1 — carousel-rotating-images | top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg | spirit-wear/ | Initial | Mar 16 | initial |
| carousel C-2 — carousel-rotating-images | top5pct-spirit-wear-shirts.jpg | spirit-wear/ | R1 | May 11 | good |
| carousel C-3 — carousel-rotating-images | top5pct-spirit-wear-clothing.jpg | spirit-wear/ | R2 | Jun 2 | good |
| carousel C-4 — carousel-rotating-images | top5pct-volleyball-team-uniforms-joliet.jpg | spirit-wear/ | R2 | Jun 2 | good |
| carousel C-5 — carousel-rotating-images | top5pct-spirit-wear-volleyball-track.jpg | spirit-wear/ | R2+ | Jun 3 | good |
| card-1 — card-image-with-text | top5pct-joliet-west-spirit-wear-hoodie-shorewood.jpg | spirit-wear/ | Initial | Mar 16 | initial |
| card-2 — card-image-with-text | top5pct-spiritwear-fanwear-joliet-plainfield-shorewood.jpg | spirit-wear/ | Initial | Mar 16 | initial |
| card-2img image1 — card-2image-with-text | top5pct-sator-sanchez-school-shirt-joliet-crest-hill.jpg | spirit-wear/ | Initial | Mar 16 | initial |
| card-2img image2 — card-2image-with-text | top5pct-plainfield-south-high-school-hoodie.jpg | spirit-wear/ | Initial | Mar 16 | initial |
| card-3 — card-image-with-text | top5pct-bowling-shirts-joliet-shorewood-crest-hill.jpg | spirit-wear/ | Initial | Mar 16 | initial |
| card-detailed image1 — card-detailed-info | top5pct-article-spirit-wear-pic1.jpg | spirit-wear/ | Initial | Mar 17 | initial |
| card-detailed image2 — card-detailed-info | top5pct-article-fan-wear-pic2.jpg | spirit-wear/ | Initial | Mar 17 | initial |
| slide-L — card-banner-slide-in (direction left) | top5pct-plainfield-south-high-school-hoodie.jpg | spirit-wear/ | Initial | Mar 16 | initial, repeat of card-2img image2, same-dir |
| slide-R — card-banner-slide-in (direction right) | top5pct-family-reunion-tees.jpg | reunion-shirts/ | R3 | Jun 8 | good, cross-sell |

---

## R1-R3 Placement Summary

**Filled:** 6 of 15 slots
**Remaining (Initial):** 9 slots

| slot | image | size | needed |
|---|---|---|---|
| carousel C-1 | top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg | 86K | drop from carousel (see suggestions) |
| card-1 | top5pct-joliet-west-spirit-wear-hoodie-shorewood.jpg | 68K | R1 or better, same-dir |
| card-2 | top5pct-spiritwear-fanwear-joliet-plainfield-shorewood.jpg | 72K | R1 or better, same-dir |
| card-2img image1 | top5pct-sator-sanchez-school-shirt-joliet-crest-hill.jpg | 261K | R1 or better, same-dir |
| card-2img image2 | top5pct-plainfield-south-high-school-hoodie.jpg | 72K | R1 or better, same-dir |
| card-3 | top5pct-bowling-shirts-joliet-shorewood-crest-hill.jpg | 75K | R1 or better, same-dir |
| card-detailed image1 | top5pct-article-spirit-wear-pic1.jpg | 17K | R1 or better, same-dir |
| card-detailed image2 | top5pct-article-fan-wear-pic2.jpg | 14K | R1 or better, same-dir |
| slide-L | top5pct-plainfield-south-high-school-hoodie.jpg | 72K | replace with R1+ cross-sell from another category |

---

## Immediate Suggestions

### 1. Drop C-1 from the carousel

C-1 is the only Initial slot in the carousel. Removing it brings the carousel to exactly 4 slots, all R1 or better:

| slot | image | round | action |
|---|---|---|---|
| C-1 | top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg | Initial | remove |
| C-2 | top5pct-spirit-wear-shirts.jpg | R1 | keep |
| C-3 | top5pct-spirit-wear-clothing.jpg | R2 | keep |
| C-4 | top5pct-volleyball-team-uniforms-joliet.jpg | R2 | keep |
| C-5 | top5pct-spirit-wear-volleyball-track.jpg | R2+ | keep, renumber to C-4 |

Result: 4-slot carousel, all R1+, all same-dir.

The removed C-1 banner file (86K, Mar 16) is still Initial and should not be reassigned to any card slot — it does not help the R1-R3 goal.

### 2. Replace slide-L with a proper cross-sell

slide-L currently uses the same file as card-2img image2 (Initial, Mar 16, 72K) and points to `/contact` rather than a product page. It is same-dir, not a cross-sell. A good replacement is an R1+ image from a related category, for example:

- `corporate-wear/top5pct-custom-business-shirts.jpg` (R1, May 11) — cross-sell to `/custom-apparel/group-wear/corporate-wear-shirts`
- `reunion-shirts/` — if an R1+ file exists there (check that page's doc when audited)

### 3. New photos needed for all card slots

All 13 spirit-wear dir files are already placed on the blade. There are zero unused R1+ files available to swap into any card slot. The following 7 slots require new photos uploaded to `spirit-wear/`:

- card-1 — school spirit hoodie or shirt, R1+
- card-2 — fan wear group shot, R1+
- card-2img image1 — school shirt close-up or group, R1+
- card-2img image2 — school hoodie, R1+
- card-3 — bowling shirts or league spirit wear, R1+
- card-detailed image1 — spirit wear article photo, R1+
- card-detailed image2 — fan wear article photo, R1+

---

## Notes

- Carousel has 5 slots but the target is 4. The 5th slot (C-5, R2+) is good but should not exist while all card slots are still Initial. Dropping C-1 resolves both issues at once: carousel drops to 4 and all remaining slots are R1+.
- slide-L repeats `top5pct-plainfield-south-high-school-hoodie.jpg` from card-2img image2. Same file, same round, same dir. Two visible placements of one Initial image.
- `top5pct-sator-sanchez-school-shirt-joliet-crest-hill.jpg` (261K, Mar 16) is the largest Initial file on the page, similar in size to R2 files. It is still Mar 16 and counts as Initial regardless of file size.
- slide-R cross-sell uses `top5pct-family-reunion-tees.jpg` (reunion-shirts/, R3, Jun 8, 111K). Compliant with cross-sell rule and a strong R3 file.
- card-detailed image1 (17K) and image2 (14K) are the two smallest files on the page and the lowest-priority slots for new photos.
- R4 audit deferred until all 9 Initial slots are resolved.
