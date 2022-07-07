<?php 
    $file = fopen("test.txt","w");
    // fread($file,filesize("test.txt"));
    // echo filesize("test.txt");
    // echo fwrite($file,"Hello njsk");
    
    echo file_exists("test.txt");
    fclose($file);


?>