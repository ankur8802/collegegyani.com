                             <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url("index.php/Admin_controller/index")?>" style="background:white;">
       
        <div class="sidebar-brand-text mx-3"><img src="<?= base_url()?>assets2/img/logo.jpg" style="max-width:100%;"></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url("Admin_controller/index")?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
     <!--  <hr class="sidebar-divider"> -->

      <!-- Heading -->
     <!--  <div class="sidebar-heading">
       General Settings
      </div>
 -->
      <!-- Nav Item - Pages Collapse Menu -->
   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Manage Colleges</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage colleges</h6> 
   <!-- <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/lead')?>">Employer lead</a>-->
           <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/authenticate')?>">Authenticate Colleges</a>
          <!--  <a class="collapse-item" href="<?= base_url("index.php/Admin_controller/view_employer")?>"> Employer Details</a>
           <a class="collapse-item" href="<?= base_url("index.php/Admin_controller/authenticate1")?>"> Employer Post Job</a> -->
          
          <!-- </div> -->
        </div>
      </li> 

      <!-- Nav Item - Utilities Collapse Menu -->
     

      <!-- Divider -->
<!--       <hr class="sidebar-divider"> -->

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Category Management
      </div>
 -->
      <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-graduation-cap"></i>
          <span>Add Colleges</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
 <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/managecollegedetails')?>">Add Attributes</a>
  <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/addcollege')?>">Add College</a>
<!-- <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/sub_category')?>">Add Sub Category</a>
<a class="collapse-item" href="<?= base_url('index.php/Admin_controller/subsub_category')?>">Add Sub Sub Category</a>  -->
           <!-- <div class="collapse-divider"></div> -->
            <!-- <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a> --> 
       <!--  </div> -->
        </div>
      </li>
<!--  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Manage Users</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded"> -->
<!-- <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/manage')?>">Add Attributes</a> -->
<!-- <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/sub_category')?>">Add Sub Category</a>
<a class="collapse-item" href="<?= base_url('index.php/Admin_controller/subsub_category')?>">Add Sub Sub Category</a>  -->
           <!-- <div class="collapse-divider"></div> -->
            <!-- <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a> --> 
        <!-- </div>
        </div>
      </li> -->

     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
         <i class="fas fa-tasks"></i>
          <span>Manage Users</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded"> 
 <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/userdetail')?>">Users Details</a>
 <!--<a class="collapse-item" href="<?= base_url('index.php/Admin_controller/user_applied')?>">User Applied Job</a> -->
<!-- <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/add_fabric')?>">Add Fabric</a>  -->
<!-- <a class="collapse-item" href="#"> Seller Management</a> -->

            <!-- <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a> -->
          </div>
        </div>
      </li>


           <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities6" aria-expanded="true" aria-controls="collapseUtilities2">
          <i class="far fa-star"></i>
          <span>Banner</span>
        </a>
        <div id="collapseUtilities6" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded"> 
 <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/add_banner')?>">Add Banner Img</a>

          </div>
        </div>
      </li>


           <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2" aria-expanded="true" aria-controls="collapseUtilities2">
         <i class="fas fa-smile"></i>
          <span>Advertise</span>
        </a>
        <div id="collapseUtilities2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded"> 
 <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/add_slider')?>">Add Slider</a>

          </div>
        </div>
      </li>





       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities4" aria-expanded="true" aria-controls="collapseUtilities2">
          <i class="fas fa-newspaper"></i>
          <span>News/Universities</span>
        </a>
        <div id="collapseUtilities4" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded"> 
            <h6 class="collapse-header">News/Courses <br> Management</h6> 
           <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/news')?>">News</a>
           <a class="collapse-item" href="#">Top Universities</a>
         
        </div>
      </li> 


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities5" aria-expanded="true" aria-controls="collapseUtilities2">
          <i class="far fa-copy"></i>
          <span>Exams</span>
        </a>
        <div id="collapseUtilities5" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded"> 
            <h6 class="collapse-header">Exams Lists</h6> 
           <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/topexams')?>">Exams</a>
         
        </div>
      </li> 


           <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities7" aria-expanded="true" aria-controls="collapseUtilities2">
          <i class="fas fa-users"></i>
          <span>Application</span>
        </a>
        <div id="collapseUtilities7" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded"> 
            <h6 class="collapse-header">All Applications</h6> 
           <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/userapplication')?>">User Application</a>
           <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/commonapplication')?>">Common Application</a>
           <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/lead')?>">Lead</a>

         
        </div>
      </li> 

     


      
 


      <!-- Heading -->
    
<!--  <hr class="sidebar-divider d-none d-md-block">
      <div class="sidebar-heading">
        CAB Mmanagement
      </div>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('index.php/Admin_controller/registercab')?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Register Driver / CAB</span></a>
      </li> -->
      <!-- Nav Item - Pages Collapse Menu -->
 

      <!-- Nav Item - Charts -->
       <!-- <hr class="sidebar-divider d-none d-md-block">
      <div class="sidebar-heading">
       Add Jobs Attributes
      </div>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('index.php/Admin_controller/manage')?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Jobs Attributes</span></a>
      </li>


       <hr class="sidebar-divider d-none d-md-block">
      <div class="sidebar-heading">
        User Management
      </div>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('index.php/Admin_controller/manageproducts')?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>User Details</span></a>
      </li> -->
<!--  -->
  <!-- <hr class="sidebar-divider d-none d-md-block">
 <div class="sidebar-heading">
      Attributes Management
      </div>
           <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Add Attributes</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
<a class="collapse-item" href="<?= base_url('index.php/Admin_controller/add_color')?>">Add Colour</a>
<a class="collapse-item" href="<?= base_url('index.php/Admin_controller/add_material')?>">Add Material</a>
<a class="collapse-item" href="<?= base_url('index.php/Admin_controller/add_fabric')?>">Add Fabric</a> -->
<!-- <a class="collapse-item" href="#"> Seller Management</a> -->

            <!-- <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div> -->
        <!-- </div>
      </li>
 -->
      <!-- Nav Item - Tables -->
    <!--   <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
           <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
           <!--  <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i> -->
                <!-- Counter - Alerts -->
              <!--   <span class="badge badge-danger badge-counter">3+</span>
              </a> -->
              <!-- Dropdown - Alerts -->
              <!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li> -->

            <!-- Nav Item - Messages -->
          <!--   <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i> -->
                <!-- Counter - Messages -->
           <!--      <span class="badge badge-danger badge-counter">7</span>
              </a>
            Dropdown - Messages -->
              <!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li> -->

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata("email") ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url()?>/assets2/img/2.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <!--   <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a> -->
               <!--  <div class="dropdown-divider"></div> -->
                <a class="dropdown-item" href="<?= base_url('index.php/Admin_controller/logout')?>" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>
          <!-- Topbar Search -->
        

          <!-- Topbar Navbar -->
         

        </nav>