<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        // dd($paymentDetails['data']);
        $recieved = $paymentDetails['data']['amount'] / 100;
        $expected = $paymentDetails['data']['metadata']['price'];
        $item = serialize($paymentDetails['data']['metadata']['items'][1]['item']['id']);
        

        $order = new \App\Ph_orders;
        if($recieved == $expected){
            $order->status = $paymentDetails['data']['status'];
            $order->discount = null;
            $order->total = $expected;
            $order->total_recieved = $recieved;
            $order->tax = null;
            $order->customer_id = $paymentDetails['data']['customer']['email'];
            $order->customer_ip = $paymentDetails['data']['ip_address'];
            $order->note = $paymentDetails['data']['metadata']['notes'];
            $order->billing_address = $paymentDetails['data']['metadata']['address'];
            $order->payment_method = $paymentDetails['data']['channel'];
            $order->transaction_id = $paymentDetails['data']['reference'];
            $order->date_id = $paymentDetails['data']['transaction_date'];
            $order->items = $item;
            $order->save();
            return redirect()->route('order')->with('success', 'Order placed succesfully!');
        } else {
            return redirect()->route('order')->withErrors('Payment process failed. An error occured!');
        }
        
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}