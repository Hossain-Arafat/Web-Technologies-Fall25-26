<?php
if (isset($_POST['destroy'])) {
    setcookie("bgcolor", "", time() - 3600, "/");
    header("Location: first.php");
    exit();
}

if (isset($_POST['set'])) {
    $color = $_POST['color'];
    $expire = $_POST['expire'];

    if (!empty($expire)) {
        $expireTime = strtotime($expire);
        setcookie("bgcolor", $color, time() + $expireTime, "/");
    } 
    else{
        setcookie("bgcolor", $color, 0, "/");
    }

    header("Location: first.php");
    exit();
}
?>
