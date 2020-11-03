<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Product::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $faker = Faker\Factory::create();

        for($i = 0; $i < 15; $i++) {
            Product::create([
                'name' => $faker->word,
                'description' =>$faker->sentence(15),
                'price' => $faker->randomFloat(2, 200, 500),
                'cost' => $faker->randomFloat(2, 50, 200),
                'stock' => $faker->numberBetween(50, 250)
            ]);
        }
    }
}
