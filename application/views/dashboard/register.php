 <!-- Begin Page Content -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <div class="container-fluid">

     <!-- Page Heading -->

     <h1 class="h3 mb-2 text-gray-800">Registrasi Akun Admin</h1>
     <?php if (validation_errors()) { ?>
         <div class="alert alert-danger" role="alert">
             <?= validation_errors(); ?>
         </div>
     <?php } ?>

     <!-- DataTales Example -->
     <div class="card shadow mb-4 mt-3">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Form Registrasi Akun</h6>
         </div>
         <div class="p-5">
             <form method="post" class="user" action="<?= site_url('dashboard/add') ?>">
                 <div class="form-group row">
                     <div class="col-sm-6 mb-3 mb-sm-0">
                         <input type="text" name="first_name" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                     </div>
                     <div class="col-sm-6">
                         <input type="text" name="last_name" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                     </div>
                 </div>
                 <div class="form-group row">
                     <div class="col-sm-6 mb-3 mb-sm-0">
                         <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username">
                     </div>
                     <div class="col-sm-6 mb-3 mb-sm-0">
                         <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                     </div>
                 </div>
                 <div class="form-group row">
                     <div class="col-sm-6 mb-3 mb-sm-0">
                         <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                     </div>
                     <div class="col-sm-6">
                         <input type="password" name="confirm_password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                     </div>
                 </div>
                 <input type="submit" value="Registrasi Akun" name="save" class="btn btn-primary btn-user">

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
             window.location = "<?= site_url('dashboard/list_user') ?>";
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