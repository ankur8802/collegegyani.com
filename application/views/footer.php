<style type="text/css">
  .footer-category li:before
  {
    content: none;
  }
  .icon-bar {
     position: fixed;
    bottom: 50px;
    right: 50px;
    background:#25D366;
    padding: 10px 15px;
    border-radius: 50%;
    z-index: 999999;
  }
  .icon-bar a {
    color: #fff;
    font-size: 30px;
}

@keyframes blink{
    0%{
        opacity:1
        }

    50%{
        opacity:0
        }
    100%{
        opacity:1
        }
}

.blinkanim{
    animation: blink 3s infinite 0s linear;
}

</style>

<div class="icon-bar blinkanim" style="display:none;">
  <a href="https://api.whatsapp.com/send?phone=+919582110779" target="_blank" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
</div>


<div class="footer-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-xs-12 about-us-footer">
        <h3>ABOUT College Gyani</h3>
      
        <p>Top PGDM MBA B-TECH Colleges in India Get Exam Detail Top Colleges Detail Top University Course News Updates</p>
      </div>
    <!--   <div class="col-md-3">
        <h3>Quick  LInks</h3>
        <ul class="footer-links">
          <li><a href="<?= base_url()?>">Home</a></li>
          <li><a href="#.">About Us</a></li>
          <li><a href="#.">Features</a></li>
          <li><a href="#.">Categories</a></li>
          <li><a href="#.">Blog</a></li>
          <li><a href="#.">Contact Us</a></li>
        </ul>
      </div> -->
      <div class="col-md-5">
        <h3>MAIN CATEGORIES</h3>
        <ul class="footer-category">
          <li><a href="<?= base_url('exam-in-india')?>">Top Exams</a></li>
          <li><a href="<?= base_url('educational-news')?>">Top News</a></li>
          <li><a href="<?= base_url('engineering-colleges-in-india')?>">Engineering Colleges in India</a></li>
          <li><a href="<?= base_url('commerce-colleges-in-india')?>">Commerce Colleges in India</a></li>
          <li><a href="<?= base_url('medical-colleges-in-india')?>">Medical Colleges in India</a></li>
          <li><a href="<?= base_url('management-colleges-in-india')?>">Management Colleges in India</a></li>
         <!--  <li><a href="#.">Pharmacy</a></li>
          <li><a href="#.">Agriculture</a></li> -->
               
          
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-3 about-us-footer">
        <h3>Contact Us</h3>
        <div class="address" style="padding:0">Info@CollegeGyani.com </div>
      <!--   <div class="info"><i class="fa fa-phone" aria-hidden="true"></i> <a href="#.">(+91) </a></div> -->
       <!--  <div class="info"><i class="fa fa-fax" aria-hidden="true"></i> <a href="#.">(0000) </a></div> -->
      </div>


    </div>

    <div class="row copyright">
      
  <div class="col-md-3 text-center footer-courses">
     <h3 style="text-transform:uppercase;">management</h3>
       <ul>
           <li><a href="<?= base_url('bba-colleges')?>"> Top BBA Colleges in India </a></li>
           <li> <a href="<?= base_url('mba-colleges')?>">   Top MBA Colleges in India </a></li> 
           <li><a href="<?= base_url('pgdm-colleges')?>">  Top PGDM Colleges in India </a> </li>
           <li><a href="<?= base_url('bba-mba-colleges')?>">  Top BBA & MBA Colleges in India </a></li>
           <li><a href="<?= base_url('bbm-colleges')?>">  Top BBM Colleges in India </a></li>

        </ul>
  </div>

    <div class="col-md-3 text-center footer-courses">
     <h3 style="text-transform:uppercase;">engineering</h3>
          <ul>
           <li><a href="<?= base_url('btech-colleges')?>">  Top B-Tech Colleges in India </a></li>
           <li> <a href="<?= base_url('mtech-colleges')?>"> Top M-Tech Colleges in India</a></li>
           <li><a href="<?= base_url('barch-colleges')?>">  Top B-Arch Colleges in India</a> </li>
           <li><a href="<?= base_url('btech-mtech-colleges')?>">Top B-Tech & M-Tech  Colleges in India</a></li>
           <li><a href="<?= base_url('be-colleges')?>"> Top BE Colleges in India</a></li>    
        </ul>
  </div>

      <div class="col-md-3 text-center footer-courses">
     <h3 style="text-transform:uppercase;">commerce</h3>
       <ul>
           <li><a href="<?= base_url('bcom-colleges')?>">  Top B.Com Colleges in India  </a></li>
           <li> <a href="<?= base_url('mcom-colleges')?>"> Top M.Com Colleges in India </a></li>
           <li><a href="<?= base_url('mphil-colleges')?>"> Top M.Phil Colleges in India</a> </li>
           <li><a href="<?= base_url('bed-colleges')?>"> Top B.ED Colleges in India</a></li>
           <li><a href="<?= base_url('cs-colleges')?>"> Top CS Colleges in India</a></li>
        </ul>
  </div>

        <div class="col-md-3 text-center footer-courses">
     <h3 style="text-transform:uppercase;">medical</h3>
        <ul>
           <li><a href="<?= base_url('mbbs-colleges')?>">   Top MBBS Colleges in India  </a> </li>
           <li><a href="<?= base_url('ms-colleges')?>">  Top MS Colleges in India  </a> </li>
           <li><a href="<?= base_url('bpharma-colleges')?>">  Top B-PHARMA Colleges in India  </a> </li>
           <li><a href="<?= base_url('mpharma-colleges')?>">  Top M-PHARMA Colleges in India  </a> </li>
           <li><a href="<?= base_url('bams-colleges')?>"> Top BAMS Colleges in India </a></li>
           
         
        </ul>
  </div>


    </div>


    <div class="copyright">Copyright © 2019 College Gyani- All Rights Reserved.</div>
  </div>
</div>

<!--footer end--> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="<?= base_url()?>/assets/js/jquery-2.1.4.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?= base_url()?>/assets/js/bootstrap.min.js"></script> 
<script src="<?= base_url()?>/assets/owl/owl.carousel.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<!-- general script file --> 
<script type="text/javascript" src="<?= base_url()?>/assets/js/script.js"></script>

</body>
<script>
  $('.topexam').click(function(){
      $(".circle").removeClass("circle-active");
      $(".stats-no").removeClass("stats-no-active");
    $(this).addClass("circle-active");
    $(this).children().eq(0).addClass("stats-no-active");

   $('.hide-on-click').hide();
   $('.top-exam-section').show();
   // $('.circle').addClass("circle-active");

  });

   $('.upcomingexam').click(function(){
     $(".circle").removeClass("circle-active");
      $(".stats-no").removeClass("stats-no-active");
    $(this).addClass("circle-active");
    $(this).children().eq(0).addClass("stats-no-active");
   $('.hide-on-click').hide();
   $('.upcoming-exam-section').show();
  });

    $('.upcomingresult').click(function(){
       $(".circle").removeClass("circle-active");
      $(".stats-no").removeClass("stats-no-active");
      $(this).addClass("circle-active");
    $(this).children().eq(0).addClass("stats-no-active");
   $('.hide-on-click').hide();
   $('.upcoming-results-section').show();
  });

     $('.latestexam').click(function(){
       $(".circle").removeClass("circle-active");
      $(".stats-no").removeClass("stats-no-active");
      $(this).addClass("circle-active");
    $(this).children().eq(0).addClass("stats-no-active");
   $('.hide-on-click').hide();
   $('.latest-exam-section').show();
  });

</script>

<script>
  $('.facilities').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
     navText: ["<img src='<?= base_url()?>/assets/images/left-arrow.png'>","<img src='<?= base_url()?>/assets/images/right-arrow.png'>"],
    responsive:{
        0:{
            items:2
        },
         450:{
            items:3
        },
        600:{
            items:4
        },
        1000:{
            items:5
        }
    }
});


        $('.services-here').owlCarousel({
          loop:true,
          dots:false,
          margin:0,
          nav: true,
          navText: ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
          responsive:{
              0:{
                  items:2
              },
              600:{
                  items:5
              },
              1000:{
                  items:7
              }
          }
      })



</script>
<script src="https://kit.fontawesome.com/e6726924f5.js"></script>
<script>
  $(document).ready(function() {

          $('.gallery').click(function(){
      $('.hide-jq').hide();
      $('.main-section-gallery').show();
       $('.removecl').removeClass("options-active");
      $('.removewoa').removeClass("white-on-active");
      $('.gallery').addClass("options-active");
      $('.gallery').children().addClass("white-on-active");
  
      });

          
    $('.info').click(function(){
      $('.hide-jq').hide();
      $('.main-section-reviews').show();
      $('.main-section-profile').show();
      $('.main-section-fees').show();
      $('.removecl').removeClass("options-active");
      $('.removewoa').removeClass("white-on-active");
      $('.info').addClass("options-active");
      $('.info').children().addClass("white-on-active");
   


    });

     $('.Placement').click(function(){
      $('.hide-jq').hide();
      $('.main-section-Placement').show();
       $('.removecl').removeClass("options-active");
      $('.removewoa').removeClass("white-on-active");
      $('.Placement').addClass("options-active");
      $('.Placement').children().addClass("white-on-active");
     


    });


     $('.fees').click(function(){
      $('.hide-jq').hide();
      $('.main-section-fees').show();
       $('.removecl').removeClass("options-active");
      $('.removewoa').removeClass("white-on-active");
      $('.fees').addClass("options-active");
      $('.fees').children().addClass("white-on-active");
     


    });

      $('.review').click(function(){
      $('.hide-jq').hide();
      $('.main-section-review').show();
       $('.removecl').removeClass("options-active");
      $('.removewoa').removeClass("white-on-active");
      $('.review').addClass("options-active");
      $('.review').children().addClass("white-on-active");
     


    });

      $('.faculty').click(function(){
      $('.hide-jq').hide();
      $('.main-section-faculty').show();
       $('.removecl').removeClass("options-active");
      $('.removewoa').removeClass("white-on-active");
      $('.faculty').addClass("options-active");
      $('.faculty').children().addClass("white-on-active");
     


    });


     

         $('.hostel').click(function(){
      $('.hide-jq').hide();
      $('.main-section-hostel').show();
       $('.removecl').removeClass("options-active");
      $('.removewoa').removeClass("white-on-active");
      $('.hostel').addClass("options-active");
      $('.hostel').children().addClass("white-on-active");
     


    });
          $('.scholarship').click(function(){
      $('.hide-jq').hide();
      $('.main-section-scholarship').show();
       $('.removecl').removeClass("options-active");
      $('.removewoa').removeClass("white-on-active");
      $('.scholarship').addClass("options-active");
      $('.scholarship').children().addClass("white-on-active");
     


    });

      $('.reviews').click(function(){
      $('.hide-jq').hide();
      $('.main-section-reviews').show();
      $('.removecl').removeClass("options-active");
      $('.removewoa').removeClass("white-on-active");
      $('.reviews').addClass("options-active");
      $('.reviews').children().addClass("white-on-active");
     


    });


  
});

  $('.first-owl').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
     navText: ["<img src='<?= base_url()?>/assets/images/left-arrow.png'>","<img src='<?= base_url()?>/assets/images/right-arrow.png'>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
});


   $('.Categories-owl').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
     navText: ["<img src='<?= base_url()?>/assets/images/left-arrow.png'>","<img src='<?= base_url()?>/assets/images/right-arrow.png'>"],
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});


   $('.exam-owl').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText: ["<img src='<?= base_url()?>/assets/images/left-arrow.png'>","<img src='<?= base_url()?>/assets/images/right-arrow.png'>"],
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});
</script>

<script>
    

       $(".exam-title,.exams").mouseover(function(){

         $(".exams").show();
         $(".exam-title").css("background","#e2a656");
         $(".exam-title a").css("color","#fff");
       });

       $(".exam-title,.exams").mouseout(function(){

         $(".exams").hide();
         $(".exam-title").css("background","#fff");
         $(".exam-title a").css("color","#5B6677");
       });

        $(".management-title,.management").mouseover(function(){

         $(".management").show();
         $(".management-title").css("background","#e2a656");
         $(".management-title a").css("color","#fff");
       });

       $(".management-title,.management").mouseout(function(){

         $(".management").hide();
         $(".management-title").css("background","#fff");
         $(".management-title a").css("color","#5B6677");
       });

           
           $(".Engineering-title,.Engineering").mouseover(function(){

         $(".Engineering").show();
         $(".Engineering-title").css("background","#e2a656");
         $(".Engineering-title a").css("color","#fff");
       });

       $(".Engineering-title,.Engineering").mouseout(function(){

         $(".Engineering").hide();
         $(".Engineering-title").css("background","#fff");
         $(".Engineering-title a").css("color","#5B6677");
       });

       
        $(".commerce-title,.commerce").mouseover(function(){

         $(".commerce").show();
         $(".commerce-title").css("background","#e2a656");
         $(".commerce-title a").css("color","#fff");
       });

       $(".commerce-title,.commerce").mouseout(function(){

         $(".commerce").hide();
         $(".commerce-title").css("background","#fff");
         $(".commerce-title a").css("color","#5B6677");
       });

         
           $(".medical-title,.medical").mouseover(function(){

         $(".medical").show();
         $(".medical-title").css("background","#e2a656");
         $(".medical-title a").css("color","#fff");
       });

       $(".medical-title,.medical").mouseout(function(){

         $(".medical").hide();
         $(".medical-title").css("background","#fff");
         $(".medical-title a").css("color","#5B6677");
       });

</script>

<script>
  $('.banner-slider').owlCarousel({
    loop:true,
    nav:false,
    autoplay:true,
    autoplayTimeout:2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>


 <script>
$( ".clickgetid" ).click(function() {
  var collegeid = $( this ).val();

$('.clickdropid').attr("value", collegeid);

$(this).next().click();
 
});
</script>

<script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="<?= base_url()?>/assets/script/webslidemenu.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
 baguetteBox.run('.baguetteBoxOne', {
    animation: 'fadeIn',
});


});
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
  $('.selectstate2').change(function(){
     var statename= $('.selectstate2').val();

            $.ajax({
        url: "<?= base_url("index.php/User/fetchcities")?>",
        type: "POST",
        data: ({ title:statename }),
        success: function (response) {
// alert(response);
             $(".postcities2").html(response);
       
        },
        error: function(jqXHR, textStatus, errorThrown) {
           alert(errorThrown);
        }
    });
  })
</script>


<script>
  $('.loan').change(function(){
     var statename= $('.loan').val();

            $.ajax({
        url: "<?= base_url("index.php/User/fetchcities")?>",
        type: "POST",
         data: ({ title:statename }),
        success: function (response) {
// alert(response);
             $(".loan2").html(response);
       
        },
        error: function(jqXHR, textStatus, errorThrown) {
           alert(errorThrown);
        }
    });
  })
</script>


<script>
  $('.referral').change(function(){
     var statename= $('.referral').val();

            $.ajax({
        url: "<?= base_url("index.php/User/fetchcities")?>",
        type: "POST",
         data: ({ title:statename }),
        success: function (response) {
// alert(response);
             $(".referral2").html(response);
       
        },
        error: function(jqXHR, textStatus, errorThrown) {
           alert(errorThrown);
        }
    });
  })
</script>


<script>
  $('.counselling').change(function(){
     var statename= $('.counselling').val();

            $.ajax({
        url: "<?= base_url("index.php/User/fetchcities")?>",
        type: "POST",
         data: ({ title:statename }),
        success: function (response) {
// alert(response);
             $(".counselling2").html(response);
       
        },
        error: function(jqXHR, textStatus, errorThrown) {
           alert(errorThrown);
        }
    });
  })
</script>

<script>
  $('.citiesscholarship').change(function(){
     var statename= $('.citiesscholarship').val();

            $.ajax({
        url: "<?= base_url("index.php/User/fetchcities")?>",
        type: "POST",
         data: ({ title:statename }),
        success: function (response) {
// alert(response);
             $(".citiesscholarship2").html(response);
       
        },
        error: function(jqXHR, textStatus, errorThrown) {
           alert(errorThrown);
        }
    });
  })
</script>

<script>
  $(document).ready(function(){
    $('.myprofileopen').click(function(){
      $('.myprofile').slideToggle();
    })
  })
</script>





</html>
