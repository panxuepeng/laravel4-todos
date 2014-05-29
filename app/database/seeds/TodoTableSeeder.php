<?php
class TodoTableSeeder extends Seeder {

    public function run()
    {
        DB::table('todos')->delete();

        Todo::create(array(
			'user_id' => '1',
			'title' => 'hello world!',
			'completed' => 'yes',
		));
		
		
    }

}