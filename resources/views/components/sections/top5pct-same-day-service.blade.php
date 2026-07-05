@props([
    'displayServiceType' => 'Custom Signage & Apparel',
    'productIntro'       => '',
    'crossSell'          => '',
    'reviewCount'        => '200+',
    'trustNote'          => '',
    'seoQualifier'       => 'Best',
    'seoCity'            => '',
    'showServiceArea'    => false,
    'pageKey'            => '',
])

@php
    use App\Data\PrimaryLocations;
    use App\Data\BusinessIdentity;
    use App\Data\ProductIntros;
    use Illuminate\Support\Str;

    $phone           = BusinessIdentity::PHONE;
    $phoneRaw        = BusinessIdentity::PHONE_RAW;
    $year            = BusinessIdentity::YEAR_INCORPORATED;
    $hqCity          = PrimaryLocations::HQ['city'];
    $primaryCities   = PrimaryLocations::primaryCityNames();
    $secondaryCities = PrimaryLocations::secondaryCityNames();
    $allCities       = array_merge([$hqCity], $primaryCities, $secondaryCities);
    $titleCity       = $seoCity ?: $hqCity;
    $introText       = $pageKey ? ProductIntros::get($pageKey) : $productIntro;
@endphp

<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="border-t-4 border-sunburst bg-white shadow-md p-8">

            <div class="inline-block mb-6">
                <h2 class="text-h2 font-bold text-charcoal mb-2">
                    The <span class="text-sunburst">Top 5 Percent</span> Difference, {{ $seoQualifier }} <span class="text-sunburst">{{ $displayServiceType }}</span> in {{ $titleCity }} and surrounding area, Same Day
                </h2>
                <div class="h-1 bg-sunburst"></div>
            </div>

            @if($introText)
                <p class="text-body-sm text-charcoal leading-relaxed mb-4">{!! $introText !!}</p>
            @endif

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

            @if($crossSell)
                <p class="text-body-sm text-charcoal leading-relaxed">{!! $crossSell !!}</p>
            @endif

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
