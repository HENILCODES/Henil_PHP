<?php
date_default_timezone_set("Asia/Calcutta");

$da = new DateTime();

echo $da->format('h:i:s') . "<br>";

$date = new DateTime();

$date->setDate(2002, 2, 10);
echo $date->format('g:i:s M m F F M');

$d = date("z F M l D j t L o y B e ");
echo "<br>".$d;
echo (time())."<br>"; 
echo (date("Y-m-d s",time()+24*3600));
   
?>