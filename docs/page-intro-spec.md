# x-sections.page-intro — Component Specification

## Purpose

`x-sections.page-intro` replaces `x-sections.top5pct-same-day-service` on all product and service pages — both regular category pages and category landing pages (LPs).

The old component was a two-column bullet-list card. The new component is a warm, paragraph-style intro section that leads with trust and social proof, layers in page-specific product detail, weaves in cross-sell links, and closes with a CTA button anchored to the lower-right. The goal is to feel like an inviting, confident conversation — not a feature checklist.

---

## Centralized Config — service areas

`config/client.php` already exists and is the right home for all sitewide data. It has four service area keys that are currently empty and need to be populated before build:

```php
// config/client.php  (keys already exist — values need populating)

'service_areas' => [
    // Full city list — used in the service area line and footer
    'Joliet', 'Shorewood', 'Plainfield', 'Romeoville', 'Bolingbrook',
    'Lockport', 'Channahon', 'Minooka', 'New Lenox', 'Mokena',
    'Frankfort', 'Homer Glen', 'Lemont', 'Crest Hill', 'Naperville',
    'Aurora', 'Oswego', 'Yorkville',
],

'priority_service_areas' => [
    // Short list for headings and compact references
    'Joliet', 'Shorewood', 'Plainfield', 'Romeoville', 'Bolingbrook',
    'Lockport', 'Channahon', 'Crest Hill',
],

'service_areas_description' => 'Serving Joliet, Shorewood, Plainfield, Romeoville, Bolingbrook, Lockport, Channahon, Crest Hill, Naperville, Aurora, and the greater Chicagoland area.',

'service_area_slugs' => [
    // Slugs that match /service-areas/{slug} routes
    'joliet', 'shorewood', 'plainfield', 'romeoville', 'bolingbrook',
    'lockport', 'channahon', 'crest-hill', 'naperville', 'aurora',
],
```

The `x-sections.page-intro` component reads from config — never hardcodes city names:

```blade
{{ config('client.service_areas_description') }}
<a href="tel:{{ config('client.phone_raw') }}" class="link-notification">
    {{ config('client.phone') }}
</a>
```

### Components currently hardcoding city data (need config migration too)

The following 21 components currently hardcode "Joliet" or city lists inline. They should all be migrated to read from `config('client.*')` so city data is maintained in one place:

`top5pct-same-day-service`, `footer`, `mega-menu-ad`, `top-notification-bar`, `navigation-bar`, `why-choose-us`, `category-hero`, `cta-ready-to-get-started`, `home-page-hero`, `home-page-services-accordion`, `map-section`, `represent-yourself`, `shirt-types-faq`, `shirt-types-video`, `storefront-demo-preview`, `video-banner`, `featured-products`, `about-preview`, `send-message-modal`, `contact-modal`, `layouts/page`

This is a separate task from building `page-intro`, but the config keys should be populated first so every component can benefit.

---

## Placement on Every Page

The component drops in the same position as the old one: immediately after `<x-ui.banner-medium-sunburst />`, below the hero.

```blade
<x-ui.banner-medium-sunburst />
<x-sections.page-intro ... />
<x-ui.carousel-rotating-images ... />
```

---

## Layout Concept

**Full-width section, `bg-linen-light`, `py-10`, `max-w-7xl` container.**

```
┌──────────────────────────────────────────────────────────────────────┐
│  [Sunburst left-border accent]                                       │
│                                                                      │
│  H2: "Trusted {displayServiceType} in Joliet, IL"                   │
│      ▔▔▔▔▔▔▔▔▔▔▔▔  (sunburst underbar)                             │
│                                                                      │
│  Trust paragraph  (Google stars · veteran owned · since 2017)       │
│                                                                      │
│  Product paragraph  (page-specific — what makes this service great)  │
│                                                                      │
│  Cross-sell paragraph  (links to 2–3 related services)              │
│                                                                      │
│  Service area line   (from config — city list, compact)             │
│                                                                      │
│                                        [ CTA Button → lower-right ] │
└──────────────────────────────────────────────────────────────────────┘
```

On mobile: the CTA button goes full-width below the service area line.

---

## Props Specification

```blade
@props([
    // --- Required ---
    'displayServiceType'  => 'Custom Signage & Apparel',
    // Human-readable name shown in the H2 and inline copy.
    // e.g. "DTF Transfers", "Custom Banners", "Vinyl Shirts"

    // --- Product paragraph (page-level) ---
    'productIntro'        => '',
    // 1–3 sentences about THIS specific service: what it is, who it's for,
    // what makes Top 5 Percent's version stand out.
    // Accepts HTML — use <a class="link-inline"> for inline links.

    // --- Cross-sell paragraph (optional) ---
    'crossSell'           => '',
    // 1–2 sentences linking to 2–3 related services.
    // Accepts HTML — use <a class="link-inline"> for inline links.
    // Leave empty to omit the paragraph entirely.

    // --- CTA button ---
    'ctaText'             => 'Get a Free Quote',
    'ctaHref'             => '',
    // If ctaHref is empty the button dispatches open-contact-modal instead.
    // Common values: "#all-products", "/contact", "tel:+18153498600"

    // --- Trust overrides (rarely needed — defaults are sitewide) ---
    'reviewCount'         => '200+',
    // Shows in trust paragraph: "Backed by {reviewCount} five-star Google reviews"

    'trustNote'           => '',
    // Optional extra sentence appended to the trust paragraph.
    // e.g. "Same day service is available on most {displayServiceType} orders."
])
```

---

## Section Anatomy (Detail)

### 1. Heading

```blade
<div class="inline-block mb-6">
    <h2 class="text-h2 font-bold text-charcoal mb-2">
        Trusted <span class="text-sunburst">{{ $displayServiceType }}</span> in Joliet, IL
    </h2>
    <div class="h-1 bg-sunburst"></div>
</div>
```

### 2. Trust paragraph (sitewide — same across all pages)

Covers five-star Google reviews, veteran ownership, since 2017, no minimums, in-house production. Any page-specific same-day note goes in `trustNote`.

```
We carry a five-star rating on Google, backed by {reviewCount} reviews from businesses and
residents across Chicagoland. Top 5 Percent is veteran owned, has operated out of Joliet
since 2017, and produces every order in-house from start to finish — no outsourcing, no
middlemen, and no surprises on price. {trustNote}
```

Links:
- "five-star rating on Google" → `/reviews` (`link-inline`)
- "veteran owned" → `/about` (`link-inline`)

### 3. Product paragraph

Injected via `productIntro` prop. Written per page. Should answer:
- What exactly is this service?
- What materials, techniques, or finishes make it worth choosing?
- Who orders it most (businesses, groups, individuals)?

Example — DTF Transfers:
> "Direct-to-film printing lets us put full-color photographic prints on any fabric with no cracking, no peeling, and no minimums. We print DTF transfers in-house on our own equipment so you get consistent quality on one shirt or a thousand, and our design team can build or refine your artwork before production starts."

### 4. Cross-sell paragraph

Injected via `crossSell` prop. 1–2 sentences. Links to 2–3 logically related services via `link-inline`. Omitted entirely when empty.

Example — DTF Transfers:
> "Pair your DTF shirts with a matching <a href="/signs/business-signs/banners" class="link-inline">vinyl banner</a> for event day, or add <a href="/custom-apparel/printing-options/embroidery" class="link-inline">embroidery</a> to the same order for a layered look."

### 5. Service area line

Pulled from `config('client.service_areas_description')`. Compact, `text-sm text-charcoal-light`. Phone from `config('client.phone')`.

> "Serving Joliet, Shorewood, Plainfield, Romeoville, Bolingbrook, Lockport, Channahon, Crest Hill, Naperville, Aurora, and the greater Chicagoland area. Call us at (815) 349-8600."

### 6. CTA button — lower-right

Desktop: `flex justify-end mt-6` — Mobile: `w-full mt-6`

Button component: `x-ui.button-gold-gradient`

- `ctaHref` set: renders as `<a href="{{ $ctaHref }}">`.
- `ctaHref` empty: renders as `<button>` dispatching `open-contact-modal`.

---

## Full Usage Examples

### DTF Transfers

```blade
<x-sections.page-intro
    displayServiceType="DTF Transfers"
    productIntro='Direct-to-film printing lets us put full-color photographic prints on any fabric with no cracking, no peeling, and no minimums. We print every transfer in-house on our own equipment so quality is consistent whether you order one shirt or five hundred, and our <a href="/design-services" class="link-inline">design team</a> can build or refine your artwork before production starts.'
    crossSell='Combine your DTF shirts with a matching <a href="/signs/business-signs/banners" class="link-inline">vinyl banner</a> for event day, or add <a href="/custom-apparel/printing-options/embroidery" class="link-inline">embroidery</a> to the same order for a layered look.'
    ctaText="Shop DTF Transfers"
    ctaHref="#all-products"
    trustNote="Same day DTF service is available on most orders."
/>
```

### Yard Signs

```blade
<x-sections.page-intro
    displayServiceType="Yard Signs"
    productIntro='We print corrugated plastic yard signs in full color on our in-house UV printer, with optional metal H-stakes and bulk pricing that rewards larger orders. Single and double sided printing are both available, and most yard sign orders are ready the same day or next day.'
    crossSell='Coordinate your yard signs with a <a href="/signs/business-signs/banners" class="link-inline">vinyl banner</a> for a complete street presence, or add <a href="/vehicle-graphics/automobile-graphics" class="link-inline">vehicle lettering</a> to make every job site a brand moment.'
    ctaText="Get a Free Quote"
/>
```

### Category Landing Page (Custom Apparel LP)

```blade
<x-sections.page-intro
    displayServiceType="Custom Apparel"
    productIntro='We print, press, and embroider custom apparel in-house using DTF transfers, screen printing, embroidery, heat press vinyl, and specialty finishes. No minimums on any method, same day service available, and our design team handles your artwork from sketch to finished file.'
    crossSell='Round out your order with <a href="/signs" class="link-inline">custom signs</a> or <a href="/promotional-items" class="link-inline">promotional items</a> — we handle both right here in the same shop.'
    ctaText="Browse Custom Apparel"
    ctaHref="/custom-apparel"
/>
```

---

## Responsive Behavior

| Breakpoint | Layout |
|---|---|
| Mobile (below `md`) | Single column, full-width. CTA button is `w-full`. |
| Tablet (`md`) | Full-width prose, CTA right-aligned. |
| Desktop (`lg+`) | Full-width prose inside `max-w-7xl`. CTA lower-right. Left accent is `border-l-4 border-sunburst`. |

---

## Visual Styling Notes

- Background: `bg-linen-light`
- Left accent: `border-l-4 border-sunburst pl-6` on the inner content wrapper
- Heading: `text-h2 font-bold text-charcoal` with sunburst underbar (full-width of heading text per branding rules)
- Body text: `text-body text-charcoal leading-relaxed`
- Inline links: `link-inline` throughout
- Service area line: `text-sm text-charcoal-light mt-4`
- CTA: `x-ui.button-gold-gradient`, right-aligned on `md+`, full-width on mobile

---

## File Location

```
resources/views/components/sections/page-intro.blade.php
```

Register in `docs/branding-requirements.md` component table as:

| Component | Usage | File Path |
|---|---|---|
| `x-sections.page-intro` | Page-level trust intro with product detail and cross-sell links | `resources/views/components/sections/page-intro.blade.php` |

---

## Full Migration Map — All Pages

Every page currently calling `x-sections.top5pct-same-day-service` swaps to `x-sections.page-intro`. Required props per page: `displayServiceType` and `productIntro`. All others have defaults.

### Category Landing Pages (LPs) — 7 pages

These are the top-level entry pages for each product family. `ctaHref` links into the category rather than `#all-products`.

| Page file | `displayServiceType` | `ctaHref` |
|---|---|---|
| `custom-apparel/index.blade.php` | Custom Apparel | `/custom-apparel` |
| `signs/index.blade.php` | Custom Signs | `/signs` |
| `vehicle-graphics/index.blade.php` | Vehicle Graphics | `/vehicle-graphics` |
| `stickers/index.blade.php` | Custom Stickers | `/stickers` |
| `promotional-items.blade.php` | Promotional Items | `/promotional-items` |
| `design-services/index.blade.php` | Design Services | `` (dispatches modal) |
| `company/index.blade.php` | About Top 5 Percent | `/about` |

Note: The promotional items LP lives at `resources/views/pages/promotional-items.blade.php` — not inside a subdirectory.

---

### Custom Apparel — Printing Options (5 pages)

| Page file | `displayServiceType` | `ctaHref` |
|---|---|---|
| `printing-options/dtf-printing.blade.php` | DTF Transfers | `#all-products` |
| `printing-options/screen-printing.blade.php` | Screen Printing | `#all-products` |
| `printing-options/embroidery.blade.php` | Embroidery | `#all-products` |
| `printing-options/rhinestone-apparel.blade.php` | Rhinestone Shirts | `#all-products` |
| `printing-options/digital-vinyl.blade.php` | Digital Vinyl Shirts | `#all-products` |

### Custom Apparel — Specialty Materials and Sub-pages (12 pages)

| Page file | `displayServiceType` | `ctaHref` |
|---|---|---|
| `specialty-materials/vinyl.blade.php` | Vinyl Shirts | `#all-products` |
| `vinyl-shirts.blade.php` | Vinyl Shirts | `#all-products` |
| `holographic-shirts.blade.php` | Holographic Shirts | `#all-products` |
| `dye-sublimation.blade.php` | Dye Sublimation | `#all-products` |
| `puff-shirts.blade.php` | Puff Print Shirts | `#all-products` |
| `brick-shirts.blade.php` | Brick Shirts | `#all-products` |
| `dtf-transfers.blade.php` | DTF Transfers | `#all-products` |
| `flock-shirts.blade.php` | Flock Shirts | `#all-products` |
| `foil-shirts.blade.php` | Foil Shirts | `#all-products` |
| `glitter-shirts.blade.php` | Glitter Shirts | `#all-products` |
| `reflective-shirts.blade.php` | Reflective Shirts | `#all-products` |
| `glow-in-the-dark-shirts.blade.php` | Glow In The Dark Shirts | `#all-products` |

### Custom Apparel — Group Wear (3 pages)

| Page file | `displayServiceType` | `ctaHref` |
|---|---|---|
| `group-wear/corporate-wear-shirts.blade.php` | Corporate Wear | `#all-products` |
| `group-wear/reunion-shirts.blade.php` | Reunion Shirts | `#all-products` |
| `group-wear/spirit-wear-shirts.blade.php` | Spirit Wear | `#all-products` |

### Signs — Sub-pages (13 pages)

| Page file | `displayServiceType` | `ctaHref` |
|---|---|---|
| `signs/business-signs.blade.php` | Business Signs | `#all-products` |
| `signs/banners.blade.php` | Custom Banners | `#all-products` |
| `signs/yard-signs.blade.php` | Yard Signs | `#all-products` |
| `signs/door-signs.blade.php` | Door Signs | `#all-products` |
| `signs/wall-signs.blade.php` | Wall Signs | `#all-products` |
| `signs/window-signs.blade.php` | Window Signs | `#all-products` |
| `signs/floor-signs.blade.php` | Floor Signs | `#all-products` |
| `signs/sidewalk-signs.blade.php` | Sidewalk Signs | `#all-products` |
| `signs/sidewalk-signs-a-frame-signs.blade.php` | A-Frame Signs | `#all-products` |
| `signs/posters.blade.php` | Custom Posters | `#all-products` |
| `signs/table-cloths.blade.php` | Custom Table Cloths | `#all-products` |
| `signs/table-runners.blade.php` | Table Runners | `#all-products` |
| `signs/coronavirus-signs.blade.php` | Safety Signs | `#all-products` |

### Vehicle Graphics — Sub-pages (3 pages)

| Page file | `displayServiceType` | `ctaHref` |
|---|---|---|
| `vehicle-graphics/automobile-graphics.blade.php` | Automobile Graphics | `#all-products` |
| `vehicle-graphics/vehicle-magnets.blade.php` | Vehicle Magnets | `#all-products` |
| `vehicle-graphics/dot-decals.blade.php` | DOT Decals | `#all-products` |

### Stickers (3 pages)

| Page file | `displayServiceType` | `ctaHref` |
|---|---|---|
| `stickers/custom-shaped-stickers.blade.php` | Custom Shaped Stickers | `#all-products` |
| `stickers/standard-stickers.blade.php` | Custom Stickers | `#all-products` |

### Promotional Items — Sub-pages (6 pages)

| Page file | `displayServiceType` | `ctaHref` |
|---|---|---|
| `promotional-items/can-koozies.blade.php` | Custom Can Koozies | `#all-products` |
| `promotional-items/drink-coasters.blade.php` | Custom Drink Coasters | `#all-products` |
| `promotional-items/mouse-pads.blade.php` | Custom Mouse Pads | `#all-products` |
| `promotional-items/mugs.blade.php` | Custom Mugs | `#all-products` |
| `promotional-items/tote-bags.blade.php` | Custom Tote Bags | `#all-products` |
| `promotional-items/towels.blade.php` | Custom Towels | `#all-products` |

### Design Services — Sub-pages (2 pages)

| Page file | `displayServiceType` | `ctaHref` |
|---|---|---|
| `design-services/graphic-design.blade.php` | Graphic Design | `` (dispatches modal) |
| `design-services/logo-design.blade.php` | Logo Design | `` (dispatches modal) |

**Total: 54 pages** across 7 LPs and 47 sub-pages.

---

## Build Order

1. Populate `config/client.php` — fill `service_areas`, `priority_service_areas`, `service_areas_description`, `service_area_slugs`.
2. Build `x-sections.page-intro` blade component.
3. Write `productIntro` and `crossSell` copy for all 54 pages (or confirm who authors it).
4. Swap all 54 page files from `top5pct-same-day-service` to `page-intro`.
5. (Separate task) Migrate the 21 hardcoded-city components to read from config.

---

## Questions to Confirm Before Build

1. **Background color:** `bg-linen-light` preferred, or `bg-white`?
2. **Left accent border:** Sunburst `border-l-4` on the content block, or a different visual device?
3. **Heading copy pattern:** "Trusted {Service} in Joliet, IL" — or a different formula?
4. **Review count:** Hardcoded "200+" in the component, or pulled from a new `config('client.review_count')` key?
5. **CTA default label:** "Get a Free Quote" sitewide, or something else?
6. **`productIntro` copy:** Will you write the per-page copy, or should placeholder prose be drafted for all 54 pages during build?
7. **Config step first:** Ready to populate `config/client.php` service area keys as step one?
