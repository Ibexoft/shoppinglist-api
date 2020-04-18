<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\StoreBranch;
use Faker\Generator as Faker;

$factory->define(StoreBranch::class, function (Faker $faker) {
    return [
        'name' => $faker->streetName,
        'address' => $faker->streetAddress,
        'map_location' => $faker->latitude + ',' + $faker->longitude,
    ];
});
