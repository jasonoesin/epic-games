<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\FeatureDetail;
use App\Models\Game;
use App\Models\Genre;
use App\Models\GenreDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class FeatureDetailSeeder extends Seeder
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

            $feature_ids = Arr::random(Feature::pluck('id')->toArray(), rand(1,3)) ;

            foreach ($feature_ids as $feature_id){

                FeatureDetail::create([
                    'game_id' => $game_id,
                    'feature_id' => $feature_id
                ]);
            }
        }
    }
}
