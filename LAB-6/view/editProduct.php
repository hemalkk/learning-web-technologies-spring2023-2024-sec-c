<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h2>Edit Product</h2>
    
        <form action="../controller/editProduct.php?id=<?php echo $productId; ?>" method="POST">
            <div>
                <label for="name">Product Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $productData['name']; ?>" required>
            </div>
            <div>
                <label for="buying_price">Buying Price:</label>
                <input type="text" id="buying_price" name="buying_price" value="<?php echo $productData['buying_price']; ?>" required>
            </div>
            <div>
                <label for="selling_price">Selling Price:</label>
                <input type="text" id="selling_price" name="selling_price" value="<?php echo $productData['selling_price']; ?>" required>
            </div>
            <input type="submit" value="Edit">
        </form>
        <?php
   
    ?>
</body>
</html>

