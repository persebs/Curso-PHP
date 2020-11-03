<?php
    $_fumante = true;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

        <?php
            echo "É fumante? " . $_fumante . "<br>";
            //1 é verdadeiro e vazio é false
            echo "É boleana? " .is_bool($_fumante) ."<br>";
        ?>

    <body>
    </body>
</html>