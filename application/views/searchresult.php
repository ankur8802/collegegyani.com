
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
      <title>College</title>

<!--header start end--> 

<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h1>Collegegyani.com</h1>
  </div>
</div> 
<!--inner heading end--> 
<!-- <section style="background-color:#f3f3f3;">
<div class="container">
  <div class="row">
    <div class="col-md-12" style="padding-top:30px;">
      <center><img src="<?= base_url()?>/assets/images/banner.jpg" alt="" ></center>
    </div>
  </div>
</div>
</section> -->


<!--listing start-->
<div class="inner-wrap listing" style="background-color:#f3f3f3;" >
  <div class="container-fluid">
      <div class="col-md-3 col-sm-4 desktop-version" style="position: sticky;top: 0; ">
        <div class="leftSidebar" style="background:#fff; ">
          <h3>Search Listings</h3>
          <div class="sidebarpad">
            <form>
              <h4>By Keyword</h4>
              <div class="input-wrap">
                <input type="text" name="keyword" placeholder="Search Keyword" class="form-control">
              </div>
              <h4>Categories</h4>
              <div class="input-wrap">
                <select name="category" class="form-control">
                  <option>Category </option>
                  <option value="mobile">Management</option>
                  <option value="laptop">Engineering</option>
                  <option value="car">Medical</option>
                  <option value="bike">Agriculture</option>
                  <option value="camra">Architecture</option>
                  <option value="pet">Aviation</option>
                  <option value="pet">Commerce</option>
                  <option value="pet">Dental</option>
                  <option value="pet">Design</option>
                  <option value="pet">Education</option>
                  <option value="pet">Law</option>
                  <option value="pet">Paramedical</option>
                  <option value="pet">Pharmacy</option>
                  <option value="pet">Science</option>
                  <option value="pet">Computer Applications</option>
                  <option value="pet">Mass Communications</option>
                  <option value="pet">Hotel Management</option>


                </select>
              </div>
              <h4>City</h4>
              <div class="input-wrap">
                <select name="city" class="form-control">
                  <option>Select Cities </option>
                  <option value="01">Noida</option>
                  <option value="02">Delhi</option>
                  <option value="03">Ghaziabad</option>
                  <option value="04">Faridabad</option>
                  <option value="05">Gurugram</option>
                </select>
              </div>
              <h4>Fees Range</h4>
              <div class="input-wrap">
                <ul class="check">
                  <li>
                    <input type="checkbox" value="Almost Like New" id="price1">
                    <label for="price1"></label><span>100k to 150k</span>
                  </li>
                  <li>
                    <input type="checkbox" value="Almost Like New" id="price2">
                    <label for="price2"></label><span>150k to 250k</span>
                  </li>
                  <li>
                    <input type="checkbox" value="Almost Like New" id="price3">
                    <label for="price3"></label><span>250k to 300k</span>
                  </li>
                  <li>
                    <input type="checkbox" value="Almost Like New" id="price4">
                    <label for="price4"></label><span>300k to 350k</span>
                  </li>
                  <li>
                    <input type="checkbox" value="Almost Like New" id="price5">
                    <label for="price5"></label><span>350k to 400k</span>
                  </li>
                </ul>
              </div>
              <h4>Education Type</h4>
              <div class="input-wrap">
               <!--  <ul class="check">
                  <li>
                    <input type="checkbox" value="Almost Like New" id="price6">
                    <label for="price6">Full Time<span>15241</span></label>
                  </li>
                  <li>
                    <input type="checkbox" value="Almost Like New" id="price7">
                    <label for="price7">Part Time<span>25455</span></label>
                  </li>
                  <li>
                    <input type="checkbox" value="Almost Like New" id="price7">
                    <label for="price7">Correspondence <span>45125</span></label>
                  </li>
                </ul> -->
                <div class="input-wrap">
                <select name="city" class="form-control">
                  <option>Select Type </option>
                  <option value="01">Full Time</option>
                  <option value="02">Part Time</option>
                  <option value="03">Correspondence</option>
                  
                </select>
              </div>
              </div>
             <!--  <h4>Area</h4>
              <div class="input-wrap">
                <input type="text" name="area" placeholder="Minimum Area" class="form-control">
                <input type="text" name="area" placeholder="Maximum Area" class="form-control">
              </div> -->
              <div class="sub-btn">
                <input type="submit" class="sbutn" value="Search Filter">
              </div>
            </form>
            <!-- <div class="ad"><img src="images/ad.jpg" alt=""></div> -->
          </div>
        </div>
      </div>
      <div class="col-md-9 col-sm-8">
         <!-- <div class="sortbybar">
          <div class="sortbar">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-8">
                <div class="input-group"> <span class="input-group-addon" id="basic-addon3">Sort By</span>
                  <select class="form-control">
                    <option>Popularity</option>
                    <option>Reviews Rating</option>
                    <option>Highest Fees</option>
                    <option>Lowest Fees</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-4">
                
              </div>
            </div>
          </div>
        </div>  -->

        <ul class="listService">
 

          <?php
          foreach ($data as $key) {
            ?>
          <li class="col-md-4"style="padding: 5px!important;"  >
            
              
             <div class="inner-col-md-3 b1e6 br-4">
        <div class="feature-image" style="height:160px;background:linear-gradient( rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url('<?php echo base_url("upload/". $key->image)?>');background-size:cover; ">

         
         
       

           <div class="title">
          <div class="flex" style="display: flex;">

              <div class="flex-con" style="flex-basis:10%;margin: 5px;">
              <img src="<?= base_url()?>/upload/<?= $key->logo?>" alt="College Logo">
            </div>
            <div class="flex-con" style="flex-basis:90%;">
                   <a href="<?= base_url("index.php/University/".$key->id."/".str_replace(' ','-',$key->college_name))?>">
                 <h3 style="display: inline;" class="fz-14 mg-5"><?= $key->college_name?></h3>
               </a>

        <p class="color-white mg-0">
          <i class="fa fa-map-marker" aria-hidden="true" style="margin: 5px;"></i><?= $key->city?>
        </p>

            </div>
            
        
          </div>
        </div>



         <!--  <div class="price"><img src="<?= base_url()?>/assets/images/college-logo.jpg" alt=""></div> -->
        </div>
        

        <div class="" style="border-top: 1px solid #e6e6e6">
        
         <!--  <a href="<?= base_url("index.php/University/".$res->id."/".str_replace(' ','-',$res->college_name))?>"><span style=""><i class="fa fa-check-circle-o" aria-hidden="true" style="margin:5px;"></i>VIEW ALL COURSES & FEES
          </span></a> -->



       
        </div>

        <div class="college-detail-info">
          <div class="row">
            <div class="col-md-4">
              <div class="inner-col-md-4" style="padding: 1em;border-right:1px solid #929292">
                 <p class=" color-orange"> &#8377;16.47L  </p>
                 <p class=" color-orange"> <span></span> </p>
              </div>
            </div>
            <div class="col-md-4">
               <div class="inner-col-md-4" style="padding: 1em;border-right:1px solid #929292">
              <p class="color-orange"> MBA </p>
            </div>
            </div>
            <div class="col-md-4">
               <div class="inner-col-md-4" style="padding: 1em;">
                  <p class=" color-orange"> <i class="far fa-star  color-orange"></i> 3.7/5</p>
               </div>
            </div>
          </div>
        </div>

        <div class="college-detail-info-btn">
          <div class="row">

          <div class="col-md-6" style="padding-right: 0;">
           <button type="submit" class="clickgetid btn-info no-border color-white w-100 pd-10 "  value="<?=$key->id?>"><i class="fa fa-file color-white" aria-hidden="true"></i>APPLY NOW</button>

            <button type="submit" class="btn-info no-border color-white w-100 pd-10 clickforsubmit" data-toggle="modal" data-target="#apply-now-modal" style="display: none;"><i class="fa fa-file color-white" aria-hidden="true"></i>APPLY NOW</button>
          </div>

         

          <div class="col-md-6" style="padding-left:0; ">
             <button type="submit" class="clickgetid btn-primary no-border color-white w-100" style="padding:9px;"><i class="fa fa-download color-white" aria-hidden="true"></i>BROCHURE</button>
              <button type="submit" class="btn-info no-border color-white w-100 pd-10 clickforsubmit" data-toggle="modal" data-target="#apply-now-modal" style="display: none;"><i class="fa fa-file color-white" aria-hidden="true"></i>APPLY NOW</button>
          </div>
          </div>
        </div>



        </div>
          </li>

           <div class="clear-fix"></div>
            <?php } ?>
           


         <!--  <li>
            <div class="listWrpService">
              <div class="row">
                <div class="col-md-3 col-sm-3">
                  <div class="listImg"><img src="<?= base_url()?>/assets/images/bhu.jpg" alt=""></div>
                </div>
                <div class="col-md-9 col-sm-9">
                  <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-8">
                      <h3><a href="<?= base_url('index.php/User/detail')?>">Banaras Hindu University</a></h3>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <div class="dollar"><i class="far fa-bookmark"></i></div>
                    </div>
                  </div>
                  <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>Varanasi, Uttar Pradesh</div>
                  <p>Banaras Hindu University, formerly Central Hindu College, is a public central university located in Varanasi, Uttar Pradesh. It was established in 1916 by Madan Mohan Malaviya and Annie Besant. With over 30,000 students residing in campus, it claims the title of largest residential university in Asia.</p>
                  <div class="view-btn"><a href="<?= base_url('index.php/User/detail')?>">View Details</a></div>
                </div>
              </div>
            </div>
          </li> -->
         <!--  <li>
           <div class="listWrpService">
              <div class="row">
                <div class="col-md-3 col-sm-3">
                  <div class="listImg"><img src="<?= base_url()?>/assets/images/aiims.jpg" alt=""></div>
                </div>
                <div class="col-md-9 col-sm-9">
                  <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-8">
                      <h3><a href="<?= base_url('index.php/User/detail')?>">All India Institute of Medical Sciences</a></h3>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <div class="dollar"><i class="far fa-bookmark"></i></div>
                    </div>
                  </div>
                  <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>New Delhi, Delhi</div>
                  <p>AIIMS Delhi was ranked first among medical colleges in India in 2019 by the National Institutional Ranking Framework in 2019 </p>
                  <div class="view-btn"><a href="<?= base_url('index.php/User/detail')?>">View Details</a></div>
                </div>
              </div>
            </div>
          </li>-->
          <!-- <li> 
           <div class="listWrpService">
              <div class="row">
                <div class="col-md-3 col-sm-3">
                  <div class="listImg"><img src="<?= base_url()?>/assets/images/bhu.jpg" alt=""></div>
                </div>
                <div class="col-md-9 col-sm-9">
                  <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-8">
                      <h3><a href="<?= base_url('index.php/User/detail')?>">Banaras Hindu University</a></h3>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <div class="dollar"><i class="far fa-bookmark"></i></div>
                    </div>
                  </div>
                  <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>Varanasi, Uttar Pradesh</div>
                  <p>Banaras Hindu University, formerly Central Hindu College, is a public central university located in Varanasi, Uttar Pradesh. It was established in 1916 by Madan Mohan Malaviya and Annie Besant. With over 30,000 students residing in campus, it claims the title of largest residential university in Asia.</p>
                  <div class="view-btn"><a href="<?= base_url('index.php/User/detail')?>">View Details</a></div>
                </div>
              </div>
            </div>
          </li> -->
          <!-- <li>
            <div class="listWrpService">
              <div class="row">
                <div class="col-md-3 col-sm-3">
                  <div class="listImg"><img src="<?= base_url()?>/assets/images/aiims.jpg" alt=""></div>
                </div>
                <div class="col-md-9 col-sm-9">
                  <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-8">
                      <h3><a href="<?= base_url('index.php/User/detail')?>">All India Institute of Medical Sciences</a></h3>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <div class="dollar"><i class="far fa-bookmark"></i></div>
                    </div>
                  </div>
                  <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>New Delhi, Delhi</div>
                  <p>AIIMS Delhi was ranked first among medical colleges in India in 2019 by the National Institutional Ranking Framework in 2019 </p>
                  <div class="view-btn"><a href="<?= base_url('index.php/User/detail')?>">View Details</a></div>
                </div>
              </div>
            </div>
          </li> -->
          <!-- <li>
            <div class="listWrpService">
              <div class="row">
                <div class="col-md-3 col-sm-3">
                  <div class="listImg"><img src="<?= base_url()?>/assets/images/bhu.jpg" alt=""></div>
                </div>
                <div class="col-md-9 col-sm-9">
                  <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-8">
                      <h3><a href="<?= base_url('index.php/User/detail')?>">Banaras Hindu University</a></h3>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <div class="dollar"><i class="far fa-bookmark"></i></div>
                    </div>
                  </div>
                  <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>Varanasi, Uttar Pradesh</div>
                  <p>Banaras Hindu University, formerly Central Hindu College, is a public central university located in Varanasi, Uttar Pradesh. It was established in 1916 by Madan Mohan Malaviya and Annie Besant. With over 30,000 students residing in campus, it claims the title of largest residential university in Asia.</p>
                  <div class="view-btn"><a href="<?= base_url('index.php/User/detail')?>">View Details</a></div>
                </div>
              </div>
            </div>
          </li> -->
          <!-- <li>
            <div class="listWrpService">
              <div class="row">
                <div class="col-md-3 col-sm-3">
                  <div class="listImg"><img src="<?= base_url()?>/assets/images/aiims.jpg" alt=""></div>
                </div>
                <div class="col-md-9 col-sm-9">
                  <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-8">
                      <h3><a href="<?= base_url('index.php/User/detail')?>">All India Institute of Medical Sciences</a></h3>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <div class="dollar"><i class="far fa-bookmark"></i></div>
                    </div>
                  </div>
                  <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>New Delhi, Delhi</div>
                  <p>AIIMS Delhi was ranked first among medical colleges in India in 2019 by the National Institutional Ranking Framework in 2019 </p>
                  <div class="view-btn"><a href="<?= base_url('index.php/User/detail')?>">View Details</a></div>
                </div>
              </div>
            </div>
          </li> -->
        </ul>
       <!--  <div class="pagiWrap">
          <div class="row">
            <div class="col-md-4 col-sm-4"> -->
              <!-- <div class="showreslt">Showing 1-10</div> -->
          <!--   </div> -->
            <!-- <div class="col-md-8 col-sm-8">
              <ul class="pagination">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
      .          <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
              </ul>
            </div> -->
          <!-- </div>
        </div> -->
    <div class="row">
      <div class="col-md-12 text-center" style="padding:1em;">
        <img src="<?= base_url()?>assets/images/add.gif" alt="Add">
      </div>
    </div>
     <div class="row">
       <div class="col-md-12 text-center">

        <?= $this->pagination->create_links(); ?>  
       </div>
     </div>
      
      </div>




    </div>
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
     <form  action="<?=base_url('index.php/User/collegeapply')?>" method="post"  >
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
         <input type="text" class="form-control color-orange modal-form" name="user_name" required="">
         <input type="hidden" class="clickdropid" name="college_id">
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
                    foreach ($cities as $citie) {
                  ?>
                  <option><?= $citie->city_state ?></option>
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
        <center> <p class="color-gray">For more info you can simply log on to collegegyani.in</p> </center>
        
      </div>
      <div class="modal-body" style="padding: 3% 7%;">
     <form  action="<?=base_url('index.php/User/collegeapply')?>" method="post"  >
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
         <input type="text" class="form-control color-orange modal-form" name="user_name" required="">
         <input type="hidden" class="clickdropid" name="college_id">
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
          <label class="color-gray">SELECT YOUR CITY</label>
          <select class="form-control color-orange modal-form-select selectstate" required="" name="user_city">
             <option value="">Select State </option>
                  <?php 
                    foreach ($cities as $citie) {
                  ?>
                  <option><?= $citie->city_state ?></option>
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

<!-- <--------------------------------------- main Courses & Fees section end--------------------------- -->