<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name(),
            'no_induk' => fake()->numberBetween(1111111111, 999999999999),
            'jenis_kelamin' => Arr::random(['pria', 'wanita']),
            'alamat' => fake()->address(),
            'username' => fake()->name(),
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
            'id_status' => Arr::random([1, 2, 3, 4, 5]),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
