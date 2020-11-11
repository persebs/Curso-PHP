<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php

        for ($_contador=1; $_contador < 7 ; $_contador = $_contador + 1) { 
            $_sorteio = rand(1,60);
            echo $_sorteio."<br>";
        }
    ?>
</body>
</html>