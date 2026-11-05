<?php

include("../config/conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM ingressos WHERE id=$id";

$resultado = mysqli_query($conexao, $sql);

$dados = mysqli_fetch_assoc($resultado);

?>

<form action="atualizar.php" method="POST">

<input type="hidden" name="id"
value="<?php echo $dados['id']; ?>">

<label>Nome:</label><br>

<input type="text" name="nome"
value="<?php echo $dados['nome']; ?>"><br><br>

<label>Email:</label><br>

<input type="email" name="email"
value="<?php echo $dados['email']; ?>"><br><br>

<button type="submit">
Atualizar
</button>

</form>