<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CoinWallet;

class CoinWalletsTableSeeder extends Seeder
{
    public function run(): void
    {
        // فرض: داریم برای هر کاربر یک کیف می‌سازیم
        foreach (\App\Models\User::all() as $user) {
            CoinWallet::factory()->create([
                'user_id' => $user->id,
            ]);
        }
    }
}

