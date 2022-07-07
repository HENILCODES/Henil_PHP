<!DOCTYPE html>
<html lang="en">
<?php
$MC_DB = mysqli_connect("localhost","root","","henilcode");
// $MC_DB =mysqli_connect("sql300.epizy.com","epiz_32115695","hlqHeeN1uRzZG9","epiz_32115695_henil_code");

?>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="https://secure.gravatar.com/avatar/19cef1c37b12cb5d47ce71e9894dd14f?s=160&d=identicon&r=g" type="image">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Henil Code</title>
    <link href="bootstrap.css" rel="stylesheet">
</head>
<style>
    .set-w{
        max-width: 350px;
        min-width: 200px;
    }
</style>
<body>
    <div class="container">
        <div class="top text-center">
            <h1 class="pb-4">Create By <a href="https://henilcodes.github.io/PH/" target="_blank"> Henil Code </a> </h1>
            <h3>Terminal Command</h3>
        </div>
        <div class="table-responsive-md mt-4">
            <table class="table table-hover table-striped table-bordered shadow bordere-dark">
                <thead class="table-primary table-dark fs-5 text-center">
                    <th>#</th>
                    <th>Command</th>
                    <th>Syntax</th>
                    <th>Description</th>
                </thead>
                <?php
                $sele_cmd =  "SELECT * FROM TERMINAL_COMMAND";
                $cmd_exc = mysqli_query($MC_DB, $sele_cmd);
                while ($r = mysqli_fetch_array($cmd_exc)) {
                ?>
                    <tr class="table-danger fs-5" style="font-weight: 500;">
                        <td class="text-center"> <?php echo $r['CODE_ID'] ?></td>
                        <td> <?php echo $r['CODE_TITLE'] ?></td>
                        <td>$ <?php echo $r['CODE_SYNTAX'] ?></td>
                        <td class="text-break set-w"><?php echo $r['CODE_DESCRIPTION'] ?></td>
                    </tr>
                <?php
                } ?>
            </table>
        </div>
        <div class="text-center mt-5">
            <span class="blockquote-footer"> &copy; 2022 Henil Code </span>
        </div>
    </div>
</body>

</html>