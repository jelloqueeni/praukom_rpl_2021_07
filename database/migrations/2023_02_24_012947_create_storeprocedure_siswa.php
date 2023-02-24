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
        DB::unprepared('DROP PROCEDURE IF EXISTS insert_siswa');
        DB::unprepared(
            "CREATE PROCEDURE insert_siswa(
                nis_siswa_s char(9), username_s varchar(20), kode_kelas_s varchar(5), nama_siswa_s varchar(30), jenis_kelamin_s enum('laki-laki','perempuan'), foto_siswa_s varchar(255),
                kode_level char(3), email_s varchar(50), password_s varchar(25))

          BEGIN
          
            DECLARE id_a int(11);

            INSERT INTO akun (username, kode_level, email, password) VALUES ('lv2', username_s, email_s, password_s);
            SELECT LAST_INSERT_ID()  INTO id_a;

            INSERT INTO siswa (nis_siswa, kode_kelas, nama_siswa, jenis_kelamin, foto_siswa) 
            VALUES (nis_siswa_s, kode_kelas);
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
        Schema::dropIfExists('storeprocedure_siswa');
    }
};
