<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $address = $all['address'];
        $city = $all['city'];
        $state = $all['state'];
        $postcode = $all['postcode'];
        $country = $all['country'];
        $name = $all['name'];
        $phone = $all['phone'];
        $email = $all['email'];
        $notes = $all['notes'];
        $rand = rand();
        return view('pages.confirm', compact('address', 'city', 'state', 'postcode', 'country', 'name', 'phone', 'email', 'rand', 'notes'));
    }
}
