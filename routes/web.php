<?php

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
 post /posts = sends info to DB
 GET /posts/{id}/edit = edit form to update saved info
 GET /posts/{id} = view a single 
 PATCH /posts/{id} = updated edited info
 DELETE /posts/{id} = deletes resource from DB
*/

 use App\Survey;

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


Route::get('/register',
function() {
    return view('create');
}
);

Route::get('/session',
function() {
    return view('session');
});

Route::post('/session', 'SessionsController@store');

Route::post('/session', 'SessionsController@destroy');


// Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@do']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
