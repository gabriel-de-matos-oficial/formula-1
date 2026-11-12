<?php

// Este arquivo atualiza os dados de um ingresso no banco de dados.
include("../config/conexao.php");

// Recebe o id do registro que será alterado.
$id = $_POST['id'];

// Recebe os dados do formulário para atualizar o nome.
$nome = $_POST['nome'];

// Recebe os dados do formulário para atualizar o email.
$email = $_POST['email'];

// Cria a instrução SQL de atualização do registro correspondente ao id.
$sql = "UPDATE ingressos SET

nome='$nome',
email='$email'

WHERE id=$id";

// Executa a atualização no banco.
mysqli_query($conexao, $sql);

// Redireciona para a página de listagem após concluir a edição.
header("Location: listar.php");

?>