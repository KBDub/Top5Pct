# Image Status

Master reference for every image placed in production blade files. Organized by parent/child category. Shows slot type, filename, directory, disk placement date (from `public/image.placements.txt` mod times), and import round.

Read alongside `docs/lp.image.review.md` for full LP review history and `docs/round3.migration.md` for R3 migration status.

> All filenames carry a `top5pct-` prefix except a small number of legacy files in `vinyl/` and `digital-vinyl/`.

---

## LP Rules

Rules 1-6 apply to all category landing pages (LPs). Source: `docs/lp.image.review.md` §Review Process.

| # | Rule |
|---|---|
| 1 | Images always reference sub-category dirs. No dedicated LP-level dir is created. |
| 2 | Cross-category referencing is allowed (e.g. an LP may reference both `custom-shaped-stickers-decals/` and `standard-stickers-decals/`). |
| 3 | Never modify an image filename. Reference existing files exactly as-is. |
| 4 | Use distinct images. Each file should appear no more than once per page across all slots. Repeats are a last resort only. |
| 5 | Each LP category banner must use the exact `category-hero` image of the sub-page it links to. A visually matching fallback is only acceptable when the sub-category has no dedicated dir yet; replace it once the sub-page migration is complete. |
| 6 | All non-banner slots on an LP must use import-round files (any file that exists in a sub-category dir under `public/images/`). R1 and R2 files are preferred. LP banners are exempt (Rule 5). |

**Rule 5 note — repeat priority when violations occur:**
- Highest: two different LP banners sharing one image (categories look identical)
- Medium: LP banner image reused in a carousel or card slot
- Lower: carousel-to-carousel or carousel-to-card repeats

---

## Sub-category Page Rules

1. The `category-hero` image must be unique to that page and not reused in any other slot on the same page.
2. Carousel slots must be distinct from each other and from the hero, card, and slide-in slots.
3. Slide-in images should come from dirs related to the page topic, or from closely related categories for contrast.
4. Cross-category image references are allowed on sub-pages.

---

## Image Rounds

| Round | Disk date | How to identify |
|---|---|---|
| Initial | Mar 16-17, 2026 | Small files, protected permissions (`-rw-------`). Original site assets. |
| R1 | May 11, 2026 | Mod date May 11 05:07, open permissions (`-rw-r--r--`). First major import. |
| R2 | Jun 2, 2026 | Mod date Jun 2 17:03, open permissions. Second import. |
| R3 | Jun 3-10, 2026 | Mod date Jun 3 or later, open permissions. Current migration. |
| moved | Jun 8, 2026 | File relocated from another dir (e.g. wwf, custom-shirts). Content round preserved in notes. |

> **moved** = Relocated from a common/shared dir (e.g. `window-wall-floor-decals/`, `custom-shirts/`) to a new category-specific dir. The round suffix shows the content's original import round. The file's mod date in the current dir will be Jun 8, not the round's original date. The source dir retains a copy.

---

## Slot Types

| Abbrev | Component | Description |
|---|---|---|
| hero | `x-sections.category-hero` | Full-width hero at top of page |
| C1-N | first `x-ui.carousel-rotating-images` | Rotating carousel, slot N |
| LP-N | `x-sections.lp-category-banners` item N | Sub-category nav card; must match that sub-page's hero (Rule 5) |
| card | `x-sections.card-image-with-text` | Feature image in page body |
| card-N | multiple `x-sections.card-image-with-text` or card-set images | Numbered when a page has more than one card section |
| C2-N | second `x-ui.carousel-rotating-images` | Second carousel, slot N |
| slide-L | `x-ui.card-banner-slide-in` (left) | Left slide-in banner at bottom |
| slide-R | `x-ui.card-banner-slide-in` (right) | Right slide-in banner at bottom |

---

## LP Page Structure

Standard LP template:

```
hero → C1 (5 slots) → LP-banners (N slots) → card → C2 (4 slots) → slide-L → slide-R
```

Exception: `/vehicle-graphics` LP has no C2.

---

## Sub-category Page Structure

Standard sub-page template:

```
hero → carousel (4-9 slots) → [card sections] → slide-L → slide-R
```

Corporate, reunion, and spirit-wear pages add extra card sections with multiple images.

---

## Migration Process

1. **Staging** — New images are deposited in `public/new-images/` with the `top5pct-` prefix applied on import.
2. **Sub-category dirs** — A PHP migration script copies files from staging to their permanent dir under `public/images/[category]/`. File mod dates are set at this point.
3. **Blade placement** — Blade files are updated to reference the permanent path once files are confirmed on disk.
4. **LP review** — After each import round, run an LP review to verify Rule 5 compliance and check for repeats across all slots. Document results in `docs/lp.image.review.md`.

**Migration rules:**
- Never rename a file (Rule 3).
- Only reference files confirmed to exist on disk.
- Run an LP review after every round before shipping blade changes.
- When a dedicated sub-category dir is created mid-migration, update all LP banners that link to that sub-page to use the new hero image (Rule 5).

---

## Placement Maps

Tables: `| # | slot | file | dir | placed | round |`

---

### Home (`/`)

**Blade:** `resources/views/components/sections/featured-products.blade.php`
**Review status:** Applied

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | card-1 | top5pct-custom-dtf-shirts.jpg | dtf-transfers/ | Jun 2 | R2 |
| 2 | card-2 | top5pct-custom-business-shirts.jpg | corporate-wear/ | May 11 | R1 |
| 3 | card-3 | top5pct-outdoor-sign-joliet.jpg | outdoor-signs/ | Jun 2 | R2 |
| 4 | card-4 | top5pct-sports-banners.jpg | banners/ | Jun 2 | R2 |
| 5 | card-5 | top5pct-auto-window-wraps.jpg | automobile-graphics/ | Jun 2 | R2 |
| 6 | card-6 | top5pct-custom-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | Jun 2 | R2 |
| 7 | card-7 | top5pct-dtf-t-shirt-printing.jpg | dtf-transfers/ | May 11 | R1 |
| 8 | card-8 | top5pct-custom-yard-signs-joliet.jpg | yard-signs/ | May 11 | R1 |
| 9 | card-9 | top5pct-custom-mugs.jpg | mugs/ | May 11 | R1 |

---

### /signs LP

**Blade:** `resources/views/pages/signs/index.blade.php`
**Review status:** Applied. Circular "Business Signs" LP banner removed.

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-outdoor-sign-joliet.jpg | outdoor-signs/ | Jun 2 | R2 |
| 2 | C1-1 | top5pct-banners-for-trade-shows.jpg | banners/ | Jun 2 | R2 |
| 3 | C1-2 | top5pct-yard-sign-joliet.jpg | yard-signs/ | May 11 | R1 |
| 4 | C1-3 | top5pct-sidewalk-signs-joliet.jpg | sidewalk-signs/ | Jun 2 | R2 |
| 5 | C1-4 | top5pct-business-signs-joliet-plainfield-romeoville.jpg | business-signs/ | Mar 16 | Initial |
| 6 | C1-5 | top5pct-custom-posters.jpg | posters/ | May 11 | R1 |
| 7 | LP-1 | top5pct-custom-yard-signs-joliet.jpg | yard-signs/ | May 11 | R1 |
| 8 | LP-2 | top5pct-sidewalk-signage.jpg | sidewalk-signs/ | Jun 2 | R2 |
| 9 | LP-3 | top5pct-sports-banners.jpg | banners/ | Jun 2 | R2 |
| 10 | LP-4 | top5pct-posters-printed-joliet.jpg | posters/ | May 11 | R1 |
| 11 | LP-5 | top5pct-table-runner-joliet.jpg | table-runners/ | Jun 2 | R2 |
| 12 | LP-6 | top5pct-window-signage.jpg | window-signs/ | Jun 2 | R2 |
| 13 | LP-7 | top5pct-wall-signs.jpg | wall-signs/ | Jun 2 | R2 (moved) |
| 14 | LP-8 | top5pct-wall-decals-joliet.jpg | wall-signs/ | Mar 16 | Initial (moved) |
| 15 | LP-9 | top5pct-door-signage.jpg | door-signs/ | May 11 | R1 |
| 16 | LP-10 | top5pct-custom-table-cloth.jpg | table-cloths/ | May 11 | R1 (moved) |
| 17 | LP-11 | top5pct-a-frame-sidewalk-signs.jpg | sidewalk-signs/ | Jun 2 | R2 |
| 18 | card | top5pct-backlit-display-signs-joliet.jpg | backlit-signs/ | Jun 2 | R2 |
| 19 | C2-1 | top5pct-banners-near-me.jpg | banners/ | May 11 | R1 |
| 20 | C2-2 | top5pct-custom-table-runners.jpg | table-runners/ | May 11 | R1 |
| 21 | C2-3 | top5pct-business-signs-joliet-shorewood-channahon.jpg | business-signs/ | Mar 16 | Initial |
| 22 | C2-4 | top5pct-poster-board-joliet.jpg | posters/ | May 11 | R1 |
| 23 | slide-L | top5pct-backlit-company-signs.jpg | backlit-signs/ | Jun 2 | R2 |
| 24 | slide-R | top5pct-outdoor-banner-signs-joliet.jpg | outdoor-signs/ | Jun 2 | R2 |

#### signs/banners
**Blade:** `resources/views/pages/signs/banners.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-sports-banners.jpg | banners/ | Jun 2 | R2 |
| 2 | C-1 | top5pct-banners-and-signs.jpg | banners/ | May 11 | R1 |
| 3 | C-2 | top5pct-banners-near-me.jpg | banners/ | May 11 | R1 |
| 4 | C-3 | top5pct-big-banners.jpg | banners/ | May 11 | R1 |
| 5 | C-4 | top5pct-custom-retractable-banners-joliet.jpg | banners/ | May 11 | R1 |
| 6 | card-1 | top5pct-custom-vinyl-banners.jpg | banners/ | May 11 | R1 |
| 7 | card-2 | top5pct-graduation-banners.jpg | banners/ | May 11 | R1 |
| 8 | slide-L | top5pct-banners-business-joliet-shorewood-crest-hill.jpg | banners/ | Mar 16 | Initial |
| 9 | slide-R | top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg | banners/ | Mar 16 | Initial |

#### signs/yard-signs
**Blade:** `resources/views/pages/signs/yard-signs.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-custom-yard-signs-joliet.jpg | yard-signs/ | May 11 | R1 |
| 2 | C-1 | top5pct-yard-signs.jpg | yard-signs/ | May 11 | R1 |
| 3 | C-2 | top5pct-yard-signs-joliet-plainfied-new-lenox.jpg | yard-signs/ | Mar 16 | Initial |
| 4 | C-3 | top5pct-yard-signs-joliet-plainfied-new-lenox.jpg | yard-signs/ | Mar 16 | Initial |
| 5 | C-4 | top5pct-yard-signs-plainfield.jpg | yard-signs/ | Jun 7 | R3 |
| 6 | C-5 | top5pct-yard-signs-rockdale.jpg | yard-signs/ | Jun 7 | R3 |
| 7 | C-6 | top5pct-yard-signs-shorewood.jpg | yard-signs/ | Jun 7 | R3 |
| 8 | slide-L | top5pct-yard-signs-joliet-plainfied-new-lenox.jpg | yard-signs/ | Mar 16 | Initial |
| 9 | slide-R | top5pct-banners-business-joliet-shorewood-crest-hill.jpg | banners/ | Mar 16 | Initial |

#### signs/sidewalk-signs
**Blade:** `resources/views/pages/signs/sidewalk-signs.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-banner-a-frame-sidewalk-signs-joliet-romeoville.jpg | sidewalk-signs/ | Mar 16 | Initial |
| 2 | C-1 | top5pct-a-frame-sign.jpg | sidewalk-signs/ | May 11 | R1 |
| 3 | C-2 | top5pct-custom-a-frame-sidewalk-signs-joliet.jpg | sidewalk-signs/ | May 11 | R1 |
| 4 | C-3 | top5pct-sidewalk-sign.jpg | sidewalk-signs/ | May 11 | R1 |
| 5 | C-4 | top5pct-sidewalk-signs-joliet.jpg | sidewalk-signs/ | Jun 2 | R2 |
| 6 | C-5 | top5pct-a-frame-signs-joliet.jpg | sidewalk-signs/ | Jun 8 | R3 |
| 7 | C-6 | top5pct-sidewalk-sign-a-frame-cresthill.jpg | sidewalk-signs/ | Jun 8 | R3 |
| 8 | C-7 | top5pct-sidewalk-signs-plainfield.jpg | sidewalk-signs/ | Jun 9 | R3 |
| 9 | card-1 | top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg | sidewalk-signs/ | Mar 16 | Initial |
| 10 | slide-L | top5pct-a-frame-sidewalk-sign-joliet.jpg | sidewalk-signs/ | Mar 16 | Initial |
| 11 | slide-R | top5pct-business-signs-joliet-shorewood-crest-hill.jpg | business-signs/ | Mar 16 | Initial |

#### signs/sidewalk-signs-a-frame-signs
**Blade:** `resources/views/pages/signs/sidewalk-signs-a-frame-signs.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-a-frame-sidewalk-signs.jpg | sidewalk-signs/ | Jun 2 | R2 |
| 2 | C-1 | top5pct-a-frame-sign.jpg | sidewalk-signs/ | May 11 | R1 |
| 3 | C-2 | top5pct-custom-a-frame-sidewalk-signs-joliet.jpg | sidewalk-signs/ | May 11 | R1 |
| 4 | C-3 | top5pct-sidewalk-sign.jpg | sidewalk-signs/ | May 11 | R1 |
| 5 | C-4 | top5pct-sidewalk-signs-joliet.jpg | sidewalk-signs/ | Jun 2 | R2 |
| 6 | card-1 | top5pct-a-frame-sidewalk-sign-joliet.jpg | sidewalk-signs/ | Mar 16 | Initial |
| 7 | card-2 | top5pct-sidewalk-signage.jpg | sidewalk-signs/ | Jun 2 | R2 |
| 8 | slide-L | top5pct-sidewalk-a-frames-joliet-shorewood.jpg | sidewalk-signs/ | Mar 16 | Initial |
| 9 | slide-R | top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg | banners/ | Mar 16 | Initial |

#### signs/wall-signs
**Blade:** `resources/views/pages/signs/wall-signs.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-wall-signs.jpg | wall-signs/ | Jun 2 | R2 (moved) |
| 2 | C-1 | top5pct-wall-signs-joliet.jpg | wall-signs/ | Mar 16 | Initial (moved) |
| 3 | C-2 | top5pct-wall-wraps.jpg | wall-signs/ | Jun 2 | R2 (moved) |
| 4 | C-3 | top5pct-article-window-wall-signs.jpg | wall-signs/ | Mar 16 | Initial (moved) |
| 5 | C-4 | top5pct-banner-wall-decal-door-signs-joliet.jpg | wall-signs/ | Mar 16 | Initial (moved) |
| 6 | C-5 | top5pct-wall-decals-bedroom.jpg | wall-signs/ | Jun 6 | R3 |
| 7 | C-6 | top5pct-wall-sign-for-businesses.jpg | wall-signs/ | Jun 6 | R3 |
| 8 | card-1 | top5pct-wall-decals-joliet.jpg | wall-signs/ | Mar 16 | Initial (moved) |
| 9 | card-2 | top5pct-article-window-wall-signs.jpg | wall-signs/ | Mar 16 | Initial (moved) |
| 10 | slide-L | top5pct-wall-decals-joliet.jpg | wall-signs/ | Mar 16 | Initial (moved) |
| 11 | slide-R | top5pct-window-decals-joliet-shorewood-crest-hill.jpg | window-signs/ | Mar 16 | Initial (moved) |

#### signs/window-signs
**Blade:** `resources/views/pages/signs/window-signs.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-window-signage.jpg | window-signs/ | Jun 2 | R2 (moved) |
| 2 | C-1 | top5pct-window-signs-joliet.jpg | window-signs/ | Jun 2 | R2 |
| 3 | C-2 | top5pct-window-signs.jpg | window-signs/ | Jun 7 | R3 |
| 4 | C-3 | top5pct-window-graphics-joliet.jpg | window-signs/ | Jun 7 | R3 |
| 5 | C-4 | top5pct-window-signs-cresthill.jpg | window-signs/ | Jun 7 | R3 |
| 6 | C-5 | top5pct-window-sign-installers-joliet.jpg | window-signs/ | Jun 8 | R3 |
| 7 | C-6 | top5pct-window-vinyl-sign-installers.jpg | window-signs/ | Jun 8 | R3 |
| 8 | C-7 | top5pct-window-business-signs.jpg | window-signs/ | Jun 8 | R3 |
| 9 | card-1 | top5pct-window-signs-joliet.jpg | window-signs/ | Jun 2 | R2 |
| 10 | card-2 | top5pct-joliet-slammers-window-signs-joliet.jpg | window-signs/ | Jun 2 | R2 |
| 11 | slide-L | top5pct-window-decals-joliet-shorewood-crest-hill.jpg | window-signs/ | Mar 16 | Initial (moved) |
| 12 | slide-R | top5pct-wall-decals-joliet.jpg | wall-signs/ | Mar 16 | Initial (moved) |

#### signs/floor-signs
**Blade:** `resources/views/pages/signs/floor-signs.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-banner-wall-decal-door-signs-joliet.jpg | wall-signs/ | Mar 16 | Initial (moved) |
| 2 | C-1 | top5pct-banner-wall-decal-door-signs-joliet.jpg | wall-signs/ | Mar 16 | Initial (moved) |
| 3 | C-2 | top5pct-wall-decals-joliet.jpg | wall-signs/ | Mar 16 | Initial (moved) |
| 4 | C-3 | top5pct-article-window-wall-signs.jpg | wall-signs/ | Mar 16 | Initial (moved) |
| 5 | C-4 | top5pct-wall-signs-joliet.jpg | wall-signs/ | Mar 16 | Initial (moved) |
| 6 | card-1 | top5pct-wall-decals-joliet.jpg | wall-signs/ | Mar 16 | Initial (moved) |
| 7 | card-2 | top5pct-article-window-wall-signs.jpg | wall-signs/ | Mar 16 | Initial (moved) |
| 8 | slide-L | top5pct-wall-decals-joliet.jpg | wall-signs/ | Mar 16 | Initial (moved) |
| 9 | slide-R | top5pct-window-decals-joliet-shorewood-crest-hill.jpg | window-signs/ | Mar 16 | Initial (moved) |

#### signs/door-signs
**Blade:** `resources/views/pages/signs/door-signs.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-door-signage.jpg | door-signs/ | May 11 | R1 |
| 2 | C-1 | top5pct-door-signs-joliet-shorewood-crest-hill.jpg | door-signs/ | Mar 16 | Initial (moved) |
| 3 | C-2 | top5pct-business-door-signs.jpg | door-signs/ | Jun 2 | R2 |
| 4 | C-3 | top5pct-door-sign-installers.jpg | door-signs/ | Jun 2 | R2 |
| 5 | C-4 | top5pct-door-wraps-joliet.jpg | door-signs/ | Jun 8 | R3 |
| 6 | C-5 | top5pct-door-lettering-vinyl.jpg | door-signs/ | Jun 7 | R3 |
| 7 | card-1 | top5pct-vinyl-door-lettering.jpg | door-signs/ | Jun 2 | R2 |
| 8 | card-2 | top5pct-vinyl-door-signs.jpg | door-signs/ | Jun 2 | R2 |
| 9 | slide-L | top5pct-door-signs-joliet-shorewood-crest-hill.jpg | door-signs/ | Mar 16 | Initial (moved) |
| 10 | slide-R | top5pct-wall-decals-joliet.jpg | wall-signs/ | Mar 16 | Initial (moved) |

#### signs/posters
**Blade:** `resources/views/pages/signs/posters.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-posters-printed-joliet.jpg | posters/ | May 11 | R1 |
| 2 | C-1 | top5pct-big-posters-joliet.jpg | posters/ | May 11 | R1 |
| 3 | C-2 | top5pct-custom-posters.jpg | posters/ | May 11 | R1 |
| 4 | C-3 | top5pct-poster-board-joliet.jpg | posters/ | May 11 | R1 |
| 5 | C-4 | top5pct-banner-poster-maker-joliet-romeoville-shorewood.jpg | posters/ | Mar 16 | Initial |
| 6 | card-set-1 | top5pct-poster-store-joliet-shorewood-plainfield.jpg | posters/ | Mar 16 | Initial |
| 7 | slide-L | top5pct-poster-printing-joliet-shorewood-romeoville.jpg | posters/ | Mar 16 | Initial |
| 8 | slide-R | top5pct-banners-business-joliet-shorewood-crest-hill.jpg | banners/ | Mar 16 | Initial |

#### signs/table-runners
**Blade:** `resources/views/pages/signs/table-runners.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg | table-runners/ | Mar 16 | Initial |
| 2 | C-1 | top5pct-custom-table-runner.jpg | table-runners/ | May 11 | R1 |
| 3 | C-2 | top5pct-custom-table-runners.jpg | table-runners/ | May 11 | R1 |
| 4 | C-3 | top5pct-table-runner.jpg | table-runners/ | May 11 | R1 |
| 5 | C-4 | top5pct-table-runners.jpg | table-runners/ | May 11 | R1 |
| 6 | C-5 | top5pct-custom-table-runner-near-me.jpg | table-runners/ | Jun 6 | R3 |
| 7 | C-6 | top5pct-table-runner-company.jpg | table-runners/ | Jun 6 | R3 |
| 8 | C-7 | top5pct-table-runner-covers.jpg | table-runners/ | Jun 6 | R3 |
| 9 | C-8 | top5pct-table-runners-customized.jpg | table-runners/ | Jun 6 | R3 |
| 10 | card-set-1 | top5pct-table-runner-popus-gourmet-popcorn-joliet.jpg | table-runners/ | Mar 16 | Initial |
| 11 | slide-L | top5pct-custom-table-runner-joliet-shorewood.jpg | table-runners/ | Mar 16 | Initial |
| 12 | slide-R | top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg | banners/ | Mar 16 | Initial |

#### signs/table-cloths
**Blade:** `resources/views/pages/signs/table-cloths.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-custom-table-cloth.jpg | table-cloths/ | May 11 | R1 (moved) |
| 2 | C-1 | top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg | table-cloths/ | Mar 16 | Initial (moved) |
| 3 | C-2 | top5pct-personalized-tablecloth-joliet.jpg | table-cloths/ | May 11 | R1 (moved) |
| 4 | C-3 | top5pct-table-cloths.jpg | table-cloths/ | May 11 | R1 (moved) |
| 5 | C-4 | top5pct-custom-table-cloth-joliet-crest-hill.jpg | table-cloths/ | Mar 16 | Initial (moved) |
| 6 | C-5 | top5pct-table-cloth-8-feet.jpg | table-cloths/ | Jun 4 | R3 |
| 7 | C-6 | top5pct-table-cloth-customized.jpg | table-cloths/ | Jun 4 | R3 |
| 8 | C-7 | top5pct-table-cloths-for-businesses.jpg | table-cloths/ | Jun 4 | R3 |
| 9 | C-8 | top5pct-table-cloth-with-photos.jpg | table-cloths/ | Jun 4 | R3 |
| 10 | card-1 | top5pct-custom-table-cloth-business.jpg | table-cloths/ | Jun 2 | R2 (moved) |
| 11 | card-2 | top5pct-printed-table-cloths.jpg | table-cloths/ | Jun 2 | R2 (moved) |
| 12 | slide-L | top5pct-article-custom-table-cloths-joliet.jpg | table-cloths/ | Mar 16 | Initial (moved) |
| 13 | slide-R | top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg | banners/ | Mar 16 | Initial |

#### signs/business-signs
**Blade:** `resources/views/pages/signs/business-signs.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg | business-signs/ | Mar 16 | Initial |
| 2 | card-1 | top5pct-business-signs-joliet-shorewood-crest-hill.jpg | business-signs/ | Mar 16 | Initial |
| 3 | card-2 | top5pct-outdoor-signs-joliet-shorewood-crest-hill.jpg | business-signs/ | Mar 16 | Initial |

---

### /custom-apparel LP

**Blade:** `resources/views/pages/custom-apparel/index.blade.php`
**Review status:** Applied.

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-custom-dtf-shirts.jpg | dtf-transfers/ | Jun 2 | R2 |
| 2 | C1-1 | top5pct-dye-sublimation-shirts.jpg | sublimation/ | May 11 | R1 |
| 3 | C1-2 | top5pct-brick-vinyl-cresthill.jpg | custom-shirts/ | Jun 2 | R2 |
| 4 | C1-3 | top5pct-spirit-wear-clothing.jpg | spirit-wear/ | Jun 2 | R2 |
| 5 | C1-4 | top5pct-volleyball-team-uniforms-joliet.jpg | spirit-wear/ | Jun 2 | R2 |
| 6 | C1-5 | top5pct-custom-company-apparel.jpg | corporate-wear/ | Jun 2 | R2 |
| 7 | LP-1 | top5pct-dtf-t-shirt-printing.jpg | dtf-transfers/ | May 11 | R1 |
| 8 | LP-2 | top5pct-dye-sublimation-custom-shirt-joliet.jpg | sublimation/ | Jun 2 | R2 |
| 9 | LP-3 | top5pct-screenprinted-shirts-joliet.jpg | custom-shirts/ | May 11 | R1 |
| 10 | LP-4 | top5pct-stitched-embroidered-shirts.jpg | embroidery/ | Jun 2 | R2 |
| 11 | LP-5 | top5pct-rhinestone-hoodies-joliet.jpg | custom-shirts/ | May 11 | R1 |
| 12 | LP-6 | top5pct-glitter-t-shirts.jpg | glitter-shirts/ | Jun 2 | R2 |
| 13 | LP-7 | top5pct-custom-puff-shirts.jpg | custom-shirts/ | Jun 2 | R2 |
| 14 | LP-8 | top5pct-glow-in-the-dark-caps.jpg | glow-shirts/ | Jun 2 | R2 (moved) |
| 15 | LP-9 | top5pct-custom-flock-t-shirt-printing.jpg | flock-shirts/ | Jun 2 | R2 (moved) |
| 16 | LP-10 | top5pct-brick-vinyl-hoodies.jpg | custom-shirts/ | May 11 | R1 |
| 17 | LP-11 | top5pct-holographic-vinyl-hoodie-foil.jpg | holographic-shirts/ | Jun 2 | R2 (moved) |
| 18 | LP-12 | top5pct-foil-gold-t-shirt.jpg | custom-shirts/ | Jun 2 | R2 |
| 19 | LP-13 | top5pct-reflective-shirts-gold.jpg | reflective-shirts/ | May 11 | R1 |
| 20 | LP-14 | top5pct-family-reunion-shirts-joliet.jpg | reunion-shirts/ | May 11 | R1 |
| 21 | LP-15 | top5pct-spirit-wear-joliet.jpg | spirit-wear/ | May 11 | R1 |
| 22 | LP-16 | top5pct-custom-business-shirts.jpg | corporate-wear/ | May 11 | R1 |
| 23 | card | top5pct-embroidered-caps.jpg | embroidery/ | Jun 2 | R2 |
| 24 | C2-1 | top5pct-glitter-lips-custom-t-shirt.jpg | glitter-shirts/ | Jun 2 | R2 |
| 25 | C2-2 | top5pct-flock-hoodie-printing.jpg | flock-shirts/ | Jun 2 | R2 (moved) |
| 26 | C2-3 | top5pct-rhinestone-bling-joliet.jpg | custom-shirts/ | Jun 2 | R2 |
| 27 | C2-4 | top5pct-reflective-shirts.jpg | reflective-shirts/ | Jun 2 | R2 |
| 28 | slide-L | top5pct-custom-t-shirts-dtf.jpg | dtf-transfers/ | May 11 | R1 |
| 29 | slide-R | top5pct-embroidery-beanies.jpg | embroidery/ | Jun 2 | R2 |

#### custom-apparel/dtf-transfers
**Blade:** `resources/views/pages/custom-apparel/dtf-transfers.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-dtf-t-shirt-printing.jpg | dtf-transfers/ | May 11 | R1 |
| 2 | C-1 | top5pct-dtf-tees.jpg | dtf-transfers/ | Jun 8 | R3 |
| 3 | C-2 | top5pct-dtf-t-shirt-maker.jpg | dtf-transfers/ | Jun 8 | R3 |
| 4 | C-3 | top5pct-custom-t-shirts-dtf.jpg | dtf-transfers/ | May 11 | R1 |
| 5 | C-4 | top5pct-dtf-hoodies-joliet.jpg | dtf-transfers/ | Jun 8 | R3 |
| 6 | card-1 | top5pct-dtf-zip-up-hoodies.jpg | dtf-transfers/ | Jun 2 | R2 |
| 7 | card-2 | top5pct-custom-dtf-shirts.jpg | dtf-transfers/ | Jun 2 | R2 |
| 8 | slide-L | top5pct-toptpct-banner-dtf-transfers-joliet.jpg | dtf-transfers/ | Jun 2 | R2 |
| 9 | slide-R | top5pct-custom-embroidery-shops-near-me-joliet.jpg | custom-shirts/ | Mar 16 | Initial |

#### custom-apparel/dye-sublimation
**Blade:** `resources/views/pages/custom-apparel/dye-sublimation.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-dye-sublimation-custom-shirt-joliet.jpg | sublimation/ | Jun 2 | R2 |
| 2 | C-1 | top5pct-sublimation-shirts.jpg | sublimation/ | May 11 | R1 |
| 3 | C-2 | top5pct-custom-face-mask-sublimated.jpg | sublimation/ | May 11 | R1 |
| 4 | C-3 | top5pct-custom-sublimated-towels.jpg | sublimation/ | May 11 | R1 |
| 5 | C-4 | top5pct-dye-sublimated-longsleeve-shirt-joliet.jpg | sublimation/ | May 11 | R1 |
| 6 | C-5 | top5pct-dye-sublimation-jerseys.jpg | sublimation/ | Jun 3 | R3 |
| 7 | C-6 | top5pct-dye-sublimation-tees.jpg | sublimation/ | Jun 3 | R3 |
| 8 | C-7 | top5pct-sublimated-graphic-tees.jpg | sublimation/ | Jun 3 | R3 |
| 9 | C-8 | top5pct-sublimation-tees.jpg | sublimation/ | Jun 3 | R3 |
| 10 | card-1 | top5pct-dye-sublimation-shirts.jpg | sublimation/ | May 11 | R1 |
| 11 | card-2 | top5pct-sublimation-shirt-printer.jpg | sublimation/ | May 11 | R1 |
| 12 | slide-L | top5pct-custom-sublimation-shirts.jpg | sublimation/ | Jun 2 | R2 |
| 13 | slide-R | top5pct-sublmation-team-shirts.jpg | sublimation/ | Jun 2 | R2 |

#### custom-apparel/printing-options/embroidery
**Blade:** `resources/views/pages/custom-apparel/printing-options/embroidery.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-stitched-embroidered-shirts.jpg | embroidery/ | Jun 2 | R2 |
| 2 | C-1 | top5pct-embroidered-aprons.jpg | embroidery/ | May 11 | R1 |
| 3 | C-2 | top5pct-embroidered-caps.jpg | embroidery/ | Jun 2 | R2 |
| 4 | C-3 | top5pct-embroidery-in-joliet.jpg | embroidery/ | May 11 | R1 |
| 5 | C-4 | top5pct-embroidered-stitched-caps.jpg | embroidery/ | May 11 | R1 |
| 6 | C-5 | top5pct-embroidered-cap-embroidered-beanies-joliet.jpg | embroidery/ | Jun 8 | R3 |
| 7 | card-1 | top5pct-embroidered-bag.jpg | embroidery/ | Jun 2 | R2 |
| 8 | card-2 | top5pct-embroidered-smocks.jpg | embroidery/ | Jun 2 | R2 |
| 9 | slide-L | top5pct-custom-embroidery-shops-near-me-joliet.jpg | embroidery/ | Mar 16 | Initial |
| 10 | slide-R | top5pct-embroidered-caps-old.jpg | embroidery/ | May 11 | R1 |

#### custom-apparel/printing-options/screen-printing
**Blade:** `resources/views/pages/custom-apparel/printing-options/screen-printing.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-screenprinted-shirts-joliet.jpg | custom-shirts/ | May 11 | R1 |
| 2 | C-1 | top5pct-screenprint-custom-shirts.jpg | custom-shirts/ | May 11 | R1 |
| 3 | C-2 | top5pct-screenprinted-shirts-in-joliet.jpg | custom-shirts/ | May 11 | R1 |
| 4 | C-3 | top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg | custom-shirts/ | Mar 16 | Initial |
| 5 | C-4 | top5pct-screenprinting-shirts.jpg | custom-shirts/ | May 11 | R1 |
| 6 | C-5 | top5pct-screenprinting-joliet.jpg | screen-printing/ | Jun 3 | R3 |
| 7 | C-6 | top5pct-screenprinted-shirts-joliet.jpg | screen-printing/ | Jun 3 | R3 |
| 8 | C-7 | top5pct-screenprinting-company-shirts.jpg | screen-printing/ | Jun 3 | R3 |
| 9 | C-8 | top5pct-screenprinting-hoodies-joliet.jpg | screen-printing/ | Jun 3 | R3 |
| 10 | C-9 | top5pct-screenprinting-t-shirts-joliet.jpg | screen-printing/ | Jun 3 | R3 |
| 11 | C-10 | top5pct-screenprinting-t-shirt-maker-joliet.jpg | screen-printing/ | Jun 8 | R3 |
| 12 | card-1 | top5pct-neon-vinyl-shirts.jpg | custom-shirts/ | May 11 | R1 |
| 13 | card-2 | top5pct-vinyl-caps.jpg | custom-shirts/ | May 11 | R1 |
| 14 | slide-L | top5pct-screenprinting-shirts.jpg | custom-shirts/ | May 11 | R1 |
| 15 | slide-R | top5pct-custom-embroidery-shops-near-me-joliet.jpg | custom-shirts/ | Mar 16 | Initial |

#### custom-apparel/printing-options/rhinestone-apparel
**Blade:** `resources/views/pages/custom-apparel/printing-options/rhinestone-apparel.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-rhinestone-hoodies-joliet.jpg | custom-shirts/ | May 11 | R1 |
| 2 | C-1 | top5pct-rhinestone-apparel-keith-elementary.jpg | custom-shirts/ | Jun 2 | R2 |
| 3 | C-2 | top5pct-rhinestone-bling-joliet.jpg | custom-shirts/ | Jun 2 | R2 |
| 4 | C-3 | top5pct-rhinestone-hoodie-joliet-west.jpg | custom-shirts/ | Jun 2 | R2 |
| 5 | C-4 | top5pct-rhinestone-ladies-shirt.jpg | custom-shirts/ | Jun 2 | R2 |
| 6 | C-5 | top5pct-rhinestone-tshirts-joliet.jpg | rhinestone-apparel/ | Jun 3 | R3 |
| 7 | card-1 | top5pct-rhinestone-t-shirts-joliet.jpg | custom-shirts/ | Jun 2 | R2 |
| 8 | card-2 | top5pct-custom-rhinestone-shirts.jpg | custom-shirts/ | Jun 2 | R2 |
| 9 | slide-L | top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg | custom-shirts/ | Mar 16 | Initial |
| 10 | slide-R | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | custom-shirts/ | Mar 16 | Initial |

#### custom-apparel/glitter-shirts
**Blade:** `resources/views/pages/custom-apparel/glitter-shirts.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-glitter-t-shirts.jpg | glitter-shirts/ | Jun 2 | R2 |
| 2 | C-1 | top5pct-custom-glitter-clothing.jpg | glitter-shirts/ | May 11 | R1 |
| 3 | C-2 | top5pct-custom-glitter-sweatshirts.jpg | glitter-shirts/ | Jun 2 | R2 |
| 4 | C-3 | top5pct-custom-wedding-glitter-shirts.jpg | glitter-shirts/ | Jun 2 | R2 |
| 5 | C-4 | top5pct-glitter-blue-jean-jacket.jpg | glitter-shirts/ | Jun 2 | R2 |
| 6 | C-5 | top5pct-glitter-sportswear-shirts.jpg | glitter-shirts/ | Jun 8 | R3 |
| 7 | C-6 | top5pct-glitter-sweatshirts-joliet.jpg | glitter-shirts/ | Jun 8 | R3 |
| 8 | card-1 | top5pct-glitter-lips-custom-t-shirt.jpg | glitter-shirts/ | Jun 2 | R2 |
| 9 | card-2 | top5pct-glitter-t-shirts-cresthill.jpg | glitter-shirts/ | Jun 2 | R2 |
| 10 | slide-L | top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | glitter-shirts/ | Mar 16 | Initial (moved) |
| 11 | slide-R | top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg | custom-shirts/ | Mar 16 | Initial |

#### custom-apparel/glow-in-the-dark-shirts
**Blade:** `resources/views/pages/custom-apparel/glow-in-the-dark-shirts.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-glow-in-the-dark-caps.jpg | glow-shirts/ | Jun 2 | R2 (moved) |
| 2 | C-1 | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | glow-shirts/ | Mar 16 | Initial (moved) |
| 3 | C-2 | top5pct-glowing-halloween-bat-shirt.jpg | glow-shirts/ | Jun 2 | R2 |
| 4 | C-3 | top5pct-halloween-pumpkin-glow-shirt.jpg | glow-shirts/ | Jun 2 | R2 |
| 5 | C-4 | top5pct-custom-vinyl-shirts.jpg | custom-shirts/ | May 11 | R1 |
| 6 | card-1 | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | glow-shirts/ | Mar 16 | Initial (moved) |
| 7 | card-2 | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | glow-shirts/ | Mar 16 | Initial (moved) |
| 8 | slide-L | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | glow-shirts/ | Mar 16 | Initial (moved) |
| 9 | slide-R | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | custom-shirts/ | Mar 16 | Initial |

#### custom-apparel/flock-shirts
**Blade:** `resources/views/pages/custom-apparel/flock-shirts.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-custom-flock-t-shirt-printing.jpg | flock-shirts/ | Jun 2 | R2 (moved) |
| 2 | C-1 | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | flock-shirts/ | Mar 16 | Initial (moved) |
| 3 | C-2 | top5pct-flock-hoodie-printing.jpg | flock-shirts/ | Jun 2 | R2 (moved) |
| 4 | C-3 | top5pct-flock-shirt-vinyl.jpg | flock-shirts/ | Jun 2 | R2 (moved) |
| 5 | C-4 | top5pct-custom-vinyl-shirts.jpg | custom-shirts/ | May 11 | R1 |
| 6 | card-1 | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | flock-shirts/ | Mar 16 | Initial (moved) |
| 7 | card-2 | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | flock-shirts/ | Mar 16 | Initial (moved) |
| 8 | slide-L | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | flock-shirts/ | Mar 16 | Initial (moved) |
| 9 | slide-R | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | custom-shirts/ | Mar 16 | Initial |

#### custom-apparel/holographic-shirts
**Blade:** `resources/views/pages/custom-apparel/holographic-shirts.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-holographic-vinyl-hoodie-foil.jpg | holographic-shirts/ | Jun 2 | R2 (moved) |
| 2 | C-1 | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | holographic-shirts/ | Mar 16 | Initial (moved) |
| 3 | C-2 | top5pct-holographic-vinyl-hoodie-foil.jpg | holographic-shirts/ | Jun 2 | R2 (moved) |
| 4 | C-3 | top5pct-holographic-baby-shirts.jpg | holographic-shirts/ | Jun 8 | R3 |
| 5 | card-1 | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | holographic-shirts/ | Mar 16 | Initial (moved) |
| 6 | card-2 | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | holographic-shirts/ | Mar 16 | Initial (moved) |
| 7 | slide-L | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | holographic-shirts/ | Mar 16 | Initial (moved) |
| 8 | slide-R | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | custom-shirts/ | Mar 16 | Initial |

#### custom-apparel/foil-shirts
**Blade:** `resources/views/pages/custom-apparel/foil-shirts.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-foil-gold-t-shirt.jpg | custom-shirts/ | Jun 2 | R2 |
| 2 | C-1 | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | custom-shirts/ | Mar 16 | Initial |
| 3 | C-2 | top5pct-gold-foil-printed-shirts.jpg | custom-shirts/ | Jun 2 | R2 |
| 4 | C-3 | top5pct-foil-custom-t-shirts.jpg | custom-shirts/ | Jun 2 | R2 |
| 5 | C-4 | top5pct-custom-foil-polo.jpg | custom-shirts/ | Jun 2 | R2 |
| 6 | C-5 | top5pct-foil-shirts.jpg | foil-shirts/ | Jun 8 | R3 |
| 7 | C-6 | top5pct-foil-custom-shirts-joliet.jpg | foil-shirts/ | Jun 8 | R3 |
| 8 | C-7 | top5pct-foil-custom-apparel-shirts-joliet.jpg | foil-shirts/ | Jun 9 | R3 |
| 9 | C-8 | top5pct-foil-shirts-cresthill.jpg | foil-shirts/ | Jun 8 | R3 |
| 10 | C-9 | top5pct-foil-shirt-shorewood.jpg | foil-shirts/ | Jun 8 | R3 |
| 11 | card-1 | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | custom-shirts/ | Mar 16 | Initial |
| 12 | card-2 | top5pct-custom-wedding-foil-shirts.jpg | custom-shirts/ | Jun 2 | R2 |
| 13 | slide-L | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | custom-shirts/ | Mar 16 | Initial |
| 14 | slide-R | top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | custom-shirts/ | Mar 16 | Initial |

#### custom-apparel/brick-shirts
**Blade:** `resources/views/pages/custom-apparel/brick-shirts.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-brick-vinyl-hoodies.jpg | custom-shirts/ | May 11 | R1 |
| 2 | C-1 | top5pct-brick-vinyl-cresthill.jpg | custom-shirts/ | Jun 2 | R2 |
| 3 | C-2 | top5pct-brick-vinyl-custom-t-shirt.jpg | custom-shirts/ | Jun 2 | R2 |
| 4 | C-3 | top5pct-brick-vinyl-jackets-joliet.jpg | custom-shirts/ | Jun 2 | R2 |
| 5 | C-4 | top5pct-customized-brick-vinyl-shirts.jpg | custom-shirts/ | Jun 2 | R2 |
| 6 | C-5 | top5pct-brick-vinyl-custom-shirts-joliet.jpg | brick-shirts/ | Jun 8 | R3 |
| 7 | C-6 | top5pct-brick-vinyl-shorewood.jpg | brick-shirts/ | Jun 9 | R3 |
| 8 | card-1 | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | custom-shirts/ | Mar 16 | Initial |
| 9 | card-2 | top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg | custom-shirts/ | Mar 16 | Initial |
| 10 | slide-L | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | custom-shirts/ | Mar 16 | Initial |
| 11 | slide-R | top5pct-custom-hoodies.jpg | custom-shirts/ | May 11 | R1 |

#### custom-apparel/puff-shirts
**Blade:** `resources/views/pages/custom-apparel/puff-shirts.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-custom-puff-shirts.jpg | custom-shirts/ | Jun 2 | R2 |
| 2 | C-1 | top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg | custom-shirts/ | Mar 16 | Initial |
| 3 | C-2 | top5pct-puff-shirts-joliet.jpg | custom-shirts/ | Jun 2 | R2 |
| 4 | C-3 | top5pct-puff-shirts.jpg | custom-shirts/ | Jun 2 | R2 |
| 5 | C-4 | top5pct-custom-vinyl-shirts.jpg | custom-shirts/ | May 11 | R1 |
| 6 | card-1 | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | custom-shirts/ | Mar 16 | Initial |
| 7 | card-2 | top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg | custom-shirts/ | Mar 16 | Initial |
| 8 | slide-L | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | custom-shirts/ | Mar 16 | Initial |
| 9 | slide-R | top5pct-rhinetsone-t-shirts.jpg | custom-shirts/ | Jun 2 | R2 |

#### custom-apparel/reflective-shirts
**Blade:** `resources/views/pages/custom-apparel/reflective-shirts.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-reflective-shirts-gold.jpg | reflective-shirts/ | May 11 | R1 |
| 2 | C-1 | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | reflective-shirts/ | Mar 16 | Initial (moved) |
| 3 | C-2 | top5pct-custom-reflective-hoodies.jpg | reflective-shirts/ | Jun 2 | R2 |
| 4 | C-3 | top5pct-reflective-shirts.jpg | reflective-shirts/ | Jun 2 | R2 |
| 5 | C-4 | top5pct-reflective-shirts-shorewood.jpg | reflective-shirts/ | Jun 2 | R2 |
| 6 | card-1 | top5pct-reflective-vinyl-shirts-plainfield.jpg | reflective-shirts/ | Jun 2 | R2 |
| 7 | card-2 | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | reflective-shirts/ | Mar 16 | Initial (moved) |
| 8 | slide-L | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | reflective-shirts/ | Mar 16 | Initial (moved) |
| 9 | slide-R | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | custom-shirts/ | Mar 16 | Initial |

#### custom-apparel/vinyl-shirts
**Blade:** `resources/views/pages/custom-apparel/vinyl-shirts.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-custom-vinyl-shirts-caps-hoodies.jpg | custom-shirts/ | Mar 16 | Initial |
| 2 | C-1 | top5pct-custom-caps-vinyl.jpg | custom-shirts/ | May 11 | R1 |
| 3 | C-2 | top5pct-custom-hoodies.jpg | custom-shirts/ | May 11 | R1 |
| 4 | C-3 | top5pct-custom-vinyl-hoodies.jpg | custom-shirts/ | May 11 | R1 |
| 5 | C-4 | top5pct-custom-vinyl-shirts.jpg | custom-shirts/ | May 11 | R1 |
| 6 | card-1 | top5pct-neon-vinyl-shirts.jpg | custom-shirts/ | May 11 | R1 |
| 7 | card-2 | top5pct-vinyl-caps.jpg | custom-shirts/ | May 11 | R1 |
| 8 | slide-L | top5pct-custom-vinyl-shirts-caps-hoodies.jpg | custom-shirts/ | Mar 16 | Initial |
| 9 | slide-R | top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | custom-shirts/ | Mar 16 | Initial |

#### custom-apparel/printing-options/digital-vinyl
**Blade:** `resources/views/pages/custom-apparel/printing-options/digital-vinyl.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-digital-vinyl-t-shirts.jpg | digital-vinyl/ | Jun 2 | R2 |
| 2 | C-1 | vinyl-shirts.jpg | digital-vinyl/ | Jun 2 | R2 (moved) |
| 3 | C-2 | vinyl-hoodie.jpg | digital-vinyl/ | May 11 | R1 (moved) |
| 4 | C-3 | vinyl-caps.jpg | digital-vinyl/ | May 11 | R1 (moved) |
| 5 | C-4 | custom-vinyl-hoodies.jpg | digital-vinyl/ | May 11 | R1 (moved) |
| 6 | card-1 | vinyl-zip-up-hoodies.jpg | digital-vinyl/ | May 11 | R1 (moved) |
| 7 | slide-L | custom-vinyl-hoodies.jpg | digital-vinyl/ | May 11 | R1 (moved) |
| 8 | slide-R | vinyl-caps.jpg | digital-vinyl/ | May 11 | R1 (moved) |

#### custom-apparel/specialty-materials/vinyl
**Blade:** `resources/views/pages/custom-apparel/specialty-materials/vinyl.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-vinyl-shirts.jpg | vinyl/ | May 11 | R1 |
| 2 | C-1 | custom-vinyl-shirts.jpg | vinyl/ | May 11 | R1 |
| 3 | C-2 | vinyl-hoodie.jpg | vinyl/ | May 11 | R1 |
| 4 | C-3 | vinyl-caps.jpg | vinyl/ | May 11 | R1 |
| 5 | C-4 | vinyl-zip-up-hoodies.jpg | vinyl/ | May 11 | R1 |
| 6 | card-1 | custom-vinyl-hoodies.jpg | vinyl/ | May 11 | R1 |
| 7 | slide-L | custom-vinyl-hoodies.jpg | vinyl/ | May 11 | R1 |
| 8 | slide-R | vinyl-caps.jpg | vinyl/ | May 11 | R1 |

#### custom-apparel/group-wear/corporate-wear-shirts
**Blade:** `resources/views/pages/custom-apparel/group-wear/corporate-wear-shirts.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-custom-business-shirts.jpg | corporate-wear/ | May 11 | R1 |
| 2 | C-1 | top5pct-custom-apron-joliet.jpg | corporate-wear/ | May 11 | R1 |
| 3 | C-2 | top5pct-custom-aprons-joliet.jpg | corporate-wear/ | May 11 | R1 |
| 4 | C-3 | top5pct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg | corporate-wear/ | Mar 16 | Initial |
| 5 | C-4 | top5pct-custom-pocket-shirt-joliet.jpg | corporate-wear/ | May 11 | R1 |
| 6 | card-set-1 | top5pct-landscaping-clothing-joliet.jpg | corporate-wear/ | May 11 | R1 |
| 7 | card-set-2 | top5pct-lawn-care-clothing.jpg | corporate-wear/ | May 11 | R1 |
| 8 | card-set-3 | top5pct-custom-cap-hat-joliet-shorewood-rockdale.jpg | corporate-wear/ | Mar 16 | Initial |
| 9 | slide-L | top5pct-custom-button-up-shirt-joliet-shorewood.jpg | corporate-wear/ | Mar 16 | Initial |
| 10 | slide-R | top5pct-volleyball-team-uniforms-joliet.jpg | spirit-wear/ | Jun 2 | R2 |

#### custom-apparel/group-wear/reunion-shirts
**Blade:** `resources/views/pages/custom-apparel/group-wear/reunion-shirts.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-family-reunion-shirts-joliet.jpg | reunion-shirts/ | May 11 | R1 |
| 2 | C-1 | top5pct-class-reunion-shirt.jpg | reunion-shirts/ | May 11 | R1 |
| 3 | C-2 | top5pct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg | reunion-shirts/ | Mar 16 | Initial |
| 4 | C-3 | top5pct-family-reunion-tshirts-in-joliet.jpg | reunion-shirts/ | May 11 | R1 |
| 5 | C-4 | top5pct-group-shirts.jpg | reunion-shirts/ | May 11 | R1 |
| 6 | C-5 | top5pct-family-reunion-tees.jpg | reunion-shirts/ | Jun 8 | R3 |
| 7 | card-1 | top5pct-reunion-group-shirts.jpg | reunion-shirts/ | May 11 | R1 |
| 8 | card-2 | top5pct-reunion-shirts.jpg | reunion-shirts/ | May 11 | R1 |
| 9 | card-3 | top5pct-family-reunion-shirts-joliet-plainfield.jpg | reunion-shirts/ | Mar 16 | Initial |
| 10 | slide-L | top5pct-family-reunion-shirts-joliet-romeoville.jpg | reunion-shirts/ | Mar 16 | Initial |
| 11 | slide-R | top5pct-t-shirt-maker-article-pic1.jpg | custom-shirts/ | Mar 16 | Initial |

#### custom-apparel/group-wear/spirit-wear-shirts
**Blade:** `resources/views/pages/custom-apparel/group-wear/spirit-wear-shirts.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-spirit-wear-joliet.jpg | spirit-wear/ | May 11 | R1 |
| 2 | C-1 | top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg | spirit-wear/ | Mar 16 | Initial |
| 3 | C-2 | top5pct-spirit-wear-shirts.jpg | spirit-wear/ | May 11 | R1 |
| 4 | C-3 | top5pct-spirit-wear-clothing.jpg | spirit-wear/ | Jun 2 | R2 |
| 5 | C-4 | top5pct-volleyball-team-uniforms-joliet.jpg | spirit-wear/ | Jun 2 | R2 |
| 6 | C-5 | top5pct-spirit-wear-volleyball-track.jpg | spirit-wear/ | Jun 3 | R3 |
| 7 | card-set-1 | top5pct-joliet-west-spirit-wear-hoodie-shorewood.jpg | spirit-wear/ | Mar 16 | Initial |
| 8 | card-set-2 | top5pct-spiritwear-fanwear-joliet-plainfield-shorewood.jpg | spirit-wear/ | Mar 16 | Initial |
| 9 | card-set-3 | top5pct-bowling-shirts-joliet-shorewood-crest-hill.jpg | spirit-wear/ | Mar 16 | Initial |
| 10 | slide-L | top5pct-plainfield-south-high-school-hoodie.jpg | spirit-wear/ | Mar 16 | Initial |
| 11 | slide-R | top5pct-family-reunion-tees.jpg | reunion-shirts/ | Jun 8 | R3 |

---

### /vehicle-graphics LP

**Blade:** `resources/views/pages/vehicle-graphics/index.blade.php`
**Review status:** Applied.

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-car-wraps-vinyl-lettering-joliet-shorewood.jpg | automobile-graphics/ | Mar 17 | Initial |
| 2 | C1-1 | top5pct-joliet-car-magnets.jpg | vehicle-magnets/ | Jun 2 | R2 |
| 3 | C1-2 | top5pct-custom-dot-decals-for-trucks-in-joliet.jpg | dot-decals/ | Jun 2 | R2 |
| 4 | C1-3 | top5pct-dot-decals-semi-truck.jpg | dot-decals/ | Jun 2 | R2 |
| 5 | C1-4 | top5pct-car-decals-white-oaks-library.jpg | vehicle-magnets/ | Jun 2 | R2 |
| 6 | LP-1 | top5pct-auto-window-wraps.jpg | automobile-graphics/ | Jun 2 | R2 |
| 7 | LP-2 | top5pct-magnet-vehicle-signs-joliet.jpg | vehicle-magnets/ | Jun 2 | R2 |
| 8 | LP-3 | top5pct-truck-lettering-joliet-shorewood-rockdale.jpg | dot-decals/ | Mar 17 | Initial |
| 9 | card | top5pct-vinyl-lettering-car-graphics-joliet-crest-hill.jpg | automobile-graphics/ | Mar 17 | Initial |
| 10 | C2-1 | top5pct-car-magnets-truck-magnets-joliet.jpg | vehicle-magnets/ | Mar 17 | Initial |
| 11 | C2-2 | top5pct-dot-decals-joliet-shorewood-rockdale.jpg | dot-decals/ | Mar 17 | Initial |
| 12 | C2-3 | top5pct-boat-decals-joliet-shorewood-crest-hill.jpg | automobile-graphics/ | Mar 17 | Initial |
| 13 | C2-4 | top5pct-business-magnets-car-magnets-joliet.jpg | vehicle-magnets/ | Mar 17 | Initial |
| 14 | slide-L | top5pct-trucking-dot-decals-in-joliet.jpg | dot-decals/ | Jun 2 | R2 |
| 15 | slide-R | top5pct-car-magnets-vehicle-magnets-joliet.jpg | vehicle-magnets/ | Mar 17 | Initial |

#### vehicle-graphics/automobile-graphics
**Blade:** `resources/views/pages/vehicle-graphics/automobile-graphics.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-auto-window-wraps.jpg | automobile-graphics/ | Jun 2 | R2 |
| 2 | C-1 | top5pct-car-wraps.jpg | automobile-graphics/ | May 11 | R1 |
| 3 | C-2 | top5pct-pickup-truck-graphics.jpg | automobile-graphics/ | May 11 | R1 |
| 4 | C-3 | top5pct-trailer-decal-graphics.jpg | automobile-graphics/ | May 11 | R1 |
| 5 | C-4 | top5pct-trailer-decals.jpg | automobile-graphics/ | May 11 | R1 |
| 6 | C-5 | top5pct-car-graphics-installers-joliet.jpg | automobile-graphics/ | Jun 9 | R3 |
| 7 | C-6 | top5pct-decals-for-work-trucks.jpg | automobile-graphics/ | Jun 9 | R3 |
| 8 | C-7 | top5pct-car-wrap-decals-joliet.jpg | automobile-graphics/ | Jun 9 | R3 |
| 9 | C-8 | top5pct-vehicle-graphics-near-me.jpg | automobile-graphics/ | Jun 9 | R3 |
| 10 | C-9 | top5pct-vehicle-signs-joliet.jpg | automobile-graphics/ | Jun 9 | R3 |
| 11 | card-set-1 | top5pct-van-graphics-decals.jpg | automobile-graphics/ | May 11 | R1 |
| 12 | card-set-2 | top5pct-vecal-decals.jpg | automobile-graphics/ | May 11 | R1 |
| 13 | card-set-3 | top5pct-vehicle-window-graphics-joliet.jpg | automobile-graphics/ | May 11 | R1 |
| 14 | slide-L | top5pct-vinyl-lettering-car-graphics-joliet-crest-hill.jpg | automobile-graphics/ | Mar 17 | Initial |
| 15 | slide-R | top5pct-truck-sign-magnets-joliet.jpg | vehicle-magnets/ | Jun 2 | R2 |

#### vehicle-graphics/dot-decals
**Blade:** `resources/views/pages/vehicle-graphics/dot-decals.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-truck-lettering-joliet-shorewood-rockdale.jpg | dot-decals/ | Mar 17 | Initial |
| 2 | C-1 | top5pct-dot-decals-joliet.jpg | dot-decals/ | May 11 | R1 |
| 3 | C-2 | top5pct-dot-semi-truck-decals.jpg | dot-decals/ | May 11 | R1 |
| 4 | C-3 | top5pct-dot-truck-decals-joliet.jpg | dot-decals/ | May 11 | R1 |
| 5 | C-4 | top5pct-custom-dot-decals-for-trucks-in-joliet.jpg | dot-decals/ | Jun 2 | R2 |
| 6 | C-5 | top5pct-DOT-truck-decals-rockdale.jpg | dot-decals/ | Jun 7 | R3 |
| 7 | card-set-1 | top5pct-trucking-dot-decals-in-joliet.jpg | dot-decals/ | Jun 2 | R2 |
| 8 | card-set-2 | top5pct-custom-dot-truck-signs-illinois.jpg | dot-decals/ | Jun 2 | R2 |
| 9 | card-set-3 | top5pct-dot-decals-semi-truck.jpg | dot-decals/ | Jun 2 | R2 |
| 10 | slide-L | top5pct-DOT-stickers-joliet-shorewood-rockdale.jpg | dot-decals/ | Mar 17 | Initial |
| 11 | slide-R | top5pct-car-magnets-vehicle-magnets-joliet.jpg | vehicle-magnets/ | Mar 17 | Initial |

#### vehicle-graphics/vehicle-magnets
**Blade:** `resources/views/pages/vehicle-graphics/vehicle-magnets.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-magnet-vehicle-signs-joliet.jpg | vehicle-magnets/ | Jun 2 | R2 |
| 2 | C-1 | top5pct-automobile-magnets-joliet.jpg | vehicle-magnets/ | May 11 | R1 |
| 3 | C-2 | top5pct-car-magnets-joliet.jpg | vehicle-magnets/ | May 11 | R1 |
| 4 | C-3 | top5pct-car-magnets.jpg | vehicle-magnets/ | May 11 | R1 |
| 5 | C-4 | top5pct-car-sign-magnets-joliet.jpg | vehicle-magnets/ | May 11 | R1 |
| 6 | card-set-1 | top5pct-custom-car-magnets-in-joliet.jpg | vehicle-magnets/ | May 11 | R1 |
| 7 | card-set-2 | top5pct-custom-car-magnets.jpg | vehicle-magnets/ | May 11 | R1 |
| 8 | slide-L | top5pct-car-magnets-vehicle-magnets-joliet.jpg | vehicle-magnets/ | Mar 17 | Initial |
| 9 | slide-R | top5pct-vehicle-graphics.jpg | automobile-graphics/ | May 11 | R1 |

---

### /stickers LP

**Blade:** `resources/views/pages/stickers/index.blade.php`
**Review status:** Applied.

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-custom-shaped-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | Jun 2 | R2 |
| 2 | C1-1 | top5pct-die-cut-stickers-shorewood.jpg | custom-shaped-stickers-decals/ | Jun 2 | R2 |
| 3 | C1-2 | top5pct-stickers-decals-joliet-beer-brewery.jpg | custom-shaped-stickers-decals/ | Mar 16 | Initial |
| 4 | C1-3 | top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg | custom-shaped-stickers-decals/ | Mar 16 | Initial |
| 5 | C1-4 | top5pct-stickers-decals-joliet-volleyball-team.jpg | custom-shaped-stickers-decals/ | Mar 16 | Initial |
| 6 | C1-5 | top5pct-stickers-decals-joliet-labels.jpg | custom-shaped-stickers-decals/ | Mar 16 | Initial |
| 7 | LP-1 | top5pct-custom-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | Jun 2 | R2 |
| 8 | LP-2 | top5pct-die-cut-stickers-joliet.jpg | custom-shaped-stickers-decals/ | Jun 2 | R2 |
| 9 | card | top5pct-stickers-decals-joliet-ocean-viewz.jpg | custom-shaped-stickers-decals/ | Mar 16 | Initial |
| 10 | C2-1 | top5pct-custom-glossy-stickers-in-joliet.jpg | custom-shaped-stickers-decals/ | May 11 | R1 |
| 11 | C2-2 | top5pct-article-buy-stickers-decals-joliet.jpg | standard-stickers-decals/ | Mar 16 | Initial |
| 12 | C2-3 | top5pct-custom-label-stickers.jpg | custom-shaped-stickers-decals/ | May 11 | R1 |
| 13 | C2-4 | top5pct-stickers-decals-joliet-boxing-sports.jpg | custom-shaped-stickers-decals/ | Mar 16 | Initial |
| 14 | slide-L | top5pct-diecut-stickers.jpg | standard-stickers-decals/ | May 11 | R1 |
| 15 | slide-R | top5pct-custom-shaped-stickers.jpg | custom-shaped-stickers-decals/ | May 11 | R1 |

#### stickers/standard-stickers
**Blade:** `resources/views/pages/stickers/standard-stickers.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-custom-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | Jun 2 | R2 |
| 2 | C-1 | top5pct-custom-stickers.jpg | custom-shaped-stickers-decals/ | May 11 | R1 |
| 3 | C-2 | top5pct-stickers-in-joliet.jpg | custom-shaped-stickers-decals/ | May 11 | R1 |
| 4 | C-3 | top5pct-die-cut-stickers-joliet-r3.jpg | custom-shaped-stickers-decals/ | Jun 8 | R3 |
| 5 | C-4 | top5pct-custom-glossy-stickers-in-joliet.jpg | custom-shaped-stickers-decals/ | May 11 | R1 |
| 6 | card-set-1 | top5pct-custom-label-stickers.jpg | custom-shaped-stickers-decals/ | May 11 | R1 |
| 7 | card-set-2 | top5pct-custom-shaped-stickers.jpg | custom-shaped-stickers-decals/ | May 11 | R1 |
| 8 | slide-L | top5pct-custom-stickers-cresthill.jpg | custom-shaped-stickers-decals/ | Jun 2 | R2 |
| 9 | slide-R | top5pct-die-cut-stickers-shorewood.jpg | custom-shaped-stickers-decals/ | Jun 2 | R2 |

#### stickers/custom-shaped-stickers
**Blade:** `resources/views/pages/stickers/custom-shaped-stickers.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-die-cut-stickers-joliet.jpg | custom-shaped-stickers-decals/ | Jun 2 | R2 |
| 2 | C-1 | top5pct-custom-stickers.jpg | custom-shaped-stickers-decals/ | May 11 | R1 |
| 3 | C-2 | top5pct-custom-glossy-stickers-in-joliet.jpg | custom-shaped-stickers-decals/ | May 11 | R1 |
| 4 | C-3 | top5pct-custom-label-stickers.jpg | custom-shaped-stickers-decals/ | May 11 | R1 |
| 5 | C-4 | top5pct-custom-shaped-stickers.jpg | custom-shaped-stickers-decals/ | May 11 | R1 |
| 6 | card-1 | top5pct-diecut-stickers.jpg | standard-stickers-decals/ | May 11 | R1 |
| 7 | card-2 | top5pct-stickers-in-joliet.jpg | custom-shaped-stickers-decals/ | May 11 | R1 |
| 8 | slide-L | top5pct-stickers-decals-joliet-boxing-sports.jpg | custom-shaped-stickers-decals/ | Mar 16 | Initial |
| 9 | slide-R | top5pct-die-cut-stickers-shorewood.jpg | custom-shaped-stickers-decals/ | Jun 2 | R2 |

---

### /promotional-items LP

**Blade:** `resources/views/pages/promotional-items.blade.php`
**Review status:** Applied. Placeholder images used for towels, coasters, tote bags, mouse pads (no dedicated dirs yet; replace when R4 imports arrive).

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-custom-mugs.jpg | mugs/ | May 11 | R1 |
| 2 | C1-1 | top5pct-koozies-joliet.jpg | can-koozies/ | Jun 2 | R2 |
| 3 | C1-2 | top5pct-custom-printed-mugs.jpg | mugs/ | May 11 | R1 |
| 4 | C1-3 | top5pct-personalized-koozies-joliet.jpg | can-koozies/ | Jun 2 | R2 |
| 5 | C1-4 | top5pct-picture-on-mugs.jpg | mugs/ | May 11 | R1 |
| 6 | LP-1 | top5pct-custom-coffee-mugs-in-joliet.jpg | mugs/ | May 11 | R1 |
| 7 | LP-2 | top5pct-can-koozies.jpg | can-koozies/ | May 11 | R1 |
| 8 | LP-3 | top5pct-custom-coffee-mugs.jpg | mugs/ | May 11 | R1 |
| 9 | LP-4 | top5pct-custom-koozies.jpg | can-koozies/ | May 11 | R1 |
| 10 | LP-5 | top5pct-custom-mugs-near-me.jpg | mugs/ | May 11 | R1 |
| 11 | LP-6 | top5pct-custom-can-koozies.jpg | can-koozies/ | Jun 2 | R2 |
| 12 | card | top5pct-printed-mugs.jpg | mugs/ | Jun 2 | R2 |
| 13 | C2-1 | top5pct-printed-mugs-old.jpg | mugs/ | May 11 | R1 |
| 14 | C2-2 | top5pct-long-lasting-graphic-shirts.jpg | custom-shirts/ | Jun 2 | R2 |
| 15 | C2-3 | top5pct-custom-flock-t-shirt-printing.jpg | custom-shirts/ | Jun 2 | R2 |
| 16 | C2-4 | top5pct-flock-hoodie-printing.jpg | custom-shirts/ | Jun 2 | R2 |
| 17 | slide-L | top5pct-flock-shirt-vinyl.jpg | custom-shirts/ | Jun 2 | R2 |
| 18 | slide-R | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | custom-shirts/ | Mar 16 | Initial |

#### promotional-items/mugs
**Blade:** `resources/views/pages/promotional-items/mugs.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-custom-mugs.jpg | mugs/ | May 11 | R1 |
| 2 | C-1 | top5pct-custom-coffee-mugs-in-joliet.jpg | mugs/ | May 11 | R1 |
| 3 | C-2 | top5pct-custom-coffee-mugs.jpg | mugs/ | May 11 | R1 |
| 4 | C-3 | top5pct-custom-mugs-near-me.jpg | mugs/ | May 11 | R1 |
| 5 | C-4 | top5pct-custom-mugs.jpg | mugs/ | May 11 | R1 |
| 6 | card-1 | top5pct-printed-mugs.jpg | mugs/ | Jun 2 | R2 |
| 7 | slide-L | top5pct-printed-mugs-old.jpg | mugs/ | May 11 | R1 |
| 8 | slide-R | top5pct-printed-mugs.jpg | mugs/ | Jun 2 | R2 |

#### promotional-items/can-koozies
**Blade:** `resources/views/pages/promotional-items/can-koozies.blade.php`

| # | slot | file | dir | placed | round |
|---|---|---|---|---|---|
| 1 | hero | top5pct-koozies-joliet.jpg | can-koozies/ | Jun 2 | R2 |
| 2 | C-1 | top5pct-can-koozies.jpg | can-koozies/ | May 11 | R1 |
| 3 | C-2 | top5pct-custom-koozies.jpg | can-koozies/ | May 11 | R1 |
| 4 | C-3 | top5pct-custom-can-koozies.jpg | can-koozies/ | Jun 2 | R2 |
| 5 | C-4 | top5pct-koozies-joliet.jpg | can-koozies/ | Jun 2 | R2 |
| 6 | card-1 | top5pct-personalized-koozies-joliet.jpg | can-koozies/ | Jun 2 | R2 |
| 7 | slide-L | top5pct-custom-can-koozies.jpg | can-koozies/ | Jun 2 | R2 |
| 8 | slide-R | top5pct-can-koozies.jpg | can-koozies/ | May 11 | R1 |

#### promotional-items/towels, drink-coasters, tote-bags, mouse-pads
**Status: Placeholder pages** — no dedicated product dirs exist yet. All carousel images pulled from `custom-shirts/`. Replace with product-specific images when R4 imports arrive.

| page | hero | round | notes |
|---|---|---|---|
| towels | top5pct-custom-mugs.jpg (mugs/) | R1 | placeholder, no towels/ dir |
| drink-coasters | top5pct-custom-mugs.jpg (mugs/) | R1 | placeholder, no coasters/ dir |
| tote-bags | top5pct-custom-mugs.jpg (mugs/) | R1 | placeholder, no tote-bags/ dir |
| mouse-pads | top5pct-custom-mugs.jpg (mugs/) | R1 | placeholder, no mouse-pads/ dir |

---

### /top5pct-merchandise LP

**Blade:** `resources/views/pages/top5pct-merchandise.blade.php`
**Review status:** Proposed map updated. 3 of 12 slots need changes. Apply when ready.

See `docs/lp.image.review.md` §top5pct-merchandise for the full proposed slot map and fix notes. All 3 replacements are R1 files.

| Slot needing change | Current file | Proposed replacement | Round |
|---|---|---|---|
| C1 slot 1 (line 31) | top5pct-custom-t-shirts-main.jpg | top5pct-foil-gold-t-shirt.jpg | R2 (→ from R1 originally) |
| C1 slot 2 (line 32) | top5pct-banner-custom-apparel... .jpg | top5pct-long-lasting-graphic-shirts.jpg | R2 |
| Slide-in left (line 69) | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | top5pct-puff-shirts-joliet.jpg | R2 |

---

*Last updated: Jun 10, 2026. Reflects all R3 carousel additions and LP reviews through this date.*
