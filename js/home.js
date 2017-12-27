
$(document).ready(function() {
	// Animacion de scroll con el boton en Home
	$('.animation').click(function(){
	    $('html, body').animate({
	        scrollTop: $(".Homegaleria").offset().top
	    }, 2000);
	});

	setTimeout(function(){ 
		$('html, body').animate({
	        scrollTop: $(".Homegaleria").offset().top
	    }, 2000);
	}, 3000);


	// Bg fix para imagenes
	$(".bg_fix").each(function(){
        bg = $(this).find("img").eq(0).attr("src");
        $(this).css("backgroundImage", "url("+ bg +")");
        $(this).find("img").eq(0).css("display","none");
    });

	$('.contenedor > div > div').click(function(){
		console.log($(this)); // nos muestra por consola el indicador del elemento
		$('#myModal .modal-dialog .modal-content .modal-body').html(""); // Limpia el contenido
		var src = $(this).find('> a > .bg_fix img').attr('src');// captura el atributo que se desee capturar. en este caso el src de la img
		//bg = bg.replace('url(','').replace(')','');
	    console.log(src);
		$('#myModal .modal-dialog .modal-content .modal-body').append('<img src="'+ src +'">'); // se agrega la img al modal y trae el src de la img

	});
});


//Scroll Automatico
$(document).ready(function() {
	//Menu Responsive
	var abierto = false;
	var espere = false;
	console.log('ready');
	$('#nav-mobile-btn').click(function(){
		if (abierto == false ) {
			abierto = true;
			setTimeout (function(){
				espere = true;
			},100);
			$('.nav-mobile').addClass(' open');
			$('#wrapper').addClass(' open');
		}else {
			abierto = false;
			$('.nav-mobile').removeClass(' open');
			$('#wrapper').removeClass(' open');
		}
	});

	$('#wrapper, .fa-times').click(function() {
		if (abierto == true && espere == true) { 
			abierto = false;
			espere = false;
			$('#wrapper').removeClass(' open');
			$('.nav-mobile').removeClass(' open');
		};
	});
});
