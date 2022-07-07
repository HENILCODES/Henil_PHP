<?php 
    setcookie("user","Henil",time()+100);
    
    print_r($_COOKIE);

    if (isset($_COOKIE["user"])) {
        ?>

        <h1>Hello <?php echo "Welcome ".$_COOKIE["user"]. "<br>"; ?></h1>
        <?php
        
    } else {
        echo "Guest";
    }
    // setcookie("user","",time()-200);
    
?>
<html>
    <body>
        <h2>dd</h2>
    </body>
</html>