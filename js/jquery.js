
/*
$(document).ready(function() {
    var ya = false;
    $(window).scroll(function() {
        if (ya == false) {
            console.log(ya);
            ya = true;
            $('.caja').css({
                "margin-top": 170,
                "opacity": 0
            });
            $('.caja').animate({
                "margin-top": 0,
                "opacity": 1
            });
        }
    });
});
*/


//Funcion para abrir el menu cuando aparece la hamburguer.
$('#nav-mobile-btn').click(function(){
    $('.nav-mobile').toggleClass('nav-mobile--open');
    $('body').css('overflow' , 'hidden');
});

$('.navbar__close').click(function(){
    $('.nav-mobile').removeClass('nav-mobile--open');
    $('body').css('overflow', 'visible');
});



// Scroll Top para flecha
$(window).on('scroll',function(){
    if($(window).scrollTop() > 400){ $('#ttop').css('opacity',.5);}
    else {$('#ttop').css('opacity',0);}
});