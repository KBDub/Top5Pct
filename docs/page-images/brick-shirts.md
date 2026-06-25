# Brick Shirts — Image Status

**Blade:** `resources/views/pages/custom-apparel/brick-shirts.blade.php`
**URL:** `/custom-apparel/specialty-materials/brick-shirts`
**Dir:** `public/images/brick-shirts/` — 2 files total. Both referenced by the blade (in carousel).
**Verified:** Jun 25, 2026

---

## Image Inventory

| section / category | image | path | round | file date | size | status |
|---|---|---|---|---|---|---|
| hero — category-hero | top5pct-brick-vinyl-hoodies.jpg | custom-shirts/ | R1 | May 11 | 379K | good |
| carousel C-1 — carousel-rotating-images | top5pct-brick-vinyl-cresthill.jpg | custom-shirts/ | R2 | Jun 2 | 165K | good |
| carousel C-2 — carousel-rotating-images | top5pct-brick-vinyl-custom-t-shirt.jpg | custom-shirts/ | R2 | Jun 2 | 329K | good |
| carousel C-3 — carousel-rotating-images | top5pct-brick-vinyl-jackets-joliet.jpg | custom-shirts/ | R2 | Jun 2 | 324K | good |
| carousel C-4 — carousel-rotating-images | top5pct-customized-brick-vinyl-shirts.jpg | custom-shirts/ | R2 | Jun 2 | 405K | good |
| carousel C-5 — carousel-rotating-images | top5pct-brick-vinyl-custom-shirts-joliet.jpg | brick-shirts/ | R3 | Jun 8 | 168K | good |
| carousel C-6 — carousel-rotating-images | top5pct-brick-vinyl-shorewood.jpg | brick-shirts/ | R3 | Jun 8 | 370K | good |
| card-1 — card-image-with-text | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | custom-shirts/ | Initial | Mar 16 | 28K | initial, small file |
| card-2 — card-image-with-text (imagePosition right) | top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg | custom-shirts/ | Initial | Mar 16 | 27K | initial, small file |
| card-detailed image1 — card-detailed-info | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | custom-shirts/ | Initial | Mar 16 | 28K | initial, small file, repeat of card-1 |
| slide-L — card-banner-slide-in (direction left) | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | custom-shirts/ | Initial | Mar 16 | 28K | initial, small file, repeat (3rd use) |
| slide-R — card-banner-slide-in (direction right) | top5pct-custom-hoodies.jpg | custom-shirts/ | R1 | May 11 | 287K | R1, not a cross-sell to correct target, alt text mismatch |

**Note:** `card-detailed-info` on this page uses only `image1`. There is no `image2` slot on this component instance.

---

## R1-R3 Placement Summary

**Filled:** 8 of 12 slots
**Remaining (Initial):** 4 slots

| slot | image | size | issue |
|---|---|---|---|
| card-1 | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg (custom-shirts/) | 28K | Initial, small file |
| card-2 | top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg (custom-shirts/) | 27K | Initial, small file |
| card-detailed image1 | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg (custom-shirts/) | 28K | Initial, small file, repeat of card-1 |
| slide-L | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg (custom-shirts/) | 28K | Initial, small file, 3rd use of same file |

**Additional issue (not Initial, but non-compliant):**

| slot | image | issue |
|---|---|---|
| slide-R | top5pct-custom-hoodies.jpg (custom-shirts/, R1) | cross-sell target is flock or glitter but image is a generic hoodies file, alt says "Custom flock velvet shirts" — wrong image for the cross-sell |

---

## Unused Files in Dir

None. Both brick-shirts/ files are referenced in the carousel (C-5 and C-6).

---

## File Usage Count (current)

| file | path | size | round | used in |
|---|---|---|---|---|
| top5pct-brick-vinyl-hoodies.jpg | custom-shirts/ | 379K | R1 | hero only |
| top5pct-brick-vinyl-cresthill.jpg | custom-shirts/ | 165K | R2 | C-1 only |
| top5pct-brick-vinyl-custom-t-shirt.jpg | custom-shirts/ | 329K | R2 | C-2 only |
| top5pct-brick-vinyl-jackets-joliet.jpg | custom-shirts/ | 324K | R2 | C-3 only |
| top5pct-customized-brick-vinyl-shirts.jpg | custom-shirts/ | 405K | R2 | C-4 only |
| top5pct-brick-vinyl-custom-shirts-joliet.jpg | brick-shirts/ | 168K | R3 | C-5 only |
| top5pct-brick-vinyl-shorewood.jpg | brick-shirts/ | 370K | R3 | C-6 only |
| top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | custom-shirts/ | 28K | Initial | card-1, card-detailed image1, slide-L (3 slots) |
| top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg | custom-shirts/ | 27K | Initial | card-2 only |
| top5pct-custom-hoodies.jpg | custom-shirts/ | 287K | R1 | slide-R only |

`top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` (28K, Initial) fills 3 of the 12 page slots: card-1, card-detailed image1, and slide-L.

---

## Immediate Suggestions

### 1. Drop carousel from 6 to 4 slots

Carousel is at 6 slots. card-1, card-2, card-detailed image1, and slide-L are all Initial. The carousel must drop to 4 until those card slots are resolved.

Drop the 2 smallest custom-shirts/ R2 files. Repurpose them immediately in card slots (see suggestion 2).

| action | slot | image | round | size |
|---|---|---|---|---|
| drop | C-1 | top5pct-brick-vinyl-cresthill.jpg | R2 | 165K |
| drop | C-3 | top5pct-brick-vinyl-jackets-joliet.jpg | R2 | 324K |
| keep | C-2 → C-1 | top5pct-brick-vinyl-custom-t-shirt.jpg | R2 | 329K |
| keep | C-4 → C-2 | top5pct-customized-brick-vinyl-shirts.jpg | R2 | 405K |
| keep | C-5 → C-3 | top5pct-brick-vinyl-custom-shirts-joliet.jpg | R3 | 168K |
| keep | C-6 → C-4 | top5pct-brick-vinyl-shorewood.jpg | R3 | 370K |

Result: 4-slot carousel, all R2-R3, mix of custom-shirts/ brick files and brick-shirts/ same-dir files.

### 2. Replace card-1 and card-2 with dropped carousel files

The 2 files dropped from the carousel in suggestion 1 are R2 and brick-specific. Use them directly in card slots.

| slot | replace with | round | size | from |
|---|---|---|---|---|
| card-1 | top5pct-brick-vinyl-jackets-joliet.jpg | R2 | 324K | custom-shirts/ |
| card-2 | top5pct-brick-vinyl-cresthill.jpg | R2 | 165K | custom-shirts/ |

### 3. Replace card-detailed image1

After suggestion 2, no unused brick-specific R1+ files remain in custom-shirts/ or brick-shirts/. Two paths:

**Option A — Cross-sell.** Use an R1+ image from a related specialty material page to give the article slot context and cross-sell value. Confirmed R3 options from dirs already audited:

| candidate | path | round | size |
|---|---|---|---|
| top5pct-flock-shirt-vinyl.jpg | flock-shirts/ | R3 | 433K |
| top5pct-custom-flock-t-shirt-printing.jpg | flock-shirts/ | R3 | 490K |
| top5pct-vinyl-shirts.jpg | vinyl/ | R3 | 379K |

**Option B — New photo.** Request a new R1+ brick-specific photo uploaded to brick-shirts/ and use it here.

### 4. Replace slide-L with an R1+ image

slide-L currently uses the same 28K Initial file as card-1 and card-detailed (3rd use). No same-dir brick R1+ files are available after suggestions 1 and 2 are applied. Two paths:

**Option A — Cross-sell.** slide-L may be a cross-sell (cross-sell must be R1+). Confirmed R3 candidates:

| candidate | path | round | size |
|---|---|---|---|
| top5pct-foil-shirts-cresthill.jpg | foil-shirts/ | R3 | 336K |
| top5pct-glitter-sweatshirts-joliet.jpg | glitter-shirts/ | R3 | 367K |
| top5pct-vinyl-shirts.jpg | vinyl/ | R3 | 379K |

**Option B — New photo.** Request a new brick photo in brick-shirts/ for slide-L.

### 5. Replace slide-R with a correct cross-sell image

slide-R uses `top5pct-custom-hoodies.jpg` (R1, 287K) but the slide title is "Add Flock, Puff, or Glitter to Your Shirt Order" and the alt says "Custom flock velvet shirts." The image is a generic hoodie, not a flock, puff, or glitter shirt. The cross-sell direction (flock or glitter) is right but the image must match.

flock-shirts/ dir confirmed to have 4 files, all R3 (Jun 8):

| candidate | size | note |
|---|---|---|
| top5pct-custom-flock-t-shirt-printing.jpg | 490K | largest, best quality |
| top5pct-flock-hoodie-printing.jpg | 489K | hoodies, close match to current slide |
| top5pct-flock-shirt-vinyl.jpg | 433K | shirts, good match |
| top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | 32K | small, avoid |

Recommended: `top5pct-custom-flock-t-shirt-printing.jpg` (flock-shirts/, R3, 490K) — largest file, clearly shows the flock print technique the slide is selling.

---

## Notes

- brick-shirts/ dir has only 2 files, both R3 (Jun 8). Both are in the carousel. No additional same-dir files exist to fill card slots without new photos.
- The carousel currently draws from two dirs: custom-shirts/ (4 slots, R2 brick-specific files) and brick-shirts/ (2 slots, R3). The custom-shirts/ brick files are thematically same-category and are the only available R1+ brick images beyond the 2 in brick-shirts/.
- After applying all 5 suggestions, 1 slot (card-detailed image1) will still need a new brick photo or cross-sell. All other slots will be R2+.
- slide-R alt text currently says "Custom flock velvet shirts" which does not match `top5pct-custom-hoodies.jpg`. The alt must be corrected when the image is swapped.
- No puff-shirts/ directory found. The slide title references puff as well as flock and glitter. flock-shirts/ is the best confirmed cross-sell target.
- R4 audit deferred until all 4 Initial slots are resolved.
