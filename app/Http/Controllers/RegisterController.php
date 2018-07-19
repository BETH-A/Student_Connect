<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegisterController extends Controller
{
    public function create()
    {
        POST::create([
            'name' => request('name'),
            'email' => request('email'),
            'usersID' => auth()->id()
        ]);

        return view('/survey');
    }

    public function store(Request $request)
    {
        // Validate the form
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        //Create User
        $user = User::create(request(['name', 'email', 'password']));

        //Sign them in
        auth()->login($user);

        // And then redirect to the wall page
        return view('/survey')->with('userId', $user->id);
    }
}