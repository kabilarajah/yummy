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

Route::get('/', function() {
    return view('home');
});

Route::get('/shop', ['uses'=> 'ProductController@getIndex', 'as'=> 'product.index']);


Route::get('/seller/{id}', ['uses'=> 'ProductController@displayProducts', 'as'=> 'product.seller']);





Route::get('/add-to-cart/{id}',
	['uses'=> 'ProductController@getAddToCart', 'as'=> 'product.addToCart']);

Route::get('/shopping-cart',
	['uses'=> 'ProductController@getCart', 'as'=> 'product.shoppingCart']);

Route::get('/checkout',
	['uses'=> 'ProductController@getCheckout', 'as'=> 'checkout', 'middleware' =>'auth']);

Route::post('/checkout',
	['uses'=> 'ProductController@postCheckout', 'as'=> 'checkout', 'middleware' =>'auth']);

Route::get('/user/profile',
	['uses'=> 'UserController@getProfile', 'as'=>'user.profile', 'middleware'=>'auth']);

Route::get('/reduce/{id}',
	['uses'=> 'ProductController@getReduceByOne', 'as'=> 'product.reduceByOne']);

Route::get('/increase/{id}',
	['uses'=> 'ProductController@getIncreaseByOne', 'as'=> 'product.increaseByOne']);

Route::get('/remove/{id}',['uses'=> 'ProductController@getRemoveItem', 'as'=> 'product.remove']);

Route::delete('/orders/{id}', ['uses'=> 'OrderController@destroy', 'as'=> 'order.delete']);





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('category/{id}','ProductController@displayProducts');










Route::resource('/products','ProductController');

Route::resource('/orders','OrderController');

Route::get('/undelete', function() {
    return view('orders.del_order');
});


