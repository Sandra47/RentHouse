<?php
require_once "conexion.php";
class HouseModel{

    public static function insertHouseModel($tabla,$datos){
  
      $stmt= Conexion::conectar()->prepare("INSERT INTO $tabla (title,description,
        imageHouse,numRooms,numBath,parking,serviceInternet,aditionalServices,priceAlquiler,
        location,starDateAvail,endDateAvail,capacity) VALUES (:title,:description,
        :imageHouse,:numRooms,:numBath,:parking,:serviceInternet,:aditionalServices,:priceAlquiler,
        :location,:starDateAvail,:endDateAvail,:capacity)");
        $stmt->bindParam(":title", $datos["title"], PDO::PARAM_STR);
        $stmt->bindParam(":description", $datos["description"], PDO::PARAM_STR);
        $stmt->bindParam(":imageHouse", $datos["imageHouse"], PDO::PARAM_STR);
        $stmt->bindParam(":numRooms", $datos["numRooms"], PDO::PARAM_STR);
        $stmt->bindParam(":numBath", $datos["numBath"], PDO::PARAM_STR);
        $stmt->bindParam(":parking", $datos["parking"], PDO::PARAM_STR);
        $stmt->bindParam(":serviceInternet", $datos["serviceInternet"], PDO::PARAM_STR);
        $stmt->bindParam(":aditionalServices", $datos["aditionalServices"], PDO::PARAM_STR);
        $stmt->bindParam(":priceAlquiler", $datos["priceAlquiler"], PDO::PARAM_STR);
        $stmt->bindParam(":location", $datos["location"], PDO::PARAM_STR);
        $stmt->bindParam(":startDateAvail", $datos["startDateAvail"], PDO::PARAM_STR);
        $stmt->bindParam(":endDateAvail", $datos["endDateAvail"], PDO::PARAM_STR);
        $stmt->bindParam(":capacity", $datos["capacity"], PDO::PARAM_STR);
  
  
  
        if ($stmt->execute()){
           return "ok";
        }else{
           return "error";
        }
    }
}

// <?php
// require_once "conexion.php";
// class HouseModel{

//   public static function insertHouseModel($tabla,$datos){

//     $stmt= Conexion::conectar()->prepare("INSERT INTO $tabla (title,description,
//       imageHouse,numRooms,numBath,parking,serviceInternet,aditionalServices,priceAlquiler,
//       location,starDateAvail,endDateAvail,capacity) VALUES (:title,:description,
//       :imageHouse,:numRooms,:numBath,:parking,:serviceInternet,:aditionalServices,:priceAlquiler,
//       :location,:starDateAvail,:endDateAvail,:capacity)");
//       $stmt->bindParam(":title", $datos["title"], PDO::PARAM_STR);
//       $stmt->bindParam(":description", $datos["description"], PDO::PARAM_STR);
//       $stmt->bindParam(":imageHouse", $datos["imageHouse"], PDO::PARAM_STR);
//       $stmt->bindParam(":numRooms", $datos["numRooms"], PDO::PARAM_STR);
//       $stmt->bindParam(":numBath", $datos["numBath"], PDO::PARAM_STR);
//       $stmt->bindParam(":parking", $datos["parking"], PDO::PARAM_STR);
//       $stmt->bindParam(":serviceInternet", $datos["serviceInternet"], PDO::PARAM_STR);
//       $stmt->bindParam(":aditionalServices", $datos["aditionalServices"], PDO::PARAM_STR);
//       $stmt->bindParam(":priceAlquiler", $datos["priceAlquiler"], PDO::PARAM_STR);
//       $stmt->bindParam(":location", $datos["location"], PDO::PARAM_STR);
//       $stmt->bindParam(":startDateAvail", $datos["startDateAvail"], PDO::PARAM_STR);
//       $stmt->bindParam(":endDateAvail", $datos["endDateAvail"], PDO::PARAM_STR);
//       $stmt->bindParam(":capacity", $datos["capacity"], PDO::PARAM_STR);



//       if ($stmt->execute()){
//          return "ok";
//       }else{
//          return "error";
//       }
//   }

//   public static function listarUsuarioModelo($tabla){
//     $stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla");
//     $stmt->execute();
//     return $stmt->fetchAll();

//   }

//   public static function isRepeatEmail($tabla,$item){
//     $stmt=Conexion::conectar()->prepare("SELECT email FROM $tabla WHERE email=:item");
//     $stmt->bindParam(":item", $item, PDO::PARAM_STR);
//     $stmt->execute();
//     return $stmt->fetch();

//   }

//   public static function eliminarUsuarioModelo($tabla, $id){
//     $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
//     $stmt->bindParam(":id", $id, PDO::PARAM_INT);
//     if($stmt->execute()) {
//       return "ok";
//     }else{
//       return "error";
//     }
    
//     // return $stmt->execute();


//   }
// }
