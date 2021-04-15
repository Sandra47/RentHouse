<?php 

    require_once "./models/ViewsModel.php";
    require_once "./models/house.model.php";

    class ViewsController extends ViewsModel{

        /* Controlador para obtener la plantilla */

        public function views_template_controller(){

            return require_once "./views/template.php";
        
        }

        /* controlador para obtener las vistas */

        public function views_controller(){
            
            //http://localhost/rent4/single-apartment
            
            
            if(isset($_GET['views'])){
                
                $route=explode("/",$_GET['views']);
                
                $response=ViewsController::views_model($route['0']);
            
            }else{
                $response = "homepage";
            }

            return $response;

        }
    }
