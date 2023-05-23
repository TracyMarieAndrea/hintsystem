<?php
    session_start();

    include "db/inv_connection.php";

    if(isset($_POST['Deletion'])) {

        $id = $_POST['item_ID'];

        $query = "DELETE FROM inventory_tb WHERE item_id='$id;' ";
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