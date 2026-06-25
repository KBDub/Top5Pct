# Reunion Shirts — Image Status

**Blade:** `resources/views/pages/custom-apparel/group-wear/reunion-shirts.blade.php`
**URL:** `/custom-apparel/group-wear/reunion-shirts`
**Dir:** `public/images/reunion-shirts/` — 17 files total. 15 referenced by the blade. 2 unused, both Initial.
**Verified:** Jun 25, 2026

---

## Image Inventory

| section / category | image | path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-family-reunion-shirts-joliet.jpg | reunion-shirts/ | R1 | May 11 | good |
| carousel C-1 — carousel-rotating-images | top5pct-class-reunion-shirt.jpg | reunion-shirts/ | R1 | May 11 | good |
| carousel C-2 — carousel-rotating-images | top5pct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg | reunion-shirts/ | Initial | Mar 16 | initial |
| carousel C-3 — carousel-rotating-images | top5pct-family-reunion-tshirts-in-joliet.jpg | reunion-shirts/ | R1 | May 11 | good |
| carousel C-4 — carousel-rotating-images | top5pct-group-shirts.jpg | reunion-shirts/ | R1 | May 11 | good |
| carousel C-5 — carousel-rotating-images | top5pct-family-reunion-tees.jpg | reunion-shirts/ | R3 | Jun 8 | good |
| card-1 — card-image-with-text | top5pct-reunion-group-shirts.jpg | reunion-shirts/ | R1 | May 11 | good |
| card-2 — card-image-with-text | top5pct-reunion-shirts.jpg | reunion-shirts/ | R1 | May 11 | good |
| card-2img A image1 — card-2image-with-text (Reunion Shirt Templates) | top5pct-class-reunion-shirt-templates.gif | reunion-shirts/ | Initial | Mar 16 | initial, GIF |
| card-2img A image2 — card-2image-with-text (Reunion Shirt Templates) | top5pct-class-reunion-shirt-templates2.gif | reunion-shirts/ | Initial | Mar 16 | initial, GIF |
| card-2img B image1 — card-2image-with-text (Family Reunion Shirts) | top5pct-family-reunion-shirts-joliet-crest-hill.jpg | reunion-shirts/ | Initial | Mar 16 | initial |
| card-2img B image2 — card-2image-with-text (Family Reunion Shirts) | top5pct-family-reunion-shirts-joliet-romeoville.jpg | reunion-shirts/ | Initial | Mar 16 | initial |
| card-3 — card-image-with-text | top5pct-family-reunion-shirts-joliet-plainfield.jpg | reunion-shirts/ | Initial | Mar 16 | initial |
| card-detailed image1 — card-detailed-info | top5pct-article-family-reunion-pic1.jpg | reunion-shirts/ | Initial | Mar 16 | initial |
| card-detailed image2 — card-detailed-info | top5pct-article-family-reunion-pic2.jpg | reunion-shirts/ | Initial | Mar 16 | initial |
| slide-R — card-banner-slide-in (direction right) | top5pct-family-reunion-shirts-joliet-romeoville.jpg | reunion-shirts/ | Initial | Mar 16 | initial, same-dir, not a cross-sell, repeat of card-2img B image2 |
| slide-L — card-banner-slide-in (direction left) | top5pct-t-shirt-maker-article-pic1.jpg | custom-shirts/ | Initial | Mar 17 | initial, cross-dir |

---

## R1-R3 Placement Summary

**Filled:** 7 of 17 slots
**Remaining (Initial):** 10 slots

| slot | image | size | needed |
|---|---|---|---|
| carousel C-2 | top5pct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg | 73K | drop from carousel (see suggestions) |
| card-2img A image1 | top5pct-class-reunion-shirt-templates.gif | 9.1K | special case, see notes |
| card-2img A image2 | top5pct-class-reunion-shirt-templates2.gif | 8.9K | special case, see notes |
| card-2img B image1 | top5pct-family-reunion-shirts-joliet-crest-hill.jpg | 77K | R1 or better, same-dir |
| card-2img B image2 | top5pct-family-reunion-shirts-joliet-romeoville.jpg | 76K | R1 or better, same-dir |
| card-3 | top5pct-family-reunion-shirts-joliet-plainfield.jpg | 54K | R1 or better, same-dir |
| card-detailed image1 | top5pct-article-family-reunion-pic1.jpg | 18K | R1 or better, same-dir or appropriate cross-dir |
| card-detailed image2 | top5pct-article-family-reunion-pic2.jpg | 26K | R1 or better, same-dir or appropriate cross-dir |
| slide-R | top5pct-family-reunion-shirts-joliet-romeoville.jpg | 76K | replace with R1+ cross-sell from another category |
| slide-L | top5pct-t-shirt-maker-article-pic1.jpg | 11K | replace with R1+ cross-dir image (currently Initial) |

---

## Unused Files in Dir

| file | round | date | size | note |
|---|---|---|---|---|
| top5pct-class-reunion-shirts-joliet-shorewood.jpg | Initial | Mar 16 | 55K | unused Initial |
| top5pct-westinghouse-class-reunion-shirt-joliet-shorewood.jpg | Initial | Mar 16 | 42K | unused Initial |

Both unused files are Initial. No unused R1+ files exist in reunion-shirts/.

---

## Immediate Suggestions

### 1. Drop C-2 from the carousel

C-2 is the only Initial slot in the carousel. Removing it brings the carousel to exactly 4 slots, all R1 or better. Other page slots are still Initial so the 5th carousel slot is not yet earned.

| slot | image | round | action |
|---|---|---|---|
| C-1 | top5pct-class-reunion-shirt.jpg | R1 | keep |
| C-2 | top5pct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg | Initial | remove |
| C-3 | top5pct-family-reunion-tshirts-in-joliet.jpg | R1 | keep, renumber to C-2 |
| C-4 | top5pct-group-shirts.jpg | R1 | keep, renumber to C-3 |
| C-5 | top5pct-family-reunion-tees.jpg | R3 | keep, renumber to C-4 |

Result: 4-slot carousel, all R1+, all same-dir.

### 2. Replace slide-R with a proper cross-sell

slide-R currently uses `top5pct-family-reunion-shirts-joliet-romeoville.jpg` (reunion-shirts/, Initial, Mar 16, 76K). This violates two rules: it is same-dir (not a cross-sell) and it repeats card-2img B image2. slide-R must always be a cross-sell to an R1+ image from another category.

Suggested replacements:

| candidate | path | round | date | cross-sell to |
|---|---|---|---|---|
| top5pct-spirit-wear-joliet.jpg | spirit-wear/ | R1 | May 11 | /custom-apparel/group-wear/spirit-wear-shirts |
| top5pct-spirit-wear-shirts.jpg | spirit-wear/ | R1 | May 11 | /custom-apparel/group-wear/spirit-wear-shirts |
| top5pct-custom-business-shirts.jpg | corporate-wear/ | R1 | May 11 | /custom-apparel/group-wear/corporate-wear-shirts |

### 3. Replace slide-L with an R1+ cross-dir image

slide-L currently uses `top5pct-t-shirt-maker-article-pic1.jpg` (custom-shirts/, Initial, Mar 17, 11K). The cross-sell direction to custom shirts is appropriate but the file is Initial. Replace with any R1+ image from custom-shirts/ pointing to `/custom-apparel`.

### 4. New photos needed for card slots

All 7 reunion-shirts/ R1 and R3 files are already placed on the blade. Zero unused R1+ files are available for card slot swaps. The following slots require new photos uploaded to reunion-shirts/:

- card-2img B image1 — group or family shirts, R1+
- card-2img B image2 — group or family shirts, R1+
- card-3 — group gathering or reunion event, R1+
- card-detailed image1 — article photo, R1+
- card-detailed image2 — article photo, R1+

---

## Notes

- This page has two separate `card-2image-with-text` components, labeled A and B above. A is "Reunion Shirt Templates," B is "Family Reunion Shirts."
- card-2img A uses GIF files (top5pct-class-reunion-shirt-templates.gif and top5pct-class-reunion-shirt-templates2.gif, both 9K, Mar 16). These are design template previews, not product photos. GIF format is intentional for this section. They are Initial but serve a different purpose than standard card images. Treat as a special case pending a decision on whether to replace with updated template screenshots or leave as-is.
- slide-R repeats `top5pct-family-reunion-shirts-joliet-romeoville.jpg`, which also appears in card-2img B image2. Same file visible in two page sections.
- `top5pct-group-shirts.jpg` (R1, May 11, 479K) and `top5pct-family-reunion-shirts-joliet.jpg` (R1, May 11, 459K) are currently used on spirit-wear-shirts as card-detailed cross-dir files. They are still available here as they are in the reunion-shirts/ dir.
- No R1 or R2 files exist in reunion-shirts/ that are unused. The only R3 file is top5pct-family-reunion-tees.jpg, already in C-5.
- R4 audit deferred until all 10 Initial slots are resolved.
