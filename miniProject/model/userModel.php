<?php
require_once('db.php');

// Registration
function reg($user){
    $con = dbConnect();
    $sql = "INSERT INTO users (id, name, email, password, userType) VALUES ('{$user['id']}', '{$user['name']}', '{$user['email']}', '{$user['password']}', '{$user['userType']}')";
    
    if(mysqli_query($con, $sql)){
        return true;
    } else {
        return false;
    }
}



// Login
function logIn($id, $password) {
    $con = dbConnect();
    
    // Check id, password, and userType
    $sql = "SELECT * FROM users WHERE id = '{$id}' AND password = '{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    
    if ($count == 1) {
        $user = mysqli_fetch_assoc($result);
        
        // Check if userType is valid
        $userType = $user['userType'];
        if ($userType == 'admin' || $userType == 'user') {
            return $user; 
        } else {
            return false; 
        }
    } else {
        return false; 
    }
}


?>


