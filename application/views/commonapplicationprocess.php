
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
  
 <center> <h2> Student Details </h2> </center>


    	<div class="form-group">
    		<form action="<?= base_url('index.php/User/commonapplication')?>" method="post">
    			<div class="row">
    				<div class="col-md-4">
    					 <label>Full Name</label>
    					<input type="text" name="name" class="form-control" placeholder="Enter Your Full Name......." required>
    				</div>
    				<div class="col-md-4">
    					 <label>Phone Number</label>
    					<input type="text" name="phone" class="form-control" pattern="[789][0-9]{9}"  placeholder="Enter Your Phone Number........" maxlength="10" minlength="10" required>
    				</div>
    				<div class="col-md-4">
    					 <label>Email Id</label>
    					<input type="email" name="email" placeholder="Enter Your Email Id..........." class="form-control" required>
    				</div>


    				<div class="col-md-4" style="margin-top: 1em;">
    					 <label>10th</label>
    					<input type="text" name="tenth" class="form-control" placeholder="Enter 10th % *........." required>
    				</div>
    				<div class="col-md-4" style="margin-top: 1em;">
    					 <label>12th</label>
    					<input type="text" name="twelfth" class="form-control" placeholder="Enter 12th % *......." required>
    				</div>
                    <div class="col-md-4" style="margin-top: 1em;">
                         <label>Entrance Exam</label>
                        <input type="text" name="entrance_exam" placeholder="Enter Entrance Exam.........." class="form-control" required>
                    </div>
    				 
                     <div class="clearfix"> </div>
                    
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

                    <div class="clearfix"></div>
                    
                    <div class="col-md-4"  style="margin-top: 1em;">
    					<label>Preferred state</label>
    					<select class="form-control selectstate2" name="preferred_state" required>
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
    					<label>Preferred city</label>
    					<select name="preferred_city" class="form-control postcities2" required>
                  <option value="">Select City </option>
              
                </select>
    				</div>

    				<div class="col-md-4"></div>

    				<div class="clearfix"> </div>

<!-- 
    				   <div class="col-md-4"  style="margin-top: 1em;">
    					<label>Select College</label>
    					<select class="form-control">
    						<option value="">Choose State....</option>
    	


    					</select>
    				</div>
 -->
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
<?php if($this->session->flashdata('commonapplication_alt')){?> swal("Applied Successfully", "", "success");<?php }?>
</script>

