<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Survey;

//create routes

class SurveyController extends Controller {

    public function __construct()
    {

    }
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        // public function index()
        // {
            // $surveys = POST::all();

            // return view('surveys.index');
        // }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */

        public function create()
        {
            POST::create([
                'name' => request('name'),
                'email' => request('email'),
                'usersID' => auth()->id()
            ]);
    
            return view('/wall');
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
            'postal_code' => 'required',
            'field_study' => 'required',
            'music'  => 'required',
            'movie' => 'required',
            'sport' => 'required',
            'food' => 'required',
            'activity' => 'required',
        ]);

    $survey = Survey::create(request(['userId','postal_code', 'status', 'field_study', 'pic', 'music', 'movie', 'sport', 'food', 'activity']));

     // And then redirect to the wall page
    return view('wall')->with('userId',$user->id);
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
