<?php

namespace Database\Seeders;

use App\Models\Item;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $item = ['daging', 'sayur', 'buah', 'minuman'];
        $fakers = Factory::create();
        for ($i = 0; $i < 4; $i++) {
            Item::create([
                'name' => $item[$i],
                'description' => $fakers->text,
                'image' => $fakers->imageUrl(640, 480, 'food'),
                'price' => $fakers->randomFloat(2, 0, 100),
            ]);
        }
    }
}
