<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Rate;
use App\Models\Detail;
use App\Models\ProductColor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(20)->create();
        // User::factory(10)->create();
        $this->call([
            GovernateSeeder::class,
            CitySeeder::class,
            ColorSeeder::class,
            UserSeeder::class,
            PageSeeder::class,
        ]);

//        User::factory(50)->create();

        Product::factory(10)->create();

        ProductColor::factory(20)->create();

        Detail::factory(10)->create();

        Rate::factory(10)->create();

        Customer::factory(10)->create();

        Order::factory(20)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
