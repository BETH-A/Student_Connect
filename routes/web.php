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
 POST /posts = sends info to DB
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

Route::POST('/register', 'RegisterController@store');

Route::get('/session',
function() {
    return view('session');
});

