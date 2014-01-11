<?php

class CountriesTableSeeder extends Seeder {

	public function run()
	{
		$countries = array(
			array('name' => 'Россия',  'code' => 'ru'),
			array('name' => 'Украина', 'code' => 'ua')
		);

		// Uncomment the below to run the seeder
		DB::table('countries')->insert($countries);
	}

}
