<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->

        <div class="col-xl-4 col-sm-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <a href="<?= site_url('Dashboard/konsultasicostumer') ?>">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Konsultasi Costumer</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_asset ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>


        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-sm-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <a href="<?= site_url('Dashboard/list_user') ?>">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Jumlah User</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $user ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-sm-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <a href="<?= site_url('Dashboard/listkategoripelayanan') ?>">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Kategori Pelayanan
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $pelayanan ?></div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-danger">
                    <h6 class="m-0 font-weight-bold text-white">Konsultasi Yang Belum dijawab <i class="fa fa-solid fa-circle-xmark"></i></h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <?php $i = 1;
                        foreach ($konsulnot as $konsul) { ?>
                            <a href="<?= site_url('dashboard/detail_konsul/' . $konsul->id_konsultasi) ?>">
                                <h6 class="m-0 font-weight-bold text-primary">Judul Pertanyaan: <?= $konsul->judul ?></h6>
                                <p class="text-capitalize"><?= $konsul->nama ?> | <?= $konsul->tgl_isi ?> <?= $konsul->time_isi ?></p>
                            </a>
                            <hr>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow  mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header bg-success py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-white">Konsultasi Yang Sudah dijawab</h6>

                </div>
                <!-- Card Body -->
                <div class="card-body">

                    <?php $i = 1;
                    foreach ($konsulyes as $konsul) { ?>
                        <a href="<?= site_url('dashboard/detail_konsul/' . $konsul->id_konsultasi) ?>">
                            <h6 class="m-0 font-weight-bold text-primary">Judul Pertanyaan: <?= $konsul->judul ?></h6>
                            <p class="text-capitalize"><?= $konsul->nama ?> | <?= $konsul->tgl_isi ?> <?= $konsul->time_isi ?></p>
                        </a>
                        <hr>
                    <?php } ?>


                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

</div>
<!-- /.container-fluid -->

</div>