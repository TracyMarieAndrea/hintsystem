<?php
    session_start();

    include "db/inv_connection.php";

    if(isset($_POST['update_Quantity'])) {

        $id = $_POST['item_ID'];
        $quantity = $_POST['item_Quantity'];
        $itemName = $_POST['item_Name'];

        $query = "UPDATE inventory_tb SET item_Quantity='$quantity' WHERE item_id='$id;' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            $_SESSION['status'] = "";
            header("Location: inventory.php");
        }
        else {
            $_SESSION['status'] = "";
            header("Location: inventory.php");
        }
    }
?>