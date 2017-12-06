
$(document).ready(function() {
	// Funcion para el logueo
	$( "#login" ).submit(function( event ) {
	  	if ( $( "#nombre" ).val() === "camila" && $( "#cedula" ).val() === "1017200416" && $( "#novio" ).val() === "bryan") {
		    $( "#validator" ).text( "Validated..." ).show();
		    localStorage.setItem( "logueado" ,true);
		    window.location.href= "/preciosa/inicio.php";
	  	}
	  	$( "#validator" ).text( "Not valid!" ).show().fadeOut( 1000 );
	  	event.preventDefault();
	});


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

	$('.contenedor a').click(function(){
		console.log($(this).index()); // nos muestra por consola el indicador del elemento
		$('#myModal .modal-dialog .modal-content .modal-body').html(""); // Limpia el contenido
		var src = $(this).find('.bg_fix').css('background-image'); // captura el atributo que se desee capturar. en este caso el src de la img
		bg = bg.replace('url(','').replace(')','');
	    //alert(bg);
		$('#myModal .modal-dialog .modal-content .modal-body').append('<img src="'+ bg +'">'); // se agrega la img al modal y trae el src de la img

	});
});

//Scroll Automatico

/*
(function(document, window, $) {
	var $ = jQuery;
	jQuery(document).ready(function() {
		// Variables
		var windowWidth = $(window).width(),
			windowHeight = $(window).height(),
			$header = $("header");

		// header anchor tags
		function headerAnchors() {
			var pageDirection = "";
			var thisElement;
			var timeout;
			$header.find("nav li a").click(function(event) {
				event.preventDefault();
				$(".cube").removeClass("reverse-" + pageDirection);
				thisElement = $(this);
				pageDirection = thisElement.data("direction");
				reverseDirection = thisElement.data("reverse-direction");
				thisElement
					.parent()
					.addClass("active")
					.siblings()
					.removeClass("active");
				$(".cube").addClass("reverse-" + pageDirection);

				$header.addClass("go-out");
				$("#wrap").addClass("active");
				clearTimeout(timeout);
				timeout = setTimeout(function() {
					$header.removeClass("go-out");
					$("#wrap").removeClass("active");
				}, 1000);
			});
		}
		headerAnchors();
		$(window).resize(function() {
			// Vars
			windowWidth = $(window).width();
			windowHeight = $(window).height();
			// Functions
		});
	});
})(document, window);
*/


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
