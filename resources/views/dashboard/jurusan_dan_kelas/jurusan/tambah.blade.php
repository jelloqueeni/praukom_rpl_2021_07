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
                    Form Tambah Jurusan
                  </h1>
                  <form method="POST" action="{{ route('jurusan.store') }}">
                    @csrf
                    <div class="mb-3">
                      <label for="kode_jurusan" class="form-label">Kode Jurusan</label>
                      <input type="text" class="form-control" id="kode_jurusan" name="kode_jurusan"
                        value="{{ $kodeJurusan }}" readonly>
                    </div>
                    <div class="mb-3">
                      <label for="nama_jurusan" class="form-label">Nama Jurusan</label>
                      <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan">
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
