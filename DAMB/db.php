<?php

$conn = mysqli_connect('localhost', 'root', '', 'damb');

//verificamos si nuestros datos son valido

if(!$conn){
    die("Conexionfallida:".mysqli_connect_error());

}

echo "Conexion exitosa";
?>