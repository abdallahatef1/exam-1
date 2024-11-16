<?php
$bgColor = isset($_COOKIE['bgColor']) ? $_COOKIE['bgColor'] : 'white';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Change Background Color</title>
</head>

<body style="background-color: <?php echo $bgColor; ?>;">

    <h1>Choose a Background Color</h1>
    <form action="setColor.php" method="post">
        <label for="color">Choose a color:</label>
        <select name="color" id="color">
            <option value="white" <?php echo ($bgColor == 'white') ? 'selected' : ''; ?>>White</option>
            <option value="lightblue" <?php echo ($bgColor == 'lightblue') ? 'selected' : ''; ?>>Light Blue</option>
            <option value="lightgreen" <?php echo ($bgColor == 'lightgreen') ? 'selected' : ''; ?>>Light Green</option>
            <option value="lightyellow" <?php echo ($bgColor == 'lightyellow') ? 'selected' : ''; ?>>Light Yellow</option>
            <option value="lightpink" <?php echo ($bgColor == 'lightpink') ? 'selected' : ''; ?>>Light Pink</option>
        </select>
        <button type="submit">Change Color</button>
    </form>

</body>

</html>