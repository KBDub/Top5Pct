# Glitter Shirts — Image Status

**Blade:** `resources/views/pages/custom-apparel/glitter-shirts.blade.php`
**URL:** `/custom-apparel/specialty-materials/glitter-shirts`
**Dir:** `public/images/glitter-shirts/` — 11 files total.
**Verified:** Jun 25, 2026

---

## Dir Inventory

| file | size | date | round |
|---|---|---|---|
| top5pct-custom-glitter-clothing.jpg | 290K | May 11 | R1 |
| top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | 30K | Mar 16 | Initial |
| top5pct-custom-glitter-sweatshirts.jpg | 316K | Jun 2 | R2 |
| top5pct-custom-wedding-glitter-shirts.jpg | 336K | Jun 2 | R2 |
| top5pct-gitter-birthday-shirt.jpg | 332K | Jun 2 | R2 |
| top5pct-glitter-blue-jean-jacket.jpg | 422K | Jun 2 | R2 |
| top5pct-glitter-lips-custom-t-shirt.jpg | 315K | Jun 2 | R2 |
| top5pct-glitter-sportswear-shirts.jpg | 99K | Jun 8 | R3 |
| top5pct-glitter-sweatshirts-joliet.jpg | 367K | Jun 8 | R3 |
| top5pct-glitter-t-shirts-cresthill.jpg | 358K | Jun 2 | R2 |
| top5pct-glitter-t-shirts.jpg | 394K | Jun 2 | R2 |

Note: `top5pct-gitter-birthday-shirt.jpg` has a typo in the filename ("gitter" instead of "glitter") — documented as-is.

---

## Image Inventory

| section / category | image | path | round | file date | size | status |
|---|---|---|---|---|---|---|
| hero — category-hero | top5pct-glitter-t-shirts.jpg | glitter-shirts/ | R2 | Jun 2 | 394K | good |
| carousel C-1 — carousel-rotating-images | top5pct-custom-glitter-clothing.jpg | glitter-shirts/ | R1 | May 11 | 290K | good |
| carousel C-2 — carousel-rotating-images | top5pct-custom-glitter-sweatshirts.jpg | glitter-shirts/ | R2 | Jun 2 | 316K | good |
| carousel C-3 — carousel-rotating-images | top5pct-custom-wedding-glitter-shirts.jpg | glitter-shirts/ | R2 | Jun 2 | 336K | good |
| carousel C-4 — carousel-rotating-images | top5pct-glitter-blue-jean-jacket.jpg | glitter-shirts/ | R2 | Jun 2 | 422K | good |
| carousel C-5 — carousel-rotating-images | top5pct-glitter-sportswear-shirts.jpg | glitter-shirts/ | R3 | Jun 8 | 99K | good |
| carousel C-6 — carousel-rotating-images | top5pct-glitter-sweatshirts-joliet.jpg | glitter-shirts/ | R3 | Jun 8 | 367K | good |
| card-1 — card-image-with-text | top5pct-glitter-lips-custom-t-shirt.jpg | glitter-shirts/ | R2 | Jun 2 | 315K | good |
| card-2 — card-image-with-text (imagePosition right) | top5pct-glitter-t-shirts-cresthill.jpg | glitter-shirts/ | R2 | Jun 2 | 358K | good |
| card-detailed image1 — card-detailed-info | top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | glitter-shirts/ | Initial | Mar 16 | 30K | initial, small file |
| slide-L — card-banner-slide-in (direction left) | top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | glitter-shirts/ | Initial | Mar 16 | 30K | initial, small file, repeat of card-detailed image1 |
| slide-R — card-banner-slide-in (direction right) | top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg | custom-shirts/ | Initial | Mar 16 | 23K | initial, small file, cross-sell to rhinestone but must be R1-R3 |

**Note:** `card-detailed-info` on this page uses only `image1`. There is no `image2` slot on this component instance.

---

## R1-R3 Placement Summary

**Filled:** 9 of 12 slots
**Remaining (Initial):** 3 slots

| slot | image | size | issue |
|---|---|---|---|
| card-detailed image1 | top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | 30K | Initial, small file |
| slide-L | top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | 30K | Initial, small file, same file as card-detailed image1 |
| slide-R | top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg (custom-shirts/) | 23K | Initial, small file, cross-sell direction (rhinestone) is correct but file must be R1-R3 |

**Additional issue (not Initial, but requires action):**

| item | issue |
|---|---|
| carousel at 6 slots | Must drop to 4 while card-detailed image1 and slide-L are Initial. All 6 current slots are R1-R3 same-dir, but the carousel cap rule applies until all other page slots are R1+. |

---

## Unused Files in Dir

| file | size | round | note |
|---|---|---|---|
| top5pct-gitter-birthday-shirt.jpg | 332K | R2 | Not referenced anywhere in the blade. Available for any slot. |

This is a clean R2 file (Jun 2, 332K) sitting in glitter-shirts/ with no current assignment. It can be used for card-detailed image1 without dropping any carousel files for that slot.

---

## File Usage Count (current)

| file | path | size | round | used in |
|---|---|---|---|---|
| top5pct-glitter-t-shirts.jpg | glitter-shirts/ | 394K | R2 | hero only |
| top5pct-custom-glitter-clothing.jpg | glitter-shirts/ | 290K | R1 | C-1 only |
| top5pct-custom-glitter-sweatshirts.jpg | glitter-shirts/ | 316K | R2 | C-2 only |
| top5pct-custom-wedding-glitter-shirts.jpg | glitter-shirts/ | 336K | R2 | C-3 only |
| top5pct-glitter-blue-jean-jacket.jpg | glitter-shirts/ | 422K | R2 | C-4 only |
| top5pct-glitter-sportswear-shirts.jpg | glitter-shirts/ | 99K | R3 | C-5 only |
| top5pct-glitter-sweatshirts-joliet.jpg | glitter-shirts/ | 367K | R3 | C-6 only |
| top5pct-glitter-lips-custom-t-shirt.jpg | glitter-shirts/ | 315K | R2 | card-1 only |
| top5pct-glitter-t-shirts-cresthill.jpg | glitter-shirts/ | 358K | R2 | card-2 only |
| top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg | glitter-shirts/ | 30K | Initial | card-detailed image1 and slide-L (2 slots) |
| top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg | custom-shirts/ | 23K | Initial | slide-R only |
| top5pct-gitter-birthday-shirt.jpg | glitter-shirts/ | 332K | R2 | unused |

`top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` (30K, Initial) fills 2 of the 12 slots: card-detailed image1 and slide-L.

---

## Immediate Suggestions

### 1. Drop carousel from 6 to 4 slots

Carousel is at 6 slots. card-detailed image1 and slide-L are Initial. The carousel must drop to 4.

All 6 current carousel slots are R1-R3 same-dir. Keep the R1 file, both R3 files, and the largest R2 file. Drop the 2 smaller R2 files. Both dropped files are available for slide-L (see suggestion 3).

| action | slot | image | round | size |
|---|---|---|---|---|
| keep | C-1 | top5pct-custom-glitter-clothing.jpg | R1 | 290K |
| drop | C-2 | top5pct-custom-glitter-sweatshirts.jpg | R2 | 316K |
| drop | C-3 | top5pct-custom-wedding-glitter-shirts.jpg | R2 | 336K |
| keep | C-4 → C-2 | top5pct-glitter-blue-jean-jacket.jpg | R2 | 422K |
| keep | C-5 → C-3 | top5pct-glitter-sportswear-shirts.jpg | R3 | 99K |
| keep | C-6 → C-4 | top5pct-glitter-sweatshirts-joliet.jpg | R3 | 367K |

Result: 4-slot carousel with R1, R2 (largest), R3, R3. All same-dir.

### 2. Replace card-detailed image1

Use the unused same-dir file `top5pct-gitter-birthday-shirt.jpg` (glitter-shirts/, R2, Jun 2, 332K). It is already in the dir, assigned nowhere, and needs no carousel drop to free it up. The birthday theme matches the page content about celebration glitter shirts. No cross-sell needed for this slot.

| slot | replace with | round | size | from |
|---|---|---|---|---|
| card-detailed image1 | top5pct-gitter-birthday-shirt.jpg | R2 | 332K | glitter-shirts/ (unused) |

### 3. Replace slide-L

Two R2 files are freed by the carousel drop in suggestion 1. Use whichever fits the slide-L title best. The current title is "Glitter Shirts for Your Next Celebration." `top5pct-custom-wedding-glitter-shirts.jpg` (R2, 336K) — wedding and celebration glitter shirts — is the strongest match. slide-L does not require a cross-sell; same-dir is preferred.

| slot | replace with | round | size | from |
|---|---|---|---|---|
| slide-L | top5pct-custom-wedding-glitter-shirts.jpg | R2 | 336K | glitter-shirts/ (dropped from carousel C-3) |

After this assignment, `top5pct-custom-glitter-sweatshirts.jpg` (R2, 316K, dropped from carousel C-2) is freed with no current open slot. It is available as a future additional carousel slot once all page slots are R1+.

### 4. Replace slide-R

slide-R must be a cross-sell to an R1-R3 file. Current file is Initial (23K), from custom-shirts/. The cross-sell direction (rhinestone) is correct — the slide title is "Combine Glitter With Rhinestone for Maximum Sparkle."

The rhinestone-shirts/ dir has one confirmed R1+ file:

| candidate | path | round | date | size |
|---|---|---|---|---|
| top5pct-rhinestone-tshirts-joliet.jpg | rhinestone-shirts/ | R2+ | Jun 3 | 265K |

Replace the current Initial slide-R with this file. The cross-sell direction is unchanged. Alt text should be updated to match the new file.

| slot | replace with | round | size | from |
|---|---|---|---|---|
| slide-R | top5pct-rhinestone-tshirts-joliet.jpg | R2+ | 265K | rhinestone-shirts/ |

---

## After All 4 Suggestions Applied

| slot | image | path | round | status |
|---|---|---|---|---|
| hero | top5pct-glitter-t-shirts.jpg | glitter-shirts/ | R2 | good |
| C-1 | top5pct-custom-glitter-clothing.jpg | glitter-shirts/ | R1 | good |
| C-2 | top5pct-glitter-blue-jean-jacket.jpg | glitter-shirts/ | R2 | good |
| C-3 | top5pct-glitter-sportswear-shirts.jpg | glitter-shirts/ | R3 | good |
| C-4 | top5pct-glitter-sweatshirts-joliet.jpg | glitter-shirts/ | R3 | good |
| card-1 | top5pct-glitter-lips-custom-t-shirt.jpg | glitter-shirts/ | R2 | good |
| card-2 | top5pct-glitter-t-shirts-cresthill.jpg | glitter-shirts/ | R2 | good |
| card-detailed image1 | top5pct-gitter-birthday-shirt.jpg | glitter-shirts/ | R2 | good |
| slide-L | top5pct-custom-wedding-glitter-shirts.jpg | glitter-shirts/ | R2 | good |
| slide-R | top5pct-rhinestone-tshirts-joliet.jpg | rhinestone-shirts/ | R2+ | good, cross-sell |

All 10 blade image slots R1-R3. Carousel at 4 slots, all same-dir. No Initial files remain. R4 audit ready.

---

## Notes

- `top5pct-gitter-birthday-shirt.jpg` has a typo ("gitter") in its filename. The file is R2 (Jun 2, 332K) and usable as-is. Rename is optional and would require a blade update.
- `top5pct-glitter-sportswear-shirts.jpg` is R3 but small (99K). It stays in the carousel because its round (R3, Jun 8) outranks the larger R2 files. If a larger R3 glitter-shirts/ file is added in a future round, it should replace this slot.
- `top5pct-custom-glitter-sweatshirts.jpg` (R2, 316K, dropped from carousel C-2) is freed after suggestion 3 fills slide-L. It is available as a future 5th carousel slot if all card slots reach R1+.
- The rhinestone-shirts/ dir currently has only one file. If additional rhinestone R1-R3 files are added in a future round, the slide-R cross-sell can be upgraded.
- R4 audit deferred until all 4 suggestions are applied.
