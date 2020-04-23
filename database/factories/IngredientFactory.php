<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Ingredient;
use Faker\Generator as Faker;

$factory->define(Ingredient::class, function (Faker $faker) {
    return [
        "name" => $faker->word,
        "slug" => $faker->word,
        "prix" => $faker->numberBetween(300, 15000)
    ];
});
