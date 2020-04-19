<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductVariantMeta;
use Faker\Generator as Faker;

$factory->define(ProductVariantMeta::class, function (Faker $faker) {
    return [
        'key' => $faker->randomElement(['color', 'size']),
        'value' => $faker->randomElement(['red', 'blue', 'large'])
    ];
});
