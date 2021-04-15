<?php
    require_once "conexionModel.php";

    class loginModel extends ConexionModel {
        /** Model to start session */
        protected static function start_session_model($dataArray) {
            $sql = ConexionModel::conectar()->prepare("SELECT * FROM users WHERE mail=:Mail AND password=:Password");

            $sql->bindParam(":Mail",$dataArray['Mail']);
            $sql->bindParam(":Password",$dataArray['Password']);

            $sql->execute();
            return $sql;
        }
    }