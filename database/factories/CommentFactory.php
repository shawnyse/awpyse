<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {

    return [

        'name' => $faker -> firstName . ' ' . $faker -> lastName,
        'comment' => $faker -> sentence (12, true),
        'likes' => $faker -> numberBetween (-50, 150),
    ];

});
