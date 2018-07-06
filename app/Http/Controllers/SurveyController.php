<!-- php artisan make:controller 'controllerName' -r = builds boilerplate for all  method routes -->
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Survey;

//create routes


public function store() 

{

    // Create new survey using the requested data (can be setup as an array)

    $survey = new Survey;

    $survey->music = request('music');

    $survey->movie = request('movie');

    $survey->sport = request('sport');

    $survey->food = request('food');

    $survey->activity = request('activity');

    // Save it to the DB
    $survey->save();

    // And then redirect to the wall page
    return redirect('/wall');
};