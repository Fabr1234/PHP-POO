<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Video.php';
            require_once 'Usuario.php';
            require_once 'Visualizacao.php';
            $v[0] = new Video("PapaJohns");
            $v[1] = new Video("Vamo bora");
            $v[2] = new Video("Aula CHata");
            $u[0] = new Usuario("Fabricio", 19, "M","Fabr1234");
            $vis[0] = new Visualizacao($u[0], $v[1]);
            print_r($vis[0]);
        ?>
        </pre>
    </body>
</html>
