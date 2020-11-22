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

Route::get('login','AdminController@login_form')->name('admin.login_form');
Route::post('login','AdminController@login')->name('admin.login');


Route::group( ['middleware' => 'auth:admin'] ,function(){
    
    Route::get('/','AdminController@dashboard')->name('admin.dashboard');
    Route::get('logout','AdminController@logout')->name('admin.logout');
    
    Route::group( ['prefix' => 'categories'] , function(){
        Route::get('/','CategoriesController@index')->name('admin.categories');
        Route::get('/add','CategoriesController@add')->name('admin.categories.add');
        Route::post('/store','CategoriesController@store')->name('admin.categories.store');
        Route::get('/edit/{id}','CategoriesController@edit')->name('admin.categories.edit');
        Route::post('/update','CategoriesController@update')->name('admin.categories.update');
        Route::get('/delete/{id}','CategoriesController@delete')->name('admin.categories.delete');
    });

    Route::group( ['prefix' => 'products'] , function(){
        Route::get('/','ProductsController@index')->name('admin.products');
        Route::get('/add','ProductsController@add')->name('admin.products.add');
        Route::post('/store','ProductsController@store')->name('admin.products.store');
        Route::get('/edit/{id}','ProductsController@edit')->name('admin.products.edit');
        Route::post('/update','ProductsController@update')->name('admin.products.update');
        Route::get('/delete/{id}','ProductsController@delete')->name('admin.products.delete');
        Route::post('/update_trending','ProductsController@update_trending')->name('admin.products.update_trending');
    });

    Route::group( ['prefix' => 'orders'] , function(){
        Route::get('/','OrdersController@index')->name('admin.orders');
        Route::get('/delete/{id}','OrdersController@delete')->name('admin.orders.delete');
    });

    Route::group( ['prefix' => 'contactus'] , function(){
        Route::get('/','ContactusController@index')->name('admin.contactus');
        Route::get('/delete/{id}','ContactusController@delete')->name('admin.contactus.delete');
    });
    Route::group( ['prefix' => 'profile'] , function(){
        Route::get('/edit','AdminController@edit')->name('admin.profile.edit');
        Route::post('/update','AdminController@update')->name('admin.profile.update');
    });
    
});

