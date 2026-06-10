# Round 3 Image Migration Plan

**Source:** `public/round3.new.images/` (57 files across 5 date batches)
**Authority:** `docs/Top5Pct.ImagePaths.csv` — definitive master for all web URLs and `public/images/` dir names.

---

## Rules and Conventions

| # | Rule |
|---|---|
| 1 | **Never remove any image file.** Only move or copy. Even outdated or duplicate files stay on disk. |
| 2 | **Apply `top5pct-` prefix** to every incoming R3 filename on move. Spaces → hyphens. |
| 3 | **Image dir name = last URL segment only.** The dir does NOT mirror the full URL path. `/custom-apparel/specialty-materials/glitter-shirts` → dir is `glitter-shirts/`, not `custom-apparel/glitter-shirts/`. |
| 4 | **Image paths are always flat** under `public/images/<dir>/`. No sub-dirs within a category dir. |
| 5 | **Source files must be moved, not copied.** After verifying the moved file is present in the target dir, the staging source is no longer needed — but per Rule 1, it stays on disk until a deliberate cleanup pass is approved. |
| 6 | **No file is ever overwritten silently.** If a target filename already exists, flag it and rename the incoming file to `top5pct-<name>-r3.jpg` before proceeding. |

---

## Image Directory Overrides

The following 7 categories have been granted exceptions to the CSV target dir name. The **old dir is kept as-is** and used as the active image dir. No rename will be performed for these categories. The CSV name is noted for reference only.

| Category | Active dir (keep) | CSV target (ignored) | Blade refs stay on |
|---|---|---|---|
| DTF | `dtf-transfers/` | `dtf-printing` | `dtf-transfers/` |
| Dye-Sublimation | `sublimation/` | `dye-sublimation-printing` | `sublimation/` |
| Sidewalk / A-Frame Signs | `sidewalk-signs/` | `sidewalk-signs-a-frame-signs` | `sidewalk-signs/` |
| Glow in the Dark | `glow-shirts/` | `glow-in-the-dark-shirts` | `glow-shirts/` |
| Family Reunion | `reunion-shirts/` | `reunion-wear-shirts` | `reunion-shirts/` |
| Spirit Wear | `spirit-wear/` | `spirit-wear-shirts` | `spirit-wear/` |
| Corporate Wear | `corporate-wear/` | `corporate-wear-shirts` | `corporate-wear/` |

> These overrides affect Phase 1 (fewer dirs to create), Phase 2 (R3 files route to old dirs), and eliminate Phase 3 renames entirely.

---

## Dir Name Authority (CSV vs. current state)

### Custom Apparel — Printing Options

| CSV target dir | Active dir | Status |
|---|---|---|
| `dtf-printing` | `dtf-transfers/` | ◎ Override — keep old dir |
| `dye-sublimation-printing` | `sublimation/` | ◎ Override — keep old dir |
| `screen-printing` | (none — in `custom-shirts/`) | ✗ Create |
| `embroidery` | `embroidery/` | ✓ Match |
| `rhinestone-apparel` | (none — in `custom-shirts/`) | ✗ Create |
| `digital-vinyl` | `digital-vinyl/` | ✓ Match |

### Custom Apparel — Specialty Materials

| CSV target dir | Active dir | Status |
|---|---|---|
| `glitter-shirts` | `glitter-shirts/` | ✓ Match (already flat) |
| `puff-shirts` | (none — in `custom-shirts/`) | ✗ Create |
| `glow-in-the-dark-shirts` | `glow-shirts/` | ◎ Override — keep old dir |
| `flock-shirts` | `flock-shirts/` | ✓ Match |
| `brick-shirts` | (none — in `custom-shirts/`) | ✗ Create |
| `holographic-shirts` | `holographic-shirts/` | ✓ Match |
| `foil-shirts` | (none — in `custom-shirts/`) | ✗ Create |
| `reflective-shirts` | `reflective-shirts/` | ✓ Match |
| `vinyl` | `vinyl/` | ✓ Match |
| `chameleon-shirts` | (none) | ✗ Create (future page) |

### Custom Apparel — Group Wear

| CSV target dir | Active dir | Status |
|---|---|---|
| `reunion-wear-shirts` | `reunion-shirts/` | ◎ Override — keep old dir |
| `spirit-wear-shirts` | `spirit-wear/` | ◎ Override — keep old dir |
| `corporate-wear-shirts` | `corporate-wear/` | ◎ Override — keep old dir |

### Signs — Business Signs

| CSV target dir | Active dir | Status |
|---|---|---|
| `banners` | `banners/` | ✓ Match |
| `window-signs` | (images in `window-wall-floor-decals/`) | ✗ Create + split |
| `wall-signs` | `wall-signs/` | ✓ Match |
| `floor-signs` | (images in `window-wall-floor-decals/`) | ✗ Create + split |
| `door-signs` | (images in `window-wall-floor-decals/`) | ✗ Create + split |
| `posters` | `posters/` | ✓ Match |
| `backlit-signs` | `backlit-signs/` | ✓ Match (future page) |
| `outdoor-signs` | `outdoor-signs/` | ✓ Match (future page) |
| `backdrop-signs` | (none) | ✗ Create (future page) |

### Signs — Ground Signs

| CSV target dir | Active dir | Status |
|---|---|---|
| `yard-signs` | `yard-signs/` | ✓ Match |
| `sidewalk-signs-a-frame-signs` | `sidewalk-signs/` | ◎ Override — keep old dir |
| `parking-signs` | (none) | ✗ Create (future page) |

### Signs — Table Signs

| CSV target dir | Active dir | Status |
|---|---|---|
| `table-cloths` | `table-cloths/` | ✓ Match |
| `table-runners` | `table-runners/` | ✓ Match |

### Vehicle Graphics

| CSV target dir | Active dir | Status |
|---|---|---|
| `automobile-graphics` | `automobile-graphics/` | ✓ Match |
| `vehicle-magnets` | `vehicle-magnets/` | ✓ Match |
| `dot-decals` | `dot-decals/` | ✓ Match |

### Stickers

| CSV target dir | Active dir | Status |
|---|---|---|
| `standard-stickers-decals` | `standard-stickers-decals/` | ✓ Match |
| `custom-shaped-stickers-decals` | `custom-shaped-stickers-decals/` | ✓ Match |

### Promotional Items — Flatten Required

| CSV target dir | Current path | Status |
|---|---|---|
| `mugs` | `promo-items/mugs/` | ⚠ Flatten — 8 files |
| `can-koozies` | `promo-items/koozies/` | ⚠ Flatten + rename — 5 files |
| `towels` | (none) | ✗ Create |
| `drink-coasters` | (none) | ✗ Create |
| `tote-bags` | (none) | ✗ Create |
| `mouse-pads` | (none) | ✗ Create |

> **Flatten note:** Blade pages currently reference `/images/promo-items/mugs/...` and `/images/promo-items/koozies/...`. After flattening, all refs update to `/images/mugs/...` and `/images/can-koozies/...`.

### Image Path Flattening — Rule Clarification

| Noted item | Issue | Resolution |
|---|---|---|
| `promo-items/mugs` | Two-level nesting: `/images/promo-items/mugs/` | Move all 8 files to flat `/images/mugs/`, update blade refs |
| `promo-items/koozies` | Two-level nesting + wrong name: `/images/promo-items/koozies/` | Move all 5 files to flat `/images/can-koozies/`, update blade refs |
| `custom-apparel/glitter-shirts` | Already flat at `/images/glitter-shirts/` | No change needed — dir name matches CSV target ✓ |

**Any others needing flattening?** No. The `promo-items/` nesting is the only multi-level image path in `public/images/`. All other dirs are already flat.

---

## Phase 1: Create Missing Dirs

These dirs must exist before any R3 files can be moved. Create all before starting Phase 2.

### Phase 1a — Dirs required for R3 moves (create first)

> 4 dirs removed from this list vs. the original plan due to overrides. Sublimation R3 files go to existing `sublimation/`, reunion to `reunion-shirts/`, spirit-wear to `spirit-wear/`, sidewalk to `sidewalk-signs/`.

| Dir to create | R3 files targeting it |
|---|---|
| `public/images/brick-shirts/` | 2 files |
| `public/images/foil-shirts/` | 5 files |
| `public/images/screen-printing/` | 6 files |
| `public/images/rhinestone-apparel/` | 1 file |
| `public/images/door-signs/` | 2 files |
| `public/images/window-signs/` | 7 files |

### Phase 1b — Dirs to create now (no R3 files, but needed per CSV or flatten)

| Dir to create | Notes |
|---|---|
| `public/images/puff-shirts/` | No R3 files yet — needed for existing R2 images in `custom-shirts/` |
| `public/images/floor-signs/` | No R3 files — needed for `window-wall-floor-decals/` split |
| `public/images/mugs/` | Target for flatten of `promo-items/mugs/` |
| `public/images/can-koozies/` | Target for flatten of `promo-items/koozies/` |
| `public/images/towels/` | No images yet |
| `public/images/drink-coasters/` | No images yet |
| `public/images/tote-bags/` | No images yet |
| `public/images/mouse-pads/` | No images yet |

### Future dirs (not needed yet — create when pages are built)

| Dir | Page |
|---|---|
| `public/images/chameleon-shirts/` | Chameleon specialty page |
| `public/images/backdrop-signs/` | Backdrops signs page |
| `public/images/parking-signs/` | Parking signs page |

---

## Phase 2: R3 File Moves

Move each file from `public/round3.new.images/<date>/<category>/<file>` to `public/images/<target-dir>/top5pct-<file>`.

All 57 R3 files, sorted by target dir:

### `automobile-graphics/` (5 files)

| Source (in round3.new.images/) | Target filename |
|---|---|
| `6_6_2026/Automobile Graphics/car-graphics-installers-joliet.jpg` | `top5pct-car-graphics-installers-joliet.jpg` |
| `6_6_2026/Automobile Graphics/decals-for-work-trucks.jpg` | `top5pct-decals-for-work-trucks.jpg` |
| `6_6_2026/Automobile Graphics/vehicle-graphics-near-me.jpg` | `top5pct-vehicle-graphics-near-me.jpg` |
| `6_6_2026/Automobile Graphics/vehicle-signs-joliet.jpg` | `top5pct-vehicle-signs-joliet.jpg` |
| `6_9_2026/Automobile Graphics/car-wrap-decals-joliet.jpg` | `top5pct-car-wrap-decals-joliet.jpg` |

### `brick-shirts/` ✗ new dir (2 files)

| Source | Target filename |
|---|---|
| `6_9_2026/Brick/brick-vinyl-custom-shirts-joliet.jpg` | `top5pct-brick-vinyl-custom-shirts-joliet.jpg` |
| `6_9_2026/Brick/brick-vinyl-shorewood.jpg` | `top5pct-brick-vinyl-shorewood.jpg` |

### `custom-shaped-stickers-decals/` (1 file)

> ⚠ Collision: `top5pct-die-cut-stickers-joliet.jpg` already exists in this dir (R2 file). Rename incoming to `top5pct-die-cut-stickers-joliet-r3.jpg`.

| Source | Target filename |
|---|---|
| `6_9_2026/Custom Shaped Stickers/die-cut-stickers-joliet.jpg` | `top5pct-die-cut-stickers-joliet-r3.jpg` |

### `door-signs/` ✗ new dir (2 files)

| Source | Target filename |
|---|---|
| `6_7_2026/Door Signs/door-lettering-vinyl.jpg` | `top5pct-door-lettering-vinyl.jpg` |
| `6_9_2026/Door Signs/door-wraps-joliet.jpg` | `top5pct-door-wraps-joliet.jpg` |

> Note: `top5pct-door-wraps-joliet.jpg` already exists in `window-wall-floor-decals/`. No conflict — different dirs.

### `dot-decals/` (1 file)

| Source | Target filename |
|---|---|
| `6_7_2026/DOT Decals/DOT-truck-decals-rockdale.jpg` | `top5pct-DOT-truck-decals-rockdale.jpg` |

### `embroidery/` (1 file)

| Source | Target filename |
|---|---|
| `6_9_2026/Embroidery/embroidered-cap-embroidered-beanies-joliet.jpg` | `top5pct-embroidered-cap-embroidered-beanies-joliet.jpg` |

### `foil-shirts/` ✗ new dir (5 files)

| Source | Target filename |
|---|---|
| `6_9_2026/Foil/foil-custom-apparel-shirts-joliet.jpg` | `top5pct-foil-custom-apparel-shirts-joliet.jpg` |
| `6_9_2026/Foil/foil-custom-shirts-joliet.jpg` | `top5pct-foil-custom-shirts-joliet.jpg` |
| `6_9_2026/Foil/foil-shirts-cresthill.jpg` | `top5pct-foil-shirts-cresthill.jpg` |
| `6_9_2026/Foil/foil-shirt-shorewood.jpg` | `top5pct-foil-shirt-shorewood.jpg` |
| `6_9_2026/Foil/foil-shirts.jpg` | `top5pct-foil-shirts.jpg` |

### `glitter-shirts/` (2 files)

> ⚠ Filename fix: `glitter-sportwear-shirtsjpg.jpg` has a doubled extension and a spelling error. Correct both when applying the prefix.

| Source | Target filename |
|---|---|
| `6_9_2026/Glitter/glitter-sportwear-shirtsjpg.jpg` | `top5pct-glitter-sportswear-shirts.jpg` |
| `6_9_2026/Glitter/glitter-sweatshirts-joliet.jpg` | `top5pct-glitter-sweatshirts-joliet.jpg` |

### `holographic-shirts/` (1 file)

| Source | Target filename |
|---|---|
| `6_9_2026/Holographic/holographic-baby-shirts.jpg` | `top5pct-holographic-baby-shirts.jpg` |

### `outdoor-signs/` (1 file)

| Source | Target filename |
|---|---|
| `6_9_2026/Outdoor Signs/business-signs-outdoor-joliet.jpg` | `top5pct-business-signs-outdoor-joliet.jpg` |

### `rhinestone-apparel/` ✗ new dir (1 file)

| Source | Target filename |
|---|---|
| `6_3_2026/Custom Shirts/Printing Options/Rhinestones/rhinestone-tshirts-joliet.jpg` | `top5pct-rhinestone-tshirts-joliet.jpg` |

### `reunion-shirts/` ◎ override (1 file)

> Routed to the old dir. CSV target `reunion-wear-shirts` is not used.

| Source | Target filename |
|---|---|
| `6_9_2026/Family Reunion/family-reunion-tees.jpg` | `top5pct-family-reunion-tees.jpg` |

### `screen-printing/` ✗ new dir (6 files)

| Source | Target filename |
|---|---|
| `6_3_2026/Custom Shirts/Printing Options/Screenprint/screenprinting-t-shirts-joliet.jpg` | `top5pct-screenprinting-t-shirts-joliet.jpg` |
| `6_9_2026/Screenprinting/screenprinted-shirts-joliet.jpg` | `top5pct-screenprinted-shirts-joliet.jpg` |
| `6_9_2026/Screenprinting/screenprinting-company-shirts.jpg` | `top5pct-screenprinting-company-shirts.jpg` |
| `6_9_2026/Screenprinting/screenprinting-hoodies-joliet.jpg` | `top5pct-screenprinting-hoodies-joliet.jpg` |
| `6_9_2026/Screenprinting/screenprinting-joliet.jpg` | `top5pct-screenprinting-joliet.jpg` |
| `6_9_2026/Screenprinting/screenprinting-t-shirt-maker-joliet.jpg` | `top5pct-screenprinting-t-shirt-maker-joliet.jpg` |

### `sidewalk-signs/` ◎ override (3 files)

> Routed to the old dir. CSV target `sidewalk-signs-a-frame-signs` is not used.

| Source | Target filename |
|---|---|
| `6_9_2026/A-Frames/a-frame-signs-joliet.jpg` | `top5pct-a-frame-signs-joliet.jpg` |
| `6_9_2026/A-Frames/sidewalk-sign-a-frame-cresthill.jpg` | `top5pct-sidewalk-sign-a-frame-cresthill.jpg` |
| `6_9_2026/A-Frames/sidewalk-signs-plainfield.jpg` | `top5pct-sidewalk-signs-plainfield.jpg` |

### `spirit-wear/` ◎ override (1 file)

> Routed to the old dir. CSV target `spirit-wear-shirts` is not used.

| Source | Target filename |
|---|---|
| `6_3_2026/Custom Shirts/Group Shirts/Spirit Wear/spirit-wear-volleyball-track.jpg` | `top5pct-spirit-wear-volleyball-track.jpg` |

### `sublimation/` ◎ override (4 files)

> Routed to the old dir. CSV target `dye-sublimation-printing` is not used.

| Source | Target filename |
|---|---|
| `6_3_2026/Custom Shirts/Printing Options/Sublimation/dye-sublimation-jerseys.jpg` | `top5pct-dye-sublimation-jerseys.jpg` |
| `6_3_2026/Custom Shirts/Printing Options/Sublimation/dye-sublimation-tees.jpg` | `top5pct-dye-sublimation-tees.jpg` |
| `6_3_2026/Custom Shirts/Printing Options/Sublimation/sublimated-graphic-tees.jpg` | `top5pct-sublimated-graphic-tees.jpg` |
| `6_3_2026/Custom Shirts/Printing Options/Sublimation/sublimation-tees.jpg` | `top5pct-sublimation-tees.jpg` |

### `table-cloths/` (4 files)

| Source | Target filename |
|---|---|
| `6_4_2026/Table Signs/Table Cloths/table-cloth-8-feet.jpg` | `top5pct-table-cloth-8-feet.jpg` |
| `6_4_2026/Table Signs/Table Cloths/table-cloth-customized.jpg` | `top5pct-table-cloth-customized.jpg` |
| `6_4_2026/Table Signs/Table Cloths/table-cloths-for-businesses.jpg` | `top5pct-table-cloths-for-businesses.jpg` |
| `6_4_2026/Table Signs/Table Cloths/table-cloth-with-photos.jpg` | `top5pct-table-cloth-with-photos.jpg` |

### `table-runners/` (4 files)

| Source | Target filename |
|---|---|
| `6_6_2026/Table Runners/custom-table-runner-near-me.jpg` | `top5pct-custom-table-runner-near-me.jpg` |
| `6_6_2026/Table Runners/table-runner-company.jpg` | `top5pct-table-runner-company.jpg` |
| `6_6_2026/Table Runners/table-runner-covers.jpg` | `top5pct-table-runner-covers.jpg` |
| `6_6_2026/Table Runners/table-runners-customized.jpg` | `top5pct-table-runners-customized.jpg` |

### `wall-signs/` (3 files)

| Source | Target filename |
|---|---|
| `6_6_2026/Wall Sign/wall-decals-bedroom.jpg` | `top5pct-wall-decals-bedroom.jpg` |
| `6_6_2026/Wall Sign/wall-sign-for-businesses.jpg` | `top5pct-wall-sign-for-businesses.jpg` |
| `6_6_2026/Wall Sign/wall-signs-for-businesses.jpg` | `top5pct-wall-signs-for-businesses.jpg` |

### `window-signs/` ✗ new dir (7 files)

| Source | Target filename |
|---|---|
| `6_7_2026/Window Signs/window-business-signs.jpg` | `top5pct-window-business-signs.jpg` |
| `6_7_2026/Window Signs/window-graphics-joliet.jpg` | `top5pct-window-graphics-joliet.jpg` |
| `6_7_2026/Window Signs/window-sign-installers-joliet.jpg` | `top5pct-window-sign-installers-joliet.jpg` |
| `6_7_2026/Window Signs/window-signs-cresthill.jpg` | `top5pct-window-signs-cresthill.jpg` |
| `6_7_2026/Window Signs/window-signs.jpg` | `top5pct-window-signs.jpg` |
| `6_7_2026/Window Signs/window-vinyl-sign-installers.jpg` | `top5pct-window-vinyl-sign-installers.jpg` |
| `6_9_2026/Window Signs/window-signs-for-businesses-joliet.jpg` | `top5pct-window-signs-for-businesses-joliet.jpg` |

### `yard-signs/` (3 files)

| Source | Target filename |
|---|---|
| `6_7_2026/Yard Signs/yard-signs-plainfield.jpg` | `top5pct-yard-signs-plainfield.jpg` |
| `6_7_2026/Yard Signs/yard-signs-rockdale.jpg` | `top5pct-yard-signs-rockdale.jpg` |
| `6_7_2026/Yard Signs/yard-signs-shorewood.jpg` | `top5pct-yard-signs-shorewood.jpg` |

---

## Phase 3: Dir Restructuring

> The 7 dir renames originally planned here have been **eliminated by the Image Directory Overrides**. Phase 3 now covers only the `window-wall-floor-decals/` split and the two promo-items flattens.

### Split: `window-wall-floor-decals/` → 3 dirs

| Old dir | Split into | File count | Notes |
|---|---|---|---|
| `window-wall-floor-decals/` | `door-signs/` + `window-signs/` + `floor-signs/` | 25 files | Wall content stays in existing `wall-signs/` dir |

**`window-wall-floor-decals/` sort guide:**

| File | Target dir |
|---|---|
| `top5pct-business-door-signs.jpg` | `door-signs/` |
| `top5pct-door-signage.jpg` | `door-signs/` |
| `top5pct-door-sign-installers.jpg` | `door-signs/` |
| `top5pct-door-signs-joliet-shorewood-crest-hill.jpg` | `door-signs/` |
| `top5pct-door-wraps-joliet.jpg` | `door-signs/` |
| `top5pct-vinyl-door-lettering.jpg` | `door-signs/` |
| `top5pct-vinyl-door-signs.jpg` | `door-signs/` |
| `top5pct-business-window-signs.jpg` | `window-signs/` |
| `top5pct-custom-window-signs.jpg` | `window-signs/` |
| `top5pct-joliet-slammers-window-signs-joliet.jpg` | `window-signs/` |
| `top5pct-window-cling-decal-joliet-shorewood.jpg` | `window-signs/` |
| `top5pct-window-decal-joliet-shorewood-rockdale.jpg` | `window-signs/` |
| `top5pct-window-decals-joliet-shorewood-crest-hill.jpg` | `window-signs/` |
| `top5pct-window-door-signs.jpg` | `window-signs/` |
| `top5pct-window-signage.jpg` | `window-signs/` |
| `top5pct-window-signs-joliet.jpg` | `window-signs/` |
| `top5pct-window-signs-joliet-old.jpg` | `window-signs/` |
| `top5pct-window-signs-joliet-slammers.jpg` | `window-signs/` |
| `top5pct-article-window-wall-signs.jpg` | `wall-signs/` (move, don't duplicate) |
| `top5pct-banner-wall-decal-door-signs-joliet.jpg` | `wall-signs/` (move, don't duplicate) |
| `top5pct-wall-decals-joliet.jpg` | `wall-signs/` |
| `top5pct-wall-signs.jpg` | `wall-signs/` (check collision) |
| `top5pct-wall-signs-joliet.jpg` | `wall-signs/` (check collision) |
| `top5pct-wall-signs-old.jpg` | `wall-signs/` |
| `top5pct-wall-wraps.jpg` | `wall-signs/` (check collision) |

> `floor-signs/` has no files from `window-wall-floor-decals/` — no floor-specific content exists there yet. Dir is created empty and filled when new floor sign images arrive.

### Flattens: `promo-items/` → flat dirs

| Old path | New flat dir | File count | Blade refs affected |
|---|---|---|---|
| `promo-items/mugs/` | `mugs/` | 8 files | `mugs.blade.php`, `promotional-items.blade.php`, `featured-products.blade.php` |
| `promo-items/koozies/` | `can-koozies/` | 5 files | `can-koozies.blade.php`, `promotional-items.blade.php` |

---

## Phase 4: Blade Reference Updates Required

After Phase 3 split and flattens, these blade files need their image path references updated.

> The 7 override categories require no blade updates — their dirs are unchanged.

| Dir change | Blade files affected |
|---|---|
| `window-wall-floor-decals/` → split | `pages/signs/window-signs.blade.php`, `pages/signs/door-signs.blade.php`, `pages/signs/floor-signs.blade.php`, `pages/signs/index.blade.php` |
| `promo-items/mugs/` → `mugs/` | `pages/promotional-items/mugs.blade.php`, `pages/promotional-items.blade.php`, `components/sections/featured-products.blade.php` |
| `promo-items/koozies/` → `can-koozies/` | `pages/promotional-items/can-koozies.blade.php`, `pages/promotional-items.blade.php` |

---

## R3 Move Summary

| Target dir | Files to move | Dir exists? | Note |
|---|---|---|---|
| `automobile-graphics/` | 5 | ✓ | |
| `brick-shirts/` | 2 | ✗ create | |
| `custom-shaped-stickers-decals/` | 1 | ✓ | Rename collision |
| `door-signs/` | 2 | ✗ create | |
| `dot-decals/` | 1 | ✓ | |
| `embroidery/` | 1 | ✓ | |
| `foil-shirts/` | 5 | ✗ create | |
| `glitter-shirts/` | 2 | ✓ | Filename fix on 1 |
| `holographic-shirts/` | 1 | ✓ | |
| `outdoor-signs/` | 1 | ✓ | |
| `reunion-shirts/` | 1 | ✓ | Override |
| `rhinestone-apparel/` | 1 | ✗ create | |
| `screen-printing/` | 6 | ✗ create | |
| `sidewalk-signs/` | 3 | ✓ | Override |
| `spirit-wear/` | 1 | ✓ | Override |
| `sublimation/` | 4 | ✓ | Override |
| `table-cloths/` | 4 | ✓ | |
| `table-runners/` | 4 | ✓ | |
| `wall-signs/` | 3 | ✓ | |
| `window-signs/` | 7 | ✗ create | |
| `yard-signs/` | 3 | ✓ | |
| **Total** | **57** | **6 new dirs** | |

---

## Known Issues / Flags

| # | Issue | Action |
|---|---|---|
| 1 | `glitter-sportwear-shirtsjpg.jpg` — doubled extension + "sportwear" spelling error | Fix on move: → `top5pct-glitter-sportswear-shirts.jpg` |
| 2 | `custom-shaped-stickers-decals/top5pct-die-cut-stickers-joliet.jpg` already exists (R2) | Rename R3 incoming → `top5pct-die-cut-stickers-joliet-r3.jpg` |
| 3 | `window-wall-floor-decals/top5pct-door-wraps-joliet.jpg` exists — R3 has same base name targeting `door-signs/` | No conflict — different dirs. Proceed normally. |
| 4 | `wall-signs/` already has some files that overlap with `window-wall-floor-decals/` | Check for collisions before Phase 3 wall-signs merge |
| 5 | `dtf-transfers/` has 2 files with `toptpct-` prefix typo: `toptpct-banner-dtf-transfers-joliet.jpg`, `toptpct-dtf-transfer-pricing.jpg` | Rename in-place within `dtf-transfers/` to correct prefix (`top5pct-`) — separate cleanup task |

---

## Status Tracker

| Phase | Description | Status |
|---|---|---|
| Phase 1a | Create 6 new dirs needed for R3 | Pending |
| Phase 1b | Create 8 additional dirs per CSV | Pending |
| Phase 2 | Move all 57 R3 files with prefix | Pending |
| Phase 2 audit | Verify all 57 files present in target dirs | Pending |
| Phase 2 blade | Add R3 images to appropriate page slots | Pending |
| Phase 3 renames | ~~Rename 7 existing dirs~~ Eliminated by overrides | N/A |
| Phase 3 split | Split `window-wall-floor-decals/` into 3 dirs | Pending |
| Phase 3 flatten | Move `promo-items/mugs/` + `promo-items/koozies/` to flat dirs | Pending |
| Phase 4 blade audit | Update blade refs after Phase 3 split and flattens | Pending |
