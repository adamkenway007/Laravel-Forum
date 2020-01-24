<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Model\Pertanyaan;
use App\Model\Balas;
use Faker\Generator as Faker;

$factory->define(Balas::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'question_id' => function () {
        	return Pertanyaan::all()->random();
        },
        'user_id' => function () {
        	return User::all()->random();
        }
    ];
});
