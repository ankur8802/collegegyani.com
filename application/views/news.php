
<?php
    if ($this->session->userdata('email') )
    {
       include('usernav.php');
    }
    else
    {
        
        include('nav.php');
    }
    ?>

<!--header start end--> 

<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h1>News</h1>
  </div>
</div> 

<div class="inner-wrap listing" style="background-color:#f3f3f3;" >
  <div class="container-fluid">
  
      <div class="col-md-12">


        <div class="listService">
 

               <?php 
      foreach ($newsdata as $news )
       {
    ?>
    <div class="col-md-3 col-sm-4 col-6 text-center">
      <a href="<?= base_url("news/$news->id/".str_replace(" ","-", $news->title))?>">
      <div class="inner-popular">
        <img src="<?= base_url()?>/admin/<?= $news->image?>" alt="News Image" style="height:200px;">
         <h5 style="padding:5px;"> <!-- <?= $news->title?> -->
           <?php
                 $string = word_limiter($news->title,5);
                  echo $string;
           ?>
         </h5>
      </div>
      </a>
    </div>

    <?php
  }
  ?>
        

         </div>
  </div>
</div>
</div>


   <div class="row">
       <div class="col-md-12 text-center">

        <?= $this->pagination->create_links(); ?>  
       </div>
     </div>

<!--listing end-->

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php include('footer.php');?>
<!-- Modal -->
  <div class="modal fade" id="apply-now-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <center> <h5 class="modal-title color-orange fz-22 bold" id="exampleModalLabel">Enter Your Details</h5> </center>
        <center> <p class="color-gray">For more info you can simply log on to collegegyani.in</p> </center>
        
      </div>
      <div class="modal-body" style="padding: 3% 7%;">
     <form  action="<?=base_url('index.php/User/collegeapplynext')?>" method="post"  >
      <?php   if($this->session->userdata('email')){ 
                                        $email=$this->session->userdata('email');
                                 $row=$this->db->query("select * from user_registration where email='$email'");
                                       $userdata=$row->row();
                                         ?>
     <div class="row">
   
       <div class="col-md-4">
        
        <label class="color-gray mg-0">FLL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="user_name" value="<?=$userdata->name?>">
         <input type="hidden" class="clickdropid" name="college_id">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">EMAIL ID</label>
         <input type="text" value="<?php echo $email ; ?>" class="form-control color-orange modal-form" name="user_email">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">MOBILE NO.</label>
          <input pattern="[6-9]{1}[0-9]{9}" type="text" required="" name="user_contact" id="txtPhoneNo" value="<?=$userdata->phone?>" onkeypress="return isNumber(event)" placeholder="Enter Your Phone Number" class=" form-control color-orange modal-form" maxlength="10" type="text">
       </div>
     </div>  
<?php }else{ ?>

    <div class="row">

       
       <div class="col-md-4">
        <label class="color-gray mg-0">FLL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="user_name">
         <input type="hidden" class="clickdropid" name="college_id">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">EMAIL ID</label>
         <input type="text" class="form-control color-orange modal-form" name="user_email">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">MOBILE NO.</label>
          <input pattern="[6-9]{1}[0-9]{9}" type="text" required="" name="user_contact" id="txtPhoneNo" onkeypress="return isNumber(event)" placeholder="Enter Your Phone Number" class=" form-control color-orange modal-form" maxlength="10" type="text">
       </div>
     </div>  
<?php } ?>

      <div class="row mg-t-25">
       <div class="col-md-4">

        <label class="color-gray">CHOOSE PREFERRED COURSE</label>
         <select class="form-control color-orange modal-form-select" required="" name="user_course">
           <option>MBBS</option>
         </select>
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR CITY</label>
          <select class="form-control color-orange modal-form-select" required="" name="user_city">
           <option>NCR</option>
         </select> 
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR REGION</label>
        <select class="form-control color-orange modal-form-select" required="" name="user_region">
           <option>North</option>
         </select>
       </div>
     </div>   
  


  
      <div class="modal-footer">
        <center> <button type="SUBMIT" class="btn color-white bg-orange pd-15" style="width:30%;">SUBMIT</button> </center>
      </div>

         </form>
       </div>
     </div>
   </div>
 </div>




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



<script>
   <?php
     if($this->session->flashdata('college_apply_next_alt'))
      { 
        ?> 
swal("Applied Successfully", "", "success");
       
<?php 
}
 ?>
</script>

<!-- <--------------------------------------- main Courses & Fees section end--------------------------- -->