<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::get('/', 'LoginController@index');

Eloquent model => User
controller => LoginController
migration => create_user_table

php artisan make:model User - mc (makes all 3 files at once)
*/
/* routes:
 GET /posts = 
 GET /posts/create = form to create new
 POST /posts = sends info to DB
 GET /posts/{id}/edit = edit form to update saved info
 GET /posts/{id} = view a single 
 PATCH /posts/{id} = updated edited info
 DELETE /posts/{id} = deletes resource from DB
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::POST ('/user', function() {
    @csrf;
    return redirect()->route('/survey');
});
