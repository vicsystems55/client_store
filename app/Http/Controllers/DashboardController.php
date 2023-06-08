<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {

        return view('dashboard.home');
    }

    public function products()
    {

        $products = Product::latest()->get();


        return view('dashboard.products', compact('products'));
    }

    public function orders()
    {

        $orders = Invoice::latest()->get();


        return view('dashboard.orders', compact('orders'));
    }
}
