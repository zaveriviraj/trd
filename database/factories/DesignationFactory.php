<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Designation;
use Faker\Generator as Faker;

$factory->define(Designation::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
