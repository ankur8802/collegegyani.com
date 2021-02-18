
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
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css">
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
          <h1 style="font-size:25px;">Employer Authentication </h1>
          <div class="row" style="background:white;padding:20px;box-shadow:0px 0px 9px silver">
              <div class="col-md-12">
 
<form action="<?= base_url("index.php/Admin_controller/updatecollegedetail/$data->id")?>"method="post" enctype="multipart/form-data">
            
              <div class="card-header"><strong>Profile</strong><small> Details</small></div>
                            <div class="card-body card-block">
                              <div class="row form-group">
                               
     <div class="col-md-6 form-group">
      <label  class=" form-control-label">College Name</label>
      <input type="text" name="college_name" id="company" value="<?=$data->college_name?>" class="form-control">
      </div>
  
     <div class="col-md-6 form-group">
      <label  class=" form-control-label">College Image</label>
      <input type="file" name="image" id="company" placeholder="Enter College Image" class="form-control">
     </div>
                             
        <div class="col-md-6 form-group">
          <label  class=" form-control-label">College logo</label>
        <input type="file" name="logo" id="company" placeholder="Enter College Logo" class="form-control">
       </div>

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

           
               <div class="col-md-12 input-wrap"><label  class=" form-control-label">College Address </label>
                <textarea required="" name="address" placeholder="Enter Your Address " class="form-control"><?=$data->address?></textarea>
              </div>
                
                
                            <div class="col-md-6 form-group ">
                             <label  class=" form-control-label">State</label>
               
               <!--    <input type="text" name="state" required="" class="form-control" readonly value="<?= $data->state ?>"> -->

                  <select class="form-control stateselected selected-state" id="stateselected" name="state">
                    <?php
                    foreach ($cities as $state) {
                    ?>
                    <option><?= $state->city_state;?></option>
                    <?php
                  }
                  ?>
                    
                  </select>
                                            
          
              </div>
              <div class="col-md-6 form-group">
                <label  class=" form-control-label">City</label>
               
                                           
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



<!-- 

                <div class="table-responsive">





                <table id="dataTableExample1" class="table table-bordered table-hover">
  <thead>
    
 




    <tr>
      
     
      <th>Name</th>
    
      <th>Email</th>
      <th>Password</th>
      <th>Contact No.</th>
      <th>Email</th>
      <th >City</th>
      <th >Status</th>
      <th>Edit</th>
      
       </tr>
  </tbody>

 <tbody>
  
  <tr>

<td><input type="text" class="form-control" value="<?= $data->college_name ?>"></td>
<td><?php echo $r->college_email ?></td>
<td><?php echo $r->password ?></td>
<td><?php echo $r->phone ?></td>
<td><?php echo $r->city ?></td>
<td><?php echo $r->status ?></td>

<td>
                                <div class="careerfy-profile-select">
                                  <form>
                                    <select name="categories" class="status_dd">
                                     
                                      <option  <?php
                                                        if($r->status=='pending')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>>pending</option>
                                                         <option  <?php
                                                        if($r->status=='accept')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>>accept</option>
                                                        <option  <?php
                                                        if($r->status=='reject')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>>reject</option>
                                                        <option  <?php
                                                        if($r->status=='block')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>>block</option>
                                    </select>
                                  </form>
                                </div></td>
                                <td><a href="<?= base_url("index.php/Admin_controller/edit/{$r->id}")?>" ><button>Edit</button></a> </td>
<td style="display: none"><button class="btn btn-primary reject_btn" ><a href="<?= base_url("index.php/Admin_controller/reject/{$r->id}")?>"style="color:#fff; ">Reject</a></button> </td>
<td style="display: none"><button class="btn btn-danger block_btn" ><a href="<?= base_url("index.php/Admin_controller/block/{$r->id}")?>"style="color:#fff; ">Block</a></button> </td>
<td style="display: none"><button class="btn btn-success accept_btn" ><a href="<?= base_url("index.php/Admin_controller/accept/{$r->id}")?>" style="color:#fff; ">Accept</a></button> </td>


</tr>

</tbody>
</table>




                           
                            </div>
                       </div>
 -->


                        <!-- second div -->
                  
               </div> 
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
<script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>

             <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
          </script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>
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
        url:"<?= base_url("index.php/Admin_controller/fetchcollegecitie")?>",
        type:"post",
        data:({title:statename}),
        success:function(response){
          // alert(response);
            $('.cityselected').html(response);

        },
        error: function (error) {
      alert('error; ' + eval(error));
}

      });
    });
  });
</script>

<script type="text/javascript">
<?php
  if($this->session->flashdata('item'))
  {
?>
 swal("Update All Details!", "", "success");

 <?php
}
?>

 </script>

</body>

</html>
