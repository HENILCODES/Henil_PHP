<?php
include "dbcon.php";
?>

<?php
if ($_POST['Code_Post']) {
    if ($_POST['Command_Type'] == "Terminal") {
        $insert = "INSERT INTO TERMINAL_COMMAND (`CODE_ID`, `CODE_TITLE`, `CODE_SYNTAX`, `CODE_DESCRIPTION`) VALUES ( '$_POST[TCode_Id]','$_POST[Code_Title]','$_POST[Code_Syntax]','$_POST[Code_Description]')";
        $excute = mysqli_query($HC_DB, $insert);
        if ($excute) {
            header("location: insertCode.php");
        }
    }else{
        $insert = "INSERT INTO mongodb_command (`CODE_ID`, `CODE_TITLE`, `CODE_SYNTAX`, `CODE_DESCRIPTION`) VALUES ( '$_POST[MCode_Id]','$_POST[Code_Title]','$_POST[Code_Syntax]','$_POST[Code_Description]')";
        $excute = mysqli_query($HC_DB, $insert);
        if ($excute) {
            header("location: insertCode.php");
        }
    }
}
?>