<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function() {
    if (Auth::check())
    {
        // The user is logged in...
        return View::make('pages.home');

    } 
    return Redirect::route('login');

});

Route::get('login', array('as' => 'login', function () { 
	return View::make('pages.login');
}))->before('guest');

Route::post('login', function () { 
	$user = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
        
        if (Auth::attempt($user)) {
            return Redirect::intended();
            
        }
        
        // authentication failure! lets go back to the login page
        return Redirect::route('login')
            ->with('flash_error', 'Your username/password combination was incorrect.')
            ->withInput();
});

Route::post('logout', array('as' => 'logout', function () { 
    Auth::logout();

    return Redirect::route('login');
}))->before('auth');;

Route::get('profile', array('as' => 'profile', function () { }))->before('auth');;