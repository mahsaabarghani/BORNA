<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Store;
use App\Models\StoreAnalytics;

class StoreAnalyticsTableSeeder extends Seeder
{
    public function run(): void
    {
        Store::all()->each(function ($store) {
            StoreAnalytics::factory()->count(10)->create([
                'store_id' => $store->id,
                'recorded_at' => now()->subDays(rand(1, 60)),
            ]);
        });
    }
}
