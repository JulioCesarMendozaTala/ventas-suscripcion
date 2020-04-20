<?php 

	/*Las variables del tipo PUBLIC se ejecutan inmediatamente, sin necesidad de almacenar en una variable

	Las variables del tipo STATIC no es necesario que se ejecuten inmediatamente, estas se ejecutan en el momento que sean necesarias y estas son almacenadas en una variable*/

	require_once "controladores/plantilla.controlador.php";
	require_once "controladores/ruta.controlador.php";
	require_once "backoffice/controladores/usuarios.controlador.php";
	require_once "backoffice/modelos/usuarios.modelo.php";

	

	/* Se crea un objeto llamado plantilla que hace instancia a la clase que esta en ese controlador 
	(ControladorPlantilla) */
	$plantilla = new ControladorPlantilla();
	/*Se ejecuta el metodo ctrPlantilla*/
	$plantilla ->  ctrPlantilla();



 ?>