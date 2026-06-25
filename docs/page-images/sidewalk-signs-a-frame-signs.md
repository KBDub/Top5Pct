# Sidewalk Signs and A-Frame Signs — Image Status

**Blade:** `resources/views/pages/signs/sidewalk-signs-a-frame-signs.blade.php`
**URL:** `/signs/ground-signs/sidewalk-signs-a-frame-signs`
**Dir:** `public/images/sidewalk-signs/` — 15 files total
**Verified:** Jun 25, 2026

---

## Round Reference

| round | date | note |
|---|---|---|
| Initial | Mar 16, 2026 | |
| R1 | May 11, 2026 | |
| R2 | Jun 2, 2026 | |
| R2+ | Jun 3, 2026 | no files this round in this dir |
| R3 | Jun 6-9, 2026 | Jun 8 and Jun 9 confirmed R3 |

Jun 9 confirmed as R3 by user on Jun 25, 2026. R3 window extended to Jun 6-9 for this dir.

---

## Dir Inventory

| file | size | date | round | note |
|---|---|---|---|---|
| top5pct-a-frame-sidewalk-sign-joliet.jpg | 46K | Mar 16 | Initial | unused in blade |
| top5pct-article-a-frame-sidewalk-signs.jpg | 55K | Mar 16 | Initial | unused in blade |
| top5pct-banner-a-frame-sidewalk-signs-joliet-romeoville.jpg | 96K | Mar 16 | Initial | unused in blade |
| top5pct-sidewalk-a-frames-joliet-shorewood.jpg | 91K | Mar 16 | Initial | unused in blade |
| top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg | 58K | Mar 16 | Initial | unused in blade |
| top5pct-a-frame-sign.jpg | 368K | May 11 | R1 | |
| top5pct-custom-a-frame-sidewalk-signs-joliet.jpg | 435K | May 11 | R1 | |
| top5pct-sidewalk-sign.jpg | 422K | May 11 | R1 | |
| top5pct-sidewalk-signs-joliet-old.jpg | 528K | May 11 | R1 | unused in blade |
| top5pct-a-frame-sidewalk-signs.jpg | 245K | Jun 2 | R2 | |
| top5pct-sidewalk-signage.jpg | 284K | Jun 2 | R2 | |
| top5pct-sidewalk-signs-joliet.jpg | 454K | Jun 2 | R2 | |
| top5pct-sidewalk-signs-plainfield.jpg | 153K | Jun 8 | R3 | |
| top5pct-a-frame-signs-joliet.jpg | 264K | Jun 9 | R3 | was in slide-R; replaced Jun 25 (rule violation) |
| top5pct-sidewalk-sign-a-frame-cresthill.jpg | 297K | Jun 9 | R3 | |

Dir summary: 5 Initial, 4 R1, 3 R2, 3 R3. 15 files total.
One unused R1 file: `top5pct-sidewalk-signs-joliet-old.jpg` (528K, May 11).
All other non-Initial files are placed in the blade except the unused R1 above.

---

## Blade Image Slots

| slot | component | image | dir | round | date | size | status |
|---|---|---|---|---|---|---|---|
| hero | category-hero | top5pct-a-frame-sidewalk-signs.jpg | sidewalk-signs/ | R2 | Jun 2 | 245K | good |
| C-1 | carousel-rotating-images | top5pct-sidewalk-signs-plainfield.jpg | sidewalk-signs/ | R3 | Jun 8 | 153K | good |
| C-2 | carousel-rotating-images | top5pct-custom-a-frame-sidewalk-signs-joliet.jpg | sidewalk-signs/ | R1 | May 11 | 435K | good |
| C-3 | carousel-rotating-images | top5pct-sidewalk-sign.jpg | sidewalk-signs/ | R1 | May 11 | 422K | good |
| C-4 | carousel-rotating-images | top5pct-sidewalk-signs-joliet.jpg | sidewalk-signs/ | R2 | Jun 2 | 454K | good |
| card-1 | card-image-with-text | top5pct-sidewalk-sign-a-frame-cresthill.jpg | sidewalk-signs/ | R3 | Jun 9 | 297K | good |
| card-2 | card-image-with-text (imagePosition right) | top5pct-sidewalk-signage.jpg | sidewalk-signs/ | R2 | Jun 2 | 284K | good |
| card-detailed image1 | card-detailed-info | top5pct-a-frame-sign.jpg | sidewalk-signs/ | R1 | May 11 | 368K | good |
| slide-R | card-banner-slide-in (direction right) | top5pct-yard-signs-shorewood.jpg | yard-signs/ | R3 | Jun 7 | 338K | good, cross-sell; fixed Jun 25 |
| slide-L | card-banner-slide-in (direction left) | top5pct-mesh-construction-banner.jpg | banners/ | R2 | Jun 2 | 287K | good, cross-sell |

---

## R1-R3 Placement Summary

**Total blade image slots:** 10
**Filled R1-R3:** 10
**Remaining:** 0

All 10 blade image slots are R1-R3. No Initial images in blade.

---

## Carousel

**Current slots:** 4
**Target:** 4. May exceed 4 if all non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | image | round | status |
|---|---|---|---|
| hero | top5pct-a-frame-sidewalk-signs.jpg | R2 | good |
| card-1 | top5pct-sidewalk-sign-a-frame-cresthill.jpg | R3 | good |
| card-2 | top5pct-sidewalk-signage.jpg | R2 | good |
| card-detailed image1 | top5pct-a-frame-sign.jpg | R1 | good |
| slide-R | top5pct-yard-signs-shorewood.jpg | R3 | good, cross-sell |
| slide-L | top5pct-mesh-construction-banner.jpg | R2 | good, cross-sell |

All 6 non-carousel slots are R1-R3. Carousel is at exactly 4. Unused R1 sidewalk-signs/ file (`top5pct-sidewalk-signs-joliet-old.jpg`, 528K) could be considered for carousel expansion since all non-carousel slots are now R1+. Carousel expansion deferred to R4 unless this file is confirmed suitable.

---

## Rule Violations

### slide-R — resolved Jun 25, 2026

slide-R previously used `top5pct-a-frame-signs-joliet.jpg` (sidewalk-signs/, R3, Jun 9, 264K). This image was from sidewalk-signs/ — the same category as the page itself. slide-R must always be a cross-sell from another category.

**Fix applied Jun 25, 2026:** slide-R replaced with `top5pct-yard-signs-shorewood.jpg` (yard-signs/, R3, Jun 7, 338K). Title updated from "Custom Parking Signs Built for Illinois Weather" to "Yard Signs and Sidewalk Signs Work Better Together." href updated to `/signs/ground-signs/yard-signs`. Violation resolved.

---

## Slide Rules Check

| slot | direction | image | dir | round | rule | status |
|---|---|---|---|---|---|---|
| slide-R | right | top5pct-yard-signs-shorewood.jpg | yard-signs/ | R3 | must be cross-sell R1-R3 from another category | good, cross-sell, R3; fixed Jun 25 |
| slide-L | left | top5pct-mesh-construction-banner.jpg | banners/ | R2 | cross-sell must be R1-R3 | good, cross-sell, R2 |

slide-R cross-sells to yard-signs/, the most natural companion product for sidewalk sign customers. Round confirmed against yard-signs.md: `top5pct-yard-signs-shorewood.jpg` is R3 (Jun 7, 338K). slide-L cross-sells to banners/ (R2, Jun 2, 287K), a natural complement for businesses that need both outdoor and walk-in sidewalk presence.

---

## File Usage Count

| file | dir | size | round | used in |
|---|---|---|---|---|
| top5pct-a-frame-sidewalk-signs.jpg | sidewalk-signs/ | 245K | R2 | hero only |
| top5pct-sidewalk-signs-plainfield.jpg | sidewalk-signs/ | 153K | R3 | C-1 only |
| top5pct-custom-a-frame-sidewalk-signs-joliet.jpg | sidewalk-signs/ | 435K | R1 | C-2 only |
| top5pct-sidewalk-sign.jpg | sidewalk-signs/ | 422K | R1 | C-3 only |
| top5pct-sidewalk-signs-joliet.jpg | sidewalk-signs/ | 454K | R2 | C-4 only |
| top5pct-sidewalk-sign-a-frame-cresthill.jpg | sidewalk-signs/ | 297K | R3 | card-1 only |
| top5pct-sidewalk-signage.jpg | sidewalk-signs/ | 284K | R2 | card-2 only |
| top5pct-a-frame-sign.jpg | sidewalk-signs/ | 368K | R1 | card-detailed image1 only |
| top5pct-yard-signs-shorewood.jpg | yard-signs/ | 338K | R3 | slide-R only |
| top5pct-mesh-construction-banner.jpg | banners/ | 287K | R2 | slide-L only |
| top5pct-a-frame-signs-joliet.jpg | sidewalk-signs/ | 264K | R3 | unused (was slide-R; replaced Jun 25) |
| top5pct-sidewalk-signs-joliet-old.jpg | sidewalk-signs/ | 528K | R1 | unused |
| top5pct-a-frame-sidewalk-sign-joliet.jpg | sidewalk-signs/ | 46K | Initial | unused |
| top5pct-article-a-frame-sidewalk-signs.jpg | sidewalk-signs/ | 55K | Initial | unused |
| top5pct-banner-a-frame-sidewalk-signs-joliet-romeoville.jpg | sidewalk-signs/ | 96K | Initial | unused |
| top5pct-sidewalk-a-frames-joliet-shorewood.jpg | sidewalk-signs/ | 91K | Initial | unused |
| top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg | sidewalk-signs/ | 58K | Initial | unused |

No duplicate image use across blade slots. Two unused non-Initial sidewalk-signs/ files: `top5pct-a-frame-signs-joliet.jpg` (R3, freed by slide-R fix) and `top5pct-sidewalk-signs-joliet-old.jpg` (R1). Both are candidates for carousel expansion or future slot use.

---

## Immediate Suggestions

### Carousel expansion — now eligible

All non-carousel slots are R1-R3. Two unused R1-R3 sidewalk-signs/ files are now available:

| candidate | round | size | note |
|---|---|---|---|
| top5pct-a-frame-signs-joliet.jpg | R3 | 264K | freed from slide-R by Jun 25 fix |
| top5pct-sidewalk-signs-joliet-old.jpg | R1 | 528K | unused; "old" in filename — verify before use |

Carousel expansion from 4 to 5 or 6 slots is now eligible since all non-carousel slots are R1+. Deferred to R4 pass unless the user wants to act on it now.

---

## Notes

- 10 of 10 blade image slots are R1-R3 as of Jun 25, 2026. No Initial images in blade.
- slide-R rule violation (same-category) resolved Jun 25, 2026. Replaced with yard-signs/ R3 cross-sell.
- Jun 9 confirmed as R3 by user on Jun 25, 2026.
- Two unused non-Initial sidewalk-signs/ files now available for carousel expansion.
- 5 unused Initial sidewalk-signs/ files — none qualify for blade placement.
- slide-R cross-sells to yard-signs/ (R3, Jun 7), confirmed against yard-signs.md.
- slide-L cross-sells to banners/ (R2, Jun 2), confirmed.
- Carousel at exactly 4, all sidewalk-signs/ same-dir, R1-R3.
- R4 audit ready.
