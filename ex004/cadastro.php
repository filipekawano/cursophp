<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            $name = $_GET["nome"] ?? "sem nome";
            $surname = $_GET["sobrenome"] ?? "sem sobrenome";
            echo "<p>É um prazer te conhecer, <strong>$name $surname</strong>! Este é o meu site.</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página antgerior</a></p>
    </main>
</body>
</html>