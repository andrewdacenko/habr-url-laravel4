<?php

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('products')->truncate();

		$products = array(
			array('name' => 'Lenovo IdeaPad S110 (59366438) Black', 'price' => 1899, 'city_id' => 1),
			array('name' => 'Acer Aspire V5-131-10074G50akk (NX.M89EU.006) Black', 'price' => 2999, 'city_id' => 2),
			array('name' => 'Acer Aspire V5-131-10072G32nkk (NX.M89EU.005) Black', 'price' => 2888, 'city_id' => 3),
			array('name' => 'Acer Aspire V5-123-12104G50nkk (NX.MFQEU.002) Black', 'price' => 2999, 'city_id' => 1),
			array('name' => 'Lenovo IdeaPad S110 (59366436) White', 'price' => 2399, 'city_id' => 2),
			array('name' => 'Acer Aspire V5-123-12104G50nss (NX.MFREU.003) Silver', 'price' => 2999, 'city_id' => 3),
			array('name' => 'Asus Transformer Book T100TA 32GB (T100TA-DK002H)', 'price' => 3690, 'city_id' => 1),
			array('name' => 'Acer Aspire V5-123-12102G32nkk (NX.MFQEU.001) Black', 'price' => 2799, 'city_id' => 2),
			array('name' => 'Lenovo IdeaPad S110 (59366435) Black', 'price' => 2399, 'city_id' => 3),
			array('name' => 'Lenovo IdeaPad S110 (59366620) Flower', 'price' => 2349, 'city_id' => 1),
			array('name' => 'Lenovo IdeaPad S110 (59366433) White', 'price' => 2319, 'city_id' => 2),
			array('name' => 'Lenovo ThinkPad X121e (3053AC8-4GB) Midnight Black', 'price' => 2644, 'city_id' => 3),
			array('name' => 'Asus Transformer Book T100TA 64GB (T100TA-DK003H)', 'price' => 4440, 'city_id' => 1),
		);

		foreach ($products as $product) {
			Product::create($product);
		}
	}

}
