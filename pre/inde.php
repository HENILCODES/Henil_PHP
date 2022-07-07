<!DOCTYPE html>
<html lang="en">

<head>
    <title>Henil</title>
    <!-- <meta http-equiv="refresh" content="1"> -->
</head>
<style>
    .d {
        background-color: red;
    }
</style>

<body>
<?php 
    class Test{
        public $a;
        function ss($val){
            $this->a = $val;
            echo "ddjhgdjdjdjgdgd";
        }
    }
    $T = new Test;
    $T->ss(100);
?>
    <?php 
        // $ww = '|S-A|';
        $ww = "|S-A|";
        echo "<pre> $ww </pre>";
    ?>
    <?php
    
    $da = " Henil sks";
    echo "<h1> $da  sskjsksjk</h1> <br>";
    ?>
    <p> Hi <u> <?php echo $da; ?></p>
    <?php
    echo "<h1>Heii";
    ?>

    <?php
    $a = "dd";
    print("<h2> Hello $a</h2>");
    ?>

    <?php
    $roll = 19;
    $nam = "Henil";
    printf("<br>He %d llo %s", $roll, $nam);
    ?>
    <?php
    echo "<h5 class=\"d\" > ddd </h5>";
    echo "<h5 class='d' > ddd </h5>";
    ?>
    <?php
    $s = TRUE;
    $s1 = NULL;
    echo " He dfkj \n $s df $s1 <br> dhkf";
    ?>
</body>

</html>