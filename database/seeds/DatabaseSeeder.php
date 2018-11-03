<?php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
         factory(App\User::class, 10)->create();
       // factory(App\Fav_movie::class, 100)->create();
    }
}
