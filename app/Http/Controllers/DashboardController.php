<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Orders;  // Corrected from Orders to Order
use App\Models\Category;

class DashboardController extends Controller
{
    // View method
    public function view()
    {


        return view('admin.home');
    }
}
