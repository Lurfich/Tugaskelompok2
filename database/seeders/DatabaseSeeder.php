<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Poli;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Poli::factory()->create([
            'nama' => 'kandungan'
        ]);
        Poli::factory()->create([
            'nama' => 'anak'
        ]);
        Poli::factory()->create([
            'nama' => 'penyakit dalam'
        ]);
        Poli::factory()->create([
            'nama' => 'penyakit dalam'
        ]);
    }
}
