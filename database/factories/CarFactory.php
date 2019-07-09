<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'brand' => $faker->word(10),
        'model' => $faker->word(10),
        'year' => $faker->numberBetween(1960, 2019),
        'maxSpeed' => $faker->numberBetween(50, 350),
        'isAutomatic' => $faker->boolean(),
        'engine' => $faker->word(10),
        'numberOfDoors' => $faker->numberBetween(2,5)
    ];
});
