<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo prático 01</title>
    </head>
    <body>
        
        <?php
            require_once './ContaBanco.php';
            $c1 = new ContaBanco();
            $c1->setDono('Vitor');
            $c1->abrirConta('cc');       
            $c1->setNumConta(01);
            $c1->depositar(400);
            $c1->sacar(438);
            $c1->pagarMensal();
            $c1->fecharConta();
            
            $c2 = new ContaBanco();
            $c2->setDono('Isa');
            $c2->abrirConta('cp');
            $c2->setNumConta(02);
            $c2->depositar(600);
            $c2->sacar(200);
            $c2->pagarMensal();
            
            
            var_dump($c1);
            var_dump($c2);
            
        ?>
    </body>
</html>
