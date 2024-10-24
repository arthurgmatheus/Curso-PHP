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

        echo "<h1>Valor em USD: $" . number_format($amountInUsd, 2) . "</h1>";
        echo "<p>Cotação atual: 1 USD = " . number_format($usdToBrl, 2) . " BRL</p>";
    } else {
        echo "<p>Por favor, insira um valor válido.</p>";
    }
} else {
    echo "<p>Erro ao obter a cotação. Por favor, tente novamente mais tarde.</p>";
}
?>
