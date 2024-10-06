<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex4 - Pg2</title>
</head>
<body>

    <?php
    if (isset($_POST['contrasenya1']) && isset($_POST['contrasenya2'])) {
        $contrasenya1 = $_POST['contrasenya1'];
        $contrasenya2 = $_POST['contrasenya2'];

        if ($contrasenya1 !== $contrasenya2) {
            echo "<p>ERROR: les contrasenyes han de coincidir</p>";
        }

        elseif (!strpbrk($contrasenya1, '0123456789')) {
            echo "<p>ERROR: la contrasenya ha de tenir al menys un número</p>";
        }

        else {
            echo "<p>Contrasenya acceptada!</p>";
        }
    }
    ?>

</body>
</html>
