<?php 

    function dadosPessoais($nome, $idade) {

        if (is_int($idade)) {
            echo "Olá, eu sou $nome e tenho $idade anos.<br>";
        }
        else {
            echo "Insira um número inteiro para a idade.<br>";
        }
        
    }

    dadosPessoais("Filipe", 32);
    dadosPessoais("Cecília", 2);
    dadosPessoais("Robô", 50);

?>