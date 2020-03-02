<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\book;
use Faker\Generator as Faker;

$factory->define(book::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'author' => $faker->word,
        'date_published' => $faker->word,
        'number_of_pages' => $faker->randomDigitNotNull,
        'type_of_book' => $faker->randomElement(['book', 'type_of_book']),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
