<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/dashboard') }}"  data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
        <i class="fs-5 bi bi-grid-fill"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ url('/dashboard/jurusan-dan-kelas') }}"  data-bs-toggle="tooltip" data-bs-placement="right" title="Jurusan & Kelas">
        <i class="fs-5 bi bi-mortarboard-fill"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ url('/dashboard') }}"  data-bs-toggle="tooltip" data-bs-placement="right" title="Daftar Siswa">
        <i class="fs-5 bi bi-people-fill"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}"  data-bs-toggle="tooltip" data-bs-placement="right" title="Log Out">
        <i class="fs-5 bi bi-box-arrow-right"></i>
      </a>
    </li>
  </ul>
</aside>
