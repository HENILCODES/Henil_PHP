<?php
    // $con = mysqli_connect("localhost","r","","test");
    // if (!$con) {
    //     # code...
    //     die("Error");
    // }else{
    //     echo "Hello";
    // }
    // $er = "select * from jack";
    // $f = mysqli_query($con,$er);
    

    // $e = "insert into jack values('h',18)";
    // $r = mysqli_query($con,$e);
    // if ($r) {
    //     # code...
    //     echo "Add";
    // }else{
    //     echo "not";
    // }
    // echo mysqli_num_rows($f);

    // while($r = mysqli_fetch_assoc($f)){
    //     echo $r['name'] . "  ".$r['age'] . "<br>";
    // }

    $con = new mysqli("localhost","root","","test");
    
    if (!$con) {
        echo "Error db";
        # code...
    }else{
        echo "s";
    }
?>