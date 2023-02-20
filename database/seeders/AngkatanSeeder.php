<?php

namespace Database\Seeders;

use App\Models\{Angkatan, User, LevelUser};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AngkatanSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Angkatan::insert([
      [
        'kode_angkatan' => Str::random(2),
        'tahun_masuk' => '2018',
        'tahun_keluar' => '2021'
      ],
      [
        'kode_angkatan' => Str::random(2),
        'tahun_masuk' => '2019',
        'tahun_keluar' => '2022'
      ],
      [
        'kode_angkatan' => Str::random(2),
        'tahun_masuk' => '2020',
        'tahun_keluar' => '2023'
      ],
    ]);

    LevelUser::insert([
      [
        'kode_level' => 'lv1',
        'nama_level' => 'admin',
        'keterangan' => 'admin'
      ]
    ]);

    User::create([
      'username' => 'admin',
      'kode_level' => 'lv1',
      'email' => 'admin@gmail.com',
      'password' => bcrypt('admin')
    ]);
  }
}
