<?php

namespace Database\Seeders;

use App\Models\UsersCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Sales',
            'Marketing',
            'Customer Service',
            'Manager',
            'Admin',
        ];

        foreach ($categories as $category) {
            UsersCategory::create([
                'name' => $category,
            ]);
        }
    }
}
