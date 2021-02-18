
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


<style>
  .main-news-section ul li 
  {
    list-style: none;
  }
  .main-news-section ul
  {
    padding:0;
  }

</style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
   <?php include('sidebar.php') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="main-news-section" style="background: #fff;padding:1em;">
          <!-- Page Heading -->
              <h1 style="font-size:25px;">Edit Exams </h1>
          <div class="news-section">
            <form  action='<?= base_url("index.php/Admin_controller/updateexams/$exams->id")?>'  method="post">
              <ul class="form-group row">
                 <li class="col-md-6">
                  <label>Select Exam Type</label>
                  <select class="form-control" name="examtype" required>
                    <option value="">Select Exam Type...</option>
                    <option value="topexams" <?php 
                     if($exams->examtype=="topexams")
                     {
                      echo "selected";
                     }
                    ?>>TOP EXAMS</option>
                    <option value="upcomingexams" <?php 
                     if($exams->examtype=="upcomingexams")
                     {
                      echo "selected";
                     }
                    ?>
                    >UPCOMING EXAMS</option>
                    <option  value="upcomingresults"
                     <?php 
                     if($exams->examtype=="upcomingresults")
                     {
                      echo "selected";
                     }
                    ?>
                    >UPCOMING RESULTS</option>
                    <option  value="latestexams"
                    <?php 
                     if($exams->examtype=="latestexams")
                     {
                      echo "selected";
                     }
                    ?>
                    >LATEST EXAMS</option>
                    
                  </select>
                </li>
                <li class="col-md-6">
                  <label>News Title</label>
                  <input type="text" name="title" class="form-control" value="<?= $exams->title?>" required maxlength="30">
                </li>

              

                <li class="col-md-6">
                  <label style="margin-top: 10px;">Short Description</label>
                 <textarea  class="description" name="short_desc" id="editor"><?= $exams->short_desc?></textarea>
                </li>


                <li class="col-md-6">
                  <label>Result</label>
                  <input type="text" name="result" class="form-control" value="<?= $exams->result?>" required maxlength="25">

                </li>


                <li class="col-md-6">
                  <label style="margin-top: 10px;">Long Description</label>
                  <textarea  class="description" name="long_desc"  id="editor1"><?= $exams->long_desc?></textarea>
                </li>

                
               

                <li class="col-md-12" style="margin-top: 1em;">
                  <input type="submit" value="Submit" class="form-control btn-primary" style="width: 20%;">
                </li>

              </ul>
            </form>
          </div>
           </div>
       
        <!-- /.container-fluid -->

      </div>

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


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


       <?php
      if($this->session->flashdata('edit_exams'))
     {
      ?>
      <script>
               swal("Update Exam Successfilly","", "success");
      </script>
      <?php }?>

       



      <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
 <script>
   ClassicEditor
       .create( document.querySelector( '#editor' ) )
       .catch( error => {
           console.error( error );
       } );
         </script>
   <!-- ck editor -->


 <script>
   ClassicEditor
       .create( document.querySelector( '#editor1' ) )
       .catch( error => {
           console.error( error );
       } );
         </script>




</body>



</html>
