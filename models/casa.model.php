<?php

require_once "conexion.php";

Class casaModel{

	/*=============================================
	mostrar Categorias
	=============================================*/
	
	static public function Mostrarcasamodel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetchAll();

		

	}

}