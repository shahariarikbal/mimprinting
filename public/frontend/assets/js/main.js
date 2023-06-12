// fixed header
$(window).scroll(function() {
  var scrollTop = $(window).scrollTop();
  if (scrollTop >= 100) {
      $('body').addClass('fixed-header');
  } else {
      $('body').removeClass('fixed-header');
  }
});

// Navbar Toggle Button For Mini Device
$('.nav-toggle-btn').click(function() {
  $('.nav-items-wrapper').toggleClass('menu-visible');
  $('body').toggleClass('body-overflow');
});

//Home Slider
$('.slider-items-wrapper').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    autoplay:true,
    animateOut: 'slideOutUp',
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
});

//Wow Js Initail
new WOW().init();

// Image Gallery
if ( $(".image-grid-inner").length>0 ){
  lightGallery();
  lightBox();
}

// Window Resize Event
$(window).resize(function(){
  lightGallery();
});

// Document Ready Event
$(document).ready(function(){
  setTimeout(function(){
    $('.image-grid-inner').addClass('loaded');
  },1000);
});


// Light Gallery Function
function lightGallery(){
  $('body').imagesLoaded( function() {
    $('.image-grid-inner').GridHorizontal({
      item: '.image-grid-inner .item',
      minWidth: 400,
      maxRowHeight: 350,
      gutter: 5,
    });
  });
}

// LightBox Function
function lightBox(){
  (function() {
      var $gallery = new SimpleLightbox('.image-grid-inner a', {});
  })();
}

//Testimonial Slider
$('.testimonial-items-wrapper').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:false,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
});

