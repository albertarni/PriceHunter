<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Product;
use App\Models\Image;

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
            $product = Product::create([
                'name' => $faker->name,
                'description' => $faker->sentence(),
                'price' => $faker->randomFloat(2, 20, 200)
            ]);

            $image = Image::create([
                'name' => $faker->words(3, true),
                'url'  => $faker->imageUrl(263, 336, 'technics')
            ]);

            $product->images()->sync([$image->id]);
        }
    }
}
