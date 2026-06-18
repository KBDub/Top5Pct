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

*Last updated: Jun 18, 2026*
