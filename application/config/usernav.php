<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

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
<link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/imageviewer/css/lightgallery.css" /> 

<link href="<?= base_url()?>/assets/css/webslidemenu.css" rel="stylesheet">


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

 abbr[title] {
  border-bottom: none !important;
  cursor: default !important;
  text-decoration: none;
}

</style>
<body>



 
<div class="mobile-version"> 

   <div class="mobile-nav">
    <div class="wsmobileheader clearfix ">
    <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
    <a href="<?= base_url();?>"><span class="smllogo"><img src="<?= base_url()?>assets/images/blog/collegegyanilogo.png" alt="" /></span></a>
    <a href="<?= base_url('User/logout')?>" class="callusbtn">
      <button type="button" class="btn btn-primary">Log Out</button>

    </a>
  </div>
  <!-- Mobile Header -->


  <div class="headtoppart clearfix">
  
  <div class="wsmainfull clearfix">
    <div class="wsmainwp clearfix">


      <!--Main Menu HTML Code-->
      <nav class="wsmenu clearfix">
       <ul class="wsmenu-list">
         
          <li aria-haspopup="true"><a href="#" class="active menuhomeicon" style="font-size:18px;text-align:center;font-weight:bold;"><i class="fas fa-home"></i><span class="hometext">&nbsp;&nbsp;Menu</span></a></li>
     <li aria-haspopup="true"><a href="<?= base_url()?>"><i class="fas fa-home"></i>Home <span class="wsarrow"></span></a> </li>
          <li aria-haspopup="true"><a href="#"><i class="fas fa-tasks"></i>Management <span class="wsarrow"></span></a>
            <ul class="sub-menu">
             <li aria-haspopup="true"><a href="#"><i class="fas fa-angle-right"></i>BBA Colleges</a></li>
             <li aria-haspopup="true"><a href="#"><i class="fas fa-angle-right"></i>MBA Colleges</a></li>
             <li aria-haspopup="true"><a href="#"><i class="fas fa-angle-right"></i>PGDM Colleges</a></li>
             <li> <a href="<?= base_url('User/managementcolleges/top-management-colleges-in-india')?>">All Management Colleges</a> </li>
           
            </ul>
      </li>

      <li aria-haspopup="true"><a ><i class="fas fa-wrench"></i>Engineering <span class="wsarrow"></span></a> 
             <ul class="sub-menu">
             <li> <a href="<?= base_url('User/enggcolleges/top-engineering-colleges-in-india')?>">All Engineering Colleges</a> </li>
           
            </ul>   
      </li>

         <li aria-haspopup="true"><a><i class="fas fa-file-invoice"></i>Commerce <span class="wsarrow"></span></a>
                 <ul class="sub-menu">
             <li> <a href="<?= base_url('User/commercecolleges/top-commerce-colleges-in-india')?>">All Commerce Colleges</a> </li>
           
            </ul>
           
         </li>

         <li aria-haspopup="true"><a ><i class="fas fa-notes-medical"></i>Medical <span class="wsarrow"></span></a> 

                <ul class="sub-menu">
             <li> <a href="<?= base_url('User/medicalcecolleges/top-medical-colleges-in-india')?>">All Medical Colleges</a> </li>
           
            </ul>

         </li>

          <li aria-haspopup="true"><a href="<?= base_url('User/news/top-news')?>"><i class="fas fa-newspaper"></i>News <span class="wsarrow"></span></a> </li>
          <li aria-haspopup="true"><a href="<?= base_url('User/examsmain/top-exams')?>"><i class="fas fa-paste"></i>Exams <span class="wsarrow"></span></a> </li>

     <li aria-haspopup="true"><a href="<?= base_url('User/userpanel')?>"> <i class="far fa-user-circle"></i>My Profile <span class="wsarrow"></span></a> </li>

        </ul>
      </nav>
      <!--Menu HTML Code-->
    </div>
  </div>


  </div>

</div>
</div>
<!--top bar start-->
<nav> 
<div class="topbar-wrap desktop-version"  style="background-color:#007075;margin-top:95px;">
  <div class="container-fluid" style="margin-left: 0;"> 
    
    <div class="row mg-0" > 
      
      <div class="col-md-8 col-sm-6 col-xs-12">
        <div class="user-wrap-one user-wrap">
          
          <a href="<?= base_url('admission-2020')?>" style="color:#fff;">ADMISSION-2020</a>
          
          <a href="<?= base_url('exam-in-india')?>" style="color:#fff;">EXAMS</a>
          <a href=""style="color:#fff;">REVIEWS</a>
          <a href="<?= base_url('educational-news')?>" style="color:#fff;">NEWS</a>
          <a href="<?= base_url("review");?>" style="color:#fff;" style="color:#fff;">WRITE A REVIEW</a>
          <a href="<?= base_url("university-in-india");?>" style="color:#fff;">TOP UNIVERSITIES</a>
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
</nav>

<nav>
  <div class="container-fluid sticky desktop-version header-wrap">
    <div class="row">
      <div class="col-md-3">
        <div class="logo"><a href="<?= base_url();?>"><img class="pd-5" src="<?= base_url()?>assets/images/blog/collegegyanilogo.png" alt="" width="60%"></a></div>
      </div>
      <div class="col-md-9 menu">
        <ul>
           <li> <a href="<?= base_url()?>">Home</a></li>
           <li class="exam-title"> <a href="<?= base_url('exam-in-india')?>"> Exams </a></li>
           <li class="management-title"> <a href="<?= base_url('management-colleges-in-india')?>">Management </a></li>
           <li class="Engineering-title"><a href="<?= base_url('engineering-colleges-in-india')?>"> Engineering </a> </li>
           <li class="commerce-title"><a href="<?= base_url('commerce-colleges-in-india')?>"> Commerce </a></li>
           <li class="medical-title"><a href="<?= base_url('medical-colleges-in-india')?>"> Medical</a> </li>
           <li class="myprofileopen" style="position: relative;cursor: pointer;"> My Profile </li>
           <div class="myprofile" style="position:absolute;right:40px;z-index:9999;background:#FF7A02;color:#fff;padding:20px;border-radius:4px;display:none;">
            <p style="margin:0;color:#fff;">
               <?php
                                $email=$this->session->userdata('email');
                                echo $email;
                             ?>
            </p>
            <a href="<?= base_url('User/userpanel')?>" style="text-decoration:none;"> <p class="" style="margin:0;color: #fff;">Edit Profile</p> </a>
            <a href="<?= base_url('User/logout')?>" style="text-decoration:none;"> <p class="" style="margin:0;color: #fff;">Sign Out</p>  </a> 
           </div>

          <!--    <li> <?php
                                       $email=$this->session->userdata('email');
                                 $row=$this->db->query("select * from user_registration where email='$email'");
                                       $userdata=$row->row();
                                ?><a href="<?= base_url('User/userpanel')?>">Edit Profile</a></li>
                              
                       <li> <?php
                            if($this->session->userdata('email'))
                                { 
                                    ?>
                            <a class="nav-link" href="<?= base_url('User/logout')?>"><i class="fa fa-power-off"></i><abbr title="
                             <?php
                                $email=$this->session->userdata('email');
                                echo $email;
                             ?>
                              "> Sign out </abbr>  </a>
                            <?php
                        }
                        ?>            
                           </li>  -->
          
              <!-- <li class="register-btn"><a href="<?= base_url('User/registration');?>">Register</a></li>
               <li class="register-btn"><a href="<?= base_url('')?>/college">College Register</a></li> -->
         
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
           <li class="bold fz-14">Management Exams</li>
           <li><a href="<?= base_url('exam-details/37/Cat-Exam')?>"> CAT </a></li>
           <li> <a href="<?= base_url('exam-details/44/NMAT-Exam')?>">NMAT </a></li>
           <li><a href="<?= base_url('exam-details/43/MAT-Exam')?>"> MAT </a> </li>
           <li><a href="<?= base_url('exam-details/47/SNAP-Exam')?>"> SNAP </a></li>
            <li><a href="<?= base_url('exam-details/42/MAHCET')?>"> MAHCET </a> </li>
           <li><a href="<?= base_url('exam-details/46/IRMA-Exam')?>"> IRMA </a></li>
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14">Medical Exams</li>
           <li><a href="#"> AFMC </a></li>
           <li> <a href="#">AIIMS </a></li>
           <li><a href="#"> AIMS CET </a> </li>
           <li><a href="#"> AIPMT </a></li>
           <li> <a href="#">AIPVT </a></li>
           <li><a href="#">AU MEE </a> </li>
           <li><a href="#"> BHU PMT </a></li>
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14">Engineering Exams</li>
           <li><a href="#"> JEE Main </a></li>
           <li> <a href="#">BITSAT </a></li>
           <li><a href="#"> MET </a> </li>
           <li><a href="#"> VITEEE </a></li>
           <li><a href="#"> SRMJEEE </a></li>
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14">Diploma/Fahion Exams</li>
           <li><a href="#"> NIFT </a></li>
           <li> <a href="#">AIEED </a></li>
           <li><a href="#"> MIT </a> </li>
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
          
           <li class="fz-14 color-gray bold">TOP STATE COLLEGES</li>
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
           <li class="bold fz-14 color-gray">TOP CITY COLLEGES</li>
           <li><a href="<?= base_url('top-management-college-in-noida')?>"> NOIDA </a></li>
           <li> <a href="<?= base_url('top-management-college-in-ghaziabad')?>"> GHAZIABAD </a></li>
           <li><a href="<?= base_url('top-management-college-in-delhi')?>"> DELHI </a> </li>
           <li><a href="<?= base_url('top-management-college-in-pune')?>">PUNE</a></li>
           <li><a href="<?= base_url('top-management-college-in-lucknow')?>"> LUCKNOW</a> </li>
           <li><a href="<?= base_url('top-management-college-in-bangalore')?>">BANGALORE</a></li>
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14 color-gray">TOP COURSES</li>
           <li><a href="<?= base_url('bba-colleges')?>"> BBA </a></li>
           <li> <a href="<?= base_url('mba-colleges')?>"> MBA </a></li> 
           <li><a href="<?= base_url('pgdm-colleges')?>"> PGDM </a> </li>
           <li><a href="<?= base_url('bba-mba-colleges')?>"> BBA+MBA </a></li>
           <li><a href="<?= base_url('bbm-colleges')?>">BBM</a></li>

        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14 color-gray">Popular Managenent Courses</li>
           <li><a href="<?= base_url('bba-colleges')?>" class="color-orange fz-15 bold"> BBA COLLEGES </a></li>
           <li><a href="<?= base_url('mba-colleges')?>" class="color-orange fz-15 bold"> MBA COLLEGES</a> </li>
           <li><a href="<?= base_url('pgdm-colleges')?>" class="color-orange fz-15 bold"> PGDM COLLEGES </a></li>
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
          
           <li class="fz-14 color-gray bold">TOP STATE COLLEGES</li>
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
           <li class="bold fz-14 color-gray">TOP CITY COLLEGES</li>
           <li><a href="<?= base_url('top-engineering-college-in-noida')?>"> NOIDA </a></li>
           <li><a href="<?= base_url('top-engineering-college-in-ghaziabad')?>"> GHAZIABAD </a></li>
           <li><a href="<?= base_url('top-engineering-college-in-delhi')?>"> DELHI </a> </li>
           <li><a href="<?= base_url('top-engineering-college-in-pune')?>">PUNE</a></li>
           <li><a href="<?= base_url('top-engineering-college-in-lucknow')?>"> LUCKNOW</a> </li>
           <li><a href="<?= base_url('top-engineering-college-in-bangalore')?>">BANGALORE</a></li>
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14 color-gray">TOP COURSES</li>
           <li><a href="<?= base_url('btech-colleges')?>"> B-Tech </a></li>
           <li> <a href="<?= base_url('mtech-colleges')?>">M-Tech </a></li>
           <li><a href="<?= base_url('barch-colleges')?>"> B-Arch </a> </li>
           <li><a href="<?= base_url('btech-mtech-colleges')?>">B-Tech+M-Tech</a></li>
           <li><a href="<?= base_url('be-colleges')?>">BE</a></li>    
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14 color-gray">Popular Engineering Courses</li>
           <li><a href="<?= base_url('btech-colleges')?>" class="color-orange fz-15 bold">B-TECH COLLEGES </a></li>
           <li><a href="<?= base_url('mtech-colleges')?>" class="color-orange fz-15 bold"> M-TECH COLLEGES </a></li>
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
          
           <li class="fz-14 color-gray bold">TOP STATE COLLEGES</li>
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
           <li class="bold fz-14 color-gray">TOP CITY COLLEGES</li>
           <li><a href="<?= base_url('top-commerce-college-in-noida')?>"> NOIDA </a></li>
           <li><a href="<?= base_url('top-commerce-college-in-ghaziabad')?>"> GHAZIABAD </a></li>
           <li><a href="<?= base_url('top-commerce-college-in-delhi')?>"> DELHI </a> </li>
           <li><a href="<?= base_url('top-commerce-college-in-pune')?>">PUNE</a></li>
           <li><a href="<?= base_url('top-commerce-college-in-lucknow')?>"> LUCKNOW</a> </li>
           <li><a href="<?= base_url('top-commerce-college-in-bangalore')?>">BANGALORE</a></li>
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14 color-gray">TOP COURSES</li>
           <li><a href="<?= base_url('bcom-colleges')?>"> B.Com </a></li>
           <li> <a href="<?= base_url('mcom-colleges')?>">M.Com</a></li>
           <li><a href="<?= base_url('mphil-colleges')?>"> M.Phil</a> </li>
           <li><a href="<?= base_url('bed-colleges')?>">B.ED</a></li>
           <li><a href="<?= base_url('cs-colleges')?>">CS</a></li>
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14 color-gray">Popular Commerce Courses</li>
           <li><a href="<?= base_url('bcom-colleges')?>" class="color-orange fz-15 bold"> B.COM COLLEGES </a></li>
           <li><a href="<?= base_url('mcom-colleges')?>" class="color-orange fz-15 bold">M.COM COLLEGES </a></li>
           
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
          
           <li class="fz-14 color-gray bold">TOP STATE COLLEGES</li>
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
           <li class="bold fz-14 color-gray">TOP CITY COLLEGES</li>
           <li><a href="<?= base_url('top-medical-college-in-noida')?>"> NOIDA </a></li>
           <li><a href="<?= base_url('top-medical-college-in-ghaziabad')?>"> GHAZIABAD </a></li>
           <li><a href="<?= base_url('top-medical-college-in-delhi')?>"> DELHI </a> </li>
           <li><a href="<?= base_url('top-medical-college-in-pune')?>">PUNE</a></li>
           <li><a href="<?= base_url('top-medical-college-in-lucknow')?>"> LUCKNOW</a> </li>
           <li><a href="<?= base_url('top-medical-college-in-bangalore')?>">BANGALORE</a></li>
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14 color-gray">TOP COURSES</li>
           <li><a href="<?= base_url('mbbs-colleges')?>">  MBBS </a> </li>
           <li><a href="<?= base_url('ms-colleges')?>"> MS</a> </li>
           <li><a href="<?= base_url('bpharma-colleges')?>"> B-PHARMA</a> </li>
           <li><a href="<?= base_url('mpharma-colleges')?>"> M-PHARMA</a> </li>
           <li><a href="<?= base_url('bpt-colleges')?>">BPT</a></li>
           <li><a href="<?= base_url('bams-colleges')?>">BAMS</a></li>
           
         
        </ul>
       </div>
       <div class="col-md-3">
         <ul class="left">
           <li class="bold fz-14 color-gray">Popular Medical Courses</li>
           <li><a href="<?= base_url('mbbs-colleges')?>" class="color-orange fz-15 bold">MBBS COLLEGES </a></li>
           <li><a href="<?= base_url('ms-colleges')?>" class="color-orange fz-15 bold">MS COLLEGES </a></li>
           <li><a href="<?= base_url('bpharma-colleges')?>" class="color-orange fz-15 bold"> B-PHARMA </a></li>
           
        </ul>
       </div>
     </div>
   </div>
  </div>
</div>

