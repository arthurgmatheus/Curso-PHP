<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes com Strings, Aspas, Heredoc e Nowdoc</title>
</head>
<body>
    <h1>Testando Escape Sequence para Aspas Simples</h1>
    <?php 
    //Testando Escape Sequence para Aspas Simples

    $nome = 'Arthur';
    $apelido = 'Tuco';
    $sobrenome = 'Matheus';

    echo 'Meu nome é $nome \'$apelido\' $sobrenome';

    //Testando Escape Sequence para Aspas Duplas
    ?>
    <h1>Testando Escape Sequence para Aspas Duplas</h1>

    <?php 
    $nome = 'Arthur';
    $apelido = 'Tuco';
    $sobrenome = 'Matheus';

    echo "Meu nome é $nome \"$apelido\" $sobrenome";
    ?>

    <h1>Testando demais Escape Sequence's para Aspas Duplas</h1>
    <br>
    <h3>\n: Nova Linha</h3>

    <?php 
    $nome = 'Arthur';
    $apelido = 'Tuco';
    $sobrenome = 'Matheus';

    echo "Meu nome é $nome \n $sobrenome";
    ?>

    <br>
    <h3>\t: Tabulação Horizontal</h3>

    <?php 
    $nome = 'Arthur';
    $apelido = 'Tuco';
    $sobrenome = 'Matheus';

    echo "Meu nome é $nome \t $sobrenome";
    ?>

    <br>
    <h3>\\: Barra Invertida</h3>

    <?php 
    $nome = 'Arthur';
    $apelido = 'Tuco';
    $sobrenome = 'Matheus';

    echo "Meu nome é $nome \\ $sobrenome";
    ?>
    
    <br>
    <h3>\$: Sinal de cifrão</h3>

    <?php 
    $nome = 'Arthur';
    $apelido = 'Tuco';
    $sobrenome = 'Matheus';

    echo "Meu nome é $nome \$ $sobrenome";
    ?>

    <br>
    <h3>\u{}: Codepoint Unicode</h3>

    <?php 
     $nome = 'Arthur';
     $apelido = 'Tuco';
     $sobrenome = 'Matheus';
 
     echo "Meu nome é $nome \u{1F602} $sobrenome";
    ?>

    <br>
    <h3>Testando o Heredoc</h3>
    <?php
    $curso = "PHP";
    $ano = date('Y');

    echo <<<FRASE
    Meu some é Arthur e
    eu estou
    estudando a
    linguagem $curso 
    no ano $date
    FRASE;
    ?>

    <br>
    <h3>Testando o Nowdoc</h3>

    <?php 
    $curso = "PHP";
    $ano = date('Y');

    echo <<<'FRASE'
    Meu some é Arthur e
    eu estou
    estudando a
    linguagem $curso 
    no ano $date
    FRASE;
    
    ?>
</body>
</html>