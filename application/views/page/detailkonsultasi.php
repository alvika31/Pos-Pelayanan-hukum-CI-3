<div class="container-fluid p-5" style="background-image: url('<?= base_url('assets/img/b.jpg') ?>'), linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) ; background-blend-mode: overlay; background-size: cover;">
    <div class="row align-items-center" style="height: 300px;">
        <div class="col">
            <h1 class="text-center text-white fw-bold">Pertanyaan Seputar Konsultasi</h1>
        </div>

    </div>
</div>
<div class="container">
    <div class="row py-5">
        <div class="col">
            <h3 class="fw-bold"><?= $a['judul'] ?></h3>
            <?= $a['tgl_isi'] ?>, <?= $a['time_isi'] ?><br>
            Oleh <?= $a['nama'] ?><br>
            <b>Pertanyaan:</b>
            <p><?= $a['deskripsi_masalah'] ?></p>
        </div>
    </div>
</div>
<div class="jumbroton bg-light">
    <div class="container">
        <div class="row py-5">
            <div class="col">
                <b>Jawaban:</b><br>
                <p><?= $a['isi_jawab'] ?></p>
            </div>
        </div>
    </div>
</div>