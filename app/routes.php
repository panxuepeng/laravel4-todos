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
	if (Auth::check())
	{
		//return View::make('todos')->with(array('todos' => json_encode(Todo::all()) ));
		exit(json_encode(Todo::all()));
		return View::make('todos')->with(array('todos' => 'hello list' ));
	} else {
		return '请<a href="/login">登陆</a>';
	}
	
});

Route::post('/', function()
{
	if (Auth::check())
	{
		$title = Input::get('title');
		$uid = Auth::user()->id;
		
        Todo::create(array(
			'user_id' => $uid,
			'title' => $title,
			'completed' => 'no',
		));
		$result = array('error'=>0, 'message'=>'添加成功');
	} else {
		$result = array('error'=>1, 'message'=>'请登录');
	}
	return Response::json($result);
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

