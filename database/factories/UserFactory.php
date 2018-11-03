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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'user_name'=>$faker->word,
        'date_of_birth'=>Carbon\Carbon::parse('October 5 1991'),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Fav_movie::class, function (Faker $faker) {
    return [
        'user_id' => App\User::all()->random()->id,
        'name' => $faker->name,
        'details' => $faker->paragraph(10),
        'casts' => $faker->paragraph(10),

    ];
});