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
**Status:** Reviewed (mnc pass only, fixes pending)
**LP Rules 1–3:** All clean. All images reference valid sub-category dirs. No broken paths. No filename issues.
**LP Rule 4:** 8 repeat violations found (see table below).

#### Full slot map

| # | Component | File | Dir | Repeat? |
|---|---|---|---|---|
| 1 | `category-hero` | `top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | `custom-shirts/` | Yes — also slots 2, 18 |
| 2 | Carousel 1 slot 1 | `top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | `custom-shirts/` | Yes — also slots 1, 18 |
| 3 | Carousel 1 slot 2 | `top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | `custom-shirts/` | Yes — also slots 22, 25 |
| 4 | Carousel 1 slot 3 | `top5pct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg` | `reunion-shirts/` | Yes — also slot 29 |
| 5 | Carousel 1 slot 4 | `top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg` | `spirit-wear/` | Yes — also slot 30 |
| 6 | Carousel 1 slot 5 | `top5pct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg` | `corporate-wear/` | Yes — also slot 31 |
| 7 | LP banner 1 "DTF Transfers" | `top5pct-banner-dtf-transfers-joliet.jpg` | `dtf-transfers/` | Yes — also slot 36 |
| 8 | LP banner 2 "Dye Sublimation" | `top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | `custom-shirts/` | Yes — also slots 1, 2 |
| 9 | LP banner 3 "Screen Printing" | `top5pct-custom-shirts-with-pictures-joliet-shorewood.jpg` | `custom-shirts/` | No |
| 10 | LP banner 4 "Embroidery" | `top5pct-custom-embroidery-shops-near-me-joliet.jpg` | `custom-shirts/` | Yes — also slots 35, 38 |
| 11 | LP banner 5 "Rhinestone Shirts" | `top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg` | `custom-shirts/` | No |
| 12 | LP banner 6 "Glitter Shirts" | `top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | `custom-shirts/` | No |
| 13 | LP banner 7 "Puff Print Shirts" | `top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | `custom-shirts/` | Yes — also slots 3, 25. **Wrong image for category.** |
| 14 | LP banner 8 "Glow In The Dark" | `top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` | `custom-shirts/` | No |
| 15 | LP banner 9 "Flock Shirts" | `top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | `custom-shirts/` | No |
| 16 | LP banner 10 "Brick Shirts" | `top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | `custom-shirts/` | Yes — also slots 3, 13 |
| 17 | LP banner 11 "Holographic Shirts" | `top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | `custom-shirts/` | Yes — also slot 37 |
| 18 | LP banner 12 "Foil Shirts" | `top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg` | `custom-shirts/` | No |
| 19 | LP banner 13 "Reflective Shirts" | `top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | `custom-shirts/` | No |
| 20 | LP banner 14 "Reunion Shirts" | `top5pct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg` | `reunion-shirts/` | Yes — also slot 4 |
| 21 | LP banner 15 "Spirit Wear" | `top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg` | `spirit-wear/` | Yes — also slot 5 |
| 22 | LP banner 16 "Corporate Wear" | `top5pct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg` | `corporate-wear/` | Yes — also slot 6 |
| 23 | `card-image-with-text` | `top5pct-custom-t-shirts-main.jpg` | `custom-shirts/` | No |
| 24 | Carousel 2 slot 1 | `top5pct-custom-embroidery-shops-near-me-joliet.jpg` | `custom-shirts/` | Yes — also slots 10, 27 |
| 25 | Carousel 2 slot 2 | `top5pct-custom-vinyl-shirts-caps-hoodies.jpg` | `custom-shirts/` | No |
| 26 | Carousel 2 slot 3 | `top5pct-banner-dtf-transfers-joliet.jpg` | `dtf-transfers/` | Yes — also slot 7 |
| 27 | Carousel 2 slot 4 | `top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | `custom-shirts/` | Yes — also slot 17 |
| 28 | Slide-in left | `top5pct-t-shirt-maker-article-pic1.jpg` | `custom-shirts/` | No |
| 29 | Slide-in right | `top5pct-custom-embroidery-shops-near-me-joliet.jpg` | `custom-shirts/` | Yes — also slots 10, 24 |

#### Repeat violations summary

| File | Slots | Count | Priority |
|---|---|---|---|
| `top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Hero, carousel 1 slot 1, LP banner 2 | 3× | Medium — hero/carousel overlap + wrong image for Dye Sub banner |
| `top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | Carousel 1 slot 2, LP banner 7 "Puff Print", LP banner 10 "Brick" | 3× | **Highest** — LP banner 7 uses a brick image for puff print (wrong category) |
| `top5pct-custom-embroidery-shops-near-me-joliet.jpg` | LP banner 4, carousel 2 slot 1, slide-in right | 3× | Medium |
| `top5pct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg` | Carousel 1 slot 3, LP banner 14 | 2× | Medium |
| `top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg` | Carousel 1 slot 4, LP banner 15 | 2× | Medium |
| `top5pct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg` | Carousel 1 slot 5, LP banner 16 | 2× | Medium |
| `top5pct-banner-dtf-transfers-joliet.jpg` | LP banner 1, carousel 2 slot 3 | 2× | Medium |
| `top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | LP banner 11, carousel 2 slot 4 | 2× | Medium |

#### Fix plan — LP banner 7 "Puff Print" (highest priority)

**Issue:** Uses `top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` — a brick texture image for a puff print banner. Wrong category, and shared with LP banner 10 "Brick Shirts."

**`public/images/puff-shirts/` dir:** Does not exist yet.

**Staging area:** `public/new-images/Custom Shirts/Specialty Material/Puff/` has 3 R1/R2 files:
- `puff-shirts.jpg` → `top5pct-puff-shirts.jpg`
- `custom-puff-shirts.jpg` → `top5pct-custom-puff-shirts.jpg`
- `puff-shirts-joliet.jpg` → `top5pct-puff-shirts-joliet.jpg`

All 3 prefixed basenames already exist in `custom-shirts/`. Visual comparison needed before moving to confirm whether staging files are the same as what is already there or newer versions.

**Short-term fix (no new dir, no migration):**
- LP banner 7: swap to `custom-shirts/top5pct-custom-puff-shirts.jpg` — puff-specific, currently only used on `puff-shirts.blade.php` hero (not on this LP anywhere)

**Long-term fix (after `puff-shirts` sub-page migration pass):**
- Create `public/images/puff-shirts/`, confirm/move staging files, update `puff-shirts.blade.php` refs, then update LP banner 7 to `puff-shirts/top5pct-custom-puff-shirts.jpg`

**LP banner 10 "Brick Shirts":** Keeps `top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` — correct image for that category. Repeat violation on that file is fully resolved once banner 7 is fixed.
