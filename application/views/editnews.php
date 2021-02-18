
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
              <h1 style="font-size:25px;">Add News </h1>
          <div class="news-section">
            <form  action="<?= base_url("index.php/Admin_controller/updatenews/$news->id")?>"  method="post" enctype='multipart/form-data'>
              <ul class="form-group row">
                <li class="col-md-6">
                  <label>News Title</label>
                  <input type="text" name="title" class="form-control" placeholder="Enter News Title ........" required value="<?= $news->title?>">
                </li> 
                <li class="col-md-6">
                  <label>News Images</label>
                  <input type="file" name="image" class="form-control">
                </li>
                <li class="col-md-6">
                  <label style="margin-top:1em;">News Short Description</label>
                  <textarea type="text" name="disc" class="form-control" required maxlength="600" rows="12"><?= $news->disc?></textarea> 
                </li>
                 <li class="col-md-6">
                  <label style="margin-top:1em;"> News Artical</label>
                   <textarea name="link" required=""><?= $news->link?></textarea>

                </li>

               

                <li class="col-md-12" style="margin-top: 1em;">
                  <input type="submit" value="Submit" class="form-control btn-primary">
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
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

               <script>
                        CKEDITOR.replace( 'link' );
                        
                </script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

     



       <?php
      if($this->session->flashdata('edit_news'))
     {
      ?>
      <script>
               swal("Update News Successfilly","", "success");
      </script>
      <?php }?>


</body>



</html>
