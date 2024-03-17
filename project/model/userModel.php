<?php
require_once('db.php');

// For Sign Up
function signUp($user){
    $con = dbConnect();
    $sql = "insert into users values('', '{$user['firstName']}','{$user['lastName']}','{$user['DOB']}','{$user['gender']}','{$user['mobile']}','{$user['address']}','{$user['email']}','{$user['userName']}','{$user['password']}')";
    
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }

}

// For sign IN
function signIn($userNameOrEmail, $password) {
    $con = dbConnect();

    // Adjust the SQL query to check both username and email
    $sql = "SELECT * FROM users WHERE (userName='{$userNameOrEmail}' OR email='{$userNameOrEmail}') AND password='{$password}'";
    
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        return true;
    } else {
        return false;
    }
}

// Get user data

function getUserData($userNameOrEmail) {
    $con = dbConnect();
    
    // Query to select user based on username or email
    $sql = "SELECT * FROM users WHERE userName = '$userNameOrEmail' OR email = '$userNameOrEmail'";
    
    $result = mysqli_query($con, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return null;
    }
}


// Update Profile
function updateUserProfile($userName, $updatedData)
{
    $con = dbConnect();
    
    // Build the SQL query to update user data
    $sql = "UPDATE users SET
            firstName = '{$updatedData['firstName']}',
            lastName = '{$updatedData['lastName']}',
            DOB = '{$updatedData['DOB']}',
            gender = '{$updatedData['gender']}',
            mobile = '{$updatedData['mobile']}',
            address = '{$updatedData['address']}',
            email = '{$updatedData['email']}'
            WHERE userName = '$userName'";
    
    // Execute the query
    return mysqli_query($con, $sql);
}

function deleteUser($username) {
    $con = dbConnect();

    // Build the SQL query to delete the user
    $sql = "DELETE FROM users WHERE userName = '$username'";

    // Execute the query
    return mysqli_query($con, $sql);
}

?>

