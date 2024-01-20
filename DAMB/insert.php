<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

    require_once("db.php");

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $query = "INSERT INTO usuario(id,nombre,correo) VALUES(null,'$nombre','$correo')";

    $result = mysqli_query($conn, $query);

    if($result == TRUE){
        echo "El usuario ha sido registrado con exito";

    }else{
        echo "Erro al insertar el ususario";
    }

    mysqli_close($conn);

}

?>