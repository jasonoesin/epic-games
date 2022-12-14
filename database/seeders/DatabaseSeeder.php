<?php

namespace Database\Seeders;

use App\Models\GenreDetail;
use App\Models\User;
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
         $this->call(
             [
                 CountrySeeder::class,
                 GameSeeder::class,
                 GenreSeeder::class,
                 GenreDetailSeeder::class,
                 FeatureSeeder::class,
                 FeatureDetailSeeder::class
             ]
         );

        User::factory(10)->create();

        User::factory()->create([
            'email'=>'admin@gmail.com',
            'password'=> bcrypt('admin')
        ]);
    }
}
