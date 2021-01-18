<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Determinando visibilidade</title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1->modelo = 'BIC';
            $c1->cor = 'rosa';
            
            var_dump($c1);
            
            $c1->tampar();
            $c1->rabiscar();
            
        ?>
    </body>
</html>
