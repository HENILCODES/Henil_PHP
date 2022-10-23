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
    <div class="box">
        <table cellpadding="10" cellspacing="0" id="table">
            <thead>
                <form method="post" autocomplete="off">
                    <th><input required type="search" name="id" onkeyup="serch()" placeholder="search by id" id="inputs"></th>
                    <th><input required type="text" name="name" placeholder="name"></th>
                    <th><input required type="text" name="city" placeholder="city"></th>
                    <th><input required type="text" name="email" placeholder="email"></th>
                    <th><input required type="text" name="contact" placeholder="contact"></th>
                    <th><input required type="date" name="date"></th>
                    <th><input type="submit" value="update" name="update"></th>
                </form>
            </thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>City</th>
                <th>email</th>
                <th>number</th>
                <th>DOB</th>
            </tr>
            <?php
            include "db.php";
            $sele = "select * from student";
            $ex = mysqli_query($conn, $sele);
            while ($row = mysqli_fetch_array($ex)) {
            ?>
                <tr class="tr">
                    <td><?php echo $row['SPID'] ?></td>
                    <td><?php echo $row['SNAME'] ?></td>
                    <td><?php echo $row['CITY'] ?></td>
                    <td><?php echo $row['EMAIL'] ?></td>
                    <td><?php echo $row['CONTACT'] ?></td>
                    <td><?php echo $row['DOB'] ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
<?php
if (isset($_REQUEST['update'])) {
    # code...
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $date = $_REQUEST['date'];
    $city = $_REQUEST['city'];
    $email = $_REQUEST['email'];
    $contact = $_REQUEST['contact'];
    // ,std_email,std_number,std_dob
    $upd = "update student set SNAME='$name', CITY='$city',EMAIL='$email',CONTACT='$contact',DOB='$date' where SPID = '$id'";
    $exre = mysqli_query($conn,$upd);
    if (!$exre) {
        die("eroor to update");
    }
}

?>

<script>
    function serch() {

        input = document.getElementById("inputs").value;

        table = document.getElementById("table");

        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.innerText;
                if (txtValue.indexOf(input) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }

    }
</script>
</body>

</html>