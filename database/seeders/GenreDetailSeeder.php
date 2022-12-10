<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Genre;
use App\Models\GenreDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class GenreDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $game_ids = Game::pluck('id')->toArray();

        foreach ($game_ids as $game_id){

            $genre_ids = Arr::random(Genre::pluck('id')->toArray(), rand(1,4)) ;

            foreach ($genre_ids as $genre_id){

                GenreDetail::create([
                    'game_id' => $game_id,
                    'genre_id' => $genre_id
                ]);
            }
        }

    }
}
