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
    
     <title><?= $examdata->title;?></title>

<div class="container" style="margin-top:54px;">
	<div class="row">
		<div class="col-md-8">
<div class="news">
	<div class="news-title">
		<h3 class="color-orange text-center"><?= $examdata->title;?></h3>
	</div>
  <div class=""> 
    <img src="<?=base_url()?>admin/<?= $examdata->image?>" alt="Exam Image">
  </div>
	<div class="news-image">
		
		<div class="row">
			 <div class="col-md-6">
<!-- 			 			<img src="<?= base_url()?>/upload/<?= $examdata->image;?>" alt="" width="100%">
 -->			 </div>
			 <div class="col-md-12 text-left">
			 	<p class="justify"> <?= $examdata->short_desc;?> </p>
			 </div>
			   <div class="col-md-2"></div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<p class="justify">	<?= $examdata->long_desc;?></p>
			</div>
		</div>
	</div>
</div>
</div>
   
    <div class="col-md-4">
    	
    	<div class="inner-sec-col-md-3 br-4 pd-0 mg-10 mg-t-25">
      

      <!--  <button class="fz-18 pd-10 bg-orange color-white no-border w-100 br-4" value="<?=$data->id?>" data-toggle="modal" data-target="#apply-now-modal">APPLY NOW<i class="fas fa-envelope-open-text fz-18 pd-5"></i></button>
  -->
      <button class="fz-18 pd-10 bg-orange color-white no-border w-100 br-4" value="" data-toggle="modal" data-target="#newsmodal">APPLY NOW<i class="fas fa-envelope-open-text fz-18 pd-5"></i></button>

       <button class="fz-18 pd-10 bg-orange color-white no-border w-100 br-4" value="" data-toggle="modal" data-target="#downloadresult" style="margin-top:20px;">DOWNLOAD RESULT<i class="fas fa-download fz-18 pd-5"></i></button>  

              </form>  

        


    
    <!--     <div class="notification mg-t-25 br-4" style="border:1px solid #008543;">
          <div class="notification-head bg-orange br-4 pd-10">
          <p class="color-white fz-17 mg-0">NOTIFICATION<span><i style="float: right;" class="far fa-bell pd-5 fz-18"></i></span></p>
          </div>
          <div class="notification-text pd-5 br-4">
            <h5 class="color-orange justify mg-0">NEET Replaces AIIMS, JIPMER</h5>
            <p class="pd-5 justify mg-0">From 2020, AIIMS & JIPMER will use NEET Score for MBBS Admis...</p>
            <p class="text-right mg-0"><span class="pd-5"><a href="#">Read More</a></span></p>
          </div>
        </div> -->
     
      </div>

    </div>

</div>
</div>

<a href="<?= $examdata->link;?>" target="_blank" class="pagelink" id="pagelink" style="display:none;">..</a>


<!-- Modal -->
<div class="modal fade" id="newsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top:5%;">
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
     <form  action="<?= base_url("index.php/User/examapplication/$examdata->id/$examdata->title")?>" method="post"  >
      <?php   if($this->session->userdata('email')){ 
                                        $email=$this->session->userdata('email');
                                 $row=$this->db->query("select * from user_registration where email='$email'");
                                       $userdata=$row->row();
                                         ?>
     <div class="row">
   
       <div class="col-md-4">
        
        <label class="color-gray mg-0">FuLL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="name" value="<?=$userdata->name?>">
         <input type="hidden" class="" name="examid" value="<?= $examdata->id;?>">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">EMAIL ID</label>
         <input type="text" value="<?php echo $email ; ?>" class="form-control color-orange modal-form" name="email">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">MOBILE NO.</label>
          <input pattern="[6-9]{1}[0-9]{9}" type="text" required="" name="contact" id="txtPhoneNo" value="<?=$userdata->phone?>" onkeypress="return isNumber(event)" placeholder="Enter Your Phone Number" class=" form-control color-orange modal-form" maxlength="10" type="text">
       </div>
     </div>  
<?php }else{ ?>

    <div class="row">

       
       <div class="col-md-4">
        <label class="color-gray mg-0">FULL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="name" required="">
         <input type="hidden" class="" name="examid" value="<?= $examdata->id;?>">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">EMAIL ID</label>
         <input type="text" class="form-control color-orange modal-form" name="email" required>
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">MOBILE NO.</label>
          <input pattern="[6-9]{1}[0-9]{9}" type="text" required="" name="contact" id="txtPhoneNo" onkeypress="return isNumber(event)" placeholder="Enter Your Phone Number" class=" form-control color-orange modal-form" maxlength="10" type="text">
       </div>
     </div>  
<?php } ?>

      <div class="row mg-t-25">
        <div class="col-md-4">
          <label class="color-gray mg-0">Exam</label>
         <input type="text" class="form-control color-orange modal-form" name="exam" value="<?= $examdata->title;?>" readonly>
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR STATE</label>
          <select class="form-control color-orange modal-form-select selectstate" required="" name="state">
             <option value="">Select State </option>
                  <?php 
                    foreach ($cities as $cities) {
                  ?>
                  <option><?= $cities->city_state; ?></option>
                  <?php
                }
                ?>
         </select> 
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR CITY</label>
        <select class="form-control color-orange modal-form-select postcities" required="" name="city">
           <option value="">Select City </option>
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


<!-- Modal -->
<div class="modal fade" id="downloadresult" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top:5%;">
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
     <form  action="<?= base_url("index.php/User/examapplicationdownload/$examdata->id/$examdata->title")?>" method="post"  >
      <?php   if($this->session->userdata('email')){ 
                                        $email=$this->session->userdata('email');
                                 $row=$this->db->query("select * from user_registration where email='$email'");
                                       $userdata=$row->row();
                                         ?>
     <div class="row">
   
       <div class="col-md-4">
        
        <label class="color-gray mg-0">FuLL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="name" value="<?=$userdata->name?>">
         <input type="hidden" class="" name="examid" value="<?= $examdata->id;?>">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">EMAIL ID</label>
         <input type="text" value="<?php echo $email ; ?>" class="form-control color-orange modal-form" name="email">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">MOBILE NO.</label>
          <input pattern="[6-9]{1}[0-9]{9}" type="text" required="" name="contact" id="txtPhoneNo" value="<?=$userdata->phone?>" onkeypress="return isNumber(event)" placeholder="Enter Your Phone Number" class=" form-control color-orange modal-form" maxlength="10" type="text">
       </div>
     </div>  
<?php }else{ ?>

    <div class="row">

       
       <div class="col-md-4">
        <label class="color-gray mg-0">FULL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="name" required="">
         <input type="hidden" class="" name="examid" value="<?= $examdata->id;?>">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">EMAIL ID</label>
         <input type="text" class="form-control color-orange modal-form" name="email" required>
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">MOBILE NO.</label>
          <input pattern="[6-9]{1}[0-9]{9}" type="text" required="" name="contact" id="txtPhoneNo" onkeypress="return isNumber(event)" placeholder="Enter Your Phone Number" class=" form-control color-orange modal-form" maxlength="10" type="text">
       </div>
     </div>  
<?php } ?>

      <div class="row mg-t-25">
        <div class="col-md-4">
          <label class="color-gray mg-0">Exam</label>
         <input type="text" class="form-control color-orange modal-form" name="exam" value="<?= $examdata->title;?>" readonly>
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR STATE</label>
          <select class="form-control color-orange modal-form-select selectstate2" required="" name="state">
             <option value="">Select State </option>
                  <?php 
                    foreach ($cities2 as $cities2) {
                  ?>
                  <option><?= $cities2->city_state; ?></option>
                  <?php
                }
                ?>
         </select> 
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR CITY</label>
        <select class="form-control color-orange modal-form-select postcities2" required="" name="city">
           <option value="">Select City </option>
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


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<!-- <--------------------------------------auto open form---------------------------> 

<script>
   <?php
     if($this->session->flashdata('exam_application_alt'))
      { 
        ?> 
swal("Applied Successfully", "", "success");
       
<?php 
}
 ?>
</script>

<script>
   <?php
     if($this->session->flashdata('exam_application_alt_2'))
      { 
        ?> 
swal("Applied Successfully", "", "success");

  // $('.pagelink')[0].click();
  // $('.pagelink').trigger('click');
 // alert( $('.pagelink').html());

 // $('#pagelink')[0].click();
  // $('.pagelink').trigger('click',"click");
  $( ".pagelink" )[0].click();
       
<?php 
}
 ?>
</script>

<?php include('footer.php');?>



