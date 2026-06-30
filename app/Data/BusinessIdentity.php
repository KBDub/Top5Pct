<?php

declare(strict_types=1);

namespace App\Data;

class BusinessIdentity
{
    const NAME    = 'Top 5 Percent, LLC';
    const TAGLINE = 'Exceptional Service, Exceptional Customer Satisfaction';

    const PHONE     = '(815) 349-8600';
    const PHONE_ALT = '(815) 349-TOP5';
    const PHONE_RAW = '+18153498600';
    const EMAIL     = '';

    const ADDRESS = [
        'street'     => '121 Springfield Avenue',
        'street2'    => 'Unit 110',
        'city'       => 'Joliet',
        'state'      => 'Illinois',
        'state_abbr' => 'IL',
        'zip'        => '60435',
    ];

    const YEAR_INCORPORATED = 2017;
    const LICENSE_NUMBER    = '';
    const LICENSE_DISPLAY   = false;

    const CERTIFICATIONS       = [];
    const ASSOCIATIONS         = [];
    const CHAMBER_ASSOCIATIONS = [];

    const PRODUCT_GRID_ENABLED = false;

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
}
