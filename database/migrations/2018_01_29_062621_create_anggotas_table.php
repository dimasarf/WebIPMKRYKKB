<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('namaLengkap');
          $table->string('tanggalLahir');
          $table->string('jenisKelamin');
          $table->string('alamatJogja');
          $table->string('alamatBatam');
          $table->string('universitas');
          $table->string('jurusan');
          $table->string('angkatan');
          $table->string('idLine');
          $table->string('keanggotaan');
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
        Schema::dropIfExists('anggotas');
    }
}
