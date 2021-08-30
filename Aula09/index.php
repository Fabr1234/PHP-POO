<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        include_once 'Pessoa.php';
        include_once 'Livro.php';
        $p = array();
        $l = array();
        $p[0]= new Pessoa("Fabricio", 19, "Masculino");
        $l[0] = new Livro("Carmatage", "Carlos Macaco", 150, $p[0]->getNome());
        $l[1] = new Livro("Ph é um otario", "Bolsonaro", 100, "Carlos");
        $l[0]->Detalhes();
        echo "<br><br>";
        $l[1]->Detalhes();
        ?>
        </pre>
    </body>
</html>
