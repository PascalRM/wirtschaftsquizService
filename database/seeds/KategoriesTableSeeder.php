<?php

use Illuminate\Database\Seeder;
use App\kategorie;

class KategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i=0;$i<6;$i++){
            kategorie::create([
                'kategorie'=>$faker->name,
                'id_user'=>$faker->numberBetween([0][100]),
            ]);
        }
    }
}
