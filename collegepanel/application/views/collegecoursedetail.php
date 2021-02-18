
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
          <h1 style="font-size:25px;"></h1>
          <div class="row" style="background:white;padding:20px;box-shadow:0px 0px 9px silver">


            <div class="col-lg-12"style="margin-top:10px;">
                        <div class="card">
                            <form action="<?= base_url('index.php/college_controller/coursedetail')?>"method="post">
                            <div class="card-header"><strong>Add</strong><small> Details</small></div>
                            <div class="card-body card-block">
                                <div class="col-md-6 form-group"><label  class=" form-control-label">College Name</label><input type="text" name="college_name" id="company" value="<?=$data->college_name?>" class="form-control"></div>
                                <div class="col-md-6 form-group"><label  class=" form-control-label">College Email</label>
                <input type="email"  name="college_email" value="<?=$data->college_email?>" class="form-control" readonly="  ">
              </div>
              <div class="col-md-6 form-group ">
                              <label  class=" form-control-label">Course name</label>

                               <select name="course_name" required="" class="form-control">

                              <?php print_r($data->course) ;

                              $course =explode(',',$data->course) ;
                              print_r($course);

                              foreach ($course as $row) {
                             
                               ?>
               

                  <option><?php echo  $row;?></option>

                <?php } ?>
                  
                  
                  
                  
                </select>
              </div>

               <div class="col-md-6 form-group"><label  class=" form-control-label">Course Year</label>
                <input type="text" required="" name="course_year" value="" Placeholder="Enter Course Year" class="form-control" >
              </div>
               <div class="col-md-6 form-group"><label  class=" form-control-label">Course Fee</label>
                <input type="text" required="" name="course_fee" value="" Placeholder="Enter Course Fee" class="form-control" >
              </div>
                                   
                                            <div class="row form-group">
                                                
                                                   

                                                    </div>

                                                    

                                                   
                                                    <button class="btn btn-primary">Sumbit</button>
                                                    </div>
                                                     </form>
                                                   </div>
                                                 </div>
                      <!-- <div class="col-lg-6"style="margin-top:10px;">
                        <div class="card">
                            <form action="<?= base_url('index.php/Admin_controller/manage7')?>"method="post">
                            <div class="card-header"><strong>Add</strong><small> Details</small></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label  class=" form-control-label">Functional Area</label><input type="text" name="functional" id="company" placeholder="Enter Functional " class="form-control"></div>
                                   
                                            <div class="row form-group">
                                                
                                                   

                                                    </div>

                                                    

                                                   
                                                    <button class="btn btn-primary">Sumbit</button>
                                                    </div>
                                                     </form>
                                                   </div>
                                                 </div> -->
                      
              
               <!-- <div class="col-lg-6">
                        <div class="card">
                            <form action="<?= base_url('index.php/Admin_controller/manage1')?>"method="post">
                            <div class="card-header"><strong>Add</strong><small> Details</small></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label  class=" form-control-label">Functional</label>
                                  
                                  <select  name="parent_id" value="<?php echo $data->functional;?>" placeholder="">
                                    
                                                       <?php 
                                                           foreach($data as $res)
                                                           {

                                                            ?>
                                                        <option value="<?php echo $res->id;?>"><?php echo $res->functional;?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                    </select>
<input type="text" name="category" id="company" placeholder="Enter category" class="form-control">


                                                  </div>
                                   
                                            <div class="row form-group">
                                                
                                                   

                                                    </div>

                                                   
                                                    <button class="btn btn-primary">Sumbit</button>
                                                    </div>
                                                     </form>
                                              
                           </div>




          </div> -->

               <!-- <div class="col-lg-6">
                        <div class="card">
                            <form action="<?= base_url('index.php/Admin_controller/manage2')?>"method="post">
                            <div class="card-header"><strong>Add</strong><small> Details</small></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label  class=" form-control-label">State name</label><input type="text" name="state_name" id="company" placeholder="Enter state name" class="form-control"></div>
                                   
                                            <div class="row form-group">
                                                
                                                   

                                                    </div>

                                                   
                                                    <button class="btn btn-primary">Sumbit</button>
                                                    </div>
                                                     </form>
                                                   </div>
                                                 </div> -->


 <!-- <div class="col-lg-6"style="margin-top:10px;">
                        <div class="card">
                            <form action="<?= base_url('index.php/Admin_controller/manage3')?>"method="post">
                            <div class="card-header"><strong>Add</strong><small> Details</small></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label  class=" form-control-label">City name</label><input type="text" name="city" id="company" placeholder="Enter city name" class="form-control"></div>
                                   
                                            <div class="row form-group">
                                                
                                                   

                                                    </div>



                                                   
                                                    <button class="btn btn-primary">Sumbit</button>
                                                    </div>
                                                     </form>
                                                   </div>
                                                 </div>
 -->



                                                 
                                                 <!-- <div class="col-lg-6"style="margin-top:10px;">
                        <div class="card">
                            <form action="<?= base_url('index.php/Admin_controller/manage5')?>"method="post">
                            <div class="card-header"><strong>Add</strong><small> Details</small></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label  class=" form-control-label">Skills</label><input type="text" name="keyword" id="company" placeholder="Enter skills" class="form-control"></div>
                                   
                                            <div class="row form-group">
                                                
                                                   

                                                    </div>

                                                    

                                                   
                                                    <button class="btn btn-primary">Sumbit</button>
                                                    </div>
                                                     </form>
                                                   </div>
                                                 </div> -->

 <!-- <div class="col-lg-6"style="margin-top:10px;">
                        <div class="card">
                            <form action="<?= base_url('index.php/Admin_controller/manage6')?>"method="post">
                            <div class="card-header"><strong>Add</strong><small> Details</small></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label  class=" form-control-label">Qualification</label><input type="text" name="qualification" id="company" placeholder="Enter  qualification" class="form-control"></div>
                                   
                                            <div class="row form-group">
                                                
                                                   

                                                    </div>

                                                    

                                                   
                                                    <button class="btn btn-primary">Sumbit</button>
                                                    </div>
                                                     </form>
                                                   </div>
                                                 </div> -->



                                                 <!-- <div class="col-lg-6"style="margin-top:10px;">
                        <div class="card">
                            <form action="<?= base_url('index.php/Admin_controller/manage8')?>"method="post">
                            <div class="card-header"><strong>Add</strong><small> Details</small></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label  class=" form-control-label">Title</label><input type="text" name="title" id="company" placeholder="Enter Title" class="form-control"></div>
                                   
                                            <div class="row form-group">
                                                
                                                   

                                                    </div>

                                                    

                                                   
                                                    <button class="btn btn-primary">Sumbit</button>
                                                    </div>
                                                     </form>
                                                   </div>
                                                 </div> -->




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
<script>
 <?php
     if($this->session->flashdata('item'))
      { 
        ?> 
swal({
  title:"",
  text:"Data Insert Successfully",
  icon:"success",
  button:"ok",

});
       
<?php } ?>
</script>
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
