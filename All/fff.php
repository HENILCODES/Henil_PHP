<?php
$conn = mysqli_connect("localhost", "root", "", "test");
?>
<?php
if (isset($_POST['Done'])) {
    
    
    move_uploaded_file($_FILES["File_Name"]["tmp_name"], "File/" . $_FILES["File_Name"]["name"]);

}

?>

<?php
date_default_timezone_set("Asia/Calcutta");
$time_C = date('h:i a');
if (isset($_POST['Done'])) {
    $File_Name=$_FILES["File_Name"]["name"];
    $in = "INSERT INTO file(File_Name, Time) VALUES ('$File_Name','$time_C')";
    mysqli_query($conn, $in);
}

if($in){

    echo "data added";
   header("Location: ds.php");
}
?>


<?php

$selec = "select * from file";
$qq = mysqli_query($conn, $selec);
while ($r = mysqli_fetch_array($qq)) {
    echo $r['File_Name'] . " " . $r['Time'] . "<br>";
}
?>