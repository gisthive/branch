<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class ConfirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = \request()->all();
        $oldCart = Session::get('cart');
        $cart = new \App\Cart($oldCart);
        $all['rand'] = rand();
        $all['items'] = $cart->items;
        $all['total'] = $cart->totalPrice;
        return view('pages.confirm', compact('all'));
    }
}
