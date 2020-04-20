<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Backoffice | Ventas por suscripción</title>

	<!-- Tell the browser to be responsive to screen width -->
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<!--=====================================
  	=            Vinculos CSS        =
  	======================================-->

  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  	<!-- Google Font: Source Sans Pro -->
  	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  	<!-- Theme style -->
  	<link rel="stylesheet" href="vistas/css/plugins/adminlte.min.css">

  	<!-- overlayScrollbars -->
  	<link rel="stylesheet" href="vistas/css/plugins/OverlayScrollbars.min.css">

    <!-- jdSlider -->
    <link rel="stylesheet" href="vistas/css/plugins/jdSlider.css">
  
    <!-- archivo para la funcion Select2 -->
    <link rel="stylesheet" href="vistas/css/plugins/select2.min.css">

    <!-- hoja de estilo personalizado -->
    <link rel="stylesheet" href="vistas/css/style.css">





  	<!--=====================================
  	=            Vinculos JS       =
  	======================================-->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<!-- AdminLTE App -->
	<script src="vistas/js/plugins/adminlte.min.js"></script>
  
  	<!-- overlayScrollbars -->
	<script src="vistas/js/plugins/jquery.overlayScrollbars.min.js"></script>

  <!-- jdSlider -->
  <!-- https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
  <script src="vistas/js/plugins/jdSlider.js"></script>

  <!-- archivo para la funcion Select2 -->
  <!-- pagina oficial de la documentacion https://github.com/select2/select2 -->
  <script src="vistas/js/plugins/select2.full.min.js"></script>

  <!-- archivo para la funcion inputmask -->
  <script src="vistas/js/plugins/jquery.inputmask.bundle.min.js"></script>

  <!-- jSignature -->
  <!-- Firma electronica https://www.jqueryscript.net/other/Signature-Field-Plugin-jQuery-jSignature.html-->
  <script src="vistas/js/plugins/jSignature.js"></script>
  <script src="vistas/js/plugins/jSignature.CompressorSVG.js"></script>


 </head>

 <body class="hold-transition sidebar-mini sidebar-collapse">

 	<div class="wrapper">
 		
 		<?php 

 			include "paginas/modulos/header.php";

 			include "paginas/modulos/menu.php";

 			/*=========================================
 			=      Paginas Dinamicas del Sitio        =
 			=========================================*/


 			//Direccionar a la pagina  --------

 			if (isset($_GET["pagina"])) {

 				if ($_GET["pagina"] == "inicio" ||
 					$_GET["pagina"] == "perfil" ||
 					$_GET["pagina"] == "usuarios" ||
 					$_GET["pagina"] == "uninivel" ||
 					$_GET["pagina"] == "binaria" ||
 					$_GET["pagina"] == "matriz" ||
 					$_GET["pagina"] == "ingresos-uninivel" ||
 					$_GET["pagina"] == "ingresos-binaria" ||
 					$_GET["pagina"] == "ingresos-matriz" ||
 					$_GET["pagina"] == "plan-compensacion" ||
 					$_GET["pagina"] == "soporte" ||
 					$_GET["pagina"] == "salir") {
 					
 					//redireccionara la pagina dependiendo del nombre  de la pagina
 					include "paginas/".$_GET["pagina"].".php";
 				}


 				else if ($_GET["pagina"] == "cuerpo-activo" ||
 					$_GET["pagina"] == "mente-sana" ||
 					$_GET["pagina"] == "espiritu-libre") {

 					include "paginas/academia.php";
 					
 				}

 				else {

 					include "paginas/error404.php";
 				}



 			} else {
 				
 				include "paginas/inicio.php";
 			}


 			
 			//----------------------------------------

 			include "paginas/modulos/footer.php";




 		 ?>
 	</div>
 	
  <script src="vistas/js/inicio.js"></script>
  <script src="vistas/js/usuarios.js"></script>
 </body>

 </html>