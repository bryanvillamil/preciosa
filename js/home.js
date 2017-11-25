
$(document).ready(function() {
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
});

//Scroll Automatico


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


