<?php
$arr1 = array(10,15,20,1,2,3,7,4);
$arr2 = array(1,2,3,4,5,6);
echo "Array First :  ";
printarry($arr1);

$result = array_splice($arr1,0,1,$arr2);
echo "<br>After insert Array :  ";
printarry($arr1);
?>
<?php
function printarry($a){
   foreach($a as $val){
      echo $val ." ";
   }
}
?>