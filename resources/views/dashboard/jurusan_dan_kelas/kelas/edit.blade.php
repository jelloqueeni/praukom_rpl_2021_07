@extends('layouts.dashboard.app')

@section('content')
  <section class="section dashboard">
    <div class="row">
      <!-- Left side columns -->
      <div class="col">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-6">
            <div class="card p-1">
              <div class="table-responsive">
                <div class="card-body">
                  <h1 class="card-title pt-0 fs-3">
                    Form Edit Kelas
                  </h1>
                  <form method="POST" action="{{ route('kelas.update', $kelas->kode_kelas) }}">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                      <label for="kode_kelas" class="form-label">Kode Kelas</label>
                      <input type="text" class="form-control" id="kode_kelas" name="kode_kelas"
                        value="{{ $kelas->kode_kelas }}" readonly>
                    </div>
                    <div class="mb-3">
                      <label for="nama_kelas" class="form-label">Nama Kelas</label>
                      <input type="text" class="form-control" id="nama_kelas" name="nama_kelas"
                        value="{{ $kelas->nama_kelas }}">
                    </div>
                    <div class="mb-3">
                      <label for="kode_jurusan" class="form-label">Jurusan</label>
                      <select class="form-select" name="kode_jurusan">
                        <option selected>-- Pilih Jurusan --</option>
                        @foreach ($jurusan as $item)
                          <option value="{{ $item->kode_jurusan }}" @selected($kelas->kode_jurusan === $item->kode_jurusan)>
                            {{ $item->nama_jurusan }}
                          </option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="kode_angkatan" class="form-label">Angkatan</label>
                      <select class="form-select" name="kode_angkatan">
                        <option selected>-- Pilih Angkatan --</option>
                        @foreach ($angkatan as $item)
                          <option value="{{ $item->kode_angkatan }}" @selected($kelas->kode_angkatan === $item->kode_angkatan)>
                            {{ $item->tahun_masuk }} - {{ $item->tahun_keluar }}
                          </option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="tingkatan" class="form-label">Tingkatan</label>
                      <select class="form-select" name="tingkatan">
                        <option selected>-- Pilih Tingkatan --</option>
                        <option value="10" @selected($kelas->tingkatan === 10)>10</option>
                        <option value="11" @selected($kelas->tingkatan === 11)>11</option>
                        <option value="12" @selected($kelas->tingkatan === 12)>12</option>
                      </select>
                    </div>
                    <div class="d-flex gap-5 justify-content-between align-items-center">
                      <a href="{{ route('jurusan.kelas.index') }}" class="btn btn-primary w-100">
                        Batalkan
                      </a>
                      <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Left side columns -->
    </div>
  </section>
@endsection
