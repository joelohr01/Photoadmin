<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::create([
            'username' => 'joelohr',
            'first_name' => 'Joe',
            'last_name'  => 'Lohr',
            'email'      => 'deadlow@gmail.com',
            'password'   => Hash::make('1234'),
		]);
	}

}