<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de moedas simples</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de moedas simples</h1>
    </header>
    <section>
        <?php 
            $valor = $_GET["valor"];
            echo "<strong>R$ $valor</strong> em dólar (22/10/2024): $ ".round(($valor/5.69), 2)."<br>";
            echo "<strong>R$ $valor</strong> em euro (22/10/2024): € ".round(($valor/6.15), 2)."<br>";
        ?>    
    </section>
</body>
</html>
