<?php

class ControladorUsuarios {

/*===========================
INGRESO DE USUARIO
============================*/
	public function ctrIngresoSeguro(){

		if(isset($_POST["ingUsuario"])){

				if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
				   preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

				   	$tabla = "usuarios";

				    $item = "usuario";

				    $valor = $_POST["ingresoUsuario"];

				    $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

			}


		}


	}


}
