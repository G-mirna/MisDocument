<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

    require_once('db.php');

    $nombre=(isset($_POST['nombre'])? $_POST['nombre']:"");
    $contraseña=(isset($_POST['contraseña'])? $_POST['contraseña']:"");

    $query = "SELECT * FROM iniciosesion WHERE nombre = '$nombre' AND contraseña ='$contraseña'";
    $result = mysqli_query($conn,$query);
    $count = mysqli_fetch_assoc($result); 

    if($count==null){

    }else{
        echo json_encode($count, JSON_UNESCAPED_UNICODE); 

    }
}

mysqli_close($conn);
?>