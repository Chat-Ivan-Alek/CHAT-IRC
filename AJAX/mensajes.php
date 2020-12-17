<?php

//Conexión a DB
function conection(){
            
    $host = "localhost";
    $user = "aleksandar";
    $password = "";
    $database = "mensajes";
    
    $conec = mysqli_connect($host, $user, $password, $database);
    
    return $conec;
}

// $sql = "insert into mensajes Values (" . $_POST['nombre'] . "), (" . $_POST['mensaje'] . ")";
$sql = "insert into mensajes Values('".$_POST['nombre']."', '".$_POST['mensaje']."')";

mysqli_query(conection(), $sql);

echo $_POST['mensaje'];

?>