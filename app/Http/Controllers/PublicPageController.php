<?php

namespace App\Http\Controllers;

use App\Models\CompanySetting;
use App\Models\Tour;
use App\Models\TourCategory;
use App\Models\PididiJourney;
use App\Models\Destination;

use App\Models\Article;
use App\Models\Testimonial;
use App\Models\ContactInquiry;
use Illuminate\Http\Request;

class PublicPageController extends Controller
{
    public function home()
    {
        $setting = CompanySetting::first();
        $journey = PididiJourney::where('is_active', true)->first();
        $tours = Tour::where('is_featured', true)->latest()->take(6)->get();
        if ($tours->isEmpty()) {
            $tours = Tour::latest()->take(6)->get();
        }
        $testimonials = Testimonial::where('is_verified', true)->latest()->take(6)->get();
        $categories = TourCategory::all();
        $destinations = Destination::where('is_active', true)->orderBy('sort_order')->orderBy('id')->get();

        return view('pages.home', compact('setting', 'journey', 'tours', 'testimonials', 'categories', 'destinations'));
    }

    public function about()
    {
        $setting = CompanySetting::first();
        return view('pages.about', compact('setting'));
    }

    public function tours()
    {
        $setting = CompanySetting::first();
        $tours = Tour::latest()->get();
        $journey = PididiJourney::where('is_active', true)->first();
        $categories = TourCategory::all();
        $destinations = Destination::where('is_active', true)->orderBy('sort_order')->orderBy('id')->get();
        
        return view('pages.tours', compact('tours', 'journey', 'setting', 'categories', 'destinations'));
    }

    public function tourDetail($slug)
    {
        $tour = Tour::where('slug', $slug)->with(['itineraries', 'galleries'])->firstOrFail();
        $setting = CompanySetting::first();
        return view('pages.tour-detail', compact('tour', 'setting'));
    }

    public function jogjaJourney()
    {
        $journey = PididiJourney::where('is_active', true)->first() ?? new PididiJourney();
        $setting = CompanySetting::first();
        return view('pages.jogja-journey', compact('journey', 'setting'));
    }

    public function blog()
    {
        $setting = CompanySetting::first();
        $articles = Article::latest()->get();
        return view('pages.blog', compact('articles', 'setting'));
    }

    public function testimonials()
    {
        $setting = CompanySetting::first();
        $testimonials = Testimonial::where('is_verified', true)->latest()->get();
        return view('pages.testimonials', compact('testimonials', 'setting'));
    }


    public function contact()
    {
        $setting = CompanySetting::first();
        return view('pages.contact', compact('setting'));
    }

    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'wa_number' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'topic' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        ContactInquiry::create($validated);

        return redirect()->back()->with('success', 'Terima kasih! Pesan Anda telah terkirim. Tim Vayana Wisata akan segera menghubungi Anda.');
    }

    public function sitemap()
    {
        $tours = Tour::latest()->get();
        $articles = Article::latest()->get();

        $urls = [
            ['loc' => route('home'), 'priority' => '1.0', 'changefreq' => 'daily'],
            ['loc' => route('about'), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => route('tours'), 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['loc' => route('tours.jogja-journey'), 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['loc' => route('blog'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['loc' => route('testimonials'), 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['loc' => route('contact'), 'priority' => '0.7', 'changefreq' => 'monthly'],
        ];

        foreach ($tours as $tour) {
            $urls[] = [
                'loc' => route('tours.detail', $tour->slug),
                'priority' => '0.8',
                'changefreq' => 'weekly',
                'lastmod' => $tour->updated_at ? $tour->updated_at->toIso8601String() : date('c')
            ];
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        foreach ($urls as $url) {
            $xml .= '<url>';
            $xml .= '<loc>' . htmlspecialchars($url['loc']) . '</loc>';
            $xml .= '<changefreq>' . ($url['changefreq'] ?? 'weekly') . '</changefreq>';
            $xml .= '<priority>' . ($url['priority'] ?? '0.8') . '</priority>';
            if (isset($url['lastmod'])) {
                $xml .= '<lastmod>' . $url['lastmod'] . '</lastmod>';
            }
            $xml .= '</url>';
        }
        $xml .= '</urlset>';

        return response($xml, 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
