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
    Schema::create('akun', function (Blueprint $table) {
      $table->string('username', 20)->primary();

      $table->char('kode_level', 3);

      $table->string('email', 50);
      $table->string('password', 25);

      $table
        ->foreign('kode_level')
        ->references('kode_level')
        ->on('level_user')
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
    Schema::dropIfExists('akun');
  }
};
