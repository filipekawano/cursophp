<?php 

    function checaNumero($num) {

        if ($num % 2 == 0) {
            echo "O número $num é PAR.<br>";
        } else {
            echo "O número $num é ÍMPAR.<br>";
        }
    }

    checaNumero(11);
    checaNumero(110)

?>