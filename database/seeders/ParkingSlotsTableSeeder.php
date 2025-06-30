<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mall;
use App\Models\ParkingSlot;

class ParkingSlotsTableSeeder extends Seeder
{
    public function run(): void
    {
        Mall::all()->each(function ($mall) {
            ParkingSlot::factory()->count(50)->create([
                'mall_id' => $mall->id,
            ]);
        });
    }
}

