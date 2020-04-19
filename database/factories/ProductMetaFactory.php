<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductMeta;
use Faker\Generator as Faker;

$factory->define(ProductMeta::class, function (Faker $faker) {
    return [
        'key' => $faker->randomElement(['color', 'size']),
        'value' => $faker->randomElement(['yellow', 'small', 'orange'])
    ];
});
