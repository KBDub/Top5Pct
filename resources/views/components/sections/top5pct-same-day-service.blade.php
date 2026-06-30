@props([
    'displayServiceType' => 'Custom Signage & Apparel',
    'productIntro'       => '',
    'crossSell'          => '',
    'reviewCount'        => '200+',
    'trustNote'          => '',
    'seoQualifier'       => 'Best',
    'seoCity'            => '',
    'showServiceArea'    => true,
])

@php
    use App\Data\PrimaryLocations;
    use App\Data\BusinessIdentity;
    use Illuminate\Support\Str;

    $phone           = BusinessIdentity::PHONE;
    $phoneRaw        = BusinessIdentity::PHONE_RAW;
    $year            = BusinessIdentity::YEAR_INCORPORATED;
    $hqCity          = PrimaryLocations::HQ['city'];
    $primaryCities   = PrimaryLocations::primaryCityNames();
    $secondaryCities = PrimaryLocations::secondaryCityNames();
    $allCities       = array_merge([$hqCity], $primaryCities, $secondaryCities);
    $titleCity       = $seoCity ?: $hqCity;
@endphp

<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-8">

            {{-- Left card: cross-sell first, trust second --}}
            <div class="border-t-4 border-sunburst bg-white shadow-md p-8">

                <div class="inline-block mb-6">
                    <h2 class="text-h2 font-bold text-charcoal mb-2">
                        The <span class="text-sunburst">Top 5 Percent</span> Difference
                    </h2>
                    <div class="h-1 bg-sunburst"></div>
                </div>

                <p class="text-body-sm text-charcoal leading-relaxed mb-4">
                    We handle <a href="/custom-apparel" class="link-inline">custom apparel</a>, including
                    <a href="/custom-apparel/printing-options/dtf-printing" class="link-inline">DTF transfers</a>,
                    <a href="/custom-apparel/printing-options/screen-printing" class="link-inline">screen printing</a>,
                    <a href="/custom-apparel/printing-options/embroidery" class="link-inline">embroidery</a>,
                    <a href="/custom-apparel/specialty-materials/vinyl-shirts" class="link-inline">vinyl</a>,
                    <a href="/custom-apparel/specialty-materials/glitter-shirts" class="link-inline">glitter</a>,
                    <a href="/custom-apparel/specialty-materials/foil-shirts" class="link-inline">foil</a>,
                    <a href="/custom-apparel/printing-options/rhinestone-apparel" class="link-inline">rhinestone</a>,
                    and more, alongside
                    <a href="/signs" class="link-inline">custom signs</a>,
                    <a href="/vehicle-graphics" class="link-inline">vehicle graphics</a>,
                    <a href="/stickers" class="link-inline">custom stickers</a>,
                    <a href="/promotional-items" class="link-inline">promotional items</a>,
                    and <a href="/design-services" class="link-inline">in-house design services</a>,
                    all from a single shop at 121 Springfield Avenue in Joliet.
                </p>

                <p class="text-body-sm text-charcoal leading-relaxed">
                    We carry a <a href="/reviews" class="link-inline">five-star rating on Google</a>,
                    backed by {{ $reviewCount }} reviews from businesses and residents across the Chicagoland area.
                    Top 5 Percent is <a href="/about" class="link-inline">veteran-owned</a>,
                    and has operated out of Joliet since {{ $year }}.
                    We produce every order in-house from start to finish, no outsourcing, no middlemen,
                    and no surprises on price.
                    @if($trustNote)
                        {{ $trustNote }}
                    @endif
                </p>

            </div>

            {{-- Right card: page-specific product detail --}}
            <div class="border-t-4 border-azure bg-linen-light shadow-md p-8">

                <div class="inline-block mb-6">
                    <h2 class="text-h2 font-bold text-charcoal mb-2">
                        {{ $seoQualifier }} <span class="text-sunburst">{{ $displayServiceType }}</span> in {{ $titleCity }}, Same Day
                    </h2>
                    <div class="h-1 bg-sunburst"></div>
                </div>

                @if($productIntro)
                    <p class="text-body-sm text-charcoal leading-relaxed mb-4">{!! $productIntro !!}</p>
                @endif

                @if($crossSell)
                    <p class="text-body-sm text-charcoal leading-relaxed">{!! $crossSell !!}</p>
                @endif

            </div>

        </div>

        {{-- Full-width service area row --}}
        @if($showServiceArea)
            <div class="mt-6 text-center">
                <p class="text-sm text-charcoal-light leading-relaxed">
                    Serving
                    @foreach($allCities as $city)
                        <a href="/service-areas/{{ Str::slug($city . '-IL') }}" class="link-inline">{{ $city }}</a>@if(!$loop->last), @endif
                    @endforeach
                    and the greater Chicagoland area.
                    Call us at <a href="tel:{{ $phoneRaw }}" class="link-notification">{{ $phone }}</a>.
                </p>
            </div>
        @endif

    </div>
</section>
