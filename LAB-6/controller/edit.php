<?php
session_start();
require_once('../model/userModel.php');

// Check if product ID is provided in the URL
if(isset($_GET['id'])) {
    $productId = $_GET['id'];
    echo "Product ID: $productId<br>"; // Debugging output

    // Retrieve product data based on the product ID
    $productData = getProductById($productId);
    echo "Product Data:<br>"; // Debugging output
    var_dump($productData); // Debugging output

    // Check if product data is retrieved successfully
    if($productData) {
        // Product data is available, proceed with editing
        // Your form HTML code goes here...
    } else {
        // Product data not found for the provided ID
        echo "Product not found.";
    }
} else {
    // Product ID is not provided in the URL
    echo "Product ID is missing.";
}
?>
