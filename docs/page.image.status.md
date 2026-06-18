# Page Image Status

Blade-verified image inventory. One page per section.
Columns: section/category (component + slot), image filename, full image path, round, file date, status.

Status codes: `good` | `initial` | `repeat` | `placeholder` | `undersized`

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
| carousel C-5 — carousel-rotating-images | top5pct-table-cloths-for-businesses.jpg | public/images/table-cloths/top5pct-table-cloths-for-businesses.jpg | R3 | Jun 4 | good |
| carousel C-6 — carousel-rotating-images | top5pct-table-cloth-with-photos.jpg | public/images/table-cloths/top5pct-table-cloth-with-photos.jpg | R3 | Jun 4 | good |
| card-1 — card-image-with-text | top5pct-custom-table-cloth-business.jpg | public/images/table-cloths/top5pct-custom-table-cloth-business.jpg | R2 | Jun 8 | good |
| card-2 — card-image-with-text | top5pct-printed-table-cloths.jpg | public/images/table-cloths/top5pct-printed-table-cloths.jpg | R2 | Jun 8 | good |
| card-detailed image1 — card-detailed-info | top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg | public/images/table-cloths/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg | Initial | Jun 8 | initial |
| slide-L — card-banner-slide-in | top5pct-article-custom-table-cloths-joliet.jpg | public/images/table-cloths/top5pct-article-custom-table-cloths-joliet.jpg | Initial | Jun 8 | undersized (261x177px, 21KB) |
| slide-R — card-banner-slide-in | top5pct-retractable-banner.jpg | public/images/banners/top5pct-retractable-banner.jpg | R1 | May 11 | good |

**Notes:**
- slide-L is a 261x177px thumbnail (21KB). Far too small for a slide-in banner. Needs replacement.
- card-detailed image1 is a locked (permissions -rw-------) Initial file.
- Unused in dir: `top5pct-custom-table-cloth-joliet-crest-hill.jpg` (Jun 8, locked, Initial). Candidate for slide-L or card-detailed replacement.
- slide-R uses a banners/ image (retractable banner product shot). Contextually appropriate for the "complete your event setup" slide.

---

#### /signs/table-signs/table-runners

**Blade:** `resources/views/pages/signs/table-runners.blade.php`
**URL:** `/signs/table-signs/table-runners`
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-custom-table-cloth-business.jpg | public/images/table-runners/top5pct-custom-table-cloth-business.jpg | R2 | Jun 2 | wrong topic (table cloth image on a table runners page) |
| carousel C-1 — carousel-rotating-images | top5pct-custom-table-runner.jpg | public/images/table-runners/top5pct-custom-table-runner.jpg | R1 | May 11 | good |
| carousel C-2 — carousel-rotating-images | top5pct-custom-table-runners.jpg | public/images/table-runners/top5pct-custom-table-runners.jpg | R1 | May 11 | good |
| carousel C-3 — carousel-rotating-images | top5pct-table-runner.jpg | public/images/table-runners/top5pct-table-runner.jpg | R1 | May 11 | good |
| carousel C-4 — carousel-rotating-images | top5pct-table-runners.jpg | public/images/table-runners/top5pct-table-runners.jpg | R1 | May 11 | good |
| carousel C-5 — carousel-rotating-images | top5pct-custom-table-runner-near-me.jpg | public/images/table-runners/top5pct-custom-table-runner-near-me.jpg | R3 | Jun 6 | good |
| carousel C-6 — carousel-rotating-images | top5pct-table-runner-company.jpg | public/images/table-runners/top5pct-table-runner-company.jpg | R3 | Jun 6 | good |
| carousel C-7 — carousel-rotating-images | top5pct-table-runner-covers.jpg | public/images/table-runners/top5pct-table-runner-covers.jpg | R3 | Jun 6 | good |
| carousel C-8 — carousel-rotating-images | top5pct-table-runners-customized.jpg | public/images/table-runners/top5pct-table-runners-customized.jpg | R3 | Jun 6 | good |
| card-1 — card-image-with-text | top5pct-table-runner-joliet.jpg | public/images/table-runners/top5pct-table-runner-joliet.jpg | R2 | Jun 2 | good |
| card-2 — card-image-with-text | top5pct-custom-table-runner-joliet-new-lenox.jpg | public/images/table-runners/top5pct-custom-table-runner-joliet-new-lenox.jpg | Initial | Mar 16 | initial |
| card-2img-1 — card-2image-with-text | top5pct-custom-table-runner-joliet-shorewood.jpg | public/images/table-runners/top5pct-custom-table-runner-joliet-shorewood.jpg | Initial | Mar 16 | initial |
| card-2img-2 — card-2image-with-text | top5pct-custom-table-skirt-joliet-shorewood-plainfield.jpg | public/images/table-runners/top5pct-custom-table-skirt-joliet-shorewood-plainfield.jpg | Initial | Mar 16 | initial |
| card-3 — card-image-with-text | top5pct-table-runner-popus-gourmet-popcorn-joliet.jpg | public/images/table-runners/top5pct-table-runner-popus-gourmet-popcorn-joliet.jpg | Initial | Mar 16 | initial |
| card-detailed image1 — card-detailed-info | top5pct-article-custom-table-cloths-joliet.jpg | public/images/table-runners/top5pct-article-custom-table-cloths-joliet.jpg | Initial | Mar 16 | undersized (261x177px, 21KB) |
| slide-R — card-banner-slide-in (direction right) | top5pct-custom-table-runner-joliet-shorewood.jpg | public/images/table-runners/top5pct-custom-table-runner-joliet-shorewood.jpg | Initial | Mar 16 | initial, repeat |
| slide-L — card-banner-slide-in (direction left) | top5pct-retractable-banner.jpg | public/images/banners/top5pct-retractable-banner.jpg | R1 | May 11 | good |

**Notes:**
- Hero uses `top5pct-custom-table-cloth-business.jpg` — a table cloth image, not a table runner image. Filename clearly says "table-cloth." R2 quality but wrong topic for this page.
- card-detailed image1 is the same 261x177px (21KB) thumbnail used on the table-cloths page. Undersized on both pages.
- slide-R repeats card-2img-1 (same file: `top5pct-custom-table-runner-joliet-shorewood.jpg`).
- 4 consecutive Initial slots (card-2, card-2img-1, card-2img-2, card-3) in the lower page sections. All locked Mar 16 files.
- Unused R1/R2 files in dir (not in blade): `top5pct-table-runner-joliet.jpg` is used. Unused: `top5pct-printed-table-cloths.jpg` (Jun 2, R2), `top5pct-personalized-tablecloth-joliet.jpg` (May 11, R1), `top5pct-table-cloths.jpg` (May 11, R1), `top5pct-custom-table-cloth.jpg` (May 11, R1) — all are table cloth images sharing this dir, not runner images.

---

### /signs/ground-signs

#### /signs/ground-signs/sidewalk-signs-a-frame-signs

**Blade:** `resources/views/pages/signs/sidewalk-signs-a-frame-signs.blade.php`
**URL:** `/signs/ground-signs/sidewalk-signs-a-frame-signs`
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-a-frame-sidewalk-signs.jpg | public/images/sidewalk-signs/top5pct-a-frame-sidewalk-signs.jpg | R2 | Jun 2 | good |
| carousel C-1 — carousel-rotating-images | top5pct-a-frame-sign.jpg | public/images/sidewalk-signs/top5pct-a-frame-sign.jpg | R1 | May 11 | good |
| carousel C-2 — carousel-rotating-images | top5pct-custom-a-frame-sidewalk-signs-joliet.jpg | public/images/sidewalk-signs/top5pct-custom-a-frame-sidewalk-signs-joliet.jpg | R1 | May 11 | good |
| carousel C-3 — carousel-rotating-images | top5pct-sidewalk-sign.jpg | public/images/sidewalk-signs/top5pct-sidewalk-sign.jpg | R1 | May 11 | good |
| carousel C-4 — carousel-rotating-images | top5pct-sidewalk-signs-joliet.jpg | public/images/sidewalk-signs/top5pct-sidewalk-signs-joliet.jpg | R2 | Jun 2 | good |
| card-1 — card-image-with-text | top5pct-sidewalk-signs-joliet-old.jpg | public/images/sidewalk-signs/top5pct-sidewalk-signs-joliet-old.jpg | R1 | May 11 | good |
| card-2 — card-image-with-text | top5pct-sidewalk-signage.jpg | public/images/sidewalk-signs/top5pct-sidewalk-signage.jpg | R2 | Jun 2 | good |
| card-detailed image1 — card-detailed-info | top5pct-article-a-frame-sidewalk-signs.jpg | public/images/sidewalk-signs/top5pct-article-a-frame-sidewalk-signs.jpg | Initial | Mar 16 | initial |
| slide-R — card-banner-slide-in (direction right) | top5pct-a-frame-sidewalk-signs.jpg | public/images/sidewalk-signs/top5pct-a-frame-sidewalk-signs.jpg | R2 | Jun 2 | repeat |
| slide-L — card-banner-slide-in (direction left) | top5pct-mesh-construction-banner.jpg | public/images/banners/top5pct-mesh-construction-banner.jpg | R2 | Jun 2 | good |

**Notes:**
- slide-R repeats hero (same file: `top5pct-a-frame-sidewalk-signs.jpg`). One of those two slots needs a different image.
- card-detailed image1 is a locked (permissions -rw-------) Initial file at 56KB.
- card-1 filename contains "old" suffix (`top5pct-sidewalk-signs-joliet-old.jpg`). R1 quality and not locked, but naming suggests it may be an older product shot. Worth reviewing visually.
- 3 R3 files exist in sidewalk-signs/ dir but are NOT in this blade's carousel: `top5pct-a-frame-signs-joliet.jpg` (Jun 9), `top5pct-sidewalk-sign-a-frame-cresthill.jpg` (Jun 9), `top5pct-sidewalk-signs-plainfield.jpg` (Jun 8). Adding any of these to the carousel would also resolve the slide-R repeat (swap slide-R for one of these).
- Unused locked Initial files in dir (not in blade): `top5pct-a-frame-sidewalk-sign-joliet.jpg`, `top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg`, `top5pct-sidewalk-a-frames-joliet-shorewood.jpg`, `top5pct-banner-a-frame-sidewalk-signs-joliet-romeoville.jpg`.
- Page content note: schema, title, heading, and FAQs are all about "Parking Signs," not a-frame/sidewalk signs. The images show sidewalk/a-frame signs. URL and content topic are misaligned. Not an image issue but worth flagging.

---

#### /signs/ground-signs/sidewalk-signs

**Blade:** `resources/views/pages/signs/sidewalk-signs.blade.php`
**URL:** `/signs/ground-signs/sidewalk-signs`
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-sidewalk-signage.jpg | public/images/sidewalk-signs/top5pct-sidewalk-signage.jpg | R2 | Jun 2 | good |
| carousel C-1 — carousel-rotating-images | top5pct-a-frame-sign.jpg | public/images/sidewalk-signs/top5pct-a-frame-sign.jpg | R1 | May 11 | good |
| carousel C-2 — carousel-rotating-images | top5pct-custom-a-frame-sidewalk-signs-joliet.jpg | public/images/sidewalk-signs/top5pct-custom-a-frame-sidewalk-signs-joliet.jpg | R1 | May 11 | good |
| carousel C-3 — carousel-rotating-images | top5pct-sidewalk-sign.jpg | public/images/sidewalk-signs/top5pct-sidewalk-sign.jpg | R1 | May 11 | good |
| carousel C-4 — carousel-rotating-images | top5pct-sidewalk-signs-joliet.jpg | public/images/sidewalk-signs/top5pct-sidewalk-signs-joliet.jpg | R2 | Jun 2 | good |
| carousel C-5 — carousel-rotating-images | top5pct-a-frame-signs-joliet.jpg | public/images/sidewalk-signs/top5pct-a-frame-signs-joliet.jpg | R3 | Jun 9 | good |
| carousel C-6 — carousel-rotating-images | top5pct-sidewalk-sign-a-frame-cresthill.jpg | public/images/sidewalk-signs/top5pct-sidewalk-sign-a-frame-cresthill.jpg | R3 | Jun 9 | good |
| carousel C-7 — carousel-rotating-images | top5pct-sidewalk-signs-plainfield.jpg | public/images/sidewalk-signs/top5pct-sidewalk-signs-plainfield.jpg | R3 | Jun 8 | good |
| card-1 — card-image-with-text | top5pct-a-frame-sidewalk-signs.jpg | public/images/sidewalk-signs/top5pct-a-frame-sidewalk-signs.jpg | R2 | Jun 2 | good |
| card-2 — card-image-with-text | top5pct-sidewalk-signs-joliet-old.jpg | public/images/sidewalk-signs/top5pct-sidewalk-signs-joliet-old.jpg | R1 | May 11 | good |
| card-3 — card-image-with-text | top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg | public/images/sidewalk-signs/top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg | Initial | Mar 16 | initial |
| card-detailed image1 — card-detailed-info | top5pct-article-a-frame-sidewalk-signs.jpg | public/images/sidewalk-signs/top5pct-article-a-frame-sidewalk-signs.jpg | Initial | Mar 16 | initial |
| slide-L — card-banner-slide-in (direction left) | top5pct-a-frame-sidewalk-sign-joliet.jpg | public/images/sidewalk-signs/top5pct-a-frame-sidewalk-sign-joliet.jpg | Initial | Mar 16 | initial |
| slide-R — card-banner-slide-in (direction right) | top5pct-business-signs-joliet-shorewood-crest-hill.jpg | public/images/business-signs/top5pct-business-signs-joliet-shorewood-crest-hill.jpg | Initial | Mar 16 | initial |

**Notes:**
- 4 Initial slots in the lower half of the page: card-3, card-detailed, slide-L, and slide-R. All are locked Mar 16 files.
- slide-R is a cross-dir business-signs/ image. Slide text is "Also Need Window or Wall Signs?" so using a business-signs image is contextually intentional, but the file is Initial (76KB, locked).
- card-detailed image1 (`top5pct-article-a-frame-sidewalk-signs.jpg`) is the same Initial file used on the a-frame-signs page. That file is serving two pages.
- card-2 filename contains "old" suffix (`top5pct-sidewalk-signs-joliet-old.jpg`). R1 quality, not locked, usable.
- No repeats among any of the 14 slots. All unique files.
- Carousel is strong: 7 images spanning R1, R2, and R3.
- Unused locked Initial files in sidewalk-signs/ dir (not in blade): `top5pct-sidewalk-a-frames-joliet-shorewood.jpg` (91KB), `top5pct-banner-a-frame-sidewalk-signs-joliet-romeoville.jpg` (96KB).

---

#### /signs/ground-signs/yard-signs

**Blade:** `resources/views/pages/signs/yard-signs.blade.php`
**URL:** `/signs/ground-signs/yard-signs`
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-custom-yard-signs-joliet.jpg | public/images/yard-signs/top5pct-custom-yard-signs-joliet.jpg | R1 | May 11 | good |
| carousel C-1 — carousel-rotating-images | top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg | public/images/yard-signs/top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg | Initial | Mar 16 | initial |
| carousel C-2 — carousel-rotating-images | top5pct-lawn-signs.jpg | public/images/yard-signs/top5pct-lawn-signs.jpg | R1 | May 11 | good |
| carousel C-3 — carousel-rotating-images | top5pct-yard-sign-joliet.jpg | public/images/yard-signs/top5pct-yard-sign-joliet.jpg | R1 | May 11 | good |
| carousel C-4 — carousel-rotating-images | top5pct-yard-signs-joliet.jpg | public/images/yard-signs/top5pct-yard-signs-joliet.jpg | R1 | May 11 | good |
| carousel C-5 — carousel-rotating-images | top5pct-yard-signs-plainfield.jpg | public/images/yard-signs/top5pct-yard-signs-plainfield.jpg | R3 | Jun 7 | good |
| carousel C-6 — carousel-rotating-images | top5pct-yard-signs-rockdale.jpg | public/images/yard-signs/top5pct-yard-signs-rockdale.jpg | R3 | Jun 7 | good |
| carousel C-7 — carousel-rotating-images | top5pct-yard-signs-shorewood.jpg | public/images/yard-signs/top5pct-yard-signs-shorewood.jpg | R3 | Jun 7 | good |
| card-1 — card-image-with-text | top5pct-yard-signs.jpg | public/images/yard-signs/top5pct-yard-signs.jpg | R1 | May 11 | good |
| card-2 — card-image-with-text | top5pct-yard-signs-joliet-plainfied-new-lenox.jpg | public/images/yard-signs/top5pct-yard-signs-joliet-plainfied-new-lenox.jpg | Initial | Mar 16 | initial |
| card-2img-1 — card-2image-with-text | top5pct-yard-signs-joliet-shorewood-romeoville.jpg | public/images/yard-signs/top5pct-yard-signs-joliet-shorewood-romeoville.jpg | Initial | Mar 16 | initial |
| card-2img-2 — card-2image-with-text | top5pct-yard-signs-joliet-old.jpg | public/images/yard-signs/top5pct-yard-signs-joliet-old.jpg | Initial | Mar 16 | initial |
| card-detailed image1 — card-detailed-info | top5pct-article-yard-signs-buy.jpg | public/images/yard-signs/top5pct-article-yard-signs-buy.jpg | Initial | Mar 16 | initial |
| slide-L — card-banner-slide-in (direction left) | top5pct-yard-signs-joliet-plainfied-new-lenox.jpg | public/images/yard-signs/top5pct-yard-signs-joliet-plainfied-new-lenox.jpg | Initial | Mar 16 | repeat |
| slide-R — card-banner-slide-in (direction right) | top5pct-retractable-banner.jpg | public/images/banners/top5pct-retractable-banner.jpg | R1 | May 11 | good |

**Notes:**
- slide-L repeats card-2: both use `top5pct-yard-signs-joliet-plainfied-new-lenox.jpg` (Initial, locked, 76KB). One of those two slots needs a different image.
- 5 unique Initial files in use: carousel C-1, card-2, card-2img-1, card-2img-2, card-detailed. All locked Mar 16.
- card-2img-2 (`top5pct-yard-signs-joliet-old.jpg`) is locked but 1.87MB, the largest Initial file seen in the inventory so far. The "old" suffix also flags it as a candidate for replacement.
- card-detailed image1 is 47KB (tiny, locked Initial). Standard card-detailed problem seen across most pages.
- carousel C-1 is the only Initial slot in a 7-image carousel that otherwise runs R1 through R3. Swapping it for one of the R1/R3 files in dir would clean the carousel.
- hero is R1 (May 11). Dir has no R2 or later hero-quality image beyond what is already in the carousel. The carousel's R3 files (Plainfield, Rockdale, Shorewood) could serve as a hero upgrade.
- slide-R cross-dir from banners/: slide text is "We Also Print Banners, Posters, and More" so using a banner image is intentional and contextually sound. R1 quality.
- Dir anomaly: `top5pct-table-signs-joliet-shorewood-plainfield.jpg` (Mar 16, Initial, 57KB, locked) is a table-signs image sitting in the yard-signs/ dir. Not in blade, wrong product category.

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
| carousel C-1 — carousel-rotating-images | top5pct-wall-signs-old.jpg | public/images/wall-signs/top5pct-wall-signs-old.jpg | R1 | May 11 | wrong topic |
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
- `top5pct-wall-signs-old.jpg` (carousel C-1) has "old" in the name. R1 quality, 496KB, unlocked, but the name flags it as a candidate for eventual replacement.
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
| carousel C-1 — carousel-rotating-images | top5pct-wall-signs-old.jpg | public/images/wall-signs/top5pct-wall-signs-old.jpg | R1 | May 11 | good |
| carousel C-2 — carousel-rotating-images | top5pct-wall-wraps.jpg | public/images/wall-signs/top5pct-wall-wraps.jpg | R3 | Jun 8 | good |
| carousel C-3 — carousel-rotating-images | top5pct-wall-decals-bedroom.jpg | public/images/wall-signs/top5pct-wall-decals-bedroom.jpg | R3 | Jun 6 | good |
| carousel C-4 — carousel-rotating-images | top5pct-wall-sign-for-businesses.jpg | public/images/wall-signs/top5pct-wall-sign-for-businesses.jpg | R3 | Jun 6 | good |
| carousel C-5 — carousel-rotating-images | top5pct-wall-signs-for-businesses.jpg | public/images/wall-signs/top5pct-wall-signs-for-businesses.jpg | R3 | Jun 6 | good |
| card-1 — card-image-with-text | top5pct-wall-wraps.jpg | public/images/wall-signs/top5pct-wall-wraps.jpg | R3 | Jun 8 | repeat |
| card-2 — card-image-with-text | top5pct-wall-signs-for-businesses.jpg | public/images/wall-signs/top5pct-wall-signs-for-businesses.jpg | R3 | Jun 6 | repeat |
| card-detailed image1 — card-detailed-info | top5pct-wall-signs-joliet.jpg | public/images/wall-signs/top5pct-wall-signs-joliet.jpg | R3 | Jun 8 | locked |
| slide-R — card-banner-slide-in (direction right) | top5pct-window-signs-joliet.jpg | public/images/window-signs/top5pct-window-signs-joliet.jpg | R2 | Jun 2 | good |
| slide-L — card-banner-slide-in (direction left) | top5pct-window-graphics-joliet.jpg | public/images/window-signs/top5pct-window-graphics-joliet.jpg | R3 | Jun 7 | good |

**Notes:**
- card-1 repeats carousel C-2: both use `top5pct-wall-wraps.jpg` (R3, Jun 8, 567KB).
- card-2 repeats carousel C-5: both use `top5pct-wall-signs-for-businesses.jpg` (R3, Jun 6, 365KB).
- card-detailed image1 (`top5pct-wall-signs-joliet.jpg`) is locked (-rw-------) with a Jun 8 date and is only 54KB. This is the same unusual pattern seen in other wall-signs/ Jun 8 locked files — newer date, restricted permissions, small size.
- carousel C-1 has "old" in the name (`top5pct-wall-signs-old.jpg`). R1 quality (May 11), unlocked, 496KB. Usable but flagged for eventual replacement.
- Both slides are cross-dir from window-signs/. Slide texts are "Turn Your Walls Into a Brand Statement" (slide-R) and "Window Graphics and Door Signs Available Too" (slide-L). Cross-sell intent is clear and contextually appropriate.
- Dir note: 3 locked Jun 8 files in wall-signs/ dir are NOT in this blade — they are used by the floor-signs page instead: `top5pct-article-window-wall-signs.jpg` (41KB), `top5pct-wall-decals-joliet.jpg` (63KB), `top5pct-banner-wall-decal-door-signs-joliet.jpg` (135KB). The wall-signs/ dir serves two pages simultaneously.

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
| carousel C-11 — carousel-rotating-images | top5pct-window-signs-for-businesses-joliet.jpg | public/images/window-signs/top5pct-window-signs-for-businesses-joliet.jpg | R3 | Jun 8 | good |
| card-1 — card-image-with-text | top5pct-window-signs-joliet.jpg | public/images/window-signs/top5pct-window-signs-joliet.jpg | R2 | Jun 2 | good |
| card-2 — card-image-with-text | top5pct-joliet-slammers-window-signs-joliet.jpg | public/images/window-signs/top5pct-joliet-slammers-window-signs-joliet.jpg | R2 | Jun 2 | good |
| card-detailed image1 — card-detailed-info | top5pct-banner-wall-decal-door-signs-joliet.jpg | public/images/wall-signs/top5pct-banner-wall-decal-door-signs-joliet.jpg | R3 | Jun 8 | wrong topic, locked |
| slide-L — card-banner-slide-in (direction left) | top5pct-window-signs-for-businesses-joliet.jpg | public/images/window-signs/top5pct-window-signs-for-businesses-joliet.jpg | R3 | Jun 8 | repeat |
| slide-R — card-banner-slide-in (direction right) | top5pct-wall-signs-for-businesses.jpg | public/images/wall-signs/top5pct-wall-signs-for-businesses.jpg | R3 | Jun 6 | good |

**Notes:**
- slide-L repeats carousel C-11: both use `top5pct-window-signs-for-businesses-joliet.jpg` (R3, Jun 8, 407KB).
- card-detailed image1 cross-dir from wall-signs/ (`top5pct-banner-wall-decal-door-signs-joliet.jpg`, Jun 8, locked, 135KB). This is a wall-signs image on a window-signs page. Same locked 135KB file that also appears on floor-signs (card-detailed) and wall-signs (not in blade). Third page that references this file.
- 11-image carousel is the largest in the inventory so far. Spans R1 (May 11), R2 (Jun 2), and R3 (Jun 7-8) rounds with all unique files. No gaps.
- slide-R cross-dir from wall-signs/ (R3, Jun 6). Slide text is "Also Install Wall Graphics and Floor Signs" — cross-sell intent is clear.
- 3 Initial locked files in window-signs/ dir are unused and not in blade: `top5pct-window-cling-decal-joliet-shorewood.jpg` (54KB), `top5pct-window-decal-joliet-shorewood-rockdale.jpg` (58KB), `top5pct-window-decals-joliet-shorewood-crest-hill.jpg` (72KB). All Mar 16, all locked.
- `top5pct-window-signs-joliet-old.jpg` (May 11, R1, 371KB) is in the dir but not in the blade. Has "old" in name, skipped from carousel.

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
| slide-R — card-banner-slide-in (direction right) | top5pct-portable-banners.jpg | public/images/banners/top5pct-portable-banners.jpg | R2 | Jun 2 | repeat |

**Notes:**
- First page in the inventory with zero Initial slots. All 14 images are R1 or R2.
- No cross-dir references — all images pull from banners/ dir.
- slide-L repeats card-detailed: both use `top5pct-retractable-banners-plainfield.jpg` (R2, Jun 2, 296KB).
- slide-R repeats card-2img-2 image2: both use `top5pct-portable-banners.jpg` (R2, Jun 2, 589KB).
- Carousel spans R1 only (C-1 through C-4 are all May 11). Hero is R2 but carousel was not updated in round 2. No R3 files exist in this dir.
- 8 unused locked Initial files in dir (none in blade): `top5pct-article-vinyl-banners-pic1.jpg` (22KB, the smallest file in the entire inventory), `top5pct-birthday-banner-joliet-shorewood-plainfield.jpg` (40KB), `top5pct-birthday-banners-joliet-shorewood-crest-hill.jpg` (42KB), `top5pct-banners-business-joliet-shorewood-crest-hill.jpg` (47KB), `top5pct-team-banners-joliet-shorewood-crest-hill.jpg` (47KB), `top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg` (51KB), `top5pct-family-reunion-banners-joliet-crest-hill.jpg` (64KB), `top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg` (89KB). These cover birthday, team, reunion, and business banner categories that are discussed on the page but not shown.

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
**Verified:** Jun 18, 2026

| section / category | image | image path | round | file date | status |
|---|---|---|---|---|---|
| hero — category-hero | top5pct-custom-business-shirts.jpg | public/images/corporate-wear/top5pct-custom-business-shirts.jpg | R1 | May 11 | good |
| carousel C-1 — carousel-rotating-images | top5pct-custom-apron-joliet.jpg | public/images/corporate-wear/top5pct-custom-apron-joliet.jpg | R1 | May 11 | good |
| carousel C-2 — carousel-rotating-images | top5pct-custom-aprons-joliet.jpg | public/images/corporate-wear/top5pct-custom-aprons-joliet.jpg | R1 | May 11 | good |
| carousel C-3 — carousel-rotating-images | top5pct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg | public/images/corporate-wear/top5pct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg | Initial | Mar 16 | initial, locked |
| carousel C-4 — carousel-rotating-images | top5pct-custom-pocket-shirt-joliet.jpg | public/images/corporate-wear/top5pct-custom-pocket-shirt-joliet.jpg | R1 | May 11 | good |
| card-1 — card-image-with-text | top5pct-landscaping-clothing-joliet.jpg | public/images/corporate-wear/top5pct-landscaping-clothing-joliet.jpg | R1 | May 11 | good |
| card-2 — card-image-with-text | top5pct-lawn-care-clothing.jpg | public/images/corporate-wear/top5pct-lawn-care-clothing.jpg | R1 | May 11 | good |
| card-2img image1 — card-2image-with-text | top5pct-safety-work-gear-joliet.jpg | public/images/corporate-wear/top5pct-safety-work-gear-joliet.jpg | R1 | May 11 | good |
| card-2img image2 — card-2image-with-text | top5pct-custom-company-apparel.jpg | public/images/corporate-wear/top5pct-custom-company-apparel.jpg | R2 | Jun 2 | good |
| card-3 — card-image-with-text | top5pct-custom-cap-hat-joliet-shorewood-rockdale.jpg | public/images/corporate-wear/top5pct-custom-cap-hat-joliet-shorewood-rockdale.jpg | Initial | Mar 16 | initial, locked |
| card-detailed image1 — card-detailed-info | top5pct-article-corporate-wear-pic1.jpg | public/images/corporate-wear/top5pct-article-corporate-wear-pic1.jpg | Initial | Mar 16 | initial, locked |
| card-detailed image2 — card-detailed-info | top5pct-article-corporate-wear-pic2.jpg | public/images/corporate-wear/top5pct-article-corporate-wear-pic2.jpg | Initial | Mar 16 | initial, locked |
| slide-R — card-banner-slide-in (direction right) | top5pct-custom-button-up-shirt-joliet-shorewood.jpg | public/images/corporate-wear/top5pct-custom-button-up-shirt-joliet-shorewood.jpg | Initial | Mar 16 | initial, locked |
| slide-L — card-banner-slide-in (direction left) | top5pct-volleyball-team-uniforms-joliet.jpg | public/images/spirit-wear/top5pct-volleyball-team-uniforms-joliet.jpg | R2 | Jun 2 | good |

**Notes:**
- 5 Initial locked slots in active blade positions — highest count in the entire inventory so far. carousel C-3 (127KB), card-3 (40KB), card-detailed image1 (14KB), card-detailed image2 (15KB), slide-R (42KB).
- card-detailed has two image slots (image1 and image2) — first page in the inventory with a dual-image card-detailed. Both slots are Initial locked.
- card-detailed image1 at 14KB and image2 at 15KB are the two smallest files seen in any active slot across the entire inventory.
- carousel C-3 is the first carousel slot in the inventory confirmed to be Initial locked. All other carousel images across all pages inventoried to date are R1 or newer.
- No repeats — all 14 images are unique.
- No R3 files in this dir. One R2 file (top5pct-custom-company-apparel.jpg, Jun 2). All other active unlocked images are R1.
- slide-L cross-dir from spirit-wear/ (R2, Jun 2, 606KB). Slide text "Employee Uniforms and Team Apparel, Ask About Group Pricing" — cross-sell appropriate.
- Dir mtime is Jun 8 but no file inside carries a Jun 8 date. A file was likely added then removed on that date, leaving the dir timestamp behind.
- 3 unused locked Initial files in dir (none in blade): `top5pct-custom-polo-shirts-joliet-shorewood-crest-hill.jpg` (30KB), `top5pct-custom-hoodie-pullover-joliet-shorewood.jpg` (41KB), `top5pct-custom-corporate-t-shirts-joliet-shorewood.jpg` (45KB).

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

*Last updated: Jun 18, 2026*
