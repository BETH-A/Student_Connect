<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
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


Route::get('/', function () {
    return view('login');
 });
 
 
 Route::get('/profile', 
 
 function () {
     return view('profile');
 }
 );
 
 Route::get('/survey', 
 
 function () {
     return view('survey');        
 }
 );
 
 Route::get('/wall', function () {
     return view('wall');
 });


Auth::routes();

Route::get('/chat', 'ChatController@index')->name('chat');

Route::get('/contacts', 'ContactsController@get');
Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
Route::post('/conversation/send', 'ContactsController@send');
