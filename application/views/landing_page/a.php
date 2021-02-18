<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jaipuria Institute of Management</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link href="<?= base_url()?>/assets/owl/owl.carousel.min.css" rel="stylesheet">
<link href="<?= base_url()?>/assets/owl/owl.theme.default.min.css" rel="stylesheet">


<style>
*{font-family:Poppins,sans-serif}body{overflow-x:hidden}.pd-10{padding:10px}.ul-effect-finish{margin:0}.ul-effect-finish li{list-style:none;padding:25px;display:inline-block;font-size:16px;font-weight:600;line-height:16px;color:#444}.ul-effect-finish li a{color:#444;text-decoration:none;text-transform:uppercase;letter-spacing:1px}.ul-effect-finish li a::after{content:'';width:0;height:1px;display:block;background:#fff;transition:.3s}.ul-effect-finish li a:hover:after{width:100%}.ul-effect-finish li a:hover{color:#444}.ul-effect-finish li a::after{content:'';width:0;height:2px;margin-top:5px;display:block;background:#444;transition:.3s}.ul-effect-finish li a:hover:after{width:100%}.flex{display:flex}.banner-text{position:absolute;top:50%}.banner-text h2{margin:0}.side-form{position:absolute;width:%;top:15%;right:8%;background:#fff;padding:1em;border-radius:4px;border:2px solid #e6e6e6}.banner-form ul{margin:0;padding:0}.banner-form ul li{list-style:none;padding:.5em 1em}nav{position:fixed;top:0;z-index:999;background:#fff;width:100%}.info-gift-text p{margin:0;font-weight:400;font-size:14px;line-height:24px;color:#444}.info-gift-img{margin-bottom:1em}.banner-text h2 p{display:inline-block;margin:0}.information{margin-top:-80px}.start-box{background:#fff;box-shadow:0 0 52px 0 rgba(0,0,0,.1);padding:10px;margin-top:20px;border-radius:10px}.start-box p{margin:0;font-weight:700;font-size:14px;line-height:20px;color:#444}.boxes .row{margin-top:50px}.program-title h2,.program-title p{margin:0}.program-box-start{box-shadow:0 0 52px 0 rgba(0,0,0,.1);margin:10px;min-height:50px;padding:30px}.program-box-start h2{font-size:20px;line-height:20px;font-weight:700;color:#ee7800;margin:0}.program-box-start p{margin:0;font-size:13px;line-height:20px;font-weight:700;color:#ee7800}.placement-title h2{font-size:50px;line-height:60px;color:#51345d;font-weight:700}.placement{margin-top:20px}.placement-scroll .item img{width:50%}html{scroll-behavior:smooth}
    .top-btn{position:fixed;bottom:10px;right: 10px;border-radius:50%;
     border: none;padding:10px 15px;background:#51345d;color:#fff;
    }
    .top-btn:focus
    {
       border: none;
       outline: none;
    }
</style>

</head>
<body>

<nav class="college-nav">
   <div class="flex">
   	<div class="text-center pd-10" style="width:30%">
   		<img src="<?= base_url()?>assets/images/logo-1-1.png" alt="" width="40%">
   	</div>
   	<div class="text-center" style="width:70%">
   		<ul class="ul-effect-finish">
   			<li><a href="#home">  Home </a></li>
   			<li><a href="#aboutus"> About Us </a></li>
   			<li><a href="#program"> Programmes </a></li>
   			<li><a href="#placement"> Placement </a></li>
   			<li><a href="#contact"> Contacts </a></li>
   		</ul><span> 
   	</div>
   </div>
</nav>

<section class="banner" id="home">
	<div class="banner-section"style="position: relative;">
		<div class="banner-img">
			<img src="<?= base_url()?>assets/images/banner-bg-1-1.png" alt="" width="100%">
		</div>
		<div class="container">
		<div class="banner-text">
			
				<h2><p style="background:rgba(255,255,255,0.8);padding:10px 21px;font-size:34px;font-weight:700;">BE INFINITE WITH A </p></h2>

				<h2><p style="background:rgba(236,119,0,0.8);padding:0 1em;font-size:50px;color:#fff;padding-left: 32px;">TOP RANKED B-SCHOOL </p></h2>

				<h2><p style="background:rgba(80,51,92,0.8);padding:10px 21px;color:#fff;">UP TO 50%<sup>*</sup> SCHOLARSHIPS ON CAT SCORESM</p></h2>
	
		</div>
	</div>
	<div class="row">
	<div class="side-form col-md-3">
	<div class="container">
		<div class="banner-form">
			<form action="<?= base_url('index.php/User/lead')?>" method="post">
		<center>	<h2 style="font-size: 22px;line-height: 26px;"> ENQUIRE NOW </h2> </center>
			<ul class="form-group">
				<li>
					<input type="text" name="name" class="form-control" placeholder="Enter Name" required>
				</li>
			    <li>
					<input type="email" name="email" class="form-control" placeholder="Enter Email Address" required>
				</li>
				<li class="row">
					<div class="col-md-3">
						<select id="" class="" style="height:38px;border-radius: 4px;" disabled>
							<option>+91</option>
						</select>
					</div>
					<div class="col-md-9" style="padding-left: 0">
		            <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number" required maxlength="10" minlength="10">
					</div>
				</li>

				<li>
					<div class="row">
						<div class="col-md-6">
							 <select class="form-control color-orange modal-form-select selectstate" name="state" required="">
             <option value="">State </option>
                  <?php 
                    foreach ($cities as $citie) {
                  ?>
                  <option><?= $citie->city_state ?></option>
                  <?php
                }
                ?>
         </select> 
						</div>
						<div class="col-md-6" style="padding-left: 0">
							<select class="form-control color-orange modal-form-select postcities" required="" name="city">
           <option value="">City </option>
         </select>
						</div>
					</div>
				</li>

			<!-- 	<li>
					<select id="" class="form-control" name="campus" required>
								<option value="">Select Campus Preference</option>
								<option>Noida</option>
				    </select>
				</li> -->

				
				<li class="row">
					
					<div class="col-md-8">
		            <input type="text" class="form-control checkcapcha" placeholder="Enter Capcha">
		            <span style="color:red;display:none;font-size:14px;" class="capchaspan">Capcha Code Not Match</span>
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control findcapcha" disabled value="<?php 
                         $capcha= rand(111,999);
                         echo $capcha;
						?>">
					</div>
					<div class="form-group col-md-6 col-sm-6 col-6 col-select state">

					</div>
					<div class="form-group col-md-6 col-sm-6 col-6 col-select state">
						
					</div>
				</li>
				<li>
					<div class="form-check">
                       <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                     <label class="form-check-label" for="defaultCheck1">
                        I agree to receive information
                    </label>
                    </div>
				</li>
			   <li class="text-center">
			   	<button type="submit" class="btn formsubmitbtn" disabled style="background:#443052;color:#fff;">Register</button>
			   </li>

			</ul>
			</form>
		</div>
	</div>
</div>
</div>
	</div>
</section>
<section class="information" id="aboutus">
	<div class="container">
	<div class="row">
<div class="col-md-6 text-center">
	<div class="info-gift">
		<div class="info-gift-img">
			<img src="<?= base_url()?>assets/images/amazon.png" alt="">
		</div>
		<div class="info-gift-text">
			<p>Apply Now with your CAT enrollment number & get Amazon Gift Card Worth</p>
			<h2 style="font-weight: bold;">Rs. 500/-</h2>
		</div>
	</div>
</div>

  <div class="col-md-6">
  	<div class="row">
  		<div class="col-md-4">
  			<img src="<?= base_url()?>assets/images/arrow.png" style="margin-top:5em;">
  		</div>
  		<div class="col-md-8 text-right">

  		<h1 style="font-weight:700;font-size:80px;line-height:30px;color:#51345d;">JAIPURIA</h1>
  		<p style="font-size:25px;line-height:30px;color:#444444;font-weight:700;margin-top:1em;text-align:right;">Institute of Management</p>
  		<p style="font-size:14px;line-height:24px;color:#444444;font-weight:400;margin-top:1em;text-align:right;margin:0">Committed to provide high quality management</p>
  		<p style="font-size:14px;line-height:24px;color:#444444;font-weight:400;text-align:right;margin:0">education, Jaipuria Institute of Management is</p>
  		<p style="font-size:14px;line-height:24px;color:#444444;font-weight:400;text-align:right;margin:0">present at four locations.</p>	
  		</div>
  	</div>
  	
  </div>
	
	</div>
	</div>


<div class="container">
	<div class="boxes">
		<div class="row">
			<div class="col-md-3">
				<div class="start-box text-center">
					<p>Excellent placement</p>
					<p style="font-size: 40px;line-height: 24px;color:#ed7700;margin:5px;"> 18 Lacs</p>
				</div>
			</div>


			<div class="col-md-3">
				<div class="start-box text-center">
					<p>Excellent placement</p>
					<p style="font-size: 40px;line-height: 24px;color:#ed7700;margin:5px;"> 18 Lacs</p>
				</div>
			</div>


			<div class="col-md-3">
				<div class="start-box text-center">
					<p>Excellent placement</p>
					<p style="font-size: 40px;line-height: 24px;color:#ed7700;margin:5px;"> 18 Lacs</p>
				</div>
			</div>

			<div class="col-md-3">
				<div class="start-box text-center">
					<p>Excellent placement</p>
					<p style="font-size: 40px;line-height: 24px;color:#ed7700;margin:5px;"> 18 Lacs</p>
				</div>
			</div>

			<div class="col-md-3">
				<div class="start-box text-center">
					<p>Excellent placement</p>
					<p style="font-size: 40px;line-height: 24px;color:#ed7700;margin:5px;"> 18 Lacs</p>
				</div>
			</div>

			<div class="col-md-3">
				<div class="start-box text-center">
					<p>Excellent placement</p>
					<p style="font-size: 40px;line-height: 24px;color:#ed7700;margin:5px;"> 18 Lacs</p>
				</div>
			</div>

			<div class="col-md-3">
				<div class="start-box text-center">
					<p>Excellent placement</p>
					<p style="font-size: 40px;line-height: 24px;color:#ed7700;margin:5px;"> 18 Lacs</p>
				</div>
			</div>

			<div class="col-md-3">
				<div class="start-box text-center">
					<p>Excellent placement</p>
					<p style="font-size: 40px;line-height: 24px;color:#ed7700;margin:5px;"> 18 Lacs</p>
				</div>
			</div>



			
		</div>
	</div>
</div>
</section>


<section id="program" class="programs text-center" style="margin-top: 70px;">
  
  <div class="program-title">
  	<h2 style="font-size:50px;font-weight:700;line-height:60px;color:#51345d;"> PGDM PROGRAMS </h2>
  	<p style="font-weight: 500;font-size: 20px;line-height:24px;color:#2a2d3b;"> AICTE APPROVED | NBA<sup>**</sup>ACCREDITED | AIU<sup>**</sup> RECOGNISED | NAAC<sup>***</sup> ‘A’ ACCREDITED </p>
  </div>

  <div class="program-box">
  	 <div class="container">
  	 	<div class="flex">
  	 		<div class="program-box-start" style="width:20%;">
  	 			 <h2>PGDM</h2>
  	 			 
  	 		</div>
  	 		<div class="program-box-start" style="width:20%;">
  	 			 <h2>PGDM</h2>
  	 			 <p>(SERVICE MANAGEMENT)</p>   
  	 		</div>
  	 		<div class="program-box-start" style="width:20%;">
  	 			 <h2>PGDM</h2>
  	 			  <p>(MARKETING)</p>  
  	 		</div>
  	 		<div class="program-box-start" style="width:20%;">
  	 			 <h2>PGDM</h2>
  	 			  <p>(FINANCIAL SERVICES)</p>
  	 		</div>
  	 		<div class="program-box-start" style="width:20%;">
  	 			 <h2>PGDM</h2>
  	 			  <p>(RETAIL MANAGEMENT)</p>
  	 		</div>
  	 	</div>
  	 </div>
  </div>
	
</section>


<section id="placement" class="placement text-center">
	<div class="placement-title">
		<h2>PLACEMENTS</h2>
	</div>
	<div class="placement-scroll">
		<div class="container">
			 <div class="owl-carousel owl-theme">
               <div class="item">
                 <img src="<?= base_url()?>assets/imagesl4.jpg" alt="">
               </div>
                <div class="item">
                	<img src="<?= base_url()?>assets/imagesl4.jpg" alt="">
                </div>

                  <div class="item">
                	<img src="<?= base_url()?>assets/imagesl4.jpg" alt="">
                </div>

                  <div class="item">
                	<img src="<?= base_url()?>assets/imagesl4.jpg" alt="">
                </div>

                  <div class="item">
                	<img src="<?= base_url()?>assets/imagesl4.jpg" alt="">
                </div>

                  <div class="item">
                	<img src="<?= base_url()?>assets/imagesl4.jpg" alt="">
                </div>

                  <div class="item">
                	<img src="<?= base_url()?>assets/imagesl4.jpg" alt="">
                </div>

                  <div class="item">
                	<img src="<?= base_url()?>assets/imagesl4.jpg" alt="">
                </div>

                  <div class="item">
                	<img src="<?= base_url()?>assets/imagesl4.jpg" alt="">
                </div>
 
</div>
		</div>
		
	</div>
	
</section>
<footer id="contact" style="margin-top:50px;">
	<div class="footer-info">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
		<div class="footer-img">
			<img src="<?= base_url()?>assets/images/logo-1-1.png" alt="" width="100%">
		</div>
		</div>

        <div class="col-md-10">
		<div class="footer-text text-right">
			<p style="font-size:13px;line-height: 24px;font-weight:700;color:#444;margin:0;">Toll Free 18001029990 | www.jaipuria.ac.in | admissions@jaipuria.ac.in 08800495724 | Call Timings: 9:30 AM to 6:00 PM</p>
			<p style="font-size: 13px;line-height: 24px;font-weight: 400;color: #444444;margin:0"> #Combined data for all four campuses; Jaipuria Lucknow, Noida, Jaipur & Indore </p>

			<p style="font-size: 13px;line-height: 24px;font-weight: 400;color: #444444;margin:0"> ***Jaipuria Institute of Management, Lucknow & Noida | ** NBA & AIU accreditation for PGDM(SM) at Jaipuria Jaipur is under process </p>

			<p style="font-size: 13px;line-height: 24px;font-weight: 400;color: #444444;margin:0"> *Terms & Condition </p>


		</div>
		</div>
		</div>
		</div>


	</div>


	<div class="footer-buttom" style="margin-top: 20px;">
		<img src="assets/img/footer-bg.png" alt="">
	</div>
</footer>







<button onclick="topFunction()" id="myBtn" title="Go to top" class="top-btn"><i class="fas fa-angle-up"></i></button>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="<?= base_url()?>/assets/js/owl.carousel.js"></script> 
<script src="<?= base_url()?>/assets/owl/owl.carousel.min.js"></script>
<script src="https://kit.fontawesome.com/e6726924f5.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script>
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayHoverPause:true,
    autoplayTimeout:2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<script>
	$(document).ready(function(){
		$capcha=$('.findcapcha').val();
		
		$('.checkcapcha').keyup(function()
		{
	    $checkcapcha=$('.checkcapcha').val();
		if($checkcapcha==$capcha)
		{
		    $('.formsubmitbtn').removeAttr('disabled');
		    $('.capchaspan').css('display','none');
		}
		else
		{
			  $('.formsubmitbtn').attr("disabled", 'disabled');
			  $('.capchaspan').css('display','block');
		}


		});
		
	})
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



<script>
   <?php
     if($this->session->flashdata('lead_alt'))
      { 
        ?> 
swal("Submit Successfully", "", "success");
       
<?php 
}
 ?>
</script>





</body>
</html>