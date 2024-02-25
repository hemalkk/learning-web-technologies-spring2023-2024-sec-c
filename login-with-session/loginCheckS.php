<!-- Login with session -->

<?php
session_start();
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];



if ($username == "" || $password == ""){

    echo "Null Username and Password.";

}elseif ($username == $password){
    $_SESSION['flag'] ="true";
    $_SESSION['username'] = $username;
    header('location: home.php');

}else{
    echo "Invalid User.";
}

?>