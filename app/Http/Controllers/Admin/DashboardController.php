<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Package;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCategories = Category::count();
        $totalPackages = Package::count();
        $totalProducts = Product::count();

        return view('admin.dashboard', compact(
            'totalCategories', 'totalPackages', 'totalProducts'
        ));
    }
}