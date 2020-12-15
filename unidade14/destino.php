<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

    <?php
        if (isset($_POST["nome"])){

        $_nome = $_POST["nome"];

        }else{
        $_nome = "Sem definição";

        }

        if (isset($_POST["email"])){

            $_email = $_POST["email"];
    
            }else{
            $_email = "Sem definição";
    
            }
            
    echo "nome: " . $_nome . "<br>";
    echo "email: " . $_email . "<br><br>";


    // Com operador ternário
    


    $_nome2 = isset($_POST["nome"]) ? $_POST["nome"] : "Sem definição";
    $_email2 = isset($_POST["email"]) ? $_POST["email"] : "Sem definição";

    echo "nome ternário: " . $_nome2 . "<br>";
    echo "email ternario: " . $_email2 . "<br>";


    ?>

    </body>
</html>