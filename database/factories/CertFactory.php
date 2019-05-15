<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Cert;
use Faker\Generator as Faker;

$factory->define(Cert::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
