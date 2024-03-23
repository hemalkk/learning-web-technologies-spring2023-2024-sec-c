<?php 
require_once('../model/userModel.php');
session_start();
    
$id = $_REQUEST['id'];
$password = $_REQUEST['password'];

if ($id == "" || $password == "") {
    echo "Null id or password!";
} else {
    $user = logIn($id, $password);
        
    if ($user !== false) {
        if (is_array($user)) {
            $userType = $user['userType'];
            
            // Redirect based on userType
            if ($userType == 'admin') {
                $_SESSION['user'] = $user;
                setcookie('flag', 'true', time() + 3600, '/');
                header('Location: ../view/admin.php');
                exit();
            } elseif ($userType == 'user') {
                $_SESSION['user'] = $user;
                setcookie('flag', 'true', time() + 3600, '/');
                header('Location: ../view/users.php');
                exit();
            } else {
                // Handle unknown userType
                echo "Unknown userType!";
            }
        } else {
            // Handle unexpected return value from logIn function
            echo "Unexpected return value from logIn function!";
        }
    } else {
        // Handle invalid id or password
        echo "Invalid id or password!";
    }
}
?>
