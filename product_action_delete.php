<?php
require './db_connect.php';

if (isset($_GET["id"])) {
    $product_id = $_GET["id"];

    $sql = "DELETE FROM tbl_product WHERE p_id = '$product_id'";
    $sendQuery = mysqli_query($con, $sql);

    if ($sendQuery) {
        header("Location: ./product_list.php?msg=delete product success!");
    }else{
        header("Location: ./product_list.php?msg=delete product failed!");
    }
}