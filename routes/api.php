<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home/{name}', ['middleware' => 'cors'], function($name) {
    $products = new \App\Ph_roles;

    if($name == 'featured'){
      return $products->where('type', 'like', 'Featured')->limit(4)->get();
    } elseif ($name == 'popular') {
      return $popular = $products->where('type', 'like', 'Popular Products')->limit(4)->get();
    } elseif ($name == 'top') {
      return $top = $products->where('type', 'like', 'Top Rates')->limit(12)->get();
    } elseif ($name == 'sale') {
      return $sale = $products->where('type', 'like', 'On Sale')->limit(12)->get();
    } elseif ($name == 'tips') {
      return $tips = $products->where('type', 'like', 'Health Tip')->limit(4)->get();
    }
});

Route::get('/categories', function() {
    return \App\Ph_categories::all();
});

Route::get('/products', function() {
    return \App\Ph_products::all();
});





