<?php 

    include_once "backend.php";

?>

<h1>Seja bem-vindo ao nosso site</h1>
<p><?php echo $nome; ?> Veja as nossas ofertas</p>

<h2>Confira nossos principais produtos:</h2>

<ul>
    <?php

        for ($i = 0; $i < count($produtos); $i++) {
            echo "<li>$produtos[$i]</li>";
        }
    
    ?>
</ul>
