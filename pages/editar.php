<?php

// Este arquivo busca os dados do ingresso escolhido para permitir a edição.
include("../config/conexao.php");

// Recebe o id do registro pela URL para localizar o item correto.
$id = $_GET['id'];

// Consulta os dados do ingresso específico no banco.
$sql = "SELECT * FROM ingressos WHERE id=$id";

// Executa a consulta e armazena o resultado em $resultado.
$resultado = mysqli_query($conexao, $sql);

// Converte a linha retornada em um array associativo para usar os dados no formulário.
$dados = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Define a codificação do documento. -->
    <meta charset="UTF-8">
    <!-- Ajusta a página para telas menores. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título da página de edição. -->
    <title>Editar Ingresso</title>
    <!-- Carrega o estilo visual da página. -->
    <link rel="stylesheet" href="../css/stylephp.css">
</head>
<body>
    <div class="edit-container">
        <!-- Link de retorno para a página principal do site. -->
        <a class="btn-back" href="../index.html">Voltar para a página inicial</a>

        <!-- Título da tela de edição. -->
        <h2>Editar Ingresso</h2>

        <form class="edit-form" action="atualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

            <label>Nome:</label>
            <input type="text" name="nome" value="<?php echo $dados['nome']; ?>">

            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $dados['email']; ?>">

            <label>CPF:</label>
            <input type="text" name="cpf" value="<?php echo $dados['cpf']; ?>">

            <label>Telefone:</label>
            <input type="text" name="telefone" value="<?php echo $dados['telefone']; ?>">

            <label>Setor:</label>
            <select name="setor">
                <option value="Arquibancada A" <?php echo ($dados['setor'] == 'Arquibancada A') ? 'selected' : ''; ?>>Arquibancada A</option>
                <option value="Arquibancada B" <?php echo ($dados['setor'] == 'Arquibancada B') ? 'selected' : ''; ?>>Arquibancada B</option>
                <option value="VIP" <?php echo ($dados['setor'] == 'VIP') ? 'selected' : ''; ?>>VIP</option>
                <option value="Paddock" <?php echo ($dados['setor'] == 'Paddock') ? 'selected' : ''; ?>>Paddock</option>
            </select>

            <label>Quantidade de Ingressos:</label>
            <input type="number" name="quantidade_ingressos" value="<?php echo $dados['quantidade_ingressos']; ?>">

            <label>Forma de Pagamento:</label>
            <select name="forma_pagamento">
                <option value="Cartão de Crédito" <?php echo ($dados['forma_pagamento'] == 'Cartão de Crédito') ? 'selected' : ''; ?>>Cartão de Crédito</option>
                <option value="Pix" <?php echo ($dados['forma_pagamento'] == 'Pix') ? 'selected' : ''; ?>>Pix</option>
                <option value="Boleto" <?php echo ($dados['forma_pagamento'] == 'Boleto') ? 'selected' : ''; ?>>Boleto</option>
            </select>

            <button type="submit">Atualizar</button>
        </form>
    </div>
</body>
</html>