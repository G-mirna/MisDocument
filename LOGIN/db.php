<?php

$conn = mysqli_connect('localhost', 'root', '', 'proyectobolsos');

if(!$conn){
    die("Conexion fallida:".mysqli_connect_error());
}


?>