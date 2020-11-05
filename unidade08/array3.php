<?php
    $_salada = array("Laranja","Uva","Abacate");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo "O elemento existe ? " . in_array("Laranja",$_salada);
            echo "O elemento existe ? " . array_search("Laranja",$_salada);
        ?>
    </body>
</html>