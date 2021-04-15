<?php

require 'models/usersModel.php';

/**
 * Clase controlador tipo de estado
 */
class usersController
{

	private $typestatusesModel;

    public function __construct()
    {
   		$this->typestatusesModel = new usersModel;
    }

    public function index()
    {
    	$users = $this->usersModel->getAll();
    	require 'views/template.php';
    	require 'views/users/list.php';
    }
		public function new()
{
		require 'views/template.php';
		require 'views/users/new.php';
}

public function save()
{
		$this->usersModel->newUsers($_POST);
		header('Location: ?controller=users');
}
public function edit()
{
		if(isset($_REQUEST['idusers'])) {
				$id = $_REQUEST['idusers'];

				$users = $this->usersModel->getById($id);
				require 'views/template.php';
				require 'views/users/edit.php';
		} else {
				echo "El tipo de No Existe";
		}
}

public function update()
{
		if(isset($_POST)) {
				$this->usersModel->editUsers($_POST);
				header('Location: ?controller=users');
		} else {
				echo "Error, acción no permitida.";
		}
}
public function delete()
{
		$this->usersModel->deleteUsers($_REQUEST);
		header('Location: ?controller=users');
}
}
