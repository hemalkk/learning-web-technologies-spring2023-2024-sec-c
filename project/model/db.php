<?php

$host = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "webtech";

function dbConnect(){
    global $host;
    // global $dbUser;
    // global $dbPassword;
    global $dbName;
    
    $con = mysqli_connect($host,$GLOBALS['dbUser'],$GLOBALS['dbPassword'],$dbName);
    
    return $con;
}


?>