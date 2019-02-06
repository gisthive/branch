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

Route::get('/', 'AdminController@home')->name('home');
Route::get('/home', 'AdminController@home');

Route::get('/signup', 'RegistrationController@create');
Route::get('/login', 'SessionsController@create');
Route::get('/category/{name}', 'CategoryController@index');
Route::get('/description/{id}', 'DescriptionController@index')->name('description');
Route::get('/search', 'SearchController@index');
Route::post('/search', 'SearchController@show');
Route::get('/cart', 'CartController@index');
Route::get('/account', 'AccountController@index');
Route::post('/confirm', 'ConfirmController@index')->name('confirm');
Route::get('/help', 'HelpController@index');
Route::get('/review', 'ReviewController@index');
Route::get('/privacy', 'TermsController@index');
Route::get('/logout', 'SessionsController@destroy');
Route::get('/faq', 'AdminController@displayFaq');

Route::post('signup', 'RegistrationController@store');
Route::post('/login', 'SessionsController@verify');

Route::get('/add-to-cart/{id}', 'CartController@store')->name('product.add');
Route::get('/checkout', 'CartController@getCheckout');
Route::get('/reduce-cart/{id}', 'CartController@getReduceByOne')->name('product.reduce');
Route::get('/remove/{id}', 'CartController@getRemoveItem')->name('product.remove');

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay'); 
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
