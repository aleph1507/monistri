<?php

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

use App\Product;
use App\Category;

Route::get('/', function () {
	$products = Product::orderBy('id', 'desc')->get();
	$categories = Category::orderBy('id')->get();
    return view('welcome')->withProducts($products)->withCategories($categories);
});

Auth::routes();

Route::resource('/products', 'ProductsController');

Route::resource('/categories', 'CategoryController');

Route::post('/contact', 'MiscController@sendmail');

Route::get('/home', 'HomeController@index')->name('home');
