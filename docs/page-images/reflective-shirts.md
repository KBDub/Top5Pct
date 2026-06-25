# Reflective Shirts — Image Status

**Blade:** `resources/views/pages/custom-apparel/reflective-shirts.blade.php`
**URL:** `/custom-apparel/specialty-materials/reflective-shirts`
**Dir:** `public/images/reflective-shirts/` — 6 files total. All 6 referenced by the blade. 0 unused.
**Verified:** Jun 25, 2026

---

## Image Inventory

| section / category | image | path | round | file date | size | status |
|---|---|---|---|---|---|---|
| hero — category-hero | top5pct-reflective-shirts-gold.jpg | reflective-shirts/ | R3 | Jun 8 | 304K | good |
| carousel C-1 — carousel-rotating-images | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | reflective-shirts/ | R3 | Jun 8 | 26K | R3, small file, overused (see notes) |
| carousel C-2 — carousel-rotating-images | top5pct-custom-reflective-hoodies.jpg | reflective-shirts/ | R3 | Jun 8 | 223K | good |
| carousel C-3 — carousel-rotating-images | top5pct-reflective-shirts.jpg | reflective-shirts/ | R3 | Jun 8 | 124K | good |
| carousel C-4 — carousel-rotating-images | top5pct-reflective-shirts-shorewood.jpg | reflective-shirts/ | R3 | Jun 8 | 235K | good |
| card-1 — card-image-with-text | top5pct-reflective-vinyl-shirts-plainfield.jpg | reflective-shirts/ | R3 | Jun 8 | 166K | good |
| card-2 — card-image-with-text (imagePosition right) | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | reflective-shirts/ | R3 | Jun 8 | 26K | R3, repeat (2nd use), small file |
| card-detailed image1 — card-detailed-info | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | reflective-shirts/ | R3 | Jun 8 | 26K | R3, repeat (3rd use), small file |
| slide-L — card-banner-slide-in (direction left) | top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | reflective-shirts/ | R3 | Jun 8 | 26K | R3, same-dir, repeat (4th use), href=/contact |
| slide-R — card-banner-slide-in (direction right) | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | custom-shirts/ | Initial | Mar 16 | 29K | initial, cross-dir, href=/contact |

**Note:** `card-detailed-info` on this page uses only `image1`. There is no `image2` slot on this component instance.

---

## R1-R3 Placement Summary

**Filled:** 9 of 10 slots
**Remaining (Initial):** 1 slot

| slot | image | size | issue |
|---|---|---|---|
| slide-R | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg (custom-shirts/) | 29K | Initial, cross-sell must be to R1-R3 image |

---

## Unused Files in Dir

None. All 6 reflective-shirts files are referenced by the blade.

---

## File Usage Count

| file | size | used in |
|---|---|---|
| top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | 26K | C-1, card-2, card-detailed image1, slide-L (4 slots) |
| top5pct-reflective-shirts-gold.jpg | 304K | hero only |
| top5pct-custom-reflective-hoodies.jpg | 223K | C-2 only |
| top5pct-reflective-shirts.jpg | 124K | C-3 only |
| top5pct-reflective-shirts-shorewood.jpg | 235K | C-4 only |
| top5pct-reflective-vinyl-shirts-plainfield.jpg | 166K | card-1 only |

`top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` (26K) is the only file used in more than one slot and is the smallest file in the dir by a wide margin (next smallest is 124K). It fills 4 of the 10 page slots.

---

## Immediate Suggestions

### 1. Replace slide-R with an R1+ cross-sell image

slide-R uses `top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` (custom-shirts/, Initial, Mar 16, 29K). The cross-sell direction (glow shirts) is appropriate since the slide title is "Glow in the Dark or Reflective, Both Built for Visibility." However, the file is Initial and does not meet the R1+ requirement for cross-sells.

Two paths:

**Option A — Check glow-shirts/ dir first.** If `public/images/glow-shirts/` contains any R1+ files, use one of those. This keeps the cross-sell tightly paired to the glow-shirts category page.

**Option B — Use a custom-shirts/ R1 file.** Confirmed R1 candidates from custom-shirts/ (all May 11):

| candidate | size | round |
|---|---|---|
| top5pct-custom-shirt-pictures.jpg | 388K | R1 |
| top5pct-custom-printed-vinyl-shirts.jpg | 406K | R1 |
| top5pct-custom-hoodies.jpg | 287K | R1 |
| top5pct-brick-vinyl-hoodies.jpg | 379K | R1 |

Whichever file is chosen, the href should be updated from `/contact` to the relevant category page (glow-shirts or custom-apparel).

### 2. Replace card-2 and card-detailed image1 to reduce overuse of 26K file

`top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` (26K) currently fills C-1, card-2, card-detailed image1, and slide-L. Across the 5 remaining reflective-shirts files, only the 4 carousel images and card-1 are covered. card-2 and card-detailed image1 have no unique files to draw from.

Two paths:

**Option A — Use carousel files as card stand-ins.** The following are used only once (in the carousel) and could double in a card slot without creating a triple-repeat:

| file | size | currently in |
|---|---|---|
| top5pct-custom-reflective-hoodies.jpg | 223K | C-2 only |
| top5pct-reflective-shirts.jpg | 124K | C-3 only |
| top5pct-reflective-shirts-shorewood.jpg | 235K | C-4 only |

This reduces the 26K file from 4 uses to 2 (card-2 or card-detailed) or even 1 (slide-L only), at the cost of a carousel file appearing in a card slot as well.

**Option B — New photos needed.** Request new R1+ photos uploaded to reflective-shirts/ for card-2 and card-detailed image1 so every slot has a unique file. This is the cleanest long-term solution.

### 3. Update slide-L href

slide-L href currently points to `/contact`. If slide-L is meant to be a direct page CTA for reflective shirts, the href should point to a product or collection page (e.g., `/custom-apparel/specialty-materials/reflective-shirts#all-products` or `/custom-apparel`). The image and title are same-dir and on-topic so no image change is needed.

### 4. Update slide-R href alongside image swap

When slide-R image is replaced (suggestion 1), the href should also move from `/contact` to the appropriate product category page matching the cross-sell destination.

---

## Notes

- Carousel is 4 slots, all R3, all same-dir. Carousel is fully compliant. No carousel changes needed.
- All 6 reflective-shirts dir files are R3 (Jun 8). The round quality across this dir is the best seen in the audit so far.
- The structural problem on this page is not the round status but the overuse of one small file (26K) and the Initial status of the slide-R cross-sell.
- R4 audit deferred until slide-R is resolved and the 26K overuse is addressed.
