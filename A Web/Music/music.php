<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music List</title>
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/phone.css" media="screen and (max-width: 1000px)">
    <link rel="stylesheet" href="CSS/music.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/spiner.css">
    <link rel="icon" href="img/logo.jpg">
    <script src="JS/jquery-3.6.0.js"></script>
    <script src="JS/index.js"></script>
    <script src="JS/spine.js"></script>
</head>

<body>
<div id="spiner">
    <div class="loader_main">
        <div class="loader">
            <div class="loader loader3"></div>
        </div>
    </div>
    <div class="Lodh1">
        <h1>Please Wait Few Seconds...</h1>
    </div>
</div>
    <div class="mov center">
        <h2 class="log_name"><a href="index.html" class="act">Music Site</a></h2>
        <h2 class="aer"><i class="bi bi-list xl"></i></h2>
    </div>
    <div class="nav center" id="nav">
        <h3 class="xl"><i class="bi bi-x-lg"></i></h3>
        <div class="nav_logo center">
            <img src="img/logo.jpg" class="imageP" alt="">
        </div>
        <div class="logo_name center">
            <h1><a href="index.html">Music Site</a></h1>
        </div>
        <div class="nav_link">
            <ul class="center">
                <li><a href="index.html" class="ah">Home</a></li>
                <li><a href="music.php" class="act ah">Music</a></li>
                <li><a href="upload.php" class="ah">Upload</a></li>
                <li><a href="about.html" class="ah">About</a></li>
                <li><a href="UserLog.html" class="ah">Login</a></li>
            </ul>
        </div>
        <div class="FoT">
            <div class="footer">
                <h2><a href="https://www.instagram.com/henil_v_p/" class="bi bi-instagram"></a></h2>
                <h2><a href="https://www.facebook.com/henil.prajapati.376" class="bi bi-facebook"></a></h2>
            </div>
            <div class="CoB">
                <span class="botF">Copyright &copy; 2022 Henil Code , All Rights Reserved.</span>
            </div>
        </div>
    </div>
    <?php
    include("PHP/DataBaseCon.php");
    ?>
    <div class="head">
        <h1>Music Album</h1>
    </div>

    <div class="top">
        <h2><i class="bi bi-star-fill"></i> Verifide Music</h2>
    </div>
    <div class="Mcontainer" id="Hindi">
        <div class="main_box">
            <div class="audio_box">
                <div class="Auimg">
                    <img src="img/audio.jpg">
                </div>
                <div class="audio">
                    <audio src="Audios/Deva Shree Ganesha.mp3" controls preload="metadata"></audio>
                </div>
                <div class="audio_Detail">
                    <h1>Deva Shree Ganesha Song</h1>
                    <div class="user_U">
                        <span class="user"><i class="bi bi-person"> Henil Code</i></span>
                        <span class="Date"><i class="bi bi-calendar3"></i>28-May-2022<i class="bi bi-clock"></i>12:00 pm</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_box">
            <div class="audio_box">
                <div class="Auimg">
                    <img src="img/audio.jpg">
                </div>
                <div class="audio">
                    <audio src="Audios/Naacho Naacho.mp3" controls preload="auto"></audio>
                </div>
                <div class="audio_Detail">
                    <h1>RRR | Naacho Naacho Song</h1>
                    <div class="user_U">
                        <span class="user"><i class="bi bi-person"> Henil Code</i></span>
                        <span class="Date"><i class="bi bi-calendar3"></i>28-May-2022<i class="bi bi-clock"></i>1:00 pm</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top">
        <h2># Hindi Music</h2>
    </div>
    <div class="Mcontainer" id="Hindi">
        <?php
        $HAD_Select_Qu = "SELECT * FROM audio_detail WHERE AUDIO_LANGUAGE = 'Hindi' ORDER BY `audio_detail`.`AID` DESC";
        $HAcT_Query = mysqli_query($DB_CON, $HAD_Select_Qu);
        while ($HAD = mysqli_fetch_array($HAcT_Query)) {
        ?>
            <div class="main_box">
                <div class="audio_box">
                    <div class="Auimg">
                        <img src="img/audio.jpg">
                    </div>
                    <div class="audio">
                        <audio src="Audios/<?php echo $HAD['AUDIO_FILE'] ?>" controls preload="auto"></audio>
                    </div>
                    <div class="audio_Detail">
                        <h1><?php echo $HAD['AUDIO_NAME'] ?></h1>
                        <div class="user_U">
                            <span class="user"><i class="bi bi-person"></i><?php echo $HAD['USER_NAME'] ?></span>
                            <span class="Date"><i class="bi bi-calendar3"></i><?php echo $HAD['UPLOAD_DATE'] ?> <i class="bi bi-clock"></i><?php echo $HAD['UPLOAD_TIME'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

    <div class="top">
        <h2># English Music</h2>
    </div>
    <div class="Mcontainer" id="English">
        <?php
        $EAD_Select_Qu = "SELECT * FROM audio_detail WHERE AUDIO_LANGUAGE = 'English' ORDER BY `audio_detail`.`AID` DESC";
        $EAcT_Query = mysqli_query($DB_CON, $EAD_Select_Qu);
        while ($EAD = mysqli_fetch_array($EAcT_Query)) {
        ?>
            <div class="main_box">
                <div class="audio_box">
                    <div class="Auimg">
                        <img src="img/audio.jpg">
                    </div>
                    <div class="audio">
                        <audio src="Audios/<?php echo $EAD['AUDIO_FILE'] ?>" controls preload="auto"></audio>
                    </div>
                    <div class="audio_Detail">
                        <h1><?php echo $EAD['AUDIO_NAME'] ?></h1>
                        <div class="user_U">
                            <span class="user"><i class="bi bi-person"></i><?php echo $EAD['USER_NAME'] ?></span>
                            <span class="Date"><i class="bi bi-calendar3"></i><?php echo $EAD['UPLOAD_DATE'] ?> <i class="bi bi-clock"></i><?php echo $EAD['UPLOAD_TIME'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

    <div class="top">
        <h2># Other Music</h2>
    </div>
    <div class="Mcontainer" id="other">
        <?php
        $OAD_Select_Qu = "SELECT * FROM audio_detail WHERE AUDIO_LANGUAGE = 'Other' ORDER BY `audio_detail`.`AID` DESC";
        $OAcT_Query = mysqli_query($DB_CON, $OAD_Select_Qu);
        while ($OAD = mysqli_fetch_array($OAcT_Query)) {
        ?>
            <div class="main_box">
                <div class="audio_box">
                    <div class="Auimg">
                        <img src="img/audio.jpg">
                    </div>
                    <div class="audio">
                        <audio src="Audios/<?php echo $OAD['AUDIO_FILE'] ?>" controls preload="metadata"></audio>
                    </div>
                    <div class="audio_Detail">
                        <h1><?php echo $OAD['AUDIO_NAME'] ?></h1>
                        <div class="user_U">
                            <span class="user"><i class="bi bi-person"></i><?php echo $OAD['USER_NAME'] ?></span>
                            <span class="Date"><i class="bi bi-calendar3"></i><?php echo $OAD['UPLOAD_DATE'] ?> <i class="bi bi-clock"></i><?php echo $OAD['UPLOAD_TIME'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</body>
<div class="FooterB center">
    <div class="Bfooter center">
        <div class="nav_link">
            <ul class="center">
                <li><a href="index.html">Home</a></li>
                <li><a href="music.php">Music</a></li>
                <li><a href="upload.php">Upload</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="UserLog.html">Login</a></li>
            </ul>
        </div>
        <div class="icon center">
            <h2><a href="https://www.instagram.com/henil_v_p/" class="bi bi-instagram"></a></h2>
            <h2><a href="https://www.facebook.com/henil.prajapati.376" class="bi bi-facebook"></a></h2>
        </div>
    </div>
    <span class="botF">Copyright &copy; 2022 Henil Code , All Rights Reserved.</span>
</div>

</html>