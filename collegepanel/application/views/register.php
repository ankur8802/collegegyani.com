<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.hassandesigns.top/html/classified/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Sep 2019 07:50:38 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Welcome to College Gyani</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- Fav Icon -->
<link rel="shortcut icon" href="favicon.ico">

<!-- Bootstrap -->
<link href="<?= base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url()?>/assets/css/owl.carousel.css" rel="stylesheet">
<link href="<?= base_url()?>/assets/css/style.css" rel="stylesheet">
<link href="<?= base_url()?>/assets/css/owl.theme.green.min.css" rel="stylesheet">
<link href="<?= base_url()?>/assets/css/extra.css" rel="stylesheet">
<link href="<?= base_url()?>/assets/css/font-awesome.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Maven+Pro&display=swap" rel="stylesheet">
<link href="<?= base_url()?>/assets/owl/owl.carousel.min.css" rel="stylesheet">
<link href="<?= base_url()?>/assets/owl/owl.theme.default.min.css" rel="stylesheet">


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
<!--header start end--> 

<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h1>Register</h1>
  </div>
</div>
<!--inner heading end--> 

<!--login start-->
<div class="inner-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-2"></div>
      <div class="col-md-6 col-sm-8">
        <div class="login">
          <div class="contctxt">Please complete all fields.</div>
          <div class="formint conForm">
            <form action="<?=base_url('index.php/College_controller_extra/collegeregistration')?>" method="post"  enctype="multipart/form-data">
              <div class="col-md-6 input-wrap">
                <input type="text" required="" name="college_name" placeholder="Enter College Name" class="form-control">
              </div>
              <div class="col-md-6 input-wrap">
                <input type="file" required="" name="image" placeholder="Enter College Email" class="form-control">
              </div>
              <div class="col-md-6 input-wrap">
                <input type="email" required="" name="college_email" placeholder="Enter College Email" class="form-control">
              </div>
              <div class="col-md-6 input-wrap">
                <input type="password" required="" name="password" placeholder="Enter Your Password" class="form-control">
              </div>
              <div class="col-md-6 input-wrap">
                <input type="password" required="" name="confirm_password" placeholder="Confirm Your Password " class="form-control">
              </div>
              <!-- <div class="input-wrap">
                <input type="text" name="dob" placeholder="Enter Your DOB" required="" class="form-control" id="basicDate" data-input>
              </div> -->
              <div class="col-md-6 input-wrap">
                <input pattern="[0-9]{1}[0-9]{9}" type="text" name="phone" id="txtPhoneNo" onkeypress="return isNumber(event)" placeholder="Enter Your Phone Number" class="form-control" maxlength="10" type="text">
              </div>
               <div class="col-md-12 input-wrap">
                <textarea required="" name="address" placeholder="Enter Your Address " class="form-control"></textarea>
              </div>
              <div class="col-md-6 input-wrap ">
                <select name="state" required="" class="form-control cities">
                  <option value="">Choose State</option>
                 <?php 
                  foreach ($cities as $state) {
                 ?>
                   <option><?= $state->city_state ?></option>
                 <?php 
                     }
                 ?>
                </select>
              </div>
              <div class="col-md-6 input-wrap ">
                <select name="city" required="" class="form-control postcities">
                  
                </select>


              </div>
             <!--  <div class="input-wrap">
                <select name="preferred_year" required="" class="form-control">
                  <option value="">Preferred Year of Admission </option>
                  <option>2020-2021 </option>
                  <option>2021-2022 </option>
                  <option>2022-2023</option>

                </select>
              </div> -->
              <!-- <div class="input-wrap">
                <select name="course" required="" class="form-control">
                  <option value="">Select A Course   </option>
                  <option>B-tech </option>
                  <option>MCA </option>
                  <option>BSC </option>
                  <option>BCA </option>
                </select>
              </div> -->
              
              <div class="sub-btn">

                <input type="submit" class="sbutn" value="Register">
                <div class="newuser text-right"><i class="fa fa-user" aria-hidden="true"></i>  <a href="<?= base_url('index.php/College_controller_extra/login');?>" >Login Here</a></div>
              </div>
             <!--  <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> New User? <a href="#.">Register Here</a></div> -->
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-2"></div>
    </div>
  </div>
</div>
<!--login end--> 

<!--footer start-->

<?php include('footer.php');?>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>

    $(document).ready(function(){
        
    });
$("#basicDate").flatpickr({
    dateFormat: "d-m-Y",
    maxDate: "30-12-2006"
});

</script>
  <script type="text/javascript">

        function isNumber(evt) {
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    // alert("Please enter only Numbers.");
    return false;
  }

  return true;
}
    function ValidateNo() {
  var phoneNo = document.getElementById('txtPhoneNo');

  if (phoneNo.value == "" || phoneNo.value == null) {
    alert("Please enter your Mobile No.");
    return false;
  }
  if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
    alert("Mobile No. is not valid, Please Enter 10 Digit Mobile No.");
    return false;
  }

  alert("Success ");
  return true;
}
      </script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<script>

  $(document).ready(function(){
 
  $('.cities').change(function(){
   var cities= $('.cities').val();

       $.ajax({
        url: "<?= base_url("index.php/College_controller_extra/fetchcities")?>",
        type: "POST",
         data: ({ title:cities }),
        success: function (response) {

             $(".postcities").html(response);
           /*  alert(response);*/
        },
        error: function(jqXHR, textStatus, errorThrown) {
           alert(errorThrown);
        }
    });
  });

   });
</script>

 <!-- <script>
                    <?php
                    
                   
                        if( $_SESSION['submit']=='on')
                        {
                    ?>
               swal({
  title: "",
  text: "Waiting For Approval",
  icon: "success",
  button: "ok",
});
                <?php
                
                    }

                    unset($_SESSION['submit']);
                ?>
            </script>

             -->
             <script>
 <?php
     if($this->session->flashdata('item'))
      { 
        ?> 
swal({
  title:"",
  text:"Email Aready Exists",
  icon:"error",
  button:"ok",
   dangerMode: true,
});
       
<?php } ?>
</script>
<script>
 <?php
     if($this->session->flashdata('item1'))
      { 
        ?> 
swal({
  title:"",
  text:"Password And Confirm Password not Matche",
  icon:"error",
  button:"ok",
   dangerMode: true,
});
       
<?php } ?>
</script>

<script>
 <?php
     if($this->session->flashdata('item2'))
      { 
        ?> 
swal({
  title:"Registration Successful",
  text:"Waiting For Approval",
  icon:"success",
  button:"ok",

});
       
<?php } ?>
</script>

