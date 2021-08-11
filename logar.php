<?php

// recebe as informações do index.php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// inclui conexao
include "conexao.php";

// cria string de busca de login
$sql = "SELECT * FROM tb_usuarios where usu_login = '$usuario' and usu_senha = '$senha'";

// executa o SELECT
$resultado = mysqli_query($conexao, $sql);

// conta quantas linhas ele encontrou
$registros = mysqli_num_rows($resultado);

// se encontrar registro -> logado.php
// senão encontrar -> index.php
if ($registros > 0) {
    session_start();

    while ($linhas = mysqli_fetch_assoc($resultado)) {
        $_SESSION['id'] = $linhas['usu_cod'];
        $_SESSION['usuario'] = $linhas['usu_login'];
        $_SESSION['senha'] = $linhas['usu_senha'];
    }
    header("location: logado.php");
} else {
    header("location: index.php");
}

?>