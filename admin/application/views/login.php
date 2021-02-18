<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Welcome to College Gyani </title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url()?>assets2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url()?>assets2/css/style-admin.css" rel="stylesheet">

</head>

<body id="page-top" style="overflow-x:hidden;">

  <!-- Page Wrapper -->
 

    <!-- Sidebar -->
   
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid" style="padding:0px;background:gray">

          <!-- Page Heading -->
          
          <div class="row" style="background:white;padding:20px;box-shadow:0px 0px 9px silver">

              <div class="col-md-12">
             <div style="width:500px;padding:30px;box-shadow:0px 0px 10px silver;margin:130px auto">
                        <center><img src="<?= base_url()?>/assets2/img/logo.jpg" width="30%"></center>
                          <h5 class="text-center">Admin Login </h5>
                          <form action="<?= base_url('index.php/Admin_controller_extra/logincheck')?>" method="post">
                              <div class="form-group">
                                   <input type="text" required="" name="username" class="form-control" placeholder="Enter Username">
                              </div>

                                <div class="form-group">
                                   <input type="password" required="" name="password" class="form-control" placeholder="Enter Password">
                              </div>

                                <div class="form-group">
                   <input type="submit" class="form-control btn" style="background:#fe8536;color:white;">
                              </div>
                          </form>
                   </div>
                     
               </div> 

            
         

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
   <?php include('footer.php') ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url()?>assets2/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url()?>assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url()?>assets2/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url()?>assets2/js/sb-admin-2.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
 <?php
     if($this->session->flashdata('item'))
      { 
        ?> 
swal({
  title:"",
  text:"Sorry, Details Are Not Matched",
 icon: "error",
  button:"Try Again",
  dangerMode: true,

});
       
<?php } ?>
</script>

</body>

</html>
