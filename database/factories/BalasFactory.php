<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Model\Pertanyaan;

$factory->define(App\Model\Balas::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'pertanyaan_id' => function () {
        	return Pertanyaan::all()->random();
        },
        'user_id' => function () {
        	return \App\User::all()->random();
        }
    ];
});
