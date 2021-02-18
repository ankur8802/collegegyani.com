
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
              <h1 style="font-size:25px;">Add City </h1>
          <div class="news-section">

            <form  action="<?= base_url('index.php/Admin_controller/insertcity')?>"  method="post">
              <ul class="form-group row">
                <li class="col-md-6">
                  <label>Select State </label>
                  <select name="city_state" class="form-control" required>
                    <option value="">Choose State</option>

                    <?php 
                    foreach ($cities as $cities) {

                    ?>
                    <option><?= $cities->city_state?></option>
                   <?php
                 }
                 ?>
                  </select>
                </li> 
                <li class="col-md-6">
                  <label>Enter City</label>
                  <input type="text" name="city_name" class="form-control" placeholder="Enter City Name" required>
                </li>
                

               

                <li class="col-md-12" style="margin-top: 1em;">
                  <input type="submit" value="Submit" class="form-control btn-primary">
                </li>

              </ul>
            </form>

          </div>
           </div>
            <!--  <h1 style="font-size:25px;">News Section </h1>
          <div class="row" style="background:white;padding:20px;box-shadow:0px 0px 9px silver">
              <div class="col-md-12">
                    <div class="table-responsive">
                   
                             
                              <table id="dataTableExample1" class="table table-bordered table-hover">
                                <tbody>
                                 <thead>
                                    <tr class="info" style="padding:0px;background:#abc641;color:white;">
                                     
                                       <th style="padding:0px 10px;font-size:14px;"> News Title</th>
                                       <th style="padding:0px 10px;font-size:14px;"> Image</th>
                                      <th style="padding:0px 10px;font-size:14px;"> Link</th>
                                       <th style="padding:0px 10px;font-size:14px;"> Action</th>
                                    
                                    
                                 
                                    </tr>
                                 </thead>

                                  <?php foreach($allnews as $res):?>
                                    <tr>

                                       <td><?php echo $res->title ?></td>
                                       <td> <img src="<?= base_url()?><?= $res->image?>" alt="" style="width:50px;height: 50px;"> </td>

                                      

                             <td style="display: flex;">
                              <p style="text-align: center;width: 50%;margin-top:8%;">
                              <a href="<?= base_url("index.php/Admin_controller/deletenews/$res->id")?>">  <i class="fas fa-trash-alt"></i></a> 
                              </p>

                              <p style="text-align: center;width: 50%;margin-top:8%">
                               <a href="<?= base_url("index.php/Admin_controller/editnews/$res->id")?>"> <i class="fas fa-edit" style="color: red;"></i></a> 
                               </p>

                            </td>
                                    
                                    

                             
   
        
                                       
                                    </tr>
                                 <?php endforeach; ?>


                                 </tbody>
                              </table>
                                
                           </div>




          </div>

        </div>  -->
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


       <?php
      if($this->session->flashdata('new_alt'))
     {
      ?>
      <script>
               swal("News Successfilly Added","", "success");
      </script>
      <?php }?>

     <?php
      if($this->session->flashdata('wrong_format'))
     {
      ?>
      <script>
               swal("Wrong Format","", "error");
      </script>
      <?php }?>


       <?php
      if($this->session->flashdata('delete_news_alt'))
     {
      ?>
      <script>
               swal("News Successfilly Deleted","", "success");
      </script>
      <?php }?>

         <?php
      if($this->session->flashdata('insert_city_alt'))
     {
      ?>
      <script>
               swal("Add City Successfilly","", "success");
      </script>
      <?php }?>



</body>



</html>
