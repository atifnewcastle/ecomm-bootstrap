<?php
require './db_connect.php';

if (isset($_GET["id"])) {
    $product_id = $_GET["id"];

    $sql = "SELECT * FROM tbl_product WHERE p_id = '$product_id'";
    $sendQuery = mysqli_query($con, $sql);
    $result_rows = mysqli_num_rows($sendQuery);
    if ($result_rows > 0) {
        while ($row_data = mysqli_fetch_assoc($sendQuery)) {
            $p_name = $row_data["p_name"];
            $p_old_price = $row_data["p_old_price"];
            $p_current_price = $row_data["p_current_price"];
            $p_qty = $row_data["p_qty"];
            $p_featured_photo = $row_data["p_featured_photo"];
            $p_description = $row_data["p_description"];
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<body>
    <h1>Upadate product</h1>
    <a href="./product_list.php">Back</a>
    <img src="./uploads/<?php echo $p_featured_photo;?>" alt="featured photo" style="width: 200px;">
    <br>
    <form action="./product_action_update.php" method="POST" enctype="multipart/form-data">
    <label for="p_name">Name:</label>
    <input type="text" name="p_name" id="p_name" value="<?php echo $p_name;?>">
    <br>
    <label for="p_old_price">Old price:</label>
    <input type="number" name="p_old_price" id="p_old_price" value="<?php echo $p_old_price;?>">
    <br>
    <label for="p_current_price">Current price:</label>
    <input type="number" name="p_current_price" id="p_current_price" value="<?php echo $p_current_price;?>"ired>
    <br>
    <label for="p_qty">Current quantity:</label>
    <input type="number" name="p_qty" id="p_qty" value="<?php echo $p_qty;?>">
    <br>
    <label for="p_featured_photo">Featured Photo:</label>
    <input type="file" name="p_featured_photo" id="p_featured_photo">
    <br>
    <label for="p_description">Description:</label>
    <input type="text" name="p_description" id="p_description" value="<?php echo $p_description;?>">
    <br>
    <input type="hidden" name="p_id" value="<?php echo $product_id;?>" >
    <input type="submit" value="Update Product" name="update_product" />
    </form>
    
</body>
</html>