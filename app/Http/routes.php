<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',function() {
	return view('index');
});
Route::get('bbj',function() {
	return view('bbj');
});
route::get('thankyou',function() {
	return view('thankyou');
});

Route::post('users',function(\App\Http\Requests\CreateUserRequest $request) {

	$user = \App\User::create($request->all());

	return redirect('thankyou');
});