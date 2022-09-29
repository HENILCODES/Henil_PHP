<?php
session_start();
include('sec_Code.php');
include("dbcon.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Henil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="icon" href="https://secure.gravatar.com/avatar/19cef1c37b12cb5d47ce71e9894dd14f?s=160&d=identicon&r=g">
    <link rel="stylesheet" href="CSS/HPhome.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="JS/jqcha.js"></script>
</head>

<body onload="focusIn()">
    <div class="Dev_logo">
        <a class="bi bi-facebook" href="https://www.facebook.com/henil.prajapati.376"></a>
        <a href="https://henilcodes.github.io/PH/" class="Dev_Lo"> <img src="CSS/Henil.jpg" alt=""></a>
        <a class="bi bi-instagram" href="https://www.instagram.com/henil_v_p/"></a>
    </div>
    <div class="header">
        <?php
        $live_U = $_SESSION['User_N'];
        ?>
        <div class="main">
            <div class="top">
                <div class="top1">
                    <span> <a href="http://henil.42web.io/Live_Chat/" class="logo">Live Chat </a></span>
                    <h3 class="live_User"> Welcome <span class="live_U"><?php echo $live_U ?></span> </h3>
                </div>
                <div class="top2">
                    <a href="whatsapp://send?text=Join With Me for Live Chatting http://henil.42web.io/Live_Chat/ Come Fast." class="invite_a bi bi-whatsapp" title="Send To What's app"></a>
                    <a class="bi bi-arrow-clockwise" href="Live_Chat.php" id="ref"></a>
                    <form action="logout_Code.php" method="post" class="log_Form">
                        <button name="Log_Out" type="submit" class='login_log'>Log out</button>
                    </form>
                </div>
            </div>
            <div class="chats" id="chat_s">
                <?php
                date_default_timezone_set("Asia/Calcutta");
                $time_C = date('d-M-Y g:i a');
                if (empty($_POST['chat_u'])) {
                    $_POST['chat_u'] = ".";
                }
                
                if (isset($_POST['Done'])) {
                    $file = $_FILES["file"]["name"];
                    $FiD_Name = time() . $_FILES["file"]["name"];
                    $chat = str_ireplace("<","&lt;",$_POST['chat_u']);

                    $in = "insert into message (User_Name,Message,file,File_Name,Time_Stamps) values ('$live_U','$chat','$FiD_Name','$file','$time_C')";
                    mysqli_query($conn, $in);
                    if (move_uploaded_file($_FILES["file"]["tmp_name"], "U_Files/" . $FiD_Name)) {
                        header("Location: Live_Chat.php");
                    }
                }
                $select = "SELECT * FROM message";
                $result = mysqli_query($conn, $select);
                while ($r = mysqli_fetch_array($result)) {
                    echo  " <div class='message'>
                            <div class='user'>
                            <span> " . $r['User_Name'] . "</span>
                            </div>
                            <div class='userchat'>
                            <span >" . $r['Message'] . " </span>
                            <span > <a target='_blank' class='hiper' href='U_Files/" . $r['file'] . "'>" . $r['File_Name'] . " </a></span>
                            </div>
                            <div class='time'>
                                <span>" . $r['Time_Stamps'] . "</span>
                            </div>
                            </div> ";
                }
                ?>
                <p id="HP"></p>
            </div>
            <div class="optionB">
                <span class="bi bi-filetype-pdf opt" id="pdf_B"></span>
                <span class="bi bi-chat-dots opt" id="chat_B"></span>
            </div>
            <div class="bottom">
                <div id="chat_in">
                    <form method="POST" enctype="multipart/form-data" class="form">
                        <span class="bi bi-link-45deg" id="option"></span>
                        <input type="text" class="input" id="ChatsBox" name="chat_u" autocomplete="off" placeholder="Type Message" title="Type Message">
                        <input type="file" class="file_in" id="file_input" name="file">
                        <button class="send bi bi-send" name="Done"> </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    function focusIn() {
        window.location = "Live_Chat.php#HP";
        document.getElementById("ChatsBox").focus();
    }
</script>
