# custom-shirts/ Image Split Analysis

**Purpose:** Determine which files in `public/images/custom-shirts/` should move to a specific technique dir, and which belong on the custom-shirts landing page as shared/generic images.

**Total files in custom-shirts/:** 75
**Analysis date:** June 25, 2026

---

## Summary

| group | count | notes |
|---|---|---|
| Clear move | 51 | Filename unambiguously names one technique |
| Judgment call | 8 | One technique shown on shirts, caps, AND hoodies together |
| Stay in custom-shirts/ | 16 | Generic, article pics, multi-product, or no matching dir |
| **Total** | **75** | |

The original inventory estimate was ~40 moveable files. Actual analysis shows 51 clear and 8 more that could go either way. The user should confirm which judgment-call files to move before migration runs.

---

## Group 1: Clear Move (51 files)

These files name a single printing technique with no ambiguity. Move to the listed dir.

### brick-shirts/ (5 files)

| filename | round |
|---|---|
| top5pct-brick-vinyl-cresthill.jpg | Jun 2, R3 |
| top5pct-brick-vinyl-jackets-joliet.jpg | Jun 2, R3 |
| top5pct-brick-vinyl-custom-t-shirt.jpg | Jun 2, R3 |
| top5pct-customized-brick-vinyl-shirts.jpg | Jun 2, R3 |
| top5pct-brick-vinyl-hoodies.jpg | May 11, R1 |

### digital-vinyl/ (16 files)

| filename | round |
|---|---|
| top5pct-digital-vinyl-hoodie.jpg | May 11, R1 |
| top5pct-digital-vinyl-hoodies-in-joliet.jpg | May 11, R1 |
| top5pct-digital-vinyl-t-shirts.jpg | Jun 2, R3 |
| top5pct-digital-vinyl-shirts.jpg | May 11, R1 |
| top5pct-neon-vinyl-shirts.jpg | May 11, R1 |
| top5pct-vinyl-shirts.jpg | May 11, R1 |
| top5pct-vinyl-printed-shirts.jpg | May 11, R1 |
| top5pct-vinyl-t-shirt-maker.jpg | May 11, R1 |
| top5pct-vinyl-hoodie.jpg | May 11, R1 |
| top5pct-vinyl-zip-up-hoodies.jpg | May 11, R1 |
| top5pct-vinyl-caps.jpg | May 11, R1 |
| top5pct-custom-vinyl-shirts.jpg | May 11, R1 |
| top5pct-custom-vinyl-hoodies.jpg | May 11, R1 |
| top5pct-custom-vinyl-hoodies-2.jpg | May 11, R1 |
| top5pct-custom-printed-vinyl-shirts.jpg | May 11, R1 |
| top5pct-custom-caps-vinyl.jpg | May 11, R1 |

### flock-shirts/ (3 files)

| filename | round |
|---|---|
| top5pct-flock-shirt-vinyl.jpg | Jun 2, R3 |
| top5pct-flock-hoodie-printing.jpg | Jun 2, R3 |
| top5pct-custom-flock-t-shirt-printing.jpg | Jun 2, R3 |

### foil-shirts/ (5 files)

| filename | round |
|---|---|
| top5pct-gold-foil-printed-shirts.jpg | Jun 2, R3 |
| top5pct-custom-foil-polo.jpg | Jun 2, R3 |
| top5pct-foil-custom-t-shirts.jpg | Jun 2, R3 |
| top5pct-foil-gold-t-shirt.jpg | Jun 2, R3 |
| top5pct-custom-wedding-foil-shirts.jpg | Jun 2, R3 |

### glitter-shirts/ (1 file)

| filename | round | notes |
|---|---|---|
| top5pct-custom-glitter-sweatshirts-joliet.jpg | May 11, R1 | renamed from -old at Jun 24 cleanup |

### glow-shirts/ (3 files)

| filename | round |
|---|---|
| top5pct-glowing-halloween-bat-shirt.jpg | Jun 2, R3 |
| top5pct-halloween-pumpkin-glow-shirt.jpg | Jun 2, R3 |
| top5pct-glow-in-the-dark-caps.jpg | Jun 2, R3 |

### holographic-shirts/ (1 file)

| filename | round |
|---|---|
| top5pct-holographic-vinyl-hoodie-foil.jpg | Jun 2, R3 |

### reflective-shirts/ (5 files)

| filename | round |
|---|---|
| top5pct-reflective-shirts.jpg | Jun 2, R3 |
| top5pct-reflective-vinyl-shirts-plainfield.jpg | Jun 2, R3 |
| top5pct-custom-reflective-hoodies.jpg | Jun 2, R3 |
| top5pct-reflective-shirts-shorewood.jpg | Jun 2, R3 |
| top5pct-reflective-shirts-gold.jpg | May 11, R1 |

### rhinestone-apparel/ (8 files)

| filename | round | notes |
|---|---|---|
| top5pct-rhinestone-ladies-shirt.jpg | Jun 2, R3 | |
| top5pct-rhinestone-hoodies-joliet.jpg | May 11, R1 | |
| top5pct-rhinetsone-t-shirts.jpg | Jun 2, R3 | filename typo, rename to rhinestone at migration |
| top5pct-rhinestone-bling-joliet.jpg | Jun 2, R3 | |
| top5pct-rhinestone-apparel-keith-elementary.jpg | Jun 2, R3 | |
| top5pct-rhinestone-hoodie-joliet-west.jpg | Jun 2, R3 | |
| top5pct-custom-rhinestone-shirts.jpg | Jun 2, R3 | |
| top5pct-rhinestone-t-shirts-joliet.jpg | Jun 2, R3 | |

### screen-printing/ (4 files)

| filename | round |
|---|---|
| top5pct-screenprint-custom-shirts.jpg | May 11, R1 |
| top5pct-screenprinting-shirts.jpg | May 11, R1 |
| top5pct-screenprinted-shirts-joliet.jpg | May 11, R1 |
| top5pct-screenprinted-shirts-in-joliet.jpg | May 11, R1 |

---

## Group 2: Judgment Call (8 files)

Each of these clearly shows one printing technique, but the image covers shirts, caps, AND hoodies together. They could move to the technique dir or stay in custom-shirts/ as multi-garment overview images. User should decide before migration.

| filename | round | likely target dir |
|---|---|---|
| top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg | Mar 16, Initial | brick-shirts/ |
| top5pct-custom-vinyl-shirts-caps-hoodies.jpg | Mar 16, Initial | digital-vinyl/ |
| top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg | Mar 16, Initial | flock-shirts/ |
| top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg | Mar 16, Initial | foil-shirts/ |
| top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg | Mar 16, Initial | glow-shirts/ |
| top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg | Mar 16, Initial | holographic-shirts/ |
| top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg | Mar 16, Initial | reflective-shirts/ |
| top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg | Mar 16, Initial | rhinestone-apparel/ |

Note: All 8 are Mar 16 Initial-round images. They appear to be a matching set of overview photos, one per technique. Moving them keeps the technique dirs complete. Keeping them in custom-shirts/ preserves the overview grid on the landing page.

---

## Group 3: Stay in Custom-Shirts/ (16 files)

These belong on the custom-shirts landing page. No single technique to move them to, or no matching target dir exists.

### Generic / no specific technique (13 files)

| filename | round | reason to stay |
|---|---|---|
| top5pct-custom-t-shirts-main.jpg | Mar 16, Initial | main hero/banner for the page |
| top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg | Mar 16, Initial | multi-product section banner |
| top5pct-custom-shirts-with-pictures-joliet-shorewood.jpg | Mar 16, Initial | generic shirts, no technique named |
| top5pct-custom-hoodies.jpg | May 11, R1 | generic hoodies, no technique |
| top5pct-custom-shirt-pictures.jpg | May 11, R1 | generic shirts |
| top5pct-toddler-custom-shirts.jpg | May 11, R1 | kids/toddler shirts, no dir |
| top5pct-custom-dog-bandanas.jpg | May 11, R1 | dog bandanas, no target dir |
| top5pct-custom-bowling-shirts.jpg | May 11, R1 | bowling shirts, no target dir |
| top5pct-custom-shirt-chameleon.jpg | Jun 2, R3 | color-changing novelty, no dir |
| top5pct-long-lasting-graphic-shirts.jpg | Jun 2, R3 | durability/marketing image, no specific technique |
| top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg | Mar 16, Initial | pattern technique, no pattern-shirts/ dir |
| top5pct-t-shirt-maker-article-pic1.jpg | Mar 17, Initial | article/blog image |
| top5pct-t-shirt-maker-article-pic2.jpg | Mar 17, Initial | article/blog image |

### No target dir exists for this technique (3 files)

| filename | round | technique | action needed |
|---|---|---|---|
| top5pct-custom-puff-shirts.jpg | Jun 2, R3 | puff printing | create puff-shirts/ dir, or keep here |
| top5pct-puff-shirts-joliet.jpg | Jun 2, R3 | puff printing | same |
| top5pct-puff-shirts.jpg | Jun 2, R3 | puff printing | same |

Note: No `puff-shirts/` directory exists. If a puff-shirts page is planned, create the dir and move these 3 files then. Until the dir exists, these stay in custom-shirts/.

---

## Migration Notes

- **Rename at migration:** `top5pct-rhinetsone-t-shirts.jpg` has a filename typo (rhinetsone). Rename to `top5pct-rhinestone-t-shirts.jpg` when moving to rhinestone-apparel/.
- **Blade audit required:** Before running moves, grep all blade files that reference `custom-shirts/` to make sure no page hard-codes a path to a file that will move.
- **Dir counts after migration:** rhinestone-apparel/ will grow from 1 file to at least 9 (plus up to 1 judgment call). All other target dirs gain new files on top of what they already have.
- **Judgment calls:** If all 8 judgment-call files move, total moved = 59. If none move, total moved = 51. The doc splits apply either way.
