
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
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css">

  <!-- Custom styles for this template-->
  <link href="<?= base_url()?>assets2/css/style-admin.css" rel="stylesheet">
  <style type="text/css">
    .default
    {
      height:25px!important; 
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

          <!-- Page Heading -->
          <h1 style="font-size:25px;"></h1>
          <div class="row" style="background:white;padding:20px;box-shadow:0px 0px 9px silver">


            <div class="col-md-12"style="margin-top:10px;">

                        <div class="card">
                            <form action="<?= base_url('index.php/Admin_controller/collegeregistration')?>"method="post" enctype="multipart/form-data">
                            <div class="card-header"><strong>Add</strong><small> Details</small></div>
                            <div class="card-body card-block">
                              <div class="row form-group">
                                <div class="col-md-6 form-group"><label  class=" form-control-label">College Name</label><input type="text" name="college_name" id="company" placeholder="Enter College Name" class="form-control"></div>
                                <div class="col-md-6 form-group"><label  class=" form-control-label">College Image</label><input type="file" name="image" id="company" placeholder="Enter College Image" class="form-control"></div>
                            <div class="col-md-6 form-group"><label  class=" form-control-label">College Email</label>
                <input type="email" required="" name="college_email" placeholder="Enter College Email" class="form-control">
              </div>
              <div class="col-md-6 form-group"><label  class=" form-control-label">College Password</label>
                <input type="password" required="" name="password" placeholder="Enter Your Password" class="form-control">
              </div>

               <div class="col-md-6 form-group"><label  class=" form-control-label">College Phone No.</label>
                <input pattern="[6-9]{1}[0-9]{9}" type="text" required="" name="phone" id="txtPhoneNo" onkeypress="return isNumber(event)" placeholder="Enter Your Phone Number" class="form-control" maxlength="10" type="text">
              </div>
           <!--    <div class="col-md-6 form-group ">
                              <label  class=" form-control-label">College Type</label>
                <select name="college_type" required="" class="form-control">
                  
                  <option value="">Select College Type </option>
                  <option>Engineering </option>
                  <option>Management </option>
                  <option>Medical</option>
                   <option>Law</option>
                  
                </select>
              </div> -->

             <!--  Course section -->
             <!--  <div class="col-md-6 form-group ">
                              <label  class="form-control-label">College Courses</label>
              <select  data-placeholder="Choose Category ..." required="required" name="course[]"  multiple class="chosen-select form-control" >
                                                    <option value="">Select Course Type</option>
                                                    
                                                      <?php 
         
            foreach ($course as $key)
             {
      
           ?>
           <option selected><?= $key->course_name ?></option>
           <?php 
         }
         ?>
                                                   </select>
                                                 </div> -->
               <div class="col-md-12 input-wrap"><label  class=" form-control-label">College Address </label>
                <textarea required="" name="address" placeholder="Enter Your Address " class="form-control"></textarea>
              </div>
                
                
             <div class="col-md-6">
          <label class="color-gray">SELECT YOUR CITY</label>
          <select class="form-control color-orange modal-form-select selectstate" required="" name="state">
             <option value="">Select State</option>
                  <?php 
                    foreach ($cities as $citie) {
                  ?>
                  <option><?= $citie->city_state ?></option>
                  <?php
                }
                ?>
         </select> 
       </div>

       <div class="col-md-6">
          <label class="color-gray">SELECT YOUR City</label>
        <select class="form-control color-orange modal-form-select postcities" required="" name="city">
           <option value="">Select City </option>
         </select>
       </div>
    
              <div class="col-md-12 form-group"> <label  class=" form-control-label">College Description</label>
                <textarea required="" name="description" placeholder="College Description " class="form-control"></textarea>
              </div>
                                   
                                            
                                                    

                                                   
                                                    <button class="btn btn-primary">Sumbit</button>
                                                    </div>
                                                     </form>
                                                   </div>
                                                   </div>
                                                 </div>
                     <!--  <div class="col-lg-6"style="margin-top:10px;">
                        <div class="card">
                            <form action="<?= base_url('index.php/Admin_controller/manage7')?>"method="post">
                            <div class="card-header"><strong>Add</strong><small> Details</small></div>
                            <div class="card-body card-block">
                                <div class="col-md-6 form-group"><label  class=" form-control-label">Functional Area</label><input type="text" name="functional" id="company" placeholder="Enter Functional " class="form-control"></div>
                                   
                                            <div class="row form-group">
                                                
                                                   

                                                    </div>

                                                    

                                                   
                                                    <button class="btn btn-primary">Sumbit</button>
                                                    </div>
                                                     </form>
                                                   </div>
                                                 </div>
                      
              
               <div class="col-lg-6">
                        <div class="card">
                            <form action="<?= base_url('index.php/Admin_controller/manage1')?>"method="post">
                            <div class="card-header"><strong>Add</strong><small> Details</small></div>
                            <div class="card-body card-block">
                                <div class="col-md-6 form-group"><label  class=" form-control-label">Functional</label>
                                  
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




          </div>

               <div class="col-lg-6">
                        <div class="card">
                            <form action="<?= base_url('index.php/Admin_controller/manage2')?>"method="post">
                            <div class="card-header"><strong>Add</strong><small> Details</small></div>
                            <div class="card-body card-block">
                                <div class="col-md-6 form-group"><label  class=" form-control-label">State name</label><input type="text" name="state_name" id="company" placeholder="Enter state name" class="form-control"></div>
                                   
                                            <div class="row form-group">
                                                
                                                   

                                                    </div>

                                                   
                                                    <button class="btn btn-primary">Sumbit</button>
                                                    </div>
                                                     </form>
                                                   </div>
                                                 </div>


 <div class="col-lg-6"style="margin-top:10px;">
                        <div class="card">
                            <form action="<?= base_url('index.php/Admin_controller/manage3')?>"method="post">
                            <div class="card-header"><strong>Add</strong><small> Details</small></div>
                            <div class="card-body card-block">
                                <div class="col-md-6 form-group"><label  class=" form-control-label">City name</label><input type="text" name="city" id="company" placeholder="Enter city name" class="form-control"></div>
                                   
                                            <div class="row form-group">
                                                
                                                   

                                                    </div>



                                                   
                                                    <button class="btn btn-primary">Sumbit</button>
                                                    </div>
                                                     </form>
                                                   </div>
                                                 </div>




                                                 
                                                 <div class="col-lg-6"style="margin-top:10px;">
                        <div class="card">
                            <form action="<?= base_url('index.php/Admin_controller/manage5')?>"method="post">
                            <div class="card-header"><strong>Add</strong><small> Details</small></div>
                            <div class="card-body card-block">
                                <div class="col-md-6 form-group"><label  class=" form-control-label">Skills</label><input type="text" name="keyword" id="company" placeholder="Enter skills" class="form-control"></div>
                                   
                                            <div class="row form-group">
                                                
                                                   

                                                    </div>

                                                    

                                                   
                                                    <button class="btn btn-primary">Sumbit</button>
                                                    </div>
                                                     </form>
                                                   </div>
                                                 </div>

 <div class="col-lg-6"style="margin-top:10px;">
                        <div class="card">
                            <form action="<?= base_url('index.php/Admin_controller/manage6')?>"method="post">
                            <div class="card-header"><strong>Add</strong><small> Details</small></div>
                            <div class="card-body card-block">
                                <div class="col-md-6 form-group"><label  class=" form-control-label">Qualification</label><input type="text" name="qualification" id="company" placeholder="Enter  qualification" class="form-control"></div>
                                   
                                            <div class="row form-group">
                                                
                                                   

                                                    </div>

                                                    

                                                   
                                                    <button class="btn btn-primary">Sumbit</button>
                                                    </div>
                                                     </form>
                                                   </div>
                                                 </div>



                                                 <div class="col-lg-6"style="margin-top:10px;">
                        <div class="card">
                            <form action="<?= base_url('index.php/Admin_controller/manage8')?>"method="post">
                            <div class="card-header"><strong>Add</strong><small> Details</small></div>
                            <div class="card-body card-block">
                                <div class="col-md-6 form-group"><label  class=" form-control-label">Title</label><input type="text" name="title" id="company" placeholder="Enter Title" class="form-control"></div>
                                   
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
     if($this->session->flashdata('item2'))
      { 
        ?> 
swal({
  title:"",
  text:"Registration Successful",
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
      <script type="text/javascript">

        function isNumber(evt) {
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    // alert("Please enter only Numbers.");
    return false;
  }

  return true;
}
    function ValidateNo() {
  var phoneNo = document.getElementById('txtPhoneNo');

  if (phoneNo.value == "" || phoneNo.value == null) {
    alert("Please enter your Mobile No.");
    return false;
  }
  if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
    alert("Mobile No. is not valid, Please Enter 10 Digit Mobile No.");
    return false;
  }

  alert("Success ");
  return true;
}
      </script>
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>


<script> 

$(".chosen-select").chosen();



</script>

<script>
  $('.selectstate').change(function(){
     var statename= $('.selectstate').val();

            $.ajax({
        url: "<?= base_url("index.php/Admin_controller/fetchcities")?>",
        type: "POST",
         data: ({ title:statename }),
        success: function (response) {
// alert(response);
             $(".postcities").html(response);
       
        },
        error: function(jqXHR, textStatus, errorThrown) {
           alert(errorThrown);
        }
    });
  })
</script>

</body>

</html>
