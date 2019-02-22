<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Ph_orders;
use Auth;

class OrderController extends Controller
{
    public function index(){
        $orders = new Ph_orders;
        $orders = $orders->where('customer_id', '=', Auth::user()->email)->get();
        return view('pages.order', compact('orders'));
    }

    public function thanks($id){
        if(Ph_orders::where('transaction_id', '=', $id)->exists()){
            $orders = new Ph_orders;
            $orders = $orders->where('transaction_id', '=', $id)->get()->first();
            $orders['delivery_charge'] = 300;
            $orders['items'] = unserialize($orders['items']);
            $items['quantity'] = '';
            $items['price'] = '';
            $items['name'] = '';
                for($i = 1; $i <= count($orders['items']); $i++){
                    // $items['quantity'] .= $orders['items'][$i]['qty'].', ';
                    // $items['price'] .= $orders['items'][$i]['price'].', ';
                    $items['name'] .= $orders['items'][$i]['item']['name'].', ';
                }
                // $quantity = explode(', ', rtrim($items['quantity'], ', '));
                // $price = explode(', ', rtrim($items['price'], ', '));
                $name = explode(', ', rtrim($items['name'], ', '));

            return view('pages.order_thanks', compact('orders', 'name'));
        } else {
            return redirect()->route('order')->withErrors('Something is wrong with this transaction! If you think this is a mistake, Please Contact Customer Care Immediately with the Number at the bottom of this page.');
        }
    }

    public function info($id){
        if(Ph_orders::where('transaction_id', '=', $id)->exists()){
            $orders = new Ph_orders;
            $orders = $orders->where('transaction_id', '=', $id)->get()->first();
            $orders['delivery_charge'] = 300;
            $orders['items'] = unserialize($orders['items']);
            $items['quantity'] = '';
            $items['price'] = '';
            $items['name'] = '';
                for($i = 1; $i <= count($orders['items']); $i++){
                    // $items['quantity'] .= $orders['items'][$i]['qty'].', ';
                    // $items['price'] .= $orders['items'][$i]['price'].', ';
                    $items['name'] .= $orders['items'][$i]['item']['name'].', ';
                }
                // $quantity = explode(', ', rtrim($items['quantity'], ', '));
                // $price = explode(', ', rtrim($items['price'], ', '));
                $name = explode(', ', rtrim($items['name'], ', '));

            return view('pages.info', compact('orders', 'name'));
        } else {
            return redirect()->route('order')->withErrors('Something is wrong with this transaction! If you think this is a mistake, Please Contact Customer Care Immediately with the Number at the bottom of this page.');
        }
    }
}
