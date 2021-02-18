
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Welcome to College Gyani</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url()?>assets2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url()?>assets2/css/style-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
   <?php include('sidebar.php') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 style="font-size:25px;">View Users</h1>
          <div class="row" style="background:white;padding:20px;box-shadow:0px 0px 9px silver">
              <div class="col-md-12">
                    <div class="table-responsive">
                   
                             
                              <table id="dataTableExample1" class="table table-bordered table-hover">
                                <tbody>
                                 <thead>
                                    <tr class="info" style="padding:0px;background:#abc641;color:white;">
                                     
                                       <th style="padding:0px 10px;font-size:14px;"> Name</th>
                                       <th style="padding:0px 10px;font-size:14px;"> Email</th>
                                       <th style="padding:0px 10px;font-size:14px;"> Password</th>
                                       <th style="padding:0px 10px;font-size:14px;"> Phone</th>
                                       <th style="padding:0px 10px;font-size:14px;"> Gender</th>
                                        <th style="padding:0px 10px;font-size:14px;"> D.O.B</th>
                                       <th style="padding:0px 10px;font-size:14px;">City</th>
                                       <th style="padding:0px 10px;font-size:14px;"> Address</th>
                                       <th style="padding:0px 10px;font-size:14px;"> 10 Passing Year</th>
                                       <th style="padding:0px 10px;font-size:14px;"> 10 Marks</th>
                                        <th style="padding:0px 10px;font-size:14px;"> 12 Passing Year</th>
                                       <th style="padding:0px 10px;font-size:14px;"> 12 Marks</th>
                                        <th style="padding:0px 10px;font-size:14px;"> Gradutaion Passing Year</th>
                                       <th style="padding:0px 10px;font-size:14px;">Graduation Marks</th>
                                        <th style="padding:0px 10px;font-size:14px;">Company</th>
                                       <th style="padding:0px 10px;font-size:14px;">Experience</th>
                                        <th style="padding:0px 10px;font-size:14px;"> Specialization</th>
                                        <th style="padding:0px 10px;font-size:14px;">Date</th>
                                    </tr>
                                 </thead>

                                  <?php foreach($data as $res):?>
                                    <tr>
                                       <td><?php echo $res->name ?></td>
                                       <td><?php echo $res->email ?></td>
                                       <td><?php echo $res->password ?></td>
                                      <td><?php echo $res->phone ?></td>
                                       <td><?php echo $res->gender ?></td>
                                      <td><?php echo $res->dob ?></td>
                                      <td><?php echo $res->city ?></td>
                                       <td><?php echo $res->address ?></td>
                                       <td><?php echo $res->ten_year ?></td>
                                      <td><?php echo $res->ten_marks ?></td>
                                      <td><?php echo $res->tw_year ?></td>
                                      <td><?php echo $res->tw_marks ?></td>
                                       <td><?php echo $res->grad_year ?></td>
                                      <td><?php echo $res->grad_marks ?></td>
                                      <td><?php echo $res->company_name ?></td>
                                      <td><?php echo $res->experience ?></td>
                                      <td><?php echo $res->specialization?></td>
                                       <td><?php echo $res->date?></td> 
                                    </tr>
                                 <?php endforeach; ?>


                                 </tbody>
                              </table>
                                 <!-- <ul class="pagination">

                                 <?= $this->pagination->create_links()?>
                               </ul> -->
                           </div>




          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
   <?php include('footer.php') ?>
      <!-- End of Footer -->

   
    <!-- End of Content Wrapper -->

 
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url()?>assets2/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url()?>assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url()?>assets2/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url()?>assets2/js/sb-admin-2.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>

             <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
          </script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
     if($this->session->flashdata('img'))
     {
      ?>
      <script type="text/javascript">
              $(document).ready(function(){


               swal({
                       title: "Opps!",
                       text: "Their is an error in image uploading",
                       icon: "error",
                        button: "Ok",
                     });
                            

               });
      </script>
      <?php }?>
      <?php
      if($this->session->flashdata('driver'))
     {
      ?>
      <script type="text/javascript">
              $(document).ready(function(){


               swal({
                       title: "Goodjob!",
                       text: "Driver Added Successfully",
                       icon: "success",
                        button: "Ok",
                     });
                            

               });
      </script>
      <?php }?>
        <?php
      if($this->session->flashdata('msg2'))
     {
      ?>
      <script type="text/javascript">
              $(document).ready(function(){


               swal({
                      
                       text: "Data Deleted Successfully",
                   
                        button: "Ok",
                     });
                            

               });
      </script>
      <?php }?>

</body>

</html>
