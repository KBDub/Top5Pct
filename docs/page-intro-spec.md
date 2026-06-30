# x-sections.page-intro — Component Specification

## Purpose

`x-sections.page-intro` replaces `x-sections.top5pct-same-day-service` on all 58 product and service pages.

The old component was a two-column bullet-list card. The new component is a warm, paragraph-style intro section that leads with trust and social proof, layers in page-specific product detail, weaves in cross-sell links, and closes with a CTA button anchored to the lower-right. The goal is to feel like an inviting, confident conversation — not a feature checklist.

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
│  Service area line   (city list, compact)                            │
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
    // Shows in the trust paragraph: "Backed by {reviewCount} five-star Google reviews"

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

### 2. Trust paragraph (sitewide, static defaults)

Covers five-star Google reviews, veteran ownership, since 2017, no minimums, in-house production. This paragraph is the same across all pages — it is the trust foundation. Any page-specific same-day or rush note goes in `trustNote`.

```
We carry a five-star rating on Google, backed by {reviewCount} reviews from businesses and
residents across Chicagoland. Top 5 Percent is veteran owned, has operated out of Joliet
since 2017, and produces every order in-house from start to finish — no outsourcing, no
middlemen, and no surprises on price. {trustNote}
```

Links in this paragraph:
- "five-star rating on Google" → `/reviews` (`link-inline`)
- "veteran owned" → `/about` (`link-inline`)

### 3. Product paragraph

Injected via `productIntro` prop. Written per page. Should answer:
- What exactly is this service?
- What materials, techniques, or finishes make it worth choosing?
- Who orders it most (businesses, groups, individuals)?

Example for DTF Transfers:
> "Direct-to-film printing lets us put full-color photographic prints on any fabric with no cracking, no peeling, and no minimums. We print DTF transfers in-house on our own equipment so you get consistent quality on one shirt or a thousand, and our design team can build or refine your artwork before production starts."

### 4. Cross-sell paragraph

Injected via `crossSell` prop. 1–2 sentences. Links to 2–3 logically related services using `link-inline`. Skipped entirely if the prop is empty.

Example for DTF Transfers:
> "Pair your DTF shirts with matching <a href="/signs/business-signs/banners" class="link-inline">vinyl banners</a> for your next event, or add <a href="/custom-apparel/printing-options/embroidery" class="link-inline">embroidery</a> to the same order for a mixed-technique look."

### 5. Service area line

Static one-liner, compact, `text-sm text-charcoal-light`:

> "Serving Joliet, Shorewood, Plainfield, Romeoville, Bolingbrook, Lockport, Channahon, Crest Hill, Naperville, Aurora, and the greater Chicagoland area. Call us at (815) 349-8600."

Phone number uses `link-notification` class.

### 6. CTA button — lower-right

Desktop: `flex justify-end mt-6`
Mobile: `w-full mt-6`

Button component: `x-ui.button-gold-gradient`

- If `ctaHref` is set: renders as `<a href="{{ $ctaHref }}">`.
- If `ctaHref` is empty: renders as `<button>` and dispatches `open-contact-modal`.

---

## Full Usage Example — DTF Transfers Page

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

---

## Full Usage Example — Yard Signs Page

```blade
<x-sections.page-intro
    displayServiceType="Yard Signs"
    productIntro='We print corrugated plastic yard signs in full color on our in-house UV printer, with optional metal H-stakes and bulk pricing that rewards larger orders. Single and double sided printing are both available, and rush turnaround is standard — most yard sign orders are ready the same day or next day.'
    crossSell='Coordinate your yard signs with a <a href="/signs/business-signs/banners" class="link-inline">vinyl banner</a> for a complete street presence, or add <a href="/vehicle-graphics/automobile-graphics" class="link-inline">vehicle lettering</a> to make every job site a brand moment.'
    ctaText="Get a Free Quote"
/>
```

---

## Responsive Behavior

| Breakpoint | Layout |
|---|---|
| Mobile (`< md`) | Single column, full-width. CTA button is `w-full`. |
| Tablet (`md`) | Full-width prose, CTA right-aligned. |
| Desktop (`lg+`) | Full-width prose inside `max-w-7xl`. CTA lower-right. Left accent border is 4px sunburst. |

---

## Visual Styling Notes

- Background: `bg-linen-light` (warm, not harsh white)
- Left accent: `border-l-4 border-sunburst pl-6` on the inner content wrapper (gives the sunburst left-rail feel without a card)
- Heading: `text-h2 font-bold text-charcoal` with sunburst underbar (full-width of heading text)
- Body text: `text-body text-charcoal` (default body size), `leading-relaxed`
- Inline links: `link-inline` class throughout
- Service area line: `text-sm text-charcoal-light mt-4`
- CTA: `x-ui.button-gold-gradient`, right-aligned on `md+`, full-width on mobile

---

## File Location

```
resources/views/components/sections/page-intro.blade.php
```

Registered in branding-requirements.md component table as:

| Component | Usage | File Path |
|---|---|---|
| `x-sections.page-intro` | Page-level trust intro with product detail and cross-sell links | `resources/views/components/sections/page-intro.blade.php` |

---

## Migration Map — All 58 Pages

Every page currently calling `x-sections.top5pct-same-day-service` needs to be updated to `x-sections.page-intro`. The two required props on every page are `displayServiceType` and `productIntro`. All other props have sensible defaults.

### Custom Apparel — Printing Options (5 pages)

| Page | `displayServiceType` | `ctaHref` |
|---|---|---|
| `printing-options/dtf-printing` | DTF Transfers | `#all-products` |
| `printing-options/screen-printing` | Screen Printing | `#all-products` |
| `printing-options/embroidery` | Embroidery | `#all-products` |
| `printing-options/rhinestone-apparel` | Rhinestone Shirts | `#all-products` |
| `printing-options/digital-vinyl` | Digital Vinyl Shirts | `#all-products` |

### Custom Apparel — Specialty Materials (11 pages)

| Page | `displayServiceType` | `ctaHref` |
|---|---|---|
| `specialty-materials/vinyl` | Vinyl Shirts | `#all-products` |
| `vinyl-shirts` | Vinyl Shirts | `#all-products` |
| `holographic-shirts` | Holographic Shirts | `#all-products` |
| `dye-sublimation` | Dye Sublimation | `#all-products` |
| `puff-shirts` | Puff Print Shirts | `#all-products` |
| `brick-shirts` | Brick Shirts | `#all-products` |
| `dtf-transfers` | DTF Transfers | `#all-products` |
| `flock-shirts` | Flock Shirts | `#all-products` |
| `foil-shirts` | Foil Shirts | `#all-products` |
| `glitter-shirts` | Glitter Shirts | `#all-products` |
| `reflective-shirts` | Reflective Shirts | `#all-products` |
| `glow-in-the-dark-shirts` | Glow In The Dark Shirts | `#all-products` |

### Custom Apparel — Group Wear (3 pages)

| Page | `displayServiceType` | `ctaHref` |
|---|---|---|
| `group-wear/corporate-wear-shirts` | Corporate Wear | `#all-products` |
| `group-wear/reunion-shirts` | Reunion Shirts | `#all-products` |
| `group-wear/spirit-wear-shirts` | Spirit Wear | `#all-products` |

### Custom Apparel — Index (1 page)

| Page | `displayServiceType` | `ctaHref` |
|---|---|---|
| `custom-apparel/index` | Custom Apparel | `/custom-apparel` |

### Signs (12 pages)

| Page | `displayServiceType` | `ctaHref` |
|---|---|---|
| `signs/index` | Custom Signs | `/signs` |
| `signs/business-signs` | Business Signs | `#all-products` |
| `signs/banners` | Custom Banners | `#all-products` |
| `signs/yard-signs` | Yard Signs | `#all-products` |
| `signs/door-signs` | Door Signs | `#all-products` |
| `signs/wall-signs` | Wall Signs | `#all-products` |
| `signs/window-signs` | Window Signs | `#all-products` |
| `signs/floor-signs` | Floor Signs | `#all-products` |
| `signs/sidewalk-signs` | Sidewalk Signs | `#all-products` |
| `signs/sidewalk-signs-a-frame-signs` | A-Frame Signs | `#all-products` |
| `signs/posters` | Custom Posters | `#all-products` |
| `signs/table-cloths` | Custom Table Cloths | `#all-products` |
| `signs/table-runners` | Table Runners | `#all-products` |
| `signs/coronavirus-signs` | Safety Signs | `#all-products` |

### Vehicle Graphics (4 pages)

| Page | `displayServiceType` | `ctaHref` |
|---|---|---|
| `vehicle-graphics/index` | Vehicle Graphics | `/vehicle-graphics` |
| `vehicle-graphics/automobile-graphics` | Automobile Graphics | `#all-products` |
| `vehicle-graphics/vehicle-magnets` | Vehicle Magnets | `#all-products` |
| `vehicle-graphics/dot-decals` | DOT Decals | `#all-products` |

### Design Services (2 pages)

| Page | `displayServiceType` | `ctaHref` |
|---|---|---|
| `design-services/graphic-design` | Graphic Design | `` (dispatches modal) |
| `design-services/logo-design` | Logo Design | `` (dispatches modal) |

---

## Questions to Confirm Before Build

1. **Background color:** `bg-linen-light` preferred, or `bg-white`?
2. **Left accent border:** Sunburst `border-l-4` on the content block, or a different visual device?
3. **Heading copy pattern:** "Trusted {Service} in Joliet, IL" — or a different formula?
4. **Trust paragraph:** Should the Google review count be hardcoded as "200+" or pulled from a config/env value?
5. **CTA label default:** "Get a Free Quote" as the sitewide default, or something else?
6. **`productIntro` content:** Will you write the per-page copy, or should placeholder copy be drafted for all 58 pages during build?
