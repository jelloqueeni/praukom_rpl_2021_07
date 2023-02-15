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
    Schema::create('laporan', function (Blueprint $table) {
      $table->char('kode_laporan', 3)->primary();

      $table->char('kode_kegiatan', 5);
      $table->char('nip_kaprog', 11);
      $table->string('kode_ruangan', 10);

      $table->text('keterangan');

      $table
        ->foreign('kode_kegiatan')
        ->references('kode_kegiatan')
        ->on('kegiatan_piket')
        ->cascadeOnDelete();

      $table
        ->foreign('nip_kaprog')
        ->references('nip_kaprog')
        ->on('kepala_pemrograman')
        ->cascadeOnDelete();

      $table
        ->foreign('kode_ruangan')
        ->references('kode_ruangan')
        ->on('ruangan')
        ->cascadeOnDelete();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('laporan');
  }
};
