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

Route::get('/paymentStatus','User\CheckoutController@paymentDetails');
Route::get('/product', 'User\ProductController@product')->name('product');
Route::post('/webhook', 'WebhookController@payment');

// Route::group(['namespace' => 'User'],function(){
// 	// Route::get('/','HomeController@index');
// 	Route::get('product/{product}','ProductController@product')->name('product');
//
// });
Route::resource('/cart', 'User\CartController');
Route::get('/cart/store/{id}', 'User\CartController@store')->name('cart.store');

Route::resource('address','AddressController');

Route::get('payment','User\CheckoutController@payment')->name('checkout.payment');
Route::get('storePayment','User\CheckoutController@storePayment')->name('storePayment');

Route::group(['middleware'=>'auth'],function(){
  Route::get('shipping','User\CheckoutController@shipping')->name('checkout.shipping');

});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::post('toggledeliver/{orderId}', 'OrderController@toggledeliver')->name('toggle.deliver');
    Route::get('/', function () {
        return view('admin.admin_home');
    })->name('admin.admin_home');

Route::resource('products','Admin\ProductsController');

Route::resource('category','Admin\CategoriesController');

Route::get('orders/{type?}', 'Admin\OrdersController@Orders');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('show', 'ProductsController@show');
