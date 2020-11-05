<?php
    $_salada = array("Laranja", "Abacaxi", "Maçã");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 

                echo $_salada[0]."<br>";
                echo $_salada[1]."<br>";
                echo $_salada[2]."<br>";
                $_salada[] = "Uva";
                echo $_salada[3]."<br>";
                $contar =  count($_salada) + 1;
                echo $contar."<br>";
                $_salada[$contar] = "Pera";
                echo $_salada[$contar]."<br>";
        ?>
        <pre>
        <?php
                print_r($_salada);
        ?>
        </pre>

        
    </body>
</html>