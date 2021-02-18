
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
                            <form action="<?= base_url('index.php/college_controller/updatecollegedetail')?>"method="post" enctype="multipart/form-data">
                            <div class="card-header"><strong>Profile</strong><small> Details</small></div>
                            <div class="card-body card-block">
                              <div class="row form-group">
                                <div class="col-md-6 form-group"><label  class=" form-control-label">College Name</label><input type="text" name="college_name" id="company" value="<?=$data->college_name?>" class="form-control"></div>
                                <div class="col-md-6 form-group"><label  class=" form-control-label">College Image</label><input type="file" name="image" id="company" placeholder="Enter College Image" class="form-control"></div>
                             
                              <div class="col-md-6 form-group"><label  class=" form-control-label">College logo</label><input type="file" name="logo" id="company" placeholder="Enter College Logo" class="form-control"></div>

                               <div class="col-md-6 form-group">
                                <label  class=" form-control-label">College Name in Short Form</label>
                                <input type="text"  id="company" placeholder="Enter College Name in Short Form" value="<?=$data->college_name_short?>" name="college_name_short" class="form-control">
                              </div>


                            <div class="col-md-6 form-group"><label  class=" form-control-label">College Email</label>
                <input type="email" required="" name="college_email" value="<?=$data->college_email?>" class="form-control" readonly="  ">
              </div>
              <div class="col-md-6 form-group"><label  class=" form-control-label">College Password</label>
                <input type="password" required="" name="password" value="<?=$data->password?>" class="form-control">
              </div>

               <div class="col-md-6 form-group"><label  class=" form-control-label">College Phone No.</label>
                <input pattern="[6-9]{1}[0-9]{9}" type="text" name="phone" id="txtPhoneNo" onkeypress="return isNumber(event)" value="<?=$data->phone?>" class="form-control" maxlength="10" type="text">
              </div>
             <div class="col-md-6 form-group ">
                              <label  class=" form-control-label">College Type</label>
                <select name="college_type" required="" class="form-control">
                  <option  <?php
                                                        if($data->college_type)
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>>Engineering</option>
                                                         <option  <?php
                                                        if($data->college_type=='Management')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>>Management</option>
                                                        <option  <?php
                                                        if($data->college_type=='Medical')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>>Medical</option>
                                                        <option  <?php
                                                        if($data->college_type=='Law')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>>Law</option>
                                                         <option  <?php
                                                        if($data->college_type=='Commerce')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>>Commerce</option>
                  
                  
                  
                  
                </select>
              </div>
               <div class="col-md-6 form-group ">
                              <label  class=" form-control-label">College/University</label>
                <select name="college_or_university" required="" class="form-control">
                  <option  <?php
                                                        if($data->college_or_university)
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>>College</option>
                                                         <option  <?php
                                                        if($data->college_or_university=='University')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>>University</option>
                                                        
                  
                  
                  
                  
                </select>
              </div>

              <div class="col-md-6 form-group ">
                              <label  class="form-control-label">College Courses</label>
              <select  data-placeholder="Choose Category ..." name="course[]"  multiple class="chosen-select form-control" disabled>
                 <option value="">Choose course</option>
          <?php 
         
            foreach ($course as $key)
             {
      
           ?>
           <option selected><?= $key->course_name ?></option>
           <?php 
         }
         ?>
                                                   </select>
                                                 </div>
               <div class="col-md-12 input-wrap"><label  class=" form-control-label">College Address </label>
                <textarea required="" name="address" placeholder="Enter Your Address " class="form-control"><?=$data->address?></textarea>
              </div>
                
                
                            <div class="col-md-6 form-group ">
                             <label  class=" form-control-label">State</label>
               
               <!--    <input type="text" name="state" required="" class="form-control" readonly value="<?= $data->state ?>"> -->

                  <select class="form-control stateselected" id="stateselected" name="state">
                    <?php
                    foreach ($state as $state) {
                    ?>
                    <option><?= $state->city_state;?></option>
                    <?php
                  }
                  ?>
                    
                  </select>
                                            
          
              </div>
              <div class="col-md-6 form-group">
                <label  class=" form-control-label">City</label>
               

<!--                     <input type="text" name="city" required="" class="form-control" readonly value="<?= $data->city ?>">
 -->                                                
              <select class="form-control cityselected" id="cityselected" name="city">
                <option selected><?= $data->city;?></option>
                    
                  </select>

              </div>
              <div class="col-md-12 form-group"> <label  class=" form-control-label">College Description</label>
                <textarea required="" name="description"  class="form-control" id="disc"><?=$data->description?></textarea>
              </div>
                                   
                                            
                                                    

                                                   
                                                    <button type="submit" class="btn btn-primary">Sumbit</button>
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
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

           <script>
                        CKEDITOR.replace( 'disc' );
                </script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
 <?php
     if($this->session->flashdata('item'))
      { 
        ?> 
swal({
  title:"",
  text:"Update Profile Successfully",
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
  $(document).ready(function(){
      document.getElementById('stateselected').value = "<?= $data->state?>";
  });
</script>

<script>
  $(document).ready(function(){
       $(".stateselected").change(function(){
      var statename= $('.stateselected').val();

      $.ajax({
        url:"<?= base_url("index.php/College_controller/fetchcollegecitie")?>",
        type:"post",
        data:({title:statename}),
        success:function(response){
          // alert(response);
            $('.cityselected').html(response);

        },

      });
       });
  });
</script>



</body>

</html>
