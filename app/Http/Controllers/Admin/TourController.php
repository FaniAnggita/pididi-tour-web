<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\TourCategory;
use App\Models\TourItinerary;
use App\Models\TourGallery;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::latest()->paginate(10);
        return view('admin.tours.index', compact('tours'));
    }

    public function create()
    {
        $categories = TourCategory::all();
        return view('admin.tours.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Handle quick inline new category if submitted
        $categorySlug = $request->input('category');
        if ($request->filled('new_category_name')) {
            $newCat = TourCategory::firstOrCreate(
                ['name' => $request->new_category_name],
                [
                    'slug' => Str::slug($request->new_category_name),
                    'icon' => '✨',
                ]
            );
            $categorySlug = $newCat->slug;
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'duration' => 'required|string',
            'location' => 'required|string',
            'starting_price' => 'required|numeric',
            'min_pax' => 'required|integer',
            'rating' => 'required|numeric',
            'reviews_count' => 'required|integer',
            'cover_image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'cover_image_url' => 'nullable|string',
            'short_description' => 'required|string',
            'full_description' => 'nullable|string',
            'badges' => 'nullable|string',
            'inclusions' => 'nullable|string',
            'exclusions' => 'nullable|string',
            'is_featured' => 'nullable|boolean',
        ]);

        $coverImagePath = 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=800&q=80';
        if ($request->hasFile('cover_image_file')) {
            $path = $request->file('cover_image_file')->store('tours', 'public');
            $coverImagePath = 'storage/' . $path;
        } elseif (!empty($request->cover_image_url)) {
            $coverImagePath = $request->cover_image_url;
        }

        $badgesArray = array_map('trim', explode(',', $request->input('badges', '')));
        $inclusionsArray = array_filter(array_map('trim', explode("\n", $request->input('inclusions', ''))));
        $exclusionsArray = array_filter(array_map('trim', explode("\n", $request->input('exclusions', ''))));

        $tour = Tour::create([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']) . '-' . rand(100, 999),
            'category' => $categorySlug,
            'duration' => $validated['duration'],
            'location' => $validated['location'],
            'starting_price' => $validated['starting_price'],
            'min_pax' => $validated['min_pax'],
            'rating' => $validated['rating'],
            'reviews_count' => $validated['reviews_count'],
            'highlight_badges' => array_values(array_filter($badgesArray)),
            'cover_image' => $coverImagePath,
            'short_description' => $validated['short_description'],
            'full_description' => $validated['full_description'] ?? $validated['short_description'],
            'inclusions' => array_values($inclusionsArray),
            'exclusions' => array_values($exclusionsArray),
            'is_featured' => $request->has('is_featured'),
        ]);

        if ($tour->cover_image) {
            TourGallery::create([
                'tour_id' => $tour->id,
                'image_url' => $tour->cover_image,
                'caption' => $tour->title,
            ]);
        }

        return redirect()->route('admin.tours.edit', $tour->id)->with('success', 'Paket Wisata berhasil dibuat! Silakan tambahkan itinerari harian & galeri foto.');
    }

    public function edit(Tour $tour)
    {
        $tour->load(['itineraries', 'galleries']);
        $categories = TourCategory::all();
        return view('admin.tours.edit', compact('tour', 'categories'));
    }

    public function update(Request $request, Tour $tour)
    {
        $categorySlug = $request->input('category');
        if ($request->filled('new_category_name')) {
            $newCat = TourCategory::firstOrCreate(
                ['name' => $request->new_category_name],
                [
                    'slug' => Str::slug($request->new_category_name),
                    'icon' => '✨',
                ]
            );
            $categorySlug = $newCat->slug;
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'duration' => 'required|string',
            'location' => 'required|string',
            'starting_price' => 'required|numeric',
            'min_pax' => 'required|integer',
            'rating' => 'required|numeric',
            'reviews_count' => 'required|integer',
            'cover_image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'cover_image_url' => 'nullable|string',
            'short_description' => 'required|string',
            'full_description' => 'nullable|string',
            'badges' => 'nullable|string',
            'inclusions' => 'nullable|string',
            'exclusions' => 'nullable|string',
            'is_featured' => 'nullable|boolean',
        ]);

        $coverImagePath = $tour->cover_image;
        if ($request->hasFile('cover_image_file')) {
            $path = $request->file('cover_image_file')->store('tours', 'public');
            $coverImagePath = 'storage/' . $path;
        } elseif (!empty($request->cover_image_url)) {
            $coverImagePath = $request->cover_image_url;
        }

        $badgesArray = array_map('trim', explode(',', $request->input('badges', '')));
        $inclusionsArray = array_filter(array_map('trim', explode("\n", $request->input('inclusions', ''))));
        $exclusionsArray = array_filter(array_map('trim', explode("\n", $request->input('exclusions', ''))));

        $tour->update([
            'title' => $validated['title'],
            'category' => $categorySlug,
            'duration' => $validated['duration'],
            'location' => $validated['location'],
            'starting_price' => $validated['starting_price'],
            'min_pax' => $validated['min_pax'],
            'rating' => $validated['rating'],
            'reviews_count' => $validated['reviews_count'],
            'highlight_badges' => array_values(array_filter($badgesArray)),
            'cover_image' => $coverImagePath,
            'short_description' => $validated['short_description'],
            'full_description' => $validated['full_description'],
            'inclusions' => array_values($inclusionsArray),
            'exclusions' => array_values($exclusionsArray),
            'is_featured' => $request->has('is_featured'),
        ]);

        return redirect()->back()->with('success', 'Paket Wisata berhasil diperbarui!');
    }


    public function destroy(Tour $tour)
    {
        $tour->delete();
        return redirect()->route('admin.tours.index')->with('success', 'Paket Wisata berhasil dihapus!');
    }

    // Itinerary Management
    public function storeItinerary(Request $request, Tour $tour)
    {
        $request->validate([
            'day_number' => 'required|integer',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        TourItinerary::create([
            'tour_id' => $tour->id,
            'day_number' => $request->day_number,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Itinerari harian berhasil ditambahkan!');
    }

    public function destroyItinerary(TourItinerary $itinerary)
    {
        $itinerary->delete();
        return redirect()->back()->with('success', 'Itinerari berhasil dihapus!');
    }

    // Gallery Management (Support File Upload & URL)
    public function storeGallery(Request $request, Tour $tour)
    {
        $request->validate([
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'image_url' => 'nullable|string',
            'caption' => 'nullable|string',
        ]);

        $imageUrl = null;
        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('galleries', 'public');
            $imageUrl = 'storage/' . $path;
        } elseif (!empty($request->image_url)) {
            $imageUrl = $request->image_url;
        }

        if (!$imageUrl) {
            return redirect()->back()->with('error', 'Silakan unggah foto lokal atau masukkan URL foto.');
        }

        TourGallery::create([
            'tour_id' => $tour->id,
            'image_url' => $imageUrl,
            'caption' => $request->caption,
        ]);

        return redirect()->back()->with('success', 'Foto galeri berhasil ditambahkan!');
    }


    public function destroyGallery(TourGallery $gallery)
    {
        $gallery->delete();
        return redirect()->back()->with('success', 'Foto galeri berhasil dihapus!');
    }
}
