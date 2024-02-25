<!-- Login with cookies-->

<?php
session_start();
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];



if ($username == "" || $password == ""){

    echo "Null Username and Password.";

}elseif ($username == $password){
    $_SESSION['username'] = $username;
    setcookie('flag', 'true', time()+3600, '/');
    header('location: home.php');

}else{
    echo "Invalid User.";
}

?>