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
    Schema::create('siswa', function (Blueprint $table) {
      $table->char('nis_siswa', 9)->primary();

      $table->string('username', 20);
      $table->string('kode_kelas', 5);

      $table->string('nama_siswa', 30);
      $table->enum('jenis_kelamin', ['L', 'P']);
      $table->string('foto_siswa');

      $table
        ->foreign('username')
        ->references('username')
        ->on('akun')
        ->cascadeOnDelete();

      $table
        ->foreign('kode_kelas')
        ->references('kode_kelas')
        ->on('kelas')
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
    Schema::dropIfExists('siswa');
  }
};
