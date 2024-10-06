<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ex1</title>
</head>
<body>

    <h2>Login</h2>

    <form method="POST">
        <label for="userName">User: </label><br>
        <input type="text" name="userName" required /><br><br>

        <label for="userPassword">Password: </label><br>
        <input type="password" name="userPassword" required /><br><br>

        <input type="submit" value="Login">
    </form>
    <?php
        $usuaris_valids = [
            "Pepe123" => "contrasenya1",
            "Anna456" => "contrasenya2",
            "Joan789" => "contrasenya3"
        ];

        $missatge = "";

        if (isset($_POST["userName"]) && isset($_POST["userPassword"])) {

            $usuari = $_POST['userName'];
            $contrasenya = $_POST['userPassword'];

            if (array_key_exists($usuari, $usuaris_valids) && $usuaris_valids[$usuari] === $contrasenya) {
                $missatge = "Login correcte!";
            } else {
                $missatge = "Login incorrecte!";
            }
        }
    ?>
    <p><?php echo $missatge; ?></p>

</body>
</html>

<!-- 
    Quina creus que ha de ser la resposta si el login és incorrecte? Li informem si l'error està al nom d'usuari o a la password?

    És millor no informar a l'usuari si l'error és al nom d'usuari o a la contrasenya. 
    Proporcionar un missatge genèric com "Login incorrecte" evita donar pistes a possibles atacants sobre 
    quins usuaris són vàlids i dificulta els atacs de força bruta.
-->
