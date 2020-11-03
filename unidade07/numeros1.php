<?php 
    $salario = 1100;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo "Multiplicação: ". $salario * $meses ."</br>";
            echo "Divisão: ". $salario / 2 ."</br>";
            // Exponencial
            echo "Raiz quadrada: " . pow(6,3) . "</br>";

            // Raiz Quadrada

            echo "Raiz Quadrada: " . sqrt(81)."</br>";

            // Randômico Generica
            echo "Randomico: " . rand() . "</br>";

            // Randômico entre um intervalo
            echo "Randomico no intervalo " . rand(1,5) . "</br>";
            
            // Valor absoluto converte pra maiusculo
            echo "Número absoluto: " . abs(-50);
            
        ?>
    </body>
</html>