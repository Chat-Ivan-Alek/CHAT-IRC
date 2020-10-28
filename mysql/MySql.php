<?php

function driverMySql(){
    return mysqli_connect("localhost", "root", "", "test");
}
