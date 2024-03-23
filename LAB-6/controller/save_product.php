<?php
require_once('../model/userModel.php');

$productName = $_POST['name'];
$buyingPrice = $_POST['buying_price'];
$sellingPrice = $_POST['selling_price'];

if($productName == "" || $buyingPrice == "" || $sellingPrice == ""){
    echo "All required fields are empty. Please fill up the required fields with appropriate values.";
} else {
    $status = addProducts($productName, $buyingPrice, $sellingPrice);
    if($status){
        header('location: ../view/display.php');
    } else {
        echo "Error! Please try again.";
    }
}
?>
