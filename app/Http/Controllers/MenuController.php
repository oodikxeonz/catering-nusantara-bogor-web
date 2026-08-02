<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Package;

class MenuController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_available', true)
                        ->with(['packages' => function ($q) {
                            $q->where('is_available', true);
                        }])->get();

        return view('menu.index', compact('categories'));
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $packages = $category->packages()
                        ->where('is_available', true)
                        ->with('products')
                        ->get();

        return view('menu.show', compact('category', 'packages'));
    }
}