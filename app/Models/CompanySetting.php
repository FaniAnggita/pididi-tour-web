<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanySetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'nib',
        'npwp',
        'bank_name',
        'bank_account_number',
        'bank_account_holder',
        'office_address',
        'operational_hours',
        'phone_wa',
        'email',
        'google_maps_iframe',
        'tagline',
        'bio',
        'logo_path',

        // Bespoke Trip Pricing Rates
        'bespoke_rate_homestay',
        'bespoke_rate_hotel3',
        'bespoke_rate_resort',
        'bespoke_mult_bali',
        'bespoke_mult_bajo',
        'bespoke_mult_jogja',
        'bespoke_mult_toraja',
        'bespoke_mult_rajaampat',
        'bespoke_mult_custom',
        'bespoke_min_pax_discount',
        'bespoke_discount_percent',
    ];
}
