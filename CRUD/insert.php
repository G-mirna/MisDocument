<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    require_once("db.php");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $carrera = $_POST['carrera'];

    $query = "INSERT INTO estudiante(id,nombre,apellido,carrera ) VALUES (null,'$nombre','$apellido','$carrera')";

    $result = mysqli_query($conn, $query);

    if($result == TRUE){
        echo "Ha ingresado sus datos correctamente";
    }else{
        echo "Error en el ingreso de dato del estudiante";
    }

    mysqli_close($conn);

}

    ?>
