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

Route::get('/', [PageController::class,'index'])->middleware('checkdb');

Route::get('/about', [PageController::class,'about']);

Route::get('/contact', [PageController::class,'contact']);

Route::get('/cart', [PageController::class,'cart']);

Route::get('/auth', [PageController::class,'auth'])->middleware('checkdb');

Route::get('/checkout', [PageController::class,'checkout']);

Route::get('/payment-successful', function () {
    return view('payment_successful');
});


Route::get('/admin/home', [DashboardController::class, 'index'])->middleware('checkdb');

Route::get('/admin/products', [DashboardController::class, 'products'])->middleware('checkdb');


Route::get('/admin/orders', [DashboardController::class, 'orders'])->middleware('checkdb');;


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
