<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $os = [
            "Windows 10 (64 bits)",
            "Windows 10 (32 bits)",
            "Windows 7 64-bit",
            "Windows 7 32-bit"
        ];

        $cpu = [
            "Intel Core i5-3470",
            "AMD FX-4350",
            "Intel Core i7-4790",
            "AMD Ryzen 5 1600",
            "AMD FX-9590",
            "Intel Core i7-6700K"
        ];

        $gpu = [
            'Radeon R7 25',
            'GeForce GT 640',
            'GeForce GTX 970',
            'Radeon R9 390X',
            'Radeon RX 590',
            'GeForce RTX 3070',
            'Radeon RX 6800'
        ];


        $price = $this->faker->numberBetween(10, 1000) * 1000;
        $discount = 0;
        if(rand(0,1) == 0){
            $discount = $this->faker->numberBetween(0, 1000) * 1000;

            if($discount >= $price)
                $discount = $price;
        }


        return [
            "price" =>  $price,
            "discount" => $discount,
            "description" => $this->faker->text(500),
            "developer" => $this->faker->company(),
            "publisher" => $this->faker->company(),

            'release' => $this->faker->dateTimeBetween('-22 years'),
            'platform' => "Windows",
            'rating' => rand(10, 100) / 10,
            'os' => $this->faker->randomElement($os),
            'cpu' => $this->faker->randomElement($cpu),

            'memory' => rand(1,16) . " GB RAM",
            'gpu' => $this->faker->randomElement($gpu),
            'directx' => "DirectX" . rand(9,12),
            'storage' => rand(10, 20) . " GB",
            'total_played' => rand(0, 500),
            'total_sold' => rand(0, 500),
        ];
    }
}
