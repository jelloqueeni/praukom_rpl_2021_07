<footer id="footer" class="footer bg-white py-5 my-0">
  <div class="row py-3 mb-3 mx-0 gap-4 gap-md-0">
    <div class="col-md-6 col-lg-4 d-flex justify-content-center align-items-center text-center">
      <span class="fs-5">
        Jl. Bintara VIII No.2, RT.005/RW.003, BIntara, Kec. Bekasi Barat, Kota Bekasi, Jawa Barat 17134
      </span>
    </div>
    <div class="col-md-6 col-lg-2 d-flex justify-content-center align-items-center">
      <div class="d-flex flex-column gap-3">
        <h4 class="fw-bold">Menu Lainnya</h4>
        <div class="d-flex flex-column gap-2">
          <a href="" class="text-decoration-none text-muted">Tanya Jawab</a>
          <a href="" class="text-decoration-none text-muted">Syarat {{ __('&') }} Ketentuan</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-2 d-flex justify-content-center align-items-center">
      <div class="d-flex flex-column gap-3">
        <h4 class="fw-bold">Kontak Kami</h4>
        <div class="d-flex flex-column gap-2">
          <a href="" class="text-decoration-none text-muted d-flex gap-2 align-items-center">
            <span><i class="bi bi-envelope-at"></i></span>
            <span>Alamat Surel</span>
          </a>
          <a href="" class="text-decoration-none text-muted d-flex gap-2 align-items-center">
            <span><i class="bi bi-whatsapp"></i></span>
            <span>Nomor Whatsapp</span>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4 d-flex justify-content-center align-items-center flex-column">
      <form action="" method="POST" class="px-0">
        @csrf
        <h4 class="fw-bold mb-4">
          Apakah ada yang dibingungkan oleh aplikasi Aku Rajin?
        </h4>
        <div class="input-group mb-3 w-100">
          <input type="text" class="form-control" placeholder="Ketik Di sini">
          <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
        </div>
      </form>
    </div>
  </div>
  <div class="copyright">
    &copy; {{ __('Hak Cipta 2022 - ' . date('Y') . ' Aku Rajin') }}
  </div>
</footer>
