<?php

use Faker\Generator as Faker;
use App\Models\Article;

$factory->define(Article::class, function (Faker $faker) {
    $now_time = $faker->dateTime('now');
    return [
        'title' => $faker->title(20),
        'content' => $faker->paragraph(6),
        'user_id' => rand(1, 100),
        'is_free' => $faker->boolean(),
        'created_at' => $now_time,
        'updated_at' => $now_time,
    ];
});
