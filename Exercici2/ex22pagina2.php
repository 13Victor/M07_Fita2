<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ex2 - Pg2</title>
</head>
<body>
    <h1>LINKS</h1>
    <?php
        $number = $_POST["quantitat"];

        for ($i=1; $i <= $number; $i++) { 
            echo "<a href='ex22pagina3.php?comanda=$i'>Comanda $i</a><br>";
        }
    ?>
</body>
</html>

