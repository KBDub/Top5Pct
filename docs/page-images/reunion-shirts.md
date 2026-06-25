# Reunion Shirts — Image Status

**Blade:** `resources/views/pages/custom-apparel/group-wear/reunion-shirts.blade.php`
**URL:** `/custom-apparel/group-wear/reunion-shirts`
**Dir:** `public/images/reunion-shirts/` — 17 files total. 14 referenced by the blade. 3 unused (2 Initial, 1 no longer referenced after C-2 drop).
**Verified:** Jun 25, 2026

---

## Image Inventory

| section / category | image | path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-family-reunion-shirts-joliet.jpg | reunion-shirts/ | R1 | May 11 | good |
| carousel C-1 — carousel-rotating-images | top5pct-class-reunion-shirt.jpg | reunion-shirts/ | R1 | May 11 | good |
| carousel C-2 — carousel-rotating-images | top5pct-family-reunion-tshirts-in-joliet.jpg | reunion-shirts/ | R1 | May 11 | good |
| carousel C-3 — carousel-rotating-images | top5pct-group-shirts.jpg | reunion-shirts/ | R1 | May 11 | good |
| carousel C-4 — carousel-rotating-images | top5pct-family-reunion-tees.jpg | reunion-shirts/ | R3 | Jun 8 | good |
| card-1 — card-image-with-text | top5pct-reunion-group-shirts.jpg | reunion-shirts/ | R1 | May 11 | good |
| card-2 — card-image-with-text | top5pct-reunion-shirts.jpg | reunion-shirts/ | R1 | May 11 | good |
| card-2img A image1 — card-2image-with-text (Reunion Shirt Templates) | top5pct-class-reunion-shirt-templates.gif | reunion-shirts/ | Initial | Mar 16 | initial, GIF |
| card-2img A image2 — card-2image-with-text (Reunion Shirt Templates) | top5pct-class-reunion-shirt-templates2.gif | reunion-shirts/ | Initial | Mar 16 | initial, GIF |
| card-2img B image1 — card-2image-with-text (Family Reunion Shirts) | top5pct-family-reunion-shirts-joliet-crest-hill.jpg | reunion-shirts/ | Initial | Mar 16 | initial |
| card-2img B image2 — card-2image-with-text (Family Reunion Shirts) | top5pct-family-reunion-shirts-joliet-romeoville.jpg | reunion-shirts/ | Initial | Mar 16 | initial |
| card-3 — card-image-with-text | top5pct-family-reunion-shirts-joliet-plainfield.jpg | reunion-shirts/ | Initial | Mar 16 | initial |
| card-detailed image1 — card-detailed-info | top5pct-article-family-reunion-pic1.jpg | reunion-shirts/ | Initial | Mar 16 | initial |
| card-detailed image2 — card-detailed-info | top5pct-article-family-reunion-pic2.jpg | reunion-shirts/ | Initial | Mar 16 | initial |
| slide-R — card-banner-slide-in (direction right) | top5pct-spirit-wear-joliet.jpg | spirit-wear/ | R1 | May 11 | good, cross-sell |
| slide-L — card-banner-slide-in (direction left) | top5pct-custom-shirt-pictures.jpg | custom-shirts/ | R1 | May 11 | good, cross-sell |

---

## R1-R3 Placement Summary

**Filled:** 9 of 16 slots
**Remaining (Initial):** 7 slots

| slot | image | size | needed |
|---|---|---|---|
| card-2img A image1 | top5pct-class-reunion-shirt-templates.gif | 9.1K | special case, see notes |
| card-2img A image2 | top5pct-class-reunion-shirt-templates2.gif | 8.9K | special case, see notes |
| card-2img B image1 | top5pct-family-reunion-shirts-joliet-crest-hill.jpg | 77K | R1 or better, same-dir |
| card-2img B image2 | top5pct-family-reunion-shirts-joliet-romeoville.jpg | 76K | R1 or better, same-dir |
| card-3 | top5pct-family-reunion-shirts-joliet-plainfield.jpg | 54K | R1 or better, same-dir |
| card-detailed image1 | top5pct-article-family-reunion-pic1.jpg | 18K | R1 or better, same-dir or appropriate cross-dir |
| card-detailed image2 | top5pct-article-family-reunion-pic2.jpg | 26K | R1 or better, same-dir or appropriate cross-dir |

---

## Unused Files in Dir

| file | round | date | size | note |
|---|---|---|---|---|
| top5pct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg | Initial | Mar 16 | 73K | removed from carousel C-2 Jun 25 |
| top5pct-class-reunion-shirts-joliet-shorewood.jpg | Initial | Mar 16 | 55K | unused Initial |
| top5pct-westinghouse-class-reunion-shirt-joliet-shorewood.jpg | Initial | Mar 16 | 42K | unused Initial |

All unused files are Initial. No unused R1+ files exist in reunion-shirts/.

---

## Changes Made Jun 25, 2026

| change | from | to |
|---|---|---|
| carousel C-2 | top5pct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg (Initial, 73K) | removed, carousel now 4 slots |
| carousel C-3 through C-5 | renumbered | now C-2 through C-4 |
| slide-R | top5pct-family-reunion-shirts-joliet-romeoville.jpg (reunion-shirts/, Initial, 76K, same-dir) | top5pct-spirit-wear-joliet.jpg (spirit-wear/, R1, May 11) |
| slide-R href | /contact | /custom-apparel/group-wear/spirit-wear-shirts |
| slide-L | top5pct-t-shirt-maker-article-pic1.jpg (custom-shirts/, Initial, 11K) | top5pct-custom-shirt-pictures.jpg (custom-shirts/, R1, May 11, 388K) |
| slide-L href | /contact | /custom-apparel |

---

## Notes

- Carousel is now 4 slots, all R1+, all same-dir. Carousel is clean.
- slide-R cross-sell points to `/custom-apparel/group-wear/spirit-wear-shirts` using a spirit-wear R1 image. Compliant.
- slide-L cross-sell points to `/custom-apparel` using a custom-shirts R1 image. Compliant.
- This page has two separate `card-2image-with-text` components, labeled A and B. A is "Reunion Shirt Templates," B is "Family Reunion Shirts."
- card-2img A uses GIF files (top5pct-class-reunion-shirt-templates.gif and top5pct-class-reunion-shirt-templates2.gif, both 9K, Mar 16). These are design template preview screenshots, not product photos. GIF format is intentional for this section. Treat as a special case pending a decision on whether to replace with updated template screenshots or leave as-is.
- All 8 reunion-shirts R1 and R3 files are placed on the blade. Zero unused R1+ files remain in the dir. The 5 non-GIF Initial card slots (card-2img B image1, card-2img B image2, card-3, card-detailed image1, card-detailed image2) require new photos uploaded to reunion-shirts/.
- R4 audit deferred until all 7 Initial slots are resolved.
