<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\City;
use App\Models\Governate;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),

            'role' => fake()->randomElement([
                'admin',
                'user',
                'moderator',
            ]),

            'phone' => fake()->phoneNumber(),

            'email' => fake()->unique()->safeEmail(),

            'password' => Hash::make('password'),

            'category_id' => Category::query()->value('id'),

            'code' => strtoupper(fake()->unique()->bothify('USR###??')),

            'address' => fake()->address(),

            'city_id' => City::inRandomOrder()->value('id'),

            'governate_id' => Governate::inRandomOrder()->value('id'),

            'image' => fake()->imageUrl(),
            'is_activated' => fake()->boolean(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
