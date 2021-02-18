
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>College Gyani</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url()?>assets2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url()?>assets2/css/style-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css">

  
  <style>
    .courseform ul li
    {
     list-style: none;
    }
    .chosen-choices
    {
          min-height: 38px;
          border-radius: 4px;
          padding: 8px!important;
          
           }


           /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance:textfield;
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
          <h1 style="font-size:25px;">Add New Courses</h1>
          <div class="courseform"  style="background:white;padding:20px;box-shadow:0px 0px 9px silver">
            <form action="<?= base_url('index.php/College_controller/insertcourse')?>" method="post">
           <ul class="row">

            
            

             <li class="col-md-6 form-group">
                <label>Course Type</label>
                 <select class="form-control hidecourse" required="" name="course_type">
                          <option value="">Choose Type</option>
                          <option>Engineering</option>
                          <option>Management</option>
                          <option>Medical</option>
                          <option>Law</option>
                          <option value="5">Other</option>
                 </select>
                 <input type="text" class="showcourse form-control" placeholder="Enter Course Name" style="display:none;margin-top:5%;">
                 <input type="hidden" name="id" value="<?= $collegeid->id ?>">
             </li>

           

              <li class="col-md-6 form-group">
               <label>Course</label>
               <input type="text" name="course_name" class="form-control" placeholder="Enter Course Name" required="">
             </li>

             <li class="col-md-6 form-group">
               <label>Exam</label>
               <input type="text" name="exam" class="form-control" placeholder="Enter Exam Name" required="">
             </li>

             <!--  <li class="col-md-6 form-group">
              <label> Select Avaliable Trades</label>
              <select class="form-control chosen" multiple="true" data-placeholder="Select Trade......" required="" name="course_trade">
                          <option>Mechanical</option> 
                          <option>Computer</option>
                          <option>Civil</option>
                          <option>Chemical</option>
                          <option>Electronics</option>
                          <option>Other</option>
                 </select>
             </li> -->

                  <li class="col-md-6 form-group">
              <label> Select Avaliable Trades</label>
              <select class="form-control opentradeinput" required="" name="course_trade">
                          <option value="">Select Trade</option>
                          <option>Mechanical</option> 
                          <option>Computer</option>
                          <option>Civil</option>
                          <option>Chemical</option>
                          <option>Electronics</option>
                          <option value="NotRequired">Not Required</option>
                          <option value="1">Other</option>
                 </select>
             </li>
              <li class="col-md-6 form-group" style="display: none;">
               <label>Enter Trade Name</label>
               <input type="text" class="form-control" placeholder="Enter Trade Name">
             </li>

             <li class="col-md-6 form-group">
              <label>Course Duration</label>
              <select class="form-control selectyr" required="" name="course_duration">
                          <option value="">Choose Year</option> 
                          <option value="1">1 Year</option> 
                          <option value="2">2 Years</option>
                          <option value="3">3 Years</option>
                          <option value="4">4 Years</option>
                          <option value="5">5 Years</option>
                          <option value="6">6 Years</option>
                 </select>
             </li>
  
              <li class="col-md-6 form-group years1 years" style="display:none;">
               <label>First Year Fee</label>
               <input type="number" name="first_year_fee" class="form-control 1" placeholder="Enter First Year Fee">
             </li>

               <li class="col-md-6 form-group years2 years" style="display:none;">
               <label>Second Year Fees</label>
               <input type="number" name="secound_year_fee" class="form-control 2" placeholder="Enter Second Year Fees">
             </li>

              <li class="col-md-6 form-group years3 years" style="display:none;">
               <label>Third Year Fees</label>
               <input type="number" name="third_year_fee" class="form-control 3" placeholder="Enter Third Year Fees">
             </li>

              <li class="col-md-6 form-group years4 years" style="display:none;">
               <label>Fourth Year Fees</label>
               <input type="number" name="fourth_year_fee" class="form-control 4" placeholder="Enter Fourth Year Fees">
             </li>

              <li class="col-md-6 form-group years5 years" style="display:none;">
               <label>Fifth Year Fees</label>
               <input type="number" name="fifth_year_fee" class="form-control 5" placeholder="Enter Fifth Year Fees">
             </li>

              <li class="col-md-6 form-group years6 years" style="display:none;">
               <label>Sixth Year Fees</label>
               <input type="number" name="sixth_year_fee" class="form-control 6" placeholder="Enter Sixth Year Fees">
             </li>
              
             <li class="col-md-12 text-center">

              <input type="submit" class="btn btn-primary" value="SUBMIT">

             </li>
             
          
           </ul>

 </form>



          </div>
          <div class="row" style="background:white;padding:20px;box-shadow:0px 0px 9px silver">
              <div class="col-md-12">
                    <div class="table-responsive">
                   
                             
                              <table id="dataTableExample1" class="table table-bordered table-hover">
                                <tbody>
                                 <thead>
                                    <tr class="info" style="padding:0px;background:#abc641;color:white;">
                                      
                                       <th style="padding:0px 10px;font-size:14px;">Course Type </th>
                                       <th style="padding:0px 10px;font-size:14px;">Course Name  </th>
                                      <th style="padding:0px 10px;font-size:14px;"> exam  </th>
                                        <th style="padding:0px 10px;font-size:14px;">Course Trade </th>
                                   
                                       <th style="padding:0px 10px;font-size:14px;">Course Duration  </th>
                                       <th style="padding:0px 10px;font-size:14px;">First Year_Fee </th>
                                       <th style="padding:0px 10px;font-size:14px;">Secound Year Fees </th>
                                       <th style="padding:0px 10px;font-size:14px;">Third Year Feess</th>
                                       <th style="padding:0px 10px;font-size:14px;">Fourth Year Fees</th> 
                                        <th style="padding:0px 10px;font-size:14px;">Fifth Year Fees</th>
                                         <th style="padding:0px 10px;font-size:14px;">Sixth Year Fees</th> 
                                        <th style="padding:0px 10px;font-size:14px;">Action</th>
                                   
                                    </tr>
                                 </thead>
 
                                  <?php foreach($coursedetails as $res)
                                  {

                                  ?>
                                    <tr>

                                
                                       <td><?php echo $res->course_type ?></td>
                                        <td><?php echo $res->course_name ?></td>
                                        <td><?php echo $res->exam ?></td>
                                         <td><?php echo $res->course_trade ?></td>
                                  
                                      <td><?php echo $res->course_duration ?></td>
                                      <td>
                                        <?php 
                                        if($res->first_year_fee<=0)  
                                        {
                                          echo "N/A";
                                        }
                                        else
                                        {
                                          echo  $res->first_year_fee;
                                       
                                        }
                                           ?>
                                        </td>
                                       <td>
                                          <?php 
                                        if($res->secound_year_fee<=0)  
                                        {
                                          echo "N/A";
                                        }
                                        else
                                        {
                                          echo  $res->secound_year_fee;
                                       
                                        }
                                           ?>
                                       </td>
                                       <td>
                                          <?php 
                                        if($res->third_year_fee<=0)  
                                        {
                                          echo "N/A";
                                        }
                                        else
                                        {
                                          echo  $res->third_year_fee;
                                       
                                        }
                                           ?>
                                       </td>
                                       <td>
                                           <?php 
                                        if($res->fourth_year_fee<=0)  
                                        {
                                          echo "N/A";
                                        }
                                        else
                                        {
                                          echo  $res->fourth_year_fee;
                                       
                                        }
                                           ?>
                                       </td>
                                        <td>
                                            <?php 
                                        if($res->fifth_year_fee<=0)  
                                        {
                                          echo "N/A";
                                        }
                                        else
                                        {
                                          echo  $res->fifth_year_fee;
                                       
                                        }
                                           ?>
                                        </td>
                                         <td>
                                             <?php 
                                        if($res->sixth_year_fee<=0)  
                                        {
                                          echo "N/A";
                                        }
                                        else
                                        {
                                          echo  $res->sixth_year_fee;
                                       
                                        }
                                           ?>
                                         </td>
                                    

                             
                                        <td>  <center> <a href="<?= base_url("index.php/College_controller/deletecourse/$res->courseid")?>"> <i class="fas fa-trash-alt"></i> </a></center> 
                                          <center>  <a href="<?= base_url("index.php/College_controller/editcourse/$res->courseid")?>"> <i class="fas fa-edit" style="color:red;"></i> </a></center>  

                                          </td>
        
                                       
                                    </tr>
                                 <?php
                                  }
                                 ?>


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
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>


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
     if($this->session->flashdata('delete_course_alt'))
      { 
        ?> 
swal("Deleted Successfully", "", "success");

       
<?php } ?>
</script>



<script>
 <?php
     if($this->session->flashdata('update_course_alt'))
      { 
        ?> 
swal("Update Course Successfully", "", "success");

       
<?php } ?>
</script>


<script>
 <?php
     if($this->session->flashdata('delete_user_application_alt'))
      { 
        ?> 
swal("Deleted Successfully", "", "success");

       
<?php } ?>
</script>

<script>
 <?php
     if($this->session->flashdata('addcourse_alt'))
      { 
        ?> 
swal("Add Course Detail Successfully", "", "success");

       
<?php } ?>
</script>

<script>
  $(document).ready(function(){
  $(".hidecourse").change(function(){
    var  hidecourse= $(".hidecourse").val();
    if(hidecourse==5)
    {
      // alert("ok");
      $('.showcourse').show();
      $('.showcourse').attr('required',true);
      $('.showcourse').attr('name','course_type')
      $(".hidecourse").removeAttr('required');



    }
    else
    {
      // alert("sorry");
      $('.hidecourse').show();
      $('.hidecourse').attr('required',true);
      $(".showcourse").hide();
      $('.showcourse').removeAttr('name','course_type')
      $(".showcourse").removeAttr('required');
    }
});
});
</script>

<script>
  jQuery(document).ready(function(){
  jQuery(".chosen").chosen();
});

</script>
<script>

$(document).ready(function(){
  $(".selectyr").change(function(){
   var start=parseInt($(this).val())+1;


   for(i=1;i<start;i++)
   {
    $("."+i).val("");
    $(".years"+i).show();
    // $(".years"+i).attr("required", "true");

   }

   for(i=start;i<7;i++)
   {
 
    $("."+i).val("0");
    $(".years"+i).hide();
   }


  });
})

</script>
<script>
  $(document).ready(function(){
    $('.opentradeinput').change(function()
    {
       var opentradeinput= $('.opentradeinput').val();
       if(opentradeinput==1)
       {
        $(this).parent().next().css("display", "block");
        $(this).parent().next().children().attr("required", "true");
        $(this).parent().next().children().attr("name", "course_trade");
        $(this).removeAttr("required");
        $(this).removeAttr("name");
       }
       else
       {
        $(this).parent().next().css("display", "none");
        $(this).parent().next().children().removeAttr('required');
        $(this).parent().next().children().removeAttr('name');
        $(this).attr("required", "true");
        $(this).attr("name", "course_trade");
       }
    })
  })
</script>








</body>

</html>




