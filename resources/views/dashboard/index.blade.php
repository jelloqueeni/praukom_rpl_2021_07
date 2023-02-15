@extends('layouts.dashboard.app')

@section('content')
  <section class="section dashboard">
    <div class="row">
      <!-- Left side columns -->
      <div class="col">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="card info-card walikelas-card">
              <div class="card-body pt-0">
                <h5 class="card-title">WALIKELAS</h5>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex flex-column flex-md-row align-items-center gap-2 gap-md-5">
                    <h6>145</h6>
                    <a href="" class="badge rounded-pill text-bg-primary d-flex gap-1 align-items-center">
                      <span>Lihat</span>
                      <span><i class="bi bi-arrow-right-short fs-5 fw-bolder"></i></span>
                    </a>
                  </div>
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-fill"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card info-card kepala-pemrograman-card">
              <div class="card-body pt-0">
                <h5 class="card-title">
                  KEPALA PEMROGRAMAN
                </h5>

                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex flex-column flex-md-row align-items-center gap-2 gap-md-5">
                    <h6>41</h6>
                    <a href="" class="badge rounded-pill text-bg-primary d-flex gap-1 align-items-center">
                      <span>Lihat</span>
                      <span><i class="bi bi-arrow-right-short fs-5 fw-bolder"></i></span>
                    </a>
                  </div>
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-check-fill"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card info-card ruang-digunakan-card">
              <div class="card-body pt-0">
                <h5 class="card-title">
                  RUANG DIGUNAKAN
                </h5>

                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex flex-column flex-md-row align-items-center gap-2 gap-md-5">
                    <h6>30</h6>
                    <a href="" class="badge rounded-pill text-bg-primary d-flex gap-1 align-items-center">
                      <span>Lihat</span>
                      <span><i class="bi bi-arrow-right-short fs-5 fw-bolder"></i></span>
                    </a>
                  </div>
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-door-open-fill"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card info-card ruang-tidak-digunakan-card">
              <div class="card-body pt-0">
                <h5 class="card-title">
                  RUANGAN TIDAK DIGUNAKAN
                </h5>

                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex flex-column flex-md-row align-items-center gap-2 gap-md-5">
                    <h6>9</h6>
                    <a href="" class="badge rounded-pill text-bg-primary d-flex gap-1 align-items-center">
                      <span>Lihat</span>
                      <span><i class="bi bi-arrow-right-short fs-5 fw-bolder"></i></span>
                    </a>
                  </div>
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-door-closed-fill"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xxl-4 col-md-12">
            <div class="card">
              <div class="card-body pt-0">
                <div class="d-flex justify-content-between align-items-center">
                  <h5 class="card-title fw-bold">Kunjungan Hari Ini</h5>
                  <div class="d-flex gap-2 align-items-center">
                    <a href="" class="btn btn-outline-secondary btn-sm">
                      <i class="bi bi-caret-left-fill fs-5"></i>
                    </a>
                    <a href="" class="btn btn-outline-secondary btn-sm">
                      <i class="bi bi-caret-right-fill fs-5"></i>
                    </a>
                  </div>
                </div>
                <div class="list-group">
                  <div class="list-group-item list-group-item-action d-flex gap-4">
                    <div>
                      <img src="{{ asset('assets/img/2.jpeg') }}" class="rounded-circle" alt="Profile" width="50"
                        height="50">
                    </div>
                    <div>
                      <a href="#" class="text-decoration-none text-dark">
                        <div class="d-flex flex-column w-100 gap-1 justify-content-between">
                          <h5>Paijo</h5>
                          <small>10 Menit Lalu</small>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="list-group-item list-group-item-action d-flex gap-4">
                    <div>
                      <img src="{{ asset('assets/img/2.jpeg') }}" class="rounded-circle" alt="Profile" width="50"
                        height="50">
                    </div>
                    <div>
                      <a href="#" class="text-decoration-none text-dark">
                        <div class="d-flex flex-column w-100 gap-1 justify-content-between">
                          <h5>Paijo</h5>
                          <small>10 Menit Lalu</small>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="list-group-item list-group-item-action d-flex gap-4">
                    <div>
                      <img src="{{ asset('assets/img/2.jpeg') }}" class="rounded-circle" alt="Profile" width="50"
                        height="50">
                    </div>
                    <div>
                      <a href="#" class="text-decoration-none text-dark">
                        <div class="d-flex flex-column w-100 gap-1 justify-content-between">
                          <h5>Paijo</h5>
                          <small>10 Menit Lalu</small>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="list-group-item list-group-item-action d-flex gap-4">
                    <div>
                      <img src="{{ asset('assets/img/2.jpeg') }}" class="rounded-circle" alt="Profile" width="50"
                        height="50">
                    </div>
                    <div>
                      <a href="#" class="text-decoration-none text-dark">
                        <div class="d-flex flex-column w-100 gap-1 justify-content-between">
                          <h5>Paijo</h5>
                          <small>10 Menit Lalu</small>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-8 col-md-12">
            <div class="card">
              <div class="card-body pt-0">
                <h5 class="card-title fw-bold">Perbandingan Kunjugan Mingguan</h5>
                <!-- Line Chart -->
                <div id="reportsChart"></div>
                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    new ApexCharts(document.querySelector("#reportsChart"), {
                      series: [{
                        name: 'Siswa',
                        data: [31, 40, 28, 51, 42, 82, 56],
                      }, {
                        name: 'Wali Kelas',
                        data: [11, 32, 45, 32, 34, 52, 41]
                      }, {
                        name: 'Kepala Pemograman',
                        data: [15, 11, 32, 18, 9, 24, 11]
                      }],
                      chart: {
                        height: 350,
                        type: 'area',
                        toolbar: {
                          show: false
                        },
                      },
                      markers: {
                        size: 4
                      },
                      colors: ['#4154f1', '#2eca6a', '#ff771d'],
                      fill: {
                        type: "gradient",
                        gradient: {
                          shadeIntensity: 1,
                          opacityFrom: 0.3,
                          opacityTo: 0.4,
                          stops: [0, 90, 100]
                        }
                      },
                      dataLabels: {
                        enabled: false
                      },
                      stroke: {
                        curve: 'smooth',
                        width: 2
                      },
                      xaxis: {
                        type: 'datetime',
                        categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z",
                          "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z",
                          "2018-09-19T06:30:00.000Z"
                        ]
                      },
                      tooltip: {
                        x: {
                          format: 'dd/MM/yy HH:mm'
                        },
                      }
                    }).render();
                  });
                </script>
                <!-- End Line Chart -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Left side columns -->
    </div>
  </section>
@endsection
