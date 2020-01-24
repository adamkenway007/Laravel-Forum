<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Model\Suka;
use Faker\Generator as Faker;

$factory->define(Suka::class, function (Faker $faker) {
    return [
      'user_id'		=> function () {
        	return User::all()->random();
        }
    ];
});
