<?php 

    function arrayDeNumeros($array) {

        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] > 7) {
                $arrayNovo[] = $array[$i];
            }
        }
        return $arrayNovo;
    }

    print_r(arrayDeNumeros([8, 7, 2, 5, 10, 3, 9, 100]));
    
?>
