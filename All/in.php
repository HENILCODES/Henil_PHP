<?php
$con = mysqli_connect("localhost", "root", "", "test");
// $sql = "SELECT * FROM info WHERE Name = 'Henil'";
$sql = "SELECT * FROM `info`";
// echo mysqli_num_rows($res);
// print_r(mysqli_fetch_array($res));
// $sql = " create table info ( Age int)";
// $sql = "insert into info values(18,'vapi')";


$res = mysqli_query($con, $sql);
echo "<table border='1'>
<tr>
    <th> Age </th>
    <th> city </th>
</tr>
";
while ($c = mysqli_fetch_array($res)) {
    echo "<tr>";
    echo  "<td>".$c['Age']. "</td>"; 
    echo  "<td>".$c['city']. "</td>"; 
    echo "</tr>";
}
?>
<h1>Heloo</h1>



<!-- // $sele_bd = mysqli_select_db("test",$con);
    // mysqli_query("CREATE DATABASE MY",$  con)
    // mysqli_close($con); -->