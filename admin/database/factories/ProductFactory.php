<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Tests\TestCase;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->text(30),
        'image' => $faker->imageUrl(),
        'likes' => 0,
    ];
});
