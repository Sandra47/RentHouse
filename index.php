<?php

    require_once "./config/APP.php";
    require_once "./controllers/ViewsController.php";
  require_once "./controllers/house.controller.php";
  require_once "./models/house.model.php";

    $template = new ViewsController();

    $template->views_template_controller();
