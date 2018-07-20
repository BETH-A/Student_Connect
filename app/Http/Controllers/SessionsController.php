<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;   

class SessionsController extends Controller
{

    public function __constructor()
    {
        $this->middleware('guest', ['except'=>'destroy']);
    }

    public function create()
    {
        return view('session');
    }

    public function store()
    {
        if(! auth()->attempt(request(['email','password']))) {

            return back()->withErrors([

                'message'=>'User name and password do not match.  Please try again.'
            ]);
        }
        
        return view('/wall');
    }


    public function destroy()
    {
        auth()->logout();

        return view('/home');
    }
}
