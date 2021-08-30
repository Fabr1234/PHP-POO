<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'ContaBanco.php';
            $p1 = new ContaBanco(); //J
            $p2 = new ContaBanco(); //C
            $p1->abrirConta("CC");
            $p1->setDono("Jubileu");
            $p1->setNumConta(0001);
            $p2->abrirConta("CP");
            $p2->setDono("Creuza");
            $p2->setNumConta(0002);
            
            $p1->depositar(500);
            $p2->depositar(300);
            
            var_dump($p1);
            var_dump($p2);
        ?>
        </pre>
    </body>
</html>
