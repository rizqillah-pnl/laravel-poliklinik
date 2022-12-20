<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pasien;
use App\Models\status;
use \App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        status::create([
            'nama' => 'Admin'
        ]);
        status::create([
            'nama' => 'Mahasiswa'
        ]);
        status::create([
            'nama' => 'Dosen'
        ]);
        status::create([
            'nama' => 'Dokter'
        ]);
        status::create([
            'nama' => 'Perawat'
        ]);

        User::factory(50)->create();
        Pasien::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
