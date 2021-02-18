
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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

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
          <h1 style="font-size:25px;">College Authentication </h1>
          <div class="row" style="background:white;padding:20px;box-shadow:0px 0px 9px silver">
              <div class="col-md-12">
                <div class="table-responsive">
                <table id="dataTableExample1" class="table table-bordered table-hover">
  <thead>
    
 

 


    <tr>
      
      <th scope="col">S.No.</th>
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Contact No.</th>
      <th>City</th>
      <th>Category</th>
      <th >Status</th>
      <th >Position</th>
      <th>Position change</th>
      <th >Reject</th>
      <th >Block</th>
      <th >Accept</th>
      <th> Delete </th>
      <th> Edit College </th>
      <th> Login </th>      
       </tr>
  </tbody>

 <tbody>
  <?php 
          $i=1;
          
         foreach($data as $r)
         { 

        

            ?>
  <tr>
 <td><?php echo $i ?></td>
<td><?php echo $r->college_name ?></td>
<td><?php echo $r->college_email ?></td>
<td><?php echo $r->password ?></td>
<td><?php echo $r->phone ?></td>
<td><?php echo $r->city ?></td>
<td><?php echo $r->college_type ?></td>
<td><?php echo $r->status ?></td>
<td><?php echo $r->position ?></td>

   <td>


        <div class="row">
          <div class="col-md-6">
            <a class="normal" href="<?= base_url("index.php/Admin_controller/positionnormal/{$r->id}")?>" class="btn btn-success normalbtn" style=""><i class="fas fa-arrow-down" style="line-height:5em;"></i></a>
          </div>
          <div class="col-md-6">
            <a class="top"  href="<?= base_url("index.php/Admin_controller/positiontop/{$r->id}")?>" class="btn btn-success topbtn" style=""><i class="fas fa-arrow-up" style="line-height:5em;"></i></a>
          </div>
        </div>
    </td>

<td style="display:; ">
  <a href="<?= base_url("index.php/Admin_controller/reject/{$r->id}")?>" class="btn btn-primary reject_btn" style="color:#fff; ">Reject</a>
</td>
<td style="display:; ">
  <a href="<?= base_url("index.php/Admin_controller/block/{$r->id}")?>" class="btn btn-danger block_btn" style="color:#fff; ">Block</a>
</td>
<td style="display:; ">
  <a href="<?= base_url("index.php/Admin_controller/accept/{$r->id}")?>" class="btn btn-success accept_btn" style="color:#fff; ">Accept</a>
</td>

<td class="text-center">
  <a href="<?= base_url("index.php/Admin_controller/deletecollege/$r->id")?>"><i class="fas fa-trash-alt"></i></a>
</td>

 <td class="text-center">
    <a href="<?= base_url("index.php/Admin_controller/edit/{$r->id}")?>" > <i class="fas fa-edit" style="color:red;"></i></a>   
   </td>


<td>
     <a href="<?= base_url("../collegepanel/index.php/College_controller_extra/loginbyadmin/$r->college_email")?>" class="btn btn-warning" style="color:#fff;" target="_blank">Login</a>
</td>





</tr>
<?php 
$i++;
}

?>
</tbody>
</table>




                           <!--  <button type="button" class="btn btn-primary" id="next1">Next</button> -->
                            </div>
                       </div>



                        <!-- second div -->
                  
               </div> 


      <!-- End of Main Content -->

      <!-- Footer -->
   <?php include('footer.php') ?>
      <!-- End of Footer -->

    </div>
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
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

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
  if ($this->session->flashdata('delete_college_alt')) {
?>
<script>
  swal ( "College Deleted" ,  "" ,  "success" )
</script>
<?php } ?>
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
  $(document).ready(function(){
  

$(".status_dd").on('change',function(){
var status=$(this).val();
// alert($(this).parent().parent().parent().next().next().next().html());

if(status=='accept')
{
  $(".accept_btn")[0].click();
}
else if(status=='reject')
{
   $(".reject_btn")[0].click();
}
else if(status=='block')
{
   $(".block_btn")[0].click();
}


});

       $("#next1").click(function(){
               
                   var input=$("input").val();
                   

                $(".second-div").css("display","block");

                $(".first-div").css("display","none");

       });

        $("#prev1").click(function(){
                 var input=$("input").val();
                     

                $(".first-div").css("display","block");
                $(".second-div").css("display","none");

       });

        $("#next2").click(function(){
             $(".second-div").css("display","none");
              $(".first-div").css("display","none");
               $(".third-div").css("display","block");
        });

          $("#prev2").click(function(){
                 var input=$("input").val();
                     

                $(".second-div").css("display","block");
              $(".first-div").css("display","none");
               $(".third-div").css("display","none");

       });

      });
    </script>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#dataTableExample1').DataTable();
} );
</script>

    <script>
      $(document).ready(function(){
        $('.topcollege').change(function()
        {
          var position=$('.topcollege').val();
          if(position==1)
          {
             location.href = $(this).next().attr("href");
          }
          else if (position==2)
          {
             location.href = $(this).next().next().attr("href");
          }
        })
      })
    </script>



</body>

</html>
