/*=============================================
=           LISTADO DE PAISEA                =
=============================================*/

$.ajax({


	url:"vistas/js/plugins/paises.json",
	type: "GET",
	success: function (respuesta){
		
		respuesta.forEach(seleccionarPais);

		function seleccionarPais(item, index){

			//console.log("item", item.name);	
			var pais = item.name;
			var codPais = item.code;
			var dial = item.dial_code;

			$("#inputPais").append(

				`<option value="`+pais+`,`+codPais+`,`+dial+`">`+pais+`</option>`

			)

		}
	}

})


/*=============================================
=        ESTE ES EL PLUGIN DE SELECT 2        =
=============================================*/

//Initialize Select2 Elements
$('.select2').select2()

/*=============================================
=        agregaR EL CODE DEL PAIS        =
=============================================*/

$("#inputPais").change(function(){

	$(".dialCode").html($(this).val().split(",")[2])

})

/*=============================================
=        INPUTMASK                           =
=============================================*/

$('[data-mask]').inputmask()

/*=============================================
=        FIRMA VIRTUAL                        =
=============================================*/

$("#signatureparent").jSignature({

  color:"#333", // Color de la linea
  lineWidth:1, // Grosor de la linea
  // Ancho y alto de la liena
  width:320,
  height:200,

  // Color del fondo
  //background-color:"#0f0"
  
});

$(".repetirFirma").click(function(){

	$("#signatureparent").jSignature("reset");

});


/*=============================================
=        VALIDAR FORMULARIO SUSCRIPCION      =
=============================================*/

$(".suscribirse").click(function(){

	$(".alert").remove(); //cualquier alert disponible que lo remueva

	var nombre = $("#inputName").val();
	var email = $("#inputEmail").val();
	var patrocinador = $("#inputPatrocinador").val();
	var enlace_afiliado = $("#inputAfiliado").val();
	var pais = $("#inputPais").val().split(",")[0];
	var codigo_pais = $("#inputPais").val().split(",")[1];
	var telefono_movil = $("#inputPais").val().split(",")[2]+" "+$("#inputMovil").val();
	var red = $("#tipoRed").val();
	var aceptarTerminos = $("#aceptarTerminos:checked").val();

	if ($("#signatureparent").jSignature("isModified")){

		var firma = $("#signatureparent").jSignature("getData","image/svg+xml");
		console.log("firma", firma);
	}

	/*===============================
	=            VALIDAR            =
	===============================*/
	
	if( nombre == "" ||
		email == "" ||
		patrocinador == "" ||
		enlace_afiliado == "" ||
		pais == "" ||
		codigo_pais == "" ||
		telefono_movil == "" ||
		red == "" ||
		aceptarTerminos != "on" ||
		!$("#signatureparent").jSignature("isModified")){

		$(".suscribirse").before(`

				<div class="alert alert-danger">Faltan datos, no ha aceptado o no ha firmado los términos y condiciones</div>
			`);

	return;


	}else{

		console.log("formulario listo");
	}
	


});

