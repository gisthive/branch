<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Ph_orders;
use Auth;

class OrderController extends Controller
{
    public function index(){
        $ordersort = new Ph_orders;
        $orders = $ordersort->where('customer_id', '==', Auth::user()->email);
        return $orders;
        return view('pages.order', compact('orders'));
    }
}
