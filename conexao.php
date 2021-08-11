<?php

$servidor = "localhost";
$bd_usuario = "root";
$bd_senha = "";
$banco = "ProjetoFormulario";

// realizando a conexão
$conexao = mysqli_connect($servidor, $bd_usuario, $bd_senha, $banco) or die;
if(!mysqli_set_charset($conexao, 'UTF8')) {
    echo "Não conseguiu setar o charset";
}

?>