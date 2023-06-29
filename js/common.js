//Animate CSS + WayPoints javaScript Plugin
//Example: $(".element").animated("zoomInUp");
//Author URL: http://webdesign-master.ru
(function($) {
  $.fn.animated = function(inEffect) {
    $(this).each(function() {
      var ths = $(this);
      ths.css("opacity", "0").addClass("animated").waypoint(function(dir) {
        if (dir === "down") {
          ths.addClass(inEffect).css("opacity", "1");
        };
      }, {
        offset: "90%"
      });

    });
  };
})(jQuery);

$(document).ready(function(){

  $(".loader_inner").fadeOut();
  $(".loader").delay(10).fadeOut("slow");

  $(".main_head").addClass("start_animation");

  LL = new LazyLoad({
    elements_selector: ".lazy_bg",
  });
  new LazyLoad();

  var win_width = $(window).width();
  var offset_top = $(window).height();
  var scrollTop = $(window).scrollTop();

  $("body").toggleClass("down", (win_width > 768 && scrollTop > offset_top));

  $(window).resize(function() {
    offset_top = $(window).height();
    win_width = $(window).width();
    $("body").toggleClass("down", (win_width > 768 && scrollTop > offset_top));
  });
  $(window).scroll(function() {
    scrollTop = $(window).scrollTop();
    $("body").toggleClass("down", (win_width > 768 && scrollTop > offset_top));
  });


  var w = $(window).width();
  change_menu_class();
  $(window).resize(function() {
    if ($(window).width()==w) return;
    w = $(window).width();
    change_menu_class();
  });

  function change_menu_class() {
    if ( $(window).width() < 768 ) {
      $(".menu").removeClass("head_menu");
      $(".menu").addClass("mobile_menu");
    } else {
      $(".menu").removeClass("mobile_menu");
      $(".menu").addClass("head_menu");
    }
  }

  $(".toggle_mnu").click(function() {
    $(".sandwich").toggleClass("active");
    $("header").toggleClass("menu_active");
    $(".mobile_menu").toggleClass("active");
  });



  var gallery_thubn = $('.gallery_thubn');
  gallery_thubn.slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    fade: false,
    adaptiveHeight: false,
    infinite: true,
    pauseOnFocus: true,
    draggable: true,
    centerMode: false,
    variableWidth: false,
    autoplay: false,
    autoplaySpeed: 5000,
    focusOnSelect: true,
    arrows: false,
    dots: false,
    asNavFor: '.gallery_items',
    responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 5,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 4,
      }
    }
    ]
  });

  var gallery_items = $('.gallery_items');
  gallery_items.on('init reInit beforeChange', function (event, slick, currentSlide, nextSlide) {
    var i = (nextSlide ? nextSlide : 0) + 1;
    $('.gallery_items_count').html('<span class="slideCountItem">' + i + ' </span>' + '<span class="divider"> / </span>' + '<span class="slideCountAll"> ' + slick.slideCount + '</span>');
  });
  gallery_items.slick({
    slide: ".item",
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    adaptiveHeight: true,
    infinite: true,
    pauseOnFocus: true,
    draggable: true,
    centerMode: false,
    variableWidth: false,
    autoplay: false,
    autoplaySpeed: 5000,
    arrows: true,
    dots: false,
    asNavFor: '.gallery_thubn',
  });




  

  $(".animation_1").animated("fadeIn");
  $(".animation_2").animated("fadeInLeft");
  $(".animation_3").animated("fadeInRight");
  $(".animation_4").animated("zoomIn");
  $(".animation_5").animated("fadeInUp");
  $(".animation_6").animated("tada");
  $(".animation_7").animated("flash");
  $(".animation_8").animated("zoomInDown");

});

