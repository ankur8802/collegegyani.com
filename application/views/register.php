<?php include('nav.php');?>
<!--header start end--> 
<link rel="stylesheet" href="<?= base_url()?>assets/css/flatpickr.min.css">

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
            <form action="<?=base_url('index.php/User/userregistration')?>" method="post">
              <div class="input-wrap">
                <input type="text" required="" name="name" placeholder="Enter Your Name" class="form-control">
              </div>
              <div class="input-wrap">
                <input type="email" required="" name="email" placeholder="Enter Your Email" class="form-control">
              </div>
              <div class="input-wrap">
                <input type="password" required="" name="password" placeholder="Enter Your Password" class="form-control">
              </div>
              <div class="input-wrap">
                <input type="password" required="" name="confirm_password" placeholder="Confirm Your Password " class="form-control">
              </div>
              <div class="input-wrap">
                <input type="text" name="dob" placeholder="Enter Your DOB" required="" class="form-control " id="dob-reg" data-input>
              </div>
              <div class="input-wrap">
                <input pattern="[6-9]{1}[0-9]{9}" type="text" required="" name="phone" placeholder="Enter Your Phone Number" class="form-control" maxlength="10" type="text">
              </div>
              <div class="input-wrap">
                <select name="state" required="" class="form-control selectstate">
                  <option value="">Select State </option>
                  <?php 
                    foreach ($cities as $citie) {
                  ?>
                  <option><?= $citie->city_state ?></option>
                  <?php
                }
                ?>
                </select> 
              </div>
              <div class="input-wrap">
                <select name="city" required="" class="form-control postcities">
                  <option value="">Select City </option>
              
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

              <div class="input-wrap">
                <input type="text" name="preferred_year" pattern="[0-9/-]+" placeholder="Batch Year of Admission Like 2015-2018" required="" class="form-control " data-input>
              </div>

             <!--  <div class="input-wrap">
                <select name="course" required="" class="form-control">
                 <?php 
                    foreach ($cities as $citie) {
                  ?>
                  <option><?= $citie->city_state ?></option>
                  <?php
                }
                ?>
              </div> -->
              
              <div class="sub-btn">
                <input type="submit" class="sbutn" value="Register">
              </div>
             <!--  <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> New User? <a href="#.">Register Here</a></div> -->
            </form>
            <div class="newuser"> <a href="<?= base_url('index.php/User/login');?>">Login</a></div>
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
<script src="<?= base_url()?>assets/js/flatpickr.js"></script>

<script>

$("#dob-reg").flatpickr({
    dateFormat: "d-m-Y",
    maxDate: "30-12-2006"
});

</script>


      
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <script>
   <?php
     if($this->session->flashdata('item'))
      { 
        ?> 
swal("Email Already Exists", "", "error");
       
<?php 
}
 ?>
</script>

     <script>
   <?php
     if($this->session->flashdata('item1'))
      { 
        ?> 
swal("Your password and confirmation password do not match ", "", "error");
       
<?php 
}
 ?>
</script>



