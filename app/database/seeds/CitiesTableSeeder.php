<?php

class CitiesTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        // DB::table('cities')->truncate();

        $cities = array(
            array('name' => 'Москва', 'country_id' => 1),
            array('name' => 'Санкт-Петербург', 'country_id' => 1),
            array('name' => 'Киев', 'country_id' => 2),
        );

        // Uncomment the below to run the seeder
        foreach ($cities as $city) {
            City::create($city);
        }
    }

}
