<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Page;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => fake()->name(),

            'phone' => fake()->phoneNumber(),

            'whats_number' => fake()->phoneNumber(),

            'governate' => fake()->name(),

            'city' => fake()->name(),

            'address' => fake()->address(),

            'mark' => fake()->word(),

            'page_id' => Page::inRandomOrder()->value('id'),

            'note' => fake()->sentence(),

            'employee' => fake()->name(),

            'user_id' => User::inRandomOrder()->value('id'),
        ];
    }
}
