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