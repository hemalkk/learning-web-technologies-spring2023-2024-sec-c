<?php

$host = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "miniproject";

function dbConnect(){
    global $host, $dbUser, $dbPassword, $dbName;
    
    $con = mysqli_connect($host, $dbUser, $dbPassword, $dbName);
    
    return $con;
}

?>
