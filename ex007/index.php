<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testndo funções aritméticas</title>
</head>
<body>
    <h1>Clcular o valor absoluto</h1>
    <?php 
        //Calcular o valor absoluto

        $r = abs(-2000);
        print("A resposta é $r");
    
    ?>
    <br>
    <h1>Converter bases numéricas</h1>
    <?php 
        $r = base_convert(500, 10, 16); //converter 500 para hexadecimal
        print("A resposta é $r");
    ?>
    <br>
    <h1>Arredondamento</h1>
    <h3>Arredondar pra cima</h3>
    <?php 
        $r = ceil(5.9080804);
        print("A resposta é $r");
    ?>
    <br>
    <h3>Arredondar pra baixo</h3>
    <?php 
        $r = floor(5.99359739);
        print("A resposta é $r")
    ?>
    <br>
    <h3>Arredondamento aritmŕtico</h3>
    <?php 
        $r = round(437.979847);
        print("A resposta é $r");
    ?>
    <br>
    <h1>Calcular Hipotenusa</h1>
    <?php 
        $r = hypot(2,4);
        print("A hipotenusa é $r");
    ?>
    <br>
    <h1>Realizar Divisão Inteira</h1>
    <?php 
        $r = intdiv(8,3);
        print("A resposta é $r");
    ?>
    <br>
    <h1>Calcular Valores Mínimos e Máximos</h1>
    <h3>Valor Mínimo</h3>
    <?php 
        $r = min(5,2,7,5,1,9,7,6);
        print("A resposta é $r");
    ?>
    <h3>Valor Máximo</h3>
    <?php 
        $r = max(5,2,7,5,1,9,7,6);
        print("A resposta é $r");
    ?>
    <br>
    <h1>Calcular Pi com a função Pi()</h1>
    <?php 
        $r = Pi();
        print("A resposta é $r");

    ?>
    <br>
    <h1>Calcular Pi com a constante M_PI</h1>
    <?php 
        $r = M_PI;
        print("A resposta é $r");
    ?>
    <br>
    <h1>Calcular potência</h1>
    <?php 
        $r = pow(8,2);
        print("A resposta é $r");
    ?>
    <br>
    <h1>Calcular Seno, Cosseno e Tangente</h1>
    <h3>Seno de 90</h3>
    <?php 
        $r = sin(90);
        print("A resposta é $r");
    ?>
    <br>
    <h3>Cosseno de 90</h3>
    <?php 
        $r = cos(90);
        print("A resposta é $r");
    ?>
    <br>
    <h3>Tangente de 90</h3>
    <?php 
        $r = tan(90);
        print("A resposta é $r");    
    ?>
    <br>
    <h1>Calcular a raiz quadrada com a função sqrt()</h1>
    <?php 
        $r = sqrt(81);
        print("A resposta é $r");
    ?>
    <br>
    <h1>Calcular raiz quadrada com 81**(1/2)</h1>
    <?php 
        $r = 81**(1/2);
        print("A resposta é $r");
    ?>
    <br>
    <h1>Calcular a raiz cúbica com 27**(1/3)</h1>
    <?php 
        $r = 27**(1/3);
        print("A resposta é $r");
    ?>       
</body>
</html>