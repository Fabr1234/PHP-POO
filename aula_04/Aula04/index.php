<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            $c = new Caneta("BIC","Azul","0.5");
            
            var_dump($c)
        ?>
    </body>
</html>
