<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="IMG/Henil.ico">

    <title>Henil Code</title>
    <link rel="stylesheet" href="CSS/manu.css">
    <link rel="stylesheet" href="CSS/home.css">
</head>

<body>
    <?php
    session_start();
    include "dbcon.php";
    include "sec_Code.php";
    ?>
    <div class="nav">
        <div class="manu">
            <div class="Img">
                <img src="IMG/Henil.ico">
            </div>
            <div class="logo">
                <a class="Site_Name textdec"> <?php echo $_SESSION['Admin_Nmae'] ?></a>
            </div>
            <div class="logo_name logo center">
                <span class="Site_Name">Admin Pannel</span>
            </div>
            <div class="logForm">
                <form method="POST" action="AdminCode.php">
                    <button class="Button" name="User_Log_Out">Log Out</button>
                </form>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="maun_Link">
            <div class="links">
                <a href="index.php"> <button class="link textdec act">Home </button></a>
            </div>
            <div class="links">
                <a href="User_table.php"> <button class="link textdec">User table </button></a>
            </div>
            <div class="links">
                <a href="Live_Chat.php"> <button class="link textdec">Live chat site </button></a>
            </div>
            <div class="links">
                <a href="upload_music.php"> <button class="link textdec">Upload Music</button></a>
            </div>
            <div class="links">
                <a href="insertCode.php"> <button class="link textdec">Command Upload</button></a>
            </div>
        </div>
    </div>

    <div class="main_box center">
        <div class="container">
            <div class="box">
                <?php
                $Verif_Q =  "SELECT * FROM user_table WHERE STATUS = 'VERIFIED'";
                $Verif_re = mysqli_query($Db_code_user, $Verif_Q);
                $Ver_row = mysqli_num_rows($Verif_re);
                ?>
                <div class="data">
                    <h1 class="h1">Verified </h1>
                    <div class="data_num Verified">
                        <h1><?php echo $Ver_row ?></h1>
                    </div>
                    <h1 class="h2">User</h1>
                </div>
            </div>
            <div class="box">
                <?php
                $pending_Q =  "SELECT * FROM user_table WHERE STATUS = 'PENDING'";
                $pending_re = mysqli_query($Db_code_user, $pending_Q);
                $pendingrow = mysqli_num_rows($pending_re);
                ?>
                <div class="data">
                    <h1 class="h1">Pending </h1>
                    <div class="data_num act">
                        <h1><?php echo $pendingrow  ?></h1>
                    </div>
                    <h1 class="h2">User</h1>
                </div>
            </div>
            <div class="box">
                <?php
                $Bandif_Q =  "SELECT * FROM user_table WHERE STATUS = 'BAND'";
                $Bandif_re = mysqli_query($Db_code_user, $Bandif_Q);
                $Band_row = mysqli_num_rows($Bandif_re);
                ?>
                <div class="data">
                    <h1 class="h1">Banned </h1>
                    <div class="data_num band">
                        <h1><?php echo $Band_row ?></h1>
                    </div>
                    <h1 class="h2">User</h1>
                </div>
            </div>
            <div class="box">
                <?php
                $Admin_Q =  "SELECT * FROM admin";
                $Admin_re = mysqli_query($Db_code_user, $Admin_Q);
                $Band_row = mysqli_num_rows($Admin_re);
                ?>
                <div class="data">
                    <h1 class="h1">Admin</h1>
                    <div class="data_num Admin">
                        <h1><?php echo $Band_row ?></h1>
                    </div>
                </div>
            </div>
            <div class="box">
                <?php
                $Ad_Q =  "SELECT * FROM audio_detail";
                $Ad_re = mysqli_query($MC_DB, $Ad_Q);
                $Ad_row = mysqli_num_rows($Ad_re);
                ?>
                <div class="data">
                    <h1 class="h1">Total Music</h1>
                    <div class="data_num Admin">
                        <h1><?php echo $Ad_row ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>