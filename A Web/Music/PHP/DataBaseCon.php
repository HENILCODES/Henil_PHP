<?php
// $DB_CON =mysqli_connect("sql300.epizy.com","epiz_32115695","hlqHeeN1uRzZG9","epiz_32115695_Music");
$DB_CON = mysqli_connect("localhost", "root", "", "music");

if (!$DB_CON) {
    echo "Not Connect";
}
?>
