<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::insert([
            ['name' => 'RPG','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name' => 'Open World','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name' => 'Adventure','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name' => 'Action','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name' => 'Dungeon Crawler','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name' => 'Indie','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name' => 'Racing','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name' => 'Shooter','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name' => 'Open World','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name' => 'Narration','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
        ]);
    }
}
