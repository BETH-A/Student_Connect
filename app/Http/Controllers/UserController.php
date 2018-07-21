<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

//create routes

class UserController extends Controller {

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surveys = POST::all();

        return view('users.id', compact('id'));
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
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'unique:users,email',
            'password' => 'required|min:6',
        ]);

        //Create User
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

        //Sign them in
        auth()->login($users);
        
        // And then redirect to the wall page
        return view('survey')->with('userId', $users->id);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userID = POST::find($id);

        return view('id.show', compact('id'));
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
