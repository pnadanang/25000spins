jQuery(document).ready(function($) {   
// console.log(4); 
    $('#menu_responsive ul#menu-primary-menu > li.menu-item-has-children > a').click(function(e){
        $(this).next('ul.sub-menu').slideToggle();
        $(this).parent('li').toggleClass('open-child');
        e.preventDefault();
    });  

    $('#menu_responsive ul#menu-secondary-menu > li.menu-item-has-children > a').click(function(e){
        $(this).next('ul.sub-menu').slideToggle();
        $(this).parent('li').toggleClass('open-child');
        e.preventDefault();
    });  

    $('.our_trips').owlCarousel({
        loop:true,
        margin:20,
        responsiveClass:true,
        // autoplay:true,
        dots: false,
        nav:true,
        autoplayTimeout: 8500,
        smartSpeed: 450,
        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });

    $('#blog-slider .owl-carousel').owlCarousel({
        loop:true,
        margin:0,
        responsiveClass:true,
        // autoplay:true,
        dots: true,
        nav:false,
        autoplayTimeout: 8500,
        smartSpeed: 450,
        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
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

    $('.completed_charity').owlCarousel({
        loop:true,
        margin:20,
        responsiveClass:true,
        // autoplay:true,
        dots: false,
        nav:true,
        autoplayTimeout: 8500,
        smartSpeed: 450,
        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });

// =====================================================
  var bigimage = $(".big");
  var thumbs = $(".thumbs");
  //var totalslides = 10;
  var syncedSecondary = true;

  bigimage
    .owlCarousel({
    items: 1,
    slideSpeed: 2000,
    nav: false,
    autoplay: false,
    dots: false,
    loop: true,
    responsiveRefreshRate: 200,
    // navText: [
    //   '<i class="fa fa-angle-left" aria-hidden="true"></i>',
    //   '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    // ]
  })
  .on("changed.owl.carousel", syncPosition);

  thumbs
    .on("initialized.owl.carousel", function() {
    thumbs
      .find(".owl-item")
      .eq(0)
      .addClass("current");
  })
    .owlCarousel({
    items: 4,
    dots: false,
    nav: false,
    navText: [
      '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    smartSpeed: 200,
    slideSpeed: 500,
    slideBy: 4,
    responsiveRefreshRate: 100,
     responsive:{
            0:{
                items:0
            },
            767:{
                items:0
            },
            980:{
                items:4
            },
            1024:{
                items:5
            }
        }
  })
    .on("changed.owl.carousel", syncPosition2);

  function syncPosition(el) {
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

    if (current < 0) {
      current = count;
    }
    if (current > count) {
      current = 0;
    }
    thumbs
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = thumbs.find(".owl-item.active").length - 1;
    var start = thumbs
    .find(".owl-item.active")
    .first()
    .index();
    var end = thumbs
    .find(".owl-item.active")
    .last()
    .index();

    if (current > end) {
      thumbs.data("owl.carousel").to(current, 100, true);
    }
    if (current < start) {
      thumbs.data("owl.carousel").to(current - onscreen, 100, true);
    }
  }

  function syncPosition2(el) {
    if (syncedSecondary) {
      var number = el.item.index;
      bigimage.data("owl.carousel").to(number, 100, true);
    }
  }

  thumbs.on("click", ".owl-item", function(e) {
    e.preventDefault();
    var number = $(this).index();
    bigimage.data("owl.carousel").to(number, 300, true);
  });

// ===========================================
  $('#menu_responsive_bar i').click(function(){
    // console.log(123);
      $('#menu_responsive').slideToggle(500);
  });
// console.log(1);

  window.onscroll = function() {myFunction()};
  var header = document.getElementById("scroll-nav"),
      sticky = header.offsetTop,
      top_menu = $('#top_menu'),
      logo_container = top_menu.children('.logo_container'),
      main_menu_wrapper = $('#main_menu_wrapper'),
      primary_menu = main_menu_wrapper.find('.primary_menu');
  function myFunction() {
	  var logo_width = logo_container.width(),
      menu_height = main_menu_wrapper.height();
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
        logo_container.css({
			'height': menu_height,
			'width': logo_width
			});
        primary_menu.css('padding-left', logo_width);
    } else {
      header.classList.remove("sticky");
        logo_container.css({'height': ''});
        primary_menu.css('padding-left', '');
    }
  }

});
setInterval(function(){
// console.log(13); 
    // console.log(jQuery('.video-box-homepage').parent('.owl-item').height());
    var maxHeight_slider = 0;
    var video_box = jQuery('.video-box-homepage').parent('.owl-item');
    $(video_box).each(function(){
       if ($(this).height() > maxHeight_slider) { maxHeight_slider = $(this).height(); }
    });

    $("#slider_home .big .owl-item").height(maxHeight_slider);
 }, 100);
