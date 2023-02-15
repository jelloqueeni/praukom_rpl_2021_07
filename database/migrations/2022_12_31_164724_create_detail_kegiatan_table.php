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
    Schema::create('detail_kegiatan', function (Blueprint $table) {
      $table->char('kode_kegiatan', 5);
      $table->char('kode_pekerjaan', 4);
      $table->char('nis_siswa', 9);
      $table->text('hasil_pekerjaan');
      $table->text('keterangan');

      $table
        ->foreign('kode_kegiatan')
        ->references('kode_kegiatan')
        ->on('kegiatan_piket')
        ->cascadeOnDelete();

      $table
        ->foreign('kode_pekerjaan')
        ->references('kode_pekerjaan')
        ->on('pekerjaan')
        ->cascadeOnDelete();

      $table
        ->foreign('nis_siswa')
        ->references('nis_siswa')
        ->on('siswa')
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
    Schema::dropIfExists('detail_kegiatan');
  }
};
