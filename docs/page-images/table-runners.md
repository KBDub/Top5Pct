# Table Runners — Image Status

**Blade:** `resources/views/pages/signs/table-runners.blade.php`
**URL:** `/signs/table-signs/table-runners`
**Dir:** `public/images/table-runners/` — 21 files total
**Verified:** Jun 25, 2026

---

## Round Reference

| round | date | note |
|---|---|---|
| Initial | Mar 16, 2026 | |
| R1 | May 11, 2026 | |
| R2 | Jun 2, 2026 | |
| R3 | Jun 6, 2026 | |

---

## Dir Inventory

| file | size | date | round | note |
|---|---|---|---|---|
| top5pct-article-custom-table-cloths-joliet.jpg | 21K | Mar 16 | Initial | used in card-detailed image1; very small |
| top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg | 101K | Mar 16 | Initial | unused in blade |
| top5pct-custom-table-cloth-joliet-crest-hill.jpg | 43K | Mar 16 | Initial | unused in blade; small |
| top5pct-custom-table-runner-joliet-new-lenox.jpg | 51K | Mar 16 | Initial | unused in blade |
| top5pct-custom-table-runner-joliet-shorewood.jpg | 58K | Mar 16 | Initial | used in slide-R; rule violation |
| top5pct-custom-table-skirt-joliet-shorewood-plainfield.jpg | 42K | Mar 16 | Initial | unused in blade |
| top5pct-table-runner-popus-gourmet-popcorn-joliet.jpg | 54K | Mar 16 | Initial | unused in blade |
| top5pct-custom-table-cloth.jpg | 352K | May 11 | R1 | unused in blade |
| top5pct-custom-table-runner.jpg | 571K | May 11 | R1 | |
| top5pct-custom-table-runners.jpg | 233K | May 11 | R1 | |
| top5pct-personalized-tablecloth-joliet.jpg | 178K | May 11 | R1 | unused in blade |
| top5pct-table-cloths.jpg | 333K | May 11 | R1 | unused in blade |
| top5pct-table-runner.jpg | 248K | May 11 | R1 | |
| top5pct-table-runners.jpg | 296K | May 11 | R1 | |
| top5pct-custom-table-cloth-business.jpg | 354K | Jun 2 | R2 | |
| top5pct-printed-table-cloths.jpg | 199K | Jun 2 | R2 | unused in blade |
| top5pct-table-runner-joliet.jpg | 329K | Jun 2 | R2 | |
| top5pct-custom-table-runner-near-me.jpg | 219K | Jun 6 | R3 | |
| top5pct-table-runner-company.jpg | 232K | Jun 6 | R3 | |
| top5pct-table-runner-covers.jpg | 157K | Jun 6 | R3 | |
| top5pct-table-runners-customized.jpg | 167K | Jun 6 | R3 | |

Dir summary: 7 Initial, 7 R1, 3 R2, 4 R3. 21 files total.
7 unused table-runners/ files: 5 Initial (all small), 4 R1-R2 with table-cloth names (copies across dirs, see note).

Note on table-cloth named files in this dir: `top5pct-custom-table-cloth.jpg`, `top5pct-personalized-tablecloth-joliet.jpg`, `top5pct-table-cloths.jpg`, and `top5pct-printed-table-cloths.jpg` share names with files in `public/images/table-cloths/`. These appear to be copies placed in table-runners/ from an earlier round. They are legitimate R1-R2 files by date, but their names describe table cloths, not table runners. They are available for blade use on this page and are appropriate since this page covers both products.

---

## Blade Image Slots

| slot | component | image | dir | round | date | size | status |
|---|---|---|---|---|---|---|---|
| hero | category-hero | top5pct-custom-table-cloth-business.jpg | table-runners/ | R2 | Jun 2 | 354K | good |
| C-1 | carousel-rotating-images | top5pct-custom-table-runner-near-me.jpg | table-runners/ | R3 | Jun 6 | 219K | good |
| C-2 | carousel-rotating-images | top5pct-table-runner-company.jpg | table-runners/ | R3 | Jun 6 | 232K | good |
| C-3 | carousel-rotating-images | top5pct-table-runner-covers.jpg | table-runners/ | R3 | Jun 6 | 157K | good |
| C-4 | carousel-rotating-images | top5pct-table-runners-customized.jpg | table-runners/ | R3 | Jun 6 | 167K | good |
| card-1 | card-image-with-text | top5pct-table-runner-joliet.jpg | table-runners/ | R2 | Jun 2 | 329K | good |
| card-2 | card-image-with-text (imagePosition right) | top5pct-custom-table-runner.jpg | table-runners/ | R1 | May 11 | 571K | good |
| card-2image image1 | card-2image-with-text | top5pct-custom-table-runners.jpg | table-runners/ | R1 | May 11 | 233K | good |
| card-2image image2 | card-2image-with-text | top5pct-table-runner.jpg | table-runners/ | R1 | May 11 | 248K | good |
| card-3 | card-image-with-text | top5pct-table-runners.jpg | table-runners/ | R1 | May 11 | 296K | good |
| card-detailed image1 | card-detailed-info | top5pct-article-custom-table-cloths-joliet.jpg | table-runners/ | Initial | Mar 16 | 21K | needs replacement; Initial and very small |
| slide-R | card-banner-slide-in (direction right) | top5pct-custom-table-runner-joliet-shorewood.jpg | table-runners/ | Initial | Mar 16 | 58K | rule violation: same-category; also Initial |
| slide-L | card-banner-slide-in (direction left) | top5pct-retractable-banner.jpg | banners/ | R1 | May 11 | 234K | good, cross-sell |

---

## R1-R3 Placement Summary

**Total blade image slots:** 13
**Filled R1-R3:** 11
**Remaining to fill:** 2

| slot | image | round | issue |
|---|---|---|---|
| card-detailed image1 | top5pct-article-custom-table-cloths-joliet.jpg | Initial | Initial; very small (21K); needs R1-R3 replacement |
| slide-R | top5pct-custom-table-runner-joliet-shorewood.jpg | Initial | Initial; same-category rule violation; needs R1-R3 cross-sell from another dir |

---

## Carousel

**Current slots:** 4
**Target:** 4. May exceed 4 if all non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | image | round | status |
|---|---|---|---|
| hero | top5pct-custom-table-cloth-business.jpg | R2 | good |
| card-1 | top5pct-table-runner-joliet.jpg | R2 | good |
| card-2 | top5pct-custom-table-runner.jpg | R1 | good |
| card-2image image1 | top5pct-custom-table-runners.jpg | R1 | good |
| card-2image image2 | top5pct-table-runner.jpg | R1 | good |
| card-3 | top5pct-table-runners.jpg | R1 | good |
| card-detailed image1 | top5pct-article-custom-table-cloths-joliet.jpg | Initial | needs fix |
| slide-R | top5pct-custom-table-runner-joliet-shorewood.jpg | Initial | needs fix; also rule violation |
| slide-L | top5pct-retractable-banner.jpg | R1 | good, cross-sell |

card-detailed image1 and slide-R are both Initial. Carousel cannot expand until both are resolved. All 4 carousel slots are table-runners/ same-dir R3 (Jun 6).

---

## Rule Violations

### slide-R — same-category + Initial

slide-R (direction right) uses `top5pct-custom-table-runner-joliet-shorewood.jpg` (table-runners/, Initial, Mar 16, 58K). This is a double violation: the image is from the same category as the page (table-runners/), and it is Initial. slide-R must always be a cross-sell from another category, and it must be R1-R3.

### card-detailed image1 — Initial

card-detailed-info uses `top5pct-article-custom-table-cloths-joliet.jpg` (table-runners/, Initial, Mar 16, 21K). Very small file, likely a thumbnail from an article or blog context. Needs replacement with an R1-R3 same-dir file.

---

## Slide Rules Check

| slot | direction | image | dir | round | rule | status |
|---|---|---|---|---|---|---|
| slide-R | right | top5pct-custom-table-runner-joliet-shorewood.jpg | table-runners/ | Initial | must be cross-sell R1-R3 from another category | violation: same-category; also Initial |
| slide-L | left | top5pct-retractable-banner.jpg | banners/ | R1 | cross-sell must be R1-R3 | good, cross-sell, R1 |

slide-L cross-sells to banners/ (R1, May 11, 234K), confirmed against banners.md. Banners are referenced repeatedly in the blade content as the natural overhead companion to table products.

---

## Immediate Suggestions

### card-detailed image1 — replace with unused R1 same-dir file

Available unused R1-R2 table-runners/ files as replacements:

| candidate | round | size | note |
|---|---|---|---|
| top5pct-custom-table-cloth.jpg | R1 | 352K | recommended; largest available; table-cloth named but appropriate (page covers both products) |
| top5pct-table-cloths.jpg | R1 | 333K | strong alternative |
| top5pct-printed-table-cloths.jpg | R2 | 199K | R2, smaller |
| top5pct-personalized-tablecloth-joliet.jpg | R1 | 178K | smallest of the R1 options |

Recommended: `top5pct-custom-table-cloth.jpg` (table-runners/, R1, May 11, 352K). Largest available R1 unused file in dir. The table-cloth subject matter is appropriate since the card-detailed-info section heading is "The Benefits of Custom Tablecloths for Your Business" and the text covers both products.

### slide-R — replace with R1-R3 cross-sell from another category

slide-L already uses banners/. The most natural cross-sell for table runners is table cloths (separate product, separate page, covered repeatedly in the blade content as a companion).

Recommended cross-sell candidate:

| candidate | dir | round | date | size | note |
|---|---|---|---|---|---|
| top5pct-custom-table-cloth.jpg | table-cloths/ | R3 | Jun 8 | 352K | recommended; hero image of table-cloths page; R3; perfect two-way cross-sell |
| top5pct-custom-table-cloth-business.jpg | table-cloths/ | R3 | Jun 8 | 354K | strong alternative from table-cloths/ dir |

Recommended: `/images/table-cloths/top5pct-custom-table-cloth.jpg` (table-cloths/, R3, Jun 8, 352K). This is the hero image of the table-cloths page, making it the clearest possible cross-sell signal. href should link to `/signs/table-signs/table-cloths`. Title should reflect the cross-sell, for example "Looking for a Full Table Cover? Try Our Custom Table Cloths."

Note: The same filename `top5pct-custom-table-cloth.jpg` exists in both dirs (table-runners/ at R1 and table-cloths/ at R3). Using the table-cloths/ copy for slide-R is the correct approach since it uses the other category's dir path, making the cross-sell clear and the path accurate.

### Summary of two fixes needed

| slot | current image | current round | recommended replacement | source dir | round |
|---|---|---|---|---|---|
| card-detailed image1 | top5pct-article-custom-table-cloths-joliet.jpg | Initial | top5pct-custom-table-cloth.jpg | table-runners/ | R1 |
| slide-R | top5pct-custom-table-runner-joliet-shorewood.jpg | Initial | top5pct-custom-table-cloth.jpg | table-cloths/ | R3 |

Both fixes use files from different dirs, so there is no path conflict even though the filenames are the same.

### Carousel — at target, no action needed

All 4 carousel slots are table-runners/ same-dir R3. No expansion warranted until card-detailed image1 and slide-R are resolved. After both fixes are applied, all non-carousel slots will be R1-R3 and expansion becomes eligible using the remaining unused R1-R2 files in dir.

---

## File Usage Count

| file | dir | size | round | used in |
|---|---|---|---|---|
| top5pct-custom-table-cloth-business.jpg | table-runners/ | 354K | R2 | hero only |
| top5pct-custom-table-runner-near-me.jpg | table-runners/ | 219K | R3 | C-1 only |
| top5pct-table-runner-company.jpg | table-runners/ | 232K | R3 | C-2 only |
| top5pct-table-runner-covers.jpg | table-runners/ | 157K | R3 | C-3 only |
| top5pct-table-runners-customized.jpg | table-runners/ | 167K | R3 | C-4 only |
| top5pct-table-runner-joliet.jpg | table-runners/ | 329K | R2 | card-1 only |
| top5pct-custom-table-runner.jpg | table-runners/ | 571K | R1 | card-2 only |
| top5pct-custom-table-runners.jpg | table-runners/ | 233K | R1 | card-2image image1 only |
| top5pct-table-runner.jpg | table-runners/ | 248K | R1 | card-2image image2 only |
| top5pct-table-runners.jpg | table-runners/ | 296K | R1 | card-3 only |
| top5pct-article-custom-table-cloths-joliet.jpg | table-runners/ | 21K | Initial | card-detailed image1 (needs replacement) |
| top5pct-custom-table-runner-joliet-shorewood.jpg | table-runners/ | 58K | Initial | slide-R (rule violation; needs replacement) |
| top5pct-retractable-banner.jpg | banners/ | 234K | R1 | slide-L only |
| top5pct-custom-table-cloth.jpg | table-runners/ | 352K | R1 | unused — recommended for card-detailed image1 |
| top5pct-personalized-tablecloth-joliet.jpg | table-runners/ | 178K | R1 | unused |
| top5pct-table-cloths.jpg | table-runners/ | 333K | R1 | unused |
| top5pct-printed-table-cloths.jpg | table-runners/ | 199K | R2 | unused |
| top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg | table-runners/ | 101K | Initial | unused |
| top5pct-custom-table-cloth-joliet-crest-hill.jpg | table-runners/ | 43K | Initial | unused; small |
| top5pct-custom-table-runner-joliet-new-lenox.jpg | table-runners/ | 51K | Initial | unused |
| top5pct-custom-table-skirt-joliet-shorewood-plainfield.jpg | table-runners/ | 42K | Initial | unused |
| top5pct-table-runner-popus-gourmet-popcorn-joliet.jpg | table-runners/ | 54K | Initial | unused |

No duplicate image use across blade slots. 4 unused R1-R2 table-runners/ files available for fixes and future use.

---

## Notes

- 11 of 13 blade image slots are R1-R3 as of verification Jun 25, 2026.
- 2 slots are Initial: card-detailed image1 and slide-R. Both need fixes.
- slide-R has a rule violation (same-category) in addition to being Initial.
- slide-L cross-sells to banners/ (R1, May 11), confirmed.
- Carousel at exactly 4, all table-runners/ same-dir R3 (Jun 6).
- 4 unused R1-R2 table-runners/ files available; all have table-cloth names but are appropriate for this page since it covers both products.
- 5 unused Initial table-runners/ files — none qualify for blade placement.
- After both Initial slots are fixed, carousel expansion becomes eligible using remaining unused R1-R2 files.
- R4 audit pending both fixes.
