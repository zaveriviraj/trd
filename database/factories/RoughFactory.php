<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Rough;
use Faker\Generator as Faker;

$factory->define(Rough::class, function (Faker $faker) {
    return [
        'short_name' => $faker->name,
        'name' => $faker->name,
    ];
});
