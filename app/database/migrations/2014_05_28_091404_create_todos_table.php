<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::drop('todos');
		Schema::create('todos', function(Blueprint $table)
		{
			$table->engine = 'MyISAM';
			$table->increments('id');
			$table->integer('user_id');
			$table->string('title', 255);
			$table->string('completed', 4);
			$table->timestamps();
			
			$table->unique('user_id');
		});
		/*
		DB::table('todos')->insert(array(
			'user_id' => '1',
			'title' => 'hello world!',
			'completed' => 'yes',
		));
		*/
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('todos');
	}

}
