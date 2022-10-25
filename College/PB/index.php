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
          <a href="index.php" class="nav-link active"> Home</a>
        </li>
        <li class="nav-item">
          <a href="add.php" class="nav-link "> add </a>
        </li>
        <li class="nav-item">
          <a href="delete.php" class="nav-link "> delete</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container my-3 d-flex flex-wrap">

    <?php
    include "db.php";
    $sele = "select * from watch_store";
    $resS = mysqli_query($conn, $sele);
    while ($row = mysqli_fetch_array($resS)) {
    ?>
      <div class="card border border-dark mx-4" style="width:250px;">
        <img src="p_img/<?php echo $row['PIMAGE'] ?>" class="card-img-top">
        <div class="card-body">
          <span class="badge text-bg-info">#<?php echo $row['PID'] ?></span>
          <div class="d-flex justify-content-between">
            <h5><?php echo $row['PNAME'] ?></h5>
            <h5 class="card-title"><?php echo $row['PRICE'] ?></h5>
          </div>
          <div class="overflow-hidden opacity-50" style="height: 57px;">
            <p class="card-text"><?php echo $row['PDESCRIPTION'] ?></p>
          </div>
          <button class="btn btn-primary">Buy</button>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</body>
<script src="JS/bootstrap.min.js"></script>
<script src="JS/popper.min.js"></script>

</html>