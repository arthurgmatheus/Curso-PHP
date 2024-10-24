<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversão</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Helvetica:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="content">
<?php
// URL da API para obter a cotação USD -> BRL
$url = "https://economia.awesomeapi.com.br/last/USD-BRL";

// Fazendo a requisição HTTP e recebendo o JSON de resposta
$response = file_get_contents($url);
$data = json_decode($response, true);

// Verifica se a API retornou os dados corretamente
if ($data && isset($data['USDBRL']['bid'])) {
    // Cotação do dólar para real
    $usdToBrl = $data['USDBRL']['bid'];

    // Obtém o valor inserido no formulário
    if (isset($_POST['amount'])) {
        $amountInBrl = $_POST['amount'];
        
        // Converte para dólar
        $amountInUsd = $amountInBrl / $usdToBrl;

        echo "<h1>Valor Convertido</h1>";
        echo "<p><strong>Valor em USD:</strong> $" . number_format($amountInUsd, 2) . "</p>";
        echo "<p><strong>Cotação atual:</strong> 1 USD = " . number_format($usdToBrl, 2) . " BRL</p>";
    } else {
        echo "<p>Por favor, insira um valor válido.</p>";
    }
} else {
    echo "<p>Erro ao obter a cotação. Por favor, tente novamente mais tarde.</p>";
}
?>
        </div>
    </div>
</body>
</html>
