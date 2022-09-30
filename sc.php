<?php
    echo "That is php file content : Henil Code<br><br> ";
    $data = "My Name is Henil";
    $out = shell_exec("python pysc.py $data");
    echo "That is python file content : ".$out;
?>