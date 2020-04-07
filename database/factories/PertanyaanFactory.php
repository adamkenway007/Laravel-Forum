<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Model\Kategori;
use Illuminate\Support\Str;

$factory->define(App\Model\Pertanyaan::class, function (Faker $faker) {
	$title = $faker->sentence;
    return [
		'title'	=> $title,
		'slug'	=> Str::slug($title),
		'body'	=> $faker->text,
		'kategori_id'	=> function () {
		return Kategori::all()->random();
		},
		'user_id'		=> function () {
		return \App\User::all()->random();
		}
    ];
});
