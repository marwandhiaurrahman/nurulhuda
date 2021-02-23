<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalPenerimaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_penerimaans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('tahun_ajaran_id')->references('id')->on('tahun_ajarans')->onDelete('cascade');
            $table->date('tgl_awal');
            $table->date('tgl_akhir');
            $table->date('tgl_pembayaran')->nullable();
            $table->date('tgl_tes')->nullable();
            $table->date('tgl_pengumuman')->nullable();
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
        Schema::dropIfExists('jadwal_penerimaans');
    }
}
