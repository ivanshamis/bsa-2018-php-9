<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Currency::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->company,
        'short_name' => $faker->unique()->company,
        'logo_url' => $faker->url,
        'price' => $faker->randomFloat(2,0,1000000),
    ];
});