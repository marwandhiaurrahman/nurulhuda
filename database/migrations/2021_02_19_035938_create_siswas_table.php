<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('asalsekolah');
            $table->string('alamat');
            $table->string('status');
            $table->string('jenjang');
            $table->string('nopendaftaran')->nullable();
            $table->string('nisn')->nullable();
            $table->string('nik')->nullable();
            $table->string('kk')->nullable();
            $table->string('namapanggilan')->nullable();
            $table->string('tempatlahir')->nullable();
            $table->string('tanggallahir')->nullable();
            $table->string('negara')->nullable();
            $table->string('anakke')->nullable();
            $table->string('jumlahsaudarakandung')->nullable();
            $table->string('jumlahsaudaratiri')->nullable();
            $table->string('jumlahsaudaraangkat')->nullable();
            $table->string('statuskeluarga')->nullable();
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
        Schema::dropIfExists('siswas');
    }
}
