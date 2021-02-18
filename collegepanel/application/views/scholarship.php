
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
          <h1 style="font-size:25px;">Scholarship Detail</h1>
          <div class="courseform"  style="background:white;padding:20px;box-shadow:0px 0px 9px silver">
            <form action="<?= base_url('index.php/College_controller/insertscholarship')?>" method="post">
          
           <ul class="row">

              <li class="col-md-12 form-group">
               <label>Scholarship Detail</label>
               <textarea name="scholarship" required id="editor1"></textarea>
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
                                      
                                       <th style="padding:0px 10px;font-size:14px;">Scholarship</th>
\                                      
                                        <th style="padding:0px 10px;font-size:14px;">Action</th>
                                   
                                    </tr>
                                 </thead>
 
                                  <?php foreach($scholarshipdata as $res)
                                  {

                                  ?>
                                    <tr>

                                
                                       <td><?php echo $res->scholarship ?></td>
                                   
                                    

                             
                                        <td>  <center> <a href="<?= base_url("index.php/College_controller/deletescholarship/$res->id")?>"> <i class="fas fa-trash-alt"></i> </a></center> 

                                        <center>
                                          <a href="<?= base_url("index.php/College_controller/editscholarship/$res->id")?>"> <i class="fas fa-edit" style="color: red;"></i> </a>
                                        </center>

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
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>

<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
          <script>
                        CKEDITOR.replace( 'editor1' );
                </script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<script>
 <?php
     if($this->session->flashdata('insert_scholarship_alt'))
      { 
        ?> 
swal("Scholarship Successfully Submitted", "", "success");

       
<?php } ?>
</script>


<script>
 <?php
     if($this->session->flashdata('delete_scholarship_alt'))
      { 
        ?> 
swal("Delete Scholarship Detail Successfully", "", "success");

       
<?php } ?>
</script>


<script>
 <?php
     if($this->session->flashdata('update_scholarship_alt'))
      { 
        ?> 
swal("Update Scholarship Successfully", "", "success");

       
<?php } ?>
</script>



</body>

</html>




