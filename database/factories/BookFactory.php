<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'description' => $faker->realText(255),
        'genre' => $faker->word,
        'pages' => $faker->unique()->randomNumber($nbDigits = 3),
    ];
});
