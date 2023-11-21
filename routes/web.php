<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class,'home']);

Route::get('/store', [PageController::class,'index']);

Route::get('/product-details/{id}', [PageController::class,'product_details']);

Route::get('/about', [PageController::class,'about']);

Route::get('/contact', [PageController::class,'contact']);

Route::get('/cart', [PageController::class,'cart']);

Route::get('/auth', [PageController::class,'auth']);

Route::get('/checkout', [PageController::class,'checkout']);

Route::get('/payment-successful', function () {
    return view('payment_successful');
});


Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/my-orders', [DashboardController::class, 'orders']);

Route::get('/settings', [DashboardController::class, 'settings']);

Route::get('/all-products', [DashboardController::class, 'products']);

Route::get('/add-products', [DashboardController::class, 'add_products']);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
