<?php

function driverMySql(){
    return mysqli_connect("localhost", "root", "", "test");
}

function enviarMensaje($mensaje){
    $query = "INSERT INTO messages VALUES ('', '0001', '$mensaje')";

    if (!mysqli_query(driverMySql(), $query))
        echo "Error";

}
