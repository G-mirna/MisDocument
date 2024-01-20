<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    require_once("db.php");

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    

    $query = "INSERT INTO registro(id,nombre,telefono,correo ) VALUES (null,'$nombre','$telefono','$correo')";

    $result = mysqli_query($conn, $query);

    if($result == TRUE){
        echo "Ha ingresado sus datos correctamente";
    }else{
        echo "Error en el ingreso de dato del estudiante";
    }

    mysqli_close($conn);

}

    ?>