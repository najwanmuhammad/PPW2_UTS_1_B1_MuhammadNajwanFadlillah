<?php

namespace Database\Seeders;

use App\Models\Daftar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 10; $i++) {
            Daftar::create ([
                'nama_pemain' => fake()->name(),
                'nomor_punggung' => fake()->numberBetween(1, 99),
                'posisi' => fake()->name('CF', 'SS', 'AMF', 'CMF', 'DMF', 'LWF', 'RWF', 'CB', 'RB', 'LB', 'GK'),
            ]);
        }
    }
}
