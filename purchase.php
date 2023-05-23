<?php
$pid = $_POST['pid'];
$qty = $_POST['qty'];

$conn = mysqli_connect("localhost", "root", "", "pos_system");
$sql = "SELECT * FROM inventory_tb WHERE item_id=$pid";

$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($data as $d) :

    $current_qty =  $d['item_Quantity'];

    $new_qty = $current_qty - $qty;

    $sql2 = "UPDATE inventory_tb SET item_Quantity=$new_qty WHERE item_id=$pid";

    if ($conn->query($sql2) === TRUE) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        echo "Error updating record: " . $conn->error;
    }


endforeach;
