<?php

Class casaController{

	/*=============================================
	Mostrar Categorias
	=============================================*/

	static public function MostrarcasaControler(){

		$tabla = "prueba";

		$respuesta = casaModel::Mostrarcasamodel($tabla);

		return $respuesta;

	}

}