<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultados em PHP</h1>
    </header>
    <section>
    <?php 
        $valor = $_GET["valor"];
        echo "<strong>Valor original: </strong>".($valor)."<br>";
        echo "<strong>Sucessor: </strong>" . ($valor + 1) . "<br>";
        echo "<strong>Antecessor: </strong>" . ($valor - 1);
    ?>
    <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </section>
    
</body>
</html>