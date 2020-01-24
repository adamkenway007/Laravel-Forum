<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Model\Kategori;
use App\Model\Pertanyaan;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Pertanyaan::class, function (Faker $faker) {
	$title = $faker->sentence;
    return [
		'title'	=> $title,
		'slug'	=> Str::slug($title),
		'body'	=> $faker->text,
		'category_id'	=> function () {
		return Kategori::all()->random();
		},
		'user_id'		=> function () {
		return User::all()->random();
		}
    ];
});
