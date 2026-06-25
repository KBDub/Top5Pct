# Brick Shirts — Image Status

**Blade:** `resources/views/pages/custom-apparel/brick-shirts.blade.php`
**URL:** `/custom-apparel/specialty-materials/brick-shirts`
**Dir:** `public/images/brick-shirts/` — 2 files total. Both referenced by the blade (carousel C-3 and C-4).
**Verified:** Jun 25, 2026

---

## Image Inventory

| section / category | image | path | round | file date | size | status |
|---|---|---|---|---|---|---|
| hero — category-hero | top5pct-brick-vinyl-hoodies.jpg | custom-shirts/ | R1 | May 11 | 379K | good |
| carousel C-1 — carousel-rotating-images | top5pct-brick-vinyl-custom-t-shirt.jpg | custom-shirts/ | R2 | Jun 2 | 329K | good |
| carousel C-2 — carousel-rotating-images | top5pct-customized-brick-vinyl-shirts.jpg | custom-shirts/ | R2 | Jun 2 | 405K | good |
| carousel C-3 — carousel-rotating-images | top5pct-brick-vinyl-custom-shirts-joliet.jpg | brick-shirts/ | R3 | Jun 8 | 168K | good |
| carousel C-4 — carousel-rotating-images | top5pct-brick-vinyl-shorewood.jpg | brick-shirts/ | R3 | Jun 8 | 370K | good |
| card-1 — card-image-with-text | top5pct-brick-vinyl-jackets-joliet.jpg | custom-shirts/ | R2 | Jun 2 | 324K | good |
| card-2 — card-image-with-text (imagePosition right) | top5pct-brick-vinyl-cresthill.jpg | custom-shirts/ | R2 | Jun 2 | 165K | good |
| card-detailed image1 — card-detailed-info | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | custom-shirts/ | Initial | Mar 16 | 28K | initial, small file |
| slide-L — card-banner-slide-in (direction left) | top5pct-glitter-sweatshirts-joliet.jpg | glitter-shirts/ | R3 | Jun 8 | 367K | good, cross-sell |
| slide-R — card-banner-slide-in (direction right) | top5pct-custom-flock-t-shirt-printing.jpg | flock-shirts/ | R3 | Jun 8 | 490K | good, cross-sell |

**Note:** `card-detailed-info` on this page uses only `image1`. There is no `image2` slot on this component instance.

---

## R1-R3 Placement Summary

**Filled:** 9 of 10 slots
**Remaining (Initial):** 1 slot

| slot | image | size | issue |
|---|---|---|---|
| card-detailed image1 | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg (custom-shirts/) | 28K | Initial, small file |

Carousel is 4 slots, all R2-R3. card-1 and card-2 are R2. slide-L and slide-R are R3 cross-sells. Only card-detailed image1 remains Initial.

---

## Unused Files in Dir

None. Both brick-shirts/ files are referenced in the carousel (C-3 and C-4).

The following custom-shirts/ brick files were used in the carousel before Jun 25 and are now in card slots instead:

| file | path | size | round | now in |
|---|---|---|---|---|
| top5pct-brick-vinyl-jackets-joliet.jpg | custom-shirts/ | 324K | R2 | card-1 |
| top5pct-brick-vinyl-cresthill.jpg | custom-shirts/ | 165K | R2 | card-2 |

---

## File Usage Count (current)

| file | path | size | round | used in |
|---|---|---|---|---|
| top5pct-brick-vinyl-hoodies.jpg | custom-shirts/ | 379K | R1 | hero only |
| top5pct-brick-vinyl-custom-t-shirt.jpg | custom-shirts/ | 329K | R2 | C-1 only |
| top5pct-customized-brick-vinyl-shirts.jpg | custom-shirts/ | 405K | R2 | C-2 only |
| top5pct-brick-vinyl-custom-shirts-joliet.jpg | brick-shirts/ | 168K | R3 | C-3 only |
| top5pct-brick-vinyl-shorewood.jpg | brick-shirts/ | 370K | R3 | C-4 only |
| top5pct-brick-vinyl-jackets-joliet.jpg | custom-shirts/ | 324K | R2 | card-1 only |
| top5pct-brick-vinyl-cresthill.jpg | custom-shirts/ | 165K | R2 | card-2 only |
| top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | custom-shirts/ | 28K | Initial | card-detailed image1 only |
| top5pct-glitter-sweatshirts-joliet.jpg | glitter-shirts/ | 367K | R3 | slide-L |
| top5pct-custom-flock-t-shirt-printing.jpg | flock-shirts/ | 490K | R3 | slide-R |

Every slot now has a unique file.

---

## Changes Made Jun 25, 2026

| slot | from | to |
|---|---|---|
| carousel C-1 (dropped) | top5pct-brick-vinyl-cresthill.jpg (custom-shirts/, R2, 165K) | moved to card-2 |
| carousel C-3 (dropped) | top5pct-brick-vinyl-jackets-joliet.jpg (custom-shirts/, R2, 324K) | moved to card-1 |
| carousel C-2 through C-6 | renumbered | now C-1 through C-4 |
| card-1 | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg (Initial, 28K) | top5pct-brick-vinyl-jackets-joliet.jpg (custom-shirts/, R2, Jun 2, 324K) |
| card-2 | top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg (Initial, 27K) | top5pct-brick-vinyl-cresthill.jpg (custom-shirts/, R2, Jun 2, 165K) |
| slide-L | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg (Initial, 28K) | top5pct-glitter-sweatshirts-joliet.jpg (glitter-shirts/, R3, Jun 8, 367K) |
| slide-R | top5pct-custom-hoodies.jpg (custom-shirts/, R1, 287K, wrong image for target) | top5pct-custom-flock-t-shirt-printing.jpg (flock-shirts/, R3, Jun 8, 490K) |

---

## Remaining Issues

| slot | image | issue |
|---|---|---|
| card-detailed image1 | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg (custom-shirts/, 28K, Initial) | only remaining Initial on the page, no unused brick R1+ files remain |

No unused R1+ brick-specific files remain in custom-shirts/ or brick-shirts/. A new photo uploaded to brick-shirts/ is the cleanest fix. A cross-sell from a related specialty dir is the alternative. R4 audit deferred until card-detailed image1 is resolved.

---

## Notes

- Carousel is 4 slots: C-1 and C-2 are custom-shirts/ R2 brick files, C-3 and C-4 are brick-shirts/ R3 same-dir files. All R2+, all brick-specific or same-dir.
- slide-L cross-sell: glitter-shirts/ (R3, Jun 8, 367K). Glitter is a related specialty material that pairs naturally with brick in a multi-technique order.
- slide-R cross-sell: flock-shirts/ (R3, Jun 8, 490K). Matches the slide title "Add Flock, Puff, or Glitter to Your Shirt Order." Previous image (`top5pct-custom-hoodies.jpg`) had a mismatched alt ("Custom flock velvet shirts") now corrected.
- No puff-shirts/ directory exists. flock-shirts/ is the best confirmed cross-sell for the slide-R target.
- brick-shirts/ dir has only 2 files. Any card slot beyond the carousel requires either cross-dir brick files from custom-shirts/ or new photos in brick-shirts/.
