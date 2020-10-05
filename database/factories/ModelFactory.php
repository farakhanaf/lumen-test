<?php

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(4),
        'content' => $faker->paragraph(4),
        'user_id' => mt_rand(1, 10)
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'content' => $faker->paragraph(1),
        'post_id' => mt_rand(1, 50),
        'user_id' => mt_rand(1, 10)
    ];
});$factory->define(App\User::class, function (Faker\Generator $faker) {    $hasher = app()->make('hash');    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => $hasher->make("secret")
    ];
});