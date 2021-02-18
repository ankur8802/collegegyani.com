
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
  .finishhovereffect:hover
  {
    border: none!important;
  }


</style>
<!--header start end--> 

<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
     <img src="<?= base_url()?>assets/images/2.gif" alt="">
  </div>
</div> 

<div class="inner-wrap listing" style="background-color:#f3f3f3;" >
  <div class="container-fluid">
  
      <div class="col-md-12">


        <div class="listService">
 
  <?php
 foreach ($exams as $key)
  {

  ?>
    <div class="col-md-3 col-sm-4 col-6 text-center">
     <div class="feature  feature-min-h finishhovereffect" style="box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;margin-top:2em;padding:5px;min-height: 340px;">
          <div class="feat-bg text-center">
            <h3> <?= $key->title;?> </h3>
            <p class="fz-14" style="color: #9d9d9d;"> <!-- <?= $key->short_desc;?>  -->
                <?php
                     $string = word_limiter($key->short_desc,15);
                        echo $string;
                ?>
             </p>
            <a href="<?= base_url("exam-details/$key->id/".str_replace(' ','-',$key->title))?>">   <p class="read-more"><span class="underline-on-hover">read more</span></p></a>
          </div>
          <div class="row" style="margin: 0">
           
            <div class="col-md-12 text-center">
              <h5 class="color-white bg-orange pd-5">Result</h5>
              <div class="result">
                <p><a href="<?= base_url("exam-details/$key->id/".str_replace(' ','-',$key->title))?>" class="underline-on-hover"><?= $key->result;?></a></p>
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