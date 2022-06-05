 <!-- Begin Page Content -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <div class="container-fluid">

     <!-- Page Heading -->

     <h1 class="h3 mb-2 text-gray-800">Edit Akun </h1>

     <!-- DataTales Example -->
     <div class="card shadow mb-4 mt-3">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Form Edit Akun</h6>
         </div>
         <div class="p-5">
             <form method="post" class="user" action="<?= site_url('dashboard/updateUser') ?>">
                 <div class="form-group row">
                     <div class="col-sm-6 mb-3 mb-sm-0">
                         <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                         <input type="text" name="first_name" value="<?= $user['first_name'] ?>" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                     </div>
                     <div class="col-sm-6">
                         <input type="text" name="last_name" value="<?= $user['last_name'] ?>" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                     </div>
                 </div>
                 <div class="form-group row">
                     <div class="col-sm-6 mb-3 mb-sm-0">
                         <input type="text" name="username" value="<?= $user['username'] ?>" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username">
                     </div>
                     <div class="col-sm-6 mb-3 mb-sm-0">
                         <input type="email" name="email" value="<?= $user['email'] ?>" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                     </div>
                 </div>

                 <input type="submit" value="Edit Akun" name="save" class="btn btn-primary btn-user">
                 <a href="<?= site_url('dashboard/list_user') ?>" class="btn btn-danger btn-user">Cancel</a>


                 <hr>

             </form>
         </div>

     </div>
 </div>

 </div>

 <!-- /.container-fluid -->