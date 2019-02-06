<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        if(! auth()->attempt(request(['email', 'password'], true))){
            return back()->withErrors([
                'message' => 'Please check your credentials and try again!'
            ]);
        }

        return redirect('/');
    }
}
