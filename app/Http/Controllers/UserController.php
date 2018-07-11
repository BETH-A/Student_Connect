<!-- php artisan make:controller 'controllerName' -r = builds boilerplate for all  method routes -->
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

//create routes


public function store() 

{

    // Create new survey using the requested data (can be setup as an array)

    $user = new User;

    $user->name = request('name');

    $user->email = request('email');

    $user->password = request('password');

    $user->postal_code = request('postal_code');

    $user->status = request('status');

    $user->field_study = request('field_study');

    $user->pic = request('pic');

    // Save it to the DB
    $user->save();

    // And then redirect to the wall page
    return redirect('/survey');
};