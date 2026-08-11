<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_available', true)->get();
        $testimonials = Testimonial::latest()->take(6)->get();

        return view('home', compact('categories', 'testimonials'));
    }

    public function about()
    {
        return view('about');
    }
}