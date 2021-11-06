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
    return view('welcome');
});
Route::get('/admin/index', function () {
    return view('admin.index');
})->middleware('auth');
Auth::routes();
Route::resource('/products','ProductsController')->middleware('auth');
Route::resource('/orders','OrderController')->except([
  'show','update','edit'
]);
Route::get('/show', 'OrderController@show')->name('show');
Route::get('/edit', 'OrderController@edit')->name('edit');
Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/frontend/index', 'FrontendController@index')->name('frontend');
Route::get('/index', 'DetailController@index')->name('index');
Route::post('/store', 'DetailController@store')->name('store');
Route::get('/frontend/mystery', 'FrontendController@mystery')->name('mystery');
Route::get('pay', 'StripePaymentController@create')->name('stripe.index');
Route::post('pay', 'StripePaymentController@stripePost')->name('stripe.post');

Route::get('/addcart/{product}', 'CartController@add')->name('cart.add');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/cart/destroy/{ItemId}', 'CartController@destroy')->name('cart.destroy');
Route::get('/cart/update/{ItemId}', 'CartController@update')->name('cart.update');
Route::resource('/raffle','RaffleController');
Route::get('stripe', 'StripeController@stripeCreate')->name('stripe.create');
Route::post('stripe', 'StripeController@stripePay')->name('stripe.pay');
