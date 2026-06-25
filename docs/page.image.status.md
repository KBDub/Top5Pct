# Page Image Status

Blade-verified image inventory. One page per section.
Columns: section/category (component + slot), image filename, full image path, round, file date, status.

Status codes: `good` | `initial` | `repeat` | `placeholder` | `undersized`

> **Permissions resolved — Jun 24, 2026.** All files in `public/images/` were set to 644 in one pass. File permissions are no longer an issue anywhere in the inventory. Status column entries that say "locked" reflect the state at the time of inventory (Jun 18, 2026) and are now historical only. The only remaining image issues are the three confirmed wrong-dir 404s and the incomplete blade wiring for unlocked unused files.

---

## Signs

### /signs/table-signs

#### /signs/table-signs/table-cloths

**Blade:** `resources/views/pages/signs/table-cloths.blade.php`
**URL:** `/signs/table-signs/table-cloths`
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-custom-table-cloth.jpg | public/images/table-cloths/top5pct-custom-table-cloth.jpg | R1 | Jun 8 | good |
| carousel C-1 — carousel-rotating-images | top5pct-personalized-tablecloth-joliet.jpg | public/images/table-cloths/top5pct-personalized-tablecloth-joliet.jpg | R1 | Jun 8 | good |
| carousel C-2 — carousel-rotating-images | top5pct-table-cloths.jpg | public/images/table-cloths/top5pct-table-cloths.jpg | R1 | Jun 8 | good |
| carousel C-3 — carousel-rotating-images | top5pct-table-cloth-8-feet.jpg | public/images/table-cloths/top5pct-table-cloth-8-feet.jpg | R3 | Jun 4 | good |
| carousel C-4 — carousel-rotating-images | top5pct-table-cloth-customized.jpg | public/images/table-cloths/top5pct-table-cloth-customized.jpg | R3 | Jun 4 | good |
| card-1 — card-image-with-text | top5pct-custom-table-cloth-business.jpg | public/images/table-cloths/top5pct-custom-table-cloth-business.jpg | R2 | Jun 8 | good |
| card-2 — card-image-with-text | top5pct-printed-table-cloths.jpg | public/images/table-cloths/top5pct-printed-table-cloths.jpg | R2 | Jun 8 | good |
| card-detailed image1 — card-detailed-info | top5pct-table-cloths-for-businesses.jpg | public/images/table-cloths/top5pct-table-cloths-for-businesses.jpg | R3 | Jun 4 | good |
| slide-L — card-banner-slide-in | top5pct-table-cloth-with-photos.jpg | public/images/table-cloths/top5pct-table-cloth-with-photos.jpg | R3 | Jun 4 | good |
| slide-R — card-banner-slide-in | top5pct-retractable-banner.jpg | public/images/banners/top5pct-retractable-banner.jpg | R1 | May 11 | good |

**Notes:**
- Carousel reduced from 6 to 4 images. C-5 (top5pct-table-cloths-for-businesses.jpg) moved to card-detailed image1. C-6 (top5pct-table-cloth-with-photos.jpg) moved to slide-L. Both Initial slots now replaced with R3 images.
- Retired: top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg (Initial, card-detailed) and top5pct-article-custom-table-cloths-joliet.jpg (Initial, 261x177px, slide-L). Both removed from active slots.
- slide-R uses a banners/ image (retractable banner product shot). Contextually appropriate for the "complete your event setup" slide.
- Unused in dir: top5pct-custom-table-cloth-joliet-crest-hill.jpg (Initial). Not needed, no open slots remain.

---

#### /signs/table-signs/table-runners

**Blade:** `resources/views/pages/signs/table-runners.blade.php`
**URL:** `/signs/table-signs/table-runners`
**Verified:** Jun 24, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | (new image) | public/images/table-runners/ | new | — | pending new image |
| carousel C-1 — carousel-rotating-images | top5pct-custom-table-runner-near-me.jpg | public/images/table-runners/top5pct-custom-table-runner-near-me.jpg | R3 | Jun 6 | good |
| carousel C-2 — carousel-rotating-images | top5pct-table-runner-company.jpg | public/images/table-runners/top5pct-table-runner-company.jpg | R3 | Jun 6 | good |
| carousel C-3 — carousel-rotating-images | top5pct-table-runner-covers.jpg | public/images/table-runners/top5pct-table-runner-covers.jpg | R3 | Jun 6 | good |
| carousel C-4 — carousel-rotating-images | top5pct-table-runners-customized.jpg | public/images/table-runners/top5pct-table-runners-customized.jpg | R3 | Jun 6 | good |
| card-1 — card-image-with-text | top5pct-table-runner-joliet.jpg | public/images/table-runners/top5pct-table-runner-joliet.jpg | R2 | Jun 2 | good |
| card-2 — card-image-with-text | top5pct-custom-table-runner.jpg | public/images/table-runners/top5pct-custom-table-runner.jpg | R1 | May 11 | good |
| card-2img image1 — card-2image-with-text | top5pct-custom-table-runners.jpg | public/images/table-runners/top5pct-custom-table-runners.jpg | R1 | May 11 | good |
| card-2img image2 — card-2image-with-text | top5pct-table-runner.jpg | public/images/table-runners/top5pct-table-runner.jpg | R1 | May 11 | good |
| card-3 — card-image-with-text | top5pct-table-runners.jpg | public/images/table-runners/top5pct-table-runners.jpg | R1 | May 11 | good |
| card-detailed image1 — card-detailed-info | (new image) | public/images/table-runners/ | new | — | pending new image |
| slide-R — card-banner-slide-in (direction right) | (new image) | public/images/table-runners/ | new | — | pending new image |
| slide-L — card-banner-slide-in (direction left) | top5pct-retractable-banner.jpg | public/images/banners/top5pct-retractable-banner.jpg | R1 | May 11 | good |

**Notes:**
- Carousel reduced from 8 to 4. Old C-1 through C-4 (all R1) moved to card slots. New C-1 through C-4 are the former C-5 through C-8 (all R3, Jun 6).
- card-2, card-2img image1, card-2img image2, card-3 now filled with the 4 former carousel R1 images. All Initial files retired from those slots.
- Hero, card-detailed image1, and slide-R each require one of the 10 new images. Filenames to be confirmed — placeholders shown above.
- Retired from active slots: top5pct-custom-table-cloth-business.jpg (hero, wrong topic), top5pct-custom-table-runner-joliet-new-lenox.jpg (card-2, Initial), top5pct-custom-table-runner-joliet-shorewood.jpg (card-2img image1 and slide-R, Initial), top5pct-custom-table-skirt-joliet-shorewood-plainfield.jpg (card-2img image2, Initial), top5pct-table-runner-popus-gourmet-popcorn-joliet.jpg (card-3, Initial), top5pct-article-custom-table-cloths-joliet.jpg (card-detailed, undersized 261x177px).
- Unused table-cloth images remain in dir and should be moved or deleted: top5pct-printed-table-cloths.jpg, top5pct-personalized-tablecloth-joliet.jpg, top5pct-table-cloths.jpg, top5pct-custom-table-cloth.jpg (all wrong product for this dir).
- slide-L (cross-dir from banners/) is contextually appropriate — no change.

---

### /signs/ground-signs

#### /signs/ground-signs/sidewalk-signs-a-frame-signs

**Blade:** `resources/views/pages/signs/sidewalk-signs-a-frame-signs.blade.php`
**URL:** `/signs/ground-signs/sidewalk-signs-a-frame-signs`
**Verified:** Jun 24, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-a-frame-sidewalk-signs.jpg | public/images/sidewalk-signs/top5pct-a-frame-sidewalk-signs.jpg | R2 | Jun 2 | good |
| carousel C-1 — carousel-rotating-images | top5pct-sidewalk-signs-plainfield.jpg | public/images/sidewalk-signs/top5pct-sidewalk-signs-plainfield.jpg | R3 | Jun 8 | good |
| carousel C-2 — carousel-rotating-images | top5pct-custom-a-frame-sidewalk-signs-joliet.jpg | public/images/sidewalk-signs/top5pct-custom-a-frame-sidewalk-signs-joliet.jpg | R1 | May 11 | good |
| carousel C-3 — carousel-rotating-images | top5pct-sidewalk-sign.jpg | public/images/sidewalk-signs/top5pct-sidewalk-sign.jpg | R1 | May 11 | good |
| carousel C-4 — carousel-rotating-images | top5pct-sidewalk-signs-joliet.jpg | public/images/sidewalk-signs/top5pct-sidewalk-signs-joliet.jpg | R2 | Jun 2 | good |
| card-1 — card-image-with-text | top5pct-sidewalk-sign-a-frame-cresthill.jpg | public/images/sidewalk-signs/top5pct-sidewalk-sign-a-frame-cresthill.jpg | R3 | Jun 9 | good |
| card-2 — card-image-with-text | top5pct-sidewalk-signage.jpg | public/images/sidewalk-signs/top5pct-sidewalk-signage.jpg | R2 | Jun 2 | good |
| card-detailed image1 — card-detailed-info | top5pct-a-frame-sign.jpg | public/images/sidewalk-signs/top5pct-a-frame-sign.jpg | R1 | May 11 | good |
| slide-R — card-banner-slide-in (direction right) | top5pct-a-frame-signs-joliet.jpg | public/images/sidewalk-signs/top5pct-a-frame-signs-joliet.jpg | R3 | Jun 9 | good |
| slide-L — card-banner-slide-in (direction left) | top5pct-mesh-construction-banner.jpg | public/images/banners/top5pct-mesh-construction-banner.jpg | R2 | Jun 2 | good |

**Notes:**
- card-detailed image1 upgraded from Initial (top5pct-article-a-frame-sidewalk-signs.jpg) to R1 (top5pct-a-frame-sign.jpg), redistributed from sidewalk-signs page removal.
- All R1/R2/R3 images from the former sidewalk-signs page are now placed on either this page or yard-signs.
- Two Initial files from sidewalk-signs dir retired: top5pct-a-frame-sidewalk-sign-joliet.jpg and top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg (redistributed to yard-signs slide-L, Initial swap).
- Other unused Initial files in dir can be archived: top5pct-sidewalk-a-frames-joliet-shorewood.jpg, top5pct-banner-a-frame-sidewalk-signs-joliet-romeoville.jpg.
- slide-L cross-dir from banners/ is contextually appropriate. No change.
- Page content note: schema, title, heading, and FAQs all reference "Parking Signs." The images show sidewalk/a-frame signs. URL and content topic are misaligned. Not an image issue but worth a separate review.

---

#### /signs/ground-signs/sidewalk-signs

**Status: PAGE REMOVED — Jun 24, 2026**
All R1/R2/R3 images redistributed to sidewalk-signs-a-frame-signs and yard-signs pages. Initial-only files retired.

| image | round | redistributed to |
|---|---|---|
| top5pct-sidewalk-signage.jpg | R2 | a-frame page — card-2 (already placed) |
| top5pct-a-frame-sign.jpg | R1 | a-frame page — card-detailed image1 |
| top5pct-custom-a-frame-sidewalk-signs-joliet.jpg | R1 | a-frame page — carousel C-2 (already placed) |
| top5pct-sidewalk-sign.jpg | R1 | a-frame page — carousel C-3 (already placed) |
| top5pct-sidewalk-signs-joliet.jpg | R2 | a-frame page — carousel C-4 (already placed) |
| top5pct-a-frame-signs-joliet.jpg | R3 | a-frame page — slide-R (already placed) |
| top5pct-sidewalk-sign-a-frame-cresthill.jpg | R3 | a-frame page — card-1 (already placed) |
| top5pct-sidewalk-signs-plainfield.jpg | R3 | a-frame page — carousel C-1 (already placed) |
| top5pct-a-frame-sidewalk-signs.jpg | R2 | a-frame page — hero (already placed) |
| top5pct-sidewalk-signs-joliet-old.jpg | R1 | yard-signs page — card-2 |
| top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg | Initial | yard-signs page — slide-L |
| top5pct-article-a-frame-sidewalk-signs.jpg | Initial | retired |
| top5pct-a-frame-sidewalk-sign-joliet.jpg | Initial | retired |
| top5pct-business-signs-joliet-shorewood-crest-hill.jpg | Initial | left in business-signs/ dir, not redistributed |

---

#### /signs/ground-signs/yard-signs

**Blade:** `resources/views/pages/signs/yard-signs.blade.php`
**URL:** `/signs/ground-signs/yard-signs`
**Verified:** Jun 24, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-custom-yard-signs-joliet.jpg | public/images/yard-signs/top5pct-custom-yard-signs-joliet.jpg | R1 | May 11 | good |
| carousel C-1 — carousel-rotating-images | top5pct-yard-signs-joliet.jpg | public/images/yard-signs/top5pct-yard-signs-joliet.jpg | R1 | May 11 | good |
| carousel C-2 — carousel-rotating-images | top5pct-yard-signs-plainfield.jpg | public/images/yard-signs/top5pct-yard-signs-plainfield.jpg | R3 | Jun 7 | good |
| carousel C-3 — carousel-rotating-images | top5pct-yard-signs-rockdale.jpg | public/images/yard-signs/top5pct-yard-signs-rockdale.jpg | R3 | Jun 7 | good |
| carousel C-4 — carousel-rotating-images | top5pct-yard-signs-shorewood.jpg | public/images/yard-signs/top5pct-yard-signs-shorewood.jpg | R3 | Jun 7 | good |
| card-1 — card-image-with-text | top5pct-yard-signs.jpg | public/images/yard-signs/top5pct-yard-signs.jpg | R1 | May 11 | good |
| card-2 — card-image-with-text | top5pct-sidewalk-signs-joliet-old.jpg | public/images/sidewalk-signs/top5pct-sidewalk-signs-joliet-old.jpg | R1 | May 11 | good |
| card-2img image1 — card-2image-with-text | top5pct-lawn-signs.jpg | public/images/yard-signs/top5pct-lawn-signs.jpg | R1 | May 11 | good |
| card-2img image2 — card-2image-with-text | top5pct-yard-sign-joliet.jpg | public/images/yard-signs/top5pct-yard-sign-joliet.jpg | R1 | May 11 | good |
| card-detailed image1 — card-detailed-info | top5pct-article-yard-signs-buy.jpg | public/images/yard-signs/top5pct-article-yard-signs-buy.jpg | Initial | Mar 16 | initial |
| slide-L — card-banner-slide-in (direction left) | top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg | public/images/sidewalk-signs/top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg | Initial | Mar 16 | initial |
| slide-R — card-banner-slide-in (direction right) | top5pct-retractable-banner.jpg | public/images/banners/top5pct-retractable-banner.jpg | R1 | May 11 | good |

**Notes:**
- card-2 upgraded from Initial to R1: top5pct-yard-signs-joliet-plainfied-new-lenox.jpg retired, replaced by top5pct-sidewalk-signs-joliet-old.jpg (R1, redistributed from sidewalk-signs page removal). Image is in sidewalk-signs/ dir.
- slide-L swapped to a different Initial: top5pct-yard-signs-joliet-shorewood-romeoville.jpg retired, replaced by top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg (Initial, redistributed from sidewalk-signs page removal). Image is in sidewalk-signs/ dir.
- card-detailed image1 (top5pct-article-yard-signs-buy.jpg, Initial) still pending a proper yard-sign-specific replacement from R4 batch.
- slide-R cross-dir from banners/ is contextually appropriate. No change.
- Dir anomaly unchanged: top5pct-table-signs-joliet-shorewood-plainfield.jpg (Mar 16, Initial) sits in the yard-signs/ dir. Wrong product category, not in blade.

---

### /signs/business-signs

#### /signs/business-signs/posters

**Blade:** `resources/views/pages/signs/posters.blade.php`
**URL:** `/signs/business-signs/posters`
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-posters-printed-joliet.jpg | public/images/posters/top5pct-posters-printed-joliet.jpg | R2 | Jun 2 | good |
| carousel C-1 — carousel-rotating-images | top5pct-big-posters-joliet.jpg | public/images/posters/top5pct-big-posters-joliet.jpg | R2 | Jun 2 | good |
| carousel C-2 — carousel-rotating-images | top5pct-custom-posters.jpg | public/images/posters/top5pct-custom-posters.jpg | R2 | Jun 2 | good |
| carousel C-3 — carousel-rotating-images | top5pct-poster-board-joliet.jpg | public/images/posters/top5pct-poster-board-joliet.jpg | R2 | Jun 2 | good |
| card-1 — card-image-with-text | top5pct-poster-printing-joliet-shorewood-romeoville.jpg | public/images/posters/top5pct-poster-printing-joliet-shorewood-romeoville.jpg | Initial | Mar 16 | initial |
| card-2 — card-image-with-text | top5pct-poster-maker-joliet-shorewood-plainfield.jpg | public/images/posters/top5pct-poster-maker-joliet-shorewood-plainfield.jpg | Initial | Mar 16 | initial |
| card-2img-1 — card-2image-with-text | top5pct-poster-board-joliet-shorewood-romeoville.jpg | public/images/posters/top5pct-poster-board-joliet-shorewood-romeoville.jpg | Initial | Mar 16 | initial |
| card-2img-2 — card-2image-with-text | top5pct-postermywall-joliet-shorewood-crest-hill.jpg | public/images/posters/top5pct-postermywall-joliet-shorewood-crest-hill.jpg | Initial | Mar 16 | initial |
| card-3 — card-image-with-text | top5pct-poster-store-joliet-shorewood-plainfield.jpg | public/images/posters/top5pct-poster-store-joliet-shorewood-plainfield.jpg | Initial | Mar 16 | initial |
| card-detailed image1 — card-detailed-info | top5pct-article-posters-joliet-pic1.jpg | public/images/posters/top5pct-article-posters-joliet-pic1.jpg | Initial | Mar 16 | initial |
| slide-R — card-banner-slide-in (direction right) | top5pct-poster-printing-joliet-shorewood-romeoville.jpg | public/images/posters/top5pct-poster-printing-joliet-shorewood-romeoville.jpg | Initial | Mar 16 | repeat |
| slide-L — card-banner-slide-in (direction left) | top5pct-retractable-banner.jpg | public/images/banners/top5pct-retractable-banner.jpg | R1 | May 11 | good |

**Notes:**
- Hard split: hero and all 3 carousel slots are R2 (Jun 2). Every card slot from card-1 down is Initial (Mar 16). The page was partially updated in round 2 but the lower half was never touched.
- slide-R repeats card-1: both use `top5pct-poster-printing-joliet-shorewood-romeoville.jpg` (Initial, 51KB, locked).
- 6 unique Initial files in use: card-1, card-2, card-2img-1, card-2img-2, card-3, card-detailed. All locked Mar 16.
- card-detailed image1 is 35KB, the smallest locked Initial file seen so far in the inventory.
- slide-L cross-dir from banners/: slide text is "Posters, Banners, and More" so a banner image is contextually intentional. R1 quality.
- Dir has no R1 or R3 files at all — only R2 (4 files, Jun 2) and Initial (6 files, Mar 16). There are no unused newer images sitting in the dir that could swap into the card slots.
- Unused Initial locked file in dir (not in blade): `top5pct-banner-poster-maker-joliet-romeoville-shorewood.jpg` (Mar 16, 177KB). Has "banner" in the name, likely a crossover or misnamed file.

---

#### /signs/business-signs/door-signs

**Blade:** `resources/views/pages/signs/door-signs.blade.php`
**URL:** `/signs/business-signs/door-signs`
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-door-signage.jpg | public/images/door-signs/top5pct-door-signage.jpg | R1 | May 11 | good |
| carousel C-1 — carousel-rotating-images | top5pct-door-lettering-vinyl.jpg | public/images/door-signs/top5pct-door-lettering-vinyl.jpg | R3 | Jun 7 | good |
| carousel C-2 — carousel-rotating-images | top5pct-business-door-signs.jpg | public/images/door-signs/top5pct-business-door-signs.jpg | R2 | Jun 2 | good |
| carousel C-3 — carousel-rotating-images | top5pct-door-sign-installers.jpg | public/images/door-signs/top5pct-door-sign-installers.jpg | R2 | Jun 2 | good |
| carousel C-4 — carousel-rotating-images | top5pct-door-wraps-joliet.jpg | public/images/door-signs/top5pct-door-wraps-joliet.jpg | R3 | Jun 8 | good |
| card-1 — card-image-with-text | top5pct-vinyl-door-lettering.jpg | public/images/door-signs/top5pct-vinyl-door-lettering.jpg | R2 | Jun 2 | good |
| card-2 — card-image-with-text | top5pct-vinyl-door-signs.jpg | public/images/door-signs/top5pct-vinyl-door-signs.jpg | R2 | Jun 2 | good |
| card-detailed image1 — card-detailed-info | top5pct-door-signs-joliet-shorewood-crest-hill.jpg | public/images/door-signs/top5pct-door-signs-joliet-shorewood-crest-hill.jpg | Initial | Mar 16 | initial |
| slide-L — card-banner-slide-in (direction left) | top5pct-business-door-signs.jpg | public/images/door-signs/top5pct-business-door-signs.jpg | R2 | Jun 2 | repeat |
| slide-R — card-banner-slide-in (direction right) | top5pct-wall-sign-for-businesses.jpg | public/images/wall-signs/top5pct-wall-sign-for-businesses.jpg | R3 | Jun 6 | good |

**Notes:**
- slide-L repeats carousel C-2: both use `top5pct-business-door-signs.jpg` (R2, Jun 2, 486KB).
- Only 1 Initial slot: card-detailed image1 (`top5pct-door-signs-joliet-shorewood-crest-hill.jpg`, 60KB, locked Mar 16). The cleanest page in the inventory so far by issue count.
- slide-R cross-dir from wall-signs/ (R3, Jun 6). Slide text is "Wall Graphics and Window Signs, Same Fast Turnaround" so a wall-signs image is contextually intentional and well rounded.
- hero is R1 (May 11). All 8 files in the dir are in use. No unused images available for a hero upgrade.
- Filename note: carousel C-1 is `top5pct-door-lettering-vinyl.jpg` (R3) and card-1 is `top5pct-vinyl-door-lettering.jpg` (R2). Similar names, different files, both unique. No conflict.

---

#### /signs/business-signs/floor-signs

**Blade:** `resources/views/pages/signs/floor-signs.blade.php`
**URL:** `/signs/business-signs/floor-signs`
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-wall-signs-for-businesses.jpg | public/images/wall-signs/top5pct-wall-signs-for-businesses.jpg | R3 | Jun 6 | wrong topic |
| carousel C-1 — carousel-rotating-images | top5pct-wall-signs-mishas-gaming-lounge.jpg | public/images/wall-signs/top5pct-wall-signs-mishas-gaming-lounge.jpg | R1 | May 11 | wrong topic |
| carousel C-2 — carousel-rotating-images | top5pct-wall-sign-for-businesses.jpg | public/images/wall-signs/top5pct-wall-sign-for-businesses.jpg | R3 | Jun 6 | wrong topic |
| carousel C-3 — carousel-rotating-images | top5pct-wall-decals-bedroom.jpg | public/images/wall-signs/top5pct-wall-decals-bedroom.jpg | R3 | Jun 6 | wrong topic |
| carousel C-4 — carousel-rotating-images | top5pct-wall-wraps.jpg | public/images/wall-signs/top5pct-wall-wraps.jpg | R3 | Jun 8 | wrong topic |
| card-1 — card-image-with-text | top5pct-wall-signs.jpg | public/images/wall-signs/top5pct-wall-signs.jpg | R3 | Jun 8 | wrong topic |
| card-2 — card-image-with-text | top5pct-article-window-wall-signs.jpg | public/images/wall-signs/top5pct-article-window-wall-signs.jpg | R3 | Jun 8 | wrong topic, locked |
| card-detailed image1 — card-detailed-info | top5pct-banner-wall-decal-door-signs-joliet.jpg | public/images/wall-signs/top5pct-banner-wall-decal-door-signs-joliet.jpg | R3 | Jun 8 | wrong topic, locked |
| slide-R — card-banner-slide-in (direction right) | top5pct-wall-decals-joliet.jpg | public/images/wall-signs/top5pct-wall-decals-joliet.jpg | R3 | Jun 8 | wrong topic, locked |
| slide-L — card-banner-slide-in (direction left) | top5pct-window-signs-for-businesses-joliet.jpg | public/images/window-signs/top5pct-window-signs-for-businesses-joliet.jpg | R3 | Jun 8 | wrong topic |

**Notes:**
- Critical finding: public/images/floor-signs/ dir is completely empty (0 files). Every image on this page is pulled from wall-signs/ (9 slots) or window-signs/ (1 slot). There is no floor-signs photography on this page at all.
- All 10 slots are wrong topic by definition — this page is about floor graphics but every image shows wall signs, wall decals, or window signs.
- 3 of the wall-signs/ cross-dir images are also locked despite Jun 8 dates: `top5pct-article-window-wall-signs.jpg` (41KB), `top5pct-wall-decals-joliet.jpg` (63KB), `top5pct-banner-wall-decal-door-signs-joliet.jpg` (135KB). These are small files with restricted permissions, same pattern as Initial files despite the newer date.
- carousel C-1 renamed from top5pct-wall-signs-old.jpg to top5pct-wall-signs-mishas-gaming-lounge.jpg. R1 quality, 496KB, unlocked. "Old" suffix removed, name now reflects actual content.
- Slide-L cross-dir from window-signs/: slide text is "Window Signs and Wall Wraps Available Too" — contextually acceptable as a cross-sell slide even though it is still wrong topic for a floor-signs page.
- This page requires dedicated floor-signs photography before any of its image slots can be marked good. All 10 slots need new images from the correct product category.

---

#### /signs/business-signs/wall-signs

**Blade:** `resources/views/pages/signs/wall-signs.blade.php`
**URL:** `/signs/business-signs/wall-signs`
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-wall-signs.jpg | public/images/wall-signs/top5pct-wall-signs.jpg | R3 | Jun 8 | good |
| carousel C-1 — carousel-rotating-images | top5pct-wall-signs-mishas-gaming-lounge.jpg | public/images/wall-signs/top5pct-wall-signs-mishas-gaming-lounge.jpg | R1 | May 11 | good |
| carousel C-2 — carousel-rotating-images | top5pct-wall-wraps.jpg | public/images/wall-signs/top5pct-wall-wraps.jpg | R3 | Jun 8 | good |
| carousel C-3 — carousel-rotating-images | top5pct-wall-decals-bedroom.jpg | public/images/wall-signs/top5pct-wall-decals-bedroom.jpg | R3 | Jun 6 | good |
| carousel C-4 — carousel-rotating-images | top5pct-wall-sign-for-businesses.jpg | public/images/wall-signs/top5pct-wall-sign-for-businesses.jpg | R3 | Jun 6 | good |
| card-1 — card-image-with-text | top5pct-banner-wall-decal-door-signs-joliet.jpg | public/images/wall-signs/top5pct-banner-wall-decal-door-signs-joliet.jpg | R3 | Jun 8 | good |
| card-2 — card-image-with-text | top5pct-wall-signs-for-businesses.jpg | public/images/wall-signs/top5pct-wall-signs-for-businesses.jpg | R3 | Jun 6 | good |
| card-detailed image1 — card-detailed-info | top5pct-wall-signs-joliet.jpg | public/images/wall-signs/top5pct-wall-signs-joliet.jpg | R3 | Jun 8 | good |
| slide-R — card-banner-slide-in (direction right) | top5pct-window-signs-joliet.jpg | public/images/window-signs/top5pct-window-signs-joliet.jpg | R2 | Jun 2 | good |
| slide-L — card-banner-slide-in (direction left) | top5pct-window-graphics-joliet.jpg | public/images/window-signs/top5pct-window-graphics-joliet.jpg | R3 | Jun 7 | good |

**Notes:**
- Carousel reduced from 5 to 4 Jun 24: C-5 (top5pct-wall-signs-for-businesses.jpg) removed. card-2 repeat resolved.
- card-1 repeat fixed Jun 24: replaced top5pct-wall-wraps.jpg (repeat of C-2) with top5pct-banner-wall-decal-door-signs-joliet.jpg (R3). No repeats remain.
- carousel C-1 renamed from top5pct-wall-signs-old.jpg to top5pct-wall-signs-mishas-gaming-lounge.jpg Jun 24. R1, 496KB. Name reflects actual content (Misha's Gaming Lounge).
- Both slides are cross-dir from window-signs/. Slide texts are "Turn Your Walls Into a Brand Statement" (slide-R) and "Window Graphics and Door Signs Available Too" (slide-L). Cross-sell intent is clear and contextually appropriate.
- Dir note: 2 files in wall-signs/ dir are used by the floor-signs page but not this blade: top5pct-article-window-wall-signs.jpg (41KB), top5pct-wall-decals-joliet.jpg (63KB). top5pct-banner-wall-decal-door-signs-joliet.jpg is now in this blade (card-1).

---

#### /signs/business-signs/window-signs

**Blade:** `resources/views/pages/signs/window-signs.blade.php`
**URL:** `/signs/business-signs/window-signs`
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-window-signage.jpg | public/images/window-signs/top5pct-window-signage.jpg | R2 | Jun 2 | good |
| carousel C-1 — carousel-rotating-images | top5pct-business-window-signs.jpg | public/images/window-signs/top5pct-business-window-signs.jpg | R1 | May 11 | good |
| carousel C-2 — carousel-rotating-images | top5pct-custom-window-signs.jpg | public/images/window-signs/top5pct-custom-window-signs.jpg | R1 | May 11 | good |
| carousel C-3 — carousel-rotating-images | top5pct-window-door-signs.jpg | public/images/window-signs/top5pct-window-door-signs.jpg | R1 | May 11 | good |
| carousel C-4 — carousel-rotating-images | top5pct-window-signs-joliet-slammers.jpg | public/images/window-signs/top5pct-window-signs-joliet-slammers.jpg | R1 | May 11 | good |
| carousel C-5 — carousel-rotating-images | top5pct-window-business-signs.jpg | public/images/window-signs/top5pct-window-business-signs.jpg | R3 | Jun 7 | good |
| carousel C-6 — carousel-rotating-images | top5pct-window-graphics-joliet.jpg | public/images/window-signs/top5pct-window-graphics-joliet.jpg | R3 | Jun 7 | good |
| carousel C-7 — carousel-rotating-images | top5pct-window-sign-installers-joliet.jpg | public/images/window-signs/top5pct-window-sign-installers-joliet.jpg | R3 | Jun 7 | good |
| carousel C-8 — carousel-rotating-images | top5pct-window-signs-cresthill.jpg | public/images/window-signs/top5pct-window-signs-cresthill.jpg | R3 | Jun 7 | good |
| carousel C-9 — carousel-rotating-images | top5pct-window-signs.jpg | public/images/window-signs/top5pct-window-signs.jpg | R3 | Jun 7 | good |
| carousel C-10 — carousel-rotating-images | top5pct-window-vinyl-sign-installers.jpg | public/images/window-signs/top5pct-window-vinyl-sign-installers.jpg | R3 | Jun 7 | good |
| card-1 — card-image-with-text | top5pct-window-signs-joliet.jpg | public/images/window-signs/top5pct-window-signs-joliet.jpg | R2 | Jun 2 | good |
| card-2 — card-image-with-text | top5pct-joliet-slammers-window-signs-joliet.jpg | public/images/window-signs/top5pct-joliet-slammers-window-signs-joliet.jpg | R2 | Jun 2 | good |
| card-detailed image1 — card-detailed-info | top5pct-window-signs-joliet-business-signage.jpg | public/images/window-signs/top5pct-window-signs-joliet-business-signage.jpg | R1 | May 11 | good |
| slide-L — card-banner-slide-in (direction left) | top5pct-window-signs-for-businesses-joliet.jpg | public/images/window-signs/top5pct-window-signs-for-businesses-joliet.jpg | R3 | Jun 8 | good |
| slide-R — card-banner-slide-in (direction right) | top5pct-wall-signs-for-businesses.jpg | public/images/wall-signs/top5pct-wall-signs-for-businesses.jpg | R3 | Jun 6 | good |

**Notes:**
- Carousel reduced from 11 to 10 Jun 24: C-11 (top5pct-window-signs-for-businesses-joliet.jpg) dropped. slide-L keeps that image and is no longer a repeat.
- card-detailed image1 fixed Jun 24: replaced wall-signs cross-dir image (top5pct-banner-wall-decal-door-signs-joliet.jpg) with top5pct-window-signs-joliet-business-signage.jpg (R1, renamed from top5pct-window-signs-joliet-old.jpg).
- 10-image carousel spans R1 (May 11) and R3 (Jun 7) rounds, all unique files. No gaps.
- slide-R cross-dir from wall-signs/ (R3, Jun 6). Slide text is "Also Install Wall Graphics and Floor Signs" — cross-sell intent is clear.
- 3 unused files in window-signs/ dir not in blade: top5pct-window-cling-decal-joliet-shorewood.jpg (54KB), top5pct-window-decal-joliet-shorewood-rockdale.jpg (58KB), top5pct-window-decals-joliet-shorewood-crest-hill.jpg (72KB). All Mar 16.

---

#### /signs/business-signs/banners

**Blade:** `resources/views/pages/signs/banners.blade.php`
**URL:** `/signs/business-signs/banners`
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-sports-banners.jpg | public/images/banners/top5pct-sports-banners.jpg | R2 | Jun 2 | good |
| carousel C-1 — carousel-rotating-images | top5pct-banners-and-signs.jpg | public/images/banners/top5pct-banners-and-signs.jpg | R1 | May 11 | good |
| carousel C-2 — carousel-rotating-images | top5pct-banners-near-me.jpg | public/images/banners/top5pct-banners-near-me.jpg | R1 | May 11 | good |
| carousel C-3 — carousel-rotating-images | top5pct-big-banners.jpg | public/images/banners/top5pct-big-banners.jpg | R1 | May 11 | good |
| carousel C-4 — carousel-rotating-images | top5pct-custom-retractable-banners-joliet.jpg | public/images/banners/top5pct-custom-retractable-banners-joliet.jpg | R1 | May 11 | good |
| card-1 — card-image-with-text | top5pct-custom-vinyl-banners.jpg | public/images/banners/top5pct-custom-vinyl-banners.jpg | R1 | May 11 | good |
| card-2 — card-image-with-text | top5pct-graduation-banners.jpg | public/images/banners/top5pct-graduation-banners.jpg | R1 | May 11 | good |
| card-2img-1 image1 — card-2image-with-text | top5pct-retractable-banner.jpg | public/images/banners/top5pct-retractable-banner.jpg | R1 | May 11 | good |
| card-2img-1 image2 — card-2image-with-text | top5pct-banners-for-trade-shows.jpg | public/images/banners/top5pct-banners-for-trade-shows.jpg | R2 | Jun 2 | good |
| card-2img-2 image1 — card-2image-with-text | top5pct-mesh-construction-banner.jpg | public/images/banners/top5pct-mesh-construction-banner.jpg | R2 | Jun 2 | good |
| card-2img-2 image2 — card-2image-with-text | top5pct-portable-banners.jpg | public/images/banners/top5pct-portable-banners.jpg | R2 | Jun 2 | good |
| card-detailed image1 — card-detailed-info | top5pct-retractable-banners-plainfield.jpg | public/images/banners/top5pct-retractable-banners-plainfield.jpg | R2 | Jun 2 | good |
| slide-L — card-banner-slide-in (direction left) | top5pct-retractable-banners-plainfield.jpg | public/images/banners/top5pct-retractable-banners-plainfield.jpg | R2 | Jun 2 | repeat |
| slide-R — card-banner-slide-in (direction right) | top5pct-yard-signs-joliet.jpg | public/images/yard-signs/top5pct-yard-signs-joliet.jpg | R1 | May 11 | good |

**Notes:**
- First page in the inventory with zero Initial slots. All images are R1 or R2.
- slide-L repeats card-detailed: both use `top5pct-retractable-banners-plainfield.jpg` (R2, Jun 2, 296KB). Intentional, left as repeat.
- slide-R is a cross-sell to yard signs (cross-dir from yard-signs/). Updated Jun 24, was a repeat of card-2img-2 image2.
- slide-R href points to /signs/ground-signs/yard-signs.
- Carousel spans R1 only (C-1 through C-4 are all May 11). Hero is R2 but carousel was not updated in round 2. No R3 files exist in this dir.
- 8 unused Initial files in dir (none in blade): `top5pct-article-vinyl-banners-pic1.jpg` (22KB, the smallest file in the entire inventory), `top5pct-birthday-banner-joliet-shorewood-plainfield.jpg` (40KB), `top5pct-birthday-banners-joliet-shorewood-crest-hill.jpg` (42KB), `top5pct-banners-business-joliet-shorewood-crest-hill.jpg` (47KB), `top5pct-team-banners-joliet-shorewood-crest-hill.jpg` (47KB), `top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg` (51KB), `top5pct-family-reunion-banners-joliet-crest-hill.jpg` (64KB), `top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg` (89KB). These cover birthday, team, reunion, and business banner categories that are discussed on the page but not shown.

---

#### /vehicle-graphics/dot-decals

**Blade:** `resources/views/pages/vehicle-graphics/dot-decals.blade.php`
**URL:** `/vehicle-graphics/dot-decals`
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-truck-lettering-joliet-shorewood-rockdale.jpg | public/images/dot-decals/top5pct-truck-lettering-joliet-shorewood-rockdale.jpg | Initial | Mar 17 | initial, locked |
| carousel C-1 — carousel-rotating-images | top5pct-dot-decals-joliet.jpg | public/images/dot-decals/top5pct-dot-decals-joliet.jpg | R1 | May 11 | good |
| carousel C-2 — carousel-rotating-images | top5pct-dot-semi-truck-decals.jpg | public/images/dot-decals/top5pct-dot-semi-truck-decals.jpg | R1 | May 11 | good |
| carousel C-3 — carousel-rotating-images | top5pct-dot-truck-decals-joliet.jpg | public/images/dot-decals/top5pct-dot-truck-decals-joliet.jpg | R1 | May 11 | good |
| carousel C-4 — carousel-rotating-images | top5pct-custom-dot-decals-for-trucks-in-joliet.jpg | public/images/dot-decals/top5pct-custom-dot-decals-for-trucks-in-joliet.jpg | R2 | Jun 2 | good |
| carousel C-5 — carousel-rotating-images | top5pct-DOT-truck-decals-rockdale.jpg | public/images/dot-decals/top5pct-DOT-truck-decals-rockdale.jpg | R3 | Jun 7 | good |
| card-1 — card-image-with-text | top5pct-custom-dot-truck-signs-illinois.jpg | public/images/dot-decals/top5pct-custom-dot-truck-signs-illinois.jpg | R2 | Jun 2 | good |
| card-2 — card-image-with-text | top5pct-dot-decals-semi-truck.jpg | public/images/dot-decals/top5pct-dot-decals-semi-truck.jpg | R2 | Jun 2 | good |
| card-2img image1 — card-2image-with-text | top5pct-dot-lettering-joliet.jpg | public/images/dot-decals/top5pct-dot-lettering-joliet.jpg | R2 | Jun 2 | good |
| card-2img image2 — card-2image-with-text | top5pct-dot-magnets.jpg | public/images/dot-decals/top5pct-dot-magnets.jpg | R2 | Jun 2 | good |
| card-3 — card-image-with-text | top5pct-trucking-dot-decals-in-joliet.jpg | public/images/dot-decals/top5pct-trucking-dot-decals-in-joliet.jpg | R2 | Jun 2 | good |
| card-detailed image1 — card-detailed-info | top5pct-article-DOT-decals-vinyl-lettering.jpg | public/images/dot-decals/top5pct-article-DOT-decals-vinyl-lettering.jpg | Initial | Mar 17 | initial, locked |
| slide-L — card-banner-slide-in (direction left) | top5pct-DOT-stickers-joliet-shorewood-rockdale.jpg | public/images/dot-decals/top5pct-DOT-stickers-joliet-shorewood-rockdale.jpg | Initial | Mar 17 | initial, locked |
| slide-R — card-banner-slide-in (direction right) | top5pct-truck-sign-magnets-joliet.jpg | public/images/vehicle-magnets/top5pct-truck-sign-magnets-joliet.jpg | R2 | Jun 2 | good |

**Notes:**
- 3 Initial locked slots in active blade positions: hero (40KB), card-detailed (53KB), slide-L (104KB). Highest count of Initial locked slots in any page inventoried so far. Hero is the most visible slot on the page and it is the weakest image (40KB, Mar 17, locked).
- No repeats — all 14 images are unique across the page.
- Carousel spans R1 through R3 — the full round range. C-5 is the only R3 image on the page.
- slide-R cross-dir from vehicle-magnets/ (R2, Jun 2, 364KB). Slide text is "Magnets, Decals, and Full Wraps, One-Stop Shop" — cross-sell is intentional and contextually appropriate.
- `top5pct-trucking-dot-decals-in-joliet.jpg` (card-3, R2, Jun 2, 133KB) is the lowest-size unlocked image in this blade. Still unlocked and usable.
- 4 unused locked Initial files in dir (none in blade): `top5pct-banner-DOT-stickers-joliet-shorewood-channahon.jpg` (113KB), `top5pct-trucking-logo-joliet-shorewood-rockdale.jpg` (45KB), `top5pct-dot-decals-joliet-shorewood-rockdale.jpg` (63KB), `top5pct-trucking-logo-joliet-shorewood-crest-hill.jpg` (92KB).

---

#### /vehicle-graphics/vehicle-magnets

**Blade:** `resources/views/pages/vehicle-graphics/vehicle-magnets.blade.php`
**URL:** `/vehicle-graphics/vehicle-magnets`
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-magnet-vehicle-signs-joliet.jpg | public/images/vehicle-magnets/top5pct-magnet-vehicle-signs-joliet.jpg | R2 | Jun 2 | good |
| carousel C-1 — carousel-rotating-images | top5pct-automobile-magnets-joliet.jpg | public/images/vehicle-magnets/top5pct-automobile-magnets-joliet.jpg | R1 | May 11 | good |
| carousel C-2 — carousel-rotating-images | top5pct-car-magnets-joliet.jpg | public/images/vehicle-magnets/top5pct-car-magnets-joliet.jpg | R1 | May 11 | good |
| carousel C-3 — carousel-rotating-images | top5pct-car-magnets.jpg | public/images/vehicle-magnets/top5pct-car-magnets.jpg | R1 | May 11 | good |
| carousel C-4 — carousel-rotating-images | top5pct-car-sign-magnets-joliet.jpg | public/images/vehicle-magnets/top5pct-car-sign-magnets-joliet.jpg | R1 | May 11 | good |
| card-1 — card-image-with-text | top5pct-custom-car-magnets-in-joliet.jpg | public/images/vehicle-magnets/top5pct-custom-car-magnets-in-joliet.jpg | R1 | May 11 | good |
| card-2 — card-image-with-text | top5pct-custom-car-magnets.jpg | public/images/vehicle-magnets/top5pct-custom-car-magnets.jpg | R1 | May 11 | good |
| card-2img image1 — card-2image-with-text | top5pct-vehicle-magnets-joliet.jpg | public/images/vehicle-magnets/top5pct-vehicle-magnets-joliet.jpg | R1 | May 11 | good |
| card-2img image2 — card-2image-with-text | top5pct-vehicle-magnets.jpg | public/images/vehicle-magnets/top5pct-vehicle-magnets.jpg | R1 | May 11 | good |
| card-detailed image1 — card-detailed-info | top5pct-car-decals-white-oaks-library.jpg | public/images/vehicle-magnets/top5pct-car-decals-white-oaks-library.jpg | R2 | Jun 2 | good |
| slide-R — card-banner-slide-in (direction right) | top5pct-car-magnets-vehicle-magnets-joliet.jpg | public/images/vehicle-magnets/top5pct-car-magnets-vehicle-magnets-joliet.jpg | Initial | Mar 17 | initial, locked |
| slide-L — card-banner-slide-in (direction left) | top5pct-vehicle-graphics.jpg | public/images/automobile-graphics/top5pct-vehicle-graphics.jpg | R1 | May 11 | good |

**Notes:**
- slide-R is Initial locked (45KB, Mar 17). Only locked slot on this page. Dir has 3 unused unlocked R1/R2 images that could replace it immediately: `top5pct-joliet-car-magnets.jpg` (651KB), `top5pct-truck-sign-magnets-joliet.jpg` (364KB), `top5pct-yard-signs-near-me.jpg` (514KB).
- slide-L cross-dir from automobile-graphics/ (R1, May 11, 413KB). Slide text "Full Vehicle Wraps Available Too, Ask Us" — cross-sell appropriate.
- No repeats — all 12 images are unique.
- No R3 files in this dir. Carousel is all R1; hero and card-detailed are R2.
- `top5pct-yard-signs-near-me.jpg` (Jun 2, R2, 514KB) is in the vehicle-magnets/ dir but is named for yard signs. Not in this blade. Off-topic file name for this dir.
- `top5pct-truck-sign-magnets-joliet.jpg` (Jun 2, R2, 364KB) is in this dir but not used here — it is the slide-R on the dot-decals page.
- 5 unused locked Initial files in dir (none in blade): `top5pct-article-car-magnets-truck-magnets.jpg` (22KB), `top5pct-large-magnets-magnets-near-me-joliet.jpg` (40KB), `top5pct-car-magnets-truck-magnets-joliet.jpg` (44KB), `top5pct-business-magnets-car-magnets-joliet.jpg` (52KB), `top5pct-banner-car-magnets-joliet-shorewood-crest-hill.jpg` (63KB).

---

#### /vehicle-graphics/automobile-graphics

**Blade:** `resources/views/pages/vehicle-graphics/automobile-graphics.blade.php`
**URL:** `/vehicle-graphics/automobile-graphics`
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-auto-window-wraps.jpg | public/images/automobile-graphics/top5pct-auto-window-wraps.jpg | R2 | Jun 2 | good |
| carousel C-1 — carousel-rotating-images | top5pct-car-wraps.jpg | public/images/automobile-graphics/top5pct-car-wraps.jpg | R1 | May 11 | good |
| carousel C-2 — carousel-rotating-images | top5pct-pickup-truck-graphics.jpg | public/images/automobile-graphics/top5pct-pickup-truck-graphics.jpg | R1 | May 11 | good |
| carousel C-3 — carousel-rotating-images | top5pct-trailer-decal-graphics.jpg | public/images/automobile-graphics/top5pct-trailer-decal-graphics.jpg | R1 | May 11 | good |
| carousel C-4 — carousel-rotating-images | top5pct-trailer-decals.jpg | public/images/automobile-graphics/top5pct-trailer-decals.jpg | R1 | May 11 | good |
| carousel C-5 — carousel-rotating-images | top5pct-car-graphics-installers-joliet.jpg | public/images/automobile-graphics/top5pct-car-graphics-installers-joliet.jpg | R3 | Jun 6 | good |
| carousel C-6 — carousel-rotating-images | top5pct-decals-for-work-trucks.jpg | public/images/automobile-graphics/top5pct-decals-for-work-trucks.jpg | R3 | Jun 6 | good |
| carousel C-7 — carousel-rotating-images | top5pct-car-wrap-decals-joliet.jpg | public/images/automobile-graphics/top5pct-car-wrap-decals-joliet.jpg | R3 | Jun 9 | good |
| carousel C-8 — carousel-rotating-images | top5pct-vehicle-graphics-near-me.jpg | public/images/automobile-graphics/top5pct-vehicle-graphics-near-me.jpg | R3 | Jun 6 | good |
| carousel C-9 — carousel-rotating-images | top5pct-vehicle-signs-joliet.jpg | public/images/automobile-graphics/top5pct-vehicle-signs-joliet.jpg | R3 | Jun 6 | good |
| card-1 — card-image-with-text | top5pct-van-graphics-decals.jpg | public/images/automobile-graphics/top5pct-van-graphics-decals.jpg | R1 | May 11 | good |
| card-2 — card-image-with-text | top5pct-vecal-decals.jpg | public/images/automobile-graphics/top5pct-vecal-decals.jpg | R1 | May 11 | good |
| card-2img image1 — card-2image-with-text | top5pct-vehicle-graphics.jpg | public/images/automobile-graphics/top5pct-vehicle-graphics.jpg | R1 | May 11 | good |
| card-2img image2 — card-2image-with-text | top5pct-vehicle-window-graphics-in-joliet.jpg | public/images/automobile-graphics/top5pct-vehicle-window-graphics-in-joliet.jpg | R1 | May 11 | good |
| card-3 — card-image-with-text | top5pct-vehicle-window-graphics-joliet.jpg | public/images/automobile-graphics/top5pct-vehicle-window-graphics-joliet.jpg | R1 | May 11 | good |
| card-detailed image1 — card-detailed-info | top5pct-article-car-wraps-vinyl-lettering.jpg | public/images/automobile-graphics/top5pct-article-car-wraps-vinyl-lettering.jpg | Initial | Mar 17 | initial, locked |
| slide-L — card-banner-slide-in (direction left) | top5pct-vinyl-lettering-car-graphics-joliet-crest-hill.jpg | public/images/automobile-graphics/top5pct-vinyl-lettering-car-graphics-joliet-crest-hill.jpg | Initial | Mar 17 | initial, locked |
| slide-R — card-banner-slide-in (direction right) | top5pct-truck-sign-magnets-joliet.jpg | public/images/vehicle-magnets/top5pct-truck-sign-magnets-joliet.jpg | R2 | Jun 2 | good |

**Notes:**
- 18 slots — largest page in the inventory so far, tied with window-signs (17).
- card-detailed is Initial locked (27KB, Mar 17). Same article-slot pattern seen on dot-decals and other pages.
- slide-L is Initial locked (67KB, Mar 17). Dir has 3 unused unlocked R1/R2 files that could replace it.
- No repeats — all 18 images are unique within this page.
- 9-image carousel spans R1 and R3 directly, skipping R2. C-1 through C-4 are R1 (May 11); C-5 through C-9 are R3 (Jun 6 and Jun 9). No R2 files in carousel.
- slide-R cross-dir from vehicle-magnets/ (R2, Jun 2, 364KB). Slide text "Car Graphics, Magnets, and Wraps, All From One Shop" — cross-sell appropriate. This same file also serves as slide-L on the vehicle-magnets page, making it the only cross-dir file serving two pages from opposite directions.
- `top5pct-vecal-decals.jpg` (card-2, R1, May 11) — "vecal" appears to be a typo in the filename ("decal" transposed). File is unlocked and in active use. Not a functional issue.
- `top5pct-vehicle-graphics.jpg` (card-2img image1) is also the slide-L on the vehicle-magnets page — cross-page reuse, not a within-page repeat.
- 5 unused locked Initial files in dir (none in blade): `top5pct-banner-vinyl-lettering-car-wraps-joliet.jpg` (248KB, notably the largest Initial file seen across all dirs), `top5pct-truck-decal-joliet-shorewood-rockdale.jpg` (49KB), `top5pct-boat-decals-joliet-shorewood-crest-hill.jpg` (61KB), `top5pct-car-wraps-vinyl-lettering-joliet-shorewood.jpg` (63KB), `top5pct-vinyl-lettering-car-graphics-joliet-shorewood.jpg` (67KB).

---

#### /custom-apparel/group-wear/corporate-wear-shirts

**Blade:** `resources/views/pages/custom-apparel/group-wear/corporate-wear-shirts.blade.php`
**URL:** `/custom-apparel/group-wear/corporate-wear-shirts`
**Verified:** Jun 24, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-custom-business-shirts.jpg | public/images/corporate-wear/top5pct-custom-business-shirts.jpg | R1 | May 11 | good |
| carousel C-1 — carousel-rotating-images | top5pct-custom-apron-joliet.jpg | public/images/corporate-wear/top5pct-custom-apron-joliet.jpg | R1 | May 11 | good |
| carousel C-2 — carousel-rotating-images | top5pct-custom-aprons-joliet.jpg | public/images/corporate-wear/top5pct-custom-aprons-joliet.jpg | R1 | May 11 | good |
| carousel C-3 — carousel-rotating-images | top5pct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg | public/images/corporate-wear/top5pct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg | Initial | Mar 16 | initial |
| carousel C-4 — carousel-rotating-images | top5pct-custom-pocket-shirt-joliet.jpg | public/images/corporate-wear/top5pct-custom-pocket-shirt-joliet.jpg | R1 | May 11 | good |
| card-1 — card-image-with-text | top5pct-landscaping-clothing-joliet.jpg | public/images/corporate-wear/top5pct-landscaping-clothing-joliet.jpg | R1 | May 11 | good |
| card-2 — card-image-with-text | top5pct-lawn-care-clothing.jpg | public/images/corporate-wear/top5pct-lawn-care-clothing.jpg | R1 | May 11 | good |
| card-2img image1 — card-2image-with-text | top5pct-safety-work-gear-joliet.jpg | public/images/corporate-wear/top5pct-safety-work-gear-joliet.jpg | R1 | May 11 | good |
| card-2img image2 — card-2image-with-text | top5pct-custom-company-apparel.jpg | public/images/corporate-wear/top5pct-custom-company-apparel.jpg | R2 | Jun 2 | good |
| card-3 — card-image-with-text | top5pct-custom-cap-hat-joliet-shorewood-rockdale.jpg | public/images/corporate-wear/top5pct-custom-cap-hat-joliet-shorewood-rockdale.jpg | Initial | Mar 16 | initial |
| card-detailed image1 — card-detailed-info | top5pct-custom-corporate-t-shirts-joliet-shorewood.jpg | public/images/corporate-wear/top5pct-custom-corporate-t-shirts-joliet-shorewood.jpg | Initial | Mar 16 | initial |
| card-detailed image2 — card-detailed-info | top5pct-custom-hoodie-pullover-joliet-shorewood.jpg | public/images/corporate-wear/top5pct-custom-hoodie-pullover-joliet-shorewood.jpg | Initial | Mar 16 | initial |
| slide-R — card-banner-slide-in (direction right) | top5pct-truck-sign-magnets-joliet.jpg | public/images/vehicle-magnets/top5pct-truck-sign-magnets-joliet.jpg | R2 | Jun 2 | good |
| slide-L — card-banner-slide-in (direction left) | top5pct-volleyball-team-uniforms-joliet.jpg | public/images/spirit-wear/top5pct-volleyball-team-uniforms-joliet.jpg | R2 | Jun 2 | good |

**Notes:**
- Nav note: site navigation incorrectly places this page under /signs/business-signs. Known issue, leave as-is.
- 3 Initial slots remain in active blade positions: carousel C-3 (125KB), card-3 (40KB), card-detailed image1 (44KB), card-detailed image2 (40KB). card-detailed image1 and image2 replaced Jun 24 — were 14KB and 15KB, the two smallest files seen in any active slot across the entire inventory.
- slide-R fixed Jun 24: replaced same-dir Initial file (42KB) with vehicle-magnets cross-sell (top5pct-truck-sign-magnets-joliet.jpg, R2, Jun 2, 356KB). href points to /vehicle-graphics/vehicle-magnets.
- card-detailed has two image slots (image1 and image2) — first page in the inventory with a dual-image card-detailed.
- carousel C-3 is the only carousel slot confirmed to be Initial across all pages inventoried. All other carousel images are R1 or newer.
- C-1 (apron, 419KB) and C-2 (aprons, 383KB) are different files and different sizes but both are apron photos — visual check recommended.
- No repeats — all 14 images are unique.
- No R3 files in this dir. One R2 file (top5pct-custom-company-apparel.jpg, Jun 2). All other active non-Initial images are R1.
- slide-L cross-dir from spirit-wear/ (R2, Jun 2, 592KB). Slide text "Employee Uniforms and Team Apparel, Ask About Group Pricing" — cross-sell appropriate.
- 1 unused Initial file in dir (none in blade): `top5pct-custom-polo-shirts-joliet-shorewood-crest-hill.jpg` (30KB). The hoodie and corporate-t-shirts files moved into card-detailed slots Jun 24.

---

#### /custom-apparel/group-wear/spirit-wear-shirts

**Blade:** `resources/views/pages/custom-apparel/group-wear/spirit-wear-shirts.blade.php`
**URL:** `/custom-apparel/group-wear/spirit-wear-shirts`
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-spirit-wear-joliet.jpg | public/images/spirit-wear/top5pct-spirit-wear-joliet.jpg | R1 | May 11 | good |
| carousel C-1 — carousel-rotating-images | top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg | public/images/spirit-wear/top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg | Initial | Mar 16 | initial, locked |
| carousel C-2 — carousel-rotating-images | top5pct-spirit-wear-shirts.jpg | public/images/spirit-wear/top5pct-spirit-wear-shirts.jpg | R1 | May 11 | good |
| carousel C-3 — carousel-rotating-images | top5pct-spirit-wear-clothing.jpg | public/images/spirit-wear/top5pct-spirit-wear-clothing.jpg | R2 | Jun 2 | good |
| carousel C-4 — carousel-rotating-images | top5pct-volleyball-team-uniforms-joliet.jpg | public/images/spirit-wear/top5pct-volleyball-team-uniforms-joliet.jpg | R2 | Jun 2 | good |
| carousel C-5 — carousel-rotating-images | top5pct-spirit-wear-volleyball-track.jpg | public/images/spirit-wear/top5pct-spirit-wear-volleyball-track.jpg | R2 | Jun 3 | good |
| card-1 — card-image-with-text | top5pct-joliet-west-spirit-wear-hoodie-shorewood.jpg | public/images/spirit-wear/top5pct-joliet-west-spirit-wear-hoodie-shorewood.jpg | Initial | Mar 16 | initial, locked |
| card-2 — card-image-with-text | top5pct-spiritwear-fanwear-joliet-plainfield-shorewood.jpg | public/images/spirit-wear/top5pct-spiritwear-fanwear-joliet-plainfield-shorewood.jpg | Initial | Mar 16 | initial, locked |
| card-2img image1 — card-2image-with-text | top5pct-sator-sanchez-school-shirt-joliet-crest-hill.jpg | public/images/spirit-wear/top5pct-sator-sanchez-school-shirt-joliet-crest-hill.jpg | Initial | Mar 16 | initial, locked |
| card-2img image2 — card-2image-with-text | top5pct-plainfield-south-high-school-hoodie.jpg | public/images/spirit-wear/top5pct-plainfield-south-high-school-hoodie.jpg | Initial | Mar 16 | initial, locked |
| card-3 — card-image-with-text | top5pct-bowling-shirts-joliet-shorewood-crest-hill.jpg | public/images/spirit-wear/top5pct-bowling-shirts-joliet-shorewood-crest-hill.jpg | Initial | Mar 16 | initial, locked |
| card-detailed image1 — card-detailed-info | top5pct-article-spirit-wear-pic1.jpg | public/images/spirit-wear/top5pct-article-spirit-wear-pic1.jpg | Initial | Mar 17 | initial, locked |
| card-detailed image2 — card-detailed-info | top5pct-article-fan-wear-pic2.jpg | public/images/spirit-wear/top5pct-article-fan-wear-pic2.jpg | Initial | Mar 17 | initial, locked |
| slide-L — card-banner-slide-in (direction left) | top5pct-plainfield-south-high-school-hoodie.jpg | public/images/spirit-wear/top5pct-plainfield-south-high-school-hoodie.jpg | Initial | Mar 16 | initial, locked, repeat |
| slide-R — card-banner-slide-in (direction right) | top5pct-family-reunion-tees.jpg | public/images/reunion-shirts/top5pct-family-reunion-tees.jpg | R3 | Jun 8 | good |

**Notes:**
- 9 Initial locked slots in active blade positions — highest count in the entire inventory by a wide margin. 60% of the page is locked. Only the carousel (4 of 5 images), the hero, and slide-R are good.
- slide-L is both Initial locked AND repeats card-2img image2 — the only slot in the inventory confirmed as both locked and a within-page repeat simultaneously. Both are `top5pct-plainfield-south-high-school-hoodie.jpg` (Initial, Mar 16, 73KB).
- carousel C-1 is locked (88KB). Second consecutive apparel page with a locked carousel slot.
- Both card-detailed images are Initial locked (17KB and 14KB). Same two-slot card-detailed pattern seen on corporate-wear-shirts.
- Dir has only 3 unlocked images beyond the hero that could serve as replacements: `top5pct-spirit-wear-clothing.jpg`, `top5pct-volleyball-team-uniforms-joliet.jpg`, `top5pct-spirit-wear-volleyball-track.jpg`. All 3 are already in the carousel. New uploads are required to fix the 9 locked slots without pulling carousel images into card slots.
- `top5pct-sator-sanchez-school-shirt-joliet-crest-hill.jpg` (card-2img image1, Initial, Mar 16, 267KB) is the largest Initial file in active use across the entire inventory.
- `top5pct-spirit-wear-volleyball-track.jpg` is dated Jun 3 — the only Jun 3 date seen in the inventory so far. Not Jun 2 and not Jun 4. Likely a same-batch upload that arrived one day late.
- slide-R cross-dir from reunion-shirts/ (R3, Jun 8, 113KB). Slide text "Reunion Shirts, Corporate Wear, and More Available" — cross-sell appropriate.
- No R3 files in this dir.

---

#### /custom-apparel/group-wear/reunion-shirts

**Blade:** `resources/views/pages/custom-apparel/group-wear/reunion-shirts.blade.php`
**URL:** `/custom-apparel/group-wear/reunion-shirts`
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-family-reunion-shirts-joliet.jpg | public/images/reunion-shirts/top5pct-family-reunion-shirts-joliet.jpg | R1 | May 11 | good |
| carousel C-1 — carousel-rotating-images | top5pct-class-reunion-shirt.jpg | public/images/reunion-shirts/top5pct-class-reunion-shirt.jpg | R1 | May 11 | good |
| carousel C-2 — carousel-rotating-images | top5pct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg | public/images/reunion-shirts/top5pct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg | Initial | Mar 16 | initial, locked |
| carousel C-3 — carousel-rotating-images | top5pct-family-reunion-tshirts-in-joliet.jpg | public/images/reunion-shirts/top5pct-family-reunion-tshirts-in-joliet.jpg | R1 | May 11 | good |
| carousel C-4 — carousel-rotating-images | top5pct-group-shirts.jpg | public/images/reunion-shirts/top5pct-group-shirts.jpg | R1 | May 11 | good |
| carousel C-5 — carousel-rotating-images | top5pct-family-reunion-tees.jpg | public/images/reunion-shirts/top5pct-family-reunion-tees.jpg | R3 | Jun 8 | good |
| card-1 — card-image-with-text | top5pct-reunion-group-shirts.jpg | public/images/reunion-shirts/top5pct-reunion-group-shirts.jpg | R1 | May 11 | good |
| card-2 — card-image-with-text | top5pct-reunion-shirts.jpg | public/images/reunion-shirts/top5pct-reunion-shirts.jpg | R1 | May 11 | good |
| card-2img-A image1 — card-2image-with-text (1st) | top5pct-class-reunion-shirt-templates.gif | public/images/reunion-shirts/top5pct-class-reunion-shirt-templates.gif | Initial | Mar 16 | initial, locked |
| card-2img-A image2 — card-2image-with-text (1st) | top5pct-class-reunion-shirt-templates2.gif | public/images/reunion-shirts/top5pct-class-reunion-shirt-templates2.gif | Initial | Mar 16 | initial, locked |
| card-2img-B image1 — card-2image-with-text (2nd) | top5pct-family-reunion-shirts-joliet-crest-hill.jpg | public/images/reunion-shirts/top5pct-family-reunion-shirts-joliet-crest-hill.jpg | Initial | Mar 16 | initial, locked |
| card-2img-B image2 — card-2image-with-text (2nd) | top5pct-family-reunion-shirts-joliet-romeoville.jpg | public/images/reunion-shirts/top5pct-family-reunion-shirts-joliet-romeoville.jpg | Initial | Mar 16 | initial, locked |
| card-3 — card-image-with-text | top5pct-family-reunion-shirts-joliet-plainfield.jpg | public/images/reunion-shirts/top5pct-family-reunion-shirts-joliet-plainfield.jpg | Initial | Mar 16 | initial, locked |
| card-detailed image1 — card-detailed-info | top5pct-article-family-reunion-pic1.jpg | public/images/reunion-shirts/top5pct-article-family-reunion-pic1.jpg | Initial | Mar 16 | initial, locked |
| card-detailed image2 — card-detailed-info | top5pct-article-family-reunion-pic2.jpg | public/images/reunion-shirts/top5pct-article-family-reunion-pic2.jpg | Initial | Mar 16 | initial, locked |
| slide-R — card-banner-slide-in (direction right) | top5pct-family-reunion-shirts-joliet-romeoville.jpg | public/images/reunion-shirts/top5pct-family-reunion-shirts-joliet-romeoville.jpg | Initial | Mar 16 | initial, locked, repeat |
| slide-L — card-banner-slide-in (direction left) | top5pct-t-shirt-maker-article-pic1.jpg | public/images/custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg | Initial | Mar 17 | initial, locked, cross-dir |

**Notes:**
- 17 slots total — most on any page inventoried. 11 are Initial locked (65%) — highest locked percentage in the entire inventory, edging past spirit-wear-shirts at 60%.
- Two consecutive card-2image-with-text sections (card-2img-A and card-2img-B) — first page in the inventory with that pattern.
- card-2img-A holds the first GIF files found in active blade slots anywhere in the inventory. Both template GIFs are Initial locked at 9KB each — among the smallest active-slot files seen. File extension is .gif, not .jpg. Section heading is "Reunion Shirt Templates" — content is intentional template preview art.
- slide-R is both Initial locked AND repeats card-2img-B image2 — same file (`top5pct-family-reunion-shirts-joliet-romeoville.jpg`, Mar 16, 77KB) used in two active blade positions. Both are locked. Slide text: "Order Your Reunion Shirts Today."
- slide-L is both Initial locked AND cross-dir — from `custom-shirts/` (Mar 17, 10KB, locked). First cross-dir slide in the inventory that is also Initial locked. Every other cross-dir slide has been R2 or R3 and unlocked. Slide text: "Need Custom Shirts for Another Event? We've Got You."
- Filename anomaly: carousel C-2 is `top5pct-banner-banner-family-reunion-shirts...` — double "banner" in the name. Only such filename seen in the inventory.
- The carousel is mostly clean (4 of 5 good). The carousel C-2 slot is the lone locked carousel image — second locked carousel slot found (after spirit-wear C-1).
- hero and both primary cards (card-1, card-2) are all R1, May 11. Strong above-the-fold coverage.
- 2 unused Initial locked files in dir not referenced in blade: `top5pct-westinghouse-class-reunion-shirt-joliet-shorewood.jpg` (43KB) and `top5pct-class-reunion-shirts-joliet-shorewood.jpg` (55KB).
- No R2 or R3 files in this dir except `top5pct-family-reunion-tees.jpg` (R3, Jun 8, 113KB) — the same file confirmed cross-dir on the spirit-wear-shirts page.

---

#### /custom-apparel/specialty-materials/reflective-shirts

**Blade:** `resources/views/pages/custom-apparel/reflective-shirts.blade.php`
**URL:** `/custom-apparel/specialty-materials/reflective-shirts`
**Note:** Blade is one level up from the URL path (`custom-apparel/` not `custom-apparel/specialty-materials/`). Route must be mapped separately.
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-reflective-shirts-gold.jpg | public/images/reflective-shirts/top5pct-reflective-shirts-gold.jpg | R3 | Jun 8 | good |
| carousel C-1 — carousel-rotating-images | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | public/images/reflective-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | R3 | Jun 8 | R3, locked |
| carousel C-2 — carousel-rotating-images | top5pct-custom-reflective-hoodies.jpg | public/images/reflective-shirts/top5pct-custom-reflective-hoodies.jpg | R3 | Jun 8 | good |
| carousel C-3 — carousel-rotating-images | top5pct-reflective-shirts.jpg | public/images/reflective-shirts/top5pct-reflective-shirts.jpg | R3 | Jun 8 | good |
| carousel C-4 — carousel-rotating-images | top5pct-reflective-shirts-shorewood.jpg | public/images/reflective-shirts/top5pct-reflective-shirts-shorewood.jpg | R3 | Jun 8 | good |
| card-1 — card-image-with-text | top5pct-reflective-vinyl-shirts-plainfield.jpg | public/images/reflective-shirts/top5pct-reflective-vinyl-shirts-plainfield.jpg | R3 | Jun 8 | good |
| card-2 — card-image-with-text | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | public/images/reflective-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | R3 | Jun 8 | R3, locked, repeat |
| card-detailed image1 — card-detailed-info (single image) | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | public/images/reflective-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | R3 | Jun 8 | R3, locked, repeat |
| slide-L — card-banner-slide-in (direction left) | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | public/images/reflective-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | R3 | Jun 8 | R3, locked, repeat |
| slide-R — card-banner-slide-in (direction right) | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | public/images/custom-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | Initial | Mar 16 | initial, locked, cross-dir |

**Notes:**
- 10 slots total. 5 good, 5 locked.
- `top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` fills four active blade positions — carousel C-1, card-2, card-detailed image1, and slide-L. Highest single-file repeat count found in the entire inventory. All four uses are the same locked file (R3, Jun 8, 26KB).
- The locked file is R3 (Jun 8), not Initial (Mar 16-17). First R3-locked file found anywhere in the inventory. The entire dir was uploaded on Jun 8 in one batch — 5 of 6 files were set unlocked, this one was left locked. Permissions appear to have been missed on upload day.
- card-detailed-info has only one image parameter (`image1` and `alt1` — no `image2`/`alt2`). First single-image card-detailed-info found in the inventory.
- Dir is entirely R3 (Jun 8). No Initial, R1, or R2 files anywhere in this dir. This is a new, purpose-built dir with no historical files.
- slide-R is cross-dir from `custom-shirts/` (Initial, Mar 16, 29KB, locked). Second cross-dir slide confirmed as both cross-dir AND Initial locked. Slide text: "Glow in the Dark or Reflective, Both Built for Visibility" — cross-sell appropriate.
- 5 unlocked R3 files in the dir (hero, C-2, C-3, C-4, card-1) provide good above-the-fold and carousel coverage. The locked file is the only gap, but it blocks four positions.
- No unused files in dir — all 6 files are referenced in the blade.

---

#### /custom-apparel/specialty-materials/foil-shirts

**Blade:** `resources/views/pages/custom-apparel/foil-shirts.blade.php`
**URL:** `/custom-apparel/specialty-materials/foil-shirts`
**Note:** Blade is one level up from URL path (`custom-apparel/` not `custom-apparel/specialty-materials/`). Route mapped separately.
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-foil-gold-t-shirt.jpg | public/images/custom-shirts/top5pct-foil-gold-t-shirt.jpg | R2 | Jun 2 | good, cross-dir |
| carousel C-1 — carousel-rotating-images | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | public/images/custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | Initial | Mar 16 | initial, locked, cross-dir |
| carousel C-2 — carousel-rotating-images | top5pct-gold-foil-printed-shirts.jpg | public/images/custom-shirts/top5pct-gold-foil-printed-shirts.jpg | R2 | Jun 2 | good, cross-dir |
| carousel C-3 — carousel-rotating-images | top5pct-foil-custom-t-shirts.jpg | public/images/custom-shirts/top5pct-foil-custom-t-shirts.jpg | R2 | Jun 2 | good, cross-dir |
| carousel C-4 — carousel-rotating-images | top5pct-custom-foil-polo.jpg | public/images/custom-shirts/top5pct-custom-foil-polo.jpg | R2 | Jun 2 | good, cross-dir |
| carousel C-5 — carousel-rotating-images | top5pct-foil-shirts.jpg | public/images/foil-shirts/top5pct-foil-shirts.jpg | R3 | Jun 8 | good |
| carousel C-6 — carousel-rotating-images | top5pct-foil-custom-shirts-joliet.jpg | public/images/foil-shirts/top5pct-foil-custom-shirts-joliet.jpg | R3 | Jun 8 | good |
| carousel C-7 — carousel-rotating-images | top5pct-foil-custom-apparel-shirts-joliet.jpg | public/images/foil-shirts/top5pct-foil-custom-apparel-shirts-joliet.jpg | R3 | Jun 9 | good |
| carousel C-8 — carousel-rotating-images | top5pct-foil-shirts-cresthill.jpg | public/images/foil-shirts/top5pct-foil-shirts-cresthill.jpg | R3 | Jun 8 | good |
| carousel C-9 — carousel-rotating-images | top5pct-foil-shirt-shorewood.jpg | public/images/foil-shirts/top5pct-foil-shirt-shorewood.jpg | R3 | Jun 8 | good |
| card-1 — card-image-with-text | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | public/images/custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | Initial | Mar 16 | initial, locked, cross-dir, repeat |
| card-2 — card-image-with-text | top5pct-custom-wedding-foil-shirts.jpg | public/images/custom-shirts/top5pct-custom-wedding-foil-shirts.jpg | R2 | Jun 2 | good, cross-dir |
| card-detailed image1 — card-detailed-info (single image) | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | public/images/custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | Initial | Mar 16 | initial, locked, cross-dir, repeat |
| slide-R — card-banner-slide-in (direction right) | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | public/images/custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | Initial | Mar 16 | initial, locked, cross-dir, repeat |
| slide-L — card-banner-slide-in (direction left) | top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | public/images/custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | Initial | Mar 16 | wrong dir, 404 |

**Notes:**
- 15 slots total. 10 good, 4 initial locked (same file across all 4), 1 wrong-dir 404.
- 9-image carousel — largest carousel found in the entire inventory. C-1 is the only locked carousel slot. C-2 through C-9 are all good (8 of 9 clean).
- `top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg` from `custom-shirts/` (Initial, Mar 16, 36KB, locked) fills four active slots — carousel C-1, card-1, card-detailed image1, and slide-R. Same four-position repeat pattern as reflective-shirts, but that page's repeat file was R3-locked (Jun 8); this one is Initial locked (Mar 16).
- slide-L is a confirmed wrong-dir 404 — first in the inventory. The blade references `/images/custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` but that file does not exist in `custom-shirts/`. The file `top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` exists in `glitter-shirts/` (Initial, Mar 16, 30KB, locked) — wrong dir and locked. Slide text: "Combine Foil With Glitter or Rhinestone for Custom Apparel."
- card-detailed-info is single-image (only `image1` and `alt1` — no `image2`). Second consecutive specialty-materials page with a single-image card-detailed (after reflective-shirts).
- The page's own dir (`foil-shirts/`) only covers carousel C-5 through C-9. The hero, both cards, card-detailed, and both slides all pull from `custom-shirts/`. This is the most cross-dir-dependent page found so far.
- `foil-shirts/` dir has zero locked files — all 5 are R3, unlocked. The problems are entirely in the cross-dir `custom-shirts/` references.
- Jun 9 timestamp on carousel C-7 (`top5pct-foil-custom-apparel-shirts-joliet.jpg`, 283KB) — second Jun 9 date seen in the inventory, after spirit-wear's Jun 3 outlier. The rest of the foil-shirts/ dir is Jun 8.
- `custom-shirts/` is a large shared dir (70+ files) spanning Initial through R3. It serves as a shared pool for multiple specialty pages.

---

#### /custom-apparel/specialty-materials/holographic-shirts

**Blade:** `resources/views/pages/custom-apparel/holographic-shirts.blade.php`
**URL:** `/custom-apparel/specialty-materials/holographic-shirts`
**Note:** Blade is one level up from URL path (`custom-apparel/` not `custom-apparel/specialty-materials/`). Route mapped separately.
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-holographic-vinyl-hoodie-foil.jpg | public/images/holographic-shirts/top5pct-holographic-vinyl-hoodie-foil.jpg | R3 | Jun 8 | good |
| carousel C-1 — carousel-rotating-images | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | public/images/holographic-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | R3 | Jun 8 | R3, locked |
| carousel C-2 — carousel-rotating-images | top5pct-holographic-vinyl-hoodie-foil.jpg | public/images/holographic-shirts/top5pct-holographic-vinyl-hoodie-foil.jpg | R3 | Jun 8 | good, repeat |
| carousel C-3 — carousel-rotating-images | top5pct-holographic-baby-shirts.jpg | public/images/holographic-shirts/top5pct-holographic-baby-shirts.jpg | R3 | Jun 8 | good |
| card-1 — card-image-with-text | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | public/images/holographic-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | R3 | Jun 8 | R3, locked, repeat |
| card-2 — card-image-with-text | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | public/images/holographic-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | R3 | Jun 8 | R3, locked, repeat |
| card-detailed image1 — card-detailed-info (single image) | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | public/images/holographic-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | R3 | Jun 8 | R3, locked, repeat |
| slide-L — card-banner-slide-in (direction left) | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | public/images/holographic-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | R3 | Jun 8 | R3, locked, repeat |
| slide-R — card-banner-slide-in (direction right) | top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | public/images/custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | Initial | Mar 16 | initial, locked, cross-dir |

**Notes:**
- 9 slots total. 3 good (including 1 good repeat), 6 locked (5 same-file R3 repeats + 1 Initial locked cross-dir). 67% locked — highest locked percentage in the entire inventory.
- `top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` (R3, Jun 8, 27KB, locked) fills five active slots — carousel C-1, card-1, card-2, card-detailed image1, and slide-L. Highest single-file repeat count in the entire inventory, surpassing the previous record of four (reflective-shirts and foil-shirts).
- The dir has only 3 files total covering 9 slots. With only 3 files and 9 slot demands, heavy repetition is structural, not incidental. Even if the locked file were unlocked, the same image would appear in 5 of 9 visible positions.
- carousel C-2 repeats the hero image (`top5pct-holographic-vinyl-hoodie-foil.jpg`, R3, 539KB, unlocked). Both are good but a visitor scrolling from hero into the carousel sees the same image immediately. Marked "good, repeat" — permissions fine, visual duplication only.
- card-detailed-info is single-image (only `image1` and `alt1`). Third consecutive specialty-materials page with single-image card-detailed (after reflective-shirts and foil-shirts). This appears to be the standard for this page type.
- slide-R is cross-dir from `custom-shirts/` — `top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg` (Initial, Mar 16, 36KB, locked). This is the exact same file used as slide-R on the foil-shirts page and as carousel C-1 and three other slots on the foil-shirts page. One Initial-locked file in `custom-shirts/` is now confirmed feeding locked cross-dir slots on at least two separate pages.
- Only 3 unique images serve all 9 slots (the locked holographic file, the hoodie-foil file twice, and the baby-shirts file). Adding the cross-dir slide-R, only 4 unique images are referenced total.
- No unused files in dir — all 3 files are referenced in the blade.

---

#### /custom-apparel/specialty-materials/brick-shirts

**Blade:** `resources/views/pages/custom-apparel/brick-shirts.blade.php`
**URL:** `/custom-apparel/specialty-materials/brick-shirts`
**Note:** Blade is one level up from URL path (`custom-apparel/` not `custom-apparel/specialty-materials/`). Route mapped separately.
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-brick-vinyl-hoodies.jpg | public/images/custom-shirts/top5pct-brick-vinyl-hoodies.jpg | R1 | May 11 | good, cross-dir |
| carousel C-1 — carousel-rotating-images | top5pct-brick-vinyl-cresthill.jpg | public/images/custom-shirts/top5pct-brick-vinyl-cresthill.jpg | R2 | Jun 2 | good, cross-dir |
| carousel C-2 — carousel-rotating-images | top5pct-brick-vinyl-custom-t-shirt.jpg | public/images/custom-shirts/top5pct-brick-vinyl-custom-t-shirt.jpg | R2 | Jun 2 | good, cross-dir |
| carousel C-3 — carousel-rotating-images | top5pct-brick-vinyl-jackets-joliet.jpg | public/images/custom-shirts/top5pct-brick-vinyl-jackets-joliet.jpg | R2 | Jun 2 | good, cross-dir |
| carousel C-4 — carousel-rotating-images | top5pct-customized-brick-vinyl-shirts.jpg | public/images/custom-shirts/top5pct-customized-brick-vinyl-shirts.jpg | R2 | Jun 2 | good, cross-dir |
| carousel C-5 — carousel-rotating-images | top5pct-brick-vinyl-custom-shirts-joliet.jpg | public/images/brick-shirts/top5pct-brick-vinyl-custom-shirts-joliet.jpg | R3 | Jun 8 | good |
| carousel C-6 — carousel-rotating-images | top5pct-brick-vinyl-shorewood.jpg | public/images/brick-shirts/top5pct-brick-vinyl-shorewood.jpg | R3 | Jun 8 | good |
| card-1 — card-image-with-text | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | public/images/custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | Initial | Mar 16 | initial, locked, cross-dir |
| card-2 — card-image-with-text | top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg | public/images/custom-shirts/top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg | Initial | Mar 16 | initial, locked, cross-dir |
| card-detailed image1 — card-detailed-info (single image) | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | public/images/custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | Initial | Mar 16 | initial, locked, cross-dir, repeat |
| slide-L — card-banner-slide-in (direction left) | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | public/images/custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | Initial | Mar 16 | initial, locked, cross-dir, repeat |
| slide-R — card-banner-slide-in (direction right) | top5pct-custom-hoodies.jpg | public/images/custom-shirts/top5pct-custom-hoodies.jpg | R1 | May 11 | good, cross-dir |

**Notes:**
- 12 slots total. 8 good, 4 initial locked (all cross-dir from custom-shirts/). 33% locked — best locked ratio among all specialty-materials pages inventoried so far.
- `top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` (Initial, Mar 16, 28KB, locked) fills three active slots — card-1, card-detailed image1, and slide-L. All three are cross-dir references to `custom-shirts/`.
- `top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg` (Initial, Mar 16, 27KB, locked) fills card-2. Content mismatch — the filename suggests a general "pattern shirts" file, not a brick-specific image. May be a placeholder from the Initial batch.
- card-detailed-info is single-image (only `image1` and `alt1`). Fourth consecutive specialty-materials page with single-image card-detailed. This is the confirmed standard for this page family.
- The page's own dir (`brick-shirts/`) has zero locked files — both files are R3, unlocked, and cover carousel C-5 and C-6 cleanly. All locked slots come from `custom-shirts/` cross-dir references.
- The carousel is split: C-1 through C-4 draw from `custom-shirts/` (R1 and R2, all unlocked), C-5 and C-6 draw from `brick-shirts/` (R3, unlocked). All 6 carousel slots are good.
- slide-R uses `top5pct-custom-hoodies.jpg` (R1, May 11, 294KB). Alt text in blade reads "Custom flock velvet shirts from Top 5 Percent in Joliet Illinois" — alt text describes flock/velvet shirts on a brick shirts page. Image content may also be off-topic for this slide. Slide text: "Add Flock, Puff, or Glitter to Your Shirt Order" — a cross-sell to other specialty techniques.
- Hero is cross-dir from `custom-shirts/` (R1, May 11, 388KB). The brick-vinyl-hoodies image is topic-appropriate for the page.
- No unused files in the brick-shirts/ dir — both files are referenced in the carousel.

---

#### /custom-apparel/specialty-materials/flock-shirts

**Blade:** `resources/views/pages/custom-apparel/flock-shirts.blade.php`
**URL:** `/custom-apparel/specialty-materials/flock-shirts`
**Note:** Blade is one level up from URL path (`custom-apparel/` not `custom-apparel/specialty-materials/`). Route mapped separately.
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-custom-flock-t-shirt-printing.jpg | public/images/flock-shirts/top5pct-custom-flock-t-shirt-printing.jpg | R3 | Jun 8 | good |
| carousel C-1 — carousel-rotating-images | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | public/images/flock-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | R3 | Jun 8 | R3, locked |
| carousel C-2 — carousel-rotating-images | top5pct-flock-hoodie-printing.jpg | public/images/flock-shirts/top5pct-flock-hoodie-printing.jpg | R3 | Jun 8 | good |
| carousel C-3 — carousel-rotating-images | top5pct-flock-shirt-vinyl.jpg | public/images/flock-shirts/top5pct-flock-shirt-vinyl.jpg | R3 | Jun 8 | good |
| carousel C-4 — carousel-rotating-images | top5pct-custom-vinyl-shirts.jpg | public/images/custom-shirts/top5pct-custom-vinyl-shirts.jpg | R1 | May 11 | good, cross-dir |
| card-1 — card-image-with-text | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | public/images/flock-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | R3 | Jun 8 | R3, locked, repeat |
| card-2 — card-image-with-text | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | public/images/flock-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | R3 | Jun 8 | R3, locked, repeat |
| card-detailed image1 — card-detailed-info (single image) | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | public/images/flock-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | R3 | Jun 8 | R3, locked, repeat |
| slide-L — card-banner-slide-in (direction left) | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | public/images/flock-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | R3 | Jun 8 | R3, locked, repeat |
| slide-R — card-banner-slide-in (direction right) | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | public/images/custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | Initial | Mar 16 | initial, locked, cross-dir |

**Notes:**
- 10 slots total. 4 good, 6 locked (5 same-file R3 repeats + 1 Initial locked cross-dir). 60% locked — ties spirit-wear-shirts for second-worst behind holographic-shirts at 67%.
- `top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` (R3, Jun 8, 32KB, locked) fills five active slots — carousel C-1, card-1, card-2, card-detailed image1, and slide-L. Ties holographic-shirts for the highest single-file repeat count in the inventory.
- Dir has only 4 files covering all flock-specific slots. With 4 files and 9 own-dir demand positions, heavy repetition is structural. Even with the locked file fixed, it would still appear in five positions.
- All 4 flock-shirts/ dir files are referenced in the blade. No unused files in dir.
- card-detailed-info is single-image (only `image1` and `alt1`). Fifth consecutive specialty-materials page with single-image card-detailed. Fully confirmed as the standard for this page family.
- slide-R is cross-dir from `custom-shirts/` — `top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` (Initial, Mar 16, 27KB, locked). This is the same file that exists in both `custom-shirts/` and `holographic-shirts/`. The holographic page uses the copy from `holographic-shirts/` (R3, Jun 8, locked); this flock page uses the copy from `custom-shirts/` (Initial, Mar 16, locked). Both copies are locked. Slide text: "Mix Flock With Holographic or Glitter for Custom Shirts" — cross-sell appropriate.
- Carousel C-4 is cross-dir from `custom-shirts/` using `top5pct-custom-vinyl-shirts.jpg` (R1, May 11, 403KB). Alt text in blade reads "Custom flock velvet shirts made in Joliet" — but the file is a generic vinyl shirts image, not a flock-specific photo. Second consecutive specialty page with a carousel alt text mismatch (after brick-shirts slide-R).
- The specialty-page pattern is now fully established: R3 dir with one locked thumbnail-sized file that propagates into carousel C-1, both cards, card-detailed image1, and slide-L (five slots). The slide-R is always a cross-dir Initial locked file from `custom-shirts/`. This pattern has appeared on reflective, foil, holographic, and now flock.

---

#### /custom-apparel/specialty-materials/glow-in-the-dark-shirts

**Blade:** `resources/views/pages/custom-apparel/glow-in-the-dark-shirts.blade.php`
**URL:** `/custom-apparel/specialty-materials/glow-in-the-dark-shirts`
**Dir:** `public/images/glow-shirts/` — dir name is `glow-shirts/`, shorter than the URL slug `glow-in-the-dark-shirts`. First confirmed URL-slug-to-dir-name mismatch in the inventory.
**Note:** Blade is one level up from URL path (`custom-apparel/` not `custom-apparel/specialty-materials/`). Route mapped separately.
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-glow-in-the-dark-caps.jpg | public/images/glow-shirts/top5pct-glow-in-the-dark-caps.jpg | R3 | Jun 8 | good |
| carousel C-1 — carousel-rotating-images | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | public/images/glow-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | R3 | Jun 8 | R3, locked |
| carousel C-2 — carousel-rotating-images | top5pct-glowing-halloween-bat-shirt.jpg | public/images/glow-shirts/top5pct-glowing-halloween-bat-shirt.jpg | R3 | Jun 8 | good |
| carousel C-3 — carousel-rotating-images | top5pct-halloween-pumpkin-glow-shirt.jpg | public/images/glow-shirts/top5pct-halloween-pumpkin-glow-shirt.jpg | R3 | Jun 8 | good |
| carousel C-4 — carousel-rotating-images | top5pct-custom-vinyl-shirts.jpg | public/images/custom-shirts/top5pct-custom-vinyl-shirts.jpg | R1 | May 11 | good, cross-dir |
| card-1 — card-image-with-text | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | public/images/glow-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | R3 | Jun 8 | R3, locked, repeat |
| card-2 — card-image-with-text | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | public/images/glow-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | R3 | Jun 8 | R3, locked, repeat |
| card-detailed image1 — card-detailed-info (single image) | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | public/images/glow-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | R3 | Jun 8 | R3, locked, repeat |
| slide-R — card-banner-slide-in (direction right) | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | public/images/glow-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | R3 | Jun 8 | R3, locked, repeat |
| slide-L — card-banner-slide-in (direction left) | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | public/images/custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | Initial | Mar 16 | initial, locked, cross-dir |

**Notes:**
- 10 slots total. 4 good, 6 locked (5 same-file R3 repeats + 1 Initial locked cross-dir). 60% locked — matches flock-shirts exactly.
- `top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` (R3, Jun 8, 28KB, locked) fills five active slots — carousel C-1, card-1, card-2, card-detailed image1, and slide-R. Ties holographic-shirts and flock-shirts for the most single-file repeat count in the inventory.
- Slide directions are flipped vs flock-shirts: here the page-file repeat lands on slide-R (direction="right") and the cross-dir locked file lands on slide-L (direction="left"). On flock-shirts it was the reverse. The structural count (5 page-file slots, 1 cross-dir locked slide) is identical.
- slide-L cross-dir is `top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` from `custom-shirts/` (Initial, Mar 16, 27KB, locked). This is the same file used as slide-R on flock-shirts. The holographic locked thumbnail now appears as a cross-sell slide on at least two other specialty pages.
- card-detailed-info is single-image (only `image1` and `alt1`). Sixth consecutive specialty-materials page with single-image card-detailed.
- Carousel C-4 is cross-dir from `custom-shirts/` using `top5pct-custom-vinyl-shirts.jpg` (R1, May 11). Alt text in blade reads "Custom glow in the dark shirts made in Joliet" on a generic vinyl shirts image. Third consecutive specialty page with this same C-4 mismatch (flock-shirts and brick-shirts also used this file with an off-topic alt).
- Dir name mismatch: URL slug is `glow-in-the-dark-shirts` but the image dir is `glow-shirts/`. All prior specialty pages had a 1-to-1 match between URL slug and dir name. This is the first exception.
- Dir has 4 files, same count as flock-shirts/. All 4 files referenced in blade with no unused files in dir.
- glow-shirts/ dir structure is identical to flock-shirts/ in every way: 4 files all from the same R3 batch (Jun 8), one locked thumbnail (28KB), three unlocked photos.

---

#### /custom-apparel/specialty-materials/puff-shirts

**Blade:** `resources/views/pages/custom-apparel/puff-shirts.blade.php`
**URL:** `/custom-apparel/specialty-materials/puff-shirts`
**Dir:** `public/images/puff-shirts/` — dir exists but is **completely empty**. Every image reference in the blade is cross-dir from `custom-shirts/`. First specialty page with a fully empty own dir.
**Note:** Blade is one level up from URL path (`custom-apparel/` not `custom-apparel/specialty-materials/`). Route mapped separately.
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-custom-puff-shirts.jpg | public/images/custom-shirts/top5pct-custom-puff-shirts.jpg | R2 | Jun 2 | good, cross-dir |
| carousel C-1 — carousel-rotating-images | top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg | public/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg | Initial | Mar 16 | initial, locked, cross-dir |
| carousel C-2 — carousel-rotating-images | top5pct-puff-shirts-joliet.jpg | public/images/custom-shirts/top5pct-puff-shirts-joliet.jpg | R2 | Jun 2 | good, cross-dir |
| carousel C-3 — carousel-rotating-images | top5pct-puff-shirts.jpg | public/images/custom-shirts/top5pct-puff-shirts.jpg | R2 | Jun 2 | good, cross-dir |
| carousel C-4 — carousel-rotating-images | top5pct-custom-vinyl-shirts.jpg | public/images/custom-shirts/top5pct-custom-vinyl-shirts.jpg | R1 | May 11 | good, cross-dir |
| card-1 — card-image-with-text | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | public/images/custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | Initial | Mar 16 | initial, locked, cross-dir |
| card-2 — card-image-with-text | top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg | public/images/custom-shirts/top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg | Initial | Mar 16 | initial, locked, cross-dir |
| card-detailed image1 — card-detailed-info (single image) | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | public/images/custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | Initial | Mar 16 | initial, locked, cross-dir, repeat |
| slide-L — card-banner-slide-in (direction left) | top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | public/images/custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | Initial | Mar 16 | initial, locked, cross-dir, repeat |
| slide-R — card-banner-slide-in (direction right) | top5pct-rhinetsone-t-shirts.jpg | public/images/custom-shirts/top5pct-rhinetsone-t-shirts.jpg | R2 | Jun 2 | good, cross-dir |

**Notes:**
- 10 slots total. 5 good, 5 locked. 50% locked. All 10 slots are cross-dir from `custom-shirts/` — the puff-shirts/ own dir is completely empty.
- Three separate locked files across the 5 locked slots — different pattern from all prior specialty pages (which each had one locked file filling 5 slots). Breakdown: `top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` (Initial, 28KB) fills card-1, card-detailed, and slide-L (3 slots); `top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg` (Initial, 27KB) fills card-2 (1 slot); `top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` (Initial, 117KB) fills carousel C-1 (1 slot).
- `top5pct-banner-custom-apparel-...-caps.jpg` is the largest locked file seen in the inventory at 117KB (Initial, Mar 16). All prior locked thumbnails were under 35KB. This is a banner-sized image, not a thumbnail placeholder.
- card-1, card-detailed image1, and slide-L all show `top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` — a brick-shirts image on a puff-shirts page. The card content describes puff printing but the image shows a different technique. Wrong-topic image, not just a placeholder.
- card-2 shows `top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg` — a pattern-shirts image on a puff page. Same wrong-topic issue.
- Puff-specific images do exist in `custom-shirts/` (top5pct-custom-puff-shirts.jpg, top5pct-puff-shirts-joliet.jpg, top5pct-puff-shirts.jpg — all R2, unlocked). They are used in the hero, C-2, and C-3 slots but were not assigned to the card or card-detailed slots. The locked slots appear to have been filled with whatever Initial files were available at build time.
- card-detailed-info is single-image (only `image1` and `alt1`). Seventh consecutive specialty-materials page with single-image card-detailed.
- Carousel C-4 uses `top5pct-custom-vinyl-shirts.jpg` (R1, May 11) — same file used as C-4 on flock, glow, and brick pages. Alt text here reads "Custom apparel and puff print shirts made in Joliet" — at least mentions puff print, unlike prior pages where the alt was entirely off-topic. Fourth consecutive specialty page using this same C-4 cross-dir file.
- slide-R uses `top5pct-rhinetsone-t-shirts.jpg` — note the filename contains a typo ("rhinetsone" instead of "rhinestone"). File is unlocked and loads correctly, but the filename typo is a permanent artifact in the codebase.

---

#### /custom-apparel/printing-options/rhinestone-apparel

**Blade:** `resources/views/pages/custom-apparel/printing-options/rhinestone-apparel.blade.php`
**URL:** `/custom-apparel/printing-options/rhinestone-apparel`
**Dir:** `public/images/rhinestone-apparel/` — 1 file (Jun 3, unlocked). First page in the `printing-options/` blade subdirectory.
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-rhinestone-hoodies-joliet.jpg | public/images/custom-shirts/top5pct-rhinestone-hoodies-joliet.jpg | R1 | May 11 | good, cross-dir |
| carousel C-1 — carousel-rotating-images | top5pct-rhinestone-apparel-keith-elementary.jpg | public/images/custom-shirts/top5pct-rhinestone-apparel-keith-elementary.jpg | R2 | Jun 2 | good, cross-dir |
| carousel C-2 — carousel-rotating-images | top5pct-rhinestone-bling-joliet.jpg | public/images/custom-shirts/top5pct-rhinestone-bling-joliet.jpg | R2 | Jun 2 | good, cross-dir |
| carousel C-3 — carousel-rotating-images | top5pct-rhinestone-hoodie-joliet-west.jpg | public/images/custom-shirts/top5pct-rhinestone-hoodie-joliet-west.jpg | R2 | Jun 2 | good, cross-dir |
| carousel C-4 — carousel-rotating-images | top5pct-rhinestone-ladies-shirt.jpg | public/images/custom-shirts/top5pct-rhinestone-ladies-shirt.jpg | R2 | Jun 2 | good, cross-dir |
| carousel C-5 — carousel-rotating-images | top5pct-rhinestone-tshirts-joliet.jpg | public/images/rhinestone-apparel/top5pct-rhinestone-tshirts-joliet.jpg | R2+ | Jun 3 | good |
| card-1 — card-image-with-text | top5pct-rhinestone-t-shirts-joliet.jpg | public/images/custom-shirts/top5pct-rhinestone-t-shirts-joliet.jpg | R2 | Jun 2 | good, cross-dir |
| card-2 — card-image-with-text | top5pct-custom-rhinestone-shirts.jpg | public/images/custom-shirts/top5pct-custom-rhinestone-shirts.jpg | R2 | Jun 2 | good, cross-dir |
| card-detailed image1 — card-detailed-info (single image) | top5pct-rhinetsone-t-shirts.jpg | public/images/custom-shirts/top5pct-rhinetsone-t-shirts.jpg | R2 | Jun 2 | good, cross-dir |
| slide-R — card-banner-slide-in (direction right) | top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg | public/images/custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg | Initial | Mar 16 | initial, locked, cross-dir |
| slide-L — card-banner-slide-in (direction left) | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | public/images/custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | Initial | Mar 16 | initial, locked, cross-dir |

**Notes:**
- 11 slots total. 9 good, 2 locked. 18% locked — cleanest page in the entire inventory to date, by a wide margin.
- First page in the `printing-options/` blade subdirectory. Blade lives at `resources/views/pages/custom-apparel/printing-options/rhinestone-apparel.blade.php`.
- First page with 5 carousel images (C-1 through C-5). All prior specialty-materials pages had exactly 4 carousel slots. All 5 are rhinestone-specific.
- Own dir (`rhinestone-apparel/`) has exactly 1 file: `top5pct-rhinestone-tshirts-joliet.jpg` (Jun 3, 271KB, unlocked). This file is used only in carousel C-5. All other 10 slots are cross-dir from `custom-shirts/`. The Jun 3 date is between the R2 batch (Jun 2) and R3 (Jun 4+), suggesting a standalone addition or a late R2 upload.
- Only the two slides are locked — and both are Initial (Mar 16) files from `custom-shirts/`. The locked file pattern from specialty-materials pages (one R3 thumbnail repeating across 5 slots) does not appear here.
- slide-R locked: `top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg` (Initial, Mar 16, 23KB) — the rhinestone page's own characteristic locked thumbnail. Unlike specialty pages, it fills only 1 slot (slide-R), not 5.
- slide-L locked: `top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` (Initial, Mar 16, 27KB) — same cross-dir holographic file appearing as a slide on flock, glow, and now rhinestone pages. Cross-sell text: "Rhinestone, Holographic, Foil, Premium Effects on Any Garment."
- card-detailed image1 uses `top5pct-rhinetsone-t-shirts.jpg` — the filename typo (rhinetsone vs rhinestone) that first appeared as puff-shirts slide-R. Second page referencing the same misspelled file. File is unlocked and loads correctly.
- card-1 and card-2 both use rhinestone-specific, unlocked R2 images — a clean assignment unlike the brick-themed placeholders on the puff page.
- card-detailed-info is single-image (only `image1` and `alt1`). Eighth consecutive page with single-image card-detailed.
- The generic `top5pct-custom-vinyl-shirts.jpg` C-4 pattern seen across all specialty-materials pages does not appear here. C-4 is `top5pct-rhinestone-ladies-shirt.jpg` — a rhinestone-specific, on-topic image.

---

#### /custom-apparel/printing-options/embroidery

**Blade:** `resources/views/pages/custom-apparel/printing-options/embroidery.blade.php`
**URL:** `/custom-apparel/printing-options/embroidery`
**Dir:** `public/images/embroidery/` — 11 files. Best-populated own dir in the inventory.
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-stitched-embroidered-shirts.jpg | public/images/embroidery/top5pct-stitched-embroidered-shirts.jpg | R2 | Jun 2 | good |
| carousel C-1 — carousel-rotating-images | top5pct-embroidered-aprons.jpg | public/images/embroidery/top5pct-embroidered-aprons.jpg | R1 | May 11 | good |
| carousel C-2 — carousel-rotating-images | top5pct-embroidered-caps.jpg | public/images/embroidery/top5pct-embroidered-caps.jpg | R2 | Jun 2 | good |
| carousel C-3 — carousel-rotating-images | top5pct-embroidery-in-joliet.jpg | public/images/embroidery/top5pct-embroidery-in-joliet.jpg | R1 | May 11 | good |
| carousel C-4 — carousel-rotating-images | top5pct-embroidered-stitched-caps.jpg | public/images/embroidery/top5pct-embroidered-stitched-caps.jpg | R1 | May 11 | good |
| carousel C-5 — carousel-rotating-images | top5pct-embroidered-cap-embroidered-beanies-joliet.jpg | public/images/embroidery/top5pct-embroidered-cap-embroidered-beanies-joliet.jpg | R3 | Jun 8 | good |
| card-1 — card-image-with-text | top5pct-embroidered-bag.jpg | public/images/embroidery/top5pct-embroidered-bag.jpg | R2 | Jun 2 | good |
| card-2 — card-image-with-text | top5pct-embroidered-smocks.jpg | public/images/embroidery/top5pct-embroidered-smocks.jpg | R2 | Jun 2 | good |
| card-detailed image1 — card-detailed-info (single image) | top5pct-embroidery-beanies.jpg | public/images/embroidery/top5pct-embroidery-beanies.jpg | R2 | Jun 2 | good |
| slide-L — card-banner-slide-in (direction left) | top5pct-custom-embroidery-shops-near-me-joliet.jpg | public/images/embroidery/top5pct-custom-embroidery-shops-near-me-joliet.jpg | Initial | Mar 16 | initial, locked |
| slide-R — card-banner-slide-in (direction right) | top5pct-embroidered-caps-old.jpg | public/images/embroidery/top5pct-embroidered-caps-old.jpg | R1 | May 11 | good |

**Notes:**
- 11 slots total. 10 good, 1 locked. 9% locked — new record cleanest page in the inventory, surpassing rhinestone-apparel at 18%.
- First page with zero cross-dir references. Every one of the 11 slots uses a file from `embroidery/` own dir. No `custom-shirts/` or any other dir referenced.
- All 11 files in the embroidery/ dir are referenced by the blade — perfect 11-file to 11-slot match with zero unused files in dir.
- The only locked slot is slide-L: `top5pct-custom-embroidery-shops-near-me-joliet.jpg` (Initial, Mar 16, 28KB). Unlike specialty-materials pages, this locked thumbnail fills only 1 slot, not 5. It is an own-dir file, not cross-dir.
- 5 carousel slots (C-1 through C-5), same as rhinestone-apparel. Confirms this as the printing-options section carousel standard.
- card-detailed-info is single-image (only `image1` and `alt1`). Ninth consecutive page with single-image card-detailed.
- slide-R uses `top5pct-embroidered-caps-old.jpg` (R1, May 11, 651KB) — largest file in the dir. Filename contains an "old" suffix, suggesting it may have been marked for replacement during a photo refresh but is still actively referenced in the blade.
- Dir has files spanning four rounds: Initial (1 locked), R1 (4 files), R2 (5 files), R3 (1 file). Most diverse round spread seen in any own dir so far.
- The holographic cross-dir locked slide pattern seen on flock, glow, and rhinestone pages does not appear here. Embroidery breaks that pattern entirely.

---

#### /custom-apparel/printing-options/screen-printing

**Blade:** `resources/views/pages/custom-apparel/printing-options/screen-printing.blade.php`
**URL:** `/custom-apparel/printing-options/screen-printing`
**Dir:** `public/images/screen-printing/` — 6 files (1 Jun 3, 5 Jun 8), all unlocked. No locked files in own dir.
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-screenprinted-shirts-joliet.jpg | public/images/custom-shirts/top5pct-screenprinted-shirts-joliet.jpg | R1 | May 11 | good, cross-dir |
| carousel C-1 — carousel-rotating-images | top5pct-screenprint-custom-shirts.jpg | public/images/custom-shirts/top5pct-screenprint-custom-shirts.jpg | R1 | May 11 | good, cross-dir |
| carousel C-2 — carousel-rotating-images | top5pct-screenprinted-shirts-in-joliet.jpg | public/images/custom-shirts/top5pct-screenprinted-shirts-in-joliet.jpg | R1 | May 11 | good, cross-dir |
| carousel C-3 — carousel-rotating-images | top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg | public/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg | Initial | Mar 16 | initial, locked, cross-dir |
| carousel C-4 — carousel-rotating-images | top5pct-screenprinting-shirts.jpg | public/images/custom-shirts/top5pct-screenprinting-shirts.jpg | R1 | May 11 | good, cross-dir |
| carousel C-5 — carousel-rotating-images | top5pct-screenprinting-joliet.jpg | public/images/screen-printing/top5pct-screenprinting-joliet.jpg | R3 | Jun 8 | good |
| carousel C-6 — carousel-rotating-images | top5pct-screenprinted-shirts-joliet.jpg | public/images/screen-printing/top5pct-screenprinted-shirts-joliet.jpg | R3 | Jun 8 | good |
| carousel C-7 — carousel-rotating-images | top5pct-screenprinting-company-shirts.jpg | public/images/screen-printing/top5pct-screenprinting-company-shirts.jpg | R3 | Jun 8 | good |
| carousel C-8 — carousel-rotating-images | top5pct-screenprinting-hoodies-joliet.jpg | public/images/screen-printing/top5pct-screenprinting-hoodies-joliet.jpg | R3 | Jun 8 | good |
| carousel C-9 — carousel-rotating-images | top5pct-screenprinting-t-shirts-joliet.jpg | public/images/screen-printing/top5pct-screenprinting-t-shirts-joliet.jpg | R2+ | Jun 3 | good |
| carousel C-10 — carousel-rotating-images | top5pct-screenprinting-t-shirt-maker-joliet.jpg | public/images/screen-printing/top5pct-screenprinting-t-shirt-maker-joliet.jpg | R3 | Jun 8 | good |
| card-1 — card-image-with-text | top5pct-neon-vinyl-shirts.jpg | public/images/custom-shirts/top5pct-neon-vinyl-shirts.jpg | R1 | May 11 | good, cross-dir |
| card-2 — card-image-with-text | top5pct-vinyl-caps.jpg | public/images/custom-shirts/top5pct-vinyl-caps.jpg | R1 | May 11 | good, cross-dir |
| card-detailed image1 — card-detailed-info (single image) | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | public/images/custom-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | Initial | Mar 16 | initial, locked, cross-dir |
| slide-R — card-banner-slide-in (direction right) | top5pct-screenprinting-shirts.jpg | public/images/custom-shirts/top5pct-screenprinting-shirts.jpg | R1 | May 11 | good, cross-dir, repeat of C-4 |
| slide-L — card-banner-slide-in (direction left) | top5pct-custom-embroidery-shops-near-me-joliet.jpg | public/images/custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg | Initial | Mar 16 | wrong-dir 404 |

**Notes:**
- 16 slots total. 13 good, 2 locked, 1 wrong-dir 404. Largest page in the entire inventory by slot count.
- 10-image carousel (C-1 through C-10) — unprecedented. Prior printing-options pages had 5 carousel slots. The carousel splits evenly: C-1 to C-4 from `custom-shirts/` (R1, all unlocked except C-3), C-5 to C-10 from own dir (all unlocked).
- **slide-L is a wrong-dir 404**: blade references `/images/custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` but that file does not exist in `custom-shirts/`. It only exists in `embroidery/` (Initial, Mar 16, 28KB, locked). This is a guaranteed broken image on the live page. Second confirmed wrong-dir 404 in the inventory (first was foil-shirts slide-L).
- **card-detailed uses the flock locked thumbnail**: `top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` exists in both `flock-shirts/` (R3, Jun 8, 32KB, locked) and `custom-shirts/` (Initial, Mar 16, 32KB, locked). The screen-printing blade references the `custom-shirts/` copy (Initial, Mar 16). Card heading is "5 Reasons Screen Printing Delivers Superior Results" — image is a flock shirt cap. Wrong-topic.
- C-3 uses `top5pct-banner-custom-apparel-...-caps.jpg` (Initial, Mar 16, 117KB, locked) — same banner file used as C-1 on puff-shirts. Both pages lock on this file.
- slide-R repeats C-4: `top5pct-screenprinting-shirts.jpg` (R1, May 11) appears in both carousel C-4 and slide-R. Both unlocked.
- card-1 alt text reads "Custom screen printed shirts" but the image is `top5pct-neon-vinyl-shirts.jpg` — a neon vinyl shirts file, not a screen print image. Not a lock issue but a wrong-topic assignment.
- card-2 alt text reads "Custom screen printing for group apparel and uniforms" but the image is `top5pct-vinyl-caps.jpg` — a vinyl caps file. Cross-technique assignment similar to card-1.
- Own dir (`screen-printing/`) has no locked files — all 6 files are unlocked (Jun 3 and Jun 8). Only cross-dir files contribute the 2 locked slots and the wrong-dir 404.
- `top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` is the first file confirmed to exist in two separate dirs with different dates: `flock-shirts/` (R3, Jun 8) and `custom-shirts/` (Initial, Mar 16). The custom-shirts/ copy predates the flock-shirts/ copy by nearly 3 months.
- card-detailed-info is single-image (only `image1` and `alt1`). Tenth consecutive page with single-image card-detailed.

---

#### /custom-apparel/printing-options/dye-sublimation-printing

**Blade:** `resources/views/pages/custom-apparel/dye-sublimation.blade.php`
**URL:** `/custom-apparel/printing-options/dye-sublimation-printing`
**Dir:** `public/images/sublimation/` — 14 files, all unlocked. No locked files in dir.
**Anomalies:** (1) Blade lives in `custom-apparel/` not `custom-apparel/printing-options/` unlike rhinestone, embroidery, screen-printing. (2) Dir name `sublimation/` does not match URL slug `dye-sublimation-printing`. (3) Blade filename `dye-sublimation.blade.php` does not match URL slug `dye-sublimation-printing`.
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-dye-sublimation-custom-shirt-joliet.jpg | public/images/sublimation/top5pct-dye-sublimation-custom-shirt-joliet.jpg | R2 | Jun 2 | good |
| carousel C-1 — carousel-rotating-images | top5pct-sublimation-shirts.jpg | public/images/sublimation/top5pct-sublimation-shirts.jpg | R1 | May 11 | good |
| carousel C-2 — carousel-rotating-images | top5pct-custom-face-mask-sublimated.jpg | public/images/sublimation/top5pct-custom-face-mask-sublimated.jpg | R1 | May 11 | good |
| carousel C-3 — carousel-rotating-images | top5pct-custom-sublimated-towels.jpg | public/images/sublimation/top5pct-custom-sublimated-towels.jpg | R1 | May 11 | good |
| carousel C-4 — carousel-rotating-images | top5pct-dye-sublimated-longsleeve-shirt-joliet.jpg | public/images/sublimation/top5pct-dye-sublimated-longsleeve-shirt-joliet.jpg | R1 | May 11 | good |
| carousel C-5 — carousel-rotating-images | top5pct-dye-sublimation-jerseys.jpg | public/images/sublimation/top5pct-dye-sublimation-jerseys.jpg | R2+ | Jun 3 | good |
| carousel C-6 — carousel-rotating-images | top5pct-dye-sublimation-tees.jpg | public/images/sublimation/top5pct-dye-sublimation-tees.jpg | R2+ | Jun 3 | good |
| carousel C-7 — carousel-rotating-images | top5pct-sublimated-graphic-tees.jpg | public/images/sublimation/top5pct-sublimated-graphic-tees.jpg | R2+ | Jun 3 | good |
| carousel C-8 — carousel-rotating-images | top5pct-sublimation-tees.jpg | public/images/sublimation/top5pct-sublimation-tees.jpg | R2+ | Jun 3 | good |
| card-1 — card-image-with-text | top5pct-dye-sublimation-shirts.jpg | public/images/sublimation/top5pct-dye-sublimation-shirts.jpg | R1 | May 11 | good |
| card-2 — card-image-with-text | top5pct-sublimation-shirt-printer.jpg | public/images/sublimation/top5pct-sublimation-shirt-printer.jpg | R1 | May 11 | good |
| card-detailed image1 — card-detailed-info (single image) | top5pct-sublimation-shirt.jpg | public/images/sublimation/top5pct-sublimation-shirt.jpg | R1 | May 11 | good |
| slide-L — card-banner-slide-in (direction left) | top5pct-custom-sublimation-shirts.jpg | public/images/sublimation/top5pct-custom-sublimation-shirts.jpg | R2 | Jun 2 | good |
| slide-R — card-banner-slide-in (direction right) | top5pct-sublmation-team-shirts.jpg | public/images/sublimation/top5pct-sublmation-team-shirts.jpg | R2 | Jun 2 | good |

**Notes:**
- 14 slots total. 14 good, 0 locked. 0% locked — first zero-locked page in the entire inventory.
- Zero cross-dir references. Every slot pulls from `sublimation/` own dir. Second page with 100% own-dir coverage after embroidery.
- Perfect 14-file to 14-slot match. All 14 files in the dir are referenced in the blade. No unused files, no missing files.
- 8-image carousel (C-1 through C-8) — second largest carousel in the inventory after screen-printing's 10.
- Dir has no Initial (Mar 16) files at all. Every file is R1 (May 11) or later. First dir in the inventory with no Initial-round files.
- Dir spans two rounds: R1 (May 11, 7 files) and R2 or Jun 3 (7 files). Clean two-batch population.
- slide-R uses `top5pct-sublmation-team-shirts.jpg` — filename contains a typo ("sublmation" missing the 'i'). File exists and loads, but the typo is permanent in the codebase. Third filename typo confirmed in the inventory (rhinetsone on rhinestone and puff pages, embroidered-caps-old on embroidery, sublmation here).
- Blade location anomaly: `dye-sublimation.blade.php` lives in `resources/views/pages/custom-apparel/` rather than `resources/views/pages/custom-apparel/printing-options/` where the other printing-options pages live. Likely routed via main-site.php with a manual path override.
- Dir name anomaly: `sublimation/` vs URL slug `dye-sublimation-printing`. Second URL-to-dir-name mismatch in the inventory (first was glow-in-the-dark-shirts → glow-shirts/).
- card-detailed-info is single-image (only `image1` and `alt1`). Eleventh consecutive page with single-image card-detailed.
- No holographic cross-dir locked slide, no banner locked file — dye-sublimation shares none of the cross-dir locked patterns seen across specialty-materials and other printing-options pages.

---

#### /custom-apparel/printing-options/dtf-printing

**Blade:** `resources/views/pages/custom-apparel/dtf-transfers.blade.php`
**URL:** `/custom-apparel/printing-options/dtf-printing`
**Dir:** `public/images/dtf-transfers/` — 13 files (2 locked Initial, 11 unlocked). 4 unused files in dir.
**Anomalies:** (1) Blade lives in `custom-apparel/` not `custom-apparel/printing-options/`, same as dye-sublimation. (2) Dir name `dtf-transfers/` does not match URL slug `dtf-printing`. Third URL-to-dir mismatch (glow-shirts, sublimation, dtf-transfers). (3) Both locked Initial files in dir use prefix `toptpct-` instead of `top5pct-` — a naming typo present from the Mar 16 launch batch.
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-dtf-t-shirt-printing.jpg | public/images/dtf-transfers/top5pct-dtf-t-shirt-printing.jpg | R2 | Jun 2 | good |
| carousel C-1 — carousel-rotating-images | top5pct-dtf-tees.jpg | public/images/dtf-transfers/top5pct-dtf-tees.jpg | R2 | Jun 2 | good |
| carousel C-2 — carousel-rotating-images | top5pct-dtf-t-shirt-maker.jpg | public/images/dtf-transfers/top5pct-dtf-t-shirt-maker.jpg | R2 | Jun 2 | good |
| carousel C-3 — carousel-rotating-images | top5pct-custom-t-shirts-dtf.jpg | public/images/dtf-transfers/top5pct-custom-t-shirts-dtf.jpg | R1 | May 11 | good |
| carousel C-4 — carousel-rotating-images | top5pct-dtf-hoodies-joliet.jpg | public/images/dtf-transfers/top5pct-dtf-hoodies-joliet.jpg | R1 | May 11 | good |
| card-1 — card-image-with-text | top5pct-dtf-zip-up-hoodies.jpg | public/images/dtf-transfers/top5pct-dtf-zip-up-hoodies.jpg | R1 | May 11 | good |
| card-2 — card-image-with-text | top5pct-custom-dtf-shirts.jpg | public/images/dtf-transfers/top5pct-custom-dtf-shirts.jpg | R2 | Jun 2 | good |
| card-detailed image1 — card-detailed-info (single image) | top5pct-custom-bowling-shirts-dtf.jpg | public/images/dtf-transfers/top5pct-custom-bowling-shirts-dtf.jpg | R2 | Jun 2 | good |
| slide-R — card-banner-slide-in (direction right) | toptpct-banner-dtf-transfers-joliet.jpg | public/images/dtf-transfers/toptpct-banner-dtf-transfers-joliet.jpg | Initial | Mar 16 | initial, locked |
| slide-L — card-banner-slide-in (direction left) | top5pct-custom-embroidery-shops-near-me-joliet.jpg | public/images/custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg | Initial | Mar 16 | wrong-dir 404 |

**Unused files in dir (not referenced by blade):**
| file | round | date | size | locked |
|---|---|---|---|---|
| toptpct-dtf-transfer-pricing.jpg | Initial | Mar 16 | 201KB | yes (-rw-------) |
| top5pct-custom-sweatshirts.jpg | R1 | May 11 | 170KB | no |
| top5pct-custom-shirt-with-picture.jpg | R1 | May 11 | 611KB | no |
| top5pct-custom-baby-clothing-joliet.jpg | R2 | Jun 2 | 330KB | no |

**Notes:**
- 10 slots total. 8 good, 1 locked, 1 wrong-dir 404. 4-image carousel, back to smaller count vs screen-printing (10) and dye-sublimation (8).
- **slide-L is a wrong-dir 404**: blade references `/images/custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` — file does not exist in `custom-shirts/`, only in `embroidery/`. Identical broken path to screen-printing slide-L. Same wrong reference copied to two pages. Third wrong-dir 404 in inventory.
- **slide-R locked with prefix typo**: `toptpct-banner-dtf-transfers-joliet.jpg` (Initial, Mar 16, 411KB, locked). Prefix is `toptpct-` not `top5pct-`. The typo is in the filename itself, not a variable. This is the largest locked file in any DTF slot.
- **Both locked Initial files share the `toptpct-` prefix typo**: `toptpct-banner-dtf-transfers-joliet.jpg` (used, locked) and `toptpct-dtf-transfer-pricing.jpg` (unused, locked). The naming error appears to have originated in the Mar 16 launch batch for this dir.
- **4 unused files in dir** — most in any dir so far: `toptpct-dtf-transfer-pricing.jpg` (locked, unused), `top5pct-custom-sweatshirts.jpg`, `top5pct-custom-shirt-with-picture.jpg`, `top5pct-custom-baby-clothing-joliet.jpg`. The sweatshirts, shirt-with-picture, and baby-clothing images appear to be candidates for future blade slots that were uploaded but never assigned.
- **`top5pct-dtf-price-chart2.jpg` found at `public/images/` root** — a loose file not in any subdir, not referenced by this blade. Orphan file at the images root level.
- **Unique page-level components**: `x-ui.dtf-confirm-modal`, `x-sections.dtf-pricing-section`, and `x-ui.banner-cta-dtf-dropzone` appear only on this page. None carry direct image slots in the blade (images are inside those components if any).
- **product-grid uses `collectionSlug="dtf-transfers"`** — first page in the inventory where product-grid references a collection other than `custom-shirts`.
- card-detailed-info is single-image (only `image1` and `alt1`). Twelfth consecutive page with single-image card-detailed.
- Blade location anomaly: `dtf-transfers.blade.php` lives in `resources/views/pages/custom-apparel/` not `custom-apparel/printing-options/`, same pattern as dye-sublimation.

---

#### /custom-apparel/printing-options/digital-vinyl

**Blade:** `resources/views/pages/custom-apparel/printing-options/digital-vinyl.blade.php`
**URL:** `/custom-apparel/printing-options/digital-vinyl`
**Dir:** `public/images/digital-vinyl/` — 15 image files + `.DS_Store`. Two locked batches: May 18 (11 files, all locked) and R3 Jun 8 (4 files, unlocked). 7 unused files in dir.
**Anomalies:** (1) New component `x-sections.card-2image-with-text` appears for first time — has two image slots (image1, image2). (2) Three `x-sections.card-image-with-text` blocks — most on any page in the inventory. (3) May 18 locked batch is a new date not seen in any prior dir (between R1 May 11 and R2 Jun 2). Most May 18 files lack the `top5pct-` prefix. (4) Two wrong-subject yard-signs images in the dir (locked, unused). (5) `.DS_Store` Mac metadata file in the dir. (6) 92% locked — highest in the inventory.
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-digital-vinyl-t-shirts.jpg | public/images/digital-vinyl/top5pct-digital-vinyl-t-shirts.jpg | R3 | Jun 8 | good |
| carousel C-1 — carousel-rotating-images | vinyl-shirts.jpg | public/images/digital-vinyl/vinyl-shirts.jpg | May 18 batch | May 18 | initial locked |
| carousel C-2 — carousel-rotating-images | vinyl-hoodie.jpg | public/images/digital-vinyl/vinyl-hoodie.jpg | May 18 batch | May 18 | initial locked |
| carousel C-3 — carousel-rotating-images | vinyl-caps.jpg | public/images/digital-vinyl/vinyl-caps.jpg | May 18 batch | May 18 | initial locked |
| carousel C-4 — carousel-rotating-images | custom-vinyl-hoodies.jpg | public/images/digital-vinyl/custom-vinyl-hoodies.jpg | May 18 batch | May 18 | initial locked |
| card-1 — card-image-with-text | custom-vinyl-shirts.jpg | public/images/digital-vinyl/custom-vinyl-shirts.jpg | May 18 batch | May 18 | initial locked |
| card-2 — card-image-with-text | custom-vinyl-hoodies.jpg | public/images/digital-vinyl/custom-vinyl-hoodies.jpg | May 18 batch | May 18 | initial locked, repeat (same as C-4) |
| card-2image image1 — card-2image-with-text | vinyl-caps.jpg | public/images/digital-vinyl/vinyl-caps.jpg | May 18 batch | May 18 | initial locked, repeat (same as C-3) |
| card-2image image2 — card-2image-with-text | neon-vinyl-shirts.jpg | public/images/digital-vinyl/neon-vinyl-shirts.jpg | May 18 batch | May 18 | initial locked |
| card-3 — card-image-with-text | vinyl-zip-up-hoodies.jpg | public/images/digital-vinyl/vinyl-zip-up-hoodies.jpg | May 18 batch | May 18 | initial locked |
| card-detailed image1 — card-detailed-info (single image) | custom-vinyl-shirts.jpg | public/images/digital-vinyl/custom-vinyl-shirts.jpg | May 18 batch | May 18 | initial locked, repeat (same as card-1) |
| slide-L — card-banner-slide-in (direction left) | custom-vinyl-hoodies.jpg | public/images/digital-vinyl/custom-vinyl-hoodies.jpg | May 18 batch | May 18 | initial locked, repeat (same as C-4, card-2) |
| slide-R — card-banner-slide-in (direction right) | vinyl-caps.jpg | public/images/digital-vinyl/vinyl-caps.jpg | May 18 batch | May 18 | initial locked, repeat (same as C-3, card-2image image1) |

**Unused files in dir (not referenced by blade):**
| file | round | date | size | locked | note |
|---|---|---|---|---|---|
| top5pct-digital-vinyl-hoodie.jpg | R3 | Jun 8 | 379KB | no | unlocked, unused |
| top5pct-digital-vinyl-hoodies-in-joliet.jpg | R3 | Jun 8 | 398KB | no | unlocked, unused |
| top5pct-digital-vinyl-shirts.jpg | R3 | Jun 8 | 706KB | no | unlocked, unused |
| custom-hoodies.jpg | May 18 | May 18 | 294KB | yes | locked, unused |
| vinyl-t-shirt-maker.jpg | May 18 | May 18 | 386KB | yes | locked, unused |
| top5pct-article-yard-signs-buy.jpg | May 18 | May 18 | 47KB | yes | wrong-subject: yard signs, not vinyl apparel |
| top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg | May 18 | May 18 | 96KB | yes | wrong-subject: yard signs, not vinyl apparel |

**Notes:**
- 13 slots total. 1 good, 12 locked (all May 18). 0 wrong-dir 404s. 92% locked — highest in the entire inventory.
- **May 18 batch is a new locked date** — not seen in any prior dir. 11 files uploaded May 18, all locked (-rw-------). This batch sits between R1 (May 11) and R2 (Jun 2) and appears to be an intermediate upload round specific to this dir. Most May 18 files use bare descriptive names without the `top5pct-` prefix (e.g. `vinyl-shirts.jpg`, `vinyl-hoodie.jpg`), unlike the standard naming convention.
- **Five repeat instances across 13 slots**: `vinyl-caps.jpg` used 3× (C-3, card-2image image1, slide-R); `custom-vinyl-hoodies.jpg` used 3× (C-4, card-2, slide-L); `custom-vinyl-shirts.jpg` used 2× (card-1, card-detailed image1). Only 7 unique images power all 12 locked slots.
- **New component: `x-sections.card-2image-with-text`** — first appearance in the inventory. Has two named image slots (image1, image2 with alt1, alt2). This is distinct from `card-detailed-info` (which also has image1) — it is a two-image card text layout.
- **Three `card-image-with-text` blocks** (card-1, card-2, card-3) — most on any page in the inventory. Prior max was two.
- **Two wrong-subject yard-signs files in dir** — `top5pct-article-yard-signs-buy.jpg` (47KB) and `top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg` (96KB), both May 18 locked. Neither is referenced by the blade. These were clearly uploaded to the wrong dir.
- **`.DS_Store` file in dir** — Mac OS metadata artifact. Should not be in a web-served directory.
- **7 unused files in dir** — most are the 3 R3 unlocked files and 4 May 18 locked files (2 wrong-subject). The 3 unused R3 files (`top5pct-digital-vinyl-hoodie.jpg`, `top5pct-digital-vinyl-hoodies-in-joliet.jpg`, `top5pct-digital-vinyl-shirts.jpg`) appear to be the replacements staged for locked slots but not yet wired into the blade (MNC, no changes).
- **Hero is the only good slot** — the single R3 Jun 8 file used in the blade is the hero. The 3 other R3 files in dir are not yet assigned to any slot in the blade.
- **No cross-dir references** — all 13 slots pull from `digital-vinyl/` own dir.
- card-detailed-info is single-image (only `image1` and `alt1`). Thirteenth consecutive page with single-image card-detailed.
- Blade and URL both use `digital-vinyl` — no name mismatch on this page.

---

#### /custom-apparel/specialty-materials/vinyl

**Blade:** `resources/views/pages/custom-apparel/specialty-materials/vinyl.blade.php`
**URL:** `/custom-apparel/specialty-materials/vinyl`
**Dir:** `public/images/vinyl/` — 13 files (11 May 18 locked, 2 R3 Jun 8 unlocked). 5 unused files in dir. No .DS_Store (unlike digital-vinyl/).
**Anomalies:** (1) Dir is near-identical to `digital-vinyl/` — same 11 May 18 locked files, same two wrong-subject yard-signs files, same filenames and file sizes. May 18 batch appears copied to both dirs simultaneously. (2) Four repeat instances across 13 slots. (3) 85% locked.
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-vinyl-shirts.jpg | public/images/vinyl/top5pct-vinyl-shirts.jpg | R3 | Jun 8 | good |
| carousel C-1 — carousel-rotating-images | custom-vinyl-shirts.jpg | public/images/vinyl/custom-vinyl-shirts.jpg | May 18 batch | May 18 | initial locked |
| carousel C-2 — carousel-rotating-images | vinyl-hoodie.jpg | public/images/vinyl/vinyl-hoodie.jpg | May 18 batch | May 18 | initial locked |
| carousel C-3 — carousel-rotating-images | vinyl-caps.jpg | public/images/vinyl/vinyl-caps.jpg | May 18 batch | May 18 | initial locked |
| carousel C-4 — carousel-rotating-images | vinyl-zip-up-hoodies.jpg | public/images/vinyl/vinyl-zip-up-hoodies.jpg | May 18 batch | May 18 | initial locked |
| card-1 — card-image-with-text | custom-vinyl-shirts.jpg | public/images/vinyl/custom-vinyl-shirts.jpg | May 18 batch | May 18 | initial locked, repeat (same as C-1) |
| card-2 — card-image-with-text | custom-vinyl-hoodies.jpg | public/images/vinyl/custom-vinyl-hoodies.jpg | May 18 batch | May 18 | initial locked |
| card-2image image1 — card-2image-with-text | custom-caps-vinyl.jpg | public/images/vinyl/custom-caps-vinyl.jpg | May 18 batch | May 18 | initial locked |
| card-2image image2 — card-2image-with-text | neon-vinyl-shirts.jpg | public/images/vinyl/neon-vinyl-shirts.jpg | May 18 batch | May 18 | initial locked |
| card-3 — card-image-with-text | vinyl-zip-up-hoodies.jpg | public/images/vinyl/vinyl-zip-up-hoodies.jpg | May 18 batch | May 18 | initial locked, repeat (same as C-4) |
| card-detailed image1 — card-detailed-info (single image) | top5pct-vinyl-t-shirt-maker.jpg | public/images/vinyl/top5pct-vinyl-t-shirt-maker.jpg | R3 | Jun 8 | good |
| slide-L — card-banner-slide-in (direction left) | custom-vinyl-hoodies.jpg | public/images/vinyl/custom-vinyl-hoodies.jpg | May 18 batch | May 18 | initial locked, repeat (same as card-2) |
| slide-R — card-banner-slide-in (direction right) | vinyl-caps.jpg | public/images/vinyl/vinyl-caps.jpg | May 18 batch | May 18 | initial locked, repeat (same as C-3) |

**Unused files in dir (not referenced by blade):**
| file | round | date | size | locked | note |
|---|---|---|---|---|---|
| custom-hoodies.jpg | May 18 batch | May 18 | 294KB | yes | locked, unused |
| vinyl-t-shirt-maker.jpg | May 18 batch | May 18 | 386KB | yes | locked, superseded by R3 top5pct-vinyl-t-shirt-maker.jpg (same size) |
| vinyl-shirts.jpg | May 18 batch | May 18 | 388KB | yes | locked, superseded by R3 top5pct-vinyl-shirts.jpg (same size) |
| top5pct-article-yard-signs-buy.jpg | May 18 batch | May 18 | 47KB | yes | wrong-subject: yard signs, not vinyl apparel |
| top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg | May 18 batch | May 18 | 96KB | yes | wrong-subject: yard signs, not vinyl apparel |

**Notes:**
- 13 slots total. 2 good (hero, card-detailed), 11 locked (all May 18). 0 wrong-dir 404s. 85% locked.
- **Four repeat instances**: `custom-vinyl-shirts.jpg` ×2 (C-1, card-1); `vinyl-zip-up-hoodies.jpg` ×2 (C-4, card-3); `custom-vinyl-hoodies.jpg` ×2 (card-2, slide-L); `vinyl-caps.jpg` ×2 (C-3, slide-R).
- **Dir is a near-duplicate of `digital-vinyl/`** — the May 18 locked batch (10 non-yard-signs files) appears in both dirs with identical filenames and byte-for-byte matching file sizes. The two wrong-subject yard-signs files also appear in both dirs at the same 47KB and 96KB sizes. The May 18 batch was almost certainly copied or uploaded to both dirs at once, serving as placeholder content for two related pages.
- **R3 replacements match May 18 originals in size**: `top5pct-vinyl-shirts.jpg` (R3, 388KB) matches `vinyl-shirts.jpg` (May 18, 388KB). `top5pct-vinyl-t-shirt-maker.jpg` (R3, 386KB) matches `vinyl-t-shirt-maker.jpg` (May 18, 386KB). Likely the same images renamed with the `top5pct-` prefix when they were republished.
- **card-detailed-info is the only slot outside the hero with a good (R3) image** — unlike digital-vinyl where card-detailed was still locked.
- **Both wrong-subject yard-signs files are unused** — same situation as digital-vinyl/. They were uploaded to the wrong dir and never referenced.
- `custom-hoodies.jpg` (May 18, locked, unused) — not referenced by any slot in this blade. Appears unused in digital-vinyl/ as well.
- **No cross-dir references** — all 13 slots pull from `vinyl/` own dir.
- Blade lives correctly in `specialty-materials/` subfolder. URL slug `vinyl` matches blade filename `vinyl.blade.php` — no name mismatch.
- Three other vinyl-related blades exist: `specialty-materials/vinyl.blade.php` (this page), `printing-options/digital-vinyl.blade.php`, and `vinyl-shirts.blade.php` at the `custom-apparel/` root level.
- card-detailed-info is single-image (only `image1` and `alt1`). Fourteenth consecutive page with single-image card-detailed.

---

## Unused Images by Category and Page

Files present in a page's own dir but not referenced by that page's blade. Organized by section, then page. Pages with zero unused files are omitted. "Unlocked, unused" files — especially R3 — are the clearest signal of incomplete blade wiring.

---

### Signs / Table Signs

**table-cloths** (`public/images/table-cloths/`)
| file | round | date | size | locked | note |
|---|---|---|---|---|---|
| top5pct-custom-table-cloth-joliet-crest-hill.jpg | Initial | Mar 16 | unknown | yes | candidate for slide-L or card-detailed replacement |

**table-runners** (`public/images/table-runners/`)
| file | round | date | size | locked | note |
|---|---|---|---|---|---|
| top5pct-printed-table-cloths.jpg | R2 | Jun 2 | unknown | no | table cloth image in a table runners dir, wrong product |
| top5pct-personalized-tablecloth-joliet.jpg | R1 | May 11 | unknown | no | table cloth image in a table runners dir, wrong product |
| top5pct-table-cloths.jpg | R1 | May 11 | unknown | no | table cloth image in a table runners dir, wrong product |
| top5pct-custom-table-cloth.jpg | R1 | May 11 | unknown | no | table cloth image in a table runners dir, wrong product |

---

### Signs / Vehicle Graphics

**dot-decals** (`public/images/dot-decals/` or similar)
| file | round | date | size | locked | note |
|---|---|---|---|---|---|
| top5pct-banner-DOT-stickers-joliet-shorewood-channahon.jpg | Initial | Mar 16 | 113KB | yes | unused locked Initial |
| top5pct-trucking-logo-joliet-shorewood-crest-hill.jpg | Initial | Mar 16 | 92KB | yes | unused locked Initial |
| top5pct-dot-decals-joliet-shorewood-rockdale.jpg | Initial | Mar 16 | 63KB | yes | unused locked Initial |
| top5pct-trucking-logo-joliet-shorewood-rockdale.jpg | Initial | Mar 16 | 45KB | yes | unused locked Initial |

**vehicle-magnets** (`public/images/vehicle-magnets/`)
| file | round | date | size | locked | note |
|---|---|---|---|---|---|
| top5pct-banner-car-magnets-joliet-shorewood-crest-hill.jpg | Initial | Mar 16 | 63KB | yes | unused locked Initial |
| top5pct-business-magnets-car-magnets-joliet.jpg | Initial | Mar 16 | 52KB | yes | unused locked Initial |
| top5pct-car-magnets-truck-magnets-joliet.jpg | Initial | Mar 16 | 44KB | yes | unused locked Initial |
| top5pct-large-magnets-magnets-near-me-joliet.jpg | Initial | Mar 16 | 40KB | yes | unused locked Initial |
| top5pct-article-car-magnets-truck-magnets.jpg | Initial | Mar 16 | 22KB | yes | unused locked Initial |
| top5pct-joliet-car-magnets.jpg | R2 | Jun 2 | 651KB | no | unlocked, unused — candidate to replace locked slide-R |
| top5pct-yard-signs-near-me.jpg | R2 | Jun 2 | 514KB | no | unlocked, unused — off-topic filename (yard signs) in magnets dir |
| top5pct-truck-sign-magnets-joliet.jpg | R2 | Jun 2 | 364KB | no | unlocked, unused here — is used as slide-L on dot-decals page |

**automobile-graphics** (`public/images/automobile-graphics/`)
| file | round | date | size | locked | note |
|---|---|---|---|---|---|
| top5pct-banner-vinyl-lettering-car-wraps-joliet.jpg | Initial | Mar 16 | 248KB | yes | largest Initial file across all dirs, unused locked |
| top5pct-vinyl-lettering-car-graphics-joliet-shorewood.jpg | Initial | Mar 16 | 67KB | yes | unused locked Initial |
| top5pct-car-wraps-vinyl-lettering-joliet-shorewood.jpg | Initial | Mar 16 | 63KB | yes | unused locked Initial |
| top5pct-boat-decals-joliet-shorewood-crest-hill.jpg | Initial | Mar 16 | 61KB | yes | unused locked Initial |
| top5pct-truck-decal-joliet-shorewood-rockdale.jpg | Initial | Mar 16 | 49KB | yes | unused locked Initial |

---

### Custom Apparel / Group Wear

**corporate-wear-shirts** (`public/images/corporate-wear/`)
| file | round | date | size | locked | note |
|---|---|---|---|---|---|
| top5pct-custom-corporate-t-shirts-joliet-shorewood.jpg | Initial | Mar 16 | 45KB | yes | unused locked Initial |
| top5pct-custom-hoodie-pullover-joliet-shorewood.jpg | Initial | Mar 16 | 41KB | yes | unused locked Initial |
| top5pct-custom-polo-shirts-joliet-shorewood-crest-hill.jpg | Initial | Mar 16 | 30KB | yes | unused locked Initial |

**reunion-shirts** (`public/images/reunion-shirts/`)
| file | round | date | size | locked | note |
|---|---|---|---|---|---|
| top5pct-class-reunion-shirts-joliet-shorewood.jpg | Initial | Mar 16 | 55KB | yes | unused locked Initial |
| top5pct-westinghouse-class-reunion-shirt-joliet-shorewood.jpg | Initial | Mar 16 | 43KB | yes | unused locked Initial |

---

### Custom Apparel / Specialty Materials

All specialty-materials pages except puff-shirts and vinyl have zero unused files in their own dirs. Puff-shirts dir is completely empty. Vinyl is below.

**vinyl** (`public/images/vinyl/`)
| file | round | date | size | locked | note |
|---|---|---|---|---|---|
| top5pct-article-yard-signs-buy.jpg | May 18 batch | May 18 | 47KB | yes | wrong-subject — yard signs image, not vinyl apparel |
| top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg | May 18 batch | May 18 | 96KB | yes | wrong-subject — yard signs image, not vinyl apparel |
| custom-hoodies.jpg | May 18 batch | May 18 | 294KB | yes | locked, unused, no blade slot assigned |
| vinyl-shirts.jpg | May 18 batch | May 18 | 388KB | yes | superseded by R3 top5pct-vinyl-shirts.jpg (same size, now used as hero) |
| vinyl-t-shirt-maker.jpg | May 18 batch | May 18 | 386KB | yes | superseded by R3 top5pct-vinyl-t-shirt-maker.jpg (same size, now card-detailed) |

---

### Custom Apparel / Printing Options

Rhinestone, embroidery, screen-printing, and dye-sublimation have zero unused files in their own dirs.

**dtf-printing** (`public/images/dtf-transfers/`)
| file | round | date | size | locked | note |
|---|---|---|---|---|---|
| toptpct-dtf-transfer-pricing.jpg | Initial | Mar 16 | 201KB | yes | locked, unused — prefix typo "toptpct" matches other locked Initial files in this dir |
| top5pct-custom-baby-clothing-joliet.jpg | R2 | Jun 2 | 330KB | no | unlocked, unused — candidate for a future card slot |
| top5pct-custom-shirt-with-picture.jpg | R1 | May 11 | 612KB | no | unlocked, unused — candidate for a future card slot |
| top5pct-custom-sweatshirts.jpg | R1 | May 11 | 170KB | no | unlocked, unused — candidate for a future card slot |

**digital-vinyl** (`public/images/digital-vinyl/`)
| file | round | date | size | locked | note |
|---|---|---|---|---|---|
| top5pct-article-yard-signs-buy.jpg | May 18 batch | May 18 | 47KB | yes | wrong-subject — yard signs image copied from vinyl/ batch |
| top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg | May 18 batch | May 18 | 96KB | yes | wrong-subject — yard signs image copied from vinyl/ batch |
| custom-hoodies.jpg | May 18 batch | May 18 | 294KB | yes | locked, unused, no blade slot assigned |
| vinyl-t-shirt-maker.jpg | May 18 batch | May 18 | 386KB | yes | locked, unused — R3 replacements exist but this original never assigned |
| top5pct-digital-vinyl-shirts.jpg | R3 | Jun 8 | 706KB | no | **unlocked R3, unused — staged replacement not yet wired into blade** |
| top5pct-digital-vinyl-hoodies-in-joliet.jpg | R3 | Jun 8 | 398KB | no | **unlocked R3, unused — staged replacement not yet wired into blade** |
| top5pct-digital-vinyl-hoodie.jpg | R3 | Jun 8 | 379KB | no | **unlocked R3, unused — staged replacement not yet wired into blade** |

---

### Unlocked unused files — priority signal

These unlocked files are sitting in their dirs but unassigned to any blade slot. These are the clearest sign of incomplete wiring — the image is ready, permissions are fine, it just needs a blade reference.

| dir | file | round | date | size | current status |
|---|---|---|---|---|---|
| digital-vinyl/ | top5pct-digital-vinyl-shirts.jpg | R3 | Jun 8 | 706KB | unlocked, unassigned |
| digital-vinyl/ | top5pct-digital-vinyl-hoodies-in-joliet.jpg | R3 | Jun 8 | 398KB | unlocked, unassigned |
| digital-vinyl/ | top5pct-digital-vinyl-hoodie.jpg | R3 | Jun 8 | 379KB | unlocked, unassigned |
| dtf-transfers/ | top5pct-custom-baby-clothing-joliet.jpg | R2 | Jun 2 | 330KB | unlocked, unassigned |
| dtf-transfers/ | top5pct-custom-shirt-with-picture.jpg | R1 | May 11 | 612KB | unlocked, unassigned |
| dtf-transfers/ | top5pct-custom-sweatshirts.jpg | R1 | May 11 | 170KB | unlocked, unassigned |
| vehicle-magnets/ | top5pct-joliet-car-magnets.jpg | R2 | Jun 2 | 651KB | unlocked, unassigned to vehicle-magnets blade |
| vehicle-magnets/ | top5pct-truck-sign-magnets-joliet.jpg | R2 | Jun 2 | 364KB | unlocked, used on dot-decals blade but unassigned here |
| vehicle-magnets/ | top5pct-yard-signs-near-me.jpg | R2 | Jun 2 | 514KB | unlocked, unassigned, off-topic filename |
| table-runners/ | top5pct-printed-table-cloths.jpg | R2 | Jun 2 | unknown | unlocked, wrong product in dir |
| table-runners/ | top5pct-personalized-tablecloth-joliet.jpg | R1 | May 11 | unknown | unlocked, wrong product in dir |
| table-runners/ | top5pct-table-cloths.jpg | R1 | May 11 | unknown | unlocked, wrong product in dir |
| table-runners/ | top5pct-custom-table-cloth.jpg | R1 | May 11 | unknown | unlocked, wrong product in dir |

---

## Placement Issues

All permissions are resolved. The remaining work is entirely about what images are placed, where they are placed, and whether they belong there.

---

### Not placed — images in dir, not referenced by any blade slot

These images exist, are accessible, and belong to the page topic, but no blade slot points to them. Incomplete wiring.

| dir | file | round | date | size | next action |
|---|---|---|---|---|---|
| digital-vinyl/ | top5pct-digital-vinyl-shirts.jpg | R3 | Jun 8 | 706KB | assign to a carousel or card slot |
| digital-vinyl/ | top5pct-digital-vinyl-hoodies-in-joliet.jpg | R3 | Jun 8 | 398KB | assign to a carousel or card slot |
| digital-vinyl/ | top5pct-digital-vinyl-hoodie.jpg | R3 | Jun 8 | 379KB | assign to a carousel or card slot |
| dtf-transfers/ | top5pct-custom-baby-clothing-joliet.jpg | R2 | Jun 2 | 330KB | candidate for a future card slot |
| dtf-transfers/ | top5pct-custom-shirt-with-picture.jpg | R1 | May 11 | 612KB | candidate for a future card slot |
| dtf-transfers/ | top5pct-custom-sweatshirts.jpg | R1 | May 11 | 170KB | candidate for a future card slot |
| vehicle-magnets/ | top5pct-joliet-car-magnets.jpg | R2 | Jun 2 | 651KB | candidate to replace slide-R on vehicle-magnets page |

---

### Incorrectly placed — wrong product or wrong topic in an active slot

These images are referenced by a blade and will display, but show the wrong product or topic for the slot they fill.

| page | slot | current image | issue |
|---|---|---|---|
| floor-signs | all 10 carousel slots | wall-signs images | floor-signs/ dir is empty, page uses wall-signs images throughout |
| screen-printing | card-1 | top5pct-neon-vinyl-shirts.jpg | alt says screen printed shirts, image is neon vinyl shirts |
| screen-printing | card-2 | top5pct-vinyl-caps.jpg | alt says screen printing uniforms, image is vinyl caps |
| screen-printing | card-detailed image1 | top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | flock shirt image in a screen-printing article slot |
| brick-shirts | slide-R | top5pct-custom-hoodies.jpg | alt says flock/velvet shirts on a brick vinyl page |
| flock-shirts | carousel C-4 | top5pct-custom-vinyl-shirts.jpg | alt says flock velvet shirts, image is generic vinyl shirts |
| glow-in-the-dark-shirts | carousel C-4 | top5pct-custom-vinyl-shirts.jpg | alt says glow in the dark shirts, image is generic vinyl shirts |
| table-runners | (unused in dir) | 4 table-cloth images | table-cloth images uploaded to table-runners/ dir, wrong product |
| vehicle-magnets | (unused in dir) | top5pct-yard-signs-near-me.jpg | yard-signs image sitting in vehicle-magnets/ dir |

---

### Broken references — wrong-dir 404s

Blade points to a file path that does not exist. Image slot renders broken on the live page.

| page | slot | blade path | where the file actually lives |
|---|---|---|---|
| foil-shirts | slide-L | public/images/custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | public/images/glitter-shirts/ |
| screen-printing | slide-L | public/images/custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg | public/images/embroidery/ |
| dtf-printing | slide-L | public/images/custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg | public/images/embroidery/ |

---

### Pages missing category-specific images

These pages have no photography specific to their own product. Slots are filled with off-topic or shared images from other categories.

| page | situation |
|---|---|
| floor-signs | floor-signs/ dir is completely empty. All 10 carousel slots use wall-signs images. Needs a dedicated photo shoot. |
| puff-shirts | puff-shirts/ dir is completely empty. All slots pull from custom-shirts/. |
| holographic-shirts | Only 3 files in dir for 9 slots. Structural shortage, not a wiring issue. New images needed. |

---

### Undersized images in active slots

| page | slot | image | dimensions | issue |
|---|---|---|---|---|
| table-cloths | slide-L | top5pct-article-custom-table-cloths-joliet.jpg | 261x177px, 21KB | too small for a slide-in banner slot |

---

## Inventory Summary (Custom Apparel Section, Jun 18, 2026)

**Pages covered:** 14 pages across specialty-materials (reflective, foil, holographic, brick, flock, glow-in-the-dark, puff, vinyl) and printing-options (rhinestone, embroidery, screen-printing, dye-sublimation, dtf-printing, digital-vinyl).

---

### Issue categories found

**Broken references — wrong-dir 404s**
Three confirmed broken image slots on the live site. Foil slide-L references a file that lives in `glitter-shirts/` not `custom-shirts/`. Screen-printing slide-L and DTF slide-L both reference the same broken path — `custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` — which only exists in `embroidery/`. The same wrong path was copied into two separate blades. See the Placement Issues section above for the full table.

**Not placed — unassigned R1/R2/R3 images**
Several dirs contain R1, R2, or R3 images that are not referenced by any blade slot. The three R3 files in `digital-vinyl/` are the clearest examples — uploaded, on-topic, and sitting unused while the page blade still points to placeholder files. See the Placement Issues section above for the full table.

**Incorrectly placed — wrong topic in an active slot**
Multiple pages display images that do not match the product or section they are placed in. The most widespread pattern is the generic `top5pct-custom-vinyl-shirts.jpg` appearing in carousel C-4 on both flock-shirts and glow-in-the-dark-shirts with off-topic alt text. The floor-signs page has no floor-signs photography at all — all 10 carousel slots show wall-signs images. See the Placement Issues section above for the full table.

**Cross-dir repeat references — shared placeholder in slide slots**
All seven specialty-materials pages pull the same holographic image from `custom-shirts/` for a slide slot. This is a shared cross-dir dependency that affects the whole group uniformly. Each page needs its own on-topic image in that slot.

**May 18 placeholder batch — vinyl and digital-vinyl dirs**
Both dirs share an identical set of May 18 placeholder files — same filenames, same byte sizes — indicating a single upload copied to two dirs at once. Both dirs also contain the same two wrong-subject yard-signs images from that batch. The `digital-vinyl/` dir also has a `.DS_Store` Mac metadata file. A loose DTF price-chart file sits at the `public/images/` root outside any subdir.

**Repeat usage — same image in multiple slots on one page**
Most common on digital-vinyl, vinyl, holographic-shirts, flock-shirts, and glow-in-the-dark-shirts pages, where not enough unique images were available when the blade was wired. Some individual files appear in three or more slots on the same page.

**Filename typos**
Four confirmed typos baked into filenames that are actively referenced in blades: `rhinetsone` (rhinestone and puff pages), `sublmation` (dye-sublimation slide-R), `embroidered-caps-old` (embroidery slide-R), and `toptpct-` prefix (DTF dir, two files). All load without error but carry the wrong name permanently unless renamed and rereferenced.

**Dir, URL, and blade name mismatches**
Three URL-to-dir-name mismatches: glow-in-the-dark-shirts points to `glow-shirts/`, dye-sublimation-printing points to `sublimation/`, dtf-printing points to `dtf-transfers/`. Two blades live outside their expected subdir: `dye-sublimation.blade.php` and `dtf-transfers.blade.php` are in `custom-apparel/` root rather than `custom-apparel/printing-options/`.

**Universal structural observation**
`card-detailed-info` uses only `image1` across all 14 pages inventoried. The `image2` slot exists in the component but has never been used in this section.

---

*Last updated: Jun 24, 2026 — permissions resolved; Placement Issues section added covering not placed, incorrectly placed, broken references, pages missing category images, and undersized slots.*
