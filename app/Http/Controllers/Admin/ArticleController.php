<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'author' => 'required|string|max:255',
            'read_time' => 'required|string|max:255',
            'cover_image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'cover_image_url' => 'nullable|string',
            'excerpt' => 'required|string',
            'content' => 'required|string',
        ]);

        $coverImagePath = 'https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=600&q=80';
        if ($request->hasFile('cover_image_file')) {
            $path = $request->file('cover_image_file')->store('articles', 'public');
            $coverImagePath = 'storage/' . $path;
        } elseif (!empty($request->cover_image_url)) {
            $coverImagePath = $request->cover_image_url;
        }

        Article::create([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']) . '-' . rand(100, 999),
            'category' => $validated['category'],
            'author' => $validated['author'],
            'read_time' => $validated['read_time'],
            'cover_image' => $coverImagePath,
            'excerpt' => $validated['excerpt'],
            'content' => $validated['content'],
            'published_at' => now(),
        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil diterbitkan!');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'author' => 'required|string|max:255',
            'read_time' => 'required|string|max:255',
            'cover_image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'cover_image_url' => 'nullable|string',
            'excerpt' => 'required|string',
            'content' => 'required|string',
        ]);

        $coverImagePath = $article->cover_image;
        if ($request->hasFile('cover_image_file')) {
            $path = $request->file('cover_image_file')->store('articles', 'public');
            $coverImagePath = 'storage/' . $path;
        } elseif (!empty($request->cover_image_url)) {
            $coverImagePath = $request->cover_image_url;
        }

        $article->update([
            'title' => $validated['title'],
            'category' => $validated['category'],
            'author' => $validated['author'],
            'read_time' => $validated['read_time'],
            'cover_image' => $coverImagePath,
            'excerpt' => $validated['excerpt'],
            'content' => $validated['content'],
        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil diperbarui!');
    }


    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil dihapus!');
    }
}
