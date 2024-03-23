<?php
require_once('db.php');

function addProducts($productName, $buyingPrice, $sellingPrice){
    $con = dbConnect();
    $sql = "INSERT INTO products (name, buyingPrice, sellingPrice) VALUES ('$productName', '$buyingPrice', '$sellingPrice')";
    
    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}


function getProducts() {
    $con = dbConnect();
    $sql = "SELECT * FROM products";
    $result = mysqli_query($con, $sql);

    $products = []; // Initialize an empty array to store products

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $products[] = $row; // Add each row to the products array
        }
    }

    return $products;
}

function editProducts($productId, $updatedData) {
    $con = dbConnect();

    // Extract updated data
    $name = $updatedData['name'];
    $buyingPrice = $updatedData['buyingPrice'];
    $sellingPrice = $updatedData['sellingPrice'];

    // Build the SQL query to update product data
    $sql = "UPDATE products SET
            name = '$name',
            buyingPrice = '$buyingPrice',
            sellingPrice = '$sellingPrice'
            WHERE ID = $productId";

    // Execute the query
    return mysqli_query($con, $sql);
}



function deleteProductById($productId) {
    $con = dbConnect();

    // Build the SQL query to delete the product
    $sql = "DELETE FROM products WHERE ID = $productId";

    // Execute the query
    return mysqli_query($con, $sql);
}
?>

