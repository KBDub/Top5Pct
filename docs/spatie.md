# Spatie Media Library — Evaluation Notes

## The Question

Would Spatie Media Library Pro (https://spatie.be/products/media-library-pro) be a good choice to automate generating the different standard compressed image sizes, so we do not have to produce them manually?

---

## What Media Library Pro Actually Does

Media Library Pro is primarily a polished **upload UI** — Blade, Vue, and React components for drag-and-drop media management inside admin forms. The actual image resizing and conversion engine lives in the free `spatie/laravel-medialibrary` package that sits underneath it.

Buying Pro gives you a better upload experience. It does not add new image processing capability beyond what the free package already provides.

---

## What We Actually Need

Automatic generation of our four standard sizes from a single uploaded original:

| Key | Dimensions | Use |
|---|---|---|
| `400x300` | 400x300 (4:3) | `card-detailed-info` floated images |
| `600x450` | 600x450 (4:3) | `card-image-with-text`, carousel slots |
| `1600x700` | 1600x700 (16:7) | `card-banner-slide-in` banners |
| `1920x1080` | 1920x1080 (16:9) | `category-hero` banners |

This is handled by the free `spatie/laravel-medialibrary` package through "conversions" — you define the target sizes once on a model and the package generates them automatically on upload via queued jobs.

---

## The Architecture Catch

Media Library conversions require images to be attached to an **Eloquent model**. Our marketing page images (hero, carousel, card images) are currently static files with hardcoded paths in blade files. To use auto-conversions you would need to either:

- Attach those images to a model (e.g., a `Page` or `MediaAsset` model), or
- Route all uploads through the Lunar admin

That is a moderate architecture shift from the current static-file approach.

---

## The Good News — It May Already Be Installed

Lunar PHP depends on `spatie/laravel-medialibrary` for product images. The free package is almost certainly already installed in this project. Conversions could be defined on an existing or new model and auto-resizing would work without buying the Pro license.

---

## Better Fit for Our Use Case

For automating the compression pipeline on static marketing images, a simpler approach fits the stack better:

**Custom `php artisan` command** that:
1. Reads originals from `public/images/<folder>/`
2. Generates all four standard sizes using `spatie/image` (free) or Intervention Image
3. Outputs them to `public/images/<folder>-compressed/` following our naming convention (`<subject>-<width>x<height>.jpg`)
4. Can be re-run any time new originals are dropped in

This fits the project rule of always using PHP for scripting and automation, keeps images as static files (no model attachment required), and costs nothing.

---

## When Pro Would Make Sense

Media Library Pro is worth the cost if:
- You want a polished upload UI for content editors in the admin panel
- Images need to be managed dynamically through a CMS-like interface rather than deployed as static files
- You want a full media management workflow with collections, conversions, and an admin interface all in one package

For the current use case (static marketing page images, manually added to the repo), the free package plus a custom artisan command is the right path.

---

## Recommendation

Do not buy Media Library Pro for image resizing alone. Build a PHP artisan command using `spatie/image` (free) that generates all four standard size keys from originals in batch. See `docs/compressed-images.md` for the full list of standard dimensions and naming conventions.
