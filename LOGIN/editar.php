<?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){

    require_once("db.php");

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    $filtro = "SELECT * FROM registro WHERE id='$id'";
    $ex = mysqli_query($conn,$filtro);
    $conteo = mysqli_num_rows($ex);

    if($conteo > 0){

        $query = "UPDATE registro SET nombre ='$nombre', telefono='$telefono', correo='$correo' WHERE id='$id'";
        $result = mysqli_query($conn,$query);

        if($result){
            echo " se actualizaron los datos";

        }else{
            echo "Error al actualizar los datos";

        }


    }else{
        echo "No existen los datos";
    }
    mysqli_close($conn);

 }
 

?>