@props([
    'displayServiceType' => 'Custom Signage & Apparel',
    'productIntro'       => '',
    'crossSell'          => '',
    'ctaText'            => 'Get a Free Quote',
    'ctaHref'            => '',
    'reviewCount'        => '200+',
    'trustNote'          => '',
])

@php
    use App\Data\PrimaryLocations;
    use App\Data\BusinessIdentity;

    $serviceAreaLine = PrimaryLocations::serviceAreaLine();
    $phone           = BusinessIdentity::PHONE;
    $phoneRaw        = BusinessIdentity::PHONE_RAW;
    $year            = BusinessIdentity::YEAR_INCORPORATED;
@endphp

<section class="py-10 bg-linen-light">
    <div class="max-w-7xl mx-auto px-6">
        <div class="border-l-4 border-sunburst pl-6">

            {{-- Heading --}}
            <div class="inline-block mb-6">
                <h2 class="text-h2 font-bold text-charcoal mb-2">
                    Trusted <span class="text-sunburst">{{ $displayServiceType }}</span> in Joliet, IL
                </h2>
                <div class="h-1 bg-sunburst"></div>
            </div>

            {{-- Trust paragraph --}}
            <p class="text-body text-charcoal leading-relaxed mb-5 max-w-4xl">
                We carry a
                <a href="/reviews" class="link-inline">five-star rating on Google</a>,
                backed by {{ $reviewCount }} reviews from businesses and residents across the Chicagoland area.
                Top 5 Percent is
                <a href="/about" class="link-inline">veteran-owned and Black-owned</a>,
                and has operated out of Joliet since {{ $year }}.
                We produce every order in-house from start to finish — no outsourcing, no middlemen, and no surprises on price.
                Our team brings more than 40 years of combined experience and a commitment to quality that our clients describe as top tier and fair and honest.
                @if($trustNote)
                    {{ $trustNote }}
                @endif
            </p>

            {{-- Product paragraph --}}
            @if($productIntro)
                <p class="text-body text-charcoal leading-relaxed mb-5 max-w-4xl">
                    {!! $productIntro !!}
                </p>
            @endif

            {{-- Cross-sell paragraph --}}
            @if($crossSell)
                <p class="text-body text-charcoal leading-relaxed mb-5 max-w-4xl">
                    {!! $crossSell !!}
                </p>
            @endif

            {{-- Service area line --}}
            <p class="text-sm text-charcoal-light leading-relaxed mt-4 max-w-4xl">
                {{ $serviceAreaLine }}
                Call us at
                <a href="tel:{{ $phoneRaw }}" class="link-inline">{{ $phone }}</a>.
            </p>

            {{-- CTA button — right-aligned on md+, full-width on mobile --}}
            <div class="mt-8 flex flex-col sm:flex-row sm:justify-end">
                @if($ctaHref)
                    <x-ui.button-gold-gradient :href="$ctaHref">
                        {{ $ctaText }}
                    </x-ui.button-gold-gradient>
                @else
                    <x-ui.button-gold-gradient
                        onclick="window.dispatchEvent(new CustomEvent('open-contact-modal'))">
                        {{ $ctaText }}
                    </x-ui.button-gold-gradient>
                @endif
            </div>

        </div>
    </div>
</section>
