<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fita 2</title>
    <?php
       $color = $_POST['webcolor']; 
    ?>
    <link rel="stylesheet" href="<?php echo "$color"; ?>">
</head>
<body>

    <h2>Canvia el color del fons</h2>
    <form method="POST">
        <select name="webcolor">
            <option value="red.css">Red</option>
            <option value="green.css">Green</option>
            <option value="blue.css">Blue</option>
        </select>
        <input type="submit" value="Canvia!">
    </form>

</body>
</html>
