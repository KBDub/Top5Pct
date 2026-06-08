# New Images Migration Plan

## General Rules

These rules apply to all rounds of migration and all page slot assignments.

| # | Rule |
|---|---|
| 1 | **Hero images must be a new R1 or R2 image.** Never reuse a pre-migration image in a `category-hero` slot. |
| 2 | **All images must contain their category name (or a derivative) in the filename.** Example: embroidery images must include "embroid" or "stitched" in the name. |
| 3 | **Create a `public/images/<category>/` directory for each distinct category.** `custom-shirts/` is a shared fallback only for images that genuinely appear across multiple unrelated pages (e.g. cross-promo banners). If a page has its own dedicated images, they go in `public/images/<that-page-slug>/`, not `custom-shirts/`. Create the dir if it does not exist. |
| 4 | **Every image file referenced in any blade file must carry the `top5pct-` prefix.** This applies to all files in all `public/images/` dirs — not just incoming R1/R2 files. Pre-existing originals without the prefix must be renamed (with hyphens replacing any spaces) and all blade references updated to match. Apply this rule page by page during migration; a full sweep and verification will be run at the end. |

---

## Overview

Move all files from `public/new-images/` into the matching `public/images/` directories, applying a `top5pct-` prefix to every incoming filename. If an existing file's basename would collide with a renamed incoming file, rename the old file to `<basename>-old.jpg` first. Banner hero images (page-header banners) that have no new-images counterparts are left untouched.

**Total new images: 119 JPG files** (1 `.psd` file has been deleted — see section 9).

---

## Conventions

| Rule | Detail |
|---|---|
| Prefix all incoming files | `<filename>.jpg` → `top5pct-<filename>.jpg` |
| Spaces in filenames | Replace with hyphens: `vinyl t-shirt maker.jpg` → `top5pct-vinyl-t-shirt-maker.jpg` |
| Conflict resolution | If `top5pct-<name>.jpg` already exists at destination, rename existing to `top5pct-<name>-old.jpg` before copying |
| Banners (page-hero images) | Untouched — no new-images banner equivalents exist |
| New directories | Create before copying if they do not yet exist |
| After migration | `public/new-images/` directory can be removed once all moves are verified |

---

## Directory Mapping

| `public/new-images/` source | `public/images/` destination | New dir? |
|---|---|---|
| `custom-apparel/digital-vinyl/` | `custom-shirts/` + `digital-vinyl/` | **yes** |
| `custom-apparel/group-shirts/corporate-wear-shirts/` | `corporate-wear/` | **yes** |
| `custom-apparel/group-shirts/reunion-shirts/` | `reunion-shirts/` | **yes** |
| `custom-apparel/group-shirts/spirit-wear-shirts/` | `spirit-wear/` | no |
| `custom-apparel/printing-options/digital-vinyl/` | `custom-shirts/` + `digital-vinyl/` | **yes** |
| `custom-apparel/printing-options/dtf-printing/` | `dtf-transfers/` | **yes** |
| `custom-apparel/printing-options/embroidery/` | `embroidery/` | **yes** |
| `custom-apparel/printing-options/rhinestones/` | `custom-shirts/` | **yes** |
| `custom-apparel/printing-options/screenprint/` | `custom-shirts/` | **yes** |
| `custom-apparel/printing-options/sublimation/` | `sublimation/` | **yes** |
| `custom-apparel/specialty-material/brick/` | `custom-shirts/` | **yes** |
| `custom-apparel/specialty-material/glitter/` | `glitter-shirts/` | **yes** |
| `custom-apparel/specialty-material/reflective/` | `custom-shirts/` | no |
| `promo-items/koozies/` | `promo-items/koozies/` | **yes** |
| `promo-items/mugs/` | `promo-items/mugs/` | **yes** |
| `signs/business-signs/banners/` | `banners/` | **yes** |
| `signs/business-signs/door-signs/` | `window-wall-floor-decals/` | **yes** |
| `signs/business-signs/wall-signs/` | `wall-signs/` | **yes** |
| `signs/business-signs/window-signs/` | `window-wall-floor-decals/` | **yes** |
| `signs/ground-signs/a-frame-signs/` | `sidewalk-signs/` | **yes** |
| `signs/ground-signs/yard-signs/` | `yard-signs/` | **yes** |
| `signs/table-signs/table-cloths/` | `table-cloths/` | **yes** |
| `signs/table-signs/table-runners/` | `table-runners/` | no |
| `stickers/custom-shaped/` | `stickers-decals/` | **yes** |
| `vehicle-decals/automobile-graphics/` | `automobile-graphics/` | **yes** |
| `vehicle-decals/dot-decals/` | `dot-decals/` | **yes** |
| `vehicle-decals/vehicle-magnets/` | `vehicle-magnets/` | **yes** |

---

## Section-by-Section File Operations

Each entry shows: `source filename` → `destination filename` (and old-file rename if a collision exists).

### 1. `custom-shirts/` — custom-apparel, digital-vinyl, printing options, specialty materials

**From `custom-apparel/digital-vinyl/`** (10 files):

| Source | Destination |
|---|---|
| `custom-caps-vinyl.jpg` | `top5pct-custom-caps-vinyl.jpg` |
| `custom-hoodies.jpg` | `top5pct-custom-hoodies.jpg` |
| `custom-vinyl-hoodies.jpg` | `top5pct-custom-vinyl-hoodies.jpg` |
| `custom-vinyl-shirts.jpg` | `top5pct-custom-vinyl-shirts.jpg` |
| `neon-vinyl-shirts.jpg` | `top5pct-neon-vinyl-shirts.jpg` |
| `vinyl-caps.jpg` | `top5pct-vinyl-caps.jpg` |
| `vinyl-hoodie.jpg` | `top5pct-vinyl-hoodie.jpg` |
| `vinyl-shirts.jpg` | `top5pct-vinyl-shirts.jpg` |
| `vinyl-t-shirt maker.jpg` | `top5pct-vinyl-t-shirt-maker.jpg` |
| `vinyl-zip-up-hoodies.jpg` | `top5pct-vinyl-zip-up-hoodies.jpg` |

**From `custom-apparel/printing-options/digital-vinyl/`** (9 files):

| Source | Destination |
|---|---|
| `custom-bowling-shirts.jpg` | `top5pct-custom-bowling-shirts.jpg` |
| `custom-printed-vinyl shirts.jpg` | `top5pct-custom-printed-vinyl-shirts.jpg` |
| `custom-shirt-pictures.jpg` | `top5pct-custom-shirt-pictures.jpg` |
| `custom-vinyl-hoodies.jpg` | `top5pct-custom-vinyl-hoodies.jpg` ⚠ see duplicate note |
| `digital-vinyl-hoodie.jpg` | `top5pct-digital-vinyl-hoodie.jpg` |
| `digital-vinyl-hoodies-in-joliet.jpg` | `top5pct-digital-vinyl-hoodies-in-joliet.jpg` |
| `digital-vinyl-shirts.jpg` | `top5pct-digital-vinyl-shirts.jpg` |
| `toddler-custom-shirts.jpg` | `top5pct-toddler-custom-shirts.jpg` |
| `vinyl-printed-shirts.jpg` | `top5pct-vinyl-printed-shirts.jpg` |

> ⚠ `custom-vinyl-hoodies.jpg` appears in both `custom-apparel/digital-vinyl/` and `custom-apparel/printing-options/digital-vinyl/`. Resolve before copying: compare checksums. If identical, skip the second. If different, use suffix `top5pct-custom-vinyl-hoodies-2.jpg` for the second.

**From `custom-apparel/printing-options/embroidery/`** (4 files):

| Source | Destination |
|---|---|
| `embroidered-aprons.jpg` | `top5pct-embroidered-aprons.jpg` |
| `embroidered-caps.jpg` | `top5pct-embroidered-caps.jpg` |
| `embroidery-in-joliet.jpg` | `top5pct-embroidery-in-joliet.jpg` |
| `stitched-caps.jpg` | `top5pct-stitched-caps.jpg` |

**From `custom-apparel/printing-options/rhinestones/`** (1 file):

| Source | Destination |
|---|---|
| `rhinestone-hoodies-joliet.jpg` | `top5pct-rhinestone-hoodies-joliet.jpg` |

**From `custom-apparel/printing-options/screenprint/`** (4 files):

| Source | Destination |
|---|---|
| `screenprint-custom-shirts.jpg` | `top5pct-screenprint-custom-shirts.jpg` |
| `screenprinted-shirts-in-joliet.jpg` | `top5pct-screenprinted-shirts-in-joliet.jpg` |
| `screenprinted-shirts-joliet.jpg` | `top5pct-screenprinted-shirts-joliet.jpg` |
| `screenprinting-shirts.jpg` | `top5pct-screenprinting-shirts.jpg` |

**From `custom-apparel/printing-options/sublimation/`** (8 files):

| Source | Destination |
|---|---|
| `custom-dog-bandanas.jpg` | `top5pct-custom-dog-bandanas.jpg` |
| `custom-face-mask sublimated.jpg` | `top5pct-custom-face-mask-sublimated.jpg` |
| `custom-sublimated-towels.jpg` | `top5pct-custom-sublimated-towels.jpg` |
| `dye-sublimated-longsleeve-shirt-joliet.jpg` | `top5pct-dye-sublimated-longsleeve-shirt-joliet.jpg` |
| `dye-sublimation-shirts.jpg` | `top5pct-dye-sublimation-shirts.jpg` |
| `sublimation-shirt.jpg` | `top5pct-sublimation-shirt.jpg` |
| `sublimation-shirt-printer.jpg` | `top5pct-sublimation-shirt-printer.jpg` |
| `sublimation-shirts.jpg` | `top5pct-sublimation-shirts.jpg` |

**From `custom-apparel/specialty-material/brick/`** (1 file):

| Source | Destination |
|---|---|
| `brick-vinyl-hoodies.jpg` | `top5pct-brick-vinyl-hoodies.jpg` |

**From `custom-apparel/specialty-material/glitter/`** (2 files):

| Source | Destination |
|---|---|
| `custom-glitter-clothing.jpg` | `top5pct-custom-glitter-clothing.jpg` |
| `custom-glitter-sweatshirts.jpg` | `top5pct-custom-glitter-sweatshirts.jpg` |

**From `custom-apparel/specialty-material/reflective/`** (1 file):

| Source | Destination |
|---|---|
| `reflective-shirts-gold.jpg` | `top5pct-reflective-shirts-gold.jpg` |

---

### 2. `corporate-wear/` — group-shirts / corporate-wear-shirts (7 files)

| Source | Destination |
|---|---|
| `custom-apron-joliet.jpg` | `top5pct-custom-apron-joliet.jpg` |
| `custom-aprons-joliet.jpg` | `top5pct-custom-aprons-joliet.jpg` |
| `custom-business-shirts.jpg` | `top5pct-custom-business-shirts.jpg` |
| `custom-pocket-shirt-joliet.jpg` | `top5pct-custom-pocket-shirt-joliet.jpg` |
| `landscaping-clothing-joliet.jpg` | `top5pct-landscaping-clothing-joliet.jpg` |
| `lawn-care-clothing.jpg` | `top5pct-lawn-care-clothing.jpg` |
| `safety-work-gear-joliert.jpg` | `top5pct-safety-work-gear-joliet.jpg` *(fix typo: `joliert` → `joliet`)* |

---

### 3. `reunion-shirts/` — group-shirts / reunion-shirts (6 files)

| Source | Destination |
|---|---|
| `class-reunion-shirt.jpg` | `top5pct-class-reunion-shirt.jpg` |
| `family-reunion-shirts-joliet.jpg` | `top5pct-family-reunion-shirts-joliet.jpg` |
| `family-reunion-tshirts-in-joliet.jpg` | `top5pct-family-reunion-tshirts-in-joliet.jpg` |
| `group-shirts.jpg` | `top5pct-group-shirts.jpg` |
| `reunion-group-shirts.jpg` | `top5pct-reunion-group-shirts.jpg` |
| `reunion-shirts.jpg` | `top5pct-reunion-shirts.jpg` |

---

### 4. `spirit-wear/` — group-shirts / spirit-wear-shirts (2 files)

| Source | Destination |
|---|---|
| `spirit-wear-joliet.jpg` | `top5pct-spirit-wear-joliet.jpg` |
| `spirit-wear-shirts.jpg` | `top5pct-spirit-wear-shirts.jpg` |

---

### 5. `dtf-transfers/` — printing-options / dtf-printing (5 files)

| Source | Destination |
|---|---|
| `custom-shirt-with picture.jpg` | `top5pct-custom-shirt-with-picture.jpg` |
| `custom sweatshirts.jpg` | `top5pct-custom-sweatshirts.jpg` |
| `custom-t-shirts-dtf.jpg` | `top5pct-custom-t-shirts-dtf.jpg` |
| `dtf-hoodies-joliet.jpg` | `top5pct-dtf-hoodies-joliet.jpg` |
| `dtf-zip-up-hoodies.jpg` | `top5pct-dtf-zip-up-hoodies.jpg` |

---

### 6. `promo-items/koozies/` — NEW directory (2 files)

Create `public/images/promo-items/koozies/` before copying.

| Source | Destination |
|---|---|
| `can-koozies.jpg` | `top5pct-can-koozies.jpg` |
| `custom-koozies.jpg` | `top5pct-custom-koozies.jpg` |

---

### 7. `promo-items/mugs/` — NEW directory (7 files)

Create `public/images/promo-items/mugs/` before copying.

| Source | Destination |
|---|---|
| `custom-coffee-mugs-in-joliet.jpg` | `top5pct-custom-coffee-mugs-in-joliet.jpg` |
| `custom-coffee-mugs.jpg` | `top5pct-custom-coffee-mugs.jpg` |
| `custom-mugs.jpg` | `top5pct-custom-mugs.jpg` |
| `custom-mugs-near-me.jpg` | `top5pct-custom-mugs-near-me.jpg` |
| `custom-printed-mugs.jpg` | `top5pct-custom-printed-mugs.jpg` |
| `picture-on-mugs.jpg` | `top5pct-picture-on-mugs.jpg` |
| `printed-mugs.jpg` | `top5pct-printed-mugs.jpg` |

---

### 8. `banners/` — signs / business-signs / banners (7 files)

These are product photos of vinyl banners. Existing `top5pct-banner-*` files in `public/images/banners/` are page-hero images and remain untouched.

| Source | Destination |
|---|---|
| `banners-and-signs.jpg` | `top5pct-banners-and-signs.jpg` |
| `banners-near-me.jpg` | `top5pct-banners-near-me.jpg` |
| `big-banners.jpg` | `top5pct-big-banners.jpg` |
| `custom-retractable-banners-joliet.jpg` | `top5pct-custom-retractable-banners-joliet.jpg` |
| `custom-vinyl-banners.jpg` | `top5pct-custom-vinyl-banners.jpg` |
| `graduation-banners.jpg` | `top5pct-graduation-banners.jpg` |
| `retractable-banner.jpg` | `top5pct-retractable-banner.jpg` |

---

### 9. `window-wall-floor-decals/` — business-signs door/wall/window (7 files)

**From `signs/business-signs/door-signs/`** (1 file):

| Source | Destination |
|---|---|
| `door-signage.jpg` | `top5pct-door-signage.jpg` |

**From `signs/business-signs/wall-signs/`** (1 file):

| Source | Destination |
|---|---|
| `wall-signs.jpg` | `top5pct-wall-signs.jpg` |

**From `signs/business-signs/window-signs/`** (5 files):

| Source | Destination |
|---|---|
| `business-window-signs.jpg` | `top5pct-business-window-signs.jpg` |
| `custom-window-signs.jpg` | `top5pct-custom-window-signs.jpg` |
| `window-door-signs.jpg` | `top5pct-window-door-signs.jpg` |
| `window-signs-joliet.jpg` | `top5pct-window-signs-joliet.jpg` |
| `window-signs-joliet-slammers.jpg` | `top5pct-window-signs-joliet-slammers.jpg` |

---

### 10. `sidewalk-signs/` — ground-signs / a-frame-signs (4 files)

| Source | Destination |
|---|---|
| `a-frame-sign.jpg` | `top5pct-a-frame-sign.jpg` |
| `custom-a-frame-sidewalk-signs-joliet.jpg` | `top5pct-custom-a-frame-sidewalk-signs-joliet.jpg` |
| `sidewalk-sign.jpg` | `top5pct-sidewalk-sign.jpg` |
| `sidewalk-signs-joliet.jpg` | `top5pct-sidewalk-signs-joliet.jpg` |

---

### 11. `yard-signs/` — ground-signs / yard-signs (5 files)

| Source | Destination |
|---|---|
| `custom-yard-signs-joliet.jpg` | `top5pct-custom-yard-signs-joliet.jpg` |
| `lawn-signs.jpg` | `top5pct-lawn-signs.jpg` |
| `yard-sign-joliet.jpg` | `top5pct-yard-sign-joliet.jpg` |
| `yard-signs-joliet.jpg` | `top5pct-yard-signs-joliet.jpg` |
| `yard-signs.jpg` | `top5pct-yard-signs.jpg` |

---

### 12. `table-runners/` — table-signs / table-cloths and table-runners (7 files)

**From `signs/table-signs/table-cloths/`** (3 files):

| Source | Destination |
|---|---|
| `custom-table-cloth.jpg` | `top5pct-custom-table-cloth.jpg` |
| `personalized-tablecloth-joliet.jpg` | `top5pct-personalized-tablecloth-joliet.jpg` |
| `table-cloths.jpg` | `top5pct-table-cloths.jpg` |

**From `signs/table-signs/table-runners/`** (4 files):

| Source | Destination |
|---|---|
| `custom-table-runner.jpg` | `top5pct-custom-table-runner.jpg` |
| `custom-table-runners.jpg` | `top5pct-custom-table-runners.jpg` |
| `table-runner.jpg` | `top5pct-table-runner.jpg` |
| `table-runners.jpg` | `top5pct-table-runners.jpg` |

---

### 13. `stickers-decals/` — stickers / custom-shaped (6 files)

| Source | Destination |
|---|---|
| `custom-glossy-stickers-in-joliet.jpg` | `top5pct-custom-glossy-stickers-in-joliet.jpg` |
| `custom-label-stickers.jpg` | `top5pct-custom-label-stickers.jpg` |
| `custom-shaped-stickers.jpg` | `top5pct-custom-shaped-stickers.jpg` |
| `custom stickers.jpg` | `top5pct-custom-stickers.jpg` |
| `diecut-stickers.jpg` | `top5pct-diecut-stickers.jpg` |
| `stickers-in-joliet.jpg` | `top5pct-stickers-in-joliet.jpg` |

---

### 14. `automobile-graphics/` — vehicle-decals / automobile-graphics (9 files)

| Source | Destination |
|---|---|
| `car-wraps.jpg` | `top5pct-car-wraps.jpg` |
| `pickup-truck-graphics.jpg` | `top5pct-pickup-truck-graphics.jpg` |
| `trailer-decal-graphics.jpg` | `top5pct-trailer-decal-graphics.jpg` |
| `trailer-decals.jpg` | `top5pct-trailer-decals.jpg` |
| `van-graphics-decals.jpg` | `top5pct-van-graphics-decals.jpg` |
| `vecal-decals.jpg` | `top5pct-vecal-decals.jpg` *(source typo preserved — correct separately)* |
| `vehicle-graphics.jpg` | `top5pct-vehicle-graphics.jpg` |
| `vehicle-window-graphics-in-joliet.jpg` | `top5pct-vehicle-window-graphics-in-joliet.jpg` |
| `vehicle-window-graphics-joliet.jpg` | `top5pct-vehicle-window-graphics-joliet.jpg` |

---

### 15. `dot-decals/` — vehicle-decals / dot-decals (3 files)

| Source | Destination |
|---|---|
| `dot-decals-joliet.jpg` | `top5pct-dot-decals-joliet.jpg` |
| `dot-semi-truck-decals.jpg` | `top5pct-dot-semi-truck-decals.jpg` |
| `dot-truck-decals-joliet.jpg` | `top5pct-dot-truck-decals-joliet.jpg` |

---

### 16. `vehicle-magnets/` — vehicle-decals / vehicle-magnets (8 files)

| Source | Destination |
|---|---|
| `automobile-magnets-joliet.jpg` | `top5pct-automobile-magnets-joliet.jpg` |
| `car-magnets-joliet.jpg` | `top5pct-car-magnets-joliet.jpg` |
| `car-magnets.jpg` | `top5pct-car-magnets.jpg` |
| `car-sign-magnets-joliet.jpg` | `top5pct-car-sign-magnets-joliet.jpg` |
| `custom-car-magnets-in-joliet.jpg` | `top5pct-custom-car-magnets-in-joliet.jpg` |
| `custom-car-magnets.jpg` | `top5pct-custom-car-magnets.jpg` |
| `vehicle-magnets-joliet.jpg` | `top5pct-vehicle-magnets-joliet.jpg` |
| `vehicle-magnets.jpg` | `top5pct-vehicle-magnets.jpg` |

---

## Blade Page Image Slot Inventory

### Component Display Sizes (reference)

| Component | Display Size | Notes |
|---|---|---|
| `x-sections.category-hero` | Full-width × h-[28rem→36rem], `object-cover` | Best supplied ≥1920px wide |
| `x-ui.carousel-rotating-images` (visible=2) | 600×450px per slot, side by side (4:3) | 4 images cycle; 2 visible at a time |
| `x-sections.card-image-with-text` | 600×450px (4:3), floated left or right | Image wraps with body text |
| `x-sections.card-2image-with-text` | Each image fluid 4:3, ~50% container width | Two images side by side above text |
| `x-sections.card-detailed-info` (1 image) | 400×300px (4:3), floated left | Image wraps mid-section text |
| `x-sections.card-detailed-info` (2 images) | 400×300px each (4:3), alternating float | image1 left, image2 right |
| `x-ui.card-banner-slide-in` | Full-width × 16:7 aspect ratio | Always Keep — no replacements |

### Replacement Rules

- **All `category-hero` slots** → **Keep** (no new banner-format images exist)
- **All `card-banner-slide-in` slots** → **Keep** (every one, regardless of what image it references)
- **All other slots** → filled **Pending** in page order, 1:1 against the count of new images available for that page's category. Slots beyond the count → **Keep**

### Replaced? Key

| Status | Meaning |
|---|---|
| **Pending** | Will receive a new image from `new-images/` — 1:1 in page order |
| **Keep** | No replacement: hero banners, all slide-in CTAs, or beyond the count of available new images |
| **Done** | Update to this once the swap is complete |

---

### `pages/custom-apparel/vinyl-shirts.blade.php`

*New images available: 18 (digital-vinyl, both source dirs) — 7 eligible slots — all 7 Pending*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-custom-caps-vinyl.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-custom-hoodies.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-custom-vinyl-hoodies.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-custom-vinyl-shirts.jpg` | Done |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-neon-vinyl-shirts.jpg` | Done |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-vinyl-caps.jpg` | Done |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-vinyl-hoodie.jpg` | Done |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep |

---

### `pages/custom-apparel/specialty-materials/vinyl.blade.php`

*All 13 slots complete. Directory: `vinyl/` (pre-existing dir — not created by R1/R2 migration; Rule 3 already satisfied). All pre-existing originals in `vinyl/` are non-prefixed. R1 copies live in `custom-shirts/`; 2 R1 files brought into `vinyl/` this pass. Hero (slot 1) was pre-existing `custom-vinyl-shirts.jpg` — not R1/R2 (Rule 1 violation). 2-slot swap: R1 `top5pct-vinyl-shirts.jpg` copied from `custom-shirts/` → `vinyl/`, promoted to hero; displaced `custom-vinyl-shirts.jpg` → carousel 1. Slot 11 dedup fix: `custom-vinyl-shirts.jpg` appeared in slots 1, 6, 11 — replaced in slot 11 with R1 `top5pct-vinyl-t-shirt-maker.jpg` (copied from `custom-shirts/` → `vinyl/`; "vinyl" ✓). File rename this pass: `vinyl-t-shirt maker.jpg` (space) → `vinyl-t-shirt-maker.jpg`. Rules 2 and 3 were fully satisfied before this pass — no other changes needed.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `vinyl/top5pct-vinyl-shirts.jpg` | Done — Rule 1 fix: 2-slot swap (R1 copied from `custom-shirts/`) |
| 2 | `carousel` slot 1 | 600×450px | `vinyl/custom-vinyl-shirts.jpg` | Displaced hero fills vacated slot; "vinyl" ✓ |
| 3 | `carousel` slot 2 | 600×450px | `vinyl/vinyl-hoodie.jpg` | Keep (pre-existing, "vinyl" ✓) |
| 4 | `carousel` slot 3 | 600×450px | `vinyl/vinyl-caps.jpg` | Keep (pre-existing, "vinyl" ✓) |
| 5 | `carousel` slot 4 | 600×450px | `vinyl/vinyl-zip-up-hoodies.jpg` | Keep (pre-existing, "vinyl" ✓) |
| 6 | `card-image-with-text` (left) "Vinyl Shirts With Sharp, Clean Designs" | 600×450px | `vinyl/custom-vinyl-shirts.jpg` | Keep (pre-existing, "vinyl" ✓) |
| 7 | `card-image-with-text` (right) "Vinyl Hoodies and Sweatshirts" | 600×450px | `vinyl/custom-vinyl-hoodies.jpg` | Keep (pre-existing, "vinyl" ✓) |
| 8 | `card-2image-with-text` image1 "Vinyl Hats, Caps, and Specialty Colors" | 600×450px | `vinyl/custom-caps-vinyl.jpg` | Keep (pre-existing, "vinyl" ✓) |
| 9 | `card-2image-with-text` image2 | 600×450px | `vinyl/neon-vinyl-shirts.jpg` | Keep (pre-existing, "vinyl" ✓) |
| 10 | `card-image-with-text` (left) "Business and Group Vinyl Apparel" | 600×450px | `vinyl/vinyl-zip-up-hoodies.jpg` | Keep (pre-existing, "vinyl" ✓) |
| 11 | `card-detailed-info` image1 | 400×300px | `vinyl/top5pct-vinyl-t-shirt-maker.jpg` | Done — dedup fix: breaks `custom-vinyl-shirts.jpg` repeat; R1 copied from `custom-shirts/`; "vinyl" ✓ |
| 12 | `card-banner-slide-in` (direction="left") "Custom Vinyl Apparel for Any Occasion" | full-width 16:7 | `vinyl/custom-vinyl-hoodies.jpg` | Keep (pre-existing, "vinyl" ✓) |
| 13 | `card-banner-slide-in` (direction="right") "Shirts, Hoodies, Hats, and More…" | full-width 16:7 | `vinyl/vinyl-caps.jpg` | Keep (pre-existing, "vinyl" ✓) |

---

### `pages/custom-apparel/printing-options/screen-printing.blade.php`

*All 10 slots complete. Directory: `custom-shirts/` (shared dir by design — same as all printing-options pages; Rule 3 N/A). No R2 images for this page. R1 filled carousel slots 2–5 (pre-applied). Hero (slot 1) was a generic banner — not R1/R2 (Rule 1 violation). 2-slot swap: R1 `screenprinted-shirts-joliet.jpg` promoted from carousel 3 → hero; displaced hero fills carousel 3. Slide-in right (slot 9) was `reflective-shirts` placeholder — replaced with reused R1 `screenprinting-shirts.jpg` (Rule 2 fix). Slots 6–8 Rule 2 unfixable: no screen-named alt, shared dir limitation. Slot 10 is intentional cross-promo, excluded. No file moves needed (all 4 R1 files already in `custom-shirts/`).*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-screenprinted-shirts-joliet.jpg` | Done — Rule 1 fix: 2-slot swap (R1 promoted from carousel 3) |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-screenprint-custom-shirts.jpg` | Done (R1, "screenprint" ✓) |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-screenprinted-shirts-in-joliet.jpg` | Done (R1, "screenprinted" ✓) |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Displaced hero fills vacated carousel slot |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-screenprinting-shirts.jpg` | Done (R1, "screenprinting" ✓) |
| 6 | `card-image-with-text` (left) "The Classic Standard for Custom Apparel" | 600×450px | `custom-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | Keep — Rule 2 unfixable: no screen-named alt, shared dir |
| 7 | `card-image-with-text` (right) "Ideal for Bulk Orders and Uniforms" | 600×450px | `custom-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | Keep — Rule 2 unfixable: no screen-named alt, shared dir |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | Keep — Rule 2 unfixable: no screen-named alt, shared dir |
| 9 | `card-banner-slide-in` (direction="right") "Bold Screen Printed Shirts for Your Group or Brand" | full-width 16:7 | `custom-shirts/top5pct-screenprinting-shirts.jpg` | Done — R1 reused, "screenprinting" ✓ (Rule 2 fix; was reflective-shirts placeholder) |
| 10 | `card-banner-slide-in` (direction="left") "Add Embroidery or Vinyl to Complement Your Screen Print Order" | full-width 16:7 | `custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Keep — intentional cross-promo |

---

### `pages/custom-apparel/printing-options/digital-vinyl.blade.php`

*All 13 slots complete. Directory: `digital-vinyl/` (own dir ✓ Rule 3). Note: this page is separate from `vinyl-shirts.blade.php` which uses `custom-shirts/`. R1/R2 files with "digital-vinyl" in name are dual-homed: prefixed copies in `custom-shirts/` (for vinyl-shirts.blade.php) and also copied to `digital-vinyl/` (for this page). Hero (slot 1) was non-prefixed original `custom-vinyl-shirts.jpg` — not R1/R2 (Rule 1 violation). Fixed: R2 `top5pct-digital-vinyl-t-shirts.jpg` copied from `custom-shirts/` → `digital-vinyl/`, assigned to hero. Slots 2–13: all pre-existing non-prefixed originals — all contain "vinyl" ✓ Rule 2, all in `digital-vinyl/` ✓ Rule 3. Directory cleanup note: 2 apparent misplaced yard-signs files in `digital-vinyl/` dir (see Cleanup Notes section).*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `digital-vinyl/top5pct-digital-vinyl-t-shirts.jpg` | Done — R2 copied from `custom-shirts/`, "digital-vinyl" ✓ (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `digital-vinyl/vinyl-shirts.jpg` | Keep (pre-existing original, "vinyl" ✓) |
| 3 | `carousel` slot 2 | 600×450px | `digital-vinyl/vinyl-hoodie.jpg` | Keep (pre-existing original, "vinyl" ✓) |
| 4 | `carousel` slot 3 | 600×450px | `digital-vinyl/vinyl-caps.jpg` | Keep (pre-existing original, "vinyl" ✓) |
| 5 | `carousel` slot 4 | 600×450px | `digital-vinyl/custom-vinyl-hoodies.jpg` | Keep (pre-existing original, "vinyl" ✓) |
| 6 | `card-image-with-text` (left) "Full Color Designs on Any Shirt" | 600×450px | `digital-vinyl/custom-vinyl-shirts.jpg` | Keep (pre-existing original, "vinyl" ✓) |
| 7 | `card-image-with-text` (right) "Digital Vinyl Hoodies and Sweatshirts" | 600×450px | `digital-vinyl/custom-vinyl-hoodies.jpg` | Keep (pre-existing original, "vinyl" ✓) |
| 8 | `card-2image-with-text` image1 "Digital Vinyl on Hats, Caps, and More" | 600×450px | `digital-vinyl/vinyl-caps.jpg` | Keep (pre-existing original, "vinyl" ✓) |
| 9 | `card-2image-with-text` image2 | 600×450px | `digital-vinyl/neon-vinyl-shirts.jpg` | Keep (pre-existing original, "vinyl" ✓) |
| 10 | `card-image-with-text` "Business Branding and Event Merchandise" | 600×450px | `digital-vinyl/vinyl-zip-up-hoodies.jpg` | Keep (pre-existing original, "vinyl" ✓) |
| 11 | `card-detailed-info` image1 | 400×300px | `digital-vinyl/custom-vinyl-shirts.jpg` | Keep (pre-existing original, "vinyl" ✓) |
| 12 | `card-banner-slide-in` (direction="left") "Full Color Designs on Any Garment" | full-width 16:7 | `digital-vinyl/custom-vinyl-hoodies.jpg` | Keep (pre-existing original, "vinyl" ✓) |
| 13 | `card-banner-slide-in` (direction="right") "Digital Vinyl Shirts, Hoodies, Hats, and More" | full-width 16:7 | `digital-vinyl/vinyl-caps.jpg` | Keep (pre-existing original, "vinyl" ✓) |

---

### `pages/custom-apparel/dtf-transfers.blade.php`

*All 10 slots complete. 4-slot swap applied: R2 excess images fill hero (Rule 1) and fix 3 Rule 2 violations. R2 slots 7–8 were already in blade before this docs pass. No file moves needed.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `dtf-transfers/top5pct-dtf-t-shirt-printing.jpg` | Done — R2 excess to hero (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `dtf-transfers/top5pct-dtf-tees.jpg` | Done — R2 excess (Rule 2 fix; displaces R1 `custom-sweatshirts`) |
| 3 | `carousel` slot 2 | 600×450px | `dtf-transfers/top5pct-dtf-t-shirt-maker.jpg` | Done — R2 excess (Rule 2 fix; displaces R1 `custom-shirt-with-picture`) |
| 4 | `carousel` slot 3 | 600×450px | `dtf-transfers/top5pct-custom-t-shirts-dtf.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `dtf-transfers/top5pct-dtf-hoodies-joliet.jpg` | Done (R1) |
| 6 | `card-image-with-text` (left) | 600×450px | `dtf-transfers/top5pct-dtf-zip-up-hoodies.jpg` | Done (R1) |
| 7 | `card-image-with-text` (right) | 600×450px | `dtf-transfers/top5pct-custom-dtf-shirts.jpg` | Done — R2 excess (Rule 2 fix; displaces R2 `custom-baby-clothing`) |
| 8 | `card-detailed-info` image1 | 400×300px | `dtf-transfers/top5pct-custom-bowling-shirts-dtf.jpg` | Done (R2, already in blade) |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `dtf-transfers/toptpct-banner-dtf-transfers-joliet.jpg` | Keep — pre-migration banner, "dtf"+"transfers" ✓ |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Keep — intentional cross-promo to embroidery |

---

### `pages/custom-apparel/embroidery.blade.php`

*New images available: 4 (embroidery/) — 4 Done (carousel 1–4). Remaining slots addressed in R2. Directory: `embroidery/`.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `embroidery/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `embroidery/top5pct-embroidered-aprons.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `embroidery/top5pct-embroidered-caps.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `embroidery/top5pct-embroidery-in-joliet.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `embroidery/top5pct-embroidered-stitched-caps.jpg` | Done — renamed from `stitched-caps.jpg` |
| 6 | `card-image-with-text` (left) | 600×450px | `embroidery/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `embroidery/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `embroidery/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `embroidery/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `embroidery/top5pct-custom-vinyl-shirts-caps-hoodies.jpg` | Keep |

---

### `pages/custom-apparel/printing-options/rhinestone-apparel.blade.php`

*All 10 slots complete. Directory: `custom-shirts/` (shared by design — no own dir). R1 had 1 image: `rhinestone-hoodies-joliet.jpg` — superseded at carousel 1 by R2; becomes unassigned R1 excess used directly for hero (Rule 1 fix, no 2-slot swap needed). All 7 R2 rhinestone images were already pre-applied to blade. No file moves needed. R1 doc previously tracked stale blade path (`rhinestone-shirts.blade.php`) — corrected here.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-rhinestone-hoodies-joliet.jpg` | Done — R1 excess assigned directly to hero (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-rhinestone-apparel-keith-elementary.jpg` | Done (R2, already in blade) |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-rhinestone-bling-joliet.jpg` | Done (R2, already in blade) |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-rhinestone-hoodie-joliet-west.jpg` | Done (R2, already in blade) |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-rhinestone-ladies-shirt.jpg` | Done (R2, already in blade) |
| 6 | `card-image-with-text` (left) "Crystal Bling…" | 600×450px | `custom-shirts/top5pct-rhinestone-t-shirts-joliet.jpg` | Done (R2, already in blade) |
| 7 | `card-image-with-text` (right) "Custom Designs…" | 600×450px | `custom-shirts/top5pct-custom-rhinestone-shirts.jpg` | Done (R2, already in blade) |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-rhinetsone-t-shirts.jpg` | Done (R2, already in blade; typo "rhinetsone" in filename preserved as-is) |
| 9 | `card-banner-slide-in` (direction="right") | full-width 16:7 | `custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg` | Keep — "rhinestone" ✓ Rule 2 |
| 10 | `card-banner-slide-in` (direction="left") | full-width 16:7 | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep — intentional cross-promo ("Rhinestone, Holographic, Foil…") |

---

### `pages/custom-apparel/dye-sublimation.blade.php`

*All 10 slots complete. Directory: `sublimation/`. Files moved from `custom-shirts/`. Hero updated to new R2 image. Carousel 1 replaced dog-bandanas (Rule 2 fix). Both slide-ins replaced glitter/flock (Rule 2 fix).*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `sublimation/top5pct-dye-sublimation-custom-shirt-joliet.jpg` | Done — new R2 image (hero rule) |
| 2 | `carousel` slot 1 | 600×450px | `sublimation/top5pct-sublimation-shirts.jpg` | Done — R1 excess, replaced `custom-dog-bandanas.jpg` (Rule 2 fix) |
| 3 | `carousel` slot 2 | 600×450px | `sublimation/top5pct-custom-face-mask-sublimated.jpg` | Done (R1) |
| 4 | `carousel` slot 3 | 600×450px | `sublimation/top5pct-custom-sublimated-towels.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `sublimation/top5pct-dye-sublimated-longsleeve-shirt-joliet.jpg` | Done (R1) |
| 6 | `card-image-with-text` (left) | 600×450px | `sublimation/top5pct-dye-sublimation-shirts.jpg` | Done (R1) |
| 7 | `card-image-with-text` (right) | 600×450px | `sublimation/top5pct-sublimation-shirt-printer.jpg` | Done (R1) |
| 8 | `card-detailed-info` image1 | 400×300px | `sublimation/top5pct-sublimation-shirt.jpg` | Done (R1) |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `sublimation/top5pct-custom-sublimation-shirts.jpg` | Done — R2, replaced glitter (Rule 2 fix) |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `sublimation/top5pct-sublmation-team-shirts.jpg` | Done — R2 typo preserved, replaced flock (Rule 2 fix) |

---

### `pages/custom-apparel/glitter-shirts.blade.php`

*All 10 slots complete. Directory created: `glitter-shirts/`. All 9 glitter images moved from `custom-shirts/`. Hero updated via 2-slot swap: R2 promoted to hero, pre-existing cap-hoodie image takes card-detailed. R2 slots 4–8 were already in blade before this docs pass.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `glitter-shirts/top5pct-glitter-t-shirts.jpg` | Done — R2 promoted to hero (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `glitter-shirts/top5pct-custom-glitter-clothing.jpg` | Done (R1), moved |
| 3 | `carousel` slot 2 | 600×450px | `glitter-shirts/top5pct-custom-glitter-sweatshirts.jpg` | Done (R1), moved |
| 4 | `carousel` slot 3 | 600×450px | `glitter-shirts/top5pct-custom-wedding-glitter-shirts.jpg` | Done (R2, already in blade), moved |
| 5 | `carousel` slot 4 | 600×450px | `glitter-shirts/top5pct-glitter-blue-jean-jacket.jpg` | Done (R2, already in blade), moved |
| 6 | `card-image-with-text` (left) | 600×450px | `glitter-shirts/top5pct-glitter-lips-custom-t-shirt.jpg` | Done (R2, already in blade), moved |
| 7 | `card-image-with-text` (right) | 600×450px | `glitter-shirts/top5pct-glitter-t-shirts-cresthill.jpg` | Done (R2, already in blade), moved |
| 8 | `card-detailed-info` image1 | 400×300px | `glitter-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Pre-existing, moved — R2 promoted to hero |
| 9 | `card-banner-slide-in` (direction="left") | full-width 16:7 | `glitter-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep, moved |
| 10 | `card-banner-slide-in` (direction="right") | full-width 16:7 | `custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg` | Keep — intentional cross-promo to rhinestone, stays in `custom-shirts/` |

---

### `pages/custom-apparel/holographic-shirts.blade.php`

*New images available: 0 (holographic .psd deleted, no web-ready image exists) — all Keep*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Keep |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg` | Keep |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg` | Keep |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg` | Keep |

---

### `pages/custom-apparel/reflective-shirts.blade.php`

*New images available: 1 (reflective/) — 7 eligible slots — 1 Pending (carousel slot 1 only)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-reflective-shirts-gold.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Keep |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg` | Keep |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg` | Keep |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` | Keep |

---

### `pages/custom-apparel/group-wear/corporate-wear-shirts.blade.php`

*All 14 slots complete. Directory: `corporate-wear/` (own dedicated dir ✓ Rule 3). 8 R1 images placed across hero + carousel + card slots. Hero (slot 1) was pre-existing `toptpct-banner-...` — not R1/R2 (Rule 1 violation). 2-slot swap: R1 `top5pct-custom-business-shirts.jpg` promoted from carousel 3 → hero; displaced hero fills carousel 3. Rule 4: 8 pre-existing files had `toptpct-` typo prefix — all 8 renamed to `top5pct-` (5 active, 3 unreferenced in dir). Rule 2: slots 2, 3, 5, 13 filenames lack clear corporate derivative — R1 provided names, unfixable. Slot 9 doc was stale (showed `toptpct-custom-hoodie-pullover-...`) — blade already had R1 `top5pct-custom-company-apparel.jpg` applied. Doc path corrected: was `pages/custom-apparel/corporate-wear-shirts.blade.php` (wrong), now `pages/custom-apparel/group-wear/corporate-wear-shirts.blade.php`. Slot 14 intentional cross-promo, excluded.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `corporate-wear/top5pct-custom-business-shirts.jpg` | Done — Rule 1 fix: 2-slot swap (R1 promoted from carousel 3) |
| 2 | `carousel` slot 1 | 600×450px | `corporate-wear/top5pct-custom-apron-joliet.jpg` | Keep (R1); Rule 2 unfixable ("apron") |
| 3 | `carousel` slot 2 | 600×450px | `corporate-wear/top5pct-custom-aprons-joliet.jpg` | Keep (R1); Rule 2 unfixable ("aprons") |
| 4 | `carousel` slot 3 | 600×450px | `corporate-wear/top5pct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg` | Displaced hero fills vacated slot; Rule 4 rename; "corporate" ✓ Rule 2 |
| 5 | `carousel` slot 4 | 600×450px | `corporate-wear/top5pct-custom-pocket-shirt-joliet.jpg` | Keep (R1); Rule 2 unfixable ("pocket-shirt") |
| 6 | `card-image-with-text` (left) "Custom Polo Shirts" | 600×450px | `corporate-wear/top5pct-landscaping-clothing-joliet.jpg` | Keep (R1); "clothing" ✓ derivative |
| 7 | `card-image-with-text` (right) "Custom Work Uniforms" | 600×450px | `corporate-wear/top5pct-lawn-care-clothing.jpg` | Keep (R1); "clothing" ✓ derivative |
| 8 | `card-2image-with-text` image1 "Corporate Wear Builds Your Brand" | fluid 4:3 | `corporate-wear/top5pct-safety-work-gear-joliet.jpg` | Keep (R1); "work-gear" ✓ derivative |
| 9 | `card-2image-with-text` image2 "Corporate Wear Builds Your Brand" | fluid 4:3 | `corporate-wear/top5pct-custom-company-apparel.jpg` | Keep (R1, blade already applied — doc was stale); "company-apparel" ✓ |
| 10 | `card-image-with-text` (left) "Custom Caps and Accessories" | 600×450px | `corporate-wear/top5pct-custom-cap-hat-joliet-shorewood-rockdale.jpg` | Done — Rule 4 rename; Rule 2 unfixable ("cap/hat") |
| 11 | `card-detailed-info` image1 | 400×300px | `corporate-wear/top5pct-article-corporate-wear-pic1.jpg` | Done — Rule 4 rename; "corporate-wear" ✓ |
| 12 | `card-detailed-info` image2 | 400×300px | `corporate-wear/top5pct-article-corporate-wear-pic2.jpg` | Done — Rule 4 rename; "corporate-wear" ✓ |
| 13 | `card-banner-slide-in` `direction="right"` "Professional Corporate Wear in Joliet" | full-width 16:7 | `corporate-wear/top5pct-custom-button-up-shirt-joliet-shorewood.jpg` | Done — Rule 4 rename; Rule 2 unfixable ("button-up-shirt") |
| 14 | `card-banner-slide-in` `direction="left"` "Employee Uniforms and Team Apparel..." | full-width 16:7 | `spirit-wear/top5pct-plainfield-south-high-school-hoodie.jpg` | Keep — intentional cross-promo, excluded |

---

### `pages/custom-apparel/group-wear/reunion-shirts.blade.php`

*All 16 slots complete. Directory: `reunion-shirts/` (own dedicated dir ✓ Rule 3). 6 R1 images placed across hero + carousel + card slots. Hero (slot 1) was pre-existing `toptpct-banner-banner-...` — not R1/R2 (Rule 1 violation). 2-slot swap: R1 `top5pct-family-reunion-shirts-joliet.jpg` promoted from carousel 2 → hero; displaced hero fills carousel 2. Carousel 4 was a broken ref (`top5pct-group-wear.jpg` — file does not exist) — fixed to R1 `top5pct-group-shirts.jpg`; Rule 2 unfixable ("group-shirts" has no "reunion", no reunion-named alt). Rule 4: all pre-existing files had `toptpct-` typo prefix (missing "5") — all 10 renamed to `top5pct-` (8 active, 2 unreferenced in dir). External pages updated: `spirit-wear-shirts.blade.php` and `custom-apparel/index.blade.php` had `toptpct-` reunion refs — fixed via sed. Doc path corrected: was `pages/custom-apparel/reunion-shirts.blade.php` (wrong), now `pages/custom-apparel/group-wear/reunion-shirts.blade.php`. Slot 16 intentional cross-promo, excluded.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `reunion-shirts/top5pct-family-reunion-shirts-joliet.jpg` | Done — Rule 1 fix: 2-slot swap (R1 promoted from carousel 2) |
| 2 | `carousel` slot 1 | 600×450px | `reunion-shirts/top5pct-class-reunion-shirt.jpg` | Keep (R1, pre-applied, "reunion" ✓) |
| 3 | `carousel` slot 2 | 600×450px | `reunion-shirts/top5pct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg` | Displaced hero fills vacated slot; Rule 4 rename; "reunion" ✓ |
| 4 | `carousel` slot 3 | 600×450px | `reunion-shirts/top5pct-family-reunion-tshirts-in-joliet.jpg` | Keep (R1, pre-applied, "reunion" ✓) |
| 5 | `carousel` slot 4 | 600×450px | `reunion-shirts/top5pct-group-shirts.jpg` | Done — fixes broken `group-wear.jpg` ref; Rule 2 unfixable ("group-shirts" has no "reunion") |
| 6 | `card-image-with-text` (left) "Class Reunion Shirts" | 600×450px | `reunion-shirts/top5pct-reunion-group-shirts.jpg` | Keep (R1, pre-applied, "reunion" ✓) |
| 7 | `card-image-with-text` (right) "School Alumni Shirts" | 600×450px | `reunion-shirts/top5pct-reunion-shirts.jpg` | Keep (R1, pre-applied, "reunion" ✓) |
| 8 | `card-2image-with-text` image1 "Reunion Shirt Templates" | fluid 4:3 | `reunion-shirts/top5pct-class-reunion-shirt-templates.gif` | Done — Rule 4 rename (`toptpct-` → `top5pct-`) |
| 9 | `card-2image-with-text` image2 "Reunion Shirt Templates" | fluid 4:3 | `reunion-shirts/top5pct-class-reunion-shirt-templates2.gif` | Done — Rule 4 rename |
| 10 | `card-2image-with-text` image1 "Family Reunion Shirts" | fluid 4:3 | `reunion-shirts/top5pct-family-reunion-shirts-joliet-crest-hill.jpg` | Done — Rule 4 rename |
| 11 | `card-2image-with-text` image2 "Family Reunion Shirts" | fluid 4:3 | `reunion-shirts/top5pct-family-reunion-shirts-joliet-romeoville.jpg` | Done — Rule 4 rename; also updated in `spirit-wear-shirts.blade.php` |
| 12 | `card-image-with-text` (left) "Make Your Reunion Special" | 600×450px | `reunion-shirts/top5pct-family-reunion-shirts-joliet-plainfield.jpg` | Done — Rule 4 rename |
| 13 | `card-detailed-info` image1 | 400×300px | `reunion-shirts/top5pct-article-family-reunion-pic1.jpg` | Done — Rule 4 rename |
| 14 | `card-detailed-info` image2 | 400×300px | `reunion-shirts/top5pct-article-family-reunion-pic2.jpg` | Done — Rule 4 rename |
| 15 | `card-banner-slide-in` (direction="right") "Order Your Reunion Shirts Today" | full-width 16:7 | `reunion-shirts/top5pct-family-reunion-shirts-joliet-romeoville.jpg` | Done — Rule 4 rename (same file as slot 11) |
| 16 | `card-banner-slide-in` (direction="left") "Need Custom Shirts for Another Event?" | full-width 16:7 | `custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg` | Keep — intentional cross-promo, excluded |

---

### `pages/custom-apparel/group-wear/spirit-wear-shirts.blade.php`

*All 14 slots complete. Directory: `spirit-wear/` (own dedicated dir ✓ Rule 3). 4 R1 images placed across hero + carousel slots. Hero (slot 1) was pre-existing banner — not R1/R2 (Rule 1 violation). 2-slot swap: R1 `top5pct-spirit-wear-joliet.jpg` promoted from carousel 1 → hero; displaced hero fills carousel 1. Carousel 3 and 4 were stale in the doc (pre-R1 state) — blade already had R1 `top5pct-spirit-wear-clothing.jpg` and `top5pct-volleyball-team-uniforms-joliet.jpg` applied. Rule 4: all files already carry `top5pct-` prefix, no renames needed. Rule 2: all filenames contain "spirit", "wear", "school", "fan", or category derivative. Doc path corrected: was `pages/custom-apparel/spirit-wear-shirts.blade.php` (wrong), now `pages/custom-apparel/group-wear/spirit-wear-shirts.blade.php`. Slot 14 intentional cross-promo, excluded.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `spirit-wear/top5pct-spirit-wear-joliet.jpg` | Done — Rule 1 fix: 2-slot swap (R1 promoted from carousel 1) |
| 2 | `carousel` slot 1 | 600×450px | `spirit-wear/top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg` | Displaced hero fills vacated slot; "spiritwear" ✓ Rule 2 |
| 3 | `carousel` slot 2 | 600×450px | `spirit-wear/top5pct-spirit-wear-shirts.jpg` | Keep (R1, already in place) |
| 4 | `carousel` slot 3 | 600×450px | `spirit-wear/top5pct-spirit-wear-clothing.jpg` | Keep (R1, already in place — doc was stale) |
| 5 | `carousel` slot 4 | 600×450px | `spirit-wear/top5pct-volleyball-team-uniforms-joliet.jpg` | Keep (R1, already in place — doc was stale) |
| 6 | `card-image-with-text` (left) "School Spirit Wear" | 600×450px | `spirit-wear/top5pct-joliet-west-spirit-wear-hoodie-shorewood.jpg` | Keep |
| 7 | `card-image-with-text` (right) "Custom Fan Wear" | 600×450px | `spirit-wear/top5pct-spiritwear-fanwear-joliet-plainfield-shorewood.jpg` | Keep |
| 8 | `card-2image-with-text` image1 "Spirit Wear That Delivers" | fluid 4:3 | `spirit-wear/top5pct-sator-sanchez-school-shirt-joliet-crest-hill.jpg` | Keep |
| 9 | `card-2image-with-text` image2 "Spirit Wear That Delivers" | fluid 4:3 | `spirit-wear/top5pct-plainfield-south-high-school-hoodie.jpg` | Keep |
| 10 | `card-image-with-text` (left) "League and Recreational Spirit Wear" | 600×450px | `spirit-wear/top5pct-bowling-shirts-joliet-shorewood-crest-hill.jpg` | Keep |
| 11 | `card-detailed-info` image1 | 400×300px | `spirit-wear/top5pct-article-spirit-wear-pic1.jpg` | Keep |
| 12 | `card-detailed-info` image2 | 400×300px | `spirit-wear/top5pct-article-fan-wear-pic2.jpg` | Keep |
| 13 | `card-banner-slide-in` `direction="left"` "Spirit Wear for Your School or Team" | full-width 16:7 | `spirit-wear/top5pct-plainfield-south-high-school-hoodie.jpg` | Keep |
| 14 | `card-banner-slide-in` `direction="right"` "Reunion Shirts, Corporate Wear..." | full-width 16:7 | `reunion-shirts/top5pct-family-reunion-shirts-joliet-romeoville.jpg` | Keep — intentional cross-promo, excluded |

---

### `pages/signs/banners.blade.php`

*All 14 slots complete. Directory: `banners/` (was already dedicated). Hero updated to R2 excess image (Rule 1 fix). Slots 9–12 were already in blade before docs update. No file moves needed.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `banners/top5pct-sports-banners.jpg` | Done — R2 excess, replaced pre-migration hero (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `banners/top5pct-banners-and-signs.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `banners/top5pct-banners-near-me.jpg` | Done (R1) |
| 4 | `carousel` slot 3 | 600×450px | `banners/top5pct-big-banners.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `banners/top5pct-custom-retractable-banners-joliet.jpg` | Done (R1) |
| 6 | `card-image-with-text` (left) | 600×450px | `banners/top5pct-custom-vinyl-banners.jpg` | Done (R1) |
| 7 | `card-image-with-text` (right) | 600×450px | `banners/top5pct-graduation-banners.jpg` | Done (R1) |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `banners/top5pct-retractable-banner.jpg` | Done (R1) |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `banners/top5pct-banners-for-trade-shows.jpg` | Done (R2) |
| 10 | `card-2image-with-text` image1 (2nd) | fluid 4:3, ~50% | `banners/top5pct-mesh-construction-banner.jpg` | Done (R2) |
| 11 | `card-2image-with-text` image2 (2nd) | fluid 4:3, ~50% | `banners/top5pct-portable-banners.jpg` | Done (R2) |
| 12 | `card-detailed-info` image1 | 400×300px | `banners/top5pct-retractable-banners-plainfield.jpg` | Done (R2) |
| 13 | `card-banner-slide-in` (right→left) | full-width 16:7 | `banners/top5pct-banners-business-joliet-shorewood-crest-hill.jpg` | Keep |
| 14 | `card-banner-slide-in` (left→right) | full-width 16:7 | `banners/top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg` | Keep |

---

### `pages/signs/business-signs.blade.php`

*New images available: 0 (no new images map to the `business-signs/` directory) — all Keep*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `business-signs/top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg` | Keep |
| 2 | `card-image-with-text` (left) | 600×450px | `business-signs/top5pct-business-signs-joliet-shorewood-crest-hill.jpg` | Keep |
| 3 | `card-image-with-text` (right) | 600×450px | `business-signs/top5pct-outdoor-signs-joliet-shorewood-crest-hill.jpg` | Keep |
| 4 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `business-signs/top5pct-door-signs-joliet-shorewood-crest-hill.jpg` | Keep |
| 5 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `business-signs/top5pct-window-signs-joliet-new-lenox-shorewood.jpg` | Keep |
| 6 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `business-signs/top5pct-business-signs-joliet-plainfield-romeoville.jpg` | Keep |
| 7 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `business-signs/top5pct-business-signs-joliet-shorewood-channahon.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `business-signs/top5pct-article-business-signs-pic1.jpg` | Keep |

---

### `pages/signs/sidewalk-signs.blade.php`

*New images available: 4 (a-frame-signs/) — 8 eligible slots — 4 Pending (carousel 1–4)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `sidewalk-signs/top5pct-banner-a-frame-sidewalk-signs-joliet-romeoville.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `sidewalk-signs/top5pct-a-frame-sign.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `sidewalk-signs/top5pct-custom-a-frame-sidewalk-signs-joliet.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `sidewalk-signs/top5pct-sidewalk-sign.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `sidewalk-signs/top5pct-sidewalk-signs-joliet.jpg` | Done |
| 6 | `card-image-with-text` (left) | 600×450px | `sidewalk-signs/top5pct-a-frame-sidewalk-sign-joliet.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `sidewalk-signs/top5pct-sidewalk-a-frames-joliet-shorewood.jpg` | Keep |
| 8 | `card-image-with-text` (left) | 600×450px | `sidewalk-signs/top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg` | Keep |
| 9 | `card-detailed-info` image1 | 400×300px | `sidewalk-signs/top5pct-article-a-frame-sidewalk-signs.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `sidewalk-signs/top5pct-a-frame-sidewalk-sign-joliet.jpg` | Keep |
| 11 | `card-banner-slide-in` (right→left) | full-width 16:7 | `business-signs/top5pct-business-signs-joliet-shorewood-crest-hill.jpg` | Keep |

---

### `pages/signs/yard-signs.blade.php`

*All 12 slots complete. Directory: `yard-signs/` (Rule 3 applied, dir and refs already correct). Hero updated via 2-slot swap: R1 `top5pct-custom-yard-signs-joliet.jpg` promoted from carousel 1 to hero (Rule 1 fix), displaced hero `top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg` fills carousel 1. Slot 9 image replaced for Rule 2: `top5pct-table-signs-joliet-shorewood-plainfield.jpg` → `top5pct-yard-signs-joliet-old.jpg` (already in dir, only used by this blade). Cross-promo slide-in (slot 12) intentionally excluded, stays in `banners/`.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `yard-signs/top5pct-custom-yard-signs-joliet.jpg` | Done — Rule 1: 2-slot swap (R1 promoted from carousel 1) |
| 2 | `carousel` slot 1 | 600×450px | `yard-signs/top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg` | Done — displaced hero fills vacated slot; "yard-signs" ✓ |
| 3 | `carousel` slot 2 | 600×450px | `yard-signs/top5pct-lawn-signs.jpg` | Done (R2); lawn-signs = yard sign synonym ✓ |
| 4 | `carousel` slot 3 | 600×450px | `yard-signs/top5pct-yard-sign-joliet.jpg` | Done (R2); "yard-sign" ✓ |
| 5 | `carousel` slot 4 | 600×450px | `yard-signs/top5pct-yard-signs-joliet.jpg` | Done (R2); "yard-signs" ✓ |
| 6 | `card-image-with-text` (left) | 600×450px | `yard-signs/top5pct-yard-signs.jpg` | Done (R2); "yard-signs" ✓ |
| 7 | `card-image-with-text` (right) | 600×450px | `yard-signs/top5pct-yard-signs-joliet-plainfied-new-lenox.jpg` | Keep; "yard-signs" ✓ |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `yard-signs/top5pct-yard-signs-joliet-shorewood-romeoville.jpg` | Keep; "yard-signs" ✓ |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `yard-signs/top5pct-yard-signs-joliet-old.jpg` | Done — Rule 2 fix; replaces `top5pct-table-signs-joliet-shorewood-plainfield.jpg`; "yard-signs" ✓ |
| 10 | `card-detailed-info` image1 | 400×300px | `yard-signs/top5pct-article-yard-signs-buy.jpg` | Keep; "yard-signs" ✓ |
| 11 | `card-banner-slide-in` (left) | full-width 16:7 | `yard-signs/top5pct-yard-signs-joliet-plainfied-new-lenox.jpg` | Keep; same file as slot 7 |
| 12 | `card-banner-slide-in` (right) cross-promo | full-width 16:7 | `banners/top5pct-banners-business-joliet-shorewood-crest-hill.jpg` | Excluded — intentional cross-promo |

---

### `pages/signs/table-cloths.blade.php`

*(Round 1 entry — superseded by updated entry in Round 2 section below)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `table-runners/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `table-runners/top5pct-custom-table-cloth.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `table-runners/top5pct-personalized-tablecloth-joliet.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `table-runners/top5pct-table-cloths.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `table-runners/top5pct-article-table-cloths-table-runners.jpg` ⚠ file missing | Keep |
| 6 | `card-image-with-text` (left) | 600×450px | `table-runners/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `table-runners/top5pct-custom-table-runner-joliet-shorewood.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `table-runners/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `table-runners/top5pct-custom-table-runner-joliet-shorewood.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `banners/top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg` | Keep |

---

### `pages/signs/table-runners.blade.php`

*New images available: 4 (table-runners/) — 10 eligible slots — 4 Pending (carousel 1–4)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `table-runners/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `table-runners/top5pct-custom-table-runner.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `table-runners/top5pct-custom-table-runners.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `table-runners/top5pct-table-runner.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `table-runners/top5pct-table-runners.jpg` | Done |
| 6 | `card-image-with-text` (left) | 600×450px | `table-runners/top5pct-custom-table-cloth-joliet-crest-hill.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `table-runners/top5pct-custom-table-runner-joliet-new-lenox.jpg` | Keep |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `table-runners/top5pct-custom-table-runner-joliet-shorewood.jpg` | Keep |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `table-runners/top5pct-custom-table-skirt-joliet-shorewood-plainfield.jpg` | Keep |
| 10 | `card-image-with-text` (left) | 600×450px | `table-runners/top5pct-table-runner-popus-gourmet-popcorn-joliet.jpg` | Keep |
| 11 | `card-detailed-info` image1 | 400×300px | `table-runners/top5pct-article-custom-table-cloths-joliet.jpg` | Keep |
| 12 | `card-banner-slide-in` (right→left) | full-width 16:7 | `table-runners/top5pct-custom-table-runner-joliet-shorewood.jpg` | Keep |
| 13 | `card-banner-slide-in` (left→right) | full-width 16:7 | `banners/top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg` | Keep |

---

### `pages/signs/window-signs.blade.php`

*All 10 slots complete. Directory: `window-wall-floor-decals/` (shared across door/wall/window pages by design). Hero updated via 2-slot swap: R2 `top5pct-window-signage.jpg` promoted from card-detailed to hero (Rule 1 + Rule 2 fix), pre-existing hero displaced to card-detailed. Slots 7 and 8 were already in blade before this docs pass. No file moves needed.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `window-wall-floor-decals/top5pct-window-signage.jpg` | Done — R2 to hero (Rule 1 + Rule 2 fix) |
| 2 | `carousel` slot 1 | 600×450px | `window-wall-floor-decals/top5pct-business-window-signs.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `window-wall-floor-decals/top5pct-custom-window-signs.jpg` | Done (R1) |
| 4 | `carousel` slot 3 | 600×450px | `window-wall-floor-decals/top5pct-window-door-signs.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `window-wall-floor-decals/top5pct-window-signs-joliet-slammers.jpg` | Done (R1) |
| 6 | `card-image-with-text` (left) | 600×450px | `window-wall-floor-decals/top5pct-window-signs-joliet.jpg` | Done (R1) |
| 7 | `card-image-with-text` (right) | 600×450px | `window-wall-floor-decals/top5pct-joliet-slammers-window-signs-joliet.jpg` | Done (R2, already in blade) |
| 8 | `card-detailed-info` image1 | 400×300px | `window-wall-floor-decals/top5pct-banner-wall-decal-door-signs-joliet.jpg` | Pre-existing hero displaced here (2-slot swap) |
| 9 | `card-banner-slide-in` (direction="left") | full-width 16:7 | `window-wall-floor-decals/top5pct-window-decals-joliet-shorewood-crest-hill.jpg` | Keep |
| 10 | `card-banner-slide-in` (direction="right") | full-width 16:7 | `window-wall-floor-decals/top5pct-wall-decals-joliet.jpg` | Keep — intentional cross-promo to wall/floor signs |

---

### `pages/signs/door-signs.blade.php`

*All 10 slots complete. Directory: `window-wall-floor-decals/` (shared across door/wall/window pages by design). Hero updated via 2-slot swap: R1 `top5pct-door-signage.jpg` promoted from carousel 1 to hero (Rule 1 fix), pre-existing hero displaced to carousel 1. Slots 3–7 were already in blade (R2 pre-applied). No file moves needed.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `window-wall-floor-decals/top5pct-door-signage.jpg` | Done — R1 to hero (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `window-wall-floor-decals/top5pct-door-signs-joliet-shorewood-crest-hill.jpg` | Pre-existing hero displaced here (2-slot swap) |
| 3 | `carousel` slot 2 | 600×450px | `window-wall-floor-decals/top5pct-business-door-signs.jpg` | Done (R2, already in blade) |
| 4 | `carousel` slot 3 | 600×450px | `window-wall-floor-decals/top5pct-door-sign-installers.jpg` | Done (R2, already in blade) |
| 5 | `carousel` slot 4 | 600×450px | `window-wall-floor-decals/top5pct-door-wraps-joliet.jpg` | Done (R2, already in blade) |
| 6 | `card-image-with-text` (left) | 600×450px | `window-wall-floor-decals/top5pct-vinyl-door-lettering.jpg` | Done (R2, already in blade) |
| 7 | `card-image-with-text` (right) | 600×450px | `window-wall-floor-decals/top5pct-vinyl-door-signs.jpg` | Done (R2, already in blade) |
| 8 | `card-detailed-info` image1 | 400×300px | `window-wall-floor-decals/top5pct-door-signs-joliet-shorewood-crest-hill.jpg` | Keep (pre-existing) |
| 9 | `card-banner-slide-in` (direction="left") | full-width 16:7 | `window-wall-floor-decals/top5pct-door-signs-joliet-shorewood-crest-hill.jpg` | Keep |
| 10 | `card-banner-slide-in` (direction="right") | full-width 16:7 | `window-wall-floor-decals/top5pct-wall-decals-joliet.jpg` | Keep — intentional cross-promo to wall/window signs |

---

### `pages/signs/wall-signs.blade.php`

*(Round 1 entry — superseded by updated entry in Round 2 section below)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `window-wall-floor-decals/top5pct-wall-signs-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `window-wall-floor-decals/top5pct-wall-signs.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `window-wall-floor-decals/top5pct-wall-decals-joliet.jpg` | Keep |
| 4 | `carousel` slot 3 | 600×450px | `window-wall-floor-decals/top5pct-article-window-wall-signs.jpg` | Keep |
| 5 | `carousel` slot 4 | 600×450px | `window-wall-floor-decals/top5pct-banner-wall-decal-door-signs-joliet.jpg` | Keep |
| 6 | `card-image-with-text` (left) | 600×450px | `window-wall-floor-decals/top5pct-wall-decals-joliet.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `window-wall-floor-decals/top5pct-article-window-wall-signs.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `window-wall-floor-decals/top5pct-wall-signs-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `window-wall-floor-decals/top5pct-wall-decals-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `window-wall-floor-decals/top5pct-window-decals-joliet-shorewood-crest-hill.jpg` | Keep |

---

### `pages/stickers/custom-shaped-stickers.blade.php`

*All 10 slots complete. Directory: `stickers-decals/` (shared with standard-stickers by design — no per-page split needed). Hero updated via R2 excess: `top5pct-die-cut-stickers-joliet.jpg` promoted to hero (Rule 1 fix). No file moves needed.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `stickers-decals/top5pct-die-cut-stickers-joliet.jpg` | Done — R2 excess to hero (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `stickers-decals/top5pct-custom-stickers.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `stickers-decals/top5pct-custom-glossy-stickers-in-joliet.jpg` | Done (R1) |
| 4 | `carousel` slot 3 | 600×450px | `stickers-decals/top5pct-custom-label-stickers.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `stickers-decals/top5pct-custom-shaped-stickers.jpg` | Done (R1) |
| 6 | `card-image-with-text` (left) | 600×450px | `stickers-decals/top5pct-diecut-stickers.jpg` | Done (R1) |
| 7 | `card-image-with-text` (right) | 600×450px | `stickers-decals/top5pct-stickers-in-joliet.jpg` | Done (R1) |
| 8 | `card-detailed-info` image1 | 400×300px | `stickers-decals/top5pct-custom-shaped-stickers-cresthill.jpg` | Done (R2, already in blade) |
| 9 | `card-banner-slide-in` (direction="right") | full-width 16:7 | `stickers-decals/top5pct-stickers-decals-joliet-boxing-sports.jpg` | Keep |
| 10 | `card-banner-slide-in` (direction="left") | full-width 16:7 | `stickers-decals/top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg` | Keep |

---

### `pages/vehicle-graphics/automobile-graphics.blade.php`

*All 12 slots complete (slot 13 slide-in intentional cross-promo from vehicle-magnets/). Hero updated via 2-slot swap: R2 image promoted to hero, pre-existing article image returns to card-detailed. No file moves needed.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `automobile-graphics/top5pct-auto-window-wraps.jpg` | Done — R2 promoted to hero (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `automobile-graphics/top5pct-car-wraps.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `automobile-graphics/top5pct-pickup-truck-graphics.jpg` | Done (R1) |
| 4 | `carousel` slot 3 | 600×450px | `automobile-graphics/top5pct-trailer-decal-graphics.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `automobile-graphics/top5pct-trailer-decals.jpg` | Done (R1) |
| 6 | `card-image-with-text` (left) | 600×450px | `automobile-graphics/top5pct-van-graphics-decals.jpg` | Done (R1) |
| 7 | `card-image-with-text` (right) | 600×450px | `automobile-graphics/top5pct-vecal-decals.jpg` | Done (R1) |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `automobile-graphics/top5pct-vehicle-graphics.jpg` | Done (R1) |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `automobile-graphics/top5pct-vehicle-window-graphics-in-joliet.jpg` | Done (R1) |
| 10 | `card-image-with-text` (left) | 600×450px | `automobile-graphics/top5pct-vehicle-window-graphics-joliet.jpg` | Done (R1) |
| 11 | `card-detailed-info` image1 | 400×300px | `automobile-graphics/top5pct-article-car-wraps-vinyl-lettering.jpg` | Pre-existing article image — R2 image promoted to hero instead |
| 12 | `card-banner-slide-in` (left→right) | full-width 16:7 | `automobile-graphics/top5pct-vinyl-lettering-car-graphics-joliet-crest-hill.jpg` | Keep |
| 13 | `card-banner-slide-in` (right→left) | full-width 16:7 | `vehicle-magnets/top5pct-car-magnets-vehicle-magnets-joliet.jpg` | Keep — intentional cross-promo |

---

### `pages/vehicle-graphics/dot-decals.blade.php`

*All 13 slots complete. Hero updated via 2-slot swap: R2 slide-in image promoted to hero, pre-existing DOT-stickers image takes slide-in. R2 slots 5–10 and 12 were already in blade before this docs pass. No file moves needed.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `dot-decals/top5pct-truck-lettering-joliet-shorewood-rockdale.jpg` | Done — R2 promoted to hero (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `dot-decals/top5pct-dot-decals-joliet.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `dot-decals/top5pct-dot-semi-truck-decals.jpg` | Done (R1) |
| 4 | `carousel` slot 3 | 600×450px | `dot-decals/top5pct-dot-truck-decals-joliet.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `dot-decals/top5pct-custom-dot-decals-for-trucks-in-joliet.jpg` | Done (R2, already in blade) |
| 6 | `card-image-with-text` (left) | 600×450px | `dot-decals/top5pct-custom-dot-truck-signs-illinois.jpg` | Done (R2, already in blade) |
| 7 | `card-image-with-text` (right) | 600×450px | `dot-decals/top5pct-dot-decals-semi-truck.jpg` | Done (R2, already in blade) |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `dot-decals/top5pct-dot-lettering-joliet.jpg` | Done (R2, already in blade) |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `dot-decals/top5pct-dot-magnets.jpg` | Done (R2, already in blade) |
| 10 | `card-image-with-text` (left) | 600×450px | `dot-decals/top5pct-trucking-dot-decals-in-joliet.jpg` | Done (R2, already in blade) |
| 11 | `card-detailed-info` image1 | 400×300px | `dot-decals/top5pct-article-DOT-decals-vinyl-lettering.jpg` | Keep |
| 12 | `card-banner-slide-in` (right→left) | full-width 16:7 | `dot-decals/top5pct-DOT-stickers-joliet-shorewood-rockdale.jpg` | Pre-existing — R2 promoted to hero |
| 13 | `card-banner-slide-in` (left→right) | full-width 16:7 | `vehicle-magnets/top5pct-car-magnets-vehicle-magnets-joliet.jpg` | Keep — intentional cross-promo |

---

### `pages/vehicle-graphics/vehicle-magnets.blade.php`

*All 12 slots complete. Directory: `vehicle-magnets/`. Hero updated via R2 excess: `top5pct-magnet-vehicle-signs-joliet.jpg` promoted to hero (Rule 1 fix). Slot 10 R2 image already in blade. Slot 12 cross-promo undocumented in prior tables, added now. No file moves needed.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `vehicle-magnets/top5pct-magnet-vehicle-signs-joliet.jpg` | Done — R2 excess to hero (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `vehicle-magnets/top5pct-automobile-magnets-joliet.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `vehicle-magnets/top5pct-car-magnets-joliet.jpg` | Done (R1) |
| 4 | `carousel` slot 3 | 600×450px | `vehicle-magnets/top5pct-car-magnets.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `vehicle-magnets/top5pct-car-sign-magnets-joliet.jpg` | Done (R1) |
| 6 | `card-image-with-text` (left) | 600×450px | `vehicle-magnets/top5pct-custom-car-magnets-in-joliet.jpg` | Done (R1) |
| 7 | `card-image-with-text` (right) | 600×450px | `vehicle-magnets/top5pct-custom-car-magnets.jpg` | Done (R1) |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `vehicle-magnets/top5pct-vehicle-magnets-joliet.jpg` | Done (R1) |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `vehicle-magnets/top5pct-vehicle-magnets.jpg` | Done (R1) |
| 10 | `card-detailed-info` image1 | 400×300px | `vehicle-magnets/top5pct-car-decals-white-oaks-library.jpg` | Done (R2, already in blade) |
| 11 | `card-banner-slide-in` (direction="right") | full-width 16:7 | `vehicle-magnets/top5pct-car-magnets-vehicle-magnets-joliet.jpg` | Keep |
| 12 | `card-banner-slide-in` (direction="left") | full-width 16:7 | `automobile-graphics/top5pct-car-wraps-vinyl-lettering-joliet-shorewood.jpg` | Keep — intentional cross-promo to automobile-graphics |

---

### `pages/promotional-items/can-koozies.blade.php`

*New images available: 2 (koozies/) — 7 eligible slots (no hero on this page) — 2 Pending (carousel 1–2)*

> All slots currently use `custom-shirts/` placeholder images. The 2 new dedicated koozie images will replace the first 2 eligible slots. The blade `image=` attributes also need updating (see Execution Checklist).

| # | Component | Size | Current Image (placeholder) | Replaced? |
|---|---|---|---|---|
| 1 | `carousel` slot 1 | 600×450px | `promo-items/koozies/top5pct-can-koozies.jpg` | Done |
| 2 | `carousel` slot 2 | 600×450px | `promo-items/koozies/top5pct-custom-koozies.jpg` | Done |
| 3 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-t-shirt-maker-article-pic2.jpg` | Keep |
| 4 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg` | Keep |
| 5 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Keep |
| 6 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg` | Keep |
| 7 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Keep |
| 8 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` | Keep |

---

### `pages/promotional-items/mugs.blade.php`

*New images available: 7 (mugs/) — 7 eligible slots (no hero on this page) — all 7 Pending*

> All slots currently use `custom-shirts/` placeholder images. All 7 eligible slots will receive new dedicated mug images. The blade `image=` attributes also need updating (see Execution Checklist).

| # | Component | Size | Current Image (placeholder) | Replaced? |
|---|---|---|---|---|
| 1 | `carousel` slot 1 | 600×450px | `promo-items/mugs/top5pct-custom-coffee-mugs-in-joliet.jpg` | Done |
| 2 | `carousel` slot 2 | 600×450px | `promo-items/mugs/top5pct-custom-coffee-mugs.jpg` | Done |
| 3 | `carousel` slot 3 | 600×450px | `promo-items/mugs/top5pct-custom-mugs-near-me.jpg` | Done |
| 4 | `carousel` slot 4 | 600×450px | `promo-items/mugs/top5pct-custom-mugs.jpg` | Done |
| 5 | `card-image-with-text` (left) | 600×450px | `promo-items/mugs/top5pct-custom-printed-mugs.jpg` | Done |
| 6 | `card-image-with-text` (right) | 600×450px | `promo-items/mugs/top5pct-picture-on-mugs.jpg` | Done |
| 7 | `card-detailed-info` image1 | 400×300px | `promo-items/mugs/top5pct-printed-mugs.jpg` | Done |
| 8 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep |

---

## Special Notes

### Duplicate filename: `custom-vinyl-hoodies.jpg` ✓ Resolved

`custom-vinyl-hoodies.jpg` existed in two source directories:
- `custom-apparel/digital-vinyl/custom-vinyl-hoodies.jpg`
- `custom-apparel/printing-options/digital-vinyl/custom-vinyl-hoodies.jpg`

Checksums were compared during migration — the files had **different content**. Both were copied:
- `public/images/custom-shirts/top5pct-custom-vinyl-hoodies.jpg` (from digital-vinyl/)
- `public/images/custom-shirts/top5pct-custom-vinyl-hoodies-2.jpg` (from printing-options/digital-vinyl/)

### Missing files referenced in `table-cloths.blade.php`

The carousel on `signs/table-cloths.blade.php` references two files that did not exist in `public/images/table-runners/`:
- `top5pct-custom-table-cloth-joliet-will-county.jpg` (carousel slot 3) — marked **Done**; the blade `image=` attribute still needs to be updated to point to the new `top5pct-table-cloths.jpg` (the 3rd incoming table-cloth image)
- `top5pct-article-table-cloths-table-runners.jpg` (carousel slot 4) — **Keep**; still renders broken until a dedicated article image is created

### Typo in source: `safety-work-gear-joliert.jpg` ✓ Fixed

The source file `custom-apparel/group-shirts/corporate-wear-shirts/safety-work-gear-joliert.jpg` had a typo (`joliert`). Corrected at destination: `public/images/corporate-wear/top5pct-safety-work-gear-joliet.jpg`.

### Typo in source: `vecal-decals.jpg`

The source file `vehicle-decals/automobile-graphics/vecal-decals.jpg` appears to be a misspelling of "vehicle decals". Preserve the source typo in the destination name (`top5pct-vecal-decals.jpg`) for now — correct it separately once confirmed.

### Deleted: `.psd` file

`public/new-images/custom-apparel/specialty-material/holographic/custom-jackets-with-glitter-in-joliet.psd` has been deleted. It was a Photoshop source file, not a web-ready image. This leaves `holographic-shirts.blade.php` with 0 new images — all slots on that page remain **Keep**. If a JPEG export is ever needed, export from the original source and name it `top5pct-custom-jackets-with-glitter-in-joliet.jpg` → destination `custom-shirts/`.

### Promo-items pages — blade attributes updated ✓

`can-koozies.blade.php` and `mugs.blade.php` blade `src`/`image=` attributes have been updated to reference the new `promo-items/koozies/` and `promo-items/mugs/` paths.

### No new banner (page-hero) images

None of the new-images directories contain page-hero banner images. All existing `top5pct-banner-*` files across every `public/images/` directory are untouched. All `category-hero` slots are **Keep**.

### All `card-banner-slide-in` CTAs stay

Every slide-in CTA on every page is **Keep** — regardless of whether its current image comes from the same directory as the page or a neighboring page's directory. None of these slots receive new images in this migration pass.

---

## Execution Checklist

- [x] Create `public/images/promo-items/koozies/`
- [x] Create `public/images/promo-items/mugs/`
- [x] Resolve `custom-vinyl-hoodies.jpg` duplicate — files differed; both copied (`top5pct-custom-vinyl-hoodies.jpg` + `top5pct-custom-vinyl-hoodies-2.jpg`)
- [x] Run migration for sections 1–16 above — 125 files copied, 1 renamed to `-old.jpg` (`top5pct-yard-signs-joliet-old.jpg`), 0 errors
- [x] Verify all files present at destination with `top5pct-` prefix
- [x] Mark each slot **Done** in this document
- [x] Fix `table-cloths.blade.php` carousel slot 3 — updated `image=` attribute from the missing `top5pct-custom-table-cloth-joliet-will-county.jpg` to `top5pct-table-cloths.jpg` ✓
- [ ] Fix `table-cloths.blade.php` carousel slot 4 — `top5pct-article-table-cloths-table-runners.jpg` still missing; create or source a dedicated article image
- [x] Update `can-koozies.blade.php` — 2 Done carousel slot `src` attributes updated to `promo-items/koozies/` paths ✓
- [x] Update `mugs.blade.php` — all 7 Done slot `src`/`image=` attributes updated to `promo-items/mugs/` paths ✓
- [ ] Remove `public/new-images/` directory once all above is verified

---

## Round 2 — New Images Migration

### Overview

Move all files from `public/new-images/` (Round 2 batch) into the matching `public/images/` directories, applying the same `top5pct-` prefix convention. **Total new images: 113 JPG files** (1 `.mov` video file skipped — see Special Notes).

---

### Conventions (same as Round 1)

| Rule | Detail |
|---|---|
| Prefix all incoming files | `<filename>.jpg` → `top5pct-<filename>.jpg` |
| Spaces and uppercase in filenames | Replace spaces with hyphens; normalize to lowercase: `Custom-Backlit-Display-Signs-in-Joliet.jpg` → `top5pct-custom-backlit-display-signs-in-joliet.jpg` |
| Conflict resolution | If `top5pct-<name>.jpg` already exists at destination, rename existing to `top5pct-<name>-old.jpg` before copying |
| Banners (page-hero images) | Untouched — no new banner-format images exist in this batch |
| New directories | Create before copying if they do not yet exist |
| After migration | `public/new-images/` directory can be removed once all moves are verified |

---

### Directory Mapping

| `public/new-images/` source | `public/images/` destination | New dir? |
|---|---|---|
| `Business Signs/Backlit Signs/` | `backlit-signs/` | **yes** |
| `Business Signs/Banners/` | `banners/` | **yes** |
| `Business Signs/Door Signs/` | `window-wall-floor-decals/` | **yes** |
| `Business Signs/Outdoor Signs/` | `outdoor-signs/` | **yes** |
| `Business Signs/Posters/` | `posters/` | **yes** |
| `Business Signs/Wall Signs/` | `window-wall-floor-decals/` | no |
| `Business Signs/Window Signs/` | `window-wall-floor-decals/` | **yes** |
| `Custom Shirts/Group Shirts/Corporate Wear/` | `corporate-wear/` | no |
| `Custom Shirts/Group Shirts/Spirit Wear/` | `spirit-wear/` | no |
| `Custom Shirts/Printing Options/Digital Vinyl/` | `custom-shirts/` + `digital-vinyl/` | **yes** |
| `Custom Shirts/Printing Options/DTF/` | `dtf-transfers/` | **yes** |
| `Custom Shirts/Printing Options/Embroidery/` | `embroidery/` | **yes** |
| `Custom Shirts/Printing Options/Rhinestones/` | `custom-shirts/` | **yes** |
| `Custom Shirts/Printing Options/Sublimation/` | `sublimation/` | **yes** |
| `Custom Shirts/Specialty Material/Brick/` | `custom-shirts/` | **yes** |
| `Custom Shirts/Specialty Material/Chameleon/` | `custom-shirts/` | no |
| `Custom Shirts/Specialty Material/Flock/` | `flock-shirts/` | **yes** |
| `Custom Shirts/Specialty Material/Foil/` | `custom-shirts/` | **yes** |
| `Custom Shirts/Specialty Material/Glitter/` | `glitter-shirts/` | **yes** |
| `Custom Shirts/Specialty Material/Glow/` | `glow-shirts/` | **yes** |
| `Custom Shirts/Specialty Material/Holographic/` | `holographic-shirts/` | **yes** |
| `Custom Shirts/Specialty Material/Puff/` | `custom-shirts/` | **yes** |
| `Custom Shirts/Specialty Material/Reflective/` | `reflective-shirts/` | **yes** |
| `Custom Shirts/Specialty Material/Rhinestones/` | `custom-shirts/` | **yes** |
| `Ground Signs/A-Frames/` | `sidewalk-signs/` | **yes** |
| `Koozies/` | `promo-items/koozies/` | **yes** |
| `Mugs/` | `promo-items/mugs/` | **yes** |
| `Stickers/Custom Shaped Stickers/` | `stickers-decals/` | **yes** |
| `Stickers/Regular Stickers/` | `stickers-decals/` | no |
| `Table Signs/Table Cloths/` | `table-runners/` | no |
| `Table Signs/Table Runner/` | `table-runners/` | no |
| `Vehicle Decals/Automobile Graphics/` | `automobile-graphics/` | **yes** |
| `Vehicle Decals/DOT Decals/` | `dot-decals/` | **yes** |
| `Vehicle Decals/Vehicle Magnets/` | `vehicle-magnets/` | **yes** |

---

### Directory Image Counts

| Directory | Existing (after R1) | R2 new | After R2 |
|---|---|---|---|
| `automobile-graphics/` | 16 | 1 | 17 |
| `backlit-signs/` | 0 | 7 | 7 |
| `banners/` | 15 | 5 | 20 |
| `corporate-wear/` | 15 | 1 | 16 |
| `custom-shirts/` | 56 | 49 | 105 |
| `dot-decals/` | 10 | 7 | 17 |
| `dtf-transfers/` | 7 | 6 | 13 |
| `outdoor-signs/` | 0 | 2 | 2 |
| `posters/` | 7 | 4 | 11 |
| `promo-items/koozies/` | 2 | 3 | 5 |
| `promo-items/mugs/` | 7 | 1 | 8 |
| `sidewalk-signs/` | 9 | 3 | 12 |
| `spirit-wear/` | 10 | 2 | 12 |
| `stickers-decals/` | 14 | 4 | 18 |
| `table-runners/` | 14 | 3 | 17 |
| `vehicle-magnets/` | 14 | 5 | 19 |
| `window-wall-floor-decals/` | 15 | 10 | 25 |

> `custom-shirts/` R2 new count of 49 includes 5 foil images (flagged below). Excluding foil: 44 new.

---

### Section-by-Section File Operations

#### R2-1. `backlit-signs/` — Business Signs / Backlit Signs (7 files, NEW directory)

Create `public/images/backlit-signs/` before copying.

| Source | Destination |
|---|---|
| `Custom-Backlit-Display-Signs-in-Joliet.jpg` | `top5pct-custom-backlit-display-signs-in-joliet.jpg` *(lowercase normalized)* |
| `backlit-company-signs.jpg` | `top5pct-backlit-company-signs.jpg` |
| `backlit-display-signs-joliet.jpg` | `top5pct-backlit-display-signs-joliet.jpg` |
| `backlit-monument-sign-joliet.jpg` | `top5pct-backlit-monument-sign-joliet.jpg` |
| `backlit-outdoor-signs.jpg` | `top5pct-backlit-outdoor-signs.jpg` |
| `backlit-sign-new-lenox.jpg` | `top5pct-backlit-sign-new-lenox.jpg` |
| `monument-signs-joliet.jpg` | `top5pct-monument-signs-joliet.jpg` |

---

#### R2-2. `banners/` — Business Signs / Banners (5 files)

Product photos of banners — not page-hero images. Existing `top5pct-banner-*` files remain untouched.

| Source | Destination |
|---|---|
| `banners-for-trade-shows.jpg` | `top5pct-banners-for-trade-shows.jpg` |
| `mesh-construction-banner.jpg` | `top5pct-mesh-construction-banner.jpg` |
| `portable-banners.jpg` | `top5pct-portable-banners.jpg` |
| `retractable-banners-plainfield.jpg` | `top5pct-retractable-banners-plainfield.jpg` |
| `sports-banners.jpg` | `top5pct-sports-banners.jpg` |

---

#### R2-3. `window-wall-floor-decals/` — Door Signs (5 files)

| Source | Destination |
|---|---|
| `business-door-signs.jpg` | `top5pct-business-door-signs.jpg` |
| `door-sign-installers.jpg` | `top5pct-door-sign-installers.jpg` |
| `door-wraps-joliet.jpg` | `top5pct-door-wraps-joliet.jpg` |
| `vinyl-door-lettering.jpg` | `top5pct-vinyl-door-lettering.jpg` |
| `vinyl-door-signs.jpg` | `top5pct-vinyl-door-signs.jpg` |

---

#### R2-4. `outdoor-signs/` — Business Signs / Outdoor Signs (2 files, NEW directory)

Create `public/images/outdoor-signs/` before copying.

| Source | Destination |
|---|---|
| `outdoor-banner-signs-joliet.jpg` | `top5pct-outdoor-banner-signs-joliet.jpg` |
| `outdoor-sign-joliet.jpg` | `top5pct-outdoor-sign-joliet.jpg` |

---

#### R2-5. `posters/` — Business Signs / Posters (4 files)

| Source | Destination |
|---|---|
| `big-posters-joliet.jpg` | `top5pct-big-posters-joliet.jpg` |
| `custom-posters.jpg` | `top5pct-custom-posters.jpg` |
| `poster-board-joliet.jpg` | `top5pct-poster-board-joliet.jpg` |
| `posters-printed-joliet.jpg` | `top5pct-posters-printed-joliet.jpg` |

---

#### R2-6. `window-wall-floor-decals/` — Wall Signs (2 files)

| Source | Destination |
|---|---|
| `wall-signs.jpg` | `top5pct-wall-signs.jpg` ⚠ see collision note |
| `wall-wraps.jpg` | `top5pct-wall-wraps.jpg` |

---

#### R2-7. `window-wall-floor-decals/` — Window Signs (3 files)

| Source | Destination |
|---|---|
| `joliet-slammers-window-signs-joliet.jpg` | `top5pct-joliet-slammers-window-signs-joliet.jpg` |
| `window-signage.jpg` | `top5pct-window-signage.jpg` |
| `window-signs-joliet.jpg` | `top5pct-window-signs-joliet.jpg` ⚠ see collision note |

---

#### R2-8. `corporate-wear/` — Group Shirts / Corporate Wear (1 file)

| Source | Destination |
|---|---|
| `custom-company-apparel.jpg` | `top5pct-custom-company-apparel.jpg` |

---

#### R2-9. `spirit-wear/` — Group Shirts / Spirit Wear (2 files)

| Source | Destination |
|---|---|
| `spirit-wear-clothing.jpg` | `top5pct-spirit-wear-clothing.jpg` |
| `volleyball-team-uniforms-joliet.jpg` | `top5pct-volleyball-team-uniforms-joliet.jpg` |

---

#### R2-10. `custom-shirts/` — Digital Vinyl (1 file)

| Source | Destination |
|---|---|
| `digital-vinyl-t-shirts.jpg` | `top5pct-digital-vinyl-t-shirts.jpg` |

---

#### R2-11. `dtf-transfers/` — DTF Printing (6 files)

| Source | Destination |
|---|---|
| `custom-baby-clothing-joliet.jpg` | `top5pct-custom-baby-clothing-joliet.jpg` |
| `custom-bowling-shirts-dtf.jpg` | `top5pct-custom-bowling-shirts-dtf.jpg` |
| `custom-dtf-shirts.jpg` | `top5pct-custom-dtf-shirts.jpg` |
| `dtf-tees.jpg` | `top5pct-dtf-tees.jpg` |
| `dtf-t-shirt-maker.jpg` | `top5pct-dtf-t-shirt-maker.jpg` |
| `dtf-t-shirt-printing.jpg` | `top5pct-dtf-t-shirt-printing.jpg` |

---

#### R2-12. `custom-shirts/` — Embroidery (5 files)

| Source | Destination |
|---|---|
| `embroidered-bag.jpg` | `top5pct-embroidered-bag.jpg` |
| `embroidered-caps.jpg` | `top5pct-embroidered-caps.jpg` ⚠ see collision note |
| `embroidered-smocks.jpg` | `top5pct-embroidered-smocks.jpg` |
| `embroidery-beanies.jpg` | `top5pct-embroidery-beanies.jpg` |
| `stitched-embroidered-shirts.jpg` | `top5pct-stitched-embroidered-shirts.jpg` |

---

#### R2-13. `custom-shirts/` — Rhinestones / Printing Options (5 files)

| Source | Destination |
|---|---|
| `rhinestone-apparel-keith-elementary.jpg` | `top5pct-rhinestone-apparel-keith-elementary.jpg` |
| `rhinestone-bling-joliet.jpg` | `top5pct-rhinestone-bling-joliet.jpg` |
| `rhinestone-hoodie-joliet-west.jpg` | `top5pct-rhinestone-hoodie-joliet-west.jpg` |
| `rhinestone-ladies-shirt.jpg` | `top5pct-rhinestone-ladies-shirt.jpg` |
| `rhinestone-t-shirts-joliet.jpg` | `top5pct-rhinestone-t-shirts-joliet.jpg` |

---

#### R2-14. `custom-shirts/` — Sublimation (4 files)

| Source | Destination |
|---|---|
| `custom-sublimation-shirts.jpg` | `top5pct-custom-sublimation-shirts.jpg` |
| `dye-sublimation-custom-shirt-joliet.jpg` | `top5pct-dye-sublimation-custom-shirt-joliet.jpg` |
| `long-lasting-graphic-shirts.jpg` | `top5pct-long-lasting-graphic-shirts.jpg` |
| `sublmation-team-shirts.jpg` | `top5pct-sublmation-team-shirts.jpg` *(source typo preserved)* |

---

#### R2-15. `custom-shirts/` — Specialty / Brick (4 files)

| Source | Destination |
|---|---|
| `brick-vinyl-cresthill.jpg` | `top5pct-brick-vinyl-cresthill.jpg` |
| `brick-vinyl-custom-t-shirt.jpg` | `top5pct-brick-vinyl-custom-t-shirt.jpg` |
| `brick-vinyl-jackets-joliet.jpg` | `top5pct-brick-vinyl-jackets-joliet.jpg` |
| `customized-brick-vinyl-shirts.jpg` | `top5pct-customized-brick-vinyl-shirts.jpg` |

---

#### R2-16. `custom-shirts/` — Specialty / Chameleon (1 file)

> `chameleon-custom-shirt.mov` is a video file — **skipped**. Only the JPG is copied.

| Source | Destination |
|---|---|
| `custom-shirt-chameleon.jpg` | `top5pct-custom-shirt-chameleon.jpg` |

---

#### R2-17. `custom-shirts/` — Specialty / Flock (3 files)

| Source | Destination |
|---|---|
| `custom-flock-t-shirt-printing.jpg` | `top5pct-custom-flock-t-shirt-printing.jpg` |
| `flock-hoodie-printing.jpg` | `top5pct-flock-hoodie-printing.jpg` |
| `flock-shirt-vinyl.jpg` | `top5pct-flock-shirt-vinyl.jpg` |

---

#### R2-18. `custom-shirts/` — Specialty / Foil (5 files) ⚠

> **No matching URL path in `url.paths.txt`** for foil shirts. `foil-shirts.blade.php` exists but has no URL entry. Images are copied to `custom-shirts/` but **no slot assignments are made** until a URL path is added to `url.paths.txt`.

| Source | Destination |
|---|---|
| `custom-foil-polo.jpg` | `top5pct-custom-foil-polo.jpg` |
| `custom-wedding-foil-shirts.jpg` | `top5pct-custom-wedding-foil-shirts.jpg` |
| `foil-custom-t-shirts.jpg` | `top5pct-foil-custom-t-shirts.jpg` |
| `foil-gold-t-shirt.jpg` | `top5pct-foil-gold-t-shirt.jpg` |
| `gold-foil-printed-shirts.jpg` | `top5pct-gold-foil-printed-shirts.jpg` |

---

#### R2-19. `custom-shirts/` — Specialty / Glitter (7 files)

| Source | Destination |
|---|---|
| `custom-glitter-sweatshirts.jpg` | `top5pct-custom-glitter-sweatshirts.jpg` ⚠ see collision note |
| `custom-wedding-glitter-shirts.jpg` | `top5pct-custom-wedding-glitter-shirts.jpg` |
| `gitter-birthday-shirt.jpg` | `top5pct-gitter-birthday-shirt.jpg` *(source typo preserved)* |
| `glitter-blue-jean-jacket.jpg` | `top5pct-glitter-blue-jean-jacket.jpg` |
| `glitter-lips-custom-t-shirt.jpg` | `top5pct-glitter-lips-custom-t-shirt.jpg` |
| `glitter-t-shirts-cresthill.jpg` | `top5pct-glitter-t-shirts-cresthill.jpg` |
| `glitter-t-shirts.jpg` | `top5pct-glitter-t-shirts.jpg` |

> Note: `custom-glitter-sweatshirts.jpg` is a collision with an existing R1 file — the existing file is renamed to `-old.jpg` before the new copy lands. All 7 files go to `custom-shirts/`.

---

#### R2-20. `custom-shirts/` — Specialty / Glow (3 files)

| Source | Destination |
|---|---|
| `glow-in-the-dark-caps.jpg` | `top5pct-glow-in-the-dark-caps.jpg` |
| `glowing-halloween-bat-shirt.jpg` | `top5pct-glowing-halloween-bat-shirt.jpg` |
| `halloween-pumpkin-glow-shirt.jpg` | `top5pct-halloween-pumpkin-glow-shirt.jpg` |

---

#### R2-21. `custom-shirts/` — Specialty / Holographic (1 file)

| Source | Destination |
|---|---|
| `holographic-vinyl-hoodie-foil.jpg` | `top5pct-holographic-vinyl-hoodie-foil.jpg` |

---

#### R2-22. `custom-shirts/` — Specialty / Puff (3 files)

| Source | Destination |
|---|---|
| `custom-puff-shirts.jpg` | `top5pct-custom-puff-shirts.jpg` |
| `puff-shirts-joliet.jpg` | `top5pct-puff-shirts-joliet.jpg` |
| `puff-shirts.jpg` | `top5pct-puff-shirts.jpg` |

---

#### R2-23. `custom-shirts/` — Specialty / Reflective (4 files)

| Source | Destination |
|---|---|
| `custom-reflective-hoodies.jpg` | `top5pct-custom-reflective-hoodies.jpg` |
| `reflective-shirts.jpg` | `top5pct-reflective-shirts.jpg` |
| `reflective-shirts-shorewood.jpg` | `top5pct-reflective-shirts-shorewood.jpg` |
| `reflective-vinyl-shirts-plainfield.jpg` | `top5pct-reflective-vinyl-shirts-plainfield.jpg` |

---

#### R2-24. `custom-shirts/` — Specialty / Rhinestones (2 files)

| Source | Destination |
|---|---|
| `custom-rhinestone-shirts.jpg` | `top5pct-custom-rhinestone-shirts.jpg` |
| `rhinetsone-t-shirts.jpg` | `top5pct-rhinetsone-t-shirts.jpg` *(source typo preserved)* |

---

#### R2-25. `sidewalk-signs/` — Ground Signs / A-Frames (3 files)

| Source | Destination |
|---|---|
| `a-frame-sidewalk-signs.jpg` | `top5pct-a-frame-sidewalk-signs.jpg` |
| `sidewalk-signage.jpg` | `top5pct-sidewalk-signage.jpg` |
| `sidewalk-signs-joliet.jpg` | `top5pct-sidewalk-signs-joliet.jpg` ⚠ see collision note |

---

#### R2-26. `promo-items/koozies/` — Koozies (3 files)

| Source | Destination |
|---|---|
| `custom-can-koozies.jpg` | `top5pct-custom-can-koozies.jpg` |
| `koozies-joliet.jpg` | `top5pct-koozies-joliet.jpg` |
| `personalized-koozies-joliet.jpg` | `top5pct-personalized-koozies-joliet.jpg` |

---

#### R2-27. `promo-items/mugs/` — Mugs (1 file)

| Source | Destination |
|---|---|
| `printed-mugs.jpg` | `top5pct-printed-mugs.jpg` ⚠ see collision note |

---

#### R2-28. `stickers-decals/` — Custom Shaped Stickers (3 files)

| Source | Destination |
|---|---|
| `custom-shaped-stickers-cresthill.jpg` | `top5pct-custom-shaped-stickers-cresthill.jpg` |
| `die-cut-stickers-joliet.jpg` | `top5pct-die-cut-stickers-joliet.jpg` |
| `die-cut-stickers-shorewood.jpg` | `top5pct-die-cut-stickers-shorewood.jpg` |

---

#### R2-29. `stickers-decals/` — Regular Stickers (1 file)

| Source | Destination |
|---|---|
| `custom-stickers-cresthill.jpg` | `top5pct-custom-stickers-cresthill.jpg` |

---

#### R2-30. `table-runners/` — Table Cloths (2 files)

| Source | Destination |
|---|---|
| `custom-table-cloth-business.jpg` | `top5pct-custom-table-cloth-business.jpg` |
| `printed-table-cloths.jpg` | `top5pct-printed-table-cloths.jpg` |

---

#### R2-31. `table-runners/` — Table Runner (1 file)

| Source | Destination |
|---|---|
| `table-runner-joliet.jpg` | `top5pct-table-runner-joliet.jpg` |

---

#### R2-32. `automobile-graphics/` — Automobile Graphics (1 file)

| Source | Destination |
|---|---|
| `auto-window-wraps.jpg` | `top5pct-auto-window-wraps.jpg` |

---

#### R2-33. `dot-decals/` — DOT Decals (7 files)

| Source | Destination |
|---|---|
| `DOT-lettering-joliet.jpg` | `top5pct-dot-lettering-joliet.jpg` *(lowercase normalized)* |
| `custom-dot-decals-for-trucks-in-joliet.jpg` | `top5pct-custom-dot-decals-for-trucks-in-joliet.jpg` |
| `custom-dot-truck-signs-illinois.jpg` | `top5pct-custom-dot-truck-signs-illinois.jpg` |
| `dot-decals-semi-truck.jpg` | `top5pct-dot-decals-semi-truck.jpg` |
| `dot-magnets.jpg` | `top5pct-dot-magnets.jpg` |
| `trucking-dot-decals-in-joliet.jpg` | `top5pct-trucking-dot-decals-in-joliet.jpg` |

---

#### R2-34. `vehicle-magnets/` — Vehicle Magnets (5 files)

| Source | Destination |
|---|---|
| `car-decals-white-oaks-library.jpg` | `top5pct-car-decals-white-oaks-library.jpg` |
| `joliet-car-magnets.jpg` | `top5pct-joliet-car-magnets.jpg` |
| `magnet-vehicle-signs-joliet.jpg` | `top5pct-magnet-vehicle-signs-joliet.jpg` |
| `truck-sign-magnets-joliet.jpg` | `top5pct-truck-sign-magnets-joliet.jpg` |
| `yard-signs-near-me.jpg` | `top5pct-yard-signs-near-me.jpg` |

---

### Round 2 Special Notes

#### Collisions — rename existing before copying

| Existing file | Renamed to | New file arriving |
|---|---|---|
| `custom-shirts/top5pct-embroidered-caps.jpg` | `top5pct-embroidered-caps-old.jpg` | R2-12 embroidery |
| `custom-shirts/top5pct-custom-glitter-sweatshirts.jpg` | `top5pct-custom-glitter-sweatshirts-old.jpg` | R2-19 glitter |
| `window-wall-floor-decals/top5pct-wall-signs.jpg` | `top5pct-wall-signs-old.jpg` | R2-6 wall signs |
| `window-wall-floor-decals/top5pct-window-signs-joliet.jpg` | `top5pct-window-signs-joliet-old.jpg` | R2-7 window signs |
| `sidewalk-signs/top5pct-sidewalk-signs-joliet.jpg` | `top5pct-sidewalk-signs-joliet-old.jpg` | R2-25 a-frames |
| `promo-items/mugs/top5pct-printed-mugs.jpg` | `top5pct-printed-mugs-old.jpg` | R2-27 mugs |

#### Skipped: `.mov` video file

`Custom Shirts/Specialty Material/Chameleon/chameleon-custom-shirt.mov` — video file, not a web image. Skipped.

#### Foil shirts — slots assigned

`foil-shirts.blade.php` slots fully assigned in Round 2 pass. All 5 R2 foil images placed; all 3 rules resolved. See R2 slot table under `pages/custom-apparel/foil-shirts.blade.php`.

#### Missing blade pages — slots TBD

- `signs/backlit-signs.blade.php` — does not exist yet. 7 images copied to `backlit-signs/`. Slot inventory pending page creation.
- `signs/outdoor-signs.blade.php` — does not exist yet. 2 images copied to `outdoor-signs/`. Slot inventory pending page creation.
- Chameleon page — no blade page found. 1 image copied to `custom-shirts/`. Slot inventory pending page creation.

#### Source typos preserved at destination

| Source typo | Preserved destination name |
|---|---|
| `sublmation-team-shirts.jpg` | `top5pct-sublmation-team-shirts.jpg` |
| `gitter-birthday-shirt.jpg` | `top5pct-gitter-birthday-shirt.jpg` |
| `rhinetsone-t-shirts.jpg` | `top5pct-rhinetsone-t-shirts.jpg` |

---

### Replacement Rules (same as Round 1)

- **All `category-hero` slots** → **Keep**
- **All `card-banner-slide-in` slots** → **Keep**
- **All other slots** → filled **Pending** in page order, 1:1 against the count of new images available for that page's category. Slots beyond the count → **Keep**

### Replaced? Key

| Status | Meaning |
|---|---|
| **Pending** | Will receive a new image from `new-images/` — 1:1 in page order |
| **Keep** | No replacement: hero banners, all slide-in CTAs, or beyond the count of available new images |
| **Done** | Update to this once the swap is complete |

---

### Round 2 Blade Page Image Slot Inventory

---

### `pages/custom-apparel/dtf-transfers.blade.php`

*All 10 slots complete. 4-slot swap applied: R2 excess images fill hero (Rule 1) and fix 3 Rule 2 violations. R2 slots 7–8 were already in blade before this docs pass. No file moves needed.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `dtf-transfers/top5pct-dtf-t-shirt-printing.jpg` | Done — R2 excess to hero (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `dtf-transfers/top5pct-dtf-tees.jpg` | Done — R2 excess (Rule 2 fix; displaces R1 `custom-sweatshirts`) |
| 3 | `carousel` slot 2 | 600×450px | `dtf-transfers/top5pct-dtf-t-shirt-maker.jpg` | Done — R2 excess (Rule 2 fix; displaces R1 `custom-shirt-with-picture`) |
| 4 | `carousel` slot 3 | 600×450px | `dtf-transfers/top5pct-custom-t-shirts-dtf.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `dtf-transfers/top5pct-dtf-hoodies-joliet.jpg` | Done (R1) |
| 6 | `card-image-with-text` (left) | 600×450px | `dtf-transfers/top5pct-dtf-zip-up-hoodies.jpg` | Done (R1) |
| 7 | `card-image-with-text` (right) | 600×450px | `dtf-transfers/top5pct-custom-dtf-shirts.jpg` | Done — R2 excess (Rule 2 fix; displaces R2 `custom-baby-clothing`) |
| 8 | `card-detailed-info` image1 | 400×300px | `dtf-transfers/top5pct-custom-bowling-shirts-dtf.jpg` | Done (R2, already in blade) |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `dtf-transfers/toptpct-banner-dtf-transfers-joliet.jpg` | Keep — pre-migration banner, "dtf"+"transfers" ✓ |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Keep — intentional cross-promo to embroidery |

---

### `pages/custom-apparel/printing-options/embroidery.blade.php`

*All 10 slots complete. Directory: `embroidery/`. Files moved from `custom-shirts/`. Rename: `stitched-caps.jpg` → `embroidered-stitched-caps.jpg` applied on disk and in blade.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `embroidery/top5pct-stitched-embroidered-shirts.jpg` | Done — new R2 image (hero rule) |
| 2 | `carousel` slot 1 | 600×450px | `embroidery/top5pct-embroidered-aprons.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `embroidery/top5pct-embroidered-caps.jpg` | Done (R1) — R2 file replaced via collision rename |
| 4 | `carousel` slot 3 | 600×450px | `embroidery/top5pct-embroidery-in-joliet.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `embroidery/top5pct-embroidered-stitched-caps.jpg` | Done (R1) — renamed from `stitched-caps.jpg` |
| 6 | `card-image-with-text` (left) | 600×450px | `embroidery/top5pct-embroidered-bag.jpg` | Done |
| 7 | `card-image-with-text` (right) | 600×450px | `embroidery/top5pct-embroidered-smocks.jpg` | Done |
| 8 | `card-detailed-info` image1 | 400×300px | `embroidery/top5pct-embroidery-beanies.jpg` | Done |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `embroidery/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Done — displaced from hero |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `embroidery/top5pct-embroidered-caps-old.jpg` | Done — collision old file, 10th slot |

---

### `pages/custom-apparel/printing-options/rhinestone-apparel.blade.php`

*All 10 slots complete. Directory: `custom-shirts/` (shared by design — no own dir). R2 new images: 7 (5 from Printing Options + 2 from Specialty Material/Rhinestones) — all 7 were pre-applied to blade before this pass. Hero updated via direct R1 excess assignment: `rhinestone-hoodies-joliet.jpg` (R1 excess, superseded at carousel 1 by R2) promoted to hero (Rule 1 fix). No 2-slot swap needed. No file moves needed. All 3 rules fully resolved.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-rhinestone-hoodies-joliet.jpg` | Done — R1 excess assigned directly to hero (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-rhinestone-apparel-keith-elementary.jpg` | Done (R2, already in blade) |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-rhinestone-bling-joliet.jpg` | Done (R2, already in blade) |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-rhinestone-hoodie-joliet-west.jpg` | Done (R2, already in blade) |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-rhinestone-ladies-shirt.jpg` | Done (R2, already in blade) |
| 6 | `card-image-with-text` (left) "Crystal Bling…" | 600×450px | `custom-shirts/top5pct-rhinestone-t-shirts-joliet.jpg` | Done (R2, already in blade) |
| 7 | `card-image-with-text` (right) "Custom Designs…" | 600×450px | `custom-shirts/top5pct-custom-rhinestone-shirts.jpg` | Done (R2, already in blade) |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-rhinetsone-t-shirts.jpg` | Done (R2, already in blade; typo "rhinetsone" in filename preserved as-is) |
| 9 | `card-banner-slide-in` (direction="right") | full-width 16:7 | `custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg` | Keep — "rhinestone" ✓ Rule 2 |
| 10 | `card-banner-slide-in` (direction="left") | full-width 16:7 | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep — intentional cross-promo ("Rhinestone, Holographic, Foil…") |

---

### `pages/custom-apparel/dye-sublimation.blade.php`

*All 10 slots complete. Directory: `sublimation/`. Files moved from `custom-shirts/`. Hero updated to new R2 image. Carousel 1 replaced dog-bandanas (Rule 2 fix). Both slide-ins replaced glitter/flock (Rule 2 fix).*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `sublimation/top5pct-dye-sublimation-custom-shirt-joliet.jpg` | Done — new R2 image (hero rule) |
| 2 | `carousel` slot 1 | 600×450px | `sublimation/top5pct-sublimation-shirts.jpg` | Done — R1 excess, replaced `custom-dog-bandanas.jpg` (Rule 2 fix) |
| 3 | `carousel` slot 2 | 600×450px | `sublimation/top5pct-custom-face-mask-sublimated.jpg` | Done (R1) |
| 4 | `carousel` slot 3 | 600×450px | `sublimation/top5pct-custom-sublimated-towels.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `sublimation/top5pct-dye-sublimated-longsleeve-shirt-joliet.jpg` | Done (R1) |
| 6 | `card-image-with-text` (left) | 600×450px | `sublimation/top5pct-dye-sublimation-shirts.jpg` | Done (R1) |
| 7 | `card-image-with-text` (right) | 600×450px | `sublimation/top5pct-sublimation-shirt-printer.jpg` | Done (R1) |
| 8 | `card-detailed-info` image1 | 400×300px | `sublimation/top5pct-sublimation-shirt.jpg` | Done (R1) |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `sublimation/top5pct-custom-sublimation-shirts.jpg` | Done — R2, replaced glitter (Rule 2 fix) |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `sublimation/top5pct-sublmation-team-shirts.jpg` | Done — R2 typo preserved, replaced flock (Rule 2 fix) |

> Excluded (Rule 2 violation — no sublimation derivative in name): `top5pct-long-lasting-graphic-shirts.jpg` remains in `custom-shirts/` unassigned.

---

### `pages/custom-apparel/brick-shirts.blade.php`

*All 10 slots complete. Directory: `custom-shirts/` (shared by design — no own dir). Page was not inventoried in R1 (no R1 slot table) but the R1 brick/ source directory was harvested — 1 file (`brick-vinyl-hoodies.jpg`) staged into `custom-shirts/` and sat unassigned. Promoted directly to hero (Rule 1 fix, no 2-slot swap). All 4 R2 images were pre-applied to blade. No file moves needed. Rule 2 unfixable at slot 7 (no brick-named alt; all brick images fully placed; shared dir limitation). Slot 10 cross-promo excluded.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-brick-vinyl-hoodies.jpg` | Done — R1 excess assigned directly to hero (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-brick-vinyl-cresthill.jpg` | Done (R2, already in blade) |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-brick-vinyl-custom-t-shirt.jpg` | Done (R2, already in blade) |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-brick-vinyl-jackets-joliet.jpg` | Done (R2, already in blade) |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-customized-brick-vinyl-shirts.jpg` | Done (R2, already in blade) |
| 6 | `card-image-with-text` (left) "Shirts That Stand Out…" | 600×450px | `custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | Keep — "brick" ✓ Rule 2 |
| 7 | `card-image-with-text` (right) "Bold Designs Made…" | 600×450px | `custom-shirts/top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg` | Keep — Rule 2 unfixable; no brick-named alt available, all brick images placed; shared dir limitation |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | Keep — "brick" ✓ Rule 2 |
| 9 | `card-banner-slide-in` (direction="left") | full-width 16:7 | `custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | Keep — "brick" ✓ Rule 2 |
| 10 | `card-banner-slide-in` (direction="right") | full-width 16:7 | `custom-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | Keep — intentional cross-promo ("Add Flock, Puff, or Glitter…") |

---

### `pages/custom-apparel/flock-shirts.blade.php`

*All 10 slots complete. Directory: `flock-shirts/` (own dedicated dir per Rule 3 — created this pass). Not in R1 inventory. All 3 R2 images were pre-applied to blade before this pass — doc Pending entries corrected. Doc slot 5 prediction was stale (blade had `t-shirt-maker-article-pic2` not `custom-brick-shirts`). Hero (slot 1) was pre-existing `custom-flock-shirt-hoodie-cap-joliet.jpg` — not R1/R2 (Rule 1 violation). 2-slot swap: R2 `custom-flock-t-shirt-printing.jpg` promoted from carousel 1 → hero; displaced hero → carousel 1. Slot 7 was `custom-brick-shirts` placeholder — replaced with flock image (Rule 2 fix). Slot 5 Rule 2 unfixable: no flock-named alt remaining; stays in `custom-shirts/` (Rule 3 partial — generic image). Slot 10 intentional cross-promo, excluded from Rule 3. `top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` is dual-homed: `custom-shirts/` (other pages that reference it as cross-promo) and `flock-shirts/` (this page).*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `flock-shirts/top5pct-custom-flock-t-shirt-printing.jpg` | Done — Rule 1 fix: 2-slot swap (R2 promoted from carousel 1) |
| 2 | `carousel` slot 1 | 600×450px | `flock-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | Displaced hero fills vacated slot; "flock" ✓ |
| 3 | `carousel` slot 2 | 600×450px | `flock-shirts/top5pct-flock-hoodie-printing.jpg` | Done (R2, pre-applied, "flock" ✓) |
| 4 | `carousel` slot 3 | 600×450px | `flock-shirts/top5pct-flock-shirt-vinyl.jpg` | Done (R2, pre-applied, "flock" ✓) |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-t-shirt-maker-article-pic2.jpg` | Keep — Rule 2 unfixable: no flock-named alt remaining; Rule 3 partial: generic stays in custom-shirts/ (doc prediction was stale) |
| 6 | `card-image-with-text` (left) "The Velvet Feel…" | 600×450px | `flock-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | Done (Rule 3 fix; "flock" ✓) |
| 7 | `card-image-with-text` (right) "Bold Designs That Perform…" | 600×450px | `flock-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | Done — Rule 2 fix: flock image replaces brick-shirts placeholder; Rule 3 fix |
| 8 | `card-detailed-info` image1 | 400×300px | `flock-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | Done (Rule 3 fix; "flock" ✓) |
| 9 | `card-banner-slide-in` (direction="left") "Custom Flock Shirts, Velvet Feel, Premium Look" | full-width 16:7 | `flock-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | Done (Rule 3 fix; "flock" ✓) |
| 10 | `card-banner-slide-in` (direction="right") "Mix Flock With Holographic or Glitter…" | full-width 16:7 | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep — intentional cross-promo, excluded from Rule 3 |

---

### `pages/custom-apparel/glitter-shirts.blade.php`

*All 10 slots complete. Directory created: `glitter-shirts/`. All 9 glitter images moved from `custom-shirts/`. Hero updated via 2-slot swap: R2 promoted to hero, pre-existing cap-hoodie image takes card-detailed. R2 slots 4–8 were already in blade before this docs pass.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `glitter-shirts/top5pct-glitter-t-shirts.jpg` | Done — R2 promoted to hero (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `glitter-shirts/top5pct-custom-glitter-clothing.jpg` | Done (R1), moved |
| 3 | `carousel` slot 2 | 600×450px | `glitter-shirts/top5pct-custom-glitter-sweatshirts.jpg` | Done (R1), moved |
| 4 | `carousel` slot 3 | 600×450px | `glitter-shirts/top5pct-custom-wedding-glitter-shirts.jpg` | Done (R2, already in blade), moved |
| 5 | `carousel` slot 4 | 600×450px | `glitter-shirts/top5pct-glitter-blue-jean-jacket.jpg` | Done (R2, already in blade), moved |
| 6 | `card-image-with-text` (left) | 600×450px | `glitter-shirts/top5pct-glitter-lips-custom-t-shirt.jpg` | Done (R2, already in blade), moved |
| 7 | `card-image-with-text` (right) | 600×450px | `glitter-shirts/top5pct-glitter-t-shirts-cresthill.jpg` | Done (R2, already in blade), moved |
| 8 | `card-detailed-info` image1 | 400×300px | `glitter-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Pre-existing, moved — R2 promoted to hero |
| 9 | `card-banner-slide-in` (direction="left") | full-width 16:7 | `glitter-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep, moved |
| 10 | `card-banner-slide-in` (direction="right") | full-width 16:7 | `custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg` | Keep — intentional cross-promo to rhinestone, stays in `custom-shirts/` |

> R2 excess (moved to `glitter-shirts/`): `top5pct-gitter-birthday-shirt.jpg` — source typo "gitter" preserved, no slot assignment.

---

### `pages/custom-apparel/glow-in-the-dark-shirts.blade.php`

*All 10 slots complete. Directory: `glow-shirts/` (own dedicated dir per Rule 3 — created this pass). Not in R1 inventory. All 3 R2 images were pre-applied to blade before this pass. Hero (slot 1) was pre-existing `custom-glow-shirts-caps-hoodies-joliet.jpg` — not R1/R2 (Rule 1 violation). 2-slot swap: R2 `glow-in-the-dark-caps.jpg` promoted from carousel 1 → hero; displaced hero → carousel 1. Slot 7 `custom-pattern-shirts` placeholder replaced with glow image (Rule 2 fix). Slot 5 Rule 2 unfixable: no glow-named alt remaining. Slot 5 also remains in `custom-shirts/` (Rule 3 partial — generic image, no glow copy). Slot 10 is intentional cross-promo pointing to `custom-shirts/`, excluded from Rule 3. `top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` is dual-homed: `custom-shirts/` (other pages that reference it as cross-promo) and `glow-shirts/` (this page).*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `glow-shirts/top5pct-glow-in-the-dark-caps.jpg` | Done — Rule 1 fix: 2-slot swap (R2 promoted from carousel 1) |
| 2 | `carousel` slot 1 | 600×450px | `glow-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` | Displaced hero fills vacated slot; "glow" ✓ |
| 3 | `carousel` slot 2 | 600×450px | `glow-shirts/top5pct-glowing-halloween-bat-shirt.jpg` | Done (R2, "glowing" ✓) |
| 4 | `carousel` slot 3 | 600×450px | `glow-shirts/top5pct-halloween-pumpkin-glow-shirt.jpg` | Done (R2, "glow" ✓) |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg` | Keep — Rule 2 unfixable: no glow-named alt; Rule 3 partial: generic image stays in custom-shirts/ |
| 6 | `card-image-with-text` (left) "Shirts That Transform…" | 600×450px | `glow-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` | Done (Rule 3 — moved to glow-shirts/; "glow" ✓) |
| 7 | `card-image-with-text` (right) "Every Event Under the Stars" | 600×450px | `glow-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` | Done (Rule 2 fix + Rule 3 — was custom-pattern-shirts placeholder) |
| 8 | `card-detailed-info` image1 | 400×300px | `glow-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` | Done (Rule 3 — moved to glow-shirts/; "glow" ✓) |
| 9 | `card-banner-slide-in` (direction="right") "Custom Glow Shirts, Light Up Your Next Event" | full-width 16:7 | `glow-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` | Done (Rule 3 — moved to glow-shirts/; "glow" ✓) |
| 10 | `card-banner-slide-in` (direction="left") "Pair Glow-in-the-Dark With Holographic…" | full-width 16:7 | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep — intentional cross-promo, excluded from Rule 3 |

---

### `pages/custom-apparel/holographic-shirts.blade.php`

*All 10 slots complete. Directory: `holographic-shirts/` (own dedicated dir per Rule 3 — created this pass). R1 had 0 images. R2 had 1 image (`holographic-vinyl-hoodie-foil.jpg`) — pre-applied to carousel 1 before this pass. Hero (slot 1) was pre-existing `custom-holographic-shirt-hoodie-cap-joliet.jpg` — not R1/R2 (Rule 1 violation). 2-slot swap: R2 `holographic-vinyl-hoodie-foil.jpg` promoted from carousel 1 → hero; displaced hero → carousel 1. Doc slot 3 prediction was stale (blade had generic banner image, not holographic). Slots 3, 4, 5 Rule 2 fixes: foil and generic placeholders replaced with holographic images. Slot 7 Rule 2 fix: foil placeholder replaced with holographic. Carousel alternates 2 holographic images for variety. Slot 10 intentional cross-promo, excluded from Rule 3. `top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` dual-homed: `custom-shirts/` (13 other page references) and `holographic-shirts/` (this page).*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `holographic-shirts/top5pct-holographic-vinyl-hoodie-foil.jpg` | Done — Rule 1 fix: 2-slot swap (R2 promoted from carousel 1) |
| 2 | `carousel` slot 1 | 600×450px | `holographic-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Displaced hero fills vacated slot; "holographic" ✓ |
| 3 | `carousel` slot 2 | 600×450px | `holographic-shirts/top5pct-holographic-vinyl-hoodie-foil.jpg` | Done — Rule 2 fix: replaces generic banner image (stale doc prediction); R2 reused for variety; "holographic" ✓ |
| 4 | `carousel` slot 3 | 600×450px | `holographic-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Done — Rule 2 fix: replaces foil placeholder; "holographic" ✓ |
| 5 | `carousel` slot 4 | 600×450px | `holographic-shirts/top5pct-holographic-vinyl-hoodie-foil.jpg` | Done — Rule 2 fix: replaces generic pic1; R2 reused for variety; "holographic" ✓ |
| 6 | `card-image-with-text` (left) "The Shirt That Shifts…" | 600×450px | `holographic-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Done (Rule 3 fix; "holographic" ✓) |
| 7 | `card-image-with-text` (right) "Futuristic Apparel…" | 600×450px | `holographic-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Done — Rule 2 fix: replaces foil placeholder; Rule 3 fix |
| 8 | `card-detailed-info` image1 | 400×300px | `holographic-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Done (Rule 3 fix; "holographic" ✓) |
| 9 | `card-banner-slide-in` (direction="left") "Holographic Shirts, Color-Shifting…" | full-width 16:7 | `holographic-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Done (Rule 3 fix; "holographic" ✓) |
| 10 | `card-banner-slide-in` (direction="right") "Holographic, Foil, or Glitter, Shine Your Way" | full-width 16:7 | `custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg` | Keep — intentional cross-promo, excluded from Rule 3 |

---

### `pages/custom-apparel/foil-shirts.blade.php`

*All 10 slots complete. Directory: `custom-shirts/` (shared by design — no own dir, R2 flagged ⚠). Not in R1 inventory. Page was deferred in R2 (no URL path at time of R2 run). All 5 R2 foil images assigned for the first time in this pass. Hero, carousel 2–4, and card-right all updated. All 3 rules fully resolved — no residual violations. No file moves needed.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-foil-gold-t-shirt.jpg` | Done — R2 first-time assignment (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg` | Keep — "foil" ✓ Rule 2 |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-gold-foil-printed-shirts.jpg` | Done — R2 replaces banner-custom-apparel (Rule 2 fix) |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-foil-custom-t-shirts.jpg` | Done — R2 replaces custom-holographic (Rule 2 fix) |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-custom-foil-polo.jpg` | Done — R2 replaces t-shirt-maker-article-pic2 (Rule 2 fix) |
| 6 | `card-image-with-text` (left) "Mirror-Finish Metallic…" | 600×450px | `custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg` | Keep — "foil" ✓ Rule 2 |
| 7 | `card-image-with-text` (right) "Gold, Silver, and Color Foil Options" | 600×450px | `custom-shirts/top5pct-custom-wedding-foil-shirts.jpg` | Done — R2 replaces custom-holographic (Rule 2 fix) |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg` | Keep — "foil" ✓ Rule 2 |
| 9 | `card-banner-slide-in` (direction="right") | full-width 16:7 | `custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg` | Keep — "foil" ✓ Rule 2 |
| 10 | `card-banner-slide-in` (direction="left") | full-width 16:7 | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep — intentional cross-promo to glitter |

---

### `pages/custom-apparel/puff-shirts.blade.php`

*All 10 slots complete. Directory: `custom-shirts/` (shared across all specialty apparel pages by design — no own dir). Not in R1 inventory. Hero updated via 2-slot swap: R2 `top5pct-custom-puff-shirts.jpg` promoted from carousel 1 to hero (Rule 1 + Rule 2 fix). All 3 R2 carousel images were already in blade. No file moves needed. R2 doc corrected: carousel 4, card-left, and card-right all had wrong images (blade is authoritative). Rule 2 violations in slots 2, 5, 6, 7, 8, 9 are unfixable — no puff-named images exist for those slots; shared dir limitation.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-custom-puff-shirts.jpg` | Done — R2 to hero (Rule 1 + Rule 2 fix) |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Pre-existing hero displaced here (2-slot swap); Rule 2 unfixable, no puff-named alt |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-puff-shirts-joliet.jpg` | Done (R2, already in blade) |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-puff-shirts.jpg` | Done (R2, already in blade) |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg` | Keep; Rule 2 unfixable, no puff-named alt |
| 6 | `card-image-with-text` (left) "3D Texture That Gets Noticed" | 600×450px | `custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | Keep; Rule 2 unfixable, no puff-named alt |
| 7 | `card-image-with-text` (right) "Premium Appeal for Your Brand" | 600×450px | `custom-shirts/top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg` | Keep; Rule 2 unfixable, no puff-named alt |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | Keep; Rule 2 unfixable, no puff-named alt |
| 9 | `card-banner-slide-in` (direction="left") | full-width 16:7 | `custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | Keep; Rule 2 unfixable, no puff-named alt |
| 10 | `card-banner-slide-in` (direction="right") | full-width 16:7 | `custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg` | Keep — intentional cross-promo ("Puff, Rhinestone, or Flock…") |

---

### `pages/custom-apparel/reflective-shirts.blade.php`

*All 10 slots complete. Directory: `reflective-shirts/` (own dedicated dir per Rule 3 — created this pass). R1 had 1 image (`reflective-shirts-gold.jpg`) pre-applied to carousel 1. All 4 R2 images pre-applied to carousel 2–4 and card-left before this pass — doc Pending entries corrected. Hero (slot 1) was pre-existing `custom-reflective-shirts-hoodies-caps-joliet.jpg` — not R1/R2 (Rule 1 violation). 2-slot swap: R1 `reflective-shirts-gold.jpg` promoted from carousel 1 → hero; displaced hero → carousel 1. Slot 7 was `custom-vinyl-shirts` placeholder — replaced with reflective image (Rule 2 fix). Slot 10 intentional cross-promo, excluded from Rule 3. `top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` dual-homed: `custom-shirts/` (7 other page references) and `reflective-shirts/` (this page). All 5 R1/R2 images also copied to `reflective-shirts/` (originals kept in `custom-shirts/`).*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `reflective-shirts/top5pct-reflective-shirts-gold.jpg` | Done — Rule 1 fix: 2-slot swap (R1 promoted from carousel 1) |
| 2 | `carousel` slot 1 | 600×450px | `reflective-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | Displaced hero fills vacated slot; "reflective" ✓ |
| 3 | `carousel` slot 2 | 600×450px | `reflective-shirts/top5pct-custom-reflective-hoodies.jpg` | Done (R2, pre-applied, Rule 3 fix, "reflective" ✓) |
| 4 | `carousel` slot 3 | 600×450px | `reflective-shirts/top5pct-reflective-shirts.jpg` | Done (R2, pre-applied, Rule 3 fix, "reflective" ✓) |
| 5 | `carousel` slot 4 | 600×450px | `reflective-shirts/top5pct-reflective-shirts-shorewood.jpg` | Done (R2, pre-applied, Rule 3 fix, "reflective" ✓) |
| 6 | `card-image-with-text` (left) "Visibility That Could Save a Life" | 600×450px | `reflective-shirts/top5pct-reflective-vinyl-shirts-plainfield.jpg` | Done (R2, pre-applied, Rule 3 fix, "reflective" ✓) |
| 7 | `card-image-with-text` (right) "Style Meets Safety for Athletes and Events" | 600×450px | `reflective-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | Done — Rule 2 fix: replaces vinyl-shirts placeholder; Rule 3 fix |
| 8 | `card-detailed-info` image1 | 400×300px | `reflective-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | Done (Rule 3 fix; "reflective" ✓) |
| 9 | `card-banner-slide-in` (direction="left") "Reflective Branded Shirts…" | full-width 16:7 | `reflective-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | Done (Rule 3 fix; "reflective" ✓) |
| 10 | `card-banner-slide-in` (direction="right") "Glow in the Dark or Reflective…" | full-width 16:7 | `custom-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` | Keep — intentional cross-promo, excluded from Rule 3 |

---

### `pages/custom-apparel/group-wear/corporate-wear-shirts.blade.php`

*R1 used 7 slots (all Done). R2 new images: 1 — fills next eligible slot.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `corporate-wear/toptpct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg` | Keep |
| 2–8 | *(carousel 1–4, card-left, card-right, card-2image image1)* | — | *(Done R1)* | Done (R1) |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `corporate-wear/top5pct-custom-company-apparel.jpg` | Pending |
| 10 | `card-image-with-text` (left) | 600×450px | `corporate-wear/toptpct-custom-cap-hat-joliet-shorewood-rockdale.jpg` | Keep |
| 11 | `card-detailed-info` image1 | 400×300px | `corporate-wear/toptpct-article-corporate-wear-pic1.jpg` | Keep |
| 12 | `card-detailed-info` image2 | 400×300px | `corporate-wear/toptpct-article-corporate-wear-pic2.jpg` | Keep |
| 13 | `card-banner-slide-in` (right→left) | full-width 16:7 | `corporate-wear/toptpct-custom-button-up-shirt-joliet-shorewood.jpg` | Keep |
| 14 | `card-banner-slide-in` (left→right) | full-width 16:7 | `spirit-wear/top5pct-plainfield-south-high-school-hoodie.jpg` | Keep |

---

### `pages/custom-apparel/group-wear/spirit-wear-shirts.blade.php`

*R1 used 2 slots (carousel 1–2 Done). R2 new images: 2 — fills next 2 eligible slots.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `spirit-wear/top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `spirit-wear/top5pct-spirit-wear-joliet.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `spirit-wear/top5pct-spirit-wear-shirts.jpg` | Done (R1) |
| 4 | `carousel` slot 3 | 600×450px | `spirit-wear/top5pct-spirit-wear-clothing.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `spirit-wear/top5pct-volleyball-team-uniforms-joliet.jpg` | Pending |
| 6 | `card-image-with-text` (left) | 600×450px | `spirit-wear/top5pct-joliet-west-spirit-wear-hoodie-shorewood.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `spirit-wear/top5pct-spiritwear-fanwear-joliet-plainfield-shorewood.jpg` | Keep |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `spirit-wear/top5pct-sator-sanchez-school-shirt-joliet-crest-hill.jpg` | Keep |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `spirit-wear/top5pct-plainfield-south-high-school-hoodie.jpg` | Keep |
| 10 | `card-image-with-text` (left) | 600×450px | `spirit-wear/top5pct-bowling-shirts-joliet-shorewood-crest-hill.jpg` | Keep |
| 11 | `card-detailed-info` image1 | 400×300px | `spirit-wear/top5pct-article-spirit-wear-pic1.jpg` | Keep |
| 12 | `card-detailed-info` image2 | 400×300px | `spirit-wear/top5pct-article-fan-wear-pic2.jpg` | Keep |
| 13 | `card-banner-slide-in` (right→left) | full-width 16:7 | `spirit-wear/top5pct-plainfield-south-high-school-hoodie.jpg` | Keep |
| 14 | `card-banner-slide-in` (left→right) | full-width 16:7 | `reunion-shirts/toptpct-family-reunion-shirts-joliet-romeoville.jpg` | Keep |

---

### `pages/signs/banners.blade.php`

*All 14 slots complete. Directory: `banners/` (was already dedicated). Hero updated to R2 excess image (Rule 1 fix). Slots 9–12 were already in blade before docs update. No file moves needed.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `banners/top5pct-sports-banners.jpg` | Done — R2 excess, replaced pre-migration hero (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `banners/top5pct-banners-and-signs.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `banners/top5pct-banners-near-me.jpg` | Done (R1) |
| 4 | `carousel` slot 3 | 600×450px | `banners/top5pct-big-banners.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `banners/top5pct-custom-retractable-banners-joliet.jpg` | Done (R1) |
| 6 | `card-image-with-text` (left) | 600×450px | `banners/top5pct-custom-vinyl-banners.jpg` | Done (R1) |
| 7 | `card-image-with-text` (right) | 600×450px | `banners/top5pct-graduation-banners.jpg` | Done (R1) |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `banners/top5pct-retractable-banner.jpg` | Done (R1) |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `banners/top5pct-banners-for-trade-shows.jpg` | Done (R2) |
| 10 | `card-2image-with-text` image1 (2nd) | fluid 4:3, ~50% | `banners/top5pct-mesh-construction-banner.jpg` | Done (R2) |
| 11 | `card-2image-with-text` image2 (2nd) | fluid 4:3, ~50% | `banners/top5pct-portable-banners.jpg` | Done (R2) |
| 12 | `card-detailed-info` image1 | 400×300px | `banners/top5pct-retractable-banners-plainfield.jpg` | Done (R2) |
| 13 | `card-banner-slide-in` (right→left) | full-width 16:7 | `banners/top5pct-banners-business-joliet-shorewood-crest-hill.jpg` | Keep |
| 14 | `card-banner-slide-in` (left→right) | full-width 16:7 | `banners/top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg` | Keep |

---

### `pages/signs/door-signs.blade.php`

*All 10 slots complete. Directory: `window-wall-floor-decals/` (shared across door/wall/window pages by design). Hero updated via 2-slot swap: R1 `top5pct-door-signage.jpg` promoted from carousel 1 to hero (Rule 1 fix), pre-existing hero displaced to carousel 1. Slots 3–7 were already in blade (R2 pre-applied). No file moves needed.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `window-wall-floor-decals/top5pct-door-signage.jpg` | Done — R1 to hero (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `window-wall-floor-decals/top5pct-door-signs-joliet-shorewood-crest-hill.jpg` | Pre-existing hero displaced here (2-slot swap) |
| 3 | `carousel` slot 2 | 600×450px | `window-wall-floor-decals/top5pct-business-door-signs.jpg` | Done (R2, already in blade) |
| 4 | `carousel` slot 3 | 600×450px | `window-wall-floor-decals/top5pct-door-sign-installers.jpg` | Done (R2, already in blade) |
| 5 | `carousel` slot 4 | 600×450px | `window-wall-floor-decals/top5pct-door-wraps-joliet.jpg` | Done (R2, already in blade) |
| 6 | `card-image-with-text` (left) | 600×450px | `window-wall-floor-decals/top5pct-vinyl-door-lettering.jpg` | Done (R2, already in blade) |
| 7 | `card-image-with-text` (right) | 600×450px | `window-wall-floor-decals/top5pct-vinyl-door-signs.jpg` | Done (R2, already in blade) |
| 8 | `card-detailed-info` image1 | 400×300px | `window-wall-floor-decals/top5pct-door-signs-joliet-shorewood-crest-hill.jpg` | Keep (pre-existing) |
| 9 | `card-banner-slide-in` (direction="left") | full-width 16:7 | `window-wall-floor-decals/top5pct-door-signs-joliet-shorewood-crest-hill.jpg` | Keep |
| 10 | `card-banner-slide-in` (direction="right") | full-width 16:7 | `window-wall-floor-decals/top5pct-wall-decals-joliet.jpg` | Keep — intentional cross-promo to wall/window signs |

---

### `pages/signs/wall-signs.blade.php`

*All 10 slots complete. Directory: `wall-signs/` (Rule 3 applied). Hero updated via 2-slot swap: R1 `top5pct-wall-signs.jpg` promoted from carousel 1 to hero (Rule 1 fix), pre-existing hero `top5pct-wall-signs-joliet.jpg` displaced to carousel 1. R2 `top5pct-wall-wraps.jpg` already in blade at carousel 2 (doc was stale). 4 images dual-homed: also remain in `window-wall-floor-decals/` for floor-signs, window-signs, door-signs, signs/index, and article pages. Cross-promo slide-in (slot 10) intentionally excluded, stays in `window-wall-floor-decals/`.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `wall-signs/top5pct-wall-signs.jpg` | Done — Rule 1: 2-slot swap (R1 promoted from carousel 1) |
| 2 | `carousel` slot 1 | 600×450px | `wall-signs/top5pct-wall-signs-joliet.jpg` | Done — displaced hero fills vacated slot; dual-homed |
| 3 | `carousel` slot 2 | 600×450px | `wall-signs/top5pct-wall-wraps.jpg` | Done (R2, was already in blade) |
| 4 | `carousel` slot 3 | 600×450px | `wall-signs/top5pct-article-window-wall-signs.jpg` | Done — Rule 3; dual-homed |
| 5 | `carousel` slot 4 | 600×450px | `wall-signs/top5pct-banner-wall-decal-door-signs-joliet.jpg` | Done — Rule 3; dual-homed |
| 6 | `card-image-with-text` (left) | 600×450px | `wall-signs/top5pct-wall-decals-joliet.jpg` | Done — Rule 3; dual-homed |
| 7 | `card-image-with-text` (right) | 600×450px | `wall-signs/top5pct-article-window-wall-signs.jpg` | Done — Rule 3; dual-homed (same file as slot 4) |
| 8 | `card-detailed-info` image1 | 400×300px | `wall-signs/top5pct-wall-signs-joliet.jpg` | Done — Rule 3; same file as slot 2 |
| 9 | `card-banner-slide-in` (right) | full-width 16:7 | `wall-signs/top5pct-wall-decals-joliet.jpg` | Done — Rule 3; same file as slot 6 |
| 10 | `card-banner-slide-in` (left) cross-promo | full-width 16:7 | `window-wall-floor-decals/top5pct-window-decals-joliet-shorewood-crest-hill.jpg` | Excluded — intentional cross-promo |

---

### `pages/signs/window-signs.blade.php`

*All 10 slots complete. Directory: `window-wall-floor-decals/` (shared across door/wall/window pages by design). Hero updated via 2-slot swap: R2 `top5pct-window-signage.jpg` promoted from card-detailed to hero (Rule 1 + Rule 2 fix), pre-existing hero displaced to card-detailed. Slots 7 and 8 were already in blade before this docs pass. No file moves needed.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `window-wall-floor-decals/top5pct-window-signage.jpg` | Done — R2 to hero (Rule 1 + Rule 2 fix) |
| 2 | `carousel` slot 1 | 600×450px | `window-wall-floor-decals/top5pct-business-window-signs.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `window-wall-floor-decals/top5pct-custom-window-signs.jpg` | Done (R1) |
| 4 | `carousel` slot 3 | 600×450px | `window-wall-floor-decals/top5pct-window-door-signs.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `window-wall-floor-decals/top5pct-window-signs-joliet-slammers.jpg` | Done (R1) |
| 6 | `card-image-with-text` (left) | 600×450px | `window-wall-floor-decals/top5pct-window-signs-joliet.jpg` | Done (R1) |
| 7 | `card-image-with-text` (right) | 600×450px | `window-wall-floor-decals/top5pct-joliet-slammers-window-signs-joliet.jpg` | Done (R2, already in blade) |
| 8 | `card-detailed-info` image1 | 400×300px | `window-wall-floor-decals/top5pct-banner-wall-decal-door-signs-joliet.jpg` | Pre-existing hero displaced here (2-slot swap) |
| 9 | `card-banner-slide-in` (direction="left") | full-width 16:7 | `window-wall-floor-decals/top5pct-window-decals-joliet-shorewood-crest-hill.jpg` | Keep |
| 10 | `card-banner-slide-in` (direction="right") | full-width 16:7 | `window-wall-floor-decals/top5pct-wall-decals-joliet.jpg` | Keep — intentional cross-promo to wall/floor signs |

> R2 excess: `top5pct-window-signs-joliet.jpg` — collision rename, same file as R1 slot 6. No additional unassigned images.

---

### `pages/signs/posters.blade.php`

*All 13 slots complete. Directory: `posters/` (own category dir). Not in R1 inventory. Hero updated via 2-slot swap: R2 `top5pct-posters-printed-joliet.jpg` promoted from carousel 4 to hero (Rule 1 fix), pre-existing hero displaced to carousel 4. All 4 R2 carousel images were already in blade. No file moves needed. R2 doc corrected: had 12 slots (missed card-detailed at slot 11, duplicate at slot 10).*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `posters/top5pct-posters-printed-joliet.jpg` | Done — R2 to hero (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `posters/top5pct-big-posters-joliet.jpg` | Done (R2, already in blade) |
| 3 | `carousel` slot 2 | 600×450px | `posters/top5pct-custom-posters.jpg` | Done (R2, already in blade) |
| 4 | `carousel` slot 3 | 600×450px | `posters/top5pct-poster-board-joliet.jpg` | Done (R2, already in blade) |
| 5 | `carousel` slot 4 | 600×450px | `posters/top5pct-banner-poster-maker-joliet-romeoville-shorewood.jpg` | Pre-existing hero displaced here (2-slot swap) |
| 6 | `card-image-with-text` (left) "Poster Printing in Joliet" | 600×450px | `posters/top5pct-poster-printing-joliet-shorewood-romeoville.jpg` | Keep |
| 7 | `card-image-with-text` (right) "Large Format" | 600×450px | `posters/top5pct-poster-maker-joliet-shorewood-plainfield.jpg` | Keep |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `posters/top5pct-poster-board-joliet-shorewood-romeoville.jpg` | Keep |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `posters/top5pct-postermywall-joliet-shorewood-crest-hill.jpg` | Keep |
| 10 | `card-image-with-text` (left) "Design and Paper Options" | 600×450px | `posters/top5pct-poster-store-joliet-shorewood-plainfield.jpg` | Keep |
| 11 | `card-detailed-info` image1 | 400×300px | `posters/top5pct-article-posters-joliet-pic1.jpg` | Keep |
| 12 | `card-banner-slide-in` (direction="right") | full-width 16:7 | `posters/top5pct-poster-printing-joliet-shorewood-romeoville.jpg` | Keep |
| 13 | `card-banner-slide-in` (direction="left") | full-width 16:7 | `banners/top5pct-banners-business-joliet-shorewood-crest-hill.jpg` | Keep — intentional cross-promo to banners |

---

### `pages/signs/backlit-signs.blade.php`

*Blade page does not exist yet. 7 images copied to `backlit-signs/`. Slot inventory TBD pending page creation.*

---

### `pages/signs/sidewalk-signs-a-frame-signs.blade.php`

*All 10 slots complete. Directory: `sidewalk-signs/` (own dir ✓). Blade was completely reworked to a Parking Signs page before this pass — all images had been replaced with `business-signs/` and `window-wall-floor-decals/` content; none of the R1/R2 sidewalk-signs images were present. All 9 non-cross-promo slots replaced in full (Rules 1+2+3). No file moves needed — all sidewalk-signs/ images were already in place. Note: R1 doc at line 692 tracks `sidewalk-signs.blade.php` — a separate page, not this one.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `sidewalk-signs/top5pct-a-frame-sidewalk-signs.jpg` | Done — R2 to hero (Rules 1+2+3 fix) |
| 2 | `carousel` slot 1 | 600×450px | `sidewalk-signs/top5pct-a-frame-sign.jpg` | Done — R1 (Rules 2+3 fix) |
| 3 | `carousel` slot 2 | 600×450px | `sidewalk-signs/top5pct-custom-a-frame-sidewalk-signs-joliet.jpg` | Done — R1 (Rules 2+3 fix) |
| 4 | `carousel` slot 3 | 600×450px | `sidewalk-signs/top5pct-sidewalk-sign.jpg` | Done — R1 (Rules 2+3 fix) |
| 5 | `carousel` slot 4 | 600×450px | `sidewalk-signs/top5pct-sidewalk-signs-joliet.jpg` | Done — R2 collision replaces R1 transparently (Rules 2+3 fix) |
| 6 | `card-image-with-text` (left) "Keep Your Parking Lot Organized" | 600×450px | `sidewalk-signs/top5pct-a-frame-sidewalk-sign-joliet.jpg` | Done — pre-existing, "a-frame"+"sidewalk" ✓ (Rules 2+3 fix) |
| 7 | `card-image-with-text` (right) "Custom Designs to Fit Your Property" | 600×450px | `sidewalk-signs/top5pct-sidewalk-signage.jpg` | Done — R2 (Rules 2+3 fix) |
| 8 | `card-detailed-info` image1 | 400×300px | `sidewalk-signs/top5pct-article-a-frame-sidewalk-signs.jpg` | Done — pre-existing, "a-frame"+"sidewalk" ✓ (Rules 2+3 fix) |
| 9 | `card-banner-slide-in` (direction="right") | full-width 16:7 | `sidewalk-signs/top5pct-sidewalk-a-frames-joliet-shorewood.jpg` | Done — pre-existing, "sidewalk"+"a-frames" ✓ (Rules 2+3 fix) |
| 10 | `card-banner-slide-in` (direction="left") | full-width 16:7 | `banners/top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg` | Keep — intentional cross-promo ("Banners, Sidewalk Signs, and More…") |

---

### `pages/signs/table-cloths.blade.php`

*All 10 slots complete. Directory: `table-cloths/` (Rule 3 applied). Hero updated via 2-slot swap: R1 `top5pct-custom-table-cloth.jpg` promoted from carousel 1 to hero (Rule 1 fix), displaced hero fills carousel 1. Carousel 4 missing-file replaced with `top5pct-custom-table-cloth-joliet-crest-hill.jpg` (Rule 2 fix). Slide-in left `top5pct-custom-table-runner-joliet-shorewood.jpg` replaced with `top5pct-article-custom-table-cloths-joliet.jpg` (Rule 2 fix — "table-runner" not a table-cloths derivative). R2 slots 6–7 were already in blade (doc was stale). All 8 files dual-homed: table-runners page keeps pointing to `table-runners/`. Cross-promo slide-in (slot 10) stays in `banners/`.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `table-cloths/top5pct-custom-table-cloth.jpg` | Done — Rule 1: 2-slot swap (R1 promoted from carousel 1) |
| 2 | `carousel` slot 1 | 600×450px | `table-cloths/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg` | Done — displaced hero fills vacated slot; "table-cloth" ✓; dual-homed |
| 3 | `carousel` slot 2 | 600×450px | `table-cloths/top5pct-personalized-tablecloth-joliet.jpg` | Done (R1); "tablecloth" ✓ |
| 4 | `carousel` slot 3 | 600×450px | `table-cloths/top5pct-table-cloths.jpg` | Done (R1); "table-cloths" ✓ |
| 5 | `carousel` slot 4 | 600×450px | `table-cloths/top5pct-custom-table-cloth-joliet-crest-hill.jpg` | Done — Rule 2 fix: replaces missing `top5pct-article-table-cloths-table-runners.jpg`; "table-cloth" ✓; dual-homed |
| 6 | `card-image-with-text` (left) | 600×450px | `table-cloths/top5pct-custom-table-cloth-business.jpg` | Done (R2, already in blade); "table-cloth" ✓ |
| 7 | `card-image-with-text` (right) | 600×450px | `table-cloths/top5pct-printed-table-cloths.jpg` | Done (R2, already in blade); "table-cloths" ✓ |
| 8 | `card-detailed-info` image1 | 400×300px | `table-cloths/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg` | Keep; same file as slot 2; dual-homed |
| 9 | `card-banner-slide-in` (left) | full-width 16:7 | `table-cloths/top5pct-article-custom-table-cloths-joliet.jpg` | Done — Rule 2 fix: replaces `top5pct-custom-table-runner-joliet-shorewood.jpg`; "table-cloths" ✓; dual-homed |
| 10 | `card-banner-slide-in` (right) cross-promo | full-width 16:7 | `banners/top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg` | Excluded — intentional cross-promo |

---

### `pages/signs/table-runners.blade.php`

*R1 used 4 slots (carousel 1–4 Done). R2 new images: 1 — fills next eligible slot.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `table-runners/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg` | Keep |
| 2–5 | `carousel` slots 1–4 | 600×450px | *(Done R1)* | Done (R1) |
| 6 | `card-image-with-text` (left) | 600×450px | `table-runners/top5pct-table-runner-joliet.jpg` | Pending |
| 7 | `card-image-with-text` (right) | 600×450px | `table-runners/top5pct-custom-table-cloth-joliet-crest-hill.jpg` | Keep |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `table-runners/top5pct-custom-table-runner-joliet-shorewood.jpg` | Keep |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `table-runners/top5pct-custom-table-skirt-joliet-shorewood-plainfield.jpg` | Keep |
| 10 | `card-image-with-text` (left) | 600×450px | `table-runners/top5pct-table-runner-popus-gourmet-popcorn-joliet.jpg` | Keep |
| 11 | `card-detailed-info` image1 | 400×300px | `table-runners/top5pct-article-custom-table-cloths-joliet.jpg` | Keep |
| 12 | `card-banner-slide-in` (right→left) | full-width 16:7 | `table-runners/top5pct-custom-table-runner-joliet-shorewood.jpg` | Keep |
| 13 | `card-banner-slide-in` (left→right) | full-width 16:7 | `banners/top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg` | Keep |

---

### `pages/stickers/custom-shaped-stickers.blade.php`

*All 10 slots complete. Directory: `stickers-decals/` (shared with standard-stickers by design — no per-page split needed). Hero updated via R2 excess: `top5pct-die-cut-stickers-joliet.jpg` promoted to hero (Rule 1 fix). No file moves needed.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `stickers-decals/top5pct-die-cut-stickers-joliet.jpg` | Done — R2 excess to hero (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `stickers-decals/top5pct-custom-stickers.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `stickers-decals/top5pct-custom-glossy-stickers-in-joliet.jpg` | Done (R1) |
| 4 | `carousel` slot 3 | 600×450px | `stickers-decals/top5pct-custom-label-stickers.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `stickers-decals/top5pct-custom-shaped-stickers.jpg` | Done (R1) |
| 6 | `card-image-with-text` (left) | 600×450px | `stickers-decals/top5pct-diecut-stickers.jpg` | Done (R1) |
| 7 | `card-image-with-text` (right) | 600×450px | `stickers-decals/top5pct-stickers-in-joliet.jpg` | Done (R1) |
| 8 | `card-detailed-info` image1 | 400×300px | `stickers-decals/top5pct-custom-shaped-stickers-cresthill.jpg` | Done (R2, already in blade) |
| 9 | `card-banner-slide-in` (direction="right") | full-width 16:7 | `stickers-decals/top5pct-stickers-decals-joliet-boxing-sports.jpg` | Keep |
| 10 | `card-banner-slide-in` (direction="left") | full-width 16:7 | `stickers-decals/top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg` | Keep |

> R2 excess (in `stickers-decals/`, no slot assignment): `top5pct-die-cut-stickers-shorewood.jpg`. Hero displaced `top5pct-stickers-decals-joliet-ocean-viewz.jpg` to unassigned.

---

### `pages/stickers/standard-stickers.blade.php`

*Not in R1 inventory — all slots were Keep. R2 new images: 1 — fills carousel slot 1.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | *(existing hero)* | Keep |
| 2 | `carousel` slot 1 | 600×450px | `stickers-decals/top5pct-custom-stickers-cresthill.jpg` | Pending |
| 3–8 | *(remaining eligible slots)* | — | *(existing images)* | Keep |
| 9–10 | `card-banner-slide-in` × 2 | full-width 16:7 | *(existing)* | Keep |

---

### `pages/vehicle-graphics/automobile-graphics.blade.php`

*All 12 slots complete (slot 13 slide-in intentional cross-promo from vehicle-magnets/). Hero updated via 2-slot swap: R2 image promoted to hero, pre-existing article image returns to card-detailed. No file moves needed.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `automobile-graphics/top5pct-auto-window-wraps.jpg` | Done — R2 promoted to hero (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `automobile-graphics/top5pct-car-wraps.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `automobile-graphics/top5pct-pickup-truck-graphics.jpg` | Done (R1) |
| 4 | `carousel` slot 3 | 600×450px | `automobile-graphics/top5pct-trailer-decal-graphics.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `automobile-graphics/top5pct-trailer-decals.jpg` | Done (R1) |
| 6 | `card-image-with-text` (left) | 600×450px | `automobile-graphics/top5pct-van-graphics-decals.jpg` | Done (R1) |
| 7 | `card-image-with-text` (right) | 600×450px | `automobile-graphics/top5pct-vecal-decals.jpg` | Done (R1) |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `automobile-graphics/top5pct-vehicle-graphics.jpg` | Done (R1) |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `automobile-graphics/top5pct-vehicle-window-graphics-in-joliet.jpg` | Done (R1) |
| 10 | `card-image-with-text` (left) | 600×450px | `automobile-graphics/top5pct-vehicle-window-graphics-joliet.jpg` | Done (R1) |
| 11 | `card-detailed-info` image1 | 400×300px | `automobile-graphics/top5pct-article-car-wraps-vinyl-lettering.jpg` | Pre-existing article image — R2 image promoted to hero instead |
| 12 | `card-banner-slide-in` (left→right) | full-width 16:7 | `automobile-graphics/top5pct-vinyl-lettering-car-graphics-joliet-crest-hill.jpg` | Keep |
| 13 | `card-banner-slide-in` (right→left) | full-width 16:7 | `vehicle-magnets/top5pct-car-magnets-vehicle-magnets-joliet.jpg` | Keep — intentional cross-promo |

---

### `pages/vehicle-graphics/dot-decals.blade.php`

*All 13 slots complete. Hero updated via 2-slot swap: R2 slide-in image promoted to hero, pre-existing DOT-stickers image takes slide-in. R2 slots 5–10 and 12 were already in blade before this docs pass. No file moves needed.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `dot-decals/top5pct-truck-lettering-joliet-shorewood-rockdale.jpg` | Done — R2 promoted to hero (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `dot-decals/top5pct-dot-decals-joliet.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `dot-decals/top5pct-dot-semi-truck-decals.jpg` | Done (R1) |
| 4 | `carousel` slot 3 | 600×450px | `dot-decals/top5pct-dot-truck-decals-joliet.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `dot-decals/top5pct-custom-dot-decals-for-trucks-in-joliet.jpg` | Done (R2, already in blade) |
| 6 | `card-image-with-text` (left) | 600×450px | `dot-decals/top5pct-custom-dot-truck-signs-illinois.jpg` | Done (R2, already in blade) |
| 7 | `card-image-with-text` (right) | 600×450px | `dot-decals/top5pct-dot-decals-semi-truck.jpg` | Done (R2, already in blade) |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `dot-decals/top5pct-dot-lettering-joliet.jpg` | Done (R2, already in blade) |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `dot-decals/top5pct-dot-magnets.jpg` | Done (R2, already in blade) |
| 10 | `card-image-with-text` (left) | 600×450px | `dot-decals/top5pct-trucking-dot-decals-in-joliet.jpg` | Done (R2, already in blade) |
| 11 | `card-detailed-info` image1 | 400×300px | `dot-decals/top5pct-article-DOT-decals-vinyl-lettering.jpg` | Keep |
| 12 | `card-banner-slide-in` (right→left) | full-width 16:7 | `dot-decals/top5pct-DOT-stickers-joliet-shorewood-rockdale.jpg` | Pre-existing — R2 promoted to hero |
| 13 | `card-banner-slide-in` (left→right) | full-width 16:7 | `vehicle-magnets/top5pct-car-magnets-vehicle-magnets-joliet.jpg` | Keep — intentional cross-promo |

---

### `pages/vehicle-graphics/vehicle-magnets.blade.php`

*All 12 slots complete. Directory: `vehicle-magnets/`. Hero updated via R2 excess: `top5pct-magnet-vehicle-signs-joliet.jpg` promoted to hero (Rule 1 fix). Slot 10 R2 image already in blade. Slot 12 cross-promo undocumented in prior tables, added now. No file moves needed.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `vehicle-magnets/top5pct-magnet-vehicle-signs-joliet.jpg` | Done — R2 excess to hero (Rule 1 fix) |
| 2 | `carousel` slot 1 | 600×450px | `vehicle-magnets/top5pct-automobile-magnets-joliet.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `vehicle-magnets/top5pct-car-magnets-joliet.jpg` | Done (R1) |
| 4 | `carousel` slot 3 | 600×450px | `vehicle-magnets/top5pct-car-magnets.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `vehicle-magnets/top5pct-car-sign-magnets-joliet.jpg` | Done (R1) |
| 6 | `card-image-with-text` (left) | 600×450px | `vehicle-magnets/top5pct-custom-car-magnets-in-joliet.jpg` | Done (R1) |
| 7 | `card-image-with-text` (right) | 600×450px | `vehicle-magnets/top5pct-custom-car-magnets.jpg` | Done (R1) |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `vehicle-magnets/top5pct-vehicle-magnets-joliet.jpg` | Done (R1) |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `vehicle-magnets/top5pct-vehicle-magnets.jpg` | Done (R1) |
| 10 | `card-detailed-info` image1 | 400×300px | `vehicle-magnets/top5pct-car-decals-white-oaks-library.jpg` | Done (R2, already in blade) |
| 11 | `card-banner-slide-in` (direction="right") | full-width 16:7 | `vehicle-magnets/top5pct-car-magnets-vehicle-magnets-joliet.jpg` | Keep |
| 12 | `card-banner-slide-in` (direction="left") | full-width 16:7 | `automobile-graphics/top5pct-car-wraps-vinyl-lettering-joliet-shorewood.jpg` | Keep — intentional cross-promo to automobile-graphics |

> R2 excess (in `vehicle-magnets/`, no slot assignment): `top5pct-joliet-car-magnets.jpg`, `top5pct-truck-sign-magnets-joliet.jpg`, `top5pct-yard-signs-near-me.jpg` (yard-signs has no "magnet"/"vehicle" — Rule 2 ineligible for this page). Hero displaced `top5pct-banner-car-magnets-joliet-shorewood-crest-hill.jpg` to unassigned.

---

### `pages/promotional-items/can-koozies.blade.php`

*All 9 slots complete. Directory: `promo-items/koozies/` (own dir ✓). No hero image on this page — Rule 1 N/A. R1 filled slots 1–2 (pre-applied). All 3 R2 images (slots 3–5) were already pre-applied to blade before this pass — doc Pending entries corrected. Slots 6–8 were custom-shirts placeholders — replaced with reused koozie images from own dir (Rules 2+3 fix; all 5 koozie images fully placed, image reuse across UI components is acceptable). Slot 9 is intentional cross-promo, excluded. No file moves needed.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `carousel` slot 1 | 600×450px | `promo-items/koozies/top5pct-can-koozies.jpg` | Done (R1) |
| 2 | `carousel` slot 2 | 600×450px | `promo-items/koozies/top5pct-custom-koozies.jpg` | Done (R1) |
| 3 | `carousel` slot 3 | 600×450px | `promo-items/koozies/top5pct-custom-can-koozies.jpg` | Done (R2, already in blade) |
| 4 | `carousel` slot 4 | 600×450px | `promo-items/koozies/top5pct-koozies-joliet.jpg` | Done (R2, already in blade) |
| 5 | `card-image-with-text` (left) "The Perfect Event Giveaway" | 600×450px | `promo-items/koozies/top5pct-personalized-koozies-joliet.jpg` | Done (R2, already in blade) |
| 6 | `card-image-with-text` (right) "Foam, Neoprene, and Custom Colors" | 600×450px | `promo-items/koozies/top5pct-custom-can-koozies.jpg` | Done — R2 reused, "koozie" ✓ (Rules 2+3 fix; was custom-shirts placeholder) |
| 7 | `card-detailed-info` image1 | 400×300px | `promo-items/koozies/top5pct-koozies-joliet.jpg` | Done — R2 reused, "koozie" ✓ (Rules 2+3 fix; was custom-shirts placeholder) |
| 8 | `card-banner-slide-in` (direction="right") "Custom Koozies for Your Next Event…" | full-width 16:7 | `promo-items/koozies/top5pct-can-koozies.jpg` | Done — R1 reused, "koozie" ✓ (Rules 2+3 fix; was custom-shirts placeholder) |
| 9 | `card-banner-slide-in` (direction="left") "Add Custom Shirts to Your Koozie Order…" | full-width 16:7 | `custom-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` | Keep — intentional cross-promo |

---

### `pages/promotional-items/mugs.blade.php`

*All 9 slots complete. Directory: `promo-items/mugs/` (own dir ✓). No hero image on this page — Rule 1 N/A. R1 filled slots 1–7 (all pre-applied). R2 `printed-mugs.jpg` replaced R1 original via collision rename — transparent, no blade change needed. Slide-in left (slot 8) was a leftover placeholder (`custom-shirts/custom-embroidery-shops`) — replaced with R1 original `printed-mugs-old.jpg` (Rule 2+3 fix). Slide-in right (slot 9) is intentional cross-promo, excluded. No file moves needed.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `carousel` slot 1 | 600×450px | `promo-items/mugs/top5pct-custom-coffee-mugs-in-joliet.jpg` | Done (R1) |
| 2 | `carousel` slot 2 | 600×450px | `promo-items/mugs/top5pct-custom-coffee-mugs.jpg` | Done (R1) |
| 3 | `carousel` slot 3 | 600×450px | `promo-items/mugs/top5pct-custom-mugs-near-me.jpg` | Done (R1) |
| 4 | `carousel` slot 4 | 600×450px | `promo-items/mugs/top5pct-custom-mugs.jpg` | Done (R1) |
| 5 | `card-image-with-text` (left) "Coffee Mugs That Work…" | 600×450px | `promo-items/mugs/top5pct-custom-printed-mugs.jpg` | Done (R1) |
| 6 | `card-image-with-text` (right) "Easy Ordering…" | 600×450px | `promo-items/mugs/top5pct-picture-on-mugs.jpg` | Done (R1) |
| 7 | `card-detailed-info` image1 | 400×300px | `promo-items/mugs/top5pct-printed-mugs.jpg` | Done (R2 collision — new image replaces R1 transparently) |
| 8 | `card-banner-slide-in` (direction="left") "Custom Mugs With Your Logo…" | full-width 16:7 | `promo-items/mugs/top5pct-printed-mugs-old.jpg` | Done — R1 original (renamed), "mug" ✓ (Rules 2+3 fix; was placeholder embroidery image) |
| 9 | `card-banner-slide-in` (direction="right") "Bundle Mugs With Custom Apparel…" | full-width 16:7 | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep — intentional cross-promo |

---

### Round 2 Execution Checklist

- [ ] Create `public/images/backlit-signs/`
- [ ] Create `public/images/outdoor-signs/`
- [ ] Rename collision files (6 renames — see Collision table above)
- [ ] Run migration for R2-1 through R2-34 above
- [ ] Verify all files present at destination with `top5pct-` prefix
- [ ] Update blade `src`/`image=` attributes for all **Pending** slots above
- [ ] Mark each Pending slot **Done** in this document
- [x] Foil shirts blade slots assigned — all 5 R2 foil images placed, all rules resolved.
- [ ] Create `signs/backlit-signs.blade.php` and build slot inventory
- [ ] Create `signs/outdoor-signs.blade.php` and build slot inventory
- [ ] Create chameleon blade page and build slot inventory
- [ ] Remove `public/new-images/` directory once all above is verified

---

## Directory Cleanup Notes

> These files appear to be in the wrong directory. Per image handling rules, no files are deleted — issues are documented here for manual review.

| Directory | File | Issue |
|---|---|---|
| `public/images/digital-vinyl/` | `top5pct-article-yard-signs-buy.jpg` | Appears misplaced — yard-signs content in digital-vinyl dir; not referenced by any digital-vinyl blade slot |
| `public/images/digital-vinyl/` | `top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg` | Appears misplaced — yard-signs content in digital-vinyl dir; not referenced by any digital-vinyl blade slot |
