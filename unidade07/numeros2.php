<?php
    $salario = 1095; //número inteiro - É racional onde não tem fração
    $gasolina = 4.55; //número fracionado
    $telefone = "4781-2893";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo"O $salario é um número? " . is_numeric($salario)."<br>"; //1 significa que é um número
            echo"O $gasolina é um número? " . is_numeric($gasolina)."<br>";
            echo"O $telefone é um número? " . is_numeric($telefone)."<br>"."<br>";
            // testar se é inteiro
            echo"O $salario é um número? " . is_int($salario)."<br>"; //1 significa que é um número
            echo"O $gasolina é um número? " . is_int($gasolina)."<br>";
            echo"O $telefone é um número? " . is_int($telefone)."<br>"."<br>";

            // testar se é float (fracionado)

            echo"O $salario é um número? " . is_float($salario)."<br>"; //1 significa que é um número
            echo"O $gasolina é um número? " . is_float($gasolina)."<br>";
            echo"O $telefone é um número? " . is_float($telefone)."<br>";

        ?>
        
        
    </body>
</html>