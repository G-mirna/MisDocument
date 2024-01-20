<?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){

    require_once("db.php");

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $carrera = $_POST['carrera'];

    $filtro = "SELECT * FROM estudiante WHERE id='$id'";
    $ex = mysqli_query($conn,$filtro);
    $conteo = mysqli_num_rows($ex);

    if($conteo > 0){

        $query = "UPDATE estudiante SET nombre ='$nombre', apellido='$apellido', carrera='$carrera' WHERE id='$id'";
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