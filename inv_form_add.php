<?php
    session_start();

    include "db/inv_connection.php";

    if(isset($_POST['add_Data'])) {

        $quantity = $_POST['item_Quantity'];
        $itemName = $_POST['item_Name'];
        $cost = $_POST['item_Cost'];


        $sql = "INSERT INTO inventory_tb (item_Name, item_Quantity, item_Cost) VALUES ('$itemName', '$cost', '$quantity')";
        
        if(mysqli_query($conn, $sql)) {
            header("Location: inventory.php") ;          
        }
        else {
            echo "Try Again";
            header("Location: inventory.php") ;
        }
    }
?>