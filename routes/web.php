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

Route::get('/session',
function() {
    return view('session');
});

Route::post('/session', 'SessionsController@store');

Route::post('/session', 'SessionsController@destroy');


// Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@do']);
Auth::routes();

Route::get('/chat', 'ChatController@index')->name('chat');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/contacts', 'ContactsController@get');
Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
Route::post('/conversation/send', 'ContactsController@send');
