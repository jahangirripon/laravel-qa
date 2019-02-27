<?php

use Faker\Generator as Faker;

$factory->define(App\Answer::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraphs(3,7),
        'user_id' => App\User::pluck('id')->random(),
        'votes_count' => rand(0,5),
    ];
});
