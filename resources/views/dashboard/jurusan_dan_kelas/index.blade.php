@extends('layouts.dashboard.app')

@section('content')
  <section class="section dashboard">
    <div class="row">
      <!-- Left side columns -->
      <div class="col">
        @if (session()->has('sukses'))
          <div class="mb-3 alert alert-success alert-dismissible fade show" role="alert">
            {{ session('sukses') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <div class="row">
          <div class="col-lg-5 col-md-6">
            <div class="card">
              <div class="table-responsive">
                <div class="card-body">
                  <div class="mb-3 d-flex justify-content-end">
                    <a href="{{ route('jurusan.create') }}" class="btn btn-outline-primary">
                      <i class="bi bi-plus-lg"></i>
                      <span>Tambah</span>
                    </a>
                  </div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="text-nowrap vertical-align-middle text-center" scope="col">Kode Jurusan</th>
                        <th class="text-nowrap vertical-align-middle text-center" scope="col">Nama Jurusan</th>
                        <th class="text-nowrap vertical-align-middle text-center" scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($jurusan as $item)
                        <tr>
                          <td class="text-nowrap vertical-align-middle text-center">{{ $item->kode_jurusan }}</td>
                          <td class="text-nowrap vertical-align-middle text-center">{{ $item->nama_jurusan }}</td>
                          <td class="text-nowrap vertical-align-middle text-center">
                            <div class="btn-group">
                              {{-- <a href="" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-info-circle-fill fs-5"></i>
                              </a> --}}
                              <a href="{{ route('jurusan.edit', $item->kode_jurusan) }}"
                                class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil-fill fs-5"></i>
                              </a>
                              <button type="button" data-bs-toggle="modal" data-bs-target="#modalHapus"
                                class="btn btn-sm btn-outline-primary btn-delete"
                                data-kode-jurusan="{{ $item->kode_jurusan }}">
                                <i class="bi bi-trash-fill fs-5"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                      @empty
                        <tr>
                          <td class="text-nowrap vertical-align-middle text-center" colspan="3">Data jurusan belum ada
                          </td>
                        </tr>
                      @endforelse
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-6">
            <div class="card">
              <div class="table-responsive">
                <div class="card-body">
                  <div class="mb-3 d-flex gap-2 justify-content-end">
                    <div class="btn-group dropstart">
                      <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Pilih Jurusan
                      </button>
                      <ul class="dropdown-menu">
                        @foreach ($jurusan as $item)
                          <li><a class="dropdown-item" href="#">{{ $item->nama_jurusan }}</a></li>
                        @endforeach
                      </ul>
                    </div>
                    <a href="{{ url('/dashboard/kelas/tambah') }}" class="btn btn-outline-primary">
                      <i class="bi bi-plus-lg"></i>
                      <span>Tambah</span>
                    </a>
                  </div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="text-nowrap vertical-align-middle text-center" scope="col">Kode Kelas</th>
                        <th class="text-nowrap vertical-align-middle text-center" scope="col">Kelas</th>
                        <th class="text-nowrap vertical-align-middle text-center" scope="col">Nama Jurusan</th>
                        <th class="text-nowrap vertical-align-middle text-center" scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($kelas as $item)
                        <tr>
                          <td class="text-nowrap vertical-align-middle text-center">{{ $item->kode_kelas }}</td>
                          <td class="text-nowrap vertical-align-middle text-center">{{ $item->nama_kelas }}</td>
                          <td class="text-nowrap vertical-align-middle text-center">{{ $item->jurusan->nama_jurusan }}
                          </td>
                          <td class="text-nowrap vertical-align-middle text-center">
                            <div class="btn-group">
                              <a href="{{ route('kelas.edit', $item->kode_kelas) }}"
                                class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil-fill fs-5"></i>
                              </a>
                              <button type="button" data-bs-toggle="modal" data-bs-target="#modalHapus"
                                class="btn btn-sm btn-outline-primary btn-delete"
                                data-kode-kelas="{{ $item->kode_kelas }}">
                                <i class="bi bi-trash-fill fs-5"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                      @empty
                        <tr>
                          <td class="text-nowrap vertical-align-middle text-center" colspan="4">Data jurusan belum ada
                          </td>
                        </tr>
                      @endforelse
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Left side columns -->
    </div>
  </section>

  <div class="modal fade" id="modalHapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center">
          <form class="form-modal" method="POST">
            @csrf
            @method('delete')
            <div>
              <i class="bi bi-trash3-fill text-danger" style="font-size: 100px;"></i>
            </div>
            <div class="d-flex flex-column gap-1 fs-3">
              <span>Data yang terhapus</span>
              <span>tidak dapat kembali</span>
            </div>
            <div class="d-flex gap-4 justify-content-center align-items-center py-3 px-5">
              <button type="button" class="btn btn-primary w-100" data-bs-dismiss="modal">Tidak</button>
              <button type="submit" class="btn btn-primary w-100">Ya</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('script')
  <script>
    const btnDelete = document.querySelectorAll('.btn-delete');
    btnDelete.forEach(btn => {
      btn.addEventListener('click', () => {
        const kodeJurusan = btn.dataset.kodeJurusan;
        const kodeKelas = btn.dataset.kodeKelas;
        const formModal = document.querySelector('#modalHapus .form-modal');
        const url = kodeJurusan ?
          ("{{ route('jurusan.delete', ':kodeJurusan') }}").replace(':kodeJurusan', kodeJurusan) :
          ("{{ route('kelas.delete', ':kodeKelas') }}").replace(':kodeKelas', kodeKelas);
        formModal.setAttribute('action', url);
      });
    });
  </script>
@endpush
