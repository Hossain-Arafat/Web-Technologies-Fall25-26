<?php
$bgColor="white";
if (isset($_COOKIE['bgcolor'])) {
    $bgColor = $_COOKIE['bgcolor'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cookie</title>
</head>

<body style="background-color: <?php echo $bgColor; ?>;">
    <h2>Cookie Example</h2>
    <p>Time zone: Asia/Dhaka</p>
    <hr>

    <h3>Set Cookie</h3><hr>

    <form action="pfirst.php" method="post">
        <label>Select a color:</label>
        <input type="color" name="color">
        <br><br>

        <label>Expire on:</label>
        <input type="datetime-local" name="expire">
        <br><br>

        <button type="submit" name="set">Set Cookie</button>
    </form>
    <hr>

    <h3>Destroy Cookie</h3><hr>

    <form action="pfirst.php" method="post">
        <button type="submit" name="destroy">Destroy Cookie</button>
    </form>
</body>
</html>