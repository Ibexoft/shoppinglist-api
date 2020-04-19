<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductVariant;
use Faker\Generator as Faker;

$factory->define(ProductVariant::class, function (Faker $faker) {
    return [
        'unit' => $faker->randomElement(['kg', 'l', 'pc', 'size']),
        'quantity' => $faker->randomDigit,
        'mrp' => $faker->randomNumber(2),
    ];
});
