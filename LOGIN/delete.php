<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    require_once("db.php");
    $id = $_POST['id'];
     
    $filtro = "SELECT * FROM registro WHERE id='$id'";
    $ex = mysqli_query($conn,$filtro);
    $conteo = mysqli_num_rows($ex);

    if($conteo >0){

        $query = "DELETE FROM registro WHERE id='$id'";
        $result = mysqli_query($conn,$query);

        if($result){
            echo "Los datos han sido eliminado";
        }else{
            echo "Los datos no puede eliminarse";

        }
    }else{
        echo "No existe el ID";
    }
    mysqli_close($conn);
}

?>
