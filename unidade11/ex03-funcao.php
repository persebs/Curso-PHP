<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        function converterFC($_tempo){
            return ($_tempo * 1.8) + 32;
        }
        echo converterFC(25);
    ?>
</body>
</html>