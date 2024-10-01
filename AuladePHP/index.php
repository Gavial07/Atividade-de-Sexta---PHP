<?php
include 'aulaphp.php'; 
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro dos corredores</h1>
        
        <!-- Formulário de cadastro dos corredores -->
        <form action="cadastro.php" method="POST" class="form-cadastro">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>

            <label for="idade">Idade:</label>
            <input type="number" name="idade" id="idade" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="Numero">Numero do corredor:</label>
            <input type="text" name="nume" id="num" required>

            <button type="submit">Cadastrar</button>
        </form>

        <!-- Formulário de pesquisa -->
        <form method="GET" action="" class="form-pesquisa">
            <?php
            // Verifica se foi feita uma pesquisa e armazena o termo
            $pesquisa = isset($_GET['pesquisa']) ? $_GET['pesquisa'] : '';
            ?>
            <input type="text" name="pesquisa" placeholder="Pesquisar por nome ou Numero do corredor" value="<?php echo htmlspecialchars($pesquisa); ?>">
            <button type="submit">Pesquisar</button>
        </form>

        <!-- Tabela do corredor -->
        <h2>Corredores Cadastrados</h2>
        <table class="table-corredor">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Email</th>
                    <th>Numero do corredor</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Consulta padrão ou com base na pesquisa
                if ($pesquisa) {
                    // Prepara a consulta de pesquisa com parâmetros de nome ou Numero do corredor
                    $sql = "SELECT * FROM alunos WHERE nome LIKE '%$pesquisa%' OR Numero do corredor LIKE '%$pesquisa%'";
                } else {
                    // Consulta padrão para listar todos os alunos
                    $sql = "SELECT * FROM corredor";
                }

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Exibe os corredores cadastrados
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['nome']}</td>
                                <td>{$row['idade']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['Numero do corredor']}</td>
                                <td><a href='deletar.php?id={$row['id']}' class='btn-delete'>Excluir</a></td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Nenhum corredor encontrado</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
