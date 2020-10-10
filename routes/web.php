<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('change-language/{locale}', ['as' => 'frontend_change_locale', 'uses' => 'App\Http\Controllers\GeneralController@changeLanguage']);

Auth::routes();
// Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('profile', 'App\Http\Controllers\ProfileController')->name('*', 'profile');
Route::resource('famous', 'App\Http\Controllers\FamousController')->name('*', 'famous');
Route::resource('service', 'App\Http\Controllers\ServiceController')->name('*', 'service');

//Show user information 
Route::get('user/info/{id}', 'App\Http\Controllers\FamousController@show')->name('info');

//Show service 
Route::get('user/services/{id}', 'App\Http\Controllers\ServiceController@show')->name('services.show');

//Cart Routes
Route::get('/add-to-cart/{service}', 'App\Http\Controllers\CartController@add')->name('cart.add')->middleware('auth');
Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart.index')->middleware('auth');
Route::get('/cart/destroy/{service}', 'App\Http\Controllers\CartController@destroy')->name('cart.destroy')->middleware('auth');

//Checkout Route
Route::get('/checkout', 'App\Http\Controllers\CartController@checkout')->name('cart.checkout')->middleware('auth');

//Order
Route::resource('order', 'App\Http\Controllers\OrderController')->name('*', 'order')->middleware('auth');
