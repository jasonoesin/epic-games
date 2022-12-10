<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Feature;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::insert([
            ['name' => 'Single Player','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name' => 'Multiplayer','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name' => 'Co-op','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name' => 'Cloud Saves','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name' => 'Controller Support','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name' => 'Achievements','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name' => 'Cross Platform','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name' => 'MMO','created_at' => Carbon::now(),'updated_at'=> Carbon::now()]
        ]);
    }
}
