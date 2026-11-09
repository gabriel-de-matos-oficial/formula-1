<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Compra de Ingressos Fórmula 1</title>
    <link rel="stylesheet" href="css/stylephp.css">
</head>
<body>

    <div class="container">

    <h2>Compra de Ingressos - Fórmula 1</h2>

    <form action="pages/salvar.php" method="POST">

        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>CPF:</label><br>
        <input type="text" name="cpf" required><br><br>

        <label>Telefone:</label><br>
        <input type="text" name="telefone"><br><br>

        <label>Setor:</label><br>
        <select name="setor" required>
            <option value="Arquibancada A">Arquibancada A</option>
            <option value="Arquibancada B">Arquibancada B</option>
            <option value="VIP">VIP</option>
            <option value="Paddock">Paddock</option>
        </select><br><br>

        <label>Quantidade de Ingressos:</label><br>
        <input type="number" name="quantidade_ingressos" required><br><br>

        <label>Forma de Pagamento:</label><br>
        <select name="forma_pagamento" required>
            <option value="Cartão de Crédito">Cartão de Crédito</option>
            <option value="Pix">Pix</option>
            <option value="Boleto">Boleto</option>
        </select><br><br>

        <button type="submit">Comprar</button>

    </form>

    </div>

    <script src="js/main.js"></script>

</body>
</html>