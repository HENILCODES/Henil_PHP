<?php
if (isset($_GET['check'])) {
    session_start();
    $_SESSION['us'] = $_GET['user'];
    $_SESSION['pa'] = $_GET['pass'];
}
if ($_SESSION['us'] && $_SESSION['pa']) {
    echo "User Name : ". $_SESSION['us'] . "<br> User Password : ". $_SESSION['pa'];
}else{
    echo "Welcome Guest";
}
?>
<form method="get">
    <button name="logout">Log Out</button>
</form>
<?php
if (isset($_GET['logout'])) {
    session_destroy();
}
?>