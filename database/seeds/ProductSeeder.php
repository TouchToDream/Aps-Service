<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            Product::create([
                'name' => $faker->word,
                'article' => $faker->unique()->randomNumber(6),
                'purchase_price' => $faker->randomFloat(2, 1, 1000),
                'quantity' => $faker->numberBetween(1, 100),
                'selling_price' => $faker->randomFloat(2, 10, 1000),
            ]);
        }
    }
}
