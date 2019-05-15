<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Companysize;
use Faker\Generator as Faker;

$factory->define(Companysize::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
