<?php

include("../config/conexao.php");

$sql = "SELECT * FROM ingressos";

$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Compras</title>
</head>
<body>

<h1>Ingressos Comprados</h1>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Setor</th>
    <th>Quantidade</th>
    <th>Ações</th>
</tr>

<?php while($dados = mysqli_fetch_assoc($resultado)){ ?>

<tr>

<td><?php echo $dados['id']; ?></td>

<td><?php echo $dados['nome']; ?></td>

<td><?php echo $dados['email']; ?></td>

<td><?php echo $dados['setor']; ?></td>

<td><?php echo $dados['quantidade_ingressos']; ?></td>

<td>

<a href="editar.php?id=<?php echo $dados['id']; ?>">
Editar
</a>

|

<a href="excluir.php?id=<?php echo $dados['id']; ?>">
Excluir
</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>