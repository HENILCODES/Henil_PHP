<!DOCTYPE html>
<html lang="en">
<?php
session_start();

include "dbcon.php";
include "sec_Code.php";
?>

<head>
    <link rel="icon" href="IMG/Henil.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Henil Code</title>
    <link rel="stylesheet" href="CSS/manu.css">
    <link rel="stylesheet" href="CSS/home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

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
                <a href="index.php"> <button type="submit" class="link textdec">Home </button></a>
            </div>
            <div class="links">
                <a href="User_table.php"> <button type="submit" class="link act textdec">User table </button></a>
            </div>
            <div class="links">
                <a href="Live_Chat.php"> <button type="submit" class="link textdec">Live chat site </button></a>
            </div>
            <div class="links">
                <a href="upload_music.php"> <button type="submit" class="link textdec">Upload Music</button></a>
            </div>
        </div>
    </div>
    <div class="main_box center">
        <div class="fillter right">
            <form method="post" id="FilterForm">
                <select name="selectio" id="Selection">
                    <option value="">----Select----</option>
                    <option value="ALL">ALL</option>
                    <option value="PENDING">PENDING</option>
                    <option value="VERIFIED">VERIFIED</option>
                    <option value="BAND">BAND</option>
                </select>
            </form>
        </div>
        <script>
            $(document).ready(function() {
                $("#Selection").change(function() {
                    $("#FilterForm").submit();
                });
            });
        </script>
        <?php
        $select_Filt = "ALL";
        if (isset($_POST['selectio'])) {
            $select_Filt = $_POST['selectio'];
        }
        ?>
        <div class="head">
            <h1> User Log</h1>
            <span> <?php echo $select_Filt?></span>

        </div>
        <?php
        if ($select_Filt == "ALL") {
            $selectt_Q =  "SELECT * FROM user_table ORDER BY `user_table`.`UID` DESC";
        }else{
            $selectt_Q =  "SELECT * FROM user_table WHERE STATUS = '$select_Filt'  ORDER BY `user_table`.`UID` DESC";
        }
        $selectt_re = mysqli_query($Db_code_user, $selectt_Q);
        ?>
        <div class="container">
            <div class="form">
                <table>
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>STATUS</th>
                        <th>opretion</th>
                    </thead>
                    <?php
                    while ($row = mysqli_fetch_array($selectt_re)) {
                        echo '  
            <tr>
                <form method="post"  action="User_table_Phpcode.php">
                    <td><input readonly value="' . $row['UID'] . '" name="Uid" placeholder="ID" class="input center" type="text" size="3"></td>
                    <td><input readonly value="' . $row['UNAME'] . '" name="Uname" placeholder="Name" class="input center" type="text" size="12"></td>
                    <td><input readonly value="' . $row['UEMAIL'] . '" name="Uemail" placeholder="Email" class="input" type="text"></td>
                    <td><input readonly value="' . $row['UPASSWORD'] . '" name="Upassword" placeholder="Password" class="center input" type="text"></td>
                    <td><input readonly value="' . $row['STATUS'] . '" name="Ustatus" placeholder="Status" class="input center" type="text" size="6"></td>
                    <td class="s">
                        <button type="submit" name="BTaprov" class="Butop ap">Aprove</button>
                        <button type="submit" name="BTpendi" class="Butop pe">Pending</button>
                        <button type="submit" name="BTbaned" class="Butop ba">Band</button>
                        <button type="submit" name="BTdelete" class="Butop">Delete</button>
                    </td>
                </form>
            </tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>