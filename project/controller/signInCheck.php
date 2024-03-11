<?php 
    require_once('../model/userModel.php');
    session_start();
    
    $userNameOrEmail = $_REQUEST['userNameOrEmail'];
    $password = $_REQUEST['password'];

    if ($userNameOrEmail == "" || $password == "") {
        echo "null username or password!";
    } else {
        $status = signIn($userNameOrEmail, $password);
        
        if ($status) {
            $_SESSION['username'] = $userNameOrEmail;
            setcookie('flag', 'true', time() + 3600, '/');
            header('location: ../view/userDashboard.php');
        } else {
            header('location: ../view/wrongSignIn.php');
        }
    }
?>
