<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor_plat')->unique();
            $table->string('nama');
            $table->integer('tahun');
            $table->enum('status', ['tersedia', 'tidak_tersedia']);
            $table->integer('harga_perjam');
            $table->integer('harga_paket');
            $table->longText('deskripsi');
            $table->enum('transmisi', ['manual', 'matic', 'manual/matic']);
            $table->string('foto_kendaraan');
            $table->integer('kategori_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kendaraans');
    }
};
