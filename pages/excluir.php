<?php

include("../config/conexao.php");

$id = $_GET['id'];

$sql = "DELETE FROM ingressos WHERE id=$id";

mysqli_query($conexao, $sql);

header("Location: listar.php");

?>