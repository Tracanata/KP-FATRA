<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
        </ul>
        @can('admin')
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/admins*') ? 'active' : '' }}" href="/dashboard/admins">
              <span data-feather="file-text"></span>
              Data User
            </a>
          </li>
        </ul>
        @endcan
        @can('staff')
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/mahasiswas*') ? 'active' : '' }}" href="/dashboard/mahasiswas">
              <span data-feather="file-text"></span>
              Data Mahasiswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/laporan*') ? 'active' : '' }}" href="/dashboard/laporan">
              <span data-feather="file-text"></span>
              Buat Laporan
            </a>
          </li>
        </ul>
        @endcan
        @can('mahasiswa')
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/profils*') ? 'active' : '' }}" href="/dashboard/profils">
              <span data-feather="user"></span>
              Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/prestasis*') ? 'active' : '' }}" href="/dashboard/prestasis">
              <span data-feather="award"></span>
              Prestasi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/ortus*') ? 'active' : '' }}" href="/dashboard/ortus">
              <span data-feather="users"></span>
              Data Orang Tua
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/works*') ? 'active' : '' }}" href="/dashboard/works">
              <span data-feather="user"></span>
              Pekerjaan
            </a>
          </li>
        </ul>
        @endcan
        <ul class="nav flex-column pt-4">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/passwords*') ? 'active' : '' }}" aria-current="page" href="/dashboard/passwords">
              <span data-feather="key" class="align-text-bottom"></span>
              Ubah Password
            </a>
          </li>
        </ul>
      </div>
</nav>