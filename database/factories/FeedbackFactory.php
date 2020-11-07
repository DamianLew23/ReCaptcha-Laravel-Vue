<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Feedback::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'message' => $faker->paragraph(3)
    ];
});
