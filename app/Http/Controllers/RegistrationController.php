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

        //sign in
        auth()->login($user, true); 

        //redirect
            return redirect('/');
    }
}
