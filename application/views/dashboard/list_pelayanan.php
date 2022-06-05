<link href="<?= base_url('templates/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Kategori Pelayanan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <a href="<?= site_url('dashboard/addPelayanan') ?>" type="button" class="btn btn-primary mb-4">Tambah Kategori Pelayanan</a>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori Pelayanan</th>
                            <th style="width: 30%">Deskripsi Kategori Pelayanan</th>
                            <th>Icon Pelayanan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>

                        <tr>
                            <th>No</th>
                            <th>Nama Kategori Pelayanan</th>
                            <th style="width: 40%">Deskripsi Kategori Pelayanan</th>
                            <th>Icon Pelayanan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1;
                        foreach ($kategori as $pelayanans) { ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $pelayanans->nama_kategori ?></td>
                                <td><?= $pelayanans->deskripsi_kategori ?></td>
                                <td>
                                    <img src="<?= base_url() . '/upload_kategori/' . $pelayanans->icon_kategori ?>" width="50px" height="50px">
                                </td>

                                <td>
                                    <a onclick="btn_delete()" href="<?= site_url('dashboard/edit_pelayanan/' . $pelayanans->id_kategori) ?>" class="btn btn-success">Edit</a>
                                    <button onclick="hapus(<?php echo $pelayanans->id_kategori; ?>)" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<script>
    function hapus(id_kategori) {
        Swal.fire({
            title: 'Yakin menghapus?',
            text: "Data yang sudhah dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus sekarang!'
        }).then((result) => {
            if (result.value) {
                Swal.fire({
                    title: 'Terhapus!',
                    text: 'Data berhasil dihapus.',
                    icon: 'success',
                    showConfirmButton: false
                });
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('dashboard/deleteKategori') ?>", //url function delete in controller
                    data: {
                        id_kategori: id_kategori //id get from button delete
                    },
                    success: function(data) { //when success will reload page after 3 second
                        window.setTimeout(function() {
                            location.reload();
                        }, 300);
                    }
                });
            }
        })
    }
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
<!-- /.container-fluid -->