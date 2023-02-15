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
    Schema::create('angkatan', function (Blueprint $table) {
      $table->char('kode_angkatan', 2)->primary();
      $table->char('tahun_masuk', 4);
      $table->char('tahun_keluar', 4);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('angkatan');
  }
};
