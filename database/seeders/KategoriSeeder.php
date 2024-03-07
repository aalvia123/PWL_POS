<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_kode' => 'K001',
                'kategori_nama' => 'Aksesoris',
                'created_at' => now(),
                'updated_at' => now(),

            ],
        
            [
                'kategori_kode' => 'K002',
                'kategori_nama' => 'Makanan',
                'created_at' => now(),
                'updated_at' => now(),

            ],

            [
                'kategori_kode' => 'K003',
                'kategori_nama' => 'Pakaian',
                'created_at' => now(),
                'updated_at' => now(),

            ],

            [
                'kategori_kode' => 'K004',
                'kategori_nama' => 'Kecantikan',
                'created_at' => now(),
                'updated_at' => now(),

            ],

            [
                'kategori_kode' => 'K005',
                'kategori_nama' => 'Olahraga',
                'created_at' => now(),
                'updated_at' => now(),

            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
