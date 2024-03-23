<?php 
require_once('../model/userModel.php');

// Retrieve form data
$id = $_POST['id'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$name = $_POST['name'];
$email = $_POST['email'];
$userType = $_POST['userType'];

// Validate form data
if(empty($id) || empty($password) || empty($name) || empty($email) || empty($userType)) {
    echo "All required fields are empty. Please fill up the required fields with appropriate values.";
} elseif($password !== $confirmPassword) {
    echo "Password and Confirm Password do not match.";
} else {
    // Prepare user data array
    $user = array(
        'id' => $id,
        'password' => $password,
        'name' => $name,
        'email' => $email,
        'userType' => $userType
    );

    // Attempt registration
    $status = reg($user);
    if($status) {
        header('location: ../view/login.php');
    } else {
        echo "Error! Please try again.";
    }
}
?>
