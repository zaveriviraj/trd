<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Shape;
use Faker\Generator as Faker;

$factory->define(Shape::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
