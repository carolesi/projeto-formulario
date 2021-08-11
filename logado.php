<?php
session_start();

if(!isset($_SESSION['usuario'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
</head>
<body>
    <?php

    echo "Bem-vindo, " .$_SESSION['usuario'];

    ?>

    <a href="sair.php">Encerrar a sessão</a>
</body>
</html>