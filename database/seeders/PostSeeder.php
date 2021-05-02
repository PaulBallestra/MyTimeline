<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{

    public function run()
    {

        //$faker = Faker\Factory::create('fr_FR');

        DB::table('posts')->insert([
            'body' => "ezoidezoifhzifhezijezdoiejezjd oezjdozidjezoidjezoid joizejdoziedjzo ejzioedjzeoijoi",
            'user_id' => 1
        ]);

    }
}
