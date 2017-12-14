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

Route::group(['prefix' => 'admin','middleware',['auth']], function () {
  Route::post('toggledeliver/{orderId}', 'Admin\OrdersController@toggledeliver')->name('toggle.deliver');
  Route::get('/adminHome', function () {
    return view('admin.admin_home');
  });

  Route::resource('products','Admin\ProductsController');
  Route::resource('category','Admin\CategoriesController');
  Route::get('orders/{type?}','Admin\OrdersController@Orders');
});

Route::get('/index', 'User\ProductController@show')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('show', 'Admin\ProductsController@show');

Route::get('/admin/register','Admin\RegisterController@showRegistrationForm');
Route::post('/admin/register','Admin\RegisterController@register')->name('admin.register');

Route::get('/product{}', 'User\ProductController@product')->name('product');
Route::post('/webhook', 'WebhookController@payment');


Route::resource('/cart', 'User\CartController');
Route::get('/cart/store/{id}', 'User\CartController@store')->name('cart.store');

Route::resource('address','AddressController');

Route::get('/paymentStatus','User\CheckoutController@paymentDetails');
Route::get('payment','User\CheckoutController@payment')->name('checkout.payment');
Route::get('storePayment','User\CheckoutController@storePayment')->name('storePayment');

Route::group(['middleware'=>'auth'],function(){
  Route::get('shipping','User\CheckoutController@shipping')->name('checkout.shipping');

});

Auth::routes();
