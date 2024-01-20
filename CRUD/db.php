<?php

$conn = mysqli_connect('localhost', 'root', '', 'u20210003');

if(!$conn){
    die("Conexion fallida:".mysqli_connect_error());
}


