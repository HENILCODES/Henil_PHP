<?php
// $conn = mysqli_connect("sql300.epizy.com", "epiz_32115695", "hlqHeeN1uRzZG9","epiz_32115695_Live_Chat");
// $Db_code_user = mysqli_connect("sql300.epizy.com", "epiz_32115695", "hlqHeeN1uRzZG9","epiz_32115695_User_Detail");
// $MC_DB =mysqli_connect("sql300.epizy.com","epiz_32115695","hlqHeeN1uRzZG9","epiz_32115695_Music");

// $HC_DB =mysqli_connect("sql300.epizy.com","epiz_32115695","hlqHeeN1uRzZG9","epiz_32115695_henil_code");

$conn = mysqli_connect("localhost", "root", "", "live_chat");
$MC_DB = mysqli_connect("localhost","root","","henilcode");
$HC_DB = mysqli_connect("localhost","root","","henilcode");
$Db_code_user = mysqli_connect("localhost", "root", "", "user_details");
?>