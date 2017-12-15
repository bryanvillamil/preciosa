jquery(document).ready(function() {
	// Funcion para el logueo
	$( "#login" ).submit(function( event ) {
		console.log(4);
	  	if ( $( "#nombre" ).val() === "camila" && $( "#cedula" ).val() === "1017200416" && $( "#novio" ).val() === "bryan") {
		    $( "#validator" ).text( "Validated..." ).show();
		    localStorage.setItem( "logueado" ,true);
		    $( "#validator" ).text( "Welcome!" ).show().fadeOut( 1000 );
		    window.location.href= "./inicio.php";
		    console.log(3);
	  	}
	  	$( "#validator" ).text( "Not valid!" ).show().fadeOut( 1000 );
	  	event.preventDefault();
	});
});