<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bottle;
use Faker\Generator as Faker;

$factory->define(Bottle::class, function (Faker $faker) {
    return [

        'name' => $faker -> word,
        'price' => rand(1500, 10000), // stiamo ragionando in centesimi quindi tra 15 e 100 euro

    ];
});
