<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
			'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
			'title' => 'Wheels',
			'description' => 'Super cool wheels. u dont wanna miss it',
			'price' => 10
		]);
		$product->save();
		
		$product = new \App\Product([
			'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
			'title' => 'Fruits',
			'description' => 'Super delicious Fruits. u dont wanna miss it',
			'price' => 20
		]);
		$product->save();
		
		$product = new \App\Product([
			'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
			'title' => 'Dresses',
			'description' => 'Super cool dresses. u dont wanna miss it',
			'price' => 100
		]);
		$product->save();
		$product = new \App\Product([
			'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
			'title' => 'Shoes',
			'description' => 'Super cool shoes. u dont wanna miss it',
			'price' => 50
		]);
		$product->save();
		
		$product = new \App\Product([
			'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
			'title' => 'Vests',
			'description' => 'Super cool vests. u dont wanna miss it',
			'price' => 30
		]);
		$product->save();
		
		$product = new \App\Product([
			'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
			'title' => 'Skirts',
			'description' => 'Super cool skirts. u dont wanna miss it',
			'price' => 70
		]);
		$product->save();
    }
}
