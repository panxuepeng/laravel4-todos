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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/login', function()
{
	$user = array(
		'username' => 'panxuepeng',
		'password' => 'panxuepeng',
	);
	
	if (Auth::attempt($user))
	{
		return '登陆成功';
	} else {
		return '登陆失败';
	}
});
