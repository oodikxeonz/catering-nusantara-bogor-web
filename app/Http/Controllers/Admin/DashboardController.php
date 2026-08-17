<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Package;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCategories = Category::count();
        $totalPackages = Package::count();

        return view('admin.dashboard', compact(
            'totalCategories', 'totalPackages'
        ));
    }
}