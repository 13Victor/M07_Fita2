<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fita 2</title>
</head>
<body>
    <h1>Links</h1>
    <?php
        $number = $_POST["quantity"];

        for ($i=1; $i <= $number; $i++) { 
            echo "<a href='ex22pagina3.php?comanda=$i'>Comanda $i</a><br>";
        }
    ?>
</body>
</html>

