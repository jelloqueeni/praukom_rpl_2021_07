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
        DB::unprepared("DROP FUNCTION IF EXISTS generate_new_kode_jurusan");
        DB::unprepared(
            "CREATE FUNCTION generate_new_kode_jurusan() 
        RETURNS char(4)
        BEGIN
        DECLARE kode_lama char(4);
        DECLARE kode_baru char(4);
        DECLARE getangka INT;
        DECLARE getkode char(4);
        SELECT MAX(kode_jurusan) INTO kode_lama FROM jurusan;
        IF (kode_lama IS NOT NULL) THEN
          SET getangka = SUBSTRING(kode_lama, 2, 3)+1;
          SET kode_baru = LPAD(getangka, 3, 0);
          SET getkode = CONCAT('J', kode_baru);
        ELSE
          SET getkode = 'J001';
        END IF;
        RETURN getkode;
      END ;"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('storefunction_jurusan');
    }
};
