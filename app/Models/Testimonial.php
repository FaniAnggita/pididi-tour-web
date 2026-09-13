<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest_name',
        'city',
        'avatar_url',
        'package_name',
        'rating',
        'content',
        'is_verified',
        'trip_date',
    ];

    protected $casts = [
        'is_verified' => 'boolean',
    ];
}
