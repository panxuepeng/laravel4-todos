<?php
class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
			'username' => 'panxuepeng',
			'password' => Hash::make('panxuepeng'),
			'name' => 'panxuepeng',
		));
		
		
    }

}