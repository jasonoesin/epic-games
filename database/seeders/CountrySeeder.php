<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Country::insert([
            ['name' => 'Indonesia','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name' => 'Malaysia','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name' => 'Singapore','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name' => 'Philippines','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name' => 'Vietnam','created_at' => Carbon::now(),'updated_at'=> Carbon::now()],
            ['name' => 'Cambodia','created_at' => Carbon::now(),'updated_at'=> Carbon::now()]
        ]);
    }
}
