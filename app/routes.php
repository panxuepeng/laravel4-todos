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
		$user = Auth::user();
		//$todos = Todo::where('user_id', '=', $user->id)->get()->toJson();
		//exit(var_dump($todos));
		$todos = Todo::where('user_id', '=', $user->id)->get();
		return View::make('todos', array('todos' => $todos ));
	} else {
		return '请<a href="/login">登陆</a>';
	}
	
});

Route::post('/', function()
{
	if (Auth::check())
	{
		$title = Input::get('title');
		$user = Auth::user();
		
        Todo::create(array(
			'user_id' => $user->id,
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

Route::get('markdown', 'HomeController@markdown');
Route::get('hi', 'HomeController@hi');
Route::get('hello', 'HomeController@hello');
Route::get('demo', 'HomeController@demo');
//Route::get('markdown', array('as' => 'markdown', 'uses' => 'HomeController@markdown'));

