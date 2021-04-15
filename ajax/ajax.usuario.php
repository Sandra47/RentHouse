<?php
require_once "../controllers/usuarios.controller.php";
require_once "../models/usuarios.model.php";
class AjaxUsuarios {
    public function deleteUsuario($idUsuario){
        // echo "ok";
    $request= UsuariosController::eliminarUsuarioController($idUsuario);
    
    echo  $request;  

    }
}
    if(isset($_POST["idBorrar"])){
        $delete= new AjaxUsuarios();
        $delete->deleteUsuario($_POST["idBorrar"]);
    }
