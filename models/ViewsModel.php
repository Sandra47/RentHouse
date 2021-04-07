<?php 

    class viewsModel{

        /* Modelo para obtener las vistas de la aplicación */

        protected static function views_model($views){
            
            $whiteList=["homepage","single-apartment","register-house"];

            if(in_array($views,$whiteList)){
                
                if(is_file("./views/content/".$views."-view.php")){
                    $content = "./views/content/".$views."-view.php";
                }else{
                    $content = "404";
                }


            }elseif($views == "index" || $views == "home"){
                
                $content = "home";

            }else{
                
                $content = "404";
            }

            return $content;


        }  


    }
