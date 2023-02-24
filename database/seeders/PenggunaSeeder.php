<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Pengguna = collect([
            [

                'username' => 'admin',
                'kode_level' => 'lv1',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('12345')
            ]
        ]);
        $Pengguna->each(fn ($pn) => DB::table('akun')->insert($pn));
    }
}
