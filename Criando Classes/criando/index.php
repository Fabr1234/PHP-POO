<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02</title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            
            $c1 = new Caneta;
            $c1->modelo = "BIc Cristal";
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            
            
            var_dump($c1)
            
            
            
            
            
        ?>
    </body>
</html>
