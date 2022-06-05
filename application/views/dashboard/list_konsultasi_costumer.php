<link href="<?= base_url('templates/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables Konsultasi Costumer</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Konsultasi Costumer</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Judul Pertanyaan</th>
                            <th>Status Pertanyaan</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tfoot>

                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Judul Pertanyaan</th>
                            <th>Status Pertanyaan</th>
                            <th width="10%">Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1;
                        foreach ($konsul as $konsul) { ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $konsul->nama ?></td>
                                <td><a href="<?= site_url('dashboard/detail_konsul/' . $konsul->id_konsultasi) ?>"><?= $konsul->judul ?></a></td>
                                <?php if ($konsul->status_konsultasi == 0) { ?>
                                    <td><span class="badge badge-danger">Belum dijawab</span></td>
                                <?php } else { ?>
                                    <td><span class="badge badge-success">Sudah dijawab</span></td>
                                <?php } ?>
                                <td>
                                    <a href="<?= site_url('dashboard/detail_konsul/' . $konsul->id_konsultasi) ?>" class="btn btn-info"><i class="fas fa-solid fa-info fa-sm"></i></a>
                                    <button onclick="hapus(<?php echo $konsul->id_konsultasi; ?>)" class="btn btn-danger"><i class="fas fa-solid fa-trash fa-sm"></i></button>
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
    function hapus(id_konsultasi) {
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
                    url: "<?= site_url('dashboard/deleteKonsul') ?>", //url function delete in controller
                    data: {
                        id_konsultasi: id_konsultasi //id get from button delete
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