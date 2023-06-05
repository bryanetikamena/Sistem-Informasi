<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard')? 'active': '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/user*') ? 'active': '' }}" href="/dashboard/users">
            <span data-feather="users" class="align-text-bottom"></span>
            Users
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/admin*') ? 'active': '' }}" href="/dashboard/admins">
            <span data-feather="users" class="align-text-bottom"></span>
            Admin
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/karyawan*') ? 'active': '' }}" href="/dashboard/karyawans">
            <span data-feather="users" class="align-text-bottom"></span>
            Karyawan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/bobot_kriteria*') ? 'active': '' }}" href="/dashboard/bobot_kriterias">
            <span data-feather="percent" class="align-text-bottom"></span>
            Bobot Kriteria
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/kriteria_tanggung_jawab*') ? 'active': '' }}" href="/dashboard/kriteria_tanggung_jawabs">
            <span data-feather="check-square" class="align-text-bottom"></span>
            Kriteria Tanggung Jawab
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/kriteria_disiplin*') ? 'active': '' }}" href="/dashboard/kriteria_disiplins">
            <span data-feather="check-square" class="align-text-bottom"></span>
            Kriteria Disiplin
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/kriteria_loyalitas*') ? 'active': '' }}" href="/dashboard/kriteria_loyalitas">
            <span data-feather="check-square" class="align-text-bottom"></span>
            Kriteria Loyalitas
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/kriteria_keahlian*') ? 'active': '' }}" href="/dashboard/kriteria_keahlians">
            <span data-feather="check-square" class="align-text-bottom"></span>
            Kriteria Keahlian
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/kriteria_kerja_sama*') ? 'active': '' }}" href="/dashboard/kriteria_kerja_samas">
            <span data-feather="check-square" class="align-text-bottom"></span>
            Kriteria Kerja Sama
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/kriteria_pengetahuan*') ? 'active': '' }}" href="/dashboard/kriteria_pengetahuans">
            <span data-feather="check-square" class="align-text-bottom"></span>
            Kriteria Pengetahuan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/kriteria_tanggung_jawab*') ? 'active': '' }}" href="/dashboard/penilaians">
            <span data-feather="clipboard" class="align-text-bottom"></span>
            Penilaian
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/peringkat*') ? 'active': '' }}" href="/dashboard/peringkats">
            <span data-feather="award" class="align-text-bottom"></span>
            Peringkat
          </a>
        </li>
      </ul>
      </ul>
    </div>
  </nav>