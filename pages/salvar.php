<?php

// Este arquivo recebe os dados do formulário de compra e salva no banco.
// Inclui a conexão com o banco para poder executar o INSERT.
include("../config/conexao.php");

// Recebe os valores enviados pelo formulário via POST.
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$setor = $_POST['setor'];
$quantidade = $_POST['quantidade_ingressos'];
$pagamento = $_POST['forma_pagamento'];

// Cria a instrução SQL para inserir uma nova compra na tabela ingressos.
$sql = "INSERT INTO ingressos
(nome,email,cpf,telefone,setor,quantidade_ingressos,forma_pagamento)

VALUES

('$nome','$email','$cpf','$telefone','$setor','$quantidade','$pagamento')";

// Executa a query e, se for bem-sucedida, redireciona para a página de listagem.
if(mysqli_query($conexao, $sql)){

    header("Location: listar.php");

}else{

    // Se houver erro, mostra a mensagem do banco.
    echo "Erro: " . mysqli_error($conexao);

}

?>