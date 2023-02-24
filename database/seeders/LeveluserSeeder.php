<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LeveluserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $leveluser = collect([
            [

                'kode_level' => 'lv1',
                'nama_level' => 'admin',
                'keterangan' => 'ini admin'

            ]
        ]);
        $leveluser->each(fn ($lu) => DB::table('level_user')->insert($lu));
    }
}
