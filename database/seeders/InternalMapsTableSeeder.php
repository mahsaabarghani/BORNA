<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mall;
use App\Models\InternalMap;

class InternalMapsTableSeeder extends Seeder
{
    public function run(): void
    {
        Mall::all()->each(function ($mall) {
            InternalMap::factory()->count(3)->create([
                'mall_id' => $mall->id,
            ]);
        });
    }
}
