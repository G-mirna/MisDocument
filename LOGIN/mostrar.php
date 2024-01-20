
<?php
if($_SERVER['REQUEST_METHOD']=='GET'){

    require_once("db.php");

    $id = $_GET['id'];

    $query = "SELECT * FROM registro WHERE id='$id'";

    $result = mysqli_query($conn, $query);

    while($row = $result->fetch_assoc()){
        $array = $row;
    }

    echo json_encode($array);

    $result->close();

}
mysqli_close($conn);

?>