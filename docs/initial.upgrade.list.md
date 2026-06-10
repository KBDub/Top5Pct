# Initial Image Upgrade List

All blade slots currently using Initial-round images (Mar 16-17, 2026). Purpose: replace each with an R1, R2, or R3 file.

**Total Initial slots to upgrade:** ~105 across 25 blade files.

---

## Execution Order

1. Fix LP banner cascades first (changing a sub-page hero forces an LP banner update).
2. Fix LP non-banner slots.
3. Fix sub-page slots — hero first, then carousel top-to-bottom, then cards, then slide-ins.
4. Apply changes by parent category section (signs → custom-apparel → vehicle-graphics → stickers → promo-items).

**Status key:**
- `✓` — replacement file confirmed on disk, not already used on that page
- `⛔` — no unused R1/R2/R3 in the same dir; a cross-dir file or new import is required
- `⚡` — LP banner cascade: sub-page hero must change first; LP banner inherits that new hero file
- `⚠ Rule 4` — same Initial file is used more than once on this page; all repeats must be replaced

---

## Part 1 — LP Banner Cascades

Two LP banners currently show an Initial image because the linked sub-page hero is also Initial. The sub-page hero must be updated first, then the LP banner is set to match.

| LP blade | LP slot | Current Initial file | Sub-page hero to upgrade first | Proposed new hero | Status |
|---|---|---|---|---|---|
| signs/index | LP-8 (Floor Signs) | wall-signs/top5pct-wall-decals-joliet.jpg | floor-signs.blade.php hero | wall-signs/top5pct-wall-signs-for-businesses.jpg | R3 ✓ |
| vehicle-graphics/index | LP-3 (DOT Decals) | dot-decals/top5pct-truck-lettering-joliet-shorewood-rockdale.jpg | dot-decals.blade.php hero | dot-decals/top5pct-trucking-dot-decals-in-joliet.jpg | R2 ✓ |

---

## Part 2 — LP Non-Banner Slots

### signs/index

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| C1-4 | top5pct-business-signs-joliet-plainfield-romeoville.jpg | top5pct-monument-signs-joliet.jpg | backlit-signs/ | R2 | ✓ |
| C2-3 | top5pct-business-signs-joliet-shorewood-channahon.jpg | top5pct-backlit-outdoor-signs.jpg | backlit-signs/ | R2 | ✓ |

### vehicle-graphics/index

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| hero | top5pct-car-wraps-vinyl-lettering-joliet-shorewood.jpg | top5pct-vehicle-graphics.jpg | automobile-graphics/ | R1 | ✓ |
| card | top5pct-vinyl-lettering-car-graphics-joliet-crest-hill.jpg | top5pct-vehicle-window-graphics-in-joliet.jpg | automobile-graphics/ | R1 | ✓ |
| C2-1 | top5pct-car-magnets-truck-magnets-joliet.jpg | top5pct-truck-sign-magnets-joliet.jpg | vehicle-magnets/ | R2 | ✓ |
| C2-2 | top5pct-dot-decals-joliet-shorewood-rockdale.jpg | top5pct-dot-truck-decals-joliet.jpg | dot-decals/ | R1 | ✓ |
| C2-3 | top5pct-boat-decals-joliet-shorewood-crest-hill.jpg | top5pct-vehicle-window-graphics-joliet.jpg | automobile-graphics/ | R1 | ✓ |
| C2-4 | top5pct-business-magnets-car-magnets-joliet.jpg | top5pct-vehicle-magnets-joliet.jpg | vehicle-magnets/ | R1 | ✓ |
| slide-R | top5pct-car-magnets-vehicle-magnets-joliet.jpg | top5pct-vehicle-magnets.jpg | vehicle-magnets/ | R1 | ✓ |

### stickers/index

Dir `custom-shaped-stickers-decals/` has only 3 unused R1/R2/R3 files at this point. 4 of 7 Initial slots below cannot be replaced without a cross-dir file or new import.

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| C1-2 | top5pct-stickers-decals-joliet-beer-brewery.jpg | top5pct-custom-stickers.jpg | custom-shaped-stickers-decals/ | R1 | ✓ |
| C1-3 | top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg | top5pct-stickers-in-joliet.jpg | custom-shaped-stickers-decals/ | R1 | ✓ |
| C1-4 | top5pct-stickers-decals-joliet-volleyball-team.jpg | top5pct-die-cut-stickers-joliet-r3.jpg | custom-shaped-stickers-decals/ | R3 | ✓ |
| C1-5 | top5pct-stickers-decals-joliet-labels.jpg | — | — | — | ⛔ needs cross-dir |
| card | top5pct-stickers-decals-joliet-ocean-viewz.jpg | — | — | — | ⛔ needs cross-dir |
| C2-2 | top5pct-article-buy-stickers-decals-joliet.jpg | — | standard-stickers-decals/ only has 2 files, R1 already used as slide-L | — | ⛔ needs new import |
| C2-4 | top5pct-stickers-decals-joliet-boxing-sports.jpg | — | — | — | ⛔ needs cross-dir |

---

## Part 3 — Sub-Page Slots

### signs/banners

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| slide-L | top5pct-banners-business-joliet-shorewood-crest-hill.jpg | top5pct-retractable-banners-plainfield.jpg | banners/ | R2 | ✓ |
| slide-R | top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg | top5pct-portable-banners.jpg | banners/ | R2 | ✓ |

### signs/yard-signs

Note: top5pct-yard-signs-joliet-plainfied-new-lenox.jpg is used in C-2, C-3, AND slide-L — a triple Rule 4 violation.

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| C-2 | top5pct-yard-signs-joliet-plainfied-new-lenox.jpg | top5pct-yard-sign-joliet.jpg | yard-signs/ | R1 | ✓ |
| C-3 | top5pct-yard-signs-joliet-plainfied-new-lenox.jpg (repeat) | — | yard-signs/ exhausted | — | ⛔ needs cross-dir |
| slide-L | top5pct-yard-signs-joliet-plainfied-new-lenox.jpg (repeat) | — | yard-signs/ exhausted | — | ⛔ needs cross-dir |
| slide-R | top5pct-banners-business-joliet-shorewood-crest-hill.jpg | top5pct-retractable-banner.jpg | banners/ | R1 | ✓ |

### signs/sidewalk-signs

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| hero | top5pct-banner-a-frame-sidewalk-signs-joliet-romeoville.jpg | top5pct-sidewalk-signs-joliet-old.jpg | sidewalk-signs/ | R1 | ✓ |
| card-1 | top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg | top5pct-sidewalk-signage.jpg | sidewalk-signs/ | R2 | ✓ |
| slide-L | top5pct-a-frame-sidewalk-sign-joliet.jpg | top5pct-a-frame-sidewalk-signs.jpg | sidewalk-signs/ | R2 | ✓ |
| slide-R | top5pct-business-signs-joliet-shorewood-crest-hill.jpg | top5pct-backlit-sign-new-lenox.jpg | backlit-signs/ | R2 | ✓ |

### signs/sidewalk-signs-a-frame-signs

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| card-1 | top5pct-a-frame-sidewalk-sign-joliet.jpg | top5pct-sidewalk-signs-joliet-old.jpg | sidewalk-signs/ | R1 | ✓ |
| slide-L | top5pct-sidewalk-a-frames-joliet-shorewood.jpg | top5pct-a-frame-sign.jpg | sidewalk-signs/ | R1 | ✓ |
| slide-R | top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg | top5pct-mesh-construction-banner.jpg | banners/ | R2 | ✓ |

### signs/wall-signs

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| C-1 | top5pct-wall-signs-joliet.jpg | top5pct-wall-signs-old.jpg | wall-signs/ | R1 | ✓ |
| C-3 | top5pct-article-window-wall-signs.jpg | top5pct-wall-decals-bedroom.jpg | wall-signs/ | R3 | ✓ |
| C-4 | top5pct-banner-wall-decal-door-signs-joliet.jpg | top5pct-wall-sign-for-businesses.jpg | wall-signs/ | R3 | ✓ |
| card-1 | top5pct-wall-decals-joliet.jpg | top5pct-wall-wraps.jpg | wall-signs/ | R2 | ✓ |
| card-2 | top5pct-article-window-wall-signs.jpg | top5pct-wall-signs-for-businesses.jpg | wall-signs/ | R3 | ✓ |
| slide-L | top5pct-wall-decals-joliet.jpg (repeat of card-1) | top5pct-window-signs-joliet.jpg | window-signs/ | R2 | ✓ |
| slide-R | top5pct-window-decals-joliet-shorewood-crest-hill.jpg | top5pct-window-graphics-joliet.jpg | window-signs/ | R3 | ✓ |

### signs/window-signs

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| slide-L | top5pct-window-decals-joliet-shorewood-crest-hill.jpg | top5pct-window-signs-for-businesses-joliet.jpg | window-signs/ | R3 | ✓ |
| slide-R | top5pct-wall-decals-joliet.jpg | top5pct-wall-signs-for-businesses.jpg | wall-signs/ | R3 | ✓ |

### signs/floor-signs

All 9 slots are Initial (moved from window-wall-floor-decals). wall-signs/ has 5 unused R1/R2/R3 files; remaining 4 need cross-dir.

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| hero | top5pct-banner-wall-decal-door-signs-joliet.jpg | top5pct-wall-signs-for-businesses.jpg | wall-signs/ | R3 | ✓ ⚡ (signs LP-8 must then use this same file) |
| C-1 | top5pct-banner-wall-decal-door-signs-joliet.jpg (repeat) | top5pct-wall-signs-old.jpg | wall-signs/ | R1 | ✓ |
| C-2 | top5pct-wall-decals-joliet.jpg | top5pct-wall-sign-for-businesses.jpg | wall-signs/ | R3 | ✓ |
| C-3 | top5pct-article-window-wall-signs.jpg | top5pct-wall-decals-bedroom.jpg | wall-signs/ | R3 | ✓ |
| C-4 | top5pct-wall-signs-joliet.jpg | top5pct-wall-wraps.jpg | wall-signs/ | R2 | ✓ |
| card-1 | top5pct-wall-decals-joliet.jpg (repeat) | top5pct-wall-signs.jpg | wall-signs/ | R2 | ✓ |
| card-2 | top5pct-article-window-wall-signs.jpg (repeat) | top5pct-vinyl-door-signs.jpg | door-signs/ | R2 | ✓ |
| slide-L | top5pct-wall-decals-joliet.jpg (repeat) | top5pct-door-wraps-joliet.jpg | door-signs/ | R3 | ✓ |
| slide-R | top5pct-window-decals-joliet-shorewood-crest-hill.jpg | top5pct-window-signs-for-businesses-joliet.jpg | window-signs/ | R3 | ✓ |

### signs/door-signs

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| C-1 | top5pct-door-signs-joliet-shorewood-crest-hill.jpg | top5pct-door-lettering-vinyl.jpg | door-signs/ | R3 | ✓ |
| slide-L | top5pct-door-signs-joliet-shorewood-crest-hill.jpg (repeat) | top5pct-business-door-signs.jpg | door-signs/ | R2 | ✓ |
| slide-R | top5pct-wall-decals-joliet.jpg | top5pct-wall-sign-for-businesses.jpg | wall-signs/ | R3 | ✓ |

### signs/posters

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| C-4 | top5pct-banner-poster-maker-joliet-romeoville-shorewood.jpg | top5pct-big-posters-joliet.jpg | posters/ | R2 | ✓ |
| card-set-1 | top5pct-poster-store-joliet-shorewood-plainfield.jpg | — | posters/ R1/R2 all used in other slots | — | ⛔ needs cross-dir |
| slide-L | top5pct-poster-printing-joliet-shorewood-romeoville.jpg | — | — | — | ⛔ needs cross-dir |
| slide-R | top5pct-banners-business-joliet-shorewood-crest-hill.jpg | top5pct-retractable-banner.jpg | banners/ | R1 | ✓ |

### signs/table-runners

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| hero | top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg | top5pct-table-runner-joliet.jpg | table-runners/ | R2 | ✓ |
| card-set-1 | top5pct-table-runner-popus-gourmet-popcorn-joliet.jpg | top5pct-custom-table-cloth-business.jpg | table-runners/ | R2 | ✓ |
| slide-L | top5pct-custom-table-runner-joliet-shorewood.jpg | top5pct-custom-table-runner-near-me.jpg | table-runners/ | R3 | ✓ |
| slide-R | top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg | top5pct-table-runner-covers.jpg | table-runners/ | R3 | ✓ |

### signs/table-cloths

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| C-1 | top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg | top5pct-table-cloth-8-feet.jpg | table-cloths/ | R3 | ✓ |
| C-4 | top5pct-custom-table-cloth-joliet-crest-hill.jpg | top5pct-table-cloth-customized.jpg | table-cloths/ | R3 | ✓ |
| slide-L | top5pct-article-custom-table-cloths-joliet.jpg | top5pct-table-cloths-for-businesses.jpg | table-cloths/ | R3 | ✓ |
| slide-R | top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg | top5pct-table-cloth-with-photos.jpg | table-cloths/ | R3 | ✓ |

### signs/business-signs

All 3 slots are Initial; `business-signs/` dir has no R1/R2/R3 files at all.

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| hero | top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg | top5pct-backlit-display-signs-joliet.jpg | backlit-signs/ | R2 | ✓ |
| card-1 | top5pct-business-signs-joliet-shorewood-crest-hill.jpg | top5pct-backlit-company-signs.jpg | backlit-signs/ | R2 | ✓ |
| card-2 | top5pct-outdoor-signs-joliet-shorewood-crest-hill.jpg | top5pct-outdoor-sign-joliet.jpg | outdoor-signs/ | R2 | ✓ |

---

### custom-apparel/dtf-transfers

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| slide-R | top5pct-custom-embroidery-shops-near-me-joliet.jpg | top5pct-custom-t-shirts-dtf.jpg | dtf-transfers/ | R1 | ✓ |

### custom-apparel/printing-options/embroidery

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| slide-L | top5pct-custom-embroidery-shops-near-me-joliet.jpg | top5pct-embroidery-in-joliet.jpg | embroidery/ | R1 | ✓ |

### custom-apparel/printing-options/screen-printing

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| C-3 | top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg | top5pct-screenprinting-t-shirt-maker-joliet.jpg | screen-printing/ | R3 | ✓ |
| card-1 | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | top5pct-neon-vinyl-shirts.jpg | custom-shirts/ | R1 | ✓ |
| card-2 | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | top5pct-vinyl-caps.jpg | custom-shirts/ | R1 | ✓ |
| slide-R | top5pct-custom-embroidery-shops-near-me-joliet.jpg | top5pct-custom-embroidery-shops-near-me-joliet.jpg (embroidery/) | embroidery/ | Initial | ⛔ still Initial; use top5pct-embroidered-stitched-caps.jpg (R1) instead |

Revised slide-R: `embroidery/top5pct-embroidered-stitched-caps.jpg` (R1) ✓

### custom-apparel/printing-options/rhinestone-apparel

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| slide-L | top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg | top5pct-rhinestone-t-shirts-joliet.jpg | rhinestone-apparel/ | R3 | ✓ |
| slide-R | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | top5pct-rhinestone-apparel-keith-elementary.jpg | custom-shirts/ | R2 | ✓ |

### custom-apparel/glitter-shirts

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| slide-L | top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | top5pct-glitter-sportswear-shirts.jpg | glitter-shirts/ | R3 | ✓ |
| slide-R | top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg | top5pct-rhinestone-tshirts-joliet.jpg | rhinestone-apparel/ | R3 | ✓ |

### custom-apparel/glow-in-the-dark-shirts

Note: top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg (Initial, moved) appears in C-1, card-1, card-2, AND slide-L — a quadruple Rule 4 violation. `glow-shirts/` only has 1 remaining unused file (glowing-halloween-bat-shirt.jpg used in C-2, halloween-pumpkin-glow-shirt.jpg in C-3 — so actually none unused). Cross-dir required for all 4 repeats.

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| C-1 | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | top5pct-glow-in-the-dark-caps.jpg (hero is this — wait, hero is glow-in-the-dark-caps.jpg) | — | — | ⛔ dir exhausted; cross-dir |
| C-4 | top5pct-t-shirt-maker-article-pic1.jpg | top5pct-custom-vinyl-shirts.jpg | custom-shirts/ | R1 | ✓ |
| card-1 | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg (repeat) | top5pct-digital-vinyl-t-shirts.jpg | digital-vinyl/ | R2 | ✓ |
| card-2 | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg (repeat) | top5pct-neon-vinyl-shirts.jpg | custom-shirts/ | R1 | ✓ |
| slide-L | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg (repeat) | top5pct-vinyl-hoodie.jpg | digital-vinyl/ | R1 | ✓ |
| slide-R | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | top5pct-holographic-vinyl-hoodie-foil.jpg | holographic-shirts/ | R2 | ✓ |

C-1 replacement note: `glow-shirts/` dir only has 4 files, all now used (hero, C-2, C-3, and the Initial one). Cross-dir for C-1: `custom-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` — also Initial. Best cross-dir: `custom-shirts/top5pct-vinyl-shirts.jpg` (R1) ✓ but that's being used for glow-shirts slide-L in my proposal. Let me re-assign: C-1 → `custom-shirts/top5pct-custom-hoodies.jpg` (R1) ✓

### custom-apparel/flock-shirts

Note: top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg (Initial, moved) appears in C-1, card-1, card-2, AND slide-L — quadruple Rule 4 violation. `flock-shirts/` dir is exhausted (all R2 files used). Cross-dir required for all 4 repeats.

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| C-1 | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | top5pct-custom-hoodies.jpg | custom-shirts/ | R1 | ✓ |
| C-4 | top5pct-t-shirt-maker-article-pic2.jpg | top5pct-custom-vinyl-shirts.jpg | custom-shirts/ | R1 | ✓ |
| card-1 | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg (repeat) | top5pct-digital-vinyl-t-shirts.jpg | digital-vinyl/ | R2 | ✓ |
| card-2 | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg (repeat) | top5pct-neon-vinyl-shirts.jpg | custom-shirts/ | R1 | ✓ |
| slide-L | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg (repeat) | top5pct-vinyl-hoodie.jpg | digital-vinyl/ | R1 | ✓ |
| slide-R | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | top5pct-holographic-vinyl-hoodie-foil.jpg | holographic-shirts/ | R2 | ✓ |

### custom-apparel/holographic-shirts

Note: top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg (Initial, moved) appears in C-1, card-1, card-2, AND slide-L — quadruple Rule 4 violation. Also C-2 repeats the hero. `holographic-shirts/` dir has no unused R1/R2/R3 files. Cross-dir required.

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| C-1 | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | top5pct-custom-hoodies.jpg | custom-shirts/ | R1 | ✓ |
| card-1 | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg (repeat) | top5pct-digital-vinyl-t-shirts.jpg | digital-vinyl/ | R2 | ✓ |
| card-2 | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg (repeat) | top5pct-neon-vinyl-shirts.jpg | custom-shirts/ | R1 | ✓ |
| slide-L | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg (repeat) | top5pct-vinyl-hoodie.jpg | digital-vinyl/ | R1 | ✓ |
| slide-R | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | top5pct-foil-shirts.jpg | foil-shirts/ | R3 | ✓ |

### custom-apparel/foil-shirts

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| C-1 | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | top5pct-foil-custom-apparel-shirts-joliet.jpg | foil-shirts/ | R3 | ✓ |
| card-1 | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg (repeat of C-1) | top5pct-foil-shirts-cresthill.jpg | foil-shirts/ | R3 | ✓ |
| slide-L | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg (repeat) | top5pct-foil-shirt-shorewood.jpg | foil-shirts/ | R3 | ✓ |
| slide-R | top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | top5pct-glitter-sportswear-shirts.jpg | glitter-shirts/ | R3 | ✓ |

### custom-apparel/brick-shirts

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| card-1 | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | top5pct-brick-vinyl-custom-shirts-joliet.jpg | brick-shirts/ | R3 | ✓ |
| card-2 | top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg | top5pct-brick-vinyl-shorewood.jpg | brick-shirts/ | R3 | ✓ |
| slide-L | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg (repeat of card-1) | top5pct-custom-vinyl-shirts.jpg | custom-shirts/ | R1 | ✓ |
| slide-R | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | top5pct-custom-hoodies.jpg | custom-shirts/ | R1 | ✓ |

### custom-apparel/puff-shirts

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| C-1 | top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg | top5pct-puff-shirts-joliet.jpg | custom-shirts/ | R2 | ✓ |
| C-4 | top5pct-t-shirt-maker-article-pic1.jpg | top5pct-custom-vinyl-shirts.jpg | custom-shirts/ | R1 | ✓ |
| card-1 | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | top5pct-brick-vinyl-custom-shirts-joliet.jpg | brick-shirts/ | R3 | ✓ |
| card-2 | top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg | top5pct-brick-vinyl-shorewood.jpg | brick-shirts/ | R3 | ✓ |
| slide-L | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg (repeat) | top5pct-neon-vinyl-shirts.jpg | custom-shirts/ | R1 | ✓ |
| slide-R | top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg | top5pct-rhinetsone-t-shirts.jpg | custom-shirts/ | R2 | ✓ |

### custom-apparel/reflective-shirts

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| C-1 | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | top5pct-reflective-shirts-gold.jpg (hero, so can't reuse) → use top5pct-custom-reflective-hoodies.jpg | reflective-shirts/ | R2 | note: hero already uses reflective-shirts-gold.jpg; custom-reflective-hoodies.jpg is C-2. Use: top5pct-reflective-shirts-shorewood.jpg (R2) for C-1 — wait, that's C-4. |

Revised: The reflective-shirts sub-page currently has:
- C-1: custom-reflective-shirts-hoodies-caps-joliet.jpg (Initial)
- C-2: custom-reflective-hoodies.jpg (R2) — already used
- C-3: reflective-shirts.jpg (R2) — already used
- C-4: reflective-shirts-shorewood.jpg (R2) — already used

`reflective-shirts/` dir files: reflective-shirts-gold.jpg (hero), custom-reflective-shirts-hoodies-caps-joliet.jpg (Initial), custom-reflective-hoodies.jpg (R2), reflective-shirts.jpg (R2), reflective-vinyl-shirts-plainfield.jpg (R2), reflective-shirts-shorewood.jpg (R2) — plus `reflective-vinyl-shirts-plainfield.jpg` not yet in page!

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| C-1 | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | top5pct-reflective-vinyl-shirts-plainfield.jpg | reflective-shirts/ | R2 | ✓ |
| card-2 | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg (repeat) | top5pct-digital-vinyl-t-shirts.jpg | digital-vinyl/ | R2 | ✓ |
| slide-L | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg (repeat) | top5pct-vinyl-hoodie.jpg | digital-vinyl/ | R1 | ✓ |
| slide-R | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | top5pct-glow-in-the-dark-caps.jpg | glow-shirts/ | R2 | ✓ |

### custom-apparel/vinyl-shirts

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| hero | top5pct-custom-vinyl-shirts-caps-hoodies.jpg | top5pct-vinyl-shirts.jpg | digital-vinyl/ | R2 | ✓ |
| slide-L | top5pct-custom-vinyl-shirts-caps-hoodies.jpg (repeat) | top5pct-vinyl-zip-up-hoodies.jpg | digital-vinyl/ | R1 | ✓ |
| slide-R | top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | top5pct-glitter-sportswear-shirts.jpg | glitter-shirts/ | R3 | ✓ |

### custom-apparel/group-wear/corporate-wear-shirts

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| C-3 | top5pct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg | top5pct-custom-company-apparel.jpg | corporate-wear/ | R2 | ✓ |
| card-set-3 | top5pct-custom-cap-hat-joliet-shorewood-rockdale.jpg | top5pct-custom-apron-joliet.jpg — already used in C-1. Use top5pct-landscaping-clothing-joliet.jpg | corporate-wear/ | R1 | ✓ |
| slide-L | top5pct-custom-button-up-shirt-joliet-shorewood.jpg | top5pct-lawn-care-clothing.jpg | corporate-wear/ | R1 | ✓ |
| slide-R | top5pct-plainfield-south-high-school-hoodie.jpg | top5pct-volleyball-team-uniforms-joliet.jpg | spirit-wear/ | R2 | ✓ |

### custom-apparel/group-wear/reunion-shirts

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| C-2 | top5pct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg | top5pct-family-reunion-tees.jpg | reunion-shirts/ | R3 | ✓ |
| card-3 | top5pct-family-reunion-shirts-joliet-plainfield.jpg | top5pct-group-shirts.jpg — already C-4. Use top5pct-family-reunion-tshirts-in-joliet.jpg — already C-3. Use top5pct-class-reunion-shirt.jpg — already C-1. | — | — | ⛔ reunion-shirts/ R1 files exhausted; needs cross-dir or new import |
| slide-L | top5pct-family-reunion-shirts-joliet-romeoville.jpg | — | — | — | ⛔ needs cross-dir or new import |
| slide-R | top5pct-t-shirt-maker-article-pic1.jpg | top5pct-spirit-wear-volleyball-track.jpg | spirit-wear/ | R3 | ✓ |

### custom-apparel/group-wear/spirit-wear-shirts

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| C-1 | top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg | top5pct-spirit-wear-volleyball-track.jpg (used in C-5 already) → use top5pct-spirit-wear-shirts.jpg — used in C-2. → top5pct-spirit-wear-clothing.jpg — C-3. → All R1/R2 spirit-wear files are in C slots. | — | — | ⛔ all spirit-wear R1/R2/R3 files already used in other slots on this page |
| card-set-1 | top5pct-joliet-west-spirit-wear-hoodie-shorewood.jpg | — | spirit-wear/ exhausted | — | ⛔ needs cross-dir |
| card-set-2 | top5pct-spiritwear-fanwear-joliet-plainfield-shorewood.jpg | — | — | — | ⛔ needs cross-dir |
| card-set-3 | top5pct-bowling-shirts-joliet-shorewood-crest-hill.jpg | — | — | — | ⛔ needs cross-dir |
| slide-L | top5pct-plainfield-south-high-school-hoodie.jpg | top5pct-custom-company-apparel.jpg | corporate-wear/ | R2 | ✓ |
| slide-R | top5pct-family-reunion-shirts-joliet-romeoville.jpg | top5pct-family-reunion-tees.jpg | reunion-shirts/ | R3 | ✓ |

Note: spirit-wear-shirts.blade.php C-1 and card-set-1/2/3 are the hardest on this whole list. The spirit-wear/ dir is fully used. Cross-dir candidates: corporate-wear/, reunion-shirts/, or any general apparel dir.

---

### vehicle-graphics/automobile-graphics

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| slide-L | top5pct-vinyl-lettering-car-graphics-joliet-crest-hill.jpg | top5pct-vehicle-graphics.jpg | automobile-graphics/ | R1 | ✓ |
| slide-R | top5pct-car-magnets-vehicle-magnets-joliet.jpg | top5pct-truck-sign-magnets-joliet.jpg | vehicle-magnets/ | R2 | ✓ |

### vehicle-graphics/dot-decals

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| hero | top5pct-truck-lettering-joliet-shorewood-rockdale.jpg | top5pct-trucking-dot-decals-in-joliet.jpg | dot-decals/ | R2 | ✓ ⚡ (vehicle-graphics LP-3 must then use this same file) |
| slide-L | top5pct-DOT-stickers-joliet-shorewood-rockdale.jpg | top5pct-dot-lettering-joliet.jpg | dot-decals/ | R2 | ✓ |
| slide-R | top5pct-car-magnets-vehicle-magnets-joliet.jpg | top5pct-truck-sign-magnets-joliet.jpg | vehicle-magnets/ | R2 | ✓ |

### vehicle-graphics/vehicle-magnets

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| slide-L | top5pct-car-magnets-vehicle-magnets-joliet.jpg | top5pct-vehicle-magnets.jpg | vehicle-magnets/ | R1 | ✓ |
| slide-R | top5pct-car-wraps-vinyl-lettering-joliet-shorewood.jpg | top5pct-vehicle-graphics.jpg | automobile-graphics/ | R1 | ✓ |

---

### stickers/standard-stickers

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| C-1 | top5pct-banner-stickers-decals-joliet.jpg | top5pct-custom-stickers.jpg | custom-shaped-stickers-decals/ | R1 | ✓ |
| C-2 | top5pct-stickers-decals-joliet-beer-brewery.jpg | top5pct-stickers-in-joliet.jpg | custom-shaped-stickers-decals/ | R1 | ✓ |
| C-3 | top5pct-stickers-decals-joliet-boxing-sports.jpg | top5pct-die-cut-stickers-joliet-r3.jpg | custom-shaped-stickers-decals/ | R3 | ✓ |
| C-4 | top5pct-stickers-decals-joliet-labels.jpg | top5pct-custom-glossy-stickers-in-joliet.jpg — wait, is that used on this page? current C-slots use: banner, beer-brewery, boxing-sports, labels. R1/R2/R3 available: custom-stickers.jpg (C-1 above), stickers-in-joliet.jpg (C-2 above), die-cut-stickers-joliet-r3.jpg (C-3 above), custom-glossy-stickers-in-joliet.jpg (R1, not yet used) | custom-shaped-stickers-decals/ | R1 | ✓ |
| card-set-1 | top5pct-stickers-decals-joliet-beer-brewery.jpg (repeat) | top5pct-custom-label-stickers.jpg | custom-shaped-stickers-decals/ | R1 | ✓ |
| card-set-2 | top5pct-stickers-decals-joliet-boxing-sports.jpg (repeat) | top5pct-custom-shaped-stickers.jpg | custom-shaped-stickers-decals/ | R1 | ✓ |
| slide-L | top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg | top5pct-custom-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | R2 | ✓ |
| slide-R | top5pct-stickers-decals-joliet-boxing-sports.jpg (repeat) | top5pct-die-cut-stickers-shorewood.jpg | custom-shaped-stickers-decals/ | R2 | ✓ |

### stickers/custom-shaped-stickers

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| slide-L | top5pct-stickers-decals-joliet-boxing-sports.jpg | top5pct-custom-shaped-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | R2 | ✓ |
| slide-R | top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg | top5pct-die-cut-stickers-shorewood.jpg | custom-shaped-stickers-decals/ | R2 | ✓ |

---

### promotional-items (LP)

| slot | current Initial file | proposed replacement | dir | round | status |
|---|---|---|---|---|---|
| slide-R | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | top5pct-flock-hoodie-printing.jpg | flock-shirts/ | R2 | ✓ |

---

## Summary

| Category | Slots to update | All replaceable | Cross-dir needed | ⛔ No replacement yet |
|---|---|---|---|---|
| /signs LP | 2 | 2 | 0 | 0 |
| /vehicle-graphics LP | 7 | 7 | 0 | 0 |
| /stickers LP | 7 | 3 | 1 | 4 |
| signs/banners | 2 | 2 | 0 | 0 |
| signs/yard-signs | 4 | 2 | 2 | 0 |
| signs/sidewalk-signs | 4 | 4 | 1 | 0 |
| signs/sidewalk-a-frame | 3 | 3 | 1 | 0 |
| signs/wall-signs | 7 | 7 | 2 | 0 |
| signs/window-signs | 2 | 2 | 0 | 0 |
| signs/floor-signs | 9 (all Initial) | 9 | 4 | 0 |
| signs/door-signs | 3 | 3 | 1 | 0 |
| signs/posters | 4 | 2 | 2 | 0 |
| signs/table-runners | 4 | 4 | 0 | 0 |
| signs/table-cloths | 4 | 4 | 0 | 0 |
| signs/business-signs | 3 (all Initial) | 3 | 3 | 0 |
| custom-apparel sub-pages | ~45 | ~40 | ~12 | 0 |
| vehicle-graphics sub-pages | 6 | 6 | 0 | 0 |
| stickers sub-pages | 10 | 10 | 0 | 0 |
| promo-items LP | 1 | 1 | 0 | 0 |

**⛔ Outstanding (no replacement available, needs new import or confirmed cross-dir decision):**
- stickers LP: C1-5, card, C2-4 (3 slots)
- stickers LP: C2-2 (standard-stickers-decals/ has no R1/R2/R3 unused)
- yard-signs: C-3, slide-L (2 slots — yard-signs/ exhausted)
- posters: card-set-1, slide-L (2 slots — posters/ R1/R2 exhausted)
- reunion-shirts: card-3, slide-L (2 slots — reunion-shirts/ R1 exhausted)
- spirit-wear-shirts: C-1, card-set-1, card-set-2, card-set-3 (4 slots — spirit-wear/ exhausted)

**Total ⛔ outstanding: 15 slots.** All others have confirmed replacements ready.

*Created Jun 10, 2026. Confirm before applying blade changes.*
