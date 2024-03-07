<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 31,  'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 100, 'created_at' => now(), 'updated_at' => now(),],
            ['barang_id' => 32,  'user_id' => 2, 'stok_tanggal' => now(), 'stok_jumlah' => 60, 'created_at' => now(), 'updated_at' => now(),],
            ['barang_id' => 33,  'user_id' => 3, 'stok_tanggal' => now(), 'stok_jumlah' => 90, 'created_at' => now(), 'updated_at' => now(),],
            ['barang_id' => 34,  'user_id' => 2, 'stok_tanggal' => now(), 'stok_jumlah' => 80, 'created_at' => now(), 'updated_at' => now(),],
            ['barang_id' => 35,  'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 50, 'created_at' => now(), 'updated_at' => now(),],
            ['barang_id' => 36,  'user_id' => 3, 'stok_tanggal' => now(), 'stok_jumlah' => 75, 'created_at' => now(), 'updated_at' => now(),],
            ['barang_id' => 37,  'user_id' => 3, 'stok_tanggal' => now(), 'stok_jumlah' => 65, 'created_at' => now(), 'updated_at' => now(),],
            ['barang_id' => 38,  'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 25, 'created_at' => now(), 'updated_at' => now(),],
            ['barang_id' => 39,  'user_id' => 2, 'stok_tanggal' => now(), 'stok_jumlah' => 80, 'created_at' => now(), 'updated_at' => now(),],
            ['barang_id' => 40,  'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 90, 'created_at' => now(), 'updated_at' => now(),],
        ];

        DB::table('t_stok')->insert($data);
    }
}
