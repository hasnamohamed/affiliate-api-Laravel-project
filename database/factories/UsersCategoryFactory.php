<?php

namespace Database\Factories;

use App\Models\UsersCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<UsersCategory>
 */
class UsersCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'ملابس',
                'أحذية',
                'شنط',
                'إلكترونيات',
                'إكسسوارات',
                'موبايلات',
                'ساعات',
            ]),
        ];
    }
}
