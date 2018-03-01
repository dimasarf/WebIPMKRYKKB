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
          $table->string('namaLengkap', 191);
          $table->string('tanggalLahir',191);
          $table->string('jenisKelamin',191);
          $table->string('alamatJogja',191);
          $table->string('alamatBatam',191);
          $table->string('universitas',191);
          $table->string('jurusan',191);
          $table->string('angkatan',191);
          $table->string('idLine',191);
          $table->string('keanggotaan',191);
          $table->string('noPribadi',191);
          $table->string('agama',191);
          $table->string('asalSekolah',191);
          $table->string('tempatLahir',191);
          $table->string('sumberInformasi',191);
          $table->string('noOrtu',191);
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
