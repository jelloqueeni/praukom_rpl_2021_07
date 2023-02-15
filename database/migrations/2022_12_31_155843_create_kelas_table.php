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
    Schema::create('kelas', function (Blueprint $table) {
      $table->string('kode_kelas', 5)->primary();

      $table->char('kode_angkatan', 2);
      $table->char('kode_jurusan', 4);

      $table->string('nama_kelas');
      $table->tinyInteger('tingkatan');

      $table
        ->foreign('kode_angkatan')
        ->references('kode_angkatan')
        ->on('angkatan')
        ->cascadeOnDelete();

      $table
        ->foreign('kode_jurusan')
        ->references('kode_jurusan')
        ->on('jurusan')
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
    Schema::dropIfExists('kelas');
  }
};
