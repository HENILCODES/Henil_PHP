<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Henil code</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>


<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="index.php" class="nav-link"> Home</a>
                </li>
                <li class="nav-item">
                    <a href="add.php" class="nav-link "> add </a>
                </li>
                <li class="nav-item">
                    <a href="delete.php" class="nav-link active"> delete</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
<form method="post" class="m-2">
    <div class="input-group w-25">
        <input type="text" class="form-control" name="D_ID">
        <button class="btn btn-danger" type="submit" name="D_BTN"> Delete </button>
    </div>
</form>
    <table class="table table-primary table-responsive table-striped table-bordered">
        <thead class="table-borderless">
            <th>PID</th>
            <th>Name</th>
            <th>PRICE</th>
            <th>IMAGE</th>
            <th>DESCRIPTION</th>
        </thead>
        <?php
        include "db.php";
        $sele = "select * from watch_store";
        $resS = mysqli_query($conn, $sele);
        while ($row = mysqli_fetch_array($resS)) {
        ?>
            <tr>
                <td><?php echo $row['PID'] ?></td>
                <td><?php echo $row['PNAME'] ?></td>
                <td><?php echo $row['PRICE'] ?></td>
                <td><?php echo $row['PIMAGE'] ?></td>
                <td><?php echo $row['PDESCRIPTION'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    </div>

</body>
<script src="JS/bootstrap.min.js"></script>
<script src="JS/popper.min.js"></script>
<?php
if (isset($_POST['D_BTN'])) {
    $del = "delete from watch_store where PID = $_POST[D_ID]";
    if (mysqli_query($conn,$del)){
        echo "delete";
    }
}
?>
</html>