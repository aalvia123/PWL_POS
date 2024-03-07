<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1,  'user_id' => 2, 'pembeli' => 'Alvia', 'penjualan_kode' => 'DW001','penjualan_tanggal' =>'2024-12-23', 'created_at' => now(), 'updated_at' => now(),],
            ['penjualan_id' => 2,  'user_id' => 1, 'pembeli' => 'Ana', 'penjualan_kode' => 'DW002','penjualan_tanggal' =>'2024-03-22', 'created_at' => now(), 'updated_at' => now(),],
            ['penjualan_id' => 3,  'user_id' => 2, 'pembeli' => 'Dwina', 'penjualan_kode' => 'DW003','penjualan_tanggal' =>'2024-11-02', 'created_at' => now(), 'updated_at' => now(),],
            ['penjualan_id' => 4,  'user_id' => 3, 'pembeli' => 'Azel', 'penjualan_kode' => 'DW004','penjualan_tanggal' =>'2024-03-09', 'created_at' => now(), 'updated_at' => now(),],
            ['penjualan_id' => 5,  'user_id' => 3, 'pembeli' => 'Ancika', 'penjualan_kode' => 'DW005','penjualan_tanggal' =>'2024-03-19', 'created_at' => now(), 'updated_at' => now(),],
            ['penjualan_id' => 6,  'user_id' => 1, 'pembeli' => 'Anwar', 'penjualan_kode' => 'DW006','penjualan_tanggal' =>'2024-02-09', 'created_at' => now(), 'updated_at' => now(),],
            ['penjualan_id' => 7,  'user_id' => 1, 'pembeli' => 'Hanif', 'penjualan_kode' => 'DW007','penjualan_tanggal' =>'2024-03-01', 'created_at' => now(), 'updated_at' => now(),],
            ['penjualan_id' => 8,  'user_id' => 3, 'pembeli' => 'Bima', 'penjualan_kode' => 'DW008','penjualan_tanggal' =>'2024-04-27', 'created_at' => now(), 'updated_at' => now(),],
            ['penjualan_id' => 9,  'user_id' => 1, 'pembeli' => 'Inayah', 'penjualan_kode' => 'DW009','penjualan_tanggal' =>'2024-05-24', 'created_at' => now(), 'updated_at' => now(),],
            ['penjualan_id' => 10,  'user_id' => 2, 'pembeli' => 'Andi', 'penjualan_kode' => 'DW010','penjualan_tanggal' =>'2024-09-22', 'created_at' => now(), 'updated_at' => now(),],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}

