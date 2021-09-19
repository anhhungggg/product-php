<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'Frontend'], function (){
    //HomePage
    Route::prefix('') ->group(function(){
        Route::get('', 'HomeController@index')->name('get_frontend.home');
        Route::post('', 'HomeController@destroy')->name('get_frontend.home.destroy');
    });


    //AddProduct
    Route::prefix('addproduct') ->group(function(){
        Route::get('', 'ProductController@index')->name('get_frontend.product.index');
        Route::delete('', 'ProductController@destroy')->name('get_frontend.product.destroy');
        Route::post('', 'ProductController@store')->name('get_frontend.product.store');
    });
});
