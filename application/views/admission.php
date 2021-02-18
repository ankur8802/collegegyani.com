
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




    <div class="container" style="padding:50px 0px;">
  
 <center> <h2> ADMISSION-2021 </h2> </center>


<div class="form-group">
 <form action="<?= base_url('User/admissioninsert')?>" method="post">
    <div class="row">
    
    <div class="col-md-4">
    	  <label> Name</label>
    		<input type="text" name="name" class="form-control" placeholder="Enter Your Name......." required>
    	</div>


    <div class="col-md-4">
        <label>Email Id</label>
        <input type="email" name="email" placeholder="Enter Your Email Id..........." class="form-control" required>
    </div>

    <div class="col-md-4">
     <label>Phone Number</label>
    <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone Number........" pattern="[789][0-9]{9}"  required maxlength="10" minlength="10">
     </div>

   


                    
	<div class="col-md-4"  style="margin-top: 1em;">
    	<label>State</label>
    <select class="form-control selectstate" name="state" required>
    
     <option value="">Choose State....</option>
       <?php 
         foreach ($cities as $citie)
       {
 
        ?>
     <option><?= $citie->city_state?></option>
        <?php
             }
         ?>
     </select>
    	</div>

    <div class="col-md-4"  style="margin-top: 1em;">
      <label>City</label>
       <select name="city" required="" class="form-control postcities" required>
    <option value="">Select City </option>
       </select>
    </div>


    				 <div class="col-md-4"  style="margin-top: 1em;">
    					<label>Select Course</label>
    					<select name="course" class="form-control" required>
    						<option value="">Choose Select Course....</option>
    	                  <?php
                           foreach ($course as $key) 
                           {
                          ?>
                           <option><?= $key->course_name;?></option>  
                    <?php 
                }
                ?>
                         
    					</select>
    				</div>


                   <div class="clearfix"> </div>
                   <div class="col-md-4"></div>
    				<div class="col-md-4" style="margin-top: 2.5em;">
    					<input type="submit" name="" value="Submit" class="form-control btn-primary" required>
    				</div>

    				






    			</div>	
    			
    		</form>
    	</div>
    </div>


<?php include('footer.php')?>





<script>
<?php if($this->session->flashdata('admissioninsert')){?> swal("Applied Successfully", "", "success");<?php }?>
</script>

