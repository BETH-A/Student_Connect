<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;


class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function destroy()
    {
        auth()->logout();

        return view('/home');
    }
}
