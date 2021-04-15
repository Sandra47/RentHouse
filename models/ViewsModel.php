<?php 

    class ViewsModel{

        /* Modelo para obtener las vistas de la aplicación */

        protected static function views_model($views){
            
            $whiteList=["homepage","apartmente-family","register-house","apartment-partner","formulario","formularioPractica","newUser",];

            if(in_array($views,$whiteList)){
                
                if(is_file("./views/content/".$views."-view.php")){
                    $content = "./views/content/".$views."-view.php";
                }else{
                    $content = "404";
                }


            }elseif($views == "index" || $views == "homepage"){
                
                $content = "homepage";

            }else{
                
                $content = "404";
            }

            return $content;


        }  


    }