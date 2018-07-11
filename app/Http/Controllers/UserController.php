<!-- php artisan make:controller 'controllerName' -r = builds boilerplate for all  method routes -->
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Users;

//create routes


public function store() 

{

    // Create new survey using the requested data (can be setup as an array)

    $users = new User;

    $users->name = request('name');

    $users->email = request('email');

    $users->password = request('password');

    $users->postal_code = request('postal_code');

    $users->status = request('status');

    $users->field_study = request('field_study');

    $users->pic = request('pic');

    // Save it to the DB
    $users->save();

    // And then redirect to the wall page
    return redirect('/survey');
};