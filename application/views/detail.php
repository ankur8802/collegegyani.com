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
  <title><?=$data->college_name?></title>
<link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/baguetteBox.min.css">

 <style>
   .bg
{
  background-image:linear-gradient(0deg,rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(" <?= base_url()?>assets/images/collegebanner.jpg"); 
  background-size:contain;

}
 </style>

<div class="container-fluid bg pd-0 height-250 detail-section">
  
  <div class="row center mg-0" style="margin-top:12%;">
    
    <div class="col-md-12">
          <div class="logo">
             <div class="img inline mg-5">
           <!--  <img class="inline" src="<?= base_url()?>/assets/images/college-logo.jpg" alt=".." > -->
            </div>
            <h3 class="inline color-white"><?=$data->college_name?>
            <span style="color:#ff7a02;font-weight:bold;">
            [
               <?php $college_email=$data->college_email;

               $academic_sum=$this->db->query("SELECT sum(academic) as academic_sum FROM `review` WHERE college_email='$college_email' and status='1' ");
               $academic_sum->row();
               $academic_sumarray = json_decode(json_encode($academic_sum->row()), true);
               $academic=$academic_sumarray['academic_sum'];


               $accommodation_sum=$this->db->query("SELECT sum(accommodation) as accommodation_sum FROM `review` WHERE college_email='$college_email' and status='1' ");
               $accommodation_sum->row();
               $accommodation_sumarray = json_decode(json_encode($accommodation_sum->row()), true);
               $accommodation=$accommodation_sumarray['accommodation_sum'];

               $faculty_sum=$this->db->query("SELECT sum(faculty) as faculty_sum FROM `review` WHERE college_email='$college_email' and status='1' ");
               $faculty_sum->row();
               $faculty_sumarray = json_decode(json_encode($faculty_sum->row()), true);
               $faculty=$faculty_sumarray['faculty_sum'];

               $infrastructure_sum=$this->db->query("SELECT sum(infrastructure) as infrastructure_sum FROM `review` WHERE college_email='$college_email' and status='1' ");
               $infrastructure_sum->row();
               $infrastructure_sumarray = json_decode(json_encode($infrastructure_sum->row()), true);
               $infrastructure=$infrastructure_sumarray['infrastructure_sum'];

               $placement_sum=$this->db->query("SELECT sum(placement) as placement_sum FROM `review` WHERE college_email='$college_email' and status='1' ");
               $placement_sum->row();
               $placement_sumarray = json_decode(json_encode($placement_sum->row()), true);
               $placement=$placement_sumarray['placement_sum'];
               

               $social_sum=$this->db->query("SELECT sum(social) as social_sum FROM `review` WHERE college_email='$college_email' and status='1' ");
               $social_sum->row();
               $social_sumarray = json_decode(json_encode($social_sum->row()), true);
               $social=$social_sumarray['social_sum'];

               $review_sum=$this->db->query("SELECT * FROM `review` WHERE college_email='$college_email' and status='1' ");
               $review_sum->num_rows();
               $review_sumarray = json_decode(json_encode($review_sum->num_rows()), true);
               $review_sumarray_max=$review_sumarray*60;

               $total_column_review_rating=$academic+$accommodation+$faculty+$infrastructure+$placement+$social;

               $avarage_rating= $total_column_review_rating/$review_sumarray_max*10;

              if ($avarage_rating>0) {
                echo number_format($avarage_rating,1);
              }
              else{
                echo "Rating Not Available";
              }



               


             ?>
            ] 
            </span>

            </h3>
            <p class="fz-18 color-white"><i class="fas fa-map-marker-alt pd-5"></i> <?=$data->city?>, <?=$data->state?></p>
           </div>
      </div>


      </div> 

</div>

<div class="container-fluid">
  <div class="row options center" style="background: #EFEFEF;">

    <div class="owl-carousel services-here owl-theme">
       <div class="item white-on-hover">
        <div class="options-active info removecl"><p class="white-on-active removewoa">Info</p></div>
        </div>

    <div class="item white-on-hover">
      <div class="Placement removecl"><p class=" removewoa">Placement</p></div>
      </div>

      <div class="item white-on-hover">
      <div class="fees removecl"><p class="removewoa">Courses & Fees</p></div>
      </div>

      <div class="item  white-on-hover">
      <div class="hostel removecl"><p class=" removewoa">Hostel</p></div>
      </div>
      
      <div class="item white-on-hover">
     <div class="scholarship removecl"><p class=" removewoa">Scholarship</p></div>
     </div>

     <div class="item white-on-hover">
      <div class="faculty removecl"><p class=" removewoa">Faculty</p></div>  
      </div>

        <div class="item white-on-hover">
      <div class="gallery removecl"><p class=" removewoa">Gallery</p></div>  
      </div>

      <div class="item white-on-hover">
      <div class="reviews removecl"><p class=" removewoa">Reviews</p></div>  
      </div>
     
     </div>
  </div>
</div>

<div class="main-section-profile hide-jq" style="margin:20px 0px;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9">
        <div class="inner-col-md-9 br-4 pd-0 mg-10 b1ef" >
        <h3 class="pd-15 color-orange text-center" style="border-bottom:1px solid #efefef; ">Information</h3>
        <div class="row" style="padding: 20px;">
        <div class="inner-info col-md-12 text-center" style="padding: 0.25em;box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset">
          <img src="<?php echo base_url('upload/'. $data->image)?>" alt="College Image" style="border-radius: 4px;">
        </div>
        <div class="col-md-12" style="padding: 1em;">
          <p class="justify"><?=$data->description?></p>
        </div>
        </div>
      </div>
      </div>

      <div class="col-md-3">
        <?php include('applysidenav.php');?>
        <?php

        $college_type=$data->college_type;
        $silimar_colleges=$this->db->query("SELECT * FROM `college_registration` WHERE college_type='$college_type' and NOT college_email='$college_email' LIMIT 10 ");
        $silimar_colleges->result();
        $silimar_colleges_result = json_decode(json_encode($silimar_colleges->result()), true);
        ?>
       <div class="similar-college br-4 pd-0 mg-10 mg-t-25">
         <div class="similar-college-head fz-18 pd-10 bg-orange color-white no-border w-100 br-4">
           <h5 class="text-center">Similar Colleges</h5>
         </div>
         <div class="similar-college-body">

          <?php 
           foreach ($silimar_colleges_result as $silimar_colleges_result) {
           ?>
           <div class="row mg-0" style="border:2px solid #e6e6e6;">

             <div class="col-md-3 col-sm-4 col-xs-4">
               <div class="similar-college-logo pd-5">
                      <img src="<?= base_url()?>upload/<?= $silimar_colleges_result['logo']?>" alt=".."l>
               </div>
             </div>

             <div class="col-md-9 col-sm-8 col-xs-8">
                 <div class="similar-college-name pd-5" style="padding-bottom:0;margin-bottom: 0;">
                      <p class="color-orange"><?= $silimar_colleges_result['college_name'] ?></p>
                 </div>
                 <p class="text-right mg-0" style="margin-top:-5%;padding-right:5px;">
                   <a href="<?= base_url("college/".$silimar_colleges_result['id']."/".str_replace(' ','-',$silimar_colleges_result['college_name']))?>">
                                Read More
                   </a>
                </p>
             </div>

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




<!-- <--------------------------------------- main Courses & Fees section start--------------------------- -->


<div class="main-section-fees hide-jq" style="margin:20px 0px;display:;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9 pd-15">
        <div class="row">
          <div class="col-md-12">

          <?php
          foreach ($courses as $course) {
        
          ?>

        <div class="inner-col-md-9 br-4 pd-0 mg-10 b1ef" >

        <h3 class="pd-15 bold" style="border-bottom:1px solid #efefef; "><?php echo $course->course_name; ?>
            <span style="font-size:14px;">
            <?php
               if( $course->course_trade=="NotRequired" ||  $course->course_trade=="Not Required")

               {
                echo " ";
               }
               else
               {
                echo "(";
                echo $course->course_trade;
                  echo ")";
               }




            ?>
            </span>      
         <p class="fz-22" style="float:right;">
          <?php 
                   $total_fee=$course->first_year_fee + $course->secound_year_fee + $course->third_year_fee + $course->fourth_year_fee + $course->fifth_year_fee + $course->sixth_year_fee;
                   
           ?>
         <?php
           if($total_fee==0)
           {
            echo "Fee Not Disclosed";
           }
           else
           {
             echo $total_fee;
             echo "/-";
             if ($total_fee==$course->first_year_fee) {
                 echo  " <span class='fz-12 pd-l-10'>First Year Fees</span>";
             }
             else
             {
               echo  " <span class='fz-12 pd-l-10'>Total Fees</span>";
             }
             
           }
         ?>
         </p></h3>

         <h3 class="pd-15 bold" style="border-bottom:1px solid #efefef; ">Exams
          <span>(<?= $course->exam?>)</span>
         </h3>

        <div class="row" style="padding: 20px;">
        
        <div class="col-md-12">
          <div class="row bg-gray">
          <div class="col-md-2 center">
            <?php if ($course->first_year_fee) { ?>
            <p class="mg-0">YEAR 1</p>
            <p><?= $course->first_year_fee;?></p>
            <?php } ?>

          </div>
          <div class="col-md-2 center">
            <?php if ($course->secound_year_fee) { ?>
            <p class="mg-0">YEAR 2</p>
            <p><?= $course->secound_year_fee;?></p>
            <?php } ?>
          </div>
          <div class="col-md-2 center">
            <?php if ($course->third_year_fee) { ?>
            <p class="mg-0">YEAR 3</p>
            <p><?= $course->third_year_fee;?></p>
            <?php } ?>
          </div>
          <div class="col-md-2 center">
            <?php if ($course->fourth_year_fee) { ?>
            <p class="mg-0">YEAR 4</p>
            <p><?= $course->fourth_year_fee;?></p>
            <?php } ?>
          </div>
          <div class="col-md-2 center">
            <?php if ($course->fifth_year_fee) { ?>
            <p class="mg-0">YEAR 5</p>
            <p><?= $course->fifth_year_fee;?></p>
            <?php } ?>
          </div>
          <div class="col-md-2 center">
            <?php if ($course->sixth_year_fee) { ?>
            <p class="mg-0">YEAR 6</p>
            <p><?= $course->sixth_year_fee;?></p>
            <?php } ?>
          </div>
          </div>

        </div>
        </div>


      <div class="row mg-b-10 pd-10">
        <div class="col-md-4">
          <button class="fz-18 pd-10 bg-orange color-white no-border w-100 br-4 apply-on-hover applybtnforcourse" data-toggle="modal" data-target="#applybtnformodal">APPLY NOW<i class="fas fa-envelope-open-text fz-18 pd-5"></i></button>
         <input type="hidden" value="<?php echo $course->course_name; ?>">
        </div>


        <div class="col-md-4">
         <!--  <?php
          if($brochure->brochure_file)
          {

            ?>
         <a href="<?= base_url()?>collegepanel/upload/<?= $brochure->brochure_file;?>" download>
          <button class="fz-18 pd-10 color-orange w-100 br-4 bg-white Download-btn-hover"  style="border:1px solid #008543;"> Download Brochure  <i class="fas fa-download fz-18 pd-5"></i></button>
        </a>
         <?php 
       }
       else{
       ?>
       <button class="fz-18 pd-10 color-orange w-100 br-4 bg-white Download-btn-hover"  style="border:1px solid #008543;"> Download Brochure  <i class="fas fa-download fz-18 pd-5"></i></button>
       <?php
     }
     ?> -->

     <button class="fz-18 pd-10 bg-white color-orange no-border w-100 br-4 apply-on-hover applybtnforcourse" data-toggle="modal" data-target="#applybtnformodal" style="border:1px solid #008543;">Download Brochure <i class="fas fa-download fz-18 pd-5"></i></button>
         <input type="hidden" value="<?php echo $course->course_name; ?>"> 

        </div>

        <div class="col-md-4">
          <button class="fz-18 pd-10 color-white w-100 br-4 counseling-btn-hover applybtnforcourse"  data-toggle="modal" data-target="#applybtnformodal"  style="border:1px solid #008543;background: #3eba9f;">GET FREE COUNSELING <i class="fas fa-users fz-18 pd-5"></i></button>
           <input type="hidden" value="<?php echo $course->course_name; ?>">
        </div>
      </div>
       
      </div>

      <?php
         }
        ?>

       </div>

      </div>
      </div>
      <div class="col-md-3">
         <!--  include('applysidenav.php') -->
      </div>
    </div>
  </div>

      
     
    </div>
    <!-- <--------------------------------------- main Courses & Fees section End--------------------------- -->



<!-- <--------------------- review section start---------------------> 
<div class="main-section-reviews hide-jq" style="margin:20px 0px;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9">
        <div class="inner-col-md-9 br-4 pd-0 mg-10 b1ef" >
         
         <?php
  foreach ($reviewdetail as $key) {
?>
        <div class="row" style="margin-bottom:10px;">
          <div class="col-md-12">

        <div class="inner-col-md-9 br-4 pd-0" style="border:1px solid #000;">

        <h3 class="pd-15 bold" style="margin-top:0;background:#000;border-radius:4px;">
            <span class="color-orange" style="font-size:1em">
             <?php $college_email=$key->college_email;

               $reviewcollegename=$this->db->query("SELECT college_name FROM `college_registration` WHERE college_email='$college_email' ");
               $reviewcollegename->row();
               $reviewcollegenamearray = json_decode(json_encode($reviewcollegename->row()), true);
               echo $reviewcollegenamearray['college_name'];
               
             ?>
            </span>      
        <p class="color-orange" style="float:right;font-size:1.5em;">


             <?php
              $useravragerating = $key->academic + $key->accommodation + $key->faculty + $key->infrastructure + $key->placement + $key->social;
              $useravrageratingfinal=$useravragerating/60*10;
              echo number_format($useravrageratingfinal,1);
             ?>
         <span style="color:#fff;font-size:15px;">/10</span>
         </p>
         </h3>


         <h3 style="margin-left: 20px;margin-bottom: 0;"><?= $key->student_name?></h3>
         <p style="margin-left: 20px;color:gray;margin-bottom: 0;">Course: <?= $key->course?></p>
         <p style="margin-left: 20px;color:gray;">Batch: <?= $key->batch?></p>

        <div class="row" style="padding:15px;">   
        
        <div class="col-md-12" style="border-bottom: 1px solid #000;padding-bottom:10px;">
          <div class="row bg-gray">

          <div class="col-md-2 center">
          <div class="rating">
              <p class="mg-0">
                <i class="fas fa-medal color-orange" style="font-size:3em;"></i>
              </p>
              <p>Academic</p>
              <p style="font-size: 2em;"><?= $key->academic?>/<span style="font-size:15px;">10</span></p>
          </div>
          </div>


          <div class="col-md-2 center">
          <div class="rating">
              <p class="mg-0">
               <i class="fas fa-home color-orange" style="font-size:3em;"></i>
             </p>
             <p>Accommodation</p>
             <p style="font-size: 2em;"><?= $key->accommodation?>/<span style="font-size:15px;">10</span></p>
         </div>
         </div>


          <div class="col-md-2 center">
          <div class="rating">
              <p class="mg-0">
            <i class="fas fa-users color-orange" style="font-size:3em;"></i>
            </p>
            <p>Faculty</p>
            <p style="font-size: 2em;"><?= $key->faculty?>/<span style="font-size:15px;">10</span></p>
          </div>
          </div>


          <div class="col-md-2 center">
          <div class="rating">
             <p class="mg-0">
             <i class="fas fa-building color-orange" style="font-size:3em;"></i>
             </p>
             <p>Infrastructure</p>
             <p style="font-size: 2em;"><?= $key->infrastructure?>/<span style="font-size:15px;">10</span></p>
          </div>
         </div>


          <div class="col-md-2 center">
          <div class="rating">
              <p class="mg-0">
              <i class="fas fa-briefcase color-orange" style="font-size:3em;"></i>
              </p>
              <p>Placement</p>
              <p style="font-size: 2em;"><?= $key->placement?>/<span style="font-size:15px;">10</span></p>
          </div>
          </div>


          <div class="col-md-2 center">
          <div class="rating">
                <p class="mg-0">
                <i class="fas fa-share-alt-square color-orange" style="font-size:3em;"></i>
                </p>
                <p>Social</p>
                <p style="font-size: 2em;"><?= $key->social?>/<span style="font-size:15px;">10</span></p>
          </div>
          </div>


          </div>
       
        </div>
         <div class="col-md-12">
            <p><?= $key->description?></p>
        </div>
        </div>


  
       
      </div>

   
       </div>



      </div>


  <?php
  }
  ?>

           
      </div>
      </div>

      </div>
    </div>
  </div>

  <!-- <--------------------- review section start---------------------> 





</div> 

<!-- <----------------------- main Placement section start---------------->



<div class="main-section-Placement hide-jq" style="margin:20px 0px;display: none;">
  <div class="container-fluid">
    <div class="row">
      <!-- <div class="col-md-9">
        <div class="inner-col-md-9 br-4 pd-0 mg-10 b1ef" >

        <div class="row" style="padding: 20px;">
       
        <div class="col-md-12" style="padding: 1em;">
          <p class="justify"><?=$data->description?></p>
        </div>
        </div>
      </div>
      </div> -->
     
<div class="container-fluid">
    <div class="row">
      <div class="col-md-9">
        <div class="inner-col-md-9 br-4 pd-0 mg-10 b1ef" >
                 <center> <h3 class="pd-15 color-orange" style="border-bottom:1px solid #efefef; ">Placement</h3> </center>

        <h3 class=" col-md-6 pd-15 color-orange" style="border-bottom:1px solid #efefef;font-size:20px;  ">Highest Placement Package </h3>
         <h3 class=" col-md-6 pd-15 color-orange text-right" style="border-bottom:1px solid #efefef;  ">
           <?php 
 
         if($placementdetail->highest_pack==null)
         {
           echo "Not Available";
         }

          else {
                 echo "&#8377;";
                 echo $placementdetail->highest_pack ;
               }
          ?>
</h3>
        
        
       
          
         <h3 class=" col-md-6 pd-15 color-orange" style="border-bottom:1px solid #efefef;font-size:20px; ">Average Placement Package</h3>
       
          <h3 class=" col-md-6 pd-15 color-orange text-right" style="border-bottom:1px solid #efefef; ">
            <?php 
 
           error_reporting(0);
         if($placementdetail->average_pack==null)
         {
           echo "Not Available";
         }

          else {
                 echo "&#8377;";
                 echo $placementdetail->average_pack ;
               }
          ?>
            
          </h3>
      
     
         
      
      </div>
        </div>

         <div class="col-md-3">
        <?php include('applysidenav.php');?>
      </div>
    </div>
  </div>

      
     
     
    </div>
  </div>



</div> 


<!-- <-----------------------Placement section end---------------->


 <!--  <-------------------gallery section start -------------------------> 

<div class="main-section-gallery hide-jq" style="margin:20px 0px;display: none;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9" style="background:#e6e6e6;">
        <div class="inner-col-md-9 br-4 pd-0 mg-10 b1ef" >
         <center> <h3 class="pd-15 color-orange" style="border-bottom:1px solid #efefef; ">Gallery</h3> </center>
        <div class="row" style="padding: 20px;">
     
        <div class="col-md-12">
          <div class="row baguetteBoxOne">
                   <?php 
       foreach ($gallery as $key)
        {
      ?>
           
                 <div class="col-md-3">
    <div class="imageeffect">
      
        <a href="<?= base_url()?>collegepanel/upload/<?= $key->college_image?>">
          <img class="img-responsive" src="<?= base_url()?>collegepanel/upload/<?= $key->college_image?>" alt="College Gallery Image">
        </a>

    </div>
</div>
     <?php
      }
      ?>

 

</div> 

          


          </div>



        </div>
        </div>
      </div>
     
      <div class="col-md-3">
        <?php include('applysidenav.php');?>
      </div>
    </div>
  </div>


  </div>



</div> 
<!-- <-------------------------------------gallery section end----------------------------------------> 


<!-- <--------------------------------------- Hostel section start--------------------------- -->
<div class="main-section-hostel hide-jq" style="margin:20px 0px;display: none;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9 pd-15">
        <div class="row">
          <div class="col-md-12">

        <div class="inner-col-md-9 br-4 pd-0 mg-10 b1ef" >
                  <center> <h3 class="pd-15 color-orange" style="border-bottom:1px solid #efefef; ">Hostel Fees</h3> </center>
        <h3 class="pd-15 bold" style="border-bottom:1px solid #efefef;font-size:17px;  ">Hostel For Boys<p class="fz-22" style="float:right;font-size:17px;">Fee -
      <?php 
 
         if($hostel->boys_fee==null)
         {
           echo "Not Available";
         }

          else {
                 echo " &#8377;";
                 echo $hostel->boys_fee ;
               }
          ?>
           
         </p></h3>
        <h3 class="pd-15 bold" style="font-size:17px; " >Hostel For Girls<p class="fz-22" style="float:right;font-size:17px; ">Fee - 
              <?php 
 
         if($hostel->boys_fee==null)
         {
           echo "Not Available";
         }

          else {
                  echo " &#8377;";
                 echo  $hostel->girls_fee ;
               }
          ?>
           
        <!-- <span class="fz-12 pd-l-10">First Year</span> --></p></h3>
        
        


      
       
      </div>

       </div>

      </div>
      </div>
      <div class="col-md-3">
         <?php include('applysidenav.php');?>
      </div>
    </div>
  </div>

      
     
    </div>


<!-- <--------------------------------------- Hostel section end--------------------------- -->
<!-- <--------------------------------------- scholarship section start--------------------------- -->

<div class="main-section-scholarship hide-jq" style="margin:20px 0px;display: none;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9 pd-15">
        <div class="row">
          <div class="col-md-12">

        <div class="inner-col-md-9 br-4 pd-0 mg-10 b1ef" >
        <center> <h3 class="pd-15 color-orange" style="border-bottom:1px solid #efefef; ">Scholarship</h3> </center>
       
       <div class="text pd-10">
         <?php
          echo  $scholarshipdata->scholarship ;
          ?>
       </div>
        
        
        


      
       
      </div>

       </div>

      </div>
      </div>
      <div class="col-md-3">
         <?php include('applysidenav.php');?>
      </div>.
    </div>
  </div>

      
     
    </div>

<!-- <--------------------------------------- scholarship section end--------------------------- -->




<!-- <-------------------------------------- main faculty section start-------------------- -->
<div class="main-section-faculty hide-jq" style="margin:20px 0px;display: none;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9 pd-15">
        <div class="inner-col-md-9 br-4 pd-0 mg-10 b1ef" >
        <h3 class="pd-15 color-orange text-center" style="border-bottom:1px solid #efefef; ">FACULTY DETAILS</h3>
<?php 
 foreach ($facultydetail as $facultydetail) 
 {
?>

               <div class="row mg-10 mg-t-0" style="border-bottom: 1px solid #e6e6e6;">

          <div class="col-md-6">
            <h5 class="pd-15 pd-b-0 mg-b pd-t-0 mg-b-0 fz-15"><?= $facultydetail->faculty_name;?></h5>
            <p class="color-orange bold pd-15 pd-b-0 pd-t-0 fz-12"><?= $facultydetail->faculty_department;?></p>
          </div>

          <div class="col-md-6 pd-l-5p" style="border-left: 1px dotted #e6e6e6;">
            <p class="mg-b-0">Contact this faculty</p>
             <p class="pd-b-0 pd-t-0 fz-12 mg-b-0"><i class="fas fa-paper-plane" style="padding-right: 5px;"></i>Email:<span class="color-gray"><?= $facultydetail->faculty_email;?></span></p>
             <!-- <p class="pd-b-0 pd-t-0 fz-12 mg-b-0"><i class="fas fa-phone-alt" style="padding-right: 5px;"></i>Mobile No.:<span class="color-gray"><?= $key->faculty_Contact_no;?></span></p> -->
          </div>
          </div>
          <div class="clearfix"> </div>
       
<?php
}
?>

 


      </div>
    </div>
    
      <div class="col-md-3">
         <?php include('applysidenav.php');?>
      </div>
    </div>
  </div>

      
     
    </div>

 

<!-- <-------------------------------------- main faculty section end-------------------- -->


<!-- <-------------------------------------- news section start-------------------- -->
<div class="main-section-news hide-jq" style="margin:20px 0px;display: none;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9 pd-15">
        <div class="inner-col-md-9 br-4 pd-0 mg-10 b1ef" >
        <h3 class="pd-15 color-orange" style="border-bottom:1px solid #efefef; ">NEWS </h3>
        <div class="row">
          <div class="col-md-4">

          </div>
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
          </div>
        </div>
         
        <p class="color-gray pd-15 pd-b-0 mg-b-0" style="padding-top: 0;margin-left:25px;">DIRECTOR</p>

        <p class="pd-15 bold pd-b-0 mg-b-0">OTHER FACULTY DETAILS</p>


        <div class="row mg-10 mg-t-0" style="border-bottom: 1px solid #e6e6e6;">
          <div class="col-md-6">
            <h5 class="pd-15 pd-b-0 mg-b pd-t-0 mg-b-0 fz-15">Dr. Aarti Sharma</h5>
            <p class="color-orange bold pd-15 pd-b-0 pd-t-0 fz-12">ASSISTANT PROFESSOR, DEPARTMENT OF RHEUMATOLOGY</p>
          </div>
          <div class="col-md-6 pd-l-5p" style="border-left: 1px dotted #e6e6e6;">
            <p class="mg-b-0">Contact this faculty</p>
             <p class="pd-b-0 pd-t-0 fz-12 mg-b-0"><i class="fas fa-paper-plane" style="padding-right: 5px;"></i>Email:<span class="color-gray">aartimed@gmail.com</span></p>
             <p class="pd-b-0 pd-t-0 fz-12 mg-b-0"><i class="fas fa-phone-alt" style="padding-right: 5px;"></i>Mobile No.:<span class="color-gray">aartimed@gmail.com</span></p>
          </div>
        </div>

        <div class="row mg-10 mg-t-0" style="border-bottom: 1px solid #e6e6e6;">
          <div class="col-md-6">
            <h5 class="pd-15 pd-b-0 mg-b pd-t-0 mg-b-0 fz-15">Prof. Harpal Singh</h5>
            <p class="color-orange bold pd-15 pd-b-0 pd-t-0 fz-12">PROFESSOR, DEPARTMENT OF BIOMEDICAL ENGINEERING</p>
          </div>
          <div class="col-md-6 pd-l-5p" style="border-left: 1px dotted #e6e6e6;">
            <p class="mg-b-0">Contact this faculty</p>
             <p class="pd-b-0 pd-t-0 fz-12 mg-b-0"><i class="fas fa-paper-plane" style="padding-right: 5px;"></i>Email:<span class="color-gray">harpal@cbme.iitd.ac.in</span></p>
             <p class="pd-b-0 pd-t-0 fz-12 mg-b-0"><i class="fas fa-phone-alt" style="padding-right: 5px;"></i>Mobile No.:<span class="color-gray">8888888888</span></p>
          </div>
        </div>

        <div class="row mg-10 mg-t-0" style="border-bottom: 1px solid #e6e6e6;">
          <div class="col-md-6">
            <h5 class="pd-15 pd-b-0 mg-b pd-t-0 mg-b-0 fz-15">Dr. S. N. Dwivedi</h5>
            <p class="color-orange bold pd-15 pd-b-0 pd-t-0 fz-12">PROFESSOR, DEPARTMENT OF BIOSTATISTICS</p>
          </div>
          <div class="col-md-6 pd-l-5p" style="border-left: 1px dotted #e6e6e6;">
            <p class="mg-b-0">Contact this faculty</p>
             <p class="pd-b-0 pd-t-0 fz-12 mg-b-0"><i class="fas fa-paper-plane" style="padding-right: 5px;"></i>Email:<span class="color-gray">dwivedi7@gmail.com</span></p>
             <p class="pd-b-0 pd-t-0 fz-12 mg-b-0"><i class="fas fa-phone-alt" style="padding-right: 5px;"></i>Mobile No.:<span class="color-gray">aartimed@gmail.com</span></p>
          </div>
        </div>

        <div class="row mg-10 mg-t-0" style="border-bottom: 1px solid #e6e6e6;">
          <div class="col-md-6">
            <h5 class="pd-15 pd-b-0 mg-b pd-t-0 mg-b-0 fz-15">Dr. V. Sreenivas</h5>
            <p class="color-orange bold pd-15 pd-b-0 pd-t-0 fz-12">PROFESSOR, DEPARTMENT OF BIOSTATISTICS</p>
          </div>
          <div class="col-md-6 pd-l-5p" style="border-left: 1px dotted #e6e6e6;">
            <p class="mg-b-0">Contact this faculty</p>
             <p class="pd-b-0 pd-t-0 fz-12 mg-b-0"><i class="fas fa-paper-plane" style="padding-right: 5px;"></i>Email:<span class="color-gray">sreenivas_vishnu@yahoo.com</span></p>
             <p class="pd-b-0 pd-t-0 fz-12 mg-b-0"><i class="fas fa-phone-alt" style="padding-right: 5px;"></i>Mobile No.:<span class="color-gray">aartimed@gmail.com</span></p>
          </div>
        </div>

        <div class="row mg-10 mg-t-0" style="border-bottom: 1px solid #e6e6e6;">
          <div class="col-md-6">
            <h5 class="pd-15 pd-b-0 mg-b pd-t-0 mg-b-0 fz-15">Dr. Hrudananda Mallick</h5>
            <p class="color-orange bold pd-15 pd-b-0 pd-t-0 fz-12">PROFESSOR, DEPARTMENT OF PHYSIOLOGY</p>
          </div>
          <div class="col-md-6 pd-l-5p" style="border-left: 1px dotted #e6e6e6;">
            <p class="mg-b-0">Contact this faculty</p>
             <p class="pd-b-0 pd-t-0 fz-12 mg-b-0"><i class="fas fa-paper-plane" style="padding-right: 5px;"></i>Email:<span class="color-gray">drhmallick@yahoo.com</span></p>
             <p class="pd-b-0 pd-t-0 fz-12 mg-b-0"><i class="fas fa-phone-alt" style="padding-right: 5px;"></i>Mobile No.:<span class="color-gray">aartimed@gmail.com</span></p>
          </div>
        </div>

        <div class="row mg-10 mg-t-0" style="border-bottom: 1px solid #e6e6e6;">
          <div class="col-md-6">
            <h5 class="pd-15 pd-b-0 mg-b pd-t-0 mg-b-0 fz-15">Prof. Anita Saxena</h5>
            <p class="color-orange bold pd-15 pd-b-0 pd-t-0 fz-12">PROFESSOR, DEPARTMENT OF CARDIOLOGY</p>
          </div>
          <div class="col-md-6 pd-l-5p" style="border-left: 1px dotted #e6e6e6;">
            <p class="mg-b-0">Contact this faculty</p>
             <p class="pd-b-0 pd-t-0 fz-12 mg-b-0"><i class="fas fa-paper-plane" style="padding-right: 5px;"></i>Email:<span class="color-gray">anitasaxena@hotmail.com</span></p>
             <p class="pd-b-0 pd-t-0 fz-12 mg-b-0"><i class="fas fa-phone-alt" style="padding-right: 5px;"></i>Mobile No.:<span class="color-gray">aartimed@gmail.com</span></p>
          </div>
        </div>
      </div>

    </div>
    
      <div class="col-md-3">
         <?php include('applysidenav.php');?>
      </div>
    </div>
  </div>

      
     
    </div>

 

<!-- <-------------------------------------- news section end-------------------- -->




  </div>



</div> 






<!-- <--------------------------------------- main Courses & Fees section end--------------------------- -->
<?php include('footer.php');?>

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
     <form  action="<?=base_url("index.php/User/insertcollegeapply/$data->id/$data->college_name")?>" method="post"  >
      <?php   if($this->session->userdata('email')){ 
                                        $email=$this->session->userdata('email');
                                 $row=$this->db->query("select * from user_registration where email='$email'");
                                       $userdata=$row->row();
                                         ?>
     <div class="row">
   
       <div class="col-md-4">
        
        <label class="color-gray mg-0">FULL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="user_name" value="<?=$userdata->name?>">
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
        <label class="color-gray mg-0">FULL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="user_name" required="">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">EMAIL ID</label>
         <input type="text" class="form-control color-orange modal-form" name="user_email" required>
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
            foreach ($coursepageapply as $key)
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
          <select class="form-control color-orange modal-form-select selectstate" required="" name="user_city" readonly>
             <option><?=$data->state?> </option>
              
         </select> 
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR CITY</label>
        <select class="form-control color-orange modal-form-select postcities" required="" name="user_region" readonly>
           <option><?=$data->city?> </option>
         </select>
       </div>
     </div>  
         <input type="hidden" name="college_email" value="<?=$data->college_email?>"> 
          <input type="hidden" name="college_name" value="<?=$data->college_name?>"> 
          <input type="hidden" name="college_id" value="<?=$data->id?>"> 

  



  
      <div class="modal-footer">
        <center> <button type="SUBMIT" class="btn color-white bg-orange pd-15" style="width:30%;">SUBMIT</button> </center>
      </div>

         </form>
       </div>
     </div>
   </div>
 </div>

<!-- Modal -->


<!-- Modal -->
 <div class="modal fade" id="applybtnformodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
     <form  action="<?=base_url("index.php/User/insertcollegeapply/$data->id/$data->college_name")?>" method="post">
      <?php   if($this->session->userdata('email')){ 
                                        $email=$this->session->userdata('email');
                                 $row=$this->db->query("select * from user_registration where email='$email'");
                                       $userdata=$row->row();
                                         ?>
     <div class="row">
   
       <div class="col-md-4">
        
        <label class="color-gray mg-0">FULL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="user_name" value="<?=$userdata->name?>">
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
        <label class="color-gray mg-0">FULL NAME</label>
         <input type="text" class="form-control color-orange modal-form" name="user_name" required="">
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">EMAIL ID</label>
         <input type="text" class="form-control color-orange modal-form" name="user_email" required>
       </div>
       <div class="col-md-4">
          <label class="color-gray mg-0">MOBILE NO.</label>
          <input pattern="[6-9]{1}[0-9]{9}" type="text" required="" name="user_contact" id="txtPhoneNo" onkeypress="return isNumber(event)" placeholder="Enter Your Phone Number" class=" form-control color-orange modal-form" maxlength="10" type="text">
       </div>
     </div>  
<?php } ?>

      <div class="row mg-t-25">
       <div class="col-md-4">

        <label class="color-gray">CHOOSE PREFERRED COURSE </label>
         <input type="text" class="form-control color-orange modal-form applybtnforcoursehere" required="" name="user_course" readonly>
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR STATE</label>
          <select class="form-control color-orange modal-form-select selectstate" required="" name="user_city" readonly>
            <option><?=$data->state?> </option>
         </select> 
       </div>

       <div class="col-md-4">
          <label class="color-gray">SELECT YOUR CITY </label>
        <select class="form-control color-orange modal-form-select postcities" required="" name="user_region" readonly>
          <option><?=$data->city?> </option>
         </select>
       </div>
     </div>   

          <input type="hidden" name="college_email" value="<?=$data->college_email?>"> 
          <input type="hidden" name="college_name" value="<?=$data->college_name?>"> 
          <input type="hidden" name="college_id" value="<?=$data->id?>"> 
  


  
      <div class="modal-footer">
        <center> <button type="SUBMIT" class="btn color-white bg-orange pd-15" style="width:30%;">SUBMIT</button> </center>
      </div>

         </form>
       </div>
     </div>
   </div>
 </div>

<!-- Modal -->
<script src="<?= base_url()?>assets/js/baguetteBox.min.js"></script>




<script>
  $('.selectstate').change(function(){
     var statename= $('.selectstate').val();

            $.ajax({
        url: "<?= base_url("index.php/User/fetchcities")?>",
        type: "POST",
         data: ({ title:statename }),
        success: function (response) {
// alert(response);
             $(".postcities").html(response);
       
        },
        error: function(jqXHR, textStatus, errorThrown) {
           alert(errorThrown);
        }
    });
  })
</script>

<script>
  $('.applybtnforcourse').click(function(){
      var course = $(this).next().val();
    $(".applybtnforcoursehere").attr("value",course);

      
  })
</script>

<script>
   <?php
     if($this->session->flashdata('insert_college_apply_alt'))
      { 
        ?> 
swal("Applied Successfully", "", "success");
       
<?php 
}
 ?>
</script>
