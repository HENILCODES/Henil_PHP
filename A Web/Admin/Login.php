<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <title> Log in | Henil Code</title>
    <link rel="stylesheet" href="CSS/log.css">
    <link rel="icon" href="IMG/Henil.ico">
</head>
<?php
    include "dbcon.php";
?>

<body>
    <div class="main">
        <div class="box">
            <div class="header">
                <img src="IMG/Henil.ico" alt="not load">
                <div class="h-data">
                    <a href="" class="logo_name">Henil Codes</a>
                    <h5>Welcome back!</h5>
                </div>
            </div>
            <div class="infor">
                <form autocomplete="off" method="POST" action="AdminCode.php">
                    <div class="input_box">
                        <span class="TagIn">User name</span>
                        <input type="text" name="U_name" class="input" placeholder="type username" id="user" required title="User Name">
                    </div>
                    <div class="input_box">
                        <span class="TagIn">password</span>
                        <div class="passwor">
                            <input type="password" name="U_password" class="inputx" placeholder="type Password" id="Upassword" required title="Password">
                            <span class="bi bi-eye-fill" id="show_hide_password"></span>
                        </div>
                    </div>
                    <button class="Log_Button" type="submit" id="login" name="Admin_Log">Log in</button>
                </form>
            </div>
        </div>
       <div class="Footer">
            <span>&copy; 2022 <a href="https://henilcodes.github.io/PH/"> Henil Code</a> </span>
        </div>
</body>
<script src="JS/valid.js"></script>

</html>