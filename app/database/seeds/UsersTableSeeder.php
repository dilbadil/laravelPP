<?php
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'username' => 'admin',
			'name' => 'admin',
			'email' => 'admin@admin.com',
			'password' => Hash::make('123456'),
			'remember_token' => 'true',
		]);
		$faker = Faker::create();
		foreach(range(1, 4) as $index)
		{
			User::create([
				'username' => $faker->userName,
				'name' => $faker->name,
				'email' => $faker->email,
				'password' => Hash::make('123456'),
				'remember_token' => 'true',
			]);
		}
	}
}
