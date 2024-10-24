<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador V. 2.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $min = $_GET["min"] ?? 0;
            $max = $_GET["max"] ?? 0;
            $valor = mt_rand($min, $max);
            echo "Valor gerado: <strong>$valor</strong>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">Gerar outro</button>
    </main>
    
</body>
</html>