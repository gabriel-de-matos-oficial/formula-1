<?php

include("../config/conexao.php");

$id = $_POST['id'];

$nome = $_POST['nome'];

$email = $_POST['email'];

$sql = "UPDATE ingressos SET

nome='$nome',
email='$email'

WHERE id=$id";

mysqli_query($conexao, $sql);

header("Location: listar.php");

?>