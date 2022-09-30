<?php
$file = escapeshellcmd("python3 -u /opt/lampp/htdocs/Henil_PHP/Python/test.py");
$out = exec($file);
echo $out;
?>