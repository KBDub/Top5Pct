# config/client-service-areas.php — Specification

## CRITICAL: Source of Truth Rules

**`App\Data\PrimaryLocations` is the one and only source of truth for city data.**
**`config/client.php` is for business identity only (name, phone, address, logo, colors).**
**`config/client-service-areas.php` is a blade-layer read-only wrapper — it never duplicates data.**

City lists, priority tiers, lat/lng, slugs, and zip codes all live in `App\Data\PrimaryLocations`. The config file wraps that class so blade components can read from `config()` without importing a PHP class directly. If a city needs to be added, changed, or reclassified, the change goes into `App\Data\PrimaryLocations` only — it flows automatically into the config and every component.

---

## Purpose

A thin Laravel config wrapper that exposes `App\Data\PrimaryLocations` data to blade components via `config()` calls, along with static prose strings (service area sentences) that components render directly. It is NOT an independent data store — it is a read-only projection of `App\Data\PrimaryLocations`.

---

## Relationship to App\Data\PrimaryLocations

`App\Data\PrimaryLocations` is the canonical data class. Nothing overrides it. `config/client-service-areas.php` reads from it at config-load time and re-exposes the data in a blade-friendly shape. `config/client.php` plays no role in city or service area data — it covers business identity only.

`PrimaryLocations` defines the canonical city data in three tiers:

| Tier | Count | Used for |
|---|---|---|
| `HQ` | 1 (Joliet) | Headquarters marker, map pin, address |
| `PRIMARY` | 20 cities | High-priority service area pages, map primary ring |
| `SECONDARY` | 20 cities | Extended reach pages, map secondary ring |

The new `config/client-service-areas.php` **wraps** `PrimaryLocations` rather than duplicating it. It adds:
- A unified flat list with a `priority` field per city
- Prose strings for components to render directly
- Short display lists for inline use in headings and copy

---

## Answer: Does Priority Differentiation Already Exist?

**Yes.** `App\Data\PrimaryLocations` already has a clean three-tier split:

- `PrimaryLocations::HQ` — Joliet headquarters
- `PrimaryLocations::PRIMARY` — 20 primary service cities
- `PrimaryLocations::SECONDARY` — 20 secondary service cities

Helper methods already built: `primaryCityNames()`, `secondaryCityNames()`, `allCityNames()`, `forMap()`, `all()`, `zips()`.

The config file consolidates this into a format that blade components can consume without importing a PHP class directly.

---

## Proposed Config Structure

```php
<?php
// config/client-service-areas.php

use App\Data\PrimaryLocations;

$hq = array_merge(PrimaryLocations::HQ, [
    'priority' => 'hq',
    'slug'     => 'joliet-il',
]);

$primary = array_map(fn ($c) => array_merge($c, [
    'priority' => 'primary',
    'slug'     => \Illuminate\Support\Str::slug($c['city'] . '-il'),
]), PrimaryLocations::PRIMARY);

$secondary = array_map(fn ($c) => array_merge($c, [
    'priority' => 'secondary',
    'slug'     => \Illuminate\Support\Str::slug($c['city'] . '-il'),
]), PrimaryLocations::SECONDARY);

// Sorted combined list (HQ always first)
$all = array_merge([$hq], $primary, $secondary);

return [

    /*
    |--------------------------------------------------------------------------
    | Full City List (unified, with priority flag)
    |--------------------------------------------------------------------------
    | Each entry: city, state, lat, lng, priority ('hq'|'primary'|'secondary'), slug
    |
    */
    'cities' => $all,

    /*
    |--------------------------------------------------------------------------
    | HQ City
    |--------------------------------------------------------------------------
    */
    'hq_city'       => 'Joliet',
    'hq_state'      => 'IL',
    'hq_zip'        => '60435',

    /*
    |--------------------------------------------------------------------------
    | Short Display Lists (for inline copy and headings)
    |--------------------------------------------------------------------------
    | priority_cities  — HQ + PRIMARY names, alphabetical (used in headings)
    | all_city_names   — full sorted list (used in footer, SEO copy)
    |
    */
    'priority_city_names' => array_merge(
        ['Joliet'],
        \Illuminate\Support\Collection::make(PrimaryLocations::PRIMARY)
            ->pluck('city')->sort()->values()->all()
    ),

    'all_city_names' => \Illuminate\Support\Collection::make(
        array_merge(PrimaryLocations::PRIMARY, PrimaryLocations::SECONDARY)
    )->pluck('city')->sort()->prepend('Joliet')->values()->all(),

    /*
    |--------------------------------------------------------------------------
    | Prose Strings for Components
    |--------------------------------------------------------------------------
    | Used in: page-intro service area line, footer, SEO meta, etc.
    |
    */

    // One-line — used in page-intro and footer compact areas
    'service_area_line' =>
        'Serving Joliet, Shorewood, Plainfield, Bolingbrook, Romeoville, Lockport, ' .
        'Channahon, Crest Hill, Naperville, Aurora, and the greater Chicagoland area.',

    // Two-line — used in about, service area index page, and JSON-LD
    'service_area_description' =>
        'Top 5 Percent serves businesses and residents throughout the greater Joliet ' .
        'and Chicagoland area, including Will County, DuPage County, Kane County, and ' .
        'the surrounding region. We ship and deliver across Illinois.',

    // Compact comma list — used in SEO meta descriptions
    'service_area_compact' =>
        'Joliet, Shorewood, Plainfield, Bolingbrook, Romeoville, Lockport, Channahon, ' .
        'Crest Hill, Naperville, and Aurora, IL',

    /*
    |--------------------------------------------------------------------------
    | Zip Codes
    |--------------------------------------------------------------------------
    */
    'zips' => PrimaryLocations::ZIPS,

];
```

---

## Each City Entry Shape

```php
[
    'city'     => 'Shorewood',
    'state'    => 'IL',
    'lat'      => 41.5209,
    'lng'      => -88.2017,
    'priority' => 'secondary',   // 'hq' | 'primary' | 'secondary'
    'slug'     => 'shorewood-il',
]
```

---

## How Components Read It

```blade
{{-- Service area line in page-intro --}}
{{ config('client-service-areas.service_area_line') }}

{{-- Phone (from config/client.php) --}}
<a href="tel:{{ config('client.phone_raw') }}" class="link-notification">
    {{ config('client.phone') }}
</a>

{{-- Checking if a city is priority --}}
@php
    $cities = collect(config('client-service-areas.cities'));
    $primaryCities = $cities->where('priority', 'primary')->pluck('city');
@endphp

{{-- Comma list for footer or heading copy --}}
{{ implode(', ', config('client-service-areas.priority_city_names')) }}
```

---

## Why Not Duplicate the Data?

`PrimaryLocations` is already used by:
- `/service-areas/{slug}` route (resolves city by slug)
- The map section (lat/lng for Google Maps pins)
- `primaryCityNames()` and `secondaryCityNames()` helpers

Duplicating the city list in config creates two sources of truth. Wrapping it in config means a city added to `PrimaryLocations::PRIMARY` automatically appears in all component outputs with no other changes.

---

## Build Notes

1. This file belongs at `config/client-service-areas.php`.
2. Laravel's config system supports importing PHP classes at config load time — no issues with autoloading order.
3. The file uses `Str::slug()` so `use Illuminate\Support\Str;` must be at the top, or use the full class path inside the closures.
4. `config('client-service-areas.cities')` returns the full array — use `collect()` to filter by priority in blade.
5. The prose strings (`service_area_line`, `service_area_description`, `service_area_compact`) are static — update them here when service area footprint changes. Do not hardcode them anywhere else.

---

## Files That Should Read From This Config After Build

| Component | Current state | Prop/key to use |
|---|---|---|
| `x-sections.page-intro` | New component | `service_area_line` |
| `x-sections.top5pct-same-day-service` | Being replaced | n/a |
| `x-components.layout.footer` | Hardcodes "Joliet, IL" | `service_area_line` or `hq_city` |
| `x-sections.map-section` | Hardcodes city name | `hq_city` |
| `x-sections.cta-ready-to-get-started` | Hardcodes "Joliet" | `hq_city` |
| `x-sections.category-hero` | Hardcodes "Joliet, IL" | `hq_city`, `hq_state` |
| `x-sections.represent-yourself` | Hardcodes city list | `service_area_line` |
| `x-sections.about-preview` | Hardcodes "Joliet, IL" | `hq_city` |
| JSON-LD structured data | Hardcodes address | `hq_city`, `hq_zip` |
