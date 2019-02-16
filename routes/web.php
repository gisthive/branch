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
Route::get('/description/{id}/{name}', 'DescriptionController@index')->name('description');
Route::get('/search', 'SearchController@index');
Route::post('/search', 'SearchController@show');
Route::get('/cart', 'CartController@index');
Route::get('/account', 'AccountController@index')->name('account')->middleware('auth');
Route::post('/confirm', 'ConfirmController@index')->name('confirm');
Route::get('/help', 'HelpController@index');
Route::get('/review', 'ReviewController@index');
Route::get('/privacy', 'TermsController@index');
Route::get('/logout', 'SessionsController@destroy');
Route::get('/faq', 'AdminController@displayFaq');
Route::get('/professional', 'ProfessionalController@index')->middleware('auth')->name('professional');
Route::get('/notification', 'NotificationController@index')->middleware('auth')->name('notification');

Route::post('signup', 'RegistrationController@store');
Route::post('/login', 'SessionsController@verify')->name('login');

Route::get('/add-to-cart/{id}', 'CartController@store')->name('product.add');
Route::get('/checkout', 'CartController@getCheckout');
Route::get('/reduce-cart/{id}', 'CartController@getReduceByOne')->name('product.reduce');
Route::get('/remove/{id}', 'CartController@getRemoveItem')->name('product.remove');

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay'); 
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

Route::get('/edit', 'AdminController@index');
Route::get('/edit/category', 'AdminController@category');
Route::get('/edit/customer', 'AdminController@customer');
Route::get('/edit/subcategory', 'AdminController@subcategory');
Route::get('/edit/products', 'AdminController@products');
Route::get('/edit/orders', 'AdminController@orders')->name('orders');
Route::get('/edit/faq', 'AdminController@faq');
Route::get('/edit/roles', 'AdminController@roles')->name('roles');

Route::post('/edit/store/category', 'AdminController@storeCategory')->name('storeCategory');
Route::post('/edit/store/delete', 'AdminController@destroyCategory')->name('deleteCategory');
Route::post('/edit/store/edit', 'AdminController@updateCategory')->name('editCategory');
Route::post('/edit/store/subcategory', 'AdminController@storeSubcategory')->name('storeSubcategory');
Route::post('/edit/store/subedit', 'AdminController@updateSubcategory')->name('editSubcategory');
Route::post('/edit/store/subdelete', 'AdminController@destroySubcategory')->name('deleteSubcategory');
Route::post('/edit/store/product', 'AdminController@storeProduct')->name('storeProduct');
Route::post('/edit/store/prodelete', 'AdminController@destroyProduct')->name('deleteProduct');
Route::post('/edit/store/faqdelete', 'AdminController@destroyFaq')->name('deleteFaq');
Route::post('/edit/store/orderdelete', 'AdminController@destroyOrder')->name('deleteOrder');
Route::post('/edit/store/faqedit', 'AdminController@updateFaq')->name('editFaq');
Route::post('/edit/store/faq', 'AdminController@storeFaq')->name('storeFaq'); 
Route::post('/edit/store/role', 'AdminController@storeRole')->name('storeRole'); 
Route::post('/edit/role/delete', 'AdminController@destroyRole')->name('delete_role');
Route::post('/edit/role/account', 'AccountController@editAccount')->name('editAccount')->middleware('auth');
Route::post('/edit/role/accountImage', 'AccountController@editAccountImage')->name('editAccountImage')->middleware('auth');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
