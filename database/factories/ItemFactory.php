<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'name' => $name = $faker->sentence,
        'slug' => strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)),
        'length' => $faker->numberBetween(50, 250),
        'color' => $faker->safeColorName(),
        'price' => $this->faker->randomFloat(2, 0, 500),
    ];
});
