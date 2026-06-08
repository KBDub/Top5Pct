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
