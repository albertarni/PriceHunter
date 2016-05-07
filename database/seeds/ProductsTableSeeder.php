<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $item) {
            Product::create([
                'name' => $faker->name,
                'description' => $faker->sentence(),
                'price' => $faker->randomFloat(2, 20, 200)
            ]);
        }
    }
}
