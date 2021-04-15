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

    

    // public static function selectUserController(){
    //     $tabla="usuario";
    //     $sql=usuariosModel::listarUsuarioModelo($tabla);
    //    // echo "<pre>"
    //        // print_r($sql);
    //    // echo "</pre>";

      
    //    foreach($sql as $datos => $value){
    //     // echo "<tr>";
    //     // echo "<td>". $value["id"]."</td>";
    //     // echo "<td>". $value["name"]."</td>";
    //     // echo "<td>". $value["email"]."</td>";
    //     // echo "<td>". $value["password"]."</td>";
    //     // echo "<td><button type='button' class='btn' idEditar=".$value["id"].">Editar</button> 
    //     //      <button type='button' class='btn' idEliminar=".$value["id"]."> Eliminar</button></td>";
    //     // echo "</tr>";
    //        //otra manera
    //        echo"
           
    //        <tr>
    //           <td>{$value["id"]}</td>
    //           <td>{$value["name"]}</td>
    //           <td>{$value["email"]}</td>
    //           <td>{$value["password"]}</td>
    //           <td><button type='button' class='editar' idEditar='{$value["id"]}'>Editar</button> 
    //           <br> <button type='button' class='borrar' idBorrar='{$value["id"]}'> Eliminar</button></td>
        
    //        </tr>
    //        ";
    //    }
       
    // }

    // public static function eliminarUsuarioController($id){
    //     $tabla = "usuario";
    //     $sql = UsuariosModel::eliminarUsuarioModelo($tabla, $id);
    //     echo $sql;
        
    // }
       
    
}
