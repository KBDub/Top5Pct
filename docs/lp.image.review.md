# LP Image Review Process

This document covers the process for reviewing and fixing image slots on category landing pages (LPs), and records each LP review instance.

---

## Review Process

### Step 1 — Audit all image slots

Extract every image reference from the blade file (excluding og-tags). Map each one to a numbered slot with its component, file path, and current status.

### Step 2 — Check LP Rules

Apply the four LP rules from `docs/new-images.md`:

| # | Rule |
|---|---|
| 1 | Images always reference sub-category image dirs. No dedicated LP-level dir is created. |
| 2 | Cross-category referencing is allowed (e.g. an LP can reference both `custom-shaped-stickers-decals/` and `standard-stickers-decals/`). |
| 3 | Never modify an image filename. Only reference existing files as-is. |
| 4 | Use distinct images. Each image file should appear no more than once per page across all slots. Repeats are a last resort only. |
| 5 | Each LP category banner image must be the hero image of the sub-category page it links to. For example, the "DTF Transfers" banner on `/custom-apparel` links to `/custom-apparel/printing-options/dtf-printing`, so its image must be `dtf-transfers/top5pct-dtf-t-shirt-printing.jpg` — the exact `category-hero` image on that sub-page. A visually matching fallback is only acceptable when the sub-category has no dedicated dir yet, and must be replaced once that sub-page migration is complete. |
| 6 | All non-banner image slots on an LP must use images from an import round — meaning any file that exists in a sub-category dir under `public/images/`. R1 and R2 files (the most recent import rounds, confirmed by their presence in `public/new-images/`) are preferred where available. R1/R2/R3 refers to Round 1, Round 2, Round 3 of image importing — not to rules. LP category banners are exempt (Rule 5). |

### Step 3 — Identify violations

For each rule, list the exact slots and filenames that violate it. Group repeats by filename and list every slot where the repeat occurs.

**Repeat violation priority:**
- Highest: same image used for two different sub-category banners in the `lp-category-banners` block (different categories sharing one image gives no visual differentiation)
- Medium: LP banner image reused in a carousel or card slot elsewhere on the same page
- Lower: carousel-to-carousel or carousel-to-card-text repeats

### Step 4 — Identify alternatives

For each violation, check:
1. Does a dedicated sub-category dir exist for the banner's target page? (e.g. `public/images/puff-shirts/`)
2. If not, does the staging area (`public/new-images/`) have files for that sub-category?
3. If staging files exist, do their prefixed basenames already exist in `custom-shirts/` or another dir?
4. What puff/category-specific images are already available in the current dir without needing a new migration pass?

### Step 5 — Fix plan

Document the recommended fix for each violation in two tiers:
- **Short-term:** a fix using files that already exist, requiring no new dir creation or file migration
- **Long-term:** the correct fix once the sub-page has its own dedicated image dir from its full migration pass

### Step 6 — Apply fixes

Fix violations in order of priority. For LP banners, the fix should always use a file that visually represents the sub-category it links to. Cross-promo slide-ins are excluded from all LP rules (they are intentionally shared).

### Step 7 — Document the instance

Add an entry to this file under "Review Instances" with the full slot table, violations found, and fixes applied.

---

## Review Instances

---

### `/custom-apparel` LP

**File:** `resources/views/pages/custom-apparel/index.blade.php`
**Status:** Complete. All 29 slots fixed. Rules 1–6 satisfied. All 29 files distinct. All non-banner slots use R1/R2/R3 images. All 16 LP banners use the correct sub-page hero image.
**LP Rules 1–6:** All clean.

#### Final slot map (all 29 slots)

| # | Component | Final File | Dir | Rule 5? | R1/R2/R3? |
|---|---|---|---|---|---|
| 1 | `category-hero` | `top5pct-custom-dtf-shirts.jpg` | `dtf-transfers/` | n/a | R1 ✓ |
| 2 | Carousel 1 slot 1 | `top5pct-dye-sublimation-shirts.jpg` | `sublimation/` | n/a | R1 ✓ |
| 3 | Carousel 1 slot 2 | `top5pct-brick-vinyl-cresthill.jpg` | `custom-shirts/` | n/a | R1 ✓ |
| 4 | Carousel 1 slot 3 | `top5pct-spirit-wear-clothing.jpg` | `spirit-wear/` | n/a | R1 ✓ |
| 5 | Carousel 1 slot 4 | `top5pct-volleyball-team-uniforms-joliet.jpg` | `spirit-wear/` | n/a | R1 ✓ |
| 6 | Carousel 1 slot 5 | `top5pct-custom-company-apparel.jpg` | `corporate-wear/` | n/a | R1 ✓ |
| 7 | LP banner 1 "DTF Transfers" | `top5pct-dtf-t-shirt-printing.jpg` | `dtf-transfers/` | ✓ sub-page hero | exempt |
| 8 | LP banner 2 "Dye Sublimation" | `top5pct-dye-sublimation-custom-shirt-joliet.jpg` | `sublimation/` | ✓ sub-page hero | exempt |
| 9 | LP banner 3 "Screen Printing" | `top5pct-screenprinted-shirts-joliet.jpg` | `custom-shirts/` | ✓ sub-page hero | exempt |
| 10 | LP banner 4 "Embroidery" | `top5pct-stitched-embroidered-shirts.jpg` | `embroidery/` | ✓ sub-page hero | exempt |
| 11 | LP banner 5 "Rhinestone Shirts" | `top5pct-rhinestone-hoodies-joliet.jpg` | `custom-shirts/` | ✓ sub-page hero | exempt |
| 12 | LP banner 6 "Glitter Shirts" | `top5pct-glitter-t-shirts.jpg` | `glitter-shirts/` | ✓ sub-page hero | exempt |
| 13 | LP banner 7 "Puff Print Shirts" | `top5pct-custom-puff-shirts.jpg` | `custom-shirts/` | Fallback — no dedicated dir yet | exempt |
| 14 | LP banner 8 "Glow In The Dark" | `top5pct-glow-in-the-dark-caps.jpg` | `glow-shirts/` | ✓ sub-page hero | exempt |
| 15 | LP banner 9 "Flock Shirts" | `top5pct-custom-flock-t-shirt-printing.jpg` | `flock-shirts/` | ✓ sub-page hero | exempt |
| 16 | LP banner 10 "Brick Shirts" | `top5pct-brick-vinyl-hoodies.jpg` | `custom-shirts/` | ✓ sub-page hero | exempt |
| 17 | LP banner 11 "Holographic Shirts" | `top5pct-holographic-vinyl-hoodie-foil.jpg` | `holographic-shirts/` | ✓ sub-page hero | exempt |
| 18 | LP banner 12 "Foil Shirts" | `top5pct-foil-gold-t-shirt.jpg` | `custom-shirts/` | ✓ sub-page hero | exempt |
| 19 | LP banner 13 "Reflective Shirts" | `top5pct-reflective-shirts-gold.jpg` | `reflective-shirts/` | ✓ sub-page hero | exempt |
| 20 | LP banner 14 "Reunion Shirts" | `top5pct-family-reunion-shirts-joliet.jpg` | `reunion-shirts/` | ✓ sub-page hero | exempt |
| 21 | LP banner 15 "Spirit Wear" | `top5pct-spirit-wear-joliet.jpg` | `spirit-wear/` | ✓ sub-page hero | exempt |
| 22 | LP banner 16 "Corporate Wear" | `top5pct-custom-business-shirts.jpg` | `corporate-wear/` | ✓ sub-page hero | exempt |
| 23 | `card-image-with-text` | `top5pct-embroidered-caps.jpg` | `embroidery/` | n/a | R1 ✓ |
| 24 | Carousel 2 slot 1 | `top5pct-glitter-lips-custom-t-shirt.jpg` | `glitter-shirts/` | n/a | R1 ✓ |
| 25 | Carousel 2 slot 2 | `top5pct-flock-hoodie-printing.jpg` | `flock-shirts/` | n/a | R1 ✓ |
| 26 | Carousel 2 slot 3 | `top5pct-rhinestone-bling-joliet.jpg` | `custom-shirts/` | n/a | R1 ✓ |
| 27 | Carousel 2 slot 4 | `top5pct-reflective-shirts.jpg` | `reflective-shirts/` | n/a | R1 ✓ |
| 28 | Slide-in left | `top5pct-custom-t-shirts-dtf.jpg` | `dtf-transfers/` | n/a | R1 ✓ |
| 29 | Slide-in right | `top5pct-embroidery-beanies.jpg` | `embroidery/` | n/a | R1 ✓ |

*All 29 files distinct. All 13 non-banner slots R1/R2/R3. All 15 LP banners use correct sub-page hero (banner 7 uses acceptable fallback pending `puff-shirts/` dir migration).*

#### Fix notes

- All 16 LP banners updated to exact sub-page hero images. Banner 7 "Puff Print" uses `custom-shirts/top5pct-custom-puff-shirts.jpg` as an acceptable fallback (no dedicated `puff-shirts/` dir yet). Replace once that sub-page migration runs.
- All 13 non-banner slots replaced with R1/R2/R3 images sourced from relevant sub-category dirs.
- Reunion shirts has no confirmed R1/R2/R3 images in staging — carousel 1 slot 3 uses `spirit-wear/top5pct-spirit-wear-clothing.jpg` instead.
- `puff-shirts/` dir still needs to be created during the `puff-shirts` sub-page migration pass.

---

### `/stickers` LP

**File:** `resources/views/pages/stickers/index.blade.php`
**Status:** Complete. All 15 slots fixed. Rules 3, 4, 5 satisfied. All 15 files distinct. Both LP banners use correct sub-page hero images.
**LP Rules 1–6:** All clean.

#### Final slot map (all 15 slots)

| # | Component | Final File | Dir | Rule 5? | R1/R2? |
|---|---|---|---|---|---|
| 1 | `category-hero` | `top5pct-custom-shaped-stickers-cresthill.jpg` | `custom-shaped-stickers-decals/` | n/a | R1 ✓ |
| 2 | Carousel 1 slot 1 | `top5pct-die-cut-stickers-shorewood.jpg` | `custom-shaped-stickers-decals/` | n/a | R1 ✓ |
| 3 | Carousel 1 slot 2 | `top5pct-stickers-decals-joliet-beer-brewery.jpg` | `custom-shaped-stickers-decals/` | n/a | import round |
| 4 | Carousel 1 slot 3 | `top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg` | `custom-shaped-stickers-decals/` | n/a | import round |
| 5 | Carousel 1 slot 4 | `top5pct-stickers-decals-joliet-volleyball-team.jpg` | `custom-shaped-stickers-decals/` | n/a | import round |
| 6 | Carousel 1 slot 5 | `top5pct-stickers-decals-joliet-labels.jpg` | `custom-shaped-stickers-decals/` | n/a | import round |
| 7 | LP banner 1 "Standard Stickers" | `top5pct-custom-stickers-cresthill.jpg` | `custom-shaped-stickers-decals/` | ✓ sub-page hero | R1 exempt |
| 8 | LP banner 2 "Custom Shaped Stickers" | `top5pct-die-cut-stickers-joliet.jpg` | `custom-shaped-stickers-decals/` | ✓ sub-page hero | R1 exempt |
| 9 | `card-image-with-text` | `top5pct-stickers-decals-joliet-ocean-viewz.jpg` | `custom-shaped-stickers-decals/` | n/a | import round |
| 10 | Carousel 2 slot 1 | `top5pct-custom-glossy-stickers-in-joliet.jpg` | `custom-shaped-stickers-decals/` | n/a | import round |
| 11 | Carousel 2 slot 2 | `top5pct-article-buy-stickers-decals-joliet.jpg` | `standard-stickers-decals/` | n/a | import round |
| 12 | Carousel 2 slot 3 | `top5pct-custom-label-stickers.jpg` | `custom-shaped-stickers-decals/` | n/a | import round |
| 13 | Carousel 2 slot 4 | `top5pct-stickers-decals-joliet-boxing-sports.jpg` | `custom-shaped-stickers-decals/` | n/a | import round |
| 14 | Slide-in right | `top5pct-diecut-stickers.jpg` | `standard-stickers-decals/` | n/a | import round |
| 15 | Slide-in left | `top5pct-custom-shaped-stickers.jpg` | `custom-shaped-stickers-decals/` | n/a | import round |

*All 15 files distinct. Both LP banners use correct sub-page hero images (R1). Hero and carousel 1 slot 1 use R1 preferred images. Stickers has 18 total import-round images across both dirs — enough for all slots with no gaps.*

#### Fix notes

- Hero and C1 slot 1 both used the stale `banner-` prefixed file — replaced with the two available R1 images.
- LP banner 1 "Standard Stickers" was using a beer brewery photo — corrected to the sub-page hero `top5pct-custom-stickers-cresthill.jpg`.
- LP banner 2 "Custom Shaped Stickers" was using `ocean-viewz.jpg` — corrected to the sub-page hero `top5pct-die-cut-stickers-joliet.jpg`.
- `boxing-sports.jpg` was used 3× (C1, C2, slide-in) — consolidated to C2 slot 4 only.
- `stoner-rock-bbq.jpg` was used 2× (C2, slide-in) — moved to C1 slot 3 only.
- `labels.jpg` was used 2× (C1 slot 5, C2 slot 3) — stays in C1 slot 5, C2 slot 3 replaced with `custom-label-stickers.jpg`.
- Pulled in 4 previously unused import-round images: `custom-glossy-stickers-in-joliet.jpg`, `custom-label-stickers.jpg`, `custom-shaped-stickers.jpg`, `diecut-stickers.jpg`.

---

### `/vehicle-graphics` LP

**File:** `resources/views/pages/vehicle-graphics/index.blade.php`
**Status:** Complete. All 15 slots fixed. Rules 3, 4, 5 satisfied. All 15 files distinct. All 3 LP banners use correct sub-page hero images.
**LP Rules 1–6:** All clean.

#### Final slot map (all 15 slots)

| # | Component | Final File | Dir | Rule 5? | R1/R2? |
|---|---|---|---|---|---|
| 1 | `category-hero` | `top5pct-car-wraps-vinyl-lettering-joliet-shorewood.jpg` | `automobile-graphics/` | n/a | import-round |
| 2 | Carousel 1 slot 1 | `top5pct-joliet-car-magnets.jpg` | `vehicle-magnets/` | n/a | R1 ✓ |
| 3 | Carousel 1 slot 2 | `top5pct-custom-dot-decals-for-trucks-in-joliet.jpg` | `dot-decals/` | n/a | R1 ✓ |
| 4 | Carousel 1 slot 3 | `top5pct-dot-decals-semi-truck.jpg` | `dot-decals/` | n/a | R1 ✓ |
| 5 | Carousel 1 slot 4 | `top5pct-car-decals-white-oaks-library.jpg` | `vehicle-magnets/` | n/a | R1 ✓ |
| 6 | LP banner 1 "Automobile Graphics" | `top5pct-auto-window-wraps.jpg` | `automobile-graphics/` | ✓ sub-page hero | R1 exempt |
| 7 | LP banner 2 "Vehicle Magnets" | `top5pct-magnet-vehicle-signs-joliet.jpg` | `vehicle-magnets/` | ✓ sub-page hero | R1 exempt |
| 8 | LP banner 3 "DOT Decals" | `top5pct-truck-lettering-joliet-shorewood-rockdale.jpg` | `dot-decals/` | ✓ sub-page hero | import-round exempt |
| 9 | `card-image-with-text` | `top5pct-vinyl-lettering-car-graphics-joliet-crest-hill.jpg` | `automobile-graphics/` | n/a | import-round |
| 10 | Carousel 2 slot 1 | `top5pct-car-magnets-truck-magnets-joliet.jpg` | `vehicle-magnets/` | n/a | import-round |
| 11 | Carousel 2 slot 2 | `top5pct-dot-decals-joliet-shorewood-rockdale.jpg` | `dot-decals/` | n/a | import-round |
| 12 | Carousel 2 slot 3 | `top5pct-boat-decals-joliet-shorewood-crest-hill.jpg` | `automobile-graphics/` | n/a | import-round |
| 13 | Carousel 2 slot 4 | `top5pct-business-magnets-car-magnets-joliet.jpg` | `vehicle-magnets/` | n/a | import-round |
| 14 | Slide-in left | `top5pct-trucking-dot-decals-in-joliet.jpg` | `dot-decals/` | n/a | R1 ✓ |
| 15 | Slide-in right | `top5pct-car-magnets-vehicle-magnets-joliet.jpg` | `vehicle-magnets/` | n/a | import-round |

*All 15 files distinct. All 3 LP banners use correct sub-page hero images. `automobile-graphics/` has one R1 image (`auto-window-wraps.jpg`) which is assigned to LP banner 1 — hero and card-left use import-round automobile-graphics files, fully valid per Rule 6. C2 slots 1–4 and slide-in right were already clean and kept.*

#### Fix notes

- All 3 LP banners used stale `banner-` prefix files — replaced with exact sub-page heroes.
- `banner-vinyl-lettering-car-wraps-joliet.jpg` appeared 3× (hero, C1 slot 1, LP banner 1) — eliminated entirely.
- `car-wraps-vinyl-lettering-joliet-shorewood.jpg` appeared 3× (C1 slot 4, card-left, slide-in left) — consolidated to hero only.
- C1 slots 1–4 replaced with R1 images from `vehicle-magnets/` and `dot-decals/`.
- Card-left updated to `vinyl-lettering-car-graphics-joliet-crest-hill.jpg` (automobile-graphics import-round).
- Slide-in left updated to `trucking-dot-decals-in-joliet.jpg` (R1, dot-decals).
- C2 slots 1–4 and slide-in right were already unique and clean — kept as-is.

---

### `/promotional-items` LP

**File:** `resources/views/pages/promotional-items.blade.php`
**Status:** Proposed map complete. 18 of 18 slots assigned. Apply when ready.
**Sub-pages:** `mugs`, `can-koozies`, `towels`, `drink-coasters`, `tote-bags`, `mouse-pads`

---

#### Sub-page notes (fix after LP is applied)

**`/promotional-items/mugs` and `/promotional-items/can-koozies`:**
Both sub-pages exist with images in `promo-items/mugs/` and `promo-items/koozies/` but are NOT fully standardized. Neither sub-page has an `image=` attribute on its `<x-sections.category-hero>` component. Both sub-pages need a full image pass to set the hero and ensure all slots use only import-round promo-items files.

**`/promotional-items/towels`, `/promotional-items/drink-coasters`, `/promotional-items/tote-bags`, `/promotional-items/mouse-pads`:**
No dedicated image directories exist yet under `public/images/promo-items/` for these four sub-categories. Images must be imported into `promo-items/towels/`, `promo-items/drink-coasters/`, `promo-items/tote-bags/`, and `promo-items/mouse-pads/` before those sub-pages can be standardized.

**Rule 5 deviation — LP banners 1 and 2:**
Since neither mugs nor koozies sub-pages have a `category-hero image=` yet, LP banners 1 and 2 use the first image from each sub-page's Carousel 1 (confirmed R1/R2 by user) as the best available proxy. Update both LP banners to the exact sub-page heroes once hero images are added to those pages.

**Rule 5 deviation — LP banners 3–6:**
No images exist yet for towels, drink-coasters, tote-bags, or mouse-pads. LP banners 3–6 use R1/R2 mugs and koozies images as placeholders. Replace all four once sub-category image dirs are created and sub-page heroes are set.

---

#### R1/R2 confirmed (staging sources)

**`promo-items/mugs/` R1 (staging: `public/new-images/Mugs/`):**
`top5pct-custom-coffee-mugs-in-joliet.jpg`, `top5pct-custom-coffee-mugs.jpg`, `top5pct-custom-mugs-near-me.jpg`, `top5pct-custom-mugs.jpg` (sub-page C1, user confirmed), `top5pct-printed-mugs.jpg` (staging root)

**`promo-items/koozies/` R1 (staging: `public/new-images/Koozies/`):**
`top5pct-can-koozies.jpg`, `top5pct-custom-koozies.jpg`, `top5pct-custom-can-koozies.jpg`, `top5pct-koozies-joliet.jpg` (sub-page C1, user confirmed), `top5pct-personalized-koozies-joliet.jpg` (staging root)

**`promo-items/mugs/` import-round (not R1):**
`top5pct-custom-printed-mugs.jpg`, `top5pct-picture-on-mugs.jpg`, `top5pct-printed-mugs-old.jpg`

**Custom Shirts Sublimation R1 (staging: `public/new-images/Custom Shirts/Printing Options/Sublimation/`):**
`custom-sublimation-shirts.jpg`, `dye-sublimation-custom-shirt-joliet.jpg`, `long-lasting-graphic-shirts.jpg`, `sublmation-team-shirts.jpg` — migrate to `custom-shirts/` before applying slots 14–18.

---

#### Current 18-slot state (pre-fix)

This LP has **18 slots**: hero, 4×C1, 6×LP banners, card-left, 4×C2, 2×slide-ins. Every slot uses images from wrong categories. Zero promo-items images on the LP.

| # | Component | Current file | Dir | Issues |
|---|---|---|---|---|
| 1 | `category-hero` | `top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | `custom-shirts/` | R3, R6, 3× |
| 2 | Carousel 1 slot 1 | `top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | `custom-shirts/` | R3, R6, 3× |
| 3 | Carousel 1 slot 2 | `top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg` | `banners/` | R3, R6 |
| 4 | Carousel 1 slot 3 | `top5pct-custom-t-shirts-main.jpg` | `custom-shirts/` | R6, 4× |
| 5 | Carousel 1 slot 4 | `top5pct-stickers-decals-joliet-labels.jpg` | `stickers-decals/` | R6, 2× |
| 6 | LP banner 1 "Custom Mugs" | `top5pct-custom-t-shirts-main.jpg` | `custom-shirts/` | R5, R6, 4× |
| 7 | LP banner 2 "Can Koozies" | `top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | `custom-shirts/` | R5, R6 |
| 8 | LP banner 3 "Custom Towels" | `top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg` | `spirit-wear/` | R3, R5, R6 |
| 9 | LP banner 4 "Drink Coasters" | `top5pct-custom-vinyl-shirts-caps-hoodies.jpg` | `custom-shirts/` | R5, R6, 2× |
| 10 | LP banner 5 "Tote Bags" | `top5pct-custom-embroidery-shops-near-me-joliet.jpg` | `custom-shirts/` | R5, R6 |
| 11 | LP banner 6 "Mouse Pads" | `top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg` | `banners/` | R3, R5, R6 |
| 12 | `card-image-with-text` | `top5pct-custom-t-shirts-main.jpg` | `custom-shirts/` | R6, 4× |
| 13 | Carousel 2 slot 1 | `top5pct-custom-vinyl-shirts-caps-hoodies.jpg` | `custom-shirts/` | R6, 2× |
| 14 | Carousel 2 slot 2 | `top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` | `custom-shirts/` | R6, 2× |
| 15 | Carousel 2 slot 3 | `top5pct-stickers-decals-joliet-labels.jpg` | `stickers-decals/` | R6, 2× |
| 16 | Carousel 2 slot 4 | `top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | `custom-shirts/` | R3, R6, 3× |
| 17 | Slide-in left | `top5pct-custom-t-shirts-main.jpg` | `custom-shirts/` | R6, 4× |
| 18 | Slide-in right | `top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` | `custom-shirts/` | R6, 2× |

---

#### Proposed final slot map (all 18 slots)

Slots 14–18 use Custom Shirts Sublimation R1/R2 from staging as cross-category placeholders (Rule 2 allows this). Confirm migration path before applying.

| # | Component | Proposed file | Dir | R1/R2? | Notes |
|---|---|---|---|---|---|
| 1 | `category-hero` | `top5pct-custom-mugs.jpg` | `promo-items/mugs/` | R1 ✓ | |
| 2 | Carousel 1 slot 1 | `top5pct-koozies-joliet.jpg` | `promo-items/koozies/` | R1 ✓ | |
| 3 | Carousel 1 slot 2 | `top5pct-custom-printed-mugs.jpg` | `promo-items/mugs/` | import-round | |
| 4 | Carousel 1 slot 3 | `top5pct-personalized-koozies-joliet.jpg` | `promo-items/koozies/` | R1 ✓ | |
| 5 | Carousel 1 slot 4 | `top5pct-picture-on-mugs.jpg` | `promo-items/mugs/` | import-round | |
| 6 | LP banner 1 "Custom Mugs" | `top5pct-custom-coffee-mugs-in-joliet.jpg` | `promo-items/mugs/` | R1 ✓ | proxy for sub-page hero — update when hero added |
| 7 | LP banner 2 "Can Koozies" | `top5pct-can-koozies.jpg` | `promo-items/koozies/` | R1 ✓ | proxy for sub-page hero — update when hero added |
| 8 | LP banner 3 "Custom Towels" | `top5pct-custom-coffee-mugs.jpg` | `promo-items/mugs/` | R1 ✓ | placeholder — replace when towels dir created |
| 9 | LP banner 4 "Drink Coasters" | `top5pct-custom-koozies.jpg` | `promo-items/koozies/` | R1 ✓ | placeholder — replace when drink-coasters dir created |
| 10 | LP banner 5 "Tote Bags" | `top5pct-custom-mugs-near-me.jpg` | `promo-items/mugs/` | R1 ✓ | placeholder — replace when tote-bags dir created |
| 11 | LP banner 6 "Mouse Pads" | `top5pct-custom-can-koozies.jpg` | `promo-items/koozies/` | R1 ✓ | placeholder — replace when mouse-pads dir created |
| 12 | `card-image-with-text` | `top5pct-printed-mugs.jpg` | `promo-items/mugs/` | R1 ✓ | |
| 13 | Carousel 2 slot 1 | `top5pct-printed-mugs-old.jpg` | `promo-items/mugs/` | import-round | |
| 14 | Carousel 2 slot 2 | `top5pct-long-lasting-graphic-shirts.jpg` | `custom-shirts/` | R1 ✓ | sublimation R1, confirmed in dir |
| 15 | Carousel 2 slot 3 | `top5pct-custom-flock-t-shirt-printing.jpg` | `custom-shirts/` | R1 ✓ | flock R1, confirmed in dir |
| 16 | Carousel 2 slot 4 | `top5pct-flock-hoodie-printing.jpg` | `custom-shirts/` | R1 ✓ | flock R1, confirmed in dir |
| 17 | Slide-in left | `top5pct-flock-shirt-vinyl.jpg` | `custom-shirts/` | R1 ✓ | flock R1, confirmed in dir |
| 18 | Slide-in right | `top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | `custom-shirts/` | import-round | confirmed in dir |

*All 18 slots distinct. 13 promo-items images fill slots 1–13 (hero, C1×4, LP banners×6, card-left). Slots 14–18 use Custom Shirts R1/R2 flock and sublimation files as cross-category placeholders (Rule 2 allows) pending additional promo-items image imports. Note: sublimation staging files `custom-sublimation-shirts.jpg`, `dye-sublimation-custom-shirt-joliet.jpg`, `sublmation-team-shirts.jpg` were not yet migrated to `custom-shirts/` at time of apply — flock files used instead. All 6 LP banners will need to be updated once sub-page heroes are set.*

**Status: Applied.**

---

### `/signs` LP

**File:** `resources/views/pages/signs/index.blade.php`
**Status:** Proposed map complete. 25 of 25 slots assigned. Apply when ready.
**Sub-pages:** `banners`, `business-signs`, `yard-signs`, `sidewalk-signs`, `posters`, `wall-signs`, `window-signs`, `door-signs`, `floor-signs`, `table-runners`, `table-cloths`, `sidewalk-signs-a-frame-signs` (parking signs)

This is the largest LP analyzed so far: **25 slots** — hero, 5×C1, 12×LP banners, card-left, 4×C2, 2×slide-ins.

---

#### Image directories (confirmed in `public/images/`)

| Dir | Files | Notes |
|---|---|---|
| `backlit-signs/` | 7 | all import-round (no root staging dir — staging has `Business Signs/Backlit Signs/`) |
| `business-signs/` | 8 | all import-round (no root staging dir — staging has sub-dirs only) |
| `corona-virus-signs/` | 8 | not used in LP |
| `outdoor-signs/` | 2 | R1 ✓ (staging: `Business Signs/Outdoor Signs/`) |
| `sidewalk-signs/` | 12 | mixed — 3 R1 from staging `Ground Signs/A-Frames/`, rest import-round |
| `wall-signs/` | 6 | R1 ✓ (staging: `Business Signs/Wall Signs/`) |
| `yard-signs/` | 11 | all import-round (no yard-signs staging dir) |
| `banners/` | 20 | mixed — 5 R1 from staging `Business Signs/Banners/`, rest import-round |
| `posters/` | 11 | mixed — 4 R1 from staging `Business Signs/Posters/`, rest import-round |
| `table-runners/` | 17 | mixed — 1 R1 from staging `Table Signs/Table Runner/`, rest import-round |
| `table-cloths/` | 8 | mixed — 2 R1 from staging `Table Signs/Table Cloths/`, rest import-round |
| `window-wall-floor-decals/` | 25 | mixed — 3 R1 from staging `Business Signs/Window Signs/`, rest import-round |
| `floor-signs/` | NOT FOUND | no dedicated dir — floor-signs sub-page uses `window-wall-floor-decals/` |
| `door-signs/` | NOT FOUND | no dedicated dir — door-signs sub-page uses `window-wall-floor-decals/` |

---

#### R1/R2 confirmed (staging sources)

**`Business Signs/Banners/` → `banners/`:**
`top5pct-banners-for-trade-shows.jpg`, `top5pct-mesh-construction-banner.jpg`, `top5pct-portable-banners.jpg`, `top5pct-retractable-banners-plainfield.jpg`, `top5pct-sports-banners.jpg`

**`Business Signs/Outdoor Signs/` → `outdoor-signs/`:**
`top5pct-outdoor-banner-signs-joliet.jpg`, `top5pct-outdoor-sign-joliet.jpg`

**`Business Signs/Backlit Signs/` → `backlit-signs/`:**
`top5pct-backlit-company-signs.jpg`, `top5pct-backlit-display-signs-joliet.jpg`, `top5pct-backlit-monument-sign-joliet.jpg`, `top5pct-backlit-outdoor-signs.jpg`, `top5pct-backlit-sign-new-lenox.jpg`, `top5pct-custom-backlit-display-signs-in-joliet.jpg`, `top5pct-monument-signs-joliet.jpg`

**`Business Signs/Door Signs/` → `window-wall-floor-decals/`:**
`top5pct-business-door-signs.jpg`, `top5pct-door-sign-installers.jpg`, `top5pct-door-wraps-joliet.jpg`, `top5pct-vinyl-door-lettering.jpg`, `top5pct-vinyl-door-signs.jpg`

**`Business Signs/Posters/` → `posters/`:**
`top5pct-big-posters-joliet.jpg`, `top5pct-custom-posters.jpg`, `top5pct-poster-board-joliet.jpg`, `top5pct-posters-printed-joliet.jpg`

**`Business Signs/Wall Signs/` → `wall-signs/`:**
`top5pct-wall-signs.jpg`, `top5pct-wall-wraps.jpg` (note: staging has `custom-wall-Signs.jpg` — mixed case, skip)

**`Business Signs/Window Signs/` → `window-wall-floor-decals/`:**
`top5pct-joliet-slammers-window-signs-joliet.jpg`, `top5pct-window-signage.jpg`, `top5pct-window-signs-joliet.jpg`

**`Ground Signs/A-Frames/` → `sidewalk-signs/`:**
`top5pct-a-frame-sidewalk-signs.jpg`, `top5pct-sidewalk-signage.jpg`, `top5pct-sidewalk-signs-joliet.jpg`

**`Table Signs/Table Cloths/` → `table-cloths/`:**
`top5pct-custom-table-cloth-business.jpg`, `top5pct-printed-table-cloths.jpg`

**`Table Signs/Table Runner/` → `table-runners/`:**
`top5pct-table-runner-joliet.jpg`

---

#### Sub-page hero status

| Sub-page | Current hero | R1? | R3? | Notes |
|---|---|---|---|---|
| `/signs/business-signs/banners` | `banners/top5pct-sports-banners.jpg` | R1 ✓ | — | ✓ ready |
| `/signs/business-signs` | `business-signs/top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg` | — | R3 ✗ | fix sub-page hero first |
| `/signs/ground-signs/yard-signs` | `yard-signs/top5pct-custom-yard-signs-joliet.jpg` | import-round | — | ✓ ready |
| `/signs/ground-signs/sidewalk-signs` | `sidewalk-signs/top5pct-banner-a-frame-sidewalk-signs-joliet-romeoville.jpg` | — | R3 ✗ | fix sub-page hero first |
| `/signs/business-signs/posters` | `posters/top5pct-posters-printed-joliet.jpg` | R1 ✓ | — | ✓ ready |
| `/signs/table-signs/table-runners` | `table-runners/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg` | — | R3 ✗ | fix sub-page hero first |
| `/signs/business-signs/window-signs` | `window-wall-floor-decals/top5pct-window-signage.jpg` | R1 ✓ | — | ✓ ready (no dedicated window-signs dir) |
| `/signs/business-signs/wall-signs` | `wall-signs/top5pct-wall-signs.jpg` | R1 ✓ | — | ✓ ready |
| `/signs/business-signs/floor-signs` | `window-wall-floor-decals/top5pct-banner-wall-decal-door-signs-joliet.jpg` | — | R3 ✗ + R6 | fix sub-page hero first; no floor-signs dir |
| `/signs/business-signs/door-signs` | `window-wall-floor-decals/top5pct-door-signage.jpg` | import-round | — | ✓ ready (no dedicated door-signs dir) |
| `/signs/table-signs/table-cloths` | `table-cloths/top5pct-custom-table-cloth.jpg` | import-round | — | ✓ ready |
| `/signs/ground-signs/sidewalk-signs-a-frame-signs` | `sidewalk-signs/top5pct-a-frame-sidewalk-signs.jpg` | R1 ✓ | — | ✓ ready (used for Parking Signs LP banner) |

**4 sub-pages need hero fixes before their LP banners can be set per Rule 5:**
`/signs/business-signs`, `/signs/ground-signs/sidewalk-signs`, `/signs/table-signs/table-runners`, `/signs/business-signs/floor-signs`

---

#### Current 25-slot state (pre-fix)

| # | Component | Current file | Dir | Issues |
|---|---|---|---|---|
| 1 | `category-hero` | `top5pct-banner-poster-maker-joliet-romeoville-shorewood.jpg` | `posters/` | R3 |
| 2 | C1 slot 1 | `top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg` | `banners/` | R3, 3× |
| 3 | C1 slot 2 | `top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg` | `yard-signs/` | R3, 2× |
| 4 | C1 slot 3 | `top5pct-banner-a-frame-sidewalk-signs-joliet-romeoville.jpg` | `sidewalk-signs/` | R3, 2× |
| 5 | C1 slot 4 | `top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg` | `business-signs/` | R3, 3× |
| 6 | C1 slot 5 | `top5pct-banner-poster-maker-joliet-romeoville-shorewood.jpg` | `posters/` | R3, 3× repeat of slot 1 |
| 7 | LP banner 1 "Yard Signs" | `top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg` | `yard-signs/` | R3, 2×, R5 |
| 8 | LP banner 2 "Sidewalk Signs" | `top5pct-banner-a-frame-sidewalk-signs-joliet-romeoville.jpg` | `sidewalk-signs/` | R3, 2×, R5 |
| 9 | LP banner 3 "Banners" | `top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg` | `banners/` | R3, 3×, R5 |
| 10 | LP banner 4 "Business Signs" | `top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg` | `business-signs/` | R3, 3×, R5 |
| 11 | LP banner 5 "Posters" | `top5pct-banner-poster-maker-joliet-romeoville-shorewood.jpg` | `posters/` | R3, 3×, R5 |
| 12 | LP banner 6 "Table Runners" | `top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg` | `table-runners/` | R3, R5 |
| 13 | LP banner 7 "Window Signs" | `top5pct-window-decals-joliet-shorewood-crest-hill.jpg` | `window-wall-floor-decals/` | R5, 3× |
| 14 | LP banner 8 "Wall Signs" | `top5pct-wall-signs-joliet.jpg` | `window-wall-floor-decals/` | R5, R6 (should be wall-signs/) |
| 15 | LP banner 9 "Floor Signs" | `top5pct-outdoor-signs-joliet-shorewood-crest-hill.jpg` | `business-signs/` | R5, R6, 2× |
| 16 | LP banner 10 "Door Signs" | `top5pct-door-signs-joliet-shorewood-crest-hill.jpg` | `business-signs/` | R5, R6 |
| 17 | LP banner 11 "Table Cloths" | `top5pct-custom-table-cloth-joliet-crest-hill.jpg` | `table-runners/` | R5, R6 (should be table-cloths/) |
| 18 | LP banner 12 "Parking Signs" | `top5pct-outdoor-signs-joliet-shorewood-crest-hill.jpg` | `business-signs/` | R5, R6, 2× repeat of slot 15 |
| 19 | `card-image-with-text` | `top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg` | `business-signs/` | R3, 3× repeat of slot 10 |
| 20 | C2 slot 1 | `top5pct-window-decals-joliet-shorewood-crest-hill.jpg` | `window-wall-floor-decals/` | 3× repeat of slot 13 |
| 21 | C2 slot 2 | `top5pct-custom-table-runner-joliet-shorewood.jpg` | `table-runners/` | — |
| 22 | C2 slot 3 | `top5pct-birthday-banner-joliet-shorewood-plainfield.jpg` | `banners/` | R3 |
| 23 | C2 slot 4 | `top5pct-business-signs-joliet-shorewood-crest-hill.jpg` | `business-signs/` | — |
| 24 | Slide-in right | `top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg` | `banners/` | R3, 3× repeat of slot 9 |
| 25 | Slide-in left | `top5pct-window-decals-joliet-shorewood-crest-hill.jpg` | `window-wall-floor-decals/` | 3× repeat of slots 13, 20 |

**Duplicate summary:**
- `banner-poster-maker-joliet-romeoville-shorewood.jpg` — slots 1, 6, 11 (3×)
- `banner-business-signs-joliet-plainfield-shorewood.jpg` — slots 5, 10, 19 (3×)
- `banner-business-banners-joliet-shorewood-crest-hill.jpg` — slots 2, 9, 24 (3×)
- `window-decals-joliet-shorewood-crest-hill.jpg` — slots 13, 20, 25 (3×)
- `outdoor-signs-joliet-shorewood-crest-hill.jpg` — slots 15, 18 (2×)
- `banner-yard-signs-joliet-shorewood-crest-hill.jpg` — slots 3, 7 (2×)
- `banner-a-frame-sidewalk-signs-joliet-romeoville.jpg` — slots 4, 8 (2×)

Only 2 slots clean (no R3, no duplicate): slot 21 (`custom-table-runner-joliet-shorewood.jpg`) and slot 23 (`business-signs-joliet-shorewood-crest-hill.jpg`).

---

#### Proposed final slot map (all 25 slots)

LP banners 2, 4, 6, 9 use R1 proxies — update to exact sub-page heroes once those 4 sub-page heroes are fixed.

| # | Component | Proposed file | Dir | R1/R2? | Notes |
|---|---|---|---|---|---|
| 1 | `category-hero` | `top5pct-outdoor-sign-joliet.jpg` | `outdoor-signs/` | R1 ✓ | |
| 2 | C1 slot 1 | `top5pct-banners-for-trade-shows.jpg` | `banners/` | R1 ✓ | |
| 3 | C1 slot 2 | `top5pct-yard-sign-joliet.jpg` | `yard-signs/` | import-round | |
| 4 | C1 slot 3 | `top5pct-sidewalk-signs-joliet.jpg` | `sidewalk-signs/` | R1 ✓ | |
| 5 | C1 slot 4 | `top5pct-business-signs-joliet-plainfield-romeoville.jpg` | `business-signs/` | import-round | |
| 6 | C1 slot 5 | `top5pct-custom-posters.jpg` | `posters/` | R1 ✓ | |
| 7 | LP banner 1 "Yard Signs" | `top5pct-custom-yard-signs-joliet.jpg` | `yard-signs/` | import-round | sub-page hero ✓ |
| 8 | LP banner 2 "Sidewalk Signs" | `top5pct-sidewalk-signage.jpg` | `sidewalk-signs/` | R1 ✓ | proxy — sub-page hero has R3, update when fixed |
| 9 | LP banner 3 "Banners" | `top5pct-sports-banners.jpg` | `banners/` | R1 ✓ | sub-page hero ✓ |
| 10 | LP banner 4 "Business Signs" | `top5pct-business-signs-joliet-shorewood-crest-hill.jpg` | `business-signs/` | import-round | proxy — sub-page hero has R3, update when fixed |
| 11 | LP banner 5 "Posters" | `top5pct-posters-printed-joliet.jpg` | `posters/` | R1 ✓ | sub-page hero ✓ |
| 12 | LP banner 6 "Table Runners" | `top5pct-table-runner-joliet.jpg` | `table-runners/` | R1 ✓ | proxy — sub-page hero has R3, update when fixed |
| 13 | LP banner 7 "Window Signs" | `top5pct-window-signage.jpg` | `window-wall-floor-decals/` | R1 ✓ | sub-page hero ✓ (no dedicated window-signs dir) |
| 14 | LP banner 8 "Wall Signs" | `top5pct-wall-signs.jpg` | `wall-signs/` | R1 ✓ | sub-page hero ✓ |
| 15 | LP banner 9 "Floor Signs" | `top5pct-wall-decals-joliet.jpg` | `window-wall-floor-decals/` | import-round | proxy — sub-page hero has R3+R6, update when fixed |
| 16 | LP banner 10 "Door Signs" | `top5pct-door-signage.jpg` | `window-wall-floor-decals/` | import-round | sub-page hero ✓ (no dedicated door-signs dir) |
| 17 | LP banner 11 "Table Cloths" | `top5pct-custom-table-cloth.jpg` | `table-cloths/` | import-round | sub-page hero ✓ |
| 18 | LP banner 12 "Parking Signs" | `top5pct-a-frame-sidewalk-signs.jpg` | `sidewalk-signs/` | R1 ✓ | sidewalk-signs-a-frame-signs sub-page hero ✓ |
| 19 | `card-image-with-text` | `top5pct-backlit-display-signs-joliet.jpg` | `backlit-signs/` | R1 ✓ | |
| 20 | C2 slot 1 | `top5pct-banners-near-me.jpg` | `banners/` | import-round | |
| 21 | C2 slot 2 | `top5pct-custom-table-runners.jpg` | `table-runners/` | import-round | |
| 22 | C2 slot 3 | `top5pct-business-signs-joliet-shorewood-channahon.jpg` | `business-signs/` | import-round | |
| 23 | C2 slot 4 | `top5pct-poster-board-joliet.jpg` | `posters/` | R1 ✓ | |
| 24 | Slide-in right | `top5pct-backlit-company-signs.jpg` | `backlit-signs/` | R1 ✓ | |
| 25 | Slide-in left | `top5pct-outdoor-banner-signs-joliet.jpg` | `outdoor-signs/` | R1 ✓ | |

*All 25 slots distinct. Sub-pages with R3 heroes (slots 8, 10, 12, 15) use best available R1/import-round proxies until those sub-pages are fixed.*

**Status: Proposed map complete. 25 of 25 slots assigned. Apply when ready.**

---

#### Post-apply finding — LP banner 4 "Business Signs" is circular

LP banner 4 ("Business Signs", current slot 10) has `'href' => '/signs'` — it links back to the `/signs` LP itself. This is a circular, dead-end link that sends users nowhere new. The banner must be removed entirely.

**Blade block to remove (lines 98–103):**
```php
[
    'image' => '/images/business-signs/top5pct-business-signs-joliet-shorewood-crest-hill.jpg',
    'alt'   => 'Custom business signs in Joliet, Plainfield, and Shorewood Illinois',
    'title' => 'Business Signs',
    'href'  => '/signs',
],
```

**Effect of removal:**
- LP drops from 25 to 24 slots, and from 12 to 11 LP banners
- `top5pct-business-signs-joliet-shorewood-crest-hill.jpg` is freed — reassign to any remaining slot that needs a business-signs image, or leave freed
- Sub-page `/signs/business-signs` still exists and has its own page — if a "Business Signs" LP banner is ever needed, the correct href is `/signs/business-signs`, not `/signs`

**Note:** There is a `/signs/business-signs` sub-page blade. A banner for it could be added back with the corrected href if desired. This is a separate decision from the removal.

**Action required:** Remove the 4-line block. This is the only change needed — no image reassignment required since all remaining 24 slots are already distinct.

**Status: Removed.** LP is now 24 slots, 11 LP banners.

---

### `/` Home Page

**File:** `resources/views/pages/home.blade.php`
**Status:** MNC analysis complete. 11 of 11 slots audited. Proposed map below. Apply when ready.

**Key structural difference:** Unlike the LPs, the home page blade contains no inline `image=` attributes. All image slots live inside section component files. The fix strategy must account for this:
- Slot 1 (hero): add `image=` to `home.blade.php` — do NOT change the `category-hero.blade.php` default (that default is shared with every page that omits `image=`).
- Slots 2–11: edit the component files directly (`about-preview.blade.php`, `featured-products.blade.php`).

---

#### Image directories used

| Dir | Notes |
|---|---|
| root `public/images/` | `top5pct-banner-joliet.jpg` (hero default), `about-preview.jpg` (about section), `place-holder.1x1.jpg` (promo card) |
| `custom-shirts/` | 1 file used (R3) |
| `corporate-wear/` | 1 file used (R3) |
| `business-signs/` | 1 file used (R3) |
| `banners/` | 1 file used (R3) |
| `automobile-graphics/` | 1 file used (R3) |
| `stickers-decals/` | **BROKEN** — this dir does not exist in `public/images/`. File is actually at `custom-shaped-stickers-decals/`. Slot 8 is producing a 404. |
| `dtf-transfers/` | 1 file used (R3, typo in filename) |
| `yard-signs/` | 1 file used (R3) |

---

#### Current slot map — all 11 slots

| # | Component | Source file | Current image | Dir | Violations |
|---|---|---|---|---|---|
| 1 | `category-hero` (default prop) | `category-hero.blade.php` L10 | `top5pct-banner-joliet.jpg` | root | R3 (banner-), R6 (root, no category) |
| 2 | About preview image | `about-preview.blade.php` L51 | `about-preview.jpg` | root | None — brand photo, special case |
| 3 | Card "Custom Apparel" → `/custom-apparel` | `featured-products.blade.php` L16 | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | `custom-shirts/` | R3, R5 |
| 4 | Card "Corporate Wear" → `/custom-apparel/group-wear/corporate-wear-shirts` | `featured-products.blade.php` L26 | `corporate-wear/toptpct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg` | `corporate-wear/` | R3, R5, filename typo ("toptpct") |
| 5 | Card "Business Signs" → `/signs` | `featured-products.blade.php` L36 | `business-signs/top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg` | `business-signs/` | R3, R5 |
| 6 | Card "Banners" → `/signs/business-signs/banners` | `featured-products.blade.php` L46 | `banners/top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg` | `banners/` | R3, R5 |
| 7 | Card "Vehicle Graphics" → `/vehicle-graphics/automobile-graphics` | `featured-products.blade.php` L56 | `automobile-graphics/top5pct-banner-vinyl-lettering-car-wraps-joliet.jpg` | `automobile-graphics/` | R3, R5 |
| 8 | Card "Custom Stickers" → `/stickers/standard-stickers-decals` | `featured-products.blade.php` L66 | `stickers-decals/top5pct-banner-stickers-decals-joliet.jpg` | `stickers-decals/` | **R1 (404 — dir broken)**, R3, R5, R6 |
| 9 | Card "DTF Transfers" → `/custom-apparel/printing-options/dtf-printing` | `featured-products.blade.php` L76 | `dtf-transfers/toptpct-banner-dtf-transfers-joliet.jpg` | `dtf-transfers/` | R3, R5, filename typo ("toptpct") |
| 10 | Card "Yard Signs" → `/signs/ground-signs/yard-signs` | `featured-products.blade.php` L86 | `yard-signs/top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg` | `yard-signs/` | R3, R5 |
| 11 | Card "Promotional Items" → `/promotional-items` | `featured-products.blade.php` L96 | `place-holder.1x1.jpg` | root | **R1 (placeholder)**, R5 |

**Violation count:** R1×2, R3×9, R5×9, R6×2. Slot 2 is clean.

---

#### Sub-page hero confirmation

Each featured-products card must match the `category-hero` image of the page it links to (Rule 5). Heroes confirmed from the applied LP maps and direct blade greps:

| Card links to | Confirmed hero | Source | R1/R2? |
|---|---|---|---|
| `/custom-apparel` | `dtf-transfers/top5pct-custom-dtf-shirts.jpg` | custom-apparel LP slot 1 (applied) | R1 ✓ |
| `/custom-apparel/group-wear/corporate-wear-shirts` | `corporate-wear/top5pct-custom-business-shirts.jpg` | custom-apparel LP banner 16 (applied) | R1 ✓ |
| `/signs` | `outdoor-signs/top5pct-outdoor-sign-joliet.jpg` | signs LP proposed slot 1 (not yet applied) | R1 ✓ |
| `/signs/business-signs/banners` | `banners/top5pct-sports-banners.jpg` | signs LP proposed banner 3 (not yet applied) | R1 ✓ |
| `/vehicle-graphics/automobile-graphics` | `automobile-graphics/top5pct-auto-window-wraps.jpg` | vehicle-graphics LP banner 1 (applied) | R1 ✓ |
| `/stickers/standard-stickers-decals` | `custom-shaped-stickers-decals/top5pct-custom-stickers-cresthill.jpg` | stickers LP banner 1 (applied) | R1 ✓ |
| `/custom-apparel/printing-options/dtf-printing` | `dtf-transfers/top5pct-dtf-t-shirt-printing.jpg` | custom-apparel LP banner 1 (applied) | R1 ✓ |
| `/signs/ground-signs/yard-signs` | `yard-signs/top5pct-custom-yard-signs-joliet.jpg` | signs LP proposed banner 1 (not yet applied) | import-round |
| `/promotional-items` | `promo-items/mugs/top5pct-custom-mugs.jpg` | promotional-items LP hero (applied) | R1 ✓ |

**Note on `/signs` sub-pages (slots 5, 6, 10):** These three cards link to sub-pages whose heroes come from the signs LP proposed map, which has not yet been applied. The home page fix for these 3 slots must be coordinated with the signs LP apply — do both together so the card images and the sub-page heroes stay in sync.

---

#### Proposed slot map — all 11 slots

| # | Component | Proposed image | Dir | Rule 5? | R1/R2? |
|---|---|---|---|---|---|
| 1 | `category-hero` (via `home.blade.php` `image=`) | `top5pct-outdoor-sign-joliet.jpg` | `outdoor-signs/` | n/a — site hero | R1 ✓ |
| 2 | About preview | `about-preview.jpg` | root | n/a — brand photo | keep as-is |
| 3 | Card "Custom Apparel" | `top5pct-custom-dtf-shirts.jpg` | `dtf-transfers/` | ✓ sub-page hero | R1 ✓ |
| 4 | Card "Corporate Wear" | `top5pct-custom-business-shirts.jpg` | `corporate-wear/` | ✓ sub-page hero | R1 ✓ |
| 5 | Card "Business Signs" | `top5pct-outdoor-sign-joliet.jpg` | `outdoor-signs/` | ✓ sub-page hero | R1 ✓ |
| 6 | Card "Banners" | `top5pct-sports-banners.jpg` | `banners/` | ✓ sub-page hero | R1 ✓ |
| 7 | Card "Vehicle Graphics" | `top5pct-auto-window-wraps.jpg` | `automobile-graphics/` | ✓ sub-page hero | R1 ✓ |
| 8 | Card "Custom Stickers" | `top5pct-custom-stickers-cresthill.jpg` | `custom-shaped-stickers-decals/` | ✓ sub-page hero | R1 ✓ |
| 9 | Card "DTF Transfers" | `top5pct-dtf-t-shirt-printing.jpg` | `dtf-transfers/` | ✓ sub-page hero | R1 ✓ |
| 10 | Card "Yard Signs" | `top5pct-custom-yard-signs-joliet.jpg` | `yard-signs/` | ✓ sub-page hero | import-round |
| 11 | Card "Promotional Items" | `top5pct-custom-mugs.jpg` | `promo-items/mugs/` | ✓ sub-page hero | R1 ✓ |

**Note on slot 1 (hero):** `top5pct-outdoor-sign-joliet.jpg` is proposed as a strong, clean general-brand image (R1, wide-format). Alternative: any non-banner image from a top-level category dir. Final choice is yours — flag if a different image is preferred before apply.

**Note on slots 1 and 5 (same image):** Both the site hero and the "Business Signs" card propose `outdoor-signs/top5pct-outdoor-sign-joliet.jpg`. This is a repeat (Rule 4 violation). To resolve, slot 1 (hero) should use a different image. Candidates from existing R1 dirs: `dtf-transfers/top5pct-custom-dtf-shirts.jpg` (already used in slot 3), `automobile-graphics/top5pct-auto-window-wraps.jpg` (slot 7), `custom-shaped-stickers-decals/top5pct-die-cut-stickers-joliet.jpg` (R1, not used). A good choice for the home hero is an apparel-and-signs combo image — check if one exists in `custom-shirts/` or `outdoor-signs/` that isn't already assigned. **Pending hero image decision before apply.**

**All 10 non-hero slots distinct. 9 of 9 cards will match sub-page heroes. Slot 2 unchanged.**

---

#### Fix notes (for apply phase)

1. **Slot 1 (hero):** Add `image="/images/[chosen-image]"` to `home.blade.php` line 41 (`x-sections.category-hero`). Do not edit `category-hero.blade.php` default. Resolve the slot 1 vs slot 5 repeat first.
2. **Slots 3–11 (cards):** Edit `resources/views/components/sections/featured-products.blade.php` — replace the `image=` value for each of the 9 `x-ui.card-product` components.
3. **Slots 5, 6, 10 (signs sub-pages):** Apply together with the signs LP fix. Both the signs LP and these 3 home page cards should be updated in the same pass so card images and page heroes are immediately in sync.
4. **Slot 8 (broken path):** Highest urgency — the current `stickers-decals/` path is a 404. Fix applies the correct path (`custom-shaped-stickers-decals/`) and the correct non-banner R1 image in one step.

**Status: Proposed map complete. Pending hero image decision (slot 1 vs slot 5 repeat). Apply when ready — coordinate slots 5, 6, 10 with signs LP apply.**
