 <!-- Begin Page Content -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <div class="container-fluid">

     <!-- Page Heading -->

     <h1 class="h3 mb-2 text-gray-800">Edit Kategori Pelayanan</h1>
     <?php if (validation_errors()) { ?>
         <div class="alert alert-danger" role="alert">
             <?= validation_errors(); ?>
         </div>
     <?php } ?>

     <!-- DataTales Example -->
     <div class="card shadow mb-4 mt-3">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Form Edit Kategori</h6>
         </div>
         <div class="p-5">
             <?php echo form_open_multipart('dashboard/do_editPelayanan'); ?>

             <div class="form-group row">
                 <div class="col-sm-6 mb-3 mb-sm-0">
                     <label for="exampleFormControlTextarea1">Nama Kategori</label>
                     <input type="hidden" value="<?= $kategori['id_kategori'] ?>" name="id_kategori" class="form-control" id="exampleFirstName" placeholder="Nama Kategori">
                     <input type="text" value="<?= $kategori['nama_kategori'] ?>" name="nama_kategori" class="form-control" id="exampleFirstName" placeholder="Nama Kategori">
                 </div>
                 <div class="col-sm-6">
                     <label for="exampleFormControlTextarea1">Deksripsi Kategori Pelayanan</label>
                     <textarea class="form-control" name="deskripsi_kategori" id="exampleFormControlTextarea1" rows="3"><?= $kategori['deskripsi_kategori'] ?></textarea>
                 </div>
             </div>
             <img src="<?= base_url() . '/upload_kategori/' . $kategori['icon_kategori'] ?>" width="50px" height="50px">
             <div class="form-group row">
                 <div class="col-sm-6 mb-3 mb-sm-0">

                     <label for="exampleFormControlFile1">Upload Icon Kategori</label>
                     <input type="file" name="icon_kategori" class="form-control-file" id="exampleFormControlFile1">

                 </div>
             </div>
             <input type="submit" value="Tambah Kategori Pelayanan" name="save" class="btn btn-primary btn-user">

             <hr>

             </form>
         </div>

     </div>
 </div>

 </div>
 <script>
     <?php if ($this->session->flashdata('success')) { ?>
         var isi = <?php json_encode($this->session->flashdata('success')) ?>
         Swal.fire({
             icon: 'success',
             title: 'Success...',
             text: 'Data Berhasil ditambahkan'
         }).then(function() {
             window.location = "<?= site_url('dashboard/listkategoripelayanan') ?>";
         });
     <?php } ?>

     <?php if ($this->session->flashdata('error')) { ?>
         var isi = <?php json_encode($this->session->flashdata('error')) ?>
         Swal.fire({
             icon: 'error',
             title: 'Oops...',
             text: 'Data Eror ditambahkan'
         })
     <?php } ?>
 </script>
 <!-- /.container-fluid -->