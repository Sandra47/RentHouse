<?php

	//Llamado a la clase de Conexión
	require 'providers/Database.php';


    require_once "./config/APP.php";
    require_once "./controllers/ViewsController.php";
    require_once "./controllers/usersController.php";
    require_once "./models/usersModel.php";

    require_once "./controllers/casa.contoler.php";
    require_once "./models/casa.model.php";

    
   
    require_once "./controllers/house.controller.php";
    require_once "./models/house.model.php";
    $template = new ViewsController();

    $template->views_template_controller();
