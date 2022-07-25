<?php

// $age = [18,33,52,52,85];
$cit = array("Henil"=>"Vapi","Nayan"=>"Valsad", "Age"=>10);

// echo "<br><br>";
// $a = 21;
// $b = 22;
// echo $a ," ".$b;
// echo "<br> <br>";

$a1 = "Henil Prajapati";
// echo var_dump($a1 , $a, "<br>" ,$age);
// echo strlen($a1);
// echo strrev($a1);
// echo count($age);
// echo count_chars($a1);
// echo str_word_count($a1);


// $a2 = 0;
// $a3 = 1;
// $a4 = 1;
// if ($a2 !== $a3) {
//     echo "not equal";
// }else{
//     echo "it Equal";
// }
// echo "<br>";
// echo $a2 <=> $a3;
// echo "<br>";
// echo $a3 <=> $a2;
// echo "<br>";
// echo $a3 <=> $a4;
?>
<?php
$arr = array("blue","red","green","yellow");
print_r(str_replace("red","pink",$arr,$i));
echo "Replacements: $i";
?>

<?php
echo "<br>";
$find = array("Hello","world","f");
print_r($find);
echo "<br>";
$replace = array("B");
$arr = array("Hello","world");
print_r(str_replace($find,$replace,$arr));
?>

<?php
echo "<br>";
$age = [18,20,21,22,23];
$city = array("Vapi","Valsad","Surat","Vapi","Daman");

echo str_replace($city,"Vapi","Vapi",$i);
echo $i . "<br>";
print_r($city);
echo "<br>";
print_r($cit);

?>