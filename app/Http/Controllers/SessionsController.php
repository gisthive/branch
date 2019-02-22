<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ph_customer;
use Auth;

class SessionsController extends Controller
{
    public function __construct(){
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create(){
        return view('pages.login');
    }

    public function destroy(){
        auth()->logout();
        return redirect('/');
    }

    public function verify(){
        $account = new Ph_customer;
        if(! auth()->attempt(request(['email', 'password'], true))){
            return back()->withErrors([
                'message' => 'Please check your credentials and try again!'
            ]);
        }

        if(Ph_customer::where('id', '=', Auth::user()->email)->exists()){
            return redirect('/')->with('success', 'Welcome back, '.Auth::user()->name);
        } else {
            return redirect('/')->withErrors('Welcome back! Your Account Details are empty! Please complete it for faster checkout <a href="/account"> here </a> ');
        }  
    }
}
