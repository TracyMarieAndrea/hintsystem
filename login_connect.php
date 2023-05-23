<?php
include 'db/db_connect.php';

$uname = $_POST['uname'];
$pword = $_POST['pword'];

$sql = "SELECT * from login_db";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $unamefromdb = $row['username'];
        $pwordfromdb = $row['password'];

        if ($unamefromdb == $uname) {
            if ($pwordfromdb == $pword) {
                session_start();
                $_SESSION["login_db"] = $unamefromdb;
                header('Location: home.php');
            } else {
                header('Location: index.php');
            }
        } else {
            header('Location: index.php');
        }
    }
} else {
    echo "No result";
}

$conn->close();
