<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => '投稿のタイトル',
        'body' => "本文。テストテストテストテスト",
    ];
});
