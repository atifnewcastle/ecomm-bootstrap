<?php
require './db_connect.php';

if (isset($_POST["update_product"])) {
    //assign local variable
    $p_name = $_POST["p_name"];
    $p_old_price = $_POST["p_old_price"];
    $p_current_price = $_POST["p_current_price"];
    $p_qty = $_POST["p_qty"];
    $p_description = $_POST["p_description"];
    $product_id = $_POST["p_id"];

    if (isset($_FILES["p_featured_photo"]["name"])) {
        //upload file first
        $target_dir = "uploads/";
        $new_file_name = "img-" .uniqid() ."-" .basename($_FILES["p_featured_photo"]["name"]);
        //$target_file = $target_dir . $new_file_name;
        //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $target_file = $target_dir . $new_file_name;
        if (move_uploaded_file($_FILES["p_featured_photo"]["tmp_name"], $target_file)) {

            $sql_update_file = "UPDATE tbl_product SET p_featured_photo = '$new_file_name' WHERE p_id = '$product_id'";
            $sendQuery_update_file = mysqli_query($con, $sql_update_file);
            if (!$sendQuery) {
                echo 'File upload failed!';
            }
        }
    }

    //$sql = "INSERT INTO tbl_product (p_name, p_old_price, p_current_price, p_qty, p_featured_photo, p_description) VALUES ('$p_name','$p_old_price','$p_current_price','$p_qty','$new_file_name','$p_description')";

    $sql = "UPDATE tbl_product SET p_name='$p_name', p_old_price='$p_old_price', p_current_price = '$p_current_price', p_qty='$p_qty', p_description = '$p_description' WHERE p_id = '$product_id'";

    $sendQuery = mysqli_query($con, $sql);
    if ($sendQuery) {
        header("Location: product_list.php?msg=update product succesfull!");
    }else{
        header("Location: product_list.php?msg=update product failed!");
    }
    
}