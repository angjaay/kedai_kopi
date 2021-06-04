<?php
function conn()
{
    $servername = "localhost";
    $username   = "root";
    $database   = "kasirman";
    $password   = "";

    $conn = new  mysqli($servername, $username, $password, $database);

    if (mysqli_connect_error()) {
        trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
    } else {
        return $conn;
    }
}
