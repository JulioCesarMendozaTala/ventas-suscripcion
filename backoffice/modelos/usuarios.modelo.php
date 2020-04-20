<?php

require_once "conexion.php";

class ModeloUsuarios{

	/*=============================================
	Registro de usuarios
	=============================================*/

	static public function mdlRegistroUsuario($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(perfil, nombre, email, password, suscripcion, verificacion, email_encriptado, patrocinador) VALUES (:perfil, :nombre, :email, :password, :suscripcion, :verificacion, :email_encriptado, :patrocinador)");

		$stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":suscripcion", $datos["perfil"], PDO::PARAM_STR);
		$stmt->bindParam(":verificacion", $datos["verificacion"], PDO::PARAM_STR);
		$stmt->bindParam(":email_encriptado", $datos["email_encriptado"], PDO::PARAM_STR);
		$stmt->bindParam(":patrocinador", $datos["patrocinador"], PDO::PARAM_STR);

		if($stmt->execute()){ //si se ejecuta retorna ok

			return "ok";

		}else{ //si no se ejecuta, que nos muestre el error y se cancela el proceso

			return print_r(Conexion::conectar()->errorInfo());
		}

		$stmt->close();// cerrar conexion
		$stmt = null;// vaciar el objeto stmt

	}

}