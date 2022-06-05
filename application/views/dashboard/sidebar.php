  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('Dashboard') ?>">
          <img src="<?= base_url('assets/img/logo.png') ?>" class="logo" width="200px" alt="">
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?= ($title === 'Halaman Home') ? 'active' : '' ?>">
          <a class="nav-link" href="<?= site_url('dashboard') ?>">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
          Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?= ($title === 'Halaman List User' || $title === 'Halaman Register') ? 'active' : '' ?>">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-solid fa-user"></i>
              <span>Users</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">User Page</h6>
                  <a class="collapse-item <?= ($title === 'Halaman List User') ? 'active' : '' ?>" href="<?= site_url('dashboard/list_user') ?>">List User</a>
                  <a class="collapse-item <?= ($title === 'Halaman Register') ? 'active' : '' ?>" href="<?= site_url('dashboard/register') ?>">Register User</a>
              </div>
          </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item <?= ($title === 'Halaman List Pelayanan' || $title === 'Halaman Tambah Pelayanan') ? 'active' : '' ?>">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
              <i class="fas fa-solid fa-paper-plane"></i>

              <span>Pelayanan</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Pelayanan</h6>
                  <a class="collapse-item <?= ($title === 'Halaman List Pelayanan') ? 'active' : '' ?>" href="<?= site_url('dashboard/listkategoripelayanan') ?>">List Pelayanan</a>
                  <a class="collapse-item <?= ($title === 'Halaman Tambah Pelayanan') ? 'active' : '' ?>" href="<?= site_url('dashboard/addPelayanan') ?>">Tambah Pelayanan</a>

              </div>
          </div>
      </li>
      <li class="nav-item <?= ($title === 'Halaman List Konsultasi Costumer') ? 'active' : '' ?>">
          <a class="nav-link" href="<?= site_url('dashboard/konsultasicostumer') ?>">
              <i class="fas fa-solid fa-user-tie"></i>
              <span>Konsultasi Custumer</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="<?= site_url('Page') ?>" target="_blank">
              <i class="fas fa-solid fa-link"></i>
              <span>View Website</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>



  </ul>
  <!-- End of Sidebar -->
  <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

              <!-- Sidebar Toggle (Topbar) -->
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
              </button>
              <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">

                  <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                  <li class="nav-item dropdown no-arrow d-sm-none">
                      <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-search fa-fw"></i>
                      </a>
                      <!-- Dropdown - Messages -->
                      <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                          <form class="form-inline mr-auto w-100 navbar-search">
                              <div class="input-group">
                                  <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                  <div class="input-group-append">
                                      <button class="btn btn-primary" type="button">
                                          <i class="fas fa-search fa-sm"></i>
                                      </button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </li>


                  <!-- Nav Item - Messages -->
                  <li class="nav-item dropdown no-arrow mx-1">
                      <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-envelope fa-fw"></i>
                          <!-- Counter - Messages -->
                          <span class="badge badge-danger badge-counter"><?= $total_asset ?></span>
                      </a>
                      <!-- Dropdown - Messages -->
                      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                          <h6 class="dropdown-header">
                              Konsultasi Center
                          </h6>
                          <?php
                            $this->db->select('*');
                            $this->db->from('konsultasi');
                            $this->db->join('kategori_konsultasi', 'kategori_konsultasi.id_kategori = konsultasi.id_kategori');
                            $this->db->order_by("id_konsultasi", "desc");
                            $query = $this->db->get()->result();
                            $i = 1;
                            foreach ($query as $konsul) {
                            ?>
                              <a class="dropdown-item d-flex align-items-center" href="<?= site_url('dashboard/detail_konsul/' . $konsul->id_konsultasi) ?>">
                                  <div class="dropdown-list-image mr-3">
                                      <img class="rounded-circle" src=" <?= base_url() . '/upload_ktp/' . $konsul->upload_ktp ?>" alt="...">
                                      <?php if ($konsul->status_konsultasi == 1) { ?>
                                          <div class="status-indicator bg-success"></div>
                                      <?php } else { ?>
                                          <div class="status-indicator bg-danger"></div>
                                      <?php } ?>
                                  </div>
                                  <div class="font-weight-bold">
                                      <div class="text-truncate"><?= $konsul->judul ?></div>
                                      <div class="small text-gray-500"><?= $konsul->nama ?> · <?= $konsul->tgl_isi ?>, <?= $konsul->time_isi ?></div>
                                  </div>
                              </a>
                          <?php } ?>
                          <a class="dropdown-item text-center small text-gray-500" href="<?= site_url('dashboard/konsultasicostumer') ?>">Read More Messages</a>
                      </div>
                  </li>

                  <div class="topbar-divider d-none d-sm-block"></div>

                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown no-arrow">
                      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hallo, <?= $this->session->userdata('username'); ?></span><i class="fas fa-solid fa-caret-down"></i>
                      </a>
                      <!-- Dropdown - User Information -->
                      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                          <a class="dropdown-item" href="#">
                              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                              Profile
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                              Logout
                          </a>
                      </div>
                  </li>

              </ul>

          </nav>