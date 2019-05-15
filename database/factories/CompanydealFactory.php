<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Companydeal;
use Faker\Generator as Faker;

$factory->define(Companydeal::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
