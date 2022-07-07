<!DOCTYPE html>
<html lang="en">

<head>
    <title>Henil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="icon" href="IMG/Henil.ico">
    <link rel="stylesheet" href="CSS/manu.css">
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="CSS/ho.css">
</head>
<?php
session_start();
include "dbcon.php";
include "sec_Code.php";
?>

<body onload="focusIn()">
    
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
                <a href="Live_Chat.php"> <button class="link act textdec">Live chat site </button></a>
            </div>
            <div class="links">
                <a href="upload_music.php"> <button class="link textdec">Upload Music</button></a>
            </div>
        </div>
    </div>
    <div class="main_box">

        <div class="header">
            <div class="Chat_Man">
                <div class="chats" id="chat_s">
                    <?php
                date_default_timezone_set("Asia/Calcutta");
                $time_C = date('h:i a');
                if (isset($_POST['Done'])) {
                    $in = "DELETE FROM message WHERE ID = $_POST[D_chat_u] ";
                    mysqli_query($conn, $in);
                    header("Location: Live_Chat.php");
                }
                if (isset($_GET['Done_t'])) {
                    $in_T = "DELETE FROM message WHERE Time_Stamps ='$_GET[D_Time_Chat]'";
                    mysqli_query($conn, $in_T);
                    header("Location: Live_Chat.php");
                }
                
                $select = "SELECT * FROM message";
                $result = mysqli_query($conn, $select);
                while ($r = mysqli_fetch_array($result)) {
                    echo  " <div class='message'>
                        <div class='user'>
                            <span> " . $r['ID'] . " . ".$r['User_Name'] ."</span>
                        </div>
                        <div class='userchat'>
                            <span id='chat'>" . $r['Message'] . " </span>
                            <span id='chat'> <u>" . $r['File_Name']  . "</u> </span>
                            </div>
                            
                            <div class='time'>
                            <span>" . $r['Time_Stamps'] . "</span>
                            </div>
                            </div> ";
                }
                ?>
                    <p id="HP"></p>
                </div>
                <div class="bottom">
                    <div id="chat_in">
                        <form method="POST">
                            <input type="number" class="input" id="ChatsBox" name="D_chat_u" placeholder="Delete By Id">
                            <button class="send bi bi-send" name="Done"> </button>
                        </form>
                        <form method="GET">
                            <input type="text" class="input" placeholder="Delete By time Stamp" name="D_Time_Chat">
                            <button class="send bi bi-send" name="Done_t"> </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function focusIn() {
                window.location = "Live_Chat.php#HP";
                document.getElementById("ChatsBox").focus();
            }
        </script>
    </div>
</body>

</html>