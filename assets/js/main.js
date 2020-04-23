var $=jQuery;
$(document).ready(function(){
    $('.menu-toggle').on('click',function(e){
        e.preventDefault();
        $('.menu-mobile').slideDown('fast');
    });
    $('.menu-mobile .close').on('click',function(e){
        e.preventDefault();
        $('.menu-mobile').slideUp('fast');
    });

    $('.slick-slider').slick({
        dots: true,
        infinite: false,
        speed: 300,
        adaptiveHeight: true,
        centerPadding: '60px',
    });
});
