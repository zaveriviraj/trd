<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Clarity;
use Faker\Generator as Faker;

$factory->define(Clarity::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
