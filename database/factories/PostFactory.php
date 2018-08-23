<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'is_active' => $faker->numberBetween(0, 1),
        'content' => $faker->paragraph(20),
        'category_id' => $faker->numberBetween(31, 38),
    ];
});
