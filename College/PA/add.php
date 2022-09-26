<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Henil</title>
    <link rel="stylesheet" href="s.css">
</head>

<body>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="add.php">Add</a></li>
        <li><a href="update.php">Update</a></li>
    </ul>

    <table>
        <form method="post" autocomplete="off">
            <tr>
                <td>Your Name</td>
                <td><input required type="text" name="name" placeholder="Student name"></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><input required type="date" name="date" max="2003-01-31" placeholder="Student Date of birth"></td>
            </tr>
            <tr>
                <td>Student City</td>
                <td><input required type="text" name="city" placeholder="Student City"></td>
            </tr>
            <tr>
                <td>Email id</td>
                <td><input required type="email" name="email" placeholder="Student Email"></td>
            </tr>
            <tr>
                <td>Contact Number</td>
                <td><input required type="text" name="contact" placeholder="Student Contact"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="register" value="Register"></td>
            </tr>
        </form>
    </table>
</body>

</html>
<?php
include "db.php";
if (isset($_REQUEST['register'])) {
    $name = $_REQUEST['name'];
    $date = $_REQUEST['date'];
    $city = $_REQUEST['city'];
    $email = $_REQUEST['email'];
    $contact = $_REQUEST['contact'];

    try {
        $query = "insert into student (std_name,std_city,std_email,std_number,std_dob) values ('$name','$city','$email','$contact','$date')";
        $exc = mysqli_query($conn, $query);
        if (!$exc) {
            echo "Not Add ";
        }
    } catch (Exception $th) {
        die("invalid data");
    }
    mysqli_close($conn);
}
?>