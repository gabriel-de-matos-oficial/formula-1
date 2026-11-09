<?php

include("../config/conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$setor = $_POST['setor'];
$quantidade = $_POST['quantidade_ingressos'];
$pagamento = $_POST['forma_pagamento'];

$sql = "INSERT INTO ingressos
(nome,email,cpf,telefone,setor,quantidade_ingressos,forma_pagamento)

VALUES

('$nome','$email','$cpf','$telefone','$setor','$quantidade','$pagamento')";

if(mysqli_query($conexao, $sql)){

    header("Location: listar.php");

}else{

    echo "Erro: " . mysqli_error($conexao);

}

?>