<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'duration',
        'location',
        'starting_price',
        'min_pax',
        'rating',
        'reviews_count',
        'highlight_badges',
        'cover_image',
        'short_description',
        'full_description',
        'inclusions',
        'exclusions',
        'is_featured',
    ];

    protected $casts = [
        'highlight_badges' => 'array',
        'inclusions' => 'array',
        'exclusions' => 'array',
        'is_featured' => 'boolean',
        'starting_price' => 'decimal:2',
        'rating' => 'decimal:2',
    ];

    public function itineraries()
    {
        return $this->hasMany(TourItinerary::class)->orderBy('day_number', 'asc');
    }

    public function galleries()
    {
        return $this->hasMany(TourGallery::class);
    }
}
