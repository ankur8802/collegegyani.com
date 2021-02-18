<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Welcome to College Gyani</title>

<!-- Fav Icon -->
<link rel="shortcut icon" href="favicon.ico">

<!-- Bootstrap -->
<link href="<?= base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url()?>/assets/css/owl.carousel.css" rel="stylesheet">
<link href="<?= base_url()?>/assets/css/style.css" rel="stylesheet">
<link href="<?= base_url()?>/assets/css/owl.theme.green.min.css" rel="stylesheet">
<link href="<?= base_url()?>/assets/css/extra.css" rel="stylesheet">
<link href="<?= base_url()?>/assets/css/responsive.css" rel="stylesheet">
<link href="<?= base_url()?>/assets/css/font-awesome.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Maven+Pro&display=swap" rel="stylesheet">
<link href="<?= base_url()?>/assets/owl/owl.carousel.min.css" rel="stylesheet">
<link href="<?= base_url()?>/assets/owl/owl.theme.default.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

 <!-- <link rel="stylesheet" href="<?= base_url()?>/assets/css/fade-down.css">
  
  <link href="<?= base_url()?>/assets/css/webslidemenu.css" rel="stylesheet"> -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
 
 body
 {
    overflow-x: hidden;
 }

 @media only screen and (max-width:1200px){
   .categorybox
  {
   min-height: auto;
  }
.categoryimg
{
   margin-top: 10px;
}
 }
 .user-wrap-one a 
 {
     text-decoration: none;
     color: #000;
     margin-left: 10px;

 }
 .user-wrap-one a:hover
 {
  color: #ff7800;
 }
</style>
<body>



 

<!--top bar start-->
<nav> 
<div class="topbar-wrap desktop-version"  style="background-color:#007075;margin-top:95px;">
  <div class="container-fluid" style="margin-left: 0;"> 
    
    <div class="row mg-0" > 
      
      <div class="col-md-8 col-sm-6 col-xs-12">
        <div class="user-wrap-one user-wrap">
          
          <a href="#" style="color:#fff;">ADMISSION-2020</a>
          
          <a href="#" style="color:#fff;">EXAMS</a>
          <a href=""style="color:#fff;">REVIEWS</a>
          <a href="#" style="color:#fff;">NEWS</a>
          <a href="<?= base_url("index.php/User/review");?>" style="color:#fff;" style="color:#fff;">WRITE A REVIEW</a>
          <a href="#" style="color:#fff;">TOP UNIVERSITIES</a>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="user-wrap" style="float: right;padding:4px;">
        <!--   <div class="login-btn"><a href="#">Login</a></div>
          <div class="register-btn"><a href="#">Register</a></div> -->
          <div class="clearfix"></div>
        </div>
      </div>
     
    </div>
    
  </div>
</div>
<!--top bar start end--> 

<!--header start-->
<div class="header-wrap sticky mobile-version" id="navbar">
  <div class="container-fluid"> 
    <!--row start-->
    <div class="row"> 
      <!--col-md-3 start-->
      <div class="col-md-3 col-sm-12" style="text-align: center;">
        <div class="logo"><a href="<?= base_url("index.php/User/index");?>"><img src="<?= base_url()?>/assets/images/logo.png" alt="" width="20%"></a></div>
      </div>
      <!--col-md-3 end--> 
      <!--col-md-7 end-->
      <div class="col-md-9 col-sm-12 pd-0"> 
        <!--Navegation start-->
        <div class="navigationwrape">
          <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="navbar-collapse collapse ml-auto">
              <ul class="nav navbar-nav from">
                <li> <a href="<?= base_url('index.php/User/index');?>"> Home</a>
                 
                </li>
                 
                
                <li class="dropdown"> <a href="#"> EXAMS <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li> <a href="#"> GOVT EXAMS </a></li>
                    <li> <a href="#">EXAMS </a></li>
                  </ul>
                </li>
                <li class="dropdown"> <a href="#"> Management <span class="caret"></span></a>
                 <ul class="dropdown-menu">
                    <li> <a href="#"> BBA </a></li>
                    <li> <a href="#">MBA </a></li>
                    <li> <a href="#">SEE ALL COURSES </a></li>
                  </ul>

                </li>
                 <li class="dropdown"> <a href="#"> Engineering  <span class="caret"></span> </a>

                      <ul class="dropdown-menu">
                    <li> <a href="#"> B-TECH </a></li>
                    <li> <a href="#">M-TECH </a></li>
                     <li> <a href="#">SEE ALL COURSES </a></li>
                  </ul>


                 </li>
                <li class="dropdown"> <a href="#"> Commerce  <span class="caret"></span> </a>

                      <ul class="dropdown-menu">
                    <li> <a href="#"> B-COM </a></li>
                    <li> <a href="#">M-COM </a></li>
                     <li> <a href="#">SEE ALL COURSES </a></li>
                  </ul>

                </li>
                <li class="dropdown"> <a href="#"> Medical  <span class="caret"></span> </a>

                  <ul class="dropdown-menu">
                    <li> <a href="#">MBBS </a></li>
                    <li> <a href="#">MS </a></li>
                     <li> <a href="#">SEE ALL COURSES </a></li>
                  </ul>

               </li>
                
                 <li class="dropdown"> <a href="#"> more <span class="caret"></span></a>
                  <ul class="dropdown-menu" style="right: 0;left: auto;">
                    <li> <a href="#"> ABOUT US </a></li>
                    <li> <a href="#">CONTACT US </a></li>
                     
                  </ul>
                </li>


                
              </ul>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <!--Navegation start--> 
      </div>
      <!--col-md-3 end--> 
      <!--col-md-2 start-->
      
      <!--col-md-2 end--> 
    </div>
    <!--row end--> 
  </div>
</div>
</nav>

<nav>
  <div class="container-fluid sticky desktop-version header-wrap" style="height:95px;">
    <div class="row">
      <div class="col-md-3">
        <div class="logo"><a href="<?= base_url("index.php/User/index");?>"><img class="pd-5" src="<?= base_url()?>assets/images/logo.png" alt="" width="60%"></a></div>
      </div>
      <div class="col-md-9 menu">
        <ul>
           <li> <a href="<?= base_url()?>">Home</a></li>
           <li class="exam-title"> <a href="#"> Exams </a></li>
           <li class="management-title"> <a href="#">Management </a></li>
           <li class="Engineering-title"><a href="#"> Engineering </a> </li>
           <li class="commerce-title"><a href="#"> Commerce </a></li>
           <li class="medical-title"><a href="#"> Medical</a> </li>
           <li> <a href="<?= base_url();?>"> Study Abroad</a></li>
               <li class="login-btn"><a href="<?= base_url('index.php/User/login');?>">Login</a></li>
         
        </ul>
      </div>
    </div>
  </div>
</nav>


<div class="exams" style="display: none;">
<div class="container-fluid">
  
  
      <center><h3 class="color-orange bold">Exams in India</h3></center>
  
   <div class="exam-menu container">
     <div class="row">
       <div class="col-md-3">
          <ul class="left">
           <li class="bold fz-14">TEACHING</li>
           <li><a href="#"> TS-EDCET </a></li>
           <li> <a href="#">CSSET </a></li>
           <li><a href="#"> MAH-BED-CET </a> </li>
           <li><a href="#"> HPU-BED </a></li>
            <li><a href="#"> MAH-BED-CET </a> </li>
           <li><a href="#"> HPU-BED </a></li>
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14">BANKING</li>
           <li><a href="#"> TS-EDCET </a></li>
           <li> <a href="#">CSSET </a></li>
           <li><a href="#"> MAH-BED-CET </a> </li>
           <li><a href="#"> HPU-BED </a></li>
           <li> <a href="#">CSSET </a></li>
           <li><a href="#"> MAH-BED-CET </a> </li>
           <li><a href="#"> HPU-BED </a></li>
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14">PSU RECRUITMENT</li>
           <li><a href="#"> TS-EDCET </a></li>
           <li> <a href="#">CSSET </a></li>
           <li><a href="#"> MAH-BED-CET </a> </li>
           <li><a href="#"> HPU-BED </a></li>
           <li><a href="#"> HPU-BED </a></li>
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14">SSC</li>
           <li><a href="#"> TS-EDCET </a></li>
           <li> <a href="#">CSSET </a></li>
           <li><a href="#"> MAH-BED-CET </a> </li>
           <li><a href="#"> HPU-BED </a></li>
        </ul>
       </div>
     </div>
   </div>
  </div>
</div>


<div class="management" style="display: none;">
<div class="container-fluid">
  
  
      <center><h3 class="color-orange bold">Management Colleges in India</h3></center>
  
   <div class="exam-menu container">
     <div class="row">
       <div class="col-md-3">
          <ul class="left">
          
           <li class="fz-14 color-gray bold">STATE WISE COLLEGES</li>
           <li> <a href="#">DELHI NCR </a></li>
           <li><a href="#"> UTTAR PRADESH </a> </li>
           <li><a href="#"> MAHARASHTRA </a></li>
            <li> <a href="#">MADHYA PRADESH</a></li>
           <li><a href="#"> KARNATAKA </a> </li>
           <li><a href="#"> TAMIL NADU </a></li>
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14 color-gray">CITY WISE COLLEGES</li>
           <li><a href="#"> BANGALORE </a></li>
           <li> <a href="#">MUMBAI </a></li>
           <li><a href="#"> CHENNAI</a> </li>
           <li><a href="#">PUNE</a></li>
           <li><a href="#"> INDORE</a> </li>
           <li><a href="#">KOLKATA</a></li>
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14 color-gray">BROWSE BY COURSES</li>
           <li><a href="#"> FOREIGN TRADE </a></li>
           <li> <a href="#">INFORMATION TECHNOLOGY </a></li>
           <li><a href="#"> MOPERATIONS MANAGEMENT </a> </li>
           <li><a href="#"> HUMAN RESOURCES </a></li>
           <li><a href="#"> MANAGEMENT </a></li>
           <li> <a href="#">IMARKETING</a></li>
           <li><a href="#"> MOPERATIONS MANAGEMENT </a> </li>
           <li><a href="#"> FINANCE</a></li>
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14 color-gray">Popular Managenent Courses</li>
           <li><a href="#" class="color-orange fz-15 bold"> BBA COLLEGES </a></li>
           <li><a href="#" class="color-orange fz-15 bold">BBM COLLEGES </a></li>
           <li><a href="#" class="color-orange fz-15 bold"> MBA COLLEGES</a> </li>
           <li><a href="#" class="color-orange fz-15 bold"> PGDM COLLEGES </a></li>
        </ul>
       </div>
     </div>
   </div>
  </div>
</div>




<div class="Engineering" style="display: none;">
<div class="container-fluid">
  
  
      <center><h3 class="color-orange bold">Engineering Colleges in India</h3></center>
  
   <div class="exam-menu container">
     <div class="row">
       <div class="col-md-3">
          <ul class="left">
          
           <li class="fz-14 color-gray bold">STATE WISE COLLEGES</li>
           <li> <a href="#">DELHI NCR </a></li>
           <li><a href="#"> UTTAR PRADESH </a> </li>
           <li><a href="#"> MAHARASHTRA </a></li>
            <li> <a href="#">MADHYA PRADESH</a></li>
           <li><a href="#"> KARNATAKA </a> </li>
           <li><a href="#"> TAMIL NADU </a></li>
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14 color-gray">CITY WISE COLLEGES</li>
           <li><a href="#"> BANGALORE </a></li>
           <li> <a href="#">MUMBAI </a></li>
           <li><a href="#"> CHENNAI</a> </li>
           <li><a href="#">PUNE</a></li>
           <li><a href="#"> INDORE</a> </li>
           <li><a href="#">KOLKATA</a></li>
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14 color-gray">BROWSE BY COURSES</li>
           <li><a href="#"> ROBOTICS </a></li>
           <li> <a href="#">CONTROL ENGINEERING </a></li>
           <li><a href="#"> METALLURGICAL </a> </li>
           <li><a href="#">ENGINEERING</a></li>
           <li><a href="#">NANOTECHNOLOGY</a></li>
           <li> <a href="#">SOFTWARE ENGINEERING</a></li>
           <li><a href="#"> GENERAL </a> </li>
         
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14 color-gray">Popular Managenent Courses</li>
           <li><a href="#" class="color-orange fz-15 bold"> BE COLLEGES </a></li>
           <li><a href="#" class="color-orange fz-15 bold">B-TECH COLLEGES </a></li>
           <li><a href="#" class="color-orange fz-15 bold"> ME COLLEGES</a> </li>
           <li><a href="#" class="color-orange fz-15 bold"> M-TECH COLLEGES </a></li>
        </ul>
       </div>
     </div>
   </div>
  </div>
</div>


<div class="commerce" style="display: none;">
<div class="container-fluid">
  
  
      <center><h3 class="color-orange bold">Commerce Colleges in India</h3></center>
  
   <div class="exam-menu container">
     <div class="row">
       <div class="col-md-3">
          <ul class="left">
          
           <li class="fz-14 color-gray bold">STATE WISE COLLEGES</li>
           <li> <a href="#">DELHI NCR </a></li>
           <li><a href="#"> UTTAR PRADESH </a> </li>
           <li><a href="#"> MAHARASHTRA </a></li>
            <li> <a href="#">MADHYA PRADESH</a></li>
           <li><a href="#"> KARNATAKA </a> </li>
           <li><a href="#"> TAMIL NADU </a></li>
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14 color-gray">CITY WISE COLLEGES</li>
           <li><a href="#"> BANGALORE </a></li>
           <li> <a href="#">MUMBAI </a></li>
           <li><a href="#"> CHENNAI</a> </li>
           <li><a href="#">PUNE</a></li>
           <li><a href="#"> INDORE</a> </li>
           <li><a href="#">KOLKATA</a></li>
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14 color-gray">BROWSE BY COURSES</li>
           <li><a href="#"> ENTREPRENEURSHIP </a></li>
           <li> <a href="#">INTERNATIONAL BUSINESS </a></li>
           <li><a href="#"> BUSINESS MANAGEMENT </a> </li>
           
         
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14 color-gray">Popular Managenent Courses</li>
           <li><a href="#" class="color-orange fz-15 bold"> B.COM COLLEGES </a></li>
           <li><a href="#" class="color-orange fz-15 bold">M.COM COLLEGES </a></li>
           
        </ul>
       </div>
     </div>
   </div>
  </div>
</div>

<div class="medical" style="display: none;">
<div class="container-fluid">
  
  
      <center><h3 class="color-orange bold">Medical Colleges in India</h3></center>
  
   <div class="exam-menu container">
     <div class="row">
       <div class="col-md-3">
          <ul class="left">
          
           <li class="fz-14 color-gray bold">STATE WISE COLLEGES</li>
           <li> <a href="#">DELHI NCR </a></li>
           <li><a href="#"> UTTAR PRADESH </a> </li>
           <li><a href="#"> MAHARASHTRA </a></li>
            <li> <a href="#">MADHYA PRADESH</a></li>
           <li><a href="#"> KARNATAKA </a> </li>
           <li><a href="#"> TAMIL NADU </a></li>
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14 color-gray">CITY WISE COLLEGES</li>
           <li><a href="#"> BANGALORE </a></li>
           <li> <a href="#">MUMBAI </a></li>
           <li><a href="#"> CHENNAI</a> </li>
           <li><a href="#">PUNE</a></li>
           <li><a href="#"> INDORE</a> </li>
           <li><a href="#">KOLKATA</a></li>
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14 color-gray">BROWSE BY COURSES</li>
           <li><a href="#"> AYURVED </a></li>
           <li> <a href="#">HUMAN ANATOMY </a></li>
           <li><a href="#"> OPHTHALMOLOGY</a> </li>
           <li><a href="#"> OBSTETRICS</a> </li>
           <li><a href="#"> E.N.T</a> </li>
           <li><a href="#"> ORTHOPAEDICS</a> </li>
           
         
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14 color-gray">Popular Managenent Courses</li>
           <li><a href="#" class="color-orange fz-15 bold">MBBS COLLEGES </a></li>
           <li><a href="#" class="color-orange fz-15 bold">MS COLLEGES </a></li>
           
        </ul>
       </div>
     </div>
   </div>
  </div>
</div>

