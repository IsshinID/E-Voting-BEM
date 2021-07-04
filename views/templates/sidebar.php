<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
        <div class="sidebar-brand-icon rotate-n-20">
          <i class="fas fa-fw fa-cannabis"></i>
        </div>
        <div class="sidebar-brand-text mx-3">E-Voting BEM</div>
      </a>

      <!-- Divider1 -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider2 -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
      <a class="nav-link" href="<?= base_url('pemilih/tambah');?>">
          <i class="fas fa-fw fa-check-circle"></i>
          <span>Input Pemilih</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
      <a class="nav-link" href="<?= base_url('pemilih');?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Manajemen Pemilih</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
      <a class="nav-link" href="<?= base_url('kandidat');?>">
          <i class="fas fa-fw fa-user-friends"></i>
          <span>Manajemen Kandidat</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
      <a class="nav-link" href="<?= base_url('peraturan');?>">
          <i class="fas fa-fw fa-tasks"></i>
          <span>Manajemen Peraturan</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-book"></i>
          <span>Laporan</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('laporan');?>">Rekapitulasi Suara</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->