# x-sections.top5pct-same-day-service — Revised Component Specification

## Direction Change (recorded here for context)

An earlier draft of this spec planned to replace `x-sections.top5pct-same-day-service` with a new `x-sections.page-intro` component using a single-column paragraph layout. That direction was reversed. The two-card left/right layout of `top5pct-same-day-service` is preferred. The plan is now to **repurpose the existing component in-place**: keep its name, keep its two-card structure, and replace the zigzag bullet lists with paragraph-form prose that is link-heavy, cross-sell-rich, and driven by `App\Data\` rather than hardcoded values.

No new component file is created. All 54 page files that call `x-sections.top5pct-same-day-service` stay on that call.

---

## Data Authority — Read This First

**`App\Data\PrimaryLocations` is the one and only source of truth for city and service area data.**
**`App\Data\BusinessIdentity` is for business identity: name, phone, address, logo, year.**
**No config wrapper is needed. Use `App\Data\` files directly — that is the established pattern.**

Three blade components already do this today (`map-section`, `service-areas`, `sitemap`).
See `docs/client-service-areas-config-spec.md` for the full architecture decision.

The data chain is:

```
App\Data\PrimaryLocations   ← city data AND prose string methods (serviceAreaLine, etc.)
App\Data\BusinessIdentity   ← phone, address, year, review count
        ↓
@php use App\Data\PrimaryLocations; use App\Data\BusinessIdentity; @endphp
        ↓
x-sections.top5pct-same-day-service  ← reads App\Data\ directly. No config(). No hardcoded values.
```

The component reads at the top of its blade file:

```blade
@php
    use App\Data\PrimaryLocations;
    use App\Data\BusinessIdentity;

    $serviceAreaLine = PrimaryLocations::serviceAreaLine();
    $phone           = BusinessIdentity::PHONE;
    $phoneRaw        = BusinessIdentity::PHONE_RAW;
    $year            = BusinessIdentity::YEAR_INCORPORATED;
@endphp
```

No city names, phone numbers, or addresses are hardcoded in the component.

---

## What Changes vs. the Current Component

| Element | Current | New |
|---|---|---|
| Left card content | Zigzag bullet list of 9 brand differentiator one-liners | 2 paragraphs: trust/reliability, then cross-sell links to core service categories |
| Right card content | Zigzag bullet list of 5 service one-liners + static city paragraph | `productIntro` paragraph (page-specific) + `crossSell` paragraph + dynamic service area line + CTA |
| Left card subheadline | "In-house manufacturing, experienced and professional." | Removed — the paragraph leads directly |
| Right card subheadline | "Overview of Services:" | Removed — `productIntro` leads directly |
| City list | Hardcoded in component | `PrimaryLocations::serviceAreaLine()` |
| Phone number | Hardcoded `(815) 349-8600` | `BusinessIdentity::PHONE` / `BusinessIdentity::PHONE_RAW` |
| Props | `serviceType`, `displayServiceType` | `displayServiceType`, `productIntro`, `crossSell`, `ctaText`, `ctaHref`, `trustNote`, `reviewCount` |
| `serviceType` prop | Used (slug-style) | Removed — was unused in the template |

---

## Layout (Preserved from Current Component)

Two-column card grid, stacks to single column on mobile.

```
┌─────────────────────────────┐  ┌─────────────────────────────┐
│  border-t-4 border-sunburst │  │  border-t-4 border-azure    │
│  bg-white  shadow-md        │  │  bg-linen-light  shadow-md  │
│                             │  │                             │
│  H2: "The Top 5 Percent     │  │  H2: "{displayServiceType}  │
│       Difference"           │  │       — Same Day"           │
│                             │  │                             │
│  Trust paragraph            │  │  productIntro paragraph     │
│  (5-star · veteran · in-    │  │  (page-specific transac-    │
│   house · since 2017 ·      │  │   tional SEO copy)          │
│   fair pricing)             │  │                             │
│                             │  │  crossSell paragraph        │
│  Cross-sell paragraph       │  │  (2–3 related service links)│
│  (links to all core         │  │                             │
│   service categories)       │  │  Service area line          │
│                             │  │  (from App\Data\)           │
│                             │  │                             │
│                             │  │  [ CTA Button ]             │
└─────────────────────────────┘  └─────────────────────────────┘
```

Mobile: cards stack full-width, CTA button goes full-width.

---

## Props Specification

```blade
@props([
    // --- Required ---
    'displayServiceType'  => 'Custom Signage & Apparel',
    // Human-readable service name for the right card H2 and inline copy.
    // e.g. "DTF Transfers", "Custom Banners", "Vinyl Shirts"

    // --- Right card: product paragraph (required in practice) ---
    'productIntro'        => '',
    // 2–4 sentences. Page-specific transactional SEO copy.
    // Voice from DeepSEOLocalizedContentForTop5Pct.pdf:
    //   in-house, no minimums, fast turnaround, veteran precision.
    // Accepts HTML — use <a class="link-inline"> for inline links.

    // --- Right card: cross-sell paragraph (optional) ---
    'crossSell'           => '',
    // 1–2 sentences linking 2–3 related services via link-inline.
    // Omitted entirely when empty.

    // --- Right card: CTA button ---
    'ctaText'             => 'Get a Free Quote',
    'ctaHref'             => '',
    // Empty ctaHref dispatches open-contact-modal event.
    // Common: "#all-products", "/contact", "tel:+18153498600"

    // --- Left card: trust overrides (rarely needed) ---
    'reviewCount'         => '200+',
    // Injected into trust paragraph: "backed by {reviewCount} five-star Google reviews"

    'trustNote'           => '',
    // One sentence appended to the left card trust paragraph.
    // Use for page-specific same-day or rush notes.
])
```

---

## Section Anatomy (Detail)

### Left Card — "The Top 5 Percent Difference"

**Heading:** Fixed. Always "The <span class="text-sunburst">Top 5 Percent</span> Difference."

**Trust paragraph:** Same across all 54 pages. 7th grade reading level, no all-caps.

Prose template:

> We carry a <a href="/reviews" class="link-inline">five-star rating on Google</a>, backed by {reviewCount} reviews from businesses and residents across the Chicagoland area. Top 5 Percent is <a href="/about" class="link-inline">veteran-owned and Black-owned</a>, and has operated out of Joliet since {year}. We produce every order in-house from start to finish — no outsourcing, no middlemen, and no surprises on price. {trustNote}

**Cross-sell paragraph:** Fixed cross-sell of core service categories, link-heavy. Written once, shared across all pages.

Prose template:

> We handle <a href="/custom-apparel" class="link-inline">custom apparel</a> — <a href="/custom-apparel/printing-options/dtf-printing" class="link-inline">DTF transfers</a>, <a href="/custom-apparel/printing-options/screen-printing" class="link-inline">screen printing</a>, <a href="/custom-apparel/printing-options/embroidery" class="link-inline">embroidery</a>, <a href="/custom-apparel/specialty-materials/vinyl" class="link-inline">vinyl</a>, <a href="/custom-apparel/specialty-materials/glitter-shirts" class="link-inline">glitter</a>, <a href="/custom-apparel/specialty-materials/foil-shirts" class="link-inline">foil</a>, <a href="/custom-apparel/specialty-materials/rhinestone-apparel" class="link-inline">rhinestone</a>, and more — alongside <a href="/signs" class="link-inline">custom signs</a>, <a href="/vehicle-graphics" class="link-inline">vehicle graphics</a>, <a href="/stickers" class="link-inline">custom stickers</a>, <a href="/promotional-items" class="link-inline">promotional items</a>, and <a href="/design-services" class="link-inline">in-house design services</a>, all from a single shop at 121 Springfield Avenue in Joliet.

This paragraph is static in the component — it does not need a prop.

---

### Right Card — "[DisplayServiceType] — Same Day"

**Heading:** `"<span class="text-sunburst">{{ $displayServiceType }}</span> — Same Day"`

**Product paragraph:** Injected via `productIntro`. Page-specific copy following the PDF transactional voice formula:
- Sentence 1: Name the technique and its core advantage
- Sentence 2: Anchor to in-house production and quality control
- Sentence 3: Name the customer type and use case
- Sentence 4 (optional): No minimums, same day, rush available

**Cross-sell paragraph:** Injected via `crossSell`. Natural language, 1–2 sentences, linking 2–3 related services. Creates a reason to combine services in the same order.

**Service area line:** Dynamic from `App\Data\`. Format:

```blade
<p class="text-sm text-charcoal-light mt-4">
    Serving {{ $serviceAreaLine }}.
    Call us at <a href="tel:{{ $phoneRaw }}" class="link-notification">{{ $phone }}</a>.
</p>
```

**CTA button:** `x-ui.button-gold-gradient`, same behavior as the current component.

```blade
@if($ctaHref)
    <x-ui.button-gold-gradient href="{{ $ctaHref }}">{{ $ctaText }}</x-ui.button-gold-gradient>
@else
    <x-ui.button-gold-gradient onclick="window.dispatchEvent(new CustomEvent('open-contact-modal'))">
        {{ $ctaText }}
    </x-ui.button-gold-gradient>
@endif
```

---

## Full Usage Example — Glitter Shirts

```blade
<x-sections.top5pct-same-day-service
    displayServiceType="Glitter Shirts"
    productIntro='Glitter heat transfer vinyl applies a sparkle finish to shirts and hoodies that catches light and turns heads at any event. We cut and press every glitter design in-house in Joliet on our own equipment, so the quality and placement are consistent from the first shirt to the last. Glitter shirts are popular for <a href="/custom-apparel/group-wear/reunion-shirts" class="link-inline">reunion groups</a>, <a href="/custom-apparel/group-wear/spirit-wear-shirts" class="link-inline">spirit wear squads</a>, bachelorette parties, birthday parties, and anyone who wants a shirt that makes an impression before they say a word. No minimums, same day available on most glitter orders.'
    crossSell='Pair glitter with <a href="/custom-apparel/specialty-materials/foil-shirts" class="link-inline">foil shirts</a> or <a href="/custom-apparel/printing-options/rhinestone-apparel" class="link-inline">rhinestone apparel</a> in the same group order for a layered sparkle lineup, or combine your glitter shirts with a matching <a href="/signs/business-signs/banners" class="link-inline">custom banner</a> for a complete event package.'
    ctaText="Get a Glitter Shirt Quote"
    trustNote="Same day glitter shirt production is available on most orders — call us and we will confirm your turnaround before you come in."
/>
```

---

## Full Usage Example — DTF Transfers

```blade
<x-sections.top5pct-same-day-service
    displayServiceType="DTF Transfers"
    productIntro='Direct-to-film printing puts full-color, photographic-quality prints on any fabric with no cracking, no peeling, and no minimum order. We print every transfer in-house on our own DTF equipment in Joliet, so quality is consistent whether you order one shirt or five hundred. Businesses use DTF for branded apparel, teams use it for spirit wear with photo-quality logos, and families use it for personalized gifts and reunion gear. Rush orders are welcome and same day service is available on most DTF jobs.'
    crossSell='Combine your DTF shirts with a matching <a href="/signs/business-signs/banners" class="link-inline">vinyl banner</a> for a complete event package, or add <a href="/custom-apparel/printing-options/embroidery" class="link-inline">embroidery</a> to the same order for a layered, professional finish.'
    ctaText="Shop DTF Transfers"
    ctaHref="#all-products"
    trustNote="Same day DTF service is available on most orders — call us and we will confirm your turnaround before you come in."
/>
```

---

## Full Usage Example — Custom Banners

```blade
<x-sections.top5pct-same-day-service
    displayServiceType="Custom Banners"
    productIntro='We print custom vinyl banners, fabric banners, and retractable banners in full color on our in-house wide-format printer, with no setup fees and no minimum order. Every banner is produced at 121 Springfield Avenue in Joliet, so we control quality from file to finished product. Businesses use our banners for grand openings, storefronts, and trade show displays, and families order them for graduation parties, birthdays, and reunions. Same day banner printing is available on standard sizes.'
    crossSell='Coordinate your banner with <a href="/signs/ground-signs/yard-signs" class="link-inline">yard signs</a> for outdoor coverage, or add <a href="/custom-apparel/printing-options/dtf-printing" class="link-inline">DTF transfer shirts</a> to the same order for a complete branded event look.'
    ctaText="Shop Custom Banners"
    ctaHref="#all-products"
/>
```

---

## Drafted productIntro Copy — All 54 Pages

These are ready-to-use drafts written to the PDF transactional SEO voice. Mark each as approved or revised before build.

### Category Landing Pages

**Custom Apparel:**
> We print, press, and embroider custom apparel in-house using DTF transfers, screen printing, embroidery, heat press vinyl, dye sublimation, and specialty finishes including rhinestone, foil, glitter, and more. No minimums on any decoration method, same day service available on most orders, and our in-house design team handles your artwork from concept to production-ready file. Businesses order branded uniforms and corporate wear, teams order spirit wear and group shirts, and individuals order personalized gifts and custom pieces — all produced right here in Joliet.

**Custom Signs:**
> We design and print custom signs in-house in Joliet, covering everything from yard signs and banners to wall graphics, window decals, floor signs, sidewalk signs, and specialty signage for any business or event. Every sign is produced on our own equipment with no outsourcing, so quality and turnaround stay fully in our control. Businesses across Will and DuPage County order signage for storefronts, events, trade shows, and job sites, and same day printing is available on most standard sign products.

**Vehicle Graphics:**
> We design and install custom vehicle graphics in-house, from full wraps and partial wraps to vinyl lettering, car magnets, DOT decals, and fleet graphics for businesses throughout the Chicagoland area. Every graphic is produced and installed at our Joliet location, so we control quality from design file to finished vehicle. Contractors, fleet operators, and local businesses use our vehicle graphics to turn every truck and van into a professional mobile billboard. Rush installation is available on most vehicle graphics jobs.

**Custom Stickers:**
> We print custom stickers and decals in-house at our Joliet shop, covering standard stickers, custom-shaped stickers, die-cut decals, and specialty finishes for businesses, events, and personal use. No minimum order, fast turnaround, and full-color printing on durable vinyl stock that holds up outdoors and in the elements. Businesses order logo stickers for packaging and branding, event organizers order custom decals for giveaways and merchandise, and individuals order personalized stickers for gifts and keepsakes.

**Promotional Items:**
> We produce custom promotional items in-house, including mugs, tote bags, mouse pads, can koozies, towels, drink coasters, and more — all printed or pressed with your logo, artwork, or custom design. No minimum orders, fast turnaround, and full control over print quality since everything is produced at our Joliet location. Businesses use promotional items for corporate giveaways, trade show swag, and customer appreciation gifts, and organizations order branded merchandise for fundraisers and events.

**Design Services:**
> Our in-house design team handles custom logo design, graphic design, and artwork preparation for any printing or signage project — whether you have a rough sketch, a concept in your head, or need us to build something from scratch. We have produced artwork for businesses, nonprofits, sports teams, and events throughout Chicagoland since 2017, and our design work is built for production from day one. Logo design, layout work, and print-ready file prep are all available as standalone services or as part of a larger order.

---

### Custom Apparel — Printing Options

**DTF Transfers** — see example above.

**Screen Printing:**
> Screen printing delivers bold, durable, ink-on-fabric prints with vibrant color that bonds into the weave for a professional finish that holds up through hundreds of washes. We screen print in-house in Joliet on our own equipment, with consistent color matching across the full run. Businesses, sports leagues, and schools order screen printed shirts for high-volume runs where cost-per-shirt drops significantly with quantity. Minimum order quantities apply — call us to get a quote based on your design and quantity.

**Embroidery:**
> Embroidery stitches your logo or artwork directly into the fabric of shirts, polos, hats, jackets, and bags for a premium, textured finish that communicates professionalism on every piece. We embroider in-house in Joliet using commercial-grade machines, and we digitize your artwork ourselves so the stitch count and quality are optimized before production begins. Businesses order embroidered polos and jackets for employee uniforms and corporate wear, and organizations order embroidered caps and bags for branded merchandise and gifts. No minimums.

**Rhinestone Shirts:**
> Rhinestone apparel uses heat-set crystals applied in precise patterns to create a sparkling, premium finish that catches light and turns heads — popular for events, teams, boutique fashion, and anyone who wants a piece that truly stands out. We apply rhinestones in-house in Joliet, building each design with precision and pressing every stone at the right temperature and pressure for a hold that lasts through washing. No minimum order, and our design team can help you lay out your pattern before we start.

**Digital Vinyl:**
> Digital vinyl printing applies full-color, photographic-quality graphics to heat transfer film that is then pressed onto your garment for a smooth, vibrant finish. We cut and press digital vinyl in-house in Joliet with no minimums, making it a great option for photo-realistic logos, multi-color designs, and small-run custom apparel that needs full-color detail. Businesses, sports teams, and event organizers use digital vinyl for branded apparel that needs precise color and edge definition. Same day digital vinyl shirts are available on most jobs.

---

### Custom Apparel — Specialty Materials

**Vinyl Shirts:**
> Heat press vinyl delivers bold, clean designs with sharp edges and durable color on t-shirts, hoodies, hats, and virtually any garment you can bring in. We cut every design in-house in Joliet on our own vinyl cutters and press each piece individually for accurate placement and solid adhesion — no outsourcing, no guesswork. Vinyl shirts are popular for businesses that need small runs of branded apparel, teams ordering matching shirts for events, and individuals ordering one-off custom pieces. No minimums, same day available on most orders.

**Holographic Shirts:**
> Holographic vinyl creates a mirror-like, color-shifting effect on shirts and apparel that produces a dramatic, premium look at any event or occasion. We cut and press holographic heat transfer vinyl in-house in Joliet with the same precision as standard vinyl, and the effect holds up through washing when pressed at the correct temperature and pressure. Holographic shirts are popular for performance apparel, fashion boutiques, event merchandise, and anyone who wants a piece that makes a strong visual impression. No minimums.

**Dye Sublimation:**
> Dye sublimation printing infuses ink directly into polyester fabric at the molecular level, producing all-over, edge-to-edge color that does not crack, peel, or fade over time. We sublimate in-house in Joliet on our own equipment, and the process works on any polyester or polyester-blend garment including performance shirts, athletic wear, jerseys, and hoodies. Teams, gyms, and sports organizations order sublimated apparel for custom uniforms and practice gear. No minimums on sublimation orders.

**Puff Print Shirts:**
> Puff print uses a heat-activated additive that raises the design off the surface of the garment for a three-dimensional, textured effect that you can feel as well as see. We apply puff prints in-house in Joliet and press each garment individually for consistent lift and clean edges across the full design. Puff print shirts are popular for streetwear, premium branded apparel, and anyone who wants a shirt with a tactile, premium quality. No minimums.

**Brick Shirts:**
> Brick print applies a textured, dimensional pattern to apparel that creates a bold, graphic look with a raised surface feel. We produce brick shirts in-house in Joliet with the same quality controls as all our specialty apparel, pressing each piece individually for consistent texture and clean design edges. Brick shirts are a distinctive choice for streetwear, event apparel, and custom fashion pieces that need a premium look with strong shelf presence. No minimums — call us to discuss your design.

**Flock Shirts:**
> Flock print applies fine fibers to heat transfer material that, when pressed onto a garment, creates a soft, velvet-like texture that looks and feels premium. We cut and apply flock vinyl in-house in Joliet with precision, and the finish holds up well through washing when pressed at the correct specifications. Flock shirts are popular for vintage-style apparel, premium event merchandise, and fashion pieces where the tactile quality of the surface is part of the design intent. No minimums.

**Foil Shirts:**
> Foil heat transfer applies a shiny, metallic finish to shirts and apparel in gold, silver, rose gold, holographic, and other specialty finishes that produce a high-fashion, eye-catching result. We cut and press foil transfers in-house in Joliet with precision alignment and correct temperature control for a finish that bonds cleanly and does not crack or lift at edges. Foil shirts are popular for boutique fashion, event apparel, award ceremonies, and anyone who wants a premium metallic look. No minimums.

**Glitter Shirts** — see full usage example above.

**Reflective Shirts:**
> Reflective heat press vinyl applies a high-visibility material to shirts and apparel that returns light to its source, making the design clearly visible in low light and at night — popular for safety apparel, cycling gear, running wear, and any application where visibility matters. We cut and apply reflective vinyl in-house in Joliet with the same precision as our standard vinyl work. No minimums on reflective shirt orders, same day production available on most jobs.

**Glow In The Dark Shirts:**
> Glow in the dark heat transfer vinyl charges under any light source and emits a visible glow in darkness, making it a popular choice for event apparel, Halloween costumes, safety gear, and anyone who wants a shirt that works in the dark. We cut and press glow in the dark vinyl in-house in Joliet with the same quality controls as our standard vinyl work, and the glow effect holds up through washing when pressed correctly. No minimums.

---

### Custom Apparel — Group Wear

**Corporate Wear:**
> We produce custom corporate apparel in-house in Joliet, including embroidered polos, branded jackets, screen printed staff shirts, and DTF-transferred uniforms for businesses throughout Will and DuPage County. Our in-house production means consistent quality across every piece in a corporate order, whether you need ten polos for a small team or hundreds of uniforms for a large staff rollout. We work directly with business owners and office managers to match brand colors, digitize logos for embroidery, and deliver on time. No minimums on most corporate apparel methods.

**Reunion Shirts:**
> Custom reunion shirts bring groups together with a shared design that everyone is proud to wear — we produce reunion shirts in-house in Joliet using DTF transfers, screen printing, vinyl, and embroidery depending on what the design calls for. Our in-house design team can build your reunion artwork from scratch, and we specialize in personalization across large groups where each shirt needs a different name or year. Family reunions, class reunions, church group reunions, and military unit reunions are all part of our regular order mix. No minimums on most reunion shirt methods.

**Spirit Wear:**
> Spirit wear keeps teams, schools, clubs, and communities looking unified and proud — we produce custom spirit wear in-house in Joliet using DTF transfers, screen printing, embroidery, and vinyl depending on the design and the garment. School teams, youth sports leagues, booster clubs, and neighborhood organizations throughout Will and DuPage County order spirit wear from us regularly, and our no-minimum policy means small groups can order without meeting a quota. Same day spirit wear is available on most jobs.

---

### Signs — Sub-pages

**Business Signs:**
> We design and produce custom business signs in-house in Joliet, covering interior and exterior signage for storefronts, offices, restaurants, retail locations, and professional spaces throughout Will and DuPage County. Every sign is produced on our own equipment with no outsourcing — wall signs, window graphics, door signs, floor decals, and specialty signage are all handled start to finish at 121 Springfield Avenue. Same day business sign production is available on most standard formats.

**Custom Banners** — see full usage example above.

**Yard Signs:**
> We print corrugated plastic yard signs in full color using UV-resistant inks that hold up through Illinois weather without fading or peeling — single sided and double sided printing, optional metal H-stakes, and bulk pricing available on larger orders. Every yard sign is printed in-house in Joliet on our own wide-format equipment for consistent quality and fast turnaround. Real estate agents, political campaigns, contractors, event organizers, and local businesses throughout Will and DuPage County order yard signs from us regularly. Same day yard sign printing is available on standard sizes.

**Door Signs:**
> Custom door signs give your business a professional first impression at every entrance — we produce door signs in-house in Joliet in a range of materials and formats including vinyl decals, printed aluminum, acrylic, and specialty substrates. No minimums, fast turnaround, and full-color printing with precise sizing to fit standard and non-standard door configurations. Offices, restaurants, retail locations, and service businesses throughout Will and DuPage County order door signs for suite identification, hours of operation, and branded entry graphics.

**Wall Signs:**
> Custom wall signs transform interior and exterior walls into branded, professional surfaces — we produce wall signs in-house in Joliet using adhesive vinyl, rigid print substrates, and specialty materials that work on painted drywall, concrete, brick, and glass. Businesses order wall signs for lobby branding, directional signage, office identification, and large-format wall graphics. No minimums, full-color printing, and our design team can help you plan the layout before production begins.

**Window Signs:**
> Window signs and graphics let you use your storefront glass as prime marketing real estate — we produce custom window decals, perforated vinyl, frosted graphics, and cut vinyl lettering in-house in Joliet for retail stores, restaurants, offices, and any business with street-facing windows. Full-color printing, no minimums, and fast turnaround make window signs one of the most cost-effective ways to attract attention from foot traffic. Same day window sign production is available on most standard formats.

**Floor Signs:**
> Custom floor signs and floor decals communicate direction, branding, safety messages, and promotions right at ground level. We print floor graphics in-house in Joliet on durable, non-slip laminated vinyl stock that holds up in high-traffic commercial spaces. Retail stores, warehouses, event venues, and health care facilities order floor signs for wayfinding, branded zone markers, and promotional messaging. No minimums, same day floor sign production available on most jobs.

**Sidewalk Signs:**
> Sidewalk signs and A-frame signs put your message right in front of foot traffic, making them one of the most direct ways to capture attention from pedestrians and passing drivers. We produce custom sidewalk signs and A-frame sign inserts in-house in Joliet with full-color printing on durable substrates that hold up outdoors. Restaurants, retail stores, salons, and service businesses throughout Will and DuPage County use sidewalk signs for daily specials, promotions, and directional messaging. No minimums, same day production available on most formats.

**A-Frame Signs:**
> A-frame signs are one of the simplest and most effective ways to stop foot traffic and draw customers into your location — we produce custom A-frame sign inserts in-house in Joliet with full-color printing and weather-resistant materials for outdoor use. Restaurants, boutiques, service businesses, and event organizers use A-frames for daily specials, menus, directional signs, and promotions. No minimums, fast turnaround, same day production available on most A-frame formats.

**Custom Posters:**
> Custom posters deliver full-color, large-format visual impact for retail displays, event promotion, office interiors, and any application where a bold printed graphic needs to fill wall space. We print custom posters in-house in Joliet on a range of paper and rigid substrates, with no minimums and fast turnaround for both standard and non-standard sizes. Event organizers, retail stores, restaurants, schools, and businesses throughout Will and DuPage County order custom posters for promotional campaigns and interior décor.

**Custom Table Cloths:**
> Custom printed table cloths transform any trade show table, event display, or retail setup into a polished, branded presentation — we produce custom table cloths in-house in Joliet with full-color dye sublimation printing on wrinkle-resistant polyester fabric. Standard 6-foot and 8-foot sizes available, as well as custom dimensions. Businesses, nonprofits, and event organizers throughout Chicagoland order custom table cloths for trade shows, conferences, farmers markets, and branded display setups.

**Table Runners:**
> Custom table runners add a polished branded layer to any event table, display case, or retail setup — we produce custom table runners in-house in Joliet with full-color dye sublimation printing on wrinkle-resistant polyester in standard and custom lengths. Businesses, event planners, and organizations order custom table runners for trade shows, product launches, banquets, and brand activations. Fast turnaround and no minimums.

**Safety Signs:**
> We produce custom safety and compliance signs in-house in Joliet including health and safety signs, social distancing floor graphics, occupancy limit signs, PPE requirement signs, and general workplace safety signage for businesses, schools, and facilities throughout Will and DuPage County. Full-color printing on durable substrates, no minimums, and fast turnaround for urgent compliance needs.

---

### Vehicle Graphics — Sub-pages

**Automobile Graphics:**
> We design and install custom vehicle graphics in-house in Joliet, including partial wraps, full wraps, vinyl lettering, logo graphics, and decorative vehicle graphics for cars, trucks, vans, SUVs, and specialty vehicles. Every graphic is produced and installed at 121 Springfield Avenue for consistent quality — no outsourcing to third-party installers. Businesses use automobile graphics to brand their service vehicles and company cars, and individuals order custom vehicle graphics for personal style and specialty builds.

**Vehicle Magnets:**
> Custom vehicle magnets give businesses a flexible, removable way to brand their personal and work vehicles without permanent adhesive — we produce vehicle magnets in-house in Joliet with full-color printing on heavy-duty magnetic material that holds securely at highway speeds and resists weather. Contractors, real estate agents, delivery drivers, and service businesses throughout Will and DuPage County use vehicle magnets to turn personal vehicles into professional marketing tools. No minimums.

**DOT Decals:**
> We produce DOT-compliant decals and regulatory vehicle stickers in-house in Joliet for commercial trucks, trailers, and fleet vehicles operating throughout Illinois and across state lines. Our DOT decals are printed on durable, weather-resistant vinyl that meets federal marking requirements for motor carriers, and we can produce USDOT number decals, fuel permits, and fleet identification graphics at any quantity with fast turnaround. Same day DOT decal production is available on most standard formats.

---

### Stickers

**Custom Shaped Stickers:**
> Custom shaped stickers are die-cut to follow the exact outline of your design — no white border, no square background — producing a clean, professional sticker that looks designed rather than printed. We produce custom shaped stickers in-house in Joliet on durable, weatherproof vinyl with full-color printing and UV coating for outdoor use. Businesses order custom shaped stickers for product packaging, branding, and promotional giveaways, and individuals order them for personal projects, gifts, and events. No minimums.

**Custom Stickers (Standard):**
> Standard custom stickers deliver full-color, professional-quality prints on square or rectangular cut vinyl — a cost-effective choice for high-volume branding, product labels, event giveaways, and promotional use. We produce standard stickers in-house in Joliet with durable vinyl stock and UV lamination for outdoor durability, and fast turnaround for both small and large runs. Businesses, organizations, and event planners throughout Will and DuPage County order custom stickers for packaging inserts, logo stickers, and brand activation. No minimums.

---

### Promotional Items — Sub-pages

**Custom Can Koozies:**
> Custom can koozies are a popular giveaway for events, fundraisers, bar openings, sports games, and corporate outings — we print custom koozies in-house in Joliet with full-color printing on neoprene foam that keeps drinks cold and your brand visible all day. No minimums, fast turnaround, and durable printing that holds up through repeated use. Businesses, event planners, and organizations throughout Chicagoland order custom koozies for parties, trade shows, and branded merchandise.

**Custom Drink Coasters:**
> Custom printed drink coasters add a branded, professional touch to any bar, restaurant, event table, or corporate hospitality setup — we produce custom coasters in-house in Joliet with full-color printing on neoprene or hardboard substrates with a non-slip base and liquid-resistant surface. Restaurants, bars, corporate event planners, and hospitality businesses order custom coasters for tabletop branding and event giveaways. No minimums, fast turnaround.

**Custom Mouse Pads:**
> Custom mouse pads combine everyday desktop utility with a full-color branded surface that keeps your logo in front of clients, employees, and partners every time they sit at a desk. We produce custom mouse pads in-house in Joliet with dye sublimation printing on smooth fabric over a non-slip rubber base, in standard and custom sizes. Businesses order branded mouse pads for corporate gifts, employee welcome kits, and trade show giveaways. No minimums, fast turnaround.

**Custom Mugs:**
> Custom mugs are one of the most-used promotional products in any office or home — we produce custom printed mugs in-house in Joliet with dye sublimation printing that wraps your design around the full surface of the mug for a professional, full-color result that does not scratch or peel with normal washing. Businesses order branded mugs for corporate gifts, employee appreciation, trade show giveaways, and hospitality. No minimums.

**Custom Tote Bags:**
> Custom tote bags are a practical, reusable promotional product that keeps your brand visible long after an event ends — we produce custom tote bags in-house in Joliet with screen printing, DTF transfers, or heat press vinyl depending on the design and fabric, in a range of bag styles and sizes. Businesses, nonprofits, schools, and event organizers throughout Chicagoland order custom tote bags for trade shows, corporate giveaways, retail merchandise, and fundraiser items. No minimums, fast turnaround.

**Custom Towels:**
> Custom printed towels make a practical and memorable branded giveaway for gyms, spas, sports teams, resorts, and corporate events — we produce custom towels in-house in Joliet with dye sublimation printing on polyester microfiber for a full-color, edge-to-edge result that does not fade. Sports teams, fitness studios, hospitality businesses, and event organizers order custom towels for team gear, promotional merchandise, and corporate gifts. No minimums.

---

### Design Services — Sub-pages

**Graphic Design:**
> Our in-house graphic design team creates print-ready artwork for any custom apparel, sign, vehicle graphic, sticker, or promotional item order — whether you need a full design from scratch, a logo refined for print, or an existing file prepared for a specific production method. We have designed artwork for businesses, nonprofits, schools, sports teams, and events throughout Chicagoland since 2017, and our files are built for production from day one. Graphic design is available as a standalone service or as part of a larger print or apparel order.

**Logo Design:**
> A strong logo is the foundation of every sign, shirt, decal, and printed piece your business produces — our in-house design team creates custom logos for businesses throughout Will and DuPage County and the greater Chicagoland area, built from the ground up to work across every medium from business cards to vehicle wraps. We produce logo files in all standard formats including vector files suitable for embroidery digitizing, large-format printing, and web use. Logo design is available as a standalone service with a straightforward flat-rate quote.

---

## Visual Styling Notes (Preserved from Current Component)

- Section background: `bg-white`, `py-10`
- Container: `max-w-7xl mx-auto px-6`
- Grid: `grid lg:grid-cols-2 gap-8`
- Left card: `border-t-4 border-sunburst bg-white shadow-md p-8`
- Right card: `border-t-4 border-azure bg-linen-light shadow-md p-8`
- Body text: `text-body-sm text-charcoal leading-relaxed`
- Inline links in body copy: `link-inline`
- Service area line: `text-sm text-charcoal-light mt-4`
- CTA: `x-ui.button-gold-gradient`

---

## Migration Map — All 54 Pages

Every page already calling `x-sections.top5pct-same-day-service` keeps that call. The only change per page file is adding `productIntro` and optionally `crossSell`, `ctaText`, `ctaHref`, and `trustNote`. The `serviceType` prop is removed (it was unused in the template).

### Category Landing Pages (7 pages)

| Page file | `displayServiceType` | `ctaHref` |
|---|---|---|
| `custom-apparel/index.blade.php` | Custom Apparel | `/custom-apparel` |
| `signs/index.blade.php` | Custom Signs | `/signs` |
| `vehicle-graphics/index.blade.php` | Vehicle Graphics | `/vehicle-graphics` |
| `stickers/index.blade.php` | Custom Stickers | `/stickers` |
| `promotional-items.blade.php` | Promotional Items | `/promotional-items` |
| `design-services/index.blade.php` | Design Services | `` (dispatches modal) |
| `company/index.blade.php` | About Top 5 Percent | `/about` |

### Custom Apparel — Printing Options (5 pages)

| Page file | `displayServiceType` | `ctaHref` |
|---|---|---|
| `printing-options/dtf-printing.blade.php` | DTF Transfers | `#all-products` |
| `printing-options/screen-printing.blade.php` | Screen Printing | `#all-products` |
| `printing-options/embroidery.blade.php` | Embroidery | `#all-products` |
| `printing-options/rhinestone-apparel.blade.php` | Rhinestone Shirts | `#all-products` |
| `printing-options/digital-vinyl.blade.php` | Digital Vinyl Shirts | `#all-products` |

### Custom Apparel — Specialty and Sub-pages (12 pages)

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

### Stickers (2 sub-pages)

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

---

## Build Order

1. Confirm `App\Data\PrimaryLocations` and `App\Data\BusinessIdentity` are populated and accessible
2. Rebuild `x-sections.top5pct-same-day-service` — swap bullet lists to paragraph form, add new props, wire App\Data\
3. Review and approve the `productIntro` copy drafts in this document
4. Update all 54 page files — remove `serviceType` prop, add `productIntro` and optional `crossSell`/`ctaText`/`ctaHref`/`trustNote`

---

## Open Questions

1. **Right card H2 formula:** "{ displayServiceType } — Same Day" confirmed, or different phrasing?
2. **Left card cross-sell paragraph:** The draft above covers all core categories. Any services to add or remove?
3. **Review count:** Hardcode "200+" or read from `BusinessIdentity`?
4. **`productIntro` copy:** Review the drafts — approve as written, or revise before build?
5. **`crossSell` per page:** To be written per page during build, or drafted in this doc first?
