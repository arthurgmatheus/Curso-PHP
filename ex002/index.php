<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 18</title>
</head>
<body>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        $nome = "Arthur";
        echo "meu nome é $nome e hoje é dia ".date("d/M/Y T");
    ?>
    <p> A hora atual é: <?= date("G:i:s") ?> </p>
    
</body>
</html>