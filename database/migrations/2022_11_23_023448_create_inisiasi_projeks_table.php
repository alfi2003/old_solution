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
        Schema::create('inisiasi_projeks', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->unsignedBigInteger('id_witel');
            $table->string('divisi');
            $table->string('nama_hero');
            $table->string('no_telp');
            $table->string('nama_pelanggan');
            $table->string('jenis_produk');
            $table->text('deskripsi');
            // $table->string('lampiran');
            // $table->timestamps('dateline');
            $table->timestamps();

            $table->foreign('id_witel')->references('id')->on('witels')  ->update('cascade')->delete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inisiasi_projeks');
    }
};
