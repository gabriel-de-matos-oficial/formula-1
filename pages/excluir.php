<?php

// Este arquivo remove um registro da tabela ingressos.
include("../config/conexao.php");

// Recebe o id do registro que deve ser excluído pela URL.
$id = $_GET['id'];

// Cria a instrução SQL para apagar o ingresso correspondente ao id.
$sql = "DELETE FROM ingressos WHERE id=$id";

// Executa a exclusão no banco.
mysqli_query($conexao, $sql);

// Redireciona de volta para a lista após remover o registro.
header("Location: listar.php");

?>