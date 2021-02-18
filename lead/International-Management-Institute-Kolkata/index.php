

<!DOCTYPE html>
<html>
    
<!-- Mirrored from admissions.imi-k.edu.in// by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Feb 2020 09:10:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IMI Kolkata</title>
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="BigwigMedia">

    <!-- Favicon -->
    <link rel="shortcut icon" href="final/img/favicon.html" type="image/x-icon" />
    <link rel="apple-touch-icon" href="final/img/apple-touch-icon.html">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="final/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="final/vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="final/vendor/animate/animate.min.css">
    <!--<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">-->
    <script src="../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Theme CSS -->
    <link rel="stylesheet" href="final/css/theme.css">
    <link rel="stylesheet" href="final/css/theme-elements.css">
    <!--<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">-->

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="final/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="final/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="final/vendor/rs-plugin/css/navigation.css">

    <!-- Demo CSS -->

    <!-- Skin CSS -->
    <link rel="stylesheet" href="final/css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="final/css/skins/custom.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159835596-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-159835596-4');
</script>


<script type="application/ld+json">

{"@context":"http://schema.org",
        "@type":"Organization",
        "name":"CollegeGyani",
        "url":"https://www.collegegyani.com/",
        "logo":"https://www.collegegyani.com/assets/images/blog/collegegyanilogo.png",

 }
</script>
    <!-- Head Libs -->
    <script src="final/vendor/modernizr/modernizr.min.js"></script>
    <script type='text/javascript'>
        $(document).ready(function(){
			$("#submit").click(function(){
				var userName = $('#student_name').val();
				if(userName == ""){
					alert("Please Enter Student Name.");
					$("#student_name").focus();
					return false;
				}
				
				var select_course = $('#select_course').val();
				if(select_course == ""){
					alert("Please Select Course.");
					$("#select_course").focus();
					return false;
				}
				
				var mobile_number = $('#mobile_number').val();
				if(mobile_number == ""){
					alert("Please Enter Mobile Number.");
					$("#mobile_number").focus();
					return false;
				}
				if(!mobile_number.match('[0-9]{10}'))  {
					alert("Please Enter 10 digit Mobile Number.");
					return false;
				}
				
				var email = $('#student_email').val();
				if(email == ""){
					alert("Please Enter Email Address.");
					$("#student_email").focus();
					return false;
				}
				var validateEmail = function(elementValue) {
					var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
					return emailPattern.test(elementValue);
				}
				if(!validateEmail(email)){
					alert("Please Enter Valid Email.");
					return false;
				}
				
				var select_state = $('#select_state').val();
				if(select_state == ""){
					alert("Please Select State.");
					$("#select_state").focus();
					return false;
				}
				var select_city = $('#select_city').val();
				if(select_city == ""){
					alert("Please Select City.");
					$("#select_city").focus();
					return false;
				}
				if ($('#authorize').is(":checked")){
				  var authorize = $('#authorize').val();
				} else {
					var authorize =  0;
				}
				//alert(authorize);
				var data = {
					userName:userName,
					select_programme:'pg',
					select_course:select_course,
					mobile_number:mobile_number,
					email:email,
					select_state:select_state,
					select_city:select_city,
					query:0,
					utm_source:$('#utm_source').val(),
					utm_medium:$('#utm_medium').val(),
					utm_campaign:$('#utm_campaign').val(),
					utm_term:$('#utm_term').val(),
					utm_content:$('#utm_content').val(),
					authorize:authorize,
					submit: 1
				};
				//console.log(data);return false;
				$.ajax({
					url: 'https://admissions.imi-k.edu.in/lead/createUserAjax',
					type: 'post',
					dataType: "json",
					data: data,
					success: function(output) {
						if(output.responseType == 'fail'){
							alert(output.message);
						}else{
							alert(output.message);
							var url_thanku = 'lead/thankyou.html';
							//var url_thanku = 'https://admissions.imi-k.edu.in/lead/authenticate';
							window.location = url_thanku;
						}
					}
				}); 
				return false;
			});
		});	
    </script>
    <!-- Global site tag (gtag.js) - Google Ads: 758972241 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-758972241"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-758972241'); </script>



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-54111839-2"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-54111839-2');
</script>

<!-- Global site tag (gtag.js) - Google Ads: 758972241 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-758972241"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'AW-758972241');
</script>
    </head>
    <body>
<div class="body">
      <header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 55, 'stickyChangeLogo': false}">
      <!--<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">-->
  <div class="header-body border-top-0">
   <!--  <div class="header-top header-top-borders">
      <div class="container h-100">
        <div class="header-row h-100">
          <div class="header-column justify-content-end">
            <div class="header-row">
              <nav class="header-nav-top">
                <ul class="nav nav-pills">
                  <li class="nav-item nav-item-borders "> <a href="tel:033-6652-9615"><i class="fas fa-mobile-alt" ></i> +91-33-66529-615</a> </li>
                  <li class="nav-item nav-item-borders d-md-inline-flex"> <a href="mailto:admission.imik@rpsg.in"><i class="fas fa-envelope " ></i> admission.imik@rpsg.in</a> </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="header-container container">
      <div class="header-row">
        <div class="header-column">
          <div class="header-row">
            <div class="header-logo"> <img  data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="img/new/logo.png"> </div>
          </div>
        </div>
        <div class="header-column justify-content-end">
          <div class="header-row">
            <div class="header-nav header-nav-stripe order-2 order-lg-1">
              <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                <nav class="collapse">
                  <ul class="nav nav-pills" id="mainNav">
                      <!--<li class="dropdown"> <a class="dropdown-item " href="index.html"> Home </a></li>-->
                      <li class="dropdown"> <a class="dropdown-item" href="#home-intro">The Course</a> </li>
                      <li class="dropdown"> <a class="dropdown-item" href="#home-intro">Why IMI KOLKATA?</a> </li>
                      <!--<li class="dropdown"> <a class="dropdown-item" href="#programmes">Programmes</a> </li>-->
                      <li class="dropdown"> <a class="dropdown-item" href="#aboutPGDM">About PGDM</a> </li>                      
                      <!--<li class="dropdown"> <a class="dropdown-item" href="#admissionDetails">Admission Details</a> </li>-->
                      <li class="dropdown"> <a class="dropdown-item" href="#recruiters">Recruiters</a> </li>
					  <li class="dropdown"> <a class="dropdown-item" href="#header">Apply Now</a> </li>
					  <li class="dropdown"> <a class="dropdown-item" href="#aboutFPM">About FPM</a> </li>
                  </ul>
                </nav>
              </div>
              <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav"> <i class="fas fa-bars"></i> </button>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div role="main" class="main">
      <div class="slider-with-overlay">
    <div class="slider-container rev_slider_wrapper" style="height: 660px;">
          <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider data-plugin-options="{'delay': 5000, 'gridwidth': 1170, 'gridheight': 660, 'responsiveLevels': [4096,1200,992,500]}">
        <ul>
              <li data-transition="fade"> <img src="final/img/banner1.jpg"  
										alt=""
										data-bgposition="center center" 
										data-bgfit="cover" 
										data-bgrepeat="no-repeat" 
										class="rev-slidebg"> </li>
              <li data-transition="fade"> <img src="final/img/banner2.jpg"  
										alt=""
										data-bgposition="center center" 
										data-bgfit="cover" 
										data-bgrepeat="no-repeat" 
										class="rev-slidebg"> </li>
              <!--<li data-transition="fade">
									<img src="https://admissions.imi-k.edu.in/final/img/top-banner.jpg"  
										alt=""
										data-bgposition="center center" 
										data-bgfit="cover" 
										data-bgrepeat="no-repeat" 
										class="rev-slidebg">

									
								</li>-->
            </ul>
      </div>
        </div>
    <div class="home-intro" id="home-intro">
          <div class="container">
        <div class="row align-items-center">
              <div class="col-lg-9">
            <p class="text-white"> Welcome to the <strong>International Management Institute Kolkata (IMI-K)</strong> <span>International Management Institute Kolkata is one of the three Chapters of IMI, India's first corporate-sponsored Business School. The founders of IMI have built IMI Kolkata Chapter with a sense of clarity and purpose, which has been translated to a clear objective that is to promote IMI Kolkata as an institute which provides significant opportunities to learn, grow and most importantly, develop and hone multiple skills across various disciplines of management.</span> </p>
          </div>
              <div class="col-lg-3">
            <div class="get-started text-left text-lg-right"> <a href="#formredirect"  data-hash data-hash-offset="120" class="btn btn-lg btn-primary" style="border:1px solid #fff;">Apply Now!</a> </div>
          </div>
            </div>
      </div>
        </div>
    <div class="slider-contact-form" >
          <div class="container">
        <div class="row justify-content-end">
              <div class="col-lg-5">
            <div class="featured-boxes mt-0 mb-0">
                  <div class="featured-box featured-box-primary mt-5">
                <div class="box-content" >
                      <h4   id="formredirect" class="">Enquire Now</h4>
                        <form class="row" action="https://www.collegegyani.com/index.php/User/lead" method="post">

       <div class="form-group col-md-12 col-sm-12 col-12 col-name">
          <input type="text" name="name" class="form-control" placeholder="Enter Name" required> 
          <input type="hidden" name="collegename" value="International Management Institute Kolkata">

         </div>
         <div class="form-group col-md-12 col-sm-12 col-12 col-email">
          <input type="email" name="email" class="form-control" placeholder="Enter Email Address" required>
    </div>
     
       
       
        <div class="form-group col-md-12 col-sm-12 col-12 col-enter no">
            <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number" required maxlength="10" minlength="10">
        </div>
    
              <div class="form-group col-md-6 col-sm-6 col-6 col-select state">
               <select class="form-control color-orange modal-form-select selectstate" name="state" required="">
             <option value="">State </option>
                                    <option>Maharashtra</option>
                                    <option>Andaman & Nicobar Islands</option>
                                    <option>Andhra Pradesh</option>
                                    <option>Arunachal Pradesh</option>
                                    <option>Assam</option>
                                    <option>Bihar</option>
                                    <option>Chhattisgarh</option>
                                    <option>Dadra & Nagar Haveli</option>
                                    <option>Daman & Diu</option>
                                    <option>Delhi</option>
                                    <option>Goa</option>
                                    <option>Gujarat</option>
                                    <option>Gujrat</option>
                                    <option>Hariyana</option>
                                    <option>Haryana</option>
                                    <option>Himachal Pradesh</option>
                                    <option>Jammu & Kashmir</option>
                                    <option>Jharkhand</option>
                                    <option>Karnataka</option>
                                    <option>Kerala</option>
                                    <option>Lakshadweep</option>
                                    <option>Madhya Pradesh</option>
                                    <option>Maharastra</option>
                                    <option>Manipur</option>
                                    <option>Meghalaya</option>
                                    <option>Mizoram</option>
                                    <option>Nagaland</option>
                                    <option>Orissa</option>
                                    <option>Pondicherry</option>
                                    <option>Punjab</option>
                                    <option>Rajasthan</option>
                                    <option>Rajastan</option>
                                    <option>Sikkim</option>
                                    <option>West Bengal</option>
                                    <option>Tamil Nadu</option>
                                    <option>Tripura</option>
                                    <option>Uttar Pradesh</option>
                                    <option>Uttarakhand</option>
                           </select> 
                </div> 

                    <div class="form-group col-md-6 col-sm-6 col-6 col-select state">
                       <input type="text" name="city" required class="form-control" placeholder="Enter City Name">
                </div>

                <div class="form-group col-md-6 col-sm-6 col-6 col-select state">
                          <input type="text" class="form-control checkcapcha1" placeholder="Enter Capcha">
                <span style="color:red;display:none;font-size:14px;" class="capchaspan1">Capcha Code Not Match</span>
          </div>
          <div class="form-group col-md-6 col-sm-6 col-6 col-select state">
            <input type="text" class="form-control findcapcha1" disabled value="994638" style="color:red;">
          </div>  
        
                                         
  <br><br>
  <br>
            <div class="form-group form-check col-md-12 text-center"style="padding:0px;">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                     <label class="form-check-label" for="defaultCheck1">
                        I agree to receive information
                    </label>
            </div>
      
                        <div class="form-group col-md-12 col-sm-12 col-12"style="padding:0px;">
                         
                          </div>
        <div class="form-group col-md-12 col-sm-12 col-12" style="padding:0px;margin:0px;">
           <p class="text-center"style="margin-bottom:0px"> 
            <button type="submit" class="btn formsubmitbtn1" disabled style="background:#443052;color:#fff;">Register</button>
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
  </div>
      
      <div class="container">
    <div class="row">
          <div class="col-lg-6">
        <h2>The <strong>Course </strong></h2>
        <p class="lead">IMI-K’s Post-Graduate Diploma in Management (PGDM) Programme is AICTE approved and has accreditation from NBA. The Programme is equivalent to MBA as per Association of Indian Universities (AIU).</p>
        <p>As per the ‘India Ranking Report’ released by the National Institutional Ranking Framework (NIRF) developed by the Ministry of Human Resource Development, Government of India, IMI Kolkata ranks 45 in 2019 among the management institutes in India. NIRF Ranking link: <a href="https://www.nirfindia.org/2019/managementranking.html" target="_blank">https://www.nirfindia.org/2019/managementranking.html</a></p>
        <iframe width="100%" height="300" src="https://www.youtube.com/embed/Sl4Nh6j5TPE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
          <div class="col-lg-6">
        <h2>WHY <strong>IMI KOLKATA?</strong></h2>
        <div class="row mt-4 mb-5">
              <div class="col-lg-12">
            <div class="feature-box feature-box-style-2">
                  <!--<div class="feature-box-icon"> <i class="fas fa-star"></i> </div>-->
                  <div class="feature-box-info">
                <!--<h4>Advantages</h4>-->
                <ul class="list list-icons list-icons-style-2 list-icons-sm">
                      <li><i class="fas fa-check"></i>IMI Kolkata is in the commercial capital of Eastern India, Kolkata, a city known for its rich cultural heritage and literary works, philosophers and reformers, business tycoons and Nobel laureates.</li>
                      <li><i class="fas fa-check"></i>Located in the heart of the city, at Alipore, the sprawling campus offers excellent residential facilities to aspirants of management education through the AICTE approved two-year, full time Post Graduate Diploma in Management (PGDM).</li>
                      <li><i class="fas fa-check"></i>IMI Kolkata is the initiative of the RP-Sanjiv Goenka Group. Thus, it enjoys a strong support of the highly respected business group which has a passion for heading its people practices.</li>
                      <li><i class="fas fa-check"></i>Building itself under the vision statement as envisaged by Late Dr.R.P. Goenka, today, IMI Kolkata enjoys the place of esteem among the leading management institutions and the patronage of reputed business organizations in the country. The aim, approach and activities of IMI Kolkata are guided by all its stakeholders, students, alumni, corporate patrons and society in general.</li>
                      <li><i class="fas fa-check"></i>The campus building has won several global awards for its Architectural Excellence. Please visit this site, they say IMI Kolkata is one of the most colourful buildings in the world.</li>
                    </ul>
              </div>
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
  	  
      <div class="container bluesec">
    <div class="row">
          <div class="col-md-9 text-set">
        <div class="blue-bg " >Professor Arindam Banik is the Director of IMI Kolkata. He has been associated with IMI's Delhi campus since February 01, 1994. He is also the Editor of a Management journal entitled, Global Business Review, published jointly by IMI Delhi and Sage publications.<br>
              <br>
              <span style="text-align: left; float: left;"><strong style="font-size: 20px;">Professor Arindam Banik</strong> <br>
          Director – IMI Kolkata <br>
          Ph.D. (Delhi School of Economics)<br>
          Editor – Global Business Review, Sage Publications</span> </div>
      </div>
          <div class="col-md-3"> <img src="final/img/arindam.jpg" alt="" class="testimonial-image img-fluid" style="-webkit-filter: grayscale(100%);
    filter: grayscale(100%);" > </div>
        </div>
  </div>
      
      
      <section class="section section-no-background section-no-border mt-0 mb-0 pb-0">
    <div class="container">
          <div class="row">
        <div class="col-lg-12 text-center">
              <h2 class="heading-dark mb-0">The  <strong>Programme</strong> </h2>
              <h4>AICTE approved, NBA accredited and equivalent to MBA as per Association of Indian Universities (AIU).</h4>
            </div>
      </div>
        </div>
    <div class="container-fluid">
          <div class="row">
        <div class="col-lg-6 p-0  order-2 order-lg-1 order-sm-2">
              <section class="section section-primary pl-4 pr-4 mb-0 match-height">
            <div class="row">
                  <div class="col-lg-12 col-sm-12  col-xs-6 ">
                <h4 class="text-center text-white pb-1 bl-bg" style="background: #000; 
								padding:3px 0px;">Post-Graduate Diploma in Management PGDM <br/>
                      (2020 -22)
                      Two-year, Full-time Programme </h4>
                <p> The two-year PGDM Programme of IMI Kolkata equips students with strong conceptual skills and hands-on learning to manage business in an integrated manner. The emphasis is on developing a holistic manager with a vision to take on the challenges for the future. Some of the key goals are: </p>
                <ul class="list list-icons list-icons-style-3 list-icons-sm  text-white">
                      <li><i class="fas fa-check"></i> Sharpening the analytical and problem-solving skills using managerial tools.</li>
                      <li><i class="fas fa-check"></i> Imparting knowledge in functional areas of management with an objective of preparing students for cross-functional positions in industry.</li>
                      <a name="aboutPGDM"></a>
                      <li><i class="fas fa-check"></i> Developing the student’s personality with strong values and a positive attitude, so that she/he is receptive to societal concerns and committed to ethical conduct.</li>
                    </ul>
              </div>
                </div>
          </section>
            </div>
        <div class="col-lg-6 col-sm-6  col-xs-6  p-0 order-1 order-lg-2 order-sm-2"  style="position:relative;">
              <div class="custom_title"> <span>Programme</span></div>
              <section class="section section-text-light section-background section-center match-height mb-0" style="background-image: url(final/img/courses-offered.jpg); min-height: 260px; -webkit-filter: grayscale(100%);
    filter: grayscale(100%);">
            <div class="container">
                  <div class="row">
                <div class="col"> </div>
              </div>
                </div>
          </section>
            </div>
      </div>
        </div>
  </section>
  
      <section class="section section-no-background section-no-border pt-3 pb-2">
    <div class="container">
          <div class="row">
        <div class="col-lg-12">
              <h2 class="heading-dark text-center mb-3">PGDM Admission Details <strong>2020-22</strong></h2>
              <div class="row">
            <div class="col-md-12">
            	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading1">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#eligibilityCriteria" aria-expanded="true" aria-controls="eligibilityCriteria">
                                    <i class="more-less fas fa-minus"></i>
                                    Eligibility Criteria
                                </a>
                            </h4>
                        </div>
                        <div id="eligibilityCriteria" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="heading1">
                            <div class="panel-body">
                                <h5 class="mt-2 mb-2"><strong>Educational Qualification:</strong></h5>
                                <p class="mb-1"><i class="fas fa-hand-point-right"></i> Minimum 50% marks in Class X, XII and Graduation.</p>
                                <p class="mb-1"><i class="fas fa-hand-point-right"></i> The Bachelor’s degree or an equivalent qualification obtained by the candidate must entail a minimum of three year's education after the completion of Higher Secondary schooling under the 10+2 system or equivalent.</p>
                                <h5 class="mt-4 mb-2"><strong>Qualifying Exams:</strong></h5>
                                <p class="mb-1"><i class="fas fa-hand-point-right"></i> CAT-2019, XAT-2020 OR GMAT (GMAT - not earlier than December, 2015 and not later than May, 2020).</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading2">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#admissionProcess" aria-expanded="false" aria-controls="admissionProcess">
                                    <i class="more-less fas fa-plus"></i>
                                    Admission Process
                                </a>
                            </h4>
                        </div>
                        <div id="admissionProcess" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                            <div class="panel-body">
                                <h5 class="mt-2 mb-2"><strong>Written Ability Test (WAT):</strong></h5>
                                <p class="mb-1"><i class="fas fa-hand-point-right"></i> IMI Kolkata conducts WAT to evaluate written capabilities of prospective students. <!--WAT aims to evaluate Articulation and Technical (Grammar and Spellings) skillset of the applicant.--></p>
                                <h5 class="mt-4 mb-2"><strong>Personal Interview:</strong></h5>
                                <p class="mb-1"><i class="fas fa-hand-point-right"></i> After the WAT, the candidate will have a Personal Interview of approximately 20 minutes that will include an Extempore component. IMI Kolkata’s objective is to understand the applicant’s attitude towards management education and the verbal communication skillset.</p>
                                <h5 class="mt-4 mb-2"><strong>Final Selection:</strong></h5>
                                <p class="mb-1"><i class="fas fa-hand-point-right"></i> Final selection of the candidate will be based on the overall score that includes components of CAT/XAT/GMAT performance, written and verbal communication skillsets, academic performance and psychometrics. Some weightage is also given for relevant work experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <a name="recruiters"></a>
                        <div class="panel-heading" role="tab" id="heading3">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#feeFinancing" aria-expanded="false" aria-controls="feeFinancing">
                                    <i class="more-less fas fa-plus"></i>
                                    Fee and Financing
                                </a>
                            </h4>
                        </div>
                        <div id="feeFinancing" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                            <div class="panel-body">
                                <!--<p class="mb-0"><img class="img-fluid" src="https://fyiedusoft.com/imi/final/img/fee1.jpg"> </p>-->
                                <!--<h5 class="mt-4 mb-2"><strong>Original Fee PGDM Batch 2020 – 22</strong></h5>-->
                                <div style="overflow-x:auto;">
                                <table width="100%" border="1" cellspacing="2" cellpadding="2" style="border: 1px solid #000; border-collapse:inherit;">
  <tbody>
    <tr>
      <th style="width: 25%; background: #0070c0; color: #fff; text-align: center;">Year Account Category</th>
      <th style="background: #0070c0; color: #fff; text-align: center;" colspan="2">First Year</th>
      <th style="background: #0070c0; color: #fff; text-align: center;" colspan="2">Second Year</th>
      <th style="width: 15%; background: #0070c0; color: #fff; text-align: center;" rowspan="3">Total</th>
    </tr>
    <tr>
      <th style="background: #0070c0; color: #fff; text-align: center;" rowspan="2">All Figures in Indian rupees</th>
      <th style="width: 15%; background: #0070c0; color: #fff; text-align: center;">I</th>
      <th style="width: 15%; background: #0070c0; color: #fff; text-align: center;">II</th>
      <th style="width: 15%; background: #0070c0; color: #fff; text-align: center;">I</th>
      <th style="width: 15%; background: #0070c0; color: #fff; text-align: center;">II</th>
    </tr>
    <tr>
      <th style="background: #0070c0; color: #fff; text-align: center;">Installment</th>
      <th style="background: #0070c0; color: #fff; text-align: center;">Installment</th>
      <th style="background: #0070c0; color: #fff; text-align: center;">Installment</th>
      <th style="background: #0070c0; color: #fff; text-align: center;">Installment</th>
    </tr>
    <tr>
      <td style="text-align: center; border: 1px solid #000;">Tuition Fee</td>
      <td style="text-align: right; border: 1px solid #000;">2,48,911</td>
      <td style="text-align: right; border: 1px solid #000;">2,48,911</td>
      <td style="text-align: right; border: 1px solid #000;">2,48,911</td>
      <td style="text-align: right; border: 1px solid #000;">2,48,909</td>
      <td style="text-align: right; border: 1px solid #000;">9,95,642</td>
    </tr>
    <tr>
      <td style="text-align: center; border: 1px solid #000;">Text/Reading Material</td>
      <td style="text-align: right; border: 1px solid #000;">23,954</td>
      <td style="text-align: right; border: 1px solid #000;">23,954</td>
      <td style="text-align: right; border: 1px solid #000;">23,954</td>
      <td style="text-align: right; border: 1px solid #000;">23,955</td>
      <td style="text-align: right; border: 1px solid #000;">95,817</td>
    </tr>
    <tr>
      <td style="text-align: center; border: 1px solid #000;">Student Welfare (Includes medical cover/Insurance)</td>
      <td style="text-align: right; border: 1px solid #000;">&nbsp;</td>
      <td style="text-align: right; border: 1px solid #000;">12,000</td>
      <td style="text-align: right; border: 1px solid #000;">&nbsp;</td>
      <td style="text-align: right; border: 1px solid #000;">12,000</td>
      <td style="text-align: right; border: 1px solid #000;">24,000</td>
    </tr>
    <tr>
      <td style="text-align: center; border: 1px solid #000;">Library fee</td>
      <td style="text-align: right; border: 1px solid #000;">17,610</td>
      <td style="text-align: right; border: 1px solid #000;">17,610</td>
      <td style="text-align: right; border: 1px solid #000;">17,610</td>
      <td style="text-align: right; border: 1px solid #000;">17,611</td>
      <td style="text-align: right; border: 1px solid #000;">70,441</td>
    </tr>
    <tr>
      <td style="text-align: center; border: 1px solid #000;">Life Membership of Alumni Association</td>
      <td style="text-align: right; border: 1px solid #000;">&nbsp;</td>
      <td style="text-align: right; border: 1px solid #000;">5,000</td>
      <td style="text-align: right; border: 1px solid #000;">&nbsp;</td>
      <td style="text-align: right; border: 1px solid #000;">5,000</td>
      <td style="text-align: right; border: 1px solid #000;">10,000</td>
    </tr>
    <tr>
      <td style="text-align: center; border: 1px solid #000;">Computer Fee</td>
      <td style="text-align: right; border: 1px solid #000;">7,500</td>
      <td style="text-align: right; border: 1px solid #000;">7,500</td>
      <td style="text-align: right; border: 1px solid #000;">7,500</td>
      <td style="text-align: right; border: 1px solid #000;">7,500</td>
      <td style="text-align: right; border: 1px solid #000;">30,000</td>
    </tr>
    <tr>
      <td style="text-align: center; border: 1px solid #000;">*Security Deposit (Refundable subject to obtaining clearance of all dues and damage to the Institute properties/Assets)</td>
      <td style="text-align: right; border: 1px solid #000;">15,000</td>
      <td style="text-align: right; border: 1px solid #000;">&nbsp;</td>
      <td style="text-align: right; border: 1px solid #000;">&nbsp;</td>
      <td style="text-align: right; border: 1px solid #000;">&nbsp;</td>
      <td style="text-align: right; border: 1px solid #000;">15,000</td>
    </tr>
    <tr>
      <td style="background: #0070c0; color: #fff; text-align: center; border: 1px solid #000;">Total</td>
      <td style="background: #0070c0; color: #fff; text-align: right; border: 1px solid #000;">3,12,975</td>
      <td style="background: #0070c0; color: #fff; text-align: right; border: 1px solid #000;">3,14,975</td>
      <td style="background: #0070c0; color: #fff; text-align: right; border: 1px solid #000;">2,97,975</td>
      <td style="background: #0070c0; color: #fff; text-align: right; border: 1px solid #000;">3,14,975</td>
      <td style="background: #0070c0; color: #fff; text-align: right; border: 1px solid #000;">12,40,900</td>
    </tr>
    <tr>
      <td style="text-align: left; border: 1px solid #000;" colspan="6">
      <strong> Hostel Fees ( Expenses for room rent and food )</strong>
      </td>
    </tr>
    <tr>
      <td style="text-align: center; border: 1px solid #000;">Single AC room</td>
      <td style="text-align: center; border: 1px solid #000;" colspan="2">1,80,000</td>
      <td style="text-align: center; border: 1px solid #000;" colspan="2">1,80,000</td>
      <td style="text-align: right; border: 1px solid #000;">3,60,000</td>
    </tr>
    <tr>
      <td style="text-align: center; border: 1px solid #000;">Twin sharing (AC )</td>
      <td style="text-align: center; border: 1px solid #000;" colspan="2">1,40,000</td>
      <td style="text-align: center; border: 1px solid #000;" colspan="2">1,40,000</td>
      <td style="text-align: right; border: 1px solid #000;">2,80,000</td>
    </tr>
    <tr>
      <td style="text-align: center; border: 1px solid #000;">Executive room</td>
      <td style="text-align: center; border: 1px solid #000;" colspan="2">2,15,000</td>
      <td style="text-align: center; border: 1px solid #000;" colspan="2">2,15,000</td>
      <td style="text-align: right; border: 1px solid #000;">4,30,000</td>
    </tr>
    <tr>
      <td style="text-align: center; border: 1px solid #000;" colspan="6">&nbsp;</td>
    </tr>
    <tr>
      <td style="border: 1px solid #000000; text-align: left;" colspan="6"><strong> Total Programme Fee + Room + Food </strong></td>
    </tr>
    <tr>
      <td style="text-align: center; border: 1px solid #000;">Single AC room</td>
      <td style="text-align: right; border: 1px solid #000;">4,92,975</td>
      <td style="text-align: right; border: 1px solid #000;">3,14,975</td>
      <td style="text-align: right; border: 1px solid #000;">4,77,975</td>
      <td style="text-align: right; border: 1px solid #000;">3,14,975</td>
      <td style="text-align: right; border: 1px solid #000;">16,00,900</td>
    </tr>
    <tr>
      <td style="text-align: center; border: 1px solid #000;">Twin sharing ( AC)</td>
      <td style="text-align: right; border: 1px solid #000;">4,52,975</td>
      <td style="text-align: right; border: 1px solid #000;">3,14,975</td>
      <td style="text-align: right; border: 1px solid #000;">4,37,975</td>
      <td style="text-align: right; border: 1px solid #000;">3,14,975</td>
      <td style="text-align: right; border: 1px solid #000;">15,20,900</td>
    </tr>
    <tr>
      <td style="text-align: center; border: 1px solid #000;">Executive Room</td>
      <td style="text-align: right; border: 1px solid #000;">5,27,975</td>
      <td style="text-align: right; border: 1px solid #000;">3,14,975</td>
      <td style="text-align: right; border: 1px solid #000;">5,12,975</td>
      <td style="text-align: right; border: 1px solid #000;">3,14,975</td>
      <td style="text-align: right; border: 1px solid #000;">16,70,900</td>
    </tr>
  </tbody>
</table>
								</div>
                                <h5 class="mt-4 mb-4 text-5"><strong>Education Loan</strong></h5>
                                <table width="100%" border="0" cellspacing="2" cellpadding="2">
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td style="text-align: center; border: 1px solid #000;"><img src="final/img/bank-logo/sbi.jpg" alt="" width="100%"></td>
                                    <td style="text-align: center; border: 1px solid #000;"><img src="final/img/bank-logo/pnb.gif" alt="" width="100%"></td>
                                    <td style="text-align: center; border: 1px solid #000;"><img src="final/img/bank-logo/canara.jpg" alt="" width="100%"></td>
                                    <td style="text-align: center; border: 1px solid #000;"><img src="final/img/bank-logo/allahabad.png" alt="" width="100%"></td>
                                    <td style="text-align: center; border: 1px solid #000;"><img src="final/img/bank-logo/axis.jpg" alt="" width="100%"></td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td colspan="7">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td colspan="7">
                                        <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
                                          <tr>
                                            <td width="10%">&nbsp;</td>
                                            <td width="15%" style="text-align: center; border: 1px solid #000;"><img src="final/img/bank-logo/credila.jpg" alt="" width="100%"></td>
                                            <td width="16%" style="text-align: center; border: 1px solid #000;"><img src="final/img/bank-logo/hdfc.png" alt="" width="100%"></td>
                                            <td width="16%" style="text-align: center; border: 1px solid #000;"><img src="final/img/bank-logo/bob.png" alt="" width="100%"></td>
                                            <td width="16%" style="text-align: center; border: 1px solid #000;"><img src="final/img/bank-logo/bank-of-india-logo.png" alt="" width="100%"></td>
                                          	<td width="10%">&nbsp;</td>
                                          </tr>
                                        </table>
                                    </td>
                                  </tr>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading4">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#scholarships" aria-expanded="false" aria-controls="scholarships">
                                    <i class="more-less fas fa-plus"></i>
                                    Scholarships
                                </a>
                            </h4>
                        </div>
                        <div id="scholarships" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                            <div class="panel-body">
                                <p class="mb-1"><i class="fas fa-hand-point-right"></i> Interim Scholarship for Outstanding Academic Performance</p>
                                <p class="mb-1"><i class="fas fa-hand-point-right"></i> Scholarship for Economically Weaker Section</p>
                                <p class="mb-1"><i class="fas fa-hand-point-right"></i> 100% Tuition Fee Waiver for Meritorious Students</p>
                                <p class="mb-1"><i class="fas fa-hand-point-right"></i> Scholarship based on Extra-curricular Activities</p>
                                <p class="mb-1"><i class="fas fa-hand-point-right"></i> Special Consideration for SC/ST/OBC (NC)/Physically Challenged Candidates.</p>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
            </div>
      </div>
        </div>
  </section>
  
      <section class="section section-no-background section-no-border mt-0 mb-0 pt-0 pb-0">
      <div class="container">
    <div class="row">
          <div class="col-lg-12 text-center">
        <h2 class="heading-dark mb-2">Our <strong>Recruiters</strong></h2>
      </div>
          <div class="content-grid content-grid-dashed mt-5 mb-4 col-md-12">
        <div class="row content-grid-row">
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-1.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-2.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-3.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-4.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-5.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-6.jpg" alt=""> </div>
            </div>
        <div class="row content-grid-row">
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-7.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-8.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-9.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-10.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img   class="img-fluid" src="img/new/r-11.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-12.jpg" alt=""> </div>
            </div>
        <div class="row content-grid-row">
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-13.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-14.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-15.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-16.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-17.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-18.jpg" alt=""> </div>
            </div>
        <div class="row content-grid-row">
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-19.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-20.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-21.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-22.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-23.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-24.jpg" alt=""> </div>
            </div>
        <div class="row content-grid-row">
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-25.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-26.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-27.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-28.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-29.jpg" alt=""> </div>
              <div class="content-grid-item col-4 col-lg-2 text-center"> <img class="img-fluid" src="img/new/r-30.jpg" alt=""> </div>
            </div>
      </div>
        </div>
  </div>
    </div>
</section>
<section class="section section-no-border mt-5 mb-0 pt-0 pb-0 career-mobile-bg"  style="background-image:url(final/img/placement-banner.jpg); min-height: 580px; -webkit-filter: grayscale(100%);
    filter: grayscale(100%); background-size: cover;">
      <div class="container" style="position: relative;">
    <div class="row"> 
          <!--<div class="col-lg-12 text-center">
								<h2 class="heading-dark mb-0"><strong>Career </strong> Opportunities </h2>
							</div>--> 
        </div>
    <div class="col-lg-12 career-text-header">
          <h2 class="heading-light mb-0"><strong>Recruitment </strong> Process </h2>
        </div>
    <div class="col-lg-12 career-text">
          <p class="text-left">The Placement Cell at International Management Institute Kolkata acts as a dedicated interface for developing corporate engagement on campus through live projects, industry visits, summer internships and final placement opportunities.</p>
        </div>
  </div>
</section>

<section class="section section-no-background section-no-border mt-0 mb-0 pb-0 pt-0">
    <!--<div class="container">
          <div class="row">
        <div class="col-lg-12 text-center">
              <h2 class="heading-dark mb-0">The  <strong>Programmes</strong> </h2>
              <h4>AICTE approved and equivalent to MBA as per Association of Indian Universities (AIU). The National Board of Accreditation (NBA) accredits the PGDM Programme </h4>
            </div>
      </div>
        </div>-->
    <div class="container-fluid">
          <div class="row">
        <div class="col-lg-7 p-0"  style="position:relative;">
              <div class="custom_title2"><span>Programme</span></div>
              <section class="section section-text-light section-background section-center match-height mt-0 " style="background-image: url(final/img/workshop.jpg); min-height: 260px; -webkit-filter: grayscale(100%);
    filter: grayscale(100%);">
            <div class="container">
                  <div class="row">
                <div class="col"> </div>
              </div>
                </div>
          </section>
            </div>
        <div class="col-lg-5 p-0">
              <section class="section section-primary pl-4 pr-4 mt-0 match-height">
            <div class="row">
                  <div class="col-md-12 col-xs-12">
                <h4 class="text-center text-white pb-1 bl-bg" style="background: #000; 
								padding:3px 0px;"> Fellowship Programme in Management (FPM) </h4>
                <p> The FPM is designed to train scholars for careers in research, teaching and consultancy in technical and theoretical disciplines underlying business administration. These skills have become mandatory for jobs in academia and are increasingly important in business and government, as well as in consulting, research and technical advisory firms. </p>
                <ul class="list list-icons list-icons-style-3 list-icons-sm text-white">
                      <li><i class="fas fa-check"></i> Promote contemporary academic research.</li>
                      <li><i class="fas fa-check"></i> Develop the prospect of new age management education in India with pertinent theoretical insights.</li>
                      <li  id="aboutFPM" name="aboutFPM"><i class="fas fa-check"></i>Train, motivate and empower prospective scholars to become highly skilled and innovative researchers and facilitators.</li>
                    </ul>
              </div>
                </div>
          </section>
            </div>
      </div>
        </div>
  </section>

<section class="section section-no-background section-no-border pt-3 pb-2">
    <div class="container">
          <div class="row">
        <div class="col-lg-12">
              <h2 class="heading-dark text-center mb-3">FPM Admission Details <strong>2020-22</strong></h2>
              <div class="row">
            <div class="col-md-12">
            	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading5">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#eligibilityCriteria1" aria-expanded="true" aria-controls="eligibilityCriteria1">
                                    <i class="more-less fas fa-minus"></i>
                                    Eligibility Criteria
                                </a>
                            </h4>
                        </div>
                        <div id="eligibilityCriteria1" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="heading5">
                            <div class="panel-body">
                                <h5  class="mb-2"><strong>Educational Qualification:</strong></h5>
                                <p class="mb-1"><i class="fas fa-hand-point-right"></i> A Post-graduate degree or its equivalent in any discipline with a minimum of 55% aggregate marks.</p>
                                <span class="text-center" style="display: block;"> OR</span>
                                <p class="mb-1"><i class="fas fa-hand-point-right"></i> A Bachelor's Degree in Engineering with a minimum of 60% marks or equivalent grade point average and a minimum of 3 years of relevant work experience.</p>
                                <span class="text-center" style="display: block;"> OR</span>
                                <p class="mb-1"><i class="fas fa-hand-point-right"></i> Any professional qualifications such as CA, ICWA and CS with a minimum of 55% aggregate marks in addition, all the candidates must have secured a minimum of 55% marks in all of their public examinations starting with the secondary level. Work experience in industry or academics may be given due credit in the selection process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading6">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#admissionProcess2" aria-expanded="false" aria-controls="admissionProcess2">
                                    <i class="more-less fas fa-plus"></i>
                                    Admission Process
                                </a>
                            </h4>
                        </div>
                        <div id="admissionProcess2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                            <div class="panel-body">
                                <h5 class="mb-2"><strong>Admission Test:</strong></h5>
                            	<p class="mb-1"><i class="fas fa-hand-point-right"></i> For all candidates fulfilling the eligibility criteria the Institute will conduct its very own Research Aptitude Test (RAT) and Personal Interview (PI). RAT will include Logical Reasoning, Analytical Ability and Writing Ability through descriptive questions. Candidates having valid CAT/GMAT/GRE scores may also apply for the programme.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading7">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#feeFinancing3" aria-expanded="false" aria-controls="feeFinancing3">
                                    <i class="more-less fas fa-plus"></i>
                                    Fee and Financing
                                </a>
                            </h4>
                        </div>
                        <div id="feeFinancing3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                            <div class="panel-body">
                                <p class="mb-0"><img class="img-fluid" src="img/new/fee2.png"> </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading8">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#scholarships4" aria-expanded="false" aria-controls="scholarships4">
                                    <i class="more-less fas fa-plus"></i>
                                    Scholarships
                                </a>
                            </h4>
                        </div>
                        <div id="scholarships4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
                            <div class="panel-body">
                                <p class="mb-2"><i class="fas fa-hand-point-right"></i> IMI Kolkata will offer limited number of scholarships based on merit. For the first two years, they will be provided with scholarships amounting to INR 20,000 per month. Scholarships for the third and the fourth year will be INR 25,000 per month.</p>
                                <p class="mb-2"><i class="fas fa-hand-point-right"></i> The IMI Kolkata Scholarship holders are also eligible to get liberal grant for buying books, called contingency grant up to a maximum of INR 25,000 per annum, as per norms. It is to be noted that the tuition fees for IMI Scholarship holders may be waived off.</p>
                                <p class="mb-2"><i class="fas fa-hand-point-right"></i> Self-sponsored candidates and candidates with scholarships from other funding agencies (viz. UGC, ICSSR, etc.) are also encouraged to apply.</p>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
            </div>
      </div>
        </div>
  </section>
</div>
<footer id="footer" class="mt-0"> <a style="display: none;" data-hash data-hash-offset="100" href="#formredirect" class="fixbutton btn btn-lg btn-primary">Apply Now!</a>
      <div class="footer-copyright">
    <div class="container">
          <div class="row">
        <div class="col-md-12 text-center">
              <p>© Copyright 2020. All Rights Reserved.</p>
            </div>
      </div>
        </div>
  </div>
    </footer>
</div>

<!-- Vendor --> 
<script src="final/vendor/jquery/jquery.min.js"></script> 
<script src="final/vendor/jquery.appear/jquery.appear.min.js"></script> 
<script src="final/vendor/jquery.easing/jquery.easing.min.js"></script> 
<script src="final/vendor/jquery-cookie/jquery-cookie.min.js"></script> 
<script src="final/vendor/popper/umd/popper.min.js"></script> 
<script src="final/vendor/bootstrap/js/bootstrap.min.js"></script> 
<script src="final/vendor/common/common.min.js"></script> 
<!--<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>--> 
<script src="final/vendor/jquery.lazyload/jquery.lazyload.min.js"></script> 
<script src="final/vendor/isotope/jquery.isotope.min.js"></script> 
<!--<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/vide.min.js"></script>--> 

<!-- Theme Base, Components and Settings --> 
<script src="final/js/theme.js"></script> 

<!-- Current Page Vendor and Views --> 
<script src="final/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
<script src="final/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 

<!-- Theme Custom --> 
<script src="final/js/custom.js"></script> 

<!-- Theme Initialization Files --> 
<script src="final/js/theme.init.js"></script> 
<script src="js/formValidation/custom.lead.js"></script> 

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

<script>
function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('fa-plus fa-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);
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
  $(document).ready(function(){
    $capcha1=$('.findcapcha1').val();
    
    $('.checkcapcha1').keyup(function()
    {
      $checkcapcha1=$('.checkcapcha1').val();
    if($checkcapcha1==$capcha1)
    {
        $('.formsubmitbtn1').removeAttr('disabled');
        $('.capchaspan1').css('display','none');
    }
    else
    {
        $('.formsubmitbtn1').attr("disabled", 'disabled');
        $('.capchaspan1').css('display','block');
    }


    });
    
  })
</script>


</body>

<!-- Mirrored from admissions.imi-k.edu.in// by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Feb 2020 09:10:43 GMT -->
</html>
