<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Survey;

//create routes

class SurveyController extends Controller {


public function store(Request $request) 

{

    // Create new survey using the requested data (can be setup as an array)

    $survey = new Survey;

    $survey->user_id = $request->input('user_id');

    $survey->music = $request->input('music');

    $survey->movie = $request->input('movie');

    $survey->sport = $request->input('sport');

    $survey->food = $request->input('food');

    $survey->activity = $request->input('activity');

    // Save it to the DB
    $survey->save();

    // And then redirect to the wall page
    return view('wall')->with('user_id',$users->id);
}}