<?php

use Faker\Generator as Faker;
use App\User;
use App\Category;

$factory->define(App\Question::class, function (Faker $faker) {
    $tittle = $faker->sentence;
    return [
        'tittle' => $tittle,
        'slug' => str_slug($tittle),
        'body' => $faker->text,
        'category_id' => function(){
            return Category::all()->random();
        },
        'user_id' => function(){
            return User::all()->random();
        },
    ];
});
