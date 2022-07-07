<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Henil Code</title>
    <link rel="icon" href="IMG/Henil.ico">
    <link rel="stylesheet" href="CSS/manu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="CSS/home.css">
</head>
<?php
session_start();
include "dbcon.php";
include "sec_Code.php";
?>

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
                <a href="index.php"> <button class="link textdec">Home </button></a>
            </div>
            <div class="links">
                <a href="User_table.php"> <button class="link textdec">User table </button></a>
            </div>
            <div class="links">
                <a href="Live_Chat.php"> <button class="link textdec">Live chat site </button></a>
            </div>
            <div class="links">
                <a href="upload_music.php"> <button class="link textdec act">Upload Music</button></a>
            </div>
        </div>
    </div>
    <div class="main_box center">
        <div class="fillter right">
            <form method="post" id="FilterForm">
                <select name="selectio" id="Selection">
                    <option value="">----Select----</option>
                    <option value="ALL">ALL</option>
                    <option value="Hindi">Hindi</option>
                    <option value="English">English</option>
                    <option value="Other">Other</option>
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
            <h1>Music Log</h1>
            <span> <?php echo $select_Filt?></span>
        </div>
        <div class="container">
            <div class="form">
                <?php
                if ($select_Filt == "ALL") {
                    $Select_Qu = "SELECT * FROM audio_detail ORDER BY `audio_detail`.`AID` DESC";
                }else{
                    $Select_Qu = "SELECT * FROM audio_detail WHERE AUDIO_LANGUAGE ='$select_Filt' ORDER BY `audio_detail`.`AID` DESC";
                }
                $result_q = mysqli_query($MC_DB, $Select_Qu);
                ?>
                <table>
                    <thead>
                        <th>ID</th>
                        <th> User</th>
                        <th> Music Name</th>
                        <th> File Name</th>
                        <th> Language</th>
                        <th> opretion</th>
                        <th class="font-19">Date </th>
                    </thead>
                    <?php
                    while ($data = mysqli_fetch_array($result_q)) {
                        echo '
                        <tr>
                        <form method="post" action="User_table_Phpcode.php">
                                <td><input readonly value="' . $data['AID'] . '" id="d" name="Aid" placeholder="ID" class="input center" type="text" size="3"></td>
                                <td><input readonly value="' . $data['USER_NAME'] . '" name="Uname" placeholder="AName" class="input center" type="text" size="12"></td>
                                <td><input readonly value="' . $data['AUDIO_NAME'] . '" name="Uemail" placeholder="Amusic" class="input" type="text"></td>
                                <td><input readonly value="' . $data['AUDIO_FILE'] . '" name="Upassword" placeholder="AFileName" class="center input" type="text"></td>
                                <td><input readonly value="' . $data['AUDIO_LANGUAGE'] . '" name="Ustatus" placeholder="Alanguage" class="input center" type="text" size="6"></td>
                                <td class="s width-330">
                                    <button name="DeleteAD" class="Butop ba">Delete</button>
                                </td>
                                <td>' . $data['UPLOAD_DATE'] . '</td>
                                </form>
                                </tr>
                                ';
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>