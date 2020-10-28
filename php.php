<?php

$query = "INSERT INTO messages VALUES ('', '0001', 'MENSAJE ESCRITO')";
if (!mysqli_query(driverMySql(), $query)) {
    echo "Error";
}