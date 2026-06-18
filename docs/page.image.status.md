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

*Last updated: Jun 18, 2026*
