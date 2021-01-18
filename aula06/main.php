<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Encapsulamento</title>
    </head>
    <body>
        <h1>Projeto | Controle Remoto</h1>
        <pre>
        <?php
            require_once './ControleRemoto.php';
            $c1 = new ControleRemoto();
            $c1->ligar();
            $c1->play();
            $c1->abrirMenu();
                          
            var_dump($c1);
            
        ?>

</pre>
    </body>
</html>
