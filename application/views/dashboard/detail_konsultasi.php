<link href="<?= base_url('templates/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Konsultasi</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">Profile Costumer: <?= $konsultasi['nama'] ?></h6>
        </div>
        <div class="container">
            <div class="row p-4 align-items-center h-100">
                <div class="col-sm-3">
                    <h6 class="m-0 font-weight-bold text-primary">Foto KTP: </h6>
                    <img class="mt-3" src="<?= base_url() . '/upload_ktp/' . $konsultasi['upload_ktp'] ?>" width="200px">
                </div>
                <div class="col-sm-9 mx-auto">
                    <h6 class="m-0 font-weight-bold text-primary">Nama Costumer: </h6>
                    <?= $konsultasi['nama'] ?>
                    <h6 class="mt-3 mb-0 font-weight-bold text-primary">No KTP: </h6>
                    <?= $konsultasi['no_ktp'] ?><br>
                    <h6 class="mt-3 mb-0 font-weight-bold text-primary">Alamat Rumah: </h6>
                    <?= $konsultasi['alamat'] ?><br>
                    <h6 class="mt-3 mb-0 font-weight-bold text-primary">Email</h6>
                    <?= $konsultasi['email'] ?><br>
                    <h6 class="mt-3 mb-0 font-weight-bold text-primary">No Handphone: </h6>
                    <?= $konsultasi['no_hp'] ?><br>
                </div>
            </div>
        </div>

    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">Pertanyaan</h6>
        </div>
        <div class="container">
            <div class="row p-4 align-items-center h-100">
                <div class="col-sm-12 mx-auto">
                    <h6 class="m-0 font-weight-bold text-primary">Judul:</h6>
                    <?= $konsultasi['judul'] ?><br>
                    <h6 class="mt-3 mb-0 font-weight-bold text-primary">Kategori Konsultasi:</h6>
                    <b><?= $konsultasi['nama_kategori'] ?></b><br>
                    <h6 class="mt-3 mb-0 font-weight-bold text-primary">Deskripsi Masalah:</h6>
                    <?= $konsultasi['deskripsi_masalah'] ?>
                    <?php
                    if ($konsultasi['privasi'] == 1) {
                    ?>
                        <h6 class="m-0 font-weight-bold text-primary"> Privasi:</h6>
                        <span class="badge bg-success text-white">Publik</span>
                    <?php } else { ?>
                        <h6 class="m-0 font-weight-bold text-primary">Tipe Konsultasi:</h6>
                        <span class="badge bg-danger text-white">Private</span>
                    <?php } ?><br>
                    <hr>
                    <?php
                    if (empty($konsultasi2)) {


                    ?>
                        <span class="badge badge-danger">Belum di Jawab Oleh Anda</span><br>
                        <button class="btn btn-primary mt-4" id="btn">Tampilkan Form Balas</button>
                        <form action="<?= site_url('Dashboard/add_jawab') ?>" method="post" id="form" style="display: none">

                            <div class="form-group">
                                <input type="hidden" name="id_konsultasi" value="<?= $konsultasi['id_konsultasi'] ?>">
                                <h6 class="mt-3 mb-3 font-weight-bold text-primary">Balas Masalah:</h6>
                                <textarea class="form-control" name="isi_jawab" id="editor" rows="3"></textarea>
                            </div>
                            <h6 class="mt-3 mb-3 font-weight-bold text-primary">Tampilkan di Website:</h6>
                            <div class="form-check">
                                <input class="form-check-input" name="show_jawab" type="radio" name="exampleRadios" value="1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Ya, Tampilkan!
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="show_jawab" type="radio" name="exampleRadios" value="0">
                                <label class="form-check-label" for="exampleRadios2">
                                    Tidak, Jangan Tampilkan!
                                </label>
                            </div>
                            <input type="submit" name="kirim" value="Kirim Jawaban" class="btn btn-success mt-3">
                        </form>
                    <?php } else { ?>
                        <span class="badge badge-success mb-4">Sudah di Jawab Oleh Anda</span>
                        <h6 class="m-0 font-weight-bold text-primary"> Jawaban Anda:</h6>
                        <?= $konsultasi2['isi_jawab'] ?>
                        <button class="btn btn-primary mt-4" id="btnedit">Edit Jawaban Anda</button>
                        <form action="<?= site_url('Dashboard/edit_jawab') ?>" method="post" id="formedit" style="display: none">

                            <div class="form-group">
                                <input type="hidden" name="id_jawab_konsultasi" value="<?= $konsultasi2['id_jawab_konsultasi'] ?>">
                                <input type="hidden" name="id_konsultasi" value="<?= $konsultasi['id_konsultasi'] ?>">
                                <h6 class="mt-3 mb-3 font-weight-bold text-primary">Edit Jawaban:</h6>
                                <textarea class="form-control" name="isi_jawab" id="editor2" rows="3"><?= $konsultasi2['isi_jawab'] ?></textarea>
                            </div>
                            <h6 class="mt-3 mb-3 font-weight-bold text-primary">Tampilkan di Website:</h6>
                            <div class="form-check">
                                <input class="form-check-input" name="show_jawab" type="radio" value="1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Ya, Tampilkan!
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="show_jawab" type="radio" value=" 0">
                                <label class="form-check-label" for="exampleRadios2">
                                    Tidak, Jangan Tampilkan!
                                </label>
                            </div>
                            <input type="submit" name="kirim" value="Kirim Jawaban" class="btn btn-success mt-3">
                        </form>
                    <?php } ?>







                </div>
            </div>
        </div>
        <div class="card-footer text-muted">
            Jam Waktu Isi: <?= $konsultasi['tgl_isi'] ?> <?= $konsultasi['time_isi'] ?>
        </div>
    </div>

</div>

</div>
<script>
    CKEDITOR.replace('editor');
</script>
<script>
    CKEDITOR.replace('editor2');
</script>
<script>
    const btn = document.getElementById('btn');

    btn.addEventListener('click', () => {
        const form = document.getElementById('form');

        if (form.style.display === 'none') {
            // 👇️ this SHOWS the form
            form.style.display = 'block';
        } else {
            // 👇️ this HIDES the form
            form.style.display = 'none';
        }
    });
</script>
<script>
    const btn2 = document.getElementById('btnedit');

    btn2.addEventListener('click', () => {
        const form2 = document.getElementById('formedit');

        if (form2.style.display === 'none') {
            // 👇️ this SHOWS the form
            form2.style.display = 'block';
        } else {
            // 👇️ this HIDES the form
            form2.style.display = 'none';
        }
    });
</script>
<script>
    const btn2 = document.getElementById('btnedit');

    btn2.addEventListener('click', () => {

        const form = document.getElementById('formedit');

        if (form.style.display === 'none') {
            // 👇️ this SHOWS the form
            form.style.display = 'block';
        } else {
            // 👇️ this HIDES the form
            form.style.display = 'none';
        }
    });

    <?php if ($this->session->flashdata('success')) { ?>
        var isi = <?php json_encode($this->session->flashdata('success')) ?>
        Swal.fire({
            icon: 'success',
            title: 'Success...',
            text: 'Data Berhasil diedit'
        })
    <?php } ?>

    <?php if ($this->session->flashdata('error')) { ?>
        var isi = <?php json_encode($this->session->flashdata('error')) ?>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Data Eror diedit'
        })
    <?php } ?>
</script>