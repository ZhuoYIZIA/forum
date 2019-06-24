<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    $word = $faker->text;
    return [
        'name' => $word,
        'slug' => str_slug($word),
    ];
});
