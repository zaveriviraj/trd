<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Cut;
use Faker\Generator as Faker;

$factory->define(Cut::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
