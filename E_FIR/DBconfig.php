<?php
// database connection 
try {
    $server = "localhost";
    $username = "Your_UserName";
    $pass = "";
    $database = "Your_DBName";

    $con = mysqli_connect($server, $username, $pass, $database);
    if (!$con) {
        die("CONNECTION NOT ESTABLISHED.." . mysqli_connect_error());
    }
} catch (\Throwable $th) {
    echo "INTERNAL SERVER ERROR " . mysqli_connect_errno();
}