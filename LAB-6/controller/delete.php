<?php
require_once('../model/userModel.php');

// Check if product ID is provided in the URL
if(isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Delete product by ID
    if(deleteProductById($productId)) {
        // Redirect to product list page after successful deletion
        header('Location: ../view/display.php');
        exit();
    } else {
        echo 'Error deleting product.';
    }
} else {
    // Product ID is not provided in the URL
    echo "Product ID is missing.";
}
?>
