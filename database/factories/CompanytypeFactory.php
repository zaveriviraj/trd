<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Companytype;
use Faker\Generator as Faker;

$factory->define(Companytype::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
