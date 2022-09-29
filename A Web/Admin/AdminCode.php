
<?php
include "dbcon.php";
?>
<?php
if (isset($_POST['Admin_Log'])) {
    # code...
    // $sql = "SELECT Name, Password FROM admin WHERE Name = '$_POST[U_name]' AND Password = '$_POST[U_password]'";
    // $res = mysqli_query($Db_code_user, $sql);
    // $cou = mysqli_num_rows($res);

    if ($_POST['U_name'] == "Henil Code" && $_POST['U_password'] == "@1515@henil") {
        session_start();
        $_SESSION['Admin_Nmae'] = $_POST['U_name'];
        header("location: index.php");
    }else{
        header("location: Login.php");
    }
}
?>


<?php
    session_start();
    if (isset($_POST['User_Log_Out'])) {
        session_destroy();
        unset($_SESSION['Admin_Nmae']);
        header('location: index.php');
    }
    ?>