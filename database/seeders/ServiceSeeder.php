<?php

namespace Database\Seeders;

use App\Models\Service;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = ['service1', 'service2', 'service3', 'service4', 'service5', 'service6', 'service7', 'service8', 'service9', 'service10'];
        $fakers = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            Service::create([
                'name' => $service[$i],
                'description' => $fakers->text,
                'duration' => $fakers->numberBetween(1, 10),
                'price' => $fakers->randomFloat(2, 0, 100),
            ]);
        }
    }
}
