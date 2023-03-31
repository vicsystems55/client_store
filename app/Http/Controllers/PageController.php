<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    //

    public function index(Request $request)
    {

        if ($request->page) {

            $response = Http::get(config('app.front_end_url').'/api/v1/productsx?page='.$request->page);

            // return json_decode($response);

            $response = json_decode($response);

            // dd($response);

            return view('welcome', compact('response'));
        }else{
            $response = Http::get(config('app.front_end_url').'/api/v1/productsx');

            // return json_decode($response);

            $response = json_decode($response);

            // dd($response);

            return view('welcome', compact('response'));

        }

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

        return view('auth');
    }

    public function checkout()
    {

        return view('checkout');
    }



}
