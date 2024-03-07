<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('t_penjualan')) {
            Schema::create('t_penjualan', function (Blueprint $table) {
                $table->id('penjualan_id');
                $table->unsignedBigInteger('user_id')->index(); // indexing untuk Foreignkey
                $table->string('pembeli');
                $table->string('penjualan_kode');
                $table->datetime('penjualan_tanggal');
                $table->timestamps();

                // Mendefinisikan Foreign Key pada kolom level_id mengacu pada kolom level_id di tabel m_level
                $table->foreign('user_id')->references('user_id')->on('m_user');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan');
    }
};
