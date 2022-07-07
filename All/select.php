<?php
$con_db = mysqli_connect("localhost", "root", "", "test");

$select = "SELECT User_name, Message FROM message";
$result = mysqli_query($con_db, $select);
while ($r = mysqli_fetch_array($result)) {
    echo $r['User_name'] . " " . $r['Message'] . "<br>";
?>
    <h1>helo</h1>
<?php
}
?>