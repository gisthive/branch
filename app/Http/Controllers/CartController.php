<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Session::has('cart')) {
            return view('pages.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new \App\Cart($oldCart);
        return view('pages.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function store(Request $request, $id)
    {
        $product = \App\Ph_products::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new \App\Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function getCheckout()
    {
        if (!Session::has('cart')){
            return view('pages.cart')->withErrors('Your Account Details are empty! Please complete it for faster checkout <a href="/account"> here </a> ');
        }

        if(! auth()->check()){
            $email = '';
            $name = '';
            $phone = '';
            $address = '';
            $address2 = '';
            $work = '';
            $city = '';
            $state = '';
            $postcode = '';
            $country = '';
        } else {
            $account = new \App\Ph_customer;
            $account = $account->where('id', '=', Auth::user()->email)->get()->first();
            $name = Auth::user()->name;
            $phone = $account['phone'];
            $address = $account['address_1'];
            $address2 = $account['address_2'];
            $work = $account['work'];
            $city = $account['city'];
            $state = $account['state'];
            $postcode = $account['postcode'];
            $country = $account['country'];
            $email = Auth::user()->email;
        }

        $oldCart = Session::get('cart');
        $cart = new \App\Cart($oldCart);
        $total = $cart->totalPrice;
        $rand = rand();
        return view('pages.checkout', ['address' => $address, 'address2' => $address2, 'work' => $work, 'city' => $city, 'state' => $state, 'postcode' => $postcode, 'country' => $country, 'total' => $total, 'products' => $cart->items, 'qty' => $cart->totalQty, 'email' => $email, 'name' => $name, 'phone' => $phone, 'rand' => $rand,]);
    }

    public function getReduceByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new \App\Cart($oldCart);
        $cart->reduceByOne($id);
        
        if(count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect('/cart');
    }

    public function getRemoveItem($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new \App\Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect('/cart');
    }
}
