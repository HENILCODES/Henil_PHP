<form method="post">
    <input type="number" name="id">
    <input type="text" name="nam">
    <input type="number" name="age">
    <input type="submit" >
</form>
<?php 
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"HP");
// $Create_db = "create database HP";
// $Create_table = "create table user( id int , name text , age int)";
// $insert = "INSERT INTO user(id,name, age) VALUES ($_POST[id],'$_POST[nam]','$_POST[age]')";
$update = "update user set id=$_POST[id] where name='henil'";
// $delete = "delete from user where name='$_POST[nam]'";

 mysqli_query($con,$update);

$select = "select * from user";
$res = mysqli_query($con,$select);
while ($r = mysqli_fetch_array($res)) {
    echo $r['id']. " ". $r['name']. " ". $r['age']."<br>";
}

mysqli_close($con);

?>