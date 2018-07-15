$(document).ready(function() {
// 	// Funcion para el logueo
// 	var seguridad=function(){
// 		var pathname = window.location.pathname;
// 		var url      = window.location.href;
// 		if (pathname != "/index.php") {
// 		  var ingreso=JSON.parse(localStorage.getItem('user'));
// 		  if(ingreso!=null){
// 		    // limite, es la cantidad de tiempo que quiere que esté vivo el acceso
// 		    // por ejemplo 1 día es 1000 * 60 * 60 * 24
//
// 		    // en este caso limite son 2 horas.
// 		    var limite = 1000 * 60 * 60 * 2 ;
// 		    console.log((Number(ingreso.time)+limite)>(new Date()).getTime());
// 		    console.log(Number(ingreso.time),limite,(new Date()).getTime());
// 		    if((Number(ingreso.time)+limite)>(new Date()).getTime()){
// 		      console.log("ingresa");
// 		    }else{
// 		      console.log("no ingresa por user");
// 		      localStorage.removeItem('user');
// 		      window.location.href= "./index.php";
// 		    }
// 		  }else{
// 		    console.log("no ingresa aqui");
// 		    window.location.href= "./index.php";
// 		  }
// 	  	}
// 	}
 	$( "#login" ).submit(function( event ) {
 	  	if ( $( "#nombre" ).val() === "camila" && $( "#cedula" ).val() === "1017200416" && $( "#novio" ).val() === "bryan") {
 		    $( "#validator" ).text( "Validated..." ).show();
 		    var guardarLocal=JSON.stringify({"nombre":"camila","time":(new Date()).getTime()});
   			localStorage.setItem('user',guardarLocal);

 		    $( "#validator" ).text( "Welcome!" ).show().fadeOut( 1000 );
 		    window.location.href= "./inicio.php";
 	  	}
 	  	$( "#validator" ).text( "Not valid!" ).show().fadeOut( 1000 );
 	  	event.preventDefault();
 	});

 	$('.salir').click(function(){
 		localStorage.removeItem('user');
 		window.location.href= "./index.php";
 	});
// 	seguridad();
});
