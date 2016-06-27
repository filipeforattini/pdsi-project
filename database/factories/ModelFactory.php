<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt('123456'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Customer::class, function (Faker\Generator $faker) {
    return [
        'firstname' => $faker->firstname,
        'lastname' => $faker->lastname,
    ];
});

$factory->define(App\Card::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'flag' => $faker->creditCardType,
        'number' => $faker->creditCardNumber,
        'expires_at' => $faker->creditCardExpirationDate,
        'expires_string' => $faker->creditCardExpirationDateString,
        'cvv' => mt_rand(100,999),
    ];
});

$factory->define(App\Transaction::class, function (Faker\Generator $faker) {
    return [
        'amount' => mt_rand(5,99999),
    	'transacted_at' => $faker->dateTimeBetween('-100 days','now'),
    ];
});
