<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::orderBy('sort_order')->orderBy('id')->get();
        return view('admin.destinations.index', compact('destinations'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:destinations,slug',
            'multiplier' => 'required|numeric|min:0.1',
            'description' => 'nullable|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'image_path' => 'nullable|string|max:255',
            'is_active' => 'nullable|boolean',
            'sort_order' => 'nullable|integer',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        } else {
            $validated['slug'] = Str::slug($validated['slug']);
        }

        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('destinations', 'public');
            $validated['image_path'] = 'storage/' . $path;
        }

        $validated['is_active'] = $request->has('is_active') ? true : false;
        $validated['sort_order'] = $request->input('sort_order', 0);

        Destination::create($validated);

        return redirect()->back()->with('success', 'Destinasi wisata baru berhasil ditambahkan!');
    }

    public function update(Request $request, Destination $destination)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:destinations,slug,' . $destination->id,
            'multiplier' => 'required|numeric|min:0.1',
            'description' => 'nullable|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'image_path' => 'nullable|string|max:255',
            'is_active' => 'nullable|boolean',
            'sort_order' => 'nullable|integer',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        } else {
            $validated['slug'] = Str::slug($validated['slug']);
        }

        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('destinations', 'public');
            $validated['image_path'] = 'storage/' . $path;
        }

        $validated['is_active'] = $request->has('is_active') ? true : false;
        $validated['sort_order'] = $request->input('sort_order', 0);

        $destination->update($validated);

        return redirect()->back()->with('success', 'Data destinasi wisata berhasil diperbarui!');
    }

    public function destroy(Destination $destination)
    {
        $destination->delete();
        return redirect()->back()->with('success', 'Destinasi wisata berhasil dihapus!');
    }
}
