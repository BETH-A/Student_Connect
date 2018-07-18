<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

//create routes

class UserController extends Controller {

public function store(Request $request)
{
    // Create new survey using the requested data (can be setup as an array)

    $users = new User;

    $users->name = $request->input('name');

    $users->email = $request->input('email');

    $users->password = $request->input('password');

    $users->postal_code = $request->input('postal_code');

    $users->status = $request->input('status');

    $users->field_study = $request->input('field_study');

    $users->pic = $request->input('pic');

    // Save it to the DB
    $users->save();


    // And then redirect to the wall page
    return view('survey')->with('user_id', $users->id);
}}