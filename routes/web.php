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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

// start admin middleware

Route::get('/admin', 'HomeController@admin')->middleware('admin');

Route::get('/feedbacksadmin', function () {
    return view('dashbord-feedbacks');
});

Route::get('/roomsadmin', function () {
    return view('dashbord-rooms');
});

//end admin middleware


// start page routing
Route::get('/index', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    if (Auth::guest()) 
        return redirect('login');
    return view('admin');
});

Route::get('/rooms', function () {
    if (Auth::guest()) 
        return redirect('login');
    return view('rooms');
});

Route::get('/services', function () {
    if (Auth::guest()) 
        return redirect('login');
    return view('services');
});

Route::get('/booking', function () {
    if (Auth::guest()) 
        return redirect('login');
    return view('booking');
});

Route::get('/contact', function () {
    if (Auth::guest()) 
        return redirect('login');
    return view('contact');
});



Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/sign-up', function () {
    return view('auth/register');
});

Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

// end page routing

// list usr
Route::get('/listusers', 'manage@listusers');

// start feedbacks part
Route::get('addfeedback', 'manage@AddFeedback');
Route::post('addfeedback', 'manage@AddFeedback');
Route::get('dashbordfeedbacks', 'manage@dashbordfeedbacks');
// end feedbacks part
