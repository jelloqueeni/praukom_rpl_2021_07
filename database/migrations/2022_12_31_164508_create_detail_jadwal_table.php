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
    Schema::create('detail_jadwal', function (Blueprint $table) {
      $table->char('nis_siswa', 9);
      $table->char('kode_jadwal', 3);

      $table
        ->foreign('nis_siswa')
        ->references('nis_siswa')
        ->on('siswa')
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
    Schema::dropIfExists('detail_jadwal');
  }
};
