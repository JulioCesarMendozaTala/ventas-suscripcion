<?php 

	/**
	 * 
	 */
	class Conexion{

		static public function conectar(){

			/*$link = new PDO("parametro1",
							"parametro2",
							"paramertro3");*/

			$link = new PDO("mysql:host=localhost;dbname=ventas-suscripcion",
							"root",
							"");

			$link->exec("set names utf8");

			return $link;

		}
		
	}



 ?>