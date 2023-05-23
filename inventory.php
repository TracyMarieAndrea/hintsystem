<?php
include "db/inv_connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/modal_menu_content.css">
    <link rel="stylesheet" href="css/navBar.css">
    <link rel="stylesheet" href="css/inventory_style.css">
    <link rel="stylesheet" href="css/modal_inventory.css">

    <title>HINT POS | INVENTORY</title>
</head>

<body>
    <!--Navigation bar-->
    <div class="topnav">
        <div class="logo">
            <a href="home.php"><img src="assets/logo.png" alt="HINT Logo" class="logo"></a>
        </div>
        <div class="topleft">
            <a class="" href="home.php">Home</a>
            <a class="active" href="inventory.php">Inventory</a>
        </div>

        <div class="topright">
            <button id="myBtn" class="menu-btn"><i class="fa fa-ellipsis-v"></i></button>
        </div>
    </div>

    <!--Modal Codes-->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <a href="logout.php">Logout</a>
                <hr>
                <a href="signin.php">Sign In</a>
            </div>
        </div>

    </div>

    <script src="js/modal_menu.js"></script>

    <?php
    $sql = "SELECT * FROM inventory_tb";

    $result = mysqli_query($conn, $sql);
    ?>

    <div class="table">
        <table>
            <thead>
                <tr>
                    <td>
                        <form action="inv_formadd.php">
                            <button class="add_btn">
                                Add
                            </button>
                        </form>
                        <br>
                    </td>
                <tr class="rowhead">
                    <th> </th>
                    <th> Item </th>
                    <th> Cost </th>
                    <th> Quantity </th>
                    <th> Options </th>
                </tr>
            </thead>

            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tbody id="button-parent">
                        <tr>
                            <td> <?php echo $row['item_id'] ?> </td>
                            <td> <?php echo $row['item_Name'] ?> </td>
                            <td> <?php echo $row['item_Cost'] ?> </td>
                            <td> <?php echo $row['item_Quantity'] ?> </td>
                            <td>
                                <a href="inventory_formupdate.php?id=<?php echo $row['item_id']; ?>" id="addremove"><img src="assets/add_item.png" alt="add item">
                                    <a href="inv_formdelete.php?id=<?php echo $row['item_id']; ?>" id="addremove"><img src="assets/remove_item.png" alt="remove item">
                            </td>

                        <?php } ?>
                    <?php }
                    ?>

                    <?php if (isset($message)) {
                        echo $message;
                    } ?>

</body>

</html>