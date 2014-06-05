<?php
use dflydev\markdown\MarkdownParser;
use composerDemo\Demo as composerDemo;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function markdown()
	{
		$markdownParser = new MarkdownParser();

		// Will return <h1>Hello World</h1>
		return $markdownParser->transformMarkdown("#Hello World");

	}
	
	public function hi()
	{
		$demo = new composerDemo;
		return $demo->hi();

	}
	
	public function hello()
	{
		return UnderlyingClass::doSomething();
	}
	
	public function demo()
	{
		return Demo::hi();
	}

}
