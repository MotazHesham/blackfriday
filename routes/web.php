<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('loading');
})->name('loading');

Route::get('/home','HomeController@landing')->name('home');

Route::get('/categories','CategoriesController@categories')->name('categories');

Route::get('/category/{id}','CategoriesController@category')->name('category');

Route::get('/order/{id}','OrdersController@order')->name('order');

Route::post('/order','OrdersController@order_submit')->name('order.submit');


Route::post('/contactus','ContactusController@submit')->name('contact-us.submit');
