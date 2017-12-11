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
        for ($i = 0; $i < 5; $i++) {
            Kategorie::create([
                'kategorie' => "Kategorie".$i,
                'id_user' => $i,
            ]);
        }
    }
}
