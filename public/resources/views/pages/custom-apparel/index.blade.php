@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Custom Apparel in Joliet, IL",
    "provider": { "@id": "https://www.top5pct.com" },
    "areaServed": { "@type": "City", "name": "Joliet", "addressRegion": "IL", "addressCountry": "US" },
    "description": "Veteran-owned custom apparel shop in Joliet, IL offering DTF transfers, screen printing, embroidery, rhinestone, glitter, flock, foil, and specialty shirt printing with no minimums and same day service."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.top5pct.com" },
        { "@type": "ListItem", "position": 2, "name": "Custom Apparel", "item": "https://www.top5pct.com/custom-apparel" }
    ]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Custom Apparel in Joliet, IL | Top 5 Percent",
    "url": "https://www.top5pct.com/custom-apparel",
    "description": "Veteran-owned custom apparel shop in Joliet, IL offering DTF transfers, screen printing, embroidery, rhinestone, glitter, flock, foil, and specialty shirt printing with no minimums and same day service."
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Custom Apparel | Joliet, IL"
    metaDescription="Premium custom apparel in Joliet, IL. Custom t-shirts, DTF transfers, screen printing, embroidery, rhinestone, glitter, flock, and specialty shirts. Veteran"
    currentPage="custom-apparel"
    ogImage="/images/og-tags/top5pct-og-custom-apparel.jpg"
    ogImageAlt="Custom Apparel, T-Shirts, Hoodies & More in Joliet, IL">

    <x-sections.category-hero
        preHeading="Veteran Owned • Joliet, IL"
        heading="Custom Apparel"
        headingAccent="Made Your Way"
        description="At Top 5 Percent, we create premium custom apparel that represents your brand, from everyday t-shirts to full corporate uniforms. DTF transfers, screen printing, embroidery, rhinestones, specialty inks, and more. No minimums, fast turnaround, and free design help."
        primaryButtonText="Browse Apparel"
        primaryButtonHref="#apparel-categories"
        secondaryButtonText="Call Us Today"
        secondaryButtonHref="tel:+18153498600"
        image="/images/dtf-transfers/top5pct-custom-dtf-shirts.jpg"
    :compactButtons="true"
    />
    <x-ui.banner-medium-sunburst />

    <x-sections.top5pct-same-day-service serviceType="custom-apparel" displayServiceType="Custom Apparel" />

    <x-ui.carousel-rotating-images
        :images="[
            ['src' => '/images/sublimation/top5pct-dye-sublimation-shirts.jpg',                     'alt' => 'Custom dye sublimation shirts and apparel in Joliet Illinois'],
            ['src' => '/images/custom-shirts/top5pct-brick-vinyl-cresthill.jpg',                   'alt' => 'Custom brick vinyl shirts and hoodies in Crest Hill Illinois'],
            ['src' => '/images/spirit-wear/top5pct-spirit-wear-clothing.jpg',                      'alt' => 'Custom spirit wear clothing for schools and teams in Joliet Illinois'],
            ['src' => '/images/spirit-wear/top5pct-volleyball-team-uniforms-joliet.jpg',           'alt' => 'Custom volleyball team uniforms and spirit wear in Joliet Illinois'],
            ['src' => '/images/corporate-wear/top5pct-custom-company-apparel.jpg',                 'alt' => 'Custom company apparel and corporate shirts in Joliet Illinois'],
        ]"
        visible=3
    />

    <x-ui.banner-testimonial
        quote="They did an outstanding job on my custom shirts. I shared my concept and it was brought to life with precision and creativity. Excellent quality, great communication, and fast turnaround. I highly recommend!"
        name="Brittany Harvey"
    />

    <x-sections.lp-category-banners
        id="apparel-categories"
        :banners="[
        [
            'image' => '/images/dtf-transfers/top5pct-dtf-t-shirt-printing.jpg',
            'alt'   => 'DTF transfer printing on shirts and apparel in Joliet Illinois',
            'title' => 'DTF Transfers',
            'href'  => '/custom-apparel/printing-options/dtf-printing',
        ],
        [
            'image' => '/images/sublimation/top5pct-dye-sublimation-custom-shirt-joliet.jpg',
            'alt'   => 'Dye sublimation all-over print shirts and jerseys in Joliet Illinois',
            'title' => 'Dye Sublimation',
            'href'  => '/custom-apparel/printing-options/dye-sublimation-printing',
        ],
        [
            'image' => '/images/custom-shirts/top5pct-screenprinted-shirts-joliet.jpg',
            'alt'   => 'Custom screen printed shirts for groups and businesses in Joliet Illinois',
            'title' => 'Screen Printing',
            'href'  => '/custom-apparel/printing-options/screen-printing',
        ],
        [
            'image' => '/images/embroidery/top5pct-stitched-embroidered-shirts.jpg',
            'alt'   => 'Custom embroidery for shirts, caps, and jackets in Joliet Illinois',
            'title' => 'Embroidery',
            'href'  => '/custom-apparel/printing-options/embroidery',
        ],
        [
            'image' => '/images/custom-shirts/top5pct-rhinestone-hoodies-joliet.jpg',
            'alt'   => 'Custom rhinestone shirts and bling apparel in Joliet Illinois',
            'title' => 'Rhinestone Shirts',
            'href'  => '/custom-apparel/printing-options/rhinestone-apparel',
        ],
        [
            'image' => '/images/glitter-shirts/top5pct-glitter-t-shirts.jpg',
            'alt'   => 'Custom glitter print shirts and apparel in Joliet Illinois',
            'title' => 'Glitter Shirts',
            'href'  => '/custom-apparel/specialty-materials/glitter-shirts',
        ],
        [
            'image' => '/images/custom-shirts/top5pct-custom-puff-shirts.jpg',
            'alt'   => 'Custom puff print shirts with 3D raised texture in Joliet Illinois',
            'title' => 'Puff Print Shirts',
            'href'  => '/custom-apparel/specialty-materials/puff-shirts',
        ],
        [
            'image' => '/images/glow-shirts/top5pct-glow-in-the-dark-caps.jpg',
            'alt'   => 'Custom glow in the dark shirts and apparel in Joliet Illinois',
            'title' => 'Glow In The Dark',
            'href'  => '/custom-apparel/specialty-materials/glow-in-the-dark-shirts',
        ],
        [
            'image' => '/images/flock-shirts/top5pct-custom-flock-t-shirt-printing.jpg',
            'alt'   => 'Custom flock print shirts with velvet texture in Joliet Illinois',
            'title' => 'Flock Shirts',
            'href'  => '/custom-apparel/specialty-materials/flock-shirts',
        ],
        [
            'image' => '/images/custom-shirts/top5pct-brick-vinyl-hoodies.jpg',
            'alt'   => 'Custom 3D brick textured shirts and hoodies in Joliet Illinois',
            'title' => 'Brick Shirts',
            'href'  => '/custom-apparel/specialty-materials/brick-shirts',
        ],
        [
            'image' => '/images/holographic-shirts/top5pct-holographic-vinyl-hoodie-foil.jpg',
            'alt'   => 'Custom holographic shirts with color-shifting prints in Joliet Illinois',
            'title' => 'Holographic Shirts',
            'href'  => '/custom-apparel/specialty-materials/holographic-shirts',
        ],
        [
            'image' => '/images/custom-shirts/top5pct-foil-gold-t-shirt.jpg',
            'alt'   => 'Custom foil print shirts and metallic apparel in Joliet Illinois',
            'title' => 'Foil Shirts',
            'href'  => '/custom-apparel/specialty-materials/foil-shirts',
        ],
        [
            'image' => '/images/reflective-shirts/top5pct-reflective-shirts-gold.jpg',
            'alt'   => 'Custom reflective shirts and high visibility apparel in Joliet Illinois',
            'title' => 'Reflective Shirts',
            'href'  => '/custom-apparel/specialty-materials/reflective-shirts',
        ],
        [
            'image' => '/images/reunion-shirts/top5pct-family-reunion-shirts-joliet.jpg',
            'alt'   => 'Custom family and class reunion shirts in Joliet and Shorewood Illinois',
            'title' => 'Reunion Shirts',
            'href'  => '/custom-apparel/group-wear/reunion-shirts',
        ],
        [
            'image' => '/images/spirit-wear/top5pct-spirit-wear-joliet.jpg',
            'alt'   => 'Custom spirit wear, fan wear, and school uniforms in Joliet Illinois',
            'title' => 'Spirit Wear',
            'href'  => '/custom-apparel/group-wear/spirit-wear-shirts',
        ],
        [
            'image' => '/images/corporate-wear/top5pct-custom-business-shirts.jpg',
            'alt'   => 'Custom corporate shirts, polo shirts, and uniforms in Joliet Illinois',
            'title' => 'Corporate Wear',
            'href'  => '/custom-apparel/group-wear/corporate-wear-shirts',
        ],
    ]" />

    <x-sections.card-image-with-text
        image="/images/embroidery/top5pct-embroidered-caps.jpg"
        alt="Custom t-shirts and apparel printed at Top 5 Percent in Joliet Illinois"
        title="Your Custom Apparel Shop in Joliet, IL"
    >
        <p class="mb-4"><a href="/" class="link-notification">Top 5 Percent</a> is a veteran owned custom apparel shop serving Joliet, Shorewood, Plainfield, Crest Hill, Romeoville, and all of Will and DuPage County. We offer one of the widest selections of custom decorating techniques in the Chicagoland area, from <a href="/custom-apparel/printing-options/dtf-printing" class="link-notification">DTF transfers</a> and screen printing to embroidery, rhinestone, glitter, flock, foil, holographic, reflective, puff, glow in the dark, and brick-style printing. For the most professional look in corporate and workwear settings, our <a href="/custom-apparel/printing-options/embroidery" class="link-notification">embroidery</a> service stitches your logo directly into the fabric on polos, caps, and jackets. Whether you need one shirt or a thousand, we can produce it with the technique that best fits your design and your budget.</p>
        <p class="mb-4">We have no minimums on any of our custom apparel services. You can order a single shirt, a small run for your team, or a large bulk order for your organization and you will receive the same level of care and quality at every quantity. Our in-house design team has over 20 years of experience and will work with you from concept to finished product. If you need help developing your artwork, our <a href="/design-services" class="link-notification">design services</a> team is ready to assist at no extra charge. You do not need to arrive with a finished file.</p>
        <p><a href="/contact" class="link-notification">Same-day service</a> is available on many of our products, making us the go-to custom apparel shop for businesses, schools, sports teams, churches, and families throughout Will and DuPage County who need shirts in a hurry. Stop by our shop at <a href="/service-areas" class="link-notification">121 Springfield Avenue in Joliet</a> or call us at <a href="tel:+18153498600" class="link-notification">(815) 349-8600</a> to get started today.</p>
    </x-sections.card-image-with-text>

    <x-ui.banner-cta-artwork-dropzone />
    <x-sections.cta-quadruple-button-banner />

    <x-ui.carousel-rotating-images
        :images="[
            ['src' => '/images/glitter-shirts/top5pct-glitter-lips-custom-t-shirt.jpg',    'alt' => 'Custom glitter lips design on a t-shirt in Joliet Illinois'],
            ['src' => '/images/flock-shirts/top5pct-flock-hoodie-printing.jpg',            'alt' => 'Custom flock print hoodie in Joliet Illinois'],
            ['src' => '/images/custom-shirts/top5pct-rhinestone-bling-joliet.jpg',         'alt' => 'Custom rhinestone bling shirts in Joliet Illinois'],
            ['src' => '/images/reflective-shirts/top5pct-reflective-shirts.jpg',           'alt' => 'Custom reflective shirts and apparel in Joliet Illinois'],
        ]"
        visible=2
    />

    <x-ui.card-banner-slide-in
        image="/images/dtf-transfers/top5pct-custom-t-shirts-dtf.jpg"
        alt="Custom t-shirt printing at Top 5 Percent in Joliet Illinois"
        title="Same-Day Custom Shirts in Joliet"
        href="/contact"
        direction="left"
    />
    <x-ui.card-banner-slide-in
        image="/images/embroidery/top5pct-embroidery-beanies.jpg"
        alt="Custom embroidery and specialty apparel printing at Top 5 Percent in Joliet Illinois"
        title="Embroidery, Screen Print, DTF, We Do It All"
        href="/contact"
        direction="right"
    />

    <x-sections.product-grid collectionSlug="custom-apparel" />

    <x-ui.banner-testimonial
        quote="I was in the market for a printing company that could make shirts for my small business and Top 5 Percent, LLC was the highest rated locally when I started my search. It was a great decision as they were great to work with and did not disappoint! Ezra was very patient throughout the whole process and answered every question I had with great detail. Shirts came out great and I would use Top 5 Percent again for future orders."
        name="Ascendant Iron"
    />

    <x-sections.why-choose-us />
    <x-ui.banner-thin-sunburst />
    <x-ui.artwork-dropzone class="max-w-2xl mx-auto" />
    <x-ui.banner-thin-sunburst />
    <x-sections.cta-free-quote-banner />
    <x-sections.video-banner
        videoId="F3J9nyiM3So"
        heading="Quality You Can See & Feel"
        label="Custom Apparel in Joliet, IL"
        subheading="From screen printing to embroidery, brick shirts to rhinestone designs, watch how Top 5 Percent brings your custom apparel vision to life, right here in Joliet, Illinois."
    />
    @php
    $pageFaqs = [
        ['q' => 'What custom apparel printing techniques do you offer?', 'a' => 'We offer <a href="/custom-apparel/printing-options/dtf-printing" class="link-notification">DTF transfers</a>, <a href="/custom-apparel/printing-options/screen-printing" class="link-notification">screen printing</a>, <a href="/custom-apparel/printing-options/embroidery" class="link-notification">embroidery</a>, <a href="/custom-apparel/printing-options/dye-sublimation-printing" class="link-notification">dye sublimation</a>, <a href="/custom-apparel/printing-options/rhinestone-apparel" class="link-notification">rhinestone</a>, <a href="/custom-apparel/specialty-materials/glitter-shirts" class="link-notification">glitter</a>, flock, foil, holographic, reflective, puff print, glow in the dark, and brick-style printing, one of the widest selections in the Chicagoland area.'],
        ['q' => 'Is there a minimum order for custom shirts?', 'a' => 'No. We have no minimum order on any custom apparel service. You can order a single shirt or a thousand and receive the same professional quality.'],
        ['q' => 'How long does it take to get custom shirts in Joliet?', 'a' => 'Many custom shirt orders are available same day or within 24 hours. Turnaround depends on quantity and technique. Call us at <a href="tel:+18153498600" class="link-notification">(815) 349-8600</a> to confirm availability for your order.'],
        ['q' => 'Can you print on hoodies, hats, jackets, and other garments?', 'a' => 'Yes. We print on t-shirts, hoodies, crewnecks, polo shirts, jackets, caps, and many other garments. Bring in your item or choose from our in-stock blanks.'],
        ['q' => 'What is the difference between DTF printing and screen printing?', 'a' => '<a href="/custom-apparel/printing-options/dtf-printing" class="link-notification">DTF (direct-to-film) transfers</a> produce full-color photographic prints on any fabric with no setup fees, ideal for small runs. <a href="/custom-apparel/printing-options/screen-printing" class="link-notification">Screen printing</a> uses stenciled ink layers and is more cost-effective for high-volume single-color designs.'],
        ['q' => 'Do you offer bulk pricing for large custom apparel orders?', 'a' => 'Yes. We offer quantity discounts on larger orders. <a href="/contact" class="link-notification">Contact us</a> for a custom quote based on your quantity, garment type, and printing technique.'],
    ];
    @endphp
    <x-sections.faq
        heading="Custom Apparel FAQs"
        label="Custom Shirts & Apparel in Joliet, IL"
        :faqs="$pageFaqs"
    />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
