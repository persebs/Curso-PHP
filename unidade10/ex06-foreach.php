<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_agenda = array("nome" => "Rafael",
                        "telefone" => "98766-2198",
                        "salario" => 5000.00            
);
        foreach ($_agenda as $_contatos => $_valores) {
            echo $_contatos .": ". $_valores."<br>";
        }
    ?>
</body>
</html>