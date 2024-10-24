<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de Tipos primitivos em PHP</h1>
    <?php 
        //Testando a função var_dump()
        // $idade = 23;
       // echo var_dump($idade);

       //----------------------------------------------------------------------------------------

       //Testando casting, conversão
       //$altura = (double) "1.74";
       //echo var_dump($altura);

       //----------------------------------------------------------------------------------------

       //Testanto um object (Tipo primitivo composto)
       //class Pessoa{
        //public string $nome;
        //public int $idade;

       // Construtor para inicializar os valores
       //public function __construct(string $nome, int $idade){
        //$this->nome = $nome;
        //$this->idade= $idade;
       //}
       
       //}

       //Criando uma instância da classe pessoa
       //$p = new Pessoa ("Arthur", 23);

       //Exibindo os detalhes do objeto
       //echo var_dump($p);

       //-----------------------------------------------------------------------------------------

       //Testando números em hexadecimal

       //$num = 0x1A;
       //echo "O valor variável é $num";

       //-----------------------------------------------------------------------------------------

       //Testando números em binário

       //$num = 0b1011;
       //echo "O valor variável é $num";

       //-----------------------------------------------------------------------------------------

       //Testando valores em notação científica

        // 3e2 significa 3 * 10^2 = 300
        $valor1 = 3e2;
        echo $valor1 . "\n"; // Saída: 300

        // 5e3 significa 5 * 10^3 = 5000
        $valor2 = 5e3;
        echo $valor2 . "\n"; // Saída: 5000

        // 2.5e4 significa 2.5 * 10^4 = 25000
        $valor3 = 2.5e4;
        echo $valor3 . "\n"; // Saída: 25000

        // 1.2e-2 significa 1.2 * 10^(-2) = 0.012
        $valor4 = 1.2e-2;
        echo $valor4 . "\n"; // Saída: 0.012

        // -7.8e3 significa -7.8 * 10^3 = -7800
        $valor5 = -7.8e3;
        echo $valor5 . "\n"; // Saída: -7800

    ?>
    
</body>
</html>