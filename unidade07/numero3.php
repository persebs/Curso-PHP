<?php

    $gasolina = 4.99;

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // arredondar para média
            echo round($gasolina)."<br>";

            // arredondar para cima
            echo ceil($gasolina)."<br>";

            // arredondar para baixo
            echo floor($gasolina)."<br>";

        ?>
        
        
    </body>
</html>