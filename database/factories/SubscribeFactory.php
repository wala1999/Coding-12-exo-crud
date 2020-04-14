<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\subscribe;
use Faker\Generator as Faker;

$factory->define(Subscribe::class, function (Faker $faker) {
    return [
        'titre'=>$faker->name(),
        'description'=>$faker->sentence(),
    ];
});
