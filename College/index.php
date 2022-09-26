<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Henil</title>
    <link rel="stylesheet" href="s.css">
</head>
<?php
include "db.php";
?>

<body>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="add.php">Add</a></li>
        <li><a href="update.php">Update</a></li>
    </ul>
    <div class="box">
        <table cellpadding="10" cellspacing="0" id="table">
            <thead>
                <th colspan="6"><input type="search" onkeyup="serch()" placeholder="search by id" id="inputs"></th>
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
            $sele = "select * from student";
            $ex = mysqli_query($conn, $sele);
            while ($row = mysqli_fetch_array($ex)) {
            ?>
                <tr class="tr">
                    <td><?php echo $row['ID'] ?></td>
                    <td><?php echo $row['std_name'] ?></td>
                    <td><?php echo $row['std_city'] ?></td>
                    <td><?php echo $row['std_email'] ?></td>
                    <td><?php echo $row['std_number'] ?></td>
                    <td><?php echo $row['std_dob'] ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
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

</html>