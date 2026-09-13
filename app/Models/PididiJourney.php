<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PididiJourney extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'tagline',
        'theme',
        'min_pax',
        'max_pax',
        'price',
        'duration',
        'batch_schedule_info',
        'principles_content',
        'journey_book_info',
        'voucher_info',
        'is_active',
    ];

    protected $casts = [
        'principles_content' => 'array',
        'is_active' => 'boolean',
        'price' => 'decimal:2',
    ];
}
