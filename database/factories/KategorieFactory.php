<?php
/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 09.12.2017
 * Time: 12:18
 */

use Faker\Generator as Faker;

$factory->define(App\Kategorie::class, function (Faker $faker) {
    static $password;

    return [
        'kategorie'=>$faker->name,
        'id_user'=>$faker->numberBetween([0][100]),
    ];
});