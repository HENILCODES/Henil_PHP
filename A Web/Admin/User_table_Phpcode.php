<?php
    include "dbcon.php";
?>

<?php
if (isset($_POST['User_Login'])) {
    $sql = "SELECT Name, Password FROM admin WHERE Name = '$_POST[U_name]' AND Password = '$_POST[U_password]'";
    $res = mysqli_query($Db_code_user, $sql);
    $cou = mysqli_num_rows($res);
    echo "ss";
    if ($cou == 1) {
        session_start();
        $_SESSION['Admin_Nmae'] = $_POST['U_name'];
        header("location:user_d.php");
    }
}
echo "s";
?>


<?php
if (isset($_POST['BTpendi'])) {
    $upd_Q = "UPDATE user_table SET STATUS = 'PENDING' WHERE UID = '$_POST[Uid]'";
    $run_P_Q = mysqli_query($Db_code_user, $upd_Q);
    if ($run_P_Q) {
        header("Location: User_table.php");
    }
} else if (isset($_POST['BTaprov'])) {
    $upd_Q = "UPDATE user_table SET STATUS = 'VERIFIED' WHERE UID = '$_POST[Uid]'";
    $run_Ap_Q = mysqli_query($Db_code_user, $upd_Q);
    if ($run_Ap_Q) {
        header("Location: User_table.php");
    }
} else if (isset($_POST['BTbaned'])) {
    $upd_Q = "UPDATE user_table SET STATUS = 'BAND' WHERE UID = '$_POST[Uid]'";
    $run_Bd_Q = mysqli_query($Db_code_user, $upd_Q);
    if ($run_Bd_Q) {
        header("Location: User_table.php");
    }
} else if (isset($_POST['BTdelete'])) {
    $upd_Q = "DELETE FROM user_table WHERE UID ='$_POST[Uid]'";
    $run_dt_Q = mysqli_query($Db_code_user, $upd_Q);
    if ($run_dt_Q) {
        header("Location: User_table.php");
    }
} else {
    echo "";
}
?>

<?php
if (isset($_POST['DeleteAD'])) {
    $Delet_Q = "delete from audio_detail where AID = $_POST[Aid]";
    $ACTQ = mysqli_query($MC_DB, $Delet_Q);
    if ($ACTQ) {
        header("location: upload_music.php");
    }
}
?>