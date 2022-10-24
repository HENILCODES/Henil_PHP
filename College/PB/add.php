<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Henil code</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light shadow-sm">
        <div class="container-fluid">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="index.php" class="nav-link"> Home</a>
                </li>
                <li class="nav-item">
                    <a href="add.php" class="nav-link active"> add </a>
                </li>
                <li class="nav-item">
                    <a href="delete.php" class="nav-link "> delete</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container my-3">
        <form class="row g-3 w-50 m-auto" autocomplete="off" method="post" enctype="multipart/form-data">
            <div class="input-group">
                <spna class="input-group-text w-25 justify-content-center">#</spna>
                <input required type="text" class="form-control" name="PID" placeholder="Product ID">
            </div>
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Name</span>
                <input required type="text" class="form-control" name="PNAME" placeholder="Name">
            </div>
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">$</span>
                <input required type="text" class="form-control" name="PPRICE" placeholder="Price">
            </div>
            <div class="input-group">
                <input type="file" class="form-control form-control-lg" name="file" accept="image/*">
            </div>
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Description</span>
                <textarea class="form-control" placeholder="Type hear" name="PDESCRIP"></textarea>
            </div>
            <button class="btn btn-primary" name="UPLOAD">Submit</button>
        </form>
    </div>

</body>
<script src="JS/bootstrap.min.js"></script>
<script src="JS/popper.min.js"></script>
<?php
include "db.php";

if (isset($_REQUEST['UPLOAD'])) {
    $PID = $_REQUEST['PID'];
    $PNAME = $_REQUEST['PNAME'];
    $PPRICE = $_REQUEST['PPRICE'];
    $PFILE = $_FILES['file']['name'];
    $PDESCRIP = $_REQUEST['PDESCRIP'];

    if (move_uploaded_file($_FILES['file']['tmp_name'], "p_img/" . $PFILE)) {
        if ($re) {
            
            $inse = "insert into watch_store (PID, PNAME, PRICE, PIMAGE, PDESCRIPTION) values ($PID,'$PNAME',$PPRICE,'$PFILE','$PDESCRIP')";
            $re = mysqli_query($conn, $inse);
            echo "Add";

        }else{
            echo "0";
        }
    } else {
        echo "eroor";
    }
}
?>

</html>