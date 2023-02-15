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
    Schema::create('kegiatan_piket', function (Blueprint $table) {
      $table->char('kode_kegiatan', 5)->primary();

      $table->string('kode_kelas', 5);
      $table->string('kode_ruangan', 10);
      $table->char('kode_jadwal', 3);

      $table->date('tanggal');
      $table->tinyInteger('jumlah_siswa');
      $table->string('foto_sebelum_piket');
      $table->string('video_sebelum_piket');
      $table->string('foto_sesudah_piket');
      $table->string('video_sesudah_piket');

      $table
        ->foreign('kode_kelas')
        ->references('kode_kelas')
        ->on('kelas')
        ->cascadeOnDelete();

      $table
        ->foreign('kode_ruangan')
        ->references('kode_ruangan')
        ->on('ruangan')
        ->cascadeOnDelete();

      $table
        ->foreign('kode_jadwal')
        ->references('kode_jadwal')
        ->on('jadwal')
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
    Schema::dropIfExists('kegiatan_piket');
  }
};
