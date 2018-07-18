<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Survey;

//create routes

class SurveyController extends Controller {

    
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
    
public function store(Request $request) 

{
    // Create new survey using the requested data (can be setup as an array)
    dd($request->input('userId'));

    $this->validate(request(), [
        'userId' => 'unique:users,id',
        'music'  => 'required',
        'movie' => 'required',
        'sport' => 'required',
        'food' => 'required',
        'activity' => 'required',
    ]);
    $survey = new Survey;

    $survey->userId = 'userId';

    $survey->music = $request->input('music');

    $survey->movie = $request->input('movie');

    $survey->sport = $request->input('sport');

    $survey->food = $request->input('food');

    $survey->activity = $request->input('activity');

    // Save it to the DB
    $survey->save();

    // And then redirect to the wall page
    return view('wall')->with('userId',$users->id);
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
