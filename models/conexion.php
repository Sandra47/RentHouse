<?php
class Conexion{
    public static function conectar(){
        $link = new PDO("mysql:host=localhost;
        dbname=houserental2",
        "root",
        "",
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") 
        ); 
        return $link;
    }  
    
}
class Conexionx{
    public static function conectar(){
        $link = new PDO("mysql:host=localhost;
        dbname=pruebahouse",
        "root",
        "",
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") 
        ); 
        return $link;
    }  
    
}