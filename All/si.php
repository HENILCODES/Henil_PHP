<?php 
    $con = mysqli_connect("localhost", "root", "", "test");
    $sql = "insert into info values('$_POST[age]','$_POST[city]')";
    $res = mysqli_query($con, $sql);
    if ($res) {
        echo"1 Add";  
    }
    mysqli_close($con);
?>