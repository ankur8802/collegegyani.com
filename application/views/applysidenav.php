<div class="inner-sec-col-md-3 br-4 pd-0 mg-10 mg-t-25">
       <!--  <form action="<?=base_url('index.php/User/collegeapply')?>" method="post">
                                            <?php
                                            if($this->session->userdata('email')){
                                      
                                ?> 
                                <input type="hidden" name="name" value="<?= $userdata->name?>" >
                                  <input type="hidden" name="phone" value="<?= $userdata->phone?>" >
                                    <input type="hidden" name="email" value="<?php echo $this->session->userdata('email');?>" >

                                      <?php } ?>
                                   
                                    <input type="hidden"  name="college_id" value="<?= $data->id?>">
                                    <input type="hidden"  name="college_email" value="<?= $data->college_email?>">
                                    <input type="hidden"  name="college_name" value="<?= $data->college_name?>">
                                     <input type="hidden"  name="course" value="<?= $data->course?>"> -->
                                     
                                        <?php
                                        $email=$this->session->userdata('email');

                                        $sql=$this->db->query("select * from applied_college where email='$email' and college_id='$data->id'");
                                        if($sql->row())
                                        {
                                            ?>
                                        
                                         <button class="fz-18 pd-10 bg-orange color-white no-border w-100 br-4"  name=""  disabled="" >Applied</button>
                                         <?php
                                     }

    else if ($this->session->userdata('email'))
    {
       
    ?> 
       <button class="fz-18 pd-10 bg-orange color-white no-border w-100 br-4" value="<?=$data->id?>" data-toggle="modal" data-target="#apply-now-modal">APPLY NOW<i class="fas fa-envelope-open-text fz-18 pd-5"></i></button>
   <?php
    }
    else

    {
      ?>  
      <button class="fz-18 pd-10 bg-orange color-white no-border w-100 br-4" value="<?=$data->id?>" data-toggle="modal" data-target="#apply-now-modal">APPLY NOW<i class="fas fa-envelope-open-text fz-18 pd-5"></i></button>
    <!-- <a href="" data-toggle="modal" data-target="#apply-now-modal" style="color:black; ">APPLY NOW<i class="fas fa-envelope-open-text fz-18 pd-5"></i></a> -->
  <?php
    }
?>
              </form>  

        


        <!-- <button class="fz-18 pd-10 color-orange w-100 br-4 bg-white mg-t-25"  style="border:1px solid #008543;">Download Brochure <i class="fas fa-download fz-18 pd-5"></i></button> -->
<!--         <div class="notification mg-t-25 br-4" style="border:1px solid #008543;">
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