<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <h1>Add new product</h1>
    <form action="./product_action_add.php" method="POST" enctype="multipart/form-data">
    <label for="p_name">Name:</label>
    <input type="text" name="p_name" id="p_name" required>
    <br>
    <label for="p_old_price">Old price:</label>
    <input type="number" name="p_old_price" id="p_old_price" required>
    <br>
    <label for="p_current_price">Current price:</label>
    <input type="number" name="p_current_price" id="p_current_price" required>
    <br>
    <label for="p_qty">Current quantity:</label>
    <input type="number" name="p_qty" id="p_qty" required>
    <br>
    <label for="p_featured_photo">Featured Photo:</label>
    <input type="file" name="p_featured_photo" id="p_featured_photo" required>
    <br>
    <label for="p_description">Description:</label>
    <input type="text" name="p_description" id="p_description" required>
    <br>
    <input type="submit" value="add product" name="add_product" />
    </form>
    
</body>
</html>