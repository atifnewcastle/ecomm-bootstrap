<?php
require './vendor/autoload.php';
require './db_connect.php';

if (!$con) {
    echo "database connection failed!";
}else{
    echo "database connection successful.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>datatables for dummies</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="./vendor/datatables/datatables/media/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="./vendor/datatables/datatables/media/css/jquery.dataTables.css">
</head>
<body>
    <h1>datatable example 1:</h1>
    <table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>product ID</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM tbl_product ORDER BY p_id";
        $result = mysqli_query($con,$sql);
        $row_count = mysqli_num_rows($result); //count the number of rows
        if ($row_count > 0) { 
            while ($row_data = mysqli_fetch_assoc($result)) {
                $product_id = $row_data["p_id"];
                $product_name = $row_data["p_name"];
                $product_price = $row_data["p_current_price"];
                ?>
        <tr>
            <td><?php echo $product_id;?></td>
            <td><?php echo $product_name;?></td>
            <td><?php echo $product_price;?></td>
        </tr>
                <?php
            }
        }
        ?>
    </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="./vendor/datatables/datatables/media/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script> 
</body>
</html>
