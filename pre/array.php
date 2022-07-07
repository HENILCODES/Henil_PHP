<?php 
    $dw = array(1,2,3);
    echo $dw[0]. "A ". $dw[2];
echo "<br>";

    $friend = array("Nayan"=>19,"Sivam"=>"Hei");
    echo $friend["Nayan"]. " ". $friend["Sivam"];
echo "<br>";

    $coll = array( "Henil" =>array(1,2,34),"Nayan"=>array(4,51,6) );
    $num = array(1=>array(55,55,66,66));
    for ($i=0; $i <3 ; $i++) { 
        echo $num[1][$i];
        echo $coll["Nayan"][$i]."<br>";
    }
    // print_r($coll)
?>