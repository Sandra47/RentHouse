<?php

	//Llamado a la clase de Conexión
	require 'providers/Database.php';


    require_once "./config/APP.php";
    require_once "./controllers/ViewsController.php";


    $template = new ViewsController();

    $template->views_template_controller();
