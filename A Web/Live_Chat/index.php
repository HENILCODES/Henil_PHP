<?php
    include("dbcon.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Henil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="icon" href="https://secure.gravatar.com/avatar/19cef1c37b12cb5d47ce71e9894dd14f?s=160&d=identicon&r=g">
    <link rel="stylesheet" href="CSS/HPhome.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="JS/jqcha.js"></script>
</head>
<script>
    function focusIn() {
        window.location = "index.php#HP";
        setTimeout('window.location = "Form_login.php"',4000);
    }
</script>
<body onload="focusIn()">
    <div class="Dev_logo">
        <a class="bi bi-facebook" href="https://www.facebook.com/henil.prajapati.376"></a>
        <a href="https://henilcodes.github.io/PH/" class="Dev_Lo"> <img src="CSS/Henil.jpg" alt=""></a>
        <a class="bi bi-instagram" href="https://www.instagram.com/henil_v_p/"></a>
    </div>
    <div class="header">
        <div class="main">
            <div class="top">
                <div class="top1">
                    <span> <a href="http://henil.42web.io/Live_Chat/" class="logo">Live Chat </a></span>
                    <h3 class="live_User"> Welcome </h3>
                </div>
                <div class="top2">
                    <a href="whatsapp://send?text=Join With Me for Live Chatting http://henil.42web.io/Live_Chat/ Come Fast." class="invite_a bi bi-whatsapp" title="Send To What's app"></a>
                    <a class="bi bi-arrow-clockwise" href="index.php" id="ref"></a>
                    <form action="Form_login.php" method="post" class="log_Form">
                        <button name="Log_Out" type="submit" class='login_log'>Log in </button>
                    </form>
                </div>
            </div>
            <div class="chats" id="chat_s">
                <?php
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
                   <h1>Start Live Chat <a href="Form_sigup.php" class="login">Sign up</a> </h1>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
    .login{
    border-radius: 40px;
    font-size: 27px;
    cursor: pointer;
    margin-left: 5px;
    font-weight: bold;
    padding: 13px;
    text-decoration: none;
    color: black;
    box-shadow: 0 0 15px 0 rgb(119, 4, 181);
    border: none;
    background-color: gold;
    text-shadow: 0 0 10px white;
    transition: 0.5s;
}
.login:hover{
    background-color: brown;
    color: gold;
    box-shadow: 0 0 10px 0 white;
    border: 1px solid gold;
}
    .bottom{
        text-align: center;
        color: gold;
        background-color: brown;
        border-radius: 10px;
        padding: 10px;
        margin-bottom: 10px;
        text-shadow: 0 0 10px black;
    }
    .chats{
        height: 450px;
    }
</style>
</html>
