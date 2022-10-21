<?php
session_start();
include("PHP/DataBaseCon.php");
include("PHP/sec.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta href="#" charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Music </title>
    <link rel="stylesheet" href="CSS/upload.css">
    <link rel="stylesheet" href="CSS/smolespin.css">
    <link rel="icon" href="img/logo.jpg">
</head>

<body>

    <div class="mov center">
        <h2 class="log_name"><a href="index.html">Music Site</a></h2>
    </div>
    <div class="Ma">
        <div class="container">
            <div class="top">
                <h1 style="color:Gold ;"> Upload Music </h1>
            </div>
            <form class="form center" enctype="multipart/form-data" method="post" action="Audio_upload.php">
                <div class="box">
                    <label for="SngName" class="bi bi-hash"></label>
                    <input type="text" id="SngName" name="Music_Name" placeholder="Music Name" autocomplete="off" required>
                </div>
                <input type="hidden" value="<?php echo $_SESSION['AUD_User'] ?>" name="username">
                <div class="box">
                    <label for="AuDfile" class="bi bi-music-note"></label>
                    <input type="file" name="Audio_file" id="AuDfile" required accept="audio/*">
                </div>
                <div class="Bsel">
                    <label for="language">Music Language </label>
                    <select id="language" name="Audio_language">
                        <option value="Hindi">Hindi</option>
                        <option value="English">English</option>
                        <option value="Other" selected>Other</option>
                    </select>
                </div>
                <div id="spinID">
                    <div class="smoleSpin">
                        <div class="spin"></div>
                        <div class="spin"></div>
                        <div class="spin"></div>
                        <span>Audio Uploading...</span>
                    </div>
                </div>
                <button type="submit" name="Audio_upload" id="SubD" class="logB">
                    <i class="bi bi-cloud-arrow-up-fill"></i> Upload <i class="bi bi-cloud-arrow-up-fill"></i>
                </button>
            </form>
        </div>
    </div>
</body>
<div class="FooterB center">
    <div class="Bfooter center">
        <div class="nav_link">
            <ul class="center">
                <li><a href="index.html" class="act ah">Home</a></li>
                <li><a href="music.php" class="ah">Music</a></li>
                <li><a href="upload.php" class="ah">Upload</a></li>
                <li><a href="about.html" class="ah">About</a></li>
                <li><a href="UserLog.html" class="ah">Login</a></li>
            </ul>
        </div>
        <div class="icon center">
            <h2><a href="https://www.instagram.com/henil_v_p/" class="bi bi-instagram"></a></h2>
            <h2><a href="https://www.facebook.com/henil.prajapati.376" class="bi bi-facebook"></a></h2>
        </div>
    </div>
    <span class="botF">Copyright &copy; 2022 Henil Code , All Rights Reserved.</span>
</div>
<script>
    document.getElementById("SubD").addEventListener("click", function() {
        var FN = document.getElementById("SngName").value;
        var AD = document.getElementById("AuDfile").value;
        if (FN == "" || AD == "") {
            console.log("Err");
        }else{
            document.getElementById("spinID").style.display="block";
        }
    })
</script>

</html>