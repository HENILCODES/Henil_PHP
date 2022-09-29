

<?php
// if ((($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg")) && ($_FILES["file"]["size"] < 20000)) {
//     if ($_FILES["file"]["error"] > 0) {
//         die("invalid");
//     } else {
        echo "upload:" . $_FILES["file"]["name"] . "<br>";
        echo "type:" . $_FILES["file"]["type"] . "<br>";
        echo "size:" . ($_FILES["file"]["size"] / 10240) . "<br>";
        echo "store:" . $_FILES["file"]["tmp_name"] . "<br>";
        // if (file_exists("upload/".$_FILES["file"]["name"])) {
        //     echo "Already";
        // }else{
        //     move_uploaded_file($_FILES["file"]["tmp_name"],"tr/".$_FILES["file"]["name"]);
        //     echo "Stored in "."tr/".$_FILES["file"]["name"];
        // }
//     }
// } else {
//     die("envalid");
// }

?>