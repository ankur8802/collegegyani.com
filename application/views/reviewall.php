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
  
      .rating 
      {
        margin:5px;
        padding:5px;
        border: 1px solid #856819;
        border-radius: 32px;
        background: linear-gradient(111.95647678511193deg, rgba(250, 233, 155,1) 5.533854166666667%,rgba(229, 151, 64,1) 96.67968749999999%)

      }
      .rating p
      {
        margin: 0;
      }
    </style>
    
     <title>All Reviews</title>
<style type="text/css">
  .reviewh3 a:hover
  {
    text-decoration: none;
    border-bottom:1px solid #ff7a02;
  }
  @media only screen and (max-width:710px)
  {
    .ratingfloat
    {
      float: none!important;
    }
  }
</style>
<div class="container" style="margin-top:54px;margin-bottom:20px;">

<?php
  foreach ($reviewall as $key) {
?>
        <div class="row" style="margin-bottom:10px;">
          <div class="col-md-12">

        <div class="inner-col-md-9 br-4 pd-0" style="border:1px solid #000;">

        <h3 class="pd-15 bold reviewh3" style="margin-top:0;background:#000;border-radius:4px;">
           <?php $college_email=$key->college_email;

               $reviewcollegename=$this->db->query("SELECT * FROM `college_registration` WHERE college_email='$college_email'");
               $reviewcollegename->row();
               $reviewcollegenamearray = json_decode(json_encode($reviewcollegename->row()), true);              
             ?>
            <a href="<?= base_url("college/".$reviewcollegenamearray['id']."/".str_replace(' ','-',$reviewcollegenamearray['college_name']))?>">
                 <h3 style="display: inline;" class="color-orange" style="font-size:1em"><?= $reviewcollegenamearray['college_name']?>  (<?= $reviewcollegenamearray['college_name_short']?>)</h3>
              </a>
         <p class="color-orange ratingfloat" style="float:right;font-size:1.5em;">

             <?php
              $useravragerating = $key->academic + $key->accommodation + $key->faculty + $key->infrastructure + $key->placement + $key->social;
              $useravrageratingfinal=$useravragerating/60*10;
              echo number_format($useravrageratingfinal,1);
             ?>
         <span style="color:#fff;font-size:15px;">/10</span>
         </p>
         </h3>
        <div class="row">
          <div class="col-md-4 text-left">
              <h3 style="margin-left: 20px;margin-bottom: 0;margin-top:0;"><?= $key->student_name?></h3>
          </div>
          <div class="col-md-4 text-center">
                <p style="margin-left: 20px;color:gray;margin-bottom: 0;">Course: <?= $key->course?></p>
          </div>
          <div class="col-md-4 text-right">
               <p style="margin-right: 20px;color:gray;">Batch: <?= $key->batch?></p>
          </div>
        </div>
         
         

        <div class="row" style="padding:15px;">   
        
        <div class="col-md-12" style="border-bottom: 1px solid #000;padding-bottom:10px;">
          <div class="row bg-gray">

          <div class="col-md-2 center">
          <div class="rating">
              <p class="mg-0">
                <i class="fas fa-medal color-orange" style="font-size:2em;"></i>
              </p>
              <p>Academic</p>
              <p style="font-size:1em;"><?= $key->academic?>/<span style="font-size:15px;">10</span></p>
          </div>
          </div>


          <div class="col-md-2 center">
          <div class="rating">
              <p class="mg-0">
               <i class="fas fa-home color-orange" style="font-size:2em;"></i>
             </p>
             <p>Accommodation</p>
             <p style="font-size:1em;"><?= $key->accommodation?>/<span style="font-size:15px;">10</span></p>
         </div>
         </div>


          <div class="col-md-2 center">
          <div class="rating">
              <p class="mg-0">
            <i class="fas fa-users color-orange" style="font-size:2em;"></i>
            </p>
            <p>Faculty</p>
            <p style="font-size:1em;"><?= $key->faculty?>/<span style="font-size:15px;">10</span></p>
          </div>
          </div>


          <div class="col-md-2 center">
          <div class="rating">
             <p class="mg-0">
             <i class="fas fa-building color-orange" style="font-size:2em;"></i>
             </p>
             <p>Infrastructure</p>
             <p style="font-size:1em;"><?= $key->infrastructure?>/<span style="font-size:15px;">10</span></p>
          </div>
         </div>


          <div class="col-md-2 center">
          <div class="rating">
              <p class="mg-0">
              <i class="fas fa-briefcase color-orange" style="font-size:2em;"></i>
              </p>
              <p>Placement</p>
              <p style="font-size:1em;"><?= $key->placement?>/<span style="font-size:15px;">10</span></p>
          </div>
          </div>


          <div class="col-md-2 center">
          <div class="rating">
                <p class="mg-0">
                <i class="fas fa-share-alt-square color-orange" style="font-size:2em;"></i>
                </p>
                <p>Social</p>
                <p style="font-size:1em;"><?= $key->social?>/<span style="font-size:15px;">10</span></p>
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




<?php include('footer.php');?>



