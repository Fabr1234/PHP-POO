<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <pre>
        <?php
        include_once 'Ficha.php';
        include_once 'Luta.php';
        $UFC = new Luta();
        $l = array();
        echo "<br>";
        $l[0] = new Ficha("Carlos Eduardo","Brasileiro",25,1.89,89,10,7,2);
        echo "<br><br>";
        $l[1] = new Ficha("The Flash","Americano",27,1.87,89,7,0,4);
        
        $UFC->marcarLuta($l[0], $l[1]);
        $UFC->lutar();
        
        ?>
        </pre>
    </body>
</html>
