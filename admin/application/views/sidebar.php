       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url("index.php/Admin_controller/index")?>" style="background:white;">
       
        <div class="sidebar-brand-text mx-3"><img src="<?= base_url()?>assets2/img/collegegyanilogo.png" style="max-width:100%;"></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('index.php/Admin_controller/index')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>


      <!-- Nav Item - Pages Collapse Menu -->
   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Manage Colleges</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage colleges</h6> 
           <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/authenticate')?>">Authenticate Colleges</a>
 
        </div>
      </li> 

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
<
        </div>
      </li>


     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
         <i class="fas fa-tasks"></i>
          <span>Manage Users</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded"> 
 <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/userdetail')?>">Users Details</a>
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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesbanner" aria-expanded="true" aria-controls="collapseUtilities2">
          <i class="far fa-star"></i>
          <span>Blog</span>
        </a>
        <div id="collapseUtilitiesbanner" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded"> 
 <a class="collapse-item" href="<?= base_url('index.php/Blog/blog')?>">Add Blog</a>

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
            <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/advertisewithus')?>">Advertise With Us</a>
          </div>
        </div>
      </li>





       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities4" aria-expanded="true" aria-controls="collapseUtilities2">
          <i class="fas fa-newspaper"></i>
          <span>News</span>
        </a>
        <div id="collapseUtilities4" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded"> 
            <h6 class="collapse-header">News Management</h6> 
           <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/news')?>">News</a>
         
        </div>
      </li> 


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities5" aria-expanded="true" aria-controls="collapseUtilities2">
          <i class="far fa-copy"></i>
          <span>Exams</span>
        </a>
        <div id="collapseUtilities5" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded"> 
            <h6 class="collapse-header">Exams Management</h6> 
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
           <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/examapplication')?>">Exam Application</a>
           <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/helpdesk')?>"> Students Helpdesk</a>
           <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/admission')?>"> Admission 2020</a>
           <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/abroad')?>"> Study Abroad </a>
           <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/enquiry')?>"> Enquiry Now </a>


         
        </div>
      </li> 

        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities9" aria-expanded="true" aria-controls="collapseUtilities2">
          <i class="fas fa-user-tag"></i>
          <span>Reviews</span>
        </a>
        <div id="collapseUtilities9" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded"> 
            <h6 class="collapse-header">Review</h6> 
         <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/reviews')?>"> Review For Approval </a>
         <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/reviewsapproved')?>">Approved Reviews  </a>
         <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/reviewshide')?>"> Hide Reviews  </a>
        </div>
      </li> 


           <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities8" aria-expanded="true" aria-controls="collapseUtilities2">
          <i class="fas fa-city"></i>
          <span>State/City</span>
        </a>
        <div id="collapseUtilities8" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded"> 
            <h6 class="collapse-header">Citys Manage</h6> 
           <a class="collapse-item" href="<?= base_url('index.php/Admin_controller/Citymanagement')?>">Add City</a>
          

         
        </div>
      </li> 

     

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

   
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata("email") ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url()?>/assets2/img/2.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

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

