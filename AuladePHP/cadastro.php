<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário GET</title>
</head>
<body>
    <h2>Formulário</h2>
    <form action="php/grava_contato.php" method="GET">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
<!-- Numero dos corredores -->

        <label for="Número">Número:</label><br>
        <textarea id="Número" name="Número" rows="1" cols="3" required></textarea><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>