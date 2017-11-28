   

$(document).ready(function(){
    // Funcion para el logueo

});

$(document).ready(function(){
    //$(".pag").hide().fadeIn(1000);

});





    // menu typeface cycle

    $('.hover-cycle').find('a').on('mouseover', function(e) {
        if(!$(this).parent().hasClass('active') || $(this).parent().parent().parent().parent().hasClass('mobilised'))
        {
            this_hover = $(this);
            current_class = $(this).attr('class');
            x = parseInt(current_class.substring(4, 5));
            step();
        }
    });

    $('.hover-cycle').find('a').on('mouseout', function(e) {
        if (!$(this).parent().hasClass('active') || $(this).parent().parent().parent().parent().hasClass('mobilised'))
        {
            clearTimeout(hover_cycle);
            this_hover.removeClass('menu1 menu2 menu3 menu4 menu5').addClass(current_class);
        }
    });




//-------------------------------------------------PAGINA 15-----------------------------------------------------


$(document).ready(function(){
    	$('.img1').draggable();

    	$('.img1').click(function(){
            $(this).effect('explode',{pieces: 16 }, 2000);
    	});
});

$(document).ready(function(){
    	$('.img2').draggable();

    	$('.img2').click(function(){
            $(this).effect('explode',{pieces: 16 }, 2000);
    	});
});

$(document).ready(function(){
    	$('.titulo').draggable();

    	$('.titulo').click(function(){
            $('.titulo').effect('explode',{pieces: 16 }, 2000);
    	});
});

//-------------------------------------------------PAGINA 16-----------------------------------------------------


//-------------------- pagina 16 de jquery para imagenes y caja ppal-----------------------------

$(document).ready(function(){
    $(".imgcj").hide();
})

$(document).click(function(){
$('.imgcj').toggle("explode");
});




//-------------------------------------------------PAGINA 17-----------------------------------------------------

$(document).ready(function(){
    $('#menu').accordion();
});


//-------------------------------------------------PAGINA 18-----------------------------------------------------


//-------------------------------------------------PAGINA 19-----------------------------------------------------


//-------------------------------------------------PAGINA 20-----------------------------------------------------


//-------------------------------------------------PAGINA FINAL-----------------------------------------------------







