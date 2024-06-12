<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;

class DashboardController extends Controller
{
    // View method
    public function view()
    {
        // Count products
        $productsCount = Product::count();

        // Count users
        $usersCount = User::count();

        // Count orders

        // Count categories

        // Count pending orders

        return view('admin.home', compact('productsCount', 'usersCount'));
    }
}
