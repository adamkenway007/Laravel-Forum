<?php

use App\User;
use App\Model\Kategori;
use App\Model\Pertanyaan;
use App\Model\Balas;
use App\Model\Suka;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	factory(User::class, 10)->create();
    	factory(Kategori::class, 5)->create();
    	factory(Pertanyaan::class, 10)->create();
    	factory(Balas::class, 50)->create()->each(function ($reply) {
    		return $reply->suka()->save(factory(Suka::class)->make());
    	});

    }
}
