# Glow in the Dark Shirts — Image Status

**Blade:** `resources/views/pages/custom-apparel/glow-in-the-dark-shirts.blade.php`
**URL:** `/custom-apparel/specialty-materials/glow-in-the-dark-shirts`
**Dir:** `public/images/glow-shirts/` — 8 files total
**Verified:** Jun 26, 2026

---

## Round Reference

| round | date | note |
|---|---|---|
| Initial | Mar 16, 2026 | |
| R1 | May 11, 2026 | |
| R2 | Jun 2, 2026 | |
| R2+ | Jun 3, 2026 | no files this round in this dir |
| R3 | Jun 6-8, 2026 | Jun 8 files confirmed R3 |
| R4 | Jun 19-20, 2026 | Jun 20 files confirmed R4 |

No Initial, R1, or R2 files in this dir. All files are R3 or R4.

---

## Dir Inventory

| file | size | date | round | note |
|---|---|---|---|---|
| top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | 28K | Jun 8 | R3 | small file; used in 5 blade slots |
| top5pct-glow-in-the-dark-caps.jpg | 305K | Jun 8 | R3 | |
| top5pct-glowing-halloween-bat-shirt.jpg | 257K | Jun 8 | R3 | |
| top5pct-halloween-pumpkin-glow-shirt.jpg | 360K | Jun 8 | R3 | |
| top5pct-glowing-hoodies-joliet.jpg | 290K | Jun 20 | R4 | |
| top5pct-glow-polo-shirts-joliet.jpg | 265K | Jun 20 | R4 | |
| top5pct-glow-in-the-dark-hats-joliet.jpg | 302K | Jun 20 | R4 | |
| top5pct-glow-shirts-channahon.jpg | 286K | Jun 20 | R4 | |

Dir summary: 0 Initial, 0 R1, 0 R2, 4 R3, 4 R4. 8 image files total.

---

## Blade Image Slots

| slot | component | image | dir | round | date | size | status |
|---|---|---|---|---|---|---|---|
| hero | category-hero | top5pct-glow-in-the-dark-caps.jpg | glow-shirts/ | R3 | Jun 8 | 305K | good |
| C-1 | carousel-rotating-images | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | glow-shirts/ | R3 | Jun 8 | 28K | R3; small file; same image in 5 slots |
| C-2 | carousel-rotating-images | top5pct-glowing-halloween-bat-shirt.jpg | glow-shirts/ | R3 | Jun 8 | 257K | good |
| C-3 | carousel-rotating-images | top5pct-halloween-pumpkin-glow-shirt.jpg | glow-shirts/ | R3 | Jun 8 | 360K | good |
| C-4 | carousel-rotating-images | top5pct-custom-vinyl-shirts.jpg | custom-shirts/ | — | — | — | VIOLATION: broken path (file exists at digital-vinyl/ not custom-shirts/); wrong category for carousel |
| card-1 | card-image-with-text | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | glow-shirts/ | R3 | Jun 8 | 28K | R3; small file; same image in 5 slots |
| card-2 | card-image-with-text (imagePosition right) | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | glow-shirts/ | R3 | Jun 8 | 28K | R3; small file; same image in 5 slots |
| card-detailed image1 | card-detailed-info | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | glow-shirts/ | R3 | Jun 8 | 28K | R3; small file; same image in 5 slots |
| slide-R | card-banner-slide-in (direction right) | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | glow-shirts/ | R3 | Jun 8 | 28K | VIOLATION: slide-R must be cross-sell; same-dir used; same image in 5 slots |
| slide-L | card-banner-slide-in (direction left) | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | custom-shirts/ | Initial | Mar 16 | 27K | VIOLATION: Initial file; below R1-R3 minimum |

---

## R1-R3 Placement Summary

**Total blade image slots:** 10
**Round-compliant (R1-R3+):** 9 — hero, C-1, C-2, C-3, card-1, card-2, card-detailed image1, slide-R are all R3. C-4 is unresolvable (broken path).
**Initial violations:** 1 — slide-L
**Rule violations (independent of round):** 2 — C-4 broken path + wrong category; slide-R not a cross-sell
**Remaining to properly fill:** 5 slots need action (see Immediate Suggestions)

---

## Carousel

**Current slots:** 4 (C-1 through C-4)
**Target:** 4. May exceed 4 if all non-carousel slots are R1-R3.

**Non-carousel slot check:**

| slot | image | round | status |
|---|---|---|---|
| hero | top5pct-glow-in-the-dark-caps.jpg | R3 | good |
| card-1 | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | R3 | good (duplicate issue) |
| card-2 | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | R3 | good (duplicate issue) |
| card-detailed image1 | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | R3 | good (duplicate issue) |
| slide-R | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | R3 | VIOLATION (not cross-sell) |
| slide-L | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | Initial | VIOLATION |

All 4 current carousel slots are glow-shirts/ same-dir. C-4 is a broken reference and wrong category — must be removed. Carousel should drop to 3 until a 4th R1-R3+ glow-shirts/ file is available. Carousel expansion beyond 4 is not yet permitted because slide-R and slide-L violations are unresolved.

---

## Slide Rules Check

| slot | direction | image | dir | round | rule | status |
|---|---|---|---|---|---|---|
| slide-R | right | top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | glow-shirts/ | R3 | must be cross-sell R1-R3 | VIOLATION — same-dir, not a cross-sell |
| slide-L | left | top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | custom-shirts/ | Initial | cross-sell must be R1-R3 | VIOLATION — Initial file |

slide-R is using a glow-shirts/ same-dir image. The cross-sell rule requires it to come from a different category. A related specialty material dir (glitter-shirts/, foil-shirts/, or reflective-shirts/) is the natural cross-sell for this page.

slide-L cross-sells to custom-shirts/ holographic, which is thematically appropriate ("Pair Glow-in-the-Dark With Holographic for a Bold Look"). However the file is Initial. The custom-shirts/ dir has several R1-R2 files. Alternatively, another specialty material dir could supply the cross-sell image.

---

## Duplicate File Usage

`top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` (glow-shirts/, R3, 28K) appears in **5 slots**: C-1, card-1, card-2, card-detailed image1, and slide-R. This is the most extreme duplication found in this audit series. The file is also very small at 28K, making it a weak image for high-visibility slots like card-1, card-2, and card-detailed.

---

## File Usage Count

| file | dir | size | round | used in |
|---|---|---|---|---|
| top5pct-glow-in-the-dark-caps.jpg | glow-shirts/ | 305K | R3 | hero only |
| top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | glow-shirts/ | 28K | R3 | C-1, card-1, card-2, card-detailed image1, slide-R (5 slots — duplicate) |
| top5pct-glowing-halloween-bat-shirt.jpg | glow-shirts/ | 257K | R3 | C-2 only |
| top5pct-halloween-pumpkin-glow-shirt.jpg | glow-shirts/ | 360K | R3 | C-3 only |
| top5pct-custom-vinyl-shirts.jpg | custom-shirts/ (broken — file at digital-vinyl/) | — | — | C-4 only — broken reference |
| top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | custom-shirts/ | 27K | Initial | slide-L only — Initial violation |
| top5pct-glowing-hoodies-joliet.jpg | glow-shirts/ | 290K | R4 | unused |
| top5pct-glow-polo-shirts-joliet.jpg | glow-shirts/ | 265K | R4 | unused |
| top5pct-glow-in-the-dark-hats-joliet.jpg | glow-shirts/ | 302K | R4 | unused |
| top5pct-glow-shirts-channahon.jpg | glow-shirts/ | 286K | R4 | unused |

---

## Immediate Suggestions

### Fix 1 — C-4: remove from carousel (broken path + wrong category)

C-4 references `/images/custom-shirts/top5pct-custom-vinyl-shirts.jpg`. This file does not exist in custom-shirts/ — it lives in digital-vinyl/. Even if the path were corrected, custom-shirts/ (or digital-vinyl/) is the wrong category for the carousel; all carousel slots must be glow-shirts/ same-dir images.

**Action:** Remove C-4 from the carousel array. Carousel drops to 3 slots (C-1, C-2, C-3). No 4th glow-shirts/ R1-R3 file is available to fill a 4th slot at this stage; that waits for R4.

### Fix 2 — slide-R: replace with R1-R3 cross-sell from related specialty dir

slide-R must be a cross-sell image from a different category. Natural cross-sells for glow shirts are adjacent specialty vinyl materials: glitter-shirts/, foil-shirts/, or reflective-shirts/. All three are confirmed to have R1-R3 files.

**Action:** Select an R1-R3 image from glitter-shirts/, foil-shirts/, or reflective-shirts/ and place it in slide-R. Update the slide title and href to reflect the cross-sell destination.

### Fix 3 — slide-L: replace with R1-R3 cross-sell image

slide-L currently uses `top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` (custom-shirts/, Initial, 27K). Initial files may not be used in any blade slot. The holographic theme ("Pair Glow-in-the-Dark With Holographic for a Bold Look") is thematically strong and worth preserving if an R1-R3 holographic image can be sourced. If no holographic R1-R3 image is available, substitute with an R1-R3 image from another specialty material dir (glitter-shirts/, foil-shirts/, or reflective-shirts/).

**Action:** Replace slide-L image with an R1-R3 cross-sell from a related specialty dir. Confirm the title and href match the chosen cross-sell destination.

### Not fixable at R1-R3 stage — card-1, card-2, card-detailed image1

All three currently use `top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` (28K, R3). All four glow-shirts/ R3 files are already assigned (hero, C-1, C-2, C-3). No additional glow-shirts/ R1-R3 files are available to de-duplicate these slots. They remain with the tiny duplicate image until R4 supplies new glow-shirts/ files.

**These 3 slots are the primary R4 targets for this page.**

---

## Notes

- glow-shirts/ dir has no Initial, R1, or R2 files — all content is R3 or R4.
- `top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` (28K) is the most over-used image in the audit series: 5 slots on a single page, all with the same tiny file.
- The 4 R4 glow-shirts/ files (Jun 20) are all unused. They are the primary resource for filling card-1, card-2, card-detailed image1, and expanding the carousel to 4 at the R4 stage.
- C-4 broken path must be fixed regardless of round — it is a dead image reference.
- slide-L holographic cross-sell theme is worth preserving in the next round if an R1-R3 holographic image can be found.
- R1-R3 fixes needed before R4: Fix 1 (C-4 remove), Fix 2 (slide-R cross-sell), Fix 3 (slide-L cross-sell). Three fixes total.
