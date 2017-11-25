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

Route::get('/', function () {
    return view('home');
});


Route::get('/index', function () {
    return view('user/index');
});


Route::get('/product', 'User\ProductController@product')->name('product');

// Route::group(['namespace' => 'User'],function(){
// 	// Route::get('/','HomeController@index');
// 	Route::get('product/{product}','ProductController@product')->name('product');
//
// });
Route::resource('/cart', 'User\CartController');
Route::get('/cart/store/{id}', 'User\CartController@store')->name('cart.store');

Route::resource('address','AddressController');

Route::group(['middleware'=>'auth'],function(){
  Route::get('shipping','User\CheckoutController@shipping')->name('checkout.shipping');

});


Route::get('/admin_home', function () {
    return view('admin/admin_home');
});


Route::resource('admin/products','Admin\ProductsController');

Route::resource('admin/category','Admin\CategoriesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('show', 'ProductsController@show');
