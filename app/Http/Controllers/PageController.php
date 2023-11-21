<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoreSubDetail;

use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Session\Session;

class PageController extends Controller
{
    //

    public function index(Request $request)
    {

        $storeDetails = StoreSubDetail::first();

        // return $storeDetails;

        // return $request->url();
        // if ($request->page) {

        //     $response = Http::get(config('app.url').'/api/v1/productsx?page='.$request->page);

        //     // return json_decode($response);

        //     $response = json_decode($response);

        //     // dd($response);

        //     return view('welcome', compact('response','storeDetails'));
        // }else{
        //     $response = Http::get(config('app.url').'/api/v1/productsx');

        //     // return json_decode($response);

        //     $response = json_decode($response);

        //     // dd($response);

        //     return view('welcome', compact('response', 'storeDetails'));

        // }

        return view('welcome', compact('storeDetails'));

    }

    public function product_details($id)
    {

        return view('product_details');
    }

    public function home()
    {

        return view('home');
    }

    public function about()
    {

        return view('about');
    }

    public function contact()
    {


        return view('contact');
    }

    public function cart()
    {

        return view('cart');
    }

    public function auth()
    {

        return 123;

        return view('auth');
    }

    public function checkout()
    {

        return view('checkout');
    }



}
