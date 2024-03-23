<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <h2>Product List</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Profit</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Include the file containing the function to fetch product data
            require_once('../model/userModel.php');

            // Fetch product data from the database
            $products = getProducts();

            // Calculate profit for each product and display them in the table
            foreach ($products as $product) {
                $profit = $product['sellingPrice'] - $product['buyingPrice'];
                echo "<tr>";
                echo "<td>{$product['name']}</td>";
                echo "<td>{$profit}</td>";
                echo "<td>";
                echo "<a href='editProduct.php?id={$product['ID']}'>Edit</a> | ";
                echo "<a href='../controller/delete.php?id={$product['ID']}'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
