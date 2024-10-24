<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
<head>
<body>
    <header>
        <h1>Resultado do processamento em PHP</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"]  ?? "sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>Bem vindo ao meu site, <strong>$nome $sobrenome</strong>!</p>";       
        ?>

        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>