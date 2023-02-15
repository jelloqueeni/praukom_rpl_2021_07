<?php

namespace App\Http\Controllers;

use App\Models\Angkatan;
use App\Models\Jurusan;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $kodeKelas = collect(DB::select('SELECT max(kode_kelas) AS kode_kelas FROM kelas'))->first()->kode_kelas;
    $jurusan = Jurusan::all();
    $angkatan = Angkatan::all();

    if (!is_null($kodeKelas)) {
      $angkaBaru = (string) substr($kodeKelas, 3, 1) + 1;
      $kodeDefault = (string) substr($kodeKelas, 0, 1);
      $KodeBaru = (string) $kodeDefault . str_pad($angkaBaru, 3, 0, STR_PAD_LEFT);
      $kodeKelas = $KodeBaru;
    } else {
      $kodeKelas = 'R001';
    }

    return view('dashboard.jurusan_dan_kelas.kelas.tambah', compact('kodeKelas', 'jurusan', 'angkatan'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $validatedData = $request->only([
      'kode_kelas',
      'nama_kelas',
      'kode_jurusan',
      'kode_angkatan',
      'tingkatan'
    ]);
    // dd($validatedData);
    $validatedData['tingkatan'] = (int) $validatedData['tingkatan'];
    Kelas::create($validatedData);
    return to_route('jurusan.kelas.index')->with('sukses', 'Berhasil menambahkan kelas baru');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Kelas  $kelas
   * @return \Illuminate\Http\Response
   */
  public function edit(Kelas $kelas)
  {
    $jurusan = Jurusan::all();
    $angkatan = Angkatan::all();
    return view('dashboard.jurusan_dan_kelas.kelas.edit', compact('kelas', 'jurusan', 'angkatan'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Kelas  $kelas
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Kelas $kelas)
  {
    $validatedData = $request->only([
      'kode_kelas',
      'nama_kelas',
      'kode_jurusan',
      'kode_angkatan',
      'tingkatan'
    ]);
    $validatedData['tingkatan'] = (int) $validatedData['tingkatan'];
    $kelas->update($validatedData);
    return to_route('jurusan.kelas.index')->with('sukses', 'Berhasil memperbarui data kelas');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Kelas  $kelas
   * @return \Illuminate\Http\Response
   */
  public function destroy(Kelas $kelas)
  {
    $kelas->delete();
    return back()->with('sukses', 'Berhasil menghapus data kelas');
  }
}
