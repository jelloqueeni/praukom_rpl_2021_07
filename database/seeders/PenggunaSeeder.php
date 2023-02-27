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

                'username' => 'admin2',
                'kode_level' => 'lv1',
                'email' => 'ad@gmail.com',
                'password' => Hash::make('12345')
            ]
        ]);
        $Pengguna->each(fn ($pn) => DB::table('akun')->insert($pn));
    }
}
