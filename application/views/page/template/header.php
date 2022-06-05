<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white py-3">
        <div class="container-fluid">
            <a class="navbar-brand mx-5" href="#">
                <img src="<?= base_url('assets/img/logo.png') ?>" class="logo" width="200px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mx-5 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= site_url('Page') ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('Page/pospelayananhukum') ?>">Pos Pelayanan Hukum</a>
                    </li>

                </ul>

            </div>
            <?php if (!$this->session->userdata('username')) { ?>
                <a class="btn btn-outline-success" href="<?= site_url('Auth') ?>">Login</a>
            <?php } else { ?>
                <a class="btn btn-outline-success" href="<?= site_url('Dashboard') ?>">Dashboard</a>
            <?php } ?>

        </div>

    </nav>