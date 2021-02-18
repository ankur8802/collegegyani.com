
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
    <style type="text/css">
      .panel1
      {
        /*display: inline-block;*/
    /*width: 140px;*/
    border: 1px solid #fff;
    padding: 15px;
    height: 80px;
   /* overflow: hidden;*/
    border-right: 0;
    cursor: pointer;
    color: #fff;
    font-size: 14px;
    font-family: roboto,sans-serif;
    line-height: 1.6em;
    letter-spacing: .6px;
      }
    </style>
    <link rel="stylesheet" href="<?= base_url()?>assets/css/flatpickr.min.css">

<!--header start end--> 

<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h1>My Profile</h1>
  </div>
</div>
<!--inner heading end--> 

<!--listing start-->
<div class="inner-wrap listing">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 col-sm-4" style="position: sticky;top: 0;">
        <div class="leftSidebar">
         
          <div class="sidebarpad">
           
              <h4  style="text-align:center;font-size:100px;  "><i class="fa fa-user" aria-hidden="true"></i></h4>
              <!-- <div class="input-wrap">
                <input type="text" name="keyword" placeholder="Search Keyword" class="form-control">
              </div> -->
              <hr style="background-color:blue!important;">
             <h4  style="font-size:24px;"><?= $data->name?></h4>
            
              <h4 style="margin-top:20px!important;"><?= $data->email?></h4>
               <h4 ><i class="fa fa-university" aria-hidden="true" style="margin-top:10px!important; "></i><span style="margin-left:10px!important; ">Applied colleges</span></h4>
               <h4 ><a href="<?= base_url('index.php/User/userpanel')?>"><i class="fa fa-user-circle-o" aria-hidden="true" style="margin-top:10px!important; " ></i><span style="margin-left:10px!important; ">Profile</span></a></h4>
                <h4 ><a href="<?= base_url('index.php/User/userchangepassword');?>"><i class="fa fa-key" aria-hidden="true" style="margin-top:10px!important; "></i><span style="margin-left:10px!important; ">Change Password</span></a></h4>
                <h4 ><a href="<?= base_url('index.php/User/logout')?>"><i class="fa fa-sign-out" aria-hidden="true" style="margin-top:10px!important; "></i><span style="margin-left:10px!important; ">Logout</span></a></h4>

      
          </div>
        </div>
      </div>
      <div class="col-md-9 col-sm-8">

        <ul class="listService"  style="background-color:#f3f3f3;padding:50px; ">
          <li>
           
            <div class="">
              <div class="row">
                <!-- <div class="col-md-3 col-sm-3"> -->
                 <!--  <div class="listImg"><img src="<?= base_url()?>/assets/images/aiims.jpg" alt=""></div> -->
                <!-- </div> -->
                <div class="col-md-12 col-sm-12">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      <h3><a href="#">Helps us know you better</a></h3>
                    </div>
                   <!--  <div class="col-md-4 col-sm-4 col-xs-4"> -->
                     <!--  <div class="dollar"><i class="far fa-bookmark"></i></div> -->
                   <!--  </div> -->
                  </div>
                  <div class="row">
                  <form  action="<?= base_url('index.php/User/updateprofile')?>" method="post">
                 
                <div class="col-md-6 col-sm-12 col-xs-12" >
                 <label>Name</label>
               
               
                <input type="text" name="name" value="<?= $data->name?>" class="form-control">
               </div>
                  
               <div class="col-md-6 col-sm-12 col-xs-12" >
                 <label>Email</label>
               
               
                <input type="text" class="form-control" value="<?= $data->email?>" readonly="">
               </div>
               
               <div class="col-md-6 col-sm-12 col-xs-12" >
                 <label>Phone No.</label>
               
               
                <input pattern="[6-9]{1}[0-9]{9}" class="form-control" name="phone" value="<?php echo $data->phone;?>"  required="" placeholder="Enter Your Phone Number" maxlength="10" type="text">
               
                </div>
               <div class="col-md-6 col-sm-12 col-xs-12" >
                 <label>Gender</label>
              
               
                <select name="gender" required=""  class="form-control">
                  <option value="">Please Select</option>
                                                        <option  <?php
                                                        if($data->gender=='Male')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>>Male</option>
                                                        <option
                                                        <?php
                                                        if($data->gender=='Female')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>
                                                        >Female</option>
                                                    </select>
               </div>
                
               <div class="col-md-6 col-sm-12 col-xs-12" >
                 <label>Date of birth</label>
               
               
                <input type="text" name="dob" class="form-control" value="<?= $data->dob?>" id="dob-reg"  data-input>

               </div>
                

                
               <div class="col-md-6 col-sm-12 col-xs-12" >
                 <label>City</label>
               
                 
                  <input type="text" name="city" class="form-control" value="<?= $data->city?>"> 
               </div>
                
               <div class="col-md-6 col-sm-12 col-xs-12" >
                 <label>Address</label>
               
               
                <input type="text" required="" name="address" class="form-control" value="<?= $data->address?>" >
               </div>
                
               <div class="col-md-6 col-sm-12 col-xs-12" >
                 <label>Pincode</label>
               
               
                <input type="text" required="" name="pincode" class="form-control" value="<?= $data->pincode?>">
              
                </div>
               <div class="col-md-12 col-sm-12 col-xs-12" >
                 <label>A Brief About You</label>
               
               
               <textarea type="text" required="" name="about_you" class="form-control" rows="50"><?= $data->about_you?> </textarea> 
               </div>
                <div class="row" >
                  <div class="col-md-12">
                  <center><h3 style="margin-top:30px!important; "><a href="#" > About Your Qualification</a></h3></center>
                </div>
              </div>

              <div class="col-md-5 col-sm-12 col-xs-12" >
                 <label>10 Passing Year</label>
               
               
                <input type="text" required="" name="ten_year" class="form-control" value="<?= $data->ten_year?>" >
               </div>
               <div class="col-md-5 col-sm-12 col-xs-12" >
                 <label>Enter Marks</label>
               
               
                <input type="text" required="" name="ten_marks" class="form-control" value="<?= $data->ten_marks?>" >
               </div>
               <div class="col-md-2 col-sm-12 col-xs-12" >
                 <label>Grade</label>
              
               
                <select name="ten_grade" required=""  class="form-control">
                  <option value="">Please Select</option>
                                                        <option  <?php
                                                        if($data->ten_grade=='Grade')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>>Grade</option>
                                                        <option
                                                        <?php
                                                        if($data->ten_grade=='CGPA')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>
                                                        >CGPA</option>
                                                    </select>
               </div>
                <div class="col-md-5 col-sm-12 col-xs-12" >
                 <label>12 Passing Year</label>
               
               
                <input type="text" required="" name="tw_year" class="form-control" value="<?= $data->tw_year?>" >
               </div>
               <div class="col-md-5 col-sm-12 col-xs-12" >
                 <label>Enter Marks</label>
               
               
                <input type="text" required="" name="tw_marks" class="form-control" value="<?= $data->tw_marks?>" >
               </div>
               <div class="col-md-2 col-sm-12 col-xs-12" >
                 <label>Grade</label>
              
               
                <select name="tw_grade" required=""  class="form-control">
                  <option value="">Please Select</option>
                                                        <option  <?php
                                                        if($data->tw_grade=='Grade')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>>Grade</option>
                                                        <option
                                                        <?php
                                                        if($data->tw_grade=='CGPA')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>
                                                        >CGPA</option>
                                                    </select>
               </div>
               <div class="col-md-5 col-sm-12 col-xs-12" >
                 <label>Graduation Passing Year</label>
               
               
                <input type="text" required="" name="grad_year" class="form-control" value="<?= $data->grad_year?>" >
               </div>
               <div class="col-md-5 col-sm-12 col-xs-12" >
                 <label>Grad Marks</label>
               
               
                <input type="text" required="" name="grad_marks" class="form-control" value="<?= $data->grad_marks?>" >
               </div>
               <div class="col-md-2 col-sm-12 col-xs-12" >
                 <label>Grade</label>
              
               
                <select name="grad_grade" required=""  class="form-control">
                  <option value="">Please Select</option>
                                                        <option  <?php
                                                        if($data->grad_grade=='Grade')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>>Grade</option>
                                                        <option
                                                        <?php
                                                        if($data->grad_grade=='CGPA')
                                                            {
                                                                echo "selected";
                                                            }
                                                        ?>
                                                        >CGPA</option>
                                                    </select>
               </div>
               <div class="col-md-12 col-sm-12 col-xs-12" >
                 <label>A Brief About Your Education</label>
               
               
               <textarea  required="" name="about_youreducation" class="form-control"  ><?= $data->about_youreducation?> </textarea> 
               </div>

                <div class="row" >
                  <div class="col-md-12">
                  <center><h3 style="margin-top:30px!important; "><a href="#" > Professional Experience</a></h3></center>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12" >
                 <label>Company</label>
               
               
                <input type="text" name="company_name" class="form-control" value="<?=$data->company_name?>">
               </div>
                <div class="col-md-6 col-sm-12 col-xs-12" >
                 <label>Work Experience</label>
               
               
                <select required="" name="experience" class="form-control" >
                  <option value="">Select Year</option>

                                            <?php

                                                for($i=0;$i<31;$i++)
                                                {
                                            ?>
                                                        <option 
                                                        <?php 
                                                                if($data->experience=="$i Year")
                                                                    echo "selected";
                                                        ?>
                                                         value="<?=$i?> Year"><?=$i ?> Year</option>
                                            <?php
                                                }
                                            ?>
</select>
               </div>
               <div class="col-md-6 col-sm-12 col-xs-12" >
                 <label>Specialization</label>
               
               
                <input type="text" name="specialization" class="form-control" value="<?=$data->specialization?>">
               </div>
               <div class="col-md-12 col-sm-12 col-xs-12" >
                 <center> <button class="btn btn-primary" style="margin-top:20px;background: #008543;color:#fff;width:80px;   " >Save</button></center>
               </div>
                  </form>
                   </div>
                
                </div>
              </div>
              </div>
              
          </li>
        </ul>
        
      </div>
    </div>
  </div>
</div>
<!--listing end-->






<?php include('footer.php');?>
<script src="<?= base_url()?>assets/js/flatpickr.js"></script>

<script type="text/javascript">
  
  $("#dob-reg").flatpickr({
    dateFormat: "d-m-Y",
    maxDate: "30-12-2006"
   });
 

</script>



      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script>
 <?php
     if($this->session->flashdata('item5'))
      { 
        ?> 
swal({
  title:"",
  text:"Profile updated successfully",
  icon:"success",
  button:"ok",

});
       
<?php } ?>
</script>