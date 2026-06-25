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
| R3 | Jun 6-8, 2026 | Jun 8 file confirmed R3 |
| Jun 9 | Jun 9, 2026 | 2 files; outside R3 window (Jun 6-8); round unconfirmed — see note |

Two files in this dir are dated Jun 9, one day after the R3 window closes (Jun 6-8). Their round status is unconfirmed. They are flagged throughout this document and should not be counted as R3 until the user confirms.

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
| top5pct-a-frame-signs-joliet.jpg | 264K | Jun 9 | unconfirmed | used in slide-R; also rule violation |
| top5pct-sidewalk-sign-a-frame-cresthill.jpg | 297K | Jun 9 | unconfirmed | used in card-1 |

Dir summary: 5 Initial, 4 R1, 3 R2, 1 R3, 2 Jun 9 unconfirmed. 15 files total.
One unused R1 file exists: `top5pct-sidewalk-signs-joliet-old.jpg` (528K, May 11).
All other R1-R3 sidewalk-signs/ files are placed in the blade.

---

## Blade Image Slots

| slot | component | image | dir | round | date | size | status |
|---|---|---|---|---|---|---|---|
| hero | category-hero | top5pct-a-frame-sidewalk-signs.jpg | sidewalk-signs/ | R2 | Jun 2 | 245K | good |
| C-1 | carousel-rotating-images | top5pct-sidewalk-signs-plainfield.jpg | sidewalk-signs/ | R3 | Jun 8 | 153K | good |
| C-2 | carousel-rotating-images | top5pct-custom-a-frame-sidewalk-signs-joliet.jpg | sidewalk-signs/ | R1 | May 11 | 435K | good |
| C-3 | carousel-rotating-images | top5pct-sidewalk-sign.jpg | sidewalk-signs/ | R1 | May 11 | 422K | good |
| C-4 | carousel-rotating-images | top5pct-sidewalk-signs-joliet.jpg | sidewalk-signs/ | R2 | Jun 2 | 454K | good |
| card-1 | card-image-with-text | top5pct-sidewalk-sign-a-frame-cresthill.jpg | sidewalk-signs/ | unconfirmed | Jun 9 | 297K | round unconfirmed; see note |
| card-2 | card-image-with-text (imagePosition right) | top5pct-sidewalk-signage.jpg | sidewalk-signs/ | R2 | Jun 2 | 284K | good |
| card-detailed image1 | card-detailed-info | top5pct-a-frame-sign.jpg | sidewalk-signs/ | R1 | May 11 | 368K | good |
| slide-R | card-banner-slide-in (direction right) | top5pct-a-frame-signs-joliet.jpg | sidewalk-signs/ | unconfirmed | Jun 9 | 264K | rule violation: same-category; round also unconfirmed |
| slide-L | card-banner-slide-in (direction left) | top5pct-mesh-construction-banner.jpg | banners/ | R2 | Jun 2 | 287K | good, cross-sell |

---

## R1-R3 Placement Summary

**Total blade image slots:** 10
**Confirmed R1-R3:** 8
**Unconfirmed (Jun 9):** 2

| slot | image | round | issue |
|---|---|---|---|
| card-1 | top5pct-sidewalk-sign-a-frame-cresthill.jpg | Jun 9 | outside R3 window; round unconfirmed |
| slide-R | top5pct-a-frame-signs-joliet.jpg | Jun 9 | outside R3 window; round unconfirmed; also same-category rule violation |

If Jun 9 is confirmed as R3 by the user, the confirmed R1-R3 count rises to 10 of 10 — but slide-R would still be a rule violation regardless of round, because slide-R must always be a cross-sell from another category.

If Jun 9 is not confirmed as R3, card-1 needs to be addressed. The unused R1 sidewalk-signs/ file `top5pct-sidewalk-signs-joliet-old.jpg` (528K) is available as a same-dir replacement for card-1.

---

## Carousel

**Current slots:** 4
**Target:** 4. May exceed 4 if all non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | image | round | status |
|---|---|---|---|
| hero | top5pct-a-frame-sidewalk-signs.jpg | R2 | good |
| card-1 | top5pct-sidewalk-sign-a-frame-cresthill.jpg | Jun 9 | unconfirmed |
| card-2 | top5pct-sidewalk-signage.jpg | R2 | good |
| card-detailed image1 | top5pct-a-frame-sign.jpg | R1 | good |
| slide-R | top5pct-a-frame-signs-joliet.jpg | Jun 9 | unconfirmed + rule violation |
| slide-L | top5pct-mesh-construction-banner.jpg | R2 | good, cross-sell |

card-1 and slide-R are Jun 9 unconfirmed. Carousel must stay at 4 until both slots are resolved. All 4 carousel slots are sidewalk-signs/ same-dir, R1-R3.

---

## Rule Violations

### slide-R — same-category, not a cross-sell

slide-R (direction right) uses `top5pct-a-frame-signs-joliet.jpg` (sidewalk-signs/, Jun 9, 264K). This image is from sidewalk-signs/ — the same category as the page itself. slide-R must always be a cross-sell from another category. No same-category image is ever valid for slide-R.

This slot also has an unconfirmed round (Jun 9, outside R3 window), making it a double issue: wrong category and unconfirmed round.

Recommended cross-sell candidates from adjacent categories:

| candidate | dir | round | date | size | note |
|---|---|---|---|---|---|
| top5pct-yard-signs-shorewood.jpg | yard-signs/ | R3 | Jun 7 | 338K | recommended; yard signs are the most natural companion to sidewalk signs |
| top5pct-yard-signs-joliet.jpg | yard-signs/ | R1 | May 11 | 401K | alternative; yard-signs/ R1 |
| top5pct-banners-and-signs.jpg | banners/ | R1 | May 11 | 361K | alternative; banners/ R1 |

Recommended: `top5pct-yard-signs-shorewood.jpg` (yard-signs/, R3, Jun 7, 338K). Yard signs are the most referenced complementary product for sidewalk sign customers, and using an R3 image is preferred over an R1 candidate.

---

## Slide Rules Check

| slot | direction | image | dir | round | rule | status |
|---|---|---|---|---|---|---|
| slide-R | right | top5pct-a-frame-signs-joliet.jpg | sidewalk-signs/ | Jun 9 unconfirmed | must be cross-sell R1-R3 from another category | violation: same-category; round also unconfirmed |
| slide-L | left | top5pct-mesh-construction-banner.jpg | banners/ | R2 | cross-sell must be R1-R3 | good, cross-sell, R2 |

slide-L cross-sells to banners/, a natural complement for businesses that need both outdoor signage and walk-in sidewalk presence. Round confirmed: `top5pct-mesh-construction-banner.jpg` is R2 (Jun 2, 287K).

---

## File Usage Count

| file | dir | size | round | used in |
|---|---|---|---|---|
| top5pct-a-frame-sidewalk-signs.jpg | sidewalk-signs/ | 245K | R2 | hero only |
| top5pct-sidewalk-signs-plainfield.jpg | sidewalk-signs/ | 153K | R3 | C-1 only |
| top5pct-custom-a-frame-sidewalk-signs-joliet.jpg | sidewalk-signs/ | 435K | R1 | C-2 only |
| top5pct-sidewalk-sign.jpg | sidewalk-signs/ | 422K | R1 | C-3 only |
| top5pct-sidewalk-signs-joliet.jpg | sidewalk-signs/ | 454K | R2 | C-4 only |
| top5pct-sidewalk-sign-a-frame-cresthill.jpg | sidewalk-signs/ | 297K | Jun 9 unconfirmed | card-1 only |
| top5pct-sidewalk-signage.jpg | sidewalk-signs/ | 284K | R2 | card-2 only |
| top5pct-a-frame-sign.jpg | sidewalk-signs/ | 368K | R1 | card-detailed image1 only |
| top5pct-a-frame-signs-joliet.jpg | sidewalk-signs/ | 264K | Jun 9 unconfirmed | slide-R only (violation) |
| top5pct-mesh-construction-banner.jpg | banners/ | 287K | R2 | slide-L only |
| top5pct-sidewalk-signs-joliet-old.jpg | sidewalk-signs/ | 528K | R1 | unused |
| top5pct-a-frame-sidewalk-sign-joliet.jpg | sidewalk-signs/ | 46K | Initial | unused |
| top5pct-article-a-frame-sidewalk-signs.jpg | sidewalk-signs/ | 55K | Initial | unused |
| top5pct-banner-a-frame-sidewalk-signs-joliet-romeoville.jpg | sidewalk-signs/ | 96K | Initial | unused |
| top5pct-sidewalk-a-frames-joliet-shorewood.jpg | sidewalk-signs/ | 91K | Initial | unused |
| top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg | sidewalk-signs/ | 58K | Initial | unused |

No duplicate image use across blade slots. One unused R1 sidewalk-signs/ file: `top5pct-sidewalk-signs-joliet-old.jpg` (528K, May 11). Five unused Initial files — none qualify for blade placement.

---

## Immediate Suggestions

### slide-R — replace with R1-R3 cross-sell from another category (action required regardless of round clarification)

slide-R must always be a cross-sell from another category. The same-category violation exists independently of the Jun 9 round question. Recommended: `top5pct-yard-signs-shorewood.jpg` (yard-signs/, R3, Jun 7, 338K).

### card-1 — Jun 9 round needs user confirmation

card-1 uses `top5pct-sidewalk-sign-a-frame-cresthill.jpg` (Jun 9, 297K). This is not Initial — it is a reasonably sized file from the correct category. If the user confirms Jun 9 counts as R3, this slot is fully resolved. If Jun 9 does not count, the unused R1 sidewalk-signs/ file `top5pct-sidewalk-signs-joliet-old.jpg` (528K, R1) is a ready replacement with no change needed to the dir.

### Carousel — at target, no action needed

Carousel is at exactly 4. All 4 slots are sidewalk-signs/ same-dir, R1-R3. No expansion warranted until slide-R and card-1 are resolved.

### Unused R1 file — available if needed

`top5pct-sidewalk-signs-joliet-old.jpg` (sidewalk-signs/, R1, May 11, 528K) is unused. If card-1 needs to be replaced (pending Jun 9 clarification), this is the available same-dir R1 replacement. The "old" in the filename suggests it may be an earlier version of an existing image — worth reviewing before use.

---

## Notes

- 8 of 10 blade image slots are confirmed R1-R3 as of verification Jun 25, 2026.
- 2 slots use Jun 9 files whose round is unconfirmed (outside R3 window of Jun 6-8). User confirmation needed.
- slide-R has a rule violation (same-category) that must be resolved regardless of the Jun 9 question.
- slide-L cross-sells to banners/ (R2, Jun 2), confirmed.
- Carousel is at exactly 4, all sidewalk-signs/ same-dir, R1-R3.
- One unused R1 sidewalk-signs/ file exists: `top5pct-sidewalk-signs-joliet-old.jpg` (528K). Available for card-1 replacement if Jun 9 is not confirmed as R3.
- 5 unused Initial sidewalk-signs/ files — none qualify for blade placement.
- R4 audit ready, but slide-R fix and Jun 9 round clarification are prerequisite actions.
