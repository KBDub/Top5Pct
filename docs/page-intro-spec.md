# x-sections.page-intro — Component Specification

## Purpose

`x-sections.page-intro` replaces `x-sections.top5pct-same-day-service` on all product and service pages — both regular category pages and category landing pages (LPs).

The old component was a two-column bullet-list card. The new component is a warm, paragraph-style intro section that leads with trust and social proof, layers in page-specific product detail, weaves in cross-sell links, and closes with a CTA button anchored to the lower-right. The writing follows high-quality transactional local SEO standards derived from `docs/DeepSEOLocalizedContentForTop5Pct.pdf`.

---

## Config Dependency

Service area data comes from `config/client-service-areas.php` (see `docs/client-service-areas-config-spec.md`). Business identity data (phone, address, year) comes from `config/client.php`. The component reads:

```blade
config('client-service-areas.service_area_line')
config('client.phone')
config('client.phone_raw')
config('client.year_incorporated')
```

No city names, phone numbers, or addresses are hardcoded in this component.

---

## SEO Verbiage Standards (from DeepSEOLocalizedContentForTop5Pct.pdf)

The PDF establishes the voice and content formula for all Top 5 Percent transactional SEO copy. The `page-intro` must follow these patterns:

### Core transactional phrases to include (varied per section)
- "veteran-owned" and "in-house" — always present in the trust paragraph
- "no minimums" — present on all apparel pages; adapted for signs/vehicle pages
- "same day" or "rush" — present as either a trust note or in the product paragraph
- "DTF transfers," "sublimation," "embroidery," "screen printing" — named per page context
- "Joliet" and a county/region reference — always in the service area line

### Voice markers from the PDF (weave into copy naturally)
- "military precision" / "veteran-grade reliability" — trust paragraph
- "wow factor" — can appear in cross-sell or product paragraph as paraphrase
- "What do you represent?" — brand ethos, optional in LP intro paragraphs
- "fair and honest pricing" — trust paragraph
- "top notch" / "top tier" — paraphrase, not quoted directly
- Customer name references ("as Jerry E. Olson noted") — reserved for review sections, not page-intro

### What the trust paragraph must establish
1. Five-star Google rating with a review count
2. Veteran-owned and Black-owned identity
3. In-house production (no outsourcing)
4. Operating since 2017, anchored to Joliet
5. Transparent, upfront pricing

### What the product paragraph must establish
1. The specific service named by `displayServiceType`
2. What makes Top 5 Percent's version stand out (materials, technique, in-house control)
3. Who uses it most (businesses, teams, families — vary by page)
4. A transactional anchor phrase (e.g., "no minimums," "same day," "rush available")

### What the cross-sell paragraph must do
1. Link 2–3 related services by name using `link-inline`
2. Create a natural reason to combine services (event, brand package, same order)
3. Keep it one to two sentences — not a list

---

## Placement on Every Page

Immediately after `<x-ui.banner-medium-sunburst />`, below the hero.

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
│  [border-l-4 border-sunburst — left accent rail]                     │
│                                                                      │
│  H2: "Trusted {displayServiceType} in Joliet, IL"                   │
│      ▔▔▔▔▔▔▔▔▔▔▔▔  (sunburst underbar, full heading width)         │
│                                                                      │
│  Trust paragraph  (5-star · veteran-owned · in-house · since 2017)  │
│                                                                      │
│  Product paragraph  (page-specific transactional SEO copy)          │
│                                                                      │
│  Cross-sell paragraph  (2–3 related service links)                  │
│                                                                      │
│  Service area line  (from config — city list + phone)               │
│                                                                      │
│                                        [ CTA Button → lower-right ] │
└──────────────────────────────────────────────────────────────────────┘
```

Mobile: CTA button goes full-width below the service area line.

---

## Props Specification

```blade
@props([
    // --- Required ---
    'displayServiceType'  => 'Custom Signage & Apparel',
    // Human-readable service name for H2 and inline copy.
    // e.g. "DTF Transfers", "Custom Banners", "Vinyl Shirts"

    // --- Product paragraph (page-level, required in practice) ---
    'productIntro'        => '',
    // 2–4 sentences. Transactional SEO copy specific to this service.
    // Follows PDF voice: in-house, no minimums, fast turnaround, veteran precision.
    // Accepts HTML — use <a class="link-inline"> for inline links.

    // --- Cross-sell paragraph (optional) ---
    'crossSell'           => '',
    // 1–2 sentences linking 2–3 related services via link-inline.
    // Omitted entirely when empty.

    // --- CTA button ---
    'ctaText'             => 'Get a Free Quote',
    'ctaHref'             => '',
    // Empty ctaHref dispatches open-contact-modal event.
    // Common: "#all-products", "/contact", "tel:+18153498600"

    // --- Trust overrides (rarely needed — defaults are sitewide) ---
    'reviewCount'         => '200+',
    // Injected into: "backed by {reviewCount} five-star Google reviews"

    'trustNote'           => '',
    // One sentence appended to the trust paragraph.
    // Use for page-specific same-day or rush notes.
    // e.g. "Same day {displayServiceType} is available on most orders."
])
```

---

## Section Anatomy (Detail)

### 1. Heading

Follows branding-requirements.md sunburst underbar rule — underbar spans the full heading width via `inline-block` wrapper.

```blade
<div class="inline-block mb-6">
    <h2 class="text-h2 font-bold text-charcoal mb-2">
        Trusted <span class="text-sunburst">{{ $displayServiceType }}</span> in Joliet, IL
    </h2>
    <div class="h-1 bg-sunburst"></div>
</div>
```

### 2. Trust paragraph

Same across all 54 pages. Establishes the five-star reputation, veteran and Black-owned identity, in-house production, Joliet anchor, and fair pricing. `{trustNote}` is the only variable part.

Prose template (7th grade reading level, no all-caps):

> We carry a five-star rating on Google, backed by {reviewCount} reviews from businesses and residents across the Chicagoland area. Top 5 Percent is veteran-owned, Black-owned, and has operated out of Joliet since 2017. We produce every order in-house from start to finish — no outsourcing, no middlemen, and no surprises on price. Our team brings more than 40 years of combined experience and a commitment to quality that our clients describe as "top tier" and "fair and honest." {trustNote}

Links:
- "five-star rating on Google" → `/reviews` via `link-inline`
- "veteran-owned" → `/about` via `link-inline`

### 3. Product paragraph

Injected via `productIntro`. Written per page following the PDF transactional voice formula:
- **Sentence 1:** Name the technique and its core advantage (what it does better than alternatives)
- **Sentence 2:** Anchor to in-house production and quality control
- **Sentence 3:** Name the customer type and use case (business, team, family)
- **Sentence 4 (optional):** Transactional closer — no minimums, same day, rush available

See the "Drafted productIntro Copy — All 54 Pages" section below.

### 4. Cross-sell paragraph

Injected via `crossSell`. Natural language — not a list. Creates a reason to combine services.

### 5. Service area line

```blade
<p class="text-sm text-charcoal-light mt-4">
    {{ config('client-service-areas.service_area_line') }}
    Call us at
    <a href="tel:{{ config('client.phone_raw') }}" class="link-notification">
        {{ config('client.phone') }}
    </a>.
</p>
```

### 6. CTA button — lower-right

```blade
<div class="mt-6 flex flex-col md:flex-row md:justify-end">
    @if($ctaHref)
        <x-ui.button-gold-gradient href="{{ $ctaHref }}">{{ $ctaText }}</x-ui.button-gold-gradient>
    @else
        <x-ui.button-gold-gradient onclick="window.dispatchEvent(new CustomEvent('open-contact-modal'))">
            {{ $ctaText }}
        </x-ui.button-gold-gradient>
    @endif
</div>
```

---

## Full Usage Examples

### DTF Transfers

```blade
<x-sections.page-intro
    displayServiceType="DTF Transfers"
    productIntro='Direct-to-film printing puts full-color, photographic-quality prints on any fabric with no cracking, no peeling, and no minimum order. We print every transfer in-house on our own DTF equipment, so quality is consistent whether you order one shirt or five hundred. Businesses use DTF for branded apparel, teams use it for spirit wear with photo-quality logos, and families use it for personalized gifts and reunion gear. Rush orders are welcome and same day service is available on most DTF jobs.'
    crossSell='Pair your DTF shirts with a matching <a href="/signs/business-signs/banners" class="link-inline">vinyl banner</a> for a complete event package, or add <a href="/custom-apparel/printing-options/embroidery" class="link-inline">embroidery</a> to the same order for a layered, professional finish.'
    ctaText="Shop DTF Transfers"
    ctaHref="#all-products"
    trustNote="Same day DTF service is available on most orders — call us and we will confirm your turnaround before you come in."
/>
```

### Custom Banners

```blade
<x-sections.page-intro
    displayServiceType="Custom Banners"
    productIntro='We print custom vinyl banners, fabric banners, and retractable banners in full color on our in-house wide-format printer, with no setup fees and no minimum order. Every banner is produced at 121 Springfield Avenue in Joliet, so we control quality from file to finished product. Businesses use our banners for grand openings, storefronts, and trade show displays, and families order them for graduation parties, birthdays, and reunions throughout Will and DuPage County. Same day banner printing is available on standard sizes for last-minute campaigns and events.'
    crossSell='Coordinate your banner with <a href="/signs/yard-signs" class="link-inline">yard signs</a> for outdoor coverage or add <a href="/custom-apparel/printing-options/dtf-printing" class="link-inline">DTF transfer shirts</a> to the same order for a complete branded event look.'
    ctaText="Shop Custom Banners"
    ctaHref="#all-products"
    trustNote="Same day banner printing is available on select sizes — rush orders are welcome."
/>
```

### Custom Apparel LP

```blade
<x-sections.page-intro
    displayServiceType="Custom Apparel"
    productIntro='We print, press, and embroider custom apparel in-house using DTF transfers, screen printing, embroidery, heat press vinyl, dye sublimation, and specialty finishes including rhinestone, foil, glitter, and more. No minimums on any decoration method, same day service available on most orders, and our in-house design team handles your artwork from concept to production-ready file. Businesses order branded uniforms and corporate wear, teams order spirit wear and group shirts, and individuals order personalized gifts and custom pieces — all produced right here in Joliet.'
    crossSell='Round out your order with <a href="/signs" class="link-inline">custom signs</a>, <a href="/vehicle-graphics" class="link-inline">vehicle graphics</a>, or <a href="/promotional-items" class="link-inline">promotional items</a> — we handle everything in the same shop.'
    ctaText="Browse Custom Apparel"
    ctaHref="/custom-apparel"
/>
```

---

## Drafted productIntro Copy — All 54 Pages

These are ready-to-use drafts written to the PDF transactional SEO voice. Mark each as approved or revised before build.

### Category Landing Pages

**Custom Apparel** — see example above.

**Custom Signs:**
> We design and print custom signs in-house in Joliet, covering everything from yard signs and banners to wall graphics, window decals, floor signs, sidewalk signs, and specialty signage for any business or event. Every sign is produced on our own equipment with no outsourcing, so quality and turnaround stay fully in our control. Businesses across Will and DuPage County order signage for storefronts, events, trade shows, and job sites, and same day printing is available on most standard sign products. Rush orders are welcome — call and we will confirm your turnaround before you come in.

**Vehicle Graphics:**
> We design and install custom vehicle graphics in-house, from full wraps and partial wraps to vinyl lettering, car magnets, DOT decals, and fleet graphics for businesses throughout the Chicagoland area. Every graphic is produced and installed at our Joliet location, so we control quality from design file to finished vehicle. Contractors, fleet operators, and local businesses use our vehicle graphics to turn every truck and van into a professional mobile billboard. Rush installation is available on most vehicle graphics jobs — contact us to schedule your appointment.

**Custom Stickers:**
> We print custom stickers and decals in-house at our Joliet shop, covering standard stickers, custom-shaped stickers, die-cut decals, and specialty finishes for businesses, events, and personal use. No minimum order, fast turnaround, and full-color printing on durable vinyl stock that holds up outdoors and in the elements. Businesses order logo stickers for packaging and branding, event organizers order custom decals for giveaways and merchandise, and individuals order personalized stickers for gifts and keepsakes. Same day sticker printing is available on most jobs.

**Promotional Items:**
> We produce custom promotional items in-house, including mugs, tote bags, mouse pads, can koozies, towels, drink coasters, and more — all printed or pressed with your logo, artwork, or custom design. No minimum orders, fast turnaround, and full control over print quality since everything is produced at our Joliet location. Businesses use promotional items for corporate giveaways, trade show swag, and customer appreciation gifts, and organizations order branded merchandise for fundraisers and events. Call us to discuss your promotional item order and we will confirm turnaround and pricing upfront.

**Design Services:**
> Our in-house design team handles custom logo design, graphic design, and artwork preparation for any printing or signage project — whether you have a rough sketch, a concept in your head, or need us to build something from scratch. We have produced artwork for businesses, nonprofits, sports teams, and events throughout Chicagoland since 2017, and our design work is built for production from day one with no back-and-forth file conversion issues. Logo design, layout work, and print-ready file prep are all available as standalone services or as part of a larger apparel or signage order.

---

### Custom Apparel — Printing Options

**DTF Transfers** — see example above.

**Screen Printing:**
> Screen printing delivers bold, durable, ink-on-fabric prints with vibrant color that does not sit on top of the garment — it bonds into the weave for a professional finish that holds up through hundreds of washes. We screen print in-house in Joliet on our own equipment, with consistent color matching across the full run. Businesses, sports leagues, and schools order screen printed shirts for high-volume runs where cost-per-shirt drops significantly with quantity. Minimum order quantities apply for screen printing — call us to get a quote based on your design and quantity.

**Embroidery:**
> Embroidery stitches your logo or artwork directly into the fabric of shirts, polos, hats, jackets, and bags for a premium, textured finish that communicates professionalism on every piece. We embroider in-house in Joliet using commercial-grade embroidery machines, and we digitize your artwork ourselves so the stitch count and quality are optimized before production begins. Businesses order embroidered polos and jackets for employee uniforms and corporate wear, and organizations order embroidered caps and bags for branded merchandise and gifts. No minimums on embroidery orders — we can embroider a single piece or a run of hundreds.

**Rhinestone Shirts:**
> Rhinestone apparel uses heat-set crystals applied in precise patterns to create a sparkling, premium finish that catches light and turns heads — popular for events, teams, boutique fashion, and anyone who wants a piece that truly stands out. We apply rhinestones in-house in Joliet, building each design with precision and pressing every stone at the right temperature and pressure for a hold that lasts through washing. Custom rhinestone shirts, hoodies, jackets, and bags are available with no minimum order, and our design team can help you lay out your pattern before we start.

**Digital Vinyl:**
> Digital vinyl printing applies full-color, photographic-quality graphics to heat transfer film that is then pressed onto your garment for a smooth, vibrant finish without the thickness of traditional screen printing. We cut and press digital vinyl in-house in Joliet with no minimums, making it a great option for photo-realistic logos, multi-color designs, and small-run custom apparel that needs full-color detail. Businesses, sports teams, and event organizers use digital vinyl for branded apparel that needs precise color and edge definition. Same day digital vinyl shirts are available on most jobs.

---

### Custom Apparel — Specialty Materials

**Vinyl Shirts:**
> Heat press vinyl delivers bold, clean designs with sharp edges and durable color on t-shirts, hoodies, hats, and virtually any garment you can bring in. We cut every design in-house in Joliet on our own vinyl cutters and press each piece individually for accurate placement and solid adhesion — no outsourcing, no guesswork. Vinyl shirts are popular for businesses that need small runs of branded apparel, teams ordering matching shirts for events, and individuals ordering one-off custom pieces for gifts or special occasions. No minimums, and same day vinyl shirts are available on most orders.

**Holographic Shirts:**
> Holographic vinyl creates a mirror-like, color-shifting effect on shirts and apparel that produces a dramatic, premium look at any event or occasion. We cut and press holographic heat transfer vinyl in-house in Joliet with the same precision as standard vinyl, and the effect holds up through washing when pressed at the correct temperature and pressure. Holographic shirts are popular for performance apparel, fashion boutiques, event merchandise, and anyone who wants a piece that makes a strong visual impression. No minimums — order one holographic shirt or a full team set.

**Dye Sublimation:**
> Dye sublimation printing infuses ink directly into polyester fabric at the molecular level, producing all-over, edge-to-edge color that does not crack, peel, or fade over time. We sublimate in-house in Joliet on our own equipment, and the process works on any polyester or polyester-blend garment including performance shirts, athletic wear, jerseys, and hoodies. Teams, gyms, and sports organizations order sublimated apparel for custom uniforms and practice gear, and businesses order sublimated branded wear for trade shows and corporate events. No minimums on sublimation orders.

**Puff Print Shirts:**
> Puff print uses a heat-activated additive in the ink that raises the design off the surface of the garment for a three-dimensional, textured effect that you can feel as well as see. We apply puff prints in-house in Joliet and press each garment individually for consistent lift and clean edges across the full design. Puff print shirts are popular for streetwear, premium branded apparel, and anyone who wants a shirt that has a tactile, premium quality. No minimums — we can press a single puff print shirt or a full run for a team or business.

**Brick Shirts:**
> Brick print applies a textured, dimensional pattern to apparel that creates a bold, graphic look with a raised surface feel similar to embossed printing. We produce brick shirts in-house in Joliet with the same quality controls as all our specialty apparel, pressing each piece individually for consistent texture and clean design edges. Brick shirts are a distinctive choice for streetwear, event apparel, and custom fashion pieces that need a premium look with strong shelf presence. No minimums — call us to discuss your design and we will confirm turnaround before you come in.

**Flock Shirts:**
> Flock print applies fine fibers to the surface of heat transfer material that, when pressed onto a garment, creates a soft, velvet-like texture that looks and feels premium. We cut and apply flock vinyl in-house in Joliet with precision, and the finish holds up well through washing when pressed at the correct specifications. Flock shirts are popular for vintage-style apparel, premium event merchandise, and fashion pieces where the tactile quality of the surface is part of the design intent. No minimums on flock shirt orders.

**Foil Shirts:**
> Foil heat transfer applies a shiny, metallic finish to shirts and apparel in gold, silver, rose gold, holographic, and other specialty finishes that produce a high-fashion, eye-catching result. We cut and press foil transfers in-house in Joliet with precision alignment and correct temperature control for a finish that bonds cleanly and does not crack or lift at edges. Foil shirts are popular for boutique fashion, event apparel, award ceremonies, and anyone who wants a premium metallic look on a custom garment. No minimums — we can foil one shirt or a full run.

**Glitter Shirts:**
> Glitter heat transfer vinyl applies a sparkle finish to shirts and hoodies that catches light and adds a bold, celebratory quality to any design or logo. We cut and press glitter vinyl in-house in Joliet and recommend it for designs with solid shapes and text where the sparkle effect reads cleanly at a distance. Glitter shirts are popular for party apparel, team uniforms, event merchandise, and boutique fashion — and they wash and wear well when cared for properly. No minimums on glitter shirt orders.

**Reflective Shirts:**
> Reflective heat press vinyl applies a high-visibility material to shirts and apparel that returns light to its source, making the design clearly visible in low light and at night — popular for safety apparel, cycling gear, running wear, and any application where visibility matters. We cut and apply reflective vinyl in-house in Joliet with the same precision as our standard vinyl work, and the material meets high-visibility standards for most work site and road applications. No minimums on reflective shirt orders, and same day production is available on most jobs.

**Glow In The Dark Shirts:**
> Glow in the dark heat transfer vinyl charges under any light source and emits a visible glow in darkness, making it a popular choice for event apparel, Halloween costumes, safety gear, and anyone who wants a shirt that works in the dark. We cut and press glow in the dark vinyl in-house in Joliet with the same quality controls as our standard vinyl work, and the glow effect holds up through washing when pressed correctly. No minimums — order one shirt or a full batch for your event or team.

---

### Custom Apparel — Group Wear

**Corporate Wear:**
> We produce custom corporate apparel in-house in Joliet, including embroidered polos, branded jackets, screen printed staff shirts, and DTF-transferred uniforms for businesses throughout Will and DuPage County and the greater Chicagoland area. Our in-house production means consistent quality across every piece in a corporate order, whether you need ten polos for a small team or hundreds of uniforms for a large staff rollout. We work directly with business owners and office managers to match brand colors, digitize logos for embroidery, and deliver on time. No minimums on most corporate apparel methods.

**Reunion Shirts:**
> Custom reunion shirts bring groups together with a shared design that everyone is proud to wear — we produce reunion shirts in-house in Joliet using DTF transfers, screen printing, vinyl, and embroidery depending on what the design calls for. Our in-house design team can build your reunion artwork from scratch if you arrive with a concept and no finished file, and we specialize in personalization across large groups where each shirt needs a different name or year. Family reunions, class reunions, church group reunions, and military unit reunions are all part of our regular order mix. No minimums on most reunion shirt methods — order exactly what your group needs.

**Spirit Wear:**
> Spirit wear keeps teams, schools, clubs, and communities looking unified and proud — we produce custom spirit wear in-house in Joliet using DTF transfers, screen printing, embroidery, and vinyl depending on the design and the garment. School teams, youth sports leagues, booster clubs, church groups, and neighborhood organizations throughout Will and DuPage County order spirit wear from us regularly, and our no-minimum policy means small groups can order without meeting a quota. Our in-house design team will build your spirit wear artwork and walk you through garment options before production begins. Same day spirit wear is available on most jobs.

---

### Signs — Sub-pages

**Business Signs:**
> We design and produce custom business signs in-house in Joliet, covering interior and exterior signage for storefronts, offices, restaurants, retail locations, and professional spaces throughout Will and DuPage County. Every sign is produced on our own equipment with no outsourcing — wall signs, window graphics, door signs, floor decals, and specialty signage are all handled start to finish at 121 Springfield Avenue. Businesses order from us for grand openings, rebrands, seasonal signage changes, and ongoing operational signage needs. Same day business sign production is available on most standard formats.

**Custom Banners** — see example above.

**Yard Signs:**
> We print corrugated plastic yard signs in full color using UV-resistant inks that hold up through Illinois weather without fading or peeling — single sided and double sided printing, optional metal H-stakes, and bulk pricing available on larger orders. Every yard sign is printed in-house in Joliet on our own wide-format equipment for consistent quality and fast turnaround. Real estate agents, political campaigns, contractors, event organizers, and local businesses throughout Will and DuPage County order yard signs from us regularly. Same day yard sign printing is available on standard sizes — rush orders are welcome.

**Door Signs:**
> Custom door signs give your business a professional first impression at every entrance — we produce door signs in-house in Joliet in a range of materials and formats including vinyl decals, printed aluminum, acrylic, and specialty substrates for any commercial application. No minimums, fast turnaround, and full-color printing with precise sizing to fit standard and non-standard door configurations. Offices, restaurants, retail locations, and service businesses throughout Will and DuPage County order door signs from us for suite identification, hours of operation, and branded entry graphics.

**Wall Signs:**
> Custom wall signs transform interior and exterior walls into branded, professional surfaces — we produce wall signs in-house in Joliet using adhesive vinyl, rigid print substrates, and specialty materials that work on painted drywall, concrete, brick, and glass. Businesses order wall signs for lobby branding, directional signage, office identification, and large-format wall graphics that make a strong visual statement. No minimums, full-color printing, and our design team can help you plan the layout before production begins.

**Window Signs:**
> Window signs and graphics let you use your storefront glass as prime marketing real estate — we produce custom window decals, perforated vinyl, frosted graphics, and cut vinyl lettering in-house in Joliet for retail stores, restaurants, offices, and any business with street-facing windows. Full-color printing, no minimums, and fast turnaround make window signs one of the most cost-effective ways to attract attention from foot traffic and passing vehicles. Same day window sign production is available on most standard formats.

**Floor Signs:**
> Custom floor signs and floor decals communicate direction, branding, safety messages, and promotions right at ground level — where people actually look. We print floor graphics in-house in Joliet on durable, non-slip laminated vinyl stock that holds up in high-traffic commercial spaces. Retail stores, warehouses, event venues, and health care facilities order floor signs for wayfinding, social distancing guidance, branded zone markers, and promotional messaging. No minimums and fast turnaround — same day floor sign production available on most jobs.

**Sidewalk Signs:**
> Sidewalk signs and A-frame signs put your message right in front of foot traffic, making them one of the most direct ways to capture attention from pedestrians and passing drivers. We produce custom sidewalk signs and A-frame sign inserts in-house in Joliet with full-color printing on durable substrates that hold up outdoors. Restaurants, retail stores, salons, and service businesses throughout Will and DuPage County use sidewalk signs for daily specials, promotions, and directional messaging. No minimums and same day production available on most formats.

**A-Frame Signs:**
> A-frame signs are one of the simplest and most effective ways to stop foot traffic and draw customers into your location — we produce custom A-frame sign inserts in-house in Joliet with full-color printing and weather-resistant materials for outdoor use. Restaurants, boutiques, service businesses, and event organizers use A-frames for daily specials, menus, directional signs, and promotions that need to be visible from the sidewalk. No minimums, fast turnaround, and same day production available on most A-frame formats.

**Custom Posters:**
> Custom posters deliver full-color, large-format visual impact for retail displays, event promotion, office interiors, and any application where a bold printed graphic needs to fill wall space. We print custom posters in-house in Joliet on a range of paper and rigid substrates, with no minimums and fast turnaround for both standard and non-standard sizes. Event organizers, retail stores, restaurants, schools, and businesses throughout Will and DuPage County order custom posters from us for everything from promotional campaigns to interior décor.

**Custom Table Cloths:**
> Custom printed table cloths transform any trade show table, event display, or retail setup into a polished, branded presentation — we produce custom table cloths in-house in Joliet with full-color dye sublimation printing on wrinkle-resistant polyester fabric that looks sharp right out of the bag. Standard 6-foot and 8-foot sizes available, as well as custom dimensions. Businesses, nonprofits, and event organizers throughout Chicagoland order custom table cloths for trade shows, conferences, farmers markets, and branded display setups.

**Table Runners:**
> Custom table runners add a polished branded layer to any event table, display case, or retail setup without covering the full surface — we produce custom table runners in-house in Joliet with full-color dye sublimation printing on wrinkle-resistant polyester in standard and custom lengths. Businesses, event planners, and organizations order custom table runners for trade shows, product launches, banquets, and brand activations where every surface needs to communicate the brand. Fast turnaround and no minimums.

**Safety Signs:**
> We produce custom safety and compliance signs in-house in Joliet including COVID-related health signs, social distancing floor graphics, occupancy limit signs, PPE requirement signs, and general workplace safety signage for businesses, schools, and facilities throughout Will and DuPage County. Full-color printing on durable substrates that hold up in commercial environments, no minimums, and fast turnaround for urgent compliance needs. Call us to discuss your safety sign requirements and we will confirm materials, sizing, and turnaround before you place your order.

---

### Vehicle Graphics — Sub-pages

**Automobile Graphics:**
> We design and install custom vehicle graphics in-house in Joliet, including partial wraps, full wraps, vinyl lettering, logo graphics, and decorative vehicle graphics for cars, trucks, vans, SUVs, and specialty vehicles. Every graphic is produced and installed at 121 Springfield Avenue for consistent quality and professional finish — no outsourcing to third-party installers. Businesses use automobile graphics to brand their service vehicles and company cars, and individuals order custom vehicle graphics for personal style and specialty builds. Contact us to schedule your vehicle graphics consultation and installation appointment.

**Vehicle Magnets:**
> Custom vehicle magnets give businesses a flexible, removable way to brand their personal and work vehicles without permanent adhesive — we produce vehicle magnets in-house in Joliet with full-color printing on heavy-duty magnetic material that holds securely at highway speeds and resists weather. Contractors, real estate agents, delivery drivers, and service businesses throughout Will and DuPage County use vehicle magnets to turn personal vehicles into professional marketing tools without committing to a permanent graphic. No minimums — order a single pair of magnets or a set for your full fleet.

**DOT Decals:**
> We produce DOT-compliant decals and regulatory vehicle stickers in-house in Joliet for commercial trucks, trailers, and fleet vehicles operating throughout Illinois and across state lines. Our DOT decals are printed on durable, weather-resistant vinyl that meets federal marking requirements for motor carriers, and we can produce USDOT number decals, fuel permits, and fleet identification graphics at any quantity with fast turnaround. Trucking companies, logistics operations, and commercial fleet operators throughout the Chicagoland area order DOT decals from us regularly. Same day DOT decal production is available on most standard formats.

---

### Stickers

**Custom Shaped Stickers:**
> Custom shaped stickers are die-cut to follow the exact outline of your design — no white border, no square background — producing a clean, professional sticker that looks designed rather than printed. We produce custom shaped stickers in-house in Joliet on durable, weatherproof vinyl with full-color printing and UV coating for outdoor use. Businesses order custom shaped stickers for product packaging, branding, and promotional giveaways, and individuals order them for personal projects, gifts, and events. No minimums — order one custom shaped sticker or a run of thousands.

**Custom Stickers (Standard):**
> Standard custom stickers deliver full-color, professional-quality prints on square or rectangular cut vinyl — a cost-effective choice for high-volume branding, product labels, event giveaways, and promotional use. We produce standard stickers in-house in Joliet with durable vinyl stock and UV lamination for outdoor durability, and fast turnaround for both small and large runs. Businesses, organizations, and event planners throughout Will and DuPage County order custom stickers from us for packaging inserts, logo stickers, promotional kits, and brand activation. No minimums.

---

### Promotional Items — Sub-pages

**Custom Can Koozies:**
> Custom can koozies are a popular giveaway for events, fundraisers, bar openings, sports games, and corporate outings — we print custom koozies in-house in Joliet with full-color dye sublimation or heat transfer printing on neoprene foam that keeps drinks cold and your brand visible all day. No minimums, fast turnaround, and durable printing that holds up through repeated use and washing. Businesses, event planners, and organizations throughout Chicagoland order custom koozies from us for parties, trade shows, corporate giveaways, and branded merchandise.

**Custom Drink Coasters:**
> Custom printed drink coasters add a branded, professional touch to any bar, restaurant, event table, or corporate hospitality setup — we produce custom coasters in-house in Joliet with full-color printing on neoprene or hardboard substrates with a non-slip base and liquid-resistant surface. Restaurants, bars, corporate event planners, and hospitality businesses order custom coasters for tabletop branding, event giveaways, and promotional merchandise. No minimums and fast turnaround — call us to discuss materials and sizing for your coaster order.

**Custom Mouse Pads:**
> Custom mouse pads combine everyday desktop utility with a full-color branded surface that keeps your logo in front of clients, employees, and partners every time they sit at a desk. We produce custom mouse pads in-house in Joliet with dye sublimation printing on smooth fabric over a non-slip rubber base, in standard and custom sizes. Businesses order branded mouse pads for corporate gifts, employee welcome kits, and trade show giveaways. No minimums and fast turnaround — custom mouse pads are an easy, impactful addition to any promotional item order.

**Custom Mugs:**
> Custom mugs are one of the most-used promotional products in any office or home — we produce custom printed mugs in-house in Joliet with dye sublimation printing that wraps your design around the full surface of the mug for a professional, full-color result that does not scratch or peel with normal washing. Businesses order branded mugs for corporate gifts, employee appreciation, trade show giveaways, and hospitality. No minimums — order a single custom mug or a full case for your team or event.

**Custom Mouse Pads** — see above.

**Custom Tote Bags:**
> Custom tote bags are a practical, reusable promotional product that keeps your brand visible long after an event ends — we produce custom tote bags in-house in Joliet with screen printing, DTF transfers, or heat press vinyl depending on the design and fabric, in a range of bag styles and sizes. Businesses, nonprofits, schools, and event organizers throughout Chicagoland order custom tote bags for trade shows, corporate giveaways, retail merchandise, and fundraiser items. No minimums and fast turnaround — call us to discuss bag style, printing method, and turnaround for your order.

**Custom Towels:**
> Custom printed towels make a practical and memorable branded giveaway for gyms, spas, sports teams, resorts, and corporate events — we produce custom towels in-house in Joliet with dye sublimation printing on polyester microfiber or sublimation-ready terry for a full-color, edge-to-edge result that does not fade. Sports teams, fitness studios, hospitality businesses, and event organizers order custom towels for team gear, promotional merchandise, and corporate gifts. No minimums — call us to confirm towel style, size, and turnaround before you order.

---

### Design Services — Sub-pages

**Graphic Design:**
> Our in-house graphic design team creates print-ready artwork for any custom apparel, sign, vehicle graphic, sticker, or promotional item order — whether you need a full design from scratch, a logo refined for print, or an existing file prepared for a specific production method. We have designed artwork for businesses, nonprofits, schools, sports teams, and events throughout Chicagoland since 2017, and our files are built for production from day one with no back-and-forth format conversion issues. Graphic design is available as a standalone service or as part of a larger print or apparel order. Call us to discuss your project and we will give you a straightforward quote.

**Logo Design:**
> A strong logo is the foundation of every sign, shirt, decal, and printed piece your business produces — our in-house design team creates custom logos for businesses throughout Will and DuPage County and the greater Chicagoland area, built from the ground up to work across every medium from business cards to vehicle wraps. We produce logo files in all standard formats including vector files suitable for embroidery digitizing, large-format printing, and web use. Logo design is available as a standalone service with a straightforward flat-rate quote — call us to discuss your brand and we will walk you through the process.

---

## Responsive Behavior

| Breakpoint | Layout |
|---|---|
| Mobile (below `md`) | Single column, full-width. CTA button is `w-full`. |
| Tablet (`md`) | Full-width prose, CTA right-aligned. |
| Desktop (`lg+`) | Full-width prose inside `max-w-7xl`. CTA lower-right. Left accent `border-l-4 border-sunburst`. |

---

## Visual Styling Notes

- Background: `bg-linen-light`
- Left accent: `border-l-4 border-sunburst pl-6` on the inner content wrapper
- Heading: `text-h2 font-bold text-charcoal` with sunburst underbar (full heading width per branding rules)
- Body text: `text-body text-charcoal leading-relaxed`
- Inline links: `link-inline` throughout body copy
- Service area line: `text-sm text-charcoal-light mt-4`
- CTA: `x-ui.button-gold-gradient`, right-aligned on `md+`, full-width on mobile

---

## File Location

```
resources/views/components/sections/page-intro.blade.php
```

Add to `docs/branding-requirements.md` component table:

| Component | Usage | File Path |
|---|---|---|
| `x-sections.page-intro` | Page-level trust intro with product detail and cross-sell links | `resources/views/components/sections/page-intro.blade.php` |

---

## Full Migration Map — All 54 Pages

Every page currently calling `x-sections.top5pct-same-day-service` swaps to `x-sections.page-intro`. Required on every page: `displayServiceType` and `productIntro`.

### Category Landing Pages (LPs) — 7 pages

| Page file | `displayServiceType` | `ctaHref` |
|---|---|---|
| `custom-apparel/index.blade.php` | Custom Apparel | `/custom-apparel` |
| `signs/index.blade.php` | Custom Signs | `/signs` |
| `vehicle-graphics/index.blade.php` | Vehicle Graphics | `/vehicle-graphics` |
| `stickers/index.blade.php` | Custom Stickers | `/stickers` |
| `promotional-items.blade.php` | Promotional Items | `/promotional-items` |
| `design-services/index.blade.php` | Design Services | `` (dispatches modal) |
| `company/index.blade.php` | About Top 5 Percent | `/about` |

Note: `promotional-items.blade.php` lives at the root pages level, not inside a subdirectory.

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

1. Populate `config/client-service-areas.php` (see `docs/client-service-areas-config-spec.md`)
2. Build `x-sections.page-intro` blade component
3. Review and approve the `productIntro` copy drafts in this document
4. Swap all 54 page files from `top5pct-same-day-service` to `page-intro`
5. (Separate task) Migrate the 21 hardcoded-city components to read from `config/client-service-areas`

---

## Open Questions

1. **Background color:** `bg-linen-light` confirmed, or `bg-white`?
2. **Heading formula:** "Trusted {Service} in Joliet, IL" — or different?
3. **Review count:** Hardcode "200+" or add `config('client.review_count')` key to `config/client.php`?
4. **`productIntro` copy:** Review the drafts above — approve as written, or revise before build?
5. **`crossSell` copy:** To be written per page during build, or drafted in this doc first?
