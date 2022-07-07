<?php session_start();
if (isset($_SESSION['vie'])) {
    $_SESSION['vie'] = $_SESSION['vie'] + 1;
} else {
    $_SESSION['vie'] = 1;
    // unset($_SESSION['vie']);
}
?>
<html>

<body>
    <?php
    // session_destroy();
    echo "Page " . $_SESSION['vie'];
    ?>
</body>

</html>