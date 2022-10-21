<?php

echo "<br><br>";
// email validate
$email = "henilcode@gmail.com";
if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
    echo "Email is Valid";
} else {
    $c = filter_var($email,FILTER_SANITIZE_EMAIL);
    echo "not Valid  ", $c;
}

echo "<br><br>";
//string sanitize
$str = "<h1>pratiksha</h1>";
echo $str;
$st2 = filter_var($str,FILTER_SANITIZE_STRING);
echo $st2;


// number validate
$a = "<br> 143 Henil";
if (filter_var($a,FILTER_VALIDATE_INT)) {
    echo "Number is integer : ", var_dump($a);
}else{
    echo $a;
    echo "  Not integer <br>";
    $b = filter_var($a,FILTER_SANITIZE_NUMBER_INT);
    echo var_dump($b);  
}

echo "<br><br>";
// ip validate
$ip = "127.0.0.1";
if (filter_var($ip,FILTER_VALIDATE_IP)) {
    echo "ip Valid";
} else {
    echo "Not valid ip";
}
?>