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
        include 'Ficha.php';
        include 'Luta.php';
        $UFC = new Luta();
        $l = array();
        echo "<br>";
        $l[0] = new Ficha("Carlos Eduardo","Brasileiro",25,1.89,62,10,7,2);
        $l[1] = new Ficha("The Flash","Americano",27,1.87,83.9,7,0,4);
        $l[1]->MostraBasico();
        $UFC->marcarLuta($l[0],$l[1]);
        $UFC->lutar();
        ?>
        </pre>
    </body>
</html>
