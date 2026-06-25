# Vehicle Magnets — Image Status

**Blade:** `resources/views/pages/vehicle-graphics/vehicle-magnets.blade.php`
**URL:** `/vehicle-graphics/vehicle-magnets`
**Dir:** `public/images/vehicle-magnets/` — 19 files total
**Verified:** Jun 25, 2026

---

## Round Reference

| round | date | note |
|---|---|---|
| Initial | Mar 17, 2026 | |
| R1 | May 11, 2026 | |
| R2 | Jun 2, 2026 | |
| R3 | — | no R3 files in this dir |

---

## Dir Inventory

| file | size | date | round | note |
|---|---|---|---|---|
| top5pct-article-car-magnets-truck-magnets.jpg | 22K | Mar 17 | Initial | unused in blade |
| top5pct-banner-car-magnets-joliet-shorewood-crest-hill.jpg | 63K | Mar 17 | Initial | unused in blade |
| top5pct-business-magnets-car-magnets-joliet.jpg | 52K | Mar 17 | Initial | unused in blade |
| top5pct-car-magnets-truck-magnets-joliet.jpg | 44K | Mar 17 | Initial | unused in blade |
| top5pct-car-magnets-vehicle-magnets-joliet.jpg | 45K | Mar 17 | Initial | used in slide-R; rule violation |
| top5pct-large-magnets-magnets-near-me-joliet.jpg | 40K | Mar 17 | Initial | unused in blade |
| top5pct-automobile-magnets-joliet.jpg | 380K | May 11 | R1 | |
| top5pct-car-magnets-joliet.jpg | 420K | May 11 | R1 | |
| top5pct-car-magnets.jpg | 306K | May 11 | R1 | |
| top5pct-car-sign-magnets-joliet.jpg | 352K | May 11 | R1 | |
| top5pct-custom-car-magnets-in-joliet.jpg | 448K | May 11 | R1 | |
| top5pct-custom-car-magnets.jpg | 474K | May 11 | R1 | |
| top5pct-vehicle-magnets-joliet.jpg | 385K | May 11 | R1 | |
| top5pct-vehicle-magnets.jpg | 425K | May 11 | R1 | |
| top5pct-car-decals-white-oaks-library.jpg | 412K | Jun 2 | R2 | |
| top5pct-joliet-car-magnets.jpg | 651K | Jun 2 | R2 | unused in blade |
| top5pct-magnet-vehicle-signs-joliet.jpg | 302K | Jun 2 | R2 | |
| top5pct-truck-sign-magnets-joliet.jpg | 364K | Jun 2 | R2 | unused in blade; used in automobile-graphics slide-R |
| top5pct-yard-signs-near-me.jpg | 514K | Jun 2 | R2 | unused in blade; name suggests yard-sign subject matter |

Dir summary: 6 Initial, 8 R1, 5 R2, 0 R3. 19 files total.
3 unused R2 vehicle-magnets/ files available. 5 unused Initial files. No R3 files exist in this dir.

Note on `top5pct-truck-sign-magnets-joliet.jpg`: this file is currently used as the slide-R cross-sell on the automobile-graphics page. It lives in vehicle-magnets/ and is unused on this page.

Note on `top5pct-yard-signs-near-me.jpg`: the filename suggests yard-sign content but the file is in vehicle-magnets/ dir. Verify subject before using in a blade slot.

---

## Blade Image Slots

| slot | component | image | dir | round | date | size | status |
|---|---|---|---|---|---|---|---|
| hero | category-hero | top5pct-magnet-vehicle-signs-joliet.jpg | vehicle-magnets/ | R2 | Jun 2 | 302K | good |
| C-1 | carousel-rotating-images | top5pct-automobile-magnets-joliet.jpg | vehicle-magnets/ | R1 | May 11 | 380K | good |
| C-2 | carousel-rotating-images | top5pct-car-magnets-joliet.jpg | vehicle-magnets/ | R1 | May 11 | 420K | good |
| C-3 | carousel-rotating-images | top5pct-car-magnets.jpg | vehicle-magnets/ | R1 | May 11 | 306K | good |
| C-4 | carousel-rotating-images | top5pct-car-sign-magnets-joliet.jpg | vehicle-magnets/ | R1 | May 11 | 352K | good |
| card-1 | card-image-with-text | top5pct-custom-car-magnets-in-joliet.jpg | vehicle-magnets/ | R1 | May 11 | 448K | good |
| card-2 | card-image-with-text (imagePosition right) | top5pct-custom-car-magnets.jpg | vehicle-magnets/ | R1 | May 11 | 474K | good |
| card-2image image1 | card-2image-with-text | top5pct-vehicle-magnets-joliet.jpg | vehicle-magnets/ | R1 | May 11 | 385K | good |
| card-2image image2 | card-2image-with-text | top5pct-vehicle-magnets.jpg | vehicle-magnets/ | R1 | May 11 | 425K | good |
| card-detailed image1 | card-detailed-info | top5pct-car-decals-white-oaks-library.jpg | vehicle-magnets/ | R2 | Jun 2 | 412K | good |
| slide-R | card-banner-slide-in (direction right) | top5pct-car-magnets-vehicle-magnets-joliet.jpg | vehicle-magnets/ | Initial | Mar 17 | 45K | rule violation: same-category; also Initial |
| slide-L | card-banner-slide-in (direction left) | top5pct-vehicle-graphics.jpg | automobile-graphics/ | R1 | May 11 | 413K | good, cross-sell |

---

## R1-R3 Placement Summary

**Total blade image slots:** 12
**Filled R1-R3:** 11
**Remaining to fill:** 1

| slot | image | round | issue |
|---|---|---|---|
| slide-R | top5pct-car-magnets-vehicle-magnets-joliet.jpg | Initial | same-category rule violation; also Initial; needs R1-R3 cross-sell from another category |

---

## Carousel

**Current slots:** 4
**Target:** 4. May exceed 4 if all non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | image | round | status |
|---|---|---|---|
| hero | top5pct-magnet-vehicle-signs-joliet.jpg | R2 | good |
| card-1 | top5pct-custom-car-magnets-in-joliet.jpg | R1 | good |
| card-2 | top5pct-custom-car-magnets.jpg | R1 | good |
| card-2image image1 | top5pct-vehicle-magnets-joliet.jpg | R1 | good |
| card-2image image2 | top5pct-vehicle-magnets.jpg | R1 | good |
| card-detailed image1 | top5pct-car-decals-white-oaks-library.jpg | R2 | good |
| slide-R | top5pct-car-magnets-vehicle-magnets-joliet.jpg | Initial | not satisfied |
| slide-L | top5pct-vehicle-graphics.jpg | R1 | good, cross-sell |

Carousel is at exactly 4, all vehicle-magnets/ same-dir R1. slide-R is Initial, blocking the over-target condition. After slide-R is fixed, all non-carousel slots will be R1-R3 and carousel expansion becomes eligible using the 3 unused vehicle-magnets/ R2 files.

Unused R2 vehicle-magnets/ files available for carousel expansion after fix:

| candidate | round | size | note |
|---|---|---|---|
| top5pct-joliet-car-magnets.jpg | R2 | 651K | largest in dir; strong carousel candidate |
| top5pct-truck-sign-magnets-joliet.jpg | R2 | 364K | also used in automobile-graphics slide-R |
| top5pct-yard-signs-near-me.jpg | R2 | 514K | verify subject matter before use |

---

## Rule Violations

### slide-R — same-category + Initial

slide-R (direction right) uses `top5pct-car-magnets-vehicle-magnets-joliet.jpg` (vehicle-magnets/, Initial, Mar 17, 45K). Double violation: same-category and Initial. slide-R must always be a cross-sell from another category, and it must be R1-R3.

---

## Slide Rules Check

| slot | direction | image | dir | round | rule | status |
|---|---|---|---|---|---|---|
| slide-R | right | top5pct-car-magnets-vehicle-magnets-joliet.jpg | vehicle-magnets/ | Initial | must be cross-sell R1-R3 from another category | violation: same-category; also Initial |
| slide-L | left | top5pct-vehicle-graphics.jpg | automobile-graphics/ | R1 | cross-sell must be R1-R3 | good, cross-sell, R1 |

slide-L cross-sells to automobile-graphics/ (R1, May 11, 413K), the most referenced companion product in the blade — permanent vehicle wraps are explicitly named as the next step beyond magnets, referenced 4 times in the blade content.

---

## Immediate Suggestions

### slide-R — replace with R1-R3 cross-sell from another category

slide-R must come from a different category dir. automobile-graphics/ is already used for slide-L, so a second automobile-graphics/ cross-sell on slide-R would be repetitive. The blade content explicitly references yard signs as the natural job-site companion to vehicle magnets ("yard signs at each job site for a complete branded presence in every location you serve" — referenced 3 times). Yard-signs/ is the most appropriate cross-sell category for slide-R.

Recommended cross-sell candidates:

| candidate | dir | round | date | size | note |
|---|---|---|---|---|---|
| top5pct-yard-signs-shorewood.jpg | yard-signs/ | R3 | Jun 7 | 338K | recommended; R3, natural job-site companion |
| top5pct-yard-signs-joliet.jpg | yard-signs/ | R1 | May 11 | 401K | alternative; yard-signs/ R1 |
| top5pct-yard-signs-plainfield.jpg | yard-signs/ | R3 | Jun 7 | varies | alternative R3 |

Recommended: `top5pct-yard-signs-shorewood.jpg` (yard-signs/, R3, Jun 7, 338K). Yard signs are the explicitly stated complement to vehicle magnets in the blade — vehicle magnets brand the vehicle while yard signs brand the job site. href should link to `/signs/ground-signs/yard-signs`. Title should reflect the cross-sell, for example "Brand Your Job Site Too, Custom Yard Signs Available."

### Carousel — expansion eligible after slide-R fix

After slide-R is resolved, all non-carousel slots will be R1-R3 and carousel can expand beyond 4. Three unused vehicle-magnets/ R2 files are available. `top5pct-joliet-car-magnets.jpg` (R2, 651K) is the largest and strongest candidate. Expansion deferred to user direction.

---

## File Usage Count

| file | dir | size | round | used in |
|---|---|---|---|---|
| top5pct-magnet-vehicle-signs-joliet.jpg | vehicle-magnets/ | 302K | R2 | hero only |
| top5pct-automobile-magnets-joliet.jpg | vehicle-magnets/ | 380K | R1 | C-1 only |
| top5pct-car-magnets-joliet.jpg | vehicle-magnets/ | 420K | R1 | C-2 only |
| top5pct-car-magnets.jpg | vehicle-magnets/ | 306K | R1 | C-3 only |
| top5pct-car-sign-magnets-joliet.jpg | vehicle-magnets/ | 352K | R1 | C-4 only |
| top5pct-custom-car-magnets-in-joliet.jpg | vehicle-magnets/ | 448K | R1 | card-1 only |
| top5pct-custom-car-magnets.jpg | vehicle-magnets/ | 474K | R1 | card-2 only |
| top5pct-vehicle-magnets-joliet.jpg | vehicle-magnets/ | 385K | R1 | card-2image image1 only |
| top5pct-vehicle-magnets.jpg | vehicle-magnets/ | 425K | R1 | card-2image image2 only |
| top5pct-car-decals-white-oaks-library.jpg | vehicle-magnets/ | 412K | R2 | card-detailed image1 only |
| top5pct-car-magnets-vehicle-magnets-joliet.jpg | vehicle-magnets/ | 45K | Initial | slide-R (rule violation; needs replacement) |
| top5pct-vehicle-graphics.jpg | automobile-graphics/ | 413K | R1 | slide-L only |
| top5pct-joliet-car-magnets.jpg | vehicle-magnets/ | 651K | R2 | unused |
| top5pct-truck-sign-magnets-joliet.jpg | vehicle-magnets/ | 364K | R2 | unused here; used in automobile-graphics slide-R |
| top5pct-yard-signs-near-me.jpg | vehicle-magnets/ | 514K | R2 | unused; verify subject before blade use |
| top5pct-article-car-magnets-truck-magnets.jpg | vehicle-magnets/ | 22K | Initial | unused |
| top5pct-banner-car-magnets-joliet-shorewood-crest-hill.jpg | vehicle-magnets/ | 63K | Initial | unused |
| top5pct-business-magnets-car-magnets-joliet.jpg | vehicle-magnets/ | 52K | Initial | unused |
| top5pct-car-magnets-truck-magnets-joliet.jpg | vehicle-magnets/ | 44K | Initial | unused |
| top5pct-large-magnets-magnets-near-me-joliet.jpg | vehicle-magnets/ | 40K | Initial | unused |

No duplicate image use across blade slots. 3 unused R2 vehicle-magnets/ files available for carousel expansion after slide-R fix.

---

## Notes

- 11 of 12 blade image slots are R1-R3 as of Jun 25, 2026.
- 1 slot is Initial: slide-R. Double violation (same-category + Initial).
- No R3 files exist in this dir. Highest round is R2 (Jun 2). R4 should add R3-or-better vehicle-magnets/ images.
- slide-L cross-sells to automobile-graphics/ (R1, May 11), confirmed. Valid.
- slide-R must cross-sell to a different category than automobile-graphics/. Recommended: yard-signs/ R3.
- Carousel at exactly 4, all vehicle-magnets/ same-dir R1. Eligible for expansion after slide-R fix.
- 3 unused R2 vehicle-magnets/ files available for carousel expansion: top5pct-joliet-car-magnets.jpg (651K), top5pct-truck-sign-magnets-joliet.jpg (364K), top5pct-yard-signs-near-me.jpg (514K, verify subject).
- 5 unused Initial vehicle-magnets/ files — none qualify for blade placement.
- R4 audit ready pending slide-R fix.
