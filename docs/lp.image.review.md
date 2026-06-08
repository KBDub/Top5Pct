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
| 6 | All non-banner image slots on an LP must use R1, R2, R3, or newer files. This applies to the `category-hero`, carousels, `card-image-with-text`, and `card-banner-slide-in` slots. Pre-migration (older) images must not appear in these slots. LP category banners (Rule 5) are exempt since they must match the sub-page hero, which may still be an older file. |

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
