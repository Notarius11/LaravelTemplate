<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		DB::table('users')->delete();

        User::create(array('username' => 'Notarius', 'password' => Hash::make('hers45gf')));


	}

}
