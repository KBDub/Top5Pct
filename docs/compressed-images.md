# Compressed Images Reference

This document maps the original images in `public/images/glitter-shirts/` to the compressed, dimension-keyed versions in `public/images/glitter-shirts-compressed/`. It also records which blade section uses each image and the ideal dimensions for that section.

Use this as the reference when swapping originals for compressed versions in the blade file.

---

## Standard Dimension Keys

The compressed folder uses a naming convention of `<subject>-<width>x<height>.ext`. The site uses four standard sizes:

| Key | Dimensions | Ratio | Typical use |
|---|---|---|---|
| `400x300` | 400px wide, 300px tall | 4:3 | `card-detailed-info` floated images |
| `600x450` | 600px wide, 450px tall | 4:3 | `card-image-with-text`, carousel center slot |
| `1600x700` | 1600px wide, 700px tall | 16:7 | `card-banner-slide-in` full-bleed banners |
| `1920x1080` | 1920px wide, 1080px tall | 16:9 | `category-hero` full-bleed banner |

---

## Blade Section Map

The blade file is `resources/views/pages/custom-apparel/glitter-shirts.blade.php`.

### 1. `x-sections.category-hero` (line 50)

**Component behavior:** Full-bleed `object-cover` image filling the hero container. Large source images perform best. Ideal key: `1920x1080`.

| Slot | Current original | Ideal compressed replacement |
|---|---|---|
| `image` | `top5pct-glitter-t-shirts.jpg` (800x600) | No direct match. `glitter-shirt-crest-hill-1920x1080.jpg` is the only hero-scale compressed image in the folder. Verify it is the same subject or an acceptable substitute before swapping. |

---

### 2. `x-ui.carousel-rotating-images` (lines 58-67, `visible=2`)

**Component behavior:** Center slot renders at `width:600px; aspect-ratio:4/3` (effectively 600x450). Side slots render at 300px wide, same ratio. All slots use `object-cover`. The 600x450 key is the right swap target.

| Position | Current original | Compressed 600x450 | Compressed 400x300 | Match confidence |
|---|---|---|---|---|
| 1 | `top5pct-custom-glitter-clothing.jpg` (800x600) | None | None | No match, not compressed yet |
| 2 | `top5pct-glitter-blue-jean-jacket.jpg` (800x600) | `glitter-blue-jean-jacket-600x450.jpg` | `glitter-blue-jean-jacket-400x300.jpg` | Direct name match |
| 3 | `top5pct-glitter-sportswear-shirts.jpg` (800x600) | None | None | No match, not compressed yet |
| 4 | `top5pct-glitter-sweatshirts-joliet.jpg` (800x600) | `glitter-sweatshirts-joliet-600x450.jpg` | `glitter-sweatshirts-joliet-400x300.jpg` | Direct name match |
| 5 | `top5pct-glitter-hoodies-plainfield.jpg` (800x600) | `glitter-hoodies-plainfield-600x450.jpg` | `glitter-hoodies-plainfield-400x300.jpg` | Direct name match |
| 6 | `top5pct-custom-glitter-birthday-shirts-joliet.jpg` (800x600) | None | None | No match, naming convention differs from `gitter-birthday-shirt` |
| 7 | `top5pct-custom-glitter-sweatshirts.jpg` (800x600) | None | None | No match, `glitter-sweatshirts-joliet` is a different image |

---

### 3. `x-sections.card-image-with-text` — first card (line 76)

**Component behavior:** Renders at `width:600px; height:450px; max-width:100%` per site standard. Ideal key: `600x450`.

| Slot | Current original | Compressed 600x450 | Compressed 400x300 | Match confidence |
|---|---|---|---|---|
| `image` | `top5pct-glitter-lips-custom-t-shirt.jpg` (800x600) | `glitter-lips-custom-t-shirt-600x450.jpg` | `glitter-lips-custom-t-shirt-400x300.jpg` | Direct name match |

---

### 4. `x-sections.card-image-with-text` — second card (line 86)

**Component behavior:** Same as above. Ideal key: `600x450`.

| Slot | Current original | Compressed 600x450 | Compressed 400x300 | Match confidence |
|---|---|---|---|---|
| `image` | `top5pct-glitter-t-shirts-cresthill.jpg` (800x600) | `glitter-t-shirts-cresthill-600x450.jpg` | `glitter-t-shirts-cresthill-400x300.jpg` | Direct name match |

---

### 5. `x-sections.card-detailed-info` (line 101)

**Component behavior:** Single-image layout. Image renders at `width:400px; aspect-ratio:4/3` (400x300). The 400x300 key is the right swap target.

| Slot | Current original | Compressed 600x450 | Compressed 400x300 | Match confidence |
|---|---|---|---|---|
| `image1` | `top5pct-gitter-birthday-shirt.jpg` (800x600) | `gitter-birthday-shirt-600x450.jpg` | `gitter-birthday-shirt-400x300.jpg` | Direct match. Note: the "gitter" typo is intentional in the original filename and is preserved in the compressed versions. |

---

### 6. `x-ui.card-banner-slide-in` — first banner (line 131)

**Component behavior:** The container uses `aspect-[16/7]`, a wide, short landscape banner. The image fills it with `object-cover`. Ideal key: `1600x700`. Portrait images (such as 800x1200) are the wrong shape for this component and will crop heavily.

| Slot | Current original | Compressed replacement |
|---|---|---|
| `image` | `top5pct-custom-wedding-glitter-shirts.jpg` (800x600) | No match, not compressed yet. Needs a `1600x700` crop. |

---

### 7. `x-ui.card-banner-slide-in` — second banner (line 138)

This card pulls from the rhinestone folder, not the glitter-shirts folder. Out of scope for this mapping.

---

## Compressed Images With No Current Blade Usage

These files exist in `public/images/glitter-shirts-compressed/` but are not referenced in the glitter-shirts blade. They may be candidates for future section additions or swaps.

| File | Actual dimensions | Notes |
|---|---|---|
| `glitter-shirt-crest-hill-400x300.jpg` | 400x300 | "shirt" singular, likely a different crop from the "shirts" plural versions below |
| `glitter-shirt-crest-hill-600x450.jpg` | 600x450 | Same as above |
| `glitter-shirt-crest-hill-1920x1080.jpg` | 1920x1080 | Only hero-scale image in the folder, candidate for the `category-hero` slot |
| `glitter-shirts-crest-hill-400x300.jpg` | 400x300 | "shirts" plural, likely a different crop from the singular version above |
| `glitter-shirts-crest-hill-600x450.jpg` | 600x450 | Same as above |
| `glitter-sweatshirts-rockdale-400x300.jpg` | 400x300 | Rockdale location variant, no blade reference yet |
| `glitter-sweatshirts-rockdale-600x450.jpg` | 600x450 | Same as above |

---

## Off-Standard Formats

These files use dimensions outside the four standard keys. They may need re-cropping before use.

| File | Actual dimensions | Ratio | Notes |
|---|---|---|---|
| `glitter-shirt-joliet-spurs-basketball-400x300.jpg` | 400x267 | ~3:2 | Off-ratio, the actual image is not a true 4:3 |
| `glitter-shirtt-joliet-spurs-basketball-600x450.jpg` | 600x400 | 3:2 | Filename typo ("shirtt"), also off-ratio |

---

## Originals With No Compressed Counterpart

These original images are referenced in the blade or exist in the source folder but have no matching file in the compressed folder. They still need to be compressed to follow the standard.

| Original file | Used in blade | Original dimensions | Target compressed key |
|---|---|---|---|
| `top5pct-glitter-t-shirts.jpg` | Yes, `category-hero` | 800x600 | `1920x1080` |
| `top5pct-custom-glitter-clothing.jpg` | Yes, carousel slot 1 | 800x600 | `600x450` |
| `top5pct-custom-glitter-birthday-shirts-joliet.jpg` | Yes, carousel slot 6 | 800x600 | `600x450` |
| `top5pct-custom-glitter-sweatshirts.jpg` | Yes, carousel slot 7 | 800x600 | `600x450` |
| `top5pct-custom-wedding-glitter-shirts.jpg` | Yes, `card-banner-slide-in` | 800x600 | `1600x700` |
| `top5pct-glitter-sportswear-shirts.jpg` | Yes, carousel slot 3 | 800x600 | `600x450` |
| `top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | No | 400x485 | N/A |
| `top5pct-custom-glitter-sweatshirts-joliet.jpg` | No (subject covered by `top5pct-glitter-sweatshirts-joliet.jpg`) | 800x600 | N/A |

---

## Likely Misplaced Files

`foil-shirts-cresthill-400x300.jpg` and `foil-shirts-cresthill-600x450.jpg` have a "foil-shirts" prefix and appear to belong to the foil-shirts page rather than the glitter-shirts page. They are currently in `public/images/glitter-shirts-compressed/` and have no reference in the glitter-shirts blade.
