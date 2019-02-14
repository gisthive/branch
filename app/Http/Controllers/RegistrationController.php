<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    public function create(){
        return view('pages.signup');
    }

    public function store(){

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

         $data = \request()->all();
         $user = User::create([
             'name' => $data['name'],
             'email' => $data['email'], 
             'password' => bcrypt($data['password']),
             ]);

        auth()->login($user, true); 

        return redirect(route('account'))->withErrors('Complete your Account Details for faster checkout!');
    }
}
