<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Package;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_available', true)->get();
        $testimonials = Testimonial::latest()->take(6)->get();
        $bestSellers = Package::where('is_best_seller', true)
                        ->where('is_available', true)
                        ->with('category', 'products')
                        ->get();

        return view('home', compact('categories', 'testimonials', 'bestSellers'));
    }

    public function about()
    {
        return view('about');
    }
}