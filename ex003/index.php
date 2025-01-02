<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // $num = 0x1A;
        // echo "O valor da variável é $num";
        // var_dump(false);
        $num = (int) "950";
        var_dump($num);
        $num = (float) $num;
        var_dump($num);

        $nome = "Filipão";
        echo "Meu nome é $nome. \n";
        echo 'Meu nome é $nome. ';

        $nome = "Rodrigo";
        $snome = "Nogueira";
        echo "$nome \"Minotauro\" $snome";
    ?>
</body>
</html>