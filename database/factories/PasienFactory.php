<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'no_induk' => '12345',
            'nama' => fake()->name(),
            'umur' => fake()->randomNumber(2, true),
            'jenis_kelamin' => Arr::random(['pria','wanita']),
            'alamat' => fake()->address(),
            'tanggal_berobat' => fake()->date('Y_m_d'),

        ];
    }
}
