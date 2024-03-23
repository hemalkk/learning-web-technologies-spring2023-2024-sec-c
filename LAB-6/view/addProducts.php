<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tab Title -->
    <title>Product Form</title>
</head>
<body>
    <!-- heading -->
    <h2>Add Products</h2>   
    <!-- Form Start -->
    <form action="../controller/save_product.php" method="POST">
        <div>
            <!-- name -->
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <!-- buy price -->
            <label for="buying_price">Buying Price:</label>
            <input type="text" id="buying_price" name="buying_price" required>
        </div>
        <div>
            <!-- sell price -->
            <label for="selling_price">Selling Price:</label>
            <input type="text" id="selling_price" name="selling_price" required>
        </div>

        <!-- save button -->
        <input type="submit" value="Save" name="submit">
    </form>
</body>
</html>
