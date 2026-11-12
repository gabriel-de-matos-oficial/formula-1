<?php

// Este arquivo configura a conexão com o banco de dados MySQL.
// $servidor guarda o endereço do servidor local da aplicação.
$servidor = "localhost";
// $usuario informa o nome do usuário do banco de dados.
$usuario = "root";
// $senha armazena a senha de acesso ao banco. Em ambiente local pode ficar vazia.
$senha = "";
// $banco define o nome do banco de dados que será usado pela aplicação.
$banco = "formula1";

// mysqli_connect tenta abrir a conexão com o banco usando os dados acima.
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Se a conexão falhar, a função die interrompe a execução e exibe a mensagem de erro.
if(!$conexao){
    die("Erro na conexão: " . mysqli_connect_error());
}

?>