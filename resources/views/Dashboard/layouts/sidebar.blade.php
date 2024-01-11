<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard')?'active' : ''}}" aria-current="page" href="/dashboard">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('karyawandashboard')?'active' : ''}}" href="{{url('karyawandashboard')}}">
          <span data-feather="user"></span>
          Karyawan
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('golongandashboard')?'active' : ''}}" href="{{url('golongandashboard')}}">
          <span data-feather="users"></span>
          Golongan
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('pendidikandashboard')?'active' : ''}}" href="{{url('pendidikandashboard')}}">
          <span data-feather="file-text"></span>
          Riwayat Pendidikan
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('jabatandashboard')?'active' : ''}}" href="{{url('jabatandashboard')}}">
          <span data-feather="file-text"></span>
          Jabatan
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('penggajiandashboard')?'active' : ''}}" href="{{url('penggajiandashboard')}}">
          <span data-feather="file-text"></span>
          Penggajian 
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link {{ Request::is('pensiundashboard')?'active' : ''}}" href="{{url('pensiundashboard')}}">
          <span data-feather="file-text"></span>
          Pensiun
        </a>
      </li>
    </ul>
  </div>
</nav>