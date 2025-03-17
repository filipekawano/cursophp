<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Bancária</title>
</head>
<body>
    <?php 
        require_once 'ContaBanco.php';
        $c1 = new ContaBanco;
        $c1->numConta = 1111;
        $c1->abrirConta();

        var_dump($c1);
    
    ?>
</body>
</html>