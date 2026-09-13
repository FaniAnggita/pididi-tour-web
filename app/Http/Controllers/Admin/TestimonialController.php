<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'guest_name' => 'required|string|max:255',
            'city' => 'nullable|string|max:255',
            'avatar_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'avatar_url' => 'nullable|string',
            'package_name' => 'nullable|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'content' => 'required|string',
            'trip_date' => 'nullable|string|max:255',
            'is_verified' => 'nullable|boolean',
        ]);

        $avatarPath = 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80';
        if ($request->hasFile('avatar_file')) {
            $path = $request->file('avatar_file')->store('avatars', 'public');
            $avatarPath = 'storage/' . $path;
        } elseif (!empty($request->avatar_url)) {
            $avatarPath = $request->avatar_url;
        }

        Testimonial::create([
            'guest_name' => $validated['guest_name'],
            'city' => $validated['city'],
            'avatar_url' => $avatarPath,
            'package_name' => $validated['package_name'],
            'rating' => $validated['rating'],
            'content' => $validated['content'],
            'trip_date' => $validated['trip_date'],
            'is_verified' => $request->has('is_verified'),
        ]);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimoni tamu berhasil ditambahkan!');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'guest_name' => 'required|string|max:255',
            'city' => 'nullable|string|max:255',
            'avatar_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'avatar_url' => 'nullable|string',
            'package_name' => 'nullable|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'content' => 'required|string',
            'trip_date' => 'nullable|string|max:255',
            'is_verified' => 'nullable|boolean',
        ]);

        $avatarPath = $testimonial->avatar_url;
        if ($request->hasFile('avatar_file')) {
            $path = $request->file('avatar_file')->store('avatars', 'public');
            $avatarPath = 'storage/' . $path;
        } elseif (!empty($request->avatar_url)) {
            $avatarPath = $request->avatar_url;
        }

        $testimonial->update([
            'guest_name' => $validated['guest_name'],
            'city' => $validated['city'],
            'avatar_url' => $avatarPath,
            'package_name' => $validated['package_name'],
            'rating' => $validated['rating'],
            'content' => $validated['content'],
            'trip_date' => $validated['trip_date'],
            'is_verified' => $request->has('is_verified'),
        ]);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimoni tamu berhasil diperbarui!');
    }


    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimoni berhasil dihapus!');
    }
}
