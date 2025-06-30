<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mall;
use App\Models\Event;

class EventsTableSeeder extends Seeder
{
    public function run(): void
    {
        Mall::all()->each(function ($mall) {
            Event::factory()->count(3)->create([
                'mall_id'    => $mall->id,
                'start_date' => now()->addDays(rand(1, 30)),
                'end_date'   => now()->addDays(rand(31, 60)),
            ]);
        });
    }
}

