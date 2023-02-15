<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JurusanController extends Controller
{
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $kodeJurusan = collect(DB::select('SELECT max(kode_jurusan) AS kode_jurusan FROM jurusan'))->first()->kode_jurusan;

    if (!is_null($kodeJurusan)) {
      $angkaBaru = (string) substr($kodeJurusan, 3, 1) + 1;
      $kodeDefault = (string) substr($kodeJurusan, 0, 1);
      $KodeBaru = (string) $kodeDefault . str_pad($angkaBaru, 3, 0, STR_PAD_LEFT);
      $kodeJurusan = $KodeBaru;
    } else {
      $kodeJurusan = 'J001';
    }

    return view('dashboard.jurusan_dan_kelas.jurusan.tambah', compact('kodeJurusan'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $validatedData = $request->only('kode_jurusan', 'nama_jurusan');
    Jurusan::create($validatedData);
    return to_route('jurusan.kelas.index')->with('sukses', 'Berhasil menambahkan data jurusan baru');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Jurusan  $jurusan
   * @return \Illuminate\Http\Response
   */
  public function edit(Jurusan $jurusan)
  {
    return view('dashboard.jurusan_dan_kelas.jurusan.edit', compact('jurusan'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Jurusan  $jurusan
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Jurusan $jurusan)
  {
    $validatedData = $request->only('kode_jurusan', 'nama_jurusan');
    $jurusan->update($validatedData);
    return to_route('jurusan.kelas.index')->with('sukses', 'Berhasil memperbarui data jurusan');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Jurusan  $jurusan
   * @return \Illuminate\Http\Response
   */
  public function destroy(Jurusan $jurusan)
  {
    $jurusan->delete();
    return back()->with('sukses', 'Berhasil menghapus data jurusan');
  }
}
