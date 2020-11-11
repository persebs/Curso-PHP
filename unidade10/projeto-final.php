<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php                    
            $_megasena = array();
            $_contador = 0;

            while ($_contador < 6) {
                $_sorteio = rand(1,60);

                if(!in_array($_sorteio, $_megasena)){
                    $_megasena[] = $_sorteio;
                    echo $_megasena[$_contador]."<br>";
                    $_contador++;
                }


            }
            
        ?>
    </body>
</html>