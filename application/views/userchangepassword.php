
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
                <h4 ><a href="<?= base_url('index.php/User/userchangepassword');?>"><i class="fa fa-key" aria-hidden="true" style="margin-top:10px!important; "></i><span style="margin-left:10px!important; ">Change Password</span></a> </h4>
                <h4 ><a href="<?= base_url('index.php/User/logout')?>"><i class="fa fa-sign-out" aria-hidden="true" style="margin-top:10px!important; "></i><span style="margin-left:10px!important; ">Logout</span></a></h4>

             <!--  <div class="input-wrap">
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
              <div class="input-wrap"> -->
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
              <!--   <div class="input-wrap">
                <select name="city" class="form-control">
                  <option>Select Type </option>
                  <option value="01">Full Time</option>
                  <option value="02">Part Time</option>
                  <option value="03">Correspondence</option>
                  
                </select>
              </div>
              </div> -->
             <!--  <h4>Area</h4>
              <div class="input-wrap">
                <input type="text" name="area" placeholder="Minimum Area" class="form-control">
                <input type="text" name="area" placeholder="Maximum Area" class="form-control">
              </div> -->
             <!--  <div class="sub-btn">
                <input type="submit" class="sbutn" value="Search Filter">
              </div>
            </form> -->
            <!-- <div class="ad"><img src="images/ad.jpg" alt=""></div> -->
          </div>
        </div>
      </div>
      <div class="col-md-7 col-sm-8">
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
        </div> -->
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
                      <h3><a href="#">Change Your Password</a></h3>
                    </div>
                   <!--  <div class="col-md-4 col-sm-4 col-xs-4"> -->
                     <!--  <div class="dollar"><i class="far fa-bookmark"></i></div> -->
                   <!--  </div> -->
                  </div>
                  <div class="row">
                  <form action="<?= base_url('index.php/User/updatepassword')?>" method="post">
                 <!--  <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>New Delhi, Delhi</div> -->
                <div class="col-md-3 col-sm-6 col-xs-12" style="margin-top:15px;text-align:; ">
                 <label>Old Password</label>
               </div>
               <div class="col-md-9 col-sm-6 col-xs-12"style="margin-top:10px;">
               <input required value="" class="form-control" name="old_password"  type="password">
               </div>
                  <!--  <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>New Delhi, Delhi</div> -->
              <div class="col-md-3 col-sm-6 col-xs-12" style="margin-top:15px;text-align:; ">
                 <label>New Password</label>
               </div>
               <div class="col-md-9 col-sm-6 col-xs-12"style="margin-top:10px;">
               <input required value="" class="form-control" name="new_password"  type="password">
               </div>
                <!--  <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>New Delhi, Delhi</div> -->
              <div class="col-md-3 col-sm-6 col-xs-12" style="margin-top:15px;text-align:; ">
                 <label>Confirm Password</label>
               </div>
               <div class="col-md-9 col-sm-6 col-xs-12"style="margin-top:10px;">
                <input required value="" class="form-control" name="con_password"  type="password">
               </div>
               
                
                  <!-- <p>AIIMS Delhi was ranked first among medical colleges in India in 2019 by the National Institutional Ranking Framework in 2019 </p> -->
                 <center> <button class="btn btn-primary" style="margin-top:10px;background: #008543;color:#fff;width:80px;   " >Save</button></center>
                   </div>
                 </form>
                </div>
              </div>
              </div>
              </div>
            </div>
          </li>
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
          </li>
          <li>
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
          </li>
          <li>
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
          </li>
          <li>
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
          </li>
          <li>
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
          </li>
          <li>
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
          </li>
        </ul> -->
       <!--  <div class="pagiWrap">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="showreslt">Showing 1-10</div>
            </div>
            <div class="col-md-8 col-sm-8">
              <ul class="pagination">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
              </ul>
            </div>
          </div>
        </div> -->
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



<?php include('footer.php');?>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>

    $(document).ready(function(){
        
    });
$("#basicDate").flatpickr({
    dateFormat: "d-m-Y",
    maxDate: "30-12-2006"
});

</script>
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
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script>
 <?php
     if($this->session->flashdata('item6'))
      { 
        ?> 
swal({
  title:"",
  text:"Password updated successfully",
  icon:"success",
  button:"ok",

});
       
<?php } ?>
</script>
<script>
 <?php
     if($this->session->flashdata('item7'))
      { 
        ?> 
swal({
  title:"",
  text:"Failed to update password",
 icon: "error",
  button:"Try Again",
  dangerMode: true,

});
       
<?php } ?>
</script>
<script>
 <?php
     if($this->session->flashdata('item8'))
      { 
        ?> 
swal({
  title:"",
  text:"old and new pass can not be same",
  icon: "error",
  button:"Try Again",
  dangerMode: true,
});
       
<?php } ?>
</script>
<script>
 <?php
     if($this->session->flashdata('item9'))
      { 
        ?> 
swal({
  title:"",
  text:"New password & Confirm password is not matching",
 icon: "error",
  button:"Try Again",
  dangerMode: true,

});
       
<?php } ?>
</script>
<script>
 <?php
     if($this->session->flashdata('item10'))
      { 
        ?> 
swal({
  title:"",
  text:"Sorry! Current password is not matching",
  icon: "error",
  button:"Try Again",
  dangerMode: true,

});
       
<?php } ?>
</script>