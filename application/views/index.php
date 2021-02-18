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
    <style>
        /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance:textfield;
}


.main-application-section a
{ 
  text-decoration: none;
  color:#000;
}
.inner-application
{
    transition: 1s;
}
.inner-application:hover
{
  background: #fff;
  border-radius: 4px;
}
.topcourses a
{
  text-decoration: none;
  color: inherit;
}
a
{
  text-decoration: none!important;
  color: inherit;
}


@media only screen and (min-width: 900px) {
  
  .banner-slider .item 
{
  max-height: 550px;
}
}

.enquiry-button 
{
  position: fixed;
  right:-30px;
  top: 40%;
  z-index:999;
  transform: rotate(90deg);
  background:#007075;
  color:#fff;
  font-weight:bold;
}
    </style>

<section>

<div class="container">

<button class="enquiry-button btn" data-toggle="modal" data-target="#enquiry" >Enquiry Now</button>

<div class="row">


  <div class="modal fade modalmedia" id="enquiry" role="dialog" style="margin-top:54px;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="col-md-3"></div>
      <div class="col-md-6">
      <div class="modal-content">
        <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h3 class="text-center" style="color:#ff7a02;">Enquiry Now</h3>
           <p class="text-center">Plan your career with us. Stay Connected with College Gyani & Make a Difference to Your Education!</p>
       
         
        </div>
        <div class="modal-body" style="padding:10px 50px 10px 50px;">
         <form class="" action="<?= base_url('User/enquiry')?>" method="post">
              
              <div class="form-group">
                <div class="enquiry">
                     <label>Name</label>
                     <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
                </div>

                <div class="enquiry">
                     <label>Email</label>
                     <input type="text" name="email" class="form-control" placeholder="Enter Your Email" required>
                </div>

                <div class="enquiry">
                     <label>Phone</label>
                     <input type="text" pattern="[6-9]{1}[0-9]{9}" maxlength="10" minlength="10" name="phone" class="form-control" placeholder="Enter Your Phone" required>
                </div>

                <div class="enquiry">
                     <label>Course</label>
                     <input type="text" name="course" class="form-control" placeholder="Enter Course Name" required>
                </div>

                <div class="enquiry">
                     <label>Write a Query </label>
                     <textarea name="query" class="form-control" required></textarea>
                </div>
              </div>   
             
             <div class="button-en text-center">
                  <button type="submit" class="btn btn-primary btn-block">Submit</button>

                  <br>

                  <span>Already registered? </span><a href="<?= base_url('login')?>" style="color:#ff7a02;">Click Here to Login</a>
             </div>

        </form>
        </div>
      </div>
      </div>
      
    </div>
  </div>

  </div>


</div>
</section>


    <div class="owl-carousel banner-slider owl-theme">
      <?php 
      foreach ($banner as $key)
       {
      ?>
    <div class="item"> 
      <img src="<?= base_url()?>admin/<?= $key->image?>" alt="College Gyani Banner"> 
    </div>

    <?php
  }
  ?>
</div>

 <div class="slidetext" style="position: absolute;z-index: 1;top: 200px;text-align: center;width: 100%">
      <h1>SEARCH OVER 20020 COLLEGES IN INDIA</h1>
   
      <form action="<?= base_url('find-college')?>" method="post">
        <div class="row form-wrap">
          <div class="col-md-3">
            <div class="input-group"> 
              <input type="text" name="keyword" placeholder="College,Course etc..." class="form-control">
            </div>
          </div>
          <div class="col-md-3">
            <div class="input-group">
              <select name="location" class="dropdown">
                <option value="">Location... </option>
                <?php 
                foreach ($cities as $cities) 
                 {
                ?>
                <option><?= $cities->city_state ?></option>
                <?php 
              }
              ?>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="input-group">
              <select name="category" class="dropdown">
                <option value="">Category... </option>
                <?php 
                foreach ($category as $category)
                 {
                ?>
                <option><?= $category->college_type;?></option>
                <?php 
              }
              ?>
              </select>
            </div>
          </div>
          <div class="col-md-3 col-sm-12 searchbtnresponsive">
            <div class="input-btn">
              <input type="submit" class="sbutn" value="Search">
            </div>
          </div>
        </div>
      </form>
    </div>



<div class="feature-wrap">
  <div class="container-fluid">
    <div class="heading-title">Top Colleges in India</div>
    <div class="mobile-version">
        <div class="owl-carousel first-owl owl-theme">

          <?php

      foreach($data as $res) 
      {

        ?>
    <div class="item">
   <ul class="row feature-service pd-15">
 
   
      <li class="col-md-12 col-sm-12 col-xs-12 pd-0">
        
        <div class="inner-col-md-3 b1e6 br-4 mg-10">
        <div class="feature-image" style='height:160px;background:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url("<?= base_url('upload/'. $res->image)?>");background-size:cover;'>

         
         
         <div class="title">
          <div class="flex" style="display: flex;">

            <div class="flex-con" style="flex-basis:10%;margin: 5px;">
              <img src="<?= base_url()?>/upload/<?= $res->logo?>" alt="College logo">
            </div>
            <div class="flex-con" style="flex-basis:90%;">
                   <a href="<?= base_url("college/".$res->id."/".str_replace(' ','-',$res->college_name))?>">
                 <h3 style="display: inline;" class="fz-14 mg-5"><?= $res->college_name?>  (<?= $res->college_name_short?>)</h3>
               </a>

        <p class="color-white mg-0">
          <i class="fa fa-map-marker" aria-hidden="true" style="margin: 5px;"></i><?= $res->city?>
        </p>

            </div>
            
        
          </div>
        </div>


        </div>
        

        <div class="" style="border-top: 1px solid #e6e6e6">
        
     


       
        </div>

          <?php 
         $college_email_store=$res->college_email;
         $fetchcourserow=$this->db->select()
                  ->from('course')
                  ->where('college_email',$college_email_store)
                  ->limit(1)
                  ->get();
                 $fetchcourserowdata= $fetchcourserow->row();
        ?>

        <div class="college-detail-info">
          <div class="row">
            <div class="col-md-6">
              <div class="inner-col-md-4" style="padding: 1em;border-right:1px solid #929292">
                 <p class=" color-orange">
                  <?php
                 if($fetchcourserowdata)
                 {
                  echo $fetchcourserowdata->course_duration;
                  echo " Years";
                 }

                 else
                 {
                   
                   echo "Not Avaliable";
                 }
                 
                  ?>
                    
                  </p>
                 <p class=" color-orange"> <span></span> </p>
              </div>
            </div>
            <div class="col-md-6">
               <div class="inner-col-md-4" style="padding: 1em;border-right:1px solid #929292">
              <p class="color-orange"> 
             
               <?php
                 if($fetchcourserowdata)
                 {
                  
                  echo  $fetchcourserowdata->course_name;
                 }
                 else
                 {
                   
                   echo "Not Avaliable";
                 }
                 
                  ?>
               </p>
            </div>
            </div>
          <!--   <div class="col-md-4">
               <div class="inner-col-md-4" style="padding: 1em;">
                  <p class=" color-orange"> <i class="far fa-star  color-orange"></i> 3.8/5</p>
               </div>
            </div> -->
          </div>
        </div>

        <div class="college-detail-info-btn">
          <div class="row">
 
          <div class="col-md-6" style="padding-right: 0;">

            <button type="submit" class="clickgetid btn-info no-border color-white w-100 pd-10 "  value="<?=$res->id?>"><i class="fa fa-file color-white" aria-hidden="true"></i>APPLY NOW</button>


            <button type="submit" class="btn-info no-border color-white w-100 pd-10 clickforsubmit" data-toggle="modal" data-target="#apply-now-modal" style="display: none;"><i class="fa fa-file color-white" aria-hidden="true"></i>APPLY NOW</button>
 

            <!--   -->

          </div>
          <div class="col-md-6" style="padding-left:0; ">
             
          <?php
                $college_email_brochure=$res->college_email;
                $fetchbrochuredata=$this->db->select()
                                            ->where('college_email',$college_email_brochure)
                                            ->from('brochure')
                                            ->get();
                                         $fetchbrochuredatarow= $fetchbrochuredata->row();   

           ?>
           <?php
            if($fetchbrochuredatarow)
            {
           ?>

        <a href="<?= base_url()?>collegepanel/upload/<?= $fetchbrochuredatarow->brochure_file;?>" download> <button type="submit" class=" btn-primary no-border color-white w-100" style="padding:9px;"><i class="fa fa-download color-white" aria-hidden="true"></i>BROCHURE</button></a>
          <?php
        } 
        else
        {
        ?>
         <button type="submit" class=" btn-primary no-border color-white w-100" style="padding:9px;"><i class="fa fa-download color-white" aria-hidden="true"></i>BROCHURE</button>
         <?php
       }
       ?>
          </div>
          </div>
        </div>



        </div> 
      </li>
   
        </ul>
    </div>
     <?php
    }
    ?>
 


  </div>


</div>

</div>
</div>
  
  <div class="container-fluid">

    <ul class="row feature-service desktop-version">
      <?php

      foreach($data as $res)
      {
 
        ?>
      <li class="col-md-3 col-sm-6 col-xs-12 pd-0">
        
        <div class="inner-col-md-3 b1e6 br-4 mg-10">
        <div class="feature-image" style="height:160px;background:linear-gradient( rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url('<?php echo base_url('upload/'. $res->image)?>');background-size:cover; ">

         
         
          <div class="title">

             <div class="flex" style="display: flex;">

            <div class="flex-con" style="flex-basis:10%;margin: 5px;">
              <img src="<?= base_url()?>/upload/<?= $res->logo?>" alt="College logo">
            </div>
            <div class="flex-con" style="flex-basis:90%;">
                   <a href="<?= base_url("college/".$res->id."/".str_replace(' ','-',$res->college_name))?>">
                 <h3 style="display: inline;" class="fz-14 mg-5"><?= $res->college_name?> (<?= $res->college_name_short?>)</h3>
               </a>

        <p class="color-white mg-0">
          <i class="fa fa-map-marker" aria-hidden="true" style="margin: 5px;"></i><?= $res->city?>
        </p>

            </div>
            
        
          </div>
        </div>

        </div>
        

        <div class="" style="border-top: 1px solid #e6e6e6">
       

        

       
        </div>

        <?php 
         $college_email_store=$res->college_email;
         $fetchcourserow=$this->db->select()
                  ->from('course')
                  ->where('college_email',$college_email_store)
                  ->limit(1)
                  ->get();
                 $fetchcourserowdata= $fetchcourserow->row();
        ?>

        <div class="college-detail-info">
          <div class="row">
            <div class="col-md-6" style="border-right:1px solid #929292">
              <div class="inner-col-md-4" style="padding: 1em;">
                 <p class=" color-orange">
                  <?php
                 if($fetchcourserowdata)
                 {
                    echo $fetchcourserowdata->course_duration;
                    echo " Years";
                 }
                 else
                 {
                   
                   echo "Not Avaliable";
                 }
                 
                  ?>
                    
                  </p>
                 <p class=" color-orange"> <span></span> </p>
              </div>
            </div>
            <div class="col-md-6">
               <div class="inner-col-md-4" style="padding: 1em;">
              <p class="color-orange"> 
             
               <?php
                 if($fetchcourserowdata)
                 {
                  
                  echo  $fetchcourserowdata->course_name;
                 }
                 else
                 {
                   
                   echo "Not Avaliable";
                 }
                 
                  ?>
               </p>
            </div>
            </div>

           <!--  <div class="col-md-4">
               <div class="inner-col-md-4" style="padding: 1em;">
                  <p class=" color-orange"> <i class="far fa-star  color-orange"></i> 3.8/5</p>
               </div>
            </div> -->
          </div>
        </div>

        <div class="college-detail-info-btn">
          <div class="row">

          <div class="col-md-6" style="padding-right: 0;">
            <button type="submit" class="clickgetid btn-info no-border color-white w-100 pd-10" value="<?=$res->id?>"><i class="fa fa-file color-white" aria-hidden="true"></i>APPLY NOW</button>

             <button type="submit" class="btn-info no-border color-white w-100 pd-10 clickforsubmit" data-toggle="modal" data-target="#apply-now-modal" style="display:none;"><i class="fa fa-file color-white" aria-hidden="true"></i>APPLY NOW</button>
          </div>
        
          <div class="col-md-6" style="padding-left:0; ">

          <?php
                $college_email_brochure=$res->college_email;
                $fetchbrochuredata=$this->db->select()
                                            ->where('college_email',$college_email_brochure)
                                            ->from('brochure')
                                            ->get();
                                         $fetchbrochuredatarow= $fetchbrochuredata->row();   

           ?>
           <?php
            if($fetchbrochuredatarow)
            {
           ?>

        <a href="<?= base_url()?>collegepanel/upload/<?= $fetchbrochuredatarow->brochure_file;?>" download> <button type="submit" class=" btn-primary no-border color-white w-100" style="padding:9px;"><i class="fa fa-download color-white" aria-hidden="true"></i>BROCHURE</button></a>
          <?php
        } 
        else
        {
        ?>
         <!-- <button type="submit" class=" btn-primary no-border color-white w-100" style="padding:9px;"><i class="fa fa-download color-white" aria-hidden="true"></i>BROCHURE</button>
 -->    
  <button type="submit" class="clickgetid btn-primary no-border color-white w-100 pd-10" value="<?=$res->id?>"><i class="fa fa-download color-white" aria-hidden="true"></i>BROCHURE</button>   
   <?php
       }
       ?>
              <button type="submit" class="btn-info no-border color-white w-100 pd-10 clickforsubmit" data-toggle="modal" data-target="#apply-now-modal" style="display:none;"><i class="fa fa-file color-white" aria-hidden="true"></i>APPLY NOW</button>
          </div>
          
          </div>
        </div>



        </div>
      </li>
      <?php
    }
    ?>
   
       

    
    </ul>
    </div>
    <div class="view-btn"><a href="<?= base_url('colleges')?>">View All Colleges</a></div>
  </div> 
</div>
<!--feature end--> 
<div class="main-application-section" style="background:#e9e9e9;padding-top: 1.5em;padding-bottom: 1.5em;">
  <div class="heading-title">Students Helpdesk</div>
 
<div class="container">
  <div class="application-section">
    <div class="row">
      <div class="col-md-4 text-center">
        <div class="inner-application" style="padding:1em;margin:1em;">
     
          <a href="<?= base_url('common-application-process')?>">
        <div class="img-sec"> 
         <img src="<?= base_url();?>/assets/images/resume.png" alt="Common Application Process" style="width:50px;height:50px;">
        </div>
        <div class="title-sec">
          <h4> Common Application Process </h4>
        </div>

           </a>

         </div>
      </div>
      
       
         <div class="col-md-4 text-center">
        <div class="inner-application" style="padding:1em;margin:1em;">
     
          <a  data-toggle="modal" data-target="#scholarship">
        <div class="img-sec"> 
          <img src="<?= base_url();?>/assets/images/book.png" alt="Scholarship" style="width:50px;height:50px;">
        </div>
        <div class="title-sec">
          <h4> Scholarship </h4>
        </div>

           </a>

         </div>
      </div>


       <div class="col-md-4 text-center">
        <div class="inner-application" style="padding:1em;margin:1em;">
     
          <a  data-toggle="modal" data-target="#educationloan">
        <div class="img-sec"> 
          <img src="<?= base_url();?>/assets/images/diagram.png" alt="Education Loan" style="width:50px;height:50px;">
        </div>
        <div class="title-sec">
          <h4> Education Loan </h4>
        </div>

           </a>

         </div>
      </div>

      <div class="col-md-4 text-center">
        <div class="inner-application" style="padding:1em;margin:1em;">
     
          <a data-toggle="modal" data-target="#Counselling">
        <div class="img-sec"> 
          <img src="<?= base_url();?>/assets/images/assigment.png" alt="Experts Counselling" style="width:50px;height:50px;">
        </div>
        <div class="title-sec">
          <h4> Experts Counselling</h4>
        </div>

           </a>

         </div>
      </div>

      <div class="col-md-4 text-center">
        <div class="inner-application" style="padding:1em;margin:1em;">
     
          <a data-toggle="modal" data-target="#referral">
        <div class="img-sec"> 
          <img src="<?= base_url();?>/assets/images/referral.png" alt="Student Referral" style="width:50px;height:50px;">
        </div>
        <div class="title-sec">
          <h4> Student Referral</h4>
        </div>

        
           </a>

         </div>
      </div>


      <div class="col-md-4 text-center">
        <div class="inner-application" style="padding:1em;margin:1em;">
     
          <a data-toggle="modal" data-target="#nirf">
        <div class="img-sec"> 
          <img src="<?= base_url();?>/assets/images/nirf.png" alt="NIRF Ranking" style="width:50px;height:50px;">
        </div>
        <div class="title-sec">
          <h4>NIRF Ranking</h4>
        </div>

       
           </a>

         </div>
      </div>

    </div>
  </div>
</div>

</div>



<!--Categories start-->
<div class="categories-wrap desktop-version" style="padding-bottom: 50px;">
  <div class="container">
    <div class="heading-title"><span>Categories</span></div>
    <div class="heading-text">Are you getting confused on choosing your career? Here is the list of top Colleges Category Wise</div>
    <ul class="row categories-service">
      <li class="col-md-2">
         <a href="<?= base_url('management-colleges-in-india')?>" style="text-decoration:none;color:inherit;">
        <div class="categorybox">
          <div class="categoryimg"><img src="<?= base_url()?>/assets/images/Management.png" alt="Categories"></div>
          <h4>Management</h4>
        </div>
      </a>
      </li>
      <li class="col-md-2">
        <a href="<?= base_url('engineering-colleges-in-india')?>" style="text-decoration:none;color:inherit;">
        <div class="categorybox">
          <div class="categoryimg"><img src="https://img.icons8.com/nolan/64/000000/engineering.png" alt="Categories"></div>
          <h4>Engineering</h4>
        </div>
      </a>
      </li>
      <li class="col-md-2">
        <a href="<?= base_url('medical-colleges-in-india')?>" style="text-decoration:none;color:inherit;">
        <div class="categorybox">
          <div class="categoryimg"><img src="https://img.icons8.com/dusk/64/000000/survival-bag.png" alt="Categories"></div>
          <h4>Medical</h4>
        </div>
        </a>
      </li>
      <li class="col-md-2">
        <div class="categorybox">
          <div class="categoryimg"><img src="https://img.icons8.com/dusk/64/000000/tractor.png" alt="Categories"></div>
          <h4>Agriculture</h4>
          
        </div>
      </li>
      <li class="col-md-2">
        <div class="categorybox">
          <div class="categoryimg"><img src="https://img.icons8.com/carbon-copy/100/000000/client-company.png" alt="Categories" style="width:64px;height:64px;"></div>
          <h4>Architecture</h4>
          
        </div>
      </li>
      <li class="col-md-2">
        <div class="categorybox">
          <div class="categoryimg"><img src="https://img.icons8.com/nolan/64/000000/drawing.png" alt="Categories"></div>
          <h4>Arts</h4>
          
        </div>
      </li>
  


      <li class="col-md-2">
       <a href="<?= base_url('commerce-colleges-in-india')?>" style="text-decoration:none;color:inherit;">
        <div class="categorybox">
          <div class="categoryimg"><img src="https://img.icons8.com/nolan/80/000000/e-commerce.png" alt="Categories" style="width: 64px;height: 64px;"></div>
          <h4>Commerce</h4>
        </div>
      </a>
      </li>

      <li class="col-md-2">
        <a href="<?= base_url('medical-colleges-in-india')?>" style="text-decoration:none;color:inherit;">
        <div class="categorybox">
          <div class="categoryimg"><img src="https://img.icons8.com/carbon-copy/100/000000/dental-crown.png" alt="Categories" style="width: 64px;height: 64px;"></div>
          <h4>Dental</h4>
        </div>
      </a>
      </li>


      <li class="col-md-2">
        <div class="categorybox">
          <div class="categoryimg"><img src="https://img.icons8.com/carbon-copy/100/000000/law.png" alt="Categories" style="width: 64px;height: 64px;"></div>
          <h4>Law</h4>
          
        </div>
      </li>
    
     

      
      <li class="col-md-2">
        <a href="<?= base_url('medical-colleges-in-india')?>" style="text-decoration:none;color:inherit;">
        <div class="categorybox">
          <div class="categoryimg"><img src="<?= base_url()?>assets/images/paramedic.png" alt="Categories"></div>
          <h4>Paramedical</h4>
        </div>
      </a>
      </li>

      <li class="col-md-2">
        <div class="categorybox">
          <div class="categoryimg"><img src="https://img.icons8.com/carbon-copy/64/000000/crowd.png" alt="Categories"></div>
          <h4 style="font-size:18px;">Mass Communications</h4>
        </div>
      </li>
      <li class="col-md-2">
        <a href="<?= base_url('management-colleges-in-india')?>" style="text-decoration:none;color:inherit;">
        <div class="categorybox">
          <div class="categoryimg"><img src="https://img.icons8.com/wired/100/000000/3-star-hotel.png" alt="Categories" style="width: 64px;height: 64px;"></div>
          <h4>Hotel Management</h4>
        </div>
      </a>
      </li>
    </ul>

        <div class="heading-title"><span>STUDY MBBS ABROAD </span></div>
<div class="heading-text text-justify">Career in the Medical Feild is a safest one for your future as it has huge opportunities to grow world wide. More than 10 lakhs people in India appear for NEET exam and all of them could not get the admission in the Govt Medical Colleges. For alll such aspirants MBBS in Abroad will be the best option to pursue their medical courses. Major destinations for indian medical students are russia, china, Bangladesh, poland Ukraine etc.</div>
<div class="col-md-3">
<a href="<?= base_url('mbbs-in-russia')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
    <img src="<?= base_url()?>/assets/images/abroad/russia.svg" alt="MBBS in Russia" style="width:50%">
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in Russia</h4>
  </div>
  </div>
  </a>

</div>


<div class="col-md-3">
  <a href="<?= base_url('mbbs-in-china')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
    <img src="<?= base_url()?>/assets/images/abroad/china.svg" alt="MBBS in China" style="width:50%">
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in China</h4>
  </div>
  </div>
  </a>
</div>

<div class="col-md-3">
  <a href="<?= base_url('mbbs-in-georgia')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
    <img src="<?= base_url()?>/assets/images/abroad/georgia.svg" alt="MBBS in Georgia" style="width:50%">
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in Georgia</h4>
  </div>
  </div>
  </a>
</div>

<div class="col-md-3">
  <a href="<?= base_url('mbbs-in-ukraine')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
    <img src="<?= base_url()?>/assets/images/abroad/ukraine.svg" alt="MBBS in Ukraine" style="width:50%">
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in Ukraine</h4>
  </div>
  </div>
  </a>
</div>

<div class="col-md-3">
  <a href="<?= base_url('mbbs-in-philippines')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
    <img src="<?= base_url()?>/assets/images/abroad/philippines.svg" alt="MBBS in Philippines" style="width:50%">
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in Philippines</h4>
  </div>
  </div>
  </a>
</div>

<div class="col-md-3">
  <a href="<?= base_url('mbbs-in-poland')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
    <img src="<?= base_url()?>/assets/images/abroad/poland.svg" alt="MBBS in Poland" style="width:50%">
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in Poland</h4>
  </div>
  </div>
  </a>
</div>

<div class="col-md-3">
 <a href="<?= base_url('mbbs-in-kyrgyzstan')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
    <img src="<?= base_url()?>/assets/images/abroad/kyrgyzstan.svg" alt="MBBS in kyrgyzstan" style="width:50%">
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in kyrgyzstan</h4>
  </div>
  </div>
  </a>
</div>

<div class="col-md-3">
   <a href="<?= base_url('mbbs-in-bagladesh')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
    <img src="<?= base_url()?>/assets/images/abroad/bangladesg.svg" alt="MBBS in Bangladesh" style="width:50%">
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in Bangladesh</h4>
  </div>
  </div>
  </a>
</div>








  </div>
</div>



<!-- mobile categories -->

<div class="categories-wrap mobile-version">
  <div class="container">

    <ul class="row categories-service">
      <div class="owl-carousel Categories-owl owl-theme">
     
     <div class="item">
         <a href="<?= base_url('management-colleges-in-india')?>" style="text-decoration:none;color:inherit;">
        <div class="categorybox text-center">
          <div class="categoryimg">
            <center>  
              <img src="<?= base_url()?>/assets/images/Management.png" alt="Management" style="width:64px;height:64px;">
            </center>
          </div>
          <h4>Management</h4>
        </div>
      </a>

       <a href="<?= base_url('engineering-colleges-in-india')?>" style="text-decoration:none;color:inherit;">
        <div class="categorybox">
          <div class="categoryimg">
            <center> 
            <img src="https://img.icons8.com/nolan/64/000000/engineering.png" alt="Engineering" style="width:64px;height:64px;">
            </center>
          </div>
          <h4>Engineering</h4>
        </div>
      </a>

     </div>

   
     <div class="item">

           <a href="<?= base_url('medical-colleges-in-india')?>" style="text-decoration:none;color:inherit;">
        <div class="categorybox">
          <div class="categoryimg">
            <center> 
            <img src="https://img.icons8.com/dusk/64/000000/survival-bag.png" alt="Medical" style="width:64px;height:64px;">
          </center>
          </div>
          <h4>Medical</h4>
        </div>
        </a>

         <div class="categorybox">
          <div class="categoryimg"><center><img src="https://img.icons8.com/dusk/64/000000/tractor.png" alt="Agriculture" style="width:64px;height:64px;"></center> </div>
          <h4>Agriculture</h4>
          
        </div>

     </div>
    

     <div class="item">
       <div class="categorybox">
          <div class="categoryimg"><center><img src="https://img.icons8.com/carbon-copy/100/000000/client-company.png" alt="Architecture" style="width:64px;height:64px;"></center></div>
          <h4>Architecture</h4>
          
        </div>

        <div class="categorybox">
          <div class="categoryimg"><center><img src="https://img.icons8.com/nolan/64/000000/drawing.png" alt="Arts" style="width:64px;height:64px;"></center></div>
          <h4>Arts</h4>
          
        </div>

     </div>
   

      <div class="item">
   
     <a href="<?= base_url('commerce-colleges-in-india')?>" style="text-decoration:none;color:inherit;">
        <div class="categorybox">
          <div class="categoryimg">
            <center>
            <img src="https://img.icons8.com/nolan/80/000000/e-commerce.png" alt="Commerce" style="width: 64px;height: 64px;">
            </center>
          </div>
          <h4>Commerce</h4>
        </div>
      </a>

      <a href="<?= base_url('medical-colleges-in-india')?>" style="text-decoration:none;color:inherit;">
        <div class="categorybox">
          <div class="categoryimg">
             <center>
            <img src="https://img.icons8.com/carbon-copy/100/000000/dental-crown.png" alt="Dental" style="width: 64px;height: 64px;">
          </center>
        </div>
          <h4>Dental</h4>
        </div>
      </a>

      </div>

    
      <div class="item">
     

          <div class="categorybox">
          <div class="categoryimg"><center><img src="https://img.icons8.com/carbon-copy/100/000000/law.png" alt="category" style="width: 64px;height: 64px;"></center></div>
          <h4>Law</h4>
          
        </div>

        <a href="<?= base_url('medical-colleges-in-india')?>" style="text-decoration:none;color:inherit;">
        <div class="categorybox">
          <div class="categoryimg">
             <center>
            <img src="<?= base_url()?>assets/images/paramedic.png" alt="Paramedical" style="width: 64px;height: 64px;">
             </center>
        </div>
          <h4>Paramedical</h4>
        </div>
      </a>

      </div>


       <div class="item">
     
        <div class="categorybox">
          <div class="categoryimg">
            <center>
            <img src="https://img.icons8.com/carbon-copy/64/000000/crowd.png" alt="Mass Communications" style="width: 64px;height: 64px;">
          </center>
        </div>
          <h4 style="font-size:18px;">Mass Communications</h4>
        </div>

         <a href="<?= base_url('management-colleges-in-india')?>" style="text-decoration:none;color:inherit;">
        <div class="categorybox">
          <div class="categoryimg">
             <center>
            <img src="https://img.icons8.com/wired/100/000000/3-star-hotel.png" alt="Hotel Management" style="width: 64px;height: 64px;">
          </center>
        </div>
          <h4>Hotel Management</h4>
        </div>
        </a>

 



      </div>


    
     

</div>
    </ul>


       <div class="heading-title"><span>STUDY MBBS ABOARD</span></div>
       <div class="heading-text text-justify">Career in the Medical Feild is a safest one for your future as it has huge opportunities to grow world wide. More than 10 lakhs people in India appear for NEET exam and all of them could not get the admission in the Govt Medical Colleges. For alll such aspirants MBBS in Abroad will be the best option to pursue their medical courses. Major destinations for indian medical students are russia, china, Bangladesh, poland Ukraine etc.</div>
    <ul class="row categories-service">
      <div class="owl-carousel Categories-owl owl-theme">
              
            <div class="item">
                <a href="<?= base_url('mbbs-in-russia')?>" style="text-decoration:none;color:inherit;">
                  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
                  <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
                <center> <img src="<?= base_url()?>/assets/images/abroad/russia.svg" alt="MBBS in Russia" style="width:50%"></center>
             </div>
            <div class="abroad-text">
            <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in Russia</h4>
           </div>
            </div>
               </a>
            </div>

            <div class="item">
                  <a href="<?= base_url('mbbs-in-china')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
   <center> <img src="<?= base_url()?>/assets/images/abroad/china.svg" alt="MBBS in China" style="width:50%"> </center>
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in China</h4>
  </div>
  </div>
  </a>
            </div>

            <div class="item">
               <a href="<?= base_url('mbbs-in-georgia')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
   <center> <img src="<?= base_url()?>/assets/images/abroad/georgia.svg" alt="MBBS in Georgia" style="width:50%"> </center>
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in Georgia</h4>
  </div>
  </div>
  </a>
            </div>


            <div class="item">
                  <a href="<?= base_url('mbbs-in-ukraine')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
   <center><img src="<?= base_url()?>/assets/images/abroad/ukraine.svg" alt="MBBS in Ukraine" style="width:50%"> </center>  
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in Ukraine</h4>
  </div>
  </div>
  </a>
            </div>

            <div class="item">
               <a href="<?= base_url('mbbs-in-philippines')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
   <center> <img src="<?= base_url()?>/assets/images/abroad/philippines.svg" alt="MBBS in Philippines" style="width:50%"> </center>
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in Philippines</h4>
  </div>
  </div>
  </a>
            </div>


            <div class="item">
                  <a href="<?= base_url('mbbs-in-poland')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
   <center> <img src="<?= base_url()?>/assets/images/abroad/poland.svg" alt="MBBS in Poland" style="width:50%"> </center>
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in Poland</h4>
  </div>
  </div>
  </a>
            </div>


            <div class="item">
              
                <a href="<?= base_url('mbbs-in-kyrgyzstan')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
    <center> <img src="<?= base_url()?>/assets/images/abroad/kyrgyzstan.svg" alt="MBBS in kyrgyzstan" style="width:50%"> </center>
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in kyrgyzstan</h4>
  </div>
  </div>
  </a>
            </div>

            <div class="item">
                 <a href="<?= base_url('mbbs-in-bagladesh')?>" style="text-decoration:none;color:inherit;">
  <div class="abroad"  style="background:#fff;border-radius: 8px;margin-top:20px;border-bottom: 4px solid #FF7A02">
    <div class="abroad-img text-center" style="padding:10px;padding-top:20px;">
   <center> <img src="<?= base_url()?>/assets/images/abroad/bangladesg.svg" alt="MBBS in Bangladesh" style="width:50%"> </center>
    </div>
  <div class="abroad-text">
    <h4 class="text-center" style="margin-top: 0;padding-bottom:10px;">MBBS in Bangladesh</h4>
  </div>
  </div>
  </a>
            </div>

      </div>
    </ul>



  </div>
</div>
<!--Categories end--> 

<!--Latest Exams Section start-->
<div class="desktop-version"> 
<div class="container">
  <div class="heading-title">Exams</div>
  <div class="heading-text">Choose top Exam from the list below to shape your bright future.</div>

<div class="row" style="margin-top: 50px;"> 
<div class="col-md-3 col-xs-6 text-center">
<div class="circle circle-active topexam">
   <span class="stats-no stats-no-active"><?php echo $count_topexams;?></span>
   Top Exams

 </div>


</div>
<div class="col-md-3 col-xs-6 text-center">
<div class="circle upcomingexam">
   <span class="stats-no"><?php echo $count_upcomingexams;?></span>
   Upcoming Exams

 </div>


</div>

<div class="col-md-3 col-xs-6 text-center">
 <div class="circle upcomingresult">
   <span class="stats-no"><?php echo $count_uocomingresult;?></span>
   Upcoming Results

 </div>


</div>
<div class="col-md-3 col-xs-6 text-center">
 <div class="circle latestexam" style="padding-top: 40px;">
   <span class="stats-no"><?php echo $count_latestexams;?></span>
     Latest Exams Updates
 </div>


</div>


</div>

</div>

</div>

<!-- <------------------mobile exam section------------------->


<div class="mobile-version"> 
<div class="container-fluid">

  <div class="heading-title">Exams</div>
  <div class="heading-text">Choose top Exam from the list below to shape your bright future.</div>

<div class="row" style="margin-top: 50px;"> 
<div class="col-md-6 col-xs-6 text-center">
<div class="circle circle-active topexam">
   Top Exams

 </div>


</div>
<div class="col-md-6 col-xs-6 text-center">
<div class="circle  upcomingexam">
   
   Upcoming Exams

 </div>


</div>

<div class="col-md-6 col-xs-6 text-center">
 <div class="circle upcomingresult">
   Upcoming Results

 </div>


</div>
<div class="col-md-6 col-xs-6 text-center">
 <div class="circle latestexam">
  
     Latest Exams Updates
 </div>


</div>


</div>

</div>

</div>

<!-- <----------------------------------mobile exam section end----------------- -->






<div class="feature-wrap top-exam-section hide-on-click">
  <div class="container">
    <div class="heading-title">Top Exams</div>
    <ul class="row feature-service">

      <?php
         foreach ($topexams as $exam) 
         {
       ?>
      
      <li class="col-md-4 col-sm-6 col-xs-12">
        <a href="<?= base_url("exam-details/$exam->id/".str_replace(' ','-',$exam->title))?>" style="text-decoration: none;">
        <div class="feature  feature-min-h">
          <div class="feat-bg text-center">
            <h3><?= $exam->title?></h3>
            <p class="fz-14" style="color: #9d9d9d;">
              <?php
               $limited_word = word_limiter($exam->short_desc,20);
                              echo $limited_word;
                            

                ?>
            </p>
             <p class="read-more"><span class="underline-on-hover">read more</span></p>
          </div>
          <div class="row" style="margin: 0">
           
            <div class="col-md-12 text-center">
              <h5 class="color-white bg-orange pd-5">Result</h5>
              <div class="result">
                <p><?= $exam->result ?></p>
              </div>
            </div>
          </div>
         
        </div>
        </a>
      </li>

  <?php 
}
  ?>
  


    </ul>

      <div class="view-btn"><a href="<?= base_url('exam-in-india')?>">View All Exams</a></div>


<!-- <------------------mobile top exam section--------------------> 

 
 <!-- <------------------mobile top exam end--------------------> 


  <div class="container exam-top-imgs">
    <div class="row">
      <div class="row">
        <div class="col-md-12">

          <?php 
             foreach ($importantexams as $importantexams)
             { 
          ?>

          <div class="col-md-2 col-sm-4 col-xs-6" style="padding: 0">

        <a href="<?= base_url("exam-details/$importantexams->id/".str_replace(' ','-',$importantexams->title))?>">
          <div class="important-exam">
           
              <img src="<?= base_url()?>admin/<?= $importantexams->logo?>" alt="Exam">
                <h4 class="fz-14"><?= $importantexams->title?></h4>  
         
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

  </div>
</div>


<div class="feature-wrap upcoming-exam-section hide-on-click" style="display: none;">
  <div class="container">
    <div class="heading-title">Upcoming Exams</div>

    <ul class="row feature-service">
       

<?php 
     foreach ($upcomingexams as $upcomingexam)
     {
?>

  
           <li class="col-md-4 col-sm-6 col-xs-12">

        <a href="<?= base_url("exam-details/$upcomingexam->id/".str_replace(' ','-',$upcomingexam->title))?>" style="text-decoration: none;">
        <div class="feature  feature-min-h">
          <div class="feat-bg text-center">
            <h3><?= $upcomingexam->title?></h3>
            <p class="fz-14" style="color: #9d9d9d;">
              
              <?php
               $limited_word2= word_limiter($upcomingexam->short_desc,20);
                              echo $limited_word2;
                            

                ?>

            </p>
            <p class="read-more"><span class="underline-on-hover">read more</span></p> 
          </div>
          <div class="row" style="margin: 0">
           
            <div class="col-md-12 text-center">
              <h5 class="color-white bg-orange pd-5">Result</h5>
              <div class="result">
                <p><?= $upcomingexam->result ?></p>
              </div>
            </div>
          </div>
         
        </div>
      </a>
      </li>

<?php
}
?>


    </ul>

         <div class="view-btn"><a href="<?= base_url('exam-in-india')?>">View All Exams</a></div>


  </div>
</div>


<div class="feature-wrap upcoming-results-section hide-on-click" style="display: none;">
  <div class="container">
    <div class="heading-title">Upcoming Results</div>
    <ul class="row feature-service">
      
    <?php 
     foreach ($upcomingresult as $upcomingresult)
     {
?>

  
           <li class="col-md-4 col-sm-6 col-xs-12">
        
        <div class="feature  feature-min-h">
          <a href="<?= base_url("exam-details/$upcomingresult->id/".str_replace(' ','-',$upcomingresult->title))?>">
          <div class="feat-bg text-center">
            <h3><?= $upcomingresult->title?></h3>
            <p class="fz-14" style="color: #9d9d9d;"><!-- <?= $upcomingresult->short_desc ?> -->
                 <?php
               $limited_word3 = word_limiter($upcomingresult->short_desc,20);
                              echo $limited_word3;
                            

                ?>
            </p>
          <p class="read-more"><span class="underline-on-hover">read more</span></p>
          </div>
          <div class="row" style="margin: 0">
           
            <div class="col-md-12 text-center">
              <h5 class="color-white bg-orange pd-5">Result</h5>
              <div class="result">
                <p><?= $upcomingresult->result ?></p>
              </div>
            </div>
          </div>
         
        </div>
        </a>
      </li>

<?php
}
?>



    </ul>

 

    <div class="view-btn"><a href="<?= base_url('exam-in-india')?>">View All Exams</a></div>
  </div>
</div>


<div class="feature-wrap latest-exam-section hide-on-click" style="display: none;">
  <div class="container">
    <div class="heading-title">Latest Exams</div>
    <ul class="row feature-service">
      
 


    <?php 
     foreach ($latestexams as $latestexams)
     {
?>

  
           <li class="col-md-4 col-sm-6 col-xs-12">
        
        <div class="feature  feature-min-h">
            <a href="<?= base_url("exam-details/$latestexams->id/".str_replace(' ','-',$latestexams->title))?>">
          <div class="feat-bg text-center">
            <h3><?= $latestexams->title?></h3>
            <p class="fz-14" style="color: #9d9d9d;"><!-- <?= $latestexams->short_desc ?> -->
                <?php
               $limited_word= word_limiter($latestexams->short_desc,20);
                              echo $limited_word4;
                            

                ?>
            </p>
          <p class="read-more"><span class="underline-on-hover">read more</span></p>
          </div>
          <div class="row" style="margin: 0">
           
            <div class="col-md-12 text-center">
              <h5 class="color-white bg-orange pd-5">Result</h5>
              <div class="result">
                <p><?= $latestexams->result ?></p>
              </div>
            </div>
          </div>
         
        </div>
      </a>
      </li>

<?php
}
?>




    </ul>
      
    <div class="view-btn"><a href="<?= base_url('exam-in-india')?>">View All Exams</a></div>
  </div>
</div>
<!--Latest ads end--> 
<div class="topcourses">
  <div class="container-fluid pd-0" style="background: #007075;">
    <center><h5 class="pd-15 fz-25 color-white bold">TOP COURSES</h5></center>
    <div class="container-fluid center" style="text-align: justify;padding-bottom:2em;">
      <p><a href="<?= base_url('bba-colleges')?>"><span>BBA</span></a></p>
      <p><a href="<?= base_url('mba-colleges')?>"><span>MBA</span></a></p>
      <p><a href="<?= base_url('pgdm-colleges')?>"><span>PGDM</span></a></p>
      <p><a href="<?= base_url('bbm-colleges')?>"><span>BBM</span></a></p>
      <p><a href="<?= base_url('btech-colleges')?>"><span>B-Tech</span></a></p>
      <p><a href="<?= base_url('mtech-colleges')?>"><span>M-Tech</span></a></p>
      <p><a href="<?= base_url('barch-colleges')?>"><span>B-Arch</span></a></p>
      <p><a href="<?= base_url('be-colleges')?>"><span>BE</span></a></p>
      <p><a href="<?= base_url('bcom-colleges')?>"><span>B.Com</span></a></p>
      <p><a href="<?= base_url('mcom-colleges')?>"><span>M.Com</span></a></p>
      <p><a href="<?= base_url('mphil-colleges')?>"><span>M.Phil</span></a></p>
      <p><a href="<?= base_url('bed-colleges')?>"><span>B.ED</span></a></p>
      <p><a href="<?= base_url('cs-colleges')?>"><span>CS</span></a></p>
      <p><a href="<?= base_url('mbbs-colleges')?>">  MBBS </a> </p>
      <p><a href="<?= base_url('ms-colleges')?>"> MS</a></p>
      <p><a href="<?= base_url('bpharma-colleges')?>"> B-PHARMA</a></p>
      <p><a href="<?= base_url('mpharma-colleges')?>"> M-PHARMA</a></p>
      <p><a href="<?= base_url('bpt-colleges')?>">BPT</a></p>
      <p><a href="<?= base_url('bams-colleges')?>">BAMS</a></p>
      <p><a href="<?= base_url('engineering-colleges-in-india')?>">BCA</a></p>
      <p><a href="<?= base_url('engineering-colleges-in-india')?>">MCA</a></p>
      <p><a href="<?= base_url('medical-colleges-in-india')?>"> B.Sc (Nursing)</a> </p>
      <p><a href="<?= base_url('medical-colleges-in-india')?>"> B.Sc (Medicine)</a> </p>
      <p><a href="<?= base_url('engineering-colleges-in-india')?>">B.Sc (Computers)</a></p>
      <p><a href="<?= base_url('medical-colleges-in-india')?>"> M.Sc (Nursing)</a> </p>
      <p><a href="<?= base_url('management-colleges-in-india')?>">M.Sc (Hotel Management) </a></p>
      <p><a href="<?= base_url('engineering-colleges-in-india')?>"> Ph.D </a></p>
      <p><a href="<?= base_url('engineering-colleges-in-india')?>">M.Arch</a></p>
    </div>
  </div>  
</div>   

<!--Testimonials start-->
<!-- <div class="testimonials-wrap">
  <div class="container">
    <div class="heading-wrap">
      <div class="heading-title">Testimonials</div>
    </div>
    <ul class="owl-carousel testimonials">
      <li class="item">
        <div class="testi-info">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis augue ultricies, molestie nisl mollis, efficitur velit. Nunc urna ligula, malesuada nec condimentum eu, tincidunt sit amet purus.</p>
          <div class="name">Kety York <span>Lorem Ispum</span></div>
          <div class="client-image"><img src="<?= base_url()?>/assets/images/client.jpg" alt=""></div>
        </div>
      </li>
      <li class="item">
        <div class="testi-info">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis augue ultricies, molestie nisl mollis, efficitur velit. Nunc urna ligula, malesuada nec condimentum eu, tincidunt sit amet purus.</p>
          <div class="name">John Doe <span>Lorem Ispum</span></div>
          <div class="client-image"><img src="<?= base_url()?>/assets/images/client2.jpg" alt=""></div>
        </div>
      </li>
      <li class="item">
        <div class="testi-info">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis augue ultricies, molestie nisl mollis, efficitur velit. Nunc urna ligula, malesuada nec condimentum eu, tincidunt sit amet purus.</p>
          <div class="name">John Doe <span>Lorem Ispum</span></div>
          <div class="client-image"><img src="<?= base_url()?>/assets/images/client.jpg" alt=""></div>
        </div>
      </li>
      <li class="item">
        <div class="testi-info">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis augue ultricies, molestie nisl mollis, efficitur velit. Nunc urna ligula, malesuada nec condimentum eu, tincidunt sit amet purus.</p>
          <div class="name">John Doe <span>Lorem Ispum</span></div>
          <div class="client-image"><img src="<?= base_url()?>/assets/images/client2.jpg" alt=""></div>
        </div>
      </li>
      <li class="item">
        <div class="testi-info">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis augue ultricies, molestie nisl mollis, efficitur velit. Nunc urna ligula, malesuada nec condimentum eu, tincidunt sit amet purus.</p>
          <div class="name">John Doe <span>Lorem Ispum</span></div>
          <div class="client-image"><img src="<?= base_url()?>/assets/images/client.jpg" alt=""></div>
        </div>
      </li>
      <li class="item">
        <div class="testi-info">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis augue ultricies, molestie nisl mollis, efficitur velit. Nunc urna ligula, malesuada nec condimentum eu, tincidunt sit amet purus.</p>
          <div class="name">John Doe <span>Lorem Ispum</span></div>
          <div class="client-image"><img src="<?= base_url()?>/assets/images/client2.jpg" alt=""></div>
        </div>
      </li>
    </ul>
  </div>
</div> -->
<!--Testimonials end--> 

<!-- SLIDER -->

<?php
$row=$this->db->query("select * from slider");
$res2=$res=$row->result();

?>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php
        $i=0;
        foreach ($res as $result) {
          ?>
      <li data-target="#myCarousel" data-slide-to="<?= $i ?>" class="active"></li>
         <?php
         $i++;
        }
        ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

<?php

        $i=0;
        foreach ($res as $result) {
            if($result->url=='')
            {
                $a_open="";
                $a_close="";
            }
            else
            {
               $a_open="<a target='_blank' href='$result->url'>";
                $a_close="</a>";
            }

          ?>
      <div class="item <?php if($i==0) echo "active"?>" style="height:200px;">
       <?= $a_open ?>
       <img src="<?= base_url()?>/admin/upload/slider/<?= $result->image ?>" alt="Add" data-toggle="modal" data-target="#apply-now-modal" style="width:100%"><?= $a_close ?>
      </div>
         <?php
         $i++;
        }
        ?>
      


  </div>
</div>

<!-- SLIDER -->


<div class="container-fluid">
  <center> <h3 class="heading-title" style="padding: 50px;"> Top News </h3> </center>
  <div class="row">

    <?php 
      foreach ($newsdata as $news )
       {
    ?>
    <div class="col-md-3 col-sm-6 col-6 text-center">
      <div class="inner-popular">
        <a href="<?= base_url("news/$news->id/".str_replace(" ","-", $news->title))?>">
        <img src="<?= base_url()?>/admin/<?= $news->image?>" alt="News">
        <h5 style="padding:5px;"> <!-- <?= $news->title?> -->
           <?php
               $limited_word4 = word_limiter($news->title,5);
                              echo $limited_word4;
                            

                ?>
        </h5>
        </a>
      </div>
    </div>

    <?php
  }
  ?>

   
 
<div class="clearfix"> </div>
      <div class="view-btn"><a href="<?= base_url('educational-news')?>">View All News</a></div>

</div>

<!--business start-->
<div class="business-wrap">
  <div class="container">
    <ul class="row business-service">
      <li class="col-md-4">
       
       <a href="<?= base_url('')?>/collegepanel" style="text-decoration: none;"> 
        <div class="business-image"><i class="fas fa-university" style="color:#000;font-size: 3em;"></i></div>
        <h3>College Register</h3> 
      </a>
                   

        
      </li>
      <li class="col-md-4">
        
        <a  data-toggle="modal" data-target="#advertise-ad" style="cursor:pointer;">
         <div class="business-image"><img src="<?= base_url()?>/assets/images/globe-ad.png" alt="PUBLISH YOUR AD"></div>
         <h3>PUBLISH YOUR AD</h3>
        </a>
        
      </li>
      <li class="col-md-4">
        <a  data-toggle="modal" data-target="#advertise-ad" style="cursor:pointer;">
         <div class="business-image"><img src="<?= base_url()?>/assets/images/advertise.png" alt="ADVERTISE WITH US"></div>
         <h3>ADVERTISE WITH US</h3>
        </a>
        
      </li>
    </ul>
  </div>
</div>

<div class="container">


<div class="row">


  <div class="modal fade modalmedia" id="advertise-ad" role="dialog" style="margin-top:54px;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="col-md-3"></div>
      <div class="col-md-6">
      <div class="modal-content">
        <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h3 class="text-center" style="color:#ff7a02;">ADVERTISE WITH US</h3>       
        </div>
        <div class="modal-body" style="padding:10px 50px 10px 50px;">
         <form class="" action="<?= base_url('User/adwithus')?>" method="post">
              
              <div class="form-group">
                <div class="enquiry">
                     <label>Name</label>
                     <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
                </div>

                <div class="enquiry">
                     <label>Email</label>
                     <input type="text" name="email" class="form-control" placeholder="Enter Your Email" required>
                </div>

                <div class="enquiry">
                     <label>Phone</label>
                     <input type="text" pattern="[6-9]{1}[0-9]{9}" maxlength="10" minlength="10" name="phone" class="form-control" placeholder="Enter Your Phone" required>
                </div>

                <div class="enquiry">
                     <label>Write a Query </label>
                     <textarea name="query" class="form-control" required></textarea>
                </div>
              </div>   
             
             <div class="button-en text-center">
                  <button type="submit" class="btn btn-primary btn-block">Submit</button>

                  <br>

                  <p class="text-center">For more information: mail us at <br>
                    <a href="mailto:advertising@collegegyani.com" class="color-orange"> advertising@collegegyani.com 
                    </a>
                  </p>
             </div>

        </form>
        </div>
      </div>
      </div>
      
    </div>
  </div>

  </div>


</div>
</section>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



<!-- Modal -->
 <div class="modal fade" id="apply-now-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <center> <h5 class="modal-title color-orange fz-22 bold" id="exampleModalLabel">Enter Your Details</h5> </center>
        <center> <p class="color-gray">For more info you can simply log on to collegegyani.com</p> </center>
        
      </div>
      <div class="modal-body" style="padding: 3% 7%;">
     <form  action="<?=base_url('User/collegeapply')?>" method="post"  >
      <?php   if($this->session->userdata('email')){ 
                                        $email=$this->session->userdata('email');
                                 $row=$this->db->query("select * from user_registration where email='$email'");
                                       $userdata=$row->row();
                                         ?>
     <div class="row">
   
       <div class="col-md-4">
        
        <label class="color-gray mg-0">FuLL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="user_name" value="<?=$userdata->name?>">
         <input type="hidden" class="clickdropid" name="college_id">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">EMAIL ID</label>
         <input type="email" value="<?php echo $email ; ?>" class="form-control color-orange modal-form" name="user_email">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">MOBILE NO.</label>
          <input pattern="[6-9]{1}[0-9]{9}" type="text" required="" name="user_contact" id="txtPhoneNo" value="<?=$userdata->phone?>" onkeypress="return isNumber(event)" placeholder="Enter Your Phone Number" class=" form-control color-orange modal-form" maxlength="10" type="text">
       </div>
     </div>  
<?php }else{ ?>

    <div class="row">

       
       <div class="col-md-4">
        <label class="color-gray mg-0">FULL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="user_name" required="">
         <input type="hidden" class="clickdropid" name="college_id">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">EMAIL ID</label>
         <input type="email" class="form-control color-orange modal-form" name="user_email" required>
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
          <option value="">Choose course</option>
          <?php 
            foreach ($course as $key)
             {
           ?>
           <option><?= $key->course_name?></option>
           <?php 
         }
         ?>
         </select>
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR STATE</label>
          <select class="form-control color-orange modal-form-select selectstate" required="" name="user_city">
             <option value="">Select State </option>
                  <?php 
                    foreach ($cities1 as $cities1) {
                  ?>
                  <option><?= $cities1->city_state ?></option>
                  <?php
                }
                ?>
         </select> 
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR CITY</label>
        <select class="form-control color-orange modal-form-select postcities" required="" name="user_region">
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

<!-- <--------------------------------------auto open form---------------------------> 
  <div class="modal fade" id="apply-now-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <center> <h5 class="modal-title color-orange fz-22 bold" id="exampleModalLabel">Enter Your Details</h5> </center>
        <center> <p class="color-gray">For more info you can simply log on to collegegyani.com</p> </center>
        
      </div>
      <div class="modal-body" style="padding: 3% 7%;">
     <form  action="<?=base_url('User/collegeapply')?>" method="post"  >
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
         <input type="email" value="<?php echo $email ; ?>" class="form-control color-orange modal-form" name="user_email">
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
         <input type="text" class="form-control color-orange modal-form" name="user_name" required="">
         <input type="hidden" class="clickdropid" name="college_id">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">EMAIL ID</label>
         <input type="email" class="form-control color-orange modal-form" name="user_email" required>
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
          <option value="">Choose course</option>
          <?php 
            foreach ($course as $key)
             {
           ?>
           <option><?= $key->course_name?></option>
           <?php 
         }
         ?>
         </select>
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR STATE</label>
          <select class="form-control color-orange modal-form-select selectstate" required="" name="user_city">
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
          <label class="color-gray">SELECT YOUR City</label>
        <select class="form-control color-orange modal-form-select postcities" required="" name="user_region">
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

</div>


<!-- Modal -->
 <div class="modal fade" id="scholarship" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <center> <h5 class="modal-title color-orange fz-22 bold" id="exampleModalLabel">Enter Your Details</h5> </center>
        <center> <p class="color-gray">For more info you can simply log on to collegegyani.com</p> </center>
        
      </div>
      <div class="modal-body" style="padding: 3% 7%;">
     <form  action="<?=base_url('User/scholarshipapply')?>" method="post"  >
      <?php   if($this->session->userdata('email')){ 
                                        $email=$this->session->userdata('email');
                                 $row=$this->db->query("select * from user_registration where email='$email'");
                                       $userdata=$row->row();
                                         ?>
     <div class="row">
   
       <div class="col-md-4">
        
        <label class="color-gray mg-0">FULL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="user_name" value="<?=$userdata->name?>">
         <input type="hidden" name="helpdesk" value="scholarship">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">EMAIL ID</label>
         <input type="email" value="<?php echo $email ; ?>" class="form-control color-orange modal-form" name="user_email">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">MOBILE NO.</label>
          <input pattern="[6-9]{1}[0-9]{9}" type="text" required="" name="user_contact" id="txtPhoneNo" value="<?=$userdata->phone?>" onkeypress="return isNumber(event)" placeholder="Enter Your Phone Number" class=" form-control color-orange modal-form" maxlength="10" type="text">
       </div>
     </div>  
<?php }else{ ?>

    <div class="row">

       
       <div class="col-md-4">
        <label class="color-gray mg-0">FULL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="user_name" required="">
         <input type="hidden" name="helpdesk" value="Scholarship">       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">EMAIL ID</label>
         <input type="email" class="form-control color-orange modal-form" name="user_email" required>
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
          <option value="">Choose course</option>
          <?php 
            foreach ($course as $key)
             {
           ?>
           <option><?= $key->course_name?></option>
           <?php 
         }
         ?>
         </select>
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR STATE</label>
          <select class="form-control color-orange modal-form-select citiesscholarship" required="" name="user_city">
             <option value="">Select State </option>
                  <?php 
                    foreach ($citiesscholarship as $citiesscholarship) {
                  ?>
                  <option><?= $citiesscholarship->city_state ?></option>
                  <?php
                }
                ?>
         </select> 
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR CITY</label>
        <select class="form-control color-orange modal-form-select citiesscholarship2" required="" name="user_region">
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
 <div class="modal fade" id="educationloan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <center> <h5 class="modal-title color-orange fz-22 bold" id="exampleModalLabel">Enter Your Details</h5> </center>
        <center> <p class="color-gray">For more info you can simply log on to collegegyani.com</p> </center>
        
      </div>
      <div class="modal-body" style="padding: 3% 7%;">
     <form  action="<?=base_url('User/educationanloanapply')?>" method="post"  >
      <?php   if($this->session->userdata('email')){ 
                                        $email=$this->session->userdata('email');
                                 $row=$this->db->query("select * from user_registration where email='$email'");
                                       $userdata=$row->row();
                                         ?>
     <div class="row">
   
       <div class="col-md-4">
        
        <label class="color-gray mg-0">FULL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="user_name" value="<?=$userdata->name?>">
         <input type="hidden" name="helpdesk" value="Education Loan">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">EMAIL ID</label>
         <input type="email" value="<?php echo $email ; ?>" class="form-control color-orange modal-form" name="user_email">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">MOBILE NO.</label>
          <input pattern="[6-9]{1}[0-9]{9}" type="text" required="" name="user_contact" id="txtPhoneNo" value="<?=$userdata->phone?>" onkeypress="return isNumber(event)" placeholder="Enter Your Phone Number" class=" form-control color-orange modal-form" maxlength="10" type="text">
       </div>
     </div>  
<?php }else{ ?>

    <div class="row">

       
       <div class="col-md-4">
        <label class="color-gray mg-0">FULL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="user_name" required="">
         <input type="hidden" name="helpdesk" value="Education Loan"> 
               </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">EMAIL ID</label>
         <input type="email" class="form-control color-orange modal-form" name="user_email" required>
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
          <option value="">Choose course</option>
          <?php 
            foreach ($course as $key)
             {
           ?>
           <option><?= $key->course_name?></option>
           <?php 
         }
         ?>
         </select>
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR STATE</label>
          <select class="form-control color-orange modal-form-select loan" required="" name="user_city">
             <option value="">Select State </option>
                  <?php 
                    foreach ($loan as $loan) {
                  ?>
                  <option><?= $loan->city_state ?></option>
                  <?php
                }
                ?>
         </select> 
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR CITY</label>
        <select class="form-control color-orange modal-form-select loan2" required="" name="user_region">
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
 <div class="modal fade" id="nirf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <center> <h5 class="modal-title color-orange fz-22 bold" id="exampleModalLabel">Enter Your Details</h5> </center>
        <center> <p class="color-gray">For more info you can simply log on to collegegyani.com</p> </center>
        
      </div>
      <div class="modal-body" style="padding: 3% 7%;">
     <form  action="<?=base_url('User/nirfform')?>" method="post"  >
      <?php   if($this->session->userdata('email')){ 
                                        $email=$this->session->userdata('email');
                                 $row=$this->db->query("select * from user_registration where email='$email'");
                                       $userdata=$row->row();
                                         ?>
     <div class="row">
   
       <div class="col-md-4">
        
        <label class="color-gray mg-0">FULL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="user_name" value="<?=$userdata->name?>">
         <input type="hidden" name="helpdesk" value="NIRF">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">EMAIL ID</label>
         <input type="email" value="<?php echo $email ; ?>" class="form-control color-orange modal-form" name="user_email">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">MOBILE NO.</label>
          <input pattern="[6-9]{1}[0-9]{9}" type="text" required="" name="user_contact" id="txtPhoneNo" value="<?=$userdata->phone?>" onkeypress="return isNumber(event)" placeholder="Enter Your Phone Number" class=" form-control color-orange modal-form" maxlength="10" type="text">
       </div>
     </div>  
<?php }else{ ?>

    <div class="row">

       
       <div class="col-md-4">
        <label class="color-gray mg-0">FULL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="user_name" required="">
         <input type="hidden" name="helpdesk" value="NIRF">   
      </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">EMAIL ID</label>
         <input type="email" class="form-control color-orange modal-form" name="user_email" required>
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
          <option value="">Choose course</option>
          <?php 
            foreach ($course as $key)
             {
           ?>
           <option><?= $key->course_name?></option>
           <?php 
         }
         ?>
         </select>
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR STATE</label>
          <select class="form-control color-orange modal-form-select counselling" required="" name="user_city">
             <option value="">Select State </option>
                  <?php 
                    foreach ($counselling as $counselling) {
                  ?>
                  <option><?= $counselling->city_state ?></option>
                  <?php
                }
                ?>
         </select> 
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR CITY</label>
        <select class="form-control color-orange modal-form-select counselling2" required="" name="user_region">
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
 <div class="modal fade" id="Counselling" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <center> <h5 class="modal-title color-orange fz-22 bold" id="exampleModalLabel">Enter Your Details</h5> </center>
        <center> <p class="color-gray">For more info you can simply log on to collegegyani.com</p> </center>
        
      </div>
      <div class="modal-body" style="padding: 3% 7%;">
     <form  action="<?=base_url('User/scholarshipapply')?>" method="post"  >
      <?php   if($this->session->userdata('email')){ 
                                        $email=$this->session->userdata('email');
                                 $row=$this->db->query("select * from user_registration where email='$email'");
                                       $userdata=$row->row();
                                         ?>
     <div class="row">
   
       <div class="col-md-4">
        
        <label class="color-gray mg-0">FULL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="user_name" value="<?=$userdata->name?>">
         <input type="hidden" name="helpdesk" value="Experts Counselling">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">EMAIL ID</label>
         <input type="email" value="<?php echo $email ; ?>" class="form-control color-orange modal-form" name="user_email">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">MOBILE NO.</label>
          <input pattern="[6-9]{1}[0-9]{9}" type="text" required="" name="user_contact" id="txtPhoneNo" value="<?=$userdata->phone?>" onkeypress="return isNumber(event)" placeholder="Enter Your Phone Number" class=" form-control color-orange modal-form" maxlength="10" type="text">
       </div>
     </div>  
<?php }else{ ?>

    <div class="row">

       
       <div class="col-md-4">
        <label class="color-gray mg-0">FULL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="user_name" required="">
         <input type="hidden" name="helpdesk" value="Experts Counselling">       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">EMAIL ID</label>
         <input type="email" class="form-control color-orange modal-form" name="user_email" required>
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
          <option value="">Choose course</option>
          <?php 
            foreach ($course as $key)
             {
           ?>
           <option><?= $key->course_name?></option>
           <?php 
         }
         ?>
         </select>
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR STATE</label>
          <select class="form-control color-orange modal-form-select counselling" required="" name="user_city">
             <option value="">Select State </option>
                  <?php 
                    foreach ($counselling as $counselling) {
                  ?>
                  <option><?= $counselling->city_state ?></option>
                  <?php
                }
                ?>
         </select> 
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR CITY</label>
        <select class="form-control color-orange modal-form-select counselling2" required="" name="user_region">
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
 <div class="modal fade" id="referral" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <center> <h5 class="modal-title color-orange fz-22 bold" id="exampleModalLabel">Enter Your Details</h5> </center>
        <center> <p class="color-gray">For more info you can simply log on to collegegyani.com</p> </center>
        
      </div>
      <div class="modal-body" style="padding: 3% 7%;">
     <form  action="<?=base_url('User/scholarshipapply')?>" method="post"  >
      <?php   if($this->session->userdata('email')){ 
                                        $email=$this->session->userdata('email');
                                 $row=$this->db->query("select * from user_registration where email='$email'");
                                       $userdata=$row->row();
                                         ?>
     <div class="row">
   
       <div class="col-md-4">
        
        <label class="color-gray mg-0">FULL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="user_name" value="<?=$userdata->name?>">
         <input type="hidden" name="helpdesk" value="Student Referral">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">EMAIL ID</label>
         <input type="email" value="<?php echo $email ; ?>" class="form-control color-orange modal-form" name="user_email">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">MOBILE NO.</label>
          <input pattern="[6-9]{1}[0-9]{9}" type="text" required="" name="user_contact" id="txtPhoneNo" value="<?=$userdata->phone?>" onkeypress="return isNumber(event)" placeholder="Enter Your Phone Number" class=" form-control color-orange modal-form" maxlength="10" type="text">
       </div>
     </div>  
<?php }else{ ?>

    <div class="row">

       
       <div class="col-md-4">
        <label class="color-gray mg-0">FULL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="user_name" required="">
         <input type="hidden" name="helpdesk" value="Student Referral"> 
               </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">EMAIL ID</label>
         <input type="email" class="form-control color-orange modal-form" name="user_email" required>
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
          <option value="">Choose course</option>
          <?php 
            foreach ($course as $key)
             {
           ?>
           <option><?= $key->course_name?></option>
           <?php 
         }
         ?>
         </select>
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR STATE</label>
          <select class="form-control color-orange modal-form-select referral" required="" name="user_city">
             <option value="">Select State </option>
                  <?php 
                    foreach ($referral as $referral) {
                  ?>
                  <option><?= $referral->city_state ?></option>
                  <?php
                }
                ?>
         </select> 
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR CITY</label>
        <select class="form-control color-orange modal-form-select referral2" required="" name="user_region">
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




<?php include('footer.php');?>


<?php
  if($this->session->flashdata('nirfformalt'))
{
?>

<script type="text/javascript">
     window.open('https://www.nirfindia.org/', '_blank');
</script>
<?php
}
?>

<?php
  if(!$this->session->flashdata('enquiry'))
{
?>

<script type="text/javascript">
  $(document).ready(function()
  {
    $('.enquiry-button').click();
  })
</script>
<?php
}
?>
<script>
   <?php
     if($this->session->flashdata('college_apply_alt'))
      { 
        ?> 
swal("Applied Successfully", "", "success");
       
<?php 
}
 ?>
</script>

<script>
   <?php
     if($this->session->flashdata('review_alt'))
      { 
        ?> 
swal("Review Submitted", "", "success");
       
<?php 
}
 ?>
</script>

<script>
   <?php
     if($this->session->flashdata('scholarshipapply_alt'))
      { 
        ?> 
swal("Query Submitted", "", "success");
       
<?php 
}
 ?>
</script>
<script>
   <?php
     if($this->session->flashdata('lead_alt'))
      { 
        ?> 
swal("Inquiry Submit Successfully", "", "success");
       
<?php 
}
 ?>
</script>

<script>
   <?php
     if($this->session->flashdata('insertrussiaapplication'))
      { 
        ?> 
swal("Inquiry Submit Successfully", "", "success");
       
<?php 
}
 ?>
</script>

<?php
  if($this->session->flashdata('enquiry'))
{
?>
<script type="text/javascript">
     swal("", "<?= $this->session->flashdata('enquiry');?>", "success");
</script>
<?php
}
?>


