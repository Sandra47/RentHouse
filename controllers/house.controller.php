<?php
class HouseController{
    public static function insertHouseController(){
        // echo ($_POST["title"]);
        // $request = HouseModel::insertHouseModel();
        //  echo  $request;

        if(isset($_POST["title"])){
            // $encriptar= crypt($_POST["password"],'$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$ ');
            $tabla="House";
            // $item=$_POST["email"];
            // $consulta=HouseModel::isRepeatEmail($tabla,$item);
            // if (!$consulta){
            //     var_dump($consulta);
             
                $datos=array(
                    "title"=>$_POST["title"],
                    "description"=>$_POST["description"],
                    "imageHouse"=>$_POST["imageHouse"],
                    "numRooms"=>$_POST["numRooms"],
                    "numBath"=>$_POST["numBath"],
                    "parking"=>$_POST["parking"],
                    "serviceInternet"=>$_POST["serviceInternet"],
                    "aditionalServices"=>$_POST["aditionalServices"],
                    "priceAlquiler"=>$_POST["priceAlquiler"],
                    "location"=>$_POST["location"],
                    "startDateAvail"=>$_POST["startDateAvail"],
                    "endDateAvail"=>$_POST["endDateAvail"],
                    "capacity"=>$_POST["capacity"],

                    // "password"=>$encriptar,
                );
                // print_r($datos);

                $request=HouseModel::insertHouseModel($tabla,$datos);

                echo $request;

                if($request=="ok") {

            
                    echo"
                    <script>
                    
                    Swal.fire({
                            icon: 'success',
                            confirmButtonText: `Ok`,
                            text: 'Registro exitoso!',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                window.location = 'usuarios';
                            }
                    }) 
                    </script>";
                }else{
                    echo"
                    <script>
                    
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Registro no ingresado !',
                        footer: '<a href>Why do I have this issue?</a>'
                    })
                    </script>";
                }
            // }else{
            //     echo"
            //     <script>
                
            //     Swal.fire({
            //         icon: 'error',
            //         title: 'Error!',
            //         text: 'No sirve !',
            //         footer: '<a href>Why do I have this issue?</a>'
            //     })
            //     </script>";
                
            // }
        }    
    }    

    

    public static function selectHouseController(){
        $tabla="House";
        $sql=HouseModel::listarHouseModelo($tabla);
        return $sql;
        
    }
   

    // public static function eliminarUsuarioController($id){
    //     $tabla = "usuario";
    //     $sql = UsuariosModel::eliminarUsuarioModelo($tabla, $id);
    //     echo $sql;
        
    // }
       
    
}
