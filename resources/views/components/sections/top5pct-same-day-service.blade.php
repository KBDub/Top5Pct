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

<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-8">

            {{-- Left card: brand trust and cross-sell --}}
            <div class="border-t-4 border-sunburst bg-white shadow-md p-8">

                <div class="inline-block mb-6">
                    <h2 class="text-h2 font-bold text-charcoal mb-2">
                        The <span class="text-sunburst">Top 5 Percent</span> Difference
                    </h2>
                    <div class="h-1 bg-sunburst"></div>
                </div>

                <p class="text-body-sm text-charcoal leading-relaxed mb-4">
                    We carry a <a href="/reviews" class="link-inline">five-star rating on Google</a>,
                    backed by {{ $reviewCount }} reviews from businesses and residents across the Chicagoland area.
                    Top 5 Percent is <a href="/about" class="link-inline">veteran-owned and Black-owned</a>,
                    and has operated out of Joliet since {{ $year }}.
                    We produce every order in-house from start to finish — no outsourcing, no middlemen,
                    and no surprises on price.
                    @if($trustNote)
                        {{ $trustNote }}
                    @endif
                </p>

                <p class="text-body-sm text-charcoal leading-relaxed">
                    We handle <a href="/custom-apparel" class="link-inline">custom apparel</a> —
                    <a href="/custom-apparel/printing-options/dtf-printing" class="link-inline">DTF transfers</a>,
                    <a href="/custom-apparel/printing-options/screen-printing" class="link-inline">screen printing</a>,
                    <a href="/custom-apparel/printing-options/embroidery" class="link-inline">embroidery</a>,
                    <a href="/custom-apparel/specialty-materials/vinyl" class="link-inline">vinyl</a>,
                    <a href="/custom-apparel/specialty-materials/glitter-shirts" class="link-inline">glitter</a>,
                    <a href="/custom-apparel/specialty-materials/foil-shirts" class="link-inline">foil</a>,
                    <a href="/custom-apparel/printing-options/rhinestone-apparel" class="link-inline">rhinestone</a>,
                    and more — alongside
                    <a href="/signs" class="link-inline">custom signs</a>,
                    <a href="/vehicle-graphics" class="link-inline">vehicle graphics</a>,
                    <a href="/stickers" class="link-inline">custom stickers</a>,
                    <a href="/promotional-items" class="link-inline">promotional items</a>,
                    and <a href="/design-services" class="link-inline">in-house design services</a>,
                    all from a single shop at 121 Springfield Avenue in Joliet.
                </p>

            </div>

            {{-- Right card: page-specific product detail --}}
            <div class="border-t-4 border-azure bg-linen-light shadow-md p-8">

                <div class="inline-block mb-6">
                    <h2 class="text-h2 font-bold text-charcoal mb-2">
                        <span class="text-sunburst">{{ $displayServiceType }}</span> — Same Day
                    </h2>
                    <div class="h-1 bg-sunburst"></div>
                </div>

                @if($productIntro)
                    <p class="text-body-sm text-charcoal leading-relaxed mb-4">{!! $productIntro !!}</p>
                @endif

                @if($crossSell)
                    <p class="text-body-sm text-charcoal leading-relaxed mb-4">{!! $crossSell !!}</p>
                @endif

                <p class="text-sm text-charcoal-light leading-relaxed mt-4 mb-6">
                    {{ $serviceAreaLine }}
                    Call us at
                    <a href="tel:{{ $phoneRaw }}" class="link-notification">{{ $phone }}</a>.
                </p>

                <div class="flex flex-col md:flex-row md:justify-end">
                    @if($ctaHref)
                        <x-ui.button-gold-gradient :href="$ctaHref" class="w-full md:w-auto">
                            {{ $ctaText }}
                        </x-ui.button-gold-gradient>
                    @else
                        <x-ui.button-gold-gradient
                            onclick="window.dispatchEvent(new CustomEvent('open-contact-modal'))"
                            class="w-full md:w-auto"
                        >
                            {{ $ctaText }}
                        </x-ui.button-gold-gradient>
                    @endif
                </div>

            </div>

        </div>
    </div>
</section>
