<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Cut;
use Faker\Generator as Faker;

$factory->define(Cut::class, function (Faker $faker) {
    return [
        'abbr' => $faker->name,
        'name' => $faker->name,
    ];
});
