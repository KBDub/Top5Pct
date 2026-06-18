# Page Image Inventory

Master working inventory of every image slot across all production blade pages.
Organized to match `docs/image.status.md` groupings. Use this doc to drive fine-tuning decisions page by page.

> **MNC in effect during initial creation.** Blade edits are tracked here but not applied until MNC is lifted per-page.
> Source data: `docs/image.status.md` + disk verification (Jun 18, 2026).

---

## Status Codes

| Code | Meaning |
|---|---|
| `good` | R1/R2/R3 file, unique on this page, appropriate for the category |
| `initial` | Original Mar 16-17 file. Candidate for upgrade when a same-dir R1/R2/R3 is available |
| `repeat` | Same filename appears in another slot on this page |
| `placeholder` | Image from a clearly unrelated category, standing in because no proper images exist yet |
| `initial, repeat` | Both issues present on this slot |
| `placeholder, initial` | Placeholder and Initial round |
| `placeholder, initial, repeat` | All three issues |

---

## Home (`/`)

**Blade:** `resources/views/components/sections/featured-products.blade.php`
**Summary:** All good. Nine unique R1/R2 files from appropriate dirs.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| card-1 | top5pct-custom-dtf-shirts.jpg | public/images/dtf-transfers/ | R2 | Jun 2 | good |
| card-2 | top5pct-custom-business-shirts.jpg | public/images/corporate-wear/ | R1 | May 11 | good |
| card-3 | top5pct-outdoor-sign-joliet.jpg | public/images/outdoor-signs/ | R2 | Jun 2 | good |
| card-4 | top5pct-sports-banners.jpg | public/images/banners/ | R2 | Jun 2 | good |
| card-5 | top5pct-auto-window-wraps.jpg | public/images/automobile-graphics/ | R2 | Jun 2 | good |
| card-6 | top5pct-custom-stickers-cresthill.jpg | public/images/custom-shaped-stickers-decals/ | R2 | Jun 2 | good |
| card-7 | top5pct-dtf-t-shirt-printing.jpg | public/images/dtf-transfers/ | R1 | May 11 | good |
| card-8 | top5pct-custom-yard-signs-joliet.jpg | public/images/yard-signs/ | R1 | May 11 | good |
| card-9 | top5pct-custom-mugs.jpg | public/images/mugs/ | R1 | May 11 | good |

---

## Signs

### /signs LP

**Blade:** `resources/views/pages/signs/index.blade.php`
**Summary:** Mostly good. 2 Initial remaining: C1-4 and C2-3 (both business-signs/, no R1/R2/R3 exist in that dir). LP-8 is an Initial moved file.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-outdoor-sign-joliet.jpg | public/images/outdoor-signs/ | R2 | Jun 2 | good |
| C1-1 | top5pct-banners-for-trade-shows.jpg | public/images/banners/ | R2 | Jun 2 | good |
| C1-2 | top5pct-yard-sign-joliet.jpg | public/images/yard-signs/ | R1 | May 11 | good |
| C1-3 | top5pct-sidewalk-signs-joliet.jpg | public/images/sidewalk-signs/ | R2 | Jun 2 | good |
| C1-4 | top5pct-business-signs-joliet-plainfield-romeoville.jpg | public/images/business-signs/ | Initial | Mar 16 | initial |
| C1-5 | top5pct-custom-posters.jpg | public/images/posters/ | R1 | May 11 | good |
| LP-1 | top5pct-custom-yard-signs-joliet.jpg | public/images/yard-signs/ | R1 | May 11 | good |
| LP-2 | top5pct-sidewalk-signage.jpg | public/images/sidewalk-signs/ | R2 | Jun 2 | good |
| LP-3 | top5pct-sports-banners.jpg | public/images/banners/ | R2 | Jun 2 | good |
| LP-4 | top5pct-posters-printed-joliet.jpg | public/images/posters/ | R1 | May 11 | good |
| LP-5 | top5pct-table-runner-joliet.jpg | public/images/table-runners/ | R2 | Jun 2 | good |
| LP-6 | top5pct-window-signage.jpg | public/images/window-signs/ | R2 | Jun 2 | good |
| LP-7 | top5pct-wall-signs.jpg | public/images/wall-signs/ | R2 (moved) | Jun 2 | good |
| LP-8 | top5pct-wall-decals-joliet.jpg | public/images/wall-signs/ | Initial (moved) | Mar 16 | initial |
| LP-9 | top5pct-door-signage.jpg | public/images/door-signs/ | R1 | May 11 | good |
| LP-10 | top5pct-custom-table-cloth.jpg | public/images/table-cloths/ | R1 (moved) | May 11 | good |
| LP-11 | top5pct-a-frame-sidewalk-signs.jpg | public/images/sidewalk-signs/ | R2 | Jun 2 | good |
| card | top5pct-backlit-display-signs-joliet.jpg | public/images/backlit-signs/ | R2 | Jun 2 | good |
| C2-1 | top5pct-banners-near-me.jpg | public/images/banners/ | R1 | May 11 | good |
| C2-2 | top5pct-custom-table-runners.jpg | public/images/table-runners/ | R1 | May 11 | good |
| C2-3 | top5pct-business-signs-joliet-shorewood-channahon.jpg | public/images/business-signs/ | Initial | Mar 16 | initial |
| C2-4 | top5pct-poster-board-joliet.jpg | public/images/posters/ | R1 | May 11 | good |
| slide-L | top5pct-backlit-company-signs.jpg | public/images/backlit-signs/ | R2 | Jun 2 | good |
| slide-R | top5pct-outdoor-banner-signs-joliet.jpg | public/images/outdoor-signs/ | R2 | Jun 2 | good |

---

### signs/banners

**Blade:** `resources/views/pages/signs/banners.blade.php`
**Summary:** Mostly good. 2 Initial in slide slots. Both from banners/ dir, so replacements are available.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-sports-banners.jpg | public/images/banners/ | R2 | Jun 2 | good |
| C-1 | top5pct-banners-and-signs.jpg | public/images/banners/ | R1 | May 11 | good |
| C-2 | top5pct-banners-near-me.jpg | public/images/banners/ | R1 | May 11 | good |
| C-3 | top5pct-big-banners.jpg | public/images/banners/ | R1 | May 11 | good |
| C-4 | top5pct-custom-retractable-banners-joliet.jpg | public/images/banners/ | R1 | May 11 | good |
| card-1 | top5pct-custom-vinyl-banners.jpg | public/images/banners/ | R1 | May 11 | good |
| card-2 | top5pct-graduation-banners.jpg | public/images/banners/ | R1 | May 11 | good |
| slide-L | top5pct-banners-business-joliet-shorewood-crest-hill.jpg | public/images/banners/ | Initial | Mar 16 | initial |
| slide-R | top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg | public/images/banners/ | Initial | Mar 16 | initial |

---

### signs/yard-signs

**Blade:** `resources/views/pages/signs/yard-signs.blade.php`
**Summary:** C-2, C-3, and slide-L are all the same Initial file (3-way repeat). slide-R is Initial cross-dir from banners/. C-4 through C-6 are strong R3 additions.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-custom-yard-signs-joliet.jpg | public/images/yard-signs/ | R1 | May 11 | good |
| C-1 | top5pct-yard-signs.jpg | public/images/yard-signs/ | R1 | May 11 | good |
| C-2 | top5pct-yard-signs-joliet-plainfied-new-lenox.jpg | public/images/yard-signs/ | Initial | Mar 16 | initial, repeat |
| C-3 | top5pct-yard-signs-joliet-plainfied-new-lenox.jpg | public/images/yard-signs/ | Initial | Mar 16 | initial, repeat |
| C-4 | top5pct-yard-signs-plainfield.jpg | public/images/yard-signs/ | R3 | Jun 7 | good |
| C-5 | top5pct-yard-signs-rockdale.jpg | public/images/yard-signs/ | R3 | Jun 7 | good |
| C-6 | top5pct-yard-signs-shorewood.jpg | public/images/yard-signs/ | R3 | Jun 7 | good |
| slide-L | top5pct-yard-signs-joliet-plainfied-new-lenox.jpg | public/images/yard-signs/ | Initial | Mar 16 | initial, repeat |
| slide-R | top5pct-banners-business-joliet-shorewood-crest-hill.jpg | public/images/banners/ | Initial | Mar 16 | initial |

---

### signs/sidewalk-signs

**Blade:** `resources/views/pages/signs/sidewalk-signs.blade.php`
**Summary:** Hero, card-1, and both slides are Initial. C-1 through C-7 are solid R1/R2/R3. slide-R pulls from business-signs/ (cross-dir Initial).

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-banner-a-frame-sidewalk-signs-joliet-romeoville.jpg | public/images/sidewalk-signs/ | Initial | Mar 16 | initial |
| C-1 | top5pct-a-frame-sign.jpg | public/images/sidewalk-signs/ | R1 | May 11 | good |
| C-2 | top5pct-custom-a-frame-sidewalk-signs-joliet.jpg | public/images/sidewalk-signs/ | R1 | May 11 | good |
| C-3 | top5pct-sidewalk-sign.jpg | public/images/sidewalk-signs/ | R1 | May 11 | good |
| C-4 | top5pct-sidewalk-signs-joliet.jpg | public/images/sidewalk-signs/ | R2 | Jun 2 | good |
| C-5 | top5pct-a-frame-signs-joliet.jpg | public/images/sidewalk-signs/ | R3 | Jun 8 | good |
| C-6 | top5pct-sidewalk-sign-a-frame-cresthill.jpg | public/images/sidewalk-signs/ | R3 | Jun 8 | good |
| C-7 | top5pct-sidewalk-signs-plainfield.jpg | public/images/sidewalk-signs/ | R3 | Jun 9 | good |
| card-1 | top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg | public/images/sidewalk-signs/ | Initial | Mar 16 | initial |
| slide-L | top5pct-a-frame-sidewalk-sign-joliet.jpg | public/images/sidewalk-signs/ | Initial | Mar 16 | initial |
| slide-R | top5pct-business-signs-joliet-shorewood-crest-hill.jpg | public/images/business-signs/ | Initial | Mar 16 | initial |

---

### signs/sidewalk-signs-a-frame-signs

**Blade:** `resources/views/pages/signs/sidewalk-signs-a-frame-signs.blade.php`
**Summary:** card-1 and both slides are Initial. Hero and C-1 through C-4 are good. slide-R pulls from banners/ (cross-dir Initial).

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-a-frame-sidewalk-signs.jpg | public/images/sidewalk-signs/ | R2 | Jun 2 | good |
| C-1 | top5pct-a-frame-sign.jpg | public/images/sidewalk-signs/ | R1 | May 11 | good |
| C-2 | top5pct-custom-a-frame-sidewalk-signs-joliet.jpg | public/images/sidewalk-signs/ | R1 | May 11 | good |
| C-3 | top5pct-sidewalk-sign.jpg | public/images/sidewalk-signs/ | R1 | May 11 | good |
| C-4 | top5pct-sidewalk-signs-joliet.jpg | public/images/sidewalk-signs/ | R2 | Jun 2 | good |
| card-1 | top5pct-a-frame-sidewalk-sign-joliet.jpg | public/images/sidewalk-signs/ | Initial | Mar 16 | initial |
| card-2 | top5pct-sidewalk-signage.jpg | public/images/sidewalk-signs/ | R2 | Jun 2 | good |
| slide-L | top5pct-sidewalk-a-frames-joliet-shorewood.jpg | public/images/sidewalk-signs/ | Initial | Mar 16 | initial |
| slide-R | top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg | public/images/banners/ | Initial | Mar 16 | initial |

---

### signs/wall-signs

**Blade:** `resources/views/pages/signs/wall-signs.blade.php`
**Summary:** Hero, C-2, C-5, C-6 are good. Five Initial (moved) slots remain. card-2 repeats C-3; slide-L repeats card-1. C-5 and C-6 are strong R3 additions.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-wall-signs.jpg | public/images/wall-signs/ | R2 (moved) | Jun 2 | good |
| C-1 | top5pct-wall-signs-joliet.jpg | public/images/wall-signs/ | Initial (moved) | Mar 16 | initial |
| C-2 | top5pct-wall-wraps.jpg | public/images/wall-signs/ | R2 (moved) | Jun 2 | good |
| C-3 | top5pct-article-window-wall-signs.jpg | public/images/wall-signs/ | Initial (moved) | Mar 16 | initial |
| C-4 | top5pct-banner-wall-decal-door-signs-joliet.jpg | public/images/wall-signs/ | Initial (moved) | Mar 16 | initial |
| C-5 | top5pct-wall-decals-bedroom.jpg | public/images/wall-signs/ | R3 | Jun 6 | good |
| C-6 | top5pct-wall-sign-for-businesses.jpg | public/images/wall-signs/ | R3 | Jun 6 | good |
| card-1 | top5pct-wall-decals-joliet.jpg | public/images/wall-signs/ | Initial (moved) | Mar 16 | initial |
| card-2 | top5pct-article-window-wall-signs.jpg | public/images/wall-signs/ | Initial (moved) | Mar 16 | initial, repeat |
| slide-L | top5pct-wall-decals-joliet.jpg | public/images/wall-signs/ | Initial (moved) | Mar 16 | initial, repeat |
| slide-R | top5pct-window-decals-joliet-shorewood-crest-hill.jpg | public/images/window-signs/ | Initial (moved) | Mar 16 | initial |

> card-2 repeats C-3 (same file). slide-L repeats card-1 (same file).

---

### signs/window-signs

**Blade:** `resources/views/pages/signs/window-signs.blade.php`
**Summary:** Very strong. Hero and C-1 through C-7 are R2/R3. card-1 is a repeat of C-1. Both slides are Initial (moved) from adjacent dirs.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-window-signage.jpg | public/images/window-signs/ | R2 (moved) | Jun 2 | good |
| C-1 | top5pct-window-signs-joliet.jpg | public/images/window-signs/ | R2 | Jun 2 | good |
| C-2 | top5pct-window-signs.jpg | public/images/window-signs/ | R3 | Jun 7 | good |
| C-3 | top5pct-window-graphics-joliet.jpg | public/images/window-signs/ | R3 | Jun 7 | good |
| C-4 | top5pct-window-signs-cresthill.jpg | public/images/window-signs/ | R3 | Jun 7 | good |
| C-5 | top5pct-window-sign-installers-joliet.jpg | public/images/window-signs/ | R3 | Jun 8 | good |
| C-6 | top5pct-window-vinyl-sign-installers.jpg | public/images/window-signs/ | R3 | Jun 8 | good |
| C-7 | top5pct-window-business-signs.jpg | public/images/window-signs/ | R3 | Jun 8 | good |
| card-1 | top5pct-window-signs-joliet.jpg | public/images/window-signs/ | R2 | Jun 2 | repeat |
| card-2 | top5pct-joliet-slammers-window-signs-joliet.jpg | public/images/window-signs/ | R2 | Jun 2 | good |
| slide-L | top5pct-window-decals-joliet-shorewood-crest-hill.jpg | public/images/window-signs/ | Initial (moved) | Mar 16 | initial |
| slide-R | top5pct-wall-decals-joliet.jpg | public/images/wall-signs/ | Initial (moved) | Mar 16 | initial |

> card-1 repeats C-1 (same file: top5pct-window-signs-joliet.jpg).

---

### signs/floor-signs

**Blade:** `resources/views/pages/signs/floor-signs.blade.php`
**Summary:** No floor-signs/ directory exists. Every image is borrowed from wall-signs/ or window-signs/. Hero and C-1 are the same file. Multiple other repeats throughout. This page needs its own image import.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-banner-wall-decal-door-signs-joliet.jpg | public/images/wall-signs/ | Initial (moved) | Mar 16 | placeholder, initial |
| C-1 | top5pct-banner-wall-decal-door-signs-joliet.jpg | public/images/wall-signs/ | Initial (moved) | Mar 16 | placeholder, initial, repeat |
| C-2 | top5pct-wall-decals-joliet.jpg | public/images/wall-signs/ | Initial (moved) | Mar 16 | placeholder, initial |
| C-3 | top5pct-article-window-wall-signs.jpg | public/images/wall-signs/ | Initial (moved) | Mar 16 | placeholder, initial |
| C-4 | top5pct-wall-signs-joliet.jpg | public/images/wall-signs/ | Initial (moved) | Mar 16 | placeholder, initial |
| card-1 | top5pct-wall-decals-joliet.jpg | public/images/wall-signs/ | Initial (moved) | Mar 16 | placeholder, initial, repeat |
| card-2 | top5pct-article-window-wall-signs.jpg | public/images/wall-signs/ | Initial (moved) | Mar 16 | placeholder, initial, repeat |
| slide-L | top5pct-wall-decals-joliet.jpg | public/images/wall-signs/ | Initial (moved) | Mar 16 | placeholder, initial, repeat |
| slide-R | top5pct-window-decals-joliet-shorewood-crest-hill.jpg | public/images/window-signs/ | Initial (moved) | Mar 16 | placeholder, initial |

> C-1 repeats hero. card-1 and slide-L repeat C-2. card-2 repeats C-3.

---

### signs/door-signs

**Blade:** `resources/views/pages/signs/door-signs.blade.php`
**Summary:** Strong overall. Hero and cards are R1/R2. slide-L repeats C-1 (both Initial). slide-R is Initial from wall-signs/.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-door-signage.jpg | public/images/door-signs/ | R1 | May 11 | good |
| C-1 | top5pct-door-signs-joliet-shorewood-crest-hill.jpg | public/images/door-signs/ | Initial (moved) | Mar 16 | initial |
| C-2 | top5pct-business-door-signs.jpg | public/images/door-signs/ | R2 | Jun 2 | good |
| C-3 | top5pct-door-sign-installers.jpg | public/images/door-signs/ | R2 | Jun 2 | good |
| C-4 | top5pct-door-wraps-joliet.jpg | public/images/door-signs/ | R3 | Jun 8 | good |
| C-5 | top5pct-door-lettering-vinyl.jpg | public/images/door-signs/ | R3 | Jun 7 | good |
| card-1 | top5pct-vinyl-door-lettering.jpg | public/images/door-signs/ | R2 | Jun 2 | good |
| card-2 | top5pct-vinyl-door-signs.jpg | public/images/door-signs/ | R2 | Jun 2 | good |
| slide-L | top5pct-door-signs-joliet-shorewood-crest-hill.jpg | public/images/door-signs/ | Initial (moved) | Mar 16 | initial, repeat |
| slide-R | top5pct-wall-decals-joliet.jpg | public/images/wall-signs/ | Initial (moved) | Mar 16 | initial |

> slide-L repeats C-1 (same file).

---

### signs/posters

**Blade:** `resources/views/pages/signs/posters.blade.php`
**Summary:** Hero and C-1 through C-3 are R1. C-4, card-set-1, slide-L, and slide-R are Initial. slide-R is cross-dir from banners/. All 4 Initial slots have posters/ replacements available.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-posters-printed-joliet.jpg | public/images/posters/ | R1 | May 11 | good |
| C-1 | top5pct-big-posters-joliet.jpg | public/images/posters/ | R1 | May 11 | good |
| C-2 | top5pct-custom-posters.jpg | public/images/posters/ | R1 | May 11 | good |
| C-3 | top5pct-poster-board-joliet.jpg | public/images/posters/ | R1 | May 11 | good |
| C-4 | top5pct-banner-poster-maker-joliet-romeoville-shorewood.jpg | public/images/posters/ | Initial | Mar 16 | initial |
| card-set-1 | top5pct-poster-store-joliet-shorewood-plainfield.jpg | public/images/posters/ | Initial | Mar 16 | initial |
| slide-L | top5pct-poster-printing-joliet-shorewood-romeoville.jpg | public/images/posters/ | Initial | Mar 16 | initial |
| slide-R | top5pct-banners-business-joliet-shorewood-crest-hill.jpg | public/images/banners/ | Initial | Mar 16 | initial |

---

### signs/table-runners

**Blade:** `resources/views/pages/signs/table-runners.blade.php`
**Summary:** Hero is Initial. C-1 through C-8 are strong R1/R3. card-set-1 and both slides are Initial. slide-R is cross-dir from banners/.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg | public/images/table-runners/ | Initial | Mar 16 | initial |
| C-1 | top5pct-custom-table-runner.jpg | public/images/table-runners/ | R1 | May 11 | good |
| C-2 | top5pct-custom-table-runners.jpg | public/images/table-runners/ | R1 | May 11 | good |
| C-3 | top5pct-table-runner.jpg | public/images/table-runners/ | R1 | May 11 | good |
| C-4 | top5pct-table-runners.jpg | public/images/table-runners/ | R1 | May 11 | good |
| C-5 | top5pct-custom-table-runner-near-me.jpg | public/images/table-runners/ | R3 | Jun 6 | good |
| C-6 | top5pct-table-runner-company.jpg | public/images/table-runners/ | R3 | Jun 6 | good |
| C-7 | top5pct-table-runner-covers.jpg | public/images/table-runners/ | R3 | Jun 6 | good |
| C-8 | top5pct-table-runners-customized.jpg | public/images/table-runners/ | R3 | Jun 6 | good |
| card-set-1 | top5pct-table-runner-popus-gourmet-popcorn-joliet.jpg | public/images/table-runners/ | Initial | Mar 16 | initial |
| slide-L | top5pct-custom-table-runner-joliet-shorewood.jpg | public/images/table-runners/ | Initial | Mar 16 | initial |
| slide-R | top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg | public/images/banners/ | Initial | Mar 16 | initial |

---

### signs/table-cloths

**Blade:** `resources/views/pages/signs/table-cloths.blade.php`
**Summary:** Hero and cards are good (R1/R2 moved). C-1, C-4, and slide-L are Initial (moved). C-5 through C-8 are strong R3. slide-R is Initial from banners/.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-custom-table-cloth.jpg | public/images/table-cloths/ | R1 (moved) | May 11 | good |
| C-1 | top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg | public/images/table-cloths/ | Initial (moved) | Mar 16 | initial |
| C-2 | top5pct-personalized-tablecloth-joliet.jpg | public/images/table-cloths/ | R1 (moved) | May 11 | good |
| C-3 | top5pct-table-cloths.jpg | public/images/table-cloths/ | R1 (moved) | May 11 | good |
| C-4 | top5pct-custom-table-cloth-joliet-crest-hill.jpg | public/images/table-cloths/ | Initial (moved) | Mar 16 | initial |
| C-5 | top5pct-table-cloth-8-feet.jpg | public/images/table-cloths/ | R3 | Jun 4 | good |
| C-6 | top5pct-table-cloth-customized.jpg | public/images/table-cloths/ | R3 | Jun 4 | good |
| C-7 | top5pct-table-cloths-for-businesses.jpg | public/images/table-cloths/ | R3 | Jun 4 | good |
| C-8 | top5pct-table-cloth-with-photos.jpg | public/images/table-cloths/ | R3 | Jun 4 | good |
| card-1 | top5pct-custom-table-cloth-business.jpg | public/images/table-cloths/ | R2 (moved) | Jun 2 | good |
| card-2 | top5pct-printed-table-cloths.jpg | public/images/table-cloths/ | R2 (moved) | Jun 2 | good |
| slide-L | top5pct-article-custom-table-cloths-joliet.jpg | public/images/table-cloths/ | Initial (moved) | Mar 16 | initial |
| slide-R | top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg | public/images/banners/ | Initial | Mar 16 | initial |

---

### signs/business-signs

**Blade:** `resources/views/pages/signs/business-signs.blade.php`
**Summary:** All 3 slots are Initial. No R1/R2/R3 files exist in business-signs/. Needs an image import before any upgrade is possible.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg | public/images/business-signs/ | Initial | Mar 16 | initial |
| card-1 | top5pct-business-signs-joliet-shorewood-crest-hill.jpg | public/images/business-signs/ | Initial | Mar 16 | initial |
| card-2 | top5pct-outdoor-signs-joliet-shorewood-crest-hill.jpg | public/images/business-signs/ | Initial | Mar 16 | initial |

---

## Custom Apparel

### /custom-apparel LP

**Blade:** `resources/views/pages/custom-apparel/index.blade.php`
**Summary:** Excellent. All 29 slots are R1 or R2. No Initial files. No repeats.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-custom-dtf-shirts.jpg | public/images/dtf-transfers/ | R2 | Jun 2 | good |
| C1-1 | top5pct-dye-sublimation-shirts.jpg | public/images/sublimation/ | R1 | May 11 | good |
| C1-2 | top5pct-brick-vinyl-cresthill.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| C1-3 | top5pct-spirit-wear-clothing.jpg | public/images/spirit-wear/ | R2 | Jun 2 | good |
| C1-4 | top5pct-volleyball-team-uniforms-joliet.jpg | public/images/spirit-wear/ | R2 | Jun 2 | good |
| C1-5 | top5pct-custom-company-apparel.jpg | public/images/corporate-wear/ | R2 | Jun 2 | good |
| LP-1 | top5pct-dtf-t-shirt-printing.jpg | public/images/dtf-transfers/ | R1 | May 11 | good |
| LP-2 | top5pct-dye-sublimation-custom-shirt-joliet.jpg | public/images/sublimation/ | R2 | Jun 2 | good |
| LP-3 | top5pct-screenprinted-shirts-joliet.jpg | public/images/custom-shirts/ | R1 | May 11 | good |
| LP-4 | top5pct-stitched-embroidered-shirts.jpg | public/images/embroidery/ | R2 | Jun 2 | good |
| LP-5 | top5pct-rhinestone-hoodies-joliet.jpg | public/images/custom-shirts/ | R1 | May 11 | good |
| LP-6 | top5pct-glitter-t-shirts.jpg | public/images/glitter-shirts/ | R2 | Jun 2 | good |
| LP-7 | top5pct-custom-puff-shirts.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| LP-8 | top5pct-glow-in-the-dark-caps.jpg | public/images/glow-shirts/ | R2 (moved) | Jun 2 | good |
| LP-9 | top5pct-custom-flock-t-shirt-printing.jpg | public/images/flock-shirts/ | R2 (moved) | Jun 2 | good |
| LP-10 | top5pct-brick-vinyl-hoodies.jpg | public/images/custom-shirts/ | R1 | May 11 | good |
| LP-11 | top5pct-holographic-vinyl-hoodie-foil.jpg | public/images/holographic-shirts/ | R2 (moved) | Jun 2 | good |
| LP-12 | top5pct-foil-gold-t-shirt.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| LP-13 | top5pct-reflective-shirts-gold.jpg | public/images/reflective-shirts/ | R1 | May 11 | good |
| LP-14 | top5pct-family-reunion-shirts-joliet.jpg | public/images/reunion-shirts/ | R1 | May 11 | good |
| LP-15 | top5pct-spirit-wear-joliet.jpg | public/images/spirit-wear/ | R1 | May 11 | good |
| LP-16 | top5pct-custom-business-shirts.jpg | public/images/corporate-wear/ | R1 | May 11 | good |
| card | top5pct-embroidered-caps.jpg | public/images/embroidery/ | R2 | Jun 2 | good |
| C2-1 | top5pct-glitter-lips-custom-t-shirt.jpg | public/images/glitter-shirts/ | R2 | Jun 2 | good |
| C2-2 | top5pct-flock-hoodie-printing.jpg | public/images/flock-shirts/ | R2 (moved) | Jun 2 | good |
| C2-3 | top5pct-rhinestone-bling-joliet.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| C2-4 | top5pct-reflective-shirts.jpg | public/images/reflective-shirts/ | R2 | Jun 2 | good |
| slide-L | top5pct-custom-t-shirts-dtf.jpg | public/images/dtf-transfers/ | R1 | May 11 | good |
| slide-R | top5pct-embroidery-beanies.jpg | public/images/embroidery/ | R2 | Jun 2 | good |

---

### custom-apparel/dtf-transfers

**Blade:** `resources/views/pages/custom-apparel/dtf-transfers.blade.php`
**Summary:** Very strong. All good except slide-R which is an Initial file from custom-shirts/ (cross-dir).

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-dtf-t-shirt-printing.jpg | public/images/dtf-transfers/ | R1 | May 11 | good |
| C-1 | top5pct-dtf-tees.jpg | public/images/dtf-transfers/ | R3 | Jun 8 | good |
| C-2 | top5pct-dtf-t-shirt-maker.jpg | public/images/dtf-transfers/ | R3 | Jun 8 | good |
| C-3 | top5pct-custom-t-shirts-dtf.jpg | public/images/dtf-transfers/ | R1 | May 11 | good |
| C-4 | top5pct-dtf-hoodies-joliet.jpg | public/images/dtf-transfers/ | R3 | Jun 8 | good |
| card-1 | top5pct-dtf-zip-up-hoodies.jpg | public/images/dtf-transfers/ | R2 | Jun 2 | good |
| card-2 | top5pct-custom-dtf-shirts.jpg | public/images/dtf-transfers/ | R2 | Jun 2 | good |
| slide-L | top5pct-toptpct-banner-dtf-transfers-joliet.jpg | public/images/dtf-transfers/ | R2 | Jun 2 | good |
| slide-R | top5pct-custom-embroidery-shops-near-me-joliet.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial |

---

### custom-apparel/dye-sublimation

**Blade:** `resources/views/pages/custom-apparel/dye-sublimation.blade.php`
**Summary:** Excellent. All 13 slots are R1/R2/R3. No issues.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-dye-sublimation-custom-shirt-joliet.jpg | public/images/sublimation/ | R2 | Jun 2 | good |
| C-1 | top5pct-sublimation-shirts.jpg | public/images/sublimation/ | R1 | May 11 | good |
| C-2 | top5pct-custom-face-mask-sublimated.jpg | public/images/sublimation/ | R1 | May 11 | good |
| C-3 | top5pct-custom-sublimated-towels.jpg | public/images/sublimation/ | R1 | May 11 | good |
| C-4 | top5pct-dye-sublimated-longsleeve-shirt-joliet.jpg | public/images/sublimation/ | R1 | May 11 | good |
| C-5 | top5pct-dye-sublimation-jerseys.jpg | public/images/sublimation/ | R3 | Jun 3 | good |
| C-6 | top5pct-dye-sublimation-tees.jpg | public/images/sublimation/ | R3 | Jun 3 | good |
| C-7 | top5pct-sublimated-graphic-tees.jpg | public/images/sublimation/ | R3 | Jun 3 | good |
| C-8 | top5pct-sublimation-tees.jpg | public/images/sublimation/ | R3 | Jun 3 | good |
| card-1 | top5pct-dye-sublimation-shirts.jpg | public/images/sublimation/ | R1 | May 11 | good |
| card-2 | top5pct-sublimation-shirt-printer.jpg | public/images/sublimation/ | R1 | May 11 | good |
| slide-L | top5pct-custom-sublimation-shirts.jpg | public/images/sublimation/ | R2 | Jun 2 | good |
| slide-R | top5pct-sublmation-team-shirts.jpg | public/images/sublimation/ | R2 | Jun 2 | good |

---

### custom-apparel/printing-options/embroidery

**Blade:** `resources/views/pages/custom-apparel/printing-options/embroidery.blade.php`
**Summary:** All good except slide-L which is the only Initial remaining (from embroidery/ dir, so a same-dir replacement is available).

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-stitched-embroidered-shirts.jpg | public/images/embroidery/ | R2 | Jun 2 | good |
| C-1 | top5pct-embroidered-aprons.jpg | public/images/embroidery/ | R1 | May 11 | good |
| C-2 | top5pct-embroidered-caps.jpg | public/images/embroidery/ | R2 | Jun 2 | good |
| C-3 | top5pct-embroidery-in-joliet.jpg | public/images/embroidery/ | R1 | May 11 | good |
| C-4 | top5pct-embroidered-stitched-caps.jpg | public/images/embroidery/ | R1 | May 11 | good |
| C-5 | top5pct-embroidered-cap-embroidered-beanies-joliet.jpg | public/images/embroidery/ | R3 | Jun 8 | good |
| card-1 | top5pct-embroidered-bag.jpg | public/images/embroidery/ | R2 | Jun 2 | good |
| card-2 | top5pct-embroidered-smocks.jpg | public/images/embroidery/ | R2 | Jun 2 | good |
| slide-L | top5pct-custom-embroidery-shops-near-me-joliet.jpg | public/images/embroidery/ | Initial | Mar 16 | initial |
| slide-R | top5pct-embroidered-caps-old.jpg | public/images/embroidery/ | R1 | May 11 | good |

---

### custom-apparel/printing-options/screen-printing

**Blade:** `resources/views/pages/custom-apparel/printing-options/screen-printing.blade.php`
**Summary:** Good overall. C-3 and slide-R are Initial from custom-shirts/. Cards and slide-L are updated R1 files.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-screenprinted-shirts-joliet.jpg | public/images/custom-shirts/ | R1 | May 11 | good |
| C-1 | top5pct-screenprint-custom-shirts.jpg | public/images/custom-shirts/ | R1 | May 11 | good |
| C-2 | top5pct-screenprinted-shirts-in-joliet.jpg | public/images/custom-shirts/ | R1 | May 11 | good |
| C-3 | top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial |
| C-4 | top5pct-screenprinting-shirts.jpg | public/images/custom-shirts/ | R1 | May 11 | good |
| C-5 | top5pct-screenprinting-joliet.jpg | public/images/screen-printing/ | R3 | Jun 3 | good |
| C-6 | top5pct-screenprinted-shirts-joliet.jpg | public/images/screen-printing/ | R3 | Jun 3 | good |
| C-7 | top5pct-screenprinting-company-shirts.jpg | public/images/screen-printing/ | R3 | Jun 3 | good |
| C-8 | top5pct-screenprinting-hoodies-joliet.jpg | public/images/screen-printing/ | R3 | Jun 3 | good |
| C-9 | top5pct-screenprinting-t-shirts-joliet.jpg | public/images/screen-printing/ | R3 | Jun 3 | good |
| C-10 | top5pct-screenprinting-t-shirt-maker-joliet.jpg | public/images/screen-printing/ | R3 | Jun 8 | good |
| card-1 | top5pct-neon-vinyl-shirts.jpg | public/images/custom-shirts/ | R1 | May 11 | good |
| card-2 | top5pct-vinyl-caps.jpg | public/images/custom-shirts/ | R1 | May 11 | good |
| slide-L | top5pct-screenprinting-shirts.jpg | public/images/custom-shirts/ | R1 | May 11 | good |
| slide-R | top5pct-custom-embroidery-shops-near-me-joliet.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial |

---

### custom-apparel/printing-options/rhinestone-apparel

**Blade:** `resources/views/pages/custom-apparel/printing-options/rhinestone-apparel.blade.php`
**Summary:** Hero, carousel, and cards are R1/R2/R3. Both slides are Initial from custom-shirts/.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-rhinestone-hoodies-joliet.jpg | public/images/custom-shirts/ | R1 | May 11 | good |
| C-1 | top5pct-rhinestone-apparel-keith-elementary.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| C-2 | top5pct-rhinestone-bling-joliet.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| C-3 | top5pct-rhinestone-hoodie-joliet-west.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| C-4 | top5pct-rhinestone-ladies-shirt.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| C-5 | top5pct-rhinestone-tshirts-joliet.jpg | public/images/rhinestone-apparel/ | R3 | Jun 3 | good |
| card-1 | top5pct-rhinestone-t-shirts-joliet.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| card-2 | top5pct-custom-rhinestone-shirts.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| slide-L | top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial |
| slide-R | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial |

---

### custom-apparel/glitter-shirts

**Blade:** `resources/views/pages/custom-apparel/glitter-shirts.blade.php`
**Summary:** Strong. Hero, carousel, and cards are R1/R2/R3. Both slides are Initial.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-glitter-t-shirts.jpg | public/images/glitter-shirts/ | R2 | Jun 2 | good |
| C-1 | top5pct-custom-glitter-clothing.jpg | public/images/glitter-shirts/ | R1 | May 11 | good |
| C-2 | top5pct-custom-glitter-sweatshirts.jpg | public/images/glitter-shirts/ | R2 | Jun 2 | good |
| C-3 | top5pct-custom-wedding-glitter-shirts.jpg | public/images/glitter-shirts/ | R2 | Jun 2 | good |
| C-4 | top5pct-glitter-blue-jean-jacket.jpg | public/images/glitter-shirts/ | R2 | Jun 2 | good |
| C-5 | top5pct-glitter-sportswear-shirts.jpg | public/images/glitter-shirts/ | R3 | Jun 8 | good |
| C-6 | top5pct-glitter-sweatshirts-joliet.jpg | public/images/glitter-shirts/ | R3 | Jun 8 | good |
| card-1 | top5pct-glitter-lips-custom-t-shirt.jpg | public/images/glitter-shirts/ | R2 | Jun 2 | good |
| card-2 | top5pct-glitter-t-shirts-cresthill.jpg | public/images/glitter-shirts/ | R2 | Jun 2 | good |
| slide-L | top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | public/images/glitter-shirts/ | Initial (moved) | Mar 16 | initial |
| slide-R | top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial |

---

### custom-apparel/glow-in-the-dark-shirts

**Blade:** `resources/views/pages/custom-apparel/glow-in-the-dark-shirts.blade.php`
**Summary:** Hero and C-2 through C-4 are good. C-1, card-1, card-2, and slide-L are the same Initial file (4-way repeat). slide-R is Initial from custom-shirts/. glow-shirts/ dir is exhausted (no unused R1/R2/R3 remain).

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-glow-in-the-dark-caps.jpg | public/images/glow-shirts/ | R2 (moved) | Jun 2 | good |
| C-1 | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | public/images/glow-shirts/ | Initial (moved) | Mar 16 | initial |
| C-2 | top5pct-glowing-halloween-bat-shirt.jpg | public/images/glow-shirts/ | R2 | Jun 2 | good |
| C-3 | top5pct-halloween-pumpkin-glow-shirt.jpg | public/images/glow-shirts/ | R2 | Jun 2 | good |
| C-4 | top5pct-custom-vinyl-shirts.jpg | public/images/custom-shirts/ | R1 | May 11 | good |
| card-1 | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | public/images/glow-shirts/ | Initial (moved) | Mar 16 | initial, repeat |
| card-2 | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | public/images/glow-shirts/ | Initial (moved) | Mar 16 | initial, repeat |
| slide-L | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | public/images/glow-shirts/ | Initial (moved) | Mar 16 | initial, repeat |
| slide-R | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial |

> C-1, card-1, card-2, and slide-L are all the same file (4-way repeat). Unlock requires new glow-shirts/ images or lifting cross-dir rule.

---

### custom-apparel/flock-shirts

**Blade:** `resources/views/pages/custom-apparel/flock-shirts.blade.php`
**Summary:** Same pattern as glow-shirts. C-1, card-1, card-2, and slide-L are the same Initial file (4-way repeat). flock-shirts/ dir is exhausted.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-custom-flock-t-shirt-printing.jpg | public/images/flock-shirts/ | R2 (moved) | Jun 2 | good |
| C-1 | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | public/images/flock-shirts/ | Initial (moved) | Mar 16 | initial |
| C-2 | top5pct-flock-hoodie-printing.jpg | public/images/flock-shirts/ | R2 (moved) | Jun 2 | good |
| C-3 | top5pct-flock-shirt-vinyl.jpg | public/images/flock-shirts/ | R2 (moved) | Jun 2 | good |
| C-4 | top5pct-custom-vinyl-shirts.jpg | public/images/custom-shirts/ | R1 | May 11 | good |
| card-1 | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | public/images/flock-shirts/ | Initial (moved) | Mar 16 | initial, repeat |
| card-2 | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | public/images/flock-shirts/ | Initial (moved) | Mar 16 | initial, repeat |
| slide-L | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | public/images/flock-shirts/ | Initial (moved) | Mar 16 | initial, repeat |
| slide-R | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial |

> C-1, card-1, card-2, and slide-L are all the same file (4-way repeat). Unlock requires new flock-shirts/ images.

---

### custom-apparel/holographic-shirts

**Blade:** `resources/views/pages/custom-apparel/holographic-shirts.blade.php`
**Summary:** Same pattern as glow/flock. C-2 repeats hero. C-1, card-1, card-2, and slide-L are the same Initial file (4-way repeat). holographic-shirts/ dir is exhausted.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-holographic-vinyl-hoodie-foil.jpg | public/images/holographic-shirts/ | R2 (moved) | Jun 2 | good |
| C-1 | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | public/images/holographic-shirts/ | Initial (moved) | Mar 16 | initial |
| C-2 | top5pct-holographic-vinyl-hoodie-foil.jpg | public/images/holographic-shirts/ | R2 (moved) | Jun 2 | repeat |
| C-3 | top5pct-holographic-baby-shirts.jpg | public/images/holographic-shirts/ | R3 | Jun 8 | good |
| card-1 | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | public/images/holographic-shirts/ | Initial (moved) | Mar 16 | initial, repeat |
| card-2 | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | public/images/holographic-shirts/ | Initial (moved) | Mar 16 | initial, repeat |
| slide-L | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | public/images/holographic-shirts/ | Initial (moved) | Mar 16 | initial, repeat |
| slide-R | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial |

> C-2 repeats hero. C-1, card-1, card-2, and slide-L are the same file (4-way repeat). Unlock requires new holographic-shirts/ images.

---

### custom-apparel/foil-shirts

**Blade:** `resources/views/pages/custom-apparel/foil-shirts.blade.php`
**Summary:** Good hero, C-2 through C-9, and card-2. C-1, card-1, and slide-L are the same Initial file (3-way repeat). slide-R is Initial from custom-shirts/.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-foil-gold-t-shirt.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| C-1 | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial |
| C-2 | top5pct-gold-foil-printed-shirts.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| C-3 | top5pct-foil-custom-t-shirts.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| C-4 | top5pct-custom-foil-polo.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| C-5 | top5pct-foil-shirts.jpg | public/images/foil-shirts/ | R3 | Jun 8 | good |
| C-6 | top5pct-foil-custom-shirts-joliet.jpg | public/images/foil-shirts/ | R3 | Jun 8 | good |
| C-7 | top5pct-foil-custom-apparel-shirts-joliet.jpg | public/images/foil-shirts/ | R3 | Jun 9 | good |
| C-8 | top5pct-foil-shirts-cresthill.jpg | public/images/foil-shirts/ | R3 | Jun 8 | good |
| C-9 | top5pct-foil-shirt-shorewood.jpg | public/images/foil-shirts/ | R3 | Jun 8 | good |
| card-1 | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial, repeat |
| card-2 | top5pct-custom-wedding-foil-shirts.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| slide-L | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial, repeat |
| slide-R | top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial |

> C-1, card-1, and slide-L are the same file (3-way repeat). Both foil-shirts/ and custom-shirts/ have unused R1/R2 files that could replace them if cross-dir is lifted for those slots.

---

### custom-apparel/brick-shirts

**Blade:** `resources/views/pages/custom-apparel/brick-shirts.blade.php`
**Summary:** Good hero, carousel, and slide-R (updated). card-1 and card-2 are Initial. slide-L repeats card-1.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-brick-vinyl-hoodies.jpg | public/images/custom-shirts/ | R1 | May 11 | good |
| C-1 | top5pct-brick-vinyl-cresthill.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| C-2 | top5pct-brick-vinyl-custom-t-shirt.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| C-3 | top5pct-brick-vinyl-jackets-joliet.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| C-4 | top5pct-customized-brick-vinyl-shirts.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| C-5 | top5pct-brick-vinyl-custom-shirts-joliet.jpg | public/images/brick-shirts/ | R3 | Jun 8 | good |
| C-6 | top5pct-brick-vinyl-shorewood.jpg | public/images/brick-shirts/ | R3 | Jun 9 | good |
| card-1 | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial |
| card-2 | top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial |
| slide-L | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial, repeat |
| slide-R | top5pct-custom-hoodies.jpg | public/images/custom-shirts/ | R1 | May 11 | good |

> slide-L repeats card-1 (same file). Needs 2 distinct same-dir R1/R2 files or cross-dir lift to resolve card-1, card-2, and slide-L.

---

### custom-apparel/puff-shirts

**Blade:** `resources/views/pages/custom-apparel/puff-shirts.blade.php`
**Summary:** Good hero, C-2 through C-4, and slide-R (updated). C-1, card-1, and card-2 are Initial. slide-L repeats card-1.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-custom-puff-shirts.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| C-1 | top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial |
| C-2 | top5pct-puff-shirts-joliet.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| C-3 | top5pct-puff-shirts.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| C-4 | top5pct-custom-vinyl-shirts.jpg | public/images/custom-shirts/ | R1 | May 11 | good |
| card-1 | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial |
| card-2 | top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial |
| slide-L | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial, repeat |
| slide-R | top5pct-rhinetsone-t-shirts.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |

> slide-L repeats card-1 (same file). Note: card-1 and slide-L use brick-shirts imagery on a puff-shirts page, which is a topical mismatch worth reviewing.

---

### custom-apparel/reflective-shirts

**Blade:** `resources/views/pages/custom-apparel/reflective-shirts.blade.php`
**Summary:** Hero, C-2 through C-4, and card-1 are good. C-1, card-2, and slide-L are the same Initial file (3-way repeat). slide-R is Initial from custom-shirts/.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-reflective-shirts-gold.jpg | public/images/reflective-shirts/ | R1 | May 11 | good |
| C-1 | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | public/images/reflective-shirts/ | Initial (moved) | Mar 16 | initial |
| C-2 | top5pct-custom-reflective-hoodies.jpg | public/images/reflective-shirts/ | R2 | Jun 2 | good |
| C-3 | top5pct-reflective-shirts.jpg | public/images/reflective-shirts/ | R2 | Jun 2 | good |
| C-4 | top5pct-reflective-shirts-shorewood.jpg | public/images/reflective-shirts/ | R2 | Jun 2 | good |
| card-1 | top5pct-reflective-vinyl-shirts-plainfield.jpg | public/images/reflective-shirts/ | R2 | Jun 2 | good |
| card-2 | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | public/images/reflective-shirts/ | Initial (moved) | Mar 16 | initial, repeat |
| slide-L | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | public/images/reflective-shirts/ | Initial (moved) | Mar 16 | initial, repeat |
| slide-R | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial |

> C-1, card-2, and slide-L are the same file (3-way repeat). reflective-shirts/ dir is exhausted (no unused R1/R2/R3 remain for those 3 slots).

---

### custom-apparel/vinyl-shirts

**Blade:** `resources/views/pages/custom-apparel/vinyl-shirts.blade.php`
**Summary:** C-1 through C-4 and both cards are good R1. Hero and slide-L are the same Initial file (repeat). slide-R is Initial from custom-shirts/.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-custom-vinyl-shirts-caps-hoodies.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial |
| C-1 | top5pct-custom-caps-vinyl.jpg | public/images/custom-shirts/ | R1 | May 11 | good |
| C-2 | top5pct-custom-hoodies.jpg | public/images/custom-shirts/ | R1 | May 11 | good |
| C-3 | top5pct-custom-vinyl-hoodies.jpg | public/images/custom-shirts/ | R1 | May 11 | good |
| C-4 | top5pct-custom-vinyl-shirts.jpg | public/images/custom-shirts/ | R1 | May 11 | good |
| card-1 | top5pct-neon-vinyl-shirts.jpg | public/images/custom-shirts/ | R1 | May 11 | good |
| card-2 | top5pct-vinyl-caps.jpg | public/images/custom-shirts/ | R1 | May 11 | good |
| slide-L | top5pct-custom-vinyl-shirts-caps-hoodies.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial, repeat |
| slide-R | top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial |

> slide-L repeats hero (same file). custom-shirts/ has many unused R1/R2 files that could replace hero, slide-L, and slide-R.

---

### custom-apparel/printing-options/digital-vinyl

**Blade:** `resources/views/pages/custom-apparel/printing-options/digital-vinyl.blade.php`
**Summary:** All R1/R2 (moved) files. No Initial. slide-L repeats C-4; slide-R repeats C-3. Two repeats to resolve.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-digital-vinyl-t-shirts.jpg | public/images/digital-vinyl/ | R2 | Jun 2 | good |
| C-1 | vinyl-shirts.jpg | public/images/digital-vinyl/ | R2 (moved) | Jun 2 | good |
| C-2 | vinyl-hoodie.jpg | public/images/digital-vinyl/ | R1 (moved) | May 11 | good |
| C-3 | vinyl-caps.jpg | public/images/digital-vinyl/ | R1 (moved) | May 11 | good |
| C-4 | custom-vinyl-hoodies.jpg | public/images/digital-vinyl/ | R1 (moved) | May 11 | good |
| card-1 | vinyl-zip-up-hoodies.jpg | public/images/digital-vinyl/ | R1 (moved) | May 11 | good |
| slide-L | custom-vinyl-hoodies.jpg | public/images/digital-vinyl/ | R1 (moved) | May 11 | repeat |
| slide-R | vinyl-caps.jpg | public/images/digital-vinyl/ | R1 (moved) | May 11 | repeat |

> slide-L repeats C-4 (same file). slide-R repeats C-3 (same file). digital-vinyl/ dir may be exhausted — check disk for unused files.

---

### custom-apparel/specialty-materials/vinyl

**Blade:** `resources/views/pages/custom-apparel/specialty-materials/vinyl.blade.php`
**Summary:** All R1 files. No Initial. slide-L repeats card-1; slide-R repeats C-3. Two repeats to resolve.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-vinyl-shirts.jpg | public/images/vinyl/ | R1 | May 11 | good |
| C-1 | custom-vinyl-shirts.jpg | public/images/vinyl/ | R1 | May 11 | good |
| C-2 | vinyl-hoodie.jpg | public/images/vinyl/ | R1 | May 11 | good |
| C-3 | vinyl-caps.jpg | public/images/vinyl/ | R1 | May 11 | good |
| C-4 | vinyl-zip-up-hoodies.jpg | public/images/vinyl/ | R1 | May 11 | good |
| card-1 | custom-vinyl-hoodies.jpg | public/images/vinyl/ | R1 | May 11 | good |
| slide-L | custom-vinyl-hoodies.jpg | public/images/vinyl/ | R1 | May 11 | repeat |
| slide-R | vinyl-caps.jpg | public/images/vinyl/ | R1 | May 11 | repeat |

> slide-L repeats card-1 (same file). slide-R repeats C-3 (same file). vinyl/ dir may be exhausted — check disk for unused files.

---

### custom-apparel/group-wear/corporate-wear-shirts

**Blade:** `resources/views/pages/custom-apparel/group-wear/corporate-wear-shirts.blade.php`
**Summary:** Mostly good. Hero, C-1, C-2, C-4, and both card-sets 1 and 2 are R1. C-3, card-set-3, and slide-L are Initial. slide-R updated to R2.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-custom-business-shirts.jpg | public/images/corporate-wear/ | R1 | May 11 | good |
| C-1 | top5pct-custom-apron-joliet.jpg | public/images/corporate-wear/ | R1 | May 11 | good |
| C-2 | top5pct-custom-aprons-joliet.jpg | public/images/corporate-wear/ | R1 | May 11 | good |
| C-3 | top5pct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg | public/images/corporate-wear/ | Initial | Mar 16 | initial |
| C-4 | top5pct-custom-pocket-shirt-joliet.jpg | public/images/corporate-wear/ | R1 | May 11 | good |
| card-set-1 | top5pct-landscaping-clothing-joliet.jpg | public/images/corporate-wear/ | R1 | May 11 | good |
| card-set-2 | top5pct-lawn-care-clothing.jpg | public/images/corporate-wear/ | R1 | May 11 | good |
| card-set-3 | top5pct-custom-cap-hat-joliet-shorewood-rockdale.jpg | public/images/corporate-wear/ | Initial | Mar 16 | initial |
| slide-L | top5pct-custom-button-up-shirt-joliet-shorewood.jpg | public/images/corporate-wear/ | Initial | Mar 16 | initial |
| slide-R | top5pct-volleyball-team-uniforms-joliet.jpg | public/images/spirit-wear/ | R2 | Jun 2 | good |

---

### custom-apparel/group-wear/reunion-shirts

**Blade:** `resources/views/pages/custom-apparel/group-wear/reunion-shirts.blade.php`
**Summary:** Hero, C-1, C-3, C-4, C-5, and both main cards are good. C-2, card-3, slide-L, and slide-R are Initial.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-family-reunion-shirts-joliet.jpg | public/images/reunion-shirts/ | R1 | May 11 | good |
| C-1 | top5pct-class-reunion-shirt.jpg | public/images/reunion-shirts/ | R1 | May 11 | good |
| C-2 | top5pct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg | public/images/reunion-shirts/ | Initial | Mar 16 | initial |
| C-3 | top5pct-family-reunion-tshirts-in-joliet.jpg | public/images/reunion-shirts/ | R1 | May 11 | good |
| C-4 | top5pct-group-shirts.jpg | public/images/reunion-shirts/ | R1 | May 11 | good |
| C-5 | top5pct-family-reunion-tees.jpg | public/images/reunion-shirts/ | R3 | Jun 8 | good |
| card-1 | top5pct-reunion-group-shirts.jpg | public/images/reunion-shirts/ | R1 | May 11 | good |
| card-2 | top5pct-reunion-shirts.jpg | public/images/reunion-shirts/ | R1 | May 11 | good |
| card-3 | top5pct-family-reunion-shirts-joliet-plainfield.jpg | public/images/reunion-shirts/ | Initial | Mar 16 | initial |
| slide-L | top5pct-family-reunion-shirts-joliet-romeoville.jpg | public/images/reunion-shirts/ | Initial | Mar 16 | initial |
| slide-R | top5pct-t-shirt-maker-article-pic1.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial |

---

### custom-apparel/group-wear/spirit-wear-shirts

**Blade:** `resources/views/pages/custom-apparel/group-wear/spirit-wear-shirts.blade.php`
**Summary:** Hero, C-2 through C-5, and slide-R are good. C-1 and all three card-sets and slide-L are Initial. spirit-wear/ dir is exhausted for same-dir replacements.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-spirit-wear-joliet.jpg | public/images/spirit-wear/ | R1 | May 11 | good |
| C-1 | top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg | public/images/spirit-wear/ | Initial | Mar 16 | initial |
| C-2 | top5pct-spirit-wear-shirts.jpg | public/images/spirit-wear/ | R1 | May 11 | good |
| C-3 | top5pct-spirit-wear-clothing.jpg | public/images/spirit-wear/ | R2 | Jun 2 | good |
| C-4 | top5pct-volleyball-team-uniforms-joliet.jpg | public/images/spirit-wear/ | R2 | Jun 2 | good |
| C-5 | top5pct-spirit-wear-volleyball-track.jpg | public/images/spirit-wear/ | R3 | Jun 3 | good |
| card-set-1 | top5pct-joliet-west-spirit-wear-hoodie-shorewood.jpg | public/images/spirit-wear/ | Initial | Mar 16 | initial |
| card-set-2 | top5pct-spiritwear-fanwear-joliet-plainfield-shorewood.jpg | public/images/spirit-wear/ | Initial | Mar 16 | initial |
| card-set-3 | top5pct-bowling-shirts-joliet-shorewood-crest-hill.jpg | public/images/spirit-wear/ | Initial | Mar 16 | initial |
| slide-L | top5pct-plainfield-south-high-school-hoodie.jpg | public/images/spirit-wear/ | Initial | Mar 16 | initial |
| slide-R | top5pct-family-reunion-tees.jpg | public/images/reunion-shirts/ | R3 | Jun 8 | good |

---

## Vehicle Graphics

### /vehicle-graphics LP

**Blade:** `resources/views/pages/vehicle-graphics/index.blade.php`
**Summary:** C1 carousel and both LP banners are R2. All 4 C2 carousel slots plus hero, LP-3, card, and slide-R are Initial. Strong C1 section, weak C2 section.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-car-wraps-vinyl-lettering-joliet-shorewood.jpg | public/images/automobile-graphics/ | Initial | Mar 17 | initial |
| C1-1 | top5pct-joliet-car-magnets.jpg | public/images/vehicle-magnets/ | R2 | Jun 2 | good |
| C1-2 | top5pct-custom-dot-decals-for-trucks-in-joliet.jpg | public/images/dot-decals/ | R2 | Jun 2 | good |
| C1-3 | top5pct-dot-decals-semi-truck.jpg | public/images/dot-decals/ | R2 | Jun 2 | good |
| C1-4 | top5pct-car-decals-white-oaks-library.jpg | public/images/vehicle-magnets/ | R2 | Jun 2 | good |
| LP-1 | top5pct-auto-window-wraps.jpg | public/images/automobile-graphics/ | R2 | Jun 2 | good |
| LP-2 | top5pct-magnet-vehicle-signs-joliet.jpg | public/images/vehicle-magnets/ | R2 | Jun 2 | good |
| LP-3 | top5pct-truck-lettering-joliet-shorewood-rockdale.jpg | public/images/dot-decals/ | Initial | Mar 17 | initial |
| card | top5pct-vinyl-lettering-car-graphics-joliet-crest-hill.jpg | public/images/automobile-graphics/ | Initial | Mar 17 | initial |
| C2-1 | top5pct-car-magnets-truck-magnets-joliet.jpg | public/images/vehicle-magnets/ | Initial | Mar 17 | initial |
| C2-2 | top5pct-dot-decals-joliet-shorewood-rockdale.jpg | public/images/dot-decals/ | Initial | Mar 17 | initial |
| C2-3 | top5pct-boat-decals-joliet-shorewood-crest-hill.jpg | public/images/automobile-graphics/ | Initial | Mar 17 | initial |
| C2-4 | top5pct-business-magnets-car-magnets-joliet.jpg | public/images/vehicle-magnets/ | Initial | Mar 17 | initial |
| slide-L | top5pct-trucking-dot-decals-in-joliet.jpg | public/images/dot-decals/ | R2 | Jun 2 | good |
| slide-R | top5pct-car-magnets-vehicle-magnets-joliet.jpg | public/images/vehicle-magnets/ | Initial | Mar 17 | initial |

---

### vehicle-graphics/automobile-graphics

**Blade:** `resources/views/pages/vehicle-graphics/automobile-graphics.blade.php`
**Summary:** Very strong. Hero, full carousel, and all card-sets are R1/R2/R3. Only slide-L is Initial. slide-R updated to R2.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-auto-window-wraps.jpg | public/images/automobile-graphics/ | R2 | Jun 2 | good |
| C-1 | top5pct-car-wraps.jpg | public/images/automobile-graphics/ | R1 | May 11 | good |
| C-2 | top5pct-pickup-truck-graphics.jpg | public/images/automobile-graphics/ | R1 | May 11 | good |
| C-3 | top5pct-trailer-decal-graphics.jpg | public/images/automobile-graphics/ | R1 | May 11 | good |
| C-4 | top5pct-trailer-decals.jpg | public/images/automobile-graphics/ | R1 | May 11 | good |
| C-5 | top5pct-car-graphics-installers-joliet.jpg | public/images/automobile-graphics/ | R3 | Jun 9 | good |
| C-6 | top5pct-decals-for-work-trucks.jpg | public/images/automobile-graphics/ | R3 | Jun 9 | good |
| C-7 | top5pct-car-wrap-decals-joliet.jpg | public/images/automobile-graphics/ | R3 | Jun 9 | good |
| C-8 | top5pct-vehicle-graphics-near-me.jpg | public/images/automobile-graphics/ | R3 | Jun 9 | good |
| C-9 | top5pct-vehicle-signs-joliet.jpg | public/images/automobile-graphics/ | R3 | Jun 9 | good |
| card-set-1 | top5pct-van-graphics-decals.jpg | public/images/automobile-graphics/ | R1 | May 11 | good |
| card-set-2 | top5pct-vecal-decals.jpg | public/images/automobile-graphics/ | R1 | May 11 | good |
| card-set-3 | top5pct-vehicle-window-graphics-joliet.jpg | public/images/automobile-graphics/ | R1 | May 11 | good |
| slide-L | top5pct-vinyl-lettering-car-graphics-joliet-crest-hill.jpg | public/images/automobile-graphics/ | Initial | Mar 17 | initial |
| slide-R | top5pct-truck-sign-magnets-joliet.jpg | public/images/vehicle-magnets/ | R2 | Jun 2 | good |

---

### vehicle-graphics/dot-decals

**Blade:** `resources/views/pages/vehicle-graphics/dot-decals.blade.php`
**Summary:** Good carousel and card-sets. Hero, slide-L, and slide-R are Initial. slide-R is cross-dir from vehicle-magnets/.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-truck-lettering-joliet-shorewood-rockdale.jpg | public/images/dot-decals/ | Initial | Mar 17 | initial |
| C-1 | top5pct-dot-decals-joliet.jpg | public/images/dot-decals/ | R1 | May 11 | good |
| C-2 | top5pct-dot-semi-truck-decals.jpg | public/images/dot-decals/ | R1 | May 11 | good |
| C-3 | top5pct-dot-truck-decals-joliet.jpg | public/images/dot-decals/ | R1 | May 11 | good |
| C-4 | top5pct-custom-dot-decals-for-trucks-in-joliet.jpg | public/images/dot-decals/ | R2 | Jun 2 | good |
| C-5 | top5pct-DOT-truck-decals-rockdale.jpg | public/images/dot-decals/ | R3 | Jun 7 | good |
| card-set-1 | top5pct-trucking-dot-decals-in-joliet.jpg | public/images/dot-decals/ | R2 | Jun 2 | good |
| card-set-2 | top5pct-custom-dot-truck-signs-illinois.jpg | public/images/dot-decals/ | R2 | Jun 2 | good |
| card-set-3 | top5pct-dot-decals-semi-truck.jpg | public/images/dot-decals/ | R2 | Jun 2 | good |
| slide-L | top5pct-DOT-stickers-joliet-shorewood-rockdale.jpg | public/images/dot-decals/ | Initial | Mar 17 | initial |
| slide-R | top5pct-car-magnets-vehicle-magnets-joliet.jpg | public/images/vehicle-magnets/ | Initial | Mar 17 | initial |

---

### vehicle-graphics/vehicle-magnets

**Blade:** `resources/views/pages/vehicle-graphics/vehicle-magnets.blade.php`
**Summary:** Very strong. Hero, carousel, and card-sets are R1/R2. slide-L is Initial. slide-R updated to R1.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-magnet-vehicle-signs-joliet.jpg | public/images/vehicle-magnets/ | R2 | Jun 2 | good |
| C-1 | top5pct-automobile-magnets-joliet.jpg | public/images/vehicle-magnets/ | R1 | May 11 | good |
| C-2 | top5pct-car-magnets-joliet.jpg | public/images/vehicle-magnets/ | R1 | May 11 | good |
| C-3 | top5pct-car-magnets.jpg | public/images/vehicle-magnets/ | R1 | May 11 | good |
| C-4 | top5pct-car-sign-magnets-joliet.jpg | public/images/vehicle-magnets/ | R1 | May 11 | good |
| card-set-1 | top5pct-custom-car-magnets-in-joliet.jpg | public/images/vehicle-magnets/ | R1 | May 11 | good |
| card-set-2 | top5pct-custom-car-magnets.jpg | public/images/vehicle-magnets/ | R1 | May 11 | good |
| slide-L | top5pct-car-magnets-vehicle-magnets-joliet.jpg | public/images/vehicle-magnets/ | Initial | Mar 17 | initial |
| slide-R | top5pct-vehicle-graphics.jpg | public/images/automobile-graphics/ | R1 | May 11 | good |

---

## Stickers

### /stickers LP

**Blade:** `resources/views/pages/stickers/index.blade.php`
**Summary:** Hero, C1-1, LP banners, C2-1, C2-3, and slides are good. C1-2 through C1-5, card, C2-2, and C2-4 are Initial.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-custom-shaped-stickers-cresthill.jpg | public/images/custom-shaped-stickers-decals/ | R2 | Jun 2 | good |
| C1-1 | top5pct-die-cut-stickers-shorewood.jpg | public/images/custom-shaped-stickers-decals/ | R2 | Jun 2 | good |
| C1-2 | top5pct-stickers-decals-joliet-beer-brewery.jpg | public/images/custom-shaped-stickers-decals/ | Initial | Mar 16 | initial |
| C1-3 | top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg | public/images/custom-shaped-stickers-decals/ | Initial | Mar 16 | initial |
| C1-4 | top5pct-stickers-decals-joliet-volleyball-team.jpg | public/images/custom-shaped-stickers-decals/ | Initial | Mar 16 | initial |
| C1-5 | top5pct-stickers-decals-joliet-labels.jpg | public/images/custom-shaped-stickers-decals/ | Initial | Mar 16 | initial |
| LP-1 | top5pct-custom-stickers-cresthill.jpg | public/images/custom-shaped-stickers-decals/ | R2 | Jun 2 | good |
| LP-2 | top5pct-die-cut-stickers-joliet.jpg | public/images/custom-shaped-stickers-decals/ | R2 | Jun 2 | good |
| card | top5pct-stickers-decals-joliet-ocean-viewz.jpg | public/images/custom-shaped-stickers-decals/ | Initial | Mar 16 | initial |
| C2-1 | top5pct-custom-glossy-stickers-in-joliet.jpg | public/images/custom-shaped-stickers-decals/ | R1 | May 11 | good |
| C2-2 | top5pct-article-buy-stickers-decals-joliet.jpg | public/images/standard-stickers-decals/ | Initial | Mar 16 | initial |
| C2-3 | top5pct-custom-label-stickers.jpg | public/images/custom-shaped-stickers-decals/ | R1 | May 11 | good |
| C2-4 | top5pct-stickers-decals-joliet-boxing-sports.jpg | public/images/custom-shaped-stickers-decals/ | Initial | Mar 16 | initial |
| slide-L | top5pct-diecut-stickers.jpg | public/images/standard-stickers-decals/ | R1 | May 11 | good |
| slide-R | top5pct-custom-shaped-stickers.jpg | public/images/custom-shaped-stickers-decals/ | R1 | May 11 | good |

---

### stickers/standard-stickers

**Blade:** `resources/views/pages/stickers/standard-stickers.blade.php`
**Summary:** All carousel slots, card-sets, and slides are now R1/R2/R3 (updated Session 3). Hero and slide-L are the same file (repeat introduced by the Session 3 update).

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-custom-stickers-cresthill.jpg | public/images/custom-shaped-stickers-decals/ | R2 | Jun 2 | good |
| C-1 | top5pct-custom-stickers.jpg | public/images/custom-shaped-stickers-decals/ | R1 | May 11 | good |
| C-2 | top5pct-stickers-in-joliet.jpg | public/images/custom-shaped-stickers-decals/ | R1 | May 11 | good |
| C-3 | top5pct-die-cut-stickers-joliet-r3.jpg | public/images/custom-shaped-stickers-decals/ | R3 | Jun 8 | good |
| C-4 | top5pct-custom-glossy-stickers-in-joliet.jpg | public/images/custom-shaped-stickers-decals/ | R1 | May 11 | good |
| card-set-1 | top5pct-custom-label-stickers.jpg | public/images/custom-shaped-stickers-decals/ | R1 | May 11 | good |
| card-set-2 | top5pct-custom-shaped-stickers.jpg | public/images/custom-shaped-stickers-decals/ | R1 | May 11 | good |
| slide-L | top5pct-custom-stickers-cresthill.jpg | public/images/custom-shaped-stickers-decals/ | R2 | Jun 2 | repeat |
| slide-R | top5pct-die-cut-stickers-shorewood.jpg | public/images/custom-shaped-stickers-decals/ | R2 | Jun 2 | good |

> slide-L repeats hero (same file: top5pct-custom-stickers-cresthill.jpg). One swap needed — multiple same-dir R2/R3 options available.

---

### stickers/custom-shaped-stickers

**Blade:** `resources/views/pages/stickers/custom-shaped-stickers.blade.php`
**Summary:** Mostly good. Hero, carousel, and cards are R1/R2. slide-L is the only Initial remaining. slide-R updated to R2.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-die-cut-stickers-joliet.jpg | public/images/custom-shaped-stickers-decals/ | R2 | Jun 2 | good |
| C-1 | top5pct-custom-stickers.jpg | public/images/custom-shaped-stickers-decals/ | R1 | May 11 | good |
| C-2 | top5pct-custom-glossy-stickers-in-joliet.jpg | public/images/custom-shaped-stickers-decals/ | R1 | May 11 | good |
| C-3 | top5pct-custom-label-stickers.jpg | public/images/custom-shaped-stickers-decals/ | R1 | May 11 | good |
| C-4 | top5pct-custom-shaped-stickers.jpg | public/images/custom-shaped-stickers-decals/ | R1 | May 11 | good |
| card-1 | top5pct-diecut-stickers.jpg | public/images/standard-stickers-decals/ | R1 | May 11 | good |
| card-2 | top5pct-stickers-in-joliet.jpg | public/images/custom-shaped-stickers-decals/ | R1 | May 11 | good |
| slide-L | top5pct-stickers-decals-joliet-boxing-sports.jpg | public/images/custom-shaped-stickers-decals/ | Initial | Mar 16 | initial |
| slide-R | top5pct-die-cut-stickers-shorewood.jpg | public/images/custom-shaped-stickers-decals/ | R2 | Jun 2 | good |

---

## Promotional Items

### /promotional-items LP

**Blade:** `resources/views/pages/promotional-items.blade.php`
**Summary:** Very strong. Hero, all carousels, all LP banners, card, and slide-L are R1/R2. slide-R is the only Initial remaining (cross-dir from custom-shirts/, no promo-items-specific replacement available without new images).

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-custom-mugs.jpg | public/images/mugs/ | R1 | May 11 | good |
| C1-1 | top5pct-koozies-joliet.jpg | public/images/can-koozies/ | R2 | Jun 2 | good |
| C1-2 | top5pct-custom-printed-mugs.jpg | public/images/mugs/ | R1 | May 11 | good |
| C1-3 | top5pct-personalized-koozies-joliet.jpg | public/images/can-koozies/ | R2 | Jun 2 | good |
| C1-4 | top5pct-picture-on-mugs.jpg | public/images/mugs/ | R1 | May 11 | good |
| LP-1 | top5pct-custom-coffee-mugs-in-joliet.jpg | public/images/mugs/ | R1 | May 11 | good |
| LP-2 | top5pct-can-koozies.jpg | public/images/can-koozies/ | R1 | May 11 | good |
| LP-3 | top5pct-custom-coffee-mugs.jpg | public/images/mugs/ | R1 | May 11 | good |
| LP-4 | top5pct-custom-koozies.jpg | public/images/can-koozies/ | R1 | May 11 | good |
| LP-5 | top5pct-custom-mugs-near-me.jpg | public/images/mugs/ | R1 | May 11 | good |
| LP-6 | top5pct-custom-can-koozies.jpg | public/images/can-koozies/ | R2 | Jun 2 | good |
| card | top5pct-printed-mugs.jpg | public/images/mugs/ | R2 | Jun 2 | good |
| C2-1 | top5pct-printed-mugs-old.jpg | public/images/mugs/ | R1 | May 11 | good |
| C2-2 | top5pct-long-lasting-graphic-shirts.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| C2-3 | top5pct-custom-flock-t-shirt-printing.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| C2-4 | top5pct-flock-hoodie-printing.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| slide-L | top5pct-flock-shirt-vinyl.jpg | public/images/custom-shirts/ | R2 | Jun 2 | good |
| slide-R | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | public/images/custom-shirts/ | Initial | Mar 16 | initial |

---

### promotional-items/mugs

**Blade:** `resources/views/pages/promotional-items/mugs.blade.php`
**Summary:** All R1/R2. C-4 repeats hero. slide-R repeats card-1. Two repeats to resolve.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-custom-mugs.jpg | public/images/mugs/ | R1 | May 11 | good |
| C-1 | top5pct-custom-coffee-mugs-in-joliet.jpg | public/images/mugs/ | R1 | May 11 | good |
| C-2 | top5pct-custom-coffee-mugs.jpg | public/images/mugs/ | R1 | May 11 | good |
| C-3 | top5pct-custom-mugs-near-me.jpg | public/images/mugs/ | R1 | May 11 | good |
| C-4 | top5pct-custom-mugs.jpg | public/images/mugs/ | R1 | May 11 | repeat |
| card-1 | top5pct-printed-mugs.jpg | public/images/mugs/ | R2 | Jun 2 | good |
| slide-L | top5pct-printed-mugs-old.jpg | public/images/mugs/ | R1 | May 11 | good |
| slide-R | top5pct-printed-mugs.jpg | public/images/mugs/ | R2 | Jun 2 | repeat |

> C-4 repeats hero (same file). slide-R repeats card-1 (same file). Check mugs/ for unused R1/R2 files.

---

### promotional-items/can-koozies

**Blade:** `resources/views/pages/promotional-items/can-koozies.blade.php`
**Summary:** All R1/R2. C-4 repeats hero. slide-R repeats C-1. Two repeats to resolve.

| slot | image | path | round | date | status |
|---|---|---|---|---|---|
| hero | top5pct-koozies-joliet.jpg | public/images/can-koozies/ | R2 | Jun 2 | good |
| C-1 | top5pct-can-koozies.jpg | public/images/can-koozies/ | R1 | May 11 | good |
| C-2 | top5pct-custom-koozies.jpg | public/images/can-koozies/ | R1 | May 11 | good |
| C-3 | top5pct-custom-can-koozies.jpg | public/images/can-koozies/ | R2 | Jun 2 | good |
| C-4 | top5pct-koozies-joliet.jpg | public/images/can-koozies/ | R2 | Jun 2 | repeat |
| card-1 | top5pct-personalized-koozies-joliet.jpg | public/images/can-koozies/ | R2 | Jun 2 | good |
| slide-L | top5pct-custom-can-koozies.jpg | public/images/can-koozies/ | R2 | Jun 2 | good |
| slide-R | top5pct-can-koozies.jpg | public/images/can-koozies/ | R1 | May 11 | repeat |

> C-4 repeats hero (same file). slide-R repeats C-1 (same file). Check can-koozies/ for unused R1/R2 files.

---

### promotional-items/towels, drink-coasters, tote-bags, mouse-pads

**Status: Placeholder pages.** No dedicated product dirs exist. All images pulled from mugs/. Replace with product-specific images when R4 imports arrive.

| page | hero | round | status |
|---|---|---|---|
| towels | top5pct-custom-mugs.jpg (mugs/) | R1 | placeholder |
| drink-coasters | top5pct-custom-mugs.jpg (mugs/) | R1 | placeholder |
| tote-bags | top5pct-custom-mugs.jpg (mugs/) | R1 | placeholder |
| mouse-pads | top5pct-custom-mugs.jpg (mugs/) | R1 | placeholder |

---

## /top5pct-merchandise LP

**Blade:** `resources/views/pages/top5pct-merchandise.blade.php`
**Note:** Full slot map and fix details in `docs/lp.image.review.md`. 3 slots need changes (C1-1, C1-2, slide-L). Not yet applied.

---

## Summary by Issue Type

### Pages with all-good status (no Initial, no repeats)

| Page |
|---|
| Home (/) |
| /custom-apparel LP |
| custom-apparel/dye-sublimation |

### Pages with only repeats (no Initial files)

| Page | Repeat slots |
|---|---|
| signs/window-signs | card-1 repeats C-1 |
| custom-apparel/printing-options/digital-vinyl | slide-L repeats C-4, slide-R repeats C-3 |
| custom-apparel/specialty-materials/vinyl | slide-L repeats card-1, slide-R repeats C-3 |
| promotional-items/mugs | C-4 repeats hero, slide-R repeats card-1 |
| promotional-items/can-koozies | C-4 repeats hero, slide-R repeats C-1 |
| stickers/standard-stickers | slide-L repeats hero (introduced Session 3) |

### Pages with Initial files (same-dir replacement available)

| Page | Initial slots | Same-dir replacement available? |
|---|---|---|
| signs/banners | slide-L, slide-R | Yes, banners/ has more R1 files |
| signs/sidewalk-signs | hero, card-1, slide-L | Yes |
| signs/sidewalk-signs-a-frame-signs | card-1, slide-L | Yes |
| signs/wall-signs | C-1, C-3, C-4, card-1, card-2, slide-L, slide-R | Partial (some wall-signs/ R3 unused) |
| signs/door-signs | C-1, slide-L, slide-R | Partial |
| signs/posters | C-4, card-set-1, slide-L | Yes |
| signs/table-runners | hero, card-set-1, slide-L | Yes |
| signs/table-cloths | C-1, C-4, slide-L | Partial |
| custom-apparel/dtf-transfers | slide-R | Yes (custom-shirts/ R1) |
| custom-apparel/printing-options/embroidery | slide-L | Yes |
| custom-apparel/printing-options/screen-printing | C-3, slide-R | Partial |
| custom-apparel/printing-options/rhinestone-apparel | slide-L, slide-R | Partial |
| custom-apparel/glitter-shirts | slide-L, slide-R | Partial |
| custom-apparel/vinyl-shirts | hero, slide-L, slide-R | Yes (custom-shirts/ R1) |
| custom-apparel/group-wear/corporate-wear-shirts | C-3, card-set-3, slide-L | Yes |
| custom-apparel/group-wear/reunion-shirts | C-2, card-3, slide-L, slide-R | Partial |
| vehicle-graphics/automobile-graphics | slide-L | Yes |
| vehicle-graphics/dot-decals | hero, slide-L, slide-R | Partial |
| vehicle-graphics/vehicle-magnets | slide-L | Yes |
| stickers/custom-shaped-stickers | slide-L | Yes |
| /promotional-items LP | slide-R | No (needs new images) |

### Pages with Initial files (directory exhausted, no same-dir replacement)

| Page | Exhausted dir | Blocked slots |
|---|---|---|
| signs/business-signs | business-signs/ | hero, card-1, card-2 (all 3 slots) |
| custom-apparel/glow-in-the-dark-shirts | glow-shirts/ | C-1, card-1, card-2, slide-L (4-way repeat) |
| custom-apparel/flock-shirts | flock-shirts/ | C-1, card-1, card-2, slide-L (4-way repeat) |
| custom-apparel/holographic-shirts | holographic-shirts/ | C-1, card-1, card-2, slide-L (4-way repeat) |
| custom-apparel/reflective-shirts | reflective-shirts/ | C-1, card-2, slide-L (3-way repeat) |
| custom-apparel/group-wear/spirit-wear-shirts | spirit-wear/ | C-1, card-set-1, card-set-2, card-set-3, slide-L |
| /vehicle-graphics LP | automobile-graphics/, vehicle-magnets/, dot-decals/ | hero, card, C2-1 through C2-4, slide-R |

### Pages needing a new image import (no product dir exists)

| Page | Missing dir | Notes |
|---|---|---|
| signs/floor-signs | floor-signs/ | All images borrowed from wall-signs/ |
| /signs LP | business-signs/ | C1-4 and C2-3 slots |
| promotional-items/towels | towels/ | Placeholder mugs images |
| promotional-items/drink-coasters | coasters/ | Placeholder mugs images |
| promotional-items/tote-bags | tote-bags/ | Placeholder mugs images |
| promotional-items/mouse-pads | mouse-pads/ | Placeholder mugs images |

---

*Created Jun 18, 2026. Source: docs/image.status.md. MNC in effect.*
