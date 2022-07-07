
<?php 
    include("dbcon.php");
?>
<?php
if (!$_SESSION['Admin_Nmae']) {
    header("location: Login.php");
}
?>