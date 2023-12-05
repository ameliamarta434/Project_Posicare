  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4" style="background-color: 	#F0FFFF;">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="/admin/img/Posicare.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">POSICARE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/admin/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          
          {{-- @can('admin') --}}
          <li class="nav-item">
            <a href="#" class="nav-link {{ Request::is('dashboard/ortus*') || Request::is('dashboard/anaks*') || Request::is('dashboard/jenis_imunisasis*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dashboard/ortus" class="nav-link {{ Request::is('dashboard/ortus*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Ortu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboard/anaks" class="nav-link {{ Request::is('dashboard/anaks*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Anak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboard/jenis_imunisasis" class="nav-link {{ Request::is('dashboard/jenis_imunisasis*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Imunisasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data kader</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PKK</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>UKM</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Timbang Anak
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-balance-scale"></i>
              <p>
                Hasil Timbang
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/dashboard/imunisasis" class="nav-link {{ Request::is('dashboard/imunisasis*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-syringe"></i>
              <p>
                Imunisasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/vitamin_as" class="nav-link {{ Request::is('dashboard/vitamin_as*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-capsules"></i>
              <p>
                Stunting
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Agenda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/buku_tamus" class="nav-link {{ Request::is('dashboard/buku_tamus*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Buku Tamu
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-list-ol"></i>
              <p>
                Kegiatan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dashboard/posts" class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berita</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>
          {{-- @endcan --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>