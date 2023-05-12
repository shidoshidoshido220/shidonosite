const ham = $('.hamburger');
const menu = $('#gMenu.SP');

const body = $('#body');
ham.on('click', function(){
    ham.toggleClass('active');
    menu.toggleClass('active');
    body.toggleClass('active');
});
$('.slide-items').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,        
    dots: true,
    arrows: true,
});



var window_h = $(window).height();
$("#wh span").text(window_h);
$(window).on("scroll", function() {
  var scroll_top = $(window).scrollTop();
  $("#scroll span").text(scroll_top);

  $(".fadein01").each(function() {
    var elem_pos = $(this).offset().top;
    $(this).find(".fadein_pos span").text(Math.floor(elem_pos));
  
    if (scroll_top >= elem_pos - window_h+200) {
      $(this).addClass("fadein-after");
    } else {
      $(this).removeClass("fadein-after");
    }
  });
});

var window_h = $(window).height();
$("#wh span").text(window_h);
$(window).on("scroll", function() {
  var scroll_top = $(window).scrollTop();
  $("#scroll span").text(scroll_top);

  $(".fadein02").each(function() {
    var elem_pos = $(this).offset().top;
    $(this).find(".fadein_pos span").text(Math.floor(elem_pos));
  
    if (scroll_top >= elem_pos - window_h+200) {
      $(this).addClass("fadein-after");
    } else {
      $(this).removeClass("fadein-after");
    }
  });
});

var window_h = $(window).height();
$("#wh span").text(window_h);
$(window).on("scroll", function() {
  var scroll_top = $(window).scrollTop();
  $("#scroll span").text(scroll_top);

  $(".fadein03").each(function() {
    var elem_pos = $(this).offset().top;
    $(this).find(".fadein_pos span").text(Math.floor(elem_pos));
  
    if (scroll_top >= elem_pos - window_h+200) {
      $(this).addClass("fadein-after");
    } else {
      $(this).removeClass("fadein-after");
    }
  });
});