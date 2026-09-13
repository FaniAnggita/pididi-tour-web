<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\Article;
use App\Models\Testimonial;
use App\Models\ContactInquiry;

class DashboardController extends Controller
{
    public function index()
    {
        $totalTours = Tour::count();
        $totalArticles = Article::count();
        $totalTestimonials = Testimonial::count();
        $unreadInquiries = ContactInquiry::where('status', 'unread')->count();

        $recentInquiries = ContactInquiry::latest()->take(5)->get();
        $recentTours = Tour::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalTours',
            'totalArticles',
            'totalTestimonials',
            'unreadInquiries',
            'recentInquiries',
            'recentTours'
        ));
    }
}
