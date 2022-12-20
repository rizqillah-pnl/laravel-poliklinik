<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rekammds>
 */
class RekammdsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_user' => 1,
            'id_pasien' => 1,
            'tanggal_berobat' => fake()->date('Y_m_d'),
            'keluhan' => fake()->date('Y_m_d'),
            'diagnosis' => fake()->date('Y_m_d'),
            'no_induk' => '12345',
            'nama' => fake()->name(),
            'umur' => fake()->randomNumber(2, true),
            'jenis_kelamin' => Arr::random(['pria', 'wanita']),
            'alamat' => fake()->address(),
            // 'tanggal_berobat' => fake()->date('Y_m_d'),
        ];
    }
}
