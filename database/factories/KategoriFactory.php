<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Model\Kategori::class, function (Faker $faker) {
	$word = $faker->word;
    return [
        'name'	=> $word,
        'slug'	=> Str::slug($word)
    ];
});
