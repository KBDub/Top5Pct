# Service Area Data — Architecture Decision

## Answer: Do We Need config/client-service-areas.php?

**No. The config file is not needed.**

The codebase already has an established pattern: blade components import `App\Data\PrimaryLocations`
directly via a `@php` block and call its static methods. Three existing components already do this:

| File | Uses |
|---|---|
| `resources/views/components/sections/map-section.blade.php` | `PrimaryLocations::forMap()`, `primaryCityNames()`, `secondaryCityNames()`, `HQ['city']`, `zips()` |
| `resources/views/pages/service-areas.blade.php` | `PrimaryLocations::HQ`, `PRIMARY`, `SECONDARY` |
| `resources/views/sitemaps/sitemap.blade.php` | `PrimaryLocations::all()` |

New components, including `x-sections.page-intro`, follow the same pattern.

---

## CRITICAL: Source of Truth Rules

**`App\Data\PrimaryLocations` is the one and only source of truth for city data.**
**`config/client.php` is for business identity only (name, phone, address, logo, colors).**
**Never store city lists, priority tiers, lat/lng, slugs, or zip codes anywhere else.**

If a city needs to be added, changed, or reclassified, the only file to touch is
`App\Data\PrimaryLocations`. Every blade component that reads from it updates automatically.

---

## The Established Blade Pattern

```blade
@php
    use App\Data\PrimaryLocations;

    $primaryCities   = PrimaryLocations::primaryCityNames();
    $secondaryCities = PrimaryLocations::secondaryCityNames();
    $hqCity          = PrimaryLocations::HQ['city'];
    $allCities       = PrimaryLocations::allCityNames();
    $zips            = PrimaryLocations::zips();
@endphp
```

No `config()` calls. No imports of city data from anywhere else.

---

## What PrimaryLocations Already Provides

| Method / Constant | Returns | Used by |
|---|---|---|
| `PrimaryLocations::HQ` | Array — Joliet, lat, lng, `main: true` | `map-section`, `service-areas` |
| `PrimaryLocations::PRIMARY` | Array of 20 primary city arrays | `service-areas` |
| `PrimaryLocations::SECONDARY` | Array of 20 secondary city arrays | `service-areas` |
| `PrimaryLocations::ZIPS` | Array of all served zip codes | `map-section` |
| `::all()` | HQ + PRIMARY + SECONDARY sorted | `sitemap` |
| `::forMap()` | All cities with slug added | `map-section` |
| `::primaryCityNames()` | Sorted array of PRIMARY city name strings | `map-section` |
| `::secondaryCityNames()` | Sorted array of SECONDARY city name strings | `map-section` |
| `::allCityNames()` | HQ + all city names sorted | Available, no blade consumer yet |
| `::zips()` | All served zip codes | `map-section` |

---

## The One Gap: Prose Strings

`PrimaryLocations` covers all city data but has no prose strings — the one-line service area
sentence, the short description, and the compact city list that components like `page-intro`
need to render inline. Two options:

### Option A — Add static methods to PrimaryLocations

```php
// App\Data\PrimaryLocations

public static function serviceAreaLine(): string
{
    return 'Serving Joliet, Shorewood, Plainfield, Bolingbrook, Romeoville, Lockport, ' .
           'Channahon, Crest Hill, Naperville, Aurora, and the greater Chicagoland area.';
}

public static function serviceAreaDescription(): string
{
    return 'Top 5 Percent serves businesses and residents throughout the greater Joliet ' .
           'and Chicagoland area, including Will County, DuPage County, Kane County, and ' .
           'the surrounding region. We ship and deliver across Illinois.';
}

public static function serviceAreaCompact(): string
{
    return 'Joliet, Shorewood, Plainfield, Bolingbrook, Romeoville, Lockport, Channahon, ' .
           'Crest Hill, Naperville, and Aurora, IL';
}
```

Blade usage:

```blade
{{ App\Data\PrimaryLocations::serviceAreaLine() }}
```

Simpler — one class, one place to edit. Slightly mixes "data" with "copy."

### Option B — New App\Data\ServiceAreaCopy class

```php
// App\Data\ServiceAreaCopy

namespace App\Data;

class ServiceAreaCopy
{
    public static function line(): string
    {
        return 'Serving Joliet, Shorewood, Plainfield, Bolingbrook, Romeoville, Lockport, ' .
               'Channahon, Crest Hill, Naperville, Aurora, and the greater Chicagoland area.';
    }

    public static function description(): string { ... }

    public static function compact(): string { ... }
}
```

Blade usage:

```blade
@php
    use App\Data\PrimaryLocations;
    use App\Data\ServiceAreaCopy;

    $hqCity          = PrimaryLocations::HQ['city'];
    $serviceAreaLine = ServiceAreaCopy::line();
@endphp
```

Cleaner separation of concerns. One extra file.

---

## Recommendation

**Option B** if `PrimaryLocations` should stay a pure data class.
**Option A** if simplicity matters more than strict separation — it is what already works in this codebase.

Either way, no config file is needed.

---

## Files That Currently Hardcode City Names (Migration Backlog)

21 components hardcode "Joliet" or a city list inline. These are a separate migration task.
After the prose methods exist on `App\Data\PrimaryLocations` (or `ServiceAreaCopy`), each
component replaces its hardcoded string with a static method call.

| Component | Hardcoded value | Replacement call |
|---|---|---|
| `x-components.layout.footer` | "Joliet, IL" | `PrimaryLocations::HQ['city']` |
| `x-sections.map-section` | city names | already uses PrimaryLocations |
| `x-sections.cta-ready-to-get-started` | "Joliet" | `PrimaryLocations::HQ['city']` |
| `x-sections.category-hero` | "Joliet, IL" | `PrimaryLocations::HQ['city']` |
| `x-sections.represent-yourself` | city list sentence | `ServiceAreaCopy::line()` |
| `x-sections.about-preview` | "Joliet, IL" | `PrimaryLocations::HQ['city']` |
| JSON-LD structured data | address | `PrimaryLocations::HQ['city']` |
| (+ 14 more) | various | per component |
