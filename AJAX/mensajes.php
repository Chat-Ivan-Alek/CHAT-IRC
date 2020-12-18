<?php

//Conexión a DB
function conection(){
            
    $host = "localhost";
    $user = "aleksandar";
    $password = "";
    $database = "mensajes";
    
    $conn = mysqli_connect($host, $user, $password, $database);
    
    return $conn;
}   

// $sql = "insert into mensajes Values (" . $_POST['nombre'] . "), (" . $_POST['mensaje'] . ")";

$sql = "insert into mensajes Values('','".$_POST['nombre']."', '".$_POST['mensaje']."')";
// $sql = "insert into mensajes Values('','', '')";


mysqli_query(conection(), $sql);


$sql = "SELECt * FROM mensajes ORDER BY id DESC LIMIT 1 ";

$result = mysqli_query(conection(), $sql);


while($row = mysqli_fetch_assoc($result)){
    echo ("NOMBRE: " . $row["mensaje"] . " - MENSAJE: " . $row["mensaje"] . "<br>");
}
?>