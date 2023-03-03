@extends('layouts.dashboard.app')

@section('content')
  <!-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-1 mb-2">
    <h2>Form</h2>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">Form Buat Akun</button>
  </div> -->

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
                    Form Buat Akun
                  </h1>
                  <form method="POST" action="{{ route('form.store') }}">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">Username</label>
                      <input type="text" id="username" class="form-control" placeholder= "masukkan username" name="username" >
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">E-mail</label>
                      <input type="text" id="email" class="form-control" placeholder= "masukkan e-mail" name="email" >
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                    
                    <div class="mb-3">
                      <label for="level_user" class="form-label">level_user</label>
                        <select class="form-select" name="level_user" aria-label="Default select example">
                            <option selected>Pilih Level</option>
                            @foreach($levelUser as $item)
                                <option value="{{ $item->kode_level }}">{{$item->nama_level}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-flex gap-5 justify-content-between align-items-center">
                      <a href="{{ route('jurusan.kelas.index') }}" class="btn btn-primary w-100">
                        Batalkan
                      </a>
                      <button type="submit" class="btn btn-primary w-100">Simpan</button>
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