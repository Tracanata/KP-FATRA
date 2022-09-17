<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <h6><span data-feather="home" class="align-text-bottom"></span>Dashboard</h6>
            </a>
          </li>
        </ul>
        @can('admin')
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/admins*') ? 'active' : '' }}" href="/dashboard/admins">
              <h6><span data-feather="file-text"></span>Data User</h6>
            </a>
          </li>
        </ul>
        @endcan
        @can('staff')
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/mahasiswas*') ? 'active' : '' }}" href="/dashboard/mahasiswas">
              <h6><span data-feather="file-text"></span>Data Mahasiswa</h6>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/laporan*') ? 'active' : '' }}" href="/dashboard/laporan">
              <h6><span data-feather="file-text"></span>Buat Laporan</h6>
            </a>
          </li>
        </ul>
        @endcan
        @can('mahasiswa')
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/profils*') ? 'active' : '' }}" href="/dashboard/profils">
              <h6><span data-feather="user"></span>Profile</h6>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/prestasis*') ? 'active' : '' }}" href="/dashboard/prestasis">
              <h6><span data-feather="award"></span>Prestasi</h6>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/ortus*') ? 'active' : '' }}" href="/dashboard/ortus">
              <h6><span data-feather="users"></span>Data Orang Tua</h6>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/works*') ? 'active' : '' }}" href="/dashboard/works">
              <h6><span data-feather="linkedin"></span>Pekerjaan</h6>
            </a>
          </li>
        </ul>
        @endcan
        <ul class="nav flex-column pt-4">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/password*') ? 'active' : '' }}" aria-current="page" href="/dashboard/password">
              <h6><span data-feather="key" class="align-text-bottom"></span>Ubah Password</h6>
            </a>
          </li>
        </ul>
      </div>
</nav>