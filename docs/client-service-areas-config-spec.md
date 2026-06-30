# Service Area Data — Architecture Decision

## Final Architecture

| What | Where | Notes |
|---|---|---|
| City data (HQ, PRIMARY, SECONDARY, ZIPS, helpers) | `App\Data\PrimaryLocations` | Single source of truth — never duplicated |
| Prose string methods (service area sentences) | `App\Data\PrimaryLocations` | Generated from city arrays — no hardcoding |
| Business identity (name, phone, address, logo, colors, flags) | `App\Data\BusinessIdentity` | Replaces `config/client.php` entirely |
| `config/client.php` | **Deleted** | All consumers updated to use `App\Data\` |

No config file. No intermediate wrapper. No separate prose class.

---

## CRITICAL: Source of Truth Rules

**`App\Data\PrimaryLocations` is the one and only source of truth for city and service area data.**
**`App\Data\BusinessIdentity` is the one and only source of truth for business identity data.**
**`config/client.php` is deleted — never recreate it or reference it.**

If a city needs to be added, changed, or reclassified, the only file to touch is
`App\Data\PrimaryLocations`. If a phone number, address, or brand color changes, the only
file to touch is `App\Data\BusinessIdentity`.

---

## App\Data\PrimaryLocations — Additions Required

The existing class already has `HQ`, `PRIMARY`, `SECONDARY`, `ZIPS`, and helpers.
The following static methods need to be added — all generated from the existing city arrays,
no hardcoded city names:

```php
/**
 * Full service area sentence for use in page intros, footers, and SEO copy.
 * Lists HQ first, then all primary and secondary cities alphabetically.
 * Generated from city arrays — never hardcode city names.
 */
public static function serviceAreaLine(): string
{
    $cities = self::allCityNames(); // already sorted, HQ first
    $last   = array_pop($cities);
    return 'Serving ' . implode(', ', $cities) . ', and ' . $last . ', IL.';
}

/**
 * Two-sentence description for about pages, service area index, and JSON-LD.
 */
public static function serviceAreaDescription(): string
{
    $count = count(self::PRIMARY) + count(self::SECONDARY) + 1; // +1 for HQ
    return 'Top 5 Percent serves businesses and residents across ' . $count . ' cities in the '
         . 'greater Joliet and Chicagoland area, including Will County, DuPage County, '
         . 'Kane County, and the surrounding region. We ship and deliver across Illinois.';
}

/**
 * Compact comma list for SEO meta descriptions.
 * HQ + first 8 primary cities + "and more".
 */
public static function serviceAreaCompact(): string
{
    $primary = self::primaryCityNames();
    $sample  = array_slice($primary, 0, 8);
    return self::HQ['city'] . ', ' . implode(', ', $sample) . ', and more throughout Illinois';
}
```

These methods read from `self::PRIMARY`, `self::SECONDARY`, `self::HQ`, and `self::allCityNames()`.
No city name appears twice in the class.

---

## App\Data\BusinessIdentity — New Class Spec

Replaces all keys in `config/client.php`. Same constant-and-method pattern as `PrimaryLocations`.

```php
<?php

namespace App\Data;

class BusinessIdentity
{
    const NAME             = 'Top 5 Percent, LLC';
    const TAGLINE          = 'Exceptional Service, Exceptional Customer Satisfaction';

    const PHONE            = '(815) 349-8600';
    const PHONE_ALT        = '(815) 349-TOP5';
    const PHONE_RAW        = '+18153498600';
    const EMAIL            = '';

    const ADDRESS = [
        'street'     => '121 Springfield Avenue',
        'street2'    => 'Unit 110',
        'city'       => 'Joliet',
        'state'      => 'Illinois',
        'state_abbr' => 'IL',
        'zip'        => '60435',
    ];

    const YEAR_INCORPORATED = 2017;

    const LOGO = [
        'url'    => '/images/logos/top5-logo.gif',
        'alt'    => 'Top 5 Percent',
        'width'  => 300,
        'height' => 50,
    ];

    const OPERATING_HOURS = [
        'Monday'    => '',
        'Tuesday'   => '',
        'Wednesday' => '',
        'Thursday'  => '',
        'Friday'    => '',
        'Saturday'  => '',
        'Sunday'    => '',
    ];

    const PRODUCT_GRID_ENABLED = false;

    const PRIMARY_COLOR   = '#FFC20E';
    const SECONDARY_COLOR = '#3273DC';

    const COLOR_PALETTE = [
        'olive'         => '#A39822',
        'sunburst_gold' => '#FFC20E',
        'azure_blue'    => '#3273DC',
        'soft_linen'    => '#F2F0E6',
        'charcoal'      => '#2C2C2C',
        'white'         => '#FFFFFF',
    ];

    const CERTIFICATIONS        = [];
    const ASSOCIATIONS          = [];
    const CHAMBER_ASSOCIATIONS  = [];
    const LICENSE_NUMBER        = '';
    const LICENSE_DISPLAY       = false;
}
```

---

## The Established Blade Pattern (Updated)

```blade
@php
    use App\Data\PrimaryLocations;
    use App\Data\BusinessIdentity;

    $hqCity          = PrimaryLocations::HQ['city'];
    $allCities       = PrimaryLocations::allCityNames();
    $serviceAreaLine = PrimaryLocations::serviceAreaLine();

    $phone    = BusinessIdentity::PHONE;
    $phoneRaw = BusinessIdentity::PHONE_RAW;
    $year     = BusinessIdentity::YEAR_INCORPORATED;
@endphp
```

---

## config/client.php Migration Map

Every `config('client.*')` call in the codebase is replaced as follows:

| Old key | New reference |
|---|---|
| `config('client.business_name')` | `BusinessIdentity::NAME` |
| `config('client.tagline')` | `BusinessIdentity::TAGLINE` |
| `config('client.phone')` | `BusinessIdentity::PHONE` |
| `config('client.phone_alt')` | `BusinessIdentity::PHONE_ALT` |
| `config('client.phone_raw')` | `BusinessIdentity::PHONE_RAW` |
| `config('client.email')` | `BusinessIdentity::EMAIL` |
| `config('client.address')` | `BusinessIdentity::ADDRESS` |
| `config('client.address.city')` | `BusinessIdentity::ADDRESS['city']` |
| `config('client.year_incorporated')` | `BusinessIdentity::YEAR_INCORPORATED` |
| `config('client.logo')` | `BusinessIdentity::LOGO` |
| `config('client.logo.url')` | `BusinessIdentity::LOGO['url']` |
| `config('client.product_grid_enabled')` | `BusinessIdentity::PRODUCT_GRID_ENABLED` |
| `config('client.primary_color')` | `BusinessIdentity::PRIMARY_COLOR` |
| `config('client.color_palette')` | `BusinessIdentity::COLOR_PALETTE` |
| `config('client.service_areas')` | `PrimaryLocations::allCityNames()` |
| `config('client.priority_service_areas')` | `PrimaryLocations::primaryCityNames()` |
| `config('client.service_areas_description')` | `PrimaryLocations::serviceAreaDescription()` |
| `config('client.service_area_slugs')` | Derived from `PrimaryLocations::all()` |

---

## Files That Currently Hardcode City Names (Migration Backlog)

These are a separate task from the `config/client.php` removal.

| Component | Hardcoded value | Replacement |
|---|---|---|
| `x-components.layout.footer` | "Joliet, IL" | `PrimaryLocations::HQ['city']` |
| `x-sections.cta-ready-to-get-started` | "Joliet" | `PrimaryLocations::HQ['city']` |
| `x-sections.category-hero` | "Joliet, IL" | `PrimaryLocations::HQ['city']` |
| `x-sections.represent-yourself` | city list sentence | `PrimaryLocations::serviceAreaLine()` |
| `x-sections.about-preview` | "Joliet, IL" | `PrimaryLocations::HQ['city']` |
| JSON-LD structured data | address | `PrimaryLocations::HQ['city']`, `BusinessIdentity::ADDRESS` |
| (+ others) | various | per component audit |

---

## Build Order

1. Add `serviceAreaLine()`, `serviceAreaDescription()`, `serviceAreaCompact()` to `App\Data\PrimaryLocations`
2. Create `App\Data\BusinessIdentity` with all constants from `config/client.php`
3. Find and replace all `config('client.*')` usages — use the migration map above
4. Delete `config/client.php`
5. Build `x-sections.page-intro` (reads `PrimaryLocations` and `BusinessIdentity` directly)
6. (Separate task) Migrate the hardcoded-city components listed above
