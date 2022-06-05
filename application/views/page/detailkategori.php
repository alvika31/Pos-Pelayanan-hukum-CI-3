<div class="container-fluid p-5" style="background-image: url('<?= base_url('assets/img/b.jpg') ?>'), linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) ; background-blend-mode: overlay; background-size: cover;">
    <div class="row align-items-center" style="height: 300px;">
        <div class="col">
            <h1 class="text-center text-white fw-bold">Detail Kategori: <?= $kateg['nama_kategori'] ?></h1>
        </div>

    </div>
</div>
<div class="container-fluid bg-light py-4">
    <h3 class="text-center mt-5 fw-bold">Pertanyaan</h3>
    <div class="row justify-content-center mt-5">
        <?php if (empty($a)) { ?>
            <center>
                <div class="col align">
                    <span class=" badge text-bg-danger">Belum Ada Pertanyaan</span>
                </div>
            </center>
        <?php } ?>
        <?php
        foreach ($a as $a) {
        ?>




            <div class="col-sm-2 col-xs-12 shadow-lg p-3 mb-4 bg-white rounded text-start" style="margin-left: 10px;margin-right: 10px;">
                <a style="text-decoration:none" class="text-black" href="<?= site_url('Page/detailkonsul/' . $a->id_konsultasi) ?>">
                    <span class=" badge text-bg-success"><?= $a->nama_kategori ?></span>
                    <?php
                    $judul = $a->judul;
                    $num_char = 50;
                    $deskripsi =  $a->deskripsi_masalah;
                    $num_deskripsi = 50;
                    ?>
                    <h6 class="mt-3 fw-semibold"><?= substr($judul, 0, $num_char) . '....' ?></h6>
                    <p class="mt-3"><?= substr($deskripsi, 0, $num_deskripsi) . '....' ?></p>
                </a>
            </div>
        <?php } ?>

    </div>
</div>