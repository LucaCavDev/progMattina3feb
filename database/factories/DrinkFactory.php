<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Drink;
use Faker\Generator as Faker;

$factory->define(Drink::class, function (Faker $faker) {
    return [
        
        'name' => $faker -> word,
        'alchool_perc' => rand(0, 1000),
        'price' => rand(300, 1500), //prezzo in centesimi
    ];
});
