
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
          <h1 style="font-size:18px;">Study Abroad Application</h1>
          <div class="row" style="background:white;padding:20px;box-shadow:0px 0px 9px silver">
              <div class="col-md-12">
     
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="filter">S No.</th>
                                                <th>Source</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>City</th>
                                                <th>message</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                          <?php
                                           $i=1;
                                           foreach ($abroad as $key) {
                                          ?>
                                              <tr>
                                                <td><?= $i?></td>
                                                <td><?= $key->source?></td>
                                                <td><?= $key->name?></td>
                                                <td><?= $key->email?></td>
                                                <td><?= $key->phone?></td>
                                                <td><?= $key->city?></td>
                                                <td><?= $key->message?></td>
                                                <td><?= $key->date?></td>
                                            </tr>
                                        <?php $i++; } ?> 
                                        </tbody>
                                         <tfoot>
                                             <tr>
                                                <th>S No.</th>
                                                <th>Source</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>City</th>
                                                <th>message</th>
                                                <th>Date</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>



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
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?= base_url()?>assets2/js/sb-admin-2.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
<?php include('table2excel.php')?>
 <script type="text/javascript">
  $(".export").click(function(){
  $("#dataTable").table2excel({
    // exclude CSS class
    exclude: ".noExl",
    name: "Application",
    filename: "Study Abroad Application", //do not include extension
    fileext: ".xls" // file extension
  }); 
});
</script>
             <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
          </script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
  $(document).ready( function () {
    $('#dataTable').DataTable();
    $('.filter').click();
} );
</script>



<script>
 <?php
     if($this->session->flashdata('delete_user_application_alt'))
      { 
        ?> 
swal("Deleted Successfully", "", "success");

       
<?php } ?>
</script>


</body>

</html>




