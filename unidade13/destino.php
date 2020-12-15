<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>

        <style>
            img { border:1px solid #ccc }
        </style>
    </head>

    <body>
        
        <?php

            $_salada = array("imagens/laranja.jpg","imagens/maca.jpg","imagens/abacate.jpg");
            $_codigo = $_GET["codigo"];
        ?>

        <img src="<?php echo $_salada[$_codigo]?>">

    </body>
</html>