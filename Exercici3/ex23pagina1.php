<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ex3</title>
    <?php
       $color = $_POST['webcolor']; 
    ?>
    <link rel="stylesheet" href="<?php echo "$color"; ?>">
</head>
<body>

    <h1>SELECTOR DE SKINS</h1>
    <form method="POST">
        <select name="webcolor">
            <option value="red.css">Vermell</option>
            <option value="green.css">Verd</option>
            <option value="blue.css">Blau</option>
        </select>
        <input type="submit" value="Canvia">
    </form>

</body>
</html>
