<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample data for mahasiswa table
        $mahasiswas = [
            ['nama' => 'John Doe', 'umur' => 20, 'hobi' => 'Reading'],
            ['nama' => 'Jane Doe', 'umur' => 22, 'hobi' => 'Gaming'],
            // Add more sample data as needed
        ];

        // Insert data into the mahasiswa table
        Mahasiswa::insert($mahasiswas);
        // DB::table('mahasiswa')->insert($mahasiswas);
    }
}
