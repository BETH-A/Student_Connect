<?php



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

Route::post('/register', 'Auth\RegisterController@store');

Route::get('/session',
function() {
    return view('session');
});

Route::post('/session', 'SessionsController@store');

Route::post('/session', 'SessionsController@destroy');


// Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@do']);