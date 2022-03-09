<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <?php
        /*
        if (isset($_GET['acao'])) {
            $nome = $_GET['nome'];
            $email = $_GET['email'];
            echo "$nome <br> $email";
        }
        */

        if (isset($_POST['acao'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            echo "$nome <br> $email";
        }
    ?>
    <form method="post"> <!-- O metodo Get é padrão, o Post tem que ser definido -->
        <input type="text" name="nome" id="nome" placeholder="Insira seu nome">
        <input type="text" name="email" id="email" placeholder="Insira seu email">
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>