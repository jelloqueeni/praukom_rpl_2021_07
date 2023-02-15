<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kelas;
use Illuminate\Http\Request;

class JurusanKelasController extends Controller
{
  /**
   * Handle the incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Request $request)
  {
    $jurusan = Jurusan::all();
    $kelas = Kelas::all();
    return view('dashboard.jurusan_dan_kelas.index', compact('jurusan', 'kelas'));
  }
}
