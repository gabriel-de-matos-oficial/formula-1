<?php

// Este arquivo busca todos os registros de ingressos cadastrados no banco.
include("../config/conexao.php");

// Seleciona todos os dados da tabela ingressos.
$sql = "SELECT * FROM ingressos";

// Executa a consulta e guarda o resultado em $resultado.
$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Define a codificação da página. -->
    <meta charset="UTF-8">
    <!-- Garante responsividade em telas menores. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título da página exibido no navegador. -->
    <title>Lista de Compras</title>
    <!-- Carrega o CSS específico para a área administrativa. -->
    <link rel="stylesheet" href="../css/stylephp.css">
</head>
<body>
    <div class="list-container">
        <!-- Botão para voltar para a página inicial do site. -->
        <a class="btn-back" href="../index.html">Voltar para a página inicial</a>
        <!-- Título da área de listagem. -->
        <h1>Ingressos Comprados</h1>

        <div class="table-wrapper">
            <table class="data-table">
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
                        <div class="action-group">
                            <a class="action-link btn-edit" href="editar.php?id=<?php echo $dados['id']; ?>">
                                Editar
                            </a>
                            <a class="action-link btn-delete" href="excluir.php?id=<?php echo $dados['id']; ?>">
                                Excluir
                            </a>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>