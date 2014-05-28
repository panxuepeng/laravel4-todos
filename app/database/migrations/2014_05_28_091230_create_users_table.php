<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::drop('users');
		Schema::create('users', function(Blueprint $table)
		{
			$table->engine = 'MyISAM';
			$table->increments('id');
			$table->string('username', 32);
			$table->string('password', 64);
			$table->string('name', 64);
			$table->timestamps();
			
			$table->unique('username');
		});
		/*
		DB::table('users')->insert(array(
			'username' => 'panxuepeng',
			'password' => Hash::make('panxuepeng'),
			'name' => 'panxuepeng',
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
		Schema::drop('users');
	}

}
