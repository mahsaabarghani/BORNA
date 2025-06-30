<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            MallsTableSeeder::class,
            StoresTableSeeder::class,
            CategoriesTableSeeder::class,
            ProductsTableSeeder::class,
            CoinWalletsTableSeeder::class,
            StoreAnalyticsTableSeeder::class,
            EventsTableSeeder::class,
            ParkingSlotsTableSeeder::class,
            InternalMapsTableSeeder::class,
        ]);
    }

}
