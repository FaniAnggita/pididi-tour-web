<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TourCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TourCategoryController extends Controller
{
    public function index()
    {
        $categories = TourCategory::withCount('tours')->latest()->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:tour_categories,name',
            'icon' => 'nullable|string|max:50',
            'description' => 'nullable|string',
        ]);

        $category = TourCategory::create([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name']),
            'icon' => $validated['icon'] ?? '🧭',
            'description' => $validated['description'] ?? null,
        ]);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'category' => $category,
                'message' => 'Kategori baru berhasil ditambahkan!'
            ]);
        }

        return redirect()->back()->with('success', 'Kategori baru "' . $category->name . '" berhasil ditambahkan!');
    }

    public function update(Request $request, TourCategory $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:tour_categories,name,' . $category->id,
            'icon' => 'nullable|string|max:50',
            'description' => 'nullable|string',
        ]);

        $category->update([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name']),
            'icon' => $validated['icon'] ?? '🧭',
            'description' => $validated['description'] ?? null,
        ]);

        return redirect()->back()->with('success', 'Kategori berhasil diperbarui!');
    }

    public function destroy(TourCategory $category)
    {
        $category->delete();
        return redirect()->back()->with('success', 'Kategori berhasil dihapus!');
    }
}
