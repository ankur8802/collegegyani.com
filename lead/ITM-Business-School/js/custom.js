
/* -------------------------------	
		 LOADER JS START
/* ----------------------------- */
 
var $preloader = $('.loader'),
        $spinner   = $preloader.find('.nothing');
    $spinner.fadeOut();
    $preloader.delay('1500').fadeOut('slow');

/* -------------------------------  
        SILDER UPDATES
/* ----------------------------- */

$("#heroo").owlCarousel({
        items: 1,
        nav: false,
        dots: true,
        autoplay: true,
        loop: true,

         //dots: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        mouseDrag: true,
        touchDrag: true
    });
    // This js codes are for repeating slider text animations
    var heroSection = $(".hero-section");
    var heroSectionText = $(".hero-section-slide h2, .hero-section-slide p");
    var heroSectionButton = $(".hero-section-slide a"); 
    heroSection.on("translate.owl.carousel", function(){
        heroSectionText.removeClass("animated fadeInUp").css("opacity", "0");
        heroSectionButton.removeClass("animated fadeInDown").css("opacity", "0");
    });
    heroSection.on("translated.owl.carousel", function(){
        heroSectionText.addClass("animated fadeInUp").css("opacity", "1");
        heroSectionButton.addClass("animated fadeInDown").css("opacity", "1");
    }); 


  //Client Carousel
$("#testimonial-speak").owlCarousel({
        //autoPlay: 5000, //Set AutoPlay to 5 seconds
        autoplay: false,
        //smartSpeed: 2000, // Default is 250
        items: 4, //Set Testimonial items
        loop: true,
        margin: 10,
        singleItem: true,
        touchDrag: true,
        mouseDrag: true,
        pagination: false,
        nav: true,
        dots: false,
        navText: ["<i class='fa fa-arrow-left'></i>", "<i class='fa fa-arrow-right'></i>"],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        667:{
            items:2,
        },
        768:{
            items:4,
        },
        1000:{
            items:4,
        }
    }   
        
    }); 


  
//Client Carousel
$("#client-slider").owlCarousel({
        //autoPlay: 5000, //Set AutoPlay to 5 seconds
        autoplay: true,
        //smartSpeed: 2000, // Default is 250
        items: 1, //Set Testimonial items
        loop: true,
        margin: 10,
        singleItem: true,
        touchDrag: true,
        mouseDrag: true,
        pagination: false,
        nav: true,
        dots: false,
        navText: ["<i class='fa fa-arrow-left'></i>", "<i class='fa fa-arrow-right'></i>"],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        480:{
            items:1,
        },
        568:{
            items:1,
        },
        600:{
            items:1,
        },
        667:{
            items:1,
        },
        1000:{
            items:1,
        }
    }   
        
    }); 
    	
	jQuery(function ($) {
    $.scrollIt({
        upKey: 38,             // key code to navigate to the next section
        downKey: 40,           // key code to navigate to the previous section
        easing: 'linear',      // the easing function for animation
        scrollTime: 600,       // how long (in ms) the animation takes
        activeClass: 'is-active-top-nav__1level', // class given to the active nav element
        onPageChange: null,    // function(pageIndex) that is called when page is changed
        topOffset: -63           // offset (in px) for fixed top navigation
    });

});

		

/* -------------------------------	

		 WOW ANIMATED JS START

/* ----------------------------- */

// Elements Animation
    if($('.wow').length){
        var wow = new WOW(
          {
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       0,          // distance to the element when triggering the animation (default is 0)
            mobile:       false,       // trigger animations on mobile devices (default is true)
            live:         true       // act on asynchronously loaded content (default is true)
          }
        );
        wow.init();
    }


/* -------------------------------	

		INPUT PLACEHOLDER

/* ----------------------------- */

$('input,textarea').focus(function(){

   $(this).data('placeholder',$(this).attr('placeholder'))

          .attr('placeholder','');

}).blur(function(){

   $(this).attr('placeholder',$(this).data('placeholder'));

});

/* ---------------------	

		STICKY NAV

/* --------------------- */

var stickyNavTop = $('#header').offset().top;
var stickyNav = function(){
var scrollTop = $(window).scrollTop();
if (scrollTop > stickyNavTop) { 

    $('#header').addClass('sticky');

} else {

    $('#header').removeClass('sticky'); 

}

};

stickyNav();

 

$(window).scroll(function() {

    stickyNav();

});



/* ---------------------	

		back-top

/* --------------------- */

if ($('#back-top').length) {

    var scrollTrigger = 100, // px

        backToTop = function () {

            var scrollTop = $(window).scrollTop();

            if (scrollTop > scrollTrigger) {

                $('#back-top').addClass('show');

            } else {

                $('#back-top').removeClass('show');

            }

        };

    backToTop();

    $(window).on('scroll', function () {

        backToTop();

    });

    $('#back-top').on('click', function (e) {

        e.preventDefault();

        $('html,body').animate({

            scrollTop: 0

        }, 700);

    });

}


$('a[href^="#applyBox"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});

$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 300) {
        $('#sideNavi').fadeIn();
    } else {
        $('#sideNavi').fadeOut();
    }

});