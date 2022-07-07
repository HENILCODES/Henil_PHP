<?php
session_start();
include "dbcon.php";
include "sec_Code.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Henil Code</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-group {
            margin-top: 35px;
        }

        .body {
            background-color: #b6d4fe;
        }
    </style>
</head>
<?php
$Msele_cmd =  "SELECT * FROM mongodb_command";
$Mcmd_exc = mysqli_query($HC_DB, $Msele_cmd);
$Mcount_id = mysqli_num_rows($Mcmd_exc);
?>
<?php
$sele_cmd =  "SELECT * FROM TERMINAL_COMMAND";
$cmd_exc = mysqli_query($HC_DB, $sele_cmd);
$count_id = mysqli_num_rows($cmd_exc);
?>

<body class="body">
    <form autocomplete="off" method="POST" action="command.php">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">Terminal</span>
        </div>
        <div class="col-md-1">
            <input required type="text" class="form-control" placeholder="ID" value="<?php echo $count_id + 1; ?>" name="TCode_Id" required readonly>
        </div>---
        <div class="input-group-prepend">
            <span class="input-group-text">Mongodb</span>
        </div>
        <div class="col-md-1">
            <input required type="text" class="form-control" placeholder="ID" value="<?php echo $Mcount_id + 1; ?>" name="MCode_Id" required readonly>
        </div>
    </div>
    <div class="container fw-bold ">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Code :</label>
                    <input required type="text" class="form-control" name="Code_Title" placeholder="title">
                </div>
                <div class="form-group col-md-6">
                    <label>Code Syntax :</label>
                    <input required type="text" class="form-control" name="Code_Syntax" placeholder="Syntax">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label>Code Description :</label>
                <input required type="text" class="form-control" name="Code_Description" placeholder="Description">
            </div>

            <div class="form-row">
                <div class="form-group col-md-3 mb-5">
                    <label>Command for : </label>
                    <select class="form-control" name="Command_Type">
                        <option value="Terminal"> Terminal </option>
                        <option value="Mongodb"> Mongodb </option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary px-5 fs-4" name="Code_Post" value="1">Send Post</button>
        </form>
    </div>
</body>

</html>