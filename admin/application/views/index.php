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
  <link href="<?=base_url()?>assets2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url()?>assets2/css/style-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
   <?php
    include("sidebar.php");
   ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-center">Dashboard</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>

          <!-- Content Row -->
          <div class="row">
            <!-- Total Colleges -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="<?= base_url('index.php/Admin_controller/authenticate')?>" style="text-decoration:none;">
              <div class="card border-left-success shadow h-100 py-2" style="background:linear-gradient(111.95647678511193deg, rgba(231, 244, 245,1) 5.533854166666667%,rgba(78, 240, 250,1) 96.67968749999999%)">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total colleges</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalcollege;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-university fa-2x text-black-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            

            <!-- Total Colleges -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="<?= base_url('index.php/Admin_controller/collegebycategory/Management')?>" style="text-decoration:none;">
              <div class="card border-left-primary shadow h-100 py-2" style="background:linear-gradient(111.95647678511193deg, rgba(249, 231, 148,1) 5.533854166666667%,rgba(246, 190, 212,1) 96.67968749999999%)">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Management colleges</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalmanagementcollege;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-black-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

              <!-- Total Colleges -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="<?= base_url('index.php/Admin_controller/collegebycategory/Medical')?>" style="text-decoration:none;">
              <div class="card border-left-danger shadow h-100 py-2" style="background:linear-gradient(111.95647678511193deg, rgba(167, 204, 225,1) 5.533854166666667%,rgba(236, 246, 237,1) 96.67968749999999%);">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Medical colleges</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalmedicalcollege;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-md fa-2x text-black-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

                <!-- Total Colleges -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="<?= base_url('index.php/Admin_controller/collegebycategory/Engineering')?>" style="text-decoration:none;">
              <div class="card border-left-warning shadow h-100 py-2" style="background:linear-gradient(111.95647678511193deg, rgba(254, 207, 238,1) 5.533854166666667%,rgba(255, 156, 160,1) 96.67968749999999%);">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Total Engineering colleges</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalenggcollege;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-cog fa-2x text-black-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

                         <!-- Total Colleges -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="<?= base_url('index.php/Admin_controller/collegebycategory/Law')?>" style="text-decoration:none;">
              <div class="card border-left-info shadow h-100 py-2" style="background:linear-gradient(111.95647678511193deg, rgba(224, 247, 135,1) 5.533854166666667%,rgba(78, 227, 250,1) 96.67968749999999%);">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Total Law colleges</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totallawcollege;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-graduate fa-2x text-dark-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

      
  

                          <!-- Total Colleges -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="<?= base_url('index.php/Admin_controller/collegebycategory/Commerce')?>" style="text-decoration:none;">
              <div class="card border-left-dark shadow h-100 py-2" style="background:linear-gradient(111.95647678511193deg, rgba(250, 233, 155,1) 5.533854166666667%,rgba(229, 151, 64,1) 96.67968749999999%);">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Total Commerce colleges</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalcommercecollege;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-rupee-sign fa-2x text-dark-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

                              <!-- Total Colleges -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="<?= base_url('index.php/Admin_controller/topexams')?>" style="text-decoration:none;">
              <div class="card border-left-success shadow h-100 py-2" style="background:linear-gradient(111.95647678511193deg, rgba(247, 238, 147,1) 5.533854166666667%,rgba(234, 220, 34,1) 96.67968749999999%);">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Exam</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalexam;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-copy fa-2x text-dark-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>

                   <!-- Total Colleges -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="<?= base_url('index.php/Admin_controller/enquiry')?>" style="text-decoration:none;">
              <div class="card border-left-primary shadow h-100 py-2" style="background:linear-gradient(111.95647678511193deg, rgba(247, 228, 103,1) 5.533854166666667%,rgba(116, 196, 172,1) 96.67968749999999%);">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Enquiry</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalinquiry;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-question-circle fa-2x text-dark-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>

  


          </div>

          <div class="row">
            
                     <!-- Total Users data -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="<?= base_url('index.php/Admin_controller/userdetail')?>" style="text-decoration:none;">
              <div class="card border-left-dark shadow h-100 py-2" style="background:linear-gradient(111.95647678511193deg, rgba(255, 148, 196,1) 5.533854166666667%,rgba(235, 81, 112,1) 96.67968749999999%);">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Registered User</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalusers;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>

                      <!-- Total Users data -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="<?= base_url('index.php/Admin_controller/examapplication')?>" style="text-decoration:none;">
              <div class="card border-left-info shadow h-100 py-2" style="background:linear-gradient(111.95647678511193deg, rgba(231, 62, 162,1) 5.533854166666667%,rgba(248, 193, 105,1) 96.67968749999999%);">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Exam  Application</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalexamapplication;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div> 

                      <!-- Total Users data -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="<?= base_url('index.php/Admin_controller/userapplication')?>" style="text-decoration:none;">
              <div class="card border-left-success shadow h-100 py-2" style="background:linear-gradient(111.95647678511193deg, rgba(48, 245, 251,1) 5.533854166666667%,rgba(23, 142, 203,1) 96.67968749999999%);">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Total User Application</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totaluserapplication;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file-signature fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>


                      <!-- Total Users data -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="<?= base_url('index.php/Admin_controller/admission')?>" style="text-decoration:none;">
              <div class="card border-left-danger shadow h-100 py-2" style="background:linear-gradient(111.95647678511193deg, rgba(250, 143, 191,1) 5.533854166666667%,rgba(138, 176, 250,1) 96.67968749999999%);">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Total Admission 2020</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totaladmission2020;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>

                      <!-- Total Users data -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="<?= base_url('index.php/Admin_controller/abroad')?>" style="text-decoration:none;">
              <div class="card border-left-primary shadow h-100 py-2" style="background:linear-gradient(111.95647678511193deg, rgba(97, 116, 180,1) 5.533854166666667%,rgba(229, 151, 64,1) 96.67968749999999%);">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Abroad Application</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" style="color:#fff!important;"><?= $totalabroadapplication;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-globe-asia fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>

                      <!-- Total Users data -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="<?= base_url('index.php/Admin_controller/lead')?>" style="text-decoration:none;">
              <div class="card border-left-warning shadow h-100 py-2" style="background:linear-gradient(111.95647678511193deg, rgba(240, 94, 7,1) 5.533854166666667%,rgba(30, 189, 177,1) 96.67968749999999%);">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Lead Application</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalleadapplication;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>

                      <!-- Total Users data -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="<?= base_url('index.php/Admin_controller/helpdesk')?>" style="text-decoration:none;">
              <div class="card border-left-dark shadow h-100 py-2" style="background:linear-gradient(111.95647678511193deg, rgba(2, 27, 62,1) 5.533854166666667%,rgba(81, 119, 149,1) 96.67968749999999%);">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Student Helpdesk</div>
                      <div class="h5 mb-0 font-weight-bold  text-gray-800" style="color:#fff!important;"><?= $totalstudenthelpdeskapplication;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-hands-helping fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>


          </div>



          <!-- Content Row -->


            <!-- Pie Chart -->
           

         

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
     <?php include('footer.php') ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
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

  <!-- Page level plugins -->
 <!--  <script src="vendor/chart.js/Chart.min.js"></script> -->

  <!-- Page level custom scripts -->
<!--   <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script> -->

</body>

</html>
