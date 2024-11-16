<?php
if (isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie('bgColor', $color, time() + (30 * 24 * 60 * 60), "/");
    header('Location:handel.php');
    exit();
}
?>