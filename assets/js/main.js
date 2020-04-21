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
});
